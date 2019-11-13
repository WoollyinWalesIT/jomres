<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Děkujeme za projevený zájem a doufáme, že se Vám Vaše cesta bude líbit.<br><br> <b>Vemte prosím na vědomí, že Vaše objednávka je prozatím predběžná až do doby, než Vám ji potvrdíme závazně e-mailem.</center>');
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
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Systém Hotelak Vás zřejmě kvůli dlouhé prodlevě odhlásil.</b> Přihlašte se znovu prosím.');
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
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'The number of days, within which the full amount will be charged as a deposit.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Confirmation email has been sent. You may close this window now.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Mark invoice as paid');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Invoice marked as paid');
jr_define('_JOMRES_APIKEY_REMAKE', 'Make new API key');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://www.jomres.net/manual/developers-guide/53-customising-jomres/editing-labels-languages/268-editing-mode" target="_blank">the editing mode manual page</a> for more information on this subject.');
jr_define('_JOMRES_SUPPORTKEY', 'Support key');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Personal discount');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Limit property registration to one country?');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Properties are located in this country : ');
jr_define('_JOMRES_JQUERYTHEME', 'Jquery theme');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Choose a jquery theme to use for the property details tabs.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'We are sorry, but that property is not currently available.');
jr_define('_JOMRES_REVIEWS', 'Reviews');
jr_define('_JOMRES_REVIEWS_TITLE', 'Review title');
jr_define('_JOMRES_REVIEWS_DATE', 'posted on ');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'There are no reviews for this property yet.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Would you like to be the first to review this property?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'I agree with this review');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'I disagree with this review');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Average Rating: ');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Total Votes:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Add a new review.');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'You need to be logged in to post a review.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Tell us what you think about this property : ');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'This reviewer told us : ');
jr_define('_JOMRES_REVIEWS_PROS', 'Pros: ');
jr_define('_JOMRES_REVIEWS_CONS', 'Cons: ');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Submitted On: ');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'You have already reviewed this property, you can\'t post another review about it.');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Show reviews');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', ' guests agree with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', ' guests do not agree with this review.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', ' guest agrees with this review. ');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'guest does not agree with this review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Thank you for sharing your opinion of this review.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Thank you, but you have already shared your opinion of this review.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Please ensure that all fields have been filled.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Please summarise your review by entering a title');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Please enter a more complete review in the description box');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Please enter the good parts of your experience of being a guest at this property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Please enter any negative thoughts you might have of your experience');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Please rate the hostpitality you received from the staff');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Please rate your opinion of the property\s locale');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Please provide your opinion of the cleanliness of the property');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Please rate the accommodation. Was it comfortable or threadbare');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Please provide your opinion of whether it was value for money');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Please rate the services');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Review summary');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Your experience in more detail');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Thank you for submitting your review.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Use Jomres review functionality?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatically publish reviews?');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'If you set this to No you will need to manually publish reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Set reviews to test mode?');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Number of unpublished reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Total number of reviews');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publish/Unpublish review');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Delete review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Report review');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Review reports');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Please enter your report');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Submit');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Report created by ');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
jr_define('_JOMRES_REVIEWS_RATING', 'Ratings (1 = poor 10 = excellent) ');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Hospitality  ');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Location ');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Cleanliness ');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Accommodation ');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Value for money ');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Services ');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Reviewed by : ');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Hide reviews');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Show Booking form in property details page?');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Are prices set inclusive of tax?');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras tax:');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partners');
jr_define('_JOMRES_CALENDAR_RTL', 'false');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Room ');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'guest(s). ');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Note that your property is not yet published, only you can see the property, site visitors will not see it');
// 4.5.5
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Default search result order');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Rooms list style');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Room types');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Calendar week start day, Sunday or Monday');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Only property guests can review?');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per room');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Guests per room : ');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Guests per booking : ');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Number of rooms');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'January');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'February');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'March');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'April');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'May');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'June');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'July');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'August');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'September');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'October');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'November');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'December');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Please select an option for your booking');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Fullscreen view');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Normal view');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Partner discount ');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Search user');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Existing partners');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Choose a partner to be taken to the partner administration page.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner :');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Search for a property');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', "Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Current properties');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', "Click on a property to edit the partner's discount settings for that property.");
// 4.6
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'This account has been suspended, it is not currently possible to administer your propert(ies) using this account.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Manager account suspended');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Manager account reinstated');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Remove favourite');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Booking data archive');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Edit account');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Existing managers');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Sleeps');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Show the search by guest number dropdown');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Stars');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Show the Stars dropdown');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Number of guests');
jr_define('_JOMRES_SEARCH_STARS', 'Number of stars');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Number of properties');
// 4.6.1
jr_define('_JOMRES_CONFIG_JQUERY', 'Load Jomres jQuery library?');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Thumbnails are created automatically for uploaded images.');
// 4.7.1
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Small thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Small thumbnails max height (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Medium thumbnails max width (px).');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Medium thumbnails max height (px).');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Label Translations');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Use commission functionality?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Set this to Yes to show the manager commission invoices which have been raised.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Manager bookings create commission invoices?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'If a manager makes a booking, does that also create a commission invoice line item?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Auto suspend managers where invoices are marked as Pending?');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Auto suspend threashold');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.');
//4.7.2
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Language context');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /'.JOMRES_ROOT_DIRECTORY.'/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /'.JOMRES_ROOT_DIRECTORY.'/languages directory.');
// 4.7.3
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options may not be available if you don\'t have the appropriate plugin(s) installed. Users of the free, core system will not be able to take full advantage of the features that they enable.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Load Jomres jQuery UI library?');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)');
// 4.7.6
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per night');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per week');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per month');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Per person');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ');
// 4.7.7
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click Here');
// 4.7.8
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Booking valid from');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Booking valid to');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Guest name');
jr_define('_JRPORTAL_COUPONS_DESC_478', "Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'With your coupon, this booking has been discounted from ');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', ' to ');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Set this to No to disable loading of both the Jquery UI javascript and CSS files.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Load Jomres jQuery UI CSS library?');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Set this to No to disable only the jquery UI CSS file.');
//v5.1
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Total inc tax');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property');
// v5.2
jr_define('_JOMRES_CONVERSION_TITLE', 'Use conversion functionality');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.');
// 5.2.1
// 5.3.1
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugging');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filter resources based on their features.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Latest booking');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'second');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minute');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'hour');
jr_define('_JOMRES_DATEPERIOD_DAY', 'day');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'week');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'month');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'year');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'decade');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'ago');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'from now');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Bookings are for whole days?');
jr_define('_JOMRES_WHOLEDAY_DESC', 'By default the system bookings resources out by the night, so a booking from the first of January '.date('Y', strtotime('next year')).' to the 2nd of January '.date('Y', strtotime('next year')).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Per person per day');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Pickup');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Return');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'days(s) at');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Return date incorrect');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'The booking is too short. There needs to be at least this many days between the pickup and return dates:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Pickup/Return minimum interval');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Price summary and estimates should be priced as per day/per week/per month?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Per day');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Days before the pickup date');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'The minimum number of days that must elapse, from "today", before the pickup date.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Show return date input?');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', "Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Pre-defined pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Fixed pickup day');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Fixed pickup dates recurr: ');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Per person, per day');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Threshold (number of days between pickup date and today)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Pickup Pending');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Pickup today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Picked up');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Returns today');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Return overdue');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Has not picked up');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Days');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Mark a booking picked up.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Mark a booking returned.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Mark a booking picked up');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Mark a booking returned');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Cost per day: ');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Number of days: ');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Email new users their login details?');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Show tax output in the booking form totals summary?');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Cancellation Threashold');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');
jr_define('_JOMRES_EDIT_PROFILE', 'Edit Profile');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Property type relationship');
jr_define('_JOMRES_IMAGE', 'Image');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Edit Tax rate');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edit Custom field');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'License server password');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'License server username');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'This Jomres version : ');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Latest Jomres version');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres. The Core system is free, but it can be enhanced through the installation of plugins. To access those plugins you will need a download and support license. If you would like to purchase a Jomres Starter, Business or Enterprise license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section in the menu, including the "Getting Started" page which will guide you through your first steps.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Active property');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'Email Settings');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Alternate Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Change this to your smtp mail server');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Alternate Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Change this to your smtp port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Alternate Protocol');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Use authentication');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Alternate Username');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', '');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Alternate Password');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', '');
jr_define('_JOMRES_QUICK_INFO', 'Quick Info');
jr_define('_JOMRES_MENU_SHOW', 'Show');
jr_define('_JOMRES_MENU_HIDE', 'Hide');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Default');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Anybody');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Registered');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nobody');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Menu Access control');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Receptionist');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Full Access Control');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Full Access control');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', "<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Users with admin rights to this property');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Your email address');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parameters');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Force');
jr_define('_JOMRES_METATITLE', 'Meta title');
jr_define('_JOMRES_METADESCRIPTION', 'Meta description');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Add your property : Step 2 of 2');
jr_define('_JOMRES_CART_TITLE', 'My proposed bookings');
jr_define('_JOMRES_CART_INFO', 'Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Confirm booking(s)');
jr_define('_JOMRES_CART_OR', ' or ');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Save for later');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'You don\'t have any bookings saved yet.');
jr_define('_JOMRES_CART_VIEWCART', 'View cart');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Language file subdirectory');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Default Latitude Startpoint');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Default Longitude Startpoint');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Emails sent from which address?');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', "Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'List view');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Photo view');
jr_define('_JOMRES_COMPARE', 'Compare');
jr_define('_JOMRES_REMOVE', 'Remove');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Return to search results');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Add to favourites');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Remove from favourites');
jr_define('_JOMRES_VIEWSHORTLIST', 'View your shortlist');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Important: Cookie Policy');
jr_define('_JOMRES_COOKIEPOLICY_2', 'We use cookies to help keep our site relevant and easy to use.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Read more...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'EU legislation requires that all websites clearly specify if cookies are being used and their purpose.');
jr_define('_JOMRES_COOKIEPOLICY_5', "The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
jr_define('_JOMRES_COOKIEPOLICY_6', 'Yes, I accept the use of cookies in this way.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Deposit required is cost of the first night?');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', "You haven't added any items to your favourites.");
jr_define('_JOMRES_SAFEMODE', 'Enable safe mode?');
jr_define('_JOMRES_SAFEMODE_DESC', "Set this to Yes to trigger safe mode. This will disable all plugins so that Jomres will only use it's core functionality.");
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Next');
jr_define('COMMON_CANCEL', 'Cancel');
jr_define('COMMON_SUBMIT', 'Submit');
jr_define('COMMON_SAVE', 'Save');
jr_define('COMMON_DELETE', 'Delete');
jr_define('COMMON_RETURN', 'Return');
jr_define('COMMON_CLOSE', 'Close');
jr_define('COMMON_BACK', 'Back');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'New');
jr_define('COMMON_SEND', 'Send');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being "spammed" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href="http://www.google.com/recaptcha" target="_blank">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Public key');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Private key');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Lockfile timeout');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', "Enable Jomres' Bootstrap templates and functionality?");
jr_define('COMMON_ACTION', 'Action');
jr_define('COMMON_VIEW', 'View');
jr_define('BACKTOTOP', 'Back to top');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Weak');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Strong');
jr_define('_JOMRES_INPUTFILTERING', 'Input filtering');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Input filtering level');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Most data that is entered into the system is sanitised by first stripping any html tags, then using PHPs variable filtering functionality to make the data safe before it is entered into the database. You might want to allow certain inputs (for example the text inputs in the property details page) to include HTML. There are two levels of filtering you can use to filter this input, either Weak, or Strong.  You should only use the Weak setting if the user(s) entering the data are trusted by yourself, e.g. fellow system administrators, otherwise you should leave it set to Strong. When set to strong (recommended) you can still specify which tags to allow by editing the next setting 'HTML Purifier allowed tags'. ");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Allowed input tags');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "You can edit the tags that html purifier will allow through it's filtering system. The default is 'p,b,strong,a[href],i' (i.e. Paragraph, Bold, Strong, Links and Italics). For more information on allowed tags, please read HTML purifier's documention at <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Whilst you can change this setting, you are advised to leave it set to the default.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Allowed inputs');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "You can define which form inputs will allow html by editing this option, any input added to this list will be parsed through HTML Purifier instead of having all html stripped. Default is : 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Add more inputs by adding their from names, separated by a space.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Property details in tabs?');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Set this option to show property details in tabs. Set it to no to show them without tabs.');
jr_define('COMMON_PRINT', 'Print');
jr_define('COMMON_EDIT', 'Edit');
jr_define('COMMON_COPY', 'Copy');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Jomres is designed to work within both the Bootstrap 2 or Bootstrap 3 frameworks. Once you have installed a BS2 or BS3 theme or template, set this switch to choose which of the flavours of Bootstrap you want Jomres to work with.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Use Jomres Bootstrap templates in the frontend?');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Here are some alternatives you might want to consider.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', "Auto-detect guest's country?");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', "The system will try to automatically detect the guest's country, if they haven't booked before. You can set this option to No, and define the country you'd prefer to appear in the booking form, in the next option.");
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'About Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Getting started');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Access Control');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'developer tools');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'languages');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'income generation');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'site structure');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Manual (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'My Account (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'portal functionality');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'integration');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'reports/statistics');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'help');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Updates');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'payment methods');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Tariff default');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'This only applies to new tariffs');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Years to show');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Defines the number of years to show when editing a tariff type');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'invoices');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'account details');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Login');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Logout');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'search');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'dashboard');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'reserve');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'invoices');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'settings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'misc');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Edit country');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Country id');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Country code');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Country name');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Edit region');
jr_define('_JOMRES_EDIT_REGION_ID', 'Region id');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Country code');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Region name');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'List countries');
jr_define('_JOMRES_COM_LISTREGIONS', 'List regions');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Export definitions');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'This feature allows you to export translations that have been built up using the Language Translation feature. It will build up a text field with all of the data required to build a new language file, all you need to do is copy and paste this output into a new language file that you can put onto a new Jomres based server, or if you want to contribute back to the Jomres community.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Translate locales');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Translate lang file strings');
jr_define('_JOMRES_COM_NOTAMANAGER', "Error, the user you're logged in as is not a super manager within Jomres, you will not be able to use this feature until you've used the Property Managers feature to make yourself BOTH a manager and a Super manager. This is a security feature.");
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Property list default layout');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Stay for a minimum of');
jr_define('_JOMRES_NIGHTSFOR', ' nights for ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Agent details');
jr_define('_JOMRES_AGENT_LISTINGS', "Agent's listings");
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatically approve new properties');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'If you set this option to No then you will need to manually approve new properties. Until a property has been approved it cannot be published by a Manager/Super property manager.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Approvals');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'This property has not been approved yet. Once it has been approved you will be able to publish it.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Sorry, you cannot publish this property as it has not been approved yet.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'A new property requires approval');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'A property has been added to the system which requires your approval. Click the link to view the properties awaiting approval list : ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Your property has been approved');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', "Congratulations, your property has been approved, please click the following link to view the property's control panel : ");
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Region names are translatable');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', "Unless you're running a very fast server you are advised to leave this set to No. Due to the large number of region names, region name translation takes up a lot of memory which can slow your search results down.");
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Guest booked out.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Sorry, that email address is already in use. If this is your email address, please ensure you have logged in before attempting to book.');
jr_define('JOMRES_TAPTOCALL', 'Tap to call');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'New review for ');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'A new review has been left for ');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'New Report');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'A review has been reported for ');
jr_define('JOMRES_SUPERIOR', 'Superior');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Grand total (ex tax) : ');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Grand total (inc tax) : ');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Total tax : ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Type the two words: ');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Enter what you hear: ');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Replay the audio track ');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Download the track in MP3 format');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Visual mode');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Audio mode');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Refresh');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Help');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Sorry, that was incorrect. Please try again.');
jr_define('JOMRES_GOOGLE_MAPS', 'Google map options');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Use weather layer?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celcius');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Fahrenheit');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Use transit layer?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Enable Gmap Points of Interest (including possibly your competitors)?');
jr_define('_JOMRES_METAKEYWORDS', 'Meta Keywords');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Scan this code into your phone to get directions to us.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', "The VAT number you entered doesn't appear to be correct. You should have something like this: BE805670816B01");
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Invalid VAT Number. Please check the validity of your VAT Number with the Europa VAT Number validation webservice (VIES)');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Congratulations. We were able to validate your VAT number.');
jr_define('_JOMRES_TAX_RULES_LIST', 'List tax rules');
jr_define('_JOMRES_TAX_RULE', 'Tax rule');
jr_define('_JOMRES_TAX_RULE_INFO', 'Tax rules are used to establish different tax rules for different regions. These tax rules affect the person making the booking, if they are registered, logged in and have edited their account using the "edit my account" page. The purpose of these rules is to accommodate bookers in those areas who are VAT exempt, you may find that you do not need to create many rules, if any at all.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Import tax rates');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'We can import tax rates for the EU for you, if you wish. Note, if you use this feature then all of your existing Tax Rates will be removed.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edit tax rule');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'The VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Please enter the VAT number for this property.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'VAT number validated.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'VAT number not validated.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Business details entered here will be used on commission and subscriptions invoices.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', "You don't seem to have filled in your account details yet. To list your property on the site, we need you to complete your account details before we can go further.");
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Production or Development?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'If you set this option to Development we will enable error reporting, otherwise when set to Production that will be switched off. If this is a live server we recommend that you set this option to "production".');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Production');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Development');
//v7.3.3
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Resource details');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Tariff details');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Only');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'left!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Resource feature');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Unable to remove this resource feature, it is assigned to a resource. Remove the feature from this resource and retry.');
// v7.4
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Media Centre');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Add images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Room images');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Property main image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Slideshow images');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Clear list');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Drag & Drop files here');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Choose the resource you want to upload images for. If you can upload images for individual resources (e.g. rooms) you will be given a second dropdown to choose the specific resource. ');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'If you upload multiple images as the "Main property image" these will be used in the Property List . Slideshow images will be shown on the property details page.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'View your image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Delete image');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Upload image');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Room types icons');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Property feature icons');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Upload all files');
//8.0
jr_define('COMMON_PREV', 'Prev');
jr_define('COMMON_MORE', 'More');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Today');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Year');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Month');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Week');
jr_define('_JOMRES_DASHBOARD_DAY', 'Day');
jr_define('_JOMRES_HLEGEND', 'Legend');
jr_define('_JOMRES_HFILTER', 'Filter');
jr_define('_JOMRES_HFROM', 'From');
jr_define('_JOMRES_HTO', 'To');
jr_define('_JOMRES_HNEW_BOOKING', 'New booking');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Deposit status');
jr_define('_JOMRES_HSTATUS_GUEST', 'Guest status');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Booking status');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publishing status');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Invoice status');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Invoice type');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Approved');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Current business');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Show bookings for');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Show invoices for');
jr_define('_JOMRES_STATUS_ANY', 'Any');
jr_define('_JOMRES_STATUS_PAID', 'Paid');
jr_define('_JOMRES_STATUS_NOTPAID', 'Not paid');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Checked out');
jr_define('_JOMRES_STATUS_ACTIVE', 'Active');
jr_define('_JOMRES_STATUS_CANCELLED', 'Cancelled');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Published');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Not published');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Guests with active bookings');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Guests with past bookings');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Bookings');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Commissions');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'All my businesses');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Set as current');
jr_define('_JOMRES_ACTION_CHECKIN', 'Check in');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Check out');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'bookings');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'properties');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'guests');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'reports');
jr_define('_JOMRES_HLIST_GUESTS', 'Guests');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'List guests');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'List invoices');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Properties');
jr_define('_JOMRES_HQUICK_BOOKING', 'Quick booking');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Date of booking');
jr_define('_JOMRES_HTWO_WEEKS', 'Two weeks');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'This booking will be cancelled. Press OK to cancel the booking.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Today checkins');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Today checkouts');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Current residents');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Navigation bar location');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Default (content area)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Fixed to top');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Fixed to bottom');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Inverted navbar (colour change)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Booking number');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Bootstrap version');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Currently only applies to the frontend. This option allows you to choose whether or not to use Jomres templates that are compatible with Bootstrap 2 or Bootstrap 3. Unless you are sure that your template works with Bootstrap 3 then we recommend you leave this set to Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Show guests for');
jr_define('_JOMRES_HFIXED_PERIODS', 'Fixed periods');
jr_define('_JOMRES_HDEPOSITS', 'Deposits');
jr_define('_JOMRES_HBOOKING_FORM', 'Booking form');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Required fields');
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
jr_define('EXTENDED_CONFIGURATION', 'Extended Configuration');
jr_define('SIMPLE_CONFIGURATION', 'Simple Configuration');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Resource features');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Resource type');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edit guest type');
jr_define('_JOMRES_HEDIT_COUPON', 'Edit coupon');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edit extra');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Create multiple resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generate resources');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'How many resources?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Resources type');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Max guests per resource');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Delete all existing resources?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Please note, you are currently viewing the administrator area with Advanced Site Config set to No. If you want to see more options please set Site Configuration -> Misc -> Advanced Site Config to Yes.');
jr_define('DATATABLES_SINFO', 'Showing _START_ to _END_ of _TOTAL_ entries');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Approval');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Reject booking inquiry');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Approve booking inquiry');
jr_define('_JOMRES_STATUS_APPROVED', 'Approved');
jr_define('_JOMRES_STATUS_REJECTED', 'Rejected');
jr_define('_JOMRES_STATUS_INQUIRY', 'Inquiry');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Bookings require approval or availability confirmation?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'If set to yes, when a booking is made, it will not show up on the availability calendars (and other guests can still book those days and resource) until the property manager accepts/confirms availability for the booking. Once confirmed, booking is inserted as provisional (if doesn`t override other bookings; other guests can`t book the same dates anymore) and an email is sent to the customer to make the payment.');
jr_define('_JOMRES_ERROR', 'Error');
jr_define('_JOMRES_ERROR_MESSAGE', 'Sorry! An error occurred while trying to process this function. It has been reported for you and we will look into it.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Message');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'File');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Line');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Trace');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edit email template');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Email subject');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Email text');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Email type');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Email name');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Email description');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Site Admin New Booking Email');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Email sent to the site admin when a new booking is made, if the global Paypal gateway is enabled');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Hotel New Booking Email');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Email sent to property owner when a new booking is made');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Guest New Booking Email');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Email sent to guest when a new booking is made');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Guest Confirmation Letter');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Printable letter or email that can be sent manually by the property owner to confirm a booking');
jr_define('_JOMRES_CAN_BE_APPROVED', 'This booking can be approved. All selected resources are available for the selected dates.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'This booking can`t be approved because some of the resources are already booked for the selected dates. You`ll need to amend the booking first.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Show the Powered by Jomres link in the Jomres footer.');
jr_define('GUEST_BUDGET', 'Budget');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Use Budget feature?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Bootstrapped sites only! The Budget feature is a feature of the property list that a guest can use to highlight for them properties who's price per night is under a certain figure. The feature has some limitations in that it might not be appropriate for some sites that use many different currencies. Note, if you're using this and the Featured Listings plugin, your featured listing wrapping class is automatically changed to 'panel-primary' when the property list is shown.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Name: ');
jr_define('_JOMRES_FOR', 'For');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'night');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nights');
jr_define('_JOMRES_LIVE_SCROLLING', 'Use Live Scrolling/Infinate Scrolling in property list?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Jan');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Feb');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Apr');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'May');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Jun');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Jul');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Aug');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Sep');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Oct');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Nov');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Dec');
jr_define('DATATABLES_SEMPTYTABLE', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx');
jr_define('DATATABLES_SINFO', 'Zobrazuji _START_ až _END_ z celkem _TOTAL_ záznamů');
jr_define('DATATABLES_SINFOEMPTY', 'Zobrazuji 0 až 0 z 0 záznamů');
jr_define('DATATABLES_SINFOFILTERED', '(filtrováno z celkem _MAX_ záznamů)');
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
jr_define('DATATABLES_SHOWHIDE', 'Change columns');
jr_define('_BOOKING_ONREQUEST', 'Booking on request');
jr_define('_BOOKING_INSTANT', 'Instant booking');
jr_define('_JOMRES_COM_FONTAWESOME', 'Include Font Awesome icon set?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Set this to Yes if your template does not include Font Awesome.');
jr_define('_BOOKING_CALCQUOTE', 'Request booking');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Dear ');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Select a site');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Site id');
jr_define('_JOMRES_IS_EU_COUNTRY', 'EU Country?');
jr_define('_JOMRES_HLASTCHANGED', 'Last changed');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Hotel Booking Cancellation Email');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Email sent to the property owner when a new booking is cancelled');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Guest Booking Cancellation Email');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Email sent to guest when a new booking is cancelled');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Send test email');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test email');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'This is a test email from your booking system.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Test email sent successfully');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Test email was not sent');
jr_define('_INVOICE_TRANSACTIONS', 'Transactions');
jr_define('_OPENEXCHANGE_API', 'Open Exchange Rates API key');
jr_define('_OPENEXCHANGE_API_DESC', 'To convert prices between services you will need an Open Exchange Rates API key. You MUST have an API key to display prices correctly in Jomres, however you can <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (hourly updates, 1000 requests/month - no HTTPS, email support or advanced features). Jomres downloads exchange rates once a day so as long as you use the key on only a handful of sites, you\'re unlikely to exceed these limits. Previous to Jomres 8.3 we used an older, undocumented Yahoo feature however have discovered that using this feature is in contradiction of Yahoo\'s Terms and Conditions. As a result we have to assume that the feature may disappear at some point in the future, hence the change to using Open Exchange Rates.');
jr_define('_JOMRES_COMMISSION', 'Commission');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'If you upload multiple images for individual optional extras, only the first image will be used.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Pay now');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'This invoice in now due. Please click the button to select the payment method.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', "Here's a list of some of the great things you can purchase while making a booking at this property. ");
jr_define('GATEWAYS_INSTRUCTIONS', 'On this page you can configure any installed gateways. These options allow you to take payments for any Commission or Subscription invoices. Frontend settings can only be overridden by Paypal, all other gateways will need to be configured via the Property Configuration -> Gateways tab, however if a gateway appears in this list then it should be capable of processing both Booking deposit payments and invoice payments.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Show in property details page?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Property Details page settings');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Property management in Jomres is made only from the site frontend cpanel. On this page you`ll be able to list all properties in the system, so you can assign commission rates and approve/unapprove them (if these features are enabled). To create a new property, edit existing ones, manage bookings or any other property/bookings related tasks, you`ll have to login to the site frontend and go to the Jomres default page. There you`ll see the Jomres frontend cpanel.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Room feature icons');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Property Feature Categories');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edit Property Feature Category');
jr_define('_JOMRES_HCATEGORY', 'Category');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Show property features separated into categories?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Set this to YES to separate the property features into categories. This option affects only the property features displayed on the property details page. All other pages will display them without splitting them into categories.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Undo checkin');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Undo checkout');
jr_define('_JOMRES_STATUS_UNISSUED', 'Unissued');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Your download and support key is valid, you will be able to download plugins via the plugin manager.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Your download and support key is NOT valid, you will be NOT able to download plugins via the plugin manager.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Sub-type');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', "You haven't yet set your property sub-type. This is where you define it as something like a 5 bedroom villa or 4 bedroom cottage and it helps guests who are searching to refine their searches.");
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Give your property a sub-type');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Email templates');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Contact settings');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'From here you can override all properties contact details (email, phone, fax) so all communication with guests will be sent to you and not to the property owners.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Override listings contact details?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', "If this option is set to Yes then property email addresses and phone numbers will be replaced with the ones set in this tab. This forces all communications to be sent to your nominated email address ensuring that the guest and property owner can't bypass the booking engine and the commission charges that will result. It also means that whenever a property's description is changed the property will be set to Unapproved (if the approvals feature is enabled) and you will need to manually check the description to ensure that the managers hasn't entered telephone or email details into the text fields before approving it again.");
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Changes made to listing details require site admin verification. If you save new details, your listing will be unpublished and pending site admin approval before being visible again to site visitors. You won`t be able to receive online bookings while your listing is unpublished and pending approval.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Review booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Confirm booking request');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Amend booking request');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Mark invoice as pending');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Invoice marked as pending');
jr_define('_JOMRES_TRACKING_ENABLE', 'Send anonymous tracking data?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Select Yes to send anonymous tracking data to Jomres.net to help us understand better how you use the system.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Please ensure that your details have been completed on the Edit My Account page before attempting to make bookings on behalf of your clients.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', "Guest's contact details");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- New Guest -- ');
jr_define('_JOMRES_CHARTS', 'Charts');
jr_define('_JOMRES_CHARTS_SELECT', 'Select chart...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Income by year/month');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', "Ok, let's get started. First you need to create some rooms for this property.");
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Create some rooms now');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Research has proven that properties with lots of high quality images generate more views. Upload a main image and some slideshow pictures to improve your chances of getting bookings.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Upload an image');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Create some tariffs');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'What will guests book?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Is this property type a hotel type property, where you rent out rooms in the property, or a villa type property, where you rent out the whole property in one booking? ');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Rooms in the property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'The entire property');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Both'); // This is an interim setting that gives backward compatability for existing users who won't yet have updated their property types. It won't be selectable
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'What will guests book?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', "You'll need to complete your address details so that your guests can find you when they come to stay.");
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Update your address');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Oops, it looks like you might have forgotten to complete all the fields.');
jr_define('_JOMRES_CONTANT_US', 'Contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Welcome to your new online listing for ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Hi, and welcome to your new property on ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', "You recently added a new property to our website, and we'd like to welcome you to the family.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'You can see your new dashboard ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' here ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', "Once you've setup your property you can see how it looks to site visitors by visiting ");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' your front page.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', "(it's not published, so site visitors can't see it yet).");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', "At the top of the page you'll see a number of messages. The buttons next to these messages will guide you to the pages you need to visit to set up your property on our site. Once you've performed each of these tasks it'll be much easier for visitors on our site to find your property and make bookings online.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'If you have any questions at all, please ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'contact us');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', "and we'll be delighted to answer all your questions.");
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'All the best, our team at ');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', "You don't seem to have any tours to sell. Create a tour profile, then use the Generate button to create some tours.");
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', "Let's create some tours!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Swap currency symbol location');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Use this option to move the currency symbol from behind of, to in front of the price figure, or vice versa.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Enter your facebook page id, for example "jomres". Leave this blank to show nothing. Do not enter https://www.facebook.com or anything else.');
jr_define('COMMON_DOWNLOAD', 'Download');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Next you will need to add some tariffs. These are your basic prices.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap is not enabled!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Warning, you do not have Bootstrap enabled in Jomres Site Configuration -> Misc tab. To provide <i>some</i> functionality Jomres is currently using it\'s old, jQuery UI based templates, however these have not been worked on in several years. All current development and improvements of Jomres templates ( layout files ) are made to it\'s Bootstrap 3 template files. To get the best out of Jomres we recommend you install a Bootstrap 3 based theme for Wordpress or Joomla. Once you have done that you can enable Jomres\' Bootstrap templates in Site Configuration.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Your support key is valid. Note that this license does not allow plugin downloads.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Drag bookings to this area to cancel them');
jr_define('_JOMRES_LAT', 'Lat (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Long (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', "Before you can create a room type, we need to know if it's for a hotel type property, or a villa type property.");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Click to add new room types');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Warning, you have one or more property types with no room types. Properties need room types so that property managers can create tariffs.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Use the New button to create new Room Types.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Tours');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'No bookings/Real estate ( simple listing )');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Log file location');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres logs system activity by default to the '.JOMRES_SYSTEMLOG_PATH." location. As this file may contain sensitive information ( api keys, system paths, gateway information, guest information) we strongly recommend that you change this path to one above your web document root. If you don't understand what this means, please ask your web hosts for advice as they'll know your file system.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres logs detailed information about your system, including api keys, system paths, gateway and guest information, all of which should not be visible to the rest of the internet. Your System Log path is not set, so system logs are currently being saved to the '.JOMRES_SYSTEMLOG_PATH." directory, which is not ideal. Please visit Site Configuration -> Debugging and set a path in your filesystem that's outsite of the web root. If in doubt, please contact your web hosts as they will be able to advise you.");
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'If your CMS is installed in the root directory of your website, then a suitable location would be ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "You do not have a Google Maps key set. Due to recent changes in Google maps, all new sites will need an API key to be able to use Google map's features. Please <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>see our manual page on how to create an API key</a> and save the key in Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Google map colour scheme');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', "Right, let's start adding your property to the website. We need to collect a little information about your property here. This will allow us to set up the bare bones of your property. Once that's done, then you'll be guided through adding rooms, prices and images.");
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'The property type helps you to define how the property will be booked, for example with hotels you "sell" just one or two rooms at a time, whereas with villas you offer the entire property.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', "Note that the email address doesn't need to be the same as the one you used when registering your account. This allows you to have different addresses for different properties.");
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimum Deposit');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'You can configure the minimum deposit amount to be charged. If you do, then the "Deposit required is cost of the first night?" & "Deposit required is percentage?" settings in Property Configuration cannot be configured, instead all deposit values are a percentage and must be at least the figure you define here.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'This figure cannot be less than ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog host');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog Port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', "If you want to send system logging messages to a syslog server, you can set the Hostname or IP ( e.g. 192.168.0.2) and port (e.g. 514) here. Note, if the site is set to 'Development' then DEBUG messages will be sent. If set to 'Production' then only INFO level and higher messages will be sent. To disable logging to the remote server, empty the host and port fields.");
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP is not allowed to access the the 'openlog' and 'syslog' PHP functions. This is a server side setting, if you'd like Jomres to send messages to a syslog server, please consult your hosts and confirm if PHP is allowed to access these functions. Once enabled, you will be able to configure your syslog server's settings here.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Send an email to site admin when an error occurs?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Historically issues that should be investigated have been emailed to site owners. This can be great for keeping an eye on the running of your system as it has an awful lot of moving parts and it's difficult to keep track of all of them. Unfortunately, Spiders and Bots crawling your sites ( even friendly ones ) can inadvertently trigger fatal errors and this can cause the number of messages you recieve to be overwhelming. If that's the case then set this option to No. Jomres sends logging messages to both a set of logging files and to a syslog server ( if  your specific PHP settings allow, if they don't please contact your host ). You can manually analyse the files if you are looking for something specific ( for example, if you're developing a gateway and want to use the gateway_log() function call.) but that's a lot of information to trawl through so it's better to use something like a syslog file analyser. If you're developing on linux then there are lots of tools available to you, if on Windows then a simple tool you can use is http://maxbelkov.github.io/visualsyslog/ On this page set the 'Syslog host' to '127.0.0.1' and the 'Port' to 514 to see messages logged in that tool. ");
jr_define('_JOMRES_FAQ', 'Frequently asked questions');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Introduction');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'What is Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', "Jomres is a hotel and villa booking system that works with the Joomla and Wordpress Content Management Systems. It's a full booking system, think 'booking.com' or 'airbnb' without the expense. It's a complete toolkit that allows you to build a unique online booking service for as many properties as you want.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Can users register on my Jomres site and add their own properties?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Yes. By default Jomres allows registered users to add their own properties to your site. You can disable this in the Site Configuration > Misc tab if you need to.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Properties');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'How do I add a new property?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', "When Jomres is installed the administrator user is created as a Super Property Manager. Log into the frontend of your CMS (the public pages) as your administrator user and from there you can add new properties. <br/>You can create new managers in the Property Managers page if you want to add a new manager, however by default ( you can disable this ) any registered user who creates a property is automatically created as a property manager for the properties they create. For security reasons they cannot administer other manager's properties. This can be changed by elevating that user to a Super Property Manager in the Property Managers page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Can I import properties from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', "There are a number of ways you can import properties. The Property Import plugin allows you to import properties via CSV. This allows you to import multiple properties at once, but is an administrator only feature. If the property manager has a Beds24 account then they can import any existing properties from their account there once they've linked API keys. Another way is to use the API, there is a feature to add and remove properties however this would require you to be a developer familiar with using REST APIs to use this functionality.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Can I import bookings from another system?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', "Bookings can be imported into a property by a property manager through the iCal plugin, which offers a feature to import bookings in the property manager's menu. Also, if a property manager has a Beds24 account and their property has been linked with Beds24, then they can perform a Resend Notify action in Beds24. ");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Can I edit email templates?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Property managers can edit email templates through their toolbar under Settings > Email Templates.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Payments');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'How do I allow properties to take payments?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'You will need to install a payment gateway. Jomres has two payment gateways, which connect to Paypal or Stripe. It also offers a couple of Offline gateways, and you can purchase other payment gateways from our partners.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Which gateway should I use?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', "If you want to take a percentage of a manager's deposit for your own costs, then use the Stripe gateway. If you don't, and instead intend to use the Subscription and/or commission functionality, then you'll need to use the Paypal gateway.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'When a guest makes a payment for a booking, who gets the money?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', "That depends on how you have set up payment gateways on your site. If you're using Paypal, you can configure it to override all frontend settings, essentially making your account the only account that receives payments. If you don't choose to do that, then each property will need to setup their payment gateway account in Settings > Gateways tab. If you're using Stripe, then once the property manager has connected their account to yours ( see the Stripe documentation in the manual for more information ) then they'll receive all funds, minus a commission fee that you can configure if you choose to do so.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Troubleshooting');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', "Booking emails aren't being sent.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', "If you're having problems sending emails from the system, please check your host CMS's email settings. Jomres uses the Wordpress or Joomla settings for sending emails. If they're wrong, Jomres will not be able to send emails either.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "You can't see the payment gateway after making a booking.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "If you are logged in as a Property Manager, you will not see the payment gateway, because you don't pay yourself, silly. Only non-manager users will see the gateway when making bookings.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Jomres License');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'After buying X license, am I forced to purchase renewals once the license has expired?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', "No, if you've purchased a Starter, Business or Enterprise license, then you can continue using the software indefinately, it will not be magically cripped. The exception to this rule is if you purchase a subscription. Once a subscription has been cancelled you will no longer be able to use the plugins and you will need to uninstall them.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'My license has expired, can I upgrade Jomres anyway?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', "While you physically can, it's not recommended that you do. Once a license has expired you will no longer be able to benefit from support or download updates to plugins for your Jomres installation. This means that you should <i>not</i> upgrade your Jomres installation after the license has expired. This is because plugins regularly need to be updated to work with current versions of the system, so often your older plugins will not work on a newer version of the system. If you still want to upgrade to take advantage of new functionality, you should purchase a Renewal license, which is effectively a normal license with a 50% discount.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'What software license is Jomres released under?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', "Jomres is licensed under both the MIT and GPL licenses. Plugins downloaded by Starter, Business and Enterprise licenses are released under the same license, and are completely free and open source. Plugins downloaded for trial and subscription licenses are not released under the GPL or MIT licenses and are Ioncube encoded. This approach allows us to offer you a variety of different licenses to suit everybody's pockets.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'How do I create a property?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Click on Properties > New Property to add a new property.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'How can I see what my property looks like to guests?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Click on Properties > Preview to see how your property looks to guests.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'How do I add rooms?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "How you add rooms depends on your Tariff Editing mode. In the Normal tariff editing mode, you don't need to add rooms, as they're automatically added when you configure your prices. If you are using Micromanage or Advanced tariff editing mode, then in Settings > Rooms you can add, edit and delete rooms. You will also be able to create room features, and assign these features to those rooms. Additionally, you will be able to upload images for individual rooms using the Media Centre. When  you create rooms, you should try to ensure that they reflect your real-world rooms in your property as that will make them easier to manage.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'How do I set room prices?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "This depends on your tariff editing mode. If you are using the Normal Tariff editing mode ( Property Configuration > Tariff Editing Modes tab) then you can configure the number of rooms you have, the price, the number of people each room can accommodate and the total number of people you want in each booking. This mode allows you to set room prices for the next 10 years. <br/>If you are using the Advanced or Micromanage tariff editing modes, then you are able to set room prices for every day for years to come. You can also have multiple tariffs for the same room type, for example you can have one tariff for Bed&Breakfast and another for Bed, Breakfast & Evening meal. Unless you have a specific need, we recommend that you use Micromanage all the time, Advanced will work in the same way but you need to be careful to ensure that your different tariff's start and end dates are consecutive.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'How do I create optional extras?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extras can be added to bookings and are configured in Settings > Extras. These can be either optional or 'forced', in other words the guest cannot de-select them in the booking. You can offer different methods of charging for optional extras, and whether or not they're shown in your Property Details page. Because extras can be made to only show if a booking is within certain dates ( for example, for seasonal fruits ), you should make sure that you have set the Valid from and To dates. Once you have created optional extas, you can upload images for them through the Media Manager.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'How can I take payments online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "To take payments online, you need to have an account with an online payment provider, called a Gateway. To see the available gateways, go to Property Configuration > Gateways tab. Click on a gateway's name to be taken to it's configuration page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Can I give discounts?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Discounts can be given, there are a number of different ways this can be done. If you are making a booking on behalf of a customer, then you can set your own Deposit and Booking totals in the booking form, using the \"Override Accommodation Total\" and \"Override Deposit\" fields ( guests can't use this feature ). Another way to give a guest a discount is to create discount coupons, which can be configured so that they can only be used between certain dates ( Valid from/to ) or applied only when the booking falls between certain dates ( Booking valid from/to ). This discount coupons can be assigned to just one guest, or if you want you can print out the coupons. The printout includes a QR code which guests can scan into their phones that takes them to your booking form with the discount code already applies. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'When I click New booking, I am taken to the Contact form, why?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Before you can take bookings online, you must first configure some prices (tariffs) for each room type you have in your real-world property. Once you have created some tariffs, you will be able to take bookings.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'What are Black Bookings?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Black bookings are bookings that have been created to take a room or rooms out of service. They're not associated with any guests and are useful, for example, if a room needs to be refurbished.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Images');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'How do I upload images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "To upload images, you need to visit the Settings > Media Centre page. On this page you will see several panes. At the top you might see some notes, and underneath them you'll see a dropdown. This dropdown allows you to select which resource you're uploading images for. <br/> On the right is a column with Add Images, Clear List and Upload all. Click Add Images and select some images from your desktop or mobile device. When you've done that, the column will change to a list of thumbnails. From here you can upload one or more images for your resources.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "What is the 'Main' image?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'The Main image is the one that appears in search results and in your property header ( the area at the top of pages that show something about your property ). You should choose an image that displays your property in the best possible light. To upload a main image, make sure Property Main Image is selected in the dropdown list at the top left, then upload one or more images. If you upload more than one image, then all images will be used in the search results page displaying as a small slideshow.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'What are room feature icons?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Room features can be created by users of Micromanage or Advanced tariff editing modes. These can be linked to one or more rooms, and are displayed in the booking form. Once you have created a room feature, you can upload an image for that feature by first selecting Room Features Icons in the dropdown in the Media Centre, then selecting the room feature's name from the dropdown that will appear underneath.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'How do I upload room images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Rooms can be created by users of Micromanage or Advanced tariff editing modes. Once one or more rooms have been created, you can upload multiple images for each room through the Media Centre (select the room name/number after selecting Room Images in the dropdown). These images can be seen in a slideshow by viewing the Preview page and selecting the Our Rooms tab then clicking on the Availability link.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow images are seen in the Property Details ( Preview ) page, next to the Book Now button.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar to the rooms and room features, you need to create an Extra first. Once that's done, you can select Extras in the top dropdown. When you've done that, you need to select the name of the Extra from the dropdown list below. When the name is selected you can upload one or more images for that Extra.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'How do I setup currency symbols?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', "You don't. All currency symbols are already stored in the system, and it's up to property managers to select the currency that's right for them in the Property Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'How do I enable multiple currencies?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', "Jomres has functionality to convert prices from one currency to another automatically. First you need to visit the Site Configuration > Currency Conversion tab. In there you will find links to two online services. The first service, once the API has been saved, allows Jomres to download currency conversion data once a day. The second enables IP based geolocation for users. Request a free API key from each service. With these two services combined, Jomres can detect the user's local currency, and display prices of properties in both the guest's local currency, plus the hotel's own currency. If you don't setup these API keys then Jomres will default to the Euro currency symbol. If you want you can set a global currency code. This means that property managers will not be able to select any other currencies, however potential guests will still see prices in thier own local currency unless they've used the currency switcher feature to change the currency that prices are displayed in. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'How do I save descriptions in multiple languages?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "To save descriptions in multiple languages, first visit the Settings > Property Details page. Save the description for your property there. Next, change the language that you're viewing the site in. Now go to the Settings Property Details page again, and save the details again. So, if the site is capable of showing both English and Spanish (or any other) languages, you would select English, enter the description in English then click Save. Next, change your current language to Spanish, then save the new Spanish description. This works for all inputs on that page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'How many properties can I list?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', "There's no coded limit to the number of properties that you can list, the only limitation is in the physical limitation of the server itself. If it's a server with many other accounts on then resources will be limited, if, on the other hand it's a dedicated or virtual dedicated server, then you will be able to list many more properties.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'No, you cannot. You can only administer properties you have created or been assigned to as a property manager.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'What are Guest Types/How do I change per person per night?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "In Settings > Property Configuration > Tariffs and Currencies tab, you can decided whether you want to charge per person per night. If you charge per person per night, you will need to create one or more guest types. You can create a simple guest type, where you just give them a description ( e.g. 'Persons' ), or you can create several different guest types, for example 'Adults' and 'Children under 10'. For the children, if you want to offer a discount of 50% then you'd set 'Is percentage' to Yes, and the Variance value to 50. Rooms have base rates, this setting allows you to adjust the price of the room based on the guest type.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room Features?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Room features are things that make the room stand out. They can be something simple like Tea and Coffee making facilities, or they can be things that really make the room rise above the others, like 'Views over the bay'. Once you have created a Room Feature, you can upload images for that feature in the Media Centre. These room features can be viewed on the room availability page, and if you've configured your property to show the Classic Rooms list style ( where guests can selected exactly which room they want to book ) then they can use the room features to filter ooms shown in the booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Can I make a user a property manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', "Yes you can, through the Property Managers page under User Management. If the user is already registered, in the input at the top of the Property Managers page type the first few characters of their username and their username will appear underneath. Click on their username and you will be taken to a page where you can configure which properties they have access to. If they're not already registered, you'll first need to use your host CMS's user management pages to add them as a user to the CMS.<br/><br/> A word of advice : If you intend to charge property managers for listing their properties on your site, either through taking commission via the Stripe gateway or subscriptions/commission functionality, we don't recommend that you add users in this way. In this instance, only super property managers should be added using this process, and when they are added you shouldn't select any properties in the list underneath. All other users should be encouraged to create properties themselves in the frontend. This will add them as property managers automatically and ensures that the correct user is billed.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Plugins');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'What is the Plugin Manager for?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'The Plugin Manager is a key tool in Jomres. It allows us to distribute the most up-to-date version of Jomres plugins to you through an automatic download and installation feature.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Why do I see a warning about Ioncube Loaders when I click on the Plugin Manager page?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "You have saved a Trial license key in Site Configuration, but your web server doesn't offer the latest Ioncube Loaders. Please ask your hosts to install the loaders, which can be found  <a href='http://www.ioncube.com/loaders.php' target='_blank'>on this page.</a> If you have purchased a full, non-subscription license and you think you're seeing this in error, you may have forgotten to enter your full license key in the Site Configuration page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'How do I install a plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', "Assuming that you have a valid license key number saved in Site Configuration, all you need to do is click the Install button next to the plugin name in the plugin manager. Jomres will install the plugin for you and bring you back to the plugins page afterwards. Occasionally, instead, you might be taken to a Discovery page if you're running Jomres in Joomla. Just click the Discover button to install the plugin.<br/><br/>NOTE Don't install all of the plugins, they don't all work together ( by design ). You could end up with blank pages in the booking form. Instead, identify the plugins you need and experiment with each one.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Site Structure');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'What does Site Structure mean?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', "Site Structure in Jomres refers to the various elements of your site that make it unique. It defines the Property types you list for ( e.g. villas or hotels ) and the room/sub types for those property types. So, if you're selling self-catering holidays, then you would be selling rentals of something like a chalet or villa. Different chalets could have different numbers of rooms, balconies etc. In the case of Hotels or B&Bs, you're selling rooms <em>in</em> the property, and they'd be double bedrooms, singles etc. To help clarify this, a default installation already has several rooms and property types created for you to help you understand. If you want to sell Tours, do not try to create a new property type without reading the section on Tours first.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'What are Property Types?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'In this system, a Property type refers to, literally, the type of property. This can be a hotel, a villa, an apartment. Property managers cannot create Property types because Property types are an item that can be searched by guests. To ensure that your search functionality stays nice and neat and tidy, only Site administrators can create property types.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'What are Property Features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', "Property features are things that make a property unique. For example, one Property Feature could be that it's 'Close to the beach' whilst another hotel could have the feature that it's inside a national park, offers bridleways, something like that. Like Property Types, managers cannot create new features, they can only select from the ones you create. Property Features can have images assigned to them. First you need to upload feature images through the Site Strucutre > Media Centre > Property Feature Icons dropdown. Upload as many feature icons as you want, then when you create a Property Feature you can choose it's image.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'What are Property Feature Categories?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', "Property features are displayed in the Property Details page, among others. On the Property Details page, features can be displayed grouped by categories, for example 'Living Area', 'Accessibility' etc.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'What are Room features?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', "Property managers that use Micromanage or Advanced tariff editing mode are able to edit their rooms directly. They're also able to create things called Room Features which are displayed in the Room availability page for each property. If they use the Classic rooms list display in the booking form, then guests are able to use Room features to filter out rooms before selecting one or more. On the Site Structure > Room features page Site Managers are also able to create room features, and these features can be seen in all property booking forms where the property uses the Classic Rooms list. Basically, it's a Global Room feature. These Room Features can be configured to only be shown to certain property types, and images for these room features can be uploaded through the Site Structure > Media Centre page.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Why is there a page to edit countries/regions?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', "You'd think that a list of countries was fairly immutable, but you'd be wrong. Over the years, when maintaining a list of countries, we've see many changes. As a result, we learned that it was easiest to allow Site Managers to define the countries they'd like to show on the site. This allows the die-hard Catalan to display their province as a unique country, if that's the statement they'd like to make. The same goes for other regions of the world.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Localisation/Translation');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'How do I translate things?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', "Translation of labels/strings is done through the Languages menu options, mainly the Translate Language File/Translate Locales pages. Because the language files are very large, when you click on this page they can take a while to load. <br/><br/>Let's look at an example. Let's say that you want to translate Germany to Deutschland. First click on Translate Locales. Next check the language dropdown in the top right from English to German. Next, scroll down the page until you get to Germany. You can see it has a dotted underline. This means you can translate it. Click on the word, you will see a popup containing the word 'Germany'. Change this to 'Deutschland' and click the green tick. If your host CMS is configured to offer German language pages to site visitors, then the word 'Germany' will now be shown as 'Deutschland'. This concept applies through-out Jomres. <br/><br/>On the Property Manager pages, Property Managers might also see a Label Editing Mode dropdown at the top of their pages. When this is set to On, then they will also be able to make changes in the frontend, however those changes will only affect their currently Active property, so for example they can easily change the word Tariffs to Prices for just one property if that's what's required.");
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Tours');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'What are tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', "This may sound like a silly question, but in fact it's not. Over the years we've learned that different cultures have different perceptions of what a 'tour' is. As a result, expectations of selling tours vary wildly, so before we discuss tours, first we will define what we think of tours as. <br/> A tour is a simple journey or visit to view an attraction or monument. A stay in a hotel is not a tour, however tours can be participated in while staying at a hotel.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'How do I use Jomres to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'To address the question of selling tours in Jomres, you will first need to install the Jintour plugin. This plugin allows you to create tours that are sold as part of vacation rentals. It also allows you to create properties that are exclusively for selling tours. Once this plugin has been installed, then property managers will be able to create Tours and Tour properties in the frontend.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'What is the Jintour plugin?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour stands for Jomres INtegrated TOURs. It allows you to create simple, limited resources that can be booked out, that are not rooms in a property. Whilst the plugin is designed to allow bookings of tours primarily, they can be used for many things, not just tours. They can be used, for example, by a ski lodge that wants to rent out skis and gear. As this equipment will have limited availability, you can use the Jintour plugin to allow guests to reserve and pay for this gear at booking time.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'How do I sell tours and vacation rentals in the same booking?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', "In this scenario, you've got a hotel, and you want to sell tours to a local attraction. Log into the frontend and go to the hotel you've created. Next, click on Settings > Tour/Activity management. On this page, follow the onscreen instructions to first create a tour profile, then generate tours. Once that's done, you'll be able to sell both tours and room bookings and optional extras alongside each other in the same booking form.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'What about if I only want to sell tours?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', "First you will need to create a new property in the frontend. When you do, ensure that you set the 'Property type' to Tour. When you've created this new property, then you will be able to create tours again through the Settings > Tour/Activity management page. You will also be able to offer optional extras as in normal properties, the only thing you won't be able to do is configure rooms, room features or tariffs as you're not selling rooms in this property.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'How can I create a Tour/bookable resource that can be seen in all properties booking forms?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', "In the administrator area of your site, visit the Portal > Functionality Tour/Activity Managenent page. The tour profile/generation process is the same as used in the frontend, however any tours generated here are seen in the frontend. One typical scenario where this may be used is if the site administrator is organising events around the country, and they want to sell hotel bookings. They would create the participating hotels in the frontend as normal, setting room prices etc, then the 'tours' in this case would actually be the attendance fee for the event itself.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', "Ok, I've installed Jomres, what next?");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', "The very, very first thing you should do, now that you've installed Jomres is click Help on the menu to the left, then click Getting Started. Seriously, go away and do that now.");
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Manage Properties');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "You do not have a IP Detection API Key set. This is required to allow the system to automatically detect the user's location and set their currency and country automatically. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "You do not have an Open Exchange Rates API Key set. This is required to allow the system to automatically download and use currency exchange rates. Please <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>see our manual page on how to create an IP detection API key</a> and save the key in Jomres > Site Configuration > Currency Conversions / Currency Codes.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Permit number');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'Some countries legislate that you must display a permit number for your property. If you have such a number, enter it here and it will be added to the property header section.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', "The <strong>plg_content_jomres_asamodule_mambot</strong> plugin MUST be installed and enabled for these shortcodes to work. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "You must ensure that the <strong>'Jomres Shortcodes'</strong> plugin is enabled. This can be found in the Jomres Plugin Manager. If this site was built using one of the Quickstarts then it's probably already installed.");
jr_define('SHORTCODE_TASK', 'Task');
jr_define('SHORTCODE_DESCRIPTION', 'Description');
jr_define('SHORTCODE_ARGUMENTS', 'Arguments');
jr_define('SHORTCODE_EXAMPLE', 'Example');
jr_define('INTEGRITY_CHECK', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_DESC', 'This feature allows you to check that the filesystem matches that supplied in the current version of Jomres. This is useful in ensuring that all files were updated correctly after installation/upgrade. Files in Red are missing, files in Orange exist but are different from those supplied in the current build. Only fiiles that are potential problems will be listed here.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Filesystem Integrity Check');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Local hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Version hash');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Awesome! No problems were found.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Google maps marker');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Read more');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Read less');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Tourist tax');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Tourist tax rate');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Set the tourist tax rate. The tourist tax is only calculated after the initial booking is generated, and is added to the booking confirmation page, in the extra services box.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Is percentage?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Set this to Yes if the tax is a percentage or No if it's a flat fee.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Affects the entire booking value?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Set this to Yes if the tax is to cover the entire value of the booking, so it is a percentage of both the accommodation plus any extras, or No if it is only calculated based only on the value of the accommodation total. If the option 'Is Percentage' above is set to No, then this option is ignored.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Please be aware that a tourist tax will be added to this booking. You will be able to see the tax on the review booking page.');
jr_define('NO_LICENSE_MESSAGE', "You have not saved a license number in Site Configuration, therefore you will not be able to download plugins. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('INVALID_LICENSE_MESSAGE', "You seem to be using a license number that's invalid or has expired. Once you have a valid license key saved then you'll be able to install any plugins that are listed as Core plugins.");
jr_define('VALID_LICENSE_MESSAGE', "Congratulations, you're using a valid license number and can install Core plugins through the Jomres plugin manager.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any e.g. Optional Extras or Rooms, then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'This page allows you to upload images for your property and the things you offer. It has one main button, and a second button that allows you to select specific resources to upload images for. So, the Main property image and the Slideshow will only show one button but if you have created any Optional Extras then you will see a second button where you can upload images for those specific resources.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>First choose the image(s) you'd like to upload by clicking Add Image or using Drag and Drop. These will appear in the column on the right hand side.</li>
  <li>Above this area, use the \"Choose the resource\" button to choose which resource you want to upload images for. You may be offered the option to choose a specific resource underneath. </li>
  <li> Once you've chosen a resource you can then click the Upload Image button under an image to associate it with that resource. Once an image has been uploaded, it will disappear from the column on the right hand site, and appear in the left.</li>
  <li>Use the Trash button next to existing images to remove images you no longer want to be shown.</li>
  <li>You can change the order that files are shown in the slideshow by renaming them before uploading them, as they are displayed in pages in alphabetical order.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Next to the Resource button, you may see a Preview button. If you click on this you will see a popup that shows you how the currently uploaded images will look in a page. This helps to give you an idea of how the images will look to your customers.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "There is no limit to the number of images you can upload. Images are automatically resized when they are uploaded. You can only upload JPG and PNG files.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideally any images you upload would be at least ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " pixels wide, otherwise they may look fuzzy after they've been uploaded.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Any images you upload cannot be more than ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " in size.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Choose the resource you want to upload images for");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specific resource");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Images already uploaded for this resource");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Text formatting');
jr_define('_JOMRES_MARKDOWN_DESC', 'You can enter text here using simple Markdown formatting. You don\'t need to know any HTML, just use the buttons to make the information look like you want, or format text according to these examples.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Emphasis');
jr_define('_JOMRES_MARKDOWN_BOLD', 'bold');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italics');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'strikethrough');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Big header');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Medium header");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Lists");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Generic list item');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numbered list item');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Links');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Text to display');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Quotes');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'This is a quote.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'It can span multiple lines!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Images');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tables');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Column');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Show property images as slideshow in property list?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'If set to yes, a slideshow of property main images will be displayed. If set to no, then the first property main image will be displayed.');
jr_define('EDIT_CMS_USER', 'Edit CMS user');
jr_define('BOOKING_MADE_BY', 'Booking made by');
jr_define('_JOMRES_ROUTER_FEATURES', 'Amenities');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Room Types');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'External booking form URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Here you can set an external URL if you want to use a 3rd party website for making bookings. All jomres booking buttons will point to this URL. Leave this field blank if you want to use the Jomres booking form.');
jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (short room description/subtitle)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Room Description');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Guest blacklisted');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Save jomres session files to disk or to database. Recommended: database');
jr_define('_JOMRES_MAP_HEIGHT',"Map height (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Map zoom level ");
jr_define('_JOMRES_MAP_MAPTYPE',"Map type ");
jr_define('_JOMRES_TEMPLATE_PACKAGES',"Template Override Manager");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Template packages are plugins that can provide override templates for various core Jomres template files.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"This page lists any template files that can be overridden by a template package's template files. If you want to override a certain template file, click on the edit button for that file, on the next page you will be able to choose which version you want to override with. Note, these overrides take priority over both Jomres Core and any Wordpress or Joomla theme/template overrides. You can disable an override by deleting it in the List Template Overrides page.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Template name");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Current path");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Not overridden");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"You can choose which template file to override the Core template files by changing the dropdown");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Percentage Rooms Booked");
jr_define('_JOMRES_SELECT_WIDGETS',"Select widgets");
jr_define('_JOMRES_INTERVAL',"Interval");
jr_define('_JOMRES_TIMELINE',"Timeline");
jr_define('_JOMRES_CPANEL_GRID',"Control panel home layout");
jr_define('_JOMRES_CPANEL_GRID_DESC',"Select the grid layout of your frontend property management control panel home page.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES',"Google Map Markers");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES',"Town images");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING',"Changing the property type will delete all rooms, tariffs, property settings and reset availability.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager. If you have Core plugins installed, but do not have a valid Jomres license then we <em>do not</em> recommend that you update Jomres as older plugins often may not work with newer versions of Jomres. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Please note, after updating you must update any Jomres Plugins that are already installed, through the Jomres plugin manager.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "If you would like to update Jomres and it's plugins you will need a renewal license. Please visit <a href='https://www.jomres.net/pricing' target='_blank'>our site</a> for more information. In most cases these licenses are 50% of the price of a full license. Please ensure that you have logged into our shop before attempting to purchase a renewal.");
jr_define('_JOMRES_PAYMENT_METHOD_USED',"Payment method : ");

jr_define('_JOMRES_PRICES',"Buy Jomres");


jr_define('_OAUTH_TITLE',"App key management");
jr_define('_OAUTH_APPS',"REST API client details");
jr_define('_OAUTH_IDENTIFIER',"Identifier");
jr_define('_OAUTH_APIKEY',"Client ID");
jr_define('_OAUTH_SECRET',"Secret");
jr_define('_OAUTH_CREATED',"Created/Updated App");
jr_define('_OAUTH_CLIENT_ID_INFO',"The Client ID and Secret are created for you. The Identifier is so that you can easily identify this key pair.");
jr_define('_OAUTH_SCOPE_TITLE',"Permissions ( what the client can do ) ");
jr_define('_OAUTH_SCOPE_CATEGORY_USER' , "User permissions");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES' , "Property permissions");

jr_define('API_DOCUMENTATION_TITLE',"App REST API documentation");

jr_define('_OAUTH_CONFIG',"API Core configuration");

jr_define('_OAUTH_CONFIG_SHOW',"Show API client configuration options in Jomres main menu?");
jr_define('_OAUTH_CONFIG_SHOW_DESC',"You may choose to not show the API client configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define( '_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define('API_METHODS_TITLE',"API Methods");
jr_define('API_METHODS_DESCRIPTION',"This list of methods is based on your installed API feature plugins and is automatically generated. If you install or delete an API feature plugin you must visit this page to rebuild this list of API methods available on your site.");

jr_define('_OAUTH_REDIRECT_URI',"Redirect URI");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER',"Give me a name that's meaningful to you, such as My Phone");

jr_define('_OAUTH_GRANT_TYPES',"This system supports two grant types , Client Credentials and Implicit. If you are using the <em>client_credentials</em> flow then you will need both the client id and the client secret. If using <em>implicit</em> then your app would send just the client id and you would log into the system to explicitly authorise that app.");

jr_define('_OAUTH_IMPLICIT_NOTES',"To use the <em>implicit</em> grant type flow, you will need to use this url to authorise your apps. When this url is called, and you have authorised the app the system will issue a token that you apps will then use to call this system's API ");
jr_define('_OAUTH_AUTHORISATION_URL',"Authorisation URL");

jr_define( 'WEBHOOKS_CORE', 'Webhooks' );

jr_define('_WEBHOOKS_CONFIG_SHOW',"Show Webhook configuration options in Jomres main menu?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC',"You may choose to not show the Webhook configuration options in the 'My Account' section of the Jomres mainmenu. You could instead decide that you wanted to show them on other pages using Jomres Shortcodes.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE',"Webhooks documentation");

jr_define( '_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Displays the API core documentation page. The API Core allows users to create API clients, which are then used to access the API functionality which is outlined in the API Core documentation." );

jr_define( '_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Displays the API core administration page, where property managers can configure API clients. Note that this is a registered user only feature, so users must be registered and logged in before they can see this page." );

jr_define( 'WEBHOOKS_INTEGRATION_EDIT', 'Edit Integration' );
jr_define( 'WEBHOOKS_INTEGRATION_ID', 'Integration ID' );
jr_define( 'WEBHOOKS_INTEGRATION_URL', 'URL or Name' );
jr_define( 'WEBHOOKS_ENABLED', 'Enabled' );

jr_define( 'WEBHOOKS_AUTH_METHOD_SELECT', 'Authentication method/Integration' );

jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Any webhooks you create will not be triggered as you are not assigned to any properties. Super property managers are not typically assigned individual properties, so you may need a new user for webhook creation.' );
jr_define( 'WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Any webhooks you create will be triggered against the following properties : ' );


jr_define( 'PORTAL_REVIEWS_LIMIT', 'Reviews limit' );
jr_define( 'PORTAL_REVIEWS_LIMIT_DESC', 'Use this setting to limit the number of reviews shown in the property details page.' );
jr_define( 'PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Show all reviews' );

jr_define( 'VIDEO_TUTORIALS', 'Video Tutorials' );

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum deposit value' );
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "If the calculated deposit is less than this figure, then set deposit to this value instead. This figure might itself be over-ridden if it does not satisfy the site's minimum deposit setting. Leave it set to 0 to not use the setting." );

jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'To increase your site speed, we recommend importing details of the existing site and properties images to database.');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Import existing images details to database');

jr_define( '_JOMRES_S3_ACTIVE_DESC', 'Experimental feature. If enabled, images uploaded using the media centre feature will also be copied to your Amazon S3 bucket and served from your Amazon S3 bucket url. When enabling this the first time, you`ll also be promted to import existing images to your S3 bucket.');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN', 'CloudFront domain');
jr_define( '_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Replace your default Amazon S3 domain with your CloudFront domain');
jr_define( '_JOMRES_S3_SSLTLS_DESC', 'Recommended to be enabled. For Windows and Mac OSX only, if libcurl wasn`t built with Schannel or Secure Transport support (the native SSL libraries included in Windows and Mac OS X), you should set this to No.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'You`ve enabled the Amazon S3 integration, so you`ll have to copy all existing images to your S3 bucket. Images are now served to your site visitors from your Amazon S3 url, so you`ll need to copy them first to your S3 bucket, otherwise they won`t be visible to your site visitors.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Once you click this button, please do not interrupt the process and wait for a success or error message. Depending on server speed, this may take a while to complete.');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Copy existing images to Amazon S3 bucket');


jr_define( 'JOMRES_INCOMPLETE', 'Incomplete' );
jr_define( 'JOMRES_WATING_APPROVAL', 'Pending approval' );
jr_define( 'JOMRES_GOOGLE_MAPS_PDETAILS', 'Property details map' );

jr_define( 'HAS_STARS_TITLE', 'Allows stars classification?');
jr_define( '_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Force reimport image details to database');
jr_define( '_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Force reupload images to S3 bucket');
jr_define( '_JOMRES_UNINSTALL_TABLES', 'Delete all Jomres data when uninstalling?');
jr_define( '_JOMRES_UNINSTALL_TABLES_DESC', 'If set to yes, Jomres will delete all it`s database tables when uninstalled. This will delete all Jomres data from db and can`t be undone.');

jr_define( 'TRANSACTION_IDS', 'Transaction id');
jr_define( 'PAYMENT_METHOD', 'Payment method');
jr_define( 'POA_DISPLAY_PRICE', 'POA Price');
jr_define( 'POA_DISPLAY_PRICE_DESC', 'When properties are shown in a list, the system will attempt to find a valid price from configured tariffs based on either today\'s date, or if dates were used in a search, then based on those dates. If it cannot, then it will show POA (Price on application), meaning that the guest should contact you to get a price. If you want, you can configure a price here that will be shown instead of the POA text. This figure would be a "fallback" price to display if no other price can be determined.');

jr_define( 'PLUGINMANAGER_INSTALL', 'You need to install the plugin manager before you can install Jomres plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_REINSTALL', 'You need to update the plugin manager before you can update any installed plugins, would you like to do that now?');
jr_define( 'PLUGINMANAGER_INSTALL_BUTTON', "Let's do this!");

jr_define( 'INCLUDEINFILTERS', 'Include in filters?');
jr_define( 'INCLUDEINFILTERS_DESC', 'Property feature filters in Ajax Composite Search can become very long, so you can set this option to No to prevent this feature from showing in the property feature list.');

jr_define( 'REVIEW_REMINDER_PT1', "You have ");
jr_define( 'REVIEW_REMINDER_PT2', " booking(s) that you have not left a review for yet. Please leave a review.");
jr_define( 'BOOKINGS_AWAITING_REVIEWS', "Bookings waiting for reviews");
jr_define( 'REVIEW_NAG', "Nag guests for reviews?");
jr_define( 'REVIEW_NAG_DESC', "Once a guest has been booked out from a booking, the system will remind them to post a review for their booking. Set this option to No to disable this reminder.");

jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Send copies of the booking emails to site admins?");
jr_define( 'SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "When enabled, copies of the booking emails sent to property managers will be sent to all site admins too.");

jr_define( 'HIDDEN_ADDRESS_SETTING', "Hide address?");
jr_define( 'HIDDEN_ADDRESS_SETTING_DESC', "If you set this option to Yes, then only guests who have already placed a booking on your property will be able to see the property street address. You might want to use this setting to hide the property's exact location if, for example, it is routinely left unattended.");
jr_define( 'HIDDEN_ADDRESS_PLACEHOLDER', "HIDDEN");
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optimize images on upload?');
jr_define( '_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'When enabled, images will be optimized for web (file size can be up to 75% smaller). Depending on the uploaded image type, your server needs to have one or more of these libraries installed by the hosting provider: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define( 'DATABASE_INTEGRITY_CHECK', 'Database Integrity Check');
jr_define( 'OBSOLETE_FILES_CHECK', 'Obsolete Files Check');
jr_define( 'DATATABLES_COLVIS', 'Column Visibility');

jr_define( 'API_TOKEN_LIFETIME', 'API token lifetime');
jr_define( 'API_TOKEN_LIFETIME_DESC', 'How long an API token remains valid for, in seconds. 86400 = 1 day, 31536000 = 1 year');

jr_define( 'ENCRYPTION_TITLE', 'Encryption' );
jr_define( 'ENCRYPTION_FILE_LOCATION', 'Encryption file location' );
jr_define( 'ENCRYPTION_FILE_LOCATION_DESC', '**Never delete the encryption file** <br/> User data is stored encrypted in tables to ensure that "data at rest" is protected securely, in accordance with GDPR recommendations. By default the encryption key is stored in the file "encryption_key.class.php" in the root of your Jomres installation (typically /public_html/jomres). You can change where the file is stored here. If you do change the location, you must MOVE the file, do not wait for Jomres to create a new version otherwise you will not be able to decode your guests\'s details.' );

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'The information you save here will be used on invoices generated for this property');

jr_define( '_JOMRES_GDPR_POLICIES', 'GDPR Policies' );
jr_define( '_JOMRES_GDPR_POLICIES_DESC', 'Here you can configure how long after a booking or invoice has been created it is removed from the system to ensure that you are compliant with the GDPR.' );

jr_define( '_JOMRES_GDPR_BOOKING_RETENTION', 'Booking Retention period (in days)' );
jr_define( '_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'How many days after a booking departure date should the booking be deleted? When it is deleted, both the booking and the invoice are removed. A typical retention period might be 365 days.' );

jr_define( '_JOMRES_GDPR_INVOICE_RETENTION', 'Invoice retention (non-booking) period' );
jr_define( '_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Other invoices, such as commission and subscription invoices, are not tied to bookings. As a result they will not be deleted when booking invoices and contracts are deleted. Depending on your country, and your own business practices, you will need to configure a different retention period. A typical retention period might be 3653 days, which is 10 years.' );


jr_define( '_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Your data' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Some features of this website need to store information about your visit. This is used only to provide service to you, is never shared with anyone else and is deleted when no longer needed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'DO YOU GIVE US PERMISSION TO STORE THIS INFORMATION??' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'In detail' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'You must consent to us storing this data for you to be able to make bookings on this site. Regardless of whether or not you consent to your data being stored, we will store a cookie on your computer to tell us whether or not you have opted in. This helps us to ensure that we do not constantly ask you whether or not you want to opt in or out and it does not contain any Personally Identifiable Information (PII). If you change your mind you can visit the "App permissions" page at any time to opt in or out.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'The information is stored for different time periods depending on the nature of your visit. So, if  you are just looking around we will store approximate geographical location (country level) information. If you perform searches, then to make search forms more user friendly we will store the last things you searched on. This information is typically stored for a maximum of 24 hours and is only used to make your visit more pleasant.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'When you make a booking with us, by necessity more information is stored.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'The technicalites of the booking form are captured and retained for a maximum of 60 days. This is required so that On Request bookings can be turned into full bookings once a booking is approved, and for analysis by our teams in case there is an issue with a booking. If you were not logged in when you made a booking then we will email you a username and password so that you can view your booking history and exercise your Right To Be Forgotten (RTBF) if you wish to do that.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Data entered into the booking form, for example name, email address, real address is stored for a maximum of 365 days after the booking\'s departure date. This information is stored in encrypted form in our database so that only authorised people can view it. If you make a booking then by law we must store your PII whilst the booking is valid. Once the booking has completed, either because it has been cancelled or you have been checked out, then you will be able to exercise your RTBF by logging in and visiting the "Your data" page. Invoice information for completed bookings will still be securely stored in our database to ensure that we abide by relevant tax laws but you will be able to remove all other PII after the booking is completed.' );
jr_define( '_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'When you consent to your information being stored as described above, we are legally obliged to store this consent in our database. This information will include your IP number and the content of the opt-in form. We will retain this consent notification indefinately (this is a legal requirement).' );

jr_define( '_JOMRES_GDPR_CONSENT_NOT_SET', 'You have not yet told us if we can collect Personally Identifiable Information about you' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_IN', 'You have consented to us collecting the necessary Personally Identifiable Information to take bookings' );
jr_define( '_JOMRES_GDPR_CONSENT_OPTED_OUT', 'You have told us to not collect Personally Identifiable Information' );

jr_define( '_JOMRES_GDPR_NOCONSENT_INTRO', 'You have not given us permission to collect your private data' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'For you to perform certain actions on this website we have to collect Personally Identifiable Information about you, but you have not given us permission to do so.' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Change your permissions' );
jr_define( '_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Continue viewing properties' );

jr_define( '_JOMRES_GDPR_APP_MENU_ITEM', 'App permissions' );

jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Guest data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'These are the details that are stored for you by the various properties. Different hotels may hold different records, depending on what you entered when you made the booking.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'You do not have any data stored with any hotels in this system' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Profile data' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'This is the main data set we hold for you, distinct from those you have shared with different properties.' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'You have not saved any profile information' );
jr_define( '_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Here is the Personally Identifyable Information that we store on this website for you. It is constructed in JSON (JavaScript Object Notation) format which is a lightweight data-interchange format. It is easy for humans to read and write and it is easy for machines to parse and generate.' );

jr_define( '_JOMRES_GDPR_REDACTION_STRING', 'Anonymised' );

jr_define( '_JOMRES_GDPR_MY_DATA', 'Your data' );
jr_define( '_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'By accepting these Terms of Use Agreement (this “Agreement”), you agree that:

<ul>
	<li>
		You are authorized to book hotels through this website;
	</li>
	<li>
		You are at least 18 years of age;
	</li>
	<li>
		You possess the legal authority to create a binding legal obligation;
	</li>
	<li>
		You will use the Site in accordance with this Agreement;
	</li>
	<li>
		You will only use the Site to make legitimate reservations for yourself or for another person for whom you are legally authorised to act;
	</li>
	<li>
		You will inform such other persons about this Agreement that applies to the reservations I have made on their behalf, including all rules and restrictions applicable thereto;
	</li>
	<li>
		All information supplied by yourself to the Website is true, accurate, current and complete; and
	</li>
	<li>
		You will safeguard your account information and will supervise and be completely responsible for any use of your account by yourself and anyone other than you.
	</li>
</ul>
' );
jr_define( '_JOMRES_GDPR_MY_DATA_LEAD', 'Security and transparency are important to us.' );
jr_define( '_JOMRES_GDPR_MY_DATA_INTRO', 'We take our responsibilities regarding storing your data very seriously. All Personally Identifiable Information (PII) is stored encrypted in our database using industry standard algorithms to ensure that only authorised users can view this information.' );

jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'You can download all of the PII we store for you.' );
jr_define( '_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Download now' );

jr_define( '_JOMRES_GDPR_MY_RTBF_LEAD', 'Right To Be Forgotten (RTBF)' );
jr_define( '_JOMRES_GDPR_MY_RTBF_INTRO', 'We believe that you should be able to <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">delete</a> your <a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Personally Identifiable Information </a>if you want and if it is practicable. ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'You are not registered on this site. Your general location (country) and IP number will be stored for a maximum of 24 hours and then deleted.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'You are not registered on this site and you have opted out of data collection. We have not stored your PII.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'You are registered on the site and do not have any pending or active bookings. We can anonymise most information we currently hold for you. Would you like to do that? ' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Note : This does not delete your account, it simply anonymises our records so that your account cannot be associated with you as a person. By law we must continue to store your PII for invoicing purposes, however we will delete all guest records.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'You are registered on the site, however you have bookings outstanding and we cannot anonymise your data at this time. This data will be retained for a maximum of one year after the booking has been completed, then it will be deleted, if you do not choose to remove it before that time.' );
jr_define( '_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Because you are a property manager on our site, we cannot offer you the ability to have your data deleted automatically. Instead, please contact us directly so that we can assign your property(s) to another manager. Once we have done that and removed your status as a property manager, you will be able to automatically have your data deleted.' );

jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Forget me!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'This cannot be undone!' );
jr_define( '_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Your data has been deleted!' );

jr_define( '_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Sorry, you cannot make a booking as your email address is invalid' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'This page gives you the ability to anonymise any guests who have their information stored in the system. This allows you to be compliant with the GDPR, however you cannot edit any other information on this page. To do that you have to log into the frontend as a property manager. The assumption is that a historic guest has contacted you requesting that you allow them to exercise their right to be forgotten. If they are unable to log into the frontend of the site (perhaps a user was not created for them when they booked) then you can use this area to anonymise them once you have confirmed their identity.' );

jr_define( '_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonymise guest' );
jr_define( '_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'DELETED PROPERTY' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Guest data anonymised' );
jr_define( '_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Cannot anonymise' );

jr_define( '_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'We need your permission to store your information before you can make a booking. CLICK HERE to give us permission.' );

jr_define( '_JOMRES_GDPR_CONFIG_ENABLE', 'Enable GDPR compliant functionality?' );
jr_define( '_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'WE DO NOT RECOMMEND THAT YOU DISABLE THE GDPR COMPLIANT FUNCTIONALITY. Jomres has built-in features that helps you to ensure that the Jomres section of your site is compliant with the GDPR. If you disable this feature (and you should not if you are in the EU or you do business with citizens of the EU) then Jomres will automatically assume that every visitor to the site has given their permission to have their personal data enabled. App permission and My Data pages will not be shown and users will not be prompted to give their permission to have the data collected.' );


jr_define( 'EMPTY_TEMP_DIR', 'Empty temp dir' );
jr_define( 'EMPTY_TEMP_DIR_DONE', 'Temporary files deleted' );

jr_define( 'MACHINE_TRANSLATION', 'Machine translations' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG', 'Source language' );
jr_define( 'MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'It is possible to hook in machine translation functionality. This allows you to enter strings in one language and translations could be pulled from remote services. Be aware that not all translation services support all languages. See those services for more detail.' );

jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Room Types' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'New Room type' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'You can create and edit room types on this page. These room types will be specific to this property only. When setting up your property you first need some Room Types. You can use either those room typies created by the administrator, or you can add your own. Once you have one or more Room Types you can then create rooms of that Room Type. After you have rooms you can then create tariffs (prices) for those rooms because tariffs are linked to Room Types.' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Managers can create room types?' );
jr_define( '_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Use this option to configure whether or not managers can create their own room types in the frontend. We strongly recommend that you leave this option set to No when you first start using Jomres, especially if you are creating a portal because you should create all room types in the administrator area. Room types created by managers will appear in search forms, but because these room types are specific to individual properties, only one property will be shown in search results if that room type is selected durings searches. If you want so that only Super Property Managers can create room types then leave this option set to Yes and use the Access Control plugin to allow only super managers to view the "Settings > Room types" menu option. Only properties that rent out rooms in the property and use Advanced or Micromanage tariff editing modes can use this option. Villa/apartment type properties will not be able to use it.' );
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Room/property type updated');
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Show room types in search options' );
jr_define( '_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'If you choose to allow property managers to create their own room types, you can choose whether or not to show those created room types in the search options where you have chosen to show room types.' );


jr_define( '_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "You shouldn't re-use the same email address for each booking.<br/>If you have a unique domain (eg. not a gmail email address) for your business then use the guest's telephone number as their email address. The email address would then look something like 123456@mydomain.com<br/>This will ensure that a new guest is created when you create a booking ." );

jr_define( '_JOMRES_LOGIN_USERNAME', 'Email address' );
jr_define( '_JOMRES_LOGIN_PASSWORD', 'Password' );
jr_define( '_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED',"We are delighted that you would like to book with us again. To be able to manage all your bookings together, it is necessary that you log in so that the booking can be added to your account. This also ensures that you are authorized to use the e-mail address provided." );

jr_define( '_JOMRES_LOGIN_RESET_MESSAGE', 'If you do not know your password we can send you a password reset email. Please follow the instructions in that email to reset your password.' );
jr_define( '_JOMRES_LOGIN_RESET_BUTTON', 'Forgot your password?' );

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Anonymise your name?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'If you choose to anonymise your name when reviewing we will use your initials instead.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', ' said ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Reply to this review');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Type your reply to this review here.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Your reply');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Main review');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Review reply saved');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Before submitting a review reply, you must read the following. By submitting a reply you confirm that you agree to these terms and conditions.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'What are our guidelines for a review reply?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'You are responding to the review of your property. You <em>must not</em> use your reply as a commercial dispute process. If you need to report a review, you must use the "Report Review" button on the listing, and not this review reply page.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Once you have left your reply you will not be able to edit it.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Allowed and Encouraged');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
	<ul>
    <li>A full response to the review.</li>
    <li>Courtesy and Honesty.</li>
    <li>Sensible responses to the reviewer\'s issues (remember, others may be having similar issues but did not take the opportunity to post a review).</li>
    <li>Encourage the guest to get in contact with you directly to solve issues.
    <li>Always remember that future guests will see your response. Make sure to be professional at all times.</li>
	</ul>
	');
	
jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Not allowed');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
	<ul>
    <li>Commercial disputes.</li>
    <li>Questions to the Reviewer or Others.</li>
    <li>Questionable Language (including cursing).</li>
	</ul>
	');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Last ran');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Schedule');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Invoice numbers');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Use custom invoice numbers?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'You can configure the system to use custom invoice numbers. Only new invoices will be affected.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Start number');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numbers are created consecutively. What should the first number be?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'What format should the invoice number take?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Configure the invoice number format here. A format can look like {N}/{D} or {N}/{Y} where N is the automatically generated number, D = date in the format YYYYYMMDD (20190131) or Y = YYYY (2019). Any other alpha numeric characters not enclosed in curly braces will be left alone, so a pattern that looks like {N}/{D}-L would result in an invoice number (21) that looks something like 21/2019-L ');

jr_define('_JOMRES_SURCHARGE_TITLE', 'Surcharge');
jr_define('_JOMRES_SURCHARGE_DESC', 'An additional charge that will be added to the room when booked (calculated per day)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Prioritise site-wide labels?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Custom text saved in the label editing or the translate lang file strings pages are considered "site-wide" labels. Property managers can also customise labels for each property using the label editing feature in the frontend. This allows a property manager to have different texts for his property, which is useful if the property is different to all of the other properties on the site.<br/> When the system searches for label texts, it will prioritise site-wide texts over property specific texts meaning that if a site-wide text exists for that label, the system will choose that one first. If you set this option to No, the system will prioritise property specific texts over site-wide texts.');

jr_define('_JOMRES_REFERRER', 'Referrer');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // This could be changed if whitelisting, so site "World's best booking site" would change this to "WBBS" or similar.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Library Packages');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Vendor and Node Modules are separate (free) packages for Jomres. You can re-install the packages on this page.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Re-install library packages');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Unable to delete property type because it is still be used by some properties. You must change these properties to another property type first before attempting to delete this one. Property UIDs that prevent deletion : ');
jr_define('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', 'Unable to unpublish property type because it is still be used by some properties. You must change these properties to another property type first before attempting to unpublish this one. Property UIDs that prevent the change : ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Random email addresses');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Offer Random Emails');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'You can allow the system to generate random email addresses in the Quick Booking popup in the dashboard. This allows managers and receptionists to create bookings for guests that they do not have email addresses for, it is intended to work as a time saver for sites with many receptionists/managers who understand that these random emails will never be used for real communication, the purpose is to get around the fact that in Jomres all guests must have email addresses. You MUST also provide a domain in the next field.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Random Emails Domain');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'This should not be a normal email domain, such as gmail or outlook. Instead it can either be your own domain, or something else entirely, such as "mysite.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Upload area');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'No user role');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Receptionist');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Property Manager');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Suspended');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Deleted from CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'If you like Jomres, please consider leaving a review on one of these sites');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'I`m a nice person, i`ve already left a review');

jr_define('_LICENCE_PROMPT_DEAR', 'Dear ');
jr_define('_LICENCE_EXPIRED', ', your Jomres license key has expired, so you`re missing these great features and benefits! ');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Plugin updates and new plugin releases');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_EXPIRED_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Restart your membership now!');

jr_define('_LICENCE_INVALID_KEY', 'Unfortunately you don`t seem to be using a valid Jomres license key, so you`re missing on these great features and benefits!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Plugins</a> that greatly extend Jomres functionality');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Exclusive members only Email/Tickets support');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Worry-free Jomres Core updates');
jr_define('_LICENCE_INVALID_POST', 'Jomres membership is very affordable and offers access to all plugins and member-only support services.');
jr_define('_LICENCE_INVALID_START', 'Start your free trial now!');

jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Dashboard');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Users');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Commission');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subscriptions');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Invoices');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Translations');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Tools');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Reports');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Settings');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Help');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Total properties in system');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Published properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Unpublished properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Approved properties');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Properties requiring approval');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Total reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Unpublished reviews ');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Review reports ');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Jomres System Info');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "This property's property type is not published, it may not appear in search results. Please contact the site administrator to publish the property type, or change the property type in the Edit Property page.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Update your property type');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Income (paid amounts)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Cannot delete the property feature "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" because it is used by the following property(s) : ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'REST API test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'This page performs a basic test of the REST API using built-in functionality in Jomres. It calls the Jomres REST API to see if it receives a valid response.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'The server called this URL to see if the response is valid : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'The page received this response : ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'The test appeared to go as expected, you will probably not have any problem receiving REST API requests from the rest of the Internet.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'The test failed, look in the Response field, if it looks like a lot of html, or you recieved a 404 message, then your server is redirecting calls to another url. This will prevent you from receiving API calls.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Syndication test');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'The Jomres App server maintains a list of all Jomres sites. This allows us to build a syndication network. This network is designed to allow our users to display properties from other sites on their own sites and is useful, particularly for new sites, to build up an SEO presence on the net. The goal is for all Jomres sites to work together, building trust in the network. There is no charge for this service.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Your site is not currently listed on the Jomres App server, which is part of the syndication network. This server will try again to add this server to the network on the next 6 page loads. If, after a few page loads, this does not change please check that the connectivity test above passes the tests. Note, localhost servers cannot be added to the network.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Congratulations, your server is listed on the Jomres App server.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Syndicated properties');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Here are some other properties available from our property network');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Syndication stats');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Congratulations, your server is listed on the Jomres Syndication Network. Your property(s) will start appearing on other Jomres sites soon, if they are not already being shown.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'You installation is not part of the Jomres Syndication Network, therefore your property(s) are not being shown on other Jomres based sites and you can\'t benefit from this free advertising.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Active Jomres installations : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'The total number of Jomres installations that are sharing Jomres Syndication Network properties on their sites. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Total Properties : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'This is the number of properties available in the JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Total Property displays : ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'In total, all of the times a Jomres property has been linked to from another Jomres based site.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) is a free feature available to all Jomres users. It\'s purpose is to provide you with free advertising of your properties on other Jomres based sites. The goal is to help you get your site off the ground fast, offering free advertising so that your properties are recognised and trusted because they are linked to high confidence, high relevance websites that are already well known to the search engines. See this <a href="https://www.jomres.net/features/jomres-syndication-network" target="_blank">article on our website</a> and <a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network" target="_blank">the manual</a>  for more information.');


jr_define('GUEST_PROFILE_INFORMATION', 'This is your guest profile data, fields with this symbol <i class="fa fa-users" aria-hidden="true"></i>
 are publicly visible, whereas fields with this symbol <i class="fa fa-user-secret" aria-hidden="true"></i> can only be seen by you, your hosts and site administrators.<br/><br/>Hosts can only see private information if you have already created a booking with them.<br/><br/>Your information is safely encrypted and stored in our database using AES-256 encryption.');

jr_define('GUEST_PROFILE_OPTIONAL', 'These fields are optional, however hosts may use the information here to determine if they feel that they can trust you, therefore it\'s better to add the information. Remember, you are asking to stay in their property, and they may turn you down if they feel you aren’t a good fit or that your bio doesn’t contain enough information.');
 
jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Driving license');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Passport number');
jr_define('GUEST_PROFILE_IBAN', 'IBAN number');
jr_define('GUEST_PROFILE_ABOUT_ME', 'About me');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'This "About me" section is publicly viewable so don\'t put in any private information. That said, do make an effort to put as much as you feel comfortable sharing such as your passions, what you do for a living, your hobbies etc. You can use Markup to give it a bit of jazz. Hosts will want to feel that they can trust you with their properties. Make sure that your picture is a real picture of you, not your dog or car (yes, guys, we\'re talking to you!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Enter any special requirements you may have, such as ease of access needs here. They will not be shown on your public profile but they will be added to the booking information when you make a booking.');

jr_define('VIEW_HOST_PROFILE', 'Host\'s profile');

jr_define('GUEST_PROFILE_TITLE', 'Guest profile');
jr_define('GUEST_PROFILE_TITLE_MY', 'My profile');

jr_define('GUEST_PROFILE_WELCOME', 'Hi, let me tell you a little bit about myself.');
jr_define('GUEST_PROFILE_MY_NAME', 'My name is ');
jr_define('GUEST_PROFILE_I_COME_FROM', ' and I come from the ');
jr_define('GUEST_PROFILE_IN', ' region in ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'My private information');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'We do our best to validate guest and host information however you should do your own due dilligence and decide for yourself whether or not this person is trustworthy.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'My properties');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'This is what I said about this property : ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'I gave this property a rating score of : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'My reviews');
jr_define('GUEST_PROFILE_OF_ME', 'What other people say about me');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'What this host said about me');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Review guest');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'My review of this guest ');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Here are some example guest reviews to get the ball rolling : <br/>
	
	<ul>
	<li>(guests name) was a pleasure to host! They left the space clean and were quiet throughout the weekend. They had smooth communication and I look forward to having them stay with me again!</li>
    <li>I loved having (guest name) because they were able to treat the place with respect, have a great time and enjoy the area. They were awesome with renting the space and I hope I get to host them again.</li>
    <li>All of my house rules were respected with (guest name) and they were able to come in and go with ease. I loved having them there as they were respectful and quiet. I highly recommend them to others!</li>
	</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Sorry, I can\'t find that user. Most likely they have not filled in their account details yet.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Guest');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Admin');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Mark as No Show');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Booking marked as No Show');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Bookings');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'No Shows');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'JSN statistics for this user');

jr_define('BOOKING_NOSHOW_INFO', 'Booking and No Show information is pulled from the Jomres Syndicate Network at booking time. It is taken from anonymised data and can be used by you to decide if this guest is a risk of not fulfilling the booking. If the system reports that the data is unknown, it is probably because this system is not recognised on the network.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Unknown');
