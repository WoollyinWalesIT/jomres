<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
* @Polska adaptacja Patryk Doering - http://www.rekinet.pl - kontakt@rekinet.pl
* @Aktualizacja wersji językowej z 07-10-2016r.
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
jr_define('_JOMRES_COM_MR_QUICKRESDESC', 'Bezpośrednia rezerwacja');
jr_define('_JOMRES_COM_MR_SHOWPROFILES', 'Użytkownicy');
jr_define('_JOMRES_COM_MR_QUICK______DESC', 'Zostawić puste');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC', 'Konfiguracja systemu');
jr_define('_JOMRES_COM_MR_BACK', 'Wróć');
jr_define('_JOMRES_COM_MR_YES', 'Tak');
jr_define('_JOMRES_COM_MR_NO', 'Nie');
jr_define('_JOMRES_COM_MR_NEWTARIFF', 'Dodaj');
jr_define('_JOMRES_COM_MR_NEWPROPERTY', 'Nowa oferta');
jr_define('_JOMRES_COM_MR_NEWGUEST', 'Nowy klient');
jr_define('_JOMRES_COM_MR_SAVE', 'Zapisz');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME', 'Nazwisko');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', 'Rezerwacja od');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', 'Rezerwacja do');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK', 'Puste');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME', 'Imię i nazwisko');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL', 'Prawa dostępu');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE', 'Użytkownik został zmieniony.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE', 'Lista rezerwacji');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE', 'Edycja');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL', 'Terminy rezerwacji');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST', 'Klient');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM', 'Zasób');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT', 'Płatności');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL', 'Imię');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL', 'Nazwisko');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ', 'Informacje dla personelu');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER', 'Uwaga! Proszę zauważyć, że dodatkowe usługi dla tej rezerwacji wiązać mogą się z naliczeniem dodatkowych kosztów.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING', 'Anulowanie rezerwacji');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Miejscowość');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Kod pocztowy');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon komórkowy');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL', 'E-mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN', 'Rezerwacja nie może zostać anulowana, klient już dotarł.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT', 'Anuluj rezerwację');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON', 'Potwierdź anulowanie rezerwacji');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED', 'Rezerwacja została anulowana.');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL', 'Dni do początku rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL', 'Rodzaj rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK', 'Wyłączenie');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION', 'Recepcja');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET', 'Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME', 'Nazwa zasobu');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER', 'Nr zasobu');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR', 'Piętro');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED', 'Dla niepełnosprawnych');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE', 'Maks klientów');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', 'Zasób');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC', 'Opis zasobu');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST', 'Lista cech ofert');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID', 'Wpłacony zadatek');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE', 'Wysokość zadatku');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL', 'Koszt rezerwacji');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF', 'Uwagi do zadatku');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER', 'Nr rezerwacji');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', 'Wysokość zadatku');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE', 'Zadatek został zapisany.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE', 'Zasoby');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME', 'Oferta');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', 'Zasób');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS', 'Edycja');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME', 'Imię');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME', 'Nazwisko');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE', 'Nr domu');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN', 'Miejscowość');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE', 'Kod pocztowy');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE', 'Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE', 'Telefon komórkowy');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE', 'Wybór cennika');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS', 'Ilość dni');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE', 'Razem');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE', 'Ceny i zasoby');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM', 'Zasób');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', 'Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', 'Zasób');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS', 'Oferta');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES', 'Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK', 'Zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', 'Rodzaj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', 'Nazwa');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', 'Nr');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', 'Piętro');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', 'Maks klientów');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES', 'Cechy zasobu');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT', 'Edycja');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK', 'Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT', 'Cechy');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT', 'Zapisz cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE', 'Zapisz zmiany cech oferty');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK', 'Zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV', 'Nazwa zasobu');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC', 'Opis zasobu');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT', 'Zapisz zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT', 'Edycja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME', 'Nazwa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET', 'Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN', 'Miejscowość');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', 'Województwo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', 'Kraj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE', 'Kod pocztowy');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE', 'Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX', 'Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL', 'E-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE', 'Strona WWW');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES', 'Opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE', 'Dane oferty zostały pomyślnie zaktualizowane.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK', 'Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV', 'Nazwa zasobu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC', 'Opis cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE', 'Aktualizuj cechę oferty');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE', 'Konfigurator cen');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE', 'Cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM', 'Ważny od dnia');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO', 'Ważny do dnia');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', 'Cena za dobę');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS', 'Minimum dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS', 'Maks dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE', 'Minimum klientów');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE', 'Maks klientów');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS', 'Zasób');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN', 'Ignoruj warunek za osobę za dobę');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE', 'Weekendy dozwolone');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT', 'Edycja');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE', 'Dodaj jako kopię');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED', 'Cennik został usunięty.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT', 'Edycja cennika');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE', 'Rezerwacja została zapisana.');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM', 'Rezerwacja');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN', 'Zameldowanie klienta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT', 'Wymeldowanie klienta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS', 'Lista rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME', 'Pulpit rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN', 'Zestawienia klientów');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', 'Edycja ofert');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY', 'Przejdź do kolejnego kroku');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME', 'Imię');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME', 'Nazwisko');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL', 'Nr domu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL', 'Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL', 'Miejscowość');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL', 'Kod pocztowy');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL', 'Telefon stacjonarny');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL', 'Telefon komórkowy');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE', 'Niestety obecnie nie są dostępne oferty spełniające określone kryteria. Proszę zmienić wybrane parametry oferty.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE', '<h3>Dziękujemy. Rezerwacja została przyjęta.</h3><br />Wszystkie informacje zostały przesłane na podany w formularzu adres e-mail.<br /><br /><small>Prosimy wziąć pod uwagę, że ta rezerwacja jest tymczasowa i dopiero po otrzymaniu zadatku w określonej kwocie przelewem bankowym lub dokonaniu wpłaty w systemie płatności elektronicznych będzie wiążąca dla obu stron.</small><br />');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE', 'Rezerwacja internetowa:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM', 'Rezerwacja dla:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL', 'Rezerwacja od:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE', 'Rezerwacja do:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nazwisko:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE', 'Telefon stacjonarny:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE', 'Telefon komórkowy:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL', 'Łączna cena:');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE', 'Zameldowanie klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN', 'Zamelduj klienta');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE', 'Wymeldowanie klienta');
jr_define('_JOMRES_COM_A_SUPPLIMENTS', 'Dopłaty');
jr_define('_JOMRES_COM_A_TARIFFS', 'Ceny');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS', 'Transfer plików');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON', 'Dopłata do zasobu dla jednej osoby');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC', 'Zaznacz Tak, jeżeli ma być pobierana dopłata.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST', 'Wysokość dopłaty:');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE', 'Zadatek obliczany procentowo');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC', 'Jeżeli Nie, to będzie obliczany w sposób ryczałtowy.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE', 'Wysokość zadatku');
jr_define('_JOMRES_COM_A_TARIFFS_PER', 'Za osobę za dobę');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC', 'Jeżeli Nie, cena będzie obliczana za zasób za dobę.');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE', 'Wielkość pliku');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC', 'Maksymalna wielkość pliku w KB.');
jr_define('_JOMRES_FRONT_MR_BOOKED', 'Zajęty');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE', 'E-mail potwierdzający');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR', 'Sz.P.');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES', 'Cena za dobę za zasób');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS', 'Termin rezerwacji:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1', 'Dziękujemy za wybór naszej oferty i rezerwację w ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2', '. Poniżej znajduje się podsumowanie złożonej rezerwacji. Prosimy o dokładne jej sprawdzenie. Jeżeli wystąpił jakiś błąd, prosimy o kontakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN', 'Nasza doba hotelowa trwa od 14:00 do 10:00 dnia następnego. Zamldowanie w godzinach od 14:00 do 20:00. W razie spodziewanego późniejszego przyjazdu prosimy o kontakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD', 'Cieszymy się i oczekujemy przyjazdu ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY', 'Już teraz życzymy zadowolenia z wyboru naszej oferty.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO', 'Proszę uważnie przeczytać:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT', 'Zwracamy uwagę na fakt, że ta rezerwacja jest wiążącą umową. Oznacza to, że w przypadku rezygnacji Klient może zostać obciążony kosztami w pełnej wysokości ceny rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE', 'Za nieskorzystanie z oferty nie może zostać wypłacony zwrot. Z tego powodu sugerujemy zawarcie specjalnego ubezpieczenia. Oferuje je większość biur podróży, agentów ubezpieczeniowych, są również dostępne w ofertach banków.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO', 'Warunki zmiany lub anulowania rezerwacji. W wypadku anulowania rezerwacji, musi być ona dokonana w formie pisemnej. Poniżej znajduje się zestawienie związanych z tym kosztów:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS', 'Wcześniej niż 30 dni przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY', 'Tylko wpłacone zadatki.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS', '15 do 30 dni przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT', '50% łącznej wartości rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS', 'Od 14 dnia przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT', '100% łącznej wartości rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT', 'Wszystkie ceny zawierają podatek VAT.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT', 'Drukuj potwierdzenie rezerwacji');
jr_define('_JOMRES_COM_INVOICE_TITLE', 'Wydruk faktury');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS', 'Ilość dób:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT', 'Cena za dobę:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL', 'Suma:');
jr_define('_JOMRES_COM_INVOICE_PRINT', 'Drukuj fakturę');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE', 'Nowa pozycja rachunku');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE', 'Cena');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC', 'Dodatkowe pozycje');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE', 'Dodaj pozycje do rachunku');
jr_define('_JOMRES_UPLOAD_IMAGE', 'Zapisz zdjęcie');
jr_define('_JOMRES_FILE_UPLOAD', 'Transfer wybranych plików na serwer');
jr_define('_JOMRES_COM_A_ODDS', 'Pozostałe');
jr_define('_JOMRES_COM_A_ERRORCHECKING', 'Lista przekierowań');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC', 'Ustaw na Tak, aby zobaczyć dziennik wyświetlany na dole strony po zakończeniu uruchomionej funkcji Jomres. Zostanie również wyłączone wewnętrzne przekierowanie funkcji. Jest to przydatne jeśli próbujesz określić, który plugin wykonuje jakie funkcje.');
jr_define('_JOMRES_FILE_DELETE', 'Usuń zdjęcie');
jr_define('_JOMRES_FILE_DELETED', 'Zdjęcie zostało usunięte.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY', 'Wszystkie oferty');
jr_define('_JOMRES_COM_MR_ROOM_DELETE', 'Usuń');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE', 'Nie można usunąć tego zasobu, ponieważ został już zarezerwowany. Proszę anulować rezerwacje i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED', 'Zasób został usunięty.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE', 'Usuń ustawienia zasobu');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE', 'Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wykorzystójące te ustawienia i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED', 'Ustawienia zasobu zostały usunięte.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE', 'Usuń ustawienia oferty');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE', 'Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wyKorzystójące te ustawienia i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', 'Ustawienia oferty zostały usunięte.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE', 'Usuń zasób');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED', 'Zasób został usunięty.');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE', 'Usuń ofertę');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED', 'Oferta została usunięta.');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS', 'Ta oferta nie może zostać usunięta. Nie posiadasz wystarczających uprawnień.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE', 'Szerokość dużego zdjęcia');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK', 'Mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES', 'Zameldowanie w godzinach');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES', 'Atrakcje w okolicy');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS', 'Opis dojazdu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS', 'Lotniska w pobliżu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT', 'Dodatkowa komunikacja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS', 'Warunki regulaminu');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE', 'Możliwa rezerwacja online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC', 'Ustaw na Tak, jeśli chcesz umożliwić rezerwację online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS', 'Stała długość pobytu');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC', 'Ustaw na Tak, jeżeli rezerwacja ma być możliwa tylko na z góry ustawiony czas.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD', 'Stała długość rezerwacji');
jr_define('_JOMRES_COM_A_BOOKING', 'Rezerwacje');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS', 'Maks cyklicznych rezerwacji, np: 3 x 7 cykli = 21 dni.');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY', 'Rezerwacja jednego zasobu?');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING', 'Sprawdź rezerwację');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING', 'Potwierdź rezerwację');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY', 'Poniedziałek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY', 'Wtorek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY', 'Środa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY', 'Czwartek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY', 'Piątek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY', 'Sobota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY', 'Niedziela');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', 'Pn');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', 'Wt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', 'Śr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', 'Cz');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', 'Pt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', 'So');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', 'Nd');
jr_define('_JOMRES_COM_A_AVLCAL', 'Kalendarz');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR', 'Kolor czcionki aktualnego dnia');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE', 'Kolor czcionki aktualnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE', 'Kolor czcionki wcześniejszego i następnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR', 'Kolor pól dni aktualnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR', 'Kolor pól dni wcześniejszego i następnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR', 'Kolor pól zarezerwowanych dni');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR', 'Kolor pól wolnych dni');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR', 'Kolor pól minionych dni');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', 'Zajęty');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', 'Wolny');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', 'Rezerwacja niepotwierdzona');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO', 'Startowy dzień rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC', 'Dla stałych okresów rezerwacji wybierz dzień tygodnia, będący pierwszym dniem rezerwacji.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY', 'Rezerwacje od dnia');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1', 'Okres rezerwacji');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR', 'Pokaż kalendarz rezerwacji');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC', 'Ustaw Tak, jeżeli kalendarz rezerwacji ma być widoczny.');
jr_define('_JOMRES_FRONT_AVAILABILITY', 'Dostępność');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES', 'Aby przejść do formularza rezerwacji proszę kliknąć na wybraną datę.');
jr_define('_JOMRES_FRONT_BLACKBOOKING', 'Wyłączenie rezerwacji');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW', 'Dodaj');
jr_define('_JOMRES_FRONT_DELETEGUEST', 'Usuń gościa');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED', 'Klient został usunięty.');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST', 'Ten klient nie może zostać usunięty. Istnieją dane, które są do niego przypisane i to najpierw one muszą zostać usunięte.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO', 'Witamy!');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS', 'Dziękujemy bardzo za rezerwację na');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY', 'Zestawienie danych rezerwacji:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS', 'Jeżeli ma Pan/Pani jakieś pytanie odnośnie tej rezerwacji, prosimy o kontakt telefoniczny.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE', 'Nasz numer telefonu');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL', 'Może Pan/Pani skontaktować się także przez e-mail.');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER', 'Obojętne');
jr_define('_JOMRES_COM_CALENDAROUTPUT', 'Format daty');
jr_define('_JOMRES_COM_CALENDARINPUT', 'Format dodawania daty z kalendarza');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC', 'Tutaj można zmienić format dodawania daty z kalendarza.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT', 'Stosowanie przerw w kalendarzu dla stałych okresów rezerwacji.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS', 'Ilość dni przerwy');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED', 'Opublikuj');
jr_define('_JOMRES_COM_A_PAYPAL', 'PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL', 'Podsumowanie');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE', 'Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER', 'Użytkownik');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE', 'Filtruj wg daty');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS', 'Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING', 'Oczekiwanie na przyjazd');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY', 'Dzisiaj przyjeżdża');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT', 'Klient obecny');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY', 'Dzisiaj wyjeżdża');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE', 'Przeterminowany wyjazd');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE', 'Klient nie dotarł');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM', 'Zasób został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM', 'Zasób został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM', 'Zasób został usunięty.');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE', 'Cecha oferty została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE', 'Cecha oferty została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE', 'Cecha oferty została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY', 'Oferta została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY', 'Oferta została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY', 'Oferta została usunięta.');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS', 'Ustawienia oferty zostały zmienione.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY', 'Oferta została opublikowana.');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF', 'Cennik został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF', 'Cennik został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE', 'Cena opcji dodatkowej została dodana.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN', 'Klient został zameldowany.');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT', 'Dodaj zadatek');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST', 'Klient został dodany.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST', 'Klient został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM', 'Zasób został zarezerwowany.');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA', 'Usługa dodatkowa została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA', 'Usługa dodatkowa została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA', 'Usługa dodatkowa została usunięta.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA', 'Usługa dodatkowa została opublikowana.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING', 'Wyłączenie rezerwacji zostało wprowadzone.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE', 'Wyłączenie rezerwacji zostało usunięte.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE', 'Opcje dodatkowe');
jr_define('_JOMRES_COM_MR_EXTRA_DESC', 'Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME', 'Nazwa');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE', 'Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED', 'Opcje dodatkowe zostały zaktualizowane.');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT', 'Edycja');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED', 'Opcja dodatkowa została usunięta.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS', 'Opcje dodatkowe');
jr_define('_JOMRES_COM_A_EXTRAS', 'Opcje dodatkowe dla rezerwacji');
jr_define('_JOMRES_COM_A_EXTRAS_DESC', 'Ustaw Tak, aby oferować opcje dodatkowe na etapie rezerwacji.');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP', 'Opcje dodatkowe');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS', 'Wyłączenie od');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES', 'Wyłączenie do');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS', 'Edycja wyłączenia rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR', 'Przy próbie wyłączenia zasobu doszło do błędu. Jeden lub więcej z nich nie jest wolny.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT', 'Zasoby wybrane do wyłączenia');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS', 'Nie ma żadnych wyłączeń.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS', 'Ilość gwiazdek');
jr_define('_JOMRES_COM_A_RESET', 'Cofnij zmiany');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED', 'Rezerwacja anulowana');
jr_define('_JOMRES_FRONT_MR_SEARCH_PROPERTYNAME', 'Szukaj wg nazw ofert:');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL', 'Kod waluty');
jr_define('_JOMRES_COM_A_CURRENCYCODE', 'Waluta');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION', 'Informacje');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO', 'Ograniczenie czasu rezerwacji');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC', 'Ustaw Tak, aby ograniczyć czas rezerwacji do X dni do przodu. To oznacza, że jeżeli klienci będą próbować wybrać datę, która leży dalej w przyszłości, system przestawi datę początku rezerwacji automatycznie na datę dzisiejszą.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS', 'Możliwy czas rezerwacji ograniczyć do ilości dni');
jr_define('_JOMRES_COM_FRONT_ROOMTAX', 'Podatek');
jr_define('_JOMRES_COM_A_ROOMTAX', 'Podatek');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED', 'Wysokość ryczałtowa podatku');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE', 'Wysokość procentowa podatku');
jr_define('_JOMRES_COM_A_EUROTAX', 'Podatek ryczałtowy');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE', 'Podatek procentowy');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE', 'Archiwuj wszystkie wpisy');
jr_define('_JOMRES_FRONT_TARIFFS', 'Ceny');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE', 'Nazwa cennika');
jr_define('_JOMRES_FRONT_TARIFFS_DESC', 'Opis cennika');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE', 'Zasób');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS', 'Ważny od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS', 'Ważny do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN', 'Za osobę za noc');
jr_define('_JOMRES_FRONT_TARIFFS_PN', 'Za noc');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND', 'Bez weekendów');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS', 'Minimum dni');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS', 'Maks dni');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS', 'Minimum osób');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS', 'Maks osób');
jr_define('_JOMRES_FRONT_PREVIEW', 'Podgląd oferty');
jr_define('_JOMRES_COM_A_EDITINGMODEON', 'Edycja włączona');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT', 'Tekst został zaktualizowany.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE', 'Wybierz język');
jr_define('_JOMRES_FRONT_PTYPE', 'Rodzaj oferty');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE', 'Rodzaje ofert');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT', 'Edycja rodzajów ofert');
jr_define('_JOMRES_COM_PTYPES_PTYPE', 'Rodzaj oferty');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC', 'Opis rodzaju oferty');
jr_define('_JOMRES_COM_PTYPES_SAVED', 'Rodzaj oferty został zapisany.');
jr_define('_JOMRES_COM_PTYPES_DELETED', 'Rodzaj oferty został anulowany.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY', 'Pozostaje do zapłaty');
jr_define('_JOMRES_EXTRAS_NOEXTRAS', 'Brak dodatkowych płatnych usług.');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT', 'Zadatek');
jr_define('_JOMRES_COM_CHARGING_FULLAMT', 'Pełna kwota');
jr_define('_JOMRES_COM_CHARGING_CONFIG', 'Kwota pobrana w trakcie rezerwacji');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC', 'Określ sposób pobierania płatności w czasie rezerwacji.');
jr_define('_JOMRES_COM_MONTHSTOSHOW', 'Ilość miesięcy');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC', 'Ilość miesięcy pokazywanych w kalendarzu.');
jr_define('_JOMRES_COM_A_GATEWAYLIST', 'Płatności');
jr_define('_JOMRES_COM_A_CANCEL', 'Anuluj');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC', 'Wybierz zasoby, które chcesz wyłączyć ze sprzedaży i odpowiednie daty.
	<br />
	Jeżeli przy zasobie nie ma pola wyboru, oznacza to że nie może on być zablokowany do czasu, aż istniejąca rezerwacja/e nie zostanie zrealizowana lub anulowana.
	<br />
	Po wybraniu odpowiednich dat kliknij "Dodaj" aby sprawdzić ponownie dostępność zasobów.');
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<b>Prawdopodobnie serwer wylogował Cię z powodu zbyt długiego okresu braku aktywności.</b>
	<br />
	Zaloguj się i spróbuj ponownie.');
jr_define('_JOMRES_JR_BLACKBOOKING_REASON', 'Powód');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS', 'Płatności online');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE', 'Wybierz metodę płatności.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED', 'Płatności online');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', 'Ustawienia wtyczek zostały zmienione.');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT', 'Ustawienia wtyczek zostały dodane.');
jr_define('_JOMRES_FRONT_GALLERYLINK', 'Zobacz tą ofertę');
jr_define('_JOMRES_COM_A_GALLERYLINK', 'Adres URL');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC', 'Możesz umieścić tu adres swojej strony WWW.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT', 'Edycja danych karty kredytowej');
jr_define('_JOMRES_COM_A_EDITICON', 'Edycja rozmiaru ikony');
jr_define('_JOMRES_COM_A_SLIDESHOWS', 'Slajdy');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK', 'Pokaż odsyłacz do pokazu slajdów');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE', 'Pokaż slajdy w ramach strony');
jr_define('_JOMRES_FRONT_SLIDESHOW', 'Slajdy');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK', 'Pokaż odsyłacz do cennika');
jr_define('_JOMRES_COM_A_POPUPSALLOWED', 'Zezwól na wyskakujące okna');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS', 'Transfer zdjęć');
jr_define('_JOMRES_A_TABS_MISC', 'Różne');
jr_define('_JOMRES_A', 'Konfiguracja systemu');
jr_define('_JOMRES_A_GLOBALPFEATURES', 'Używaj globalnych cech ofert');
jr_define('_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ');
jr_define('_JOMRES_A_ICON', 'Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION', 'Wybierz wtyczkę wyszukiwania, której chcesz używać.');
jr_define('_JOMRES_FRONT_NORESULTS', '<b>Twoje wyszukiwanie nie dało żadnych rezultatów. Zmień kryteria i spróbuj ponownie.</b>');
jr_define('_JOMRES_AREYOUSURE', 'Czy jesteś pewny/a?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY', 'Rezerwacja');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE', 'Pokaż cennik w ramach strony');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS', 'Adres');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS', 'Informacja szczegółowa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', 'Kliknij aby sprawdzić dostępność');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE', 'Pokaż informację adresową pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE', 'Pokaż informację o ofercie pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', 'Pokaż zasoby i ich dostępność pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF', 'Stałe ceny');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES', 'Średnie ceny');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL', 'Wybierz model cennika, jaki chcesz używać.');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC', 'Masz do wyboru dwie metody kalkulacji cen. Pierwsza - stałe ceny - pozwala na oferowanie wielu różnych cenników, a cena za rezerwację jest stała przez cały okres rezerwacji. Jest to użyteczne, jeżeli chcesz oferować w tym samym okresie różne ceny, np za nocleg ze śniadaniem, nocleg z półwyżywieniem, nocleg z pełnym wyżywieniem. Wybierz - ceny średnie - jeżeli chcesz ustalić ceny zależnie od daty. Aplikacja znajdzie cenę dla każdego dnia w ramach razerwacji, doda je do siebie i wskaże uśrednioną cenę dla całego okresu rezerwacji.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT', 'Pozwól na wprowadzenie ostatniego dnia rezerwacji');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC', 'Ustaw Nie, jeśli akceptujesz fakt, że ostatnim dniem rezerwacji będzie dzień następny.');
jr_define('_JOMRES_COM_PROPERTYLISTDESC', 'Długość skruconego opisu');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC', 'Podaj ilość znaków dla skróconego opisu na listach ofert.');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE', 'Własny format daty');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH', 'Opublikuj ofertę');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH', 'Deaktywuj ofertę');
jr_define('_JOMRES_A_GLOBALROOMTYPES', 'Używaj globalnych zasobów');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO', 'Aby powiązać zasób z ikoną, należy najpierw przetransferować na serwer pliki ikon do katalogu /images/stories/jomres/rmtypes/ .');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND', 'Błąd w kolorze tła.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES', 'Domyślny kraj w formularzu rezerwacji');
jr_define('_JOMRES_JAVASCRIPT_', 'Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
jr_define('_JOMRES_COM_SELFREGISTRATION', 'Użytkownicy mogą dodawać swoje oferty');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC', 'Ustaw Tak, jeżeli chcesz aby użytkownicy mogli dodawać swoje oferty bez interwencji administratora serwisu.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2', 'Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY', 'Oferta została dodana.');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR', 'Kalendarz od początku roku');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC', 'Pokazywany kalendarz rozpoczyna się od początku bieżącego roku.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE', 'Ilość dostępnych zasobów');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK', 'Powrót do informacji o ofercie');
jr_define('_JOMRES_FRONT_ROOMTYPES', 'Zasoby');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT', 'Limit przypadkowego wyszukiwania');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS', 'Pokaż odsyłacz do przelicznika walut Google w liście cenników');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT', 'Przelicz cene na:');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR', 'Pozwól użytkownikom używać edytora HTML');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS', 'Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak termin rezerwacji, ilość osób, następnie wybierz zasób z listy dostępnych. Kliknij dowolny dostępny zasób aby dodać go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP', 'Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak termin rezerwacji, ilość osób, następnie wybierz zasób z listy dostępnych. Kliknij dowolny dostępny zasób aby dodac go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS', 'Szczegóły rezerwacji');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC', 'Określ szczegóły Twojej rezerwacji.');
jr_define('_JOMRES_AJAXFORM_AVAILABLE', 'Dostępność');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC', 'Wybierz zasób');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP', 'Sprawdź tutaj, czy oferta jest dostępna w wybranym terminie.');
jr_define('_JOMRES_AJAXFORM_EXTRAS', 'Opcje dodatkowe');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC', 'Wybierz dowolne opcje dodatkowe, które chcesz dodać do rezerwacji.');
jr_define('_JOMRES_COM_PERDAY', 'Za noc');
jr_define('_JOMRES_AJAXFORM_ADDRESS', 'Dane bilingowe');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC', 'Podaj swoje dane.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS', 'Dostępne zasoby');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS', 'Wybrane zasoby');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE', '<br />Najwcześniejsza możliwa data początku rezerwacji:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM', 'Za noc:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL', 'Razem:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS', 'Opcje dodatkowe:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX', 'Podatek:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT', 'Rabat:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL', 'Razem:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY', 'Klientów');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION', 'Dodaj do rezerwacji');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE', 'Usuń z rezerwacji');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES', 'Rodzaje klientów');
jr_define('_JOMRES_VARIANCES_TYPE', 'Rodzaj');
jr_define('_JOMRES_VARIANCES_TYPE_TT', 'Rodzaje klientów np. dzieci w wieku 5 - 10 lat, student.');
jr_define('_JOMRES_VARIANCES_NOTES', 'Uwagi');
jr_define('_JOMRES_VARIANCES_NOTES_TT', 'Uwagi dotyczące danego rodzaju klientów.');
jr_define('_JOMRES_VARIANCES_MAXIMUM', 'Maks');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT', 'Maksymalna ilość klientów jaka może być wybrana w formularzu rezerwacji.');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE', 'Procent');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT', 'Suma jest procentem z sumy podstawowej skalkulowanej dla zasobu. Jeżeli ustawione na Nie, podana kwota będzie dodana lub odjęta od ceny rezerwacji zasobu.');
jr_define('_JOMRES_VARIANCES_POSNEG', 'Dodać wariant');
jr_define('_JOMRES_VARIANCES_POSNEG_TT', 'Kalkulowana kwota jest dodawana lub odejmowana od ceny rezerwacji zasobu. Ustaw na Nie, jeżeli chcesz, aby była to zniżka od ceny podstawowej.');
jr_define('_JOMRES_VARIANCES_VARIANCE', 'Wariant');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT', 'Wartość wariantu');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE', 'Rodzaj klientów został zmodyfikowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE', 'Rodzaj klientów został usunięty.');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE', 'Rodzaj klientów został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE', 'Rodzaj klientów został zmieniony.');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED', 'Rodzaj klientów został zmieniony.');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK', 'Pokaż odsyłacz do listy zasobówna stronie informacyjnej oferty');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL', 'Pokaż tylko kalendarz dostępności/listę zasobów');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC', 'Ustaw Tak, jeżeli nie chcesz wyświetlać informacji o ofercie (listy zasobówi ich dostępności) w części informacyjnej oferty. Przeznaczone dla użytkowników mających oferty typu apartament, domek letniskowy itp.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL', 'Minimalna długość rezerwacji');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC', 'Minimalna długość rezerwacji oferowana w formularzu rezerwacji (tym samym w ofercie).');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO', 'Numery zasobóww formularzu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME', 'Nazwy zasobóww formularzu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE', 'Nazwa cennika w formularzu rezerwacji');
jr_define('_JOMRES_ORDER', 'Kolejność');
jr_define('_JOMRES_REQUIREDFIELDS', 'Wymagane');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING', 'Dni do początku rezerwacji');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC', 'Minimalna ilość dni, jaka musi pozostać między datą dokonywania razerwacji a datą realizacji przedmiotowej rezerwacji.');
jr_define('_JOMRES_DTV', 'Warianty typu daty');
jr_define('_JOMRES_DTV_DOW', 'Dzień tygodnia');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE', 'Domyślna ilość klientów');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC', 'Domyślna ilość klientów (o ile używasz rozróżnienia ich rodzajów), widoczna w formularzu rezerwacji.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK', 'Rezerwacje online tylko dla zarejestrowanych użytkowników');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK', 'Musisz być zarejestrowanym i zalogowanym użytkownikiem, aby móc rezerwować online. Kliknij tutaj, aby się zarejestrować lub zalogować.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT', 'Kolor odsyłaczy do aktualnych rezerwacji');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER', 'Ramki tygodni');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY', 'Zasób zarezerwowany');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY', 'Wyłączone');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP', 'Zaokrąglaj zadatki do pełnych kwot');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT', 'Zadatek jest wymagany');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY', 'Zapisz cennik jako opłaty tygodniowe');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC', 'Masz możliwość zapisania cennika jako opłaty dzienne lub tygodniowe. Jeżeli chcesz zapisać cennik tygodniowy ustaw na Tak.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', 'Cena za tydzień');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING', 'Powtarzanie stałych dat rezerwacji co');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC', 'Jeżeli wybrano stałe daty rezerwacji daty te będą pokazywane na liście wyboru w trakcie procesu rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID', 'Błędna data początku rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID', 'Błędna data końca rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1', 'Okres rezerwacji jest zbyt krótki. Między datą początku rezerwacji i jej końca musi być minimum dni:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2', 'Twój okres rezerwacji wynosi:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT', 'Błędny rodzaj klienta.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS', 'Wybierz odpowiednią ilość/rodzaj klienta.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS', 'Rezerwacja dotyczy zbyt dużej ilości osób dla dostępnego cennika.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS', 'Wybrano więcej zasobówniż ilość osób.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS', 'Zbyt dużo osób w stosunku do dostępnych miejsc w tej ofercie.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS', 'Musisz wybrać więcej zasobów.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM', 'Wybierz zasób.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME', 'Wymagane jest imię.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME', 'Wymagane jest nazwisko.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO', 'Wymagany jest nr domu.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET', 'Wymagana jest nazwa ulicy.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN', 'Wymagana jest nazwa miejscowości.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION', 'Wymagane jest województwo.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE', 'Wymagany jest kod pocztowy.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY', 'Wymagany jest kraj.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE', 'Wymagany jest numer telefonu stacjonarnego.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE', 'Wymagany jest numer telefonu komórkowego.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL', 'Wymagany jest adres e-mail.');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES', 'Mamy jeszcze wolne miejsca.');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET', 'Nie został jeszcze dodany żaden z zasobów.');
jr_define('_JOMRES_BOOKING_NUMBER', 'Rezerwacja nr');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND', 'Ok dla rezerwacji, tło pola tekstowego');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA', 'Zmienne szablonu');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC', 'Uaktywnij, aby umożliwić wpisywanie zmiennych DHTML w szablonie strony. Pomocne, jeżeli chcesz widzieć, czy ten konkretny element jest dostępny w danym szablonie.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE', 'Kwota jest procentem');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC', 'Ustaw Tak, jeżeli cena za pojedyncze wykorzystanie jest procentem pełnej ceny. Jeżeli Nie, to cena zostanie ustalona kwotowo.');
jr_define('_JOMRES_COM_LIMITROOMSLIST', 'Ograniczenie dostępności zasobów/cenników');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC', 'Wprowadź tą daną aby ograniczyć ilość dostępnych zasobówi cenników, pokazywanych w formularzu rezerwacji. Jeżeli nie chcesz ograniczenia, ustaw na zero.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES', 'Aktualnie brak wolnych miejsc.');
jr_define('_JOMRES_BOOKITNOW', 'Zarezerwuj teraz');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING', 'Globalny tryb edycji');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC', 'Jeśli Tak, w ofertach zastosowane zostaną teksty globalne.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY', 'Globalny symbol waluty');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED', 'Komponent owinięty');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC', 'Ustaw Tak, jeśli moduł i nagłówek nie mają być widoczne.');
jr_define('_JOMRES_COM_WEEKENDONLY', 'Tylko w weekendy');
jr_define('_JOMRES_COM_WEEKENDDAYS', 'Dni weekendowe');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC', 'Ustaw ceny w dni weekendowe.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY', 'Wybierz swój kraj przed dodaniem jakichkolwiek informacji.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD', 'Zapisz zmiany przed wysłaniem zdjęcia.');
jr_define('_JOMRES_TARIFFSFROM', 'Ceny już od');
jr_define('_JOMRES_SEARCH_ALL', 'Wszystkie');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH', 'Kraj');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH', 'Województwo');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH', 'Miejscowość');
jr_define('_JOMRES_SEARCH_FEATURE_INFO', 'Cechy');
jr_define('_JOMRES_SEARCH_BUTTON', 'Szukaj');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO', 'Wpisz szukane słowo i naciśnij przycisk.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL', 'Wyszukaj');
jr_define('_JOMRES_SEARCH_AVL_INFO', 'Podaj datę początku i końca rezerwacji a następnie naciśnij przycisk, aby znaleźć oferty dostępne w wybranym zakresie dat.');
jr_define('_JOMRES_SEARCH_PTYPES', 'Typ oferty');
jr_define('_JOMRES_SEARCH_RTYPES', 'Typ zasobu');
jr_define('_JOMRES_SORTORDER_DEFAULT', 'Domyślnie');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME', 'Nazwa oferty');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION', 'Województwo oferty');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN', 'Miejscowość oferty');
jr_define('_JOMRES_SORTORDER_STARS', 'Ilość gwiazdek');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS', 'Szczegóły');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM', 'Formularz rezerwacji');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON', 'Zaktualizuj swoje dane adresowe');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY', 'Ponowne sprawdzanie dostępności zasobu (wybór zasobu zostanie zresetowany).');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP', 'Ponowne sprawdzanie dostępności');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA', 'Modyfikacja dodatkowego wyposażenia w');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION', 'Zmiana wybranego zasobu');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS', 'Aktualizacja danych adresowych w');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR', 'Jedno lub więcej pól adresowych jest wypełnionych nieprawidłowo.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE', 'Zdjęcie zasobu');
jr_define('_JOMRES_CURRENCYFORMAT', 'Kalkulator');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB', 'Opcje wyszukiwania');
jr_define('JOMRES_COM_A_AVAILABLELOGS', 'Rodzaje operacji');
jr_define('JOMRES_COM_A_MESSAGE', 'Wiadomość');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL', 'Podstawowy');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES', 'Rozszerzony');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED', 'Zaawansowany');
jr_define('JOMRES_COM_A_TARIFFMODE', 'Tryb konfiguracji cen');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC', '<b>Ostrzeżenie! Przełączanie pomiędzy różnymi trybami konfiguracji cen może spowodować utratę danych, przeczytaj poniższe uwagi.</b>
	<br /><br />
	Dostępne są trzy opcje możliwości konfiguracji cen.
	<ul>
		<li>Tryb podstawowy - Będziesz miał jedną cenę dla każdego zasobu.</li>
		<li>Rozszerzony - Można modyfikować cenę za każdy dzień i za każdy zasób w danym rodzaju oferty.</li>
		<li>Zaawansowany - Dowolna możliwość kształtowania cen.</li>
	</ul>');
jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS', 'lista zasobówna stronie szczegółów oferty');
jr_define('JOMRES_PROPERTYTYPE', 'Rodzaj oferty');
jr_define('JOMRES_MAXPEOPLEINROOM', 'Maks klientów dla zasobu');
jr_define('JOMRES_MAXPEOPLEINBOOKING', 'Maks klientów dla rezerwacji');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD', 'Dodaj notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT', 'Edycja notatki');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE', 'Usuń notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW', 'Notatki');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE', 'Notatka została dodana.');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT', 'Notatka została zmieniona.');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE', 'Notatka została usunięta.');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS', 'Lista rezerwacji');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS', 'Moje rezerwacje');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING', 'Zobacz rezerwacje');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES', 'Moje ulubione');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE', 'Nie dodano jeszcze żadnych ulubionych.');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE', 'Rodzaj oferty');
jr_define('_JOMCOMP_WISEPRICE_TITLE', 'Last minute');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE', 'Aktywny');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC', 'Ta opcja pozwala włączyć i dynamicznie skonfigurować ceny za zasoby.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL', 'Funkcja umożliwia przyciągnięcie klientów do zasobówktóre mogłyby być pominięte i niezarezerwowane w danym czasie. Włączenie i konfiguracja opcji pozwala zaoferować regulację cen na podstawie liczby zasobów, które są dostępne w danym dniu. Ilość określa liczbę dni, w jakim musi mieścić się data początku rezerwacji zanim ceny zasobówzostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu zasobówktóre mogą być dostępne przed zastosowaniem danego rabatu.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD', 'Ilość dni (liczba dni pomiędzy datą początku rezerwacji i dniem dzisiejszym)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10', 'Zasoby zajęte w < 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25', 'Zasoby zajęte w < 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50', 'Zasoby zajęte w < 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75', 'Zasoby zajęte w < 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT', 'Rabat %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED', ' została odrzucona z ');
jr_define('_JOMCOMP_WISEPRICE_TO', ' do ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED', 'Podsumowanie Twojej płatności.');
jr_define('JOMRES_COM_A_MAPSKEY', 'Klucz API map Google');
jr_define('JOMRES_COM_A_MAPSKEY_DESC', 'You can get a google maps API key from <a href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL', 'Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE', 'Aktywny?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC', 'Ustaw Tak, jeśli chcesz zaoferować oferty Last minute.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD', 'Ilość dni');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC', 'Jeśli rezerwacja zostanie wykonana i data początku rezerwacji jest tylko X dni od daty dokonania rezerwacji zostanie udzielony rabat.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT', 'Rabat');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC', 'W procentach');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1', 'Rabat został zastosowany do tej rezerwacji.');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2', 'Cena rezerwacji została zmniejszona o: ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE', 'Oferta Last Minute ze zniżkami od : ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID', '%, dla rezerwacji dokonanej przed : ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE', '% lub więcej dla rezerwacji dokonanej przed : ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST', '. Rezerwuj teraz, aby skorzystać z tej oferty.');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO', 'Więcej info o cenach');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC', 'Ustaw Tak, aby pokazać bardziej szczegółowe informacje cen w szczegółach ofert w oknie popup.');
jr_define('JOMRES_COM_A_MINIMALCONFIG', 'Minimum opcji konfiguracyjnych');
jr_define('_JOMCOMP_AMEND', 'Zmień rezerwacje - Wybór oferty');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY', 'Wybór nowej oferty');
jr_define('_JOMCOMP_AMEND_HEADER', 'Pierwotne zamówienie:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID', 'Wpłacony zadatek');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE', 'Nie wpłacony zadatek');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL', 'Zastąp całkowicie');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT', 'Kwota zadatku');
jr_define('_JRPORTAL_CANCEL', 'Anuluj');
jr_define('_JRPORTAL_CPANEL', 'Mój kokpit');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE', 'Domyślna wysokość prowizji');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC', 'Wybierz domyślną wysokość prowizji stosowanej dla podstawowych ofert.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES', 'Lista prowizji');
jr_define('_JRPORTAL_CPANEL_PATETITLE', 'Prowizje');
jr_define('_JRPORTAL_CRATE_TITLE', 'Tytuł');
jr_define('_JRPORTAL_CRATE_TYPE', 'Typ');
jr_define('_JRPORTAL_CRATE_VALUE', 'Wysokość prowizji');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE', 'Kod waluty');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES', 'Lista ofert');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME', 'Nazwa oferty');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS', 'Adres oferty');
jr_define('_JRPORTAL_PROPERTIES_LEGEND', 'Oferty które mają kolor tła czerwony jeszcze nie zostały zatwierdzone.');
jr_define('_JRPORTAL_STATS_PATETITLE', 'Statystyki');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE', 'Wysokość prowizji');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS', 'Lista rezerwacji');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID', 'Id oferty');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID', 'Id faktury');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL', 'Rezerwacja całkowita');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED', 'Data archiwizacji');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER', 'Możesz mieć specyficzne pliki językowe dla różnych rodzajów ofert. Ustawiając opis z nazwą podkatalogu, np. "yachtbrokerage" i kopiując plik językowy do tego podfolderu. Następnie można zmodyfikować ten plik językowy dla danego typu ofert np. domki letniskowe i tp.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1', 'Nie możesz usunąć tej oferty ponieważ jest to podstawowa oferta do której masz dostęp. Jeśli chcesz ją wyłączyć, skorzystaj z funkcji nie-publikowania w pasku narzędzi.');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL', 'Kwota noclegu');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS', 'Noc/y');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM', 'Za zasób');
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL', 'Opcje dodatkowe');
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY', 'Podsumowanie płatności');
jr_define('_JOMRES_CONFIRMATION_ALERT', 'Proszę przeczytać i zaakceptować');
jr_define('_JOMRES_CONFIRMATION_HEADER', "Podsumowanie rezerwacji jest pokazane poniżej.
	<br />
	Aby dokonać zmian, kliknij przycisk 'Edycja rezerwacji'.");
jr_define('_JOMRES_CONFIRMATION_AMENDTEXT', 'Jeśli musisz zmienić jakiekolwiek z powyższych informacji kliknij w przycisk.');
jr_define('_JOMRES_CONFIRMATION_AMEND', 'Edycja rezerwacji');
jr_define('_JOMRES_CONFIRMATION_SPECIALS', 'W miejscu tym można wpisać dodatkowe informacje dla personelu.');
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT', 'Potwierdzam, że powyższe informacje są poprawne i akceptuję');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON', 'za osobę za noc');
if (!defined('_PN_OF')) {
	jr_define('_PN_OF', 'z');
}
if (!defined('_PN_START')) {
	jr_define('_PN_START', 'Start');
}
if (!defined('_PN_PREVIOUS')) {
	jr_define('_PN_PREVIOUS', 'Wstecz');
}
if (!defined('_PN_NEXT')) {
	jr_define('_PN_NEXT', 'Dalej');
}
if (!defined('_PN_END')) {
	jr_define('_PN_END', 'Koniec');
}
if (!defined('_PN_RESULTS')) {
	jr_define('_PN_RESULTS', 'Wyniki');
}
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE', 'Zauważ, że nie jest to formularz rezerwacji.
	<br />
	Proszę wpisać wiadomość, którą chcesz wysłać do ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL', 'Kontakt');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT', 'Badanie ofert od');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS', 'Dziękujemy za kontakt z nami. Twoja wiadomość została wysłana do właściciela tej oferty i na Twój adres e-mail. Spodziewaj się szybkiej odpowiedzi.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING', ' w sprawie ');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY', 'Zapytanie');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT', 'Dodaj do zamówienia wybrane zasoby.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS', 'Minimalna ilość wybranych zasobów');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC', 'Minimalna liczba zasobówjuż wybranych w rezerwacji, dla których kombinacje cenowe zasobówsą dostępne w ofercie. Pozwala to stosować zniżki, gdy więcej niż X zasobówzostało już wybranych.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS', 'Maksymalna ilość wybranych zasobów');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC', 'Maksymalna liczba zasobówjuż wybranych w rezerwacji, dla których kombinacje cenowe zasobównie są już dostępne w ofercie. Pozwala to na zatrzymanie dostępności zasobóww określonej taryfie cenowej, gdy X zasobówzostała już wybrana.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC', 'Należy pamiętać, że dopłata do zasobu dla jednej osoby nie zostanie zastosowana jeśli konfiguracja systemu została skonfigurowana dla obsługi jednego zasobu.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS', 'Dostępny');
jr_define('_JOMRES_AVLCAL_QUARTER', 'Ruszyła rezerwacja');
jr_define('_JOMRES_AVLCAL_HALF', 'Połowa już zarezerwowana');
jr_define('_JOMRES_AVLCAL_THREEQUARTER', 'Większość już zarezerwowana');
jr_define('_JOMRES_AVLCAL_FULLYBOOKED', 'Komplet rezerwacji');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK', 'Per tydzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS', 'Per dni');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING', 'Per rezerwacja');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING', 'Per osoba per rezerwacja');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY', 'Per osoba per dzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK', 'Per osoba per tydzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS', 'Per dni (min dni)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM', 'Per dni X wybrany zasób');
jr_define('_JOMRES_REGISTRYREBUILD', 'Odbuduj rejestr wtyczek');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES', 'Normalnie rejestr wtyczek Jomres jest przebudowywany automatycznie przy wyświetlaniu Plugin Manager i dodawaniu lub usuwaniu wtyczki, jednak możliwe jest, że nie można wykorzystać tych funkcji z jakiegoś powodu, więc można użyć tej funkcji, aby odbudować rejestr ręcznie. Jeśli masz dostęp do Plugin Manager i Uaktualnień wtedy jest mało prawdopodobne, że będziesz musiał użyć tej funkcji. Możesz odbudować rejestr wtyczki w dowolnym momencie, dodać nowy dodatek i nie używać Plugin Manager.');
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS', 'Rejestr wtyczek został przebudowany poprawnie.');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE', 'Wystąpił błąd przy odbudowie rejestru wtyczek. Powinieneś sprawdzić błąd w dzienniku Jomres, aby sprawdzić, czy istnieje zapis mówiący o tym, co spowodowało błąd.');
jr_define('_JOMRES_SEARCH_PRICERANGES', 'Szukaj w przedziale cenowym.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE', 'Nie ma jeszcze żadnych rezerwacji.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE', 'Edycja rodzaju oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO', 'Wybierz rodzaj oferty');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY', 'Twoje zapytanie...');
jr_define('_JOMRES_COM_A_LISTLIMIT', 'Limit ofert na liście');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC', 'Liczba ofert pokazywanych na stronie wyszukiwania.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE', 'Wyszukiwarka');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC', 'Zintegrowana funkcja wyszukiwania pozwala użytkownikom przeszukiwać oferty zgodnie z zestawem funkcji. Jeśli już korzystałeś z funkcji wyszukiwania w Jomres w Joomla zapoznaj się z tymi ustawieniami.
	<br />
	Funkcja ta umożliwia obsługę wyszukiwania w Jomres dla tych użytkowników, którzy nie chcą używać dodatkowych modułów wyszukiwania Joomla.
	<br />
	Pamiętaj, że jeśli zdecydujesz się szukać czegoś za pośrednictwem linku (nie listy rozwijanej), inne opcje wyszukiwania nie będą realizowane, tylko kliknięty link.
	<br />
	Zauważ, że domyślnie układ tej zintegrowanej wyszukiwarki nie jest ładny. Jest tak ponieważ plik szablonu musi zawierać wszystkie możliwe opcje, a niektóre z nich są sprzeczne.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE', 'Włącz integracje wyszukiwarki');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC', 'Jeśli Tak, to każde zapytanie do Jomres pokazuje listę ofert i wszystkie opcje wyszukiwania.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS', 'Korzystaj z kolumn');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC', 'Każda opcja wyszukiwania pokazywana jako link pojawi się w kolumnach.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO', 'Wyszukiwanie według województwa (wybór z listy rozwijanej)');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC', 'Wyszukiwanie z listy rozwijanej, filtrowanie według krajów/województw/miejscowości. Jeśli zamierzasz korzystać z tej funkcji to nie używaj opcji wyszukiwania województw/miejscowości poniżej.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME', 'Szukaj według nazwy oferty');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC', 'Szukanie przez wpisanie nazwy oferty.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN', 'Pokaż jako listę rozwijaną');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC', 'Ustaw na Nie, aby wyświetlić listę jako linki.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION', 'Szukaj wg miejscowości lub województwa');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC', 'Szukanie przez wpisanie nazwy miejscowości lub województwa.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN', 'Pokaż jako listę rozwijaną');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC', 'Ustaw na Nie, aby wyświetlić listę jako linki.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE', 'Wyszukiwanie według rodzaju ofert');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC', 'Szukanie przez wpisanie rodzaju oferty.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN', 'Pokaż jako listę rozwijaną');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC', 'Ustaw na Nie, aby wyświetlić listę jako linki.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE', 'Szukaj według zasobu');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC', 'Szukanie przez wpisanie zasobu.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN', 'Pokaż jako listę rozwijaną');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC', 'Ustaw na Nie, aby wyświetlić listę jako linki.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES', 'Cechy');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC', 'Szukanie przez wpisanie cechy.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN', 'Pokaż jako listę rozwijaną');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC', 'Ustaw na Nie, aby wyświetlić listę jako ikonki i pola wyboru.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION', 'Szukaj w opisie');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC', 'Szukanie przez wpisanie frazy kluczowej.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY', 'Szukaj według dostępności');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC', 'Szukanie przez wpisanie dostępności.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES', 'Szukaj w przedziałach cenowych');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC', 'Szukanie przez wpisanie przedziałów cenowych.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS', 'Taryfy w przedziale cenowym');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC', 'Sprawdzone zostaną wszystkie ceny i wyświetlone wyłącznie te mieszczące się w zdefiniowanych przedziałach.');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC', 'Domyślnie, jeśli oferta nie została wybrana zostanie przeprowadzone wyszukiwanie. Jeżeli wyniki wyszukiwania nie zostały wywołane przez moduł wyszukiwania, wyszukiwanie będzie produkować losowe wyniki (celowo).');
jr_define('_JOMRES_COM_A_CRON_TITLE', 'Cron i dzienniki');
jr_define('_JOMRES_COM_A_CRON_DESC', 'Funkcjonalność ta jest wymagana dla fakturowania i prawidłowej obsługi prowizji.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN', 'Ręczne uruchamianie zadań crona korzystając z linków widocznych poniżej. Zauważ, że kliknięcie w link uruchamia zadanie, wyświetlona pusta strona nie jest błędem.');
jr_define('_JOMRES_COM_A_CRON_METHOD', 'Metoda');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC', 'Jeśli nie masz dostępu do crona, ustaw funkcję uruchamiania cyklicznych zadań wbudowanych w Jomres. W przeciwnym razie ustaw uruchamianie zadań przez Twojego crona na serwerze.
	<br />
	<i>curl -s ' .JOMRES_SITEPAGE_URL_AJAX.'&task=cronjobs&tmpl='.get_showtime('tmplcomponent').'&no_html=1> /dev/null</i>');
jr_define('_JOMRES_COM_A_CRON_LOGGING', 'Wyświetlanie logowania w przeglądarce');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC', 'Działa tylko jeśli metoda jest ustawiona na System Jomres.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED', 'Logowanie włączone');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC', 'Ustaw Tak by włączyć logowanie. Wyniki dzienników będą dostępne poniżej.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS', 'Pełne rejestrowanie');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC', 'Dużo logując wyjście');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE', 'Edycja szablonów');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE', 'Własne pola');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC', 'Tutaj można określić niestandardowe pola, które będą widoczne w formularzu rezerwacji.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME', 'Nazwa pola (bez spacji)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE', 'Wartość domyślna');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION', 'Opis');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED', 'Wymagane');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY', 'Maksymalna ilość');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC', 'Jeśli maksymalna ilość jest ustawiona na większy niż 1 to goście otrzymają możliwość wyboru z listy rozwijanej.');
jr_define('_JRPORTAL_TAXRATES_TITLE', 'Podatki');
jr_define('_JRPORTAL_TAXRATES_CODE', 'Ustawienia podatku');
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION', 'Opis podatku');
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE', 'Nie można usunąć tej stawki podatkowej.');
jr_define('_JRPORTAL_TAXRATES_RATE', 'Cena');
jr_define('_JRPORTAL_INVOICES_TITLE', 'Faktury rezerwacji');
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID', 'Niezapłacona');
jr_define('_JRPORTAL_INVOICES_STATUS_PAID', 'Zapłacona');
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED', 'Anulowana');
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING', 'Oczekująca');
jr_define('_JRPORTAL_INVOICES_USER', 'Użytkownik');
jr_define('_JRPORTAL_INVOICES_STATUS', 'Status');
jr_define('_JRPORTAL_INVOICES_RAISED', 'Wystawiona');
jr_define('_JRPORTAL_INVOICES_DUE', 'Wymagalna');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION', 'Subskrypcja');
jr_define('_JRPORTAL_INVOICES_INITTOTAL', 'Wyjściowa brutto');
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY', 'Odnawianie');
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH', 'Cyklicznie dzień miesiąca');
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE', 'Waluta');
jr_define('_JRPORTAL_INVOICES_LINEITEMS', 'Pozycje');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME', 'Nazwa');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION', 'Opis');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE', 'Wyjściowa');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY', 'Ilość');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT', 'Rabat');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL', 'Netto');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE', 'Kod podatku');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION', 'Opis podatku');
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE', 'VAT');
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE', 'Zastąpić standardowe ustawienia');
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES', 'Moje faktury');
jr_define('_JRPORTAL_COUPONS_TITLE', 'Kody rabatowe');
jr_define('_JRPORTAL_COUPONS_DESC', 'Kody rabatowe mogą być generowane i przekazywane klientom jako zachęta do dokonywania rezerwacji. Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.');
jr_define('_JRPORTAL_COUPONS_CODE', 'Kod kuponu');
jr_define('_JRPORTAL_COUPONS_VALIDFROM', 'Ważny od');
jr_define('_JRPORTAL_COUPONS_VALIDTO', 'Ważny do');
jr_define('_JRPORTAL_COUPONS_AMOUNT', 'Wysokość rabatu');
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE', 'Rabat procentowy');
jr_define('_JRPORTAL_COUPONS_ROOMONLY', 'Tylko zasób');
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS', 'Jeśli masz kod promocyjny, wprowadź go w polu i kliknij przycisk "Zapisz kod".');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON', 'Zapisz kod');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED', 'Kod został zapisany dla rezerwacji.');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND', 'Nie znaleziono takiego kodu rabatowego.');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE', 'Wartość kodu rabatowego');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE', 'Rezerwacja promocyjna. Kod kuponu/Wartość rabatu/Ustawienia kuponu:');
jr_define('_JOMRES_COM_CHOOSELANGUAGES', 'Wybierz język');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO', 'Opcje językowe muszą być wybrane z listy wyboru języka.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN', 'Pokaż wybór języka z menu rozwijanego');
jr_define('_JRPORTAL_NEWUSER_DEAR', 'Drogi');
jr_define('_JRPORTAL_NEWUSER_THANKYOU', 'Dziękujemy za rejestrację.');
jr_define('_JRPORTAL_NEWUSER_USERNAME', 'Nazwa użytkownika:');
jr_define('_JRPORTAL_NEWUSER_PASSWORD', 'Twoje hasło:');
jr_define('_JRPORTAL_NEWUSER_LOG_IN', 'Zaloguj się aby zobaczyć swoje rezerwacje');
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON', 'Kod rabatowy został zapisany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON', 'Kod rabatowy został usunięty.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE', 'SMS Clickatell');
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME', 'Login');
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD', 'Hasło');
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID', 'API ID');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER', 'Numer telefonu komórkowego dla powiadomień SMS');
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC', "Proszę używać formatu 'kod kraju, numer telefonu'. Na przykład polski numer telefonu komórkowego '48500600700'. Zostaw puste jeśli nie chcesz otrzymywać żadnych powiadomień SMS.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE', 'SMS');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED', 'Lista rezerwacji zasobu');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE', 'Lista rezerwacji zasobu dla maks klientów');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING', 'Pamiętaj, że ceny widoczne za dostępne zasoby są szacunkowe i nieostateczne. Cena Twojej rezerwacji zostanie automatycznie obliczona z chwilą dodania do zamówienia wybranych pozycji.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE', 'Pakiety abonamentowe');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME', 'Nazwa');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION', 'Opis');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED', 'Opublikowany');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT', 'Całkowity koszt');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT', 'Limit ofert');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE', 'Subskrybcja');
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE', 'Obsługa abonamentów');
jr_define('_JOMRES_COM_NEWUSER', 'Utwórz nowego użytkownika');
jr_define('_JOMRES_COM_NEWUSER_DESC', 'Utwórz nowe konto użytkownika.');
jr_define('_JOMRES_CLICKTOREGISTER', 'Dodaj nową ofertę');
jr_define('_JRPORTAL_NEWUSER_SUBJECT', 'Dziękujemy za rezerwacje - nowe dane użytkownika po');
jr_define('_JOMRES_LATLONG_DESC', 'Użyj myszki do poruszania się po mapie, a następnie przeciągnij wskaźnik do lokalizacji oferty, aby ustawić długość i szerokość geograficzną.');
jr_define('_JOMRES_CONTROLPANEL', 'Mój kokpit');
jr_define('_JOMRES_MANAGER_SHOWINVOICE', 'Pokaż fakturę');
jr_define('_JOMRES_MANAGER_SHOWINVOICES', 'Faktury rezerwacji');
jr_define('_JOMRES_USER_LISTMYPROPERTY', 'Dodaj nową ofertę');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON', 'Ostrzeżenie:');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID', 'Przykro nam, ale ID pakietu abonamentowego nie został rozpoznany.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE', 'Przykro nam, jesteś już zapisany do darmowego pakietu abonamentowego, nie można zapisać się do tego pakietu ponownie.');
jr_define('_JOMRES_COM_YOURBUSINESS', 'Firma');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME', 'Nazwa firmy');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO', 'NIP');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS', 'Numer budynku');
jr_define('_JOMRES_INVOICE_NUMBER', 'Faktura nr');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP', 'Wybierz daty, które chcesz zablokować w kalendarzu rezerwacji. Po wybraniu odpowiednich dat, kliknij przycisk "Zastosuj", aby ponownie sprawdzić dostępność.
	<br /><br />
	Jeżeli w ofercie istnieje jedna lub więcej rezerwacji w wybranym okresie, to nie będzie można zablokować możliwości rezerwacji w wybranym terminie.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK', 'Przepraszamy, nie możesz zablokować rezerwacji tej oferty w wybranym terminie.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK', 'Możesz zablokować rezerwację tej oferty w wybranym terminie.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES', 'Twoja oferta jest skonfigurowana do pobierania płatności za osobę za noc, ale nie masz utworzonych lub opublikowanych żadnych rodzajów klientów. Należy stworzyć i opublikować jeden lub więcej rodzaj klientów.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS', 'Jeśli nie masz jeszcze skonfigurowanych cen, nie będzie można składać żadnych rezerwacji w Twojej ofercie.');
jr_define('_JOMRES_EDITINGMODE_ON', 'Tryb edycji włączony');
jr_define('_JOMRES_EDITINGMODE_OFF', 'Tryb edycji wyłączony');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE', 'Zmienne kwoty depozytów');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC', 'Zmienne kwoty depozytów pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data początku rezerwacji jest X dni od "dziś". Ustaw Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień początku rezerwacji jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS', 'Liczba dni, za które cała kwota zostanie pobrana jako depozyt.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT', 'Wiadomość e-mail z potwierdzeniem została wysłana. Możesz zamknąć to okno.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT', 'Kontakt');
jr_define('_JOMRES_INVOICE_MARKASPAID', 'Oznacz jako Zapłacona');
jr_define('_JOMRES_INVOICE_MARKEDASPAID', 'Faktura oznaczona jako zapłacona');
jr_define('_JOMRES_APIKEY_REMAKE', 'Dodaj nowy klucz API');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE', 'Obsługa dla jednej oferty');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC', 'Jeśli opcja ta jest ustawiona na Tak, wtedy widok nakładki z Jomres dla użytkowników nieautoryzowanych jest znacznie uproszczony. Idealne jeśli chcesz mieć tylko jedną ofertę i przyjmować rezerwacje tylko dla niej.<br />');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT', 'Płatność końcowa');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE', 'Uwaga! Używasz globalnego trybu edycji. Jest to dobre rozwiązanie jeśli dobrze rozumiesz co oznacza ta funkcja. Jeśli nie jesteś pewien, czy należy używać Jomres w ten sposób, patrz <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">tryb edycji ręcznej</a> więcej informacji na ten temat.');
jr_define('_JOMRES_SUPPORTKEY', 'Kod wsparcia');
jr_define('_JOMRES_SUPPORTKEY_DESC', 'Kod wsparcia (znany również jako numer licencji). Umożliwia pobieranie dodatków dla Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT', 'Rabat');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO', 'Ogranicz dodawanie ofert dla jednego kraju');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC', 'Można ograniczyć możliwość dodawania ofert dla jednego kraju, poprzez ustawienie tej opcji na Tak i ustawienie kraju w następnej opcji.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY', 'Oferty znajdują się w tym kraju');
jr_define('_JOMRES_JQUERYTHEME', 'Szablon graficzny');
jr_define('_JOMRES_JQUERYTHEME_DESC', 'Wybierz szablon graficzny wykorzystywany w ramach systemu Jomres.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED', 'Przykro nam, ale ta oferta nie jest obecnie dostępna.');
jr_define('_JOMRES_REVIEWS', 'Recenzje');
jr_define('_JOMRES_REVIEWS_TITLE', 'Tytuł recenzji');
jr_define('_JOMRES_REVIEWS_DATE', 'Recenzja dodana');
jr_define('_JOMRES_REVIEWS_NOREVIEWS', 'Brakuje jeszcze recenzji dla tej oferty.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST', 'Chcesz być pierwszą osobą, która wyrazi swoją opinię na temat tej oferty?');
jr_define('_JOMRES_REVIEWS_IAGREE', 'Zgadzam się z tą recenzją');
jr_define('_JOMRES_REVIEWS_IDISAGREE', 'Nie zgadzam się z tą recenzją');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING', 'Średnia ocena:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES', 'Suma głosów:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW', 'Dodaj nową recenzję');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN', 'Musisz być zalogowana/y aby dodać recenzję.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY', 'Powiedz nam co myślisz o tej ofercie:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID', 'Ten recenzent powiedział nam:');
jr_define('_JOMRES_REVIEWS_PROS', 'Plusy oferty:');
jr_define('_JOMRES_REVIEWS_CONS', 'Minusy oferty:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE', 'Dodał:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED', 'Napisz recenzję tej oferty');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW', 'Przykro nam, ale nie możesz pisać recenzji na tej stronie.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW', 'Zobacz recenzje');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW', 'Klienci zgadzają się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW', 'Klienci nie zgadzają się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR', 'Klient zgadza się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR', 'Klient nie zgadza się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM', 'Dziękujemy za podzielenie się opinią o tej ofercie.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED', 'Dziękujemy, ale już wyraziłaś/eś swoją opinię o tej ofercie.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS', 'Prosimy się upewnić, że wszystkie pola zostały wypełnione.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE', 'Prosimy podsumować swoją recenzję wpisując jej tytuł.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION', 'Prosimy wprowadzić bardziej szczegółowy komentarz w polu opisu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS', 'Prosimy wprowadzić plusy tej oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS', 'Prosimy wprowadzić minusy tej oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1', 'Prosimy ocenić jakość oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2', 'Prosimy ocenić stosunek ceny do jakości.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3', 'Prosimy ocenić uprzejmość personelu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4', 'Prosimy ocenić profesjonalizm personelu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5', 'Prosimy ocenić jakość dodatkowych usług.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6', 'Prosimy ocenić jakość dodatkowych usług w stosunku do ceny.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY', 'Podsumowanie recenzji');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL', 'Recenzja bardziej szczegółowo');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW', 'Dziękujemy za wyrażenie swojej opinii.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED', 'Dziękujemy za wyrażenie swojej opinii. Zostanie ona wkrótce opublikowana przez jednego z naszych moderatorów.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL', 'Użyj funkcji przeglądu Jomres');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH', 'Automatycznie publikuj recenzje');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC', 'Jeśli ustawisz na Nie będziesz musiał ręcznie publikować recenzje.');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE', 'Recenzje w trybie testowym');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC', 'Oczywiście nie jest to idealne rozwiązanie w środowisku produkcyjnym.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO', 'Jest to lista wszystkich ofert. Aby zobaczyć recenzje oferty kliknij na tej ofercie. Następnie będziesz mógł opublikować lub usunąć recenzję.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED', 'Liczba nieopublikowanych recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL', 'Całkowita liczba recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW', 'Publikowanie/Cofnięcie recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW', 'Usuń recenzję');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW', 'Raport recenzji');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE', 'Raporty recenzji');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR', 'Podaj swój raport');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL', 'Zobaczyłaś/eś coś niewłaściwego? Zgłoś to nam, sprawdzimy to.');
jr_define('_JOMRES_REVIEWS_SUBMIT', 'Wyślij');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY', 'Raport stworzony przez');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS', 'Raporty są publikowane przez użytkowników, którzy mogą nie zgadzać się z treścią przeglądu. Jedynym sposobem na usunięcie raportu jest usunięcie recenzję.');
jr_define('_JOMRES_REVIEWS_RATING', 'Oceny (1 = słaba, 10 = doskonała)');
jr_define('_JOMRES_REVIEWS_RATING_1', 'Jakość oferty');
jr_define('_JOMRES_REVIEWS_RATING_2', 'Stosunek ceny do jakości');
jr_define('_JOMRES_REVIEWS_RATING_3', 'Uprzejmość personelu');
jr_define('_JOMRES_REVIEWS_RATING_4', 'Profesjonalizm personelu');
jr_define('_JOMRES_REVIEWS_RATING_5', 'Jakość dodatkowych usług');
jr_define('_JOMRES_REVIEWS_RATING_6', 'Stosunek ceny do jakości dodatkowych usług');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY', 'Korekta dokonana przez:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE', 'Ukryj recenzje');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS', 'Formularz rezerwacji na stronie szczegółów oferty');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC', 'Ustaw Tak, aby pokazać formularz rezerwacji na stronie szczegółów oferty. Jeśli ustawisz Nie, wówczas pojawi się link do formularza zamiast formularza rezerwacji.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE', 'Ceny ustawione łącznie z podatkiem');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC', 'Jeśli ceny ustalasz łącznie z podatkiem wybierz Tak.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS', 'VAT - Opcje dodatkowe');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK', 'Dzień pól tygodnia? Można ustawić szybkość dla danego dnia tygodnia, po kliknięciu przycisku dzień tygodnia wszystkie dni tygodnia zostaną ustawione na tym kursie.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES', 'Zbieracze dat i stawek wejść pozwala ustawić jedną cenę dla danego zakresu dat. Wybierz datę rozpoczęcia i zakończenia, podaj cenę, a następnie kliknij przycisk "Ustaw ceny".');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START', 'Rozpocznij zakres');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END', 'Zakończ zakres');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE', 'Stawka');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET', 'Ustaw stawki');
jr_define('_JOMRES_PARTNERS_TITLE', 'Partnerzy');
jr_define('_JOMRES_CALENDAR_RTL', 'Fałszywy');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM', 'Zasób');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS', 'Klient');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION', 'To jak mamy przypisane numery klientów do swoich zasobów. Jeśli chcesz zmienić ten przydział, będziesz musiał skontaktować się z personelem po dokonaniu rezerwacji. Dodatkowe opłaty mogą być zastosowane w przypadku zmiany rezerwacji.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED', 'Należy pamiętać, że oferta nie została jeszcze opublikowana. Odwiedzający nie będą mogli jej zobaczyć.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT', 'Domyślna kolejność sortowania wyników');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC', 'Zmień tę opcję, aby zmienić domyślną kolejność prezentowania wyników wyszukiwania.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW', 'Pokaż wynik wyszukiwania na liście rozwijanej');
jr_define('_JOMRES_ROOMMSLIST_STYLE', 'Styl listy zasobów');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC', 'W formularzu rezerwacji, przy użyciu "Klasyczny" wyświetl styl, który oferuje pojedyncze zasoby dla klientów. Z uwagi na zasób, klienci mogą wybrać liczbę zasobówX (np. 2 x podwójna).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC', 'Klasyczny');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES', 'Zasoby');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY', 'Dzień rozpoczęcia tygodnia');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY', 'Tylko klienci danej oferty mogą dodawać recenzję');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC', 'Ustaw Tak, jeśli chcesz ograniczyć możliwość dodawania recenzji tylko do tych użytkowników, którzy byli już klientami danej oferty.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING', 'Za zasób');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM', 'Za klientów w zasobie');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING', 'Za klientów w rezerwacji');
jr_define('_JOMRES_NUMBER_OF_ROOMS', 'Liczba zasobów');
jr_define('_JRPORTAL_MONTHS_LONG_0', 'Styczeń');
jr_define('_JRPORTAL_MONTHS_LONG_1', 'Luty');
jr_define('_JRPORTAL_MONTHS_LONG_2', 'Marzec');
jr_define('_JRPORTAL_MONTHS_LONG_3', 'Kwiecień');
jr_define('_JRPORTAL_MONTHS_LONG_4', 'Maj');
jr_define('_JRPORTAL_MONTHS_LONG_5', 'Czerwiec');
jr_define('_JRPORTAL_MONTHS_LONG_6', 'Lipiec');
jr_define('_JRPORTAL_MONTHS_LONG_7', 'Sierpień');
jr_define('_JRPORTAL_MONTHS_LONG_8', 'Wrzesień');
jr_define('_JRPORTAL_MONTHS_LONG_9', 'Październik');
jr_define('_JRPORTAL_MONTHS_LONG_10', 'Listopad');
jr_define('_JRPORTAL_MONTHS_LONG_11', 'Grudzień');
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC', 'Ustaw Tak, aby zmniejszyć liczbę opcji dostępnych dla managera oferty w sekcji Konfiguracja Systemu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT', 'Proszę wybrać opcję rezerwacji.');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC', "<p>If this option is set to Yes, then managers will be able to see the html editor provided with the CMS, and enter HTML into the description. This is a potential security risk as there is a possibility that they can introduce unwanted HTML or Javascript. Additionally, if they enter poorly formatted HTML the page design could become compromised. It's better to leave this option set to No wherever possible.</p><p>If all managers are trusted users (e.g. yourself) then you can leave it set to Yes and you modify the different HTML tags that they are allowed to enter in the Input Filtering tab in Site Configuration.</p><p>If, on the other hand, you're using Jomres as a portal where you invite users to add and administer their own properties then this isn't the ideal configuration. Instead you should leave this option set to No. With it set to No managers will instead see a markdown editor that they can use to enter basic formatting which should be sufficient for the majority of users.</p>");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT', 'Widok pełnoekranowy');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW', 'Widok klasyczny');
jr_define('_JOMRES_PARTNER_DISCOUNT', 'Rabat partnera');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE', 'Szukaj użytkownika');
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS', 'Wpisz kilka znaków by wyszukać użytkownika.
	<br />
	Po wybraniu użytkownika będziesz mógł dodać go jako partnera i przypisać mu wybrane oferty i rabaty.');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE', 'Twoi obecni partnerzy');
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS', 'Wybierz partnera, którego dane chcesz edytować.');
jr_define('_JOMRES_PARTNER_SHOW_TITLE', 'Partner:');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE', 'Szukaj oferty');
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS', 'Wpisz kilka znaków z nazwy oferty i wybierz odpowiednią.
	<br />
	Po wybraniu oferty należy przypisać ją do partnera, jednak nie będzie on jeszcze korzystał z żadnych rabatów, trzeba będzie ustawić jeszcze te opcje.');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES', 'Aktualna oferta');
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS', 'Kliknij na ofercie by edytować rabaty partnera dla tej oferty.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED', 'To konto zostało zawieszone, nie jest obecnie możliwe administrowanie ofertami używając tego konta.');
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE', 'Zawieszone konto managera');
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE', 'Odwieszone konto managera');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL', 'Pamiętaj, że Twoje konto managera ofert zostało zawieszone. Nie będziesz w stanie wykonywać żadnych funkcji zarządzania ofertami aż konto zostanie przywrócone.');
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL', 'Pamiętaj, że Twoje konto managera ofert jest już aktywne. Możesz nadal wykonywać wszelkie funkcje zarządzania ofertami.');
jr_define('_JOMCOMP_MYUSER_REMOVE', 'Usuń z ulubionych');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE', 'Archiwum danych');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC', 'Archiwum danych rezerwacji jest to zrzut informacji rezerwacji zrobiony po naciśnięciu przycisku rezerwacja. Najedź na datę aby zobaczyć surowy zrzut danych. Informacje te są przechowywane w tabeli XXX__jomres_booking_data_archive .');
jr_define('_JOMRES_MY_ACCOUNT_EDIT', 'Moje dane');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS', 'To add a user as a property manager, first enter the first few characters of their username in the field above. When the correct user has been found click on that name to select it, then choose which property(s) they should be a manager of. The user <em>must already be a user in the CMS</em>');
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE', 'Obecni managerowie');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER', 'Liczba osób');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC', 'Pokaż wyszukiwanie według liczby osób wybieranej z listy rozwijanej.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS', 'Szukaj według ilości gwiazdek');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC', 'Pokaż wyszukiwanie według liczby gwiazdek wybieranej z listy rozwijanej.');
jr_define('_JOMRES_SEARCH_GUESTNUMBER', 'Liczba osób');
jr_define('_JOMRES_SEARCH_STARS', 'Liczba gwiazdek');
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED', 'Liczba ofert');
jr_define('_JOMRES_CONFIG_JQUERY', 'Obciążenie Jomres biblioteki jQuery');
jr_define('_JOMRES_CONFIG_JQUERY_DESC', 'Można ustawić na Nie jeśli masz szablon, który używa jQuery. Może to rozwiązać problemy z jQuery i konflikty na niektórych szablonach, ale nie wszystkie.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC', 'Enabling this option allows you to see the language switcher in the Fullscreen view in the frontend.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC', 'Miniatury są tworzone automatycznie dla przesyłanych zdjęć.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH', 'Małe miniaturki (szerokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC', 'Małe miniaturki są używane w wykazie ofert, podczas gdy średnie miniatury są używane w nagłówku ofert.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT', 'Małe miniaturki (wysokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH', 'Średnie miniaturki (szerokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT', 'Średnie miniaturki (wysokość maks px)');
jr_define('_JOMRES_TOUCHTEMPLATES', 'Tłumaczenie');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE', 'Obsługa faktur prowizyjnych');
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC', 'Ustaw Tak, aby uruchomić obsługę faktur prowizyjnych.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS', 'Obsługa faktur rezerwacji');
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC', 'Ustaw Tak, aby uruchomić obsługę faktur rezerwacji.');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND', 'Automatycznie zawieś oferty z przekroczonym terminem płatności');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD', 'Automatycznie zawiesić gdy przekroczono');
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC', 'Jest to liczba dni w czasie jakim manager musi zapłacić fakturę, zanim zostanie on zawieszony, a jego oferty wyłączone z publikacji w portalu.');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT', 'Kontekst języka');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC', 'Użyj tej opcji do zmiany kontekstu języka. Funkcja ta pozwala używać etykiet, które są odpowiednie dla aktualnej działalności.');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG', 'Konfiguracja zaawansowana');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC', 'Ustaw Tak, jeśli chcesz korzystać z zaawansowanych opcji konfiguracyjnych. Jeśli dopiero zaczynasz z Jomres, to radzimy zostawić ustawione na Nie.');
jr_define('_JOMRES_CONFIG_JQUERY_UI', 'Obciążenie Jomres biblioteki jQuery UI');
jr_define('_JOMRES_SORTORDER_PRICE_DESC', 'Cena (najpierw najwyższa)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC', 'Cena (najpierw najniższa)');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT', 'Podsumowanie płatności i szacunki powinny być wycenione jako za dobę/za tydzień/miesiąc, za?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY', 'Za noc');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', 'Za tydzień');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', 'Za miesiąc');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON', 'Za osobę');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS', 'Tydzień na');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS', 'Miesiąc na');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS', 'Opcja szukaj klienta');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC', 'Dotyczy wszystkich modułów wyszukiwania. Podczas korzystania z funkcji wyszukiwania klienta numer, powinien wyglądać funkcja szukaj ofert, które taryfy będą obsługiwać klientów numerów i równa wybrany numer, dokładnie równy numer wybrany lub numer wybrany i większe?');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE', 'Proszę czekać, zamówienie jest przetwarzane.
	<br />
	W celu dokonania płatności zostaniesz przekierowany do serwisu transakcyjnego PayPal.');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED', 'Jeśli automatycznie nie zostałeś przekierowany do systemu PayPal w przeciągu 5 sekund...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE', 'Kliknij Tutaj');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM', 'Rezerwacja od');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO', 'Rezerwacja do');
jr_define('_JRPORTAL_COUPONS_GUESTNAME', 'Nazwa klienta');
jr_define('_JRPORTAL_COUPONS_DESC_478', 'Kody rabatowe mogą być generowane i przekazywane klientom jako zachęta do dokonywania rezerwacji.
	<br />
	Jeśli chcesz by rezerwacja była dostępna dla jednego konkretnego gościa, wybierz nazwę tego gościa i ogranicz kupon do tego tylko gościa.
	<br />
	Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK', 'Rezerwacja została odrzucona z');
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO', 'Do');
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC', 'Ustaw Nie, aby wyłączyć ładowanie zarówno jQuery UI Javascript i pliki CSS.');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS', 'Biblioteka jQuery UI CSS');
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC', 'Ustaw Nie, aby wyłączyć tylko plik jQuery UI CSS.');
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX', 'Brutto');
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', 'Oferta nie opublikowana');
jr_define('_JOMRES_CONVERSION_TITLE', 'Użyj funkcji konwersji');
jr_define('_JOMRES_CONVERSION_TITLE_DESC', 'Użyj funkcji konwersji online Jomres. Pozwoli to oferować wybór waluty z listy rozwijanej dla użytkowników i wyświetlanie cen w ich walucie.');
jr_define('_JOMRES_CONVERSION_DISCLAIMER', 'Użyliśmy wszelkich starań, aby otrzymać najbardziej dokładne i aktualne kursy walut. Internetowa funkcja konwersji walut to usługa świadczona wyłącznie w celach informacyjnych i nie ma na celu dostarczenie dokładnych danych liczbowych. W związku z tym nie możemy zagwarantować dokładności kursów walut.');
jr_define('_JOMRES_CURRENCYCONVERSION_TAB', 'Waluta');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE', 'IP Wykrywanie API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Aby automatycznie ustawić kod waluty na liście rozwijanej Jomres jest w stanie wykorzystać bezpłatną usługę o nazwie IPinfoDB, która pozwala wykryć kraj gośća. Musisz jednak zarejestrować się na stronie <a href="https://www.ipinfodb.com/login" target="_blank">IPinfoDB</a> i zdobyć klucz API.');
jr_define('_JOMRES_DEBUGGING_TAB', 'Debugowanie');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX', 'Kwota netto');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX', 'Kwota brutto');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM', 'VAT - Zasób');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM', 'Otwórz formularz rezerwacji');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS', 'Wróć do szczegółów oferty');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT', 'Automatycznie wybrany?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE', 'Pozostała kwota');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER', 'Filtrowanie zasobów na podstawie ich cech.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING', 'Ostatnia rezerwacja');
jr_define('_JOMRES_DATEPERIOD_SECOND', 'sekunda');
jr_define('_JOMRES_DATEPERIOD_MINUTE', 'minuta');
jr_define('_JOMRES_DATEPERIOD_HOUR', 'godzina');
jr_define('_JOMRES_DATEPERIOD_DAY', 'dzień');
jr_define('_JOMRES_DATEPERIOD_WEEK', 'tydzień');
jr_define('_JOMRES_DATEPERIOD_MONTH', 'miesiąc');
jr_define('_JOMRES_DATEPERIOD_YEAR', 'rok');
jr_define('_JOMRES_DATEPERIOD_DECADE', 'dekada');
jr_define('_JOMRES_DATEPERIOD_S', 's');
jr_define('_JOMRES_DATEPERIOD_AGO', 'temu');
jr_define('_JOMRES_DATEPERIOD_FROMNOW', 'od teraz');
jr_define('_JOMRES_WHOLEDAY_TITLE', 'Rezerwacje są całymi dniami');
jr_define('_JOMRES_WHOLEDAY_DESC', 'Domyślnie oferty rezerwowane są na noc, więc rezerwacja od pierwszego stycznia '.date('Y', strtotime('przyszły rok')).' do 2 stycznia '.date('Y', strtotime('przyszły rok')).' obejmuje tylko jedną noc. Jeśli ustawisz tę opcję na Tak, wtedy rezerwacja obejmie całe dni zamiast, więc rezerwacja w tych dniach obejmie oba dni, a klient będzie rozliczane przez dwa dni.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', 'Za dzień');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', 'Za osobę za dzień');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY', 'Rezerwacja od');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY', 'Rezerwacja do');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY', 'dzień(ni) za');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY', 'Nieprawidłowa data końca rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY', 'Czas rezerwacji jest zbyt krótki. Musi być co najmniej, pomiędzy początkową i końcową datą rezerwacji:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY', 'Rezerwacja od/Rezerwacja do minimum interwał');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY', 'Przedział mimimum dni w formularzu rezerwacji pomiędzy początkiem i końcem rezerwacji. Przedział 1 oznacza, że początek i koniec terminu rezerwacji mogą być ustawione na ten sam dzień, jednak nadal jest to zależne od minimalnego odstępu i obliczane automatycznie przez silnik rezerwacji, ponieważ sprawdza taryfy, które są ważne przez okres rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY', 'Podsumowanie płatności i szacunki powinny być wycenione jako na dzień/za tydzień/miesiąc, za?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY', 'Za dzień');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY', 'Dni przed terminem początku rezerwacji');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY', 'Minimalna liczba dni, które muszą upłynąć od "dziś", przed datą początku rezerwacji.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY', 'Ustaw Tak, jeśli chcesz ograniczyć rezerwacje (użyj następne pole do ustawienia limitu z punktu widzenia dni). Jeśli nie ustawisz na Tak wtedy, gdy użytkownik próbuje zarezerwować więcej niż X dni wcześniej to ich data początku rezerwacji zostanie przywrócona do dzisiejszej daty.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY', 'Pokaż pole daty końca rezerwacji');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY', 'Ustaw Nie, jeśli nie chcesz pokazać pola daty końca rezerwacji.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY', 'Jeśli ustawisz na Tak, wtedy rezerwacja zostanie podjęta na czas określony. Jeśli jest ustawiona na Nie, wówczas zapewnienie, że "zdefiniowane dni początku rezerwacji ustawione na Tak (chyba, że specjalnie chcesz zmusić klientów do rozpoczynania rezerwacji w określonym dniu tygodnia) inaczej nie dostaniesz wiele linków w dostępności kalendarza.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY', 'Predefiniowane dni początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY', 'Tylko dla stron oferujących stałe rezerwacje. Wybierz dzień tygodnia będący początkiem rezerwacji.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY', 'Stałe dni początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY', 'Stały dzień początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY', 'Kiedy stałe dni początku rezerwacji są zaznaczone, liczba terminów, które mogą w terminach listy rozwijanej. Zauważ, że lista dat nie zawiera żadnych dat, jeśli rezerwacja nie jest możliwa ze względu na wcześniejsze rezerwacje, a lista będzie rzeczywiście dwa razy tak długo, jak wybranym numerem bo będzie miał podobną liczbę historycznych dat (jeśli jest dostępny).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY', 'Od osoby, za dzień');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY', 'Wybierz Tak, jeśli chcesz pobierać opłaty za osobę za dzień. Jeśli Nie, wówczas koszty będą obliczane na podstawie za stawkę za dzień.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY', 'Zmienne depozyty pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data początku rezerwacji jest X dni od "dziś". Ustaw Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień początku rezerwacji jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY', 'Funkcja umożliwia przyciągnięcie klientów do zasobów, które mogłyby być pominięte i niezarezerwowane w danym czasie.
	<br />
	Włączenie i konfiguracja funkcji pozwala zaoferować regulację cen na podstawie liczby zasobówwybranego typu które są dostępne w ofercie w danym dniu.
	<br />
	Ilość określa liczbę dni, w jakim musi mieścić się data początku rezerwacji zanim ceny zasobówzostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu zasobówktóre mogą być dostępne przed zastosowaniem danego rabatu.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY', 'Próg (liczba dni pomiędzy dniem początku rezerwacji a dniem składania rezerwacji)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY', 'Oczekiwanie');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY', 'Dzisiaj rezerwacja');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY', 'Klient obecny');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY', 'Dzisiaj wyrejstrowanie');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY', 'Przeterminowane');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY', 'Klient nie dotarł');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY', 'Dni');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY', 'Oznacz rezerwacje podniosłem.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY', 'Oznacz rezerwacje zwrócone.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY', 'Oznacz rezerwacje podniósł');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY', 'Oznacz rezerwacje zwrócone');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY', 'Koszt za dzień:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY', 'Liczba dni:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL', 'Zastąp cenę rezerwacji');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE', 'Zapisz i zastąp');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS', 'Powiadom nowych użytkowników o ich danych logowania');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC', 'Jeśli tak ustaw na Tak. Możesz ustawić tę opcję na Nie, aby mieć pewność, że dane logowania nie są wysyłane do użytkowników. Może to być przydatne, jeśli nie chcesz, aby użytkownicy rzeczywiście mogli się zalogować.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT', 'Kwota podatku w skróconej formie');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC', 'Jeśli chcesz zapobiec w formularzu rezerwacji wyświetlaniu ceny netto w podsumowaniu płatności ustaw na Nie.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD', 'Anulowanie rezerwacji ilość dni');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC', 'Zalogowani, zarejestrowani klienci mogą anulować własne rezerwacje. Tutaj można ustawić ilość dni w których rezerwacja nie może być anulowana po upływie określonej liczby dni przed datą początku rezerwacji.');
jr_define('_JOMRES_EDIT_PROFILE', 'Edycja profilu');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT', 'Dostępność dla następujących rodzajów ofert');
jr_define('_JOMRES_IMAGE', 'Zdjęcie');
jr_define('_JOMRES_CRATES_CLICKINITIAL', 'Kliknij literę, aby wyświetlić wszystkie oferty których nazwa rozpoczyna się od tego znaku. Gdy masz listę ofert można przypisać stawki prowizji do tych ofert lub kliknij na ich "edycji" ikonę, aby wyświetlić statystyki.');
jr_define('_JRPORTAL_TAX_RATE_EDIT', 'Edycja stawek podatku');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT', 'Edycja pola niestandardowego');
jr_define('_JOMRES_LICENSESERVER_PASSWORD', 'Serwer licencji - Hasło');
jr_define('_JOMRES_LICENSESERVER_USERNAME', 'Serwer licencji - Login');
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC', 'Jeśli masz login i hasło na serwerze licencji, wpisz je tutaj. To pomoże Ci uzyskać dostęp do dodatkowych wtyczek Jomres. Jeśli podałeś prawidłowy klucz wsparcia w polu powyżej, to nie ma potrzeby podawania nazwy użytkownika i hasła tutaj.');
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION', 'Twoja wersja Jomres to:');
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION', 'Najnowsza wersja Jomres to:');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING', 'Uwaga! Dostępna jest już nowa wersja Jomres, zaleca się uaktualnienie systemu do najnowszej wersji.');
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Witamy w Jomres - Ulubionym systemie rezerwacji. Jeśli chcesz kupić Srebrną lub Złotą Licencję Jomres <a href="https://www.jomres.net/prices" target="_blank">odwiedź naszą stronę</a>.');
jr_define('_JOMRES_PRODUCT_INFORMATION2', 'System ten jest idealnym rozwiązaniem dla każdego scenariusza, bez znaczenia jest to czy ma to być prosty formularz rezerwacji dla jednej oferty czy większej ich liczby.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY', 'Aktywna oferta');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE', 'SMTP');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC', 'Ustaw Tak, aby korzystać z SMTP.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST', 'Host');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC', 'Zmień na serwer poczty SMTP.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT', 'Port');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC', 'Zmień port SMTP.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL', 'Protokół');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC', "W zależności od ustawień serwera SMTP, musisz pozostawić puste lub wpisać 'SSL' lub 'TLS'. Poproś dostawcę o pomoc.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH', 'Użyj uwierzytelniania');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC', 'Jeżeli serwer SMTP wymaga uwierzytelniania ustaw na Tak. Podaj następnie login i hasło użytkownika.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME', 'Login');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC', 'Podaj login do konta SMTP.');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD', 'Hasło');
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC', 'Podaj hasło do konta SMTP.');
jr_define('_JOMRES_QUICK_INFO', 'Podgląd');
jr_define('_JOMRES_MENU_SHOW', 'Pokaż');
jr_define('_JOMRES_MENU_HIDE', 'Schowaj');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT', 'Domyślnie');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY', 'Każdy');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED', 'Zarejestrowany');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER', 'Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER', 'Super Manager');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY', 'Nikt');
jr_define('_JOMRES_ACCESS_CONTROL_TITLE', 'Kontrola dostępu do menu');
jr_define('_JOMRES_ACCESS_CONTROL_DESC', 'Funkcja ta pozwala kontrolować, kto będzie w stanie zobaczyć daną opcję w menu głównym. Zazwyczaj opcje użytkowników 00009 są widoczne przez niezarejestrowanych odwiedzających witrynę, 00010 opcje zasadniczo odnoszą się do kategorii działalności typu recepcji, które są używane na codzień, natomiast 00011 opcje służą do instalowania i konfigurowania właściwości, ale są dostępne rzadziej.');
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST', 'Recepcjonistka');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE', 'Pełna kontrola dostępu');
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC', 'Ustaw Tak, aby umożliwić pełne funkcję kontroli dostępu, a następnie odwiedź ustawienia kontroli dostępu.');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM', "Należy jednak pamiętać, że te ustawienia nie kontrolują podstawowych skryptów np. jeśli ustawisz <i>00009user_option_03_search</i> do 'Kierownik' użytkownik, który zna Jomres może jeszcze dostać się do np. j06000search.class.php wprowadzając http://www.domain.com/index.php?option=com_jomres&task=search w swoim pasku adresu przeglądarki. Jest to celowe, ponieważ kontrola dostępu do menu po prostu kontroluje, co można zobaczyć w głównym Jomres menu.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL', 'Pełna kontrola dostępu');
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL', '<strong>Funkcja ta jest tylko dla zaawansowanych użytkowników. Jeśli nie wiesz, co to jest, i nie ma konkretnego powodu, aby jej użyć, należy powrócić do konfiguracji strony i ustawić pełną opcję kontroli dostępu na Nie.</strong>
	<br />
	Funkcja ta pozwala kontrolować, kto ma dostęp do jakich opcji menu (z pewnymi wyjątkami, które są zapisane w systemie). Jeśli poziom dostępu do skryptu obok nazwy jest domyślny, a następnie z opcją Pełna kontrola dostępu ustawiona na Tak <strong>Każdy</strong> może uzyskać dostęp do skryptów, do których nie powinien mieć dostępu więc jeśli zamierzasz korzystać z tej funkcji należy ustawić poziom kontroli dostępu dla <strong>Każdego</strong> składnika Jomres. Jeśli nie wiesz co te składniki robią to radzimy nie korzystać z tej funkcji w ogóle.
	<br />
	Poziomy dostępu w Jomres przypominają piramidę, więc Super Manager są większe niż Manager. W skrócie: Super Manager > Manager > Recepcjonistka > Zarejestrowany > Niezarejestrowany. Tak więc, jeśli Zarejestrowany użytkownik ma dostęp do składnika Jomres może więc dodać Recepcjonistki, Managerów i Super Managerów.
	<br />
	Pamiętaj, że nie można kontrolować składników Jomres w obszarze administratora. Użytkownik w obszarze administratora jest uważany za zaufanego użytkownika.');
jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING', 'Uwaga! Masz włączoną pełną kontrolę dostępu. System kontroli dostępu wykrył, że istnieją dodatki, do których dostęp nie został ograniczony. Jest to kwestia bezpieczeństwa Twojego serwisu. Musisz rozwiązać ten problem. Odwiedź strefę kontroli dostępu i ustal odpowiednie poziomy dostępu do poszczególnych obszarów systemu.');
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS', 'Użytkownicy z uprawnieniami administratora dla tej oferty');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL', 'Twój adres e-mail');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL', 'Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS', 'Parametry');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE', 'Wymuszenie');
jr_define('_JOMRES_METATITLE', 'Tytuł META');
jr_define('_JOMRES_METADESCRIPTION', 'Opis META');
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2', 'Dodaj swoją ofertę: Krok 2 z 2');
jr_define('_JOMRES_CART_TITLE', 'Moje propozycje rezerwacji');
jr_define('_JOMRES_CART_INFO', 'Uwaga, te rezerwacje nie zostały jeszcze zapisane. Jeśli się wylogujesz lub Twoja sesja wygaśnie zostaną one utracone. Pamiętaj, aby potwierdzić rezerwację.');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS', 'Potwierdź rezerwację');
jr_define('_JOMRES_CART_OR', 'lub');
jr_define('_JOMRES_CART_SAVEFORLATER', 'Zapisz na później');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED', 'Nie masz jeszcze zapisanych rezerwacji.');
jr_define('_JOMRES_CART_VIEWCART', 'Zobacz koszyk');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR', 'Katalog plików językowych');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT', 'Domyślna szerokość geograficzna');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT', 'Domyślna długość geograficzna');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC', 'Jest to startowy punkt wyświetlany na mapach Google na stronach serwisu.');
jr_define('_JOMRES_SYSTEM_EMAILS', 'Adres e-mail serwisu');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC', 'Pozostaw pole puste aby wyłączyć funkcję. Wiadomości do klientów będą wysyłane z adresów e-mail. podanych w ofertach. Jeśli wprowadzisz adres e-mail w tym miejscu wiadomości do klientów będą wysyłane z tego adresu.');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST', 'Lista');
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE', 'Siatka');
jr_define('_JOMRES_COMPARE', 'Porównywarka');
jr_define('_JOMRES_REMOVE', 'Usuń');
jr_define('_JOMRES_RETURN_TO_RESULTS', 'Wróć do wyników wyszukiwania');
jr_define('_JOMRES_ADDTOSHORTLIST', 'Dodaj do ulubionych');
jr_define('_JOMRES_REMOVEFROMSHORTLIST', 'Usuń z ulubionych');
jr_define('_JOMRES_VIEWSHORTLIST', 'Moje ulubione');
jr_define('_JOMRES_COOKIEPOLICY_1', 'Ważne! Pliki Cookie');
jr_define('_JOMRES_COOKIEPOLICY_2', 'Używamy plików cookies, aby nasza strona była łatwiejsza w użyciu.');
jr_define('_JOMRES_COOKIEPOLICY_3', 'Przeczytaj więcej...');
jr_define('_JOMRES_COOKIEPOLICY_4', 'Prawodawstwo UE wymaga, aby wszystkie strony wyraźnie informowały o stosowaniu i sposobie wykorzystywania plików cookies.');
jr_define('_JOMRES_COOKIEPOLICY_5', 'Mechanizm wyszukiwarki i rezerwacji wymaga użycia małego pliku cookies, który jednoznacznie identyfikuje przeglądarkę i umożliwia korzystanie z funkcjonalności naszego serwisu. Musisz zgodzić się na zapisanie tego pliku na Twoim komputerze. Jeśli nie wyrazisz zgody, dostęp do możliwości serwisu zostanie poważnie ograniczony.');
jr_define('_JOMRES_COOKIEPOLICY_6', 'Tak, zgadzam się z polityką cookies.');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST', 'Depozytem wymaganym jest koszt pierwszej nocy');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC', 'Ceny są obliczane na podstawie za noc. Chcesz kaucję za jedną noc? Jeśli tak, to możesz zignorować poniższe opcje.');
jr_define('_JOMRES_NOTHINGINSHORTLIST', 'Nie dodano jeszcze nic do ulubionych.');
jr_define('_JOMRES_SAFEMODE', 'Tryb awaryjny');
jr_define('_JOMRES_SAFEMODE_DESC', 'Ustaw Tak, aby uruchomić tryb awaryjny. Spowoduje to wyłączenie wszystkich wtyczek. Dostępne będą jedynie podstawowe funkcje systemu.');
jr_define('_JOMRES_PRICE_ON_APPLICATION', 'POA');
jr_define('COMMON_NEXT', 'Dalej');
jr_define('COMMON_CANCEL', 'Anuluj');
jr_define('COMMON_SUBMIT', 'Wyślij');
jr_define('COMMON_SAVE', 'Zapisz');
jr_define('COMMON_DELETE', 'Usuń');
jr_define('COMMON_RETURN', 'Powrót');
jr_define('COMMON_CLOSE', 'Zamknij');
jr_define('COMMON_BACK', 'Cofnij');
jr_define('COMMON_HOME', 'Home');
jr_define('COMMON_NEW', 'Nowy');
jr_define('COMMON_SEND', 'Wyślij');
jr_define('RECAPTCHA_TITLE', 'reCaptcha');
jr_define('RECAPTCHA_INFO', 'Captcha jest używany do zabezpieczenia formularzy przed robotami spamującymi. Aby użyć tego mechanizmu musisz zarejestrować sie w <a href="http://www.google.com/recaptcha" target="_blank">Google reCaptcha</a> i zdobyć klucz publiczny i prywatny dla zabezpieczenia swojej domeny. Po otrzymaniu tych kluczy, wpisz je poniżej. Usługa reCapcha to bezpłatna usługa udostępniana przez Google.');
jr_define('RECAPTCHA_PUBLIC_KEY', 'Klucz publiczny (Public key)');
jr_define('RECAPTCHA_PRIVATE_KEY', 'Klucz prywatny (Private key)');
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE', 'Czas blokady');
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC', 'Aby zapobiec niebezpieczeństwu podwójnych rezerwacji dla jednej oferty używany jest plik blokujący. Dzięki temu nie jest możliwa rezerwacja w tym samym terminie oferty, która znalazła się już w koszyku innego klienta. Domyślnie blokada zostanie usunięta po upływie 3600 sekund (jednej godzinie). Można zmienić czas potrzebny do wygaśnięcia tej blokady zmieniając wartość domyślną.');
jr_define('_JOMRES_BOOTSTRAPSWITCH', 'Szablony Bootstrap');
jr_define('COMMON_ACTION', 'Akcja');
jr_define('COMMON_VIEW', 'Widok');
jr_define('BACKTOTOP', 'Powrót do góry');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK', 'Słaby');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG', 'Silny');
jr_define('_JOMRES_INPUTFILTERING', 'Filtrowanie');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE', 'Poziom filtrowania');
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC', "Większość danych, które są wprowadzane do systemu są czyszczone ze zbędnych tagów HTML, a następnie za pomocą funkcji filtrowania zmiennej PHPs bezpieczne już dane zostają wprowadzone do bazy danych. Jeśli masz włączony edytor HTML to ustaw tą funkcjonalność. Dostępne są dwa poziomy filtrowania: słabe i silne. Użyj słabej mocy filtrowania jeśli masz pełne zaufanie do pozostałych administratorów (jeśli są to znajomi, koledzy, pracownicy). Użyj silnej mocy filtrowania jeśli masz ograniczone zaufanie do pozostałych administratorów. Po ustawieniu mocy filtrowania na silne (zalecane) można określić dozwolone tagi HTML (ustawienie 'Dozwolone tagi HTML').");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', 'Dozwolone tagi HTML');
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', "Możesz edytować dozwolone tagi HTML. Domyślnie są to: 'p,b,strong,a[href],i' (czyli: Paragraph, Bold, Strong, Links oraz Italics). Więcej informacji na temat dozwolonych tagów znajdziesz w dokumentacji na stronie: <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Chociaż można zmienić to ustawienie, radzimy pozostawić wartości domyślne.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE', 'Filtrowane pola edycyjne');
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC', "Można określić, które pola formularza mają być filtrowane i oczyszczane ze niedozwolonych znaczników. Pola dodane do tej listy będą poddawane analizie przez HTML Purifier. Domyślnie są to: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Dodaj więcej pól poprzez wprowadzenie ich nazwy. Pola muszą być oddzielone spacją.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE', 'Informacje na stronie oferty w zakładkach');
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC', 'Ustaw tę opcję na Tak, aby wyświetlić szczegółowe informacje w zakładkach. Ustaw na Nie, aby wyświetlić je bez zakładek.');
jr_define('COMMON_PRINT', 'Drukuj');
jr_define('COMMON_EDIT', 'Edycja');
jr_define('COMMON_COPY', 'Kopiuj');
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO', 'Joomla 3 domyślnie korzysta z Twitter Bootstrap. Jomres również udostępnia szablony i funkcje, które korzystają z możliwości tej technologii. Domyślnie, jeśli używasz Jomres na Joomla 3 przełączniki te są ustawione na Tak, ale można je ustawić na Nie, jeśli jest taka potrzeba (nie zalecane). Jeśli używasz wersji niższej niż Joomla 3 możesz zdecydować się na stosowanie szablonów Jomres Bootstrap, jednak domyślnie opcje te są ustawione na Nie.');
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND', 'Szablon Bootstrap na froncie');
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS', 'Oto kilka alternatywnych opcji, które warto rozważyć.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT', 'Automatyczne wykrywanie kraju użytkownika');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC', 'System automatycznie wykryje kraj użytkownika w formularzu rezerwacji. Możesz ustawić tę opcję na Nie i określić domyślny kraj pojawiający się w formularzu rezerwacji wybierając go w następnej opcji.');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES', 'O Jomres');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Pomoc');
jr_define('_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED', 'Szybki start');
jr_define('_JOMRES_CUSTOMCODE_ACCESSCONTROL', 'Kontrola dostępu');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS', 'Narzędzia programisty');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES', 'Wersje językowe');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION', 'Generowanie dochodu');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE', 'Struktura serwisu');
jr_define('_JOMRES_CUSTOMCODE_MANUAL', 'Instrukcja (online)');
jr_define('_JOMRES_CUSTOMCODE_MYACCOUNTONLINE', 'Moje konto (online)');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL', 'Funkcjonalność portalu');
jr_define('_JOMRES_CUSTOMCODE_PLUGINMANAGER', 'Plugin manager');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION', 'Integracje');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS', 'Raporty i statystyki');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP', 'Pomoc');
jr_define('_JOMRES_CUSTOMCODE_UPGRADES', 'Aktualizację');
jr_define('_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS', 'Metody płatności');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT', 'Taryfa domyślna');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC', 'Dotyczy to tylko nowych taryf.');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW', 'Ilość lat');
jr_define('_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC', 'Określa ilość lat widocznych podczas edycji taryf.');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Faktury');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT', 'Dane konta');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN', 'Zaloguj');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT', 'Wyloguj');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH', 'Szukaj');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME', 'Recepcja');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK', 'Księga rezerwacji');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING', 'Faktury');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS', 'Ustawienia');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC', 'Raportowanie');
jr_define('_JOMRES_EDIT_COUNTRY_TITLE', 'Edycja kraju');
jr_define('_JOMRES_EDIT_COUNTRY_ID', 'Id kraju');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', 'Kod kraju');
jr_define('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', 'Nazwa kraju');
jr_define('_JOMRES_EDIT_REGION_TITLE', 'Edycja regionu');
jr_define('_JOMRES_EDIT_REGION_ID', 'Id regionu');
jr_define('_JOMRES_EDIT_REGION_COUNTRYCODE', 'Kod kraju');
jr_define('_JOMRES_EDIT_REGION_REGIONNAME', 'Nazwa regionu');
jr_define('_JOMRES_COM_LISTCOUNTRIES', 'Lista krajów');
jr_define('_JOMRES_COM_LISTREGIONS', 'Lista regionów');
jr_define('_JOMRES_EXPORT_DEFINITIONS', 'Eksport tłumaczeń');
jr_define('_JOMRES_EXPORT_DEFINITIONS_INFO', 'Funkcja ta pozwala na eksport tłumaczeń języka, które zostały zbudowane przy użyciu funkcji tłumaczeń. W polu edycyjnym wyświetlone zostaną wszystkie dane wymagane do stworzenia nowego pliku językowego, wszystko co musisz zrobić, to skopiować i wkleić zawartość pola do nowego pliku językowego, który następnie można umieścić na serwerze.');
jr_define('_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS', 'Tłumaczenie lokalizacji');
jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES', 'Tłumaczenie ciągów plików');
jr_define('_JOMRES_COM_NOTAMANAGER', 'Błąd! Nie jesteś zalogowany jako Super Manager. Jest to funkcja bezpieczeństwa.');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Domyślny wygląd listy ofert');
jr_define('_JOMRES_COM_LAYOUTS_DEFAULT', 'Domyślny układ listy');
jr_define('_JOMRES_STAYFORAMINIMUMOF', 'Minimum');
jr_define('_JOMRES_NIGHTSFOR', ' nocy ');
jr_define('_JOMRES_AGENT', 'Agent');
jr_define('_JOMRES_AGENT_DETAILS', 'Dane agenta');
jr_define('_JOMRES_AGENT_LISTINGS', 'Lista agentów');
jr_define('_JOMRES_APPROVALS_CONFIG_TITLE', 'Automatyczna aktywacja nowych ofert');
jr_define('_JOMRES_APPROVALS_CONFIG_DESC', 'Jeśli Nie, to trzeba będzie ręcznie aktywować nowe oferty. Dopóki oferty nie zostaną aktywowane nie będzie istniała możliwość publikacji oferty w serwisie.');
jr_define('_JOMRES_APPROVALS_MENU_NAME', 'Aktywacja ofert');
jr_define('_JOMRES_APPROVALS_NOT_APPROVED_YET', 'Ta oferta nie została jeszcze aktywowana. Po aktywacji będzie można ją opublikować.');
jr_define('_JOMRES_APPROVALS_CANNOT_PUBLISH', 'Niestety, nie można opublikować tej oferty, gdyż nie została jeszcze aktywowana.');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT', 'Nowa oferta oczekuje na aktywację');
jr_define('_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT', 'Nowa oferta została dodana do systemu i oczekuje na aktywację. Kliknij link, aby wyświetlić więcej informacji: ');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT', 'Twoja oferta została aktywowana');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT', 'Gratulacje, oferta została aktywowana. Prosimy kliknąć w poniższy link, aby przejść na stronę administracji: ');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_TITLE', 'Tłumaczenie nazwy regionu');
jr_define('_JOMRES_REGION_TRANSLATION_SWITCH_DESC', 'Jeśli używasz bardzo szybkiego serwera możesz wybrać wartość Nie. Ze względu na dużą liczbę nazw regionów, ich tłumaczenie zajmuje dużo pamięci, która może spowolnić uzyskiwanie wyników wyszukiwania.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT', 'Klient został wymeldowany.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE', 'Ten adres e-mail jest już używany przez innego użytkownika. Jeśli jest to Twój e-mail zaloguj się przed dokonaniem rezerwacji.');
jr_define('JOMRES_TAPTOCALL', 'Stuknij, aby zadzwonić.');
jr_define('JOMRES_NEWREVIEW_SUBJECT', 'Nowa recenzja');
jr_define('JOMRES_NEWREVIEW_MESSAGE', 'Nowa recenzja została dodana dla');
jr_define('JOMRES_NEWREPORT_SUBJECT', 'Nowy raport');
jr_define('JOMRES_NEWREPORT_MESSAGE', 'Nowy raport został dodany dla');
jr_define('JOMRES_SUPERIOR', 'Lepszy');
jr_define('JOMRES_GRANDTOTAL_EX_TAX', 'Razem netto:');
jr_define('JOMRES_GRANDTOTAL_INC_TAX', 'Razem brutto:');
jr_define('JOMRES_GRANDTOTAL_TOTAL_TAX', 'Wartość VAT:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL', 'Wpisz dwa słowa:');
jr_define('JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO', 'Wpisz co słyszysz:');
jr_define('JOMRES_RECAPTCHA_PLAY_AGAIN', 'Odtwórz ponownie');
jr_define('JOMRES_RECAPTCHA_CANT_HEAR_THIS', 'Pobierz plik audio w formacie MP3');
jr_define('JOMRES_RECAPTCHA_VISUAL_CHALLENGE', 'Token graficzny');
jr_define('JOMRES_RECAPTCHA_AUDIO_CHALLENGE', 'Token audio');
jr_define('JOMRES_RECAPTCHA_REFRESH_BTN', 'Odśwież');
jr_define('JOMRES_RECAPTCHA_HELP_BTN', 'Pomoc');
jr_define('JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN', 'Niestety, kod tokena został wpisany błędnie. Prosimy spróbować ponownie.');
jr_define('JOMRES_GOOGLE_MAPS', 'Opcje map Google');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER', 'Włączyć warstwę Pogoda?');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS', 'Celsjusza');
jr_define('JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT', 'Farenheita');
jr_define('JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'Włączyć warstwę Transit?');
jr_define('JOMRES_GOOGLE_MAPS_POIS', 'Włącz punkty na mapach Google (może wyświetlać punkty konkurencji)?');
jr_define('_JOMRES_METAKEYWORDS', 'Słowa kluczowe');
jr_define('_JOMRES_SCAN_FOR_DIRECTIONS', 'Zeskanuj ten kod telefonem, aby uzyskać istotne wskazówki.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX', 'Wprowadzony numer VAT jest niepoprawny. Prawidłowy format to: BE805670816B01.');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE', 'Nieprawidłowy numer VAT. Proszę sprawdzić prawidłowość swojego numeru VAT i jego zgodność z VAT UE. Usługa walidacji (VIES).');
jr_define('_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED', 'Gratulacje. Udało się nam potwierdzić Twój numer VAT.');
jr_define('_JOMRES_TAX_RULES_LIST', 'Lista stawek podatkowych');
jr_define('_JOMRES_TAX_RULE', 'Stawka podatkowa');
jr_define('_JOMRES_TAX_RULE_INFO', 'Stawki podatkowe są wykorzystywane do stosowania różnych przepisów podatkowych dla różnych regionów. Wpływają one na ceny końcowe i pozwalają na ich dostosowanie z uwzględnieniem stawek podatkowych stosowanych w danym regionie. Może się okazać, że stawki podatkowe nie będą musiały być stosowane.');
jr_define('_JOMRES_TAX_RATES_IMPORT', 'Importowanie stawek podatkowych');
jr_define('_JOMRES_TAX_RATES_IMPORT_INFO', 'Jeśli chcesz, stawki podatkowe stosowane w UE mogą zostać zaimportowane automatycznie. Uwaga, w przypadku korzystania z tej funkcji, usunięte zostaną wprowadzone ręcznie stawki podatków.');
jr_define('_JRPORTAL_TAX_RULE_EDIT', 'Edycja stawki podatku');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER', 'Numer VAT dla tej oferty.');
jr_define('_JOMRES_VAT_PROPERTY_NUMBER_DESC', 'Proszę podać numer VAT dla tej oferty.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED', 'Numer VAT został potwierdzony.');
jr_define('_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED', 'Numer VAT nie został potwierdzony.');
jr_define('_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS', 'Wprowadzone dane firmy będą używane w celach księgowych do wystawiania faktur.');
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL', 'Dane konta nie zostały uzupełnione. Muszą zostać wprowadzone zanim przejdziemy dalej.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT', 'Tryb Produkcyjny czy Rozwojowy?');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC', 'Włączenie opcji trybu Rozwojowego uruchomi raportowanie błędów. Włącz jeśli prowadzisz pracę techniczne. W przeciwnym razie zalecamy pozostawienie włączonej opcji trybu Produkcyjnego.');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION', 'Produkcyjny');
jr_define('_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT', 'Rozwojowy');
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS', 'Szczegóły zasobów');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS', 'Informacje taryfowe');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE', 'Mamy dostępne');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST', 'zasoby tego typu!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE', 'Cecha oferty');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE', 'Nie można usunąć tej cechy oferty jest przypisana do zasobu. Usuń cechę z tego zasobu i spróbuj ponownie.');
jr_define('_JOMRES_MEDIA_CENTRE_TITLE', 'Centrum mediów');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD', 'Dodaj zdjęcia');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM', 'Zdjęcia zasobów');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY', 'Zdjęcie główne oferty');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW', 'Zdjęcia pokazu slajdów');
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR', 'Wyczyść listę');
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP', 'Przeciągnij i Upuść tutaj pliki');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS', 'Wybierz zasób, dla którego chcesz przesłać zdjęcia. Jeśli będziesz mógł przesłać zdjęcia dla poszczególnych zasobów (np. pokoi) zostanie wyświetlona lista rozwijana z możliwością wyboru odpowiedniego zasobu.');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE', 'Jeśli prześlesz kilka zdjęć jako "Zdjęcie główne oferty" tylko pierwsze z tych zdjęć będzie używane.');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW', 'Zobacz zdjęcie');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE', 'Usuń zdjęcie');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD', 'Prześlij zdjęcie');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES', 'Zdjęcia zasobów');
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES', 'Zdjęcia cech ofert');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL', 'Prześlij wszystkie pliki');
jr_define('COMMON_PREV', 'Poprzednia');
jr_define('COMMON_MORE', 'Więcej');
jr_define('_JOMRES_DASHBOARD_TODAY', 'Dzisiaj');
jr_define('_JOMRES_DASHBOARD_YEAR', 'Rok');
jr_define('_JOMRES_DASHBOARD_MONTH', 'Miesiąc');
jr_define('_JOMRES_DASHBOARD_WEEK', 'Tydzień');
jr_define('_JOMRES_DASHBOARD_DAY', 'Dzień');
jr_define('_JOMRES_HLEGEND', 'Legenda');
jr_define('_JOMRES_HFILTER', 'Filtr');
jr_define('_JOMRES_HFROM', 'Dla');
jr_define('_JOMRES_HTO', 'Do');
jr_define('_JOMRES_HNEW_BOOKING', 'Nowa rezerwacja');
jr_define('_JOMRES_HSTATUS_DEPOSIT', 'Status depozytu');
jr_define('_JOMRES_HSTATUS_GUEST', 'Status klienta');
jr_define('_JOMRES_HSTATUS_BOOKING', 'Status rezerwacji');
jr_define('_JOMRES_HSTATUS_PUBLISHING', 'Publikacja statusu');
jr_define('_JOMRES_HSTATUS_INVOICE', 'Status faktury');
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE', 'Rodzaj faktury');
jr_define('_JOMRES_HSTATUS_APPROVED', 'Zatwierdzona');
jr_define('_JOMRES_HSTATUS_CURRENT', 'Aktywna oferta');
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR', 'Pokaż rezerwacje dla');
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR', 'Pokaż faktury dla');
jr_define('_JOMRES_STATUS_ANY', 'Wszystkie');
jr_define('_JOMRES_STATUS_PAID', 'Opłacone');
jr_define('_JOMRES_STATUS_NOTPAID', 'Nie opłacone');
jr_define('_JOMRES_STATUS_CHECKEDOUT', 'Wymeldowane');
jr_define('_JOMRES_STATUS_ACTIVE', 'Aktywne');
jr_define('_JOMRES_STATUS_CANCELLED', 'Anulowane');
jr_define('_JOMRES_STATUS_PUBLISHED', 'Opublikowane');
jr_define('_JOMRES_STATUS_NOT_PUBLISHED', 'Nie opublikowane');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE', 'Klienci z aktywnymi rezerwacjami');
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST', 'Klienci z minionymi rezerwacjami');
jr_define('_JOMRES_STATUS_BOOKINGS', 'Rezerwacje');
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS', 'Subskrypcje');
jr_define('_JOMRES_STATUS_COMMISSIONS', 'Prowizje');
jr_define('_JOMRES_STATUS_ALL_PROPERTIES', 'Wszystkie moje oferty');
jr_define('_JOMRES_ACTION_SET_CURRENT', 'Ustaw jako aktualny');
jr_define('_JOMRES_ACTION_CHECKIN', 'Zamelduj');
jr_define('_JOMRES_ACTION_CHECKOUT', 'Wymelduj');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS', 'Rezerwacje');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', 'Oferty');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS', 'Klienci');
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS', 'Raporty');
jr_define('_JOMRES_HLIST_GUESTS', 'Klienci');
jr_define('_JOMRES_HLIST_GUESTS_MENU', 'Lista klientów');
jr_define('_JOMRES_HLIST_INVOICES_MENU', 'Lista faktur');
jr_define('_JOMRES_HLIST_PROPERTIES', 'Lista ofert');
jr_define('_JOMRES_HQUICK_BOOKING', 'Szybka rezerwacja');
jr_define('_JOMRES_HDATE_OF_BOOKING', 'Data rezerwacji');
jr_define('_JOMRES_HTWO_WEEKS', 'Dwa tygodnie');
jr_define('_JOMRES_BOOKING_CANCELLATION_WARNING', 'Ta rezerwacja zostanie anulowana. Naciśnij przycisk OK, aby anulować rezerwację.');
jr_define('_JOMRES_HOVERVIEW_CHECKINS', 'Dzisiejsze meldowania');
jr_define('_JOMRES_HOVERVIEW_CHECKOUTS', 'Dzisiejsze wymeldowania');
jr_define('_JOMRES_HOVERVIEW_CURRENT_RESIDENTS', 'Aktualnie obecni');
jr_define('_JOMRES_BOOTSTRAP_LOCATION', 'Położenie paska nawigacji');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_DEFAULT', 'Domyślnie (obszar zawartości)');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_TOP', 'Przypięty do góry');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_BOTTOM', 'Przypięty do dołu');
jr_define('_JOMRES_BOOTSTRAP_LOCATION_INVERSE', 'Odwrócona belka (zmiana koloru)');
jr_define('_JOMRES_BOOKING_NUMBER', 'Numer rezerwacji');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Pokaż klientów dla');
jr_define('_JOMRES_BOOTSTRAP_VERSION', 'Wersja Bootstrap');
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC', 'Obecnie ma zastosowanie wyłącznie do frontu. Ta opcja pozwala wybrać czy mają być używane szablony Jomres które są zgodne z Bootstrap 2 lub 3. Jeśli nie masz pewności, że szablon działa z Bootstrap 3 zalecamy zostawić Bootstrap 2.');
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR', 'Pokaż klientów dla');
jr_define('_JOMRES_HFIXED_PERIODS', 'Stałe okresy');
jr_define('_JOMRES_HDEPOSITS', 'Zadatek');
jr_define('_JOMRES_HBOOKING_FORM', 'Formularz');
jr_define('_JOMRES_HREQUIRED_FIELDS', 'Wymagane pola');
jr_define('COMMON_PLACEHOLDER_FIRSTNAME', 'Jan');
jr_define('COMMON_PLACEHOLDER_SURNAME', 'Nowak');
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER', '110');
jr_define('COMMON_PLACEHOLDER_STREET', 'Moja ulica');
jr_define('COMMON_PLACEHOLDER_TOWN', 'Moja miejscowość');
jr_define('COMMON_PLACEHOLDER_LANDLINE', 'XX XXX-XX-XX');
jr_define('COMMON_PLACEHOLDER_MOBILE', 'XXX-XXX-XXX');
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME', 'Moja oferta');
jr_define('COMMON_PLACEHOLDER_POSTCODE', '12-123');
jr_define('COMMON_PLACEHOLDER_EMAIL', 'nowak@domena.pl');
jr_define('EXTENDED_CONFIGURATION', 'Rozszerzona konfiguracja');
jr_define('SIMPLE_CONFIGURATION', 'Prosta konfiguracja');
jr_define('_JOMRES_HRESOURCE_FEATURES', 'Cechy zasobów');
jr_define('_JOMRES_HRESOURCE_TYPE', 'Zasób');
 jr_define('_JOMRES_HEDIT_GUEST_TYPE', 'Edycja rodzaju klienta');
jr_define('_JOMRES_HEDIT_COUPON', 'Edycja kuponu promocyjnego');
jr_define('_JOMRES_HEDIT_EXTRA', 'Edycja opcji dodatkowej');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE', 'Tworzenie wielu zasobów');
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE', 'Generuj zasoby');
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY', 'Ile zasobów?');
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE', 'Rodzaj zasobu');
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS', 'Maksymalna liczba klientów dla zasobu');
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE', 'Usunąć wszystkie istniejące zasoby?');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING', 'Uwaga, aktualnie przeglądasz obszar zaawansowany administratora. Jeśli chcesz zobaczyć więcej opcji ustaw opcję w konfiguracji witryny -> inne -> zaawansowane na Tak.');
jr_define('DATATABLES_SINFO', 'Pozycje od _START_ do _END_ z _TOTAL_ dostępnych');
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL', 'Zatwierdzenie');
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY', 'Odrzucenie zapytania o rezerwację');
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY', 'Zatwierdzenie zapytania o rezerwację');
jr_define('_JOMRES_STATUS_APPROVED', 'Zatwierdzone');
jr_define('_JOMRES_STATUS_REJECTED', 'Odrzucone');
jr_define('_JOMRES_STATUS_INQUIRY', 'Zapytanie');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE', 'Rezerwacje wymagają potwierdzenia dostępności?');
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC', 'Ustawienie tej opcji na Tak spowoduje konieczność ręcznego potwierdzania dostępności i zatwierdzania rezerwacji. Po złożeniu rezerwacji przez klienta nie pojawi się ona w kalendarzu dostępności do czasu jej potwierdzenia. inne osoby cały czas mogą rezerwować ten termin. Po przyjęciu rezerwacji przez obsługę odpowiednia informacja pokarze się w kalendarzu dostępności i zablokowana zostanie możliwość rezerwacji tego terminu. Do klienta zostanie wysłany e-mail z odpowiednimi informacjami.');
jr_define('_JOMRES_ERROR', 'Błąd');
jr_define('_JOMRES_ERROR_MESSAGE', 'Przepraszamy! Wystąpił błąd podczas próby przetworzenia tej operacji. Informacje o błędzie zostały zapisane i przesłane do analizy przez obsługę techniczną.');
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE', 'Wiadomość');
jr_define('_JOMRES_ERROR_DEBUGGING_FILE', 'Plik');
jr_define('_JOMRES_ERROR_DEBUGGING_LINE', 'Linia');
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE', 'Ślad');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Szablony e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT', 'Edycja szablonu e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT', 'Temat e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT', 'Treść e-mail');
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE', 'Rodzaj');
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME', 'Nazwa');
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC', 'Opis');
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="https://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME', 'Administrator - Nowa rezerwacja');
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC', 'Wiadomość e-mail wysyłana do administratora witryny po dokonaniu przez klienta nowej rezerwacji, jeśli włączona jest bramka PayPal.');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME', 'Sprzedawca - Nowa rezerwacja');
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC', 'Wiadomość e-mail wysyłana do sprzedawcy po dokonaniu przez klienta nowej rezerwacji.');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME', 'Klient - Nowa rezerwacja');
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC', 'Wiadomość e-mail wysyłana do klienta z informacjami odnośnie rezerwacji po dokonaniu przez niego rezerwacji.');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME', 'Klient - Potwierdzenie rezerwacji');
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC', 'Wiadomość e-mail wysyłana ręcznie przez sprzedawcę do klienta z potwierdzeniem złożonej przez niego rezerwacji.');
jr_define('_JOMRES_CAN_BE_APPROVED', 'Ta rezerwacja może zostać zatwierdzona. Wszystkie wybrane zasoby są dostępne w wybranych terminach.');
jr_define('_JOMRES_CANT_BE_APPROVED', 'Ta rezerwacja nie może zostać zatwierdzona, gdyż wybrane zasoby są już zarezerwowane. Konieczna jest edycja rezerwacji i wybranie dostępnych zasobów dla wybranych terminów.');
jr_define('_JOMRES_SHOW_POWEREDBY', 'Pokaż link Powered by Jomres w stopce Jomres.');
jr_define('GUEST_BUDGET', 'Budżet');
jr_define('GUEST_BUDGET_FEATURE_SWITCH', 'Użyć funkcji Budżet?');
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC', "Tylko dla Bootstrap na stronie! Opcja ta umożliwia klientom określenie ich budżetu jaki mogą przeznaczyć na daną rezerwację. Funkcja ma pewne ograniczenia i może się nie sprawdzić w serwisach z wieloma walutami. Dodatkowo jeśli używany jest plugin Featured Listings to jego klasa zostanie automatycznie podmieniona na 'panel-primary' z chwilą wyświetlania listy ofert.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME', 'Nazwa: ');
jr_define('_JOMRES_FOR', 'Dla');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT', 'noc');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS', 'nocy');
jr_define('_JOMRES_LIVE_SCROLLING', 'Użyć systemu przewijania wyników wyszukiwania na listach zamiast paginacji?');
jr_define('_JRPORTAL_MONTHS_SHORT_0', 'Sty');
jr_define('_JRPORTAL_MONTHS_SHORT_1', 'Lut');
jr_define('_JRPORTAL_MONTHS_SHORT_2', 'Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3', 'Kwi');
jr_define('_JRPORTAL_MONTHS_SHORT_4', 'Maj');
jr_define('_JRPORTAL_MONTHS_SHORT_5', 'Cze');
jr_define('_JRPORTAL_MONTHS_SHORT_6', 'Lip');
jr_define('_JRPORTAL_MONTHS_SHORT_7', 'Sie');
jr_define('_JRPORTAL_MONTHS_SHORT_8', 'Wrz');
jr_define('_JRPORTAL_MONTHS_SHORT_9', 'Paź');
jr_define('_JRPORTAL_MONTHS_SHORT_10', 'Lis');
jr_define('_JRPORTAL_MONTHS_SHORT_11', 'Gru');
jr_define('DATATABLES_SEMPTYTABLE', 'Brak danych do wyświetlenia.');
jr_define('DATATABLES_SINFO', 'Pozycje od _START_ do _END_ z _TOTAL_ dostępnych');
jr_define('DATATABLES_SINFOEMPTY', 'Pozycji 0 z 0 dostępnych');
jr_define('DATATABLES_SINFOFILTERED', '(Filtrowanie spośród _MAX_ dostępnych pozycji)');
jr_define('DATATABLES_SINFOPOSTFIX', ' ');
jr_define('DATATABLES_SINFOTHOUSANDS', ' ');
jr_define('DATATABLES_SLENGTHMENU', 'Pokaż _MENU_ pozycji');
jr_define('DATATABLES_SLOADINGRECORDS', 'Wczytywanie danych. Proszę o chwilę cierpliwości...');
jr_define('DATATABLES_SPROCESSING', 'Przetwarzanie danych. Proszę o chwilę cierpliwości...');
jr_define('DATATABLES_SSEARCH', 'Szukaj:');
jr_define('DATATABLES_SZERORECORDS', 'Pasujące pozycje nie zostały znalezione.');
jr_define('DATATABLES_SFIRST', 'Pierwsza');
jr_define('DATATABLES_SLAST', 'Ostatnia');
jr_define('DATATABLES_SNEXT', 'Następna');
jr_define('DATATABLES_SPREVIOUS', 'Poprzednia');
jr_define('DATATABLES_SSORTASCENDING', ': aktywuj by posortować kolumnę rosnąco');
jr_define('DATATABLES_SSORTDESCENDING', ': aktywuj by posortować kolumnę malejąco');
jr_define('DATATABLES_SHOWHIDE', 'Zmiana kolumn');
jr_define('_BOOKING_ONREQUEST', 'Zapytanie o rezerwację');
jr_define('_BOOKING_INSTANT', 'Natychmiastowa rezerwacja');
jr_define('_JOMRES_COM_FONTAWESOME', 'Wczytać czcionki i zestaw ikon?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC', 'Ustaw na Tak, jeśli szablon nie zawiera czcionek i ikon.');
jr_define('_BOOKING_CALCQUOTE', 'Zapytanie o rezerwację');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE', 'Wybierz stronę');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL', 'Id strony');
jr_define('_JOMRES_IS_EU_COUNTRY', 'Kraje UE?');
jr_define('_JOMRES_HLASTCHANGED', 'Ostatnio zmieniony');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME', 'Sprzedawca - Anulowanie rezerwacji');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC', 'Wiadomość e-mail wysyłana do sprzedawcy, gdy nowa rezerwacja jest anulowana.');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME', 'Klient - Anulowanie rezerwacji');
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC', 'Wiadomość e-mail wysyłana do klienta, gdy nowa rezerwacja jest anulowana.');
jr_define('_JOMRES_TEST_EMAIL_SEND', 'Testowanie wysyłki e-mail');
jr_define('_JOMRES_TEST_EMAIL_SUBJECT', 'Test e-mail');
jr_define('_JOMRES_TEST_EMAIL_CONTENT', 'To jest test e-mail z systemu rezerwacji.');
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS', 'Testowa wiadomość e-mail wysłana pomyślnie');
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE', 'Testowa wiadomość e-mail nie została wysłana');
jr_define('_INVOICE_TRANSACTIONS', 'Transakcje');
jr_define('_OPENEXCHANGE_API', 'Klucz API dla wymiany walut');
jr_define('_OPENEXCHANGE_API_DESC', 'Dla uruchomienia funkcjonalności przeliczania walut konieczny jest klucz API Open Exchange Rates. W celu skorzystania z tej funkcjonalności Jomres odwiedź stronę: <a href="https://openexchangerates.org/signup/free" target="_blank">register for a free key</a> (aktualizacja walut co godzinę, 1000 żądań/miesiąc - brak wsparcia HTTPS, wsparcia e-mail lub zaawansowanych funkcji). System Jomres pobiera kursy raz dziennie więc tak długo, jak używasz klucza na tylko kilku stronach, nie przekroczysz tych limitów. Przed Jomres 8.3 wykorzystywany był system przeliczania walut oferowany przez Yahoo, jednak ograniczenia licencyjne usługi spowodowały iż koniecznym stało się przejście na inny system przeliczania walut.');
jr_define('_JOMRES_COMMISSION', 'Rozliczenie');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Jeśli prześlesz kilka zdjęć dla dowolnej opcji dodatkowej, to tylko pierwsze z tych zdjęć będzie używane.');
jr_define('_JOMRES_COMMISSION', 'Rozliczenie');
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS', 'Jeśli prześlesz kilka zdjęć dla dowolnej opcji dodatkowej, to tylko pierwsze z tych zdjęć będzie używane.');
jr_define('_JRPORTAL_INVOICES_PAYNOW', 'Zapłać teraz');
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC', 'Ta faktura jest już wymagalna. Proszę kliknąć, aby wybrać sposób płatności.');
jr_define('_JOMRES_EXTRAS_TEMPLATE', 'Oto lista niektórych rzeczy, które można zakupić podczas dokonywania rezerwacji w tej ofercie.');
jr_define('GATEWAYS_INSTRUCTIONS', 'Na tej stronie można skonfigurować dostępne w systemie bramki płatności. Te opcje umożliwiają płatności za faktury za rezerwacje i subskrypcje. Zakładka Ustawienia może być zastąpiona tylko przez ustawienia PayPal, wszystkie inne bramki będą musiały być skonfigurowane za pomocą właściwości dostępnych na karcie konfiguracji bram, jednak jeśli brama pojawia się na tej liście to oznacza, że jest zdolna do przetwarzania płatności w formie depozytów rezerwacji i płatności za faktury.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS', 'Pokazać na stronie szczegółów oferty?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS', 'Strona ustawień szczegółów oferty');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING', 'Zarządzanie ofertami w Jomres dostępne jest z poziomu strony frontowej serwisu. W tym miejscu możesz zobaczyć wszystkie dostępne w systemie oferty i przypisać dla nich stawki prowizyjne i zatwierdzić je lub nie (jeśli ta funkcja została włączona). Jeśli chcesz utworzyć nową ofertę, edytować istniejące, zarządzać rezerwacjami lub innymi właściwościami systemu rezerwacji, musisz zalogować się na stronie frontowej i przejść na stronę domyślną Jomres.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS', 'Ikony cech zasobów');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES', 'Kategorie cech ofert');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT', 'Edycja kategorii cechy oferty');
jr_define('_JOMRES_HCATEGORY', 'Kategoria');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES', 'Pokazać podział na kategorie cech ofert?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC', 'Ustaw Tak, aby podzielić cechy ofert na kategorie. Ta opcja dotyczy tylko cech ofert wyświetlanych na stronie szczegółów ofert. Wszystkie inne strony wyświetlają je bez dzielenia ich na kategorie.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN', 'Cofnij zameldowanie');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT', 'Cofnij wymeldowanie');
jr_define('_JOMRES_STATUS_UNISSUED', 'Zapisano');
jr_define('DEFAULT_TERMS_AND_CONDITIONS', '');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID', 'Klucz licencyjny jest ważny, można pobierać dodatkowe rozszerzenia i korzystać ze wsparcia.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID', 'Klucz licencyjny nie jest ważny, nie można pobierać dodatkowych rozszerzeń ani korzystać ze wsparcia.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE', 'Typ zasobu');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK', 'Nie został jeszcze przypisany typ zasobu dla tej oferty.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK', 'Ustal typ zasobu dla oferty');
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE', 'Szablony e-mail');
jr_define('_JOMRES_CONTACT_SETTINGS', 'Ustawienia kontaktu');
jr_define('_JOMRES_CONTACT_SETTINGS_DESC', 'W tym miejscu można nadpisać wszystkie dane kontaktowe ofert (e-mail, telefon, fax), co spowoduje przekierowanie całej komunikacji klientów do administracji serwisu a nie do właścicieli ofert.');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS', 'Zastąpić dane kontaktowe ofert?');
jr_define('_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC', 'Jeśli opcja ta jest ustawiona na Tak, to adresy e-mail i telefony w ofertach zostaną zastąpione danymi kontaktowymi globalnymi dla serwisu skonfigurowanymi na tej stronie. Funkcjonalność ta wymusza przysyłanie wszystkich wiadomości e-mail do Administracji Serwisu, co jest zabezpieczeniem przed omijaniem dokonywania rezerwacji przez właścicieli ofert i ich Klientów w systemie, co powoduje nie naliczanie prowizji. Funkcjonalność spowoduje również konieczność przejrzenia zatwierdzonych wcześniej ofert pod kontem upewnienia się, że w polach edycyjnych np. opisu oferty nie zostały wprowadzone przez właściciela oferty dane adresowe typu e-mail lub numer telefonu.');
jr_define('_JOMRES_EDITPROPERTY_APPROVAL_WARNING', 'Zmiany wprowadzone w szczegółach oferty wymagają weryfikacji przez administratora serwisu. Po zapisaniu nowych szczegółów oferty Twoja oferta do czasu zatwierdzenia wprowadzonych zmian przez administratora serwisu nie będzie opublikowana w serwisie i nie będzie widoczna dla odwiedzających. Co oznacza również, że Klienci nie będą mogli w tym czasie dokonywać nowych rezerwacji.');
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW', 'Wniosek o weryfikację Rezerwacji');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM', 'Potwierdź wniosek o rezerwację');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND', 'Zmień wniosek o rezerwację');
jr_define('_JOMRES_INVOICE_MARKASPENDING', 'Oznacz jako Oczekuje');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING', 'Faktura oznaczona jako oczekująca');
jr_define('_JOMRES_TRACKING_ENABLE', 'Wysyłać anonimowe dane śledzenia?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC', 'Ustaw tę opcję na Tak, aby uruchomić przesyłanie anonimowych danych na temat sposobu używania systemu Jomres do Jomres.net. Pomoże to nam lepiej zrozumieć Twoje oczekiwania odnośnie systemu.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE', 'Prosimy upewnić się, że dane Klientów są kompletne przed rozpoczęciem dodawania rezerwacji w ich imieniu.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS', 'Dane kontaktowe Klientów');
jr_define('_JOMRES_CLEAR_GUEST_DETAILS', ' -- Nowy Klient -- ');
jr_define('_JOMRES_CHARTS', 'Wykresy');
jr_define('_JOMRES_CHARTS_SELECT', 'Wybierz wykres...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC', 'Dochody za rok/miesiąc');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK', 'OK, zaczynajmy. Najpierw należy utworzyć kilka zasobów do rezerwacji jakie będą dostępne w tej ofercie.');
jr_define('_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK', 'Tworzenie zasobów');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK', 'Badania pokazują, że oferty z dużą ilością zdjęć wysokiej jakości generują więcej odsłon. Wgraj zdjęcie główne oferty i zdjęcia wyświetlane w pokazie slajdów etc, aby zwiększyć swoje szanse na uzyskanie rezerwacji.');
jr_define('_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK', 'Przesyłanie zdjęć');
jr_define('_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK', 'Definiowanie cen');
jr_define('_JOMRES_PROPERTYTYPE_FLAG', 'Jaki jest to rodzaj oferty?');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_DESC', 'Czy jest to rodzaj oferty typu hotel gdzie można wynająć kilka pokoi, czy jest to oferta typu apartament gdzie można wynająć całość oferty? Jeśli oferta nie wiąże się się z rezerwacją zasobów w ofercie lub całej oferty, jeśli jest to np. rezerwacja/sprzedaż wycieczek, biletów to prosimy wybrać opcję Inny.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_HOTEL', 'Hotel/Łóżko & Śniadanie/Pensjonat');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_VILLA', 'Apartament & Dom & Willa');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH', 'Zarówno'); // Wyboru tego nie będzie jeśli nie zostały zaktualizowane typy ofert
jr_define('_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD', 'Hotel czy Willa?');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK', 'Musisz uzupełnić swoje dane adresowe, dzięki czemu klienci będą mogli Cię znaleźć, jeśli będą poszukiwać Twojej oferty.');
jr_define('_JOMRES_ADDRESS_SANITY_CHECK_LINK', 'Aktualizacja adresu');
jr_define('_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED', 'Ups, wygląda na to, że nie wszystkie pola zostały uzupełnione.');
jr_define('_JOMRES_CONTANT_US', 'Skontaktuj się z nami');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_TITLE', 'Witamy na nowej aukcji online dla ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_1', 'Witamy i zapraszamy do nowej oferty na ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_2', 'Ostatnio dodano nowe oferty na naszej stronie internetowej, i chcielibyśmy serdecznie zaprosić do odwiedzin.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3', 'Można zobaczyć nowy kokpit ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT', ' tutaj ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4', 'Po skonfigurowaniu oferty można zobaczyć jak widzą ją odwiedzający witrynę przechodząc ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT', ' na stronę frontową.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_5', '(Oferta nie jest jeszcze opublikowana i nie jest dostępna dla klientów.)');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_6', 'W górnej części strony zobaczysz dostępne wiadomości. Przyciski widoczne obok tych wiadomości poprowadzą Cię do stron, które trzeba odwiedzić aby dodać i skonfigurować dane oferty. Podanie wszystkich danych ułatwi odnalezienie Twojej oferty w naszym serwisie i przyczyni się do zwiększenia ilości składanych rezerwacji online.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7', 'Jeśli masz jakieś pytania, prosimy ');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT', 'skontaktuj się z nami');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_8', 'z przyjemnością odpowiemy na wszystkie Twoje pytania.');
jr_define('_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE', 'Pozdrowienia załącza cały nasz zespół');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK', 'Wygląda, że nie zostały stworzone żadne profile sprzedaży ofert typu wycieczki czy biletów. Utwórz odpowiedni profil oferty a w kolejnym kroku wygeneruj przedmioty sprzedaży.');
jr_define('_JOMRES_JINTOUR_SANITY_CHECK_LINK', 'Stwórzmy jakiś profil oferty!');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP', 'Położenie symbolu waluty');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC', 'Użyj tej opcji, aby skonfigurować położenie symbolu waluty, ustaw go przed kwotą lub po niej.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK', 'Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC', 'Wprowadź swój identyfikator strony na Facebooku np. "moja-strona". Pole nie może być puste. Nie wprowadzaj https://www.facebook.com lub czegokolwiek innego.');
jr_define('COMMON_DOWNLOAD', 'Pobierz');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP', 'Dalej będzie trzeba dodać kilka taryf. Są to ceny podstawowe.');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', 'Bootstrap nie jest włączony!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING', 'Uwaga: Nie masz włączonego Bootstrap w konfiguracji Jomres w zakładce Różne, aby włączyć <i>niektóre</i> funkcje Jomres. Aktualnie używasz starych szablonów opartych na jQuery UI, jednak te nie są wspierane już od kilku lat. Wszystkie obecnie rozwijane i ulepszane szablony Jomres (pliki układu graficznego) wykonane są w oparciu o Bootstrap 3. Aby uzyskać najlepsze wrażenia z Jomres radzimy zainstalować motyw oparty o Bootstrap 3 w WordPress i Joomla. Gdy już to zrobisz możesz włączyć szablony Jomres w konfiguracji komponentu.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS', 'Klucz wsparcia jest ważny. Zauważ, że ta licencja nie zezwala na pobieranie dodatków.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH', 'Przeciągnij rezerwację by ją odwołać');
jr_define('_JOMRES_LAT', 'Szerokość (nn.nnnn)');
jr_define('_JOMRES_LONG', 'Długość (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES', 'Większość nieruchomości w Jomres posiada możliwość wypożyczania jako proces zarządzania. Hotele/pensjonaty umożliwiają wynajęcie np. pokoju jako jednej z dostępnych wielu opcji. Domy/mieszkania to oferty gdzie wynajmuje się całość danej oferty (cały dom lub całe mieszkanie). Nie jest to rzecz widoczna na pierwszy rzut oka dla sprzedawcy. Jednak by sprzedawca miał możliwość stworzenia cenników dla swojej oferty należy stworzyć odpowiednie dla danego typu oferty przedmioty rezerwacji.<br />Np. w hotelu dostępne będą pokoje w kilku wariantach (pokoje dwuosobowe, pokoje jednoosobowe i trzyosobowe), natomiast dom będzie posiadał tylko jeden typ przedmiotu rezerwacji np. 2 sypialnie, 5 sypialni.<br />Możliwe jest tworzenie przedmiotów rezerwacji jako np. wycieczki. Dzięki temu klienci mogą zapoznać się z ich szczegółami. Jednak sprzedawca nie będzie musiał stworzyć cenników w sposób jaki robi się to w przypadku np. hoteli, nie będzie dostępny specyficzny sposób zarządzania ofertą.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT', 'Kliknij i dodaj nowy przedmiot rezerwacji');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES', 'Uwaga, masz jeden lub więcej typów ofert bez przypisanych przedmiotów rezerwacji. Konieczne jest powiązanie typów ofert z przedmiotami rezerwacji, aby sprzedawcy mogli utworzyć dla nich cenniki.');
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES', 'Użyj przycisku powyżej, aby stworzyć nowy rodzaj przedmiotu rezerwacji.');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_TOURS', 'Wycieczki');
jr_define('_JOMRES_PROPERTYTYPE_FLAG_REALESTATE', 'Nie rezerwacje/Oferty (proste aukcje)');
jr_define('_JOMRES_CONFIG_LOG_LOCATION', 'Lokalizacja pliku dziennika');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_DESC', 'Jomres rejestruje aktywność systemu domyślnie do pliku w lokalizacji '.JOMRES_SYSTEMLOG_PATH.'. Ten plik może zawierać poufne informacje (klucze API, ścieżki systemu, informacje o bramach płatności etc). Zalecamy zmienić tą ścieżkę do katalogu znajdującego się wyżej od ścieżki katalogu dostępnego z sieci web. Jeśli nie rozumiesz, co to znaczy, proszę zapytaj swojego usługodawcę hostingowego o radę.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_WARNING', 'Jomres rejestruje szczegółowe informacje o systemie, w tym: klucze API, ścieżki systemu, informacje o bramkach płatności etc. Są to informacje, które nie powinny być widoczne z internetu. Twoja bezpieczna ścieżka do dziennika systemu nie została ustawiona, więc dane obecnie zapisywane są w logach systemowych '.JOMRES_SYSTEMLOG_PATH.', katalog ten nie jest idealny. Odwiedź stronę konfiguracji -> debugowanie i ustaw właściwą ścieżkę. Zalecamy zmienić tą ścieżkę do katalogu znajdującego się wyżej od ścieżki katalogu dostępnego z sieci web. Jeśli nie rozumiesz, co to znaczy, proszę zapytaj swojego usługodawcę hostingowego o radę.');
jr_define('_JOMRES_CONFIG_LOG_LOCATION_RECOMMENDED', 'Jeśli Twój CMS jest zainstalowany w katalogu głównym witryny, miejsce, które byłoby odpowiednie to ');
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nie masz ustawionego klucza API map Google. Ze względu na ostatnie zmiany w Mapach Google we wszystkich nowych witrynach, należy użyć klucza API, aby móc korzystać z funkcji map Google. Prosimy <a href='https://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>zobacz naszą stronę pomocy odnośnie tworzenia klucza API</a> i wprowadź klucz API w Jomres.");
jr_define('JOMRES_GOOGLE_MAP_STYLE', 'Schemat kolorów mapy Google');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_TITLE', 'Zacznijmy od dodania nowej oferty w serwisie. W tym miejscu musimy zebrać kilka niezbędnych informacji. To pozwoli nam na stworzenie nowej przestrzeni w serwisie dla nowej oferty. Gdy to zrobisz, będzie można przejść do konfiguracji przedmiotów rezerwacji, cen oraz do etapu dodawania zdjęć.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE1', 'Rodzaj oferty pomaga określić jak będą konfigurowane przedmioty rezerwacji i w jaki sposób mają być przetwarzane nowe rezerwacje. W tym miejscu ważne jest prawidłowe wskazanie rodzaju oferty. Należy pamiętać, że np. w hotelu można rezerwować wiele przedmiotów rezerwacji (pokoi, apartamentów), nie można wynająć całego hotelu. Można jednak wynająć cały apartament, mieszkanie lub dom.');
jr_define('JOMRES_PROPERTY_REGISTRATION_INSTRUCTIONS_NOTE2', 'Należy zauważyć, że adres e-mail nie musi być taki sam, jak ten, który został użyty podczas rejestracji konta. To pozwala mieć różne adresy dla różnych ofert.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT', 'Minimalny depozyt');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_DESC', 'Można skonfigurować minimalną wysokość zadatku, a następnie "Depozyt wymagany to koszt pierwszej nocy?" i "Depozyt wymagany to procent?" w tym miejscu konfigurujesz wysokość zadatku dla rezerwacji w ofercie.');
jr_define('_JOMRES_CONFIG_MINIMUM_DEPOSIT_SETTING', 'Liczba ta nie może być mniejsza niż ');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST', 'Syslog hosta');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_PORT', 'Syslog port');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_HOST_DESC', 'Jeśli chcesz wysłać wiadomości debugowania systemu do serwera Ssyslog, ustaw nazwę hosta lub IP (np. 192.168.0.2) i port (np. 514) tutaj. Uwaga, jeśli serwis jest w trybie testowym to komunikaty debugowania będą wysyłane wszystkie. Jeśli serwis jest w trybie produkcyjnym to tylko poziom informacji i wybrane wiadomości będą wysyłane. Aby wyłączyć rejestrowanie na serwerze zdalnym pozostaw puste pola hosta i portu.');
jr_define('_JOMRES_CONFIG_LOG_SYSLOG_NOTALLOWED', "PHP nie pozwala na dostęp do funkcji 'openlog' i 'syslog'. Ustawienia te są dostępne po stronie serwera. Są wymagane jeśli chcesz wysyłać wiadomości z Jomres do serwera Syslog. Prosimy skonsultować się z dostawcą hostingu i potwierdzić dostępność tych funkcji PHP. Po ich włączeniu, będzie można skonfigurować ustawienia serwera Syslog w tym miejscu.");
jr_define('_JOMRES_SEND_ERROR_EMAIL', 'Wysyłać e-mail do administratora gdy wystąpi błąd?');
jr_define('_JOMRES_SEND_ERROR_EMAIL_DESC', "Jeśli w serwisie wystąpi jakiś problem (błąd) administrator serwisu zostanie o tym poinformowany drogą e-mail. Niestety pająki i boty indeksujące strony mogą również powodować błędy i może to generować przytłaczającą liczbę wiadomości. W takim przypadku skorzystaj z serwera Syslog jeśli ustawienia PHP na to pozwalają. Jeśli nie to skontaktuj się z dostawcą hostingu. Jeśli szukasz czegoś konkretnego (np. jeśli tworzysz dodatkowe wtyczki etc i chcesz korzystać z wywołania funkcji gateway_log() można ręcznie przeanalizować pliki. Jednak jest to dosyć uciążliwe. W systemie Linux jest sporo dostępnych narzędzi. W systemie Windows możesz skorzystać z http://maxbelkov.github.io/visualsyslog/ . Na tej stronie Ustaw serwer Syslog '127.0.0.1' i port '514', aby zobaczyć w tym narzędziu zarejestrowane komunikaty.");

jr_define('_JOMRES_MANAGE_PROPERTIES', 'Zarządzanie ofertami');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nie masz ustawionego klucza API wykrywania IP użytkownika. Jest to wymagane, aby system mógł automatycznie wykryć lokalizację użytkownika i automatycznie ustawić jego kraj i walutę. Prosimy <a href='https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>zobacz naszą stronę pomocy odnośnie tworzenia klucza API dla wykrywania IP użytkownika</a> i zapisz klucz API w Jomres > Konfiguracja systemu > Waluta.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nie masz ustawionego klucza API dla systemu konwersji walut. Jest to wymagane, aby system mógł automatycznie pobierać do systemu aktualne kursy walut i prawidłowo wyświetlać ceny w serwisie. Prosimy <a href='https://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>zobacz naszą stronę pomocy odnośnie tworzenia klucza API dla pobierania kursów walut</a> i zapisz klucz API w Jomres > Konfiguracja systemu > Waluta.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Numer pozwolenia');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'W niektórych krajach przepisy prawa wymagają na podanie numeru pozwolenia dla oferty.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', 'Dodatek <strong>plg_content_jomres_asamodule_mambot</strong> Jomres Asamodule Mambot musi być zainstalowany i włączony dla tej funkcjonalności. Jeśli serwis został zbudowany w oparciu o pakiet startowy Jomres to prawdopodobnie wszystko jest w porządku.');
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Dodatek <strong>'Jomres Shortcodes'</strong> musi być zainstalowany i włączony dla tej funkcjonalności. Jeśli serwis został zbudowany w oparciu o pakiet startowy Jomres to prawdopodobnie wszystko jest w porządku.");
jr_define('SHORTCODE_TASK', 'Zadania');
jr_define('SHORTCODE_DESCRIPTION', 'Opis');
jr_define('SHORTCODE_ARGUMENTS', 'Argumenty');
jr_define('SHORTCODE_EXAMPLE', 'Przykład');
jr_define('INTEGRITY_CHECK', 'Sprawdzenie integralności systemu plików');
jr_define('INTEGRITY_CHECK_DESC', 'Ta funkcja pozwala sprawdzić, czy system plików jest zgodny z systemem dostarczonym w bieżącej wersji Jomres. Jest to przydatne, aby upewnić się, że wszystkie pliki zostały poprawnie zaktualizowane po instalacji/uaktualnieniu. Brak plików w kolorze czerwonym, pliki w Pomarańczowe istnieją, ale różnią się od tych dostarczonych w obecnej kompilacji. Tutaj zostaną wymienione tylko pliki, które mogą stwarzać potencjalne problemy.');
jr_define('INTEGRITY_CHECK_FILENAME', 'Sprawdzenie integralności systemu plików');
jr_define('INTEGRITY_CHECK_LOCALHASH', 'Lokalny hash');
jr_define('INTEGRITY_CHECK_BUILDHASH', 'Skrót wersji');
jr_define('INTEGRITY_CHECK_NOPROBLEMS', 'Super! Nie znaleziono problemów.');
jr_define('_JOMRES_PROPERTYTYPE_MARKER', 'Znacznik map Google');
jr_define('_JOMRES_JAVASCRIPT_READMORE', 'Czytaj więcej');
jr_define('_JOMRES_JAVASCRIPT_READLESS', 'Mniej odczytu');
jr_define('_JOMRES_TOURIST_TAX_TITLE', 'Podatek turystyczny');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE', 'Stawka podatku turystycznego');
jr_define('_JOMRES_TOURIST_TAX_TAXRATE_DESC', 'Ustaw stawkę podatku turystycznego. Podatek turystyczny jest obliczany dopiero po wygenerowaniu wstępnej rezerwacji i jest dodawany do strony potwierdzenia rezerwacji w polu usług dodatkowych.');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO', 'Czy procent?');
jr_define('_JOMRES_TOURIST_TAX_PERCENTAGE_YESNO_DESC', "Ustaw to na Tak, jeśli podatek jest wartością procentową lub Nie, jeśli jest to opłata zryczałtowana.");
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO', 'Wpływa na całą wartość rezerwacji?');
jr_define('_JOMRES_TOURIST_TAX_WHOLEBOOKING_YESNO_DESC', "Ustaw to na Tak, jeśli podatek ma pokryć całą wartość rezerwacji, więc jest to procent zarówno zakwaterowania plus wszelkie dodatki, lub Nie, jeśli jest obliczany tylko na podstawie wartości suma zakwaterowania. Jeśli opcja „Is procent powyżej jest ustawiona na Nie, ta opcja jest ignorowana.");
jr_define('_JOMRES_TOURIST_TAX_NOTE', 'Pamiętaj, że do tej rezerwacji zostanie dodany podatek turystyczny. Będziesz mógł zobaczyć podatek na stronie rezerwacji recenzji.');
jr_define('NO_LICENSE_MESSAGE', "Nie zapisałeś numeru licencji w konfiguracji witryny, dlatego nie będziesz mógł pobierać wtyczek. Po zapisaniu prawidłowego klucza licencyjnego będziesz mógł zainstalować wszystkie wtyczki, które są wymienione jako Podstawowe wtyczki.");
jr_define('INVALID_LICENSE_MESSAGE', "Wygląda na to, że używasz numeru licencji, który jest nieprawidłowy lub wygasł. Po zapisaniu ważnego klucza licencyjnego będziesz mógł zainstalować wszystkie wtyczki, które są wymienione jako wtyczki podstawowe.");
jr_define('VALID_LICENSE_MESSAGE', "Gratulacje, używasz ważnego numeru licencji i możesz instalować wtyczki Core za pomocą menedżera wtyczek Jomres.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ta strona umożliwia przesyłanie obrazów dla Twojej usługi i oferowanych przez Ciebie rzeczy. Ma jeden główny przycisk i drugi przycisk, który pozwala wybrać określone zasoby do przesłania zdjęć. Tak więc, główna usługa obraz i pokaz slajdów pokażą tylko jeden przycisk, ale jeśli utworzyłeś jakieś opcjonalne dodatki, zobaczysz drugi przycisk, do którego możesz przesłać obrazy dla tych konkretnych zasobów.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Najpierw wybierz obrazy, które chcesz przesłać, klikając Dodaj obraz lub przeciągając i upuszczając. Pojawią się one w kolumnie po prawej stronie.</li>
  <li>Powyżej tego obszaru użyj przycisku „Wybierz zasób, aby wybrać zasób, do którego chcesz przesłać obrazy. Możesz otrzymać opcję wyboru określonego zasobu poniżej. </li>
  <li> Po wybraniu zasobu możesz kliknąć przycisk Prześlij obraz pod obrazem, aby powiązać go z tym zasobem. Po przesłaniu obraz zniknie z kolumny po prawej stronie i pojawi się po lewej.</li>
  <li>Użyj przycisku Kosz obok istniejących obrazów, aby usunąć obrazy, których nie chcesz już pokazywać.</li>
  <li>Możesz zmienić kolejność wyświetlania plików w pokazie slajdów, zmieniając ich nazwy przed ich przesłaniem, ponieważ są one wyświetlane na stronach w kolejności alfabetycznej.</li>
</ol>
 ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Obok przycisku Zasób możesz zobaczyć przycisk Podgląd. Jeśli go klikniesz, zobaczysz wyskakujące okienko, które pokazuje, jak aktualnie przesłane obrazy będą wyglądać na stronie. pomysł, jak obrazy będą wyglądać dla Twoich klientów.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Nie ma ograniczeń co do liczby obrazów, które możesz przesłać. Obrazy są automatycznie zmieniane podczas przesyłania. Możesz przesyłać tylko pliki JPG i PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealnie każdy przesłany obraz to przynajmniej ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " w pikselach, w przeciwnym razie mogą wyglądać niewyraźnie po przesłaniu.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Żadne przesłane obrazy nie mogą być większe niż ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " w rozmiarze.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Wybierz zasób, dla którego chcesz przesłać obrazy");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Określony zasób");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Obrazy już przesłane dla tego zasobu");
jr_define('_JOMRES_MARKDOWN_TITLE', 'Formatowanie tekstu');
jr_define('_JOMRES_MARKDOWN_DESC', 'Tu możesz wpisać tekst używając prostego formatowania Markdown. Nie musisz znać żadnego kodu HTML, po prostu użyj przycisków, aby informacje wyglądały tak, jak chcesz, lub sformatuj tekst zgodnie z tymi przykładami.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Nacisk');
jr_define('_JOMRES_MARKDOWN_BOLD', 'pogrubienie');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'kursywa');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'przekreślenie');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Nagłówki");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Duży nagłówek');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Średni nagłówek");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Mały nagłówek');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Mały nagłówek');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listy");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Ogólny element listy');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Pozycja listy numerowanej');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Linki');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst do wyświetlenia');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Cytaty');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'To jest cytat.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Może obejmować wiele wierszy!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Obrazy');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabele');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Kolumna');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Pokazać obrazy właściwości jako pokaz slajdów na liście właściwości?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Jeśli ustawione na tak, zostanie wyświetlony pokaz slajdów głównych obrazów właściwości. Jeśli ustawione na nie, zostanie wyświetlony pierwszy główny obraz właściwości.');
jr_define('EDIT_CMS_USER', 'Edytuj użytkownika CMS');
jr_define('BOOKING_MADE_BY', 'Rezerwacja dokonana przez');
jr_define('_JOMRES_ROUTER_FEATURES', 'Udogodnienia');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Typy pomieszczeń');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Adres URL zewnętrznego formularza rezerwacji');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Tutaj możesz ustawić zewnętrzny adres URL, jeśli chcesz korzystać z witryny innej firmy do dokonywania rezerwacji. Wszystkie przyciski rezerwacji jomres będą wskazywać na ten adres URL. Pozostaw to pole puste, jeśli chcesz użyć formularza rezerwacji Jomres .');
jr_define('_JOMRES_ROOM_TAGLINE', 'Slogan (krótki opis pokoju/podtytuł)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Opis pokoju');
jr_define('_JOMRES_GUEST_BLACKLISTED', 'Goście na czarnej liście');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Jeśli ten gość znajduje się na czarnej liście, nie będzie już mógł dokonywać rezerwacji w tym obiekcie.');
jr_define('_JOMRES_SESSION_HANDLER', 'Obsługa sesji');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Zapisz pliki sesji jomres na dysku lub w bazie danych. Zalecane: baza danych');
jr_define('_JOMRES_MAP_HEIGHT', "Wysokość mapy (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Poziom powiększenia mapy ");
jr_define('_JOMRES_MAP_MAPTYPE', "Typ mapy ");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Menedżer zastępowania szablonów");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Pakiety szablonów to wtyczki, które mogą zapewnić zastępowanie szablonów dla różnych podstawowych plików szablonów Jomres.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ta strona zawiera listę wszystkich plików szablonów, które mogą być nadpisane przez pliki szablonów pakietu szablonów. Jeśli chcesz nadpisać określony plik szablonu, kliknij przycisk edycji dla tego pliku, na następnej stronie będziesz w stanie wybrać wersję, którą chcesz zastąpić. Uwaga, te zastąpienia mają pierwszeństwo przed zarówno Jomres Core, jak i dowolnymi zastąpieniami motywu/szablonu Wordpress lub Joomla. Możesz wyłączyć zastąpienie, usuwając je na stronie Zastąpienia szablonu listy.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Nazwa szablonu");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktualna ścieżka");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nie zastąpiony");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Możesz wybrać, który plik szablonu ma zastąpić podstawowe pliki szablonów, zmieniając listę rozwijaną");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Odsetek zarezerwowanych pokoi");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Odsetek zarezerwowanych pokoi");
jr_define('_JOMRES_SELECT_WIDGETS', "Wybierz widżety");
jr_define('_JOMRES_INTERVAL', "Przedział");
jr_define('_JOMRES_TIMELINE', "Oś czasu");
jr_define('_JOMRES_CPANEL_GRID', "Układ strony głównej panelu sterowania");
jr_define('_JOMRES_CPANEL_GRID_DESC', "Wybierz układ siatki strony głównej panelu sterowania zarządzania właściwościami frontendu.");

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_MARKER_IMAGES', "Znaczniki Map Google");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_TOWN_IMAGES', "Zdjęcia miasta");
jr_define('_JOMRES_PTYPE_CHANGE_WARNING', "Zmiana typu obiektu usunie wszystkie pokoje, taryfy, ustawienia obiektu i zresetuje dostępność.");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO', 'Pamiętaj, że po aktualizacji musisz zaktualizować wszystkie zainstalowane wtyczki Jomres za pomocą menedżera wtyczek Jomres. Jeśli masz zainstalowane wtyczki Core, ale nie masz ważnej licencji Jomres, <em> nie</em> zaleca się aktualizowania Jomresa, ponieważ starsze wtyczki często mogą nie działać z nowszymi wersjami Jomresa. ');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_UPDATEINFO_KEYVALID', 'Pamiętaj, że po aktualizacji musisz zaktualizować wszystkie zainstalowane wtyczki Jomres za pomocą menedżera wtyczek Jomres.');
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING_RENEWALS', "Jeśli chcesz zaktualizować Jomres i jego wtyczki, będziesz potrzebować odnowionej licencji. Odwiedź <a href='https://www.jomres.net/pricing' target='_blank'>nasz w witrynie</a>, aby uzyskać więcej informacji. W większości przypadków licencje te stanowią 50% ceny pełnej licencji. Przed przystąpieniem do zakupu odnowienia upewnij się, że zalogowałeś się do naszego sklepu.");
jr_define('_JOMRES_PAYMENT_METHOD_USED', "Metoda płatności: ");

jr_define('_JOMRES_PRICES', "Połącz się");


jr_define('_OAUTH_TITLE', "Zarządzanie kluczami aplikacji");
jr_define('_OAUTH_APPS', "Szczegóły klienta REST API");
jr_define('_OAUTH_IDENTIFIER', "Identyfikator");
jr_define('_OAUTH_APIKEY', "Identyfikator klienta");
jr_define('_OAUTH_SECRET', "Secret");
jr_define('_OAUTH_CREATED', "Utworzono/zaktualizowano aplikację");
jr_define('_OAUTH_CLIENT_ID_INFO', "Identyfikator klienta i klucz tajny są tworzone dla Ciebie. Identyfikator jest po to, abyś mógł łatwo zidentyfikować tę parę kluczy.");
jr_define('_OAUTH_SCOPE_TITLE', "Uprawnienia (co klient może zrobić)");
jr_define('_OAUTH_SCOPE_CATEGORY_USER', "Uprawnienia użytkownika");
jr_define('_OAUTH_SCOPE_CATEGORY_PROPERTIES', "Uprawnienia właściwości");

jr_define('API_DOCUMENTATION_TITLE', "Dokumentacja API REST aplikacji");

jr_define('_OAUTH_CONFIG', "Konfiguracja rdzenia API");

jr_define('_OAUTH_CONFIG_SHOW', "Pokaż opcje konfiguracji klienta API w menu głównym Jomresa?");
jr_define('_OAUTH_CONFIG_SHOW_DESC', "Możesz nie wyświetlać opcji konfiguracyjnych klienta API w sekcji 'Moje konto' głównego menu Jomres. Możesz zamiast tego zdecydować, że chcesz pokazać je na innych stronach za pomocą skrótów Jomres.");

jr_define('_JOMRES_SHORTCODES_06000API_CORE_DOCS', "Wyświetla stronę dokumentacji rdzenia API. API Core umożliwia użytkownikom tworzenie klientów API, które są następnie używane do uzyskiwania dostępu do funkcjonalności API opisanej w dokumentacji API Core.");

jr_define('_JOMRES_SHORTCODES_06005API_CORE_CLIENT_ADMIN', "Wyświetla główną stronę administracyjną API, na której menedżerowie właściwości mogą konfigurować klientów API. Pamiętaj, że jest to funkcja tylko dla zarejestrowanych użytkowników, więc użytkownicy muszą być zarejestrowani i zalogowani, zanim będą mogli zobaczyć tę stronę.");

jr_define('API_METHODS_TITLE', "Metody API");
jr_define('API_METHODS_DESCRIPTION', "Ta lista metod jest oparta na zainstalowanych wtyczkach funkcji API i jest generowana automatycznie. Jeśli instalujesz lub usuwasz wtyczkę funkcji API, musisz odwiedzić tę stronę, aby odbudować listę metod API dostępnych w Twojej witrynie. ");

jr_define('_OAUTH_REDIRECT_URI', "URI przekierowania");
jr_define('_OAUTH_IDENTIFIER_PLACEHOLDER', "Daj mi imię, które ma dla Ciebie znaczenie, np. Mój telefon");

jr_define('_OAUTH_GRANT_TYPES', "Ten system obsługuje dwa typy przydziałów: Client Credentials i Implicit. Jeśli używasz przepływu <em>client_credentials</em>, będziesz potrzebować zarówno identyfikatora klienta, jak i klucza tajnego klienta. Jeśli używasz <em >niejawne</em> wtedy Twoja aplikacja wyśle ​​tylko identyfikator klienta i zalogujesz się do systemu, aby jawnie autoryzować tę aplikację.");

jr_define('_OAUTH_IMPLICIT_NOTES', "Aby użyć <em>niejawnego</em> przepływu typu grantu, musisz użyć tego adresu URL do autoryzacji aplikacji. Po wywołaniu tego adresu URL i autoryzacji aplikacji system wystawi token, którego aplikacje będą następnie używać do wywoływania interfejsu API tego systemu ");
jr_define('_OAUTH_AUTHORISATION_URL', "Adres URL autoryzacji");

jr_define('WEBHOOKS_CORE', 'Webhooks');
jr_define('_WEBHOOKS_CONFIG_SHOW', "Pokaż opcje konfiguracji webhooka w głównym menu Jomresa?");
jr_define('_WEBHOOKS_CONFIG_SHOW_DESC', "Możesz nie wyświetlać opcji konfiguracyjnych Webhooka w sekcji 'Moje konto' głównego menu Jomres. Możesz zamiast tego zdecydować, że chcesz pokazać je na innych stronach za pomocą skrótów Jomres.");

jr_define('WEBHOOKS_DOCUMENTATION_TITLE', "Dokumentacja webhooków");

jr_define('_JOMRES_SHORTCODES_06000WEBHOOKS_DOCS', "Wyświetla stronę dokumentacji rdzenia API. API Core umożliwia użytkownikom tworzenie klientów API, które są następnie używane do uzyskiwania dostępu do funkcjonalności API opisanej w dokumentacji API Core.");

jr_define('_JOMRES_SHORTCODES_06005WEBHOOKS_CLIENT_ADMIN', "Wyświetla główną stronę administracyjną API, na której menedżerowie właściwości mogą konfigurować klientów API. Pamiętaj, że jest to funkcja tylko dla zarejestrowanych użytkowników, więc użytkownicy muszą być zarejestrowani i zalogowani, zanim będą mogli zobaczyć tę stronę.");

jr_define('WEBHOOKS_INTEGRATION_EDIT', 'Edytuj integrację');
jr_define('WEBHOOKS_INTEGRATION_ID', 'Identyfikator integracji');
jr_define('WEBHOOKS_INTEGRATION_URL', 'URL lub nazwa');
jr_define('WEBHOOKS_ENABLED', 'Włączone');

jr_define('WEBHOOKS_AUTH_METHOD_SELECT', 'Metoda uwierzytelniania/integracja');

jr_define('WEBHOOKS_MANAGER_PROPERTIES_NONE', 'Żadne utworzone przez Ciebie webhooki nie zostaną wyzwolone, ponieważ nie jesteś przypisany do żadnej. Menedżerowie superusług zazwyczaj nie są przypisani do poszczególnych usług, więc do tworzenia webhooków może być potrzebny nowy użytkownik.');
jr_define('WEBHOOKS_MANAGER_PROPERTIES_ASSIGNED_DESC', 'Wszelkie utworzone przez Ciebie webhooki będą wyzwalane w odniesieniu do następujących właściwości: ');


jr_define('PORTAL_REVIEWS_LIMIT', 'Limit opinii');
jr_define('PORTAL_REVIEWS_LIMIT_DESC', 'Użyj tego ustawienia, aby ograniczyć liczbę recenzji wyświetlanych na stronie szczegółów obiektu.');
jr_define('PORTAL_REVIEWS_SHOW_ALL_REVIEWS', 'Pokaż wszystkie recenzje');

jr_define('VIDEO_TUTORIALS', 'Samouczki wideo');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimalna wartość depozytu');
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Jeżeli obliczona wpłata jest mniejsza niż ta kwota, zamiast tego ustaw wpłatę na tę wartość. Ta kwota może sama zostać nadpisana, jeśli nie spełnia minimalnych ustawień wpłat w witrynie. Pozostaw ją na 0, aby nie używaj tego ustawienia.");

jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_WARNING', 'Aby zwiększyć szybkość witryny, zalecamy importowanie szczegółów istniejącej witryny i obrazów właściwości do bazy danych.');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_ACTION', 'Importuj szczegóły istniejących obrazów do bazy danych');

jr_define('_JOMRES_S3_ACTIVE_DESC', 'Funkcja eksperymentalna. Jeśli jest włączona, obrazy przesłane za pomocą funkcji Media Center będą również kopiowane do Twojego zasobnika Amazon S3 i udostępniane z Twojego adresu URL zasobnika Amazon S3. Po włączeniu tej funkcji po raz pierwszy również monit o zaimportowanie istniejących obrazów do Twojego zasobnika S3.');
jr_define('_JOMRES_CLOUDFRONT_DMAIN', 'Domena CloudFront');
jr_define('_JOMRES_CLOUDFRONT_DMAIN_DESC', 'Zamień domyślną domenę Amazon S3 na domenę CloudFront');
jr_define('_JOMRES_S3_SSLTLS_DESC', 'Zalecane włączenie. Tylko dla Windows i Mac OSX, jeśli libcurl nie został zbudowany z obsługą Schannel lub Secure Transport (natywne biblioteki SSL zawarte w Windows i Mac OS X), powinieneś ustawić to na Nie.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING', 'Włączono integrację Amazon S3, więc musisz skopiować wszystkie istniejące obrazy do swojego zasobnika S3. Obrazy są teraz wyświetlane odwiedzającym Twoją witrynę z adresu URL Amazon S3, więc będziesz potrzebować skopiować je najpierw do Twojego wiadra S3, w przeciwnym razie nie będą widoczne dla odwiedzających Twoją witrynę.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_WARNING2', 'Po kliknięciu tego przycisku nie przerywaj procesu i nie czekaj na komunikat o powodzeniu lub błędzie. W zależności od szybkości serwera może to chwilę potrwać.');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_ACTION', 'Skopiuj istniejące obrazy do zasobnika Amazon S3');


jr_define('JOMRES_INCOMPLETE', 'Niekompletne');
jr_define('JOMRES_WATING_APPROVAL', 'Oczekuje na zatwierdzenie');
jr_define('JOMRES_GOOGLE_MAPS_PDETAILS', 'Mapa szczegółów nieruchomości');

jr_define('HAS_STARS_TITLE', 'Pozwala na klasyfikację gwiazdek?');
jr_define('_JOMRES_MEDIA_CENTRE_DBIMPORT_FORCE', 'Wymuś ponowne zaimportowanie szczegółów obrazu do bazy danych');
jr_define('_JOMRES_MEDIA_CENTRE_S3IMPORT_FORCE', 'Wymuś ponowne przesłanie obrazów do zasobnika S3');
jr_define('_JOMRES_UNINSTALL_TABLES', 'Usunąć wszystkie dane Jomres podczas odinstalowywania?');
jr_define('_JOMRES_UNINSTALL_TABLES_DESC', 'Jeśli ustawione na tak, Jomres usunie wszystkie swoje tabele bazy danych po odinstalowaniu. Spowoduje to usunięcie wszystkich danych Jomresa z bazy danych i nie będzie można tego cofnąć.');
jr_define('TRANSACTION_IDS', 'Identyfikator transakcji');
jr_define('PAYMENT_METHOD', 'Metoda płatności');
jr_define('POA_DISPLAY_PRICE', 'Cena POA');
jr_define('POA_DISPLAY_PRICE_DESC', 'Gdy właściwości są pokazane na liście, system spróbuje znaleźć prawidłową cenę ze skonfigurowanych taryf na podstawie dzisiejszej daty lub jeśli w wyszukiwaniu użyto dat, to na podstawie tych dat Jeśli nie, zostanie wyświetlony POA (Cena w aplikacji), co oznacza, że ​​gość powinien skontaktować się z Tobą w celu uzyskania ceny. Jeśli chcesz, możesz tutaj skonfigurować cenę, która będzie wyświetlana zamiast tekstu POA. byłaby ceną „zastępczą" do wyświetlenia, gdyby nie można było określić innej ceny.');

jr_define('PLUGINMANAGER_INSTALL', 'Musisz zainstalować menedżera wtyczek przed instalacją wtyczek Jomres, czy chcesz to zrobić teraz?');
jr_define('PLUGINMANAGER_REINSTALL', 'Musisz zaktualizować menedżera wtyczek przed aktualizacją zainstalowanych wtyczek, czy chcesz to zrobić teraz?');
jr_define('PLUGINMANAGER_INSTALL_BUTTON', "Zróbmy to!");

jr_define('INCLUDEINFILTERS', 'Uwzględnij w filtrach?');
jr_define('INCLUDEINFILTERS_DESC', 'Filtry właściwości w Ajax Composite Search mogą stać się bardzo długie, więc możesz ustawić tę opcję na Nie, aby zapobiec wyświetlaniu tej funkcji na liście właściwości.');

jr_define('REVIEW_REMINDER_PT1', "Masz ");
jr_define('REVIEW_REMINDER_PT2', " rezerwacje, dla których nie zostawiłeś jeszcze recenzji. Zostaw recenzję.");
jr_define('BOOKINGS_AWAITING_REVIEWS', "Rezerwacje oczekujące na recenzje");
jr_define('REVIEW_NAG', "Nękania gości za recenzje?");
jr_define('REVIEW_NAG_DESC', "Gdy gość zostanie wyrejestrowany z rezerwacji, system przypomni mu o opublikowaniu recenzji dotyczącej jego rezerwacji. Ustaw tę opcję na Nie, aby wyłączyć to przypomnienie.");

jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_TITLE', "Wysłać kopie e-maili dotyczących rezerwacji do administratorów witryny?");
jr_define('SEND_EMAIL_COPIES_TO_SITE_ADMINS_DESC', "Po włączeniu kopie e-maili z rezerwacjami wysyłane do zarządców obiektów będą wysyłane również do wszystkich administratorów witryny.");

jr_define('HIDDEN_ADDRESS_SETTING', "Ukryć adres?");
jr_define('HIDDEN_ADDRESS_SETTING_DESC', "Jeśli ustawisz tę opcję na Tak, tylko goście, którzy już dokonali rezerwacji w Twoim obiekcie, będą mogli zobaczyć adres obiektu. Możesz użyć tego ustawienia, aby ukryć dokładną lokalizację obiektu jeśli, na przykład, jest rutynowo pozostawiany bez opieki.");
jr_define('HIDDEN_ADDRESS_PLACEHOLDER', "UKRYTE");
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES', 'Optymalizuj obrazy podczas przesyłania?');
jr_define('_JOMRES_MEDIA_CENTRE_OPTIMIZE_IMAGES_DESC', 'Gdy włączone, obrazy będą zoptymalizowane pod kątem internetu (rozmiar pliku może być do 75% mniejszy). W zależności od typu przesłanego obrazu na serwerze musi być zainstalowana co najmniej jedna z tych bibliotek przez hosting dostawca: optipng, pngquant, pngcrush, pngout, advpng, jpegtran, jpegoptim, gifsicle');
jr_define('DATABASE_INTEGRITY_CHECK', 'Sprawdzenie integralności bazy danych');
jr_define('PRZESTARZAŁE_FILES_CHECK', 'Sprawdzenie przestarzałych plików');
jr_define('DATATABLES_COLVIS', 'Widoczność kolumny');

jr_define('API_TOKEN_LIFETIME', 'Czas życia tokena API');
jr_define('API_TOKEN_LIFETIME_DESC', 'Jak długo token API pozostaje ważny, w sekundach. 86400 = 1 dzień, 31536000 = 1 rok');


jr_define('TYTUŁ SZYFROWANIA', 'Szyfrowanie');
jr_define('ENCRYPTION_FILE_LOCATION', 'Lokalizacja pliku szyfrowania');
jr_define('ENCRYPTION_FILE_LOCATION_DESC', '**Nigdy nie usuwaj pliku szyfrowania** <br/> Dane użytkownika są przechowywane w postaci zaszyfrowanej w tabelach, aby zapewnić bezpieczną ochronę „danych w spoczynku" zgodnie z zaleceniami RODO. Domyślnie klucz szyfrowania jest przechowywany w pliku "encryption_key.class.php" w katalogu głównym Twojej instalacji Jomres (zazwyczaj /public_html/jomres).Tutaj możesz zmienić miejsce przechowywania pliku.Jeśli zmienisz lokalizację, musisz PRZENIEŚĆ plik, nie czekaj, aż Jomres utworzy nową wersję, w przeciwnym razie nie będziesz w stanie odszyfrować danych swoich gości.');

jr_define('_JOMRES_COM_YOURBUSINESS_DESC', 'Informacje, które tutaj zapiszesz, zostaną wykorzystane na fakturach generowanych dla tej nieruchomości');

jr_define('_JOMRES_GDPR_POLICIES', 'Zasady RODO');
jr_define('_JOMRES_GDPR_POLICIES_DESC', 'Tutaj możesz skonfigurować, jak długo po utworzeniu rezerwacji lub faktury jest ona usuwana z systemu, aby zapewnić zgodność z RODO.');

jr_define('_JOMRES_GDPR_BOOKING_RETENTION', 'Okres przechowywania rezerwacji (w dniach)');
jr_define('_JOMRES_GDPR_BOOKING_RETENTION_DESC', 'Ile dni po dacie wylotu z rezerwacji należy usunąć rezerwację? Po jej usunięciu zarówno rezerwacja, jak i faktura są usuwane. Typowy okres przechowywania może wynosić 365 dni.');

jr_define('_JOMRES_GDPR_INVOICE_RETENTION', 'Okres przechowywania faktury (bez księgowania)');
jr_define('_JOMRES_GDPR_INVOICE_RETENTION_DESC', 'Inne faktury, takie jak prowizje i faktury abonamentowe, nie są powiązane z rezerwacjami. W rezultacie nie zostaną usunięte po usunięciu faktur za rezerwacje i umów. W zależności od kraju i własnych praktyk biznesowych, musisz skonfigurować inny okres przechowywania. Typowy okres przechowywania może wynosić 3653 dni, czyli 10 lat.');


jr_define('_JOMRES_GDPR_CONSENT_FORM_INTRO', 'Twoje dane');
jr_define('_JOMRES_GDPR_CONSENT_FORM_THIRD_PARTIES', 'Niektóre funkcje tej witryny wymagają przechowywania informacji o Twojej wizycie. Jest to używane tylko w celu świadczenia Ci usług, nigdy nie jest udostępniane nikomu innemu i jest usuwane, gdy nie jest już potrzebne.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_CONSENT_REQUEST', 'CZY DASZ NAM ZEZWOLENIE NA PRZECHOWYWANIE TEJ INFORMACJI??');
jr_define('_JOMRES_GDPR_CONSENT_FORM_DETAIL', 'Szczegóły');
jr_define('_JOMRES_GDPR_CONSENT_FORM_COOKIE', 'Musisz wyrazić zgodę na przechowywanie tych danych, abyś mógł dokonywać rezerwacji w tej witrynie. Niezależnie od tego, czy wyrażasz zgodę na przechowywanie swoich danych, zapiszemy plik cookie na Twoim komputerze, aby poinformować Pomaga nam to zapewnić, że nie będziemy stale pytać, czy chcesz wyrazić zgodę, czy nie, i nie zawiera ona żadnych informacji umożliwiających identyfikację osoby (PII). może w dowolnym momencie wejść na stronę „Uprawnienia aplikacji", aby wyrazić zgodę lub zrezygnować.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BASIC_INFORMATION', 'Informacje są przechowywane przez różne okresy czasu w zależności od charakteru Twojej wizyty. Jeśli więc tylko się rozglądasz, przechowujemy informacje o przybliżonej lokalizacji geograficznej (na poziomie kraju). uczynić formularze wyszukiwania bardziej przyjaznymi dla użytkownika będziemy przechowywać ostatnio wyszukiwane przez Ciebie informacje. Informacje te są zwykle przechowywane przez maksymalnie 24 godziny i są wykorzystywane wyłącznie w celu uprzyjemnienia Twojej wizyty.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_INTRO', 'Gdy dokonujesz u nas rezerwacji, z konieczności jest przechowywanych więcej informacji.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_1', 'Szczegóły techniczne formularza rezerwacji są rejestrowane i przechowywane przez maksymalnie 60 dni. Jest to wymagane, aby rezerwacje na żądanie mogły zostać przekształcone w pełne rezerwacje po zatwierdzeniu rezerwacji oraz do analizy przez nasze zespoły w przypadku problemów z rezerwacją.Jeśli nie byłeś zalogowany podczas dokonywania rezerwacji, wyślemy Ci e-mailem nazwę użytkownika i hasło, abyś mógł przeglądać historię rezerwacji i skorzystać z prawa do bycia zapomnianym (RTBF), jeśli chcę to zrobić.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_2', 'Dane wprowadzone do formularza rezerwacji, na przykład imię i nazwisko, adres e-mail, prawdziwy adres są przechowywane przez maksymalnie 365 dni od daty wyjazdu rezerwacji. Informacje te są przechowywane w naszej bazie danych w postaci zaszyfrowanej tak, aby tylko upoważnione osoby mogły ją zobaczyć. Jeśli dokonasz rezerwacji, to zgodnie z prawem musimy przechowywać Twoje dane osobowe w okresie ważności rezerwacji. Po zakończeniu rezerwacji, z powodu jej anulowania lub wymeldowania, będziesz móc korzystać z RTBF, logując się i odwiedzając stronę „Twoje dane". Informacje o fakturach za zrealizowane rezerwacje będą nadal bezpiecznie przechowywane w naszej bazie danych, aby zapewnić przestrzeganie odpowiednich przepisów podatkowych, ale będziesz mógł usunąć wszystkie inne informacje umożliwiające identyfikację osoby po dokonaniu rezerwacji.');
jr_define('_JOMRES_GDPR_CONSENT_FORM_BOOKINGS_3', 'Gdy wyrażasz zgodę na przechowywanie Twoich danych w sposób opisany powyżej, jesteśmy prawnie zobowiązani do przechowywania tej zgody w naszej bazie danych. Informacje te będą obejmować Twój numer IP i treść formularza zgody. zachować to powiadomienie o zgodzie na czas nieokreślony (jest to wymóg prawny).');

jr_define('_JOMRES_GDPR_CONSENT_NOT_SET', 'Nie poinformowałeś nas jeszcze, czy możemy gromadzić informacje umożliwiające identyfikację użytkownika');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_IN', 'Wyraziłeś zgodę na gromadzenie przez nas niezbędnych danych osobowych do przyjmowania rezerwacji');
jr_define('_JOMRES_GDPR_CONSENT_OPTED_OUT', 'Powiedziałeś nam, aby nie gromadzić informacji umożliwiających identyfikację osoby');

jr_define('_JOMRES_GDPR_NOCONSENT_INTRO', 'Nie dałeś nam pozwolenia na gromadzenie Twoich prywatnych danych');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT', 'Aby móc wykonywać określone czynności w tej witrynie, musimy gromadzić informacje umożliwiające identyfikację użytkownika, ale nie wyraziłeś na to zgody.');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_TEXT', 'Zmień swoje uprawnienia');
jr_define('_JOMRES_GDPR_NOCONSENT_DIDNOTCONSENT_LINK_CONTINUE', 'Kontynuuj przeglądanie właściwości');

jr_define('_JOMRES_GDPR_APP_MENU_ITEM', 'Uprawnienia aplikacji');

jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA', 'Dane gości');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC', 'Są to dane przechowywane dla Ciebie przez różne obiekty. Różne hotele mogą posiadać różne dane, w zależności od tego, co wpisałeś podczas dokonywania rezerwacji.');
jr_define('_JOMRES_GDPR_DOWNLOAD_GUEST_DATA_DESC_NONE', 'Nie masz żadnych danych zapisanych w żadnych hotelach w tym systemie');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA', 'Dane profilu');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC', 'To jest główny zestaw danych, który dla Ciebie przechowujemy, różny od tych, które udostępniłeś innym właściwościom.');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_DESC_NONE', 'Nie zapisałeś żadnych informacji w profilu');
jr_define('_JOMRES_GDPR_DOWNLOAD_PROFILE_DATA_TEXT', 'Oto informacje umożliwiające identyfikację użytkownika, które przechowujemy w tej witrynie dla Ciebie. Są one skonstruowane w formacie JSON (JavaScript Object Notation), który jest lekkim formatem wymiany danych. Jest łatwy do odczytania i pisać, a maszyny mogą łatwo analizować i generować.');

jr_define('_JOMRES_GDPR_REDACTION_STRING', 'Zanonimizowany');

jr_define('_JOMRES_GDPR_MY_DATA', 'Twoje dane');
jr_define('_JOMRES_GDPR_MY_DATA_PRIVACY_NOTICE', 'Akceptując niniejsze Warunki korzystania z usługi (niniejsza „Umowa"), zgadzasz się, że:

<ul>
<li>
Masz prawo do rezerwacji hoteli za pośrednictwem tej strony internetowej;
</li>
<li>
Masz co najmniej 18 lat;
</li>
<li>
Posiadasz uprawnienia prawne do tworzenia wiążącego zobowiązania prawnego;
</li>
<li>
Będziesz korzystać z Witryny zgodnie z niniejszą Umową;
</li>
<li>
Będziesz korzystać z Witryny wyłącznie w celu dokonywania uzasadnionych rezerwacji dla siebie lub innej osoby, w imieniu której jesteś prawnie upoważniony do działania;
</li>
<li>
Poinformujesz takie inne osoby o niniejszej Umowie, która dotyczy rezerwacji dokonanych przeze mnie w ich imieniu, w tym o wszystkich zasadach i ograniczeniach mających do niej zastosowanie;
</li>
<li>
Wszystkie informacje dostarczone przez Ciebie do Witryny są prawdziwe, dokładne, aktualne i kompletne; oraz
</li>
<li>
Będziesz chronić informacje o swoim koncie oraz będziesz nadzorować i ponosić całkowitą odpowiedzialność za korzystanie z konta przez siebie i kogokolwiek innego niż Ty.
</li>
</ul>
');
jr_define('_JOMRES_GDPR_MY_DATA_LEAD', 'Bezpieczeństwo i przejrzystość są dla nas ważne.');
jr_define('_JOMRES_GDPR_MY_DATA_INTRO', 'Bardzo poważnie traktujemy nasze obowiązki dotyczące przechowywania Twoich danych. Wszystkie informacje umożliwiające identyfikację osoby (PII) są przechowywane w postaci zaszyfrowanej w naszej bazie danych przy użyciu standardowych algorytmów branżowych, aby zapewnić, że tylko autoryzowani użytkownicy mogą przeglądać te informacje.');

jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_TEXT', 'Możesz pobrać wszystkie dane osobowe, które dla Ciebie przechowujemy.');
jr_define('_JOMRES_GDPR_MY_DATA_DOWNLOAD_BUTTON', 'Pobierz teraz');

jr_define('_JOMRES_GDPR_MY_RTBF_LEAD', 'Prawo do bycia zapomnianym (RTBF)');
jr_define('_JOMRES_GDPR_MY_RTBF_INTRO', 'Uważamy, że powinieneś być w stanie <a href="https://gdpr-info.eu/art-17-gdpr/" target="_blank">usunąć</a> swój < a href="https://gdpr-info.eu/art-4-gdpr/" target="_blank">Informacje umożliwiające identyfikację osoby </a>jeśli chcesz i jeśli jest to wykonalne. ');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDIN', 'Nie jesteś zarejestrowany w tej witrynie. Twoja ogólna lokalizacja (kraj) i numer IP będą przechowywane przez maksymalnie 24 godziny, a następnie usunięte.');
jr_define('_JOMRES_GDPR_MY_RTBF_NOTREGISTERED_OPTEDOUT', 'Nie jesteś zarejestrowany w tej witrynie i zrezygnowałeś z gromadzenia danych. Nie zapisaliśmy Twoich danych osobowych.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS', 'Jesteś zarejestrowany w witrynie i nie masz żadnych oczekujących ani aktywnych rezerwacji. Możemy zanonimizować większość informacji, które obecnie dla Ciebie przechowujemy. Czy chcesz to zrobić? ');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_NOBOOKINGS_NOTE', 'Uwaga: nie powoduje to usunięcia Twojego konta, po prostu anonimizuje nasze dane, dzięki czemu Twoje konto nie może być powiązane z Tobą jako osobą. Zgodnie z prawem musimy nadal przechowywać Twoje dane osobowe do celów fakturowania, jednak będziemy to robić usuń wszystkie rekordy gości.');

jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_FUTUREBOOKINGS', 'Jesteś zarejestrowany na stronie, jednak masz zaległe rezerwacje i nie możemy w tej chwili zanonimizować Twoich danych. zostać usunięty, jeśli nie zdecydujesz się usunąć go przed tym terminem.');
jr_define('_JOMRES_GDPR_MY_RTBF_REGISTERED_PROPERTYMANAGERS', 'Ponieważ jesteś zarządcą usługi w naszej witrynie, nie możemy zaoferować Ci możliwości automatycznego usunięcia Twoich danych. Zamiast tego skontaktuj się z nami bezpośrednio, abyśmy mogli przypisać Twoje usługi do innego zarządcy. Gdy to zrobimy i usuniemy Twój status zarządcy nieruchomości, będziesz mógł automatycznie usunąć swoje dane.');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME', 'Zapomnij o mnie!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_WARNING', 'Tego nie można cofnąć!');
jr_define('_JOMRES_GDPR_MY_RTBF_FORGET_ME_FORGOTTEN', 'Twoje dane zostały usunięte!');

jr_define('_JOMRES_CANNOT_BOOK_INVALID_EMAIL', 'Niestety nie możesz dokonać rezerwacji, ponieważ Twój adres e-mail jest nieprawidłowy');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST_INTRO', 'Ta strona daje możliwość anonimizacji wszystkich gości, których informacje są przechowywane w systemie. Pozwala to zachować zgodność z RODO, jednak nie możesz edytować żadnych innych informacji na tej stronie. W tym celu musisz zalogować się do frontendu jako zarządca nieruchomości. Założenie jest takie, że skontaktował się z Tobą historyczny gość prosząc o umożliwienie mu skorzystania z prawa do bycia zapomnianym. Jeśli nie jest w stanie zalogować się do frontendu strony (być może użytkownik nie został dla niego utworzony podczas dokonywania rezerwacji), możesz użyć tego obszaru do anonimizacji go po potwierdzeniu jego tożsamości.');

jr_define('_JOMRES_GDPR_RTBF_ANONYMISE_GUEST', 'Anonimizuj gościa');
jr_define('_JOMRES_GDPR_RTBF_UNKNOWN_PROPERTY', 'USUNIĘTA WŁASNOŚĆ');
jr_define('_JOMRES_GDPR_RTBF_GUEST_REDACTED', 'Dane gości zanonimizowane');
jr_define('_JOMRES_GDPR_RTBF_GUEST_CANNOT_REDACT', 'Nie można anonimizować');

jr_define('_JOMRES_GDPR_CONSENT_TRIGGER_FORM', 'Potrzebujemy Twojej zgody na przechowywanie Twoich danych przed dokonaniem rezerwacji. KLIKNIJ TUTAJ, aby udzielić nam pozwolenia.');

jr_define('_JOMRES_GDPR_CONFIG_ENABLE', 'Włączyć funkcjonalność zgodną z RODO?');
jr_define('_JOMRES_GDPR_CONFIG_ENABLE_DESC', 'NIE ZALECAMY WYŁĄCZANIA FUNKCJI ZGODNYCH Z RODO. Jomres ma wbudowane funkcje, które pomagają zapewnić, że sekcja Jomres Twojej witryny jest zgodna z RODO. Jeśli wyłączysz tę funkcję (i nie powinieneś, jeśli jesteś w UE lub prowadzisz interesy z obywatelami UE), Jomres automatycznie założy, że każdy odwiedzający witrynę wyraził zgodę na włączenie swoich danych osobowych. wyświetlane, a użytkownicy nie będą proszeni o wyrażenie zgody na gromadzenie danych.');


jr_define('EMPTY_TEMP_DIR', 'Pusty katalog tymczasowy');
jr_define('EMPTY_TEMP_DIR_DONE', 'Pliki tymczasowe usunięte');

jr_define('MACHINE_TRANSLATION', 'Tłumaczenia maszynowe');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG', 'Język źródłowy');
jr_define('MACHINE_TRANSLATION_DEFAULT_LANG_DESC', 'Możliwe jest podłączenie funkcji tłumaczenia maszynowego. Pozwala to na wprowadzanie ciągów w jednym języku, a tłumaczenia mogą być pobierane z usług zdalnych. Pamiętaj, że nie wszystkie usługi tłumaczeniowe obsługują wszystkie języki. Zobacz te usługi więcej szczegółów.');

jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT', 'Typy pokoi');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_NEW', 'Nowy typ pokoju');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_EDIT_LEAD', 'Na tej stronie możesz tworzyć i edytować typy pokoi. Te typy pokoi będą specyficzne tylko dla tej usługi. Podczas konfigurowania usługi potrzebujesz najpierw niektórych typów pokoi. administratora lub możesz dodać własne.Gdy masz jeden lub więcej typów pokoi, możesz następnie tworzyć pokoje tego typu.Po posiadaniu pokoi możesz tworzyć taryfy (ceny) dla tych pokoi, ponieważ taryfy są powiązane z typami pokoi ');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_TITLE', 'Kierownicy mogą tworzyć typy pokoi?');
jr_define('_JOMRES_CONFIG_ROOM_TYPES_CREATING_DESC', 'Użyj tej opcji, aby skonfigurować, czy menedżerowie mogą tworzyć własne typy pokoi w interfejsie użytkownika. Zdecydowanie zalecamy pozostawienie tej opcji ustawionej na Nie, gdy zaczynasz używać Jomres, zwłaszcza jeśli tworzysz portalu, ponieważ należy utworzyć wszystkie typy pokoi w obszarze administratora. Typy pokoi utworzone przez menedżerów będą wyświetlane w formularzach wyszukiwania, ale ponieważ te typy pokoi są specyficzne dla poszczególnych właściwości, tylko jedna właściwość zostanie wyświetlona w wynikach wyszukiwania, jeśli zostanie wybrany ten typ pokoju podczas wyszukiwania. Jeśli chcesz, aby tylko super zarządcy mogli tworzyć typy pokoi, pozostaw tę opcję ustawioną na Tak i użyj wtyczki Kontrola dostępu, aby umożliwić tylko supermenedżerom wyświetlanie opcji menu „Ustawienia > Typy pokoi". Tylko te nieruchomości, które są wynajmowane jeśli wyjdziesz pokoje w nieruchomości i skorzystasz z trybu edycji taryfy Zaawansowany lub Mikrozarządzanie, możesz skorzystać z tej opcji.');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE', 'Zaktualizowano typ pokoju/obiektu');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_TITLE', 'Pokaż typy pokoi w opcjach wyszukiwania');
jr_define('_JOMRES_PROPERTY_ROOM_TYPES_CONFIG_DESC', 'Jeśli zezwolisz zarządcom nieruchomości na tworzenie własnych typów pokojów, możesz wybrać, czy chcesz pokazać utworzone typy pokojów w opcjach wyszukiwania, w których wybrałeś pokazywanie typów pokojów.');

jr_define('_JOMRES_QUICKBOOKING_EMAIL_ADDRESS_NOTE', "Nie należy ponownie używać tego samego adresu e-mail do każdej rezerwacji.<br/>Jeśli masz unikalną domenę (np. nie adres e-mail Gmail) dla swojej firmy, użyj numeru telefonu gościa jako ich adres e-mail. Adres e-mail będzie wtedy wyglądał mniej więcej tak: 123456@mojadomena.com<br/>To zapewni, że podczas tworzenia rezerwacji zostanie utworzony nowy gość .");

jr_define('_JOMRES_LOGIN_USERNAME', 'Adres e-mail');
jr_define('_JOMRES_LOGIN_PASSWORD', 'Hasło');
jr_define('_JOMRES_LOGIN_REASON_EMAIL_ALREADY_USED', "Cieszymy się, że chcesz ponownie dokonać u nas rezerwacji. Aby móc wspólnie zarządzać wszystkimi rezerwacjami, konieczne jest zalogowanie się, aby rezerwacja mogła zostać dodana do Twojego konta. To również zapewnia, że ​​jesteś upoważniony do korzystania z podanego adresu e-mail.");

jr_define('_JOMRES_LOGIN_RESET_MESSAGE', 'Jeśli nie znasz swojego hasła, możemy wysłać Ci wiadomość e-mail umożliwiającą zresetowanie hasła. Aby zresetować hasło, postępuj zgodnie z instrukcjami zawartymi w tym e-mailu.');
jr_define('_JOMRES_LOGIN_RESET_BUTTON', 'Nie pamiętasz hasła?');

jr_define('_JOMRES_REVIEWS_ANONYMISE', 'Zanonimizować swoje imię i nazwisko?');
jr_define('_JOMRES_REVIEWS_ANONYMISE_DESC', 'Jeśli zdecydujesz się zanonimizować swoje imię i nazwisko podczas sprawdzania, zamiast tego użyjemy Twoich inicjałów.');
jr_define('ANONYMOUS', 'Anon');

jr_define('_JOMRES_REVIEWS_REPLY_SAID', 'powiedział ');
jr_define('_JOMRES_REVIEWS_REPLY_OPPORTUNITY', 'Odpowiedz na tę recenzję');
jr_define('_JOMRES_REVIEWS_PLACEHOLDER_REPLY', 'Tu wpisz swoją odpowiedź na tę recenzję.');
jr_define('_JOMRES_REVIEWS_YOUR_REPLY', 'Twoja odpowiedź');
jr_define('_JOMRES_REVIEWS_REPLY_COMMENT', 'Przegląd główny');
jr_define('_JOMRES_REVIEWS_REPLY_SAVED', 'Odpowiedź recenzji zapisana');


jr_define('_JOMRES_REVIEWS_REPLY_RULES_WARNING', 'Przed przesłaniem odpowiedzi na recenzję musisz przeczytać poniższe informacje. Przesyłając odpowiedź, potwierdzasz, że zgadzasz się na te warunki.');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_GUIDELINES', 'Jakie są nasze wytyczne dotyczące odpowiedzi na recenzję?');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_REPORT', 'Odpowiadasz na recenzję swojej nieruchomości. <em>Nie wolno</em> wykorzystywać swojej odpowiedzi jako procesu handlowego sporu. Jeśli chcesz zgłosić opinię, użyj opcji „Zgłoś Recenzja" na liście, a nie na tej stronie odpowiedzi na recenzję.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_FIRM', 'Po zostawieniu odpowiedzi nie będziesz mógł jej edytować.');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TITLE', 'Dozwolone i zachęcane');
jr_define('_JOMRES_REVIEWS_REPLY_RULES_ALLOWED_TEXT', '
<ul>
    <li>Pełna odpowiedź na recenzję.</li>
    <li>Uprzejmość i uczciwość.</li>
    <li>Rozsądne odpowiedzi na problemy recenzenta (pamiętaj, że inni mogą mieć podobne problemy, ale nie skorzystali z okazji, aby opublikować recenzję).</li>
    <li>Zachęć gościa do bezpośredniego kontaktu z Tobą w celu rozwiązania problemów.
    <li>Zawsze pamiętaj, że przyszli goście zobaczą Twoją odpowiedź. Zawsze bądź profesjonalny.</li>
</ul>
');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TITLE', 'Niedozwolone');

jr_define('_JOMRES_REVIEWS_REPLY_RULES_NOTALLOWED_TEXT', '
<ul>
    <li>Spory handlowe.</li>
    <li>Pytania do recenzenta lub innych osób.</li>
    <li>Wątpliwy język (w tym przekleństwa).</li>
</ul>
');

jr_define('_JOMRES_COM_A_CRON_LASTRAN', 'Ostatnie uruchomienie');
jr_define('_JOMRES_COM_A_CRON_SCHEDULE', 'Harmonogram');


jr_define('_JOMRES_INVOICE_NUMBERS', 'Numery faktur');

jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_TITLE', 'Użyć niestandardowych numerów faktur?');
jr_define('_JOMRES_USE_CUSTOM_INVOICE_NUMBERS_DESC', 'Możesz skonfigurować system tak, aby używał niestandardowych numerów faktur. Dotyczy to tylko nowych faktur.');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_TITLE', 'Numer początkowy');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_START_NUMBER_DESC', 'Numery są tworzone po kolei. Jaka powinna być pierwsza liczba?');

jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_TITLE', 'Jaki format powinien mieć numer faktury?');
jr_define('_JOMRES_CUSTOM_INVOICE_NUMBERS_PATTERN_DESC', 'Skonfiguruj tutaj format numeru faktury. Format może wyglądać tak: {N}/{D} lub {N}/{Y}, gdzie N jest automatycznie generowanym numerem, D = data w formacie RRRRMMDD ( 20190131) lub Y = YYYY (2019). Wszelkie inne znaki alfanumeryczne nieujęte w nawiasy klamrowe zostaną pozostawione same, więc wzorzec wyglądający jak {N}/{D}-L spowoduje powstanie numeru faktury (21), który wygląda jak 21/2019-L ');
jr_define('_JOMRES_SURCHARGE_TITLE', 'Dopłata');
jr_define('_JOMRES_SURCHARGE_DESC', 'Dodatkowa opłata, która zostanie doliczona do pokoju w momencie rezerwacji (obliczana na dzień)');


jr_define('_JOMRES_PDF_BUTTON', 'PDF');


jr_define('_JOMRES_COM_LABEL_PRIORITY_TITLE', 'Należy nadać priorytet etykietom w całej witrynie?');
jr_define('_JOMRES_COM_LABEL_PRIORITY_DESC', 'Niestandardowy tekst zapisany na stronach edycji etykiet lub stronach z ciągami pliku lang do tłumaczenia są uważane za etykiety obejmujące całą witrynę. Menedżerowie usług mogą również dostosowywać etykiety dla każdej właściwości za pomocą funkcji edycji etykiet w interfejsie użytkownika. Pozwala to zarządcy nieruchomości, aby mieć różne teksty dla swojej właściwości, co jest przydatne, jeśli właściwość różni się od wszystkich innych właściwości w witrynie.<br/> Gdy system wyszukuje teksty etykiet, nada priorytet tekstom z całej witryny. specyficzne teksty, co oznacza, że ​​jeśli dla danej etykiety istnieje tekst obejmujący całą witrynę, system wybierze go jako pierwszy. Jeśli ustawisz tę opcję na Nie, system będzie traktował priorytetowo teksty dotyczące określonej właściwości przed tekstami obejmującymi całą witrynę.');

jr_define('_JOMRES_REFERRER', 'Polecający');
jr_define('_JOMRES_REFERRER_SYSTEM', 'Jomres'); // Można to zmienić w przypadku białej listy, więc witryna „Najlepsza witryna rezerwacji na świecie" zmieni to na „WBBS" lub podobne.
jr_define('_JOMRES_LIBRARY_PACKAGES', 'Pakiety biblioteczne');
jr_define('_JOMRES_LIBRARY_PACKAGES_DESC', 'Moduły dostawcy i węzła są oddzielnymi (bezpłatnymi) pakietami dla Jomres. Możesz ponownie zainstalować pakiety na tej stronie.');
jr_define('_JOMRES_LIBRARY_PACKAGES_REFRESH', 'Zainstaluj ponownie pakiety bibliotek');

jr_define('_JOMRES_COM_PTYPES_NOT_DELETED', 'Nie można usunąć typu właściwości, ponieważ nadal jest używany przez niektóre właściwości. Przed próbą usunięcia tej właściwości należy zmienić te właściwości na inny typ właściwości. Identyfikatory UID właściwości, które uniemożliwiają usunięcie: ');

jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_HEADING', 'Losowe adresy e-mail');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_TITLE', 'Oferuj losowe wiadomości e-mail');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DESCRIPTION', 'Możesz zezwolić systemowi na generowanie losowych adresów e-mail w wyskakującym okienku Szybka rezerwacja na pulpicie nawigacyjnym. Dzięki temu menedżerowie i recepcjoniści mogą tworzyć rezerwacje dla gości, dla których nie mają adresów e-mail. jako oszczędność czasu dla witryn z wieloma recepcjonistami/menedżerami, którzy rozumieją, że te losowe e-maile nigdy nie będą wykorzystywane do prawdziwej komunikacji, celem jest obejście faktu, że w Jomres wszyscy goście muszą mieć adresy e-mail. MUSISZ również podać domenę w następne pole.');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMAIN_TITLE', 'Domena losowych wiadomości e-mail');
jr_define('_JOMRES_RANDOM_EMAILS_IN_QUICKBOOKINGS_DOMIAN_DESCRIPTION', 'To nie powinna być normalna domena poczty e-mail, taka jak gmail lub Outlook. Zamiast tego może to być Twoja własna domena lub coś zupełnie innego, na przykład „mojastrona.emails"');
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_FORM', 'Obszar przesyłania');
jr_define('_LIST_USERS_LEGEND_NOROLE', 'Brak roli użytkownika');
jr_define('_LIST_USERS_LEGEND_RECEPTIONIST', 'Recepcjonistka');
jr_define('_LIST_USERS_LEGEND_PROPERTYMANAGER', 'Menedżer nieruchomości');
jr_define('_LIST_USERS_LEGEND_SUPERPROPERTYMANAGER', 'Super Property Manager');
jr_define('_LIST_USERS_LEGEND_SUSPENDED', 'Zawieszone');
jr_define('_LIST_USERS_LEGEND_DELETEDFROMCMS', 'Usunięto z CMS');


jr_define('_REVIEW_JOMRES_PLEASEREVIEW', 'Jeśli podoba Ci się Jomres, rozważ pozostawienie recenzji na jednej z tych witryn');
jr_define('_REVIEW_JOMRES_ALREADYREVIEWED', 'Jestem miłą osobą, już wystawiłem recenzję');

jr_define('_LICENCE_PROMPT_DEAR', 'Drogi ');
jr_define('_LICENCE_EXPIRED', ', Twój klucz licencyjny Jomres wygasł, więc brakuje Ci tych wspaniałych funkcji i korzyści!');
jr_define('_LICENCE_EXPIRED_BENEFITS_1', 'Aktualizacje wtyczek i nowe wersje wtyczek');
jr_define('_LICENCE_EXPIRED_BENEFITS_2', 'Obsługa e-maili/biletów tylko dla członków na wyłączność');
jr_define('_LICENCE_EXPIRED_BENEFITS_3', 'Bezproblemowe aktualizacje Jomres Core');
jr_define('_LICENCE_EXPIRED_POST', 'Połącz się z nami, aby uzyskać bezproblemowe rozwiązania w zakresie płatności i uzyskać dostęp do wszystkich wtyczek i usług wsparcia tylko dla członków.');
jr_define('_LICENCE_EXPIRED_RESTART', 'Uzyskaj dostęp do wszystkich wtyczek teraz!');

jr_define('_LICENCE_INVALID_KEY', 'Niestety nie używasz ważnego klucza licencyjnego Jomres, więc brakuje Ci tych wspaniałych funkcji i korzyści!');
jr_define('_LICENCE_INVALID_BENEFITS_1', '<a href="https://www.jomres.net/jomres-plugins" target="_blank">Wtyczki</a>, które znacznie rozszerzają funkcjonalność Jomres');
jr_define('_LICENCE_INVALID_BENEFITS_2', 'Obsługa e-maili/biletów tylko dla członków na wyłączność');
jr_define('_LICENCE_INVALID_BENEFITS_3', 'Bezproblemowe aktualizacje Jomres Core');
jr_define('_LICENCE_INVALID_POST', 'Połącz się z nami, aby uzyskać bezproblemowe rozwiązania płatnicze i uzyskać dostęp do wszystkich wtyczek i usług wsparcia tylko dla członków.');
jr_define('_LICENCE_INVALID_START', 'Uzyskaj dostęp do wszystkich wtyczek teraz!');
jr_define('_ADMIN_MENU_SECTIONS_DASHBOARD', 'Pulpit');
jr_define('_ADMIN_MENU_SECTIONS_USERS', 'Użytkownicy');
jr_define('_ADMIN_MENU_SECTIONS_COMMISSION', 'Prowizja');
jr_define('_ADMIN_MENU_SECTIONS_SUBSCRIPTIONS', 'Subskrypcje');
jr_define('_ADMIN_MENU_SECTIONS_INVOICES', 'Faktury');
jr_define('_ADMIN_MENU_SECTIONS_PORTAL', 'Portal');
jr_define('_ADMIN_MENU_SECTIONS_TRANSLATIONS', 'Tłumaczenia');
jr_define('_ADMIN_MENU_SECTIONS_TOOLS', 'Narzędzia');
jr_define('_ADMIN_MENU_SECTIONS_REPORTS', 'Raporty');
jr_define('_ADMIN_MENU_SECTIONS_SETTINGS', 'Ustawienia');
jr_define('_ADMIN_MENU_SECTIONS_HELP', 'Pomoc');

jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_TOTAL', 'Łączne właściwości w systemie');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_PUBLISHED', 'Właściwości opublikowane');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_UNPUBLISHED', 'Właściwości nieopublikowane');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_APPROVED', 'Właściwości zatwierdzone');
jr_define('_ADMIN_CPANEL_PROPERTIES_PANEL_REQUIREAPPROVAL', 'Właściwości wymagające zatwierdzenia');

jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_TOTAL_REVIEWS', 'Liczba recenzji');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_UNPUBLISHED_REVIEWS', 'Nieopublikowane recenzje');
jr_define('_ADMIN_CPANEL_REVIEWS_PANEL_REPORTED_REVIEWS', 'Przejrzyj raporty');

jr_define('_ADMIN_CPANEL_SYSTEM_INFO', 'Informacje o systemie Jomres');

jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK', "Typ właściwości tej właściwości nie jest opublikowany, może nie pojawiać się w wynikach wyszukiwania. Skontaktuj się z administratorem witryny, aby opublikować typ właściwości, lub zmień typ właściwości na stronie Edytuj właściwość.");
jr_define('_JOMRES_PROPERTYTYPE_UNPUBLISHED_SANITY_CHECK_LINK', 'Zaktualizuj typ swojej właściwości');


jr_define('_JOMRES_INCOME_PAID_AMOUNTS', 'Dochód (wypłacone kwoty)');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', 'Nie można usunąć funkcji właściwości "');
jr_define('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '" ponieważ jest używany przez następujące właściwości: ');


jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST', 'Test API REST');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_INFO', 'Ta strona przeprowadza podstawowy test interfejsu API REST przy użyciu wbudowanej funkcji w Jomres. Wywołuje interfejs API REST Jomres, aby sprawdzić, czy otrzyma prawidłową odpowiedź.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_CALLED', 'Serwer wywołał ten adres URL, aby sprawdzić, czy odpowiedź jest prawidłowa: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_RESPONSE', 'Strona otrzymała tę odpowiedź: ');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_PASSED', 'Wygląda na to, że test przebiegł zgodnie z oczekiwaniami, prawdopodobnie nie będziesz miał problemu z otrzymywaniem żądań REST API z reszty Internetu.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_FAILED', 'Test nie powiódł się, spójrz w pole Response, jeśli wygląda na dużo kodu HTML lub otrzymałeś komunikat 404, oznacza to, że Twój serwer przekierowuje połączenia na inny adres URL. Uniemożliwi to otrzymywanie API wzywa.');

jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_TITLE', 'Test syndykacji');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_INTRO', 'Serwer aplikacji Jomres przechowuje listę wszystkich witryn Jomres. Pozwala nam to zbudować sieć dystrybucji. Sieć ta została zaprojektowana, aby umożliwić naszym użytkownikom wyświetlanie właściwości z innych witryn w ich własnych witrynach i jest przydatna, szczególnie w przypadku nowych witryn, aby budować obecność SEO w sieci. Celem jest, aby wszystkie witryny Jomres współpracowały ze sobą, budując zaufanie w sieci. Usługa ta jest bezpłatna.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_FAILED', 'Twoja witryna nie jest obecnie wymieniona na serwerze aplikacji Jomres, który jest częścią sieci dystrybucyjnej. Ten serwer spróbuje ponownie dodać ten serwer do sieci podczas kolejnych 6 wczytań stron. kilka ładowań strony, to się nie zmienia proszę sprawdzić, czy test połączenia powyżej przeszedł pomyślnie. Uwaga, serwery localhost nie mogą być dodawane do sieci.');
jr_define('_JOMRES_REST_API_CONNECTIVITY_TEST_SYNDICATION_NETWORK_CONFIRMATION_PASSED', 'Gratulacje, Twój serwer jest wymieniony na serwerze aplikacji Jomres.');

jr_define('_JOMRES_SYNDICATION_TITLE', 'Właściwości syndykowane');
jr_define('_JOMRES_SYNDICATION_TAGLINE', 'Oto kilka innych właściwości dostępnych w naszej sieci nieruchomości');


jr_define('_JOMRES_SYNDICATION_STATS_TITLE', 'Statystyki dystrybucji');
jr_define('_JOMRES_SYNDICATION_STATS_IS_LISTED', 'Gratulacje, Twój serwer znajduje się na liście Jomres Syndication Network. Twoje usługi zaczną wkrótce pojawiać się w innych witrynach Jomres, jeśli nie są jeszcze wyświetlane.');
jr_define('_JOMRES_SYNDICATION_STATS_IS_NOT_LISTED', 'Twoja instalacja nie jest częścią Jomres Syndication Network, dlatego Twoje usługi nie są wyświetlane w innych witrynach opartych na Jomres i nie możesz korzystać z tej bezpłatnej reklamy.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS', 'Aktywne instalacje Jomres: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_SERVERS_DESC', 'Łączna liczba instalacji Jomres, które współużytkują właściwości sieci syndykacyjnej Jomres w swoich witrynach. ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES', 'Całkowite właściwości: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTIES_DESC', 'Jest to liczba właściwości dostępnych w JSN.');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS', 'Całkowita liczba wyświetlanych właściwości: ');
jr_define('_JOMRES_SYNDICATION_STATS_TOTAL_PROPERTY_DISPLAYS_DESC', 'Łącznie za każdym razem, gdy właściwość Jomres była połączona z inną witryną z Jomres.');
jr_define('_JOMRES_SYNDICATION_STATS_BLURB', 'The Jomres Syndicate Network (JSN) to bezpłatna funkcja dostępna dla wszystkich użytkowników Jomres. Jej celem jest zapewnienie bezpłatnej reklamy Twoich obiektów w innych witrynach opartych na Jomres. Celem jest pomoc szybko uruchamiasz swoją witrynę, oferując bezpłatne reklamy, dzięki czemu Twoje usługi są rozpoznawane i godne zaufania, ponieważ są powiązane z witrynami o wysokim stopniu zaufania i trafności, które są już dobrze znane wyszukiwarkom. Zobacz ten <a href="https: //www.jomres.net/features/jomres-syndication-network" target="_blank">artykuł na naszej stronie internetowej</a> i <a href="https://www.jomres.net/manual/developers- guide-2/387-jomres-syndication-network" target="_blank">podręcznik</a>, aby uzyskać więcej informacji.');


jr_define('GUEST_PROFILE_INFORMATION', 'To są dane Twojego profilu gościa, pola z tym symbolem <i class="fa fa-users" aria-hidden="true"></i>
 są widoczne publicznie, podczas gdy pola z tym symbolem <i class="fa fa-user-secret" aria-hidden="true"></i> są widoczne tylko dla Ciebie, Twoich hostów i administratorów witryny.<br/> <br/> Gospodarze mogą zobaczyć prywatne informacje tylko wtedy, gdy utworzyłeś już u nich rezerwację.<br/><br/>Twoje informacje są bezpiecznie zaszyfrowane i przechowywane w naszej bazie danych przy użyciu szyfrowania AES-256.');

jr_define('GUEST_PROFILE_OPTIONAL', 'Te pola są opcjonalne, jednak gospodarze mogą wykorzystać te informacje, aby określić, czy mogą Ci zaufać, dlatego lepiej jest dodać te informacje. Pamiętaj, że prosisz o pozostanie nieruchomości i mogą odmówić ci przyjęcia, jeśli uznają, że nie pasujesz do ciebie lub że twoja biografia nie zawiera wystarczających informacji.');

jr_define('GUEST_PROFILE_DRIVING_LICENSE', 'Prawo jazdy');
jr_define('GUEST_PROFILE_PASSPORT_NUMBER', 'Numer paszportu');
jr_define('GUEST_PROFILE_IBAN', 'Numer IBAN');
jr_define('GUEST_PROFILE_ABOUT_ME', 'O mnie');
jr_define('GUEST_PROFILE_ABOUT_ME_HINTS', 'Ta sekcja "O mnie" jest dostępna publicznie, więc nie podawaj żadnych prywatnych informacji. To powiedziawszy, postaraj się włożyć tyle, ile czujesz się komfortowo, dzieląc się swoimi pasjami, czym zarabiać na życie, swoje hobby itp. Możesz użyć Markup, aby nadać mu trochę jazzu. Gospodarze będą chcieli poczuć, że mogą Ci zaufać w swoich właściwościach. Upewnij się, że Twoje zdjęcie jest prawdziwym zdjęciem Ciebie, a nie Twojego psa lub samochód (tak, chłopaki, rozmawiamy z wami!).');

jr_define('GUEST_PROFILE_PREFERENCES', 'Wprowadź tutaj wszelkie specjalne wymagania, takie jak łatwość dostępu. Nie będą one wyświetlane w Twoim profilu publicznym, ale zostaną dodane do informacji o rezerwacji podczas dokonywania rezerwacji.');

jr_define('VIEW_HOST_PROFILE', 'Profil hosta');

jr_define('GUEST_PROFILE_TITLE', 'Profil gościa');
jr_define('GUEST_PROFILE_TITLE_MY', 'Mój profil');

jr_define('GUEST_PROFILE_WELCOME', 'Cześć, pozwól, że opowiem ci trochę o sobie.');
jr_define('GUEST_PROFILE_MY_NAME', 'Nazywam się ');
jr_define('GUEST_PROFILE_I_COME_FROM', 'i pochodzę z');
jr_define('GUEST_PROFILE_IN', ' region w ');

jr_define('GUEST_PROFILE_PRIVATE_INFORMATION', 'Moje prywatne informacje');
jr_define('GUEST_PROFILE_PRIVATE_INFORMATION_DISCLAIMER', 'Dokładamy wszelkich starań, aby weryfikować informacje o gościu i gospodarzu, jednak powinieneś dołożyć należytej staranności i sam zdecydować, czy ta osoba jest godna zaufania.');

jr_define('GUEST_PROFILE_MY_PROPERTIES', 'Moje właściwości');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzje');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SAID', 'Oto, co powiedziałem o tej właściwości: ');
jr_define('GUEST_PROFILE_MY_REVIEWS_I_SCORED', 'Nadałem tej nieruchomości ocenę : ');
jr_define('GUEST_PROFILE_MY_REVIEWS', 'Moje recenzje');
jr_define('GUEST_PROFILE_OF_ME', 'Co inni o mnie mówią');
jr_define('GUEST_PROFILE_OF_HOST_SAID', 'Co ten host powiedział o mnie');

jr_define('GUEST_PROFILE_REVIEW_GUEST', 'Sprawdź gościa');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT', 'Moja recenzja tego gościa');
jr_define('GUEST_PROFILE_REVIEW_GUEST_CONTENT_EXAMPLES', 'Oto kilka przykładowych opinii gości, które pozwolą Ci się rozkręcić: <br/>

<ul>
<li>(imię gościa) było przyjemnością gościć! Zostawili miejsce czyste i byli cicho przez cały weekend. Mieli płynną komunikację i nie mogę się doczekać, aż znowu ze mną zostaną!</li>
    <li>Bardzo mi się podobało (imię gościa), ponieważ byli w stanie traktować to miejsce z szacunkiem, dobrze się bawić i cieszyć się okolicą. Byli niesamowici w wynajmie przestrzeni i mam nadzieję, że będę mógł ich ponownie gościć.</li>
    <li>Wszystkie zasady mojego domu były przestrzegane (imię gościa) i mogli z łatwością wejść i wyjść. Uwielbiałem je tam mieć, ponieważ były pełne szacunku i ciche. Gorąco polecam je innym!</li>
</ul>

');

jr_define('GUEST_PROFILE_UNKNOWN', 'Przepraszam, nie mogę znaleźć tego użytkownika. Najprawdopodobniej nie uzupełnili jeszcze danych swojego konta.');

jr_define('GUEST_PROFILE_USERSTATUS_GUEST', 'Gość');
jr_define('GUEST_PROFILE_USERSTATUS_HOST', 'Host');
jr_define('GUEST_PROFILE_USERSTATUS_ADMIN', 'Administrator');

jr_define('WORDPRESS_THEME_ADVICE', 'Jomres jest zbudowany na frameworku Bootstrap, więc musisz go używać na motywie opartym na Bootstrap. Zalecamy taki oparty na Bootstrap 3. Jeśli nie masz dostępu do motywu, zalecamy użycie motyw Jomres Leohtian dla Wordpress, który możesz <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank ">pobierz stąd.</a>');


jr_define('BOOKING_NOSHOW_MENU', 'Oznacz jako brak pokazu');
jr_define('BOOKING_NOSHOW_AUDIT_LOG', 'Rezerwacja oznaczona jako Niedojazd');
jr_define('BOOKING_NOSHOW_BOOKINGS', 'Rezerwacje');
jr_define('BOOKING_NOSHOW_NOSHOWS', 'Brak pokazów');
jr_define('BOOKING_NOSHOW_NETWORK_STATUS', 'Statystyki JSN dla tego użytkownika');

jr_define('BOOKING_NOSHOW_INFO', 'Informacje o rezerwacji i braku pokazu są pobierane z sieci Jomres Syndicate Network w momencie rezerwacji. Są one pobierane z anonimowych danych i mogą być używane przez Ciebie do podjęcia decyzji, czy ten gość stanowi ryzyko niewykonania rezerwacji. Jeśli system zgłasza, że ​​dane są nieznane, prawdopodobnie dlatego, że ten system nie jest rozpoznawany w sieci.');

jr_define('BOOKING_NOSHOW_UNKNOWN', 'Nieznany');

jr_define('CMF_CONFIG_TITLE', 'Struktura zarządzania kanałami');
jr_define('CMF_CONFIG_KEY', 'Klucz struktury zarządzania kanałami');
jr_define('CMF_CONFIG_KEY_DESC', 'Klucz licencyjny Channel Management Framework. Musisz podać ten klucz, aby móc pobierać wtyczki Channel Management Framework.');

jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT_UNAPPROVED', 'Twoja właściwość nie została zatwierdzona');
jr_define('_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT_UNAPPROVED', "Twoja właściwość nie została zatwierdzona. Jeśli uważasz, że zostało to zrobione przez pomyłkę, skontaktuj się z nami. ");

jr_define('_JOMRES_GUESTTYPES_IS_CHILD', "Czy jest to typ gościa podrzędnego?");
jr_define('_JOMRES_GUESTTYPES_IS_CHILD_DESC', "Ustaw to na Tak, jeśli ten typ gościa zostanie sklasyfikowany jako gość podrzędny.");

jr_define('_JOMRES_GUESTTYPES_INTRO', "Jeśli chcesz pobierać opłaty za osobę za noc, musisz utworzyć kilka typów gości.");
jr_define('_JOMRES_GUESTTYPES_INSTRUCTIONS', "Możesz utworzyć tyle typów gości, ile potrzebujesz, spróbuj zacząć od utworzenia tylko jednego typu gościa o nazwie „Dorosły”. Wszystkie ustawienia pozostaw wartości domyślne. Następnie, jeśli na przykład chcesz dać dzieciom poniżej 12 roku życia zniżkę w wysokości 50%, utworzysz nowy typ gościa i nazwiesz go „Dzieci poniżej 12 roku życia”. Ustaw opcję „Dodać wariancję?” opcję na - (ujemną) i ustaw 'Wariancja' na 50. Oznacza to, że gdy dzieci zostaną dodane do rezerwacji, płaci 50% ceny pokoju.");


jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITPRICES', "Ustaw ceny ręcznie");
jr_define('_JOMRES_MICROMANAGE_PICKERDROPDOWN_EDITMINDAYS', "Ustaw minimalną liczbę nocy ręcznie");
jr_define('_JOMRES_MICROMANAGE_PICKER_SETMINDAYS', "Ustaw minimalną liczbę nocy");

jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_DOW', "Ustaw <em>cenę za noc</em> według dnia tygodnia");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_RATES', "Ustaw <em>cenę za noc</em> według zakresu dat");
jr_define('_JOMRES_MICROMANAGE_PICKER_TYPE_INTERVAL_MINDAYS', "Ustaw <em>minimalne noce</em> według zakresu dat");

jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_RATES', "Selektory dat i wprowadzanie stawki umożliwiają ustawienie jednej ceny dla danego zakresu dat. Wybierz datę początkową i końcową, wprowadź cenę i kliknij przycisk Ustaw cenę za noc.");
jr_define('_JOMRES_MICROMANAGE_PICKER_INSTRUCTIONS_MINDAYS', "Selektory dat i wprowadzanie minimalnej liczby nocy pozwalają ustawić jedną wartość minimalnej liczby nocy dla danego zakresu dat. Wybierz datę początkową i końcową, wprowadź liczbę minimalnej liczby nocy i kliknij 'Ustaw minimalna liczba nocy");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO', "Użyj tego menu, aby zmienić między ustawianiem cen dla poszczególnych dat, a ustawianiem minimalnej liczby nocy dla poszczególnych dat. Możesz użyć selektora <em>według dnia tygodnia</em>, <em>według daty zakres</em> lub ustaw ceny/minimalne noce, ręcznie edytując daty.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR_INFO_SMALL_VIEWPORT', "Użyj tego menu, aby zmienić między ustawianiem cen dla poszczególnych dat, a ustawianiem minimalnej liczby nocy dla poszczególnych dat. Możesz użyć selektora <em>według zakresu dat</em> lub ustawić ceny/minimalne noce według ręczne edytowanie dat.");
jr_define('_JOMRES_MICROMANAGE_PICKERS_SELECTOR', "Ustaw ceny lub minimalną liczbę nocy");

jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW', "Ustaw <em>minimalne noce</em> według dnia tygodnia");
jr_define('_JOMRES_MICROMANAGE_PICKER_BYDOW_INFO', "Pola dnia tygodnia pozwalają ustawić minimalną liczbę nocy dla danego dnia tygodnia, po kliknięciu przycisku dnia tygodnia wszystkie dni tygodnia zostaną ustawione na minimalną liczbę nocy. ");


jr_define('_JOMRES_MICROMANAGE_MANUALLY', "Ręcznie ustaw ceny/minimalne noce");
jr_define('_JOMRES_MICROMANAGE_SET_PRICES', "Ustaw ceny");
jr_define('_JOMRES_MICROMANAGE_SET_MINDAYS', "Ustaw minimalną liczbę nocy");

jr_define('_JOMRES_MICROMANAGE_PRICE', "Za noc");
jr_define('_JOMRES_MICROMANAGE_MINDAYS', "Min nocy");
jr_define('_JOMRES_MICROMANAGE_MAXDAYS', "Maksymalna liczba nocy");

jr_define('_JOMRES_MICROMANAGE_INTRO', "Tutaj możesz utworzyć taryfy, które są powiązane z typami pokoi, które masz w swojej nieruchomości. ");

jr_define('_JOMRES_MICROMANAGE_BASIC_SETTINGS', "Najczęściej używane opcje");

jr_define('_JOMRES_MICROMANAGE_MODAL_BUTTON', "Instrukcje");

jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS', "Jeśli chcesz dodać różne ceny dla różnej liczby gości, <em>możesz utworzyć więcej niż kilka taryf dla każdego typu pokoju</em> i mieć w nich różne wartości min./maks. gości. ");

jr_define('_JOMRES_MICROMANAGE_INFO', "Nadaj taryfie nazwę, określ maksymalną liczbę noclegów oraz minimalną i maksymalną liczbę gości wymaganych w formularzu rezerwacji przed zaoferowaniem taryfy.<br/><br/> panel wyboru daty, aby dodać ceny i ustawienia minimalnych noclegów do zakresu dat lub bezpośrednio edytować dane wejściowe Jeśli nie chcesz, aby taryfa była oferowana w ogóle w określonych terminach, pozostaw cenę ustawioną na 0 (zero) w dniu w tych dniach. <br/><br/> Możesz mieć różne minimalne noce w różnych terminach, więc jeśli chcesz dłuższych rezerwacji podczas tygodni festiwalowych/konferencyjnych, możesz ustawić wyższe minimalne noce tylko w tych okresach.<br/ ><br/>Jeśli pobierasz opłatę za osobę za miejsce (PPPN), możesz włączyć to ustawienie na karcie Ustawienia > Konfiguracja obiektu > Taryfy i waluta, a następnie utwórz wymagane typy gości w sekcji Ustawienia > Typy gości.");

jr_define('_JOMRES_MICROMANAGE_EXTRAOPTIONS', "Dodatkowe opcje");

jr_define('_JOMRES_MICROMANAGE_EXTRA_OPTIONS', "Są to dodatkowe opcje, które nie są tak powszechnie używane, ale mimo to dostępne dla Ciebie. <br/><strong>Ignoruj ​​PPPN</strong> Oznacza Ignoruj ​​na osobę na noc. Możesz mieć kilka różnych taryf dla tego samego typu pokoju, na przykład jeden, w którym pobierana jest opłata za osobę za noc, a taki, w którym nie.<br/><strong>Zezwalaj na weekendy</strong> Opcja Zezwalaj na weekendy daje możliwość ustalenia taryfy tylko dostępne w dni powszednie, na przykład jeśli chcesz mieć specjalną taryfę dla osób podróżujących służbowo. W takim przypadku należy ustawić opcję na Nie, a minimalną liczbę noclegów na 1, a maksymalną liczbę maksymalnie na 5. <br/><strong>Weekendy tylko</strong> Opcja Tylko w weekendy jest odwrotnością opcji Zezwalaj na weekendy. To, co uważasz za dni weekendowe, można skonfigurować w ustawieniach Konfiguracji obiektu. Daje to możliwość zdefiniowania stawki tylko w weekendy, którą możesz chcieć oferta na specjalne wydarzenia.<br/><strong>Odprawa Dzień tygodnia </strong> Ta opcja umożliwia wymuszenie meldowania się tylko w określone dni tygodnia i najlepiej jest używać w połączeniu z opcjami Konfiguracja obiektu > Karta Rezerwacje > Stałe okresy. Większość użytkowników będzie chciała pozostawić tę opcję ustawioną na Wszystkie.<br/>Ostatnie dwie opcje, <strong>Wybrano minimalną liczbę pokoi</strong> i <strong>Wybrano już maksymalną liczbę pokoi</strong>, są bardzo wyspecjalizowane i przydatne w przypadku nieruchomości o wyjątkowo skomplikowanych taryfach. <em>O ile nie masz konkretnych potrzeb, powinieneś pozostawić te opcje w spokoju.</em> Użyj ich, jeśli chcesz, aby ta taryfa była oferowana tylko wtedy, gdy gość wybrał już N liczbę pokoi w formularzu rezerwacji, a więc na przykład możesz mieć jedną podstawową taryfę, w której te opcje są domyślnie, i drugą taryfę, w której wybrana już opcja minimalna pokoi jest ustawiona na 1, wtedy ta druga taryfa zostanie zaoferowana w formularzu rezerwacji po wybraniu pokoju.");
jr_define('_JOMRES_MICROMANAGE_MULTIPLE_TARIFFS_LIST_PAGE', "Możesz utworzyć wiele taryf dla tego samego typu pokoju, więc możesz utworzyć jedną taryfę dla dni min./maks. od 1 do 7 i drugą taryfę, w której min. dni to 7, maks. dni 14 i itd. Pozwala to na tworzenie schematów cenowych tak prostych lub tak skomplikowanych, jak tylko potrzebujesz. Pozwala także na tworzenie wielu taryf z różnymi warunkami, dzięki czemu możesz mieć drugi zestaw taryf, w którym cena jest niższa w przypadku Bed & Breakfast, oraz kolejny zestaw droższych taryf za nocleg, śniadanie i kolację.");

jr_define('_JOMRES_MICROMANAGE_USE_SELECTED_DATES', "Ustaw tylko dni wyboru daty");
jr_define('_JOMRES_PROPERTY_HCATEGORIES', 'Kategorie właściwości');
jr_define('_JOMRES_PROPERTY_HCATEGORIES_HEDIT', 'Edytuj kategorię właściwości');

jr_define('_JOMRES_STOP_READTHISFIRST1', "Zatrzymaj!");
jr_define('_JOMRES_STOP_READTHISFIRST2', "Dziękujemy za zainstalowanie Jomresa");
jr_define('_JOMRES_STOP_READTHISFIRST3', "Zarządzanie właściwościami odbywa się na publicznych stronach, a nie w obszarze administratora.");
jr_define('_JOMRES_STOP_READTHISFIRST4', "Jeśli nie znasz Jomresa, odwiedź sekcję Pomoc > Strona Pierwsze kroki.");


jr_define('_JOMRES_CONFIG_SYNDICATION_TITLE', "Dołącz do syndykatu Jomres");
jr_define('_JOMRES_CONFIG_SYNDICATION_DESC', "Gdy masz już skonfigurowaną witrynę i jesteś gotowy do przyjmowania gości, dołącz do konsorcjum Jomres.net i umieść swoje właściwości na innych witrynach Jomres.");



jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_1', "Potrzebujesz co najmniej jednego pokoju jednego z następujących typów, zanim będziesz mógł utworzyć taryfę :");
jr_define('_JOMRES_MICROMANAGE_CREATE_ROOM_2', "Przejdź do Ustawienia > Pokoje i najpierw utwórz pokój, gdy to zrobisz, będziesz mógł utworzyć taryfę dla tego typu pokoju.");

jr_define('JOMRES_PLATFORM', "Platforma Jomres");


jr_define('JOMRES_PLATFORM_CONNECTED', "Połączono");
jr_define('JOMRES_PLATFORM_CONNECTED_DESC', "Ustaw to na Tak, jeśli już połączyłeś swoje konto Stripe z platformą Jomres.");

jr_define('JOMRES_PLATFORM_ACCOUNT_ID', "Numer konta Stripe Live");
jr_define('JOMRES_PLATFORM_ACCOUNT_ID_DESC', "This is your Stripe Account id which can be found in your Stripe Dashboard under Settings > Account information and looks like acct_xxxxxxxxx You would use this field if you have multiple Jomres installations and you want to use the same account across all sites and you have already connected to us. If you have not connected to the Jomres Platform, it's not sufficient to enter your details here. Instead, please visit the Get Connected menu option in the toolbar, under the Help section. If you want to test payments, in the Debugging tab of Site Configuration set your site from Production to Development.");

jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY', "Stripe live tajny klucz");
jr_define('JOMRES_PLATFORM_LIVE_SECRET_KEY_DESC', 'Przejdź do Developers > API keys w swoim Stripe Dashboard, aby znaleźć swoje tajne klucze. Są one używane przez system do sprawdzenia poprawności danych rezerwacji zwróconych z formularza płatności i czy depozyty zostały wpłacone przed zapisaniem rezerwacji ');

jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY', "Tajny klucz testu paska");
jr_define('JOMRES_PLATFORM_TEST_SECRET_KEY_DESC', ' ');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD', 'Tryb taryfy standardowej');

jr_define('JOMRES_COM_A_ACCOMMODATES', 'Śpi');
jr_define('JOMRES_COM_A_ACCOMMODATES_DESC', 'Ile osób może pomieścić ten obiekt?');
jr_define('JOMRES_COM_A_GUESTS_IN_DAILY_PRICE', 'Liczba gości w cenie dziennej');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE', 'Cena za dodatkową osobę dorosłą');

jr_define('JOMRES_CHILDREN_BOOKING_FORM_LABEL', 'Dzieci');



jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT', 'Za osobę za noc?');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_PER_PERSON_PER_NIGHT_DESC', '');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER', 'Modyfikator 7 dni');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_7DAY_MODIFIER_DESC', 'Zniżka na stawkę dzienną, jeśli rezerwacja obejmuje 7 dni lub dłużej. Pozostaw to ustawione na zero, jeśli nie chcesz, aby zniżka była stosowana.');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER', 'Modyfikator 30 dni');
jr_define('JOMRES_COM_A_TARIFFMODE_STANDARD_30DAY_MODIFIER_DESC', 'Zniżka na stawkę dzienną, jeśli rezerwacja obejmuje 30 dni lub dłużej. Pozostaw to ustawione na zero, jeśli nie chcesz, aby zniżka była stosowana.');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL', 'Dorośli');
jr_define('JOMRES_GUEST_BOOKING_FORM_LABELINFO', 'Cena za 2 osoby dorosłe');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_1', 'Rezerwacja ze zniżką od ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_2', ' do ');
jr_define('JOMRES_BOOKING_DISCOUNTED_7_DAYS_NUMBER', 'ponieważ rezerwacja jest dłuższa niż 7 dni.');
jr_define('JOMRES_BOOKING_DISCOUNTED_30_DAYS_NUMBER', 'ponieważ rezerwacja jest dłuższa niż 30 dni.');

jr_define('JOMRES_CITY_TAX_HEADING', 'Podatki miejskie');
jr_define('JOMRES_CITY_TAX_VALUE', 'Wartość podatku miejskiego');
jr_define('JOMRES_CITY_TAX_METHOD', 'Metoda obliczania podatku');

jr_define('JOMRES_CITY_TAX_MODEL_SINGLE', 'Pojedyncza opłata');
jr_define('JOMRES_CITY_TAX_MODEL_PER_NIGHT', 'Za noc');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST', 'Na gościa');
jr_define('JOMRES_CITY_TAX_MODEL_PER_GUEST_PER_NIGHT', 'Za osobę za noc');
jr_define('JOMRES_CITY_TAX_MODEL_PERCENTAGE_OF_BOOKING_TOTAL', 'Procent wartości rezerwacji');

jr_define('JOMRES_CLEANING_FEE_HEADING', 'Opłata za sprzątanie');
jr_define('JOMRES_CLEANING_FEE_VALUE', 'Koszt opłaty za sprzątanie');


jr_define('JOMRES_COMPATABILITY_MODE', 'Wymuś tryb konfiguracji właściwości zgodności?');
jr_define('JOMRES_COMPATABILITY_MODE_DESC', "Tryb konfiguracji właściwości zgodności wymusza kilka rzeczy. W starszych wersjach Jomresa, zarządcy nieruchomości mogli wybrać tryb edycji taryfy, który ma być używany, a wiele innych ustawień (niektóre z nich mogą wydawać się mylące) Włączenie konfiguracji zgodności wymusza, aby wszystkie nowe właściwości korzystały tylko z trybu edycji taryfy Standard, który modeluje funkcjonalność konfiguracji właściwości booking.com w odniesieniu do cen, cen podrzędnych itp. Zaleca się, aby dla instalacji utworzonych po 9.22 .0, ta opcja powinna być ustawiona na Tak, ale w przypadku starszych instalacji to Ty decydujesz, czy nowe właściwości powinny być automatycznie ustawiane w trybie zgodności podczas ich tworzenia.");

jr_define('JOMRES_POLICY_ACCEPT_CHILDREN', 'Czy akceptujesz dzieci poniżej 18 roku życia?');
jr_define('JOMRES_POLICY_ACCEPT_CHILDREN_DESC', "Ustaw tę opcję na Tak, jeśli zezwalasz na dzieci. Jeśli tak, to w menu Ustawienia będziesz mieć opcję o nazwie Zasady dotyczące dzieci, w której możesz edytować ustawienia związane z dziećmi.");

jr_define('JOMRES_POLICIES_CHILDREN', 'Zasady dotyczące dzieci');

jr_define('JOMRES_POLICIES_CHILDREN_AGES_ALLOWED', 'W jakim wieku mogą przebywać dzieci?');


jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_NIGHT', 'Za dziecko, za noc');
jr_define('JOMRES_POLICIES_CHILDREN_CHARGE_MODEL_PER_STAY', 'Za dziecko, za pobyt');

jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATES', 'Stawki za dzieci');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_NEW', 'Nowa stawka za dziecko');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_EDIT', 'Edytuj stawkę dzieci');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_DESC', 'Tutaj utwórz bezpłatne lub płatne stawki dla dzieci. Stawki będą obowiązywać tylko po utworzeniu poziomów obłożenia dla typów pokoi.');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_FROM', 'Wiek od');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_AGE_TO', 'Wiek do');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_MODEL', 'za noc czy za pobyt?');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE', 'Stawka');
jr_define('JOMRES_POLICIES_CHILDREN_CHILD_RATE_PRICE_DESC', 'Jeśli zero lub nie jest ustawione, dzieci w tym przedziale wiekowym będą bezpłatne.');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGES', 'Wiek w momencie zameldowania');
jr_define('JOMRES_BOOKING_FORM_CHILDREN_AGE_DD', 'Wiek ');

jr_define('JOMRES_OCCUPANCY_LEVELS_TITLE', 'Poziomy obłożenia');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_ADULTS', 'Maksymalna liczba dorosłych');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_CHILDREN', 'Maksymalna liczba dzieci');
jr_define('JOMRES_OCCUPANCY_LEVELS_MAX_OCCUPANCY', 'Maksymalne obłożenie');

jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT', 'Edytuj poziom zajętości dla: ');
jr_define('JOMRES_OCCUPANCY_LEVELS_EDIT_DESC', 'Edytuj poziomy obłożenia dla tego typu pokoju. Nie uwzględniaj gości śpiących w łóżeczkach (są one dodawane przez utworzenie dodatkowego) ');
jr_define('JOMRES_COM_A_DAILY_EXTRA_GUEST_PRICE_DESC', 'Jaka powinna być opłata za każdą dodatkową osobę dorosłą?');

jr_define('JOMRES_GUEST_BOOKING_FORM_LABEL_EXTRA_ADULTS', 'Dodatkowi dorośli');


jr_define('_JOMRES_SANITYCHECK_CHILD_RATES', 'Nie skonfigurowałeś jeszcze stawek podrzędnych.');
jr_define('_JOMRES_SANITYCHECK_CHILD_RATES_BUTTON', 'Ustaw teraz stawki dla dzieci');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS', 'Skonfigurowałeś swoją właściwość tak, aby zezwalała na dzieci, ale nie ustawiłeś jeszcze żadnych poziomów zajętości dla dzieci.');
jr_define('_JOMRES_SANITYCHECK_OCCUPANCY_LEVELS_BUTTON', 'Ustaw poziomy zajętości');
jr_define('JOMRES_OCCUPANCY_LEVELS_INFO', 'Za każdym razem, gdy edytujesz pokój lub typ obiektu, powinieneś sprawdzić i zaktualizować poziomy obłożenia obiektu/pokojów, ponieważ mają one wpływ na liczbę gości, których można zaakceptować w formularzu rezerwacji.');


jr_define('_JOMRES_SEARCH_FORM_ADULTS', 'Dorośli');
jr_define('_JOMRES_SEARCH_FORM_CHILDREN', 'Dzieci');
jr_define('_JOMRES_CONFIG_LEVEL_TITLE', 'Poziom opcji administratora');
jr_define('_JOMRES_CONFIG_LEVEL_DESC', 'Jomres ma wiele opcji menu i konfiguracji, których możesz użyć podczas konfigurowania swojej witryny. Ogromnej większości z nich nigdy nie będziesz musiał zmieniać, więc są one domyślnie ukryte. poziom Opcje administratora. Poziom podstawowy pokazuje dokładnie to, czego potrzebujesz podczas konfigurowania witryny po raz pierwszy. Poziom wspólny pokazuje opcje, które są najczęściej zmieniane, a Wszystko pokazuje wszystkie możliwe ustawienia i opcje menu w obszarze administratora. ');
jr_define('_JOMRES_CONFIG_LEVEL_BASIC', 'Podstawowe');
jr_define('_JOMRES_CONFIG_LEVEL_COMMON', 'Wspólne');
jr_define('_JOMRES_CONFIG_LEVEL_EVERYTHING', 'Wszystko');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_TITLE', 'Czy możemy zbierać informacje o tym, jak korzystasz z Jomresa?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_MESSAGE', 'Chcielibyśmy zbierać informacje o tym, jak korzystasz z Jomres. Żadne dane osobowe nie będą przechowywane, użycie będzie anonimowe i wykorzystane tylko w celu zrozumienia, w jaki sposób ludzie korzystają z Jomres.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_ACCEPT', 'Tak, w porządku');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_1_DENY', ' Nie, nie zgadzam się ');

jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_TITLE', 'Czy będziesz przyjmować rezerwacje w więcej niż jednym obiekcie?');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MESSAGE', 'Jomres może być używany w witrynach z jednym lub wieloma obiektami. Jeśli będziesz dokonywać rezerwacji tylko w jednym obiekcie, wiele opcji będzie zbędnych i potencjalnie mylących. Możesz zmienić to ustawienie później w Ustawieniach > Witryna Konfiguracja > zakładka Funkcjonalność portalu.');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_JUSTONE', 'Tylko jedna właściwość');
jr_define('_JOMRES_CONFIG_INITITAL_SETUP_STEP_2_MANY', ' Będę wyświetlać więcej niż jedną właściwość ');


jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_TITLE", "Którą wersję frameworka Bootstrap obsługuje twój szablon/motyw?");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_MESSAGE", "Każda wersja frameworka Bootstrap wymaga nieco innych znaczników HTML. Jomres ma trzy zestawy szablonów zgodnych z Bootstrapem, po jednym dla każdej wersji Bootstrap. wtedy dane wyjściowe takie jak układ, modalności i menu nie będą działać poprawnie.Jeśli zdecydujesz się później użyć szablonu/motywu z inną wersją Bootstrap, możesz zmienić zestaw szablonów Bootstrap, którego Jomres powinien używać w Administrator> Jomres> Ustawienia > Zakładka Różne. <br/><br/>Joomla 3 jest domyślnie dystrybuowana z Bootstrapem 2, Joomla 4 używa Bootstrap 5. Szablon Jomres Leohtian (Joomla) i motyw (Wordpress) używa Bootstrap 3. Różne szablony/motywy mogą być rozpowszechniane z własnymi plikami Bootstrap, więc jeśli masz jakiekolwiek wątpliwości, skontaktuj się z twórcą szablonu/motywu.");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP2", " Bootstrap 2 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP3", " Bootstrap 3 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP4", " Bootstrap 4 ");
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP5", " Bootstrap 5 ");
jr_define('_JOMRES_CURRENCYFORMAT_STRIP_DECIMALS', 'Usunąć ułamki dziesiętne z cen wyjściowych?');

jr_define('_JOMRES_SEND_GROUP_BY_FIX_TITLE', 'Zastosować grupowanie według poprawki?');
jr_define('_JOMRES_SEND_GROUP_BY_FIX_DESC', 'Niektóre instalacje mysql mogą mieć problem z zapytaniami Jomres na stronie Właściwości listy, Lista gości i Lista faktur. Jeśli te strony mówią, że wyświetlają wyniki X z Y, ale nic nie pojawia się na liście, ustaw ta opcja na Tak może rozwiązać problem. Nie będzie, jeśli korzystasz z hostingu współdzielonego, a usługa hostingowa nie pozwala użytkownikowi mysql na wydanie polecenia "SET GLOBAL sql_mode=". ');
jr_define('_JOMRES_CHANNEL_PROPERTY_NO_ADMIN', 'To jest właściwość kanału, nie może być administrowana lokalnie, odwiedź stronę struktury zarządzania kanałem, aby znaleźć łącze zdalnej administracji właściwości');
jr_define("_JOMRES_CONFIG_INITITAL_SETUP_STEP_3_BOOTSTRAP0", "Brak Bootstrapa w motywie");

jr_define('JOMRES_SOCIAL_MEDIA_LINKS', 'Linki do mediów społecznościowych');
jr_define('JOMRES_SOCIAL_MEDIA_LINKS_INFO', 'Umieść tutaj swoje nazwy kont w mediach społecznościowych, na przykład "jomres", a nie cały adres URL');
jr_define('JOMRES_ORGANISATION_LANGUGES_DESC', 'Oddzielona przecinkami lista języków, którymi posługuje się Twoja organizacja');
jr_define('JOMRES_ORGANISATION_LOGO_URL', 'Url do logo Twojej organizacji');

jr_define('JOMRES_UPDATE_MESSAGE_TITLE', 'Jomres zaktualizowany');
jr_define('JOMRES_UPDATE_MESSAGE_MESSAGE', 'Dostępna jest nowa wersja Jomresa. Aby móc dalej używać Jomresa, musisz go zaktualizować, ponieważ aktualizacje poprawiają funkcjonalność i zapewniają bezpieczeństwo instalacji.');
jr_define('JOMRES_UPDATE_MESSAGE_LINK', 'Zaktualizuj Jomres teraz');

jr_define('PLUGIN_UPDATE_MESSAGE_TITLE', 'Aktualizacje wtyczek');
jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE1', 'W menedżerze wtyczek dostępne są nowe wersje wtyczek. Musisz zaktualizować wszystkie wtyczki, zanim będziesz mógł nadal używać Jomres, ponieważ aktualizacje poprawiają funkcjonalność i zapewniają bezpieczeństwo instalacji.');
jr_define('PLUGIN_UPDATE_MESSAGE_NUMBER', 'Wtyczki do aktualizacji');

jr_define('PLUGIN_UPDATE_MESSAGE_MESSAGE2', 'Jeśli Twoja licencja nie jest już ważna, możesz uzyskać nowy klucz licencyjny z naszej strony internetowej.');

jr_define('PLUGIN_UPDATE_MESSAGE1_LINK', 'Aktualizuj wtyczki');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK1', 'Pobierz nowy klucz');
jr_define('PLUGIN_UPDATE_MESSAGE2_LINK2', 'Zapisz nowy klucz');

jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY_TYPE_IMAGES', "Obrazy typu właściwości");

	jr_define('JOMRES_SITE_SIDEBAR_HELP_TITLE', "Potrzebujesz pomocy przy rezerwacji?");
	jr_define('JOMRES_SITE_SIDEBAR_HELP_BLURB', "Zadzwoń do naszego zespołu obsługi klienta pod poniższy numer, aby porozmawiać z jednym z naszych przedstawicieli, który pomoże Ci we wszystkich Twoich potrzebach wakacyjnych.");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_TITLE', "Dlaczego rezerwować u nas?");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_TITLE', "Oferujemy najlepsze ceny rezerwacji");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB1', "Mamy obecnie najlepsze ceny na rynku.");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_BEST_RATES_BLURB2', "Brak opłat za rezerwację. Oszczędź pieniądze!");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_TITLE', "Duży wybór właściwości");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_HOTELS', " właściwości");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_LARGEST_NUMBER_REVIEWS', " opinie gości");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_TITLE', "Zawsze tu jesteśmy");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_CONTACT', "Zadzwoń lub napisz do nas w dowolnym momencie");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_AVAILABLE_SUPPORT', "Uzyskaj całodobowe wsparcie przed, w trakcie i po podróży");

	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA', "Media społecznościowe");
	jr_define('JOMRES_SITE_SIDEBAR_WHY_SOCIAL_MEDIA_LEAD', "Znajdź nas w mediach społecznościowych");

	jr_define('JOMRES_REVIEW_SCORE_TOP_1', "Znakomity");
	jr_define('JOMRES_REVIEW_SCORE_TOP_2', "Wyjątkowy");
	jr_define('JOMRES_REVIEW_SCORE_TOP_3', "Wspaniały");
	jr_define('JOMRES_REVIEW_SCORE_TOP_4', "Znakomity");
	jr_define('JOMRES_REVIEW_SCORE_TOP_5', "Fantastycznie");

	jr_define('JOMRES_REVIEW_SCORE_VERY_GOOD', "Bardzo dobrze");
	jr_define('JOMRES_REVIEW_SCORE_GOOD', "Dobry");

	jr_define('JOMRES_REVIEWS_NONE_NEW', "Nowa lista");
	jr_define('JOMRES_RIBBON_TEXT_DISCOUNTED', "Zniżka");

	jr_define('_JOMRES_SEARCH_FORM_WHERE_TO_GO', 'Gdzie chcesz się udać?');
	jr_define('DATA_SOURCES_TITLE', "Odśwież źródła danych");
	jr_define('DATA_SOURCES_TITLE_INFO', "Źródła danych są odświeżone. Źródła danych są używane przez pola autouzupełniania w widżecie wyszukiwania i zwykle są aktualizowane automatycznie, jednak ta strona wymusza ręczną aktualizację danych, jeśli jest to wymagane.");

	jr_define('_OAUTH_TOKEN_REQUEST_URI', "Aby wysłać żądanie tokena, wyślij żądanie na ten adres URL");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS', "Skrypt właściwości widoku głównego");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_PROPERTY_UID', "Uid właściwości przeglądanej właściwości");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DETAILS_ARG_TEMPLATE_NAME', "Domyślny szablon to property_details.html, za pomocą tego argumentu możesz zdefiniować inny szablon szczegółów właściwości do wyświetlenia.");

	jr_define('JOMRES_UPDATES_TITLE', 'Aktualizacje Jomres');
	jr_define('JOMRES_UPDATES_INFO', "Ta strona może pobrać i zainstalować dla Ciebie najnowszą wersję Jomres. Wykorzystuje ona swoją własną funkcjonalność, a nie hosta CMS, dlatego jeśli wystąpi problem podczas aktualizacji hosta CMS, możesz użyć tej strony do wymusić ponowną instalację najnowszej wersji Jomres.");

	jr_define('JOMRES_WORDPRESS_PERMALINK_EDITING_MODE_INFO', 'Zarządcy usług mogą korzystać z trybu edycji w interfejsie użytkownika, aby dostosować ciągi dla każdej właściwości, jednak może to działać tylko wtedy, gdy ustawienie WordPress Permalink jest ustawione na Zwykły (http://www.domain.com/?p=123). Gdy to zrobisz, użytkownicy frontendu będą mogli dostosować ciągi, takie jak nazwy pokoi i inne etykiety, które są specyficzne dla unikalnych właściwości. ');

	jr_define('JOMRES_EDITING_MODE_HELP_TITLE', 'Tryb edycji etykiet');
	jr_define('JOMRES_EDITING_MODE_HELP_LEAD', 'Ta funkcja służy do zmiany etykiet pozycji, zwykle na różne języki.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_1', 'Tryb edycji umożliwia zmianę nazw etykiet, które są unikalne dla poszczególnych właściwości. Gdy używasz trybu edycji do zmiany nazwy etykiety, zmiana pojawi się tylko na tej liście właściwości. Na przykład w jednej właściwości, którą chcesz użyć słowa „Ceny”, a po drugie słowa „Ceny”. Nie wszystkie etykiety można zmienić, na przykład nazwy typów pokoi są etykietami obejmującymi całą witrynę, więc nie można ich zmienić, ale zwykle wszystko, co jest unikalne dla danej usługi może być zmienione.');
	jr_define('JOMRES_EDITING_MODE_HELP_INFO_2', 'Jeśli witryna obsługuje wiele języków, używając jednego języka, możesz utworzyć element, który jest unikalny dla pojedynczej właściwości. Po zmianie aktywnego języka możesz użyć trybu edycji, aby zmienić nazwę tej etykiety, wprowadzenie odpowiedniego tłumaczenia w bieżącym języku. Możesz kontynuować zmianę aktywnego języka, aby wprowadzić odpowiednie tłumaczenie dla tej etykiety dla każdego języka obsługiwanego przez witrynę.');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE', 'Przełącznik trybu edycji etykiet');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT', 'Na tym zrzucie ekranu widzimy przełącznik trybu edycji. Tryb edycji jest WYŁĄCZONY, a etykiety wyglądają normalnie: ');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE', 'Tryb edycji etykiet włączony');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT', 'Na tym zrzucie ekranu widzimy, że w trybie edycji etykiety, których nazwy możesz zmienić, są podświetlone:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE', 'Wybierz element do zmiany');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT', 'Po wybraniu etykiety pojawia się wyskakujące okienko:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE', 'Zmień etykietę');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT', 'Użyj małego formularza, aby zmienić etykietę. Kliknij Znacznik, aby zakończyć, lub X, aby anulować edycję:');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE', 'Zmieniono etykietę');
	jr_define('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT', 'Po zapisaniu zmiany etykieta zostanie zaktualizowana na stronie. Możesz teraz wyłączyć tryb edycji:');

	jr_define('JOMRES_TRANSLATIONS_TITLE', 'Tłumaczenia');
	jr_define('JOMRES_TRANSLATIONS_LEAD', 'Na tej stronie możesz tłumaczyć etykiety z jednego języka na inny. Gdy odwiedzasz stronę, zobaczysz ciągi, które już utworzyłeś i ich wartość w dowolnym języku, którego aktualnie używasz. Na górze ustaw język docelowy, a następnie w przypadku etykiet, które chcesz przetłumaczyć, kliknij etykietę, a wyskakujące okienko umożliwi wprowadzenie nowego tłumaczenia. W przypadku dłuższych wierszy tekstu możesz wkleić tekst z innego źródła. Pamiętaj, że wszelki kod HTML zostanie usunięty .<br/>
Możesz pozostawić język docelowy ustawiony na swój bieżący język i użyć tej strony do zmiany nazw elementów tutaj, zamiast odwiedzania ich poszczególnych stron.');
	jr_define('JOMRES_TARGET_LANGUAGE', 'Język docelowy');

	jr_define('API_CLIENTS_INFO', 'Klienci API to pary kluczy Client/Secret, które pozwalają zdalnym systemom na korzystanie z funkcji API, na których używanie im przyznasz uprawnienia. Na tej stronie możesz utworzyć tyle par kluczy Client/Secret, ile potrzebujesz, każda z dowolna kombinacja wymaganych uprawnień.');
	jr_define('CLIENT_TOKEN', 'Token dostępu');
	jr_define('CLIENT_TOKEN_INFO', "Tokeny dostępu można zażądać przy użyciu identyfikatora klienta i klucza tajnego. Niektórzy klienci mogą już mieć utworzony dla niego token dostępu, w takim przypadku możesz użyć tego tokena dostępu. Jeśli uważasz, że token mógł zostać zagrożone lub po prostu chcesz to zmienić, możesz wygasnąć tokeny klienta. Wszystkie tokeny powiązane z parą klient/klucz tajny wygasną.");
	jr_define('DELETE_TOKEN', 'Wygasa tokeny');

	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_CURRENCY', "Wybierz walutę" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_CHOOSE_LANGUAGE', "Wybierz swój język" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER',"Zarejestruj się" );
	jr_define( 'JOMRES_BS5_TOP_PANEL_SIGN_IN', "Zaloguj się");
	jr_define( 'JOMRES_BS5_TOP_PANEL_LIST_YOUR_PROPERTY', "Wyświetl swoją nieruchomość");
	jr_define( 'JOMRES_BS5_TOP_PANEL_REGISTER_FIRST', "Najpierw musisz się zarejestrować i zalogować");

	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_SHOWFILTERS',"Pokaż filtry");
	jr_define('_JOMRES_AJAX_SEARCH_COMPOSITE_HIDEFILTERS',"Ukryj filtry");

	jr_define('_JOMRES_COM_TRANSLATE_LANGUAGEFILES_INFO', "Tekst wyświetlany na stronach jest przechowywany w plikach językowych. System Jomres pokazujący ciągi językowe na stronie oznacza, że nie musisz bezpośrednio edytować tych plików językowych. Zamiast tego możesz edytować te ciągi na tym strony, klikając podświetlony tekst i umieszczając nowy tekst, który chcesz wyświetlić w otwartym formularzu wejściowym. Po kliknięciu znacznika wyboru ta zmiana zostanie zapisana w bazie danych. Oznacza to, że wszystkie zmiany są przechowywane i nie są zastępowane podczas aktualizacji Jomres. Jeśli chcesz zmienić tekst dla różnych języków, użyj menu wyboru języka w prawym górnym rogu, aby zmienić bieżący język. Ciągi tekstowe są czasami powtarzane w różnych miejscach w plikach językowych, ponieważ są używane w różnych konteksty, więc nie zapomnij użyć funkcji wyszukiwania przeglądarki, aby upewnić się, że edytowałeś poprawny ciąg.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN', "Wszelkie zarządzanie usługami odbywa się w interfejsie Twojej witryny. Nie jesteś obecnie zalogowany jako menedżer usług, więc najpierw zaloguj się, aby móc zarządzać swoimi usługami.");

	jr_define('JOMRES_COM_TRANSITION_FROM_ADMIN_TO_BACKEND_NOT_LOGGED_IN_EXPOSITION_FOR_NEW_USERS_JOOMLA', "Kiedy Jomres jest instalowany po raz pierwszy, utworzy on Super Property Managera dla administratora i doda nową opcję do menu głównego o nazwie Rezerwacje. Nie usuwaj tego przycisku menu i odwiedź Zaloguj się. strona Rezerwacje w celu rozpoczęcia administrowania nieruchomościami.");
