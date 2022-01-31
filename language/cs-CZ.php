<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.3
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Rychlá rezervace');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Zobrazit profily');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Obecné nastavení');
jr_define('_JOMRES_COM_MR_BACK', 'Zpět');
jr_define('_JOMRES_COM_MR_YES', 'Ano');
jr_define('_JOMRES_COM_MR_NO', 'Ne');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Nový');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nová kapacita');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Nový host');
jr_define('_JOMRES_COM_MR_SAVE', 'Uložit');
// View bookings
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Jméno');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Příjezd');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odjezd');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Uživatelské jméno');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Úroveň přístupu');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Uživatel nastaven');
// Edit bookings
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Všechny rezervace');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editace rezervace');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Prj/Odj');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Host');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Pokoj');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Platba');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Jméno');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Príjmení');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Ostatní požadavky');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Upozornění: ostatní požadavky mohou být k dispozici jen za příplatek');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Stornovat rezervaci');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Číslo domu');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulice');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Město');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PSČ');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon - pevná');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon - mobil');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nelze stornovat, klient již má rezervaci.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Záloha nezaplacena');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potvrzení storna');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervace stornována');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dnů do příjezdu');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Typ rezervace');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Zakázaná');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepce');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Název pokoje');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Pokoj');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Podlaží');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Pro hendikepované?');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. počet osob');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Typ pokoje');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Popis typu pokoje');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Seznam vybavení pokoje');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Zaplacená záloha');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Vložit zálohu');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Celkem k zaplacení');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Záloha ref.');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervace');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Záloha');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Záloha uložena');
// Edit Language
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Naše pokoje');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Kapacita');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Typ pokoje');
// Display guest form
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Upravit');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Jméno');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Příjmení');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Dům');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulice');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Město');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'PSČ');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon - pevná');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Telefon - mobil');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Výběr z nabízených');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Počet dní');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Celkem');
// Rooms tab
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Nastavení kapacit & pokojů');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Pokoje');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Vybav. pokojů');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Typy pokojů');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Kapacita');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Vybavení kapacit');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Pokoj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Typ');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Název');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Číslo');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Podlaží');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. počet osob');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Vybavení');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Upravit položku');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Vybavení pokoje');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Popis vybavení');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Vybavení pokoje přidáno');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Vybavení pokoje aktualizováno');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Typ pokoje');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Typ pokoje zkrac.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Typ pokoje detailně');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Typ pokoje přidán');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Upravit položku');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Název');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulice');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Město');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Země');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'PSČ');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'www');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Vybavení');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Kapacita aktualizována');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Vybavení kapacity');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Vybavení kapacity zkrác.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Vybavení kapacity detailně');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Vybavení kapacity aktualizováno');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Ceníky');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Ceník');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Popis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Platný od');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Platný do');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Sazba za noc');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min. počet dní');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max. počet dní');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. počet osob');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. počet osob');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Typ pokoje');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorovat PPPN');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Povolit víkendy');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Upravit položku');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Klonovat položku');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Ceník odstraněn');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Upravit ceník');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervace uložena');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Ubytovat hosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Ukončit ubytování hosta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Seznam rezervací');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Control Panel');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Správa hostu');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Správa kapacit');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Zjistit dostupnost.');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Jméno');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Příjmení');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'č.p.');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulice');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Město');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PSČ');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon - pevná');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon - mobilní');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Zadaným parametrům bohužel neodpovídá žádný pokoj.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', 'Děkujeme za projevený zájem a doufáme, že se Vám Vaše cesta bude líbit.<br><br> <b>Vemte prosím na vědomí, že Vaše objednávka je prozatím predběžná až do doby, než Vám ji potvrdíme závazně e-mailem.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Ubytování hosta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Host ubytován');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Ukončit ubytování hosta');
// Config panel
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Příplatky');
jr_define('_JOMRES_COM_A_TARIFFS', 'Ceníky & měny');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload souboru');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Jednolůľko');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Přejete-li si účtovat tuto položku, nastavte hodnotu na ANO');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Příplatek za jednolůžko');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Požadovaná záloha v procentech?');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Přejete-li si požadovanou zálohu účtovat procentem z celkové částky rezervace, zadejte hodnotu ANO. V opačném případě bude použita paušální hodnota.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Požadovaná výše zálohy');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'za osobu, za noc');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Přejete-li si účtovat položku dle PPPN (per-person-per-night), zadejte hodnotu ANO. Pokd ne, cena bude spočítána dle PRPN (per-room-per-night).');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Velikost souboru');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. velikost snímku v KB');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Obsazeno');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detaily objednávky');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stornování a omezen práv</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Příjezd do 14 dnů');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Tisk potvrzení rezervace');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Tisk faktury (daňového dokladu)');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Počet osob: ');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena za noc: ');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'CELKEM');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Přidat službu k vyúčtování');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Popis služby');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Hodnota služby');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Ostatní účtované položky');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Položka přidaná k vyúčtování');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Upload snímku');
jr_define('_JOMRES_FILE_UPLOAD', 'Upload ouboru');
jr_define('_JOMRES_COM_A_ODDS', 'Různé');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
jr_define('_JOMRES_FILE_DELETE', 'Odstranit soubor');
jr_define('_JOMRES_FILE_DELETED', 'Soubor odstraněn');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Odstranit');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Pokoj nelze odstranit, obsahuje platné rezervace. Zrušte rezervace a zkuste znovu, prosím.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Pokoj odstraněn');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Odstranit vybavení pokoje');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Vybavení pokoje nelze odstranit kvůli existujícím vazbám. Zruąte vazby na pokoje a zkuste znovu, prosím.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Vybavení pokoje odstraněno');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Odstranit vybavení kapacity');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Vybavení kapacity nelze odstranit kvůli existujícím vazbám. Zruąte vazby na kapacitu a zkuste znovu, prosím.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Vybavení kapacity odstraněno');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Odstranit typ pokoje');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Typ pokoje odstraněn');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Odstranit kapacitu');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Kapacita odstraněna');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nemáte oprávnění odstranit kapacitu.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'šířka plného náhledu snímku');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa lokality');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Popis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-in');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivity v okolí');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Jak se k nám dostanete');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Letiště');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Jiná doprava');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Pravidla & vzdání se nároku');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Návštěvníci mohou rezervovat online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Přejete-li si, aby návštěvníci mohli online rezervovat, nastavte hodnotu na ANO.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervace pro fixní období');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Přejete-li si fixní období rezervace, zadejte hodnotu ANO. Pokud je hodnota NE ujistěte se, že hodnota u pole "Pre
defined arrival day" není na ANO (pokud vědomě nechcete nutit návžtěvníky k příjezdu v určitý den) - v opačném případě kalendář dostupnosti nebude obsahovat dostatečné množství odkazů.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Období rezervace: ');
jr_define('_JOMRES_COM_A_BOOKING', 'Rez. pokoje');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max. období rezervace, např. 3x 7 období rezervace = 21 dní');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Jde o apartment/chalupu/villu?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Revize rezervace');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potvrzení rezervace');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'pondělí');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'úterý');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'středa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'čtvrtek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'pátek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'sobota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'neděle');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'po');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'út');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'st');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'čt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'pá');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'so');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'ne');
jr_define('_JOMRES_COM_A_AVLCAL', 'Kal. dostupností');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Barva písma dnešního data');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Barva písma dnů v měsíci');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Barva pásma dnů mimo zobrazený měsíc');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Barva pozadí buňky dnů, kdy je kapacita/pokoj volný');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Barva pozadí buňky dnů mimo zobrazený měsíc');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Barva pozadí buňek pro obsazené dny');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Barva pozadí pro předběžné rezervace (bez záloh)');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Barva pozadí buněk dnů v minulosti');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Obsazeno-n/a');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Volno');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Předběžná rezervace');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Přednastavený den příjezdu');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Pouze pro websites nabízející fixní období rezervací. Zadejte požadovaný počáteční den fixního období.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fixní den příjezdu');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Pobyt (dny)');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Zobrazit kalendáře dostupnosti?');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Přejete-li si zobrazit kalendáře dostupnosti, nastavte hodnotu na ANO');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Dostupnost');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Pro zobrazení objednávkového formuláře klepněte na volný den.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Zakázané rezervace');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nové zakázané rezervace');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Odstranit hosta');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Host odstraněn');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Hosta nebylo možné odstranit kvůli existující otevřené rezervaci. Stornujte rezervace a zkuste znovu.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Libovolné');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Výstupní formát kalendáře');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Vstupní formát kalendáře');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Umožňuje uživateli měnit vstupní formát data kalendáře Jomres.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Období fixních rezervací s krátkými přestávkami');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Délka přestávek');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publikováno');
jr_define('_JOMRES_COM_A_PAYPAL', 'Paypal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit systému');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Uživatel (username)');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Dle data');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Stav');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Nevyřízené příjezdy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dnešní příjezdy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Aktuální hosté');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Dnešní odjezdy');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Odjezdy po termínu');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Problém! Bez příjezdu a storna');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Vytvoření pokoje');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Aktualizace pokoje');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Odstranění pokoje');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Vytvoření vybavení pokoje');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Aktualizace vybavení pokoje');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Odstranění vybavení pokoje');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Vytvoření kapacity');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Aktualizace kapacity');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Odstranění kapacity');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Upravení nastavení kapacity');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Zveřejnění kapacity');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Vytvoření ceníku');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Aktualizace ceníku');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Přidání zaúčtování sluľeb');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Zabydlení hosta');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Zadaní zálohy');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Vytvoření hosta');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Aktualizace hosta');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervace pokoje');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Vytvoření Addons');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Aktualizace Addons');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Odstranění Addons');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publikování Addons');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Vložení zakázané rezervace');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Odstranění zakázané rezervace');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Doplňky');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Popis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Název');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Doplněk aktualizovaný');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Upravit položku');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Doplněk odstraněn');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Správa Doplňku');
jr_define('_JOMRES_COM_A_EXTRAS', 'Zobrazit doplněk během rezervace?');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Přejete-li si během rezervace zobrazit Doplněk, zadejte hodnotu ANO');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Volitelné Doplňky');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Počáteční datum zakázané rezervace');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Konečné datum zakázané rezervace');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Zakázané rezervace');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Behem rezervace došlo k chybě, jeden nebo více z vybraných pokoju není volný.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Pokoje zahrnuté v zakázané rezervaci');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Seznam zakázaných rezervací není k dispozici');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Počet hvězdiček');
jr_define('_JOMRES_COM_A_RESET', 'reset');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervace stornována');
jr_define('_JOMRES_FRONT_MR_SEARCH_HERE', 'Hledejte zde: ');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Symbol měny');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Kód měny');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Klepněte pro další informace');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Omezit předprodej?');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Přejete-li si omezit předprodejní rezervace, zvolte hodnotu ANO (a na dalším poli zadejte počet dní). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Počet dní omezeného předprodeje:');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Daň');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Pokojová daň');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Fixní daň');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Procentuální daň');
jr_define('_JOMRES_COM_A_EUROTAX', 'DPH');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'DPH %');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Zálohovat všechny záznamy');
jr_define('_JOMRES_FRONT_TARIFFS', 'Ceny');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Ceník');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Popis ceníku');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Typ pokoje');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Platný od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Platný do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'za osobu a noc');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'za noc');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'bez započítání víkendu');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Min. počet dní');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Max. počet dní');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. počet osob');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. počet osob');
jr_define('_JOMRES_FRONT_PREVIEW', 'Náhled');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Zapnout úpravy?');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Aktualizovat upr. text.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Úprava jaz. nastavení');
jr_define('_JOMRES_FRONT_PTYPE', 'Typ kapacity');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Seznam typu kapacit');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Upravit typ kapacity');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Typ kapacity');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Popis typu kapacity');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Typ kapacity uložen');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Typ kapacit(y) odstraněn');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Výzva k platbě');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'K účtu nejsou přidány žádné mimořádné položky');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Záloha');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Celková částka');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Částka splatná ke okamžiku rezervace');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Vyberte požadovaný typ platby během rezervace - zálohu nebo plnou částku.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Počet zobrazených měsíců v kalendáři');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Kolik má být k dispozici zobrazených měsíců?');
// V1.4
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Platební brány');
jr_define('_JOMRES_COM_A_CANCEL', 'Storno');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Zaškrnutím vyberte pokoj(e) vč. adekvátních datumů určené k zakázané rezervaci. <br>Pokud pokoj není označen, nemůže být do zakázaných rezervací zahrnut tak dlouho, dokud nejsou dokončeny již existující rezervace. <br>Jakmile jste vybrali adekvátní datumy, klepněte na tlačítko Apply/Provést - provede se opětovný dotaz na dostupnost pokojů.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Systém Hotelak Vás zřejmě kvůli dlouhé prodlevě odhlásil.</b> Přihlašte se znovu prosím.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Odůvodnění');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Používat platební brány?');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Vyberte preferovanou platební metodu.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Aktivní platební brána?');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Upravení nastavení plugins');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Vložení nastavení plugins');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'External link');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Upravit CC');
jr_define('_JOMRES_COM_A_EDITICON', 'Upravit velikost ikon');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Virtuální prohlídka');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Zobrazit odkaz na virt. prohlídku?');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Zobrazit virt. prohlídku inline?');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Virtuální prohlídka');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Zobrazit odkaz na ceníky?');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Povolit popup okna?');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Upload snímků virt. prohlídky');
jr_define('_JOMRES_A_TABS_MISC', 'Různé');
jr_define('_JOMRES_A', 'Nastavení website');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Použít obecné vybavení kapacit');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Vyberte požadovaný plugin vyhledávání.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Omlouváme se, ale dotazu neodpovídá žádný výsledek. Zadejte nová kritéria hledání, prosím.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Jste si jisti?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervovat pokoj');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervovat tuto kapacitu');
//v1.4c
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Zobrazit ceny inline?');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detailní informace');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Dostupnost pokojů');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Zobrazit pole Adresa pod odkazem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Zobrazit pole Detailní informace pod odkazem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zobrazit pole Pokoje a Dostupnost pod odkazem');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Paušál');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Průměrovaný');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Vyberte tarifní model');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Pro výpočet ceníku existují dva modely - paušální a průměrovaný. Pokud zvolíte paušální, jsou ceny a ceníky definované jednotlivými obdobími rezervace (můžete např. na stejné období nabízet ceník Polopenze a Plná penze). Pokud zvolíte průměrovaný, systém na rezervované období nalezne a zprůměruje všechny dostupné ceny.');
// v1.4e
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Zobrazit zadání data odjezdu?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Přejete-li si zakázat zobrazení pole data odjezdu, zadejte hodnotu NE. V tomto případě bude automaticky jako den odjezdu použit den následující po dni příjezdu.');
// v1.4f
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Omezení popisu');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Zadejte hodnotu počtu zobrazených znaků použitých pro popis jednotlivé kapacity.');
// v1.4g+
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Použitý formát date()?');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Publikovat');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Nepublikovat');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Použít obecné typy pokojů');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Pro přiřazení snímku tohoto typu pokoje nejprve nahrajte poľadované snímky do adresáře /images/stories/jomres/rmtypes/. ');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Zadat barvu pozadí chybového pole');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Výchozí země rezervačního formuláře');
jr_define('_JOMRES_JAVASCRIPT_', 'Červeně zvýrazněné položky jsou povinné.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Mohou uživatelé zadávat své kapacity?');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Přejete-li si, aby uľivatelé mohli zadávat své kapacity bez kontaktu s administrátorem, zadejte hodnotu ANO.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Červeně zvýrazněné položky jsou povinné.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Vytvořit kapacitu');
// v1.4i
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Zobrazit kalendář od začátku roku?');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendář dostupnosti zobrazuje data od začátku aktuálního roku.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Počet dostupných pokojů');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Zpět na detaily kapacit');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Typy pokojů');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Omezení náhodného hledání');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Zobrazit převodník měn od Google?');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Převést menu na :');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Umoľnit uživatelům použití HTML editoru?');
// v2
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Pro vytvoření rezervace použijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů, následně vyberte z dostupných pokojů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Pro vytvoření rezervace pouľijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Detaily rezervace');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Zadejte požadované detaily Vaší rezervace');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Dostupnost');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Vyberte požadované pokoje');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Zda je požadovaná kapacita k dispozici zjistíte zde.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Volitelné doplňky');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Zadejte všechny požadované doplňky, které si přejete zahrnout do rezervace');
jr_define('_JOMRES_COM_PERDAY', 'za noc');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Vaše adresa');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Zadejte prosím Vaše kontaktní údaje. Vyjma čísla mobilního telefonu jsou všechny pole povinná.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Pokoje k dispozici');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Vybrané pokoje');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Nejbližší možné datum příjezdu: ');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Za noc:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Celkem:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Doplňky:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'DPH:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Sleva:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'CELKEM K ÚHRADĚ:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hosté');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Klepnutím přidáte pokoj mezi vybrané');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Klepnutím odeberet pokoj z vybraných');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Typ hostů');
jr_define('_JOMRES_VARIANCES_TYPE', 'Typ');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Typ zákazníka, např. děti 5-10 let, student apod.');
jr_define('_JOMRES_VARIANCES_NOTES', 'Poznámky');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Poznámky k danému typu hostů');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Max. počet');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maximální počet hostů daného typu, které může být zadané v rámci rezervace');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Procentuelně');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Zadané číslo je procentem základní kalkulované hodnoty za pokoj. Pokud je na hodnotě NE, pak je zadané číslo jednoduše přičteno nebo odečteno ze základní hodnoty pokoje.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Přidat rozdílnou sazbu?');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Rozdílná sazba je přidána nebo odebrána ze základní kalkulované hodnoty za pokoj. Pokud si přejete ji pouľít jako slevu ze základní hodnoty pokoje, zadejte hodnotu NE.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Rozdíl. sazba');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Hodnota rozd. sazby');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Pořadí upravených typů hostů');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Odstraněný typ hostů');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vytvořený typ hostů');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Aktualizovaný typ hostů');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Aktualizovaný typ hostů');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Zobrazit odkaz na seznam pokojů na detailním popisu kapacity?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Zobrazit <b>pouze</b> seznam dostupných pokojů v kalendáři?');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Přejete-li si zakázat zobrazení záhlaví a detailů kapacity, zadejte hodnotu na ANO, kalendář dostupnosti pokojů je viditelný pouze v sekci detailního popisu kapacity. Vhodné pouze pro uživatele pronajímající SPRs (single room properties) jako jsou apartmány, chalupy apod.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Minimální interval mezi Prj-Odj');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimální interval mezi daty příjezdu a odjezdu na rezervačním formuláři.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Booking form room list show room number');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Booking form room list show room name');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Booking form room list show tariff title');
jr_define('_JOMRES_ORDER', 'Objednat');
jr_define('_JOMRES_REQUIREDFIELDS', 'Požadované');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dní před příjezdem');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimální počet dní vyjma dneška, které musí uběhnout před datem příjezdu.');
jr_define('_JOMRES_DTV', 'Varianty typu dnů');
jr_define('_JOMRES_DTV_DOW', 'Den týdne');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Výchozí typ hosta');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Výchozí hodnotou je první hodnota typu hosta; pokud používáte tento parametr, pak bude použita výchozí hodnota.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Rezervace online pouze pro registrované uživatele?');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Omlouváme se, ale pro provedení online rezervace musíte být registrovaným uživatem. Pro registraci klepněte sem.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Barvy písma aktuálních rezervací');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Okraje týdne');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Pokoj je rezervován');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Zakázaná rezervace');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokrouhlit zálohu nahoru na celá?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Inkasovat zálohu?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Inkasování tarifů? uložit jako týdenní?');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Přejete-li si uložit inkasované tržby? jednou týdně, zadejte hodnotu ANO. Druhou možností je denní inkaso.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Týdenní sazba');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Opakované fixní data příjezdů: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'V případě fixních příjezdových datumu je počet dat zobrazen jako seznam.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Neplatné datum příjezdu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Neplatné datum odjezdu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervace je příliš krátká, minimální počet dní mezi příjezdem a odjezdem je roven ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Váš interval je roven ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Neplatný typ hostů');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Zadejte počet a typ hostů');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Počet požadovaných hostů je nad limitem možných ceníků');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Bohužel jste zadali větší počet pokojů než hostů, odeberte nadbytečné pokoje klepnutím na jejich název.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Počet postelí je nižší než počet hostů');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Musíte zadat více pokojů');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Vyberte pokoj');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Zadejte jméno');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Zadejte příjmení');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Zadejte číslo domu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Zadejte jméno ulice');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Zadejte město');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Zadejte region');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Zadejte PSČ');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Zadejte zemi');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Zadejte číslo pevné tel. linky');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Zadejte číslo mobilního telefonu');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Zadejte e-mail');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Máme volné místa!');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Doposud nebyly vybrány pokoje');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezervace č.');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Barva pozadí messageboxu, připraveno k rezervaci');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Vypsat proměnné šablony?');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Přejete-li si vypsat hodnoty DHTML proměnných na frontendu webu, zadejte hodnotu ANO. Užitečné při ladění šablony.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Hodnota je procentem');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Přejete-li si použít hodnotu SRP kalkulace jako procento, zadejte hodnotu na ANO. V opačném případě je použitá paušální částka.');
//v2rc2
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Omezení dostupných pokojů/ceníků');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Přejete-li si omezit počet vypsaných dostupných pokojů a ceníků v objednávce, zadejte požadovanou hodnotu. Hodnota na 0 zakazuje použití funkce omezení a žádné limity nebudou aplikovány. ');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Aktuálně obsazeno!');
// Introduced in v2.5
// Translate from here
// v2.6
jr_define('_JOMRES_BOOKITNOW', 'Zarezervujte nyní: ');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Celkový editační režím?');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Pozor na toto nastavení. Pokud zvolíte ANO, pak vše co nastavíte, bude mít vliv na všechny texty, související s konstatnou, kterou upravujete.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Hlavní symbol měny');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Spustit komponentu samostatně');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Nastavte na ano, pokud je komponenta spoštěna samostaně a moduly a hlavičky nejsou vidět.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Pouze o víkendech');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Víkendové dny');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Nastavte dny víkendu. Tarify, které platí o víkendech, se budou řídit podle tohoto nastavení.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Před zadáním dalších informací o kapacitě zadejte stát');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Uložte nastavení o kapacitě před tím, než budete nahrávat fotografie.');
jr_define('_JOMRES_TARIFFSFROM', 'Ceny od - ');
jr_define('_JOMRES_SEARCH_ALL', 'Vše');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Hledat podle země');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Hledat podle regionu');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Hledat podle města');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Vlastnosti vyhl.');
jr_define('_JOMRES_SEARCH_BUTTON', 'Hledat');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Vložte frázi, kterou chcete vyhledat a stiskněte talčítko.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Vyhledat slovo(a): ');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Prosím vložte váš předpokládaný příjezd a odjezd a stiskněte tlačítko. Vyhledáme kapacity s volným ubytováním ve vámi zadaném termínu.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Vypsat všechny kapacity dle jejich typu.');
jr_define('_JOMRES_SEARCH_RTYPES', 'Vypsat všechny kapacity dle typu pokoje');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Výchozí');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Název kapacity');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Oblast');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Město');
jr_define('_JOMRES_SORTORDER_STARS', 'Počet hvězdiček');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Podrobnosti o ubytování - ');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervační formulář');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Upravte podrobnosti své adresy');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Znovuověření dostupnosti pokoje<br/>(Předchozí výběr pokojů se vymaže)');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Ověření dostupnosti');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Úprava vašich volitelných doplňků');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Změna výběru pokoje');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Změna údajů v adrese');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Omlouváme se, ale jedno nebo více polí v adrese je vyplněno špatně.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Fotografie pokoje');
jr_define('_JOMRES_CURRENCYFORMAT', 'Formát měny');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Nastavení hledání');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Přístupné Logy');
jr_define('JOMRES_COM_A_MESSAGE', 'Zpráva');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normální');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Rozšířený');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Režim cen');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', 'Nastavte na rozšířený, pokud potřebujete pracovat se složitějšími ceníky');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Ukázat seznam pokojů na základní stránce kapacity?');
jr_define('JOMRES_PROPERTYTYPE', 'Typ kapacity');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Maximální počet osob na pokoji');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Maximální počet osob na rezervaci');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Vlož poznámku');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Uprav poznámku');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Vymaž poznámku');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Ukaž poznámky');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Vložena nová poznámka');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Upravená poznámka');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Vymazaná poznámka');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Výpis rezervací');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezervace');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Zobrazit rezervace');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Zobrazit oblíbené');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Zatím nemáte žádné oblíbené položky!');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Typ kapacity');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Dynamická cena');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktivní');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Tento plugin vám umožní nastavovat ceny pokojů dynamicky.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Většina firem se přepočítává ceny pokojů na základě počtu pokojů na požadovaného typu, které jsou k dispozici k určitému datu. To jim umožňuje nabízet slevy na ten druh pokoje, který není obsazen po určitou dobu s cílem zvýšit obsazenost. Povolení a konfigurace tohoto pluginu umožňuje nastavovat ceny pokojů v závislosti na počtu místností vybraného typu pokoje, které jsou k dispozici v kapacitě na daný den. Počet dnů odstupu definuje počet dnů před příjezdem, ve kterých můsí být pokoje volné. Procento znamená relativní počet pokojů z celku, které musí být volné, aby byla uvedá sleva uplatněna.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Počet do příjezdu');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Procento obsazených pokojů  10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Procento obsazených pokojů  25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Procento obsazených pokojů  50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Procento obsazených pokojů  75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Sleva %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' byla slevněna z původní ceny ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' na ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Cena pokoje není slevněna ');
jr_define('JOMRES_COM_A_MAPSKEY', 'Klíč API na Google maps');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'Klíč API můžete získat z <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Jakmile uložíte API klíč, Jomres automaticky zobrazí mapu v detailu kapacity.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktivní?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Nastavte na ano, pokud chcte vytvářet Last Minute nabídky.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Práh');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Pokud je příjezd pouze N dnů před učiněním rezervace, může být poskytnuta sleva');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Sleva');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'v procentech');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'V této rezervaci byla uplatněna sleva!');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Náklady na pobyt byly sníženy ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Tato kapacita nabízí slevu Last Minute ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' procent, pokud si zarezervujete svůj příjezd nejpozději ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', ' procent nebop i více, pokud si zarezervujete svůj příjezd nejpozději ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Zarezervujte nyní a získejte nejvíce výhod!');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Detailní informace o cenách');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Nastavte na ANO, pokud chcete zobrazovat v detailu kapacity podrobný ceník.');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimalizovat nastavení');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define('_JRPORTAL_CANCEL', 'Zrušit');
jr_define('_JRPORTAL_CPANEL', 'Ovládací panel');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Výchozí výše provize');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Zvolte výchozí výši provize, která bude aplikována v případě, že u kapacity nebude určena její individuální výše.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Seznam provizních sazeb');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Provizní sazba');
jr_define('_JRPORTAL_CRATE_TITLE', 'Název');
jr_define('_JRPORTAL_CRATE_TYPE', 'Typ');
jr_define('_JRPORTAL_CRATE_VALUE', 'Provize');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Kód měny');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Seznam kapacit');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Název kapacity');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Adresa');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'U kapacit, kde je barva pozadí červaná, nebyly ještě aplikovány provizní sazby.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statistika');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provizní sazba');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Výpis rezervací');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'id kapacity');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'id faktury');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Celkem rezervací');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Datum archivace');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Popis');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Můžete založit svoje překladové soubory a použít je v popisu kapacity tak, že založíte podadresář s názevem kapacity a do něj umístíte jazykové soubory..');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Nemůžete tuto kapacitu vymazat, je to jediná kapacita, ke které máte přístup. Pokud ji chcete zakázat, použijte volbu "Nepublikovat" na vaší liště. ');
// Jomres v3.0.6
// Jomres v3.1
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Ubytování celkem');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'nocí v');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'za pokoj ');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Přirážka za pobyt celkem ');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Cena celkem ');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Přečtěte si prosím a vyjádřete souhlas');
jr_define('_JOMRES_CONFIRMATION_HEADER', 'Zhrnutí vaší rezervace níže<br /> Pokud chcete cokoliv změnit, stiskněte tlečítko Opravit rezervaci. ');
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Pokud chcete změnit jakoukoliv informaci, uvedenou výše, stiskntě tlačítko');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Opravit rezervaci');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'Do pole níže napište jakékoliv speciální přání nebo informaci.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Potvrzuji, že výše uvedené informace jsou pravdivé a souhlasím s nimi. ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'za osobu a noc ');
// Jomres 3.1.10
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF')) {
    jr_define('_PN_OF', 'z');
}
if (!defined('_PN_START')) {
    jr_define('_PN_START', 'Začátek');
}
if (!defined('_PN_PREVIOUS')) {
    jr_define('_PN_PREVIOUS', 'Předchozí');
}
if (!defined('_PN_NEXT')) {
    jr_define('_PN_NEXT', 'Další');
}
if (!defined('_PN_END')) {
    jr_define('_PN_END', 'Konec');
}
if (!defined('_PN_RESULTS')) {
    jr_define('_PN_RESULTS', 'Výsledky');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Pozor, nejdná se o rezervační formulář, ale odeslání mejlu.<br/>Vložte zprávu, kterou chcete zaslat. ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Chci kontaktovat hotel');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Dotaz na nemovitost z ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Děkujeme za váš dotaz, který byl odeslán na emailovou adresu ubytovacího zařízení. Odpověď dostanete co nejdříve.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' týká se ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Dotaz');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Prosím vyberte požadované ubytování ze seznamu napravo');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Minimální počet vybraných pokojů');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maximální počet vybraných pokojů');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Upozornění! Příplatek za jednu osobu nastavený zde nebude použitý, pokud je nastavený Přípaletek za jednu osobu v hlavní konfiguraci na ANO. Nastavení je zde umístěno z důvodu, aby bylo umožněno pracovat s proměnnými příplatky za jednu osobu. .');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Volný');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Nějaké rezervace');
jr_define('_JOMRES_AVLCAL_HALF', 'Zpoloviny rezervováno');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Většinou obsazeno');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Zcela rezervováno');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'za týden');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'za týden');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'za rezervaci');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'za osobu a rezervaci');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'za osobu a den');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'za osobu a týden');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'za dny X vybrané pokoje');
jr_define('_JOMRES_REGISTRYREBUILD', 'Obnovit registr modulů');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Běžně je registr modulů Jomres obnovován automaticky pokaždé, když spustíte manažera modulů a přidáte nebo odstraníte modul. Pokud z jakéhokoliv důvodu nemůžete tuto možnost využít, je k dispozici ještě tato volba. Pokud máte přístup do Manažera Modulů a nástroje Uprgade, nebudete tuto volbu potřebovat. Naopak, pokud nainstalujete libovolný modul manuálně, musíte obnovit registr manuálně.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registr úspěšně obnoven');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Při obnovování registru došlo k chybě. Pro bližší informace a eventuelní nalezení chybného záznamu zkontrolujte prosím Jomres chybový log.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Vyhledávání dle rozsahu cen.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Zatím jste neudělali žádnou rezervaci!');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Upravit typ kapacity');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Vybrat typ kapacity');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Váš dotaz...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Limit výpisu kapacit');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Počet kapacit, vypsaných na jedné stránce po skončení vyhledávání');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrované vyhledávání');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Integrované vyhledávání Jomres umožňuje uživatelům vyhledávat kapacity pomocí celé sady funkcí. Pokud jste již používali vyhledávací funkce Jomres v Joomle, budete toto nastavení znát. <br/> Tato funkce nám umožňuje nabídnout vyhledávání v systému Jomres pro ty uživatele, kteří nepoužívají vyhledávací moduly, obsažené v Joomla nebo pro ty uživatele, jejichž CMS vlastní vyhledávací modul nemá. <br/> Jen nezapomeňte, že pokud se rozhodnete hledat něco přes odkaz (tj. nikoli rozbalovací), pak další možnosti vyhledávání nebude možné provést, bude hledán pouze prvek, který odpovídá na odkazu, který jste klikli. <br/> Všimněte si, že ve výchozím nastavení zobrazení nevypadá integrované vyhledávání moc hezky. To proto, že soubor šablony, který zajišťuje zobrazení, musí obsahovat všechny možnosti, z nichž některé jsou vzájemně neslučitelné.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivovat toto nastavení?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Pokud je toto nastavení povoleno, potom jakýkoliv požadavek, který zobrazuje výpis kapacit, bude zároveň zobrazovat i možnosti vyhledávání');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Použij sloupce');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Jakákoliv možnost vyhledávání, kterou definujete jako typ odkaz (tam, kde je to relevantní) bude zobrazena jako sloupec. (IE vloží značku br na konec odkazu)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Vyhledávání regionů pomocí výběru v combo seznamu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Nabízí možnost výběru v seznamu, vyfiltrovanému na země/regiony/města. Pokud chete toto nastavení používat, je lépe neoužívat vyhledávání regionů a měst níže.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Vyhladání kapacity podle jména');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Zobrazit vyhledávání podle názevu kapacity');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Zobrazit jako pole se seznamem?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Vyhledávat podle města/regionu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Zobrazit vyhledávání podle regionu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Zobrazit jako pole se seznamem?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Vyhledávání podle typu kapacity');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Zobrazit vyhledávání podle typu kapacity');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Zobrazit jako pole se seznamem?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Vyhledávání podle typu pokoje');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Zobrazit vyhledávání podle typu pokoje');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Zobrazit jako pole se seznamem?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Vyhledávání podle vlastností');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Zobrazit vyhledávání podle vlastností');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Zobrazit jako pole se seznamem?');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Vyhledávání podle popisu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Zobrazit vyhledávání podle popisu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Vyhledávání podle dostupnosti');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Zobrazit vyhledávání podle dostupnosti');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Vyhledávání dle rozsahu cen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Zobrazit vyhledávání podle cen');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Přírůstek cenového rozpění');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Jomres vyhledá všechny hodnoty v cenících, jejichž rozsahy odpovídají zde nastavené zvýšené ceně.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Ve výchozím nastavení, pokud není vybraná žádná kapacita, Jomres spustí vyhledávání. Pokud toto vyhledávání nebylo spuštěno vyhledávacím modulem, pak dojde k záměrnému vygenerování náhodných výsledků (záměrně). Tato volba umožňuje omezit počet výsledů tohoto náhodného hledání.');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Nastavení a logy procesu Cron');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Inforamce o úloze Cron. Tato úloha je nezbytná pro funkčnost fakturace a zúčtování provizí');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Intalované minikomponenty úlohy Cron. Ke spuštění dané úlohy použijte příslušný odkaz. Uvědomte si, že úloha nebude mít žádný výstup na obrazovku a nebudete tím pádem mít žádnou zpětnou vazbu. Místo toho nahlédněte do log souboru níže.');

jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metoda');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Jestliže nemáte přístup k procesu Cron, nastavte tuto minikomponentu. Jinak vytvřte Cron úlohu a jako parametr ke spuštění zadejte <br /> <i>curl -s '.JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i> ');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Zobrazit logy v prohlížeči');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Pracuje pouze, pokud je metoda nastavena na minikomponentu.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Záznam logu povolen');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Nastavte ANO pro povolení záznamu do log souboru. Výsledky budou ve výstupním souboru uvedeném níže.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Podrobné protokolování');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Výstup logů');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Úprava šablony');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Uživatelská pole');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Zde můžete nadefinovat uživatelská pole, která budou následně zobrazena v rezervačním formuláři.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Název pole (bez mezer)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Výchozí hodnota');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Popis');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Vyžadováno');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximální množství');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Pokud je Maximální hodnota nastavena na hodnotu vyšší jak 1, pak se zobrazí pole se seznamem s výběrem hodnot. ');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Dazby DPH');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Kód daně');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Popis daně');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Nemůžete vymazat tuto sazbu daně.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Daň');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Faktury');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Nazaplacená');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Zaplacená');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Zrušená');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Čeká na vyřízení');
jr_define('_JRPORTAL_INVOICES_USER', 'Uživatel');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Zvýšení');
jr_define('_JRPORTAL_INVOICES_DUE', 'Splatnost');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Schválení');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Celkem nezaplaceno');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Frekvence plateb');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Platební den');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Kód měny');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Položky řádku');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Jméno');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Popis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Základní cena');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Základní množství');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Základní sleva');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Celkem');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Kód daně');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Popis daně');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'Sazba daně');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Ignorovat standardní nastavení platební brány Jomres?');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Ukaž mé faktury');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Slevové kupony');
jr_define('_JRPORTAL_COUPONS_DESC', 'Kódy slevových kuponů mohou být vygenerovány a zaslány uživatelům systému, aby byla podpořena poptávka po rezevování kapacit. Datum platnosti se vztahuje na použití slevového kuponu, nikoliv na datum rezervace jako takové.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Kód kuponu');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Platnost od');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Platnost do');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Výše slevy');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Sleva je procentní');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Pouze pokoj');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Pokud máte kód slevového kuponu, napište nebo zkopírujte jej do tohoto pole a stiskněte tlačítko Ulož slevu. Vaše sleva bude uplatněna na tuto rezervaci.');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Ulož slevu');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Sleva uložena do rezervace');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kód slevového kuponu nenalezen');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Výše slevy na kuponu');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervace se slevou. Kód kuponu/sleva/nastavení kuponu: ');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Volba jazyka');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Vyberte jazyky, které chcete vybírat v přepínacím seznamu jazyků.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Ukázat výběr jazyka?');
/*
* @ignore
*/
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Vážený/á');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Děkujeme za registraci ');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Vaše uživatelské jméno je : ');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Vaše heslo : ');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Prosím přihlašte se, aby jste mohli prohlížet Vaše rezervace ');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupón uložen');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupón vymazán');
// Not used yet
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'Jomres -> Clickatell SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Jméno');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Heslo');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API id');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Číslo telefonu pro zaslání potvrzení');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Prosím, použijte formát 'Country code, mobile number'. Např: '420123456789'. Nevyplňujte, pokud nechcete dostávat zprávy o odeslání.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Vyplňte zbytek formuláře. Ujistěte se, že jste zadali správnou adresu IP(IP adresu tohoto serveru), nastavte Callback na HTTP POST. Musíte nastavit IP callback na " .get_showtime('live_site').'/index.php?option=com_jomres&task=sms_clickatell_callback a dále userid a heslo.<br/>
Pokud zadáváte více než jedno API spojení, jejich popis musí být vždy jedninečný - nelze mít více API se stejným názvem.<br/>
Po úspěšném odeslání formuláře se zobrazí všechny detaily vašeho připojení, včetně seznamu všech API a jejich jedinečného id. Všechny tyto údaje jsou potřebné pro přojení k bráně Clickatell a odeslání zpráv.<br/>
<br/>
Použijte userid, heslo a api_id v vyplnění příslušných polí.<br/>
<br/>
');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Ukázat zakázaný přístup k rezervačnímu formuláři');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Ukázat maximální počet osob v rezervačním formuláři');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Prosím uvědomte si, že uvedé ceny jsou pouze přibližné. Přesné ceny budou vypočteny teprve až vyberete pokoj nebo pokoje.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Předplacené balíčky');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Jméno');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Popis');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Publikováno');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Plný obnos');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Limit kapacit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Předplatit');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Použít funkce předplatného');
jr_define('_JOMRES_COM_NEWUSER', 'Při rezervaci vytvořit nového uživatele');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Pokud rezervaci zadává neregistrovaný uživatel, automaticky proběhne vytvoření nového uživatele.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Klikněte zde pro zadání vaší kapacity');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Děkujeme za rezervaci. Níže jsou uvedeny údaje nového uživatele');
jr_define('_JOMRES_LATLONG_DESC', 'Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.');
jr_define('_JOMRES_CONTROLPANEL', 'Ovládací panel');
// Jomres v4.2
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Zobrazit fakturu');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Zobrazit faktury');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Vložit moji kapacitu na tuto stránku');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Varování : ');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Omlouvám se, ale ID balíčku nebylo rozpoznáno.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Omlouvám se, ale už jste jednou použil balíček zdarma a nemůžete jej použít znovu.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Vaše obchodní údaje');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Obchodní jméno');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'DIČ');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Číslo popisné');
jr_define('_JOMRES_INVOICE_NUMBER', 'Číslo faktury ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Vyberte data, která chcete použít pro anonymní rezervaci. Poté, co jste vyberete vhodná data, klikněte na tlačítko "Použít" a znovu proveďte kontrolu dostupnosti. <br/>
<br/>Pokud v kapacitě je jedna nebo více rezervací za vybrané období, pak nebudete moci objednat až do té chvíle, kdy bude druhá rezervace / anonymní rezervace zrušena nebo odhlášena. ');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Bohužel, na tento termín nelze provést nanonymní rezervaci.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Na tento termín lze provést anonymní rezervaci.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Platba za tuto kapacitu je nastavena na osobu a noc, ale nemáte vytvořený nebo zveřejněný žádný typ hosta. Prosím vytvořte, případně zveřejněte alespoň jeden typ hosta pro tuto kapacitu. ');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Zatím nemáte žádnou pložku v ceníku, nebude možné pro tuto kapacitu přijímat rezervace.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Režim úprav zapnutý');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Režim úprav vypnutý');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Vytiskni fakturu');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charge variable deposits?');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Počet dní, během nichž bude celá částka účtována jako záloha.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Potvrzovací e -mail byl odeslán. Toto okno můžete nyní zavřít.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontaktujte zástupce');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Označit fakturu jako zaplacenou');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Faktura označena jako zaplacená');
jr_define('_JOMRES_APIKEY_REMAKE', 'Vytvořte nový klíč API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Jedná se o instalaci jedné nemovitosti?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Pokud je tato možnost nastavena na Ano, pak je zobrazení frontendu Jomres pro neautorizované uživatele výrazně zjednodušeno. Výchozí volání pro Jomres z možnosti nabídky, místo toho, aby dostali seznam nemovitostí, jen vezmou hosta do rezervačního formuláře pro první nemovitost v systému. Správci nemovitostí také neuvidí tlačítko Náhled podrobností vlastností ani tlačítko Přidat novou vlastnost. Ideální, pokud chcete uvést pouze jednu nemovitost a přijímat rezervace.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Platební bilance');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Všimněte si, že používáte režim úprav s aktivovaným režimem globálních úprav. To je v pořádku, pokud chápete, co režim globálních úprav znamená, ale pokud tak neučiníte, můžete si způsobit problémy. Pokud si nejste jisti, zda byste měli Jomres používat tímto způsobem, podívejte se na <a href = "http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode " target ="_blank"> manuální stránka režimu úprav </a> pro více informací o tomto tématu.');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Číslo vašeho licenčního klíče podpory (také známé jako vaše licenční číslo). Abyste mohli stahovat pluginy pro Jomres, budete potřebovat aktuální licenci.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Osobní sleva');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Omezit registraci nemovitosti na jednu zemi?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Nastavením této možnosti na Ano a nastavením země v následující možnosti můžete zajistit, aby registrace nemovitostí byla omezena pouze na jednu zemi.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Nemovitosti se nacházejí v této zemi:');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Vyberte téma jquery, které chcete použít pro karty podrobností vlastnosti.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Je nám líto, ale tato nemovitost není momentálně k dispozici.');
jr_define('_JOMRES_REVIEWS', 'Recenze');
jr_define('_JOMRES_REVIEWS_TITLE', 'Název recenze');
jr_define('_JOMRES_REVIEWS_DATE', 'Vloženo na ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Pro tuto nemovitost zatím nejsou k dispozici žádné recenze.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Chcete být první, kdo ohodnotí tuto nemovitost?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Souhlasím s touto recenzí');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'S touto recenzí nesouhlasím');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Průměrné hodnocení: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Celkový počet hlasů:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Přidejte novou recenzi.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Chcete -li napsat recenzi, musíte být přihlášeni.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Řekněte nám, co si o této nemovitosti myslíte: ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Tento recenzent nám řekl: ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pros: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Odesláno dne: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Tuto vlastnost jste již zkontrolovali, nemůžete o ní zveřejnit další recenzi.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.');
jr_define ('_JOMRES_REVIEWS_CLICKTOSHOW', 'Zobrazit recenze');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'hosté s touto recenzí souhlasí.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'hosté s touto recenzí nesouhlasí.');
jr_define ('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'host s touto recenzí souhlasí.');
jr_define ('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'host s touto recenzí nesouhlasí.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Děkujeme za sdílení vašeho názoru na tuto recenzi.');
jr_define ('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Děkujeme, ale již jste sdíleli svůj názor na tuto recenzi.');
jr_define ('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Zajistěte, aby byla vyplněna všechna pole.');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Shrňte prosím svoji recenzi zadáním názvu');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Zadejte prosím úplnější recenzi do pole popisu');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Zadejte dobré části své zkušenosti s hostováním v této nemovitosti');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Zadejte jakékoli negativní myšlenky, které byste mohli mít o své zkušenosti');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Ohodnoťte prosím hostitelskou kapacitu, kterou jste obdrželi od zaměstnanců');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Ohodnoťte prosím svůj názor na národní prostředí dané nemovitosti');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Uveďte prosím svůj názor na čistotu nemovitosti');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Ohodnoťte prosím ubytování. Bylo to pohodlné nebo ošuntělé');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Uveďte prosím svůj názor na to, zda to byla hodnota za peníze');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Ohodnoťte prosím služby');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Přehled shrnutí');
jr_define ('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Vaše zkušenosti podrobněji');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Děkujeme za odeslání vaší recenze.');
jr_define ('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Děkujeme za zaslání vaší recenze. Brzy ji zveřejní jeden z našich usilovně pracujících moderátorů.');
jr_define ('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Použít funkci kontroly Jomres?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automaticky publikovat recenze?');
jr_define ('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Pokud toto nastavíte na Ne, budete muset recenze publikovat ručně');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Nastavit recenze do testovacího režimu?');
jr_define ('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Správci nemovitostí obvykle nemohou kontrolovat vlastnosti. Když je povolen testovací režim, mohou. Přirozeně to není v produkčním prostředí ideální.');
jr_define ('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Toto je seznam všech vlastností. Chcete -li zobrazit recenze nemovitosti, klikněte na ni. Odtud budete moci publikovat nebo odstranit recenzi.');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'počet nepublikovaných recenzí');
jr_define ('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'celkový počet recenzí');
jr_define ('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publikovat/Zrušit publikování recenze');
jr_define ('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Odstranit recenzi');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW', 'Zkontrolovat kontrolu');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Zkontrolovat zprávy');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Zadejte svou zprávu');
jr_define ('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Vidíte v této recenzi něco, co je námitkové nebo nepřesné? Nahlaste to a my to pro vás prověříme.');
jr_define ('_JOMRES_REVIEWS_SUBMIT', 'Odeslat');
jr_define ('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by');
jr_define ('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Zprávy zasílají uživatelé, kteří mohou nesouhlasit s obsahem recenze. Jediný způsob, jak odebrat zprávu, je odstranit recenzi.');
jr_define ('_JOMRES_REVIEWS_RATING', 'Hodnocení (1 = špatná 10 = vynikající)');
jr_define ('_JOMRES_REVIEWS_RATING_1', 'pohostinství');
jr_define ('_JOMRES_REVIEWS_RATING_2', 'Poloha');
jr_define ('_JOMRES_REVIEWS_RATING_3', 'Čistota');
jr_define ('_JOMRES_REVIEWS_RATING_4', 'Ubytování');
jr_define ('_JOMRES_REVIEWS_RATING_5', 'hodnota za peníze');
jr_define ('_JOMRES_REVIEWS_RATING_6', 'služby');
jr_define ('_JOMRES_REVIEWS_REVIEWED_BY', 'zkontrolováno:');
jr_define ('_JOMRES_REVIEWS_CLICKTOHIDE', 'Skrýt recenze');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Zobrazit rezervační formulář na stránce s podrobnostmi o nemovitosti?');
jr_define ('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Nastavením na Ano zobrazíte rezervační formulář na stránce s podrobnostmi o nemovitosti. Pokud ho nastavíte na Ne, pak se místo na odkaz na rezervační formulář na stránce s podrobnostmi o nemovitosti zobrazí odkaz.');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE', 'Jsou ceny stanoveny včetně daně?');
jr_define ('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Ceny jsou včetně? Pokud vaše ceny zahrnují daň, pak vyberte Ano. Pokud nejsou, vyberte Ne');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extra tax:');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Pole dne v týdnu vám umožňují nastavit sazbu pro daný den v týdnu, jakmile kliknete na tlačítko dne v týdnu, všechny dny v týdnu budou nastaveny na tuto sazbu.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Výběr data a zadání sazeb vám umožňují nastavit jednu cenu pro dané časové období. Vyberte počáteční a koncové datum, zadejte cenu a klikněte na tlačítko Nastavit sazby.');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Počáteční rozsah');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Sazba');
jr_define ('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Nastavit sazby');
jr_define ('_JOMRES_PARTNERS_TITLE', 'Partneři');
jr_define ('_JOMRES_CALENDAR_RTL', 'false');
jr_define ('_JOMRES_ROOMALLOCATIONS_ROOM', 'Místnost');
jr_define ('_JOMRES_ROOMALLOCATIONS_GUESTS', 'host (s).');
jr_define ('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'Takto jsme přiřadili čísla vašich hostů jejich pokojům. Pokud byste chtěli toto přidělení změnit, budete muset po rezervaci kontaktovat hotel. Pokud změníte přiřazení, mohou být účtovány další poplatky. ');
jr_define ('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Všimněte si, že vaše nemovitost ještě není zveřejněna, pouze vy ji můžete vidět, návštěvníci stránek ji neuvidí');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Výchozí pořadí výsledků hledání');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Změnit tuto možnost, chcete -li změnit pořadí, ve kterém se výsledky hledání standardně zobrazují.');
jr_define ('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Zobrazit rozevírací seznam výsledků hledání');
jr_define ('_JOMRES_ROOMMSLIST_STYLE', 'Styl seznamu pokojů');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_DESC', 'V rezervačním formuláři pomocí "klasického" stylu seznamu pokojů nabízíte hostům jednotlivé pokoje. Při zobrazení typu pokoje si hosté místo toho vyberou počet pokojů typu X (např. 2 x dvoulůžkový pokoj) ');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define ('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Typ místnosti');
jr_define ('_JOMRES_COM_CALENDAR_STARTDAY', 'Počáteční den kalendářního týdne, neděle nebo pondělí');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Pouze ubytovaní hosté mohou hodnotit?');
jr_define ('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Nastavit na Ano, pokud chcete omezit hodnocení pouze na ty uživatele, kteří již byli hostem v této nemovitosti.');
jr_define ('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Na pokoj');
jr_define ('_JOMRES_MAX_GUESTS_PER_ROOM', 'Hosté na pokoj:');
jr_define ('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Hosté na rezervaci:');
jr_define ('_JOMRES_NUMBER_OF_ROOMS', 'počet pokojů');
jr_define ('_JRPORTAL_MONTHS_LONG_0', 'leden');
jr_define ('_JRPORTAL_MONTHS_LONG_1', 'únor');
jr_define ('_JRPORTAL_MONTHS_LONG_2', 'březen');
jr_define ('_JRPORTAL_MONTHS_LONG_3', 'duben');
jr_define ('_JRPORTAL_MONTHS_LONG_4', 'květen');
jr_define ('_JRPORTAL_MONTHS_LONG_5', 'červen');
jr_define ('_JRPORTAL_MONTHS_LONG_6', 'červenec');
jr_define ('_JRPORTAL_MONTHS_LONG_7', 'srpen');
jr_define ('_JRPORTAL_MONTHS_LONG_8', 'září');
jr_define ('_JRPORTAL_MONTHS_LONG_9', 'říjen');
jr_define ('_JRPORTAL_MONTHS_LONG_10', 'listopad');
jr_define ('_JRPORTAL_MONTHS_LONG_11', 'prosinec');
jr_define ('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Nastavením na Ano snížíte počet možností dostupných správcům nemovitostí v sekci Obecná konfigurace. To je užitečné, pokud nechcete, aby si správci nemovitostí hráli s příliš mnoha nastaveními, místo toho můžete upravit jomres_config .php k definování výchozích voleb vlastností. ');
jr_define ('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Vyberte prosím možnost rezervace');
jr_define ('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p> Pokud je tato možnost nastavena na Ano, pak budou moci manažeři zobrazit editor html dodávaný s CMS a do popisu zadat HTML. Toto je potenciální bezpečnostní riziko, protože existuje možnost, že mohou zavést nežádoucí HTML nebo Javascript. Pokud navíc zadají špatně formátovaný HTML, může dojít k ohrožení designu stránky. Je lepší nechat tuto možnost nastavenou na Ne, kdekoli je to možné. </p> <p> Pokud jsou všichni správci důvěryhodnými uživateli (např. sami), pak jej můžete nechat nastavený na Ano a upravíte různé HTML tagy, které mohou zadávat na kartě Filtrování vstupů v Konfiguraci webu. </p> <p> Pokud na druhé straně znovu používá Jomres jako portál, kde zvete uživatele, aby přidali a spravovali své vlastní vlastnosti, pak to není ideální konfigurace. Místo toho byste měli nechat tuto možnost nastavenou na Ne. Je -li nastavena na Žádní manažeři, místo toho uvidí editor značení, který lze použít k zadání základního formátování, které by mělo být dostačující pro většinu uživatelů. </p> ");
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Fullscreen view');
jr_define ('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normální zobrazení');
jr_define ('_JOMRES_PARTNER_DISCOUNT', 'partnerská sleva');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Hledat uživatele');
jr_define ('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Zadejte několik znaků k vyhledání uživatele. <br/> Když vyberete uživatele, automaticky jej přidáte jako partnera a budete přesměrováni na další stránku, kde můžete přiřadit vlastnosti a slevy uživateli. ');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Stávající partneři');
jr_define ('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Vyberte partnera, kterého chcete přesunout na stránku správy partnera.');
jr_define ('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Hledat nemovitost');
jr_define ('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Zadejte několik znaků z názvu vlastnosti a vyberte vlastnost. <br/> Když vyberete nemovitost, přidáte ji do portfolia partnera, ale oni zatím nebudou využívat žádné slevy, budete potřebovat nastavit ty sám.");
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktuální vlastnosti');
jr_define ('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Kliknutím na službu upravíte nastavení slev partnera u této služby.");

jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'Tento účet byl pozastaven, aktuálně není možné spravovat vaše vlastní účty pomocí tohoto účtu.');
jr_define ('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'účet správce pozastaven');
jr_define ('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'účet správce obnoven');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Upozorňujeme, že váš účet správce nemovitosti byl pozastaven. Dokud účet nebude obnoven, nebudete moci provádět žádné funkce správy majetku.');
jr_define ('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Vezměte prosím na vědomí, že váš účet správce nemovitosti je nyní aktivní. Můžete nadále provádět jakékoli funkce správy majetku. Přihlaste se prosím ke svému účtu a zajistěte, aby byly zveřejněny příslušné vlastnosti. Děkuji.' );
jr_define ('_JOMCOMP_MYUSER_REMOVE', 'Odebrat oblíbené');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE', 'Archiv údajů o rezervaci');
jr_define ('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Archiv rezervačních dat je prvotní výpis informací o rezervaci zachycený po kliknutí na tlačítko potvrzení rezervace. Chcete -li zobrazit výpis surových dat, najeďte myší na datum. Informace jsou uloženy v tabulce XXX__jomres_booking_data_archive.');
jr_define ('_JOMRES_MY_ACCOUNT_EDIT', 'Upravit účet');
jr_define ('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'Chcete -li přidat uživatele jako správce vlastností, zadejte nejprve několik prvních znaků jeho uživatelského jména do výše uvedeného pole. Až bude nalezen správný uživatel, kliknutím na toto jméno jej vyberte a poté vyberte vlastnost ( s) měli by být správcem. Uživatel <em> již musí být uživatelem v CMS </em> ');
jr_define ('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Stávající manažeři');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Zobrazit rozevírací seznam podle počtu hostů');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stars');
jr_define ('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'rozevírací seznam Zobrazit hvězdy');
jr_define ('_JOMRES_SEARCH_GUESTNUMBER', 'Sleeps');
jr_define ('_JOMRES_SEARCH_STARS', 'počet hvězdiček');
jr_define ('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'počet vlastností');
// 4.6.1
jr_define ('_JOMRES_CONFIG_JQUERY', 'Načíst knihovnu Jomres jQuery?');
jr_define ('_JOMRES_CONFIG_JQUERY_DESC', 'Toto můžete nastavit na NE, pokud máte šablonu, která používá jquery. To MŮŽE vyřešit problémy s konfliktem jquery u některých šablon, ale ne u všech.');
jr_define ('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Povolení této možnosti vám umožní zobrazit jazykový přepínač v zobrazení na celou obrazovku v rozhraní frontend.');
jr_define ('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Pro nahrané obrázky se automaticky vytvoří miniatury.');
// 4.7.1
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Malé miniatury maximální šířka (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Malé miniatury jsou použity v seznamu vlastností, zatímco středně velké miniatury jsou použity v záhlaví vlastnosti.');
jr_define ('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Malé miniatury, maximální výška (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'střední miniatury maximální šířka (px).');
jr_define ('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'střední miniatury maximální výška (px).');
jr_define ('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE', 'Použít funkci provize?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Nastavením na Ano zobrazíte faktury provizí manažera, které byly vzneseny.');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manažerské rezervace vytvářejí provizní faktury?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Pokud manažer provede rezervaci, vytvoří se tím také řádková položka faktury za provizi?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automatické pozastavení správců, kde jsou faktury označeny jako Nevyřízené?');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto Suspend Threadhold');
jr_define ('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threadshold is the number of days has the manager must to a purchase anplate before they are guaranteed and their properties unublished.');
//4.7.2
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT', 'jazykový kontext');
jr_define ('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Tuto možnost použijte ke změně jazykového kontextu webu. Tato funkce umožňuje Jomresu používat štítky, které jsou vhodné pro vaše aktuální zaměření, takže pokud je vaše zaměření jako Yacht Brokerage, pak změna kontextu umožnit Jomresu prezentovat štítky z jiného jazykového souboru. Pokud například nastavíte kontext na "Yacht Brokerage", pak Jomres nejprve najde aktuální jazyk a poté vyhledá v podadresáři adresář /'.JOMRES_ROOT_DIRECTORY.'/languages nazývá se "yachtbrokerage". Pokud soubor pro aktuální jazyk existuje, použije se tento soubor. Pokud ne, pak Jomres vyhledá soubor v anglickém jazyce ve stejném adresáři. Pokud to nelze najít, Jomres použije jazykový soubor pro aktuálně vybraný jazyk v adresáři /'.JOMRES_ROOT_DIRECTORY.'/languages. ');
// 4.7.3
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Nastavte tuto možnost na Ano, pokud chcete používat pokročilé možnosti konfigurace webu. Pokud s Jomres teprve začínáte, doporučujeme prozatím ponechat toto nastavení na Ne, protože výchozí instalace je dostačující pro začátek, místo toho byste měli přidat Jomres do hlavní nabídky a přihlásit se do frontendu jako "admin" a začít konfigurovat své vlastnosti. Upozorňujeme, že mnoho pokročilých možností nemusí být k dispozici, pokud ne t mít nainstalován příslušný (é) plugin (y). Uživatelé bezplatného základního systému nebudou moci plně využívat funkcí, které povolují. ');
jr_define ('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
jr_define ('_JOMRES_SORTORDER_PRICE_DESC', 'Cena (nejvyšší první)');
jr_define ('_JOMRES_SORTORDER_PRICE_ASC', 'Cena (nejnižší první)');
// 4.7.6
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Souhrn cen a odhady by měly být stanoveny podle ceny za noc/za týden/za měsíc?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Za noc');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Za týden');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'za měsíc');
jr_define ('_JOMRES_BOOKINGFORM_PERPERSON', 'Na osobu');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'týden (týdny) v');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'měsíce (měsíce) v');
// 4.7.7
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Jak by měla fungovat možnost vyhledávání čísel osob?');
jr_define ('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Ovlivňuje všechny vyhledávací moduly. Pokud při použití funkce vyhledávání čísla hosta má funkce vyhledávání hledat vlastnosti, jejichž tarify budou podporovat čísla hostů vyšší a stejná jako zvolené číslo, přesně stejné jako zvolené číslo, nebo zvolené a větší číslo? ');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Počkejte prosím, vaše objednávka se zpracovává a budete přesměrováni na webovou stránku Paypal.');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Pokud nejste do 5 sekund automaticky přesměrováni na Paypal ...');
jr_define ('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Klikněte sem');
// 4.7.8
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'rezervace platná od');
jr_define ('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'rezervace platná do');
jr_define ('_JRPORTAL_COUPONS_GUESTNAME', 'jméno hosta');
jr_define ('_JRPORTAL_COUPONS_DESC_478', "Slevové kódy lze generovat a předávat hostům jako pobídku k rezervacím. <br/>
Platné od a do data se vztahují k datům, ve kterých je možné provést rezervaci, zatímco rezervace platná od/do data se vztahují k datům, která rezervace musí zahrnovat, aby byl kupón platný. Pokud rezervace spadá mimo toto období, budou pro dny mimo toto období platit normální ceny. <br/>
Pokud chcete, aby rezervace byla k dispozici pro jednoho konkrétního hosta, vyberte v rozevíracím seznamu jméno tohoto hosta a omezte kupón pouze na tohoto hosta.");
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'S vaším kupónem byla tato rezervace zlevněna');
jr_define ('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'to');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Nastavením na Ne zakážete načítání souborů javascriptu JQ a souborů CSS.');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Načíst knihovnu CSS Jomres jQuery UI?');
jr_define ('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Nastavením na Ne zakážete pouze soubor CSS jquery UI.');
//v5.1
jr_define ('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc tax');
jr_define ('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Nepublikovaná vlastnost');
// v5.2
jr_define ('_JOMRES_CONVERSION_TITLE', 'Použít funkci převodu');
jr_define ('_JOMRES_CONVERSION_TITLE_DESC', "Použijte funkci online převodu Jomres. To nabídne uživatelům rozbalovacího seznamu konverzí, kde si budou moci vybrat měnu, ve které chtějí vidět nabízené ceny. Cenový výstup je upraven tak, aby zobrazoval převedené cena následovaná původní cenou nemovitosti v závorkách. ");
jr_define ('_JOMRES_CONVERSION_DISCLAIMER', 'Vyvinuli jsme maximální úsilí k získání co nejpřesnějších a nejaktuálnějších směnných kurzů. Naše funkce online převodu měn je služba poskytovaná pouze pro informační účely a není určena k poskytování přesných čísel. V souladu s tím, neručíme za správnost směnných kurzů. Používáním této funkce se má za to, že jste souhlasili s tím, že jakékoli spoléhání se na funkci převodu kurzů nebo její použití bude zcela na vaše vlastní riziko. ');
// 5.2.1
// 5.3.1
jr_define ('_JOMRES_CURRENCYCONVERSION_TAB', 'Převody měn/kódy měn');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define ('_JOMRES_IP_DETECTION_API_KEY_DESC', 'K automatickému nastavení rozevíracího seznamu měnových kódů může Jomres používat k detekci země návštěvníka bezplatnou službu s názvem IPinfoDB, nicméně pro klíč API se musíte zaregistrovat na <a href = " https://www.ipinfodb.com/login" target ="_blank"> IPinfoDB </a> jako první. ');
jr_define ('_JOMRES_DEBUGGING_TAB', 'Ladění');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'ubytování bez daně');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'ubytování včetně daně');
jr_define ('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Pokojová daň:');
jr_define ('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Otevřít rezervační formulář');
jr_define ('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Zpět na podrobnosti nemovitosti');
jr_define ('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automaticky vybrané?');
jr_define ('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Zůstatek (po zaplacení zálohy)');
jr_define ('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrování zdrojů na základě jejich funkcí.');
jr_define ('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Poslední rezervace');
jr_define ('_JOMRES_DATEPERIOD_SECOND', 'druhý');
jr_define ('_JOMRES_DATEPERIOD_MINUTE', 'minuta');
jr_define ('_JOMRES_DATEPERIOD_HOUR', 'hodina');
jr_define ('_JOMRES_DATEPERIOD_DAY', 'den');
jr_define ('_JOMRES_DATEPERIOD_WEEK', 'týden');
jr_define ('_JOMRES_DATEPERIOD_MONTH', 'měsíc');
jr_define ('_JOMRES_DATEPERIOD_YEAR', 'rok');
jr_define ('_JOMRES_DATEPERIOD_DECADE', 'dekáda');
jr_define ('_JOMRES_DATEPERIOD_S', 's');
jr_define ('_JOMRES_DATEPERIOD_AGO', 'před');
jr_define ('_JOMRES_DATEPERIOD_FROMNOW', 'od nynějška');
jr_define ('_JOMRES_WHOLEDAY_TITLE', 'Rezervace jsou na celé dny?');
jr_define ('_JOMRES_WHOLEDAY_DESC', 'Ve výchozím nastavení systém rezervuje zdroje v noci, takže rezervace od prvního ledna'. date ('Y', strtotime ('příští rok')). 'do 2. ledna Datum. dnů a zákazníkovi budou účtovány dva dny. ');
jr_define ('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Za den');
jr_define ('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Na osobu za den');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'vyzvednutí');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define ('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dny (dny) v');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'datum vrácení nesprávné');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Rezervace je příliš krátká. Mezi daty vyzvednutí a vrácení musí být alespoň tolik dní:');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'minimální interval vyzvednutí/vrácení');
jr_define ('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Minimální interval v rezervačním formuláři mezi daty vyzvednutí a odevzdání. Interval 1 znamená, že data vyzvednutí a vrácení lze nastavit na stejný den, ale stále to závisí na minimu interval, který automaticky vypočítává rezervační systém, protože kontroluje tarify platné pro období rezervace. ');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Shrnutí ceny a odhady by měly být oceněny za den/za týden/za měsíc?');
jr_define ('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Za den');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dny před datem vyzvednutí');
jr_define ('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Minimální počet dnů, které musí uplynout od "dneška" před datem vyzvednutí.');
jr_define ('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Nastavte toto na ano, pokud chcete omezit rezervace předem (použijte následující pole pro nastavení limitu ve dnech). Pokud toto nastavíte na ano, pak pokud se uživatel pokusí rezervovat více než n dny předem pak bude jejich datum vyzvednutí obnoveno na dnešní datum ');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Zobrazit datum návratu?');
jr_define ('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Nastavte toto na Ne, pokud nechcete zobrazovat pole pro zadání data návratu. Toto použijte pouze v případě, že víte, co děláte, protože datum návratu v rezervacích bude vždy nastaveno na den. po datu vyzvednutí. ");
jr_define ('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Pokud toto nastavíte na Ano, budou rezervace přijímány na pevné období. Pokud je toto nastaveno na Ne, pak zajistěte, aby "definovaný den vyzvednutí" nebyl nastaven na Ano (pokud konkrétně neuvedete chcete přinutit lidi vyzvednout v určitý den v týdnu), jinak v kalendáři dostupnosti nedostanete mnoho odkazů. ');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Předdefinovaný den vyzvednutí');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Pouze pro weby nabízející rezervace na dobu určitou. Vyberte den v týdnu, kdy je třeba vyzvednutí provést.');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'pevný den vyzvednutí');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr:');
jr_define ('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Když jsou vybrána pevná data vyzvednutí, počet dat, která lze zobrazit v rozevíracím seznamu dat. Upozorňujeme, že seznam dat nebude obsahovat žádná data, pokud rezervace není možná z důvodu předchozích rezervací, a že seznam bude ve skutečnosti dvakrát delší než vámi vybrané číslo, protože bude mít podobný počet historických dat (je -li k dispozici). ');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Na osobu, za den');
jr_define ('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Vyberte Ano, pokud chcete účtovat za osobu na den. Pokud ne, náklady se vypočítají na základě zdrojů za den');
jr_define ('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variabilní vklady vám umožňují definovat, zda si přejete účtovat celou částku, pokud je datum vyzvednutí rezervace do N dnů od "dneška". Chcete -li funkci povolit, nastavte tuto možnost na Ano. , a zadejte počet dní níže, takže například pokud je den vyzvednutí do 60 dnů, bude účtovaná částka vkladu v plné výši, v opačném případě bude částka založena na výše nakonfigurovaných možnostech vkladu. ');
jr_define ('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Většina firem přepočítá ceny zdrojů na základě počtu zdrojů požadovaného typu, které jsou k danému datu k dispozici. To jim umožňuje nabízet slevy na typ zdroje/firmy, který není zaneprázdněn během dané období s cílem přilákat podnikání, které by jinak mohlo být zmeškáno. <br/> Povolení a konfigurace tohoto pluginu vám umožní nabídnout nastavitelné ceny na základě počtu zdrojů vybraného typu, které jsou v daný den v podniku k dispozici. <br/> Prahová hodnota dnů definuje počet dní, ve kterých musí být datum vyzvednutí, než budou ceny zdrojů upraveny touto funkcí, a poté vám možnosti procent umožní konfigurovat procento zdrojů, které mohou být k dispozici před uplatněním dané slevy . Všimněte si však, že pokud je rezervováno více zdrojů, bude aktuální úroveň slevy aplikována na všechny zdroje a nebude se snižovat, protože bude vybráno více zdrojů. ');
jr_define ('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (počet dní mezi datem vyzvednutí a dneškem)');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'vyzvednutí dnes');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'vyzvednuto');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Vrátí se dnes');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'vrátit se po splatnosti');
jr_define ('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'nevyzvedl');
jr_define ('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Označit vyzvednutou rezervaci.');
jr_define ('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Označit rezervaci vrácenou.');
jr_define ('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Označit vyzvednutou rezervaci');
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Označit rezervaci vrácenou');
jr_define ('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cena za den:');
jr_define ('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'počet dní:');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define ('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Uložit přepsání');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'E -mail novým uživatelům jejich přihlašovací údaje?');
jr_define ('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Pokud je možnost Vytvořit nového uživatele nastavena na Ano, můžete tuto možnost nastavit na Ne, abyste zajistili, že po vytvoření uživatele nebudou zasílány jejich přihlašovací údaje e -mailem. To může být užitečné, pokud jste automaticky například přidání nových uživatelů do seznamu adresátů a nechtějí, aby se uživatelé skutečně přihlásili. ');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Zobrazit daňový výstup v souhrnu součtů rezervačního formuláře?');
jr_define ('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Zabránit rezervačnímu formuláři zobrazovat pole cen daně v souhrnu součtů nastavením této možnosti na Ne');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold');
jr_define ('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Přihlášeni, registrovaní hosté mohou zrušit své vlastní rezervace. Zde můžete nastavit držení vláken, ve dnech, kdy rezervaci nelze zrušit po určitém počtu dnů před datem příjezdu.');
jr_define ('_JOMRES_EDIT_PROFILE', 'Upravit profil');
jr_define ('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Vztah typu nemovitosti');
jr_define ('_JOMRES_IMAGE', 'Obrázek');
jr_define ('_JOMRES_CRATES_CLICKINITIAL', 'Kliknutím na dopis zobrazíte všechny firmy s tímto prvním znakem. Jakmile máte seznam nemovitostí, můžete těmto nemovitostem přiřadit sazby provizí, nebo kliknutím na ikonu "upravit" zobrazíte firmu \' s statistiky. ');
jr_define ('_JRPORTAL_TAX_RATE_EDIT', 'Upravit sazbu daně');
jr_define ('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Upravit vlastní pole');
jr_define ('_JOMRES_LICENSESERVER_PASSWORD', 'heslo licenčního serveru');
jr_define ('_JOMRES_LICENSESERVER_USERNAME', 'Uživatelské jméno licenčního serveru');
jr_define ('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Pokud máte na licenčním serveru uživatelské jméno a heslo, zadejte je sem. To vám pomůže získat přístup k zásuvným modulům, na které máte nárok. Pokud jste do pole výše zadali platný klíč podpory, pak zde není nutné zadávat uživatelské jméno/heslo. ');
jr_define ('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version:');
jr_define ('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'nejnovější verze Jomres');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert: K dispozici je nová verze Jomres, doporučujeme provést upgrade co nejdříve.');
jr_define ('_JOMRES_PRODUCT_INFORMATION', 'Vítejte v Jomres. Základní systém je zdarma, ale lze jej vylepšit instalací pluginů. K přístupu k těmto pluginům budete potřebovat licenci ke stažení a podpoře. Pokud si chcete zakoupit Jomres Starter "Obchodní nebo podniková licence, <a href="http://www.jomres.net/prices" target="_blank"> navštivte naše stránky </a>, kde najdete informace o tom, jak můžete upgradovat. ');
jr_define ('_JOMRES_PRODUCT_INFORMATION2', 'Tento systém je ideální pro jakýkoli scénář, ať už jde o jednoduchý rezervační formulář pro jednu nemovitost, až po web, který má více uživatelů, ve více jazycích, s více vlastnostmi. Podívejte se do "Nápovědy" v nabídce, včetně stránky "Začínáme", která vás provede vašimi prvními kroky. ');
jr_define ('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktivní vlastnost');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Nastavení e -mailu');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Chcete-li použít tato alternativní nastavení SMTP, nastavte tuto možnost na Ano. Stále více webových hostitelů zřejmě blokuje funkce pošty v PHP, takže se můžete rozhodnout překonat nastavení pošty, které Jomres přijme od vašeho hostitele. CMS (obvykle Joomla) a zde použijte nastavení podle vlastního výběru. ');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'alternativní hostitel');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Změnit toto na váš poštovní server smtp');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternativní port');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Změnit na port smtp');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternativní protokol');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "V závislosti na nastavení vašeho serveru smtp toto pole nechte prázdné, nebo zadejte\" ssl \"nebo\" tls \". Pokud nevíte, zeptejte se svého poskytovatele SMTP.");
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Použít ověřování');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Pokud váš server SMTP vyžaduje přihlášení klientů, nastavte toto na Ano. Poté bude použito uživatelské jméno a heslo.');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternativní heslo');
jr_define ('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define ('_JOMRES_QUICK_INFO', 'Rychlé informace');
jr_define ('_JOMRES_MENU_SHOW', 'Zobrazit');
jr_define ('_JOMRES_MENU_HIDE', 'Skrýt');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'výchozí');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'kdokoli');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registered');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'manažer');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super manažer');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nobody');
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE', 'Ovládání přístupu z nabídky');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC', 'Tato funkce vám umožňuje řídit, kdo bude moci vidět plugin v hlavní nabídce. Možnosti uživatele 00009 jsou obvykle viditelné buď/nebo neregistrovanými návštěvníky stránek, možnosti 00010 obecně odkazují na aktivity typu recepce, které jsou používá se každý den, zatímco možnosti 00011 se používají k nastavení a konfiguraci vlastnosti, ale jsou přístupné méně často. ');
jr_define ('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepční');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'úplné řízení přístupu');
jr_define ('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Nastavením této možnosti na Ano povolíte funkci úplného řízení přístupu, poté přejděte na možnost Řízení přístupu v části Údržba systému a nakonfigurujte řízení přístupu.');
jr_define ('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Všimněte si však, že toto nastavení nekontroluje základní skripty, ke kterým se připojují, takže například pokud nastavíte <i> 00009user_option_03_search </i> na 'Manager', uživatel, který zná Jomres, může stále zavolejte j06000search.class.php zadáním adresy http://www.domain.com/index.php?option=com_jomres&task=search do adresního řádku prohlížeče. Je to záměrné, protože toto ovládání přístupu do nabídky jednoduše ovládá to, co lze vidět v Hlavní nabídka Jomres. Pokud potřebujete přísnější ovládací prvky, nastavte možnost Konfigurace webu -> Úplné řízení přístupu na Ano a znovu se podívejte na možnost Řízení přístupu do nabídky. ");
jr_define ('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Úplné řízení přístupu');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define ('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Varování! Máte povolenou plnou kontrolu přístupu, nicméně jsme započítali nastavení řízení přístupu a porovnali je s počtem minikomponentů, které by měly být ovládány, a ty dva se neshodují, proto můžete mít nějaké skripty, které nejsou kontrolovány. Může to být problém zabezpečení a naléhavě vás žádáme, abyste to okamžitě vyřešili návštěvou funkce Řízení přístupu a kontrolou, zda byly použity příslušné úrovně. ');
jr_define ('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Uživatelé s právy správce k této vlastnosti');
jr_define ('_JOMRES_DEBUGGING_YOUREMAIL', 'vaše e -mailová adresa');
jr_define ('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define ('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define ('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define ('_JOMRES_METATITLE', 'Meta název');
jr_define ('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define ('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Add your property: Step 2 of 2');
jr_define ('_JOMRES_CART_TITLE', 'Moje navrhované rezervace');
jr_define ('_JOMRES_CART_INFO', 'Všimněte si, že tyto rezervace ještě nebyly uloženy. Pokud se odhlásíte nebo vyprší platnost vaší relace, budou ztraceny. Nezapomeňte potvrdit své rezervace!');
jr_define ('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potvrdit rezervaci');
jr_define ('_JOMRES_CART_OR', 'nebo');
jr_define ('_JOMRES_CART_SAVEFORLATER', 'Uložit na později');
jr_define ('_JOMRES_CART_NOBOOKINGS_SAVED', 'Ještě nemáte uložené žádné rezervace.');
jr_define ('_JOMRES_CART_VIEWCART', 'Zobrazit košík');
jr_define ('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Podadresář jazykových souborů');
jr_define ('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define ('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Výchozí výchozí bod zeměpisné délky');
jr_define ('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Jaké by měly být výchozí body zeměpisné šířky/délky před přesunutím značky na mapě Google na stránce úpravy vlastností?');
jr_define ('_JOMRES_SYSTEM_EMAILS', 'E -maily odeslané z které adresy?');
jr_define ('_JOMRES_SYSTEM_EMAILS_DESC', "Nechte tuto možnost prázdnou, abyste ji deaktivovali. Jomres použije při odesílání e -mailů hostům e -mailové adresy hotelu, ale vaše e -mailová služba NEMUSÍ povolit e -maily z libovolných adres (tj. mohou povolit pouze e -maily od jedna autorizovaná adresa). Pokud tomu tak je, můžete pomocí tohoto vstupu zadat adresu, která bude u všech systémových e -mailů považována za FROM adresu. ");
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'List view');
jr_define ('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Zobrazení fotografií');
jr_define ('_JOMRES_COMPARE', 'Porovnat');
jr_define ('_JOMRES_REMOVE', 'Odebrat');
jr_define ('_JOMRES_RETURN_TO_RESULTS', 'Zpět na výsledky hledání');
jr_define ('_JOMRES_ADDTOSHORTLIST', 'Přidat k oblíbeným');
jr_define ('_JOMRES_REMOVEFROMSHORTLIST', 'Odebrat z oblíbených');
jr_define ('_JOMRES_VIEWSHORTLIST', 'View your shortlist');
jr_define ('_JOMRES_COOKIEPOLICY_1', 'Důležité: Zásady používání souborů cookie');
jr_define ('_JOMRES_COOKIEPOLICY_2', 'Používáme cookies, abychom zajistili, že náš web bude relevantní a snadno použitelný.');
jr_define ('_JOMRES_COOKIEPOLICY_3', 'Přečíst více ...');
jr_define ('_JOMRES_COOKIEPOLICY_4', 'právní předpisy EU vyžadují, aby všechny webové stránky jasně specifikovaly, zda jsou soubory cookie používány, a jejich účel.');
jr_define ('_JOMRES_COOKIEPOLICY_5', "Vyhledávací a rezervační engine tohoto webu si musí pamatovat možnosti, které jste zvolili pro jeho nejlepší fungování. K tomu je třeba ukládat informace, které jsou spojeny s malým souborem s názvem cookie , který jednoznačně identifikuje váš prohlížeč, a abychom to mohli udělat, musíte s tím souhlasit. Pokud tyto zásady pro soubory cookie nepřijmete, budete velmi omezeni v tom, co na tomto webu můžete dělat. ");
jr_define ('_JOMRES_COOKIEPOLICY_6', 'Ano, přijímám používání cookies tímto způsobem.');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'požadovaný vklad je cena první noci?');
jr_define ('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Ceny se vypočítávají na základě ceny za noc. Chcete, aby byla záloha účtována jako poplatek za jednu noc? Pokud ano, můžete následující možnosti ignorovat.');
jr_define ('_JOMRES_NOTHINGINSHORTLIST', "Nepřidali jste žádné položky do oblíbených.");
jr_define ('_JOMRES_SAFEMODE', 'Povolit bezpečný režim?');
jr_define ('_JOMRES_SAFEMODE_DESC', "Nastavením na Ano spustíte nouzový režim. Tím deaktivujete všechny pluginy, takže Jomres bude používat pouze jeho základní funkce.");
jr_define ('_JOMRES_PRICE_ON_APPLICATION', 'Cena za aplikaci');
jr_define ('COMMON_NEXT', 'Next');
jr_define ('COMMON_CANCEL', 'Cancel');
jr_define ('COMMON_SUBMIT', 'Submit');
jr_define ('COMMON_SAVE', 'Save');
jr_define ('COMMON_DELETE', 'Delete');
jr_define ('COMMON_RETURN', 'Return');
jr_define ('COMMON_CLOSE', 'Zavřít');
jr_define ('COMMON_BACK', 'Zpět');
jr_define ('COMMON_HOME', 'Home');
jr_define ('COMMON_NEW', 'nový');
jr_define ('COMMON_SEND', 'Send');
jr_define ('RECAPTCHA_TITLE', 'reCaptcha');
jr_define ('RECAPTCHA_INFO', 'Captcha slouží k zajištění toho, aby klient používající webové formuláře byl člověkem, a slouží k tomu, aby správci nemovitostí nebyli "spamováni" roboty na internetu. Chcete -li v Jomres použít formulář Kontaktujte nás se bude muset zaregistrovat na <a href="http://www.google.com/recaptcha" target="_blank"> domovské stránce Google reCaptcha </a> a nastavit ve vaší doméně příjem veřejných a soukromých klíčů. tyto klíče jste obdrželi, zadejte je níže. Služba reCapcha je bezplatná služba poskytovaná společností Google. ');
jr_define ('RECAPTCHA_PUBLIC_KEY', 'Veřejný klíč');
jr_define ('RECAPTCHA_PRIVATE_KEY', 'soukromý klíč');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define ('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Aby se předešlo nebezpečí pro hosty, dvojité rezervace pokojů, Jomres používá zamykací soubor, aby se zabránilo přidání pokoje do seznamu dostupných pokojů v rezervačním formuláři, pokud někdo jiný již přidal pokoj do jejich pro stejná data . Ve výchozím nastavení tento zámek vyprší za 3600 sekund nebo jednu hodinu. Dobu, po které zámek vyprší, můžete změnit změnou tohoto obrázku. ');
jr_define ('_JOMRES_BOOTSTRAPSWITCH', "Povolit šablony a funkce bootstrapu Jomres?");
jr_define ('COMMON_ACTION', 'Action');
jr_define ('COMMON_VIEW', 'View');
jr_define ('BACKTOTOP', 'Back to top');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Slabý');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define ('_JOMRES_INPUTFILTERING', 'Filtrování vstupů');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'úroveň filtrování vstupu');
jr_define ('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Většina dat, která jsou zadána do systému, je dezinfikována tak, že nejprve odstraníte všechny html tagy a poté použijete funkci filtrování proměnných PHP, která zajistí bezpečnost dat před jejich vložením do databáze. Možná budete chtít povolit určité vstupy (například textové vstupy na stránce s podrobnostmi o vlastnostech) pro zahrnutí HTML. Existují dva stupně filtrování, které můžete použít k filtrování tohoto vstupu, buď Slabý, nebo Silný. Nastavení Slabé byste měli použít pouze v případě, že uživatelé zadávají datům důvěřujete sami, např. kolegové správci systému, jinak byste je měli nechat nastavená na Silná. Pokud je nastavena na silnou (doporučeno), stále můžete určit, které značky povolíte, úpravou dalšího nastavení Značky povolené v HTML Purifier. ") ;
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Povolené vstupní značky');
jr_define ('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Můžete upravit značky, které čistička html umožní prostřednictvím svého filtračního systému. Výchozí hodnota je 'p, b, strong, a [href], i' (tj. odstavec, tučné, silné, odkazy a kurzíva) ). Další informace o povolených značkách naleznete v dokumentaci čističe HTML na adrese <a href='http://htmlpurifier.org' target='_blank'> htmlpurifier.org </a>. Toto nastavení můžete změnit, ale doporučujeme ponechat výchozí nastavení. ");
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Povolené vstupy');
jr_define ('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Úpravou této možnosti můžete definovat, které vstupy formuláře umožní html, jakýkoli vstup přidaný do tohoto seznamu bude analyzován místo toho, aby byl odstraněn veškerý html. Výchozí je: 'property_description property_checkin_tport property_policies_disclaimers '. Přidejte další vstupy přidáním jejich z názvů, oddělených mezerou. ");
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Podrobnosti o vlastnostech na kartách?');
jr_define ('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Nastavit tuto možnost pro zobrazení podrobností vlastností na kartách. Nastavit na ne, aby se zobrazovaly bez karet.');
jr_define ('COMMON_PRINT', 'Print');
jr_define ('COMMON_EDIT', 'Edit');
jr_define ('COMMON_COPY', 'Copy');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres je navržen tak, aby fungoval v rámci rámců Bootstrap 2 nebo Bootstrap 3. Jakmile si nainstalujete motiv nebo šablonu BS2 nebo BS3, nastavte tento přepínač tak, aby si vybral, které z příchutí Bootstrapu má Jomres fungovat. s.');
jr_define ('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Použít šablony Jomres Bootstrap ve frontendu?');
jr_define ('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Zde jsou některé alternativy, které byste měli zvážit.');
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Automaticky detekovat zemi hosta?");
jr_define ('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "Systém se pokusí automaticky detekovat zemi hosta, pokud si ji předtím nezarezervoval. Tuto možnost můžete nastavit na Ne a definovat zemi, kterou byste chtěli v rezervačním formuláři zobrazit v další možnost. ");
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'O Jomres');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define ('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Začínáme');
jr_define ('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Access Control');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'vývojářské nástroje');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'jazyky');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'generování příjmu');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'struktura webu');
jr_define ('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define ('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Můj účet (online)');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'funkce portálu');
jr_define ('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'zprávy/statistiky');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define ('_JOMRES_CUSTOMCODE_UPGRADES', 'Aktualizace');
jr_define ('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'platební metody');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tarif default');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'To platí pouze pro nové tarify');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define ('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Definuje počet let, které se mají zobrazit při úpravě typu tarifu');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'faktury');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'podrobnosti o účtu');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Přihlášení');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Odhlásit');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'hledat');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'dashboard');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'rezerva');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'faktury');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'nastavení');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'různé');
jr_define ('_JOMRES_EDIT_COUNTRY_TITLE', 'Upravit zemi');
jr_define ('_JOMRES_EDIT_COUNTRY_ID', 'ID země');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'kód země');
jr_define ('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'název země');
jr_define ('_JOMRES_EDIT_REGION_TITLE', 'Upravit region');
jr_define ('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define ('_JOMRES_EDIT_REGION_COUNTRYCODE', 'kód země');
jr_define ('_JOMRES_EDIT_REGION_REGIONNAME', 'Region name');
jr_define ('_JOMRES_COM_LISTCOUNTRIES', 'Seznam zemí');
jr_define ('_JOMRES_COM_LISTREGIONS', 'Seznam oblastí');
jr_define ('_JOMRES_EXPORT_DEFINITIONS', 'Export definic');
jr_define ('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Tato funkce vám umožňuje exportovat překlady, které byly vytvořeny pomocí funkce Language Translation. Vytvoří textové pole se všemi údaji potřebnými k vytvoření nového jazykového souboru, vše, co musíte udělat je zkopírovat a vložit tento výstup do nového jazykového souboru, který můžete vložit na nový server založený na Jomres, nebo chcete -li přispět zpět do komunity Jomres. ');
jr_define ('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Přeložit národní prostředí');
jr_define ('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define ('_JOMRES_COM_NOTAMANAGER', "Chyba, uživatel, ke kterému jste přihlášeni, není v Jomres super manažerem, tuto funkci nebudete moci používat, dokud nepoužijete funkci Správce vlastností, abyste se stali OBOU správcem a super manažer. Toto je bezpečnostní funkce. ");
jr_define ('_JOMRES_COM_LAYOUTS_DEFAULT', 'Výchozí rozložení seznamu vlastností');
jr_define ('_JOMRES_STAYFORAMINIMUMOF', 'Zůstaňte minimálně');
jr_define ('_JOMRES_NIGHTSFOR', 'noci pro');
jr_define ('_JOMRES_AGENT', 'Agent');
jr_define ('_JOMRES_AGENT_DETAILS', 'Podrobnosti o agentovi');
jr_define ('_JOMRES_AGENT_LISTINGS', "Výpisy agenta");
jr_define ('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automaticky schválit nové vlastnosti');
jr_define ('_JOMRES_APPROVALS_CONFIG_DESC', 'Pokud nastavíte tuto možnost na Ne, budete muset nové vlastnosti ručně schválit. Dokud nebude vlastnost schválena, nemůže být publikována Správcem/Správcem super vlastnosti.');
jr_define ('_JOMRES_APPROVALS_MENU_NAME', 'Schválení');
jr_define ('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Tato vlastnost ještě nebyla schválena. Jakmile bude schválena, budete ji moci publikovat.');
jr_define ('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Litujeme, tuto vlastnost nemůžete publikovat, protože ještě nebyla schválena.');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Nová vlastnost vyžaduje schválení');
jr_define ('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Do systému byla přidána vlastnost, která vyžaduje vaše schválení. Kliknutím na odkaz zobrazíte vlastnosti čekající na seznam schválení:');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Váš majetek byl schválen');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Gratulujeme, váš majetek byl schválen, kliknutím na následující odkaz zobrazíte ovládací panel zařízení:");
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Názvy regionů jsou přeložitelné');
jr_define ('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Pokud neběžíte na velmi rychlém serveru, doporučujeme nechat tuto sadu nastavenou na Ne. Vzhledem k velkému počtu názvů regionů zabírá překlad názvů regionů spoustu paměti, což může zpomalit vaše výsledky vyhledávání dolů.");
jr_define ('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Host rezervován.');
jr_define ('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Omlouváme se, tato e -mailová adresa je již používána. Pokud se jedná o vaši e -mailovou adresu, zkontrolujte, zda jste se před pokusem o rezervaci přihlásili.');
jr_define ('JOMRES_TAPTOCALL', 'Klepnutím zavoláte');
jr_define ('JOMRES_NEWREVIEW_SUBJECT', 'Nová recenze pro');
jr_define ('JOMRES_NEWREVIEW_MESSAGE', 'Byla ponechána nová recenze');
jr_define ('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define ('JOMRES_NEWREPORT_MESSAGE', 'Byla hlášena recenze pro');
jr_define ('JOMRES_SUPERIOR', 'Superior');
jr_define ('JOMRES_GRANDTOTAL_EX_TAX', 'Celkový součet (bez daně):');
jr_define ('JOMRES_GRANDTOTAL_INC_TAX', 'celkový součet (včetně daně):');
jr_define ('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Celková daň:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Zadejte dvě slova:');
jr_define ('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'zadejte, co slyšíte:');
jr_define ('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Přehrát zvukovou stopu');
jr_define ('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Stáhnout skladbu ve formátu MP3');
jr_define ('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Vizuální režim');
jr_define ('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'režim zvuku');
jr_define ('JOMRES_RECAPTCHA_REFRESH_BTN', 'Obnovit');
jr_define ('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define ('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Omlouváme se, to bylo nesprávné. Zkuste to prosím znovu.');
jr_define ('JOMRES_GOOGLE_MAPS', 'Možnosti mapy Google');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Použít povětrnostní vrstvu?');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define ('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Použít tranzitní vrstvu?');
jr_define ('JOMRES_GOOGLE_MAPS_POIS', 'Povolit body zájmu Gmap (včetně případně vašich konkurentů)?');
jr_define ('_JOMRES_METAKEYWORDS', 'Meta Klíčová slova');
jr_define ('_JOMRES_SCAN_FOR_DIRECTIONS', 'Naskenováním tohoto kódu do telefonu získáte trasu k nám.');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "Zadané DIČ se nezdá být správné. Měli byste mít něco takového: BE805670816B01");
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Neplatné DIČ. Zkontrolujte prosím platnost svého DIČ pomocí webové služby pro ověřování evropského DIČ (VIES)');
jr_define ('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Gratulujeme. Dokázali jsme ověřit vaše DIČ.');
jr_define ('_JOMRES_TAX_RULES_LIST', 'Seznam daňových pravidel');
jr_define ('_JOMRES_TAX_RULE', 'daňové pravidlo');
jr_define ('_JOMRES_TAX_RULE_INFO', 'Daňová pravidla se používají ke stanovení různých daňových pravidel pro různé regiony. Tato daňová pravidla ovlivňují osobu provádějící rezervaci, pokud jsou zaregistrováni, přihlášeni a upravili svůj účet na stránce "upravit můj účet" . Účelem těchto pravidel je vyhovět ubytovatelům v oblastech, které jsou osvobozeny od DPH. Můžete zjistit, že není nutné vytvářet mnoho pravidel, pokud vůbec nějaká existují. ');
jr_define ('_JOMRES_TAX_RATES_IMPORT', 'Sazby dovozní daně');
jr_define ('_JOMRES_TAX_RATES_IMPORT_INFO', 'Pokud si přejete, můžeme pro vás importovat daňové sazby do EU. Pokud tuto funkci používáte, budou odstraněny všechny vaše stávající daňové sazby.');
jr_define ('_JRPORTAL_TAX_RULE_EDIT', 'Upravit daňové pravidlo');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER', 'DIČ pro tuto vlastnost.');
jr_define ('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Zadejte prosím DIČ pro tuto vlastnost.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'DIČ ověřeno.');
jr_define ('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'DIČ není ověřeno.');
jr_define ('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Zde zadané obchodní údaje budou použity na fakturách za provize a předplatné.');
jr_define ('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "Zdá se, že jste ještě nevyplnili podrobnosti o svém účtu. Abychom mohli na webu uvést vaši nemovitost, potřebujeme, abyste před dalším pokračováním vyplnili údaje o svém účtu.");
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Výroba nebo vývoj?');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Pokud nastavíte tuto možnost na Development, povolíme hlášení chyb, jinak při nastavení na Production, které bude vypnuto. Pokud se jedná o živý server, doporučujeme nastavit tuto možnost na production .' );
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Výroba');
jr_define ('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define ('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Podrobnosti o zdroji');
jr_define ('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Podrobnosti o tarifu');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define ('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'vlevo!');
jr_define ('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'funkce zdroje');
jr_define ('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Tuto funkci zdroje nelze odebrat, je přiřazena ke zdroji. Odeberte funkci z tohoto zdroje a zkuste to znovu.');
// v7.4
jr_define ('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Center');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Přidat obrázky');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Obrázky pokojů');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Hlavní obrázek nemovitosti');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define ('_JOMRES_MEDIA_CENTRE_CLEAR', 'Vymazat seznam');
jr_define ('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Vyberte zdroj, pro který chcete nahrávat obrázky. Pokud můžete nahrávat obrázky pro jednotlivé zdroje (např. místnosti), dostanete druhý rozevírací seznam pro výběr konkrétního zdroje.');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Pokud jako "hlavní obrázek vlastnosti" nahrajete více obrázků, budou použity v seznamu vlastností. Obrázky prezentace se zobrazí na stránce s podrobnostmi o nemovitosti.');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Zobrazit obrázek');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Odstranit obrázek');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Nahrát obrázek');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Ikony typů místností');
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Ikony vlastností vlastností');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Nahrát všechny soubory');
//8.0
jr_define ('COMMON_PREV', 'Předchozí');
jr_define ('COMMON_MORE', 'More');
jr_define ('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define ('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define ('_JOMRES_DASHBOARD_MONTH', 'měsíc');
jr_define ('_JOMRES_DASHBOARD_WEEK', 'týden');
jr_define ('_JOMRES_DASHBOARD_DAY', 'den');
jr_define ('_JOMRES_HLEGEND', 'Legenda');
jr_define ('_JOMRES_HFILTER', 'Filtr');
jr_define ('_JOMRES_HFROM', 'Od');
jr_define ('_JOMRES_HTO', 'Komu');
jr_define ('_JOMRES_HNEW_BOOKING', 'Nová rezervace');
jr_define ('_JOMRES_HSTATUS_DEPOSIT', 'stav vkladu');
jr_define ('_JOMRES_HSTATUS_GUEST', 'stav hosta');
jr_define ('_JOMRES_HSTATUS_BOOKING', 'Stav rezervace');
jr_define ('_JOMRES_HSTATUS_PUBLISHING', 'stav publikování');
jr_define ('_JOMRES_HSTATUS_INVOICE', 'stav faktury');
jr_define ('_JOMRES_HSTATUS_INVOICE_TYPE', 'typ faktury');
jr_define ('_JOMRES_HSTATUS_APPROVED', 'Schváleno');
jr_define ('_JOMRES_HSTATUS_CURRENT', 'Aktuální podnikání');
jr_define ('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Zobrazit rezervace pro');
jr_define ('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Zobrazit faktury pro');
jr_define ('_JOMRES_STATUS_ANY', 'Any');
jr_define ('_JOMRES_STATUS_PAID', 'Placené');
jr_define ('_JOMRES_STATUS_NOTPAID', 'Nezaplaceno');
jr_define ('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define ('_JOMRES_STATUS_ACTIVE', 'aktivní');
jr_define ('_JOMRES_STATUS_CANCELLED', 'Zrušeno');
jr_define ('_JOMRES_STATUS_PUBLISHED', 'Publikováno');
jr_define ('_JOMRES_STATUS_NOT_PUBLISHED', 'Nezveřejněno');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Hosté s aktivní rezervací');
jr_define ('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Hosté s předchozími rezervacemi');
jr_define ('_JOMRES_STATUS_BOOKINGS', 'rezervace');
jr_define ('_JOMRES_STATUS_SUBSCRIPTIONS', 'Předplatné');
jr_define ('_JOMRES_STATUS_COMMISSIONS', 'Provize');
jr_define ('_JOMRES_STATUS_ALL_PROPERTIES', 'All my business');
jr_define ('_JOMRES_ACTION_SET_CURRENT', 'Nastavit jako aktuální');
jr_define ('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define ('_JOMRES_ACTION_CHECKOUT', 'Pokladna');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'rezervace');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'vlastnosti');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'hosté');
jr_define ('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'zprávy');
jr_define ('_JOMRES_HLIST_GUESTS', 'hosté');
jr_define ('_JOMRES_HLIST_GUESTS_MENU', 'Seznam hostů');
jr_define ('_JOMRES_HLIST_INVOICES_MENU', 'Seznam faktur');
jr_define ('_JOMRES_HLIST_PROPERTIES', 'Vlastnosti');
jr_define ('_JOMRES_HQUICK_BOOKING', 'Rychlá rezervace');
jr_define ('_JOMRES_HDATE_OF_BOOKING', 'Datum rezervace');
jr_define ('_JOMRES_HTWO_WEEKS', 'Dva týdny');
jr_define ('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Tato rezervace bude zrušena. Stisknutím OK rezervaci zrušíte.');
jr_define ('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define ('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define ('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Aktuální obyvatelé');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION', 'umístění navigačního panelu');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Výchozí (oblast obsahu)');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Opraveno nahoru');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Upevněno na dno');
jr_define ('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Invertovaný navbar (změna barvy)');
jr_define ('_JOMRES_BOOKING_NUMBER', 'číslo rezervace');
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zobrazit hosty pro');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define ('_JOMRES_BOOTSTRAP_VERSION_DESC', "Jomres obsahuje vlastní sady šablon, jednu pro každou podporovanou verzi Bootstrapu. Šablony/motivy Joomla a Wordpress, které jsou založeny na Bootstrapu, nabídnou konkrétní verzi Bootstrapu, takže je třeba zajistit, aby zvolená možnost zde je kompatibilní s vaší šablonou/motivem. Pokud vaše téma neposkytuje žádný kód Bootstrap, nastavte tuto možnost na No Bootstrap in Theme a poté Jomres automaticky zahrne soubory Bootstrap 3 pro vlastní použití. ");
jr_define ('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Zobrazit hosty pro');
jr_define ('_JOMRES_HFIXED_PERIODS', 'pevná období');
jr_define ('_JOMRES_HDEPOSITS', 'Vklady');
jr_define ('_JOMRES_HBOOKING_FORM', 'rezervační formulář');
jr_define ('_JOMRES_HREQUIRED_FIELDS', 'Povinná pole');
jr_define ('COMMON_PLACEHOLDER_FIRSTNAME', 'Tom');
jr_define ('COMMON_PLACEHOLDER_SURNAME', 'Smith');
jr_define ('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define ('COMMON_PLACEHOLDER_STREET', 'My Street');
jr_define ('COMMON_PLACEHOLDER_TOWN', 'My Town');
jr_define ('COMMON_PLACEHOLDER_LANDLINE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_MOBILE', '00000 000000');
jr_define ('COMMON_PLACEHOLDER_PROPERTYNAME', 'My Hotel');
jr_define ('COMMON_PLACEHOLDER_POSTCODE', 'XXNN NNXX');
jr_define ('COMMON_PLACEHOLDER_EMAIL', 'example@address.com');
jr_define ('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define ('SIMPLE_CONFIGURATION', 'Jednoduchá konfigurace');
jr_define ('_JOMRES_HRESOURCE_FEATURES', 'Funkce zdrojů');
jr_define ('_JOMRES_HRESOURCE_TYPE', 'Typ zdroje');
jr_define ('_JOMRES_HEDIT_GUEST_TYPE', 'Upravit typ hosta');
jr_define ('_JOMRES_HEDIT_COUPON', 'Upravit kupón');
jr_define ('_JOMRES_HEDIT_EXTRA', 'Upravit navíc');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Vytvořit více zdrojů');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generovat zdroje');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Kolik zdrojů?');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max hostů na zdroj');
jr_define ('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Odstranit všechny existující zdroje?');
jr_define ('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Pamatujte, aktuálně si prohlížíte oblast administrátora s Advanced Site Config nastavenou na Ne. Chcete -li zobrazit více možností, nastavte Site Configuration -> Misc -> Advanced Site Config na Yes.');
jr_define ('DATATABLES_SINFO', 'Zobrazeno _START_to _END_of _TOTAL_entries');
jr_define ('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Schválení');
jr_define ('_JOMRES_BOOKING_REJECT_INQUIRY', 'Odmítnout dotaz na rezervaci');
jr_define ('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Schválit rezervační dotaz');
jr_define ('_JOMRES_STATUS_APPROVED', 'Schváleno');
jr_define ('_JOMRES_STATUS_REJECTED', 'Odmítnuto');
jr_define ('_JOMRES_STATUS_INQUIRY', 'Poptávka');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Rezervace vyžadují schválení nebo potvrzení dostupnosti?');
jr_define ('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Pokud je nastaveno na ano, při rezervaci se nezobrazí v kalendářích dostupnosti (a ostatní hosté si mohou tyto dny a zdroje stále rezervovat), dokud správce nemovitosti nepřijme/nepotvrdí dostupnost rezervace . Po potvrzení je rezervace vložena jako prozatímní (pokud nepřepisuje jiné rezervace; ostatní hosté si již nemohou rezervovat stejné termíny) a zákazníkovi je zaslán e -mail k provedení platby. ');
jr_define ('_JOMRES_ERROR', 'Chyba');
jr_define ('_JOMRES_ERROR_MESSAGE', 'Omlouváme se! Při pokusu o zpracování této funkce došlo k chybě. Bylo to pro vás nahlášeno a my se tím budeme zabývat.');jr_define ('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Zpráva');
jr_define ('_JOMRES_ERROR_DEBUGGING_FILE', 'Soubor');
jr_define ('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define ('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mailové šablony');
jr_define ('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Upravit šablonu e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'předmět e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TEXT', 'text e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TYPE', 'typ e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_NAME', 'E -mailový název');
jr_define ('_JOMRES_EMAIL_TEMPLATES_DESC', 'Popis e -mailu');
jr_define ('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Na této stránce naleznete pomoc s přizpůsobením e-mailů a seznamem dostupného výstupu: <a href = "http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target ="_blank"> Nápověda pro šablony e-mailů </a> ');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define ('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'E -mail odeslaný správci webu při nové rezervaci, pokud je povolena globální brána Paypal');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define ('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'E -mail odeslaný majiteli nemovitosti při nové rezervaci');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define ('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'E -mail odeslaný hostovi při provedení nové rezervace');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Potvrzovací dopis hosta');
jr_define ('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Dopis nebo e -mail k tisku, které může vlastník nemovitosti odeslat ručně k potvrzení rezervace');
jr_define ('_JOMRES_CAN_BE_APPROVED', 'Tuto rezervaci lze schválit. Všechny vybrané zdroje jsou k dispozici pro vybraná data.');
jr_define ('_JOMRES_CANT_BE_APPROVED', 'Tuto rezervaci nelze schválit, protože některé zdroje jsou již rezervovány pro vybraná data. Nejprve budete muset rezervaci upravit.');
jr_define ('_JOMRES_SHOW_POWEREDBY', 'Zobrazit odkaz Powered by Jomres v zápatí Jomres.');
jr_define ('GUEST_BUDGET', 'Budget');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH', 'Použít funkci rozpočtu?');
jr_define ('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Pouze zaváděcí weby! Funkce Budget je funkce seznamu nemovitostí, kterou může host použít ke zvýraznění ubytování, jehož cena za noc je pod určitým číslem. Tato funkce má určitá omezení v tom, že by mohla nemusí být vhodné pro některé weby, které používají mnoho různých měn. Všimněte si, že pokud používáte tento a doplněk Doporučené výpisy, vaše třída zalamování výpisů se automaticky změní na 'primární panel', když se zobrazí seznam vlastností. ");
jr_define ('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Jméno:');
jr_define ('_JOMRES_FOR', 'Pro');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHT', 'noc');
jr_define ('_JOMRES_PRICINGOUTPUT_NIGHTS', 'noci');
jr_define ('_JOMRES_LIVE_SCROLLING', 'Použít živé posouvání/nekonečné posouvání v seznamu vlastností?');
jr_define ('_JRPORTAL_MONTHS_SHORT_0', 'led');
jr_define ('_JRPORTAL_MONTHS_SHORT_1', 'únor');
jr_define ('_JRPORTAL_MONTHS_SHORT_2', 'březen');
jr_define ('_JRPORTAL_MONTHS_SHORT_3', 'duben');
jr_define ('_JRPORTAL_MONTHS_SHORT_4', 'květen');
jr_define ('_JRPORTAL_MONTHS_SHORT_5', 'červen');
jr_define ('_JRPORTAL_MONTHS_SHORT_6', 'červenec');
jr_define ('_JRPORTAL_MONTHS_SHORT_7', 'srpen');
jr_define ('_JRPORTAL_MONTHS_SHORT_8', 'září');
jr_define ('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define ('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define ('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Zobrazuji _START_až _END_z celkem _TOTAL_záznamů');
jr_define('DATATABLES_SINFOEMPTY', 'Zobrazuji 0 až 0 z 0 záznamů');
jr_define('DATATABLES_SINFOFILTERED', '(filtrováno z celkem _MAX_záznamů)');
jr_define('DATATABLES_SINFOPOSTFIX', '');
jr_define('DATATABLES_SINFOTHOUSANDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SLENGTHMENU', 'Zobraz záznamů _MENU_');
jr_define('DATATABLES_SLOADINGRECORDS', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SPROCESSING', 'Provádím...');
jr_define('DATATABLES_SSEARCH', 'Hledat:');
jr_define('DATATABLES_SZERORECORDS', 'Žádné záznamy nebyly nalezeny');
jr_define('DATATABLES_SFIRST', 'První');
jr_define('DATATABLES_SLAST', 'Poslední');
jr_define('DATATABLES_SNEXT', 'Další');
jr_define('DATATABLES_SPREVIOUS', 'Předchozí');
jr_define('DATATABLES_SSORTASCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SSORTDESCENDING', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define ('DATATABLES_SHOWHIDE', 'Změnit sloupce');
jr_define ('_BOOKING_ONREQUEST', 'Rezervace na vyžádání');
jr_define ('_BOOKING_INSTANT', 'Okamžitá rezervace');
jr_define ('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define ('_JOMRES_COM_FONTAWESOME_DESC', 'Nastavit na Ano, pokud vaše šablona neobsahuje Font Awesome.');
jr_define ('_BOOKING_CALCQUOTE', 'Žádat o rezervaci');
jr_define ('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear');
jr_define ('_JOMRES_MULTISITES_SELECT_A_SITE', 'Vyberte web');
jr_define ('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define ('_JOMRES_IS_EU_COUNTRY', 'Země EU?');
jr_define ('_JOMRES_HLASTCHANGED', 'naposledy změněno');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'E -mail se zrušením rezervace hotelu');
jr_define ('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'E -mail odeslaný vlastníkovi nemovitosti při zrušení nové rezervace');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'E -mail pro zrušení rezervace hosta');
jr_define ('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'E -mail odeslaný hostovi při zrušení nové rezervace');
jr_define ('_JOMRES_TEST_EMAIL_SEND', 'Odeslat testovací e -mail');
jr_define ('_JOMRES_TEST_EMAIL_SUBJECT', 'Testovací e -mail');
jr_define ('_JOMRES_TEST_EMAIL_CONTENT', 'Toto je testovací e -mail z vašeho rezervačního systému.');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testovací e -mail byl úspěšně odeslán');
jr_define ('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testovací e -mail nebyl odeslán');
jr_define ('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define ('_OPENEXCHANGE_API', 'klíč API pro otevřené směnné kurzy');
jr_define ('_OPENEXCHANGE_API_DESC', 'K převodu cen mezi službami budete potřebovat klíč API Open Exchange Rates. Pro správné zobrazení cen v Jomres MUSÍTE mít klíč API, nicméně <a href = "https://openexchangerates.org/signup/free" target ="_blank"> zaregistrujte si bezplatný klíč </a> (hodinové aktualizace, 1000 žádostí/měsíc - žádné HTTPS, e -mailová podpora ani pokročilé funkce). Jomres stahuje směnné kurzy jednou denně, pokud klíč používáte pouze na několika málo webech, tyto limity pravděpodobně nepřekročíte. Před verzí Jomres 8.3 jsme použili starší, nezdokumentovanou funkci Yahoo, ale zjistili jsme, že používání této funkce je v rozporu s podmínkami Yahoo Podmínky. V důsledku toho musíme předpokládat, že tato funkce může v budoucnu v určitém okamžiku zmizet, tedy změna používání otevřených směnných kurzů. ');
jr_define ('_JOMRES_COMMISSION', 'Commission');
jr_define ('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Pokud nahrajete více obrázků pro jednotlivé volitelné doplňky, bude použit pouze první obrázek.');
jr_define ('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define ('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Tato faktura je nyní splatná. Kliknutím na tlačítko vyberte způsob platby.');
jr_define ('_JOMRES_EXTRAS_TEMPLATE', "Zde je seznam některých skvělých věcí, které si můžete zakoupit při rezervaci v této nemovitosti.");
jr_define ('GATEWAYS_INSTRUCTIONS', 'Na této stránce můžete konfigurovat všechny nainstalované brány. Tyto možnosti vám umožňují přijímat platby za jakékoli provize nebo faktury za předplatné. Nastavení frontendu lze přepsat pouze službou Paypal, všechny ostatní brány bude nutné nakonfigurovat prostřednictvím Konfigurace vlastnosti -> karta Brány, pokud se však v tomto seznamu objeví brána, měla by být schopna zpracovat jak platby vkladu při rezervaci, tak platby na fakturu. ');
jr_define ('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Zobrazit na stránce s podrobnostmi o nemovitosti?');
jr_define ('PROPERTY_DETAILS_PAGE_OPTIONS', 'nastavení stránky Podrobnosti o majetku');
jr_define ('_JOMRES_HLIST_PROPERTIES_WARNING', 'Správa nemovitostí v Jomres se provádí pouze z cpanelu frontendu webu. Na této stránce budete moci vypsat všechny vlastnosti v systému, takže můžete přiřadit sazby provizí a schválit/neschválit je (pokud tyto funkce jsou povoleny). Chcete -li vytvořit novou vlastnost, upravovat stávající, spravovat rezervace nebo jakékoli jiné úkoly související s nemovitostmi/rezervacemi, musíte se přihlásit do frontendu webu a přejít na výchozí stránku Jomres. Zde uvidíte Jomres frontend cpanel. ');
jr_define ('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Ikony funkcí místnosti');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'kategorie vlastností majetku');
jr_define ('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Upravit kategorii vlastností vlastnosti');
jr_define ('_JOMRES_HCATEGORY', 'Kategorie');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Zobrazit vlastnosti nemovitosti rozdělené do kategorií?');
jr_define ('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Nastavením na YES rozdělíte vlastnosti vlastnosti do kategorií. Tato možnost ovlivní pouze vlastnosti vlastností zobrazené na stránce podrobností vlastnosti. Všechny ostatní stránky je zobrazí bez rozdělení do kategorií.');
jr_define ('_JOMRES_ACTION_UNDO_CHECKIN', 'Vrátit kontrolu');
jr_define ('_JOMRES_ACTION_UNDO_CHECKOUT', 'Vrátit pokladnu');
jr_define ('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define ('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID', 'Váš klíč ke stažení a podpoře je platný, pluginy budete moci stahovat prostřednictvím správce pluginů.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Váš klíč ke stažení a podpoře NENÍ platný, nebudete moci stahovat pluginy prostřednictvím správce pluginů.');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE', 'podtyp');
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "Ještě jste nenastavili podtyp své nemovitosti. Zde jej definujete jako vilu s 5 ložnicemi nebo se 4 ložnicemi a pomůže hostům, kteří hledají, upřesnit svá vyhledávání.") ;
jr_define ('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Dejte svému majetku podtyp');
jr_define ('_JOMRES_EMAIL_TEMPLATES_TITLE', 'E -mailové šablony');
jr_define ('_JOMRES_CONTACT_SETTINGS', 'Nastavení kontaktu');
jr_define ('_JOMRES_CONTACT_SETTINGS_DESC', 'Odtud můžete přepsat všechny kontaktní údaje nemovitosti (e -mail, telefon, fax), takže veškerá komunikace s hosty bude zaslána vám a nikoli vlastníkům nemovitosti.');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Přepsat výpisy kontaktních údajů?');
jr_define ('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "Pokud je tato možnost nastavena na Ano, budou e -mailové adresy a telefonní čísla majetku nahrazeny těmi, které jsou nastaveny na této kartě. Tím se veškerá komunikace odešle na vaši nominovanou e -mailovou adresu, což zajistí, že host a majetek vlastník nemůže obejít rezervační systém a poplatky za provizi, které z toho vyplynou. To také znamená, že kdykoli se změní popis nemovitosti, bude vlastnost nastavena na Neschváleno (pokud je povolena funkce schvalování) a popis budete muset zkontrolovat ručně zajistit, aby manažeři nezadali do textových polí podrobnosti o telefonu nebo e -mailu, než jej znovu schválí. ");
jr_define ('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Změny provedené v podrobnostech záznamu vyžadují ověření správce webu. Pokud uložíte nové podrobnosti, váš záznam bude zrušen a čeká se na schválení administrátora webu, než bude znovu viditelný pro návštěvníky webu. Nebudete moci přijímat online rezervace, zatímco váš zápis je nezveřejněn a čeká na schválení. ');
jr_define ('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Zkontrolovat žádost o rezervaci');
jr_define ('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Potvrdit žádost o rezervaci');
jr_define ('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Upravit žádost o rezervaci');
jr_define ('_JOMRES_INVOICE_MARKASPENDING', 'Označit fakturu jako nevyřízenou');
jr_define ('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktura označena jako nevyřízená');
jr_define ('_JOMRES_TRACKING_ENABLE', 'Odeslat anonymní sledovací data?');
jr_define ('_JOMRES_TRACKING_ENABLE_DESC', 'Vyberte Ano, chcete -li odesílat anonymní sledovací data na Jomres.net, což nám pomůže lépe porozumět tomu, jak systém používáte.');
jr_define ('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Před pokusem o rezervaci jménem svých klientů se ujistěte, že byly vyplněny vaše údaje na stránce Upravit můj účet.');
jr_define ('_JOMRES_PARTNERS_GUEST_ADDRESS', "Kontaktní údaje hosta");
jr_define ('_JOMRES_CLEAR_GUEST_DETAILS', ' - nový host -');
jr_define ('_JOMRES_CHARTS', 'Charts');
jr_define ('_JOMRES_CHARTS_SELECT', 'Select chart ...');
jr_define ('_JOMRES_CHART_BOOKINGS_DESC', 'příjem podle roku/měsíce');
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Dobře, začněme. Nejprve musíte pro tuto vlastnost vytvořit nějaké místnosti.");
jr_define ('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Vytvořit několik místností');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Výzkum ukázal, že vlastnosti se spoustou vysoce kvalitních obrázků generují více zobrazení. Nahrajte hlavní obrázek a některé obrázky z prezentace, abyste zvýšili své šance na získání rezervací.');
jr_define ('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Nahrát obrázek');
jr_define ('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Vytvořit nějaké tarify');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG', 'Co si hosté rezervují?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Je tato nemovitost typem hotelového typu, kde pronajímáte pokoje v nemovitosti, nebo nemovitostí typu vila, kde pronajímáte celou nemovitost v rámci jedné rezervace?');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Pokoje v nemovitosti');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Celá nemovitost');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // Toto je dočasné nastavení, které poskytuje zpětnou kompatibilitu pro stávající uživatele, kteří dosud neaktualizovali své typy vlastností. Nebude to volitelné
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Co si hosté rezervují?');
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK', "Budete muset vyplnit údaje o své adrese, aby vás vaši hosté mohli najít, až se přijdou ubytovat.");
jr_define ('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Aktualizovat vaši adresu');
jr_define ('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Jejda, vypadá to, že jste zapomněli vyplnit všechna pole.');
jr_define ('_JOMRES_CONTANT_US', 'Kontaktujte nás');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Vítejte v novém online záznamu pro');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Dobrý den, vítejte ve své nové nemovitosti na');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_2', "Nedávno jste na náš web přidali novou vlastnost a rádi bychom vás přivítali v rodině.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Můžete vidět svůj nový řídicí panel');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', 'zde');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4', "Jakmile si svůj majetek nastavíte, můžete navštívit, jak to vypadá s návštěvníky webu");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', 'vaše titulní stránka.');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_5', "(není publikováno, takže jej návštěvníci stránek zatím nevidí).");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_6', "V horní části stránky uvidíte několik zpráv. Tlačítka vedle těchto zpráv vás zavedou na stránky, které musíte navštívit, abyste mohli nastavit svůj majetek na našem webu. Jakmile budete ' Když jsme provedli každý z těchto úkolů, bude pro návštěvníky našich stránek mnohem snazší najít vaši nemovitost a provádět rezervace online. ");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Pokud máte nějaké dotazy, prosím');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'kontaktujte nás');
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_8' , "a rádi zodpovíme všechny vaše otázky.");
jr_define ('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Všechno nejlepší, náš tým na');
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK', "Zdá se, že nemáte žádné zájezdy k prodeji. Vytvořte profil zájezdu a poté pomocí tlačítka Generovat vytvořte nějaké zájezdy.");
jr_define ('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Pojďme vytvořit nějaké prohlídky!");
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP', 'Zaměnit umístění symbolu měny');
jr_define ('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Tuto možnost použijte k přesunu symbolu měny zezadu na, před cenový údaj nebo naopak.');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define ('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Zadejte své ID facebookové stránky, například "jomres". Ponechte toto pole prázdné, aby se nic nezobrazovalo. Nezadávejte https://www.facebook.com nebo cokoli jiného.');
jr_define ('COMMON_DOWNLOAD', 'Download');
jr_define ('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Dále budete muset přidat nějaké tarify. Toto jsou vaše základní ceny.');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap není povolen!');
jr_define ('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Varování, nemáte povolený Bootstrap v Jomres Site Configuration -> Různé. K poskytování <i> některých </i> funkcí Jomres aktuálně používá své staré šablony založené na uživatelském rozhraní jQuery, na těchto se však již několik let nepracuje. Veškerý současný vývoj a vylepšení šablon Jomres (soubory rozvržení) se provádějí v souborech šablon Bootstrap 3. Abyste z Jomres vytěžili maximum, doporučujeme nainstalovat Bootstrap 3 téma pro Wordpress nebo Joomla. Až to uděláte, můžete povolit šablony Jomres \'Bootstrap v konfiguraci webu.');
jr_define ('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Váš klíč podpory je platný. Všimněte si, že tato licence neumožňuje stahování pluginů.');
jr_define ('_JOMRES_DASHBOARD_DRAG_TRASH', 'Přetažením rezervací do této oblasti je zrušíte');
jr_define ('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define ('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define ('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Ujistěte se, že jste vytvořili stránku WordPress, která obsahuje krátký kód [jomres: xx-XX] (kde xx-XX je kód jazyka vašeho webu, například [jomres: en-GB] nebo [ jomres: en-US]) jinak nebudete mít přístup k Jomres z frontendu pro správu vašich vlastností a rezervací. <br> Jomres je postaven na rámci Bootstrap, takže ho musíte použít na motivu založeném na Bootstrapu. doporučujeme jeden na základě Bootstrap 3. Pokud nemáte přístup k tématu, doporučujeme vám použít téma Jomres Leohtian pro Wordpress, které můžete <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target ="_blank"> stahovat odsud. </a> ');
jr_define ('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Než budete moci vytvořit typ pokoje, musíme vědět, jestli jde o nemovitost typu hotel nebo nemovitost vily.");
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Kliknutím přidáte nové typy pokojů');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Varování, máte jeden nebo více typů nemovitostí bez typů pokojů. Vlastnosti potřebují typy pokojů, aby mohli správci nemovitostí vytvářet tarify.');
jr_define ('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Pomocí tlačítka New vytvořte nové typy místností.');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define ('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Žádné rezervace/Nemovitosti (jednoduchý výpis)');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION', 'Umístění souboru protokolu');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres ve výchozím nastavení zaznamenává aktivitu systému do umístění' .JOMRES_SYSTEMLOG_PATH. ". Protože tento soubor může obsahovat citlivé informace (klíče API, systémové cesty, informace o bráně, informace pro hosty), důrazně doporučujeme tuto cestu změnit. na jednu nad kořenem vašeho webového dokumentu. Pokud nerozumíte, co to znamená, požádejte o radu své webové hostitele, protože znají váš souborový systém. ");
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres zaznamenává podrobné informace o vašem systému, včetně klíčů API, systémových cest, informací o bráně a hostu, z nichž všechny by neměly být viditelné pro zbytek internetu. Vaše cesta systémového protokolu není nastavena, takže systémové protokoly se aktuálně ukládají do adresáře ".JOMRES_SYSTEMLOG_PATH.", což není ideální. Navštivte stránku Konfigurace webu -> Ladění a ve svém souborovém systému nastavte cestu, která je mimo webový kořen. V případě pochybností se obraťte na své webové hostitele protože ti budou moci poradit. ');
jr_define ('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Pokud je váš CMS nainstalován v kořenovém adresáři vašeho webu, pak by bylo vhodné umístění');
jr_define ('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nemáte nastavený klíč pro Mapy Google. Kvůli nedávným změnám v Mapách Google budou všechny nové weby potřebovat klíč API, aby bylo možné používat funkce mapy Google. <a href = 'http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target ='_blank'> podívejte se na naši manuálovou stránku o tom, jak vytvořit klíč API < /a> a uložte klíč v Jomres. ");
jr_define ('JOMRES_GOOGLE_MAP_STYLE', 'barevné schéma mapy Google');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Dobře, začněme přidávat vaši nemovitost na web. Potřebujeme zde shromáždit trochu informací o vašem majetku. To nám umožní nastavit holé kosti vašeho majetku. Jakmile to uděláte, pak vy Budu proveden přidáním místností, cen a obrázků.");
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Typ nemovitosti vám pomůže definovat, jak bude nemovitost rezervována, například u hotelů, které "prodáváte" najednou jen jednu nebo dvě místnosti, zatímco u vil nabízíte celou nemovitost.');
jr_define ('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', 'Všimněte si, že e -mailová adresa nemusí být stejná jako ta, kterou jste použili při registraci účtu. To vám umožní mít různé adresy pro různé vlastnosti.');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'minimální vklad');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Můžete nastavit minimální částku vkladu, která má být účtována. Pokud tak učiníte, nastavení "Požadovaný vklad je cena první noci?" & "Vklad je procentní?" v Konfiguraci nemovitosti nelze konfigurovat , místo toho jsou všechny hodnoty vkladu procentem a musí být alespoň na hodnotě, kterou zde definujete. ');
jr_define ('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Toto číslo nesmí být menší než');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "Pokud chcete odesílat systémové protokolovací zprávy na server syslog, můžete zde nastavit název hostitele nebo IP (např. 192.168.0.2) a port (např. 514). Pokud je web nastaven na ' Development ', pak budou odesílány zprávy DEBUG. Pokud je nastaveno na \"Production\", budou odesílány pouze zprávy INFO a vyšší. Chcete -li zakázat protokolování na vzdálený server, vyprázdněte pole hostitele a portu. ");
jr_define ('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP nemá přístup k funkcím PHP 'openlog' a 'syslog'. Toto je nastavení na straně serveru, pokud chcete, aby Jomres odesílal zprávy na server syslog, obraťte se prosím na své hostitele. a potvrďte, zda má PHP přístup k těmto funkcím. Jakmile je povolíte, budete zde moci konfigurovat nastavení serveru syslog. ");
jr_define ('_JOMRES_SEND_ERROR_EMAIL', 'Odeslat e -mail správci webu, když dojde k chybě?');
jr_define ('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historické problémy, které by měly být prozkoumány, byly zaslány e -mailem majitelům stránek. To může být skvělé pro sledování chodu vašeho systému, protože má strašně moc pohyblivých částí a je těžké sledovat všechny. Pavouci a roboti procházející vaše stránky (i přátelské) mohou bohužel nechtěně vyvolat fatální chyby, což může způsobit, že počet přijatých zpráv bude ohromující. Pokud tomu tak je, nastavte tuto možnost na Ne. Jomres odesílá protokolování zprávy jak do souboru protokolovacích souborů, tak na server syslog (pokud to vaše konkrétní nastavení PHP umožňuje, pokud ne, kontaktujte svého hostitele). Soubory můžete ručně analyzovat, pokud hledáte něco konkrétního (například pokud vyvíjíte bránu a chcete použít volání funkce gateway_log ().), ale to je spousta informací k procházení, takže je lepší použít něco jako analyzátor souborů syslog. Pokud vyvíjíte na Linuxu, pak máte k dispozici spoustu nástrojů, pokud v systému Windows pak jednoduchý nástroj, který můžete použít, je http://maxbelkov.github.io/visualsyslog/ Na této stránce nastavte 'Syslog host' na '127.0.0.1' a ' Port 'tna 514 zobrazíte zprávy přihlášené v tomto nástroji.");

jr_define ('_JOMRES_MANAGE_PROPERTIES', 'Spravovat vlastnosti');
jr_define ('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nemáte sadu klíčů API pro detekci IP. Je to nutné, aby systém mohl automaticky detekovat polohu uživatele a automaticky nastavit jeho měnu a zemi. <a href = 'http://www.jomres.net/manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> viz náš manuál stránka o tom, jak vytvořit klíč API pro zjišťování IP </a> a uložit klíč v Jomres> Konfigurace webu> Převody měn / kódy měn. ");
jr_define ('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nemáte sadu klíčů API pro otevřené směnné kurzy. Je to nutné, aby systém mohl automaticky stahovat a používat směnné kurzy měn. <a href = 'http://www.jomres.net /manual/site-manager-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target ='_blank'> see our manual page on how to vytvořte klíč API pro zjišťování IP </a> a uložte jej do Jomres> Konfigurace webu> Převody měn / kódy měn. ");
jr_define ('_JOMRES_PERMIT_NUMBER_TITLE', 'číslo povolení');
jr_define ('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Některé země vydávají právní předpisy, že musíte u svého majetku zobrazit číslo povolení. Pokud takové číslo máte, zadejte jej sem a bude přidáno do sekce záhlaví vlastnosti.');
jr_define ('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong> plg_content_jomres_asamodule_mambot </strong> Jomres Asamodule Mambot plugin MUSÍ být nainstalován a povolen, aby tyto shortcody fungovaly. To lze nalézt v Jomres Plugin Manager. Pokud byl tento web vytvořen pomocí Rychlé starty, pak je pravděpodobně již nainstalován. ");
jr_define ('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Musíte zajistit, aby byl povolen plugin <strong> 'Jomres Shortcodes' </strong>. To lze nalézt ve Správci pluginu Jomres. Pokud byl tento web vytvořen pomocí některého z rychlých startů, pak je to pravděpodobně už nainstalováno.");
jr_define ('SHORTCODE_TASK', 'Úkol');
jr_define ('SHORTCODE_DESCRIPTION', 'Description');
jr_define ('SHORTCODE_ARGUMENTS', 'Argumenty');
jr_define ('SHORTCODE_EXAMPLE', 'Příklad');
jr_define ('INTEGRITY_CHECK', 'Kontrola integrity systému souborů');
jr_define ('INTEGRITY_CHECK_DESC', 'Tato funkce vám umožňuje zkontrolovat, zda se souborový systém shoduje s tím, který je dodáván v aktuální verzi Jomres. To je užitečné pro zajištění správné aktualizace všech souborů po instalaci/upgradu. Soubory v červeném chybí, soubory v Oranžové existují, ale liší se od těch, které jsou dodávány v aktuální verzi. Zde budou uvedeny pouze soubory, které jsou potenciálními problémy. ');
jr_define ('INTEGRITY_CHECK_FILENAME', 'Kontrola integrity systému souborů');
jr_define ('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define ('INTEGRITY_CHECK_BUILDHASH', 'Verze hash');
jr_define ('INTEGRITY_CHECK_NOPROBLEMS', 'Úžasné! Nebyly nalezeny žádné problémy.');
jr_define ('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define ('_JOMRES_JAVASCRIPT_READMORE', 'Přečíst více');
jr_define ('_JOMRES_JAVASCRIPT_READLESS', 'číst méně');
jr_define ('_JOMRES_TOURIST_TAX_TITLE', 'Turistická daň');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE', 'Turistická daňová sazba');
jr_define ('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Nastavit sazbu turistické daně. Turistická daň se vypočítá až po vygenerování počáteční rezervace, která se přidá na stránku potvrzení rezervace, do pole doplňkových služeb.');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Je procento?');
jr_define ('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Nastavte na Ano, pokud je daň procentem, nebo Ne, pokud se jedná o paušální poplatek.");
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Ovlivňuje celou hodnotu rezervace?');
jr_define ('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Nastavte na Ano, pokud má daň pokrývat celou hodnotu rezervace, je to tedy procento z ubytování plus jakékoli doplňky, nebo Ne, pokud se vypočítává pouze na základě hodnoty celkový počet ubytování. Pokud je výše uvedená možnost \"Je procento\" nastavena na Ne, bude tato možnost ignorována. ");
jr_define ('_JOMRES_TOURIST_TAX_NOTE', 'Uvědomte si prosím, že k této rezervaci bude přidána turistická daň. Daň uvidíte na stránce rezervace rezervace.');
jr_define ('NO_LICENSE_MESSAGE', "Neukládali jste licenční číslo v konfiguraci webu, proto nebudete moci stahovat pluginy. Jakmile budete mít uložený platný licenční klíč, budete moci nainstalovat všechny pluginy, které jsou uvedeny jako Základní pluginy. ");
jr_define ('INVALID_LICENSE_MESSAGE', "Zdá se, že používáte licenční číslo, které je neplatné nebo jehož platnost vypršela. Jakmile si uložíte platný licenční klíč, budete si moci nainstalovat všechny pluginy, které jsou uvedeny jako základní pluginy.");
jr_define ('VALID_LICENSE_MESSAGE', "Gratulujeme, používáte platné licenční číslo a můžete instalovat základní pluginy prostřednictvím správce pluginů Jomres.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Tato stránka vám umožňuje nahrávat obrázky pro vaši nemovitost a věci, které nabízíte. Má jedno hlavní tlačítko a druhé tlačítko, které vám umožňuje vybrat konkrétní zdroje, pro které chcete obrázky nahrávat. Takže hlavní vlastnost obrázek a Prezentace zobrazí pouze jedno tlačítko, ale pokud jste vytvořili nějaké např. Volitelné doplňky nebo Místnosti, zobrazí se vám druhé tlačítko, kam můžete nahrávat obrázky pro tyto konkrétní zdroje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Tato stránka vám umožňuje nahrávat obrázky pro vaši nemovitost a věci, které nabízíte. Má jedno hlavní tlačítko a druhé tlačítko, které vám umožňuje vybrat konkrétní zdroje, pro které chcete obrázky nahrávat. Takže hlavní vlastnost obrázek a Prezentace zobrazí pouze jedno tlačítko, ale pokud jste vytvořili nějaké volitelné doplňky, zobrazí se vám druhé tlačítko, kam můžete nahrávat obrázky pro tyto konkrétní zdroje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Nejprve vyberte obrázky, které chcete nahrát, kliknutím na Přidat obrázek nebo pomocí přetažení. Zobrazí se ve sloupci na pravé straně. </li>
  <li> Nad touto oblastí vyberte pomocí tlačítka \"Vybrat zdroj \" zdroj, pro který chcete nahrávat obrázky. Může vám být nabídnuta možnost vybrat si konkrétní zdroj pod ním. </li>
  <li> Jakmile vyberete zdroj, můžete jej kliknutím na tlačítko Odeslat obrázek pod obrázkem spojit s tímto zdrojem. Jakmile bude obrázek nahrán, zmizí ze sloupce na pravé straně webu a zobrazí se vlevo. </li>
  <li> Pomocí tlačítka Koš vedle stávajících obrázků odeberete obrázky, které již nechcete zobrazovat. </li>
  <li> Pořadí souborů zobrazovaných v prezentaci můžete změnit tak, že je před nahráním přejmenujete, protože se na stránkách zobrazují v abecedním pořadí. </li>
</ol>
 ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Vedle tlačítka Prostředek se může zobrazit tlačítko Náhled. Pokud na něj kliknete, zobrazí se vyskakovací okno, které vám ukáže, jak budou aktuálně nahrané obrázky vypadat na stránce. To vám pomůže získat představu o tom, jak budou obrázky vypadat vašim zákazníkům. ");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Počet obrázků, které lze nahrát, není nijak omezen. Velikost obrázků se při odeslání automaticky změní. Můžete nahrávat pouze soubory JPG a PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "V ideálním případě by všechny obrázky, které nahrajete, byly alespoň");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixely široké, jinak mohou po nahrání vypadat fuzzy.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Všechny obrázky, které nahrajete, nesmí být větší než");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "ve velikosti.");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Vyberte zdroj, pro který chcete nahrát obrázky");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifický zdroj");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Obrázky již nahrané pro tento zdroj");
jr_define ('_JOMRES_MARKDOWN_TITLE', 'formátování textu');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Zde můžete zadat text pomocí jednoduchého formátování Markdown. Nepotřebujete znát žádný HTML, stačí použít tlačítka, aby informace vypadaly, jak chcete, nebo formátovat text podle těchto příkladů.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'důraz');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'tučné');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kurzíva');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'přeškrtnout');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'velká hlavička');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Střední záhlaví");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Drobná hlavička');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Seznamy");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Obecná položka seznamu');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'očíslovaná položka seznamu');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Odkazy');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Text k zobrazení');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citáty');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Toto je citát.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Může zahrnovat více řádků!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Obrázky');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabulky');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Sloupec');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Zobrazit vlastnosti jako slideshow v seznamu vlastností?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Je -li nastaveno na ano, zobrazí se prezentace hlavních obrázků vlastností. Pokud je nastaveno na ne, zobrazí se první hlavní obrázek vlastnosti.');
jr_define ('EDIT_CMS_USER', 'Upravit uživatele CMS');
jr_define ('BOOKING_MADE_BY', 'rezervace provedená');
jr_define ('_JOMRES_ROUTER_FEATURES', 'Vybavení');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Typy pokojů');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL externího rezervačního formuláře');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Zde můžete nastavit externí adresu URL, pokud chcete k rezervaci použít web třetí strany. Všechna tlačítka pro rezervaci jomres budou ukazovat na tuto adresu URL. Pokud chcete použít rezervační formulář Jomres, ponechte toto pole prázdné . ');
jr_define ('_JOMRES_ROOM_TAGLINE', 'slogan (krátký popis místnosti/podtitul)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Popis místnosti');
jr_define ('_JOMRES_GUEST_BLACKLISTED', 'host na černé listině');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Pokud je tento host na černé listině, pak již nebudou moci provádět rezervace v této vlastnosti.'); jr_define ('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Uložit soubory relací jomres na disk nebo do databáze. Doporučeno: databáze');
jr_define ('_JOMRES_MAP_HEIGHT', "Výška mapy (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Úroveň přiblížení mapy");
jr_define ('_JOMRES_MAP_MAPTYPE', "Typ mapy");
jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Správce přepsání šablony");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Balíčky šablon jsou doplňky, které mohou poskytovat přepsání šablon pro různé základní soubory šablon Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Tato stránka uvádí všechny soubory šablon, které lze přepsat soubory šablon balíčku šablon. Chcete -li přepsat určitý soubor šablony, klikněte na tlačítko Upravit pro daný soubor, na další stránce budete můžete si vybrat, kterou verzí chcete přepsat. Tyto přepisy mají přednost před Jomres Core i před jakýmkoli přepisem motivu/šablony Wordpressu nebo Joomly. Přepsání můžete deaktivovat jeho odstraněním na stránce Přepsání šablony šablony. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "název šablony");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuální cesta");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Není přepsáno");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Můžete si vybrat, který soubor šablony přepíše soubory základní šablony změnou rozevíracího seznamu");

jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Procentní rezervace místností");
jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Procentní rezervace místností");
jr_define ('_JOMRES_SELECT_WIDGETS', "Vyberte widgety");
jr_define ('_JOMRES_INTERVAL', "Interval");
jr_define ('_JOMRES_TIMELINE', "Časová osa");
jr_define ('_JOMRES_CPANEL_GRID', "Rozložení domovského panelu ovládacího panelu");
jr_define ('_JOMRES_CPANEL_GRID_DESC', "Vyberte rozložení mřížky domovské stránky ovládacího panelu správy vlastností frontendu.");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Google Map Markers");
jr_define ('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "obrázky měst");
jr_define ('_JOMRES_PTYPE_CHANGE_WARNING', "Změna typu vlastnosti smaže všechny místnosti, tarify, nastavení majetku a resetuje dostupnost.");
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Vezměte prosím na vědomí, že po aktualizaci musíte aktualizovat všechny Jomres Pluginy, které jsou již nainstalovány, prostřednictvím správce pluginu Jomres. Pokud máte nainstalované základní pluginy, ale nemáte platnou licenci Jomres, pak <em> děláme nedoporučuji </em> aktualizovat Jomres, protože starší pluginy často nemusí fungovat s novějšími verzemi Jomres. ');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Vezměte prosím na vědomí, že po aktualizaci musíte aktualizovat všechny již nainstalované doplňky Jomres prostřednictvím správce pluginu Jomres.');
jr_define ('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Pokud chcete aktualizovat Jomres a jeho pluginy, budete potřebovat licenci k obnovení. Navštivte <a href='https://www.jomres.net/pricing' target='_blank'> naše web </a> pro více informací. Ve většině případů jsou tyto licence 50% z ceny plné licence. Než se pokusíte zakoupit obnovení, ujistěte se, že jste se do našeho obchodu přihlásili. ");
jr_define ('_JOMRES_PAYMENT_METHOD_USED', "Způsob platby:");
jr_define ('_JOMRES_PRICES', "Připojte se");
jr_define ('_OAUTH_TITLE', "Správa klíčů aplikace");
jr_define ('_OAUTH_APPS', "Podrobnosti o klientovi REST API");
jr_define ('_OAUTH_IDENTIFIER', "Identifier");
jr_define ('_OAUTH_APIKEY', "ID klienta");
jr_define ('_OAUTH_SECRET', "Secret");
jr_define ('_OAUTH_CREATED', "Vytvořená/aktualizovaná aplikace");
jr_define ('_OAUTH_CLIENT_ID_INFO', "ID klienta a tajný klíč jsou vytvořeny pro vás. Identifikátor slouží k tomu, abyste mohli snadno identifikovat tento pár klíčů.");
jr_define ('_OAUTH_SCOPE_TITLE', "Oprávnění (co může klient dělat)");
jr_define ('_OAUTH_SCOPE_CATEGORY_USER', "Uživatelská oprávnění");
jr_define ('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Vlastnická oprávnění");
jr_define ('API_DOCUMENTATION_TITLE', "App REST API dokumentace");
jr_define ('_OAUTH_CONFIG', "Konfigurace jádra API");
jr_define ('_OAUTH_CONFIG_SHOW', "Zobrazit možnosti konfigurace klienta API v hlavní nabídce Jomres?");
jr_define ('_OAUTH_CONFIG_SHOW_DESC', "Můžete se rozhodnout nezobrazovat možnosti konfigurace klienta API v sekci 'Můj účet' v hlavní nabídce Jomres. Místo toho se můžete rozhodnout, že je chcete zobrazit na jiných stránkách pomocí Jomres Shortcodes.");
jr_define ('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Zobrazuje stránku základní dokumentace API. API Core umožňuje uživatelům vytvářet klienty API, které se poté používají k přístupu k funkcím API, které jsou popsány v dokumentaci API Core.");
jr_define ('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Zobrazuje stránku správy jádra API, kde mohou správci vlastností konfigurovat klienty API. Všimněte si, že toto je funkce pouze pro registrované uživatele, takže uživatelé musí být zaregistrováni a přihlášeni, než uvidí tuto stránku.");
jr_define ('API_METHODS_TITLE', "Metody API");
jr_define ('API_METHODS_DESCRIPTION', "Tento seznam metod je založen na vašich nainstalovaných doplňcích funkcí API a je generován automaticky. Pokud si nainstalujete nebo odstraníte plugin funkce API, musíte tuto stránku navštívit, abyste mohli znovu sestavit tento seznam metod API dostupných na vašem webu.");
jr_define ('_OAUTH_REDIRECT_URI', "Redirect URI");
jr_define ('_OAUTH_IDENTIFIER_PLACEHOLDER', "Dejte mi jméno, které vám dává smysl, například Můj telefon");
jr_define ('_OAUTH_GRANT_TYPES', "Tento systém podporuje dva typy grantů, Client Credentials a Implicit. Pokud používáte tok <em> client_credentials </em>, budete potřebovat ID klienta i klientské tajemství. Pokud používáte <em > implicitně </em> pak by vaše aplikace odeslala pouze ID klienta a přihlásili byste se do systému, abyste tuto aplikaci výslovně autorizovali. ");
jr_define ('_OAUTH_IMPLICIT_NOTES', "Chcete -li použít tok typu <em> implicitní </em> udělení, budete muset tuto adresu URL použít k autorizaci vašich aplikací. Když se tato adresa URL zavolá a autorizujete aplikaci, kterou systém vydá token, který pak vaše aplikace použije k volání API tohoto systému ");
jr_define ('_OAUTH_AUTHORISATION_URL', "Autorizační URL");
jr_define ('WEBHOOKS_CORE', 'Webhooks');
jr_define ('_WEBHOOKS_CONFIG_SHOW', "Zobrazit možnosti konfigurace Webhooku v hlavní nabídce Jomres?");
jr_define ('_WEBHOOKS_CONFIG_SHOW_DESC', "Můžete se rozhodnout nezobrazovat možnosti konfigurace Webhooku v sekci 'Můj účet' v hlavní nabídce Jomres. Místo toho se můžete rozhodnout, že je chcete zobrazit na jiných stránkách pomocí Jomres Shortcodes.");
jr_define ('WEBHOOKS_DOCUMENTATION_TITLE', "dokumentace Webhooks");
jr_define ('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Zobrazuje stránku základní dokumentace API. API Core umožňuje uživatelům vytvářet klienty API, kteří se poté používají k přístupu k funkcím API, které jsou popsány v dokumentaci API Core.");
jr_define ('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Zobrazuje stránku správy jádra API, kde mohou správci vlastností konfigurovat klienty API. Upozorňujeme, že toto je funkce pouze pro registrované uživatele, takže uživatelé musí být zaregistrováni a přihlášeni, než uvidí tuto stránku.");
jr_define ('WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration');
jr_define ('WEBHOOKS_INTEGRATION_ID', 'Integration ID');
jr_define ('WEBHOOKS_INTEGRATION_URL', 'URL or Name');
jr_define ('WEBHOOKS_ENABLED', 'Enabled');

jr_define ('WEBHOOKS_AUTH_METHOD_SELECT', 'metoda autentizace/integrace');

jr_define ('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Jakékoli webhooky, které vytvoříte, nebudou spuštěny, protože nejste přiřazeni k žádným vlastnostem. Správci super vlastností nejsou obvykle přiřazováni jednotlivým vlastnostem, takže pro vytváření webhooku budete možná potřebovat nového uživatele.');
jr_define ('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Jakékoli webhooky, které vytvoříte, budou spuštěny s následujícími vlastnostmi:');


jr_define ('PORTAL_REVIEWS_LIMIT', 'počet recenzí');
jr_define ('PORTAL_REVIEWS_LIMIT_DESC', 'Toto nastavení použijte k omezení počtu recenzí zobrazených na stránce podrobností o nemovitosti.');
jr_define ('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Zobrazit všechny recenze');

jr_define ('VIDEO_TUTORIALS', 'Video Tutorials');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimální hodnota vkladu');
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Pokud je vypočítaný vklad menší než tento údaj, pak místo něj nastavte vklad. Tento údaj může být sám přehnaný, pokud nevyhovuje nastavení minimálního vkladu na webu. Ponechte jej nastavený na 0 až nepoužívat nastavení.");

jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Chcete -li zvýšit rychlost svého webu, doporučujeme importovat detaily existujícího webu a obrázky vlastností do databáze.');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importovat stávající obrázky do databáze');

jr_define ('_JOMRES_S3_ACTIVE_DESC', 'Experimentální funkce. Je -li povolena, obrázky nahrané pomocí funkce mediálního centra budou také zkopírovány do vašeho úložiště Amazon S3 a doručeny z adresy URL vašeho úložiště Amazon S3. Když toto povolíte poprvé, budete také vyzváni k importu existujících obrázků do vašeho úložiště S3. ');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN', 'doména CloudFront');
jr_define ('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Nahradit výchozí doménu Amazon S3 vaší doménou CloudFront');
jr_define ('_JOMRES_S3_SSLTLS_DESC', 'Doporučeno povolit. Pouze pro Windows a Mac OSX, pokud libcurl nebyl vytvořen s podporou Schannel nebo Secure Transport (nativní knihovny SSL zahrnuté ve Windows a Mac OS X), měli byste toto nastavit na Ne.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'povolili jste integraci Amazon S3, takže budete muset zkopírovat všechny existující obrázky do svého úložiště S3. Obrázky se nyní návštěvníkům vašich stránek zobrazují z vaší adresy URL Amazon S3, takže budete potřebovat zkopírovat je nejprve do svého úložiště S3, jinak nebudou viditelné pro návštěvníky vašich stránek. ');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Jakmile kliknete na toto tlačítko, nepřerušujte proces a počkejte na úspěch nebo chybovou zprávu. V závislosti na rychlosti serveru může dokončení chvíli trvat.');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Kopírovat stávající obrázky do kbelíku Amazon S3');


jr_define ('JOMRES_INCOMPLETE', 'Neúplné');
jr_define ('JOMRES_WATING_APPROVAL', 'čeká na schválení');
jr_define ('JOMRES_GOOGLE_MAPS_PDETAILS', 'mapa podrobností nemovitosti');

jr_define ('HAS_STARS_TITLE', 'Umožňuje klasifikaci hvězd?');
jr_define ('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Vynutit opětovné importování podrobností obrázku do databáze');
jr_define ('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define ('_JOMRES_UNINSTALL_TABLES', 'Odstranit všechna data Jomres při odinstalaci?');
jr_define ('_JOMRES_UNINSTALL_TABLES_DESC', 'Pokud je nastaveno na ano, Jomres při odinstalaci smaže všechny své databázové tabulky. Tím se odstraní všechna data Jomres z db a nelze je vrátit zpět.');

jr_define ('TRANSACTION_IDS', 'Transaction id');
jr_define ('PAYMENT_METHOD', 'Payment method');
jr_define ('POA_DISPLAY_PRICE', 'POA Price');
jr_define ('POA_DISPLAY_PRICE_DESC', 'Když jsou vlastnosti uvedeny v seznamu, systém se pokusí najít platnou cenu z nakonfigurovaných tarifů na základě buď dnešního data, nebo pokud byla při hledání použita data, pak na základě těchto dat . Pokud to neumí, zobrazí POA (Cena v aplikaci), což znamená, že by vás měl host kontaktovat, aby získal cenu. Pokud chcete, můžete zde nakonfigurovat cenu, která se zobrazí místo textu POA. Tento obrázek pokud by nebylo možné určit jinou cenu, zobrazovala by se "záložní" cena. ');

jr_define ('PLUGINMANAGER_INSTALL', 'Před instalací pluginů Jomres musíte nainstalovat správce pluginů, chcete to udělat hned?');
jr_define ('PLUGINMANAGER_REINSTALL', 'Před aktualizací všech nainstalovaných pluginů je třeba aktualizovat správce pluginů, chcete to udělat hned?');
jr_define ('PLUGINMANAGER_INSTALL_BUTTON', "Pojďme na to!");

jr_define ('INCLUDEINFILTERS', 'Zahrnout do filtrů?');
jr_define ('INCLUDEINFILTERS_DESC', 'Filtry vlastností vlastností v Ajax Composite Search mohou být velmi dlouhé, takže můžete nastavit tuto možnost na Ne, aby se tato funkce nezobrazovala v seznamu vlastností vlastnosti.');

jr_define ('REVIEW_REMINDER_PT1', "Máte");
jr_define ('REVIEW_REMINDER_PT2', "rezervace, na které jste dosud nezanechali recenzi. Zanechte prosím recenzi.");
jr_define ('BOOKINGS_AWAITING_REVIEWS', "Rezervace čekající na recenze");
jr_define ('REVIEW_NAG', "Nag hostů za recenze?");
jr_define ('REVIEW_NAG_DESC', "Jakmile bude host rezervován z rezervace, systém mu připomene, aby zveřejnil recenzi své rezervace. Chcete -li toto připomenutí deaktivovat, nastavte tuto možnost na Ne.");

jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Odesílat kopie rezervačních e -mailů správcům stránek?");
jr_define ('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Je -li povoleno, budou kopie e -mailů s rezervacemi zaslané správcům nemovitostí odeslány také všem správcům stránek.");

jr_define ('HIDDEN_ADDRESS_SETTING', "Skrýt adresu?");
jr_define ('HIDDEN_ADDRESS_SETTING_DESC', "Pokud nastavíte tuto možnost na Ano, adresu ulice budou moci zobrazit pouze hosté, kteří již u vás provedli rezervaci. Toto nastavení můžete použít ke skrytí přesné polohy nemovitosti. pokud je například běžně ponechán bez dozoru. ");
jr_define ('HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimalizace obrázků při nahrávání?');
jr_define ('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Když je povoleno, obrázky budou optimalizovány pro web (velikost souboru může být až o 75% menší). V závislosti na typu nahraného obrázku musí mít váš server jednu nebo více těchto knihoven nainstalovaných hostitelem poskytovatel: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle ');
jr_define ('DATABASE_INTEGRITY_CHECK', 'Kontrola integrity databáze');
jr_define ('OBSOLETE_FILES_CHECK', 'Kontrola zastaralých souborů');
jr_define ('DATATABLES_COLVIS', 'Viditelnost sloupců');

jr_define ('API_TOKEN_LIFETIME', 'životnost tokenu API');
jr_define ('API_TOKEN_LIFETIME_DESC', 'Jak dlouho zůstane token API platný, v sekundách. 86400 = 1 den, 31536000 = 1 rok');

jr_define ('ENCRYPTION_TITLE', 'Encryption');
jr_define ('ENCRYPTION_FILE_LOCATION', 'Encryption file location');
jr_define ('ENCRYPTION_FILE_LOCATION_DESC', '** Nikdy nesmazat šifrovací soubor ** <br/> Uživatelská data jsou uložena zašifrovaná v tabulkách, aby byla zajištěna bezpečná ochrana klidových dat v souladu s doporučeními GDPR. Standardně šifrovací klíč je uložen v souboru "encryption_key.class.php" v kořenovém adresáři vaší instalace Jomres (obvykle /public_html /jomres). Zde můžete změnit, kde je soubor uložen. Pokud změníte umístění, musíte soubor PŘESUNUT, nečekejte, až Jomres vytvoří novou verzi, jinak nebudete moci dekódovat detaily svých hostů. ');

jr_define ('_JOMRES_COM_YOURBUSINESS_DESC', 'Informace, které zde uložíte, budou použity na fakturách generovaných pro tuto vlastnost');

jr_define ('_JOMRES_GDPR_POLICIES', 'zásady GDPR');
jr_define ('_JOMRES_GDPR_POLICIES_DESC', 'Zde můžete nakonfigurovat, jak dlouho po vytvoření rezervace nebo faktury bude ze systému odstraněna, aby bylo zajištěno, že jste v souladu s GDPR.');

jr_define ('_JOMRES_GDPR_BOOKING_RETENTION', 'retenční období rezervace (ve dnech)');
jr_define ('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Kolik dní po datu odjezdu rezervace by měla být rezervace odstraněna? Když je odstraněna, odeberou se rezervace i faktura. Obvyklá doba uchování může být 365 dní.');

jr_define ('_JOMRES_GDPR_INVOICE_RETENTION', 'období uchování faktury (bez rezervace)');
jr_define ('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Jiné faktury, například faktury za provize a předplatné, nejsou svázány s rezervacemi. V důsledku toho nebudou odstraněny při odstraňování rezervačních faktur a smluv. V závislosti na vaší zemi a vašich vlastních obchodních postupech, budete muset nakonfigurovat jinou dobu uchování. Typická doba uchování může být 3653 dní, což je 10 let. ');


jr_define ('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Vaše data');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Některé funkce tohoto webu potřebují ukládat informace o vaší návštěvě. Slouží pouze k poskytování služeb vám, nejsou nikdy sdíleny s nikým jiným a jsou odstraněny, když již nejsou potřeba.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DÁVÁTE NÁM POVOLENÍ K UCHOVÁVÁNÍ TĚCHTO INFORMACÍ ??');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Podrobně');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Musíte souhlasit s ukládáním těchto údajů, abyste mohli provádět rezervace na tomto webu. Bez ohledu na to, zda souhlasíte s ukládáním vašich údajů, uložíme do vašeho počítače soubor cookie, který nám sdělí nás, zda jste se přihlásili či nikoli. Pomáhá nám to zajistit, že se vás nebudeme neustále ptát, zda se chcete přihlásit nebo odhlásit, a neobsahuje žádné osobní údaje (PII). Pokud změníte názor, můžete kdykoli navštívit stránku "Oprávnění aplikace" a přihlásit se nebo odhlásit. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informace jsou uloženy po různá časová období v závislosti na povaze vaší návštěvy. Pokud se tedy jen rozhlížíte, uložíme informace o přibližné geografické poloze (úrovni země). Pokud provádíte vyhledávání, pak aby byly vyhledávací formuláře uživatelsky přívětivější, uložíme poslední věci, na kterých jste hledali. Tyto informace se obvykle ukládají maximálně na 24 hodin a slouží pouze k zpříjemnění vaší návštěvy. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Když si u nás provedete rezervaci, bude nutně uloženo více informací.');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Techniky rezervačního formuláře jsou zachyceny a uchovávány po dobu maximálně 60 dnů. Je to nutné, aby rezervace na vyžádání mohly být po schválení rezervace přeměněny na úplné rezervace a pro analýzu našimi týmy v případě problému s rezervací. Pokud jste při rezervaci nebyli přihlášeni, zašleme vám e -mail s uživatelským jménem a heslem, abyste si mohli prohlédnout historii rezervací a uplatnit své právo být zapomenut (RTBF), pokud přát si to. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Údaje zadané do rezervačního formuláře, například jméno, e -mailová adresa, skutečná adresa, jsou uloženy maximálně 365 dní po datu odjezdu rezervace. Tyto informace jsou uloženy v šifrované podobě v naší databázi aby si jej mohli prohlédnout pouze autorizovaní lidé. Pokud provedete rezervaci, musíme podle zákona uložit vaše PII, dokud je rezervace platná. Jakmile je rezervace dokončena, buď proto, že byla zrušena, nebo jste byli odhlášeni, budete mít možnost uplatnit svůj RTBF přihlášením a návštěvou stránky "Vaše data". Fakturační údaje pro dokončené rezervace budou i nadále bezpečně uloženy v naší databázi, abychom zajistili, že budeme dodržovat příslušné daňové zákony, ale budete moci odstranit všechny ostatní PII po dokončení rezervace. ');
jr_define ('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Když souhlasíte s uložením vašich údajů, jak je popsáno výše, jsme ze zákona povinni tento souhlas uložit do naší databáze. Tyto informace budou zahrnovat vaše IP číslo a obsah formuláře pro přihlášení. toto oznámení o souhlasu ponechat neomezeně (toto je zákonný požadavek). ');

jr_define ('_JOMRES_GDPR_CONSENT_NOT_SET', 'Ještě jste nám neřekli, zda o vás můžeme shromažďovat osobní údaje');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Souhlasili jste s tím, abychom shromažďovali potřebné osobní identifikační údaje pro přijímání rezervací');
jr_define ('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Řekli jste nám, abychom neshromažďovali osobní údaje');

jr_define ('_JOMRES_GDPR_NOCONSENT_INTRO', 'Nedali jste nám svolení ke shromažďování vašich soukromých údajů');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Abychom na tomto webu mohli provádět určité akce, musíme o vás shromažďovat osobní údaje, ale nedali jste nám k tomu svolení.');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Změnit oprávnění');
jr_define ('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Pokračovat v prohlížení vlastností');

jr_define ('_JOMRES_GDPR_APP_MENU_ITEM', 'oprávnění aplikace');

jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'data hosta');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Toto jsou podrobnosti, které pro vás ukládají různé nemovitosti. Různé hotely mohou uchovávat různé záznamy v závislosti na tom, co jste zadali při rezervaci.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'V žádném hotelu v tomto systému nemáte uložena žádná data');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profilová data');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'Toto je hlavní soubor dat, který pro vás uchováváme, odlišný od těch, které jste sdíleli s různými vlastnostmi.');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'neuložili jste žádné profilové informace');
jr_define ('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Zde jsou osobně identifikovatelné informace, které pro vás na tomto webu ukládáme. Jsou vytvořeny ve formátu JSON (JavaScript Object Notation), což je formát pro lehkou výměnu dat. Pro lidi je snadné číst a zapisovat a pro stroje je snadno analyzovat a generovat. ');

jr_define ('_JOMRES_GDPR_REDACTION_STRING', 'anonymizováno');

jr_define ('_JOMRES_GDPR_MY_DATA', 'Vaše data');
jr_define ('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Přijetím této smlouvy o podmínkách používání (dále jen "smlouva") souhlasíte, že:

<ul>
<li>
Jste oprávněni rezervovat hotely prostřednictvím této webové stránky;
</li>
<li>
Je vám alespoň 18 let;
</li>
<li>
Máte zákonné oprávnění k vytvoření závazné právní povinnosti;
</li>
<li>
Stránky budete používat v souladu s touto smlouvou;
</li>
<li>
Stránky budete používat pouze k oprávněným rezervacím pro sebe nebo pro jinou osobu, pro kterou jste ze zákona oprávněni jednat;
</li>
<li>
Tyto další osoby budete informovat o této dohodě, která se vztahuje na výhrady, které jsem jejich jménem učinil, včetně všech pravidel a omezení, která se na ně vztahují;
</li>
<li>
Všechny informace, které na Web dodáte sami, jsou pravdivé, přesné, aktuální a úplné; a
</li>
<li>
Budete chránit informace o svém účtu a budete dohlížet a budete zcela odpovědní za jakékoli použití vašeho účtu vámi a kýmkoli jiným než vámi.
</li>
</ul>
');
jr_define ('_JOMRES_GDPR_MY_DATA_LEAD', 'Bezpečnost a transparentnost jsou pro nás důležité.');
jr_define ('_JOMRES_GDPR_MY_DATA_INTRO', 'Bereme naši zodpovědnost za ukládání vašich dat velmi vážně. Všechny informace umožňující identifikaci osob (PII) jsou uloženy zašifrované v naší databázi pomocí standardních algoritmů, aby bylo zajištěno, že tyto informace budou moci zobrazit pouze autorizovaní uživatelé.');

jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Můžete si stáhnout všechny PII, které pro vás ukládáme.');
jr_define ('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Stáhnout nyní');

jr_define ('_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)');
jr_define ('_JOMRES_GDPR_MY_RTBF_INTRO', 'Věříme, že byste měli být schopni <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank"> smazat </a> své < a href = "https://gdpr-info.eu/art-4-gdpr/" target = "_blank"> Osobně identifikovatelné informace </a>, pokud chcete a pokud je to proveditelné. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Nejste na tomto webu registrováni. Vaše obecná poloha (země) a číslo IP budou uloženy maximálně na 24 hodin a poté odstraněny.');
jr_define ('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Nejste na tomto webu registrováni a odhlásili jste se ze shromažďování údajů. Vaše PII jsme neuložili.');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Jste registrováni na webu a nemáte žádné nevyřízené ani aktivní rezervace. Většinu informací, které pro vás aktuálně uchováváme, můžeme anonymizovat. Chcete to udělat?');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Poznámka: Tím se váš účet nevymaže, pouze se anonymizuje naše záznamy, takže váš účet s vámi jako osobou nelze spojit. Podle zákona musíme vaše PII ukládat pro účely fakturace, nicméně budeme odstranit všechny záznamy hostů. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'jste registrováni na webu, ale máte nevyřízené rezervace a v tuto chvíli nemůžeme vaše data anonymizovat. Tyto údaje budou uchovávány maximálně jeden rok po dokončení rezervace, poté bude budou odstraněny, pokud se nerozhodnete je do té doby odstranit. ');
jr_define ('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Protože jste na našem webu správcem nemovitosti, nemůžeme vám nabídnout možnost automatického vymazání vašich dat. Místo toho nás prosím kontaktujte přímo, abychom mohli vaše vlastnosti přiřadit jinému správci. Jakmile to uděláme a odstraníme váš status správce nemovitostí, budete moci svá data automaticky odstranit. ');

jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Zapomeň na mě!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Toto nelze vrátit zpět!');
jr_define ('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Vaše data byla smazána!');

jr_define ('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Litujeme, nemůžete provést rezervaci, protože vaše e -mailová adresa je neplatná');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Tato stránka vám dává možnost anonymizovat všechny hosty, kteří mají své informace uložené v systému. To vám umožní být v souladu s GDPR, ale na této stránce nemůžete upravovat žádné další informace. Chcete -li to provést musíte se přihlásit do frontendu jako správce nemovitosti. Předpokládá se, že vás kontaktoval historický host s žádostí, abyste mu umožnili uplatnit právo být zapomenut. Pokud se nemohou přihlásit do frontendu webu (možná uživatel pro ně nebyl vytvořen při rezervaci), poté můžete tuto oblast použít k jejich anonymizaci, jakmile potvrdíte jejich identitu. ');

jr_define ('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'anonymizovat hosta');
jr_define ('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'data hosta anonymizována');
jr_define ('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Nelze anonymizovat');

jr_define ('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Potřebujeme vaše svolení k uložení vašich údajů, než budete moci provést rezervaci. KLIKNĚTE ZDE a dejte nám svolení.');

jr_define ('_JOMRES_GDPR_CONFIG_ENABLE', 'Povolit funkce kompatibilní s GDPR?');
jr_define ('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NEDOPORUČUJEME, ABYSTE ZAKÁZALI FUNKČNOST FUNKCÍ GDPR. Jomres má vestavěné funkce, které vám pomohou zajistit, že sekce Jomres na vašem webu je v souladu s GDPR. Pokud tuto funkci deaktivujete (a neměli byste, pokud jste v EU nebo obchodujete s občany EU), pak Jomres automaticky předpokládá, že každý návštěvník webu dal své povolení k povolení svých osobních údajů. Povolení aplikace a stránky Moje údaje nebudou zobrazeno a uživatelé nebudou vyzváni k udělení svolení ke shromažďování údajů. ');


jr_define ('EMPTY_TEMP_DIR', 'Empty temp dir');
jr_define ('EMPTY_TEMP_DIR_DONE', 'Dočasné soubory smazány');

jr_define ('MACHINE_TRANSLATION', 'Machine translations');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG', 'Zdrojový jazyk');
jr_define ('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Je možné připojit funkci strojového překladu. To vám umožní zadat řetězce v jednom jazyce a překlady lze stahovat ze vzdálených služeb. Uvědomte si, že ne všechny překladatelské služby podporují všechny jazyky. Viz tyto služby pro více detailů.' );

jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Typ místnosti');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'nový typ místnosti');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Na této stránce můžete vytvářet a upravovat typy pokojů. Tyto typy místností budou specifické pouze pro tuto vlastnost. Při nastavování vaší nemovitosti nejprve potřebujete některé typy pokojů. Můžete použít buď tyto typy pokojů vytvořené správce, nebo můžete přidat svůj vlastní. Jakmile máte jeden nebo více typů místností, můžete vytvořit místnosti pro tento typ místností. Poté, co budete mít pokoje, můžete pro tyto místnosti vytvořit tarify (ceny), protože tarify jsou propojeny s typy místností . ');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Manažeři mohou vytvářet typy pokojů?');
jr_define ('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Tuto možnost použijte ke konfiguraci, zda si mohou manažeři ve frontendu vytvářet vlastní typy pokojů. Důrazně doporučujeme ponechat tuto možnost nastavenou na Ne, když poprvé začnete používat Jomres, zvláště pokud vytváříte portál, protože byste měli vytvořit všechny typy místností v administrátorské oblasti. Typy místností vytvořené manažery se budou zobrazovat ve vyhledávacích formulářích, ale protože tyto typy místností jsou specifické pro jednotlivé vlastnosti, ve výsledcích vyhledávání se zobrazí pouze jedna vlastnost, pokud je vybrán tento typ místnosti během hledání. Chcete -li, aby pouze typy správců nemovitostí mohli vytvářet typy místností, ponechte tuto možnost nastavenou na Ano a pomocí pluginu Řízení přístupu povolte zobrazení možnosti nabídky "Nastavení> Typy místností" pouze správcům. Pouze nemovitosti, které pronajímají Tuto možnost mohou využít místnosti v objektu a používat režimy úprav tarifů Pokročilé nebo Micromanage. Vlastnosti typu vila/apartmán ji nebudou moci použít. ');
jr_define ('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'typ místnosti/vlastnosti aktualizován');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Zobrazit typy pokojů v možnostech hledání');
jr_define ('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Pokud se rozhodnete povolit správcům nemovitostí vytvářet vlastní typy pokojů, můžete si vybrat, zda chcete tyto vytvořené typy pokojů zobrazovat v možnostech hledání, kde jste se rozhodli zobrazovat typy pokojů.');
jr_define ('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Neměli byste znovu použít stejnou e-mailovou adresu pro každou rezervaci. <br/> Pokud máte pro svou firmu jedinečnou doménu (např. nikoli e-mailovou adresu pro e-mail), použijte telefonní číslo hosta jako jejich e -mailová adresa. E -mailová adresa by pak vypadala jako 123456@mydomain.com <br/> Tím zajistíte, že při vytvoření rezervace bude vytvořen nový host. ");

jr_define ('_JOMRES_LOGIN_USERNAME', 'e -mailová adresa');
jr_define ('_JOMRES_LOGIN_PASSWORD', 'heslo');
jr_define ('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Jsme potěšeni, že si u nás chcete znovu rezervovat. Abyste mohli spravovat všechny své rezervace společně, je nutné se přihlásit, aby bylo možné rezervaci přidat na váš účet. To také zajišťuje, že jste oprávněni používat uvedenou e-mailovou adresu. ");

jr_define ('_JOMRES_LOGIN_RESET_MESSAGE', 'Pokud neznáte své heslo, můžeme vám zaslat e -mail pro reset hesla. Při resetování hesla postupujte podle pokynů v tomto e -mailu.');
jr_define ('_JOMRES_LOGIN_RESET_BUTTON', 'Zapomněli jste heslo?');

jr_define ('_JOMRES_REVIEWS_ANONYMISE', 'Anonymizovat vaše jméno?');
jr_define ('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Pokud se při kontrole rozhodnete anonymizovat své jméno, použijeme místo toho vaše iniciály.');
jr_define ('ANONYMNÍ', 'Anon');

jr_define ('_JOMRES_REVIEWS_REPLY_SAID', 'řekl');
jr_define ('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Odpovědět na tuto recenzi');
jr_define ('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Sem napište odpověď na tuto recenzi.');
jr_define ('_JOMRES_REVIEWS_YOUR_REPLY', 'Vaše odpověď');
jr_define ('_JOMRES_REVIEWS_REPLY_COMMENT', 'Hlavní recenze');
jr_define ('_JOMRES_REVIEWS_REPLY_SAVED', 'Zkontrolovat odpověď uloženo');


jr_define ('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Před odesláním odpovědi na recenzi si musíte přečíst následující. Odesláním odpovědi potvrzujete, že souhlasíte s těmito podmínkami.');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Jaké jsou naše pokyny pro odpověď na recenzi?');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Reagujete na kontrolu svého majetku. <em> Nesmíte </em> použít svou odpověď jako proces obchodního sporu. Pokud potřebujete nahlásit recenzi, musíte použít "Nahlásit Tlačítko "zkontrolovat" v zápisu, nikoli na této stránce s odpovědí na kontrolu. ');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Jakmile svoji odpověď opustíte, nebudete ji moci upravit.');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Povoleno a podporováno');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li> Úplná odpověď na kontrolu. </li>
    <li> Zdvořilost a poctivost. </li>
    <li> Rozumné reakce na problémy recenzenta (pamatujte, že ostatní mohou mít podobné problémy, ale nevyužili příležitosti k zaslání recenze). </li>
    <li> Povzbuďte hosta, aby vás kontaktoval přímo při řešení problémů.
    <li> Vždy pamatujte, že vaši odpověď uvidí budoucí hosté. Ujistěte se, že jste vždy profesionální. </li>
</ul>
');

jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Nepovoleno');
jr_define ('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li> Obchodní spory. </li>
    <li> Otázky recenzentovi nebo ostatním. </li>
    <li> Sporný jazyk (včetně nadávání). </li>
</ul>
');

jr_define ('_JOMRES_COM_A_CRON_LASTRAN', 'Poslední spuštění');
jr_define ('_JOMRES_COM_A_CRON_SCHEDULE', 'Plán');


jr_define ('_JOMRES_INVOICE_NUMBERS', 'čísla faktury');

jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Použít vlastní čísla faktur?');
jr_define ('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Systém můžete nakonfigurovat tak, aby používal vlastní čísla faktur. Ovlivněny budou pouze nové faktury.');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'startovní číslo');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Čísla se vytvářejí postupně. Jaké by mělo být první číslo?');

jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Jaký formát má mít číslo faktury?');
jr_define ('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Zde nakonfigurujte formát čísla faktury. Formát může vypadat jako {N}/{D} nebo {N}/{Y}, kde N je automaticky generované číslo, D = datum ve formátu RRRRRMMDD ( 20190131) nebo Y = RRRR (2019). Ostatní alfanumerické znaky, které nejsou uzavřeny v složených závorkách, zůstanou samy, takže vzor, ​​který vypadá jako {N}/{D} -L, by měl za následek číslo faktury (21), které vypadá něco jako 21/2019-L ');

jr_define ('_JOMRES_SURCHARGE_TITLE', 'příplatek');
jr_define ('_JOMRES_SURCHARGE_DESC', 'Dodatečný poplatek, který bude přidán do pokoje při rezervaci (počítáno za den)');


jr_define ('_JOMRES_PDF_BUTTON', 'PDF');


jr_define ('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Upřednostnit štítky pro celý web?');
jr_define ('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Vlastní text uložený v úpravách štítků nebo stránky řetězců souborů překladů jsou považovány za štítky "pro celý web". Správci nemovitostí mohou také přizpůsobit štítky pro každou vlastnost pomocí funkce úpravy štítků v frontendu. To umožňuje správce vlastností, který má pro svou nemovitost různé texty, což je užitečné, pokud se vlastnost liší od všech ostatních vlastností na webu. <br/> Když systém vyhledává texty štítků, upřednostní texty na celém webu před vlastností specifické texty, což znamená, že pokud pro daný štítek existuje text pro celý web, systém nejprve vybere ten. Pokud nastavíte tuto možnost na Ne, systém upřednostní texty specifické pro dané vlastnosti před texty pro celý web. ');

jr_define ('_JOMRES_REFERRER', 'Referrer');
jr_define ('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // To lze změnit, pokud jsou na seznamu povolených, takže web "Nejlepší rezervační web na světě" by to změnil na "WBBS" nebo podobný.
jr_define ('_JOMRES_LIBRARY_PACKAGES', 'Balíčky knihoven');
jr_define ('_JOMRES_LIBRARY_PACKAGES_DESC', 'Moduly dodavatele a uzlu jsou samostatné (bezplatné) balíčky pro Jomres. Balíčky můžete znovu nainstalovat na této stránce.');
jr_define ('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Přeinstalovat balíčky knihoven');

jr_define ('_JOMRES_COM_PTYPES_NOT_DELETED', 'Nelze odstranit typ vlastnosti, protože je stále používán některými vlastnostmi. Tyto vlastnosti musíte nejprve změnit na jiný typ vlastnosti, než se pokusíte odstranit tuto vlastnost. Identifikátory UID, které zabraňují vymazání:');
jr_define ('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Nelze zrušit publikování typu vlastnosti, protože je některými vlastnostmi stále používán. Tyto vlastnosti musíte nejprve změnit na jiný typ vlastnosti, než se pokusíte toto publikování zrušit. Identifikátory UID, které zabraňují změně:');

jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Náhodné e -mailové adresy');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Nabídka náhodných e -mailů');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Můžete systému povolit generování náhodných e -mailových adres ve vyskakovacím okně Rychlá rezervace na hlavním panelu. To umožňuje manažerům a recepčním vytvářet rezervace pro hosty, pro které nemají e -mailové adresy, je zamýšleno fungovat. jako spořič času pro weby s mnoha recepčními/manažery, kteří chápou, že tyto náhodné e -maily nebudou nikdy použity pro skutečnou komunikaci, je cílem obejít skutečnost, že v Jomresu musí mít všichni hosté e -mailové adresy. MUSÍTE také poskytnout doménu v další pole. ');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Doména náhodných e -mailů');
jr_define ('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'Toto by neměla být normální e -mailová doména, například gmail nebo outlook. Místo toho to může být buď vaše vlastní doména, nebo něco úplně jiného, ​​například "mysite.emails"');
jr_define ('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Nahrát oblast');
jr_define ('_LIST_USERS_LEGEND_NOROLE', 'žádná role uživatele');
jr_define ('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepční');
jr_define ('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define ('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define ('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Odstraněno z CMS');


jr_define ('_REVIEW_JOMRES_PLEASEREVIEW', 'Pokud máte rádi Jomres, zvažte prosím zanechání recenze na jednom z těchto webů');
jr_define ('_REVIEW_JOMRES_ALREADYREVIEWED', 'jsem milý člověk, již jsem zanechal recenzi');

jr_define ('_LICENCE_PROMPT_DEAR', 'Dear');
jr_define ('_LICENCE_EXPIRED', ', platnost vašeho licenčního klíče Jomres vypršela, takže vám chybí tyto skvělé funkce a výhody!');
jr_define ('_LICENCE_EXPIRED_BENEFITS_1', 'Aktualizace pluginu a nová vydání pluginu');
jr_define ('_LICENCE_EXPIRED_BENEFITS_2', 'Podpora pouze e -mailů/lístků pro exkluzivní členy');
jr_define ('_LICENCE_EXPIRED_BENEFITS_3', 'Bezstarostné aktualizace Jomres Core');
jr_define ('_LICENCE_EXPIRED_POST', 'Připojte se k nám pro bezproblémová řešení plateb a získejte přístup ke všem pluginům a službám podpory pouze pro členy.');
jr_define ('_LICENCE_EXPIRED_RESTART', 'Získejte přístup ke všem pluginům hned!');

jr_define ('_LICENCE_INVALID_KEY', 'Bohužel se zdá, že nepoužíváte platný licenční klíč Jomres, takže vám tyto skvělé funkce a výhody chybí!');
jr_define ('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank"> Pluginy </a>, které výrazně rozšiřují funkce Jomres');
jr_define ('_LICENCE_INVALID_BENEFITS_2', 'Podpora pouze e -mailů/lístků pro exkluzivní členy');
jr_define ('_LICENCE_INVALID_BENEFITS_3', 'Bezstarostné aktualizace Jomres Core');
jr_define ('_LICENCE_INVALID_POST', 'Připojte se k nám a získejte bezproblémová řešení plateb a získejte přístup ke všem doplňkům a službám podpory pouze pro členy.');
jr_define ('_LICENCE_INVALID_START', 'Získejte přístup ke všem pluginům hned!');

jr_define ('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define ('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define ('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define ('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define ('_ADMIN_MENU_SECTIONS_INVOICES', 'Faktury');
jr_define ('_ADMIN_MENU_SECTIONS_PORTAL', 'Portál');
jr_define ('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define ('_ADMIN_MENU_SECTIONS_TOOLS', 'Nástroje');
jr_define ('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define ('_ADMIN_MENU_SECTIONS_SETTINGS', 'Nastavení');
jr_define ('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Publikované vlastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Nepublikované vlastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Schválené vlastnosti');
jr_define ('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Vlastnosti vyžadující schválení');

jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Nepublikované recenze');
jr_define ('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Zkontrolovat zprávy');

jr_define ('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Typ vlastnosti této služby není publikován, nemusí se objevit ve výsledcích vyhledávání. Kontaktujte správce webu, aby zveřejnil typ vlastnosti nebo změnil typ vlastnosti na stránce Upravit vlastnost.");
jr_define ('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Aktualizujte svůj typ nemovitosti');


jr_define ('_JOMRES_INCOME_PAID_AMOUNTS', 'příjem (zaplacené částky)');
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Nelze odstranit vlastnost vlastnosti' );
jr_define ('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '"protože ho používají následující vlastnosti:');


jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Tato stránka provádí základní test REST API pomocí vestavěné funkce v Jomres. Volá Jomres REST API, aby zjistil, zda obdrží platnou odpověď.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Server volal tuto URL, aby zjistil, zda je odpověď platná:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Stránka obdržela tuto odpověď:');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Zdálo se, že test proběhl podle očekávání, pravděpodobně nebudete mít žádný problém s přijímáním požadavků REST API ze zbytku internetu.');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Test se nezdařil, podívejte se do pole Odpověď, pokud vypadá jako hodně html, nebo jste obdrželi zprávu 404, pak váš server přesměruje volání na jinou URL. Tím zabráníte přijímání API hovory. ');

jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Test syndikace');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Server aplikace Jomres udržuje seznam všech webů Jomres. To nám umožňuje vybudovat syndikační síť. Tato síť je navržena tak, aby umožnila našim uživatelům zobrazovat vlastnosti z jiných webů, zejména u nových webů vybudovat přítomnost SEO na síti. Cílem je, aby všechny weby Jomres spolupracovaly a budovaly důvěru v síť. Tato služba není zpoplatněna. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Vaše stránka není aktuálně uvedena na serveru Jomres App, který je součástí syndikační sítě. Tento server se pokusí znovu přidat tento server do sítě po načtení stránky dalších 6. několik načtení stránky, to se nemění. Zkontrolujte prosím, zda výše uvedený test připojení prošel testy. Všimněte si, že servery localhost nelze přidat do sítě. ');
jr_define ('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Gratulujeme, váš server je uveden na serveru aplikace Jomres.');

jr_define ('_JOMRES_SYNDICATION_TITLE', 'Syndikované vlastnosti');
jr_define ('_JOMRES_SYNDICATION_TAGLINE', 'Zde jsou některé další nemovitosti dostupné z naší sítě nemovitostí');


jr_define ('_JOMRES_SYNDICATION_STATS_TITLE', 'Statistiky syndikace');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Gratulujeme, váš server je uveden v síti Jomres Syndication Network. Vaše nemovitosti se brzy začnou objevovat na jiných webech Jomres, pokud již nejsou zobrazeny.');
jr_define ('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Vaše instalace není součástí sítě Jomres Syndication Network, proto se vaše nemovitosti nezobrazují na jiných webech založených na Jomres a vy nemůžete těžit z této bezplatné reklamy.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktivní instalace Jomres:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Celkový počet instalací Jomres, které na svých webech sdílejí vlastnosti Jomres Syndication Network.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Toto je počet vlastností dostupných v JSN.');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays:');
jr_define ('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Celkově vždy byla vlastnost Jomres propojena z jiného webu založeného na Jomres.');
jr_define ('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) je bezplatná funkce dostupná všem uživatelům Jomres. Účelem je poskytnout vám bezplatnou reklamu na vaše nemovitosti na jiných webech založených na Jomres. Cílem je pomoci rychle spustíte svůj web a nabídnete bezplatnou reklamu, aby byly vaše vlastnosti uznávány a důvěryhodné, protože jsou spojeny s webovými stránkami s vysokou spolehlivostí a relevancí, které jsou již dobře známé vyhledávačům. Podívejte se na to <a href = "https://www.jomres.net/features/jomres-syndication-network" target ="_blank"> článek na našem webu </a> a <a href ="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target ="_blank"> manuál </a> pro více informací. ');


jr_define ('GUEST_PROFILE_INFORMATION', 'Toto jsou data vašeho profilu hosta, pole s tímto symbolem <i class = "fa fa-users" aria-hidden = "true"> </i>
 jsou veřejně viditelná, zatímco pole s tímto symbolem <i class = "fa fa-user-secret" aria-hidden = "true"> </i> můžete vidět pouze vy, vaši hostitelé a správci stránek. <br/> <br/> Hostitelé mohou vidět soukromé informace, pouze pokud jste u nich již vytvořili rezervaci. <br/> <br/> Vaše informace jsou bezpečně zašifrovány a uloženy v naší databázi pomocí šifrování AES-256. ');

jr_define ('GUEST_PROFILE_OPTIONAL', 'Tato pole jsou volitelná, ale hostitelé zde mohou použít informace, aby zjistili, zda se domnívají, že vám mohou věřit, proto je lepší informace přidat. Pamatujte, žádáte, abyste zůstali v jejich majetek, a mohou vás odmítnout, pokud mají pocit, že se k vám nehodíte nebo že váš životopis neobsahuje dostatek informací. ');
 jr_define ('GUEST_PROFILE_DRIVING_LICENSE', 'řidičský průkaz');
jr_define ('GUEST_PROFILE_PASSPORT_NUMBER', 'číslo pasu');
jr_define ('GUEST_PROFILE_IBAN', 'číslo IBAN');
jr_define ('GUEST_PROFILE_ABOUT_ME', 'O mně');
jr_define ('GUEST_PROFILE_ABOUT_ME_HINTS', 'Tato sekce O mně je veřejně viditelná, proto nezadávejte žádné soukromé informace. To znamená, snažte se dát tolik, kolik vám vyhovuje, například sdílení vašich vášní, živit se, svými koníčky atd. Pomocí Markupu mu můžete dát trochu jazzu. Hostitelé budou chtít cítit, že vám mohou věřit se svými vlastnostmi. Ujistěte se, že váš obrázek je skutečným obrazem vás, ne vašeho psa nebo auto (ano, lidi, mluvíme s vámi!). ');

jr_define ('GUEST_PROFILE_PREFERENCES', 'Zde zadejte jakékoli speciální požadavky, například potřeby snadného přístupu. Nebudou zobrazeny ve vašem veřejném profilu, ale budou přidány k informacím o rezervaci při rezervaci.');

jr_define ('VIEW_HOST_PROFILE', 'profil hostitele');

jr_define ('GUEST_PROFILE_TITLE', 'profil hosta');
jr_define ('GUEST_PROFILE_TITLE_MY', 'Můj profil');

jr_define ('GUEST_PROFILE_WELCOME', 'Ahoj, dovolte mi, abych vám řekl něco o sobě.');
jr_define ('GUEST_PROFILE_MY_NAME', 'Jmenuji se');
jr_define ('GUEST_PROFILE_I_COME_FROM', 'a já pocházím z');
jr_define ('GUEST_PROFILE_IN', 'region in');

jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define ('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Děláme vše, co je v našich silách, abychom ověřili informace o hostech a hostitelích, nicméně měli byste udělat svou vlastní náležitou citlivost a sami se rozhodnout, zda je tato osoba důvěryhodná.');

jr_define ('GUEST_PROFILE_MY_PROPERTIES', 'Moje vlastnosti');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Moje recenze');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'To jsem řekl o této vlastnosti:');
jr_define ('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'dal jsem této vlastnosti skóre hodnocení:');
jr_define ('GUEST_PROFILE_MY_REVIEWS', 'Moje recenze');
jr_define ('GUEST_PROFILE_OF_ME', 'Co o mně říkají ostatní');
jr_define ('GUEST_PROFILE_OF_HOST_SAID', 'Co o mně řekl tento hostitel');

jr_define ('GUEST_PROFILE_REVIEW_GUEST', 'Zkontrolovat host');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Moje recenze tohoto hosta');
jr_define ('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Zde je několik příkladů hodnocení hostů, aby se míč roztočil: <br/>

<ul>
<li> (jméno hosta) bylo potěšením hostit! Prostor nechali čistý a celý víkend byli v klidu. Měli bezproblémovou komunikaci a těším se, až u mě zase zůstanou! </li>
    <li> Miloval jsem (jméno hosta), protože se k místu mohli chovat s respektem, skvěle se bavit a užívat si okolí. Byli úžasní, když si pronajali prostor, a doufám, že je budu moci znovu hostit. </li>
    <li> Všechna moje pravidla domu byla respektována (jméno hosta) a oni mohli snadno vstoupit a odejít. Miloval jsem je tam, protože byli uctiví a tichí. Vřele je doporučuji ostatním! </li>
</ul>

');

jr_define ('GUEST_PROFILE_UNKNOWN', 'Lituji, tohoto uživatele nemohu najít. S největší pravděpodobností dosud nevyplnil údaje o svém účtu.');

jr_define ('GUEST_PROFILE_USERSTATUS_GUEST', 'host');
jr_define ('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define ('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define ('WORDPRESS_THEME_ADVICE', 'Jomres je postaven na frameworku Bootstrap, takže ho musíte použít na motivu založeném na Bootstrapu. Doporučujeme motiv založený na Bootstrapu 3. Pokud k tématu nemáte přístup, doporučujeme použít téma Jomres Leohtian pro Wordpress, které můžete <a href = "https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target = "_prázdné "> stahovat odsud. </a> ');


jr_define ('BOOKING_NOSHOW_MENU', 'Označit jako bez show');
jr_define ('BOOKING_NOSHOW_AUDIT_LOG', 'rezervace označena jako No Show');
jr_define ('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define ('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define ('BOOKING_NOSHOW_NETWORK_STATUS', 'statistika JSN pro tohoto uživatele');
jr_define ("BOOKING_NOSHOW_INFO", 'Informace o rezervaci a žádné show jsou čerpány ze sítě Jomres Syndicate Network v době rezervace. Jsou převzaty z anonymizovaných údajů a můžete je použít k rozhodnutí, zda tento host představuje riziko nesplnění rezervace. Pokud systém hlásí, že data jsou neznámá, je to pravděpodobně proto, že tento systém není v síti rozpoznán. ');

jr_define ('BOOKING_NOSHOW_UNKNOWN', 'Neznámý');

jr_define ('CMF_CONFIG_TITLE', 'Channel Management Framework');
jr_define ('CMF_CONFIG_KEY', 'Key Framework Framework Key');
jr_define ('CMF_CONFIG_KEY_DESC', 'licenční klíč Channel Management Framework. Tento klíč budete muset poskytnout, abyste si mohli stáhnout doplňky Channel Management Framework.');

jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Vaše vlastnost nebyla schválena');
jr_define ('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Váš majetek byl schválen. Pokud si myslíte, že to bylo provedeno omylem, kontaktujte nás.");

jr_define ('_JOMRES_GUESTTYPES_IS_CHILD', "Je toto typ dětského hosta?");
jr_define ('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Nastavit na Ano, pokud by byl tento typ hosta klasifikován jako podřízený typ hosta.");

jr_define ('_JOMRES_GUESTTYPES_INTRO', "Pokud chcete účtovat poplatky za osobu za noc, budete muset vytvořit několik typů hostů.");
jr_define ('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Můžete vytvořit tolik typů hostů, kolik potřebujete, zkuste začít vytvořením pouze jednoho typu hosta s názvem 'Dospělí'. Ponechejte všechna nastavení na jejich výchozích hodnotách. Dále, pokud například chcete dejte dětem mladším 12 let slevu 50%, vytvořili byste nový typ hosta a nazvěte ho \"Děti do 12 let\". Nastavte možnost \"Přidat odchylku?\" na - (záporné) a nastavte \"Rozptyl\" na 50. To znamená když jsou k rezervaci přidány děti, bude jim účtováno 50% z ceny pokoje. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Nastavit ceny ručně");
jr_define ('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Nastavit minimální noci ručně");
jr_define ('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Nastavit minimální počet nocí");

jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Nastavit <em> cenu za noc </em> podle dne v týdnu");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Nastavit <em> cenu za noc </em> podle časového období");
jr_define ('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Nastavit <em> minimální noci </em> podle období");

jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Výběr data a zadávání sazeb vám umožňují nastavit jednu cenu pro dané časové období. Vyberte počáteční a koncové datum, zadejte cenu a klikněte na tlačítko Nastavit cenu za noc.");
jr_define ('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Výběr data a vstup minimálních nocí vám umožňují nastavit jednu hodnotu pro minimální noci pro dané časové období. Vyberte počáteční a koncové datum, zadejte číslo pro minimální počet nocí a klikněte na 'Nastavit minimální noci '. ");

jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Pomocí tohoto rozevíracího seznamu můžete přepínat mezi nastavením cen pro jednotlivá data a nastavením minimálních nocí pro jednotlivá data. Můžete použít výběr <em> podle dne v týdnu </em>, <em> podle data výběr rozsahu </em> nebo nastavení cen/minimálních nocí ruční úpravou termínů. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Pomocí tohoto rozevíracího seznamu můžete přepínat mezi nastavením cen pro jednotlivá data a nastavením minimálních nocí pro jednotlivá data. Můžete použít výběr <em> podle časového období </em> nebo nastavit ceny/minimální noci podle ruční úprava dat. ");
jr_define ('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Nastavit ceny nebo minimální noci");

jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Nastavit <em> minimální noci </em> podle dne v týdnu");
jr_define ('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Pole dne v týdnu vám umožňují nastavit minimální počet nocí pro daný den v týdnu, jakmile kliknete na tlačítko dne v týdnu, všechny dny v týdnu budou nastaveny na nastavení min. nocí. ");

jr_define ('_JOMRES_MICROMANAGE_MANUALLY', "Ručně nastavit ceny/minimální noci");
jr_define ('_JOMRES_MICROMANAGE_SET_PRICES', "Nastavit ceny");
jr_define ('_JOMRES_MICROMANAGE_SET_MINDAYS', "Nastavit minimální počet nocí");

jr_define ('_JOMRES_MICROMANAGE_PRICE', "Za noc");
jr_define ('_JOMRES_MICROMANAGE_MINDAYS', "Min noci");
jr_define ('_JOMRES_MICROMANAGE_MAXDAYS', "Max noci");

jr_define ('_JOMRES_MICROMANAGE_INTRO', "Zde si můžete vytvořit tarify, které jsou spojeny s typy pokojů, které máte ve svém majetku.");

jr_define ('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Nejčastěji používané možnosti");

jr_define ('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Pokyny");

jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Pokud chcete přidat různé ceny pro různé počty hostů, pak <em> můžete vytvořit více než několik tarifů pro každý typ pokoje </em> a mít v těchto tarifech různé hodnoty min/max hostů. ");

jr_define ('_JOMRES_MICROMANAGE_INFO', "Pojmenujte tarif, definujte maximální počet nocí a minimální a maximální počet hostů, kteří jsou požadováni v rezervačním formuláři před nabídkou tarifu. <br/> <br/> Použijte panel pro výběr data pro přidání cen a nastavení minimálních nocí do rozsahu dat nebo přímou úpravu vstupů. Pokud nechcete, aby byl tarif k určitým datům vůbec nabízen, ponechte cenu nastavenou na 0 (nula) tato data. <br/> <br/> Můžete mít různé minimální noci v různá data, takže pokud chcete delší rezervace během festivalů/konferenčních týdnů, můžete nastavit minimální noci tak, aby byly vyšší právě v těchto obdobích. <br/ > <br/> Pokud účtujete za osobu na sázku (PPPN), můžete toto nastavení povolit v Nastavení> Konfigurace nemovitosti> karta Tarify a měna, poté vytvořte požadované typy hostů v Nastavení> Typy hostů. ");

jr_define ('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Extra options");

jr_define ('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Toto jsou další možnosti, které nejsou tak běžně používány, ale přesto jsou vám k dispozici. <br/> <strong> Ignorovat PPPN </strong> znamená Ignorovat na osobu za noc. Můžete mít několik různých tarifů pro stejný typ pokoje, například jeden z nich účtuje poplatky za osobu za noc a druhý nikoli. <br/> <strong> Povolit víkendy </strong> Možnost Povolit víkendy vám dává možnost vytvořit tarif, který je pouze k dispozici ve všední dny, například pokud chcete speciální tarif pro obchodní cestující. V takovém případě byste nastavili možnost Ne a minimální noci na 1 a maximální noci, maximálně 5. <br/> <strong> Víkendy pouze </strong> Možnost Pouze víkendy je opakem možnosti Povolit víkendy. To, co považujete za víkendové dny, lze konfigurovat v nastavení konfigurace služby. To vám dává možnost definovat sazbu pouze za víkend, kterou byste mohli chtít nabídka pro speciální akce. <br/> <strong> Přihlášení Den v týdnu </strong> Tato možnost vám dává možnost vynutit, aby se ohlášení týkalo pouze určitých dnů v týdnu, a nejlépe se používá ve spojení s konfigurací služby> karta Rezervace> možnosti fixních období. Většina uživatelů bude chtít ponechat tuto možnost nastavenou na Vše. <br/> Poslední dvě možnosti, <strong> Min. Pokoje již vybrány </strong> a <strong> Max. Pokoje již vybrány </strong>, jsou velmi specializované a užitečné pro nemovitosti s extrémně komplikovanými tarify. <em> Pokud nemáte konkrétní potřebu, měli byste tyto možnosti nechat na pokoji. </em> Použijte je, pokud chcete, aby byl tento tarif nabízen pouze tehdy, když si host již v rezervačním formuláři vybral N počet pokojů, např. mohli byste mít jeden základní tarif, kde jsou tyto možnosti ponechány ve výchozím nastavení, a druhý tarif, kde je již vybraná možnost minimálních pokojů nastavena na 1, pak tento druhý tarif bude nabídnut v rezervačním formuláři, jakmile bude vybrán pokoj. ");
jr_define ('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Můžete vytvořit více tarifů pro stejný typ místnosti, takže můžete vytvořit jeden tarif pro min/max dny 1 - 7 a druhý tarif, kde min je 7 dní, maximální 14 dní a tak dále. To vám umožní vytvářet cenová schémata tak jednoduchá nebo složitá, jak potřebujete. Také vám umožňuje vytvářet více tarifů za různých podmínek, takže můžete mít druhou sadu tarifů, kde je cena za Bed & Breakfast nižší, a další sada dražších tarifů na postel, snídani a večer. ");

jr_define ('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Nastavit pouze dny pro výběr data");
jr_define ('_JOMRES_PROPERTY_HCATEGORIES', 'kategorie majetku');
jr_define ('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Upravit kategorii majetku');
jr_define ('_JOMRES_STOP_READTHISFIRST1', "Stop!");
jr_define ('_JOMRES_STOP_READTHISFIRST2', "Děkujeme za instalaci Jomres");
jr_define ('_JOMRES_STOP_READTHISFIRST3', "Správa majetku se provádí na veřejných protilehlých stránkách, nikoli v oblasti správce.");
jr_define ('_JOMRES_STOP_READTHISFIRST4', "Pokud Jomres neznáte, navštivte sekci Nápověda> Začínáme.");

jr_define ('_JOMRES_CONFIG_SYNDICATION_TITLE', "Připojte se k syndikátu Jomres");
jr_define ('_JOMRES_CONFIG_SYNDICATION_DESC', "Jakmile budete mít nastavení webu připravené začít přijímat návštěvníky, připojte se k syndikátu Jomres.net a získejte své nemovitosti uvedené na jiných webech Jomres.");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Před vytvořením tarifu potřebujete alespoň jednu místnost jednoho z následujících typů:");
jr_define ('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Přejděte do Nastavení> Místnosti a nejprve vytvořte pokoj, až to uděláte, budete moci vytvořit tarif pro daný typ pokoje.");

jr_define ('JOMRES_PLATFORM', "Jomres Platform");


jr_define ('JOMRES_PLATFORM_CONNECTED', "Connected");
jr_define ('JOMRES_PLATFORM_CONNECTED_DESC', "Nastavte toto na Ano, pokud jste již svůj účet Stripe propojili s platformou Jomres.");

jr_define ('JOMRES_PLATFORM_ACCOUNT_ID', "Stripe Live číslo účtu");
jr_define ('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "Toto je vaše ID účtu Stripe, které najdete na Stripe Dashboard v Nastavení> Informace o účtu a vypadá jako acct_xxxxxxxxx Toto pole byste použili, pokud máte více instalací Jomres a chcete použít stejný účet napříč všechny weby a vy jste se k nám již připojili. Pokud jste se nepřipojili k platformě Jomres, nestačí zde zadat vaše údaje. Místo toho navštivte na panelu nástrojů v sekci Nápověda možnost Připojit se. Pokud chcete Chcete -li testovat platby, na kartě Ladění v Konfiguraci webu nastavte svůj web od výroby po vývoj. ");

jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live secret key");
jr_define ('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Přejít na vývojáře> Klíče API na hlavním panelu Stripe pro nalezení tajných klíčů. Systém je používá k ověření, zda jsou data rezervace vrácená z platebního formuláře platná a zda byly vklady zaplaceny před uložením rezervace . ');

jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY', "tajný klíč pro test proužků");
jr_define ('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', '');

jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD', 'standardní tarifní režim');

jr_define ('JOMRES_COM_A_ACCOMMODATES', 'Sleeps');
jr_define ('JOMRES_COM_A_ACCOMMODATES_DESC', 'Kolik lidí může tato nemovitost pojmout?');
jr_define ('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'počet hostů ve vaší denní ceně');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'cena pro dospělé navíc');
jr_define ('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Children');



jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Na osobu za noc?');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', '7denní modifikátor');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Sleva na denní sazbu, pokud je rezervace na 7 a více dní. Pokud nechcete, aby byla sleva uplatněna, ponechte tuto sadu na nule.');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', '30denní modifikátor');
jr_define ('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Sleva na denní sazbu, pokud je rezervace na 30 a více dní. Pokud nechcete, aby byla sleva uplatněna, ponechte tuto sadu na nule.');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL', 'dospělí');
jr_define ('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'cena na základě 2 dospělých');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'rezervace se slevou od');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', 'to');
jr_define ('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'protože rezervace je delší než 7 dní.');
jr_define ('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'protože rezervace je delší než 30 dní.');


jr_define ('JOMRES_CITY_TAX_HEADING', 'městské daně');
jr_define ('JOMRES_CITY_TAX_VALUE', 'městská daňová hodnota');
jr_define ('JOMRES_CITY_TAX_METHOD', 'metoda výpočtu daně');

jr_define ('JOMRES_CITY_TAX_MODEL_SINGLE', 'jednorázový poplatek');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Za noc');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Na hosta');
jr_define ('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Na hosta za noc');
jr_define ('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Procento hodnoty rezervace');

jr_define ('JOMRES_CLEANING_FEE_HEADING', 'poplatek za úklid');
jr_define ('JOMRES_CLEANING_FEE_VALUE', 'cena poplatku za úklid');


jr_define ('JOMRES_COMPATABILITY_MODE', 'vynutit režim konfigurace vlastnosti kompatibilního kompatibility?');
jr_define ('JOMRES_COMPATABILITY_MODE_DESC', "Režim konfigurace vlastností kompatibility nutí, aby se stalo několik věcí. Ve starších verzích Jomres si správci vlastností mohli vybrat, jaký režim úprav tarifů použít, a řadu dalších nastavení (z nichž některá mohou vypadat matoucí). Byli jim k dispozici. Povolení konfigurace kompatibility vynutí, aby všechny nové vlastnosti používaly pouze režim úprav standardního tarifu, který modeluje konfigurační funkce rezervace booking.com s ohledem na ceny, podřízené ceny atd. Doporučuje se, aby u instalací, které byly vytvořeny po 9.22 .0, tato možnost by měla být nastavena na Ano, ale u starších instalací je na vás, abyste rozhodli, zda mají být nové vlastnosti při vytváření automaticky nastaveny na režim kompatibility. ");

jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN', 'Přijímáte děti mladší 18 let?');
jr_define ('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Nastavte tuto možnost na Ano, pokud povolíte děti. Pokud ano, pak v nabídce Nastavení budete mít možnost nazvanou Podřízené zásady, kde můžete upravovat nastavení související s dětmi.");

jr_define ('JOMRES_POLICIES_CHILDREN', 'Child policies');

jr_define ('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'V jakém věku jsou děti povoleny?');


jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Za dítě, za noc');
jr_define ('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Za dítě, za pobyt');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Dětské sazby');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nová dětská sazba');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Upravit podřízenou sazbu');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Zde vytvořte své bezplatné nebo placené dětské sazby. Sazby se uplatní pouze v případě, že jste vytvořili úrovně obsazení pro typy pokojů.');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Age from');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Age to');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'za noc nebo za pobyt?');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Sazba');
jr_define ('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Pokud je nula nebo není nastavena, děti této věkové kategorie budou zdarma.');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Agees at checkin');
jr_define ('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Ages');

jr_define ('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Úrovně obsazenosti');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maximum dospělých');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maximum children');
jr_define ('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maximální obsazenost');

jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Upravit úroveň obsazení pro:');
jr_define ('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Upravit úrovně obsazenosti pro tento typ pokoje. Nezahrnujte hosty spící na dětských postýlkách (ty se přidají vytvořením Extra)');
jr_define ('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Kolik by měl být účtován za každého dalšího dospělého?');

jr_define ('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Extra dospělí');


jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES', 'Ještě jste nenakonfigurovali podřízené sazby.');
jr_define ('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Nastavit podřízené sazby nyní');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Svůj majetek jste nakonfigurovali tak, aby umožňoval děti, ale zatím jste nenastavili žádné úrovně obsazení dětí.');
jr_define ('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Nastavit úrovně obsazenosti');
jr_define ('JOMRES_OCCUPANCY_LEVELS_INFO', 'Při každé úpravě pokoje nebo typu nemovitosti byste měli zkontrolovat a aktualizovat úrovně obsazenosti vašeho majetku/pokojů, protože ty ovlivňují počet hostů, kteří mohou být přijati do rezervačního formuláře.');


jr_define ('_JOMRES_SEARCH_FORM_ADULTS', 'Dospělí');
jr_define ('_JOMRES_SEARCH_FORM_CHILDREN', 'Chidren');


jr_define ('_JOMRES_CONFIG_LEVEL_TITLE', 'Úroveň možností administrátora');
jr_define ('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres má mnoho možností nabídky a konfigurace, které můžete použít při konfiguraci svého webu. Drtivou většinu z nich nikdy nebudete muset měnit, takže jsou ve výchozím nastavení skryté. Tyto možnosti můžete zobrazit nastavením úroveň Možnosti správce. Základní úroveň vám ukáže, co potřebujete při prvním nastavení webu. Běžná úroveň vám ukáže možnosti, které se nejčastěji mění, a Vše vám ukáže všechna možná nastavení a možnosti nabídek v oblasti správce. ');
jr_define ('_JOMRES_CONFIG_LEVEL_BASIC', 'Základní');
jr_define ('_JOMRES_CONFIG_LEVEL_COMMON', 'Common');
jr_define ('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Všechno');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Můžeme shromažďovat informace o tom, jak používáte Jomres?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Chtěli bychom shromažďovat informace o tom, jak používáte Jomres. Nebudou ukládány žádné osobně identifikovatelné informace, použití bude anonymizováno a pouze nám pomůže porozumět tomu, jak lidé používají Jomres.');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Ano, to je v pořádku');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', 'Ne, nesouhlasím');

jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Budete přijímat rezervace více než jedné nemovitosti?');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres lze použít pro stránky s jedním nebo více nemovitostmi. Pokud budete přijímat rezervace pouze pro jednu vlastnost, bude mnoho možností nadbytečných a potenciálně matoucích. Toto nastavení můžete později změnit v Nastavení> Web Konfigurace> karta Funkce portálu. ');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Jen jedna vlastnost');
jr_define ('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', 'budu uvádět více než jednu vlastnost');


jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Kterou verzi rámce Bootstrap vaše šablona/téma podporuje?");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Každá verze rámce Bootstrap vyžaduje mírně odlišné označení html. Jomres má tři sady šablon kompatibilních s Bootstrap, jednu pro každou verzi Bootstrap. Musíte zajistit, že ji nakonfigurujete tak, aby používala příslušnou sadu šablon. Pokud pak nevydáte výstup, jako je rozložení, modály a nabídky nebudou fungovat správně. Pokud se rozhodnete použít šablonu/motiv později s jinou verzí Bootstrapu, můžete změnit sadu šablon Bootstrap, kterou by měl Jomres používat v části Správce> Jomres> Nastavení > Různá karta. <br/> <br/> Joomla 3 je ve výchozím nastavení distribuována s Bootstrap 2, Joomla 4 bude používat Bootstrap 5. Šablona Jomres Leohtian (Joomla) a téma (Wordpress) používá Bootstrap 3. Mohou být použity různé šablony/motivy distribuovány s vlastními soubory Bootstrap, takže pokud máte jakékoli pochybnosti, kontaktujte vývojáře šablony/tématu. ");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", "Bootstrap 2");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", "Bootstrap 3");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", "Bootstrap 4");
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", "Bootstrap 5");
jr_define ('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Odstranit desetinná místa z výstupních cen?');

jr_define ('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Použít skupinu opravou?');
jr_define ('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Některé instalace mysql mohou mít problém s dotazy Jomres na stránce Seznam vlastností, Seznam hostů a Seznam faktur. Pokud tyto stránky uvádějí, že zobrazují X výsledků Y, ale v seznamu se nic nezobrazuje, tato volba na Ano může problém vyřešit. Nebude, pokud jste na sdíleném hostingu a hostitelská služba neumožňuje vašemu uživateli mysql vydat příkaz "SET GLOBAL sql_mode =". ');
jr_define ('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'Toto je vlastnost kanálu, kterou nelze spravovat lokálně, přejděte na stránku rámce správy kanálu, kde najdete odkaz na vzdálenou správu služby');
jr_define ("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Žádný bootstrap v motivu");
jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Odkazy na sociální sítě');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Sem vložte názvy účtů sociálních sítí, například "jomres", ne celou adresu URL');

jr_define('JOMRES_ORGANISATIION_LANGUGES_DESC', 'Čárkami oddělený seznam jazyků, kterými vaše organizace mluví');
jr_define('JOMRES_ORGANISATIION_LOGO_URL', 'Adresa URL loga vaší organizace');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres aktualizován');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'K dispozici je nová verze Jomres. Než budete moci pokračovat v používání Jomres, musíte provést aktualizaci, protože aktualizace zlepšují funkčnost a zajišťují, že vaše instalace zůstane bezpečná.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Aktualizovat Jomres nyní');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Aktualizace pluginů');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'Ve správci pluginů jsou k dispozici nové verze pluginů. Než budete moci pokračovat v používání Jomres, musíte aktualizovat všechny pluginy, protože aktualizace zlepšují funkčnost a zajišťují, že vaše instalace zůstane bezpečná.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Pluginy k aktualizaci');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Pokud vaše licence již není platná, můžete získat nový licenční klíč z naší webové stránky.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Aktualizovat pluginy');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Získat nový klíč');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Uložit nový klíč');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES',"Obrázky typu vlastnosti");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE',"Potřebujete pomoc s rezervací?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB',"Zavolejte našemu týmu zákaznických služeb na níže uvedené číslo a promluvte si s jedním z našich zástupců, který vám pomůže se všemi potřebami na dovolené.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE',"Proč rezervovat u nás?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE',"Nabízíme nejlepší ceny za rezervace");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1',"Máme aktuálně nejvýhodnější nemovitosti na trhu.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2',"Žádné rezervační poplatky. Ušetřete peníze!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE',"Skvělý výběr vlastností");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS'," vlastnosti");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', "recenze hostů");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE',"Vždy jsme tady");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT',"Zavolejte nebo napište nám, kdykoli");
jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT',"Získejte 24hodinovou podporu před, během a po vaší cestě");

jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA',"Sociální média");
jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD',"Najděte nás na sociálních sítích");

jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Vynikající");
jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Výjimečné");
jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Úžasné");
jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Skvělé");
jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastické");

jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Velmi dobře");
jr_define('JOMRES_REVIEW_SCORE_GOOD', "Dobré");

jr_define('JOMRES_REVIEWS_NONE_NEW', "Nový výpis");
jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Sleva");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Kam chcete jít?');
	jr_define( 'DATA_SOURCES_TITLE', "Obnovit zdroje dat" );
	jr_define( 'DATA_SOURCES_TITLE_INFO', "Datové zdroje byly obnoveny. Zdroje dat jsou používány automatickým doplňováním vstupních polí ve vyhledávacím widgetu a obvykle se aktualizují automaticky, nicméně tato stránka vyžaduje, aby byla data v případě potřeby aktualizována ručně." );

