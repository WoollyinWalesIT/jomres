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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Rýchla rezervácia');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Zobraziť profily');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Všeobecné nastavenia');
jr_define('_JOMRES_COM_MR_BACK', 'Naspäť');
jr_define('_JOMRES_COM_MR_YES', 'Áno');
jr_define('_JOMRES_COM_MR_NO', 'Nie');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Vytvoriť');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nové ubytovacie zariadenie');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Nový hosť');
jr_define('_JOMRES_COM_MR_SAVE', 'Uložiť');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Meno');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Príchod ');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odchod ');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Užívateľské meno');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESLEVEL', 'Úroveň prístupu');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Užívateľ nastavený');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEHOTEL', 'Zmena ubytovacieho zariadenia');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_CHANGEACCESLEVEL', 'Zmena úrovne prístupu');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Vsetky rezervácie');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Úprava rezervácie');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Prích/Odch');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Hosť');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Izba');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Platba');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Meno');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Priezvisko');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Ostatné požadavky');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Upozornenie: ostatné požiadavky môžu byť k dispozícií za príplatok');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Stornovať rezerváciu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Číslo domu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Mesto');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PSČ');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Pevná linka');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Mobil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nemožno stornovať, klient je už ubytovaný.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Záloha nezaplatená');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potvrdenie storna');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervácia stornovaná');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dní do príchodu');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Typ rezervácie');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Čierna rezervácia');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepcia');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Názov izby');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Izba');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Poschodie');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Pre hendikep.?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. počet osôb');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Typ izby');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Popis typu izby');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Zoznam vybavenia izby');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Zaplatená záloha');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Aktualizácia zálohy');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Celkovo na zaplatenie');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Záloha ref.');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervácia');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Záloha');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Záloha uložena');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Naše izby');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Ubytovacie zariadenie');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Typ izby');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Upraviť');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Meno');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Priezvisko');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Dom');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Mesto');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'PSČ');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefón - pevná');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Telefón - mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Výber z ponúkaných');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Počet dní');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Celkom');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Nastavenie ubytovacích zariadení a izieb');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Izby');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Vybavenie izieb');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Typy izieb');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Ubytovacie zariadenie');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Vybavenie ubytovacieho zariadenia');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Izba');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Typ');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Názov');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Číslo izby');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Poschodie');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. počet osôb');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Vybavenie');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Upraviť položku');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Vybavenie izby');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Popis vybavenia');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Vybavenie izby pridané');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Vybavenie izby aktualizované');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Typ izby');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Typ izby skrátene.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Typ izby detailne');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Typ izby pridaný');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Upraviť položku');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Názov');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Mesto');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Región');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Krajina');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'PSČ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'www');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Vybavenie');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Ubytovacie zariadenie aktualizované');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Vybavenie ubytovacieho zariadenia');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Vybavenie ubyt. zariadenia skrátene');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Vybavenie ubyt. zariadenia detailne');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Vybavenie ubyt. zariadenia aktualizované');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Cenníky');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Cenník');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Popis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Platný od');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Platný do');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Sadzba za noc');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min. počet dní');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max. počet dní');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. počet osôb');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. počet osôb');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Typ izby');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorovať PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Povoliť víkendy');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Upraviť položku');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Klonovať položku');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Cenník odstránený');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Upraviť cenník');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervácia uložená');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Ubytovať hosťa');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Ukončiť ubytovanie hosťa');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Zoznam rezervácií');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Control Panel');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Správa hostí');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Správa ubyt. zariadenia');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Zistiť dostupnosť.');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Meno');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Priezvisko');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Číslo domu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Mesto');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PSČ');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefón - pevná');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefón - mobil');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Zadaným parametrom bohužiaľ nezodpovedá žádna izba.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Ďakujeme za prejavený záujem a dúfame, že sa Vám Vaša cesta bude páčiť.<br><br> <b>Berte prosím na vedomie, že Vaša objednávka je zatiaľ predbežná až do doby, pokiaľ Vám ju nepotvrdíme záväzne e-mailom.</center>');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Ubytovanie hosťa');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Hosť ubytovaný');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Ukončiť ubytovanie hosťa');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Príplatky');
jr_define('_JOMRES_COM_A_TARIFFS', 'Cenníky & meny');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload súboru');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Príplatok za 1 os.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Ak si prajete účtovať túto položku, nastavte hodnotu na ÁNO');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Príplatok za 1 osobu');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Požadovaná záloha v percentách?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Prajete si zálohu účtovať percentom z celkovej sumy rezervácie? Ak nie, bude použitá paušálna suma.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Požadovaná výška zálohy');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Za osobu, za noc (PPPN)');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Ak si prajete účtovať položku podľa PPPN (per-person-per-night) zadajte hodnotu ÁNO. Ak nie, cena bude kalkulovaná ako PRPN (per-room-per-night).');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Veľkosť súboru');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. veľkost obrázku v KB');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Obsadené');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detaily objednávky');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Pripomname, že rezervácia je právnou zmluvou, takže aj v prípade zrušenia, či skrátenia rezervácie ste povinní plniť dohodnuté podmienky.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stornovanie - skrátenie rezervácie</i> Rezervácia sa dá zrušiť iba písomnou formou. Penále za zrušenie/krátenie rezervácií sú nasledovné:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Deň príchodu do 14 dní');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Tlač potvrdenia rezervácie');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Tlač faktúry (daňového dokladu)');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Počet osôb: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena za noc: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Spolu');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Tlač faktúry');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Pridať službu k vyúčtovaniu');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Popis služby');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Hodnota služby');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Ostatné účtované položky');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Položka pridaná k vyúčtovaniu');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Upload obrázku');
jr_define('_JOMRES_FILE_UPLOAD', 'Upload súboru');
jr_define('_JOMRES_COM_A_ODDS', 'Rôzne');
jr_define ('_JOMRES_COM_A_ERRORCHECKING', 'Zoznam minikomponentných hovorov');
jr_define ('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Prepnutím na Yes zobrazíte protokol minikomponentov volaných v spodnej časti stránky po dokončení Jomres. Zakáže tiež funkciu vnútorného presmerovania. Je to užitočné, ak sa pokúšate zistiť, ktoré minikomponenty vykonávajú určité služby. ');
jr_define('_JOMRES_FILE_DELETE', 'Odstrániť súbor');
jr_define('_JOMRES_FILE_DELETED', 'Súbor odstránený');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Odstrániť');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Izbu nemožno odstániť, obsahuje platné rezervácie. Zrušte rezervácie a skúste znovu.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Izba odstránená');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Odstrániť vybavenie izby');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Vybavenie izby nemožno odstrániť kvôli existujúcim väzbám. Zrušte väzby na izby a skúste znovu.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Vybavenie izby odstránené');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Odstrániť vybavenie ubyt. zariadenia');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Vybavenie ubytovacieho zariadenia nemožno odstrániť kvôli existujúcim väzbám. Zrušte väzby na dané ubyt. zariadenie a skúste znovu.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Vybavenie ubytovacieho zariadenia odstránené');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Odstrániť typ izby');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Typ izby odstránený');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Odstrániť ubyt. zariadenie');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Ubytovacie zariadenie odstránené');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nemáte oprávnenie odstrániť toto ubytovacie zariadenie.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Šírka plného náhľadu obrázku');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa lokality');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Popis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-in');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivity v okolí');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Ako sa k nám dostanete');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Letisko');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Iná doprava');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Pravidlá a výhrady');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Návštevníci môžu rezervovať online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Aby si návštevníci mohli rezervovať online, nastavte hodnotu ÁNO.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervácie na fixné obdobie');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Zadajte hodnotu ÁNO, ak chcete rezervácie na fixné obdobie. Ak je hodnota NIE uistite sa, že hodnota poľa "Prednastavený deň príchodu" nieje nastavená na ÁNO (ak nechcete nútiť ľudí k príchodu v určitý deň) - v opačnom prípade nebude kalendár dostupnosti obsahovať dostatočné množstvo možností.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Obdobie rezervácie: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezervácia izbieb');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max. obdobie rezervácie, napr. 3x 7 rezervačných období = 21 dní');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Je toto apartment/chalupa/vila?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Revízia rezervácie');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potvrdenie rezervácie');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'pondelok');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'utorok');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'streda');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'štvrtok');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'piatok');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'sobota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'nedeľa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'po');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'ut');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'st');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'št');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'pi');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'so');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'ne');
jr_define('_JOMRES_COM_A_AVLCAL', 'Kalendár dostupnosti');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Farba písma dnešného dátumu');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Farba písma dní v mesiaci');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Farba pásma dní mimo zobrazený mesiac');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Farba pozadia bunky dní, keď je ubyt. zariadenie/izba volné(á)');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Farba pozadia bunky dní mimo zobrazený mesiac');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Farba pozadia buniek obsadených dní');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Farba pozadia pre predbežné rezervácie (bez záloh)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Farba pozadia buniek dní v minulosti');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Obsadené');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Voľné');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Predbežná rezervácia');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Prednastavený deň príchodu');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Len pre webstránky ponúkajúce fixné obdobie rezervácií. Zadajte požadovaný počiatočný deň fixného obdobia.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fixný deň príchodu');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Dĺžka pobytu (dni)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Zobraziť kalendáre dostupnosti?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Ak chcete zobraziť kalendár dostupnosti, nastavte hodnotu ÁNO, ');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Obsadenosť');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Na zobrazenie objednávkového formulára kliknite na voľný dátum.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Čierne rezervácie');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nové čierne rezervácie');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Odstrániť hosťa');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Hosť odstránený');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Hosta alebolo možné odstrániť kvôli existujúcej rezervácií. Stornujte rezerváciu a skúste znovu.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Ľubovoľné');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Formát výstupu kalendára');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Formát vtupu kalendára');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Umožňuje užívateľovi meniť vstupný formát kalendára Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Obdobie fixných rezervácií s krátkými prestávkami');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Dĺžka prestávok');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publikované');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit systému');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Dátum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Uživateľ (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Podľa dátumu');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Stav');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Nevybavené príchody');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dnešné príchody');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Aktuálni hostia');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Dnešné odchody');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Neskoré odchody');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Problém! Neskorý príchod');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Vytvor. izba');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Aktualiz. izby');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Odstrán. izby');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Vytvor. vybavenie izby');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Aktualiz. vybavenia izby');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Odstrán. vybavenia izby');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Vytvorenie ubyt. zariadenia');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Aktualizácia ubyt. zariadenia');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Odstránenie ubyt. zariadenia');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Úprava nastavenia ubyt. zariadenia');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Zverejnenie ubyt. zariadenia');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Vytvorený cenník');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Aktualiz. cenník');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Pridaná cena služieb');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Ubytovaný hosť');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Zadaná záloha');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Vytvorený hosť');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Aktualiz. hosť');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervovaná izba');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Vytvorený doplnok');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Aktualiz. doplnok');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Odstránený doplnok');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publikovaný doplnok');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Vložená čierna rezervácia');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Odstránená čierna rezervácia');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Doplnky');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Popis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Názov');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Doplnok aktualizovaný');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Upraviť položku');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Doplnok odstránený');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Správa doplnkov');
jr_define('_JOMRES_COM_A_EXTRAS', 'Zobraziť doplnok počas rezervácie?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Ak chcete počas rezervácie zobraziť doplnok, zadajte hodnotu ÁNO');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Voliteľné doplnky ');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Počiatočný dátum čiernej rezervácie');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Konečný dátum čiernej rezervácie');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Čierne rezervácie');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Počas rezervácie došlo k chybe, jedna alebo viacej izieb niesu voľné');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Izby zahrnuté v čiernej rezervácií');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Žiadne čierne rezervácie');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Počet hvezdiček');
jr_define('_JOMRES_COM_A_RESET', 'Reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervácia stornovaná');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Hľadajte tu: ');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Symbol meny');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Kód meny');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Kliknite pre daľšie informácie');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Obmedziť predpredaj?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Ak chcete obmedziť predpredajné rezervácie, zvoľte hodnotu ÁNO (a v daľšom poli zadajte počet dní). Ak nastavíte ÁNO a užívateľ skúsi nastaviť viac ako n dní v predstihu, dátum príchodu bude nastavený na dnes');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Dni vymedzené na predpredaje:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Daň');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Daň za izbu');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fixná daň');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Percentuálna daň');
jr_define('_JOMRES_COM_A_EUROTAX', 'DPH');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'DPH %');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Zálohovať všetky záznamy');
jr_define('_JOMRES_FRONT_TARIFFS', 'Ceny');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Cenník');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Popis cenníku');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Typ izby');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Platný od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Platný do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'za osobu a noc - PPPN');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'za noc');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'bez započtania víkendu/ov');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Min. počet dní');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Max. počet dní');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. počet osôb');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. počet osôb');
jr_define('_JOMRES_FRONT_PREVIEW', 'Prehľad');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Zapnút úpravy?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Aktualizovaný text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Úprava jaz. nastavenia');
jr_define('_JOMRES_FRONT_PTYPE', 'Typ zariadenia');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Zoznam typov zariadení');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Upraviť typ zariadenia');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Typ ubyt. zariadenia');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Popis typu ubyt. zariadenia');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Typ ubyt. zariadenia uložený');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Typ ubyt. zariadenia odstránený');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Výzva k úhrade');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Žiadne extra služby na naúčtovanie');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Záloha');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Celková suma');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Suma splatná pri rezervácií');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Vyberte požadovaný typ platby počas rezervácie - zálohu alebo plnú sumu.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Počet zobrazených mesiacov v kalendári');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Koľko má byť zobrazených mesiacov v kalendári dostupnosti?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Platobné brány');
jr_define('_JOMRES_COM_A_CANCEL', 'Zrušiť');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Vyberte izbu/y, ktoré chcete vyradiť z používania a príslušné dátumy. <br>Pokiaľ izba nieje označená, nemôže byť zahrnutá do čiernych rezervácií tak dlho, kým niesú dokončené/zrušené už existujúce rezervácie. <br>Akonáhle ste vybrali adekvátne dátumy, kliknite na modré tlačtko Apply/Vykonať - vykoná sa opätovný dotaz na dostupnosť izieb.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Zrejme ste boli pre dlhú nečinnosť odhlásení zo systému.</b> Znovu sa prihláste.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Dôvod');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Používať platobné brány?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Vyberte preferovanú platobnú metódu.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Platobná metóda aktívna?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Upravené nastavenie plug-inu');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Vložené nastavenie plug-inu');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Upraviť kreditnú kartu');
jr_define('_JOMRES_COM_A_EDITICON', 'Upraviť veľkosť ikon');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Prezentácia');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Zobraziť linku k prezentácií?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Zobraziť prezentáciu inline?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Prezentácia');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Zobraziť linku k cenníkom?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Povoliť pop-up okná?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload obrázkov prezentácie');
jr_define('_JOMRES_A_TABS_MISC', 'Rôzne');
jr_define('_JOMRES_A', 'Nastavenia webstránky');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Použiť všeob. vybavenie ubyt. zariadení');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Vyberte požadovaný plug-in vyhľadávania.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Dotazu nezodpovedá žiaden výsledok. Zadajte nové kritériá vyhľadávania.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Ste si istí?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervovať izbu');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervovať toto ubytovacie zariadenie');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Zobraziť ceny inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detailné informácie');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Dostupnosť izieb');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Zobraziť adresu pod touto linkou');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Zobraziť detailné informácie pod touto linkou');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zobraziť izby a dostupnosť pod touto linkou');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Paušál');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Priemery');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Vyberte tarifný model');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Na výpočet cien existujú dva modely - paušálny a priemerový. Ak zvolíte paušálny, ceny a cenníky sú definované jednotlivými obdobiami rezervácie (napr. na rovnaké obdobie ponúkať cenník polpenzie a plnej penzie). Ak zvolíte priemerový systém, ten na rezervované obdobie vyhľadá a spriemeruje všetky dostupné ceny.');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Zobraziť zadáný dátum odchodu?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Ak chcete zakázať zobrazenie poľa dátumu odchodu, zadajte hodnotu NIE. V tomto prípade bude automaticky ako deň odchodu použitý deň následujúci po dni príchodu.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Obmedzenie popisu');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Obmedzenie počtu zobrazených znakov použitých na popis jednotlivých ubytovacích zariadení.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Použitý formát date()?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publikovať');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Nepublikovať');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Použiť obecné typy izieb');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Na priradenie obrázku k tomuto typu izby, najprv nahrajte požadované obrázky do adresára /images/stories/jomres/rmtypes/. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Zadať farbu pozadia chybového poľa');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Východzia krajina rezervačného formulára');
jr_define('_JOMRES_JAVASCRIPT_', 'Červene zvýraznené položky sú povinné.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Môžu uživatelia registrovať svoje ubytovacie zariadenia?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Ak chcete, aby užívatelia mohli registrovať svoje ubytovacie zariadenia bez kontaktu s administrátorom, zadajte ÁNO.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Červene zvýraznené položky sú povinné.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Vytvorené ubyt. zariadenie');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Zobraziť kalendár od začiatku roku?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendár dostupnosti zobrazuje dátumy od začiatku aktuálneho roku.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Počet dostupných izieb');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Naspäť na detaily ubyt. zariadenia');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Typy izieb');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limit náhodného vyhľadávania');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Zobraziť Google menový prevodník ?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Previesť cenu na:');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Umožniť užívateľom použiť HTML editor?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Na vytvorenie rezervácie použite tento formulár, nápovedu ku každej položke zobrazíte umiestnením kurzoru na ikone "i". Najskôr zadajte dátum príchodu, dátum odchodu a počet hostí, následne vyberte z dostupných izieb. Zadajte akékoľvek zvláštne prianie alebo požiadavku (tzv. doplnok) a vložte Vaše kontaktné údaje. Skontrolujte zadané údaje a odošlite kliknutím na tlačítko, ktoré sa objaví po zadaní nevyhnutných informácií.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Na vytvorenie rezervácie použite tento formulár, nápovedu ku každej položke zobrazíte umiestnením kurzoru na ikone "i". Najskôr zadajte dátum príchodu, dátum odchodu a počet hostí. Zadajte akékoľvek zvláštne prianie alebo požiadavku (tzv. doplnok) a vložte Vaše kontaktné údaje. Skontrolujte zadané údaje a odošlite kliknutím na tlačítko, ktoré sa objaví po zadaní nevyhnutných informácií.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Detaily rezervácie ');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Zadajte požadované detaily Vašej rezervácie');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Dostupnosť');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Vyberte požadované izby');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Tu zistíte, či je požadované zariadenie k dispozícií.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Voliteľné doplnky ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Zadajte všetky požadované doplnky, ktoré si prajete zahrnúť do rezervácie');
jr_define('_JOMRES_COM_PERDAY', ' za noc');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Vaša adresa ');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Zadajte prosím Vaše kontaktné údaje. Okrem čsla mobilného telefónu sú všetky polia povinné.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Voľné izby');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Vybrané izby');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Najbližší možný dátum príchodu: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Za noc:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Spolu:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Doplnky:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'DPH:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Zľava:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Spolu k úhrade:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hostia');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Kliknutím pridáte izbu medzi vybrané');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Kliknutím odoberiete izbu z vybraných');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Typy hostí');
jr_define('_JOMRES_VARIANCES_TYPE', 'Typ');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Typ zákazníka, napr. deti 5-10 rokov, študent apod.');
jr_define('_JOMRES_VARIANCES_NOTES', 'Poznámky');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Poznámky k danému typu hostí');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maximum');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maximálny počet hostí daného typu, ktorý môže byť zadaný v rámci rezervácie');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Percentuálne');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Zadané číslo je percentom základnej ceny za izbu. Pokiaľ je vybrané NIE, potom je zadané číslo jednodcho pripočtané/odčtané zo základnej ceny izby.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Pridať inú sadzbu?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Iná sadzba je pričtaná, či odčítaná zo základnej ceny za izbu. Pokiaľ si prajete ju použíť ako zľavu zo základnej ceny izby, zadajte NIE.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Iná sadzba');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Hodnota inej sadzby');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Poradie upravených typov hostí');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Odstránený typ hostí');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vytvorený typ hostí');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Aktualizovaný typ hostí');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Aktualizovaný typ hostí');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Zobraziť linku na zoznam izieb v detailnom popise ubyt. zariadenia?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Zobraziť <b>iba</b> zoznam dostupných izieb v kalendári?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Ak chcete zakázať zobrazenie záhlavia a detailov ubyt. zariadenia, zadajte hodnotu na ÁNO, kalendár dostupnosti izieb bude viditeľný iba v sekci detailného popisu ubyt. zariadenia. Vhodné len pre uživateľov prenajímajúcich SPRs (single room properties - jednoizbových zariadení) ako sú apartmány, chalupy apod.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Minimálny interval Prích-Odch');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimálny interval mezi dátumami príchodu a odchodu v rezervačnom formulári.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Formulár zoznamu izieb zobrazí číslo izby');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Formulár zoznamu izieb zobrazí názov izby');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Formulár zoznamu izieb zobrazí názov cenníku/ceny');
jr_define('_JOMRES_ORDER', 'Uložiť');
jr_define('_JOMRES_REQUIREDFIELDS', 'Požadované');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dní do príchodu');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimálny počet dní, ktoré musia ubehnúť pred dátumom príchodu (od "dnes").');
jr_define('_JOMRES_DTV', 'Varianty dátumového typu');
jr_define('_JOMRES_DTV_DOW', 'Deň týždňa');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Prednastavený typ hosťa');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Prednastavené číslo prvého typu hosťa; ak používate typy hostí, toto bude východzie číslo nastavené prvému typu hosťa.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Umožniť online rezervácie len registrovaným užívateľom?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Prepáčte, online rezervácia možná len registrovaným užívateľom. Zaregistrovať sa môžete kliknutím sem.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Farba písma liniek k aktuálnym rezerváciám');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Okraje víkendov');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Izba rezervovaná');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Čierna rezervácia');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokrúhliť zálohu na celé číslo nahor?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Účtovať zálohy?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Tarify ako týždenné hodnoty?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Ak chcete uchovávať tarify týždenne, zadajte hodnotu ÁNO. Druhá možnosť je denný cyklus.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Týždenná sadzba');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Opakované fixné dátumy príchodu: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Ak sú vybrané fixné dátumy príchodu, dátumy môžu byť zobrazené v zozname.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Nesprávny dátum príchodu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Nesprávny dátum odchodu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervácia je príliš krátka, minimálny počet dní mezi príchodom a odchodom je ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Váš interval je ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Neplatný typ hosťa');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Zadajte počet a typ hostí');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Počet požadovaných hostí je nad limitom dostupným v cenníku/ponuke');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Zadali ste viac izieb než je počet hostí, odoberte nadbytočné izby kliknutím na ich názov.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Počet postelí je nižší než počet hostí');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Musíte vybrať viac izieb');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Vyberte izbu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Zadajte krstné meno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Zadajte priezvisko');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Zadajte číslo domu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Zadajte názov ulice');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Zadajte mesto');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Zadajte región');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Zadajte PSČ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Zadajte krajinu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Zadajte číslo pevnej tel. linky');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Zadajte číslo mobilného telefónu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Zadajte e-mail');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Máme voľné miesta!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Žiadne izby neboli vybrané');
jr_define('_JOMRES_BOOKING_NUMBER', 'Číslo rezervácie');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Súhlas s rezerváciou, farba pozadia poľa správy');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Vypísať premenné šablóny?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Ak chcete vidieť hodnoty DHTML premenných na frontende webu, zadajte ÁNO. Užitočné pri vylaďovaní šablóny.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Hodnota je percento');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Ak chcete použiť hodnotu kalkulácie na jednu osobu ako percento, zadajte ÁNO. Inak bude použitá paušálna suma.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Limit dostupných izieb/cenníkov');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Ak chcete limitovať počet vypísaných dostupných izieb a cenníkov v objednávke, zadajte požadovanú hodnotu. Hodnota 0 zakazuje použitie funkcie limitu a žiadne limity nebudú použité. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Žiadne voľné miesta!');
// Introduced in v2.5
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Rezervovať: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Všeobecné editovanie?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Pozor na túto funkciu. Ak nastavíte ÁNO, tento mód ovplyvní VŠETKY popisné texty všetkých ubytovacích zariadení v systéme.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO', 'Použiť všeobecnú menu?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCYYESNO_DESC', 'Ak nastavíte ÁNO, všetky ubytovacie zariadenia budú používať rovnakú menu (napr. & euro ;)');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Symbol všeobecnej meny');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponent skrytý');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Ak nechcete, aby sa modul zobrazoval, nastavte ÁNO.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Iba víkendy');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Víkendové dni');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Nastavte si víkendové dni. Cenníky, ktoré berú do úvahy víkendy sa budú riadiť týmo výberom pri generovaní zoznamu izieb.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Pred pridaním akýchkoľvek informácií o ubyt. zariadení, zvoľte krajinu');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Pred uploadom obrázkov ubyt. zariadenia, najskôr uložte zmeny');
jr_define('_JOMRES_TARIFFSFROM', 'Ceny od - ');
jr_define('_JOMRES_SEARCH_ALL', 'Všetko');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Vyhľadať podľa krajiny');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Vyhľadať podľa regiónu');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Vyhľadať podľa mesta');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Vyhľadať podľa vybavenia.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Vyhľadať');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Vpíšte hľadané slovo do rámika a stlačte tlačítko.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Vyhľadať slovo/slová: ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Uveďte dátumy príchodu a odchodu a stlačte tlačítko. Vyhľadajú sa ubytovacie zariadenia vyhovujúce zadaným kritériám.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Zoznam ubytovacích zariadení podľa typu zariadenia.');
jr_define('_JOMRES_SEARCH_RTYPES', 'Zoznam ubytovacích zariadení podľa typu izieb');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Prednastavené');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Názov ubyt. zariadenia');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Región ubyt. zariadenia');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Mesto ubyt. zariadenia');
jr_define('_JOMRES_SORTORDER_STARS', 'Hviezdičky');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Popis ubytovacích zariadení - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervačný formulár');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Aktualizujte údaje o adrese');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Kontrola obsadenosti izieb<br/>(Výber izieb bude nastavený)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Kontrola obsadenosti');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Úprava Vášho výberu doplnkov');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Zmena Vášho výberu izieb');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Úprava informácií o Vašej adrese');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Prepáčte, niektoré polia boli vyplnené nesprávne.');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Obrázok miestnosti');
jr_define ('_JOMRES_CURRENCYFORMAT', 'formát meny');
jr_define ('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Možnosti vyhľadávania');
jr_define ('JOMRES_COM_A_AVAILABLELOGS', 'Protokolové súbory');
jr_define ('JOMRES_COM_A_MESSAGE', 'Správa');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define ('JOMRES_COM_A_TARIFFMODE_NORMAL', 'normálny');
jr_define ('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Rozšírené');
jr_define ('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Micromanage');
jr_define ('JOMRES_COM_A_TARIFFMODE', 'režim konfigurácie tarify');
jr_define ('JOMRES_COM_A_TARIFFMODE_DESC', "<b> Upozornenie: Prepínanie medzi rôznymi druhmi taríf môže mať za následok stratu dát. K tomu si pozrite nasledujúcu poznámku </b>.
<br/> <br/>
Máte tri možnosti konfigurácie taríf. <br/>
Normálny režim: Na každý typ miestnosti budete mať jednu tarifu, ktorá platí ďalších 10 rokov. <br/>
Mikromanažment: Cenu môžete upravovať každý deň pre každú izbu/typ nehnuteľnosti. <br/>
Rozšírené: \"starý\" Jomresov spôsob správy taríf. <br/>
<br/>
Rôzne tarifné režimy vám umožňujú vybrať si spôsob konfigurácie taríf, ktorý vám najviac vyhovuje. <br/>
Normálny režim je najjednoduchší, ale je najľahšie pochopiteľný, pretože bude krížiť referenčné miestnosti a tarify s typmi izieb/nehnuteľností a umožní vám konfigurovať izby a ceny na tej istej stránke. <br/>
Mikro správa vám umožňuje meniť sadzby na dennej báze bez toho, aby ste museli spravovať balíčky taríf, a to pomocou vzájomného krížového porovnávania mnohých rôznych taríf. Výsledkom je, že sa vám na určitý čas vytvorí niekoľko taríf, ale nemôžete ich vrstviť navzájom. <br/>
Rozšírený režim vám umožní vytvoriť miestnosť a priradiť ju k typu miestnosti. Potom vytvoríte tarifu a priradíte TO k typu miestnosti. Pomocou tejto metódy je možné 'vrstviť'tarify nad sebou, napríklad pre typ miestnosti 'Manželská posteľ'môže byť jeden tarif pre nocľah s raňajkami a druhý pre nocľah, raňajky a večeru. Pokročilá metóda vyžaduje trochu viac pozornosti k detailom, pretože je možné odpojiť izbu alebo tarifu od typu miestnosti/nehnuteľnosti alebo nesprávne nastaviť platné dátumy a dátumy, ale poskytuje možnosti konfigurácie, ktoré ostatné režimy neponúkajte. <br/>
<br/>
Pretože normálny a mikromanažérsky režim vyžadujú na fungovanie tarifného režimu špecifické nastavenia miestností a taríf, môže byť potrebné, aby systém resetoval niektoré údaje, aby boli aktuálne konfigurácie taríf kompatibilné s aktuálnym režimom úprav taríf. <br/>
<br/>
Normálne -> Rozšírené. Žiadna zmena. Existujúce tarify zostanú zachované. <br/>
Normálne -> Mikromanáž. Všetky existujúce tarify budú odstránené. <br/>
Rozšírené -> Normálne. Všetky existujúce tarify budú odstránené. <br/>
Rozšírené -> Mikromanáž. Všetky existujúce tarify budú odstránené. <br/>
Mikromanage -> Rozšírené. Všetky existujúce krížové odkazy medzi tarifami budú odstránené, ale samotné tarify zostanú. <br/>
Mikromanage -> Normálne. Všetky existujúce krížové referencie a tarify budú odstránené. <br/> ");
jr_define ('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Zobraziť zoznam izieb na stránke podrobností nehnuteľnosti?');
jr_define ('JOMRES_PROPERTYTYPE', 'Property type');
jr_define ('JOMRES_MAXPEOPLEINROOM', 'Maximálny počet osôb na izbu');
jr_define ('JOMRES_MAXPEOPLEINBOOKING', 'Max ľudí v rezervácii');
jr_define ('_JOMCOMP_BOOKINGNOTES_ADD', 'Pridať poznámku');
jr_define ('_JOMCOMP_BOOKINGNOTES_EDIT', 'Upraviť poznámku');
jr_define ('_JOMCOMP_BOOKINGNOTES_DELETE', 'Odstrániť poznámku');
jr_define ('_JOMCOMP_BOOKINGNOTES_VIEW', 'Zobraziť poznámky');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'pridaná nová poznámka');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Upravená poznámka');
jr_define ('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Odstránená poznámka');
jr_define ('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Zoznam rezervácií');
jr_define ('_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezervácie');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKING', 'Zobraziť rezerváciu');
jr_define ('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Zobraziť obľúbené');
jr_define ('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Zatiaľ ste nepridali žiadne obľúbené!');
jr_define ('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Property type');
jr_define ('_JOMCOMP_WISEPRICE_TITLE', 'múdra cena');
jr_define ('_JOMCOMP_WISEPRICE_ACTIVE', 'aktívny');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Tento doplnok vám umožňuje dynamicky povoliť a konfigurovať ceny vašich izieb.');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Väčšina firiem prepočíta ceny izieb na základe počtu miestností požadovaného typu, ktoré sú k danému dátumu k dispozícii. To im umožňuje ponúkať zľavy na typ izby, ktorá nie je v danom čase zaneprázdnená. obdobie s cieľom prilákať podnikanie, ktoré by sa inak mohlo zmeškať. <br/> Povolenie a konfigurácia tohto doplnku vám umožní ponúknuť nastaviteľné ceny podľa počtu miestností vybraného typu, ktoré sú v daný deň v objekte k dispozícii. <br /> Dni, ktoré je potrebné dodržať, určujú počet dní, do ktorých musí byť dátum príchodu, kým sa ceny izieb podľa tejto funkcie upravia. Potom možnosti percent vám umožnia nakonfigurovať percento izieb, ktoré môžu byť k dispozícii pred uplatnením danej zľavy. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD', 'Threashold (počet dní medzi dátumom príchodu a dneškom)');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Percentuálne obsadené miestnosti 10%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Percentuálne obsadené miestnosti 25%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Percentuálne obsadené miestnosti 50%');
jr_define ('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Percentuálne obsadené miestnosti 75%');
jr_define ('_JOMCOMP_WISEPRICE_DISCOUNT', 'zľava %');
jr_define ('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', 'bolo zľavnené z');
jr_define ('_JOMCOMP_WISEPRICE_TO', 'do');
jr_define ('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'cena za izbu nie je zľavnená');
jr_define ('JOMRES_COM_A_MAPSKEY', 'kľúč API služby Google Maps');
jr_define ('JOMRES_COM_A_MAPSKEY_DESC', 'Kľúč rozhrania API služby Mapy Google môžete získať z <a href = "https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key target="_blank"> Mapy Google </a>. Keď sem zadáte kľúč mapy, Jomres zobrazí mapu na vašej stránke s podrobnosťami o vlastníctve. ');
jr_define ('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define ('_JOMCOMP_LASTMINUTE_ACTIVE', 'aktívny?');
jr_define ('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Nastavte túto možnosť na Áno, ak chcete ponúkať ponuky na poslednú chvíľu.');
jr_define ('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Threshold');
jr_define ('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Ak je rezervácia vykonaná a dátum príchodu je iba N dní od dátumu rezervácie, potom je možné uplatniť zľavu');
jr_define ('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Zľava');
jr_define ('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'v percentách');
jr_define ('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Na túto rezerváciu bola uplatnená zľava!');
jr_define ('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Cena pobytu bola znížená o');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Toto ubytovacie zariadenie ponúka zľavu na poslednú chvíľu');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', 'percento, ak si rezervujete príchod skôr');
jr_define ('_JOMCOMP_LASTMINUTE_ORMORE', 'percento alebo viac, ak si rezervujete príchod skôr');
jr_define ('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Rezervujte hneď, aby ste túto ponuku využili naplno!');
jr_define ('JOMRES_COM_A_VERBOSETARIFFINTO', 'Podrobné informácie o tarife');
jr_define ('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Nastavením na Áno zobrazíte podrobnejšie informácie o tarifách v podrobnostiach nehnuteľnosti/vyskakovacie okno s tarifami');
jr_define ('JOMRES_COM_A_MINIMALCONFIG', 'Minimalizovať možnosti konfigurácie');
jr_define ('_JOMCOMP_AMEND', 'Zmeniť rezerváciu - výber nehnuteľnosti');
jr_define ('_JOMCOMP_AMEND_SELECTPROPERTY', 'Select Property');
jr_define ('_JOMCOMP_AMEND_HEADER', 'Pôvodná zmluva:');
jr_define ('_JOMCOMP_AMEND_DEPOSITPAID', 'Vklad zaplatený');
jr_define ('_JOMCOMP_AMEND_DEPOSITDUE', 'vklad nie je zaplatený');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Override Total');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Prepísať vklad');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define ('_JRPORTAL_CANCEL', 'Zrušiť');
jr_define ('_JRPORTAL_CPANEL', 'ovládací panel');
jr_define ('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Predvolená sadzba provízie');
jr_define ('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Vyberte predvolenú províziu, ktorá sa použije na nehnuteľnosť v prípade, že iná sadzba provízie nie je stanovená inak.');
jr_define ('_JRPORTAL_CPANEL_LISTCRATES', 'Zoznam sadzieb provízií');
jr_define ('_JRPORTAL_CPANEL_PATETITLE', 'Sadzby provízií');
jr_define ('_JRPORTAL_CRATE_TITLE', 'Title');
jr_define ('_JRPORTAL_CRATE_TYPE', 'Typ');
jr_define ('_JRPORTAL_CRATE_VALUE', 'sadzba provízie');
jr_define ('_JRPORTAL_CRATE_CURRENCYCODE', 'kód meny');
jr_define ('_JRPORTAL_CPANEL_LISTPROPERTIES', 'List Properties');
jr_define ('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Property name');
jr_define ('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'adresa vlastníctva');
jr_define ('_JRPORTAL_PROPERTIES_LEGEND', 'Pre nehnuteľnosti, ktorých farba pozadia je červená, sa ešte na ne nevzťahovala provízia.');
jr_define ('_JRPORTAL_STATS_PATETITLE', 'Štatistiky');
jr_define ('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Commission Commission');
jr_define ('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Zoznam rezervácií');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Property id');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Id faktúry');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Celková rezervacia');
jr_define ('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'dátum archivovaný');
jr_define ('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Description');
jr_define ('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Môžete mať jazykové súbory špecifické pre daný typ vlastnosti tak, že popis nastavíte na názov podpriečinka, napr. yachtbrokerage a skopírujete jazykový súbor do tejto podpriečinky. Tento jazykový súbor potom môžete pre túto vlastnosť upraviť. napíšte, aby sa z miestností stali napríklad DVD disky atď. ');
jr_define ('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Túto vlastnosť nemôžete odstrániť, pretože je to jediná vlastnosť, ku ktorej máte prístup. Ak ju chcete zakázať, použite funkciu zrušenia zverejnenia na paneli s nástrojmi.');
// Jomres v3.0.6
// Jomres v3.1
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Accommodation Total');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'noc (y) o');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'na izbu');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Vylepšite svoj pobyt celkom');
jr_define ('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Prehľad cien');
jr_define ('_JOMRES_CONFIRMATION_ALERT', 'Prečítajte si a súhlaste s tým');
jr_define ('_JOMRES_CONFIRMATION_HEADER', 'Súhrn vašej rezervácie je uvedený nižšie. <br /> Ak chcete vykonať zmeny, kliknite na tlačidlo Zmeniť rezerváciu.');
jr_define ('_JOMRES_CONFIRMATION_AMENDTEXT', 'Ak potrebujete zmeniť niektoré z vyššie uvedených informácií, kliknite sem');
jr_define ('_JOMRES_CONFIRMATION_AMEND', 'Zmeniť rezerváciu');
jr_define ('_JOMRES_CONFIRMATION_SPECIALS', 'Zadajte akékoľvek špeciálne požiadavky do nižšie uvedeného poľa.');
jr_define ('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'potvrdzujem, že vyššie uvedené informácie sú správne a súhlasím s');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'na osobu a noc');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'z');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Začnite');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Predchádzajúce');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Ďalšie');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Koniec');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Výsledky');
}
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Upozorňujeme, že toto nie je rezervačný formulár, ale namiesto toho odosielate e -mail. <br/> Zadajte správu, ktorej chcete odoslať');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontaktný hotel');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Dotaz na nehnuteľnosť od');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Ďakujeme za váš dotaz, vaša správa bola odoslaná na kontaktnú e -mailovú adresu ubytovacieho zariadenia a skopírovaná na vašu vlastnú adresu, aby ste si ju mohli prečítať. Odpovedia vám čo najskôr so svojou odpoveďou. . ');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', 'ohľadom');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Dopyt');
jr_define ('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Vyberte požadované ubytovanie zo zoznamu vpravo');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Min. miestnosti už vybraté');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimálny počet izieb vybraných už pri rezervácii, než bude možné ponúkať kombináciu tarify/typu miestnosti. Umožňuje vám mať zľavnené tarify, ak je už vybratých viac ako N izieb.');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Max room already selected');
jr_define ('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximálny počet izieb vybraných už pri rezervácii pred tým, ako sa prestane ponúkať tarifa/izba. Umožňuje vám prestať ponúkať tento typ izby/kombinácie taríf, akonáhle bolo v rezervačnom formulári vybratých N izieb.');
jr_define ('_JOMRES_COM_SPS_EDITROOM_DESC', 'Upozorňujeme, že tu uvedené nastavenia pre jednu osobu sa nepoužijú, ak sú položky pre jednu osobu vo všeobecnej konfigurácii nastavené na Áno. Tieto nastavenia sú alternatívou k paušálnym dodávkam pre jednu osobu, nie ako doplnok k bytu. sadzba SPS. ');
jr_define ('_JOMRES_AVLCAL_NOBOOKINGS', 'k dispozícii');
jr_define ('_JOMRES_AVLCAL_QUARTER', 'Niektoré rezervácie');
jr_define ('_JOMRES_AVLCAL_HALF', 'Polovica rezervovaná');
jr_define ('_JOMRES_AVLCAL_THREEQUARTER', 'Väčšinou rezervované');
jr_define ('_JOMRES_AVLCAL_FULLYBOOKED', 'Plne obsadené');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Za týždeň');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Za deň');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Za rezerváciu');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Na osobu na rezerváciu');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Na osobu za deň');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Na osobu za týždeň');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Za deň X vybraných miestností');
jr_define ('_JOMRES_REGISTRYREBUILD', 'Znovu vytvoriť minikomponentný register a znova vytvoriť vyrovnávaciu pamäť');
jr_define ('_JOMRES_REGISTRYREBUILD_NOTES', "Register doplnkov Jomres sa zvyčajne automaticky prebuduje vždy, keď si prezeráte správcu doplnkov a pridávate alebo odoberáte doplnok, je však možné, že tieto funkcie z nejakého dôvodu nemôžete používať, preto môžete túto funkciu použiť na obnovu zaregistrujte sa ručne. Ak máte prístup k funkcii Správca doplnkov a aktualizáciám, je nepravdepodobné, že budete musieť používať túto funkciu. Register registrov doplnkov budete musieť znova vytvoriť vždy, keď pridáte nový minisúčiastku a nepoužijete Správcu doplnkov. pridať.");
jr_define ('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Register bol úspešne prestavaný');
jr_define ('_JOMRES_REGISTRYREBUILD_FAILURE', 'Došlo k chybe pri prestavbe registra minikomponentov. Mali by ste skontrolovať protokol chýb Jomres, aby ste zistili, či existuje záznam o tom, čo chybu spustilo.');
jr_define ('_JOMRES_SEARCH_PRICERANGES', 'Cena');
jr_define ('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Zatiaľ ste neuskutočnili žiadne rezervácie!');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Upraviť typ vlastníctva');
jr_define ('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Vyberte typ svojej nehnuteľnosti');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Váš dopyt ...');
jr_define ('_JOMRES_COM_A_LISTLIMIT', 'limit zoznamu nehnuteľností');
jr_define ('_JOMRES_COM_A_LISTLIMIT_DESC', 'počet vlastností, ktoré sa majú zobraziť na stránke po vyhľadávaní');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'integrovaná funkcia vyhľadávania');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Integrovaná funkcia vyhľadávania Jomres umožňuje vašim používateľom prehľadávať vlastnosti Jomres podľa sady funkcií. Ak ste už v Joomle použili funkcie vyhľadávania Jomres, tieto nastavenia poznáte. <br/ > Táto funkcia nám umožňuje ponúknuť spracovanie vyhľadávania v rámci Jomres pre tých užívateľov, ktorí nechcú používať vyhľadávacie moduly Joomla, alebo pre ostatných užívateľov CMS, ktorí CMS nemajú vlastné vyhľadávacie moduly Jomres. <br/> Nezabudnite, že ak sa rozhodnete niečo vyhľadať prostredníctvom odkazu (tj. nie v rozbaľovacom zozname), nebudú implementované ďalšie možnosti vyhľadávania, iba prvok, ktorý zodpovedá odkazu, na ktorý ste klikli. <br/> Upozorňujeme, že v predvolenom nastavení nie je rozloženie tohto integrovaného vyhľadávania veľmi pekné. Je to preto, že súbor šablón, ktorý vykonáva rozloženie, musí obsahovať všetky možné možnosti, z ktorých niektoré sú nekompatibilné. ');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivovať túto funkciu?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Ak je táto funkcia povolená, potom akékoľvek volanie do Jomres, ktoré zobrazuje zoznam vlastností, bude znamenať, že sa zobrazia aj možnosti vyhľadávania.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Použiť stĺpce');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Akákoľvek možnosť vyhľadávania, ktorú ste definovali ako typ odkazu (ak je relevantná), sa zobrazí ako stĺpce (IE br umiestnený na konci odkazu)');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Hľadať región podľa rozbaľovacej ponuky kombinovaného výberu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Ponúknite rozbaľovaciu ponuku vyhľadávania na filtrovanie podľa krajín/oblastí/miest. Ak sa chystáte používať túto funkciu, najlepšie bude nepoužívať nižšie uvedené vyhľadávanie regiónov/miest.");
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Hľadať podľa názvu vlastnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Zobraziť vyhľadávanie podľa zadania názvu vlastnosti.');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Zobraziť ako rozbaľovací zoznam?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Nastavením na nie zobrazíte zoznam ako odkazy');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Mesto/región');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Zobraziť vstup regiónu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Zobraziť ako rozbaľovací zoznam?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Nastavením na nie zobrazíte zoznam ako odkazy');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Hľadať podľa typu vlastnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Zobraziť vyhľadávanie podľa vstupu typu vlastnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Zobraziť ako rozbaľovací zoznam?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Nastaviť na nie, aby sa zoznam zobrazoval ako odkazy');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Hľadať podľa typu miestnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Zobraziť vyhľadávanie podľa vstupu typu miestnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Zobraziť ako rozbaľovací zoznam?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Nastavením na nie zobrazíte zoznam ako odkazy');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Vlastnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Zobraziť vyhľadávanie podľa vstupu funkcie');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Zobraziť ako rozbaľovací zoznam?');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Nastavením na nie zobrazíte zoznam ako obrázky a začiarkavacie políčka popisu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Hľadať podľa popisu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Zobraziť vyhľadávanie podľa popisu popisu');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Hľadať podľa dostupnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Zobraziť vyhľadávanie podľa zadania dostupnosti');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Hľadať podľa cenových rozsahov');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Zobraziť vyhľadávanie podľa zadania cenových rozsahov');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'prírastky cenového rozpätia');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres sa pozrie na všetky hodnoty v tarifách a potom vypracuje sériu cenových rozsahov na základe hodnoty prírastkov, ktorú tu nastavíte.');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Štandardne, ak nie je v Jomres vybratá vlastnosť, vykoná vyhľadávanie. Ak toto vyhľadávanie nebolo spustené vyhľadávacím modulom, potom bude vyhľadávanie vytvárať náhodné výsledky (zámerne). Táto možnosť vám umožňuje obmedzte počet výnosov pri tomto náhodnom vyhľadávaní. ');
jr_define ('_JOMRES_COM_A_CRON_TITLE', 'Nastavenia a denníky úloh Cron');
jr_define ('_JOMRES_COM_A_CRON_DESC', 'Informácie o zákazke Pseudocron. Funkcia Pseudocron je potrebná pri fakturácii a spracovaní provízií.');
jr_define ('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Nainštalované minisúčiastky cron. Na spustenie individuálnej úlohy cron použite nižšie uvedené odkazy. Upozorňujeme, že úlohy cron nevytvárajú žiadny výstup, takže na stránke neuvidíte žiadne informácie. Namiesto toho sa obráťte na úlohu. prihláste sa nižšie. ');

jr_define ('_JOMRES_COM_A_CRON_METHOD', 'metóda');
jr_define ('_JOMRES_COM_A_CRON_METHOD_DESC', 'Ak nemáte prístup k úlohám cron, nastavte ho na Minicomponent, v opačnom prípade vytvorte úlohu cron a povedzte jej, aby sa spustila <br /> <i> curl -s' .JOMRES_SITEPAGE_URL_AJAX. '& task = cronj = '. get_showtime (' tmplcomponent ').' & no_html = 1>/dev/null </i> ');
jr_define ('_JOMRES_COM_A_CRON_LOGGING', 'Zobrazenie denníka v prehliadači');
jr_define ('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Funguje iba vtedy, ak je metóda nastavená na minikomponent.');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Protokolovanie povolené');
jr_define ('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Nastavte toto na Áno, aby sa zapisovanie do denníka povolilo. Výsledky protokolov sa budú zobrazovať nižšie.');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Verbose logging');
jr_define ('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Veľa výstupov z protokolovania');
jr_define ('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Úprava šablóny');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Vlastné polia');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Tu môžete definovať jednoduché vlastné polia, ktoré sa zobrazia v rezervačnom formulári.');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Fieldname (no spaces)');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Predvolená hodnota');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Popis');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'required');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY', 'maximálne množstvo');
jr_define ('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Ak je maximálne množstvo nastavené na viac ako 1, hosťom sa ponúkne rozbaľovacia ponuka, aby si vybrali množstvo doplnkov, ktoré požadujú.');
jr_define ('_JRPORTAL_TAXRATES_TITLE', 'Daňové sadzby');
jr_define ('_JRPORTAL_TAXRATES_CODE', 'daňový kód');
jr_define ('_JRPORTAL_TAXRATES_DESCRIPTION', 'Popis sadzby');
jr_define ('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Túto sadzbu dane nemôžete odstrániť.');
jr_define ('_JRPORTAL_TAXRATES_RATE', 'Sadzba');
jr_define ('_JRPORTAL_INVOICES_TITLE', 'Faktúry');
jr_define ('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Nezaplatené');
jr_define ('_JRPORTAL_INVOICES_STATUS_PAID', 'zaplatené');
jr_define ('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Zrušené');
jr_define ('_JRPORTAL_INVOICES_STATUS_PENDING', 'Pending');
jr_define ('_JRPORTAL_INVOICES_USER', 'užívateľ');
jr_define ('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define ('_JRPORTAL_INVOICES_RAISED', 'zvýšený');
jr_define ('_JRPORTAL_INVOICES_DUE', 'Splatné');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Subscription');
jr_define ('_JRPORTAL_INVOICES_INITTOTAL', 'Nevyrovnaný súčet');
jr_define ('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'opakujúca sa frekvencia');
jr_define ('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'opakujúci sa deň v mesiaci');
jr_define ('_JRPORTAL_INVOICES_CURRENCYCODE', 'kód meny');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS', 'Riadkové položky');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'meno');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Popis');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'počiatočná cena');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Počiatočné množstvo');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'počiatočná zľava');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Počiatočný súčet');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'daňový kód');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Tax description');
jr_define ('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'sadzba dane');
jr_define ('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Chcete prepísať štandardné nastavenia brány Jomres?');
jr_define ('_JRPORTAL_INVOICES_SHOWINVOICES', 'Zobraziť moje faktúry');
jr_define ('_JRPORTAL_COUPONS_TITLE', 'Zľavové kupóny');
jr_define ('_JRPORTAL_COUPONS_DESC', 'Zľavové kódy je možné generovať a posielať hosťom ako podnet k rezervácii. Platné od a do dátumov sa vzťahujú na dátumy, kedy je možné rezerváciu vykonať, nie na dátumy samotnej rezervácie.') ;
jr_define ('_JRPORTAL_COUPONS_CODE', 'kód kupónu');
jr_define ('_JRPORTAL_COUPONS_VALIDFROM', 'Platné od');
jr_define ('_JRPORTAL_COUPONS_VALIDTO', 'Platné do');
jr_define ('_JRPORTAL_COUPONS_AMOUNT', 'výška zľavy');
jr_define ('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Zľava je percento');
jr_define ('_JRPORTAL_COUPONS_ROOMONLY', 'iba miestnosť');
jr_define ('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Ak máte kód kupónu, zadajte ho do poľa a kliknutím na odkaz Uložiť kupón uložíte podrobnosti o kupóne oproti svojej rezervácii.');
jr_define ('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Uložiť kupón');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kupón uložený proti rezervácii');
jr_define ('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'číslo kupónu nebolo nájdené');
jr_define ('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'hodnota zľavy na kupóne');
jr_define ('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervácia zľavnená. Kód kupónu/hodnota zľavy/nastavenia kupónu:');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES', 'Choose languages');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Vyberte možnosti jazyka, ktoré sa majú zobrazovať v rozbaľovacom zozname jazykových prepínačov.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Zobraziť rozbaľovaciu ponuku výberu jazyka?');
/*
* @ignorovať
*/
jr_define ('_JRPORTAL_NEWUSER_DEAR', 'Vážený');
jr_define ('_JRPORTAL_NEWUSER_THANKYOU', 'Ďakujem za registráciu');
jr_define ('_JRPORTAL_NEWUSER_USERNAME', 'Vaše používateľské meno je:');
jr_define ('_JRPORTAL_NEWUSER_PASSWORD', 'Vaše heslo je:');
jr_define ('_JRPORTAL_NEWUSER_LOG_IN', 'Prihláste sa, aby ste si mohli rezervovať');
jr_define ('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupón uložený');
jr_define ('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupón vymazaný');
// Zatiaľ nepoužité
jr_define ('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'užívateľské meno');
jr_define ('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'heslo');
jr_define ('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'číslo mobilného oznámenia');
jr_define ('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Prosím použite formát 'Kód krajiny, číslo mobilného telefónu'. Napríklad číslo mobilného telefónu so sídlom v Británii by bolo niečo ako '447979123456'. Ak nechcete, aby vám boli na e -mail odosielané e -maily s upozornením, ponechajte toto pole prázdne. telefón. ");
jr_define ('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define ('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
<b> Očividne nemôžete používať/testovať túto bránu z localhost, budete to musieť urobiť na 'živom' serveri. </b>
<br/>
<br/>
Na používanie brány Clickatell potrebujete účet Clickatell a najmenej jedno registrované pripojenie (inštanciu podproduktu API) medzi vašou aplikáciou a našou bránou. Každé spojenie
metóda je známa ako podprodukt. Postupujte takto: <br/>
<br/>
<b> Krok 1 - zaregistrujte si účet Clickatell </b> <br/>
Ak ešte nemáte účet Clickatell, musíte si ho zaregistrovať podľa nižšie uvedeného postupu. V opačnom prípade pokračujte krokom 2. <br/>
* Prejdite na stránku http://www.clickatell.com/products/sms_gateway.php a vyberte príslušný subprodukt API (spôsob pripojenia), ktorý chcete použiť (Clickatell Central (API)) <br/>
* Kliknite na registračný hypertextový odkaz. <br/>
* Vyplňte registračný formulár. <br/>
Po úspešnom odoslaní formulára sa automaticky prihlásite do svojho nového účtu a prejdete na stránku, kde môžete pridať zvolené pripojenie API. <br/>
<b> Krok 2 - pridajte registrované pripojenie API (podprodukt) </b> <br/>
Ak ešte nie ste prihlásení do svojho účtu, musíte tak urobiť na http://www.clickatell.com/login.php <br/>
* V hornej ponuke vyberte položku 'Spravovať moje produkty'. <br/>
* V rozbaľovacej ponuke ('Pridať pripojenie') vyberte typ pripojenia API, ktoré chcete použiť (HTTP API). <br/>
* Vyplňte formulár. Uistite sa, že zadávate uzamknutú IP (IP tohto servera), nastavte Callback na HTTP POST. Budete musieť nastaviť spätné volanie IP na ".get_showtime ('live_site')."/index.php?option=com_jomres&task=sms_clickatell_callback a ID používateľa a heslo. <br/>
Ak zaregistrujete viac ako jedno pripojenie API, názov popisu, ktorý zadáte pre každé, musí byť jedinečný - nemôžete mať viacero rozhraní API s rovnakým názvom. <br/>
Po úspešnom odoslaní formulára sa zobrazia vaše overovacie údaje vrátane jedinečného identifikátora API každého pripojenia (api_id). Tieto autentifikačné údaje sú vyžadované pri pripájaní k bráne Clickatell na odoslanie správy. <br/>
<br/>
Na vyplnenie polí vyššie použite svoje užívateľské meno, heslo a api_id. <br/>
<br/>
");
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Rezervačný formulár v zozname miestností so zakázaným prístupom');
jr_define ('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Rezervačný formulár zoznam miestností zobrazuje maximálny počet osôb');
jr_define ('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Upozorňujeme, že uvedené ceny izieb sú odhadované a plná cena rezervácie sa nevypočíta, kým do svojho výberu nepridáte izbu alebo izby.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'balíky predplatného');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'meno');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Description');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publikované');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'plná čiastka');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Property limit');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Prihlásiť sa na odber');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_USE', 'Použiť funkciu spracovania predplatného');
jr_define ('_JOMRES_COM_NEWUSER', 'Vytvoriť nového používateľa pri rezervácii');
jr_define ('_JOMRES_COM_NEWUSER_DESC', 'Vytvoriť nový užívateľský účet pri neregistrovanej rezervácii užívateľov.');
jr_define ('_JOMRES_CLICKTOREGISTER', 'Kliknutím sem zaregistrujete svoj majetok');
jr_define ('_JRPORTAL_NEWUSER_SUBJECT', 'Nové údaje o používateľovi');
jr_define ('_JOMRES_LATLONG_DESC', 'Pomocou myši sa pohybujte po mape a presuňte ukazovateľ na miesto, kde sa nachádzate, a nastavte zemepisnú šírku a dĺžku.');
jr_define ('_JOMRES_CONTROLPANEL', 'ovládací panel');
// Jomres v4.2
jr_define ('_JOMRES_MANAGER_SHOWINVOICE', 'Zobraziť faktúru');
jr_define ('_JOMRES_MANAGER_SHOWINVOICES', 'Zobraziť faktúry');
jr_define ('_JOMRES_USER_LISTMYPROPERTY', 'Pridať môj majetok na túto stránku');
jr_define ('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Todo:');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Ospravedlňujeme sa, ale toto ID balíka nebolo rozpoznané.');
jr_define ('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Ospravedlňujeme sa, už ste sa prihlásili k bezplatnému balíčku, nemôžete sa k nemu znova prihlásiť.');
jr_define ('_JOMRES_COM_YOURBUSINESS', 'Podrobnosti o vašej firme');
jr_define ('_JOMRES_COM_YOURBUSINESS_NAME', 'obchodné meno');
jr_define ('_JOMRES_COM_YOURBUSINESS_VATNO', 'DIČ');
jr_define ('_JOMRES_COM_YOURBUSINESSADDRESS', 'Building number');
jr_define ('_JOMRES_INVOICE_NUMBER', 'číslo faktúry');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Vyberte dátumy, na ktoré chcete uplatniť čiernu rezerváciu. Keď vyberiete vhodné dátumy, dostupnosť znova skontrolujete kliknutím na tlačidlo Použiť. <br/>
<br/>
Ak má nehnuteľnosť jednu alebo viac rezervácií na zvolené obdobie, nebudete ich môcť zarezervovať, kým nebudú zrušené/rezervované ostatné rezervácie/čierne rezervácie. ');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Ospravedlňujeme sa, ale pre tieto dátumy nie je možné rezervovať túto nehnuteľnosť.');
jr_define ('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Túto vlastnosť môžete pre tieto dátumy zaradiť do čiernej knihy.');
jr_define ('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Vaše zariadenie je nakonfigurované tak, aby účtovalo poplatky za osobu za noc, ale nemáte vytvorené ani zverejnené žiadne typy hostí, vytvorte a zverejnite jeden alebo viac typov hostí.');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Zatiaľ nemáte nakonfigurované žiadne tarify, nebudete môcť prijímať žiadne rezervácie pre svoj majetok.');
jr_define ('_JOMRES_EDITINGMODE_ON', 'režim úpravy štítkov zapnutý');
jr_define ('_JOMRES_EDITINGMODE_OFF', 'Režim úpravy štítkov je vypnutý');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Účtovať variabilné vklady?');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'variabilné vklady vám umožňujú definovať, či by ste chceli účtovať celú sumu, ak je dátum príchodu rezervácie do N dní od dnes. Ak chcete túto funkciu povoliť, nastavte túto možnosť na Áno , a zadajte počet dní nižšie, takže napríklad ak je deň príchodu do 60 dní, bude účtovaná výška zálohy v plnej výške, v opačnom prípade bude suma založená na možnostiach vkladu nakonfigurovaných vyššie. ');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Počet dní, počas ktorých sa bude účtovať celá suma ako vklad.');
jr_define ('_JOMRES_CONFIRMATION_EMAIL_SENT', 'potvrdzovací e -mail bol odoslaný. Toto okno môžete teraz zavrieť.');
jr_define ('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontaktný zástupca');
jr_define ('_JOMRES_INVOICE_MARKASPAID', 'Označiť faktúru ako zaplatenú');
jr_define ('_JOMRES_INVOICE_MARKEDASPAID', 'Faktúra označená ako zaplatená');
jr_define ('_JOMRES_APIKEY_REMAKE', 'Vytvoriť nový kľúč API');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Je to inštalácia jedného majetku?');
jr_define ('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Ak je táto možnosť nastavená na Áno, potom je frontendové zobrazenie Jomres pre neautorizovaných používateľov výrazne zjednodušené. Predvolené volania pre Jomres z možnosti ponuky, namiesto toho, aby sa im poskytoval zoznam vlastností, však stačí hosť rezervačného formulára na prvú nehnuteľnosť v systéme. Správcom nehnuteľností sa tiež nezobrazí tlačidlo Náhľad podrobností nehnuteľnosti ani tlačidlo Pridať nové vlastníctvo. Ideálne, ak chcete uviesť iba jednu nehnuteľnosť a prijímať k nej rezervácie. <br /> ');
jr_define ('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'zostatok');
jr_define ('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Všimnite si, že používate režim úprav s povoleným režimom globálnych úprav. To je v poriadku, ak chápete, čo režim globálnych úprav znamená, ale ak nie, môžete si spôsobiť problémy. Ak si nie ste istí ak by ste mali používať Jomres týmto spôsobom, pozrite si <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode target="_blank"> manuálna stránka režimu úprav </a>, kde získate ďalšie informácie o tejto téme. ');
jr_define ('_JOMRES_SUPPORTKEY', 'kľúč podpory');
jr_define ('_JOMRES_SUPPORTKEY_DESC', 'číslo vášho licenčného kľúča podpory (známe aj ako licenčné číslo). Na sťahovanie doplnkov pre Jomres budete potrebovať aktuálnu licenciu.');
jr_define ('_JOMRES_PERSONAL_DISCOUNT', 'osobná zľava');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Obmedziť registráciu majetku na jednu krajinu?');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Môžete zaistiť, aby registrácie majetku boli obmedzené iba na jednu krajinu, nastavením tejto možnosti na Áno a nastavením krajiny v nasledujúcej možnosti.');
jr_define ('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Nehnuteľnosti sa nachádzajú v tejto krajine:');
jr_define ('_JOMRES_JQUERYTHEME', 'téma Jquery');
jr_define ('_JOMRES_JQUERYTHEME_DESC', 'Vyberte si tému jquery, ktorá sa použije pre karty podrobností vlastníctva.');
jr_define ('_JOMRES_PROPERTYNOTOUBLISHED', 'Ospravedlňujeme sa, ale táto vlastnosť nie je v súčasnej dobe k dispozícii.');
jr_define ('_JOMRES_REVIEWS', 'Recenzie');
jr_define ('_JOMRES_REVIEWS_TITLE', 'Názov recenzie');
jr_define ('_JOMRES_REVIEWS_DATE', 'zverejnené');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS', 'K tomuto objektu zatiaľ nie sú žiadne recenzie.');
jr_define ('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Chcete byť prví, kto ohodnotí túto nehnuteľnosť?');
jr_define ('_JOMRES_REVIEWS_IAGREE', 'súhlasím s touto recenziou');
jr_define ('_JOMRES_REVIEWS_IDISAGREE', 'Nesúhlasím s touto recenziou');
jr_define ('_JOMRES_REVIEWS_AVERAGE_RATING', 'Priemerné hodnotenie:');
jr_define ('_JOMRES_REVIEWS_TOTAL_VOTES', 'celkový počet hlasov:');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW', 'Pridať novú recenziu.');
jr_define ('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Ak chcete napísať recenziu, musíte byť prihlásený.');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY', 'Napíšte nám, čo si o tejto vlastnosti myslíte:');
jr_define ('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Tento recenzent nám povedal:');
jr_define ('_JOMRES_REVIEWS_PROS', 'Pros:');
jr_define ('_JOMRES_REVIEWS_CONS', 'Cons:');
jr_define ('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Odoslané dňa:');
jr_define ('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Toto zariadenie ste už skontrolovali, nemôžete naň poslať ďalšiu recenziu.');
jr_define ('_JOMRES_REVIEWS_CANNOTREVIEW', 'Ospravedlňujeme sa, ale nemôžete pridávať recenzie na tieto stránky.');
jr_define ('_JOMRES_REVIEWS_CLICKTOSHOW', 'Zobraziť recenzie');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'hostia súhlasia s touto recenziou.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'hostia s touto recenziou nesúhlasia.');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' hosť súhlasí s touto recenziou. ');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR',' hosť s touto recenziou nesúhlasí. ');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Ďakujeme za zdieľanie vášho názoru na túto recenziu.');
jr_define ('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Ďakujem, ale už ste sa podelili o svoj názor na túto recenziu.');
jr_define ('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Zaistite, aby boli vyplnené všetky polia.');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Zhrňte prosím svoju recenziu zadaním názvu');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Zadajte úplnejšiu recenziu do poľa popisu');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Zadajte dobré časti svojich skúseností s hosťovaním v tomto ubytovacom zariadení');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Zadajte akékoľvek negatívne myšlienky, ktoré by ste si mohli o svojej skúsenosti myslieť');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Ohodnoťte hostiteľskú kapacitu, ktorú ste dostali od zamestnancov');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Ohodnoťte, prosím, svoj názor na miestne nastavenia nehnuteľnosti');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Uveďte prosím svoj názor na čistotu majetku');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Ohodnoťte prosím ubytovanie. Bolo to pohodlné alebo hrubé');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Uveďte svoj názor na to, či to malo hodnotu za peniaze');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Ohodnoťte služby');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Súhrn recenzie');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Vaša skúsenosť podrobnejšie');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Ďakujeme za odoslanie vašej recenzie.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED',' Ďakujeme za odoslanie vašej recenzie. Čoskoro ju zverejní jeden z našich usilovných moderátorov. ');
jr_define ('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Použiť funkciu kontroly Jomres?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automaticky publikovať recenzie?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Ak nastavíte túto možnosť na Nie, budete musieť recenzie publikovať ručne');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Nastaviť recenzie do testovacieho režimu?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normálne správcovia nehnuteľností nemôžu kontrolovať nehnuteľnosti. Keď je povolený testovací režim, môžu. Prirodzene to nie je v produkčnom prostredí ideálne.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Toto je zoznam všetkých nehnuteľností. Ak chcete zobraziť recenzie vlastníctva, kliknite na ne. Odtiaľ budete môcť recenziu zverejniť alebo odstrániť.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'počet nepublikovaných recenzií');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Celkový počet recenzií');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publikovať/Zrušiť publikovanie recenzie');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Odstrániť recenziu');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'Kontrola správy');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Prehľad správ');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Zadajte svoju správu');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'V tejto recenzii nájdete niečo, čo je námietkové alebo nepresné? Nahláste to a my to prešetríme.');
jr_define ('_JOMRES_REVIEWS_SUBMIT', 'Odoslať');
jr_define ('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by');
jr_define ('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Správy zasielajú používatelia, ktorí môžu nesúhlasiť s obsahom recenzie. Jediným spôsobom, ako odstrániť správu, je odstránenie recenzie.');
jr_define ('_JOMRES_REVIEWS_RATING', 'Hodnotenia (1 = zlý 10 = vynikajúci)');
jr_define ('_JOMRES_REVIEWS_RATING_1', 'pohostinstvo');
jr_define ('_JOMRES_REVIEWS_RATING_2', 'Poloha');
jr_define ('_JOMRES_REVIEWS_RATING_3', 'Čistota');
jr_define ('_JOMRES_REVIEWS_RATING_4', 'Ubytovanie');
jr_define ('_JOMRES_REVIEWS_RATING_5', 'Hodnota za peniaze');
jr_define ('_JOMRES_REVIEWS_RATING_6', 'služby');
jr_define ('_JOMRES_REVIEWS_REVIEWED_BY', 'Skontroloval:');
jr_define ('_JOMRES_REVIEWS_CLICKTOHIDE', 'Skryť recenzie');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Zobraziť rezervačný formulár na stránke podrobností nehnuteľnosti?');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Nastavte túto možnosť na Áno, aby sa rezervačný formulár zobrazoval na stránke s podrobnosťami o nehnuteľnosti. Ak ho nastavíte na Nie, na stránke s podrobnosťami o nehnuteľnosti sa namiesto odkazu na rezervačný formulár zobrazí odkaz.');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE', 'Sú ceny stanovené vrátane dane?');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ceny sú zahrnuté? Ak vaše ceny zahŕňajú daň, zvoľte Áno. Ak nie sú, zvoľte Nie');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extra tax:');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Polia dňa v týždni vám umožňujú nastaviť sadzbu pre daný deň v týždni, akonáhle kliknete na tlačidlo dňa v týždni, všetky dni v týždni sa nastavia na túto sadzbu.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Výber dátumu a zadanie sadzby vám umožňujú nastaviť jednu cenu pre dané časové obdobie. Vyberte dátum začiatku a konca, zadajte cenu a kliknite na tlačidlo Nastaviť sadzby.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Počiatočný rozsah');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'koncový rozsah');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Sadzba');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Nastaviť sadzby');
jr_define ('_JOMRES_PARTNERS_TITLE', 'Partneri');
jr_define ('_JOMRES_CALENDAR_RTL', 'false');
jr_define ('_JOMRES_ROOMALLOCATIONS_ROOM', 'Izba');
jr_define ('_JOMRES_ROOMALLOCATIONS_GUESTS', 'hostia (hostia).');
jr_define ('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Takto sme priradili čísla vašich hostí k ich izbám. Ak by ste chceli toto pridelenie zmeniť, po vytvorení rezervácie budete musieť kontaktovať hotel. Ak zmeníte priradenie, môžu vám byť účtované dodatočné poplatky. ');
jr_define ('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Všimnite si, že váš majetok ešte nie je zverejnený, môžete ho vidieť iba vy, návštevníci webu ho neuvidia');
// 4.5.5
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Predvolené poradie výsledkov vyhľadávania');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Zmeniť túto možnosť, ak chcete zmeniť poradie predvoleného zobrazovania výsledkov vyhľadávania.');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Zobraziť rozbaľovaciu ponuku poradia výsledkov vyhľadávania');
jr_define ('_JOMRES_ROOMMSLIST_STYLE', 'Štýl zoznamu miestností');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_DESC', 'V rezervačnom formulári pomocou "klasického" štýlu zoznamu izieb ponúkate hosťom jednotlivé izby. V zobrazení typu izby si hostia zvolia počet izieb typu X (napr. 2 x dvojlôžkové izby) ');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Typ miestnosti');
jr_define ('_JOMRES_COM_CALENDAR_STARTDAY', 'deň začiatku kalendárneho týždňa, nedeľa alebo pondelok');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Hodnotiť môžu iba ubytovaní hostia?');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Nastavte na Áno, ak chcete obmedziť recenzie iba na tých používateľov, ktorí už boli hosťami v tomto zariadení.');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Na izbu');
jr_define ('_JOMRES_MAX_GUESTS_PER_ROOM', 'Hostia na izbu:');
jr_define ('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hostia na rezerváciu:');
jr_define ('_JOMRES_NUMBER_OF_ROOMS', 'Počet izieb');
jr_define ('_JRPORTAL_MONTHS_LONG_0', 'január');
jr_define ('_JRPORTAL_MONTHS_LONG_1', 'február');
jr_define ('_JRPORTAL_MONTHS_LONG_2', 'marec');
jr_define ('_JRPORTAL_MONTHS_LONG_3', 'apríl');
jr_define ('_JRPORTAL_MONTHS_LONG_4', 'máj');
jr_define ('_JRPORTAL_MONTHS_LONG_5', 'jún');
jr_define ('_JRPORTAL_MONTHS_LONG_6', 'júl');
jr_define ('_JRPORTAL_MONTHS_LONG_7', 'august');
jr_define ('_JRPORTAL_MONTHS_LONG_8', 'september');
jr_define ('_JRPORTAL_MONTHS_LONG_9', 'október');
jr_define ('_JRPORTAL_MONTHS_LONG_10', 'november');
jr_define ('_JRPORTAL_MONTHS_LONG_11', 'december');
jr_define ('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Nastavením na Áno znížite počet možností, ktoré majú správcovia nehnuteľností k dispozícii v sekcii Všeobecná konfigurácia. Je to užitočné, ak nechcete, aby sa správcovia nehnuteľností hrali s príliš veľkým počtom nastavení, namiesto toho môžete upraviť jomres_config .php na definovanie predvolených možností vlastností. ');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Vyberte prosím možnosť rezervácie');
jr_define ('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Ak je táto možnosť nastavená na Áno, manažéri budú môcť vidieť editor html dodávaný s CMS a zadávať HTML do popisu. Toto je potenciálne bezpečnostné riziko, pretože existuje možnosť, že môžu zaviesť nechcený HTML alebo Javascript. Ak navyše zadajú zle formátovaný HTML, môže dôjsť k ohrozeniu dizajnu stránky. Je lepšie nechať túto možnosť nastavenú na Nie, kdekoľvek je to možné. </p> <p> Ak sú všetci správcovia dôveryhodnými používateľmi (napr. seba), potom ho môžete nechať nastavený na Áno a upravíte rôzne značky HTML, ktoré môžu zadávať na karte Filtrovanie vstupov v Konfigurácii stránky. </p> <p> Ak na druhej strane znovu používa Jomres ako portál, kde pozývate používateľov, aby pridávali a spravovali svoje vlastné vlastnosti, potom to nie je ideálna konfigurácia. Namiesto toho by ste mali nechať túto možnosť nastavenú na Nie. Ak je nastavená na hodnotu Žiadni manažéri, namiesto toho uvidí editor značiek, ktorý môže použiť na zadanie základného formátovania, ktoré by malo byť dostačujúce pre väčšinu používateľov. </p> ");
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'zobrazenie na celú obrazovku');
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'normálne zobrazenie');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'partnerská zľava');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Hľadať používateľa');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Zadajte niekoľko znakov na hľadanie používateľa. <br/> Keď vyberiete používateľa, automaticky ho pridáte ako partnera a dostanete sa na ďalšiu stránku, kde môžete priradiť vlastnosti a zľavy používateľovi. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Existujúci partneri');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Vyberte partnera, ktorého chcete presmerovať na stránku správy partnera.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Hľadať nehnuteľnosť');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Zadajte niekoľko znakov z názvu nehnuteľnosti a vyberte nehnuteľnosť. <br/> Keď vyberiete nehnuteľnosť, pridáte ju do portfólia partnera, avšak zatiaľ nebudú využívať žiadne zľavy, budete potrebovať aby ste sa tým sami nastavili. ');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuálne vlastnosti');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Kliknutím na vlastníctvo upravíte nastavenia partnerských zliav pre toto vlastníctvo.");
// 4.6
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Tento účet bol pozastavený, v súčasnosti pomocou tohto účtu nie je možné spravovať vaše vlastné účty.');
jr_define ('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'účet správcu pozastavený');
jr_define ('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Účet správcu obnovený');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Upozorňujeme, že váš účet správcu nehnuteľnosti bol pozastavený. Kým nebude účet obnovený, nebudete môcť vykonávať žiadne funkcie správy majetku.');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Upozorňujeme, že váš účet správcu vlastníctva je teraz aktívny. Môžete naďalej vykonávať akékoľvek funkcie správy majetku. Prihláste sa do svojho účtu a ubezpečte sa, že boli zverejnené príslušné vlastnosti. Ďakujem.' );
jr_define ('_JOMCOMP_MYUSER_REMOVE', 'Odstrániť obľúbené');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE', 'archív údajov o rezervácii');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Archív údajov o rezervácii je hrubý výpis informácií o rezervácii zachytený po kliknutí na tlačidlo potvrdenia rezervácie. Po umiestnení kurzora myši na dátum sa zobrazí výpis surových údajov. Informácie sú uložené v tabuľke XXX__jomres_booking_data_archive.');
jr_define ('_JOMRES_MY_ACCOUNT_EDIT', 'Upraviť účet');
jr_define ('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Ak chcete pridať používateľa ako správcu vlastností, zadajte najskôr niekoľko prvých znakov jeho používateľského mena do vyššie uvedeného poľa. Keď sa nájde správny používateľ, kliknutím na toto meno ho vyberte a potom zvoľte, ktorú vlastnosť ( s) mali by byť správcom. Používateľ <em> už musí byť používateľom v CMS </em> ');
jr_define ('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Existujúci manažéri');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Rozbaľovacia ponuka Zobraziť vyhľadávanie podľa počtu hostí');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Hviezdičky');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'rozbaľovací zoznam Zobraziť hviezdy');
jr_define ('_JOMRES_SEARCH_GUESTNUMBER', 'Sleeps');
jr_define ('_JOMRES_SEARCH_STARS', 'Počet hviezdičiek');
jr_define ('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'počet vlastností');
// 4.6.1
jr_define ('_JOMRES_CONFIG_JQUERY', 'Načítať knižnicu Jomres jQuery?');
jr_define ('_JOMRES_CONFIG_JQUERY_DESC', 'Môžete to nastaviť na NIE, ak máte šablónu, ktorá používa jquery. To MÔŽE vyriešiť problémy s konfliktom jquery na niektorých šablónach, ale nie na všetkých.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Povolenie tejto možnosti vám umožní vidieť prepínač jazyka v zobrazení na celú obrazovku v klientskom rozhraní.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Pre nahrané obrázky sa automaticky vytvoria miniatúry.');
// 4.7.1
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Malé miniatúry max. šírka (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'V zozname vlastností sa používajú malé miniatúry, zatiaľ čo v hlavičke vlastnosti sa používajú stredne veľké miniatúry.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Malé miniatúry max. výška (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Stredné miniatúry max. šírka (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'stredné miniatúry max. výška (px).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Preklady štítkov');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'Použiť funkciu provízie?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Nastavením na Áno zobrazíte faktúry za provízie manažéra, ktoré boli vyzdvihnuté.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Rezervácie správcu vytvárajú provízie faktúry?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ak si manažér urobí rezerváciu, vytvorí sa tým aj riadková položka faktúry za províziu?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automatické pozastavenie správcov, kde sú faktúry označené ako Nevybavené?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatické pozastavenie držania hrozby');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Thisreadholdhold je počet dní, počas ktorých musí správca zaplatiť faktúru pred pozastavením a zrušením zverejnenia ich vlastností.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'jazykový kontext');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Túto možnosť použite na zmenu jazykového kontextu stránky. Táto funkcia umožňuje Jomresu používať štítky, ktoré sú vhodné pre vaše aktuálne zameranie, takže ak sa zameriavate ako na Yacht Brokerage, zmena kontextu bude umožniť Jomresu prezentovať štítky z iného jazykového súboru. Ak napríklad nastavíte kontext na Yacht Brokerage, Jomres najskôr nájde aktuálny jazyk a potom vyhľadá v podadresári adresár /'.JOMRES_ROOT_DIRECTORY.'/languages nazýva sa yachtbrokerage. Ak súbor existuje pre aktuálny jazyk, použije sa tento súbor. Ak nie, Jomres vyhľadá súbor v anglickom jazyku v tom istom adresári. Ak to nemožno nájsť, Jomres použije jazykový súbor pre aktuálne zvolený jazyk v adresári /'.JOMRES_ROOT_DIRECTORY.'/languages. ');
// 4.7.3
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Rozšírená konfigurácia stránky');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Nastavte túto možnosť na Áno, ak chcete používať rozšírené možnosti konfigurácie stránok. Ak začínate s Jomresom, odporúčame vám, aby ste to zatiaľ nechali na Nie, pretože predvolená inštalácia je stačí, aby ste mohli začať, namiesto toho by ste mali pridať Jomres do hlavnej ponuky a prihlásiť sa do klientskeho rozhrania ako správca a začať konfigurovať svoje vlastníctva. Upozorňujeme, že veľa pokročilých možností nemusí byť k dispozícii, ak nie t mať nainštalovaný príslušný (é) plugin (y). Používatelia bezplatného základného systému nebudú môcť plne využívať funkcie, ktoré povoľujú. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Načítať knižnicu používateľského rozhrania Jomres jQuery?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'Cena (najvyššia prvá)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'Cena (najnižšia prvá)');
// 4.7.6
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Súhrn cien a odhady by mali byť stanovené podľa ceny za noc/týždeň/mesiac?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'za noc');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Za týždeň');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'za mesiac');
jr_define ('_JOMRES_BOOKINGFORM_PERPERSON', 'Na osobu');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'týždeň (týždne) o');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'mesiace (mesiace)');
// 4.7.7
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Ako by mala fungovať možnosť vyhľadávania čísel ľudí?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Ovplyvňuje všetky vyhľadávacie moduly. Mala by funkcia vyhľadávania pri použití funkcie hľadania čísla hosťa hľadať vlastnosti, ktorých tarify budú podporovať počty hostí vyššie a rovnajúce sa zvolenému číslu, presne rovnaké ako zvolené číslo, alebo zvolené a vyššie číslo? ');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Počkajte prosím, prebieha spracovanie vašej objednávky a budete presmerovaní na webovú stránku Paypal.');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Ak nie ste automaticky presmerovaní na Paypal do 5 sekúnd ...');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Kliknite sem');
// 4.7.8
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Rezervácia platí od');
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezervácia platí do');
jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'meno hosťa');
jr_define ('_JRPORTAL_COUPONS_DESC_478', "Zľavové kódy je možné generovať a posielať hosťom ako motivácia k rezervácii. <br/>
Platné od a do dátumov sa vzťahujú na dátumy, kedy je možné vykonať rezerváciu, zatiaľ čo rezervácia platná od/do dátumov sa týka dátumov, ktoré musí rezervácia obsahovať, aby bol kupón platný. Ak rezervácia spadne mimo uvedené obdobie, na dni mimo tohto obdobia sa budú vzťahovať bežné ceny. <br/>
Ak chcete, aby bola rezervácia k dispozícii pre jedného konkrétneho hosťa, v rozbaľovacej ponuke vyberte meno tohto hosťa a obmedzte tak kupón iba na tohto hosťa. ");
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'S vašim kupónom bola táto rezervácia zľavnená z');
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'to');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Nastavením na hodnotu Nie zakážete načítanie súborov javascriptu Jquery a súborov CSS.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Načítať knižnicu CSS Jomres jQuery UI?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Nastavením na Nie zakážete iba súbor CSS jquery UI.');
//v5.1
jr_define ('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc tax');
jr_define ('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'nezverejnená vlastnosť');
// v5.2
jr_define ('_JOMRES_CONVERSION_TITLE', 'Použiť funkciu prevodu');
jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "Využite funkciu online prevodu Jomres. To ponúkne rozbaľovací zoznam konverzií používateľom frontendu, kde si budú môcť vybrať menu, v ktorej chcú vidieť ponúkané ceny. Cenový výstup je upravený tak, aby zobrazoval prevedené cena, za ktorou v zátvorkách nasleduje 'pôvodná'cena nehnuteľnosti. ");
jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'Vyvinuli sme maximálne úsilie, aby sme získali čo najpresnejšie a najaktuálnejšie výmenné kurzy. Naša funkcia online prevodu meny je služba poskytovaná iba na informačné účely a nie je určená na poskytnutie presných čísel. Preto neručíme za správnosť výmenných kurzov. Používaním tejto funkcie sa považuje za súhlas s tým, že akékoľvek spoliehanie sa na funkciu konverzie kurzov alebo jej používanie bude výlučne na vaše vlastné riziko. ');
// 5.2.1
// 5.3.1
jr_define ('_JOMRES_CURRENCYCONVERSION_TAB', 'Konverzia meny/kódy meny');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP API Detection API key');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Na automatické nastavenie rozbaľovacieho kódu meny môže Jomres používať na zisťovanie krajiny návštevníka bezplatnú službu s názvom IPinfoDB, avšak pre kľúč API sa musíte zaregistrovať na <a href = "http: //ipinfodb.com/register.php target="_blank"> IPinfoDB </a> ako prvý. ');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Ladenie');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Ubytovanie bez dane');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Ubytovanie vrátane dane');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Daň za izbu:');
jr_define ('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'otvoriť rezervačný formulár');
jr_define ('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Späť na podrobnosti nehnuteľnosti');
jr_define ('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automaticky vybrané?');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Zostatok (po zaplatení zálohy)');
jr_define ('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrovať zdroje na základe ich vlastností.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Posledná rezervácia');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'druhý');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'minúta');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'hodina');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'deň');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'týždeň');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'mesiac');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'rok');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'dekáda');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'pred');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'odteraz');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'Rezervácie sú na celé dni?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'Štandardne systém rezervuje zdroje v noci, takže rezervácia od prvého januára'. date ('Y', strtotime ('budúci rok')). 'do 2. januára' .date ('Y', strtotime ('next year')). 'pokrýva iba jednu noc. Ak však nastavíte túto možnosť na Áno, rezervácia bude namiesto toho zahŕňať celé dni, takže rezervácia v tieto dni bude zahŕňať obe dní a zákazníkovi budú účtované dva dni. ');
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Za deň');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Na osobu za deň');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'vyzdvihnutie');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dni (dni) o');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'nesprávny dátum vrátenia');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervácia je príliš krátka. Medzi dátumami vyzdvihnutia a vrátenia musí byť najmenej tento počet dní:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'minimálny interval vyzdvihnutia/vrátenia');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Minimálny interval v rezervačnom formulári medzi dátumami vyzdvihnutia a odovzdania. Interval 1 znamená, že dátumy vyzdvihnutia a vrátenia je možné nastaviť na rovnaký deň, avšak stále to závisí od minima. interval, ktorý je automaticky vypočítaný rezervačným nástrojom, pretože kontroluje tarify platné pre obdobie rezervácie. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Súhrn cien a odhady by mali byť stanovené podľa cien za deň/týždeň/mesiac?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Za deň');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'dni pred dátumom vyzdvihnutia');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Minimálny počet dní, ktoré musia uplynúť od dnes pred dátumom vyzdvihnutia.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Nastavte toto na áno, ak chcete obmedziť rezervácie vopred (v nasledujúcom poli nastavte limit v dňoch). Ak to nastavíte na áno, potom, ak sa používateľ pokúsi rezervovať viac ako n dni vopred sa potom dátum ich vyzdvihnutia obnoví na dnešný dátum)');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Zobraziť dátum návratu?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Nastavte toto na Nie, ak nechcete zobrazovať pole pre zadanie dátumu návratu. Používajte ho iba vtedy, ak viete, čo robíte, pretože dátum návratu pri rezerváciách bude vždy nastavený na deň. po dátume vyzdvihnutia. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Ak to nastavíte na Áno, rezervácie sa budú vykonávať na pevné obdobie. Ak je toto nastavené na Nie, potom uistite sa, že definovaný deň vyzdvihnutia nie je nastavený na Áno (pokiaľ konkrétne neurčíte chcete prinútiť ľudí k vyzdvihnutiu v určitý deň v týždni) inak v kalendári dostupnosti veľa odkazov nedostanete. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'vopred definovaný deň vyzdvihnutia');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Iba pre weby ponúkajúce rezervácie na dobu určitú. Vyberte deň v týždni, v ktorom sa musia vyzdvihnúť.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'pevný deň vyzdvihnutia');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Opravené dátumy vyzdvihnutia sa opakujú:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Keď sú zvolené pevné dátumy vyzdvihnutia, počet dátumov, ktoré je možné zobraziť v rozbaľovacom zozname dátumov. Upozorňujeme, že zoznam dátumov nebude zahŕňať žiadne dátumy, ak rezervácia nie je možná z dôvodu predchádzajúcich rezervácií, a že zoznam bude skutočne dvakrát taký dlhý ako vami zvolené číslo, pretože bude mať podobný počet historických dátumov (ak sú k dispozícii). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Na osobu a deň');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Ak chcete účtovať poplatky za osobu na deň, zvoľte možnosť Áno. Ak nie, náklady sa budú počítať podľa zdroja za deň');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variabilné vklady vám umožňujú definovať, či by ste chceli účtovať celú sumu, ak je dátum vyzdvihnutia rezervácie do N dní od dnes. Ak chcete túto funkciu povoliť, nastavte túto možnosť na Áno. , a zadajte počet dní nižšie, takže napríklad ak je deň vyzdvihnutia do 60 dní, bude účtovaná suma vkladu v plnej výške, v opačnom prípade bude suma založená na možnostiach vkladu nakonfigurovaných vyššie. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Väčšina spoločností prepočíta ceny zdrojov na základe počtu zdrojov požadovaného typu, ktoré sú k danému dátumu k dispozícii. To im umožňuje ponúkať zľavy na typ zdroja/firmy, ktorý nie je počas roka zaneprázdnený. dané obdobie s cieľom prilákať podnik, ktorý by sa inak mohol minúť. <br/> Povolenie a konfigurácia tohto doplnku vám umožní ponúknuť nastaviteľné ceny podľa počtu zdrojov zvoleného typu, ktoré sú v daný deň v podniku k dispozícii. <br/> Prahová hodnota dní definuje počet dní, v ktorých musí byť dátum vyzdvihnutia, než budú ceny zdrojov upravené touto funkciou. Potom možnosti percent vám umožňujú nakonfigurovať percento zdrojov, ktoré môžu byť k dispozícii pred uplatnením danej zľavy. . Upozorňujeme však, že ak je rezervovaných viac zdrojov, súčasná úroveň zľavy sa uplatní na všetky zdroje a pri výbere ďalších zdrojov sa nezníži. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (počet dní medzi dátumom vyzdvihnutia a dneškom)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'vyzdvihnutie dnes');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'vyzdvihnuté');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Vrátiť sa po lehote splatnosti');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'nevyzdvihol');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Označiť rezerváciu vyzdvihnutú.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Označiť rezerváciu vrátenú.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Označiť vyzdvihnutie rezervácie');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Označiť rezerváciu vrátenú');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cena za deň:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Počet dní:');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Uložiť prepísanie');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'E -mail novým používateľom ich prihlasovacie údaje?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Ak je možnosť Vytvoriť nového používateľa nastavená na možnosť Áno, môžete túto možnosť nastaviť na Nie, aby ste zaistili, že im po vytvorení používateľa nebudú zaslané e -mailom ich prihlasovacie údaje. To môže byť užitočné, ak ste automaticky napríklad pridanie nových používateľov do zoznamu adries a nechcú, aby sa používatelia skutočne prihlásili. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Zobraziť daňový výstup v súhrne súhrnov súčtov rezervačného formulára?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Zabrániť rezervačnému formuláru zobrazovať polia daňových cien v súhrne súčtov nastavením tejto možnosti na Nie');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Prihlásení, registrovaní hostia môžu zrušiť svoje vlastné rezervácie. Tu môžete nastaviť zadržanie vlákna, v dňoch, keď nie je možné rezerváciu zrušiť po určitom počte dní pred dátumom príchodu.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Upraviť profil');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Vzťah typu nehnuteľnosti');
jr_define ('_JOMRES_IMAGE', 'Obrázok');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Kliknutím na písmeno zobrazíte všetky firmy s prvým znakom. Keď máte zoznam nehnuteľností, môžete k nim priradiť sadzby provízií, alebo kliknutím na ikonu "upraviť" zobrazíte firmu \' s štatistiky. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Upraviť sadzbu dane');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Upraviť vlastné pole');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'heslo licenčného servera');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'užívateľské meno licenčného servera');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Ak máte používateľské meno a heslo na licenčnom serveri, zadajte ich sem. To vám pomôže získať prístup k doplnkom, na ktoré máte právo. Ak ste do vyššie uvedeného poľa zadali platný kľúč podpory, potom tu nie je potrebné zadávať používateľské meno/heslo. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Táto verzia Jomres:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Najnovšia verzia Jomres');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Upozornenie: K dispozícii je nová verzia Jomres, odporúčame vám aktualizovať ju čo najskôr.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. Systém Core je bezplatný, ale dá sa vylepšiť inštaláciou doplnkov. Na prístup k týmto doplnkom budete potrebovať licenciu na stiahnutie a podporu. Ak si chcete kúpiť Jomres Starter , Obchodná alebo podniková licencia, <a href="http://www.jomres.net/prices" target="_blank"> navštívte naše stránky </a>, kde nájdete informácie o možnostiach inovácie. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Tento systém je ideálny pre akýkoľvek scenár, či už ide o jednoduchý rezervačný formulár pre jedno vlastníctvo, až po web, ktorý má viacerých používateľov vo viacerých jazykoch a s viacerými vlastnosťami. Pozrite si Pomocníka sekcii v ponuke vrátane stránky Začíname, ktorá vás prevedie vašimi prvými krokmi. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktívna vlastnosť');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Nastavenia e -mailu');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Ak chcete používať tieto alternatívne nastavenia SMTP, nastavte túto možnosť na Áno. Čoraz väčší počet webových hostiteľov blokuje funkcie pošty PHP, takže sa môžete rozhodnúť prekonať nastavenia pošty, ktoré Jomres prevezme od vášho hostiteľa. CMS (zvyčajne Joomla) a tu použite nastavenia podľa vlastného výberu. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'alternatívny hostiteľ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Zmeniť na váš smtp poštový server');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'alternatívny port');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Zmeniť na port smtp');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternatívny protokol');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "V závislosti od nastavení servera smtp nechajte toto pole prázdne alebo zadajte 'ssl' alebo 'tls'. Ak neviete, opýtajte sa svojho poskytovateľa SMTP.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Použiť autentifikáciu');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Ak váš server SMTP vyžaduje prihlásenie klientov, nastavte túto možnosť na Áno. Potom sa použije používateľské meno a heslo.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'alternatívne heslo');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'Rýchle informácie');
jr_define ('_JOMRES_MENU_SHOW', 'Zobraziť');
jr_define ('_JOMRES_MENU_HIDE', 'Hide');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Predvolené');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'ktokoľvek');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'registrovaný');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'manažér');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'super manažér');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nikto');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Ovládanie prístupu do ponuky');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Táto funkcia vám umožňuje ovládať, komu sa v hlavnom menu zobrazí doplnok. Možnosti používateľa 00009 si zvyčajne môžu pozrieť buď/alebo neregistrovaní návštevníci stránok, možnosti 00010 sa vo všeobecnosti týkajú aktivít typu Príjem, ktoré sú používa sa každodenne, zatiaľ čo možnosti 00011 sa používajú na nastavenie a konfiguráciu majetku, ale sú prístupné menej často. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepčný');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'úplné riadenie prístupu');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Nastavte túto možnosť na Áno, aby ste povolili funkciu úplného riadenia prístupu, potom navštívte možnosť Kontrola prístupu v časti Údržba systému a nakonfigurujte riadenie prístupu.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Všimnite si však, že tieto nastavenia neriadia základné skripty, ku ktorým sa pripájajú, takže napríklad ak nastavíte <i> 00009user_option_03_search </i> na 'Správca', používateľ, ktorý pozná Jomres, môže stále zavolajte na j06000search.class.php zadaním adresy http://www.domain.com/index.php?option=com_jomres&task=search do panela s adresou prehliadača. Je to zámerné, pretože táto ponuka Prístupová kontrola jednoducho riadi to, čo je možné vidieť na Hlavná ponuka Jomres. Ak potrebujete prísnejšie ovládanie, nastavte položku Konfigurácia stránky -> Úplné riadenie prístupu na Áno a znova sa vráťte k možnosti Ovládanie prístupu do ponuky. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Úplný prístup');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong> Táto funkcia je len pre pokročilých používateľov. Ak neviete, na čo slúži, a nemáte konkrétny dôvod, prečo ju používať, vráťte sa na stránku Konfigurácia stránky a nastavte úplný prístup. Možnosť ovládania nie. </strong> <br/>
Táto funkcia vám umožňuje ovládať, kto má prístup k akým minikomponentom (s niektorými výnimkami, ktoré sú pevne zakódované v systéme). Ak je úroveň prístupu vedľa názvu skriptu nastavená na Predvolené, potom s možnosťou Úplné riadenie prístupu nastavenou na Áno <strong> ktokoľvek </strong> môže pristupovať k skriptom, ku ktorým by nemal mať prístup, a teda ak to chcete použiť funkciu, MUSÍTE nastaviť úroveň riadenia prístupu pre <strong> každý </strong> tu uvedený minikomponent Jomres. Ak neviete, čo tieto minikomponenty robia, dôrazne vám odporúčame, aby ste túto funkciu vôbec nepoužívali. <br/>
V Jomres sa úrovne prístupu riadia pyramídou, takže správcovia super nehnuteľností sú lepší ako manažéri. Stručne povedané, Super Manager> Manažér> Recepčný> Registrovaný> Neregistrovaný. Ak má teda registrovaný užívateľ prístup k minikomponentu, majú tak aj recepční, manažéri a super manažéri. <br/>
Všimnite si toho, že nemôžete ovládať minikomponenty v oblasti správcu. Ktokoľvek v oblasti správcu je považovaný za dôveryhodného používateľa, pretože by nemal mať zablokovaný prístup k žiadnemu skriptu (obzvlášť k tomuto).
");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Upozornenie! Máte zapnuté úplné riadenie prístupu, ale nastavenia kontroly prístupu sme započítali a porovnali ich s počtom minikomponentov, ktoré by sa mali ovládať, a tieto dva sa nezhodujú, preto môžete mať nejaké skripty, ktoré nie sú kontrolované. Môže ísť o bezpečnostný problém a naliehavo sa odporúča, aby ste to ihneď vyriešili tak, že navštívite funkciu Riadenie prístupu a skontrolujete, či boli použité príslušné úrovne. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Používatelia s právami správcu k tomuto vlastníctvu');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'vaša e -mailová adresa');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametre');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define ('_JOMRES_METATITLE', 'meta názov');
jr_define ('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Pridajte nehnuteľnosť: krok 2 z 2');
jr_define ('_JOMRES_CART_TITLE', 'Moje navrhované rezervácie');
jr_define ('_JOMRES_CART_INFO', 'Upozorňujeme, že tieto rezervácie ešte neboli uložené. Ak sa odhlásite alebo vyprší platnosť vašej relácie, budú stratené. Nezabudnite potvrdiť svoje rezervácie!');
jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potvrdiť rezerváciu (e)');
jr_define ('_JOMRES_CART_OR', 'alebo');
jr_define ('_JOMRES_CART_SAVEFORLATER', 'Uložiť na neskôr');
jr_define ('_JOMRES_CART_NOBOOKINGS_SAVED', 'Ešte nemáte uložené žiadne rezervácie.');
jr_define ('_JOMRES_CART_VIEWCART', 'Zobraziť košík');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'podadresár jazykových súborov');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Predvolený počiatočný bod zemepisnej dĺžky');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Aké by mali byť predvolené počiatočné body zemepisnej šírky/dĺžky pred presunutím značky na mape Google na stránke úpravy vlastností?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'E -maily odoslané z ktorej adresy?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "Nechajte túto voľbu prázdnu, aby ste ju deaktivovali. Jomres použije pri odosielaní e -mailov hosťom e -mailové adresy hotela, avšak vaša e -mailová služba NEMUSÍ povoliť e -maily z ľubovoľných adries (tj. môžu povoliť iba e -maily od jedna autorizovaná adresa). Ak je to tak, potom môžete použiť tento vstup na zadanie adresy, ktorá bude považovaná za FROM adresu pre všetky systémové e -maily. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'zobrazenie zoznamu');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Zobrazenie fotografie');
jr_define ('_JOMRES_COMPARE', 'Porovnať');
jr_define ('_JOMRES_REMOVE', 'Odstrániť');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Späť na výsledky vyhľadávania');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'Pridať k obľúbeným');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'Odstrániť z obľúbených');
jr_define ('_JOMRES_VIEWSHORTLIST', 'View your shortlist');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Dôležité: Zásady používania súborov cookie');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Cookies používame na to, aby boli naše stránky relevantné a ľahko použiteľné.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'Prečítajte si viac ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'právne predpisy EÚ vyžadujú, aby všetky webové stránky jasne uvádzali, či sa používajú súbory cookie, a ich účel.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "Vyhľadávací a rezervačný nástroj na tomto webe si musí pamätať možnosti, ktoré ste zvolili na to, aby fungoval čo najlepšie. Na to je potrebné uložiť informácie, ktoré sú spojené s malým súborom s názvom \ 'cookie \', ktorý jedinečne identifikuje váš prehliadač, a na to, aby sme to urobili, musíte súhlasiť s tým, že môžeme. Ak neprijmete tieto zásady týkajúce sa súborov cookie, budete výrazne obmedzený v tom, čo môžete na tomto webe vykonávať. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Áno, týmto spôsobom prijímam používanie súborov cookie.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Požadovaný vklad je cena prvej noci?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Ceny sú vypočítané na základe ceny za noc. Chcete, aby bol vklad účtovaný ako poplatok za jednu noc? Ak áno, nasledujúce možnosti môžete ignorovať.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Do svojich obľúbených položiek ste nepridali žiadne položky.");
jr_define ('_JOMRES_SAFEMODE', 'Povoliť bezpečný režim?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Nastavením na Áno spustíte bezpečný režim. Tým sa deaktivujú všetky doplnky, takže Jomres bude používať iba jeho základné funkcie.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define ('COMMON_NEXT', 'Next');
jr_define ('COMMON_CANCEL', 'Cancel');
jr_define ('COMMON_SUBMIT', 'Odoslať');
jr_define ('COMMON_SAVE', 'Save');
jr_define ('COMMON_DELETE', 'Delete');
jr_define ('COMMON_RETURN', 'Return');
jr_define ('COMMON_CLOSE', 'Zavrieť');
jr_define ('COMMON_BACK', 'Späť');
jr_define ('COMMON_HOME', 'Home');
jr_define ('COMMON_NEW', 'nový');
jr_define ('COMMON_SEND', 'Send');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha sa používa na zaistenie toho, aby klient používajúci webové formuláre bol ľudská bytosť, a slúži na to, aby zabránil správcom nehnuteľnosti v tom, aby boli spamovaní robotmi na internete. Ak chcete použiť formulár Kontaktujte nás v Jomres you sa bude musieť zaregistrovať na <a href="http://www.google.com/recaptcha" target="_blank"> domovskej stránke Google reCaptcha </a> a nastaviť vo svojej doméne príjem verejných a súkromných kľúčov. Keď tieto kľúče ste dostali, zadajte ich nižšie. Služba reCapcha je bezplatná služba poskytovaná spoločnosťou Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'verejný kľúč');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'súkromný kľúč');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Aby sa predišlo nebezpečenstvu hostí, dvojité rezervácie izieb Jomres používa súbor zámku, aby sa zabránilo pridaniu miestnosti do zoznamu dostupných miestností v rezervačnom formulári, ak už niekto iný pridal izbu k nim na rovnaké dátumy . V predvolenom nastavení tento zámok vyprší za 3600 sekúnd alebo jednu hodinu. Čas, ktorý uplynie do vypršania platnosti tohto zámku, môžete zmeniť zmenou tohto obrázku. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Povoliť šablóny a funkcie bootstrapu Jomres '?");
jr_define ('COMMON_ACTION', 'Action');
jr_define ('COMMON_VIEW', 'View');
jr_define ('BACKTOTOP', 'Späť na začiatok');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Slabý');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define ('_JOMRES_INPUTFILTERING', 'filtrovanie vstupov');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Vstupná úroveň filtrovania');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Väčšina údajov, ktoré sú zadané do systému, je dezinfikovaná tak, že najskôr odstránite všetky html tagy a potom použijete funkciu filtrovania premenných PHP, aby ste zaistili bezpečnosť údajov pred ich vložením do databázy. Možno budete chcieť povoliť určité vstupy (napríklad textové vstupy na stránke podrobností vlastností) na zahrnutie HTML. Existujú dve úrovne filtrovania, ktoré môžete použiť na filtrovanie tohto vstupu, buď slabý alebo silný. Nastavenie Slabé by ste mali používať iba vtedy, ak používatelia zadávajú údajom dôverujete, napr. správcovia systému, inak by ste ho mali nechať nastavený na Silný. Keď je nastavený na silný (odporúčané), stále môžete určiť, ktoré značky chcete povoliť, úpravou nasledujúceho nastavenia 'Značky povolené čističom HTML.") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Povolené vstupné značky');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Môžete upravovať značky, ktoré čistička html umožní prostredníctvom filtračného systému. Predvolené nastavenie je 'p, b, silné, a [href], i' (tj. odsek, tučné, silné, odkazy a kurzíva) ). Ak chcete získať ďalšie informácie o povolených značkách, prečítajte si dokumentáciu o čističi HTML na stránke <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Toto nastavenie môžete zmeniť, ale odporúča sa nechať ho predvolený.");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Povolené vstupy');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Úpravou tejto možnosti môžete definovať, ktoré vstupy formulára umožnia html, akýkoľvek vstup pridaný do tohto zoznamu bude analyzovaný namiesto odstránenia celého html. Predvolená hodnota je: 'property_description property_checkin_times property_policies_disclaimers '. Pridajte ďalšie vstupy pridaním ich z názvov, oddelených medzerou. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Podrobnosti o majetku na kartách?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Nastavte túto možnosť na zobrazenie podrobností vlastností na kartách. Nastavte na nie, aby sa zobrazovali bez záložiek.');
jr_define ('COMMON_PRINT', 'Print');
jr_define ('COMMON_EDIT', 'Upraviť');
jr_define ('COMMON_COPY', 'Copy');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres je navrhnutý tak, aby fungoval v rámci rámcov Bootstrap 2 alebo Bootstrap 3. Keď máte nainštalovanú tému alebo šablónu BS2 alebo BS3, nastavením tohto prepínača vyberte, ktoré z chutí Bootstrapu chcete, aby Jomres fungoval. s. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Použiť šablóny Jomres Bootstrap v klientskom rozhraní?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Tu sú niektoré alternatívy, ktoré by ste mohli zvážiť.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Automaticky zistiť krajinu hosťa?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Systém sa pokúsi automaticky zistiť krajinu hosťa, ak si ju predtým neobjednal. Túto možnosť môžete nastaviť na Nie a definovať krajinu, v ktorej by ste chceli, aby sa zobrazovala v rezervačnom formulári, v ďalšia možnosť.");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'O Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'pomoc');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Začíname');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'riadenie prístupu');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'vývojárske nástroje');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'jazyky');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generovanie príjmu');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'štruktúra stránky');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Môj účet (online)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'funkcia portálu');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'správca doplnkov');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'správy/štatistiky');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'pomoc');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Aktualizácie');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'spôsoby platby');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarif default');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'To platí len pre nové tarify');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definuje počet rokov, ktoré sa majú zobraziť pri úprave typu tarify');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'faktúry');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'detaily účtu');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Prihlásenie');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Odhlásiť sa');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'hľadať');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'dashboard');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'rezerva');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'faktúry');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'nastavenia');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'rôzne');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Upraviť krajinu');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'ID krajiny');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'kód krajiny');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'názov krajiny');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Upraviť región');
jr_define ('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'kód krajiny');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'názov regiónu');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Zoznam krajín');
jr_define ('_JOMRES_COM_LISTREGIONS', 'Zoznam oblastí');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Definície exportu');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Táto funkcia vám umožňuje exportovať preklady, ktoré boli vytvorené pomocou funkcie jazykového prekladu. Vytvorí textové pole so všetkými údajmi potrebnými na vytvorenie nového jazykového súboru, všetko, čo musíte urobiť. skopíruje a prilepí tento výstup do nového jazykového súboru, ktorý môžete vložiť na nový server založený na Jomres, alebo ak chcete prispieť späť do komunity Jomres. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Preložiť miestne nastavenia');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Preložiť reťazce súborov lang');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Chyba, používateľ, do ktorého ste prihlásení, nie je supermanažér v rámci Jomres, túto funkciu nebudete môcť používať, kým nepoužijete funkciu Správcovia vlastností, aby ste sa stali OBOU správcom a super manažér. Toto je bezpečnostná funkcia. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'predvolené rozloženie zoznamu vlastností');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Zostaňte minimálne');
jr_define ('_JOMRES_NIGHTSFOR', 'noci za');
jr_define ('_JOMRES_AGENT', 'Agent');
jr_define ('_JOMRES_AGENT_DETAILS', 'Podrobnosti o agentovi');
jr_define ('_JOMRES_AGENT_LISTINGS', "Výpisy agenta");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automaticky schvaľovať nové vlastnosti');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Ak nastavíte túto možnosť na Nie, budete musieť nové vlastnosti manuálne schváliť. Kým nehnuteľnosť nebude schválená, nemôže byť zverejnená správcom/super správcom majetku.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Schválenia');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Táto vlastnosť ešte nebola schválená. Hneď ako bude schválená, budete ju môcť zverejniť.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Ospravedlňujeme sa, ale túto vlastnosť nemôžete zverejniť, pretože ešte nebola schválená.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Nová vlastnosť vyžaduje schválenie');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Do systému bola pridaná vlastnosť, ktorá vyžaduje vaše schválenie. Kliknutím na odkaz zobrazíte vlastnosti čakajúce na zoznam schválenia:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Váš majetok bol schválený');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Blahoželáme, váš majetok bol schválený. Kliknutím na nasledujúci odkaz zobrazíte ovládací panel zariadenia:');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Názvy regiónov sú preložiteľné');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'Pokiaľ nemáte veľmi rýchly server, odporúčame vám ponechať túto hodnotu nastavenú na hodnotu Nie. Vzhľadom na veľký počet názvov regiónov preklad názvu regiónu zaberá veľa pamäte, čo môže spomaliť výsledky vyhľadávania. dole. ');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Host rezervovaný.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Ospravedlňujeme sa, ale táto e -mailová adresa sa už používa. Ak je to vaša e -mailová adresa, pred pokusom o rezerváciu sa uistite, že ste sa prihlásili.');
jr_define ('JOMRES_TAPTOCALL', 'Klepnutím zavoláte');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Nová recenzia pre');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'Bola ponechaná nová kontrola');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'Nová správa');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'Bola hlásená kontrola pre');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Celkový súčet (bez dane):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'Celkový súčet (vrátane dane):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Celková daň:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Zadajte dve slová:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Zadajte, čo počujete:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Prehrať zvukovú stopu');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'stiahnuť skladbu vo formáte MP3');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Vizuálny režim');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Režim zvuku');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Obnoviť');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Pomoc');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Prepáčte, to bolo nesprávne. Skúste to znova.');
jr_define ('JOMRES_GOOGLE_MAPS', 'možnosti mapy Google');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Použiť vrstvu počasia?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Použiť tranzitnú vrstvu?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Povoliť body záujmu Gmap (vrátane vašich konkurentov)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Naskenovaním tohto kódu do telefónu získate trasu k nám.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Zadané DIČ sa nezdá byť správne. Mali by ste mať niečo také: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Neplatné IČ DPH. Overte si platnosť svojho DIČ pomocou webovej služby na overovanie európskeho čísla DPH (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Gratulujeme. Dokázali sme overiť vaše DIČ.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Zoznam daňových pravidiel');
jr_define ('_JOMRES_TAX_RULE', 'daňové pravidlo');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Daňové pravidlá sa používajú na stanovenie rôznych daňových pravidiel pre rôzne regióny. Tieto daňové pravidlá ovplyvňujú osobu, ktorá robí rezerváciu, ak je zaregistrovaná, prihlásená a upravila svoj účet na stránke upraviť môj účet. Cieľom týchto pravidiel je ubytovať bookerov v tých oblastiach, ktoré sú oslobodené od DPH. Môžete prísť nato, že nemusíte vytvárať žiadne pravidlá, ak vôbec nejaké sú. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Sadzby dovoznej dane');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Ak chcete, môžeme pre vás importovať daňové sadzby do EÚ. Upozorňujeme, že ak použijete túto funkciu, všetky vaše existujúce daňové sadzby budú odstránené.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Upraviť daňové pravidlo');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'DIČ pre toto vlastníctvo.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Zadajte DIČ pre toto vlastníctvo.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'DIČ overené.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'DIČ nie je overené.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Tu zadané obchodné údaje budú použité na faktúrach za provízie a predplatné.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Zdá sa, že ste ešte nevyplnili podrobnosti o svojom účte. Na to, aby sme mohli na stránke uvádzať vaše vlastníctvo, potrebujeme, aby ste mohli pokračovať, vyplňte údaje o svojom účte.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Výroba alebo vývoj?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Ak nastavíte túto možnosť na Vývoj, povolíme hlásenie chýb, v opačnom prípade pri nastavení na Produkcia, ktorá bude vypnutá. Ak ide o aktívny server, odporúčame túto možnosť nastaviť na produkčnú.' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Výroba');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Podrobnosti o zdroji');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tarif details');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'vľavo!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'funkcia zdroja');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Túto funkciu zdroja nie je možné odstrániť, je priradená k zdroju. Odstráňte funkciu z tohto zdroja a skúste to znova.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Pridať obrázky');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Obrázky miestností');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'hlavný obrázok nehnuteľnosti');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Vymazať zoznam');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Vyberte zdroj, pre ktorý chcete odosielať obrázky. Ak môžete odosielať obrázky pre jednotlivé zdroje (napr. miestnosti), dostanete druhý rozbaľovací zoznam na výber konkrétneho zdroja.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Ak ako Hlavný obrázok nehnuteľnosti nahráte viac obrázkov, budú použité v zozname nehnuteľností. Obrázky prezentácie sa zobrazia na stránke podrobností o majetku.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Zobraziť obrázok');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Odstrániť obrázok');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Nahrať obrázok');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Ikony typov miestností');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Ikony vlastností nehnuteľnosti');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Odovzdať všetky súbory');
//8.0
jr_define ('COMMON_PREV', 'Predchádzajúci');
jr_define ('COMMON_MORE', 'More');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Dnes');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'mesiac');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'týždeň');
jr_define ('_JOMRES_DASHBOARD_DAY', 'deň');
jr_define ('_JOMRES_HLEGEND', 'Legenda');
jr_define ('_JOMRES_HFILTER', 'Filter');
jr_define ('_JOMRES_HFROM', 'Od');
jr_define ('_JOMRES_HTO', 'Komu');
jr_define ('_JOMRES_HNEW_BOOKING', 'Nová rezervácia');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'stav vkladu');
jr_define ('_JOMRES_HSTATUS_GUEST', 'stav hosťa');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'stav rezervácie');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'stav publikovania');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'stav faktúry');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'typ faktúry');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Schválené');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Aktuálna činnosť');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Zobraziť rezervácie pre');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Zobraziť faktúry pre');
jr_define ('_JOMRES_STATUS_ANY', 'Any');
jr_define ('_JOMRES_STATUS_PAID', 'zaplatené');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Nezaplatené');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Pokladňa');
jr_define ('_JOMRES_STATUS_ACTIVE', 'aktívny');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Zrušené');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Publikované');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Nezverejnené');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Hostia s aktívnymi rezerváciami');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Hostia s predchádzajúcimi rezerváciami');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'Rezervácie');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Predplatné');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Provízie');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'Všetky moje firmy');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Nastaviť ako aktuálne');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Pokladňa');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'vlastnosti');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'hostia');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'správy');
jr_define ('_JOMRES_HLIST_GUESTS', 'hostia');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Zoznam hostí');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Zoznam faktúr');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Vlastnosti');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Rýchla rezervácia');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'dátum rezervácie');
jr_define ('_JOMRES_HTWO_WEEKS', 'Dva týždne');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Táto rezervácia bude zrušená. Rezerváciu zrušíte stlačením OK.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Aktuálni obyvatelia');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'umiestnenie navigačného panela');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Predvolené (oblasť obsahu)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Opravené hore');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Upevnené na dno');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Invertovaný navbar (zmena farby)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'číslo rezervácie');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zobraziť hostí pre');
jr_define ('_JOMRES_BOOTSTRAP_VERSION', 'verzia bootstrapu');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres obsahuje vlastné sady šablón, jednu pre každú podporovanú verziu Bootstrapu. Šablóny/témy Joomla a Wordpress, ktoré sú založené na Bootstrap, ponúknu konkrétnu verziu Bootstrapu, takže sa musíte uistiť, že zvolená možnosť Tu je kompatibilný s vašou šablónou/témou. Ak vaša téma neposkytuje žiadny kód Bootstrap, nastavte túto možnosť na možnosť Žiadny bootstrap v téme a potom Jomres automaticky zahrnie súbory Bootstrap 3 na vlastné použitie. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zobraziť hostí pre');
jr_define ('_JOMRES_HFIXED_PERIODS', 'fixné obdobia');
jr_define ('_JOMRES_HDEPOSITS', 'Vklady');
jr_define ('_JOMRES_HBOOKING_FORM', 'Rezervačný formulár');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Povinné polia');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define ('SIMPLE_CONFIGURATION', 'Jednoduchá konfigurácia');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Vlastnosti zdrojov');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Typ zdroja');
 jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Upraviť typ hosťa');
jr_define ('_JOMRES_HEDIT_COUPON', 'Upraviť kupón');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Upraviť navyše');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Vytvoriť viac zdrojov');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generovať zdroje');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Koľko zdrojov?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maximálny počet hostí na zdroj');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Vymazať všetky existujúce zdroje?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Upozorňujeme, že si v súčasnosti prezeráte oblasť administrátora s nastavením Advanced Site Config nastaveným na Nie. Ak chcete vidieť viac možností, nastavte Konfigurácia stránky -> Rôzne -> Rozšírená konfigurácia stránky na Áno.');
jr_define ('DATATABLES_SINFO', 'zobrazuje sa _START_ až _END_ z _TOTAL_ záznamov');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Schválenie');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Odmietnuť žiadosť o rezerváciu');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Schváliť požiadavku na rezerváciu');
jr_define ('_JOMRES_STATUS_APPROVED', 'Schválené');
jr_define ('_JOMRES_STATUS_REJECTED', 'Zamietnuté');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Dopyt');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Rezervácie vyžadujú schválenie alebo potvrdenie dostupnosti?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ak je nastavený na áno, pri rezervácii sa nezobrazí v kalendároch dostupnosti (a ostatní hostia si môžu tieto dni a zdroje stále rezervovať), kým správca nehnuteľnosti neprijme/nepotvrdí dostupnosť rezervácie . Po potvrdení je rezervácia vložená ako predbežná (ak nepreberá iné rezervácie; ostatní hostia si už nemôžu rezervovať rovnaké dátumy) a zákazníkovi je odoslaný e -mail na uskutočnenie platby. ');
jr_define ('_JOMRES_ERROR', 'Chyba');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Ospravedlňujeme sa! Pri pokuse o spracovanie tejto funkcie sa vyskytla chyba. Nahlásili sme to pre vás a my sa na to pozrieme.');
jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Správa');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Súbor');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mailové šablóny');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Upraviť šablónu e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'predmet e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'text v e -maile');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'typ e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'meno v e -maile');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'Popis e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Na tejto stránke nájdete pomoc s prispôsobením e-mailov a zoznamom dostupného výstupu: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your -toolbar/settings/254-email-templates target="_blank"> Pomocník pre e-mailové šablóny </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'administrátor nového rezervačného e -mailu');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E -mail odoslaný správcovi stránky pri novej rezervácii, ak je povolená globálna brána Paypal');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E -mail odoslaný majiteľovi nehnuteľnosti pri novej rezervácii');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'hosť nový rezervačný e -mail');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -mail odoslaný hosťovi pri novej rezervácii');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'potvrdzujúci list hosťa');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'list alebo e -mail na tlač, ktoré môže vlastník nehnuteľnosti odoslať ručne na potvrdenie rezervácie');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Túto rezerváciu je možné schváliť. Všetky vybrané zdroje sú k dispozícii pre vybrané dátumy.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Túto rezerváciu nie je možné schváliť, pretože niektoré zdroje sú už rezervované na vybrané dátumy. Najprv budete musieť rezerváciu zmeniť.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Zobraziť odkaz Powered by Jomres v päte Jomres.');
jr_define ('GUEST_BUDGET', 'Budget');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Použiť funkciu rozpočtu?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Iba bootované stránky! Funkcia Budget je funkcia v zozname nehnuteľností, ktorú môže hosť použiť na zvýraznenie nehnuteľností, ktorých cena za noc je pod určitým číslom. Táto funkcia má určité obmedzenia, pretože môže nie je vhodné pre niektoré weby, ktoré používajú mnoho rôznych mien. Upozorňujeme, že ak používate tento a doplnok Odporúčané zoznamy, trieda zabaľovania odporúčaných záznamov sa automaticky zmení na 'primárny panel', keď sa zobrazí zoznam vlastností.");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name:');
jr_define ('_JOMRES_FOR', 'Za');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'noc');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'noci');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Chcete v zozname vlastností používať živé posúvanie/nekonečné posúvanie?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'február');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'apr');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'máj');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'jún');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'júl');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'aug');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'nov');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'dec');
jr_define('DATATABLES_SEMPTYTABLE', 'Nie sú k dispozícii žiadne dáta');
jr_define('DATATABLES_SINFO', 'Záznamy _START_ až _END_ z celkom _TOTAL_');
jr_define('DATATABLES_SINFOEMPTY', 'Záznamy 0 až 0 z celkom 0 ');
jr_define('DATATABLES_SINFOFILTERED', '(vyfiltrované spomedzi _MAX_ záznamov)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', ',');
jr_define('DATATABLES_SLENGTHMENU', 'Zobraz _MENU_ záznamov');
jr_define('DATATABLES_SLOADINGRECORDS', 'Načítavam...');
jr_define('DATATABLES_SPROCESSING', 'Spracúvam...');
jr_define('DATATABLES_SSEARCH', 'Hľadať:');
jr_define('DATATABLES_SZERORECORDS', 'Nenašli sa žiadne vyhovujúce záznamy');
jr_define('DATATABLES_SFIRST', 'Prvá');
jr_define('DATATABLES_SLAST', 'Posledná');
jr_define('DATATABLES_SNEXT', 'Nasledujúca');
jr_define('DATATABLES_SPREVIOUS', 'Predchádzajúca');
jr_define('DATATABLES_SSORTASCENDING', ': aktivujte na zoradenie stĺpca vzostupne');
jr_define('DATATABLES_SSORTDESCENDING', ': aktivujte na zoradenie stĺpca zostupne');
jr_define ('DATATABLES_SHOWHIDE', 'Zmeniť stĺpce');
jr_define ('_BOOKING_ONREQUEST', 'Rezervácia na požiadanie');
jr_define ('_BOOKING_INSTANT', 'Okamžitá rezervácia');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Zahrnúť sadu ikon Úžasné písmo?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Nastaviť na Áno, ak vaša šablóna neobsahuje Font Awesome.');
jr_define ('_BOOKING_CALCQUOTE', 'Požiadať o rezerváciu');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Vyberte web');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'krajina EU?');
jr_define ('_JOMRES_HLASTCHANGED', 'naposledy zmenené');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E -mail na zrušenie rezervácie hotela');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E -mail odoslaný vlastníkovi nehnuteľnosti pri zrušení novej rezervácie');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'e -mail so zrušením rezervácie hosťa');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -mail odoslaný hosťovi pri zrušení novej rezervácie');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Odoslať testovací e -mail');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Testovací e -mail');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Toto je testovací e -mail z vášho rezervačného systému.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testovací e -mail bol úspešne odoslaný');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testovací e -mail nebol odoslaný');
jr_define ('_INVOICE_TRANSACTIONS', 'Transakcie');
jr_define ('_OPENEXCHANGE_API', 'kľúč API pre otvorené výmenné kurzy');
jr_define('_OPENEXCHANGE_API_DESC', 'Na prevádzanie cien medzi službami budete potrebovať kľúč API Open Exchange Rates. Na správne zobrazenie cien v Jomres MUSÍTE mať kľúč API, môžete sa však <a href="https://openexchangerates.org/signup/free" _target="_blank"> zaregistrovať na bezplatný kľúč </a> (každú hodinu) aktualizácie, 1 000 žiadostí mesačne - žiadne HTTPS, e -mailová podpora ani pokročilé funkcie). Jomres sťahuje výmenné kurzy raz denne, pokiaľ teda použijete kľúč iba na niekoľkých webových stránkach, pravdepodobne tieto limity neprekročíte. Pred verziou Jomres 8.3 sme používali staršiu, nezdokumentovanú funkciu Yahoo, ale zistili sme, že používanie tejto funkcie je v rozpore so zmluvnými podmienkami spoločnosti Yahoo. V dôsledku toho musíme predpokladať, že táto funkcia môže v budúcnosti niekedy zmiznúť, a teda zmena používania otvorených výmenných kurzov.');
jr_define ('_JOMRES_COMMISSION', 'Komisia');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ak odovzdáte viacero obrázkov pre jednotlivé voliteľné doplnky, použije sa iba prvý obrázok.');
jr_define ('_JOMRES_COMMISSION', 'Komisia');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Ak odovzdáte viacero obrázkov pre jednotlivé voliteľné doplnky, použije sa iba prvý obrázok.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Zaplatiť teraz');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Táto faktúra je teraz splatná. Kliknutím na tlačidlo vyberte spôsob platby.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Tu je zoznam niektorých skvelých vecí, ktoré si môžete kúpiť pri rezervácii tohto zariadenia.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'Na tejto stránke môžete nakonfigurovať akékoľvek nainštalované brány. Tieto možnosti vám umožňujú prijímať platby za akékoľvek provízie alebo predplatné faktúry. Nastavenia rozhrania frontend je možné prepísať iba prostredníctvom služby Paypal, všetky ostatné brány bude potrebné nakonfigurovať prostredníctvom Konfigurácia vlastníctva -> karta Brány, ak sa však v tomto zozname objaví brána, mala by byť schopná spracovať platby za vklad rezervácie aj platby na faktúru.');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Zobraziť na stránke podrobností nehnuteľnosti?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'nastavenia stránky s podrobnosťami o majetku');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Správa nehnuteľností v Jomres sa vykonáva iba z klientskych serverov cpanel. Na tejto stránke budete môcť uviesť všetky vlastnosti systému, takže môžete priradiť sadzby provízií a schváliť/neschváliť ich (ak tieto funkcie sú povolené). Ak chcete vytvoriť nové vlastníctvo, upravovať existujúce, spravovať rezervácie alebo akékoľvek iné úlohy súvisiace s vlastníctvom/rezerváciami, budete sa musieť prihlásiť na frontend webu a prejsť na predvolenú stránku Jomres. Tam uvidíte Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Ikony funkcií miestnosti');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'kategórie vlastností majetku');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Upraviť kategóriu vlastností majetku');
jr_define ('_JOMRES_HCATEGORY', 'Category');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Zobraziť vlastnosti nehnuteľnosti rozdelené do kategórií?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Nastavením na ÁNO rozdelíte vlastnosti nehnuteľnosti do kategórií. Táto možnosť ovplyvní iba vlastnosti vlastníctva zobrazené na stránke podrobností vlastníctva. Všetky ostatné stránky ich zobrazia bez rozdelenia do kategórií.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Vrátiť kontrolu');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Zrušiť platbu');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Nevydané');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Váš kľúč na stiahnutie a podporu je platný, doplnky si budete môcť sťahovať prostredníctvom správcu doplnkov.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Váš kľúč na stiahnutie a podporu NIE JE platný, nebudete si môcť sťahovať doplnky prostredníctvom správcu doplnkov.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'podtyp');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Ešte ste nenastavili podtyp svojho majetku. Tu ho definujete ako 5-izbovú vilu alebo 4-izbovú chatu a pomôže hosťom, ktorí hľadajú, spresniť vyhľadávanie.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Poskytnite svojmu majetku podtyp');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mailové šablóny');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Nastavenia kontaktu');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Tu môžete prepísať všetky kontaktné údaje nehnuteľnosti (e -mail, telefón, fax), takže všetka komunikácia s hosťami bude odoslaná vám a nie vlastníkom nehnuteľnosti.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Chcete prepísať kontaktné údaje záznamov?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Ak je táto možnosť nastavená na Áno, budú e -mailové adresy a telefónne čísla vlastníctva nahradené tými, ktoré sú uvedené na tejto karte. Vďaka tomu bude všetka komunikácia odosielaná na vašu nominovanú e -mailovú adresu, čím sa zaistí, že hosť a zariadenie vlastník nemôže obísť rezervačný systém a poplatky za províziu, ktoré z toho vyplývajú. Znamená to tiež, že pri každej zmene popisu nehnuteľnosti bude nehnuteľnosť nastavená na Neschválené (ak je povolená funkcia schvaľovania) a popis budete musieť skontrolovať manuálne aby sa ubezpečil, že manažéri nezadali telefónne alebo e -mailové údaje do textových polí pred ich ďalším schválením. ');
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'zmeny vykonané v podrobnostiach záznamu vyžadujú overenie správcom stránky. Ak uložíte nové podrobnosti, váš záznam bude zrušený a čaká sa na schválenie správcom webu, než sa znova zobrazí návštevníkom stránok. Nebudete môcť prijímať online rezervácie, zatiaľ čo váš záznam je nezverejnený a čaká na schválenie. ");
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Skontrolovať žiadosť o rezerváciu');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Potvrdiť žiadosť o rezerváciu');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Zmeniť žiadosť o rezerváciu');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Označiť faktúru ako čakajúcu');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktúra označená ako čakajúca');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Odosielať anonymné údaje o sledovaní?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Vyberte Áno, ak chcete odosielať anonymné údaje o sledovaní na Jomres.net, ktoré nám pomôžu lepšie porozumieť používaniu systému.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Pred pokusom o rezerváciu v mene svojich klientov sa uistite, že ste vyplnili svoje údaje na stránke Upraviť môj účet.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "kontaktné údaje hosťa");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - nový hosť -');
jr_define ('_JOMRES_CHARTS', 'Charts');
jr_define ('_JOMRES_CHARTS_SELECT', 'Vybrať graf ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'príjem podľa roku/mesiaca');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', 'Ok, začnime. Najprv musíte pre túto vlastnosť vytvoriť niekoľko miestností.');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Vytvoriť niekoľko miestností');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Výskum ukázal, že vlastnosti s množstvom vysokokvalitných obrázkov generujú viac zobrazení. Nahrajte hlavný obrázok a niekoľko obrázkov z prezentácie, aby ste zvýšili svoje šance na rezerváciu.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Nahrať obrázok');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Vytvoriť nejaké tarify');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Čo si rezervujú hostia?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Je tento typ nehnuteľnosti hotelovým typom, kde prenajímate izby v objekte, alebo nehnuteľnosťou typu vila, kde prenajmete celý objekt jednou rezerváciou?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Izby v objekte');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Celý majetok');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // Toto je dočasné nastavenie, ktoré poskytuje spätnú kompatibilitu existujúcim používateľom, ktorí ešte neaktualizovali svoje typy vlastníctiev. Nebude to voliteľné
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Čo si rezervujú hostia?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', 'Budete musieť vyplniť údaje o svojej adrese, aby vás vaši hostia mohli nájsť, keď prídu na pobyt.');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Aktualizovať adresu');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Hops, zdá sa, že ste zabudli vyplniť všetky polia.');
jr_define ('_JOMRES_CONTANT_US', 'Kontaktujte nás');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Vitajte vo svojom novom online zozname pre');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Dobrý deň, vitajte vo svojom novom majetku na');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', 'Nedávno ste na naše webové stránky pridali nové vlastníctvo a radi by sme vás privítali v rodine.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Môžete vidieť svoj nový informačný panel');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'tu');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', 'Hneď po inštalácii svojho majetku môžete navštíviť, ako bude vyzerať návštevník stránok');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'vaša titulná stránka.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(nie je zverejnené, takže ho návštevníci stránok zatiaľ nevidia).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "V hornej časti stránky uvidíte niekoľko správ. Tlačidlá vedľa týchto správ vás zavedú na stránky, ktoré musíte navštíviť, aby ste mohli nastaviť svoje vlastníctvo na našich stránkach. Hneď ako ' Vykonali sme každú z týchto úloh a bude pre návštevníkov našich stránok oveľa jednoduchšie nájsť váš majetok a vykonať rezerváciu online. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Ak máte nejaké otázky, prosím');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontaktujte nás');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8', "a radi odpovieme na všetky vaše otázky.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Všetko najlepšie, náš tím na');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Zdá sa, že nemáte žiadne zájazdy na predaj. Vytvorte profil zájazdu a potom pomocou tlačidla Generovať vytvorte niektoré zájazdy.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Vytvoríme niekoľko prehliadok!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Zameniť umiestnenie symbolu meny');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Túto možnosť použite na presun symbolu meny zozadu, dopredu pred údaj o cene alebo naopak.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Zadajte ID svojej facebookovej stránky, napríklad "jomres". Toto pole nechajte prázdne, aby sa nič nezobrazovalo. Nezadávajte https://www.facebook.com ani nič iné.');
jr_define ('COMMON_DOWNLOAD', 'Download');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Ďalej budete musieť pridať niektoré tarify. Toto sú vaše základné ceny.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap nie je povolený!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Varovanie, v konfigurácii stránky Jomres -> Rôzne nemáte povolený Bootstrap. Na poskytovanie <i> niektorých </i> funkcií Jomres v súčasnosti používa svoje staré šablóny založené na používateľskom rozhraní jQuery, na týchto sa však niekoľko rokov nepracovalo. Všetok súčasný vývoj a vylepšenia šablón Jomres (súbory s rozložením) sa vykonávajú v súboroch šablón Bootstrap 3. Aby ste z Jomres vyťažili maximum, odporúčame vám nainštalovať aplikáciu Bootstrap 3 téma pre Wordpress alebo Joomla. Keď to urobíte, môžete povoliť šablóny Jomres Bootstrap v konfigurácii webu.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Váš kľúč podpory je platný. Upozorňujeme, že táto licencia nepovoľuje sťahovanie doplnkov.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Presunutím rezervácií do tejto oblasti ich zrušíte');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Uistite sa, že ste vytvorili stránku WordPress, ktorá obsahuje krátky kód [jomres: xx-XX] (kde xx-XX je kód jazyka vašej stránky, napríklad [jomres: en-GB] alebo [ jomres: sk-sk]) inak nebudete mať prístup k Jomres z frontendu na správu vašich vlastností a rezervácií. <br> Jomres je postavený na rámci Bootstrap, takže ho musíte použiť na tému založenú na Bootstrap. My odporučiť jeden na základe Bootstrap 3. Ak k téme nemáte prístup, odporúčame vám použiť tému Jomres Leohtian pre Wordpress, ktorú môžete <a href = "https://www.jomres.net/download/free- downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress target="_blank"> sťahovať odtiaľto. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Väčšina nehnuteľností v Jomres má proces správy prenájmu. Hotely/penzióny/penzióny prenajímajú jednotlivé izby a chaty/vily/byty prenajímajú celý majetok. Toto nie je viditeľné pre správcu nehnuteľnosti, ale pre nich Aby ste mohli vytvárať tarify pre svoj majetok, musíte najskôr pridať typy izieb, ktoré sú vhodné pre daný typ nehnuteľnosti.
Napríklad typ hotelového majetku by normálne potreboval niekoľko typov izieb (dvojlôžkové izby, jednolôžkové izby a dvojčatá), zatiaľ čo vila môže mať iba jeden typ izby, napr. 2 spálne, 5 spální.
Pre nehnuteľnosti, ako je Tours, je možné vytvoriť typy miestností. To umožňuje zákazníkom vyhľadávať iba nehnuteľnosti, ako sú zájazdy, ale správca nehnuteľností pre tento typ vlastníctva nevytvorí tarify, takže proces správy pre nich nie je relevantný.
');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Kliknutím pridáte nové typy izieb');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Upozornenie, máte jeden alebo viac typov nehnuteľností bez typov izieb. Vlastnosti vyžadujú typy miestností, aby správcovia nehnuteľností mohli vytvárať tarify.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Pomocou tlačidla Nové vytvorte nové typy miestností.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Žiadne rezervácie/Nehnuteľnosti (jednoduchý zoznam)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'umiestnenie súboru denníka');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'na jednu nad vašim koreňom webového dokumentu. Ak nerozumiete, čo to znamená, požiadajte svojich webových hostiteľov o radu, pretože budú poznať váš súborový systém.');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres zaznamenáva podrobné informácie o vašom systéme vrátane kľúčov api, systémových ciest, brány a informácií o hosťovi, ktoré by nemali byť pre zvyšok internetu viditeľné. Vaša cesta k denníku systému nie je nastavená, takže systémové denníky sa v súčasnosti ukladajú do adresára '.JOMRES_SYSTEMLOG_PATH.', čo nie je ideálne. Navštívte stránku Konfigurácia stránky -> Ladenie a vo svojom súborovom systéme nastavte cestu, ktorá sa nachádza mimo webového koreňa. V prípade pochybností sa obráťte na svojich webových hostiteľov. pretože vám budú vedieť poradiť. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Ak je váš CMS nainštalovaný v koreňovom adresári vášho webu, potom by bolo vhodné umiestnenie');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nemáte nastavený kľúč pre Mapy Google. Vzhľadom na nedávne zmeny v Mapách Google budú všetky nové weby potrebovať kľúč API, aby mohli používať funkcie mapy Google. <a href = 'http: //www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key 'target =' _ blank '> pozrite si našu manuálovú stránku o tom, ako vytvoriť kľúč API < /a> a uložte kľúč v Jomres. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'farebná schéma mapy Google');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Správne, začneme pridávať tvoje vlastníctvo na webovú stránku. Potrebujeme tu zhromaždiť trochu informácií o vašom majetku. To nám umožní nastaviť holé kosti vášho majetku. Keď to bude hotové, potom vy Prevediem vás pridaním miestností, cien a fotografií.");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1','Typ nehnuteľnosti vám pomôže definovať, ako bude nehnuteľnosť rezervovaná, napríklad v hoteloch, ktoré predávate naraz len jednu alebo dve miestnosti, zatiaľ čo vo vilách ponúkate celý majetok. ');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Všimnite si toho, že e -mailová adresa nemusí byť rovnaká ako tá, ktorú ste použili pri registrácii svojho účtu. To vám umožní mať rôzne adresy pre rôzne vlastnosti.");
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'minimálny vklad');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Môžete nakonfigurovať minimálnu výšku vkladu, ktorá sa má účtovať. Ak tak urobíte, potom nastavenia Požadovaný vklad je cena za prvú noc & Požadovaný vklad je percento v Konfigurácii nehnuteľnosti nie je možné nakonfigurovať. , namiesto toho sú všetky hodnoty vkladu v percentách a musia byť aspoň na úrovni, ktorú tu definujete. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Tento údaj nemôže byť menší ako');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'hostiteľ Syslog');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Ak chcete odosielať správy o protokolovaní systému na server syslog, môžete tu nastaviť názov hostiteľa alebo IP (napr. 192.168.0.2) a port (napr. 514). Ak je stránka nastavená na ' Vývoj ', potom sa odošlú správy DEBUG. Ak je nastavené na' Produkcia ', budú odoslané iba správy INFO a vyššie. Ak chcete zakázať protokolovanie na vzdialený server, vyprázdnite polia hostiteľa a portu. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP nemá prístup k funkciám PHP 'openlog' a 'syslog'. Toto je nastavenie na strane servera, ak chcete, aby Jomres odosielal správy na server syslog, obráťte sa na svojich hostiteľov. a potvrďte, či má PHP prístup k týmto funkciám. Po povolení budete môcť konfigurovať nastavenia servera syslog tu. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Odoslať e -mail správcovi stránok, keď sa vyskytne chyba?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historické problémy, ktoré by mali byť preskúmané, boli zaslané e -mailom majiteľom stránok. To môže byť skvelé na sledovanie chodu vášho systému, pretože má strašne veľa pohyblivých častí a je ťažké ho sledovať. bohužiaľ, pavúky a roboti, ktorí prehľadávajú vaše stránky (dokonca aj priateľské), môžu neúmyselne spôsobiť smrteľné chyby, čo môže spôsobiť, že počet prijatých správ bude ohromujúci. Ak je to tak, nastavte túto možnosť na Nie. Jomres odosiela protokolovanie správy do súboru protokolovacích súborov a na server syslog (ak to vaše konkrétne nastavenia PHP umožňujú a ak nie, kontaktujte svojho hostiteľa). Súbory môžete manuálne analyzovať, ak hľadáte niečo konkrétne (napríklad ak vyvíjate bránu a chcete použiť volanie funkcie gateway_log ().), ale to je veľa informácií na prehľadávanie, takže je lepšie použiť niečo ako analyzátor súborov syslog. Ak vyvíjate na Linuxe, potom máte k dispozícii veľa nástrojov, ak v systéme Windows potom jednoduchý nástroj, ktorý môžete použiť, je http://maxbelkov.github.io/visualsyslog/ Na tejto stránke nastavte 'hostiteľa Syslog'na '127.0.0.1'a ' Port 'na 514, aby ste videli správy prihlásené v tomto nástroji. ");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Spravovať vlastnosti');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nemáte nastavený kľúč API pre zisťovanie IP. Toto je potrebné, aby systém mohol automaticky detekovať polohu používateľa a automaticky nastaviť jeho menu a krajinu. <a href = 'http: // www .jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab 'target =' _ blank '> see our manual stránka o tom, ako vytvoriť kľúč API zisťovania IP </a> a uložiť ho v Jomres> Konfigurácia webu> Prevody meny / kódy mien. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nemáte sadu kľúčov API pre otvorené výmenné kurzy. Je to potrebné, aby systém mohol automaticky sťahovať a používať výmenné kurzy mien. <a href = 'http: //www.jomres.net /manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab 'target =' _ blank '> pozrite sa na našu manuálovú stránku o tom, ako vytvorte kľúč API pre zisťovanie IP </a> a uložte ho v Jomres> Konfigurácia webu> Prevody meny / kódy mien. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'číslo povolenia');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Niektoré krajiny predpisujú, že musíte pre svoj majetok zobraziť číslo povolenia. Ak také číslo máte, zadajte ho sem a bude pridané do sekcie záhlavia vlastníctva.');
jr_define ('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "Doplnok <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot MUSÍ byť nainštalovaný a povolený, aby tieto krátke kódy fungovali. To nájdete v Správcovi doplnkov Jomres. Ak bola táto stránka vytvorená pomocou Rýchle štarty, potom je pravdepodobne už nainštalovaný. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Musíte zaistiť, aby bol povolený doplnok <strong> 'Jomres Shortcodes' </strong>. Nájdete ho v Správcovi doplnkov Jomres. Ak bol tento web vytvorený pomocou jedného z rýchlych štartov, je to pravdepodobne už nainštalované.");
jr_define ('SHORTCODE_TASK', 'Úloha');
jr_define ('SHORTCODE_DESCRIPTION', 'Description');
jr_define ('SHORTCODE_ARGUMENTS', 'Argumenty');
jr_define ('SHORTCODE_EXAMPLE', 'Príklad');
jr_define ('INTEGRITY_CHECK', 'Kontrola integrity systému súborov');
jr_define ('INTEGRITY_CHECK_DESC', 'Táto funkcia vám umožňuje skontrolovať, či sa súborový systém zhoduje s tým, ktorý je dodávaný v aktuálnej verzii Jomres. Je to užitočné pri zaistení správnej aktualizácie všetkých súborov po inštalácii/aktualizácii. Súbory v červenom chýbajú, súbory v Oranžové existujú, ale líšia sa od tých, ktoré sú dodávané v aktuálnej verzii. Tu budú uvedené iba súbory, ktoré sú potenciálnymi problémami. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Kontrola integrity systému súborov');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'hash verzie');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Úžasné! Neboli nájdené žiadne problémy.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'značka máp Google');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Čítať ďalej');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'čítať menej');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'turistická daň');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'sadzba turistickej dane');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Nastavte sadzbu turistickej dane. Turistická daň sa vypočíta až po vygenerovaní počiatočnej rezervácie a pridá sa na stránku potvrdenia rezervácie do poľa doplnkových služieb.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Je percento?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Nastaviť na Áno, ak je daň v percentách, alebo Nie, ak je to paušálny poplatok.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Ovplyvňuje celú hodnotu rezervácie?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Nastavte na Áno, ak má daň pokrývať celú hodnotu rezervácie, je to teda percento z ubytovania plus prípadné príplatky, alebo nie, ak sa počíta iba na základe hodnoty celkový poplatok za ubytovanie. Ak je možnosť 'Je percento'vyššie nastavená na možnosť Nie, táto možnosť sa ignoruje. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Upozorňujeme, že k tejto rezervácii bude pripočítaná turistická daň. Daň uvidíte na stránke rezervácie recenzií.');
jr_define ('NO_LICENSE_MESSAGE', 'V konfigurácii stránky ste neuložili licenčné číslo, a preto nebudete môcť sťahovať doplnky. Keď budete mať uložený platný licenčný kľúč, budete môcť nainštalovať všetky doplnky, ktoré sú uvedené ako Základné doplnky. ');
jr_define ('INVALID_LICENSE_MESSAGE', "Zdá sa, že používate licenčné číslo, ktoré je neplatné alebo ktorého platnosť vypršala. Keď si uložíte platný licenčný kľúč, budete si môcť nainštalovať všetky doplnky, ktoré sú uvedené ako základné doplnky.");
jr_define ('VALID_LICENSE_MESSAGE', "Blahoželáme, používate platné licenčné číslo a môžete si nainštalovať základné doplnky prostredníctvom správcu doplnkov Jomres.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Táto stránka vám umožňuje nahrávať obrázky pre váš majetok a veci, ktoré ponúkate. Má jedno hlavné tlačidlo a druhé tlačidlo, ktoré vám umožňuje vybrať konkrétne zdroje, pre ktoré sa majú obrázky nahrávať. Takže hlavné vlastníctvo obrázok a prezentácia zobrazí iba jedno tlačidlo, ale ak ste vytvorili nejaké napr. voliteľné doplnky alebo miestnosti, zobrazí sa vám druhé tlačidlo, do ktorého môžete odosielať obrázky pre tieto konkrétne zdroje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Táto stránka vám umožňuje nahrávať obrázky pre váš majetok a veci, ktoré ponúkate. Má jedno hlavné tlačidlo a druhé tlačidlo, ktoré vám umožňuje vybrať konkrétne zdroje, pre ktoré chcete obrázky nahrávať. Takže hlavná vlastnosť obrázok a prezentácia zobrazí iba jedno tlačidlo, ale ak ste vytvorili akékoľvek voliteľné doplnky, zobrazí sa vám druhé tlačidlo, do ktorého môžete odosielať obrázky pre tieto konkrétne zdroje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Najprv vyberte obrázky, ktoré chcete nahrať, kliknutím na položku Pridať obrázok alebo pomocou myši. Zobrazia sa v stĺpci na pravej strane. </li>
  <li> Nad touto oblasťou vyberte pomocou tlačidla \"Vybrať zdroj\" zdroj, pre ktorý chcete odovzdať obrázky. Možno vám bude ponúknutá možnosť vybrať si konkrétny zdroj pod ním. </li>
  <li> Keď vyberiete zdroj, môžete ho potom kliknutím na tlačidlo Odovzdať obrázok pod obrázkom priradiť k danému zdroju. Po nahraní obrázok zmizne zo stĺpca na pravej strane stránky a zobrazí sa vľavo. </li>
  <li> Pomocou tlačidla Kôš vedľa existujúcich obrázkov odstráňte obrázky, ktoré už nechcete, aby sa zobrazovali. </li>
  <li> Poradie zobrazovania súborov v prezentácii môžete zmeniť tak, že ich pred odoslaním premenujete, pretože sa na stránkach zobrazujú v abecednom poradí. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Vedľa tlačidla Zdroj sa môže zobraziť tlačidlo Náhľad. Ak na toto kliknete, zobrazí sa vyskakovacie okno, ktoré vám ukáže, ako budú aktuálne nahrané obrázky vyzerať na stránke. Pomôže vám to predstavu o tom, ako budú obrázky vyzerať pre vašich zákazníkov. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Počet obrázkov, ktoré je možné nahrať, nie je nijako obmedzený. Pri odosielaní obrázkov sa automaticky zmení veľkosť. Môžete nahrať iba súbory JPG a PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "V ideálnom prípade by všetky obrázky, ktoré odovzdáte, boli najmenej");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixely široké, inak môžu po nahraní vyzerať rozmazane.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Všetky obrázky, ktoré odovzdáte, nemôžu mať viac ako");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "vo veľkosti.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', 'Vyberte zdroj, pre ktorý chcete nahrať obrázky');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Špecifický zdroj");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Obrázky už boli nahrané pre tento zdroj");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'formátovanie textu');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Tu môžete zadávať text pomocou jednoduchého formátovania Markdown. Nepotrebujete poznať žiadny HTML, stačí použiť tlačidlá, aby informácie vyzerali tak, ako chcete, alebo formátovať text podľa týchto príkladov.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'dôraz');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'tučné');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kurzíva');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'prečiarknuté');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Hlavičky");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'veľká hlavička');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Stredná hlavička");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Malá hlavička');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Drobná hlavička');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Zoznamy");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'všeobecná položka zoznamu');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'číslovaná položka zoznamu');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Odkazy');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Text na zobrazenie');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citáty');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Toto je citát.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'To can span multiple lines!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Obrázky');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabuľky');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Stĺpec');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Zobraziť vlastnosti ako prezentáciu v zozname vlastností?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ak je nastavené na áno, bude sa zobrazovať prezentácia hlavných obrázkov vlastností. Ak je nastavená na nie, zobrazí sa prvý hlavný obrázok vlastnosti.');
jr_define ('EDIT_CMS_USER', 'Upraviť používateľa CMS');
jr_define ('BOOKING_MADE_BY', 'Rezervácia vykonaná');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Vybavenie');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Typy izieb');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Adresa URL externého rezervačného formulára');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Tu môžete nastaviť externú adresu URL, ak chcete na vytváranie rezervácií používať webovú stránku tretej strany. Všetky tlačidlá rezervácie jomres budú smerovať na túto adresu URL. Ak chcete použiť rezervačný formulár Jomres, nechajte toto pole prázdne. . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'slogan (krátky popis miestnosti/podtitul)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Popis miestnosti');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'hostia na čiernej listine');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ak je tento hosť na čiernej listine, potom už nebude môcť vykonávať rezervácie v tomto majetku.');
jr_define ('_JOMRES_SESSION_HANDLER', 'obsluha relácie');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Uložiť súbory relácie jomres na disk alebo do databázy. Odporúčané: databáza');
jr_define ('_JOMRES_MAP_HEIGHT', "Výška mapy (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Úroveň priblíženia mapy");
jr_define ('_JOMRES_MAP_MAPTYPE', "Typ mapy");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Správca prepísania šablóny");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Balíky šablón sú doplnky, ktoré môžu poskytovať prepísateľné šablóny pre rôzne základné súbory šablón Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Táto stránka obsahuje všetky súbory šablón, ktoré je možné prepísať súbormi šablón balíka šablón. Ak chcete prepísať určitý súbor šablóny, kliknite na tlačidlo Upraviť pre príslušný súbor, na ďalšej stránke budete môžete si vybrať, ktorou verziou chcete prepísať. Upozorňujeme, že tieto prepísania majú prednosť pred jadrom Jomres Core a akýmkoľvek prepísaním témy/šablóny Wordpress alebo Joomla. Prepísanie môžete deaktivovať jeho odstránením na stránke Prepísania šablón zoznamu. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "názov šablóny");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuálna cesta");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nie je prepísané");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Zmenou rozbaľovacieho zoznamu si môžete vybrať, ktorý súbor šablóny prepíše súbory základnej šablóny");
jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "percentuálne rezervované izby");
jr_define ('_JOMRES_SELECT_WIDGETS', "Vybrať miniaplikácie");
jr_define ('_JOMRES_INTERVAL', "Interval");
jr_define ('_JOMRES_TIMELINE', "Časová os");
jr_define ('_JOMRES_CPANEL_GRID', "rozloženie domovského ovládacieho panela");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Vyberte rozloženie mriežky domovskej stránky ovládacieho panela pre správu vlastností frontendu.");

jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Obrázky miest");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Zmenou typu nehnuteľnosti sa odstránia všetky miestnosti, tarify, nastavenia vlastníctva a vynuluje sa dostupnosť.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Upozorňujeme, že po aktualizácii musíte aktualizovať všetky už nainštalované doplnky Jomres prostredníctvom správcu doplnkov Jomres. Ak máte nainštalované základné doplnky, ale nemáte platnú licenciu Jomres, potom <em> urobíme neodporúčame </em> aktualizovať Jomres, pretože staršie doplnky často nemusia fungovať s novšími verziami Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Upozorňujeme, že po aktualizácii musíte aktualizovať všetky už nainštalované doplnky Jomres prostredníctvom správcu doplnkov Jomres.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Ak chcete aktualizovať Jomres a jeho doplnky, budete potrebovať licenciu na obnovenie. Navštívte <a href='https://www.jomres.net/pricing' target='_blank'> naše ďalšie stránky </a>. Vo väčšine prípadov sú tieto licencie 50% z ceny úplnej licencie. Pred kúpou obnovenia sa uistite, že ste sa prihlásili do nášho obchodu. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', 'Spôsob platby:');

jr_define ('_JOMRES_PRICES', "Pripojte sa");


jr_define ('_OAUTH_TITLE', "Správa kľúčov aplikácie");
jr_define ('_OAUTH_APPS', "Podrobnosti o klientovi REST API");
jr_define ('_OAUTH_IDENTIFIER', "identifikátor");
jr_define ('_OAUTH_APIKEY', "ID klienta");
jr_define ('_OAUTH_SECRET', "Secret");
jr_define ('_OAUTH_CREATED', "Vytvorená/aktualizovaná aplikácia");
jr_define ('_OAUTH_CLIENT_ID_INFO', "ID klienta a tajomstvo sú vytvorené pre vás. Identifikátor slúži na jednoduchú identifikáciu tohto páru kľúčov.");
jr_define ('_OAUTH_SCOPE_TITLE', "Povolenia (čo môže klient robiť)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Používateľské oprávnenia");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Povolenia vlastníctva");

jr_define ('API_DOCUMENTATION_TITLE', "App REST API dokumentácia");

jr_define ('_OAUTH_CONFIG', "Konfigurácia jadra API");

jr_define ('_OAUTH_CONFIG_SHOW', "Zobraziť možnosti konfigurácie klienta API v hlavnom menu Jomres?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Môžete sa rozhodnúť nezobrazovať možnosti konfigurácie klienta API v sekcii 'Môj účet' v hlavnom menu Jomres. Môžete sa namiesto toho rozhodnúť, že ich chcete zobraziť na iných stránkach pomocou Jomres Shortcodes.");

jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Zobrazí stránku základnej dokumentácie API. API Core umožňuje používateľom vytvárať klientov API, ktorí sa potom používajú na prístup k funkciám API, ktoré sú popísané v dokumentácii API Core.");

jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Zobrazí stránku základnej správy rozhrania API, kde môžu správcovia vlastností konfigurovať klientov API. Upozorňujeme, že toto je funkcia iba pre registrovaných používateľov, takže používatelia si musia túto stránku zobraziť a zaregistrovať sa.");

jr_define ('API_METHODS_TITLE', "metódy API");
jr_define ('API_METHODS_DESCRIPTION', "Tento zoznam metód je založený na vašich nainštalovaných doplnkoch funkcií API a je generovaný automaticky. Ak nainštalujete alebo odstránite doplnok funkcie API, musíte navštíviť túto stránku a znova vytvoriť tento zoznam metód API dostupných na vašom webe. ");

jr_define ('_OAUTH_REDIRECT_URI', "Redirect URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Dajte mi meno, ktoré je pre vás zmysluplné, napríklad Môj telefón");

jr_define ('_OAUTH_GRANT_TYPES', "Tento systém podporuje dva typy grantov, poverenia klienta a implicitné. Ak používate tok <em> client_credentials </em>, budete potrebovať ID klienta aj tajomstvo klienta. Ak používate <em > implicitne </em> potom by vaša aplikácia odoslala iba ID klienta a prihlásili by ste sa do systému, aby ste danú aplikáciu výslovne autorizovali. ");

jr_define ('_OAUTH_IMPLICIT_NOTES', "Ak chcete použiť tok typu grantu <em> implicitný </em>, budete musieť použiť túto adresu URL na autorizáciu svojich aplikácií. Keď sa táto adresa URL zavolá a autorizujete aplikáciu, ktorú systém vydá token, ktorý potom vaše aplikácie použijete na volanie rozhrania API tohto systému ");
jr_define ('_OAUTH_AUTHORISATION_URL', "autorizačná URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );
jr_define ('_WEBHOOKS_CONFIG_SHOW', "Zobraziť možnosti konfigurácie Webhooku v hlavnej ponuke Jomres?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Môžete sa rozhodnúť nezobrazovať možnosti konfigurácie Webhooku v sekcii 'Môj účet' v hlavnom menu Jomres. Môžete sa namiesto toho rozhodnúť, že ich chcete zobrazovať na iných stránkach pomocou Jomres Shortcodes.");

jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "dokumentácia Webhooks");

jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Zobrazí stránku základnej dokumentácie API. API Core umožňuje používateľom vytvárať klientov API, ktorí sa potom používajú na prístup k funkciám API, ktoré sú popísané v dokumentácii API Core.");

jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Zobrazí stránku základnej správy rozhrania API, kde môžu správcovia vlastností konfigurovať klientov API. Upozorňujeme, že toto je funkcia iba pre registrovaných používateľov, takže používatelia si musia túto stránku zobraziť a zaregistrovať sa.");

jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Integration ID');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL alebo názov');
jr_define ('WEBHOOKS_ENABLED', 'Enabled');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'Metóda autentifikácie/Integrácia');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Akékoľvek webhooky, ktoré vytvoríte, sa nespustia, pretože nie ste priradení k žiadnym vlastnostiam. Super správcovia vlastností spravidla nemajú priradené jednotlivé vlastnosti, takže na vytváranie webhooku budete možno potrebovať nového používateľa.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Akékoľvek webhooky, ktoré vytvoríte, budú spustené podľa nasledujúcich vlastností:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'limit recenzií');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Toto nastavenie použite na obmedzenie počtu recenzií zobrazených na stránke s podrobnosťami o nehnuteľnosti.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Zobraziť všetky recenzie');

jr_define ('VIDEO_TUTORIALS', 'Video návody');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimálna hodnota vkladu');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ak je vypočítaný vklad menší ako tento údaj, nastavte namiesto neho vklad na túto hodnotu. Tento údaj môže byť sám prehnaný, ak nespĺňa nastavenie minimálneho vkladu na webe. Nechajte ho nastavený na 0 až nepoužívajte nastavenie. ");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Na zvýšenie rýchlosti vášho webu odporúčame importovať detaily existujúceho webu a obrázky vlastností do databázy.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importovať detaily existujúcich obrázkov do databázy');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Experimentálna funkcia. Ak je táto možnosť povolená, obrázky nahrané pomocou funkcie mediálneho centra sa skopírujú aj do vášho vedra Amazon S3 a budú sa zobrazovať z adresy URL vedra Amazon S3. Pri prvom povolení budete tiež zobrazí výzva na import existujúcich obrázkov do vášho vedra S3. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'doména CloudFront');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Vymeňte predvolenú doménu Amazon S3 za svoju doménu CloudFront');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Odporúča sa povoliť. Len pre Windows a Mac OSX, ak libcurl nebol vytvorený s podporou Schannel alebo Secure Transport (natívne knižnice SSL zahrnuté v systéme Windows a Mac OS X), mali by ste to nastaviť na Č. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'povolili ste integráciu Amazon S3, takže budete musieť skopírovať všetky existujúce obrázky do svojho vedra S3. Obrázky sa teraz budú návštevníkom vašich stránok zobrazovať z adresy URL vášho Amazon S3, takže budete potrebovať skopírujte ich najskôr do svojho vedra S3, inak ich návštevníci vašich stránok neuvidia. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Keď kliknete na toto tlačidlo, neprerušujte proces a nečakajte na úspech alebo chybové hlásenie. V závislosti od rýchlosti servera môže dokončenie chvíľu trvať.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopírovať existujúce obrázky do vedra Amazon S3');


jr_define ('JOMRES_INCOMPLETE', 'Neúplné');
jr_define ('JOMRES_WATING_APPROVAL', 'Čaká na schválenie');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'mapa podrobností majetku');

jr_define ('HAS_STARS_TITLE', 'Umožňuje klasifikáciu hviezd?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Vynútiť opätovné importovanie podrobností o obrázku do databázy');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Vynútiť opätovné načítanie obrázkov do vedra S3');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Odstrániť všetky údaje Jomres pri odinštalovaní?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Ak je nastavený na áno, Jomres pri odinštalovaní odstráni všetky svoje databázové tabuľky. Týmto sa z db odstránia všetky údaje Jomres a nie je možné ich vrátiť späť.');
jr_define ('TRANSACTION_IDS', 'ID transakcie');
jr_define ('PAYMENT_METHOD', 'Payment method');
jr_define ('POA_DISPLAY_PRICE', 'cena POA');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Keď sú vlastnosti zobrazené v zozname, systém sa pokúsi nájsť platnú cenu z nakonfigurovaných taríf na základe buď dnešného dátumu, alebo ak boli pri vyhľadávaní použité dátumy, potom na základe týchto dátumov . Ak to nemôže byť, zobrazí sa POA (Cena podľa aplikácie), čo znamená, že hosť by vás mal kontaktovať a požiadať o cenu. Ak chcete, môžete tu nakonfigurovať cenu, ktorá sa zobrazí namiesto textu POA. Tento obrázok bola by zobrazená záložná cena, ak nie je možné určiť inú cenu. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Pred inštaláciou doplnkov Jomres musíte nainštalovať správcu doplnkov, chcete to urobiť teraz?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Pred aktualizáciou všetkých nainštalovaných doplnkov musíte aktualizovať správcu doplnkov, chcete to urobiť teraz?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', 'Poďme na to!');

jr_define ('INCLUDEINFILTERS', 'Zahrnúť do filtrov?');
jr_define ('INCLUDEINFILTERS_DESC', 'Filtre vlastností vlastnosti v Ajax Composite Search môžu byť veľmi dlhé, takže môžete nastaviť túto možnosť na Nie, aby sa táto funkcia nezobrazovala v zozname vlastností vlastnosti.');

jr_define ('REVIEW_REMINDER_PT1', "Máte");
jr_define ('REVIEW_REMINDER_PT2', "rezervácie, na ktoré ste zatiaľ nezanechali recenziu. Zanechajte prosím recenziu.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Rezervácie čakajúce na recenzie");
jr_define ('REVIEW_NAG', "Nag hostí za recenzie?");
jr_define ('REVIEW_NAG_DESC', "Akonáhle bude hosť rezervovaný z rezervácie, systém mu pripomenie, aby poslal recenziu na svoju rezerváciu. Ak chcete túto pripomienku deaktivovať, nastavte túto možnosť na Nie.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Skryť adresu?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Ak nastavíte túto možnosť na Áno, adresu ulice ubytovacieho zariadenia budú môcť vidieť iba hostia, ktorí už vo vašom hoteli uskutočnili rezerváciu. Toto nastavenie môžete použiť na skrytie presnej polohy zariadenia. ak je napríklad bežne ponechaný bez dozoru. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimalizovať obrázky pri odosielaní?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Keď je táto možnosť povolená, obrázky budú optimalizované pre web (veľkosť súboru môže byť až o 75% menšia). V závislosti od typu nahraného obrázku musí byť na vašom serveri hostiteľom nainštalovaná jedna alebo viac týchto knižníc poskytovateľ: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Kontrola integrity databázy');
jr_define ('OBSOLETE_FILES_CHECK', 'Kontrola zastaraných súborov');
jr_define ('DATATABLES_COLVIS', 'viditeľnosť stĺpca');

jr_define ('API_TOKEN_LIFETIME', 'životnosť tokenu API');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Ako dlho zostane token API v sekundách platný. 86400 = 1 deň, 31536000 = 1 rok');


jr_define ('ENCRYPTION_TITLE', 'Encryption');
jr_define ('ENCRYPTION_FILE_LOCATION', 'umiestnenie súboru so šifrovaním');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Nikdy neodstraňujte šifrovací súbor ** <br/> Užívateľské údaje sú uložené šifrovane v tabuľkách, aby sa zabezpečilo, že "údaje v pokoji" budú bezpečne chránené v súlade s odporúčaniami GDPR. Štandardne je šifrovací kľúč je uložený v súbore encryption_key.class.php v koreňovom adresári vašej inštalácie Jomres (zvyčajne /public_html /jomres). Môžete zmeniť miesto, kde je súbor uložený. Ak zmeníte umiestnenie, musíte súbor PRESUNÚŤ, nečakajte, kým Jomres vytvorí novú verziu, inak nebudete môcť dekódovať detaily svojich hostí. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Informácie, ktoré tu uložíte, budú použité na faktúrach generovaných pre toto vlastníctvo');

jr_define ('_JOMRES_GDPR_POLICIES', 'zásady GDPR');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Tu môžete nakonfigurovať, ako dlho po vytvorení rezervácie alebo faktúry bude zo systému odstránená, aby sa zaistilo, že budete v súlade s GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'Obdobie uchovávania rezervácií (v dňoch)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Koľko dní po dátume odchodu z rezervácie by mala byť rezervácia vymazaná? Keď je vymazaná, rezervácia aj faktúra budú odstránené. Typická doba uchovávania môže byť 365 dní.');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'obdobie uchovávania faktúry (bez rezervácie)');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Ostatné faktúry, ako napríklad provízie a faktúry za predplatné, nie sú viazané na rezervácie. V dôsledku toho nebudú odstránené, keď budú odstránené faktúry a zmluvy z rezervácie. V závislosti od vašej krajiny a vašich vlastných obchodných praktík, budete musieť nakonfigurovať iné obdobie uchovávania. Typická doba uchovávania môže byť 3653 dní, čo je 10 rokov. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Vaše údaje');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Niektoré funkcie týchto webových stránok vyžadujú ukladanie informácií o vašej návšteve. Slúžia iba na poskytovanie služieb vám, nikdy sa nezdieľajú s nikým iným a vymažú sa, keď už nebudú potrebné.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DÁTE NÁM POVOLENIE NA UCHOVÁVANIE TÝCHTO INFORMÁCIÍ ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Podrobne');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Musíte súhlasiť s tým, aby sme tieto údaje ukladali, aby ste si mohli na tomto webe vykonávať rezervácie. Bez ohľadu na to, či súhlasíte s ukladaním vašich údajov, uložíme do vášho počítača súbor cookie, ktorý nám dá vedieť nás, či ste sa prihlásili alebo nie. Pomáha nám to zaistiť, že sa vás nebudeme neustále pýtať, či sa chcete alebo nechcete prihlásiť alebo nie, a neobsahuje žiadne informácie umožňujúce identifikáciu osôb. Ak zmeníte názor, môžete kedykoľvek navštíviť stránku Povolenia aplikácie, kde sa môžete prihlásiť alebo odhlásiť. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informácie sú uložené pre rôzne časové obdobia v závislosti od povahy vašej návštevy. Ak sa teda len rozhliadate, uložíme informácie o približnej geografickej polohe (na úrovni krajiny). Ak vykonávate vyhľadávanie, potom na aby boli vyhľadávacie formuláre užívateľsky prívetivejšie, uložíme posledné veci, na ktorých ste hľadali. Tieto informácie sa zvyčajne uchovávajú maximálne 24 hodín a slúžia len na spríjemnenie vašej návštevy. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Keď si u nás urobíte rezerváciu, budú nevyhnutne uložené ďalšie informácie.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Techniky rezervačného formulára sú zachytené a uchovávané maximálne 60 dní. Je to potrebné, aby sa rezervácie na požiadanie mohli po schválení rezervácie zmeniť na úplné rezervácie a na analýzu našimi tímami. v prípade problému s rezerváciou. Ak ste pri rezervácii neboli prihlásení, pošleme vám e -mail s používateľským menom a heslom, aby ste si mohli prezrieť svoju históriu rezervácií a uplatniť svoje právo na zabudnutie (RTBF), ak chcem to urobiť. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Údaje zadané do rezervačného formulára, napríklad meno, e -mailová adresa, skutočná adresa, sa uchovávajú maximálne 365 dní po dátume odchodu rezervácie. Tieto informácie sú v šifrovanej forme uložené v našej databáze. aby si ho mohli pozrieť iba autorizovaní ľudia. Ak urobíte rezerváciu, musíme podľa zákona uložiť vaše PII, kým je rezervácia platná. Keď je rezervácia dokončená, buď preto, že bola zrušená alebo ste boli odhlásení, potom budete môcť vykonávať svoje RTBF prihlásením sa a navštívením stránky Vaše údaje. Fakturačné informácie o dokončených rezerváciách budú aj naďalej bezpečne uložené v našej databáze, aby sme zaistili, že sa budeme riadiť príslušnými daňovými zákonmi, ale budete môcť odstrániť všetky ostatné údaje umožňujúce zistenie totožnosti. po dokončení rezervácie. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Keď súhlasíte s ukladaním vašich informácií, ako je popísané vyššie, sme zo zákona povinní tento súhlas uložiť do našej databázy. Tieto informácie budú zahŕňať vaše IP číslo a obsah formulára na prihlásenie. Budeme ponechať si toto oznámenie o súhlase na neurčito (je to zákonná požiadavka). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Ešte ste nám nepovedali, či o vás môžeme zhromažďovať informácie umožňujúce zistenie totožnosti');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Súhlasili ste s tým, aby sme zhromažďovali potrebné informácie umožňujúce zistenie totožnosti na uskutočnenie rezervácií');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Povedali ste nám, aby sme nezhromažďovali informácie umožňujúce zistenie totožnosti');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Nedali ste nám povolenie na zhromažďovanie vašich súkromných údajov');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Aby sme na tejto webovej stránke mohli vykonávať určité akcie, musíme o vás zhromažďovať informácie umožňujúce zistenie totožnosti, ale nedali ste nám na to povolenie.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Zmeňte svoje povolenia');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Pokračovať v prezeraní vlastností');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'Povolenia aplikácie');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'údaje o hosťovi');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Toto sú údaje, ktoré pre vás ukladajú rôzne nehnuteľnosti. Rôzne hotely môžu uchovávať rôzne záznamy v závislosti od toho, čo ste zadali pri rezervácii.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'V žiadnom hoteli v tomto systéme nie sú uložené žiadne údaje');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profilové údaje');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Toto je hlavný súbor údajov, ktorý pre vás uchovávame, odlišný od tých, ktoré zdieľate s inými vlastnosťami.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Neuložili ste žiadne profilové informácie');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Toto sú osobne identifikovateľné informácie, ktoré pre vás ukladáme na tomto webe. Sú skonštruované vo formáte JSON (JavaScript Object Notation), ktorý je odľahčeným formátom na výmenu údajov. Pre ľudí je ľahké ich čítať a čítať. písať a pre stroje je ľahké ich analyzovať a generovať. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'anonymizované');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Vaše údaje');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE',' Prijatím tejto zmluvy o podmienkach použitia (táto "dohoda") súhlasíte, že:

<ul>
<li>
Ste oprávnení rezervovať hotely prostredníctvom tejto webovej stránky;
</li>
<li>
Máte najmenej 18 rokov;
</li>
<li>
Máte zákonné oprávnenie vytvárať záväzný právny záväzok;
</li>
<li>
Stránku budete používať v súlade s touto zmluvou;
</li>
<li>
Stránku budete používať iba na vytváranie oprávnených rezervácií pre seba alebo pre inú osobu, za ktorú máte zákonné oprávnenie konať;
</li>
<li>
Také ďalšie osoby budete informovať o tejto dohode, ktorá sa vzťahuje na výhrady, ktoré som v ich mene urobil, vrátane všetkých pravidiel a obmedzení, ktoré sa na ne vzťahujú;
</li>
<li>
Všetky informácie, ktoré ste na Web poskytli, sú pravdivé, presné, aktuálne a úplné; a
</li>
<li>
Budete chrániť informácie o svojom účte a budete dohliadať a budete úplne zodpovední za akékoľvek použitie vášho účtu vami a kýmkoľvek iným ako vami.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Bezpečnosť a transparentnosť sú pre nás dôležité.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Berieme svoju zodpovednosť za ukladanie vašich údajov veľmi vážne. Všetky informácie umožňujúce identifikáciu osôb (PII) sú v našej databáze uložené šifrovane pomocou štandardných algoritmov, ktoré zaisťujú, že tieto informácie môžu vidieť len autorizovaní užívatelia.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Môžete si stiahnuť všetky PII, ktoré pre vás ukladáme.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Stiahnuť teraz');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Veríme, že by ste mali byť schopní <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> odstrániť </a> svoje < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Osobné identifikačné údaje </a>, ak chcete a ak je to možné. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Nie ste na tomto webe registrovaní. Vaša všeobecná poloha (krajina) a číslo IP budú uložené maximálne 24 hodín a potom odstránené.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Nie ste na tomto webe registrovaní a odhlásili ste sa zo zberu údajov. Vaše PII sme neuložili.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Ste na stránke zaregistrovaní a nemáte žiadne čakajúce ani aktívne rezervácie. Väčšinu informácií, ktoré pre vás v súčasnosti uchovávame, môžeme anonymizovať. Chcete to urobiť?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE',' Poznámka: Týmto sa váš účet nevymaže, iba sa anonymizujú naše záznamy, takže váš účet nemôže byť spojený s vami ako osobou. Podľa zákona musíme vaše PII uchovávať na účely fakturácie, budeme však vymazať všetky záznamy hostí. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Ste zaregistrovaný na webe, ale máte nevyrovnané rezervácie a v súčasnosti nemôžeme anonymizovať vaše údaje. Tieto údaje budú uchovávané maximálne jeden rok po dokončení rezervácie, potom budú budú odstránené, ak sa ho nerozhodnete odstrániť skôr. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS',' Pretože ste správcom nehnuteľnosti na našom webe, nemôžeme vám ponúknuť možnosť automatického vymazania vašich údajov. Namiesto toho nás kontaktujte priamo, aby sme mohli vaše vlastníctva priradiť inému správcovi. Akonáhle to urobíme a odstránime váš status správcu nehnuteľnosti, budete môcť automaticky vymazať svoje údaje. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Zabudni na mňa!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Toto nie je možné vrátiť späť!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Vaše údaje boli vymazané!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Ospravedlňujeme sa, nemôžete vykonať rezerváciu, pretože vaša e -mailová adresa je neplatná');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Táto stránka vám dáva možnosť anonymizovať všetkých hostí, ktorí majú svoje informácie uložené v systéme. To vám umožní byť v súlade s GDPR, ale na tejto stránke nemôžete upravovať žiadne ďalšie informácie. Ak to chcete urobiť musíte sa prihlásiť do klientskeho rozhrania ako správca nehnuteľnosti. Predpokladá sa, že vás kontaktoval historický hosť so žiadosťou, aby ste mu umožnili uplatniť právo na zabudnutie. Ak sa nedokážu prihlásiť do klientskeho rozhrania webu (možno používateľ pre nich nebol vytvorený pri rezervácii), potom môžete túto oblasť použiť na ich anonymizáciu, akonáhle potvrdíte ich identitu. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'anonymizovať hosťa');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'VYMAZANÉ VLASTNÍCTVO');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'údaje hosťa anonymizované');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'nemožno anonymizovať');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Na uskutočnenie rezervácie potrebujeme vaše povolenie na uloženie vašich informácií. Súhlas nám dáte KLIKNUTÍM sem.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Povoliť funkcie kompatibilné s GDPR?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NEDOPORUČUJEME, ABYSTE ZAKÁZALI FUNKCIONALITU GDPR. Jomres má vstavané funkcie, ktoré vám pomôžu zaistiť súlad sekcie Jomres na vašom webe s GDPR. Ak túto funkciu deaktivujete (a nemali by ste, ak ste v EÚ alebo obchodujete s občanmi EÚ), potom Jomres bude automaticky predpokladať, že každý návštevník stránok udelil svoje povolenie na povolenie svojich osobných údajov. Povolenia aplikácií a stránky Moje údaje nebudú zobrazené a používatelia nebudú vyzvaní, aby udelili súhlas so zhromažďovaním údajov. ');


jr_define ('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define ('EMPTY_TEMP_DIR_DONE', 'dočasné súbory vymazané');

jr_define ('MACHINE_TRANSLATION', 'Strojové preklady');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Zdrojový jazyk');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Je možné pripojiť funkciu strojového prekladu. To vám umožní zadávať reťazce v jednom jazyku a preklady je možné načítať zo vzdialených služieb. Uvedomte si, že nie všetky prekladateľské služby podporujú všetky jazyky. Pozrite sa na tieto služby pre viac detailov.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Typ miestnosti');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'nový typ miestnosti');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'správca, alebo môžete pridať svoju vlastnú. Keď máte jeden alebo viac typov miestností, môžete potom vytvoriť miestnosti pre tento typ miestností. Keď budete mať miestnosti, budete môcť pre tieto miestnosti vytvoriť tarify (ceny), pretože tarify sú prepojené s typmi miestností . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Manažéri môžu vytvárať typy izieb?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Túto možnosť použite na konfiguráciu, či si manažéri môžu alebo nemôžu vytvárať vlastné typy miestností v klientskom rozhraní. Dôrazne odporúčame, aby ste pri prvom použití Jomresu ponechali túto možnosť nastavenú na hodnotu Nie, obzvlášť ak vytvárate portálu, pretože by ste mali vytvoriť všetky typy miestností v oblasti správcu. Typy miestností vytvorené správcami sa budú zobrazovať vo vyhľadávacích formulároch, ale pretože tieto typy miestností sú špecifické pre jednotlivé vlastnosti, vo výsledkoch vyhľadávania sa zobrazí iba jedna nehnuteľnosť, ak je vybratý tento typ miestnosti počas hľadania. Ak chcete, aby iba typy správcov nehnuteľností mohli vytvárať typy miestností, ponechajte túto možnosť nastavenú na možnosť Áno a pomocou doplnku Access Control povoliť zobrazovanie možnosti ponuky Nastavenia> Typy miestností iba super správcom. Iba nehnuteľnosti, ktoré sa prenajímajú Túto možnosť môžu využiť vonkajšie miestnosti v objekte a režimy úprav taríf Pokročilé alebo Mikromanáž. Vlastnosti typu Vila/Apartmán ju nebudú môcť využívať. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'typ miestnosti/majetku aktualizovaný');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Zobraziť typy izieb v možnostiach vyhľadávania');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Ak sa rozhodnete povoliť správcom nehnuteľností vytváranie vlastných typov izieb, môžete si vybrať, či chcete tieto vytvorené typy izieb zobrazovať, alebo nie, v možnostiach vyhľadávania, kde ste sa rozhodli zobrazovať typy miestností.' );


jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Nemali by ste opakovane používať rovnakú e-mailovú adresu pre každú rezerváciu. <br/> Ak máte pre svoju firmu jedinečnú doménu (napr. nie e-mailovú adresu pre e-mail), použite telefónne číslo hosťa ako ich e -mailová adresa. E -mailová adresa by potom vyzerala podobne ako 123456@mydomain.com <br/> Tým sa zabezpečí vytvorenie nového hosťa pri vytváraní rezervácie. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'e -mailová adresa');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'heslo');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Sme radi, že by ste si u nás chceli znova rezervovať. Aby ste mohli spravovať všetky svoje rezervácie spoločne, je potrebné, aby ste sa prihlásili, aby bolo možné rezerváciu pridať do vášho účtu. To platí aj pre zaisťuje, že ste oprávnení používať uvedenú e-mailovú adresu. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Ak nepoznáte svoje heslo, môžeme vám poslať e -mail na obnovenie hesla. Pri resetovaní hesla postupujte podľa pokynov v tomto e -maile.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Zabudli ste heslo?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonymizovať svoje meno?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Ak sa pri kontrole rozhodnete anonymizovať svoje meno, použijeme namiesto toho vaše iniciály.');
jr_define ('ANONYMOUS', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'povedal');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Odpovedať na túto recenziu');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Sem zadajte svoju odpoveď na túto recenziu.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Vaša odpoveď');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Hlavná recenzia');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Skontrolovať odpoveď uloženú');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Pred odoslaním odpovede na recenziu si musíte prečítať nasledujúce položky. Odoslaním odpovede potvrdzujete, že súhlasíte s týmito obchodnými podmienkami.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Aké sú naše pravidlá pre odpoveď na recenziu?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'odpovedáte na kontrolu svojho majetku. <em> Nesmiete </em> použiť svoju odpoveď ako proces obchodného sporu. Ak potrebujete nahlásiť recenziu, musíte použiť Nahlásiť Tlačidlo Skontrolovať v zozname, a nie na tejto stránke s odpoveďou na recenziu. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Keď svoju odpoveď opustíte, nebudete ju môcť upraviť.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'povolené a podporované');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Úplná odpoveď na kontrolu. </li>
    <li> Zdvorilosť a poctivosť. </li>
    <li> Rozumné reakcie na problémy recenzenta (pamätajte, že ostatní môžu mať podobné problémy, ale nevyužili príležitosť na uverejnenie recenzie). </li>
    <li> Povzbudzujte hosťa, aby vás kontaktoval priamo pri riešení problémov.
    <li> Vždy pamätajte, že budúci hostia uvidia vašu odpoveď. Uistite sa, že ste vždy profesionáli. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nie je povolené');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Obchodné spory. </li>
    <li> Otázky pre recenzenta alebo ostatných. </li>
    <li> Otázny jazyk (vrátane nadávania). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'posledný spustený');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Plán');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'čísla faktúr');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Použiť vlastné čísla faktúr?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Systém môžete nakonfigurovať tak, aby používal vlastné čísla faktúr. Ovplyvnené budú iba nové faktúry.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'štartové číslo');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Čísla sa vytvárajú postupne. Aké by malo byť prvé číslo?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Aký formát má mať číslo faktúry?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Tu nakonfigurujte formát čísla faktúry. Formát môže vyzerať ako {N}/{D} alebo {N}/{Y}, kde N je automaticky generované číslo, D = dátum vo formáte RRRRRMMDD ( 20190131) alebo Y = RRRR (2019). Všetky ostatné alfanumerické znaky, ktoré nie sú uzavreté v zložených zátvorkách, zostanú osamotené, takže vzor, ​​ktorý vyzerá ako {N}/{D} -L, by mal za následok číslo faktúry (21), ktoré vyzerá niečo ako 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'Doplatok');
jr_define ('_JOMRES_SURCHARGE_DESC', 'dodatočný poplatok, ktorý bude pri rezervácii účtovaný (vypočítaný za deň)');

jr_define('_JOMRES_PDF_BUTTON', 'PDF');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Chcete uprednostniť štítky na celom webe?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Vlastný text uložený na stránkach úprav štítkov alebo na stránkach reťazcov prekladu súborov jazyka translate je považovaný za štítky "celého webu". Správcovia vlastníctiev môžu tiež prispôsobiť štítky pre každé vlastníctvo pomocou funkcie úpravy štítkov v klientskom rozhraní. To umožňuje správca nehnuteľnosti mať pre svoj majetok rôzne texty, čo je užitočné vtedy, ak sa vlastníctvo líši od všetkých ostatných vlastností na webe. <br/> Keď systém hľadá texty štítkov, bude uprednostňovať texty na celom webe pred vlastníctvom. konkrétne texty znamenajú, že ak pre daný štítok existuje text na úrovni celého webu, systém najskôr vyberie ten. Ak nastavíte túto možnosť na Nie, systém bude uprednostňovať texty špecifické pre vlastníctvo pred textami pre celé stránky. ');

jr_define ('_JOMRES_REFERRER', 'Referrer');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Toto by sa dalo zmeniť, ak by ste boli na zozname povolených, takže web 'Najlepšia rezervačná stránka na svete'by to zmenil na 'WBBS'alebo podobne.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Knižničné balíčky');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Moduly dodávateľa a uzla sú samostatné (bezplatné) balíky pre Jomres. Balíky môžete znova nainštalovať na tejto stránke.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Opätovne nainštalovať balíky knižníc');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Nie je možné odstrániť typ vlastnosti, pretože ho stále používajú niektoré vlastnosti. Tieto vlastnosti musíte najskôr zmeniť na iný typ vlastnosti, než sa pokúsite odstrániť túto vlastnosť. Identifikátory UID, ktoré zabraňujú vymazaniu:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Náhodné e -mailové adresy');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Ponuka náhodných e -mailov');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Môžete systému povoliť generovanie náhodných e -mailových adries v rozbaľovacom zozname Rýchla rezervácia na hlavnom paneli. To umožňuje manažérom a recepčným vytvárať rezervácie pre hostí, pre ktoré nemajú e -mailové adresy, ktoré majú fungovať. ako šetrič času pre weby s mnohými recepčnými/manažérmi, ktorí chápu, že tieto náhodné e -maily nebudú nikdy použité na skutočnú komunikáciu, je účelom obísť skutočnosť, že v Jomres musia mať všetci hostia e -mailové adresy. MUSÍTE tiež poskytnúť doménu v ďalšie pole. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Doména náhodných e -mailov');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Toto by nemala byť normálna e -mailová doména, napríklad gmail alebo outlook. Namiesto toho to môže byť buď vaša vlastná doména, alebo niečo úplne iné, napríklad "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'oblasť nahrávania');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'žiadna užívateľská rola');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepčný');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'správca majetku');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'pozastavené');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'vymazané z CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Ak sa vám páči Jomres, zvážte zanechanie recenzie na jednom z týchto serverov');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'Som milý človek, už som zanechal recenziu');

jr_define ('_LICENCE_PROMPT_DEAR', 'Dear');
jr_define ('_LICENCE_EXPIRED', ', váš licenčný kľúč Jomres vypršal, takže vám chýbajú tieto skvelé funkcie a výhody!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Aktualizácie doplnkov a nové vydania doplnkov');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Podpora výhradných členov iba pre e -maily/lístky');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Bezstarostné aktualizácie Jomres Core');
jr_define ('_LICENCE_EXPIRED_POST', 'Pripojte sa k nám a získajte bezproblémové riešenia platieb a získajte prístup ku všetkým doplnkom a službám podpory iba pre členov.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Získajte prístup ku všetkým doplnkom hneď!');

jr_define ('_LICENCE_INVALID_KEY', 'Bohužiaľ sa zdá, že nepoužívate platný licenčný kľúč Jomres, takže vám chýbajú tieto skvelé funkcie a výhody!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Pluginy </a>, ktoré výrazne rozširujú funkcionalitu Jomres');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Podpora výhradných členov iba pre e -maily/lístky');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Bezstarostné aktualizácie Jomres Core');
jr_define ('_LICENCE_INVALID_POST', 'Pripojte sa k nám a získajte bezproblémové riešenia platieb a získajte prístup ku všetkým doplnkom a službám podpory iba pre členov.');
jr_define ('_LICENCE_INVALID_START', 'Získajte prístup ku všetkým doplnkom hneď!');
jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Predplatné');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Faktúry');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portál');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Preklady');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Nástroje');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Nastavenia');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Pomoc');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Publikované vlastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'nepublikované vlastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Schválené vlastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Vlastnosti vyžadujúce schválenie');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Celkový počet recenzií');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'nepublikované recenzie');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Prehľad správ');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Typ vlastnosti tohto vlastníctva nie je zverejnený, nemusí sa zobrazovať vo výsledkoch vyhľadávania. Kontaktujte správcu stránky, aby zverejnil typ vlastníctva alebo zmenil typ vlastníctva na stránke Upraviť vlastníctvo.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Aktualizovať typ vlastníctva');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'Príjem (vyplatené sumy)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'nemožno odstrániť vlastnosť vlastnosti');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"pretože ho používajú nasledujúce vlastnosti:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Táto stránka vykonáva základný test rozhrania REST API pomocou vstavanej funkcie v Jomres. Volá Jomres REST API, aby zistil, či dostane platnú odpoveď.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Server zavolal túto adresu URL, aby zistil, či je odpoveď platná:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Stránka dostala túto odpoveď:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Zdá sa, že test prebehol podľa očakávania, pravdepodobne nebudete mať žiadny problém s prijímaním požiadaviek REST API zo zvyšku internetu.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Test zlyhal, pozrite sa do poľa Odpovedať, ak vyzerá veľa html, alebo ste dostali správu 404, váš server presmeruje hovory na inú adresu URL. To vám zabráni v prijímaní rozhrania API hovory. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Server servera Jomres spravuje zoznam všetkých webov Jomres. To nám umožňuje vybudovať syndikačnú sieť. Táto sieť je navrhnutá tak, aby umožnila našim používateľom zobrazovať vlastnosti z iných webových stránok, najmä pre nové weby vybudovať prítomnosť SEO na internete. Cieľom je, aby všetky stránky Jomres spolupracovali a budovali dôveru v sieť. Za túto službu sa neplatí. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Vaša stránka sa momentálne nenachádza na serveri Jomres App, ktorý je súčasťou siete publikovania. Tento server sa pokúsi znova pridať tento server do siete na nasledujúcich 6 stránkach. Ak sa niekoľko načítaní stránok, to sa nemení. Skontrolujte, či vyššie uvedený test konektivity prejde testami. Upozorňujeme, že servery localhost nie je možné pridať do siete. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Blahoželáme, váš server je uvedený na serveri Jomres App.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Publikované vlastnosti');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Tu sú niektoré ďalšie nehnuteľnosti dostupné z našej vlastníckej siete');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Štatistiky publikovania');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Gratulujeme, váš server je uvedený v syndikačnej sieti Jomres. Vaše vlastníctvo (vlastníctva) sa čoskoro začne zobrazovať na iných stránkach Jomres, ak sa ešte nezobrazujú.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Vaša inštalácia nie je súčasťou siete Jomres Syndication Network, preto sa vaše vlastníctvo nezobrazuje na iných stránkach založených na Jomres a z tejto bezplatnej reklamy nemôžete ťažiť.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktívne inštalácie Jomres:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Celkový počet inštalácií Jomres, ktoré na svojich stránkach zdieľajú vlastnosti Jomres Syndication Network.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Toto je počet nehnuteľností dostupných v JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Celkovo je celý čas prepojené vlastníctvo Jomres z iného webu založeného na Jomres.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) je bezplatná funkcia dostupná pre všetkých používateľov Jomres. Cieľom je poskytnúť vám bezplatnú inzerciu vašich nehnuteľností na iných stránkach založených na Jomres. Cieľom je pomôcť rýchlo spustíte svoje stránky a ponúknete bezplatnú reklamu, aby boli vaše vlastníctva uznávané a dôveryhodné, pretože sú prepojené s webovými stránkami s vysokou spoľahlivosťou a vysokou relevanciou, ktoré sú už dobre známe vyhľadávačom. Pozrite si to <a href = "https: //www.jomres.net/features/jomres-syndication-network target="_blank"> článok na našich webových stránkach </a> a <a href =" https://www.jomres.net/manual/developers- sprievodca-2/387-jomres-syndication-network target="_blank"> manuál </a>, kde získate ďalšie informácie. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Toto sú údaje vášho profilu hosťa, polia s týmto symbolom <i class = "fa fa-users" aria-hidden = "true"> </i>
 sú verejne viditeľné, zatiaľ čo polia s týmto symbolom <i class = "fa fa-user-secret" aria-hidden = "true"> </i> môžete vidieť iba vy, vaši hostitelia a správcovia stránok. <br/> <br/> Hostitelia môžu vidieť súkromné ​​informácie iba vtedy, ak ste u nich už vytvorili rezerváciu. <br/> <br/> Vaše informácie sú bezpečne šifrované a uložené v našej databáze pomocou šifrovania AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Tieto polia sú voliteľné, ale hostitelia môžu pomocou týchto informácií určiť, či sa domnievajú, že vám môžu dôverovať, preto je lepšie tieto informácie pridať. Nezabudnite, že žiadate, aby ste zostali v ich doméne. majetok, a môžu vás odmietnuť, ak sa domnievajú, že sa k vám nehodíte alebo že váš životopis neobsahuje dostatok informácií. ');

jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'Vodičský preukaz');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'číslo pasu');
jr_define ('GUEST_PROFILE_IBAN', 'číslo IBAN');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'O mne');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Táto sekcia O mne je verejne prístupná, preto neuvádzajte žiadne súkromné ​​informácie. To znamená, snažte sa vložiť toľko, koľko vám vyhovuje, napríklad svoje vášne, živiť sa, svojimi koníčkami atď. Môžete použiť Markup, aby ste tomu dodali trochu jazzu. Hostitelia budú chcieť cítiť, že vám môžu dôverovať svojimi vlastnosťami. Uistite sa, že váš obrázok je skutočným obrazom vás, nie vášho psa. alebo auto (áno, chlapci, hovoríme s vami!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Sem zadajte akékoľvek špeciálne požiadavky, napríklad potreby jednoduchého prístupu. Nebudú sa zobrazovať vo vašom verejnom profile, ale budú pridané k informácii o rezervácii pri rezervácii.');

jr_define ('VIEW_HOST_PROFILE', 'profil hostiteľa');

jr_define ('GUEST_PROFILE_TITLE', 'Profil hosťa');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Môj profil');

jr_define ('GUEST_PROFILE_WELCOME', 'Ahoj, dovoľte mi, aby som vám povedal niečo o sebe.');
jr_define ('GUEST_PROFILE_MY_NAME', 'volám sa');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'a ja pochádzam z');
jr_define ('GUEST_PROFILE_IN', 'región v');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'Moje súkromné ​​informácie');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Robíme všetko, čo je v našich silách, aby sme overili informácie o hosťoch a hostiteľoch, mali by ste však urobiť svoju vlastnú náležitú dilemu a sami sa rozhodnúť, či je alebo nie je táto osoba dôveryhodná.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Moje vlastnosti');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzie');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Toto som povedal o tejto vlastnosti:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'tomuto ubytovaniu som udelil hodnotenie:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzie');
jr_define ('GUEST_PROFILE_OF_ME', 'Čo o mne hovoria iní ľudia');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Čo o mne povedal tento hostiteľ');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'recenzovať hosťa');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Moja recenzia tohto hosťa');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Tu je niekoľko príkladov recenzií hostí na rozohranie lopty: <br/>

<ul>
<li> (meno hosťa) bolo potešením hostiť! Priestor nechali čistý a celý víkend boli ticho. Mali bezproblémovú komunikáciu a teším sa, že u mňa opäť zostanú! </li>
    <li> Miloval som (meno hosťa), pretože sa k miestu mohli správať s rešpektom, užiť si ho a užiť si túto oblasť. S prenájmom priestoru boli úžasní a dúfam, že ich znova budem hostiteľom. </li>
    <li> Všetky moje pravidlá domu boli rešpektované s (meno hosťa) a oni mohli ľahko vojsť a odísť. Miloval som ich tam, pretože boli úctiví a tichí. Vrelo ich odporúčam ostatným! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Ospravedlňujeme sa, nemôžem nájsť tohto používateľa. S najväčšou pravdepodobnosťou ešte nevyplnil údaje o svojom účte.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'hosť');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'správca');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres je postavený na Bootstrap frameworku, takže ho musíte použiť na tému založenú na Bootstrap. Odporúčame takú na Bootstrap 3. Ak k téme nemáte prístup, odporúčame vám použiť téma Jomres Leohtian pre Wordpress, ktorú môžete <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_blank "> sťahujte odtiaľto. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Označiť ako bez show');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'Rezervácia označená ako Žiadna show');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'štatistiky JSN pre tohto používateľa');

jr_define ('BOOKING_NOSHOW_INFO', 'Informácie o rezervácii a bez šou sú čerpané zo siete Jomres Syndicate Network v čase rezervácie. Sú prevzaté z anonymných údajov a môžete ich použiť na rozhodnutie, či tomuto hosťovi hrozí nesplnenie rezervácie. Ak systém hlási, že údaje nie sú známe, je to pravdepodobne preto, že tento systém nie je v sieti rozpoznaný. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Neznámy');

jr_define ('CMF_CONFIG_TITLE', 'Framework Management Channel');
jr_define ('CMF_CONFIG_KEY', 'Key Framework Framework Key');
jr_define ('CMF_CONFIG_KEY_DESC', 'licenčný kľúč rámca správy kanálov. Tento kľúč budete musieť poskytnúť, aby ste si mohli stiahnuť doplnky doplnkov správy kanálov.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Váš majetok nebol schválený');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Váš majetok bol neschválený. Ak si myslíte, že sa to stalo omylom, kontaktujte nás.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Je toto typ detského hosťa?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Nastaviť na Áno, ak by bol tento typ hosťa zaradený ako detský typ hosťa.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Ak chcete účtovať poplatok za osobu za noc, budete si musieť vytvoriť niekoľko typov hostí.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Môžete vytvoriť toľko typov hostí, koľko potrebujete, skúste začať tým, že vytvoríte iba jeden typ hosťa s názvom 'Dospelý'. Ponechajte všetky nastavenia na predvolených hodnotách. Ďalej, ak napríklad chcete poskytnite deťom mladším ako 12 rokov zľavu 50%, vytvorili by ste nový typ hosťa a nazvali by ste ho 'Deti do 12 rokov'. Nastavte možnosť 'Pridať odchýlku?'na - (záporné) a nastavte 'odchýlku'na 50. To znamená, že keď sú k rezervácii pridané deti, účtuje sa im 50% z ceny izby za izbu. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Nastaviť ceny ručne");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Nastaviť minimálny počet nocí ručne");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Nastaviť minimálny počet nocí");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Nastaviť <em> cenu za noc </em> podľa dňa v týždni");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Nastaviť <em> cenu za noc </em> podľa rozsahu dátumov");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Nastaviť <em> minimálne noci </em> podľa rozsahu dátumov");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Nástroje na výber dátumu a zadanie sadzby vám umožňujú nastaviť jednu cenu pre dané časové obdobie. Vyberte dátum začiatku a konca, zadajte cenu a kliknite na tlačidlo Nastaviť cenu za noc.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Výber dátumu a vstup na minimálne noci vám umožňujú nastaviť jednu hodnotu pre minimálne noci pre dané časové obdobie. Vyberte dátum začiatku a konca, zadajte číslo pre minimálne noci a kliknite na Nastaviť minimálne noci .");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Pomocou tejto rozbaľovacej ponuky môžete prepínať medzi nastavením cien pre jednotlivé dátumy a nastavením minimálnych nocí pre jednotlivé dátumy. Môžete použiť výber <em> podľa dňa v týždni </em>, <em> podľa dátumu rozsah </em> výber alebo nastaviť ceny/minimálne noci ručnou úpravou dátumov.");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Pomocou tejto rozbaľovacej ponuky môžete prepínať medzi nastavením cien pre jednotlivé dátumy a nastavením minimálnych nocí pre jednotlivé dátumy. Môžete použiť výber <em> podľa rozsahu dátumov </em> alebo nastaviť ceny/minimálne noci podľa manuálna úprava dátumov. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Nastaviť ceny alebo minimálne noci");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Nastaviť <em> minimálne noci </em> podľa dňa v týždni");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Polia dňa v týždni vám umožňujú nastaviť minimálny počet nocí pre daný deň v týždni, po kliknutí na tlačidlo dňa v týždni sa všetky dni v týždni nastavia na nastavenie min. noci. ");


jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Manuálne nastavené ceny/minimálne noci");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Nastaviť ceny");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Nastaviť minimálny počet nocí");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Za noc");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Min noci");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Max noci");

jr_define ('_JOMRES_MICROMANAGE_INTRO', 'Tu si môžete vytvoriť tarify, ktoré sú priradené k typom izieb, ktoré máte vo svojom majetku.');

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Najčastejšie používané možnosti");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Pokyny");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', 'Ak chcete pridať rôzne ceny pre rôzny počet hostí, potom <em> môžete vytvoriť viac ako niekoľko taríf pre každý typ miestnosti </em> a mať v týchto tarifách rôzne hodnoty min/max hostí. ');

jr_define ('_JOMRES_MICROMANAGE_INFO', "Pomenujte tarifu, definujte maximálny počet nocí a minimálny a maximálny počet hostí, ktorí sú v rezervačnom formulári požadovaní pred ponúknutím tarify. <br/> <br/> Použiť panel výberu dátumu na pridanie cien a nastavení minimálnych nocí do rozsahu dátumov alebo úpravu vstupov priamo. Ak nechcete, aby bola tarifa v určité dátumy vôbec ponúkaná, nechajte cenu nastavenú na 0 (nula) tieto dátumy. <br/> <br/> Môžete mať rôzne minimálne noci v rôzne dátumy, takže ak chcete dlhšie rezervácie počas festivalových/konferenčných týždňov, môžete nastaviť minimálne noci tak, aby boli vyššie práve v týchto obdobiach. <br/ > <br/> Ak účtujete poplatok za osobu na investíciu (PPPN), môžete toto nastavenie povoliť v časti Nastavenia> Konfigurácia vlastníctva> Tarify a mena, potom vytvorte požadované typy hostí v časti Nastavenia> Typy hostí. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Extra možnosti");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Toto sú ďalšie možnosti, ktoré nie sú tak bežne používané, ale napriek tomu vám dostupné. <br/> <strong> Ignorovať PPPN </strong> znamená Ignorovať na osobu a noc. Môžete mať niekoľko rôznych taríf. pre rovnaký typ miestnosti, napríklad za jednu, ktorá účtuje poplatky za osobu a noc a za ktorú nie. <br/> <strong> Povoliť víkendy </strong> Možnosť Povoliť víkendy vám dáva možnosť vytvoriť tarifu, ktorá je iba k dispozícii počas pracovných dní, napríklad ak chcete špeciálnu tarifu pre obchodných cestujúcich. V takom prípade by ste nastavili možnosť Nie a min. noci na 1 a maximálne noci, 5. <br/> <strong> Víkendy iba </strong> Možnosť Iba víkendy je opakom možnosti Povoliť víkendy. To, čo považujete za víkendové dni, je možné nakonfigurovať v nastaveniach konfigurácie vlastníctva. To vám dáva možnosť definovať sadzbu iba cez víkend, ktorú by ste mohli chcieť. ponuka na špeciálne akcie. <br/> <strong> Príchod v deň v týždni </strong> Táto možnosť vám dáva možnosť vynútiť si prihlásenie iba v určité dni v týždni a najlepšie sa používa v spojení s konfiguráciou vlastníctva> záložka Rezervácie> možnosti fixných období. Väčšina používateľov bude chcieť nechať túto možnosť nastavenú na možnosť Všetky. <br/> Posledné dve možnosti, <strong> Min. Miestnosti už sú vybraté </strong> a <strong> Max. Miestnosti, ktoré sú už vybrané </strong>, sú veľmi špecializované a užitočné pre nehnuteľnosti s extrémne komplikovanými tarifami. <em> Pokiaľ nemáte konkrétnu potrebu, tieto možnosti by ste mali nechať na pokoji. </em> Využite ich, ak chcete, aby bol tento tarif ponúkaný iba vtedy, keď si hosť už v rezervačnom formulári vybral N počet izieb, napríklad môžete mať jednu základnú tarifu, v ktorej sú tieto možnosti ponechané predvolene, a druhú tarifu, kde je už vybratá možnosť minimálnych miestností nastavená na 1, potom bude táto druhá tarifa ponúknutá v rezervačnom formulári po výbere miestnosti. ");
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Môžete vytvoriť viac taríf pre ten istý typ miestnosti, takže môžete vytvoriť jednu tarifu na min/max dni 1 - 7 a druhú tarifu, kde je min. deň 7, max. 14 dní a tak ďalej. To vám umožní vytvárať cenové schémy tak jednoduché, ako aj komplikované, ako potrebujete. Tiež vám umožňuje vytvoriť viac taríf s rôznymi podmienkami, takže môžete mať druhú sadu taríf, kde je cena za nocľah s raňajkami nižšia, a ďalší súbor drahších taríf za nocľah, raňajky a večeru. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Nastaviť iba dni výberu dátumu");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'Kategórie majetku');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Upraviť kategóriu majetku');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Ďakujeme za inštaláciu Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Správa majetku sa vykonáva na verejných obrátených stránkach, nie v oblasti správcu.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Ak nie ste oboznámení s Jomresom, navštívte sekciu Pomocník> Stránka Začíname.");


jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Pripojte sa k syndikátu Jomres");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', 'Akonáhle budete mať svoje webové stránky pripravené a pripravené začať prijímať návštevníkov, pripojte sa k syndikátu Jomres.net a získajte svoje vlastnosti uvedené na iných stránkach Jomres.');



jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Pred vytvorením tarify potrebujete aspoň jednu miestnosť jedného z nasledujúcich typov:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Prejdite do Nastavenia> Izby a najskôr vytvorte izbu, akonáhle to urobíte, budete môcť pre tento typ miestnosti vytvoriť tarifu.");

jr_define ('JOMRES_PLATFORM', "platforma Jomres");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Connected");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Nastavte to na Áno, ak ste už prepojili svoj účet Stripe s platformou Jomres.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live Account Number");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Toto je vaše ID účtu Stripe, ktoré nájdete na svojom paneli Stripe v časti Nastavenia> Informácie o účte a vyzerá ako acct_xxxxxxxxx Toto pole by ste použili, ak máte viac inštalácií Jomres a chcete používať ten istý účet naprieč všetky stránky a vy ste sa už k nám pripojili. Ak ste sa nepripojili k platforme Jomres, nestačí tu zadať vaše údaje. Namiesto toho navštívte možnosť Pripojiť sa na paneli s nástrojmi v sekcii Pomocník. Ak chcete Ak chcete testovať platby, na karte Ladenie v Konfigurácii webu nastavte svoj web od výroby po vývoj. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Prejdite na paneli Stripe Dashboard do časti Developers> API keys, aby ste našli svoje tajné kľúče. Systém ich používa na overenie platnosti údajov o rezervácii vrátených z platobného formulára a o tom, že vklady boli zaplatené pred uložením rezervácie. . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "tajný kľúč testovania prúžkov");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'štandardný tarifný režim');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Koľko ľudí môže toto zariadenie ubytovať?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'počet hostí vo vašej dennej cene');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'cena pre dospelých');

jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Children');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Na osobu za noc?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7 -dňový modifikátor');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Zľava na dennú sadzbu, ak je rezervácia na 7 a viac dní. Ak nechcete, aby sa zľava uplatňovala, nechajte túto sadu na nule.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'modifikátor 30 dní');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Zľava na dennú sadzbu, ak je rezervácia na 30 alebo viac dní. Ak nechcete, aby sa zľava uplatňovala, nechajte túto sadu na nule.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Dospelí');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Cena založená na 2 dospelých');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezervácia zľavnená od');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'pretože rezervácia je dlhšia ako 7 dní.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'pretože rezervácia je dlhšia ako 30 dní.');

jr_define ('JOMRES_CITY_TAX_HEADING', 'mestské dane');
jr_define ('JOMRES_CITY_TAX_VALUE', 'mestská daňová hodnota');
jr_define ('JOMRES_CITY_TAX_METHOD', 'metóda výpočtu dane');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'jednorazový poplatok');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'za noc');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Na hosťa');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Na hosťa za noc');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Percento hodnoty rezervácie');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'poplatok za upratovanie');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'náklady na upratovanie');


jr_define ('JOMRES_COMPATABILITY_MODE', 'Vynútiť režim konfigurácie vlastností kompatibility?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Režim konfigurácie vlastností kompatibility spôsobuje, že sa stane niekoľko vecí. V starších verziách Jomres si správcovia vlastností mohli zvoliť režim úprav taríf, ktorý použijú, a množstvo ďalších nastavení (niektoré sa môžu zdať mätúce). Povolenie konfigurácie kompatibility prinúti všetky nové vlastnosti používať iba režim štandardných úprav taríf, ktorý modeluje funkcionalitu konfigurácie vlastností booking.com s ohľadom na ceny, detské ceny atď. Odporúča sa, aby pre inštalácie, ktoré boli vytvorené po 9.22 .0, táto možnosť by mala byť nastavená na Áno, ale pri starších inštaláciách je na vás, aby ste sa rozhodli, či by sa nové vlastnosti pri vytváraní mali automaticky nastaviť na režim kompatibility. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Prijímate deti mladšie ako 18 rokov?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Nastavte túto možnosť na Áno, ak povolíte deťom. Ak áno, potom v ponuke Nastavenia budete mať možnosť s názvom Detské politiky, kde môžete upravovať nastavenia súvisiace s deťmi.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Child policies');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'V akom veku sú deti povolené?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Na dieťa, na noc');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'za dieťa, za pobyt');

jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Detské sadzby');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nová detská sadzba');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Upraviť detskú sadzbu');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Tu vytvorte svoje bezplatné alebo platené detské sadzby. Ceny sa budú uplatňovať iba vtedy, ak ste pre všetky typy izieb vytvorili úrovne obsadenosti.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Age from');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Age to');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'za noc alebo za pobyt?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Sadzba');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Ak je nula alebo nie je nastavené, deti v tomto vekovom rozpätí budú zadarmo.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Veky pri registrácii');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Úrovne obsadenosti');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'maximum dospelých');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximum children');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maximálna obsadenosť');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Upraviť úroveň obsadenosti pre:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Upraviť úrovne obsadenosti pre tento typ miestnosti. Nezahŕňať hostí spiacich na detských postieľkach (tie sa pridajú vytvorením Extra)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Koľko by sa malo účtovať za každú ďalšiu dospelú osobu?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Extra dospelí');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Ešte ste nenakonfigurovali detské sadzby.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Nastaviť teraz podradené sadzby');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Svoj majetok ste nakonfigurovali tak, aby umožňoval prístup deťom, ale zatiaľ ste pre deti nenastavili žiadne úrovne obsadenosti.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Nastaviť úrovne obsadenosti');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Pri každej úprave miestnosti alebo typu nehnuteľnosti by ste mali skontrolovať a aktualizovať úrovne obsadenosti vášho majetku/izieb, pretože tieto ovplyvňujú počet hostí, ktorých je možné prijať v rezervačnom formulári.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Dospelí');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'úroveň možností správcu');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres má veľa možností ponuky a konfigurácie, ktoré môžete použiť pri konfigurácii svojho webu. Väčšinu z nich nikdy nebudete musieť meniť, takže sú predvolene skryté. Tieto možnosti sa môžete rozhodnúť zobraziť úroveň Možnosti správcu. Základná úroveň vám ukáže, čo potrebujete pri prvom nastavení lokality. Bežná úroveň vám ukáže možnosti, ktoré sa najčastejšie menia, a Všetko vám zobrazí všetky možné nastavenia a ponuky v oblasti správcu. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'základné');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'spoločný');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Všetko');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Môžeme zhromažďovať informácie o tom, ako používate Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Chceme zhromažďovať informácie o tom, ako používate Jomres. Nebudú uložené žiadne osobne identifikovateľné informácie, používanie bude anonymizované a slúži nám len na to, aby sme pochopili, ako ľudia používajú Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Jasné, to je v poriadku');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Nie, nesúhlasím');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Budete prijímať rezervácie pre viac ako jednu nehnuteľnosť?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres je možné použiť pre webové stránky s jedným alebo viacerými nehnuteľnosťami. Ak budete prijímať rezervácie iba pre jednu nehnuteľnosť, mnoho možností bude nadbytočných a potenciálne mätúcich. Toto nastavenie môžete neskôr zmeniť v časti Nastavenia> Web Konfigurácia> karta Funkcie portálu. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Only one property');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'uvediem viac ako jednu nehnuteľnosť');

jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Akú verziu rámca Bootstrap podporuje vaša šablóna/téma?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Každá verzia rámca Bootstrap vyžaduje mierne odlišné značkovanie html. Jomres má tri sady súprav šablón kompatibilných s Bootstrap, jednu pre každú verziu Bootstrap. Musíte sa ubezpečiť, že ju nakonfigurujete tak, aby používala príslušnú sadu šablón. Ak potom nevydáte výstup, ako napríklad rozloženie, modály a ponuky nebudú správne fungovať. Ak sa neskôr rozhodnete použiť šablónu/tému s inou verziou programu Bootstrap, môžete zmeniť sadu šablón Bootstrap, ktorú by mal Jomres používať v časti Správca> Jomres> Nastavenia > Rôzne. <br/> <br/> Joomla 3 je štandardne distribuovaná s Bootstrap 2, Joomla 4 bude používať Bootstrap 5. Šablóna Jomres Leohtian (Joomla) a téma (Wordpress) používajú Bootstrap 3. Môžu byť použité rôzne šablóny/témy distribuované s vlastnými súbormi Bootstrap, takže ak máte akékoľvek pochybnosti, kontaktujte vývojára svojej šablóny/témy. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Odstrániť desatinné miesta z výrobných cien?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Použiť skupinu podľa opravy?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Niektoré inštalácie mysql môžu mať problém s dopytmi Jomres na stránke Vlastnosti zoznamu, Zoznam hostí a Zoznam faktúr. Ak tieto stránky uvádzajú, že zobrazujú X výsledkov Y, ale v zozname sa nič nezobrazuje, potom nastavte táto možnosť na Áno môže problém vyriešiť. Nebude, ak ste na zdieľanom hostingu a hostingová služba neumožňuje vášmu používateľovi mysql vydať príkaz SET GLOBAL sql_mode = ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Toto je vlastnosť kanála, ktorú nemožno spravovať lokálne, odkaz na vzdialenú správu vlastníctva nájdete na stránke rámca správy kanálov');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Žiadny bootstrap v téme");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Odkazy na sociálne médiá');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Sem vložte názvy svojich účtov sociálnych médií, napríklad "jomres", nie celú adresu URL');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Čiarkami oddelený zoznam jazykov, ktorými vaša organizácia hovorí');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Adresa URL loga vašej organizácie');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres aktualizovaný');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'K dispozícii je nová verzia Jomres. Musíte aktualizovať skôr, ako budete môcť pokračovať v používaní Jomres, pretože aktualizácie zlepšujú funkčnosť a zaisťujú, že vaša inštalácia zostane bezpečná.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Aktualizovať Jomres teraz');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Aktualizácie doplnkov');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'V správcovi doplnkov sú k dispozícii nové verzie doplnkov. Skôr ako budete môcť pokračovať v používaní Jomres, musíte aktualizovať všetky doplnky, pretože aktualizácie zlepšujú funkčnosť a zaisťujú, že vaša inštalácia zostane bezpečná.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Pluginy na aktualizáciu');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Ak vaša licencia už nie je platná, môžete získať nový licenčný kľúč z našej webovej stránky.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Aktualizovať doplnky');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Získať nový kľúč');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Uložiť nový kľúč');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Obrázky typu nehnuteľnosti");