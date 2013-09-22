<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
jr_define( '_JOMRES_COM_MR_QUICKRESDESC', 'Rychlá rezervace' );
jr_define( '_JOMRES_COM_MR_SHOWPROFILES', 'Zobrazit profily' );
jr_define( '_JOMRES_COM_MR_GENERALCONFIGDESC', 'Obecné nastavení' );
jr_define( '_JOMRES_COM_MR_BACK', 'Zpět' );
jr_define( '_JOMRES_COM_MR_YES', 'Ano' );
jr_define( '_JOMRES_COM_MR_NO', 'Ne' );
jr_define( '_JOMRES_COM_MR_NEWTARIFF', 'Nový' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTY', 'Nová kapacita' );
jr_define( '_JOMRES_COM_MR_NEWPROPERTYFEATURE', 'Nové vybavení kapacity' );
jr_define( '_JOMRES_COM_MR_NEWGUEST', 'Nový host' );
jr_define( '_JOMRES_COM_MR_SAVE', 'Uložit' );
// View bookings
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Jméno' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Příjezd' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Odjezd' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_TITLE', 'Přiřazení uživatelských profilů' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_ID', 'ID' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NAME', 'Jméno' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Uživatelské jméno' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER', 'Aktuální autorizace' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL', 'Výchozí kapacita' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS', 'Změnit' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Úroveň přístupu' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Uživatel nastaven' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE', 'n/a' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION', 'Recepce' );
jr_define( '_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN', 'Správce kapacit' );
// Edit bookings
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Všechny rezervace' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS', 'Nové rezervace (bez zálohy)' );
jr_define( '_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Editace rezervace' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Prj/Odj' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Host' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Pokoj' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Platba' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Jméno' );
jr_define( '_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Príjmení' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Ostatní požadavky' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Upozornění: ostatní požadavky mohou být k dispozici jen za příplatek' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Stornovat rezervaci' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Číslo domu' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulice' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Město' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PSČ' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon - pevná' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon - mobil' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-mail' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Nelze stornovat, klient již má rezervaci.' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Záloha nezaplacena' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potvrzení storna' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezervace stornována' );
jr_define( '_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dnů do příjezdu' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Typ rezervace' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Zakázaná' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepce' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NAME', 'Název pokoje' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Pokoj' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Podlaží' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Pro hendikepované?' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Max. počet osob' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Typ pokoje' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Popis typu pokoje' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Seznam vybavení pokoje' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Zaplacená záloha' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Vložit zálohu' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Celkem k zaplacení' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Záloha ref.' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Rezervace' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Záloha' );
jr_define( '_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Záloha uložena' );
// Edit Language
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Naše pokoje' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Kapacita' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Typ pokoje' );
// Display guest form
jr_define( '_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Upravit' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Jméno' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Příjmení' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Dům' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulice' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_TOWN', 'Město' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'PSČ' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon - pevná' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Telefon - mobil' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNO', 'Číslo CC' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDISS', 'Karta vystavena' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE', 'Platnost CC karty do' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARISSNO', 'Číslo karty' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCARDNAME', 'Jméno uvedené na kartě' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Výběr z nabízených' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Počet dní' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS', 'Počet hostů' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Celkem' );
// Rooms tab
jr_define( '_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Nastavení kapacit & pokojů' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Pokoje' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Vybav. pokojů' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Typy pokojů' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Kapacita' );
jr_define( '_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Vybavení kapacit' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Pokoj' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Typ' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Název' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Číslo' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Podlaží' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS', 'Pro hendikepované?' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Max. počet osob' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Vybavení' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT', 'Pokoj přidán' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Upravit položku' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Vybavení pokoje' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Popis vybavení' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Vybavení pokoje přidáno' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Vybavení pokoje aktualizováno' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Typ pokoje' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Typ pokoje zkrac.' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Typ pokoje detailně' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Typ pokoje přidán' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Typ pokoje aktualizován' );
jr_define( '_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Upravit položku' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Název' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulice' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Město' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Region' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Země' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'PSČ' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Tel' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-mail' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'www' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Vybavení' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT', 'Kapacita přidána' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Kapacita aktualizována' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Vybavení kapacity' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Vybavení kapacity zkrác.' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Vybavení kapacity detailně' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT', 'Vybavení kapacity přidáno' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Vybavení kapacity aktualizováno' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Ceníky' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Ceník' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Popis' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Platný od' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Platný do' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Sazba za noc' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Min. počet dní' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Max. počet dní' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Min. počet osob' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Max. počet osob' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Typ pokoje' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignorovat PPPN' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Povolit víkendy' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT', 'Ceník přidán' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE', 'Ceník aktualizován' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Upravit položku' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Klonovat položku' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Ceník odstraněn' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Upravit ceník' );
jr_define( '_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE', 'Státní svátek' );
jr_define( '_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezervace uložena' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Ubytovat hosta' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Ukončit ubytování hosta' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Seznam rezervací' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS', 'NOVÉ rezervace' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Control Panel' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Správa hostu' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Správa kapacit' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Zjistit dostupnost.' );
jr_define( '_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS', 'Potvrzení zadaných údajů' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Jméno' );
jr_define( '_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Příjmení' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'č.p.' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulice' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Město' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'PSČ' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon - pevná' );
jr_define( '_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon - mobilní' );
jr_define( '_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Zadaným parametrům bohužel neodpovídá žádný pokoj.' );
jr_define( '_JOMRES_FRONT_MR_BOOKINGMADE', '<center>Děkujeme za projevený zájem a doufáme, že se Vám Vaše cesta bude líbit.<br><br> <b>Vemte prosím na vědomí, že Vaše objednávka je prozatím predběžná až do doby, než Vám ji potvrdíme závazně e-mailem.</center>' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE', 'Rezervace na: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM', 'Rezervace pokoje: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL', 'Příjezd: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE', 'Odjezd: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Jméno: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE', 'Telefon - pevná: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE', 'Telefon - mobil: ' );
jr_define( '_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL', 'Cena objednávky: ' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Ubytování hosta' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON', 'Vybrat hosta' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Host ubytován' );
jr_define( '_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN', 'K dnešnímu dni nezbývají žádní neubytovaní hosté' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Ukončit ubytování hosta' );
jr_define( '_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT', 'K dnešnímu dni nezbývají žádní odjíždějící hosté' );
// Config panel
jr_define( '_JOMRES_COM_A_SUPPLIMENTS', 'Příplatky' );
jr_define( '_JOMRES_COM_A_TARIFFS', 'Ceníky & měny' );
jr_define( '_JOMRES_COM_A_DISCOUNTS', 'Slevy' );
jr_define( '_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Upload souboru' );
jr_define( '_JOMRES_COM_A_CURRENT_SETTINGS', 'Aktuální nastavení' );
jr_define( '_JOMRES_COM_A_EXPLANATION', 'Vysvětlení' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Jednolůľko' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Přejete-li si účtovat tuto položku, nastavte hodnotu na ANO' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Příplatek za jednolůžko' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Požadovaná záloha v procentech?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Přejete-li si požadovanou zálohu účtovat procentem z celkové částky rezervace, zadejte hodnotu ANO. V opačném případě bude použita paušální hodnota.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_VALUE', 'Požadovaná výše zálohy' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER', 'za osobu, za noc' );
jr_define( '_JOMRES_COM_A_TARIFFS_PER_DESC', 'Přejete-li si účtovat položku dle PPPN (per-person-per-night), zadejte hodnotu ANO. Pokd ne, cena bude spočítána dle PRPN (per-room-per-night).' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE', 'Velikost souboru' );
jr_define( '_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Max. velikost snímku v KB' );
jr_define( '_JOMRES_FRONT_MR_BOOKED', 'Obsazeno' );
jr_define( '_JOMRES_COM_CONFIRMATION_TITLE', 'Potvrzení rezervace' );
jr_define( '_JOMRES_COM_CONFIRMATION_DEAR', 'Vážený(-á) ' );
jr_define( '_JOMRES_COM_CONFIRMATION_RATE_RULES', 'Cena za noc - za pokoj ' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Detaily objednávky' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1', 'Děkujeme za Vaši rezervaci v' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2', '. Níže naleznete shrnutí Vaší rezervace. Prosíme ověřte, že veškeré Vaše informace, zejména kontaktní, jsou v pořádku a pokud ne, dejte nám prosím obratem vědět.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN', 'Váš pokoj Vám je k dispozici hned po Vašem příjezdu, od 14.00 hod.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD', 'Těšíme se na setkání s Vámi ' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY', 'Doufáme, že se Vám bude pobyt líbit.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO', 'Nyní prosím obraťte pozornost následujícím podmínkám.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'You are reminded that a booking is a legally binding contract, so if for any reason you have to cancel or shorten your booking then you are still liable to pay the full amount.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE', 'No allowance can be made for meals not taken or for rooms not occupied for the full period of the boking. With this in mind we strongly recommend that you use a holiday insurance facility.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', '<i>Stornování a omezen práv</i> If you cancel your holiday the cancellation must be confirmed in writing. Cancellation charges are as follows:' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS', '30 dní a více' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY', ' Záloha pouze.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS', '15 až 30 dní' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT', ' 50% z celkové částky.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Příjezd do 14 dnů' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT', ' 100% z celkové částky.' );
jr_define( '_JOMRES_COM_CONFIRMATION_RESERVATION_VAT', 'VAT@ 17.5% is included in all tariffs. Any increase or alterations will be charged.' );
jr_define( '_JOMRES_COM_CONFIRMATION_PRINT', 'Tisk potvrzení rezervace' );
jr_define( '_JOMRES_COM_INVOICE_TITLE', 'Tisk faktury (daňového dokladu)' );
jr_define( '_JOMRES_COM_INVOICE_STAYNIGHTS', 'Počet osob: ' );
jr_define( '_JOMRES_COM_INVOICE_CONTRACTAGREED', 'Smlouva uzavřena: ' );
jr_define( '_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena za noc: ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'CELKEM' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_INTRO1', 'Děkujeme za Váš pobyt v ' );
jr_define( '_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY', 'Doufáme, že příšte využijete naše služby.' );
jr_define( '_JOMRES_COM_ADDSERVICE_TITLE', 'Přidat službu k vyúčtování' );
jr_define( '_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Popis služby' );
jr_define( '_JOMRES_COM_ADDSERVICE_VALUE', 'Hodnota služby' );
jr_define( '_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Ostatní účtované položky' );
jr_define( '_JOMRES_COM_ADDSERVICE_TOTALVALUE', 'Ostatní účtované položky, celkem: ' );
jr_define( '_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Položka přidaná k vyúčtování' );
jr_define( '_JOMRES_UPLOAD_IMAGE', 'Upload snímku' );
jr_define( '_JOMRES_FILE_UPLOAD', 'Upload ouboru' );
jr_define( '_JOMRES_FILE_ERROR_TYPE', 'Můžete pouze uploadovat soubory typu type:\n' );
jr_define( '_JOMRES_FILE_ERROR_EMPTY', 'Před uploadem nejprve vyberte požadovaý soubor, prosím.' );
jr_define( '_JOMRES_FILE_ERROR_NAME', 'Název souboru musí obsahovat pouze alfanumerické znaky a žádné mezery.' );
jr_define( '_JOMRES_FILE_ERROR_SIZE', 'Velikost souboru překračuje maximální velikost nastavenou Administrátorem.' );
jr_define( '_JOMRES_FILE_NOT_UPLOADED', 'Soubor NEBYL nahrán.' );
jr_define( '_JOMRES_FILE_UPDATED', 'Soubor byl úspěšně nahrán.' );
jr_define( '_JOMRES_COM_A_JSCALENDAR', 'JS kalendář' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE', 'Jazyk JS kalen.' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_DESC', 'Vyberte požadovaný jazykový soubor JS kalendáře. Upozornění - některé kalendáře mohou obsahovat chyby, více informací na http://sourceforge.net/tracker/?group_id=75569&atid=544287' );
jr_define( '_JOMRES_COM_A_CALENDARCSS', 'JS kalendář CSS souboru' );
jr_define( '_JOMRES_COM_A_CALENDARCSS_DESC', 'Zvolte CSS soubor pro použití s JS kalendářem' );
jr_define( '_JOMRES_COM_A_ODDS', 'Různé' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING', 'List minicomponent calls' );
jr_define( '_JOMRES_COM_A_ERRORCHECKING_DESC', 'Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.' );
jr_define( '_JOMRES_FILE_DELETE', 'Odstranit soubor' );
jr_define( '_JOMRES_FILE_DELETED', 'Soubor odstraněn' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETE', 'Odstranit' );
jr_define( '_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Pokoj nelze odstranit, obsahuje platné rezervace. Zrušte rezervace a zkuste znovu, prosím.' );
jr_define( '_JOMRES_COM_MR_ROOM_DELETED', 'Pokoj odstraněn' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Odstranit vybavení pokoje' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Vybavení pokoje nelze odstranit kvůli existujícím vazbám. Zruąte vazby na pokoje a zkuste znovu, prosím.' );
jr_define( '_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Vybavení pokoje odstraněno' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Odstranit vybavení kapacity' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Vybavení kapacity nelze odstranit kvůli existujícím vazbám. Zruąte vazby na kapacitu a zkuste znovu, prosím.' );
jr_define( '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Vybavení kapacity odstraněno' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Odstranit typ pokoje' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS', 'Typ pokoje nelze odstranit kvůli existujícím vazbám. Zrušte vazby na typ pokoje a zkuste znovu, prosím.' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS', 'Vybavení pokoje nelze odstranit kvůli existujícím vazbám ceníku. Změňte ceníkové vazby a zkuste znovu, prosím..' );
jr_define( '_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Typ pokoje odstraněn' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE', 'Odstranit kapacitu' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETED', 'Kapacita odstraněna' );
jr_define( '_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Nemáte oprávnění odstranit kapacitu.' );
jr_define( '_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'šířka plného náhledu snímku' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa lokality' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Popis' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Check-in' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Aktivity v okolí' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Jak se k nám dostanete' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Letiště' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Jiná doprava' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Pravidla & vzdání se nároku' );
jr_define( '_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adresa' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Návštěvníci mohou rezervovat online' );
jr_define( '_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Přejete-li si, aby návštěvníci mohli online rezervovat, nastavte hodnotu na ANO.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Rezervace pro fixní období' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Přejete-li si fixní období rezervace, zadejte hodnotu ANO. Pokud je hodnota NE ujistěte se, že hodnota u pole "Pre
defined arrival day" není na ANO (pokud vědomě nechcete nutit návžtěvníky k příjezdu v určitý den) - v opačném případě kalendář dostupnosti nebude obsahovat dostatečné množství odkazů.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD', 'Období rezervace: ' );
jr_define( '_JOMRES_COM_A_BOOKING', 'Rez. pokoje' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Max. období rezervace, např. 3x 7 období rezervace = 21 dní' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Jde o apartment/chalupu/villu?' );
jr_define( '_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC', 'Vhodné pro případ, kdy pronajímáte celou kapacitu místo jednotlivých pokojů v ní. Jde-li o tento případ ujistěte se, že každá kapacita má navázaný poze jeden pokoj.' );
jr_define( '_JOMRES_FRONT_MR_REVIEWBOOKING', 'Revize rezervace' );
jr_define( '_JOMRES_COM_MR_CONFIRMBOOKING', 'Potvrzení rezervace' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'pondělí' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'úterý' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'středa' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'čtvrtek' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'pátek' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'sobota' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'neděle' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'po' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'út' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'st' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'čt' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'pá' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'so' );
jr_define( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'ne' );
jr_define( '_JOMRES_COM_A_AVLCAL', 'Kal. dostupností' );
jr_define( '_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Barva písma dnešního data' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE', 'Barva písma dnů v měsíci' );
jr_define( '_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Barva pásma dnů mimo zobrazený měsíc' );
jr_define( '_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Barva pozadí buňky dnů, kdy je kapacita/pokoj volný' );
jr_define( '_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Barva pozadí buňky dnů mimo zobrazený měsíc' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Barva pozadí buňek pro obsazené dny' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Barva pozadí pro předběžné rezervace (bez záloh)' );
jr_define( '_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Barva pozadí buněk dnů v minulosti' );
jr_define( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Obsazeno-n/a' );
jr_define( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Volno' );
jr_define( '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Předběžná rezervace' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Přednastavený den příjezdu' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Pouze pro websites nabízející fixní období rezervací. Zadejte požadovaný počáteční den fixního období.' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Fixní den příjezdu' );
jr_define( '_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Pobyt (dny)' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Zobrazit kalendáře dostupnosti?' );
jr_define( '_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Přejete-li si zobrazit kalendáře dostupnosti, nastavte hodnotu na ANO' );
jr_define( '_JOMRES_FRONT_AVAILABILITY', 'Dostupnost' );
jr_define( '_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Pro zobrazení objednávkového formuláře klepněte na volný den.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING', 'Zakázané rezervace' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_NEW', 'Nové zakázané rezervace' );
jr_define( '_JOMRES_FRONT_DELETEGUEST', 'Odstranit hosta' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Host odstraněn' );
jr_define( '_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Hosta nebylo možné odstranit kvůli existující otevřené rezervaci. Stornujte rezervace a zkuste znovu.' );
jr_define( '_JOMRES_COM_INVOICE_ACTUALROOMCOST', 'Aktuální cena pokoje: ' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO', 'Dobrý den' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS', 'Děkujeme za provedenou rezervaci s' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY', 'Následuje přehled rezervace:' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS', 'Pokud máte jakékoli dotazy ohledně rezervace nebo jiných služeb, neváhejte a kontaktujte nás.' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE', 'Naše telefonní číslo je' );
jr_define( '_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL', 'Případně nás kontaktujte emailem na' );
jr_define( '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING', 'Kuřácké' );
jr_define( '_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Libovolné' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT', 'Výstupní formát kalendáře' );
jr_define( '_JOMRES_COM_CALENDAROUTPUT_DESC', 'Umožňuje uživateli měnit výstupní formát data kalendáře Jomres.' );
jr_define( '_JOMRES_COM_CALENDARINPUT', 'Vstupní formát kalendáře' );
jr_define( '_JOMRES_COM_CALENDARINPUT_DESC', 'Umožňuje uživateli měnit vstupní formát data kalendáře Jomres.' );
jr_define( '_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Období fixních rezervací s krátkými přestávkami' );
jr_define( '_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Délka přestávek' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISHED', 'Publikováno' );
jr_define( '_JOMRES_COM_A_PAYPAL', 'Paypal' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Audit systému' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_DATE', 'Datum' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_TIME', 'Čas' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_USER', 'Uživatel (username)' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_OPERATION', 'Činnost' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_VIEWSQL', 'Zobrazit detaily' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Dle data' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME', 'Dle uživatele' );
jr_define( '_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION', 'Dle činnosti' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Stav' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Nevyřízené příjezdy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dnešní příjezdy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Aktuální hosté' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Dnešní odjezdy' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Odjezdy po termínu' );
jr_define( '_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Problém! Bez příjezdu a storna' );
jr_define( '_JOMRES_MR_AUDIT_UNKNOWNUSER', 'Neznámý uživatel' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM', 'Vytvoření pokoje' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Aktualizace pokoje' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM', 'Odstranění pokoje' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Vytvoření vybavení pokoje' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Aktualizace vybavení pokoje' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Odstranění vybavení pokoje' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE', 'Vytvoření typu pokoje' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE', 'Aktualizace typu pokoje' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE', 'Odstranění typu pokoje' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Vytvoření kapacity' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Aktualizace kapacity' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Odstranění kapacity' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE', 'Vytvoření vybavení kapacity' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE', 'Aktualizace vybavení kapacity' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE', 'Odstranění vybavení kapacity' );
jr_define( '_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Upravení nastavení kapacity' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Zveřejnění kapacity' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Vytvoření ceníku' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Aktualizace ceníku' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_TARIFF', 'Odstranění ceníku' );
jr_define( '_JOMRES_MR_AUDIT_ADDSERVICE', 'Přidání zaúčtování sluľeb' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Zabydlení hosta' );
jr_define( '_JOMRES_MR_AUDIT_BOOKEDGUESTOUT', 'Vybydlení hosta' );
jr_define( '_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Zadaní zálohy' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_GUEST', 'Vytvoření hosta' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Aktualizace hosta' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_GUEST', 'Odstranění hosta' );
jr_define( '_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Rezervace pokoje' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Vytvoření Addons' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Aktualizace Addons' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Odstranění Addons' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Publikování Addons' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING', 'Vložení zakázané rezervace' );
jr_define( '_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Odstranění zakázané rezervace' );
jr_define( '_JOMRES_COM_MR_EXTRA_TITLE', 'Doplňky' );
jr_define( '_JOMRES_COM_MR_EXTRA_DESC', 'Popis' );
jr_define( '_JOMRES_COM_MR_EXTRA_NAME', 'Název' );
jr_define( '_JOMRES_COM_MR_EXTRA_PRICE', 'Cena' );
jr_define( '_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Doplněk aktualizovaný' );
jr_define( '_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Upravit položku' );
jr_define( '_JOMRES_COM_MR_EXTRA_DELETED', 'Doplněk odstraněn' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Správa Doplňku' );
jr_define( '_JOMRES_COM_A_EXTRAS', 'Zobrazit doplněk během rezervace?' );
jr_define( '_JOMRES_COM_A_EXTRAS_DESC', 'Přejete-li si během rezervace zobrazit Doplněk, zadejte hodnotu ANO' );
jr_define( '_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Volitelné Doplňky' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Počáteční datum zakázané rezervace' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Konečné datum zakázané rezervace' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Zakázané rezervace' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Behem rezervace došlo k chybě, jeden nebo více z vybraných pokoju není volný.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Pokoje zahrnuté v zakázané rezervaci' );
jr_define( '_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING', 'Zobrazit zakázané rezervace' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Seznam zakázaných rezervací není k dispozici' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Počet hvězdiček' );
jr_define( '_JOMRES_COM_A_SMOKING', 'Zobrazit kuřácké?' );
jr_define( '_JOMRES_COM_A_SMOKING_DESC', 'Pro zobrazení kuřáckých prostor nastavte na ANO.' );
jr_define( '_JOMRES_COM_A_RESET', 'reset' );
jr_define( '_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezervace stornována' );
jr_define( '_JOMRES_FRONT_MR_SEARCH_HERE', 'Hledejte zde: ' );
jr_define( '_JOMRES_COM_A_SMOKING_OPTION', 'Výchozí hodnota kuřácké' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL', 'Symbol měny' );
jr_define( '_JOMRES_COM_A_CURRENCYSYMBOL_DESC', 'Např.&amp;pound&#59; Pro zobrazení meny použijte HTML kod dle dané entity, více informací na <a href="http://www.w3schools.com/tags/ref_entities.asp">w3schools</a>' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE', 'Kód měny' );
jr_define( '_JOMRES_COM_A_CURRENCYCODE_DESC', 'Např. CZK. Tento symbol bude použit v potvrzujícím emailu rezervace.' );
jr_define( '_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Klepněte pro další informace' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Omezit předprodej?' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Přejete-li si omezit předprodejní rezervace, zvolte hodnotu ANO (a na dalším poli zadejte počet dní). If you do set this to yes then if the user tries to book more than n days in advance then their arrival date will be restored to todays date' );
jr_define( '_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Počet dní omezeného předprodeje:' );
jr_define( '_JOMRES_COM_A_TAX_WARNING', '<font color=red>UPOZORNĚNÍ: Nastavení obou hodnot na ANO není doporučeno, vyberte jedno z nabízených daňových schémat tak, aby odpovídalo podmínkám Vašeho trhu.</FONT>' );
jr_define( '_JOMRES_COM_FRONT_ROOMTAX', 'Daň' );
jr_define( '_JOMRES_COM_A_ROOMTAX', 'Pokojová daň' );
jr_define( '_JOMRES_COM_A_ROOMTAX_DESC', 'Vytvořené pro americké trhy, které používají speciální daň z pronajmutého pokoje. Možné kombinace jsou jak fixní, tak procentuální daň - tyto jsou pak počítány pouze z ceny pokoje.' );
jr_define( '_JOMRES_COM_A_ROOMTAX_FIXED', 'Fixní daň' );
jr_define( '_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Procentuální daň' );
jr_define( '_JOMRES_COM_A_EUROTAX', 'DPH' );
jr_define( '_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'DPH %' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVE', 'Zálohovat všechny záznamy' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE', ' záznamu zazálohováno' );
jr_define( '_JOMRES_MR_AUDIT_ARCHIVED_AUDIT', 'Systém zazálohoval auditované záznamy' );
jr_define( '_JOMRES_FRONT_TARIFFS', 'Ceny' );
jr_define( '_JOMRES_FRONT_TARIFFS_TITLE', 'Ceník' );
jr_define( '_JOMRES_FRONT_TARIFFS_DESC', 'Popis ceníku' );
jr_define( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Typ pokoje' );
jr_define( '_JOMRES_FRONT_TARIFFS_STARTS', 'Platný od' );
jr_define( '_JOMRES_FRONT_TARIFFS_ENDS', 'Platný do' );
jr_define( '_JOMRES_FRONT_TARIFFS_PPPN', 'za osobu a noc' );
jr_define( '_JOMRES_FRONT_TARIFFS_PN', 'za noc' );
jr_define( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'bez započítání víkendu' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINDAYS', 'Min. počet dní' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Max. počet dní' );
jr_define( '_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Min. počet osob' );
jr_define( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Max. počet osob' );
jr_define( '_JOMRES_FRONT_PREVIEW', 'Náhled' );
jr_define( '_JOMRES_COM_A_EDITINGMODEON', 'Zapnout úpravy?' );
jr_define( '_JOMRES_COM_A_EDITING_CURRENTTEXT', 'Aktuální text' );
jr_define( '_JOMRES_COM_A_EDITING_NEWTEXT', 'Nový text' );
jr_define( '_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Aktualizovat upr. text.' );
jr_define( '_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Úprava jaz. nastavení' );
jr_define( '_JOMRES_COM_A_AUDITING_SHOWING', 'Počet nezazálohovaných záznamů: ' );
jr_define( '_JOMRES_FRONT_PTYPE', 'Typ kapacity' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE', 'Seznam typu kapacit' );
jr_define( '_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Upravit typ kapacity' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE', 'Typ kapacity' );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC', 'Popis typu kapacity' );
jr_define( '_JOMRES_COM_PTYPES_SAVED', 'Typ kapacity uložen' );
jr_define( '_JOMRES_COM_PTYPES_UNABLETO_DELETE', 'Odstranění typu kapacity se nezdařilo. Typ kapacity je navázán na jeden nebo více kapacit, před odstraněním je nutné jim přiřadit jiný platný typ kapacity.' );
jr_define( '_JOMRES_COM_PTYPES_DELETED', 'Typ kapacit(y) odstraněn' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Výzva k platbě' );
jr_define( '_JOMRES_EXTRAS_NOEXTRAS', 'K účtu nejsou přidány žádné mimořádné položky' );
jr_define( '_JOMRES_COM_CHARGING_DEPOSIT', 'Záloha' );
jr_define( '_JOMRES_COM_CHARGING_FULLAMT', 'Celková částka' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG', 'Částka splatná ke okamžiku rezervace' );
jr_define( '_JOMRES_COM_CHARGING_CONFIG_DESC', 'Vyberte požadovaný typ platby během rezervace - zálohu nebo plnou částku.' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW', 'Počet zobrazených měsíců v kalendáři' );
jr_define( '_JOMRES_COM_MONTHSTOSHOW_DESC', 'Kolik má být k dispozici zobrazených měsíců?' );
jr_define( '_JOMRES_INVOICE_SIGNEDONBEHALFOF', 'Jménem společnosti, podepsán ' );
// V1.4
jr_define( '_JOMRES_COM_A_GATEWAYLIST', 'Platební brány' );
jr_define( '_JOMRES_COM_A_CANCEL', 'Storno' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC', 'Zaškrnutím vyberte pokoj(e) vč. adekvátních datumů určené k zakázané rezervaci. <br>Pokud pokoj není označen, nemůže být do zakázaných rezervací zahrnut tak dlouho, dokud nejsou dokončeny již existující rezervace. <br>Jakmile jste vybrali adekvátní datumy, klepněte na tlačítko Apply/Provést - provede se opětovný dotaz na dostupnost pokojů.' );
jr_define( '_JOMRES_JR_NOTLOGGEDIN', '<center><b>Systém Hotelak Vás zřejmě kvůli dlouhé prodlevě odhlásil.</b> Přihlašte se znovu prosím.' );
jr_define( '_JOMRES_JR_BLACKBOOKING_REASON', 'Odůvodnění' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Používat platební brány?' );
jr_define( '_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC', 'Přejete-li si používat online platební brány, zadejte hodnotu na ANO.<b>Upozornění:</b>Vypnutá hodnota NE platební brány nikterak nevypíná kalkulace záloh, které probíhají během rezervace, toto je možné pouze odstraněním elementů počítajících zálohy přímo ve zvolené šabloně pokoje.' );
jr_define( '_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Vyberte preferovanou platební metodu.' );
jr_define( '_JOMRES_COM_A_GATEWAY_ENABLED', 'Aktivní platební brána?' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Upravení nastavení plugins' );
jr_define( '_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Vložení nastavení plugins' );
jr_define( '_JOMRES_FRONT_GALLERYLINK', 'View this property\'s website' );
jr_define( '_JOMRES_COM_A_GALLERYLINK', 'External link' );
jr_define( '_JOMRES_COM_A_GALLERYLINK_DESC', 'Put a link to your website here.' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_VIEWED', 'Zobrazené CC karty' );
jr_define( '_JOMRES_MR_AUDIT_CREDITCARD_UPDATED', 'Aktualizované CC karty' );
jr_define( '_JOMRES_MR_CREDITCARD_EDIT', 'Upravit CC' );
jr_define( '_JOMRES_COM_A_EDITICON', 'Upravit velikost ikon' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD', 'Dávkový upload snímku kapacit' );
jr_define( '_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR', 'Snímky již v adresáři existují' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS', 'Virtuální prohlídka' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Zobrazit odkaz na virt. prohlídku?' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Zobrazit virt. prohlídku inline?' );
jr_define( '_JOMRES_COM_A_SLIDESHOW_THUMBSIZE', 'Výška náhledu virt. prohlídky' );
jr_define( '_JOMRES_FRONT_SLIDESHOW', 'Virtuální prohlídka' );
jr_define( '_JOMRES_COM_A_SLIDESHOWS_NOIMAGES', '<br />Omlouváme se, ale k dané kapacitě nejsou k dispozici žádné snímky. K nahrání snímku použijte dávkový upload snímku.' );
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Zobrazit odkaz na ceníky?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED', 'Povolit popup okna?' );
jr_define( '_JOMRES_COM_A_POPUPSALLOWED_DESC', 'Pokud na hodnotě NE, budou odkazy místo v popup oknech otevřeny inline. EXPERIMENTAL! ' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS', 'Upload snímků virt. prohlídky' );
jr_define( '_JOMRES_FRONT_IMAGEUPLOADS_INFO', 'Pro nahrání snímků této kapacity použijte formulář. <br/><b>Upozornění:</b> Jakékoli snímky stejného názvu budou přepsány novějšími. Tento formulář také nenahrává snímky vázané na konkrétní pokoj nebo záhlaví kapacity, pro které slouží sekce Správa kapacit. <br/><b>Poznámka:</b> Zde nahrávané snímky budou uloženy do patřičného adresáře /images/stories/jomres/*property_uid*. Pokud adresář neexistuje, bude vytvořen.' );
jr_define( '_JOMRES_A_TABS_MISC', 'Různé' );
jr_define( '_JOMRES_A', 'Nastavení website' );
jr_define( '_JOMRES_A_GLOBALPFEATURES', 'Použít obecné vybavení kapacit' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_DESC', 'Přejete-li si, aby všechny kapacity používaly pouze vybavení zadané webmasterem, vyberte hodnotu ANO.' );
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'Pro přiřazení snímku vybavení nejprve nahrajte snímky kapacity do adresáře /images/stories/jomres/pfeatures/' );
jr_define( '_JOMRES_A_ICON', 'Ikona' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION', 'Vyberte požadovaný plugin vyhledávání.' );
jr_define( '_JOMRES_FRONT_NORESULTS', '<b>Omlouváme se, ale dotazu neodpovídá žádný výsledek. Zadejte nová kritéria hledání, prosím.</b>' );
jr_define( '_JOMRES_AREYOUSURE', 'Jste si jisti?' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezervovat pokoj' );
jr_define( '_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezervovat tuto kapacitu' );
jr_define( '_JOMRES_COM_MR_DISPGUEST_CCV', 'CCV bezpečnostní kód' );
//v1.4c
jr_define( '_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Zobrazit ceny inline?' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adresa' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Detailní informace' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Dostupnost pokojů' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', 'Zobrazit ceny' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Zobrazit pole Adresa pod odkazem' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Zobrazit pole Detailní informace pod odkazem' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Zobrazit pole Pokoje a Dostupnost pod odkazem' );
jr_define( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', 'Zobrazit pole Ceníky pod odkazem' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Paušál' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Průměrovaný' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL', 'Vyberte tarifní model' );
jr_define( '_JOMRES_COM_A_TARIFFS_MODEL_DESC', "Pro výpočet ceníku existují dva modely - paušální a průměrovaný. Pokud zvolíte paušální, jsou ceny a ceníky definované jednotlivými obdobími rezervace (můžete např. na stejné období nabízet ceník Polopenze a Plná penze). Pokud zvolíte průměrovaný, systém na rezervované období nalezne a zprůměruje všechny dostupné ceny." );
// v1.4e
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Zobrazit zadání data odjezdu?' );
jr_define( '_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', "Přejete-li si zakázat zobrazení pole data odjezdu, zadejte hodnotu NE. V tomto případě bude automaticky jako den odjezdu použit den následující po dni příjezdu." );
// v1.4f
jr_define( '_JOMRES_COM_PROPERTYLISTDESC', 'Omezení popisu' );
jr_define( '_JOMRES_COM_PROPERTYLISTDESC_DESC', "Zadejte hodnotu počtu zobrazených znaků použitých pro popis jednotlivé kapacity." );
// v1.4g+
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE', 'Použitý formát date()?' );
jr_define( '_JOMRES_COM_A_DATEFORMATSTYLE_DESC', 'Volba použitého typu datumu, více viz -> Set this to Yes to format output dates according to date() (See <a href="http://www.php.net/manual/en/function.date.php">Here</a>). Set it to No to use strftime() formatting (see <a href="http://www.php.net/manual/en/function.strftime.php">Here</a> eg. %b %d %Y ' );
jr_define( '_JOMRES_COM_MR_VRCT_PUBLISH', 'Publikovat' );
jr_define( '_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Nepublikovat' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES', 'Použít obecné typy pokojů' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_DESC', 'Přejete-li si použít obecné nastavení typů pokojů webmasterem ve všech pokojích, zadejte hodnotu ANO. Toto nastavení je také nutné pro případ, kdy chcete vyhledávat dle typu pokoje.' );
jr_define( '_JOMRES_A_GLOBALROOMTYPES_INFO', 'Pro přiřazení snímku tohoto typu pokoje nejprve nahrajte poľadované snímky do adresáře /images/stories/jomres/rmtypes/. ' );
jr_define( '_JOMRES_COM_INPUTERROR_BACKGROUND', 'Zadat barvu pozadí chybového pole' );
jr_define( '_JOMRES_COM_CONFIGCOUNTRIES', 'Výchozí země rezervačního formuláře' );
jr_define( '_JOMRES_JAVASCRIPT_', 'Červeně zvýrazněné položky jsou povinné.' );
jr_define( '_JOMRES_COM_SELFREGISTRATION', 'Mohou uživatelé zadávat své kapacity?' );
jr_define( '_JOMRES_COM_SELFREGISTRATION_DESC', 'Přejete-li si, aby uľivatelé mohli zadávat své kapacity bez kontaktu s administrátorem, zadejte hodnotu ANO.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1', 'Zadejte zemi a region své kapacity, prosím.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1', 'Zadejte všechny detaily Vaší kapacity, prosím.' );
jr_define( '_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Červeně zvýrazněné položky jsou povinné.' );
jr_define( '_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Vytvořit kapacitu' );
jr_define( '_JOMRES_REGISTRATION_NOTALLOWED', "Omlouváme se, ale pro přidání kapacity se neprve přihlaste do systému." );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY', 'Vytvořená kapacita: ' );
jr_define( '_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER', 'Uživateli: ' );
// v1.4i
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR', 'Zobrazit kalendář od začátku roku?' );
jr_define( '_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Kalendář dostupnosti zobrazuje data od začátku aktuálního roku.' );
jr_define( '_JOMRES_NUMBEROFROOMSAVAILABLE', 'Počet dostupných pokojů' );
jr_define( '_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Zpět na detaily kapacit' );
jr_define( '_JOMRES_FRONT_ROOMTYPES', 'Typy pokojů' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Omezení náhodného hledání' );
jr_define( '_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Zobrazit převodník měn od Google?' );
jr_define( '_JOMRES_CURRENCYCONVERSIONTEXT', 'Převést menu na :' );
jr_define( '_JOMRES_COM_ALLOWHTMLEDITOR', 'Umoľnit uživatelům použití HTML editoru?' );
// v2
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS', 'Pro vytvoření rezervace použijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů, následně vyberte z dostupných pokojů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.' );
jr_define( '_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Pro vytvoření rezervace pouľijte tento formulář, nápovědu ke každé položce zobrazíte najetím myši přes ikonu "i". Nejprve zadejte datum příjezdu, datum odjezdu a počet hostů. Zadejte jakékoli zvláštní přání nebo požadovanou službu (tzv. Doplněk) a vložte Vaše kontaktní údaje. Provedte kontrolu zadaných údajů a jakmile jste se svou objednávkou spokojeni, odešlete ji klepnutím na tlačítko.' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS', 'Detaily rezervace' );
jr_define( '_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Zadejte požadované detaily Vaší rezervace' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE', 'Dostupnost' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Vyberte požadované pokoje' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Zda je požadovaná kapacita k dispozici zjistíte zde.' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS', 'Volitelné doplňky' );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_DESC', 'Zadejte všechny požadované doplňky, které si přejete zahrnout do rezervace' );
jr_define( '_JOMRES_COM_PERDAY', 'za noc' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS', 'Vaše adresa' );
jr_define( '_JOMRES_AJAXFORM_ADDRESS_DESC', 'Zadejte prosím Vaše kontaktní údaje. Vyjma čísla mobilního telefonu jsou všechny pole povinná.' );
jr_define( '_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Pokoje k dispozici' );
jr_define( '_JOMRES_AJAXFORM_SELECTEDROOMS', 'Vybrané pokoje' );
jr_define( '_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br>Nejbližší možné datum příjezdu: ' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM', 'Za noc:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Celkem:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Doplňky:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX', 'DPH:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Sleva:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTAL', 'CELKEM K ÚHRADĚ:' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Hosté' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Klepnutím přidáte pokoj mezi vybrané' );
jr_define( '_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Klepnutím odeberet pokoj z vybraných' );
jr_define( '_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Typ hostů' );
jr_define( '_JOMRES_VARIANCES_TYPE', 'Typ' );
jr_define( '_JOMRES_VARIANCES_TYPE_TT', 'Typ zákazníka, např. děti 5-10 let, student apod.' );
jr_define( '_JOMRES_VARIANCES_NOTES', 'Poznámky' );
jr_define( '_JOMRES_VARIANCES_NOTES_TT', 'Poznámky k danému typu hostů' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM', 'Max. počet' );
jr_define( '_JOMRES_VARIANCES_MAXIMUM_TT', 'Maximální počet hostů daného typu, které může být zadané v rámci rezervace' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE', 'Procentuelně' );
jr_define( '_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Zadané číslo je procentem základní kalkulované hodnoty za pokoj. Pokud je na hodnotě NE, pak je zadané číslo jednoduše přičteno nebo odečteno ze základní hodnoty pokoje.' );
jr_define( '_JOMRES_VARIANCES_POSNEG', 'Přidat rozdílnou sazbu?' );
jr_define( '_JOMRES_VARIANCES_POSNEG_TT', 'Rozdílná sazba je přidána nebo odebrána ze základní kalkulované hodnoty za pokoj. Pokud si přejete ji pouľít jako slevu ze základní hodnoty pokoje, zadejte hodnotu NE.' );
jr_define( '_JOMRES_VARIANCES_VARIANCE', 'Rozdíl. sazba' );
jr_define( '_JOMRES_VARIANCES_VARIANCE_TT', 'Hodnota rozd. sazby' );
jr_define( '_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Pořadí upravených typů hostů' );
jr_define( '_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE', 'Publivaný typ hostů' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Odstraněný typ hostů' );
jr_define( '_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Vytvořený typ hostů' );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Aktualizovaný typ hostů' );
jr_define( '_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Aktualizovaný typ hostů' );
jr_define( '_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Zobrazit odkaz na seznam pokojů na detailním popisu kapacity?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL', 'Zobrazit <b>pouze</b> seznam dostupných pokojů v kalendáři?' );
jr_define( '_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Přejete-li si zakázat zobrazení záhlaví a detailů kapacity, zadejte hodnotu na ANO, kalendář dostupnosti pokojů je viditelný pouze v sekci detailního popisu kapacity. Vhodné pouze pro uživatele pronajímající SPRs (single room properties) jako jsou apartmány, chalupy apod.' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL', 'Minimální interval mezi Prj-Odj' );
jr_define( '_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimální interval mezi daty příjezdu a odjezdu na rezervačním formuláři.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Booking form room list show room number' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Booking form room list show room name' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Booking form room list show tariff title' );
jr_define( '_JOMRES_ORDER', 'Objednat' );
jr_define( '_JOMRES_REQUIREDFIELDS', 'Požadované' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dní před příjezdem' );
jr_define( '_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimální počet dní vyjma dneška, které musí uběhnout před datem příjezdu.' );
jr_define( '_JOMRES_DTV', 'Varianty typu dnů' );
jr_define( '_JOMRES_DTV_DOW', 'Den týdne' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Výchozí typ hosta' );
jr_define( '_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Výchozí hodnotou je první hodnota typu hosta; pokud používáte tento parametr, pak bude použita výchozí hodnota.' );
jr_define( '_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Rezervace online pouze pro registrované uživatele?' );
jr_define( '_JOMRES_REGISTEREDUSERSONLYBOOK', 'Omlouváme se, ale pro provedení online rezervace musíte být registrovaným uživatem. Pro registraci klepněte sem.' );
jr_define( '_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Barvy písma aktuálních rezervací' );
jr_define( '_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Okraje týdne' );
jr_define( '_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Pokoj je rezervován' );
jr_define( '_JOMRES_COM_AVLCAL_BLACK_KEY', 'Zakázaná rezervace' );
jr_define( '_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokrouhlit zálohu nahoru na celá?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Inkasovat zálohu?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Inkasování tarifů? uložit jako týdenní?' );
jr_define( '_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Přejete-li si uložit inkasované tržby? jednou týdně, zadejte hodnotu ANO. Druhou možností je denní inkaso.' );
jr_define( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Týdenní sazba' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Opakované fixní data příjezdů: ' );
jr_define( '_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'V případě fixních příjezdových datumu je počet dat zobrazen jako seznam.' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID', 'Neplatná hodnota kuřácké' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Neplatné datum příjezdu' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Neplatné datum odjezdu' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Rezervace je příliš krátká, minimální počet dní mezi příjezdem a odjezdem je roven ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Váš interval je roven ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Neplatný typ hostů' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Zadejte počet a typ hostů' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Počet požadovaných hostů je nad limitem možných ceníků' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Bohužel jste zadali větší počet pokojů než hostů, odeberte nadbytečné pokoje klepnutím na jejich název.' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Počet postelí je nižší než počet hostů' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Musíte zadat více pokojů' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Vyberte pokoj' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Zadejte jméno' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Zadejte příjmení' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Zadejte číslo domu' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Zadejte jméno ulice' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Zadejte město' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Zadejte region' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Zadejte PSČ' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Zadejte zemi' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Zadejte číslo pevné tel. linky' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Zadejte číslo mobilního telefonu' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Zadejte e-mail' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID', 'E-mailová adresa není platná' );
jr_define( '_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL', 'Ověření emailové domény se nezdařilo' );
jr_define( '_JOMRES_SRP_WEHAVEVACANCIES', 'Máme volné místa!' );
jr_define( '_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Doposud nebyly vybrány pokoje' );
jr_define( '_JOMRES_BOOKING_NUMBER', 'Rezervace č.' );
jr_define( '_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Barva pozadí messageboxu, připraveno k rezervaci' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA', 'Vypsat proměnné šablony?' );
jr_define( '_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Přejete-li si vypsat hodnoty DHTML proměnných na frontendu webu, zadejte hodnotu ANO. Užitečné při ladění šablony.' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Hodnota je procentem' );
jr_define( '_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Přejete-li si použít hodnotu SRP kalkulace jako procento, zadejte hodnotu na ANO. V opačném případě je použitá paušální částka.' );
//v2rc2
jr_define( '_JOMRES_COM_LIMITROOMSLIST', 'Omezení dostupných pokojů/ceníků' );
jr_define( '_JOMRES_COM_LIMITROOMSLIST_DESC', 'Přejete-li si omezit počet vypsaných dostupných pokojů a ceníků v objednávce, zadejte požadovanou hodnotu. Hodnota na 0 zakazuje použití funkce omezení a žádné limity nebudou aplikovány. ' );
jr_define( '_JOMRES_SRP_WEHAVENOVACANCIES', 'Aktuálně obsazeno!' );
// Introduced in v2.5
// Translate from here
// v2.6
jr_define( '_JOMRES_BOOKITNOW', 'Zarezervujte nyní: ' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Celkový editační režím?' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Pozor na toto nastavení. Pokud zvolíte ANO, pak vše co nastavíte, bude mít vliv na všechny texty, související s konstatnou, kterou upravujete.' );
jr_define( '_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Hlavní symbol měny' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Spustit komponentu samostatně' );
jr_define( '_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Nastavte na ano, pokud je komponenta spoštěna samostaně a moduly a hlavičky nejsou vidět.' );
jr_define( '_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER', 'Super správce' );
jr_define( '_JOMRES_COM_WEEKENDONLY', 'Pouze o víkendech' );
jr_define( '_JOMRES_COM_WEEKENDDAYS', 'Víkendové dny' );
jr_define( '_JOMRES_COM_WEEKENDDAYS_DESC', 'Nastavte dny víkendu. Tarify, které platí o víkendech, se budou řídit podle tohoto nastavení.' );
jr_define( '_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Před zadáním dalších informací o kapacitě zadejte stát' );
jr_define( '_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Uložte nastavení o kapacitě před tím, než budete nahrávat fotografie.' );
jr_define( '_JOMRES_TARIFFSFROM', 'Ceny od - ' );
jr_define( '_JOMRES_SEARCH_ALL', 'Vše' );
jr_define( '_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Hledat podle země' );
jr_define( '_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Hledat podle regionu' );
jr_define( '_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Hledat podle města' );
jr_define( '_JOMRES_SEARCH_FEATURE_INFO', 'Vlastnosti vyhl.' );
jr_define( '_JOMRES_SEARCH_BUTTON', 'Hledat' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_INFO', 'Vložte frázi, kterou chcete vyhledat a stiskněte talčítko.' );
jr_define( '_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Vyhledat slovo(a): ' );
jr_define( '_JOMRES_SEARCH_AVL_INFO', 'Prosím vložte váš předpokládaný příjezd a odjezd a stiskněte tlačítko. Vyhledáme kapacity s volným ubytováním ve vámi zadaném termínu.' );
jr_define( '_JOMRES_SEARCH_PTYPES', 'Vypsat všechny kapacity dle jejich typu.' );
jr_define( '_JOMRES_SEARCH_RTYPES', 'Vypsat všechny kapacity dle typu pokoje.' );
jr_define( '_JOMRES_SORTORDER_DEFAULT', 'Výchozí' );
jr_define( '_JOMRES_SORTORDER_PROPERTYNAME', 'Název kapacity' );
jr_define( '_JOMRES_SORTORDER_PROPERTYREGION', 'Oblast' );
jr_define( '_JOMRES_SORTORDER_PROPERTYTOWN', 'Město' );
jr_define( '_JOMRES_SORTORDER_STARS', 'Počet hvězdiček' );
jr_define( '_JOMRES_PATHWAY_PROPERTYLIST', 'Seznam kapacit' );
jr_define( '_JOMRES_PATHWAY_PROPERTYDETAILS', 'Podrobnosti o ubytování - ' );
jr_define( '_JOMRES_PATHWAY_BOOKINGFORM', 'Rezervační formulář' );
jr_define( '_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Upravte podrobnosti své adresy' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Znovuověření dostupnosti pokoje<br/>(Předchozí výběr pokojů se vymaže)' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Ověření dostupnosti' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Úprava vašich volitelných doplňků' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Změna výběru pokoje' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Změna údajů v adrese' );
jr_define( '_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Omlouváme se, ale jedno nebo více polí v adrese je vyplněno špatně.' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Fotografie pokoje' );
jr_define( '_JOMRES_CURRENCYFORMAT', 'Formát měny' );
jr_define( '_JOMRES_MANAGEROPTIONSASIMAGES', 'Ukázat nastavení manažera jako piktogramy' );
jr_define( 'JOMRES_COM_A_SEARCHOPTIONSTAB', 'Nastavení hledání' );
jr_define( 'JOMRES_COM_A_AVAILABLELOGS', 'Přístupné Logy' );
jr_define( 'JOMRES_COM_A_LOGS_NOENTRIES', 'Žádné záznamy v logu. Tato situace je naprosto normální, musíte upravit ručně soubor jomres.php.' );
jr_define( 'JOMRES_COM_A_MESSAGE', 'Zpráva' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
jr_define( 'JOMRES_COM_A_TARIFFMODE_NORMAL', 'Normální' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Rozšířený' );
jr_define( 'JOMRES_COM_A_TARIFFMODE', 'Režim cen' );
jr_define( 'JOMRES_COM_A_TARIFFMODE_DESC', 'Nastavte na rozšířený, pokud potřebujete pracovat se složitějšími ceníky' );
jr_define( '_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'Ukázat seznam pokojů na základní stránce kapacity?' );
jr_define( 'JOMRES_PROPERTYTYPE', 'Typ kapacity' );
jr_define( 'JOMRES_COM_A_SRPONLY', 'Pouze celý object' );
jr_define( 'JOMRES_MAXPEOPLEINROOM', 'Maximální počet osob na pokoji' );
jr_define( 'JOMRES_MAXPEOPLEINBOOKING', 'Maximální počet osob na rezervaci' );
jr_define( '_JOMCOMP_BOOKINGNOTES_ADD', 'Vlož poznámku' );
jr_define( '_JOMCOMP_BOOKINGNOTES_EDIT', 'Uprav poznámku' );
jr_define( '_JOMCOMP_BOOKINGNOTES_DELETE', 'Vymaž poznámku' );
jr_define( '_JOMCOMP_BOOKINGNOTES_VIEW', 'Ukaž poznámky' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Vložena nová poznámka' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Upravená poznámka' );
jr_define( '_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Vymazaná poznámka' );
jr_define( '_JOMCOMP_MYUSER_MENUTITLE', 'Moje nastavení' );
jr_define( '_JOMCOMP_MYUSER_LISTBOOKINGS', 'Výpis rezervací' );
jr_define( '_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezervace' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKING', 'Zobrazit rezervace' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Zobrazit oblíbené' );
jr_define( '_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Zatím nemáte žádné oblíbené položky!' );
jr_define( '_JOMCOMP_MYUSER_ADDTOFAVOURITES', 'Vložit do oblíbených' );
jr_define( '_JOMCOMP_MYUSER_PROPERTYTYPE', 'Typ kapacity' );
jr_define( '_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES', 'kapacity na stránce' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE', 'Dynamická cena' );
jr_define( '_JOMCOMP_WISEPRICE_ACTIVE', 'Aktivní' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC', 'Tento plugin vám umožní nastavovat ceny pokojů dynamicky.' );
jr_define( '_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Většina firem se přepočítává ceny pokojů na základě počtu pokojů na požadovaného typu, které jsou k dispozici k určitému datu. To jim umožňuje nabízet slevy na ten druh pokoje, který není obsazen po určitou dobu s cílem zvýšit obsazenost. Povolení a konfigurace tohoto pluginu umožňuje nastavovat ceny pokojů v závislosti na počtu místností vybraného typu pokoje, které jsou k dispozici v kapacitě na daný den. Počet dnů odstupu definuje počet dnů před příjezdem, ve kterých můsí být pokoje volné. Procento znamená relativní počet pokojů z celku, které musí být volné, aby byla uvedá sleva uplatněna.' );
jr_define( '_JOMCOMP_WISEPRICE_THREASHOLD', 'Počet do příjezdu' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Procento obsazených pokojů  10%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Procento obsazených pokojů  25%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Procento obsazených pokojů  50%' );
jr_define( '_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Procento obsazených pokojů  75%' );
jr_define( '_JOMCOMP_WISEPRICE_DISCOUNT', 'Sleva %' );
jr_define( '_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' byla slevněna z původní ceny ' );
jr_define( '_JOMCOMP_WISEPRICE_TO', ' na ' );
jr_define( '_JOMCOMP_WISEPRICE_NOTDISCOUNTED', ' Cena pokoje není slevněna ' );
jr_define( 'JOMRES_COM_A_MAPSKEY', 'Klíč API na Google maps' );
jr_define( 'JOMRES_COM_A_MAPSKEY_DESC', 'Klíč API můžete získat z <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Jakmile uložíte API klíč, Jomres automaticky zobrazí mapu v detailu kapacity.' );
jr_define( 'JOMRES_COM_A_USE_SSL', 'Použít SSL v rezervačním formuláři?' );
jr_define( 'JOMRES_COM_A_USE_SSL_DESC', 'Musíte mít platný SSL certifikát, vystavený pro ' );
jr_define( '_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktivní?' );
jr_define( '_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Nastavte na ano, pokud chcte vytvářet Last Minute nabídky.' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD', 'Práh' );
jr_define( '_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Pokud je příjezd pouze N dnů před učiněním rezervace, může být poskytnuta sleva' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT', 'Sleva' );
jr_define( '_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'v procentech' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'V této rezervaci byla uplatněna sleva!' );
jr_define( '_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Náklady na pobyt byly sníženy ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Tato kapacita nabízí slevu Last Minute ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', ' procent, pokud si zarezervujete svůj příjezd nejpozději ' );
jr_define( '_JOMCOMP_LASTMINUTE_ORMORE', ' procent nebop i více, pokud si zarezervujete svůj příjezd nejpozději ' );
jr_define( '_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Zarezervujte nyní a získejte nejvíce výhod!' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO', 'Detailní informace o cenách' );
jr_define( 'JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Nastavte na ANO, pokud chcete zobrazovat v detailu kapacity podrobný ceník.' );
jr_define( 'JOMRES_COM_A_MINIMALCONFIG', 'Minimalizovat nastavení' );
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
jr_define( '_JRPORTAL_CANCEL', 'Zrušit' );
jr_define( '_JRPORTAL_CPANEL', 'Ovládací panel JRPortal' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Výchozí výše provize' );
jr_define( '_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Zvolte výchozí výši provize, která bude aplikována v případě, že u kapacity nebude určena její individuální výše.' );
jr_define( '_JRPORTAL_CPANEL_LISTCRATES', 'Seznam provizních sazeb' );
jr_define( '_JRPORTAL_CPANEL_PATETITLE', 'Provizní sazba' );
jr_define( '_JRPORTAL_CRATE_TITLE', 'Název' );
jr_define( '_JRPORTAL_CRATE_TYPE', 'Typ' );
jr_define( '_JRPORTAL_CRATE_VALUE', 'Provize' );
jr_define( '_JRPORTAL_CRATE_CURRENCYCODE', 'Kód měny' );
jr_define( '_JRPORTAL_CPANEL_LISTPROPERTIES', 'Seznam kapacit' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Název kapacity' );
jr_define( '_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Adresa' );
jr_define( '_JRPORTAL_PROPERTIES_LEGEND', 'U kapacit, kde je barva pozadí červaná, nebyly ještě aplikovány provizní sazby.' );
jr_define( '_JRPORTAL_STATS_PATETITLE', 'Statistika' );
jr_define( '_JRPORTAL_STATS_STATTYPE', 'Statistika pro: ' );
jr_define( '_JRPORTAL_STATS_STATTYPE_PROPERTIES', 'Vlastnosti - Kliky' );
jr_define( '_JRPORTAL_PROPERTIES_VIEWPROPERTY', 'Zobrazení kapacity' );
jr_define( '_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS', 'Počet rezervací' );
jr_define( '_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS', 'Hodnota rezervací' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE', 'Odhad provizí' );
jr_define( '_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Provizní sazba' );
jr_define( '_JRPORTAL_CPANEL_LISTBOOKINGS', 'Výpis rezervací' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'id kapacity' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID', 'id hosta' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID', 'id sloučení' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'id faktury' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Celkem rezervací' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID', 'id smlouvy' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER', 'Číslo smlouvy' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE', 'Kód měny' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_CREATED', 'Vytvořeno' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED', 'Archivováno' );
jr_define( '_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Datum archivace' );
jr_define( '_JRPORTAL_CPANEL_ADD_ADHOC_ITEM', 'Vlož položku do účtu' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER', 'Manager faktur' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY', 'Přidružená kapacita (pokud lze)' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VALUE', 'Hodnota' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Popis' );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS', "Úspěšné vložení položky účtu do " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS', "Zobrazit objednávky" );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_FAILURE', "Nepodařilo se vložit položku účtu do " );
jr_define( '_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE', "Chyba, nenastavili jste hodnotu účtu" );
jr_define( '_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Můžete založit svoje překladové soubory a použít je v popisu kapacity tak, že založíte podadresář s názevem kapacity a do něj umístíte jazykové soubory..' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Nemůžete tuto kapacitu vymazat, je to jediná kapacita, ke které máte přístup. Pokud ji chcete zakázat, použijte volbu "Nepublikovat" na vaší liště. ' );
jr_define( '_JOMRES_EDITPROPERTY_CONNOTDELETE2', 'Pokud pracujete s DEMO instalací a chystáte upgrade na Jomres Solo, nejprve vytvořte novou kapacitu, následně tuto smažete a pak teprve proveďte upgrade na Jomres Solo.. ' );
jr_define( '_JOMRES_COM_EMAILERRORS', "Zaslat chybová hlášení emailem?" );
jr_define( '_JOMRES_COM_EMAILERRORS_DESC', "Nastavte na ANO pokud chcete dostat do emailové schránky kopii souboru jomres.net automaticky po tom, co nastaně chybová událost. Je to vhodné i pro pozdější podporu a odstranění chyby. Pozor - tato vlastnost je vždy v počátku na počítači 'localhost' zakázána. " );
jr_define( '_JOMRES_COM_ISTHISANMRP', "Jedná se o hotel/penzion/apartmánový dům? " );
jr_define( '_JOMRES_COM_ISTHISANMRP_DESC', "Chování aplikace záleží na tom, jaký typ nemovitosti nabízíte. Pokud se jedná o nemovitost, ve které je více jednotek (hotel, penzion), zvolte MRP. Pokud pronajímáte pouze celý objekt (chata, chalupa), zvolte SRP. . " );
// Jomres v3.0.6
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK', "Použít kontrolu emailu Jomres? " );
jr_define( '_JOMRES_COM_JOMRESEMAILCHECK_DESC', "Zapíná striktní kontrolu emailů. Ochrana některých emailových serverů v případě, že zašlete mejl se špatnou nebo neexistující adresou, vrátí chybové hlášení s kódem 500. Pokud tomu chcete zabránit, zapněte tuto volbu. " );
// Jomres v3.1
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', "Ubytování celkem" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', "nocí v" );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', "za pokoj " );
jr_define( '_JOMRES_AJAXFORM_EXTRAS_TOTAL', "Přirážka za pobyt celkem " );
jr_define( '_JOMRES_AJAXFORM_PRICE_SUMMARY', "Cena celkem " );
jr_define( '_JOMRES_CONFIRMATION_ALERT', "Přečtěte si prosím a vyjádřete souhlas" );
jr_define( '_JOMRES_CONFIRMATION_HEADER', "Zhrnutí vaší rezervace níže<br /> Pokud chcete cokoliv změnit, stiskněte tlečítko Opravit rezervaci. " );
jr_define( '_JOMRES_CONFIRMATION_AMENDTEXT', "Pokud chcete změnit jakoukoliv informaci, uvedenou výše, stiskntě tlačítko" );
jr_define( '_JOMRES_CONFIRMATION_AMEND', "Opravit rezervaci" );
jr_define( '_JOMRES_CONFIRMATION_SPECIALS', "Do pole níže napište jakékoliv speciální přání nebo informaci." );
jr_define( '_JOMRES_CONFIRMATION_TERMS_PRETEXT', "Potvrzuji, že výše uvedené informace jsou pravdivé a souhlasím s nimi. " );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', "za osobu a noc " );
// Jomres 3.1.10
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE', "Výchozí soubor jazyka" );
jr_define( '_JOMRES_COM_A_SITELANGUAGE_FILE_DESC', "Vyberte výchozí soubor pro překlad Jomres, pokud nemá být použito nastavení z komponenty JoomFish!" );
// Jomres 3.1.11
// Jomres 3.1.13
if ( !defined( '_PN_OF' ) ) jr_define( '_PN_OF', 'z' );
if ( !defined( '_PN_START' ) ) jr_define( '_PN_START', 'Začátek' );
if ( !defined( '_PN_PREVIOUS' ) ) jr_define( '_PN_PREVIOUS', 'Předchozí' );
if ( !defined( '_PN_NEXT' ) ) jr_define( '_PN_NEXT', 'Další' );
if ( !defined( '_PN_END' ) ) jr_define( '_PN_END', 'Konec' );
if ( !defined( '_PN_RESULTS' ) ) jr_define( '_PN_RESULTS', 'Výsledky' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Pozor, nejdná se o rezervační formulář, ale odeslání mejlu.<br/>Vložte zprávu, kterou chcete zaslat. ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Chci kontaktovat hotel' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Dotaz na nemovitost z ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Děkujeme za váš dotaz, který byl odeslán na emailovou adresu ubytovacího zařízení. Odpověď dostanete co nejdříve.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' týká se ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1', 'Napište znaky, které vidíte v rámečku' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2', 'Nemohu znaky přečíst. Vygeneruj ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT', 'Odeslat' );
jr_define( '_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT', 'nový obrázek' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Dotaz' );
jr_define( '_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Prosím vyberte požadované ubytování ze seznamu napravo' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Minimální počet vybraných pokojů' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maximální počet vybraných pokojů' );
jr_define( '_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maximální počet pokojů, které musí být vybrány před tím, než bude uplatněn speciální ceník. Umožňuje nastavit, že se mají použít zlevněné ceny v okamžiku, kdy je vybráno N pokojů. ' );
jr_define( '_JOMRES_COM_SPS_EDITROOM_DESC', 'Upozornění! Příplatek za jednu osobu nastavený zde nebude použitý, pokud je nastavený Přípaletek za jednu osobu v hlavní konfiguraci na ANO. Nastavení je zde umístěno z důvodu, aby bylo umožněno pracovat s proměnnými příplatky za jednu osobu. .' );
jr_define( '_JOMRES_AVLCAL_NOBOOKINGS', "Volný" );
jr_define( '_JOMRES_AVLCAL_QUARTER', "Nějaké rezervace" );
jr_define( '_JOMRES_AVLCAL_HALF', "Zpoloviny rezervováno" );
jr_define( '_JOMRES_AVLCAL_THREEQUARTER', "Většinou obsazeno" );
jr_define( '_JOMRES_AVLCAL_FULLYBOOKED', "Zcela rezervováno" );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX', 'Prefix URL' );
jr_define( '_JOMRES_COM_SEF_URL_PREFIX_DESC', 'Toto je první položka, zobrazená po doméně. Změňte, pokud potřebujete. Pokud nechcete používat, nechte prázdné' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY', 'Název úlohy zobrazení kapacity' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING', 'Název úlohy rezervace' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC', '' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH', 'Název úlohy hledání' );
jr_define( '_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY', 'Přidat zemi do url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION', 'Přidat zemi do url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN', 'Přidat město do url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE', 'Add property type to url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME', 'Přidat název kapacity do url' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC', '' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID', 'Doplnit id kapacity do jejího názvu' );
jr_define( '_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC', 'Pokud je nastaveno na NE, pak id kapacity nebude použito. Pokud je nastaveno na ANO, adresa url bude vypadat jako fawlty_towers-1' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY', 'Prohledání struktury URL - Přidat zemi do url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY', 'Prohledání struktury URL - Výchozí země' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC', 'Pokud jsou všechny kapacity v jedné zemi, pak ji není třeba zadávat. Zadejte proto výchozí zemi, která bude při vyhledávání automaticky použita.' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION', 'Prohledávání struktury URL - Přidat region do URL' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION', 'Prohledávání struktury URL - Výchozí region' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_REGION_DESC', 'Pokud jsou všechny kapacity v jednom, pak jej není třeba zadávat. Zadejte proto výchozí region, která bude při vyhledávání automaticky použit.' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN', 'Prohledávání struktury URL - Přidat město do url' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN', 'Prohledávání struktury URL - Výchozí město' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_TOWN_DESC', '' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE', 'Prohledávání struktury URL - Typ kapacity' );
jr_define( '_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC', '' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE', 'Prohledávání struktury URL - Výchozí typ kapacity' );
jr_define( '_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC', 'Použito v url, jestliže vyhledáváte ve všech typech kapacit' );
jr_define( '_JOMRES_COM_SEF_NOTINSTALLED', 'Buď není nainstalována komponenta she404sef, nebo jste nezkopírovali soubor ' . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'jomres' . JRDS . 'com_jomres.php do ' . JOMRESCONFIG_ABSOLUTE_PATH . JRDS . 'components' . JRDS . 'com_sh404sef' . JRDS . 'sef_ext. Jakmile nainstalujete sh404sef a/nebo zkopírujete soubor dle návodu, budete moci nastavovat vaše sef url adresy. ' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO', 'Autodetekce jazyka Javascript kalendáře' );
jr_define( '_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC', 'Pokud nebude možné detekovat jazyk, použije se nastavení níže.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'za týden' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'za týden' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'za rezervaci' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'za osobu a rezervaci' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'za osobu a den' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'za osobu a týden' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per days (min days)' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'za dny X vybrané pokoje' );
jr_define( '_JOMRES_REGISTRYREBUILD', 'Obnovit registr modulů' );
jr_define( '_JOMRES_REGISTRYREBUILD_NOTES', "Běžně je registr modulů Jomres obnovován automaticky pokaždé, když spustíte manažera modulů a přidáte nebo odstraníte modul. Pokud z jakéhokoliv důvodu nemůžete tuto možnost využít, je k dispozici ještě tato volba. Pokud máte přístup do Manažera Modulů a nástroje Uprgade, nebudete tuto volbu potřebovat. Naopak, pokud nainstalujete libovolný modul manuálně, musíte obnovit registr manuálně." );
jr_define( '_JOMRES_REGISTRYREBUILD_SUCCESS', 'Registr úspěšně obnoven' );
jr_define( '_JOMRES_REGISTRYREBUILD_FAILURE', 'Při obnovování registru došlo k chybě. Pro bližší informace a eventuelní nalezení chybného záznamu zkontrolujte prosím Jomres chybový log.' );
jr_define( '_JOMRES_SEARCH_PRICERANGES', 'Vyhledávání dle rozsahu cen.' );
jr_define( 'JOMRES_WORD_SAVING', 'Ukládám...' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS', 'Použít kompozitní zobrazení informací o kapacitě?' );
jr_define( '_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC', 'Jomres 3.3 umožňuje kompozitní zobrazení informací o nemovitosti, kde je celkový výstup formátován podle souboru šablony (composite_property_details.html). Jestliže nechcete využít tohoto nastavení, nastavte volbu na NE (zřejmě stávající uživatelé nastaví na Ne, noví uživatelé budou pravděpodobně volit Ano)' );
jr_define( '_JOMRES_PROFILELIST_INSTRUCTIONS', 'Toto je seznam všech uživatelů systému. Uživatelé, kteří nemají přiřazenu žádnou kapacitu, mají ikonu Host. Výšší úrovně oprávnění mají ikonu Recepce / Správce kapacit / Super správce. <br/> Jomres Při první instalaci je uživateli "admin" je automaticky přiděleno oprávnění správce kapacit a je považován za oprávněného uživatele. <br/> Krom super správce, musí mít každý oprávněný uživatel přiřazen alespoň jeden objekt(kapacitu). V opačném případě jeho přihlášení do Jomres vyvolá chybu.<br/> Jakmile je uživatel potvrzen, můžete upravit jeho profil, přiřadit jim kapacitu nebo jim dát práva super správce. <br/> Chcete-li povolit uživatele, klikněte na červený kříž vedle jejich jména. Pro zrušení autorizace klikněte na zalené zaškrtnutí. <br/> Chcete-li přiřadit uživatelům pouze specifické vlastnosti, nebo jim dát práva super správce, potom klikněte na ikonu editovat (ta je viditelná pouze u povolených uživatelů). Uživatelé, kteří už zaregistrovali svoji kapacitu, se k němu automaticky přiřadí. Super správci mají automaticky právo na nastavení všech vlastností, a uvidí i všechny možnosti konfigurace. Tato možnost může být ovlivněna nastavení v administrátosrké části konfigurace.' );
jr_define( '_JOMRES_PROFILEEDIT_INSTRUCTIONS', 'Zde můžete přiřadit manažerům jejich kapacity. Ujistěte se, že v případě, kdy se nejedná o super správce, má přiřazenu alespoň jednu kapacitu, jinak jejich přihlášení vyvolá chybu. Naopak, aby recepční nebo manažer kapacit měl přístup pouze ke svým kapacitám, je třeba, aby rozbalovací nabídka Super správce není nastavena na hodnotu Ano.' );
jr_define( '_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Zatím jste neudělali žádnou rezervaci!' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB', 'Typ kapacity' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Upravit typ kapacity' );
jr_define( '_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Vybrat typ kapacity' );
jr_define( '_JOMRES_COM_LOGGING', 'Jomres logy' );
jr_define( '_JOMRES_COM_LOGGING_WARNING', 'Tato nastavení umožňují ovládat zápisy do log souborů systému Jomres. Zápisy chyb jsou vždy povoleny, ale ostatní zápisy do log souboru, jako jsou rezervace, přihlášení, hlášení systému a požadavky mohou být nastaveny na ano nebo ne. Upozorňujeme, že <b>zapnutí logování je velmi výhodné z hlediska ladění programu a dohledávání chyb, ale nese s sebou velé bezpečnostní riziko</b> zejména v možnosti, že uživatelé bez příslušné auutorizace mohou otevřít logovací soubor a číst v něm. Proto prosím nechte nastavení logů vypnuté, není-li opravdu netné je používat. Pokud logování zapnete, ujistěte se, že složka <i>' . JOMRESPATH_BASE . JRDS . 'temp' . JRDS . '</i> neobsahuje žádné staré log soubory. Uvědomte si, že zapnutí logování vede i ke zpomalení činnosti systému vzhledem ke shromažďování velkého množství informací.' );
jr_define( '_JOMRES_COM_LOGGING_BOOKING', 'Logování rezervačního formuláře (Logy rezervačního procesoru) ' );
jr_define( '_JOMRES_COM_LOGGING_GATEWAY', 'Logy brány (jako paypal atd.) ' );
jr_define( '_JOMRES_COM_LOGGING_REQUEST', 'Logy požadavků (všechny příchozí požadavky serveru)' );
jr_define( '_JOMRES_COM_LOGGING_SYSTEM', 'Systém (různé logy) ' );
jr_define( '_JOMRES_COM_LOGGING_JRPORTAL', 'JR Portál (hlavně pro záznam provizí) ' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Váš dotaz...' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE', 'Rezervační formulář ukázat obrázek typu pokoje' );
jr_define( '_JOMRES_COM_A_LISTLIMIT', 'Limit výpisu kapacit' );
jr_define( '_JOMRES_COM_A_LISTLIMIT_DESC', 'Počet kapacit, vypsaných na jedné stránce po skončení vyhledávání' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Integrované vyhledávání' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Integrované vyhledávání Jomres umožňuje uživatelům vyhledávat kapacity pomocí celé sady funkcí. Pokud jste již používali vyhledávací funkce Jomres v Joomle, budete toto nastavení znát. <br/> Tato funkce nám umožňuje nabídnout vyhledávání v systému Jomres pro ty uživatele, kteří nepoužívají vyhledávací moduly, obsažené v Joomla nebo pro ty uživatele, jejichž CMS vlastní vyhledávací modul nemá. <br/> Jen nezapomeňte, že pokud se rozhodnete hledat něco přes odkaz (tj. nikoli rozbalovací), pak další možnosti vyhledávání nebude možné provést, bude hledán pouze prvek, který odpovídá na odkazu, který jste klikli. <br/> Všimněte si, že ve výchozím nastavení zobrazení nevypadá integrované vyhledávání moc hezky. To proto, že soubor šablony, který zajišťuje zobrazení, musí obsahovat všechny možnosti, z nichž některé jsou vzájemně neslučitelné. Pro zlepšení a úpravu vzhledu do podoby, jakou si přejete, musíte upravit <b> srch.html </ b> ve složce <b> ' . JOMRES_TEMPLATEPATH_FRONTEND . '</b> ' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Aktivovat toto nastavení?' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Pokud je toto nastavení povoleno, potom jakýkoliv požadavek, který zobrazuje výpis kapacit, bude zároveň zobrazovat i možnosti vyhledávání' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Použij sloupce' );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', "Jakákoliv možnost vyhledávání, kterou definujete jako typ odkaz (tam, kde je to relevantní) bude zobrazena jako sloupec. (IE vloží značku br na konec odkazu)" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS', "Vlastnosti sloupců" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC', "Počet piktogramů, které budou vloženy před značku br - tedy před přechodem na další řádek." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', "Vyhledávání regionů pomocí výběru v combo seznamu" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', "Nabízí možnost výběru v seznamu, vyfiltrovanému na země/regiony/města. Pokud chete toto nastavení používat, je lépe neoužívat vyhledávání regionů a měst níže." );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', "Vyhladání kapacity podle jména" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', "Zobrazit vyhledávání podle názevu kapacity" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', "Zobrazit jako pole se seznamem?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', "Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', "Vyhledávat podle města/regionu" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', "Zobrazit vyhledávání podle regionu" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', "Zobrazit jako pole se seznamem?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', "Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', "Vyhledávání podle typu kapacity" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', "Zobrazit vyhledávání podle typu kapacity" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', "Zobrazit jako pole se seznamem?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', "Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', "Vyhledávání podle typu pokoje" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', "Zobrazit vyhledávání podle typu pokoje" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', "Zobrazit jako pole se seznamem?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', "Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', "Vyhledávání podle vlastností" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', "Zobrazit vyhledávání podle vlastností" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', "Zobrazit jako pole se seznamem?" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', "Nastavit na NE, pokud nechcete, aby se nezobrazoval seznam jako odkazy" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', "Vyhledávání podle popisu" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', "Zobrazit vyhledávání podle popisu" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', "Vyhledávání podle dostupnosti" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', "Zobrazit vyhledávání podle dostupnosti" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', "Vyhledávání dle rozsahu cen" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', "Zobrazit vyhledávání podle cen" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', "Přírůstek cenového rozpění" );
jr_define( '_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', "Jomres vyhledá všechny hodnoty v cenících, jejichž rozsahy odpovídají zde nastavené zvýšené ceně." );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Ve výchozím nastavení, pokud není vybraná žádná kapacita, Jomres spustí vyhledávání. Pokud toto vyhledávání nebylo spuštěno vyhledávacím modulem, pak dojde k záměrnému vygenerování náhodných výsledků (záměrně). Tato volba umožňuje omezit počet výsledů tohoto náhodného hledání.' );
jr_define( '_JOMRES_COM_A_CRON_TITLE', 'Nastavení a logy procesu Cron' );
jr_define( '_JOMRES_COM_A_CRON_DESC', 'Inforamce o úloze Cron. Tato úloha je nezbytná pro funkčnost fakturace a zúčtování provizí' );
jr_define( '_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Intalované minikomponenty úlohy Cron. Ke spuštění dané úlohy použijte příslušný odkaz. Uvědomte si, že úloha nebude mít žádný výstup na obrazovku a nebudete tím pádem mít žádnou zpětnou vazbu. Místo toho nahlédněte do log souboru níže.' );
global $jomresConfig_secret;
jr_define( '_JOMRES_COM_A_CRON_METHOD', 'Metoda' );
jr_define( '_JOMRES_COM_A_CRON_METHOD_DESC', "Jestliže nemáte přístup k procesu Cron, nastavte tuto minikomponentu. Jinak vytvřte Cron úlohu a jako parametr ke spuštění zadejte <br /> <i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=component&no_html=1&secret=" . $jomresConfig_secret . "> /dev/null</i> " );
jr_define( '_JOMRES_COM_A_CRON_LOGGING', 'Zobrazit logy v prohlížeči' );
jr_define( '_JOMRES_COM_A_CRON_LOGGING_DESC', 'Pracuje pouze, pokud je metoda nastavena na minikomponentu.' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Záznam logu povolen' );
jr_define( '_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Nastavte ANO pro povolení záznamu do log souboru. Výsledky budou ve výstupním souboru uvedeném níže.' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS', 'Podrobné protokolování' );
jr_define( '_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Výstup logů' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Úprava šablony' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_DESC', 'Tato funkce umožňuje upravit šablonu frontendu na serveru, ukládat výsledky do databáze. Funkce pouze pro pokročilé uživatele.' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME', 'Název šablony' );
jr_define( '_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED', 'Šablona byla upravena?' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Uživatelská pole' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESC', 'Zde můžete nadefinovat uživatelská pole, která budou následně zobrazena v rezervačním formuláři.' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Název pole (bez mezer)' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Výchozí hodnota' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Popis' );
jr_define( '_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Vyžadováno' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maximální množství' );
jr_define( '_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Pokud je Maximální hodnota nastavena na hodnotu vyšší jak 1, pak se zobrazí pole se seznamem s výběrem hodnot. ' );
jr_define( '_JRPORTAL_INVOICES_ISSUE', "Vystavení faktur" );
jr_define( '_JRPORTAL_TAXRATES_TITLE', "Dazby DPH" );
jr_define( '_JRPORTAL_TAXRATES_CODE', "Kód daně" );
jr_define( '_JRPORTAL_TAXRATES_DESCRIPTION', "Popis daně" );
jr_define( '_JRPORTAL_TAXRATES_CANNOTDELETE', "Nemůžete vymazat tuto sazbu daně." );
jr_define( '_JRPORTAL_TAXRATES_RATE', "Daň" );
jr_define( '_JRPORTAL_INVOICES_TITLE', "Faktury" );
jr_define( '_JRPORTAL_INVOICES_STATUS_UNPAID', "Nazaplacená" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PAID', "Zaplacená" );
jr_define( '_JRPORTAL_INVOICES_STATUS_CANCELLED', "Zrušená" );
jr_define( '_JRPORTAL_INVOICES_STATUS_PENDING', "Čeká na vyřízení" );
jr_define( '_JRPORTAL_INVOICES_USER', "Uživatel" );
jr_define( '_JRPORTAL_INVOICES_STATUS', "Status" );
jr_define( '_JRPORTAL_INVOICES_RAISED', "Zvýšení" );
jr_define( '_JRPORTAL_INVOICES_DUE', "Splatnost" );
jr_define( '_JRPORTAL_INVOICES_SUBSCRIPTION', "Schválení" );
jr_define( '_JRPORTAL_INVOICES_INITTOTAL', "Celkem nezaplaceno" );
jr_define( '_JRPORTAL_INVOICES_RECUR_TOTAL', "Periodická platba" );
jr_define( '_JRPORTAL_INVOICES_RECUR_FREQUENCY', "Frekvence plateb" );
jr_define( '_JRPORTAL_INVOICES_RECUR_DOMONTH', "Platební den" );
jr_define( '_JRPORTAL_INVOICES_CURRENCYCODE', "Kód měny" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS', "Položky řádku" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_NAME', "Jméno" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', "Popis" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', "Základní cena" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', "Základní množství" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', "Základní sleva" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', "Celkem" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE', "Periodická platba" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY', "Periodické množství" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT', "Periodická sleva" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL', "Celkem per. platba" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', "Kód daně" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', "Popis daně" );
jr_define( '_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', "Sazba daně" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE', "Nastavení Paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE', "Kód měny (např. EUR)" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX', "Použít schránku sandbox?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL', "Vaše emailová adresa pro paypal" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES', "Poznámka: Pokud chcete používat PayPal, musíte se nejprve do něj přihlásit a zrušit funkci Autoreturn. (Profile/Website Payment Preferences), a nastavit IPN (Profile/Instant Payment Notification Preferences) na URL adresu:<br/><b>&nbsp;" . JOMRES_SITEPAGE_URL_AJAX . "&task=completebk" );
jr_define( '_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY', "Faktura je nyní splatná. Stiskem tlačítka ji zaplatíte pomocí PayPal." );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', "Ignorovat standardní nastavení platební brány Jomres?" );
jr_define( '_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC', "Pokud je nastaveno na ANO, stane se následující: V Hlavní konfiguraci se neobjeví žádná nastavení platební brány, a za druhé, pokud je provedena rezervace, je také platba odeslána na adresu uvedenou zde, nikoliv na tu uvedenou před tím v Hlavní konfiguraci." );
jr_define( '_JRPORTAL_INVOICES_SHOWINVOICES', "Ukaž mé faktury" );
jr_define( '_JRPORTAL_COUPONS_TITLE', "Slevové kupony" );
jr_define( '_JRPORTAL_COUPONS_DESC', "Kódy slevových kuponů mohou být vygenerovány a zaslány uživatelům systému, aby byla podpořena poptávka po rezevování kapacit. Datum platnosti se vztahuje na použití slevového kuponu, nikoliv na datum rezervace jako takové." );
jr_define( '_JRPORTAL_COUPONS_CODE', "Kód kuponu" );
jr_define( '_JRPORTAL_COUPONS_VALIDFROM', "Platnost od" );
jr_define( '_JRPORTAL_COUPONS_VALIDTO', "Platnost do" );
jr_define( '_JRPORTAL_COUPONS_AMOUNT', "Výše slevy" );
jr_define( '_JRPORTAL_COUPONS_ISPERCENTAGE', "Sleva je procentní" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY', "Pouze pokoj" );
jr_define( '_JRPORTAL_COUPONS_ROOMONLY_DESC', "Sleva je nyní použita pouze na náklady za pokoj. Pokud je nastaveno na Ne, je sleva použita na náklady za celý pobyt." );
jr_define( '_JRPORTAL_COUPONS_SQLERROR', "Chyba Sql při pokusu o vymazání nebo vložení kuponu" );
jr_define( '_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Pokud máte kód slevového kuponu, napište nebo zkopírujte jej do tohoto pole a stiskněte tlačítko Ulož slevu. Vaše sleva bude uplatněna na tuto rezervaci.' );
jr_define( '_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Ulož slevu' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Sleva uložena do rezervace' );
jr_define( '_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Kód slevového kuponu nenalezen' );
jr_define( '_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Výše slevy na kuponu' );
jr_define( '_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezervace se slevou. Kód kuponu/sleva/nastavení kuponu: ' );
jr_define( '_JOMRES_COM_CACHING', 'Použít Jomres cache?' );
jr_define( '_JOMRES_COM_CACHING_DESC', 'Nastavte na NE, pokud chcete zakázat cachování v rámci programu Jomres.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES', 'Volba jazyka' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Vyberte jazyky, které chcete vybírat v přepínacím seznamu jazyků.' );
jr_define( '_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Ukázat výběr jazyka?' );
jr_define( '_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS', 'Odhlášené a zrušené rezervace' );
/*
* @ignore
*/
jr_define( '_JRPORTAL_NEWUSER_DEAR', "Vážený/á" );
jr_define( '_JRPORTAL_NEWUSER_THANKYOU', "Děkujeme za registraci " );
jr_define( '_JRPORTAL_NEWUSER_USERNAME', "Vaše uživatelské jméno je : " );
jr_define( '_JRPORTAL_NEWUSER_PASSWORD', "Vaše heslo : " );
jr_define( '_JRPORTAL_NEWUSER_LOG_IN', "Prosím přihlašte se, aby jste mohli prohlížet Vaše rezervace " );
jr_define( '_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kupón uložen' );
jr_define( '_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kupón vymazán' );
// Not used yet
jr_define( '_JOMRES_COM_GROWL', 'Použít Jomres zpracování zpráv' );
jr_define( '_JOMRES_COM_GROWL_DESC', 'Mnoho zprávců požaduje zpětnou vazbu o tom, že stránka byla znovu načtena. K tomu slouží tato volba.' );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TITLE', "Jomres -> Clickatell SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_USERNAME', "Jméno" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_PASSWORD', "Heslo" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_APIID', "API id" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', "Číslo telefonu pro zaslání potvrzení" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Prosím, použijte formát 'Country code, mobile number'. Např: '420123456789'. Nevyplňujte, pokud nechcete dostávat zprávy o odeslání." );
jr_define( '_JRPORTAL_SMS_CLICKATELL_TABTITLE', "SMS" );
jr_define( '_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS', "
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
* Vyplňte zbytek formuláře. Ujistěte se, že jste zadali správnou adresu IP(IP adresu tohoto serveru), nastavte Callback na HTTP POST. Musíte nastavit IP callback na " . $jomresConfig_live_site . "/index.php?option=com_jomres&task=sms_clickatell_callback a dále userid a heslo.<br/>
Pokud zadáváte více než jedno API spojení, jejich popis musí být vždy jedninečný - nelze mít více API se stejným názvem.<br/>
Po úspěšném odeslání formuláře se zobrazí všechny detaily vašeho připojení, včetně seznamu všech API a jejich jedinečného id. Všechny tyto údaje jsou potřebné pro přojení k bráně Clickatell a odeslání zpráv.<br/>
<br/>
Použijte userid, heslo a api_id v vyplnění příslušných polí.<br/>
<br/>
" );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Ukázat zakázaný přístup k rezervačnímu formuláři' );
jr_define( '_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Ukázat maximální počet osob v rezervačním formuláři' );
jr_define( '_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', "Prosím uvědomte si, že uvedé ceny jsou pouze přibližné. Přesné ceny budou vypočteny teprve až vyberete pokoj nebo pokoje." );
jr_define( '_JOMRES_LASTEDITED_DB', 'Poslední změna databáze šablon' );
jr_define( '_JOMRES_LASTEDITED_DISK', 'Poslední změna šablony na disku' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON', 'Varování databáze šablon' );
jr_define( '_JOMRES_LASTEDITED_WARNINGICON_TEXT', 'Databáze šablon může být zastaralá' );
jr_define( '_JOMRES_LASTEDITED_WARNING', 'Jestliže u šablony vidíte piktogram, pak to znamná, že Jomres detekoval, že šablona, která je uložena v databázi <strong><i>může</i></strong> starší než ta, která je uložena na disku. V tomto případě je možné, že šablona byla aktualizována instalací nové verze Jomres. V tomto případě je možné, že šablona nebude moci plně využít funkce v nové verzi Jomres nebo instalované funkce nepracují tak, jak se očekávalo. Měli byste srovna soubory na disku s vaším nastavením, aby nedocházelo ke zbytečné ztrátě funkcionality.' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', "Předplacené balíčky" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', "Jméno" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', "Popis" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', "Publikováno" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY', "Četnost" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD', "ZKušební období" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT', "Zkušební obnos" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', "Plný obnos" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT', "Limit pokojů" ); // Not currently used, saved for a rainy day
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', "Limit kapacit" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC', "Četnost: M/Q/B/A Měsíčně/Q(kvartálně)/B(půlročně)/A(ročně)" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC', "Zkušební období: Vstup celé číslo, 0 (nula) nenastaveno, 1 jeden měsíc, 2 dva měsíce atd." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', "Předplatit" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC', "Prosím vložte/změnte vaše údaje. Upozorňujeme, že všechna pole jsou povinná." );
jr_define( '_JRPORTAL_SUBSCRIBERS_FIRSTNAME', "Jméno" );
jr_define( '_JRPORTAL_SUBSCRIBERS_SURNAME', "Příjmení" );
jr_define( '_JRPORTAL_SUBSCRIBERS_ADDRESS', "Adresa" );
jr_define( '_JRPORTAL_SUBSCRIBERS_COUNTRY', "Země" );
jr_define( '_JRPORTAL_SUBSCRIBERS_POSTCODE', "PSČ" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1', "Potřebujete platnou registraci k vytvoření nových kapacit. V tomto okamžiku, jste si zakoupili předplatné na " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2', " zveřejněných kapacit. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3', "Můžete zvýšit počet kapacit, které můžete vytvořit pomocí <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>zakoupením většiho množství předplatného.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4', " Používáte " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5', " kapacitních složek. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6', "Na výpis vašich aktuálních kapacit klikněte na <a href='" . JOMRES_SITEPAGE_URL . "&task=listyourproperties'>here</a>. " );
jr_define( '_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7', "Na výpis všech dostupných balíčků předlatného klikněte na <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages'>here</a>. " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR', "Bohužel, nemůžete zveřejnit tuto kapacitu, dosáhli jste maximálního počtu otevřených kapacitních složek." );
jr_define( '_JRPORTAL_SUBSCRIBERS_SUBSCRIBED', "Děkujeme Vám za objednávku zveřejnění Vašich kapacit na našem serveru. Jakmile bude Vaše faktura označna jako zaplacená, můžete pokračovat zde: <a href='" . JOMRES_SITEPAGE_URL . "&task=registerProp_step1'>a zadat údaje o vašich kapacitách.</a>" );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE', "Je nám líto, že jste se nerozhodli por využití našich služeb. Pokud V8m můžeme jakkoliv pomoci, neváhejte a kontaktujte nás." );
jr_define( '_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH', "Omlouvám se, ale dosáhli jste maximálního počtu kapacit, které můžete mít zveřejněné v jednom okamžiku. Pokud chcte jejich počet zvýšit, kliněnte na <a href='" . JOMRES_SITEPAGE_URL . "&task=list_subscription_packages&Itemid=" . $Itemid . "'>objednávku dalších balíčků.</a> " );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_USE', "Použít funkce předplatného" );
jr_define( '_JOMRES_COM_NEWUSER', 'Při rezervaci vytvořit nového uživatele' );
jr_define( '_JOMRES_COM_NEWUSER_DESC', 'Pokud rezervaci zadává neregistrovaný uživatel, automaticky proběhne vytvoření nového uživatele.' );
jr_define( '_JOMRES_CLICKTOREGISTER', 'Klikněte zde pro zadání vaší kapacity' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE', "Aktivní předplatné" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID', "id brány předplatného" );
jr_define( '_JRPORTAL_NEWUSER_SUBJECT', "Děkujeme za rezervaci. Níže jsou uvedeny údaje nového uživatele" );
jr_define( '_JOMRES_LATLONG_DESC', "Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude." );
jr_define( '_JOMRES_CONTROLPANEL', 'Ovládací panel' );
jr_define( '_JOMRES_COM_FAUXHEADERS', 'Vložit Jomres javascript do těla html místo do hlavičky?' );
jr_define( '_JOMRES_COM_FAUXHEADERS_DESC', 'Nastavte na ANO, pokud dochází k problémům s MSIE a Javascriptem, umístěným v hlavičce stránky. Tato volba umístí Javascript až za tag body.' );
// Jomres v4.2
jr_define( '_JOMRES_MANAGER_SHOWINVOICE', 'Zobrazit fakturu' );
jr_define( '_JOMRES_MANAGER_SHOWINVOICES', 'Zobrazit faktury' );
jr_define( '_JOMRES_USER_LISTMYPROPERTY', 'Vložit moji kapacitu na tuto stránku' );
jr_define( '_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Varování : ' );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES', "Můžete vytvořit i tzv. balíček zdarma a to tak, že po jeho vytvoření nastavíte jak zkušební částku, tak plnou částku na hodnotu 0.00" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', "Omlouvám se, ale ID balíčku nebylo rozpoznáno." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', "Omlouvám se, ale už jste jednou použil balíček zdarma a nemůžete jej použít znovu." );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL', " Status <b>0:</b> Očekávaná platba <b>1:</b> Vytvořeno <b>2:</b> Zrušeno <b>3:</b> Termín ukončení" );
jr_define( '_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS', "Můj účet" );
jr_define( '_JOMRES_COM_YOURBUSINESS', 'Vaše obchodní údaje' );
jr_define( '_JOMRES_COM_YOURBUSINESS_NAME', 'Obchodní jméno' );
jr_define( '_JOMRES_COM_YOURBUSINESS_VATNO', 'DIČ' );
jr_define( '_JOMRES_COM_YOURBUSINESSADDRESS', 'Číslo popisné' );
jr_define( '_JOMRES_COM_A_TAX_WARNING2', '<font color=red>POZNÁMKA: Následující sazba daně je pro použití v USA. Pokud chcte používat režim evropské DPH, vyberte sazbu z nabídky nahoře</FONT>' );
jr_define( '_JOMRES_INVOICE_NUMBER', 'Číslo faktury ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Vyberte data, která chcete použít pro anonymní rezervaci. Poté, co jste vyberete vhodná data, klikněte na tlačítko "Použít" a znovu proveďte kontrolu dostupnosti. <br/>
<br/>Pokud v kapacitě je jedna nebo více rezervací za vybrané období, pak nebudete moci objednat až do té chvíle, kdy bude druhá rezervace / anonymní rezervace zrušena nebo odhlášena. ' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Bohužel, na tento termín nelze provést nanonymní rezervaci.' );
jr_define( '_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Na tento termín lze provést anonymní rezervaci.' );
jr_define( '_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Platba za tuto kapacitu je nastavena na osobu a noc, ale nemáte vytvořený nebo zveřejněný žádný typ hosta. Prosím vytvořte, případně zveřejněte alespoň jeden typ hosta pro tuto kapacitu. ' );
jr_define( '_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Zatím nemáte žádnou pložku v ceníku, nebude možné pro tuto kapacitu přijímat rezervace.' );
jr_define( '_JOMRES_EDITINGMODE_ON', 'Režim úprav zapnutý' );
jr_define( '_JOMRES_EDITINGMODE_OFF', 'Režim úprav vypnutý' );
jr_define( '_JOMRES_COM_INVOICE_PRINT', 'Vytiskni fakturu' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Charge variable deposits?' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.' );
jr_define( '_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'The number of days, within which the full amount will be charged as a deposit.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN', 'Send Contact Owner emails to Alternative address?' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_DESC', 'Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.' );
jr_define( '_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE', 'Alternative address for Contact Owner emails.' );
jr_define( '_JOMRES_CONFIRMATION_EMAIL_SENT', 'Confirmation email has been sent. You may close this window now.' );
jr_define( '_JOMRES_REALESTATE_TITLE', 'Real estate listing' );
jr_define( '_JOMRES_REALESTATE_YESNO', 'Is this property a for sale listing?' );
jr_define( '_JOMRES_REALESTATE_YESNO_DESC', 'Select Yes if you are selling the property, select No if it is a listing where you will be offering short term rentals and will be using this system for taking bookings.' );
jr_define( '_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Contact agent' );
jr_define( '_JOMRES_INVOICE_MARKASPAID', 'Mark invoice as paid' );
jr_define( '_JOMRES_INVOICE_MARKEDASPAID', 'Invoice marked as paid' );
jr_define( '_JOMRES_APIKEY_REMAKE', 'Make new API key' );
jr_define( '_JOMRES_AUTOTRANSLATE_TITLE', 'Use Google for initial translations?' );
jr_define( '_JOMRES_AUTOTRANSLATE_DESC', 'This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Is this a single property installation?' );
jr_define( '_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>' );
jr_define( '_JOMRES_HTMP_PURIFIER', 'Use HTML purifier functionality?' );
jr_define( '_JOMRES_HTMP_PURIFIER_DESC', 'Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Balance payment' );
jr_define( '_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE', 'Balance' );
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
jr_define( '_JOMRES_REVIEWS', 'Reviews' );
jr_define( '_JOMRES_REVIEWS_TITLE', 'Review title' );
jr_define( '_JOMRES_REVIEWS_DATE', 'posted on ' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS', 'There are no reviews for this property yet.' );
jr_define( '_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Would you like to be the first to review this property?' );
jr_define( '_JOMRES_REVIEWS_IAGREE', 'I agree with this review' );
jr_define( '_JOMRES_REVIEWS_IDISAGREE', 'I disagree with this review' );
jr_define( '_JOMRES_REVIEWS_AVERAGE_RATING', 'Average Rating: ' );
jr_define( '_JOMRES_REVIEWS_TOTAL_VOTES', 'Total Votes:' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW', 'Add a new review.' );
jr_define( '_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'You need to be logged in to post a review.' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY', 'Tell us what you think about this property : ' );
jr_define( '_JOMRES_REVIEWS_REVIEWBODY_SAID', 'This reviewer told us : ' );
jr_define( '_JOMRES_REVIEWS_PROS', 'Pros: ' );
jr_define( '_JOMRES_REVIEWS_CONS', 'Cons: ' );
jr_define( '_JOMRES_REVIEWS_SUBMITTEDDATE', 'Submitted On: ' );
jr_define( '_JOMRES_REVIEWS_ALREADYREVIEWED', 'You have already reviewed this property, you can\'t post another review about it.' );
jr_define( '_JOMRES_REVIEWS_CANNOTREVIEW', 'Sorry, but you are not allowed to post reviews on this site.' );
jr_define( '_JOMRES_REVIEWS_CLICKTOSHOW', 'Click to show reviews' );
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
jr_define( '_JOMRES_REVIEWS_SUBMIT', 'Submit' );
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
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE', 'Are prices set inclusive of tax?' );
jr_define( '_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'Extras tax:' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Start range' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'End range' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Rate' );
jr_define( '_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Set rates' );
jr_define( '_JOMRES_PARTNERS_TITLE', 'Partners' );
jr_define( '_JOMRES_CALENDAR_TODAY', 'Today' );
jr_define( '_JOMRES_CALENDAR_PREV', 'Previous' );
jr_define( '_JOMRES_CALENDAR_NEXT', 'Next' );
jr_define( '_JOMRES_CALENDAR_RTL', 'false' );
jr_define( '_JOMRES_ROOMALLOCATIONS_ROOM', 'Room ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_GUESTS', 'guest(s). ' );
jr_define( '_JOMRES_ROOMALLOCATIONS_INFORMATION', 'This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.' );
jr_define( '_JOMRES_SANITY_CHECK_NOT_PUBLISHED', "Note that your property is not yet published, only you can see the property, site visitors will not see it" );
// 4.5.5
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Default search result order' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Change this option to change the order that search results are presented by default.' );
jr_define( '_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Show search result order dropdown' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE', 'Rooms list style' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_DESC', 'In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Classic' );
jr_define( '_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Room types' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START', '(Re)checking availability' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS', 'Rebuilding available rooms list' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS', 'Calculating totals' );
jr_define( '_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE', 'Finished form update' );
jr_define( '_JOMRES_COM_CALENDAR_STARTDAY', 'Calendar week start day, Sunday or Monday' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Only property guests can review?' );
jr_define( '_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.' );
jr_define( '_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Per room' );
jr_define( '_JOMRES_MAX_GUESTS_PER_ROOM', 'Guests per room : ' );
jr_define( '_JOMRES_MAX_GUESTS_PER_BOOKING', 'Guests per booking : ' );
jr_define( '_JOMRES_NUMBER_OF_ROOMS', 'Number of rooms' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT', 'Tariff default price' );
jr_define( '_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC', "This only applies to new tariffs" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW', "Years to show" );
jr_define( '_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC', "Defines the number of years to show when editing a micromanage tariff" );
jr_define( '_JRPORTAL_MONTHS_LONG_0', 'January' );
jr_define( '_JRPORTAL_MONTHS_LONG_1', 'February' );
jr_define( '_JRPORTAL_MONTHS_LONG_2', 'March' );
jr_define( '_JRPORTAL_MONTHS_LONG_3', 'April' );
jr_define( '_JRPORTAL_MONTHS_LONG_4', 'May' );
jr_define( '_JRPORTAL_MONTHS_LONG_5', 'June' );
jr_define( '_JRPORTAL_MONTHS_LONG_6', 'July' );
jr_define( '_JRPORTAL_MONTHS_LONG_7', 'August' );
jr_define( '_JRPORTAL_MONTHS_LONG_8', 'September' );
jr_define( '_JRPORTAL_MONTHS_LONG_9', 'October' );
jr_define( '_JRPORTAL_MONTHS_LONG_10', 'November' );
jr_define( '_JRPORTAL_MONTHS_LONG_11', 'December' );

jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS', "Property management process" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC', "There are different management processes depending on the way you want to list your property/business." );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL', "Rental" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC', "Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE', "Realestate/simple listing" );
jr_define( '_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC', "Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)" );

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
jr_define( '_JOMRES_MY_ACCOUNT_EDIT', 'Edit account' );
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
jr_define( '_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.' );

// 4.7.3
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Advanced site config' );
jr_define( '_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Solo, Silver or Gold. Users of the free, core system will not be able to take full advantage of the features that they enable.' );

jr_define( '_JOMRES_CONFIG_JQUERY_UI', "Load Jomres jQuery UI library?" );

jr_define( '_JOMRES_SORTORDER_PRICE_DESC', 'Price (highest first)' );
jr_define( '_JOMRES_SORTORDER_PRICE_ASC', 'Price (lowest first)' );

// 4.7.6

jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Price summary and estimates should be priced as per night/per week/per month?' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Per night' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Per week' );
jr_define( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Per month' );
jr_define( '_JOMRES_BOOKINGFORM_PERPERSON', 'Per person' );

jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'week(s) at ' );
jr_define( '_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'month(s) at ' );

// 4.7.7

jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'How should the search option for people numbers work?' );
jr_define( '_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Please wait, your order is being processed and you will be redirected to the Paypal website.' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'If you are not automatically redirected to Paypal within 5 seconds...' );
jr_define( '_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Click Here' );
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
jr_define( '_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', "Total inc tax" );
jr_define( '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Unpublished property' );


// v5.2
jr_define( '_JOMRES_CONVERSION_TITLE', "Use conversion functionaity" );
jr_define( '_JOMRES_CONVERSION_TITLE_DESC', "Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets." );
jr_define( '_JOMRES_CONVERSION_DISCLAIMER', "We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk." );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_TITLE', "Use javascript caching?" );
jr_define( '_JOMRES_JAVASCRIPT_CACHING_DESC', "Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. " );

// 5.2.1
jr_define( '_JOMRES_HISTORIC_GUESTS_SHOW', "List historic and current guests" );
jr_define( '_JOMRES_HISTORIC_GUESTS_NOSHOW', "Current guests only" );

// 5.3.1
jr_define( '_JOMRES_CURRENCYCONVERSION_TAB', 'Currency conversion/currency codes' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Detection API Key' );
jr_define( '_JOMRES_IP_DETECTION_API_KEY_DESC', 'To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.' );
jr_define( '_JOMRES_DEBUGGING_TAB', 'Debugging' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP', 'Show the booking form in a modal popup?' );
jr_define( '_JOMRES_BOOKINGORM_MODALPOPUP_DESC', 'If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION', 'Totals panel location' );
jr_define( '_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC', 'In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Accomodation ex tax' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Accomodation inc tax' );
jr_define( '_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'Rooms tax:' );
jr_define( '_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Open the booking form' );

jr_define( '_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Back to property details' );
jr_define( '_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatically Selected?' );
jr_define( '_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Balance (after deposit paid)' );

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

jr_define( '_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Override Accommodation Total' );
jr_define( '_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Save override' );

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

jr_define( '_JOMRES_PRODUCT_INFORMATION', 'Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.' );
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

jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_LIST', "List view" );
jr_define( '_JOMRES_PROPERTYLIST_LAYOUT_TILE', "Photo view" );

jr_define( '_JOMRES_COMPARE', "Compare" );
jr_define( '_JOMRES_REMOVE', "Remove" );
jr_define( '_JOMRES_RETURN_TO_RESULTS', "Return to search results" );

jr_define( '_JOMRES_ADDTOSHORTLIST', "Add to shortlist" );
jr_define( '_JOMRES_REMOVEFROMSHORTLIST', "Remove from shortlist" );
jr_define( '_JOMRES_VIEWSHORTLIST', "View your shortlist" );

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

jr_define( 'COMMON_PRINT', "Print" );

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
If a template has not been edited before, then you can create a new customisation of that template by selecting the New option alongside it. When you click on New you\'re taken to a new page where you can edit that template. The initial layout is taken from the template stored in the /jomres/templates/xxx/frontend directory, when you click Save then your customisations are saved to the database and when Jomres uses that template it will use the markup stored in the database, not the markup stored in the /jomres/templates/xxx/frontend template. This ensures that customisations are not overwritten when you upgrade your Jomres installation.<br/>
<br/>
Once a template has been customised you have more options. You can create a New copy of the original template (as above), you can Copy a customisation to a new template customisation, so for example if you\'ve already customised basic_module_output.html for hotels, then you can copy that customisation to a new customisation for a new property type, like cars. You can Edit an existing customisation, or you can Delete it. When you delete a customisation, providing there isn\'t another customisation of that template then Jomres will go back to using the template in /jomres/templates/xxx/frontend. This is useful if you\'ve edited a template but don\'t like the changes you\'ve made. You can delete the customisations and start again at the original template.<br/>
<br/>
Jomres is constantly evolving and core templates are often updated/modified. If you use the Template Editing feature these updated templates will not overwrite your customisations, however this may also mean that your customisations may not use new features in those core templates. As we have no way of analysing your customisations you may or may not benefit from those changes. The Template Editing feature will look at the last modified dates of the files in the /jomres/templates/xxx/frontend directory and if it detects that a template file\'s last modified date is newer than the template you have stored in the database then Jomres will warn you of that fact. It doesn\'t necessarily mean that you need to update your template customisation however, that\'s up to you to decide if you need to do that' ); // Updated template editing information to correspond with changes to 7.2.0 and it's template editing changes related to property type templates

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
