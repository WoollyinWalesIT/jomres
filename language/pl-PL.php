<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
* @Polska adaptacja Patryk Doering - http://www.rekinet.pl - kontakt@rekinet.pl
* @Aktualizacja wersji językowej z 07-10-2016r.
**/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
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
jr_define('_JOMRES_JR_NOTLOGGEDIN', '<center><b>Prawdopodobnie serwer wylogował Cię z powodu zbyt długiego okresu braku aktywności.</b>
	<br />
	Zaloguj się i spróbuj ponownie.</center>');
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
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC', 'Aby automatycznie ustawić kod waluty na liście rozwijanej Jomres jest w stanie wykorzystać bezpłatną usługę o nazwie IPinfoDB, która pozwala wykryć kraj gośća. Musisz jednak zarejestrować się na stronie <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> i zdobyć klucz API.');
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
jr_define('_JOMRES_PRODUCT_INFORMATION', 'Witamy w Jomres - Ulubionym systemie rezerwacji. Jeśli chcesz kupić Srebrną lub Złotą Licencję Jomres <a href="http://www.jomres.net/prices" target="_blank">odwiedź naszą stronę</a>.');
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
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS', 'Please see this page for help customizing the emails and a list of the available output: <a href="http://www.jomres.net/manual/property-managers-guide/48-your-toolbar/settings/254-email-templates" target="_blank">Email Templates Help</a>');
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
jr_define('_OPENEXCHANGE_API_DESC', 'Dla uruchomienia funkcjonalności przeliczania walut konieczny jest klucz API Open Exchange Rates. W celu skorzystania z tej funkcjonalności Jomres odwiedź stronę: <a href="https://openexchangerates.org/signup/free" _target="_blank">register for a free key</a> (aktualizacja walut co godzinę, 1000 żądań/miesiąc - brak wsparcia HTTPS, wsparcia e-mail lub zaawansowanych funkcji). System Jomres pobiera kursy raz dziennie więc tak długo, jak używasz klucza na tylko kilku stronach, nie przekroczysz tych limitów. Przed Jomres 8.3 wykorzystywany był system przeliczania walut oferowany przez Yahoo, jednak ograniczenia licencyjne usługi spowodowały iż koniecznym stało się przejście na inny system przeliczania walut.');
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
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT', 'Please ensure that you`ve created a WordPress Page that contains the [jomres:xx-XX] shortcode ( where xx-XX is your site language code, for example [jomres:en-GB] or [jomres:en-US] ) otherwise you will not be able to access Jomres from the frontend to manage your properties and bookings. <br> Jomres is built on the Bootstrap framework, so you must use it on a theme based on Bootstrap. We recommend one based on Bootstrap 3. If you do not have access to a theme then we recommend that you use the Jomres Leohtian theme for Wordpress which you can <a href="https://www.jomres.net/download/free-downloads/download/5-miscelleneous-downloads/11-leohtian-for-wordpress" target="_blank">download from here.</a>');
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
jr_define('_JOMRES_CONFIG_GMAP_KEY_WARNING', "Nie masz ustawionego klucza API map Google. Ze względu na ostatnie zmiany w Mapach Google we wszystkich nowych witrynach, należy użyć klucza API, aby móc korzystać z funkcji map Google. Prosimy <a href='http://www.jomres.net/manual/site-managers-guide/14-getting-started/338-google-maps-api-key' target='_blank'>zobacz naszą stronę pomocy odnośnie tworzenia klucza API</a> i wprowadź klucz API w Jomres.");
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
jr_define('_JOMRES_FAQ', 'Często zadawane pytania');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_INTRODUCTION', 'Wprowadzenie');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_WHATISJOMRES', 'Co to jest Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_WHATISJOMRES', 'Jomres to system rezerwacji dla Joomla i WordPress umożliwiający obsługę procesu przyjmowania rezerwacji w hotelu, pensjonacie czy apartamencie.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_USERSADD', 'Czy użytkownicy mogą rejestrować się na mojej stronie i dodawać własne oferty?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_USERSADD', 'Tak. Jomres domyślnie pozwala zarejestrowanym użytkownikom na dodawanie własnych ofert do systemu. Można wyłączyć tą opcję w konfiguracji systemu Jomres, jeśli istnieje taka konieczność.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PROPERTIES', 'Oferty');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_ADDPROPERTIES', 'Jak dodać nową ofertę?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_ADDPROPERTIES', 'Po zainstalowaniu Jomres administrator otrzymuje uprawnienia Super Menadżera Jomres. Zaloguj się na stronie frontowej serwisu jako administrator i z poziomu tego miejsca możesz dodać nową ofertę.<br/>Możesz na zapleczu serwisu w zakładce Jomres -> Użytkownicy dodać nowych Menadżerów, jeśli istnieje taka potrzeba. Jednak domyślnie każdy użytkownik, który tworzy nową ofertę staje się Menadżerem dla tej oferty i wszystkich swoich ofert. Menadżer nie może administrować ofertami innego Menadżera. Jeśli chcesz jakiemuś użytkownikowi nadać takie uprawnienia musisz podnieść jego uprawnienia do Super Menadżera.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTPROPERTIES', 'Czy można importować oferty z innego systemu?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTPROPERTIES', 'Istnieje kilka sposobów umożliwiających import ofert do systemu Jomres. Można skorzystać z dodatku pozwalającego na import ofert z pliku CSV. Metoda ta pozwala na importowanie wielu ofert na raz, ale jest funkcją dostępną tylko dla administratora. Jeśli Menadżer oferty ma konto Beds24 może importować swoje oferty z użyciem API. Innym sposobem jest użycie interfejsu API, jest to funkcja do dodawania i usuwania ofert, jednak wymaga znajomości interfejsów API REST. Jest dedykowana dla programistów.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_IMPORTBOOKINGS', 'Czy można importować rezerwacje z innego systemu?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_IMPORTBOOKINGS', 'Rezerwacje mogą być importowane do oferty przez Menedżera Ofert poprzez dodatek iCal, który oferuje funkcję importowania rezerwacji w menu Menedżera Ofert. Również jeśli właściciel ma konto Beds24 może dokonać importu rezerwacji ze swojego konta w Beds24 do tego systemu.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_EMAILTEMPLATES', 'Czy mogę edytować szablony wiadomości e-mail?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_EMAILTEMPLATES', 'Menadżerzy ofert mogą edytować szablony wiadomości e-mail dzięki funkcjonalności dostępnej w sekcji Ustawienia > Szablony e-mail.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Płatności');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TAKEPAYMENTS', 'Jak umożliwić płatności w ofercie?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TAKEPAYMENTS', 'Trzeba będzie zainstalować dodatek bramki płatności. Jomres ma dwie bramki płatności (PayPal oraz możliwość płacenia of-line). Dodatki wspierające inne kanały płatności można zakupić od naszych partnerów.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_WHICHGATEWAY', 'Jakie bramki należy używać?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_WHICHGATEWAY', 'Jeśli chcesz pobierać procent kwoty rezerwacji użyj metody płatności of-line. Jeśli natomiast chcesz korzystać z funkcjonalności subskrypcji i fakturowania polecamy metodę płatności PayPal.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PAYMENTACCOUNTS', 'Kiedy klient dokonuje płatności za rezerwację i kiedy otrzymam pieniądze?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PAYMENTACCOUNTS', 'Wszystko zależy od tego, jak masz skonfigurowane płatności w swoim serwisie. Jeśli korzystasz z systemu PayPal, możesz skonfigurować go, aby zastępować wszystkie ustawienia frontowe i kierować płatności na globalne konto PayPal. Jeśli nie zdecydujesz się tego zrobić konfiguracja kanałów płatności będzie musiała zostać zrobiona dla każdej z ofert w systemie oddzielnie. Jeśli korzystasz z płatności of-line kwota rezerwacji (minus Twoja prowizja) zostaje przekazana do właściciela oferty.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TROUBLESHOOTING', 'Rozwiązywanie problemów');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_EMAIL', 'Nie są wysyłane wiadomości e-mail dla rezerwacji.');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_EMAIL', 'Jeśli występują problemy z wysyłaniem wiadomości e-mail z systemu, należy sprawdzić ustawienia e-mail hosta Twojego systemu CMS. Jomres używa ustawień Joomla i WordPress do wysyłania e-maili. Błąd wysyłania wiadomości CMS będzie powodował błędy w wysyłaniu wiadomości Jomres.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', 'Nie widzę bramki płatności dla transakcji.');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', 'Jeśli jesteś zalogowany jako Menadżer oferty nie zobaczysz bramki płatności, bo to nie Ty opłacasz rezerwację. Tylko użytkownicy dokonujący płatności zobaczą bramki płatności.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PURCHASINGJOMRES', 'Licencja Jomres');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'Po zakupie X licencji, jestem zmuszony kupić ponownie licencję po jej wygaśnięciu.');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_FORCEDTOSUBSCRIBE', 'Nie jeśli nabyłeś licencję typu Starter, Business lub Enterprise - te licencje pozwalają na korzystanie z oprogramowania przez czas nieokreślony. Wyjątek do tej reguły stanowi licencjonowanie w formie subskrypcji. Po jej wygaśnięciu nie będzie możliwości pobierania aktualizacji dodatków czy instalacji nowych.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_EXPIRED', 'Moja licencja wygasła, można uaktualnić Jomres tak?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_EXPIRED', 'Choć można to zrobić, to nie jest to zalecane. Po wygaśnięciu licencji nie ma możliwości skorzystania z pomocy technicznej na wypadek problemów czy też nie będzie możliwości aktualizacji dodatków dla Jomres. Oznacza to, że nie należy aktualizować Jomres po wygaśnięciu licencji. Nie będzie można zaktualizować dodatków a stare ich wersje nie będą działały w nowej wersji systemu Jomres. Jeśli zależy Ci na aktualizacji doradzamy przedłużenie licencji. Jej odnowienie dostępne jest w cenie 50% niższej od ceny standardowej.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PURCHASINGJOMRES_SOFTWARELICENSE', 'Na jakiej licencji wydawany jest Jomres?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PURCHASINGJOMRES_SOFTWARELICENSE', 'Jomres wydawany jest na licencji MIT i GPL. Dodatki dostępne w panelu dodatków Jomres wydawane są na tych samych licencjach i są całkowicie open source. Dodatki i wersje próbne są zakodowane przez Ioncube i nie są dostępne na wymienionych licencjach. Takie podejście pozwala nam zaoferować Państwu wiele różnych licencji, licencji dostosowanych do różnego rodzaju klientów i kieszeni.');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Oferty');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Jak utworzyć ofertę?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknij w Oferty > Nowa oferta i postępuj zgodnie ze wskazówkami wyświetlanymi na stronie.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Jak mogę zobaczyć jak moją ofertę widzą klienci?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknij w Oferty > Podgląd oferty, aby zobaczyć jak Twoją ofertę widzą potencjalni klienci.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Jak dodać przedmioty rezerwacji?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', 'Wszystko zależy od tego z jakiego rodzaju trybu konfiguracji cen korzystasz. W najprostszej jego postaci przedmioty rezerwacji są już stworzone i wystarczy ustawić ich ceny etc. Dla pozostałych trybów robisz to w menu Ustawienia > Przedmioty rezerwacji dodając nowe przedmioty rezerwacji. Po ich stworzeniu w Ustawienia > Centrum Mediów dodajesz zdjęcia do poszczególnych przedmiotów rezerwacji. Pamiętaj by dodawane przedmioty rezerwacji odzwierciedlały strukturę Twojej oferty. Będzie to ułatwieniem procesu zarządzania ofertą.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Jak ustawić ceny?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', 'Sposób konfiguracji cen dla oferty uzależniony jest od trybu konfiguracji cen z jakiego korzystasz. W trybie podstawowym ceny, liczbę poszczególnych przedmiotów rezerwacji oraz ilość osób dla jakich przedmiot rezerwacji ma być dostępny konfigurujesz na jednej stronie. Ceny ustawiane są na 10 lat do przodu. Jest to najprostszy, jednak i dający najmniej możliwości tryb konfiguracji cen.<br/>Jeśli używasz trybu zaawansowanego lub rozszerzonego to otrzymujesz możliwość konfiguracji cen dla każdego dnia i dowolnej daty, również możesz mieć różne cenniki dla tych samych przedmiotów rezerwacji. Musisz jednak zwrócić uwagę na prawidłowe ustawienie dat i(ch zakresów) by przedmioty rezerwacji były dostępne do rezerwacji w Twojej ofercie.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Jak utworzyć opcjonalne dodatki?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', 'Opcjonalne opcje dla rezerwacji można dodać w Ustawienia > Opcje dodatkowe. Mogą one być opcjonalne lub wymuszone. Wymuszone czyli automatycznie wybrane bez możliwości wyłączenia danej opcji przez klienta np. sprzątanie pokoju po zakończeniu okresu rezerwacji. Dostępna jest szeroka możliwość konfiguracji w jaki sposób ma zostać pobierana cena za opcję dodatkową np. raz dla rezerwacji, razy ilość osób w rezerwacji etc. Można również określić w jakich przedziałach czasu mają być dostępne określone opcje dodatkowe. Czy mają one być prezentowane na stronie głównej oferty czy tylko na stronie rezerwacji. Po utworzeniu dodatków można przesłać dla nich zdjęcia w Centrum Mediów.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Jak przyjmować płatności online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', 'Jeśli chcesz uruchomić płatności online musisz posiadać konto w serwisie transakcyjnym np. PayPal. Jeśli chcesz zobaczyć dostępne w systemie bramki płatności przejdź na stronę Ustawienia > Konfiguracja systemu i kliknij w zakładkę Płatności. Zaznacz i skonfiguruj zgodnie z instrukcjami interesujące Cię bramki płatności online.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Czy mogę oferować rabaty?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', 'Istnieje kilka sposobów na oferowanie rabatów. Dla Menadżera oferty dostępna jest opcja umożliwiająca w sytuacji, gdy to on w imieniu klienta dodaje do systemu nową rezerwacje możliwość wprowadzenia nowej ceny za rezerwację i wysokości zadatku. Opcja ta dostępna jest wyłącznie dla Menadżerów ofert, klienci naturalnie nie mają takich możliwości. Innym sposobem jest możliwość stworzenia kodów rabatowych dla klientów. Kody mogą być tworzone dla zdefiniowanego zakresu dat lub rezerwacji w określonym okresie. Kody rabatowe mogą być wygenerowane i wydrukowane by przekazać je klientom. Można również przypisać indywidualny rabat / zniżkę dla wybranego klienta.');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezerwacje');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Dlaczego po kliknięciu w Nowa rezerwacja następuje przekierowanie do formularza kontaktowego?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Przed umożliwieniem rezerwacji w ofercie przez klientów należy skonfigurować ceny dla wszystkich przedmiotów rezerwacji jakie masz dostępne w rzeczywistej ofercie. Po stworzeniu cen dla przedmiotów rezerwacji możliwe stanie się przyjmowanie rezerwacji dokonywanych przez klientów w Twojej ofercie.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Co to jest czarna lista rezerwacji?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', 'Czarna lista rezerwacji to rezerwacje nie przypisane do żadnego klienta, to rezerwacje wybranego przedmiotu rezerwacji w zdefiniowanym okresie dla wyłączenia go z wykorzystywania (np. na czas remontu).');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Zdjęcia');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Jak dodawać zdjęcia?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', 'Aby dodać zdjęcia dla oferty należy wybrać z menu Ustawienia > Centrum Mediów. W miejscu tym z listy rozwijanej wybierz obiekt dla jakiego chcesz przesłać zdjęcia (np. zdjęcie główne dla oferty, zdjęcia wyświetlane w pokazie slajdów na stronie oferty, zdjęcia dla przedmiotów rezerwacji etc). Następnie z panelu po prawej stronie wybierz przycisk dodawania nowych zdjęć. Wybierz je z dysku swojego urządzenia i prześlij na serwer wybierając odpowiednią opcję. Miniaturki zdjęć przesłanych na serwer pokażą się w lewej części strony.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', 'Co to jest zdjęcie główne oferty?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Zdjęcie główne oferty to zdjęcie, które wyświetlane jest w wynikach wyszukiwania, w nagłówku oferty na stronach z nią związanych. Zalecamy dodanie zdjęcia prezentującego ofertę w jak najlepszym świetle. Aby dodać zdjęcie główne oferty upewnij się, że ta właśnie opcja wybrana została z listy rozwijanej dostępnej na stronie Centrum Mediów. Jeśli prześlesz kilka zdjęć to wszystkie one będą wyświetlane w wynikach wyszukiwania, nagłówkach etc jako mini slajd.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Co to są ikony cech przedmiotów rezerwacji?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Cechy przedmiotów rezerwacji to funkcjonalność dostępna gdy korzystasz z rozszerzonego lub zaawansowanego trybu edycji cen. Cechy te mogą być powiązane z jednym lub wieloma przedmiotami rezerwacji (np. żelazko w pokoju lub klimatyzacja w samochodzie). Ikony wizualizujące daną cechę przedmiotu rezerwacji  dodasz w Centrum Ofert wybierając z listy rozwijanej Ikony cech przedmiotów rezerwacji, a następnie cechę oferty dla jakiej chcesz przesłać grafikę.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Jak dodać zdjęcia przedmiotu rezerwacji?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', 'Zdjęcia dla przedmiotów rezerwacji mogą być dodawane jeśli korzystasz z rozszerzonego lub zaawansowanego trybu edycji cen. Po stworzeniu przedmiotów rezerwacji dla oferty przejdź do Ustawienia > Centrum Mediów. Z listy rozwijanej wybierz Zdjęcia przedmiotów rezerwacji a następnie numer przedmiotu rezerwacji dla jakiego chcesz dodać zdjęcia. Jeśli dodasz więcej niż jedno zdjęcie będą one wyświetlane jako pokaz slajdów na stronie prezentacji danego przedmiotu rezerwacji, miniaturka będzie wyświetlana w kilku innych jeszcze miejscach np. na stronie rezerwacji.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Gdzie widoczne są zdjęcia pokazu slajdów?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Zdjęcia pokazu slajdu wyświetlane są na stronie ze szczegółami oferty obok przycisku umożliwiającego złożenie rezerwacji lub przesłanie zapytania.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Jak dodać zdjęcia dla opcji dodatkowych?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', 'Analogicznie jak dla zdjęć przedmiotów rezerwacji czy cech przedmiotów rezerwacji należy utworzyć opcję dodatkową a następnie w Centrum Mediów należy wybrać z listy rozwijanej Zdjęcia opcji dodatkowych i wybraną opcję dodatkową. Po określeniu tych parametrów można skorzystać z dostępnych przycisków i załadować z dysku swojego urządzenia zdjęcia dla opcji dodatkowej.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES_SETUP', 'Jak skonfigurować symbole walut?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES_SETUP', 'Nie ma takiej konieczności. Wszystkie symbole walut dostępne są już w systemie. Menadżer oferty konfigurując swoją ofertę definiuje dla niej symbol waluty dla cen i rozliczeń.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_CURRENCIES', 'Jak włączyć wiele walut?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_CURRENCIES', 'Jomres posiada system konwersji walut z jednej na drugą. Funkcjonalność można skonfigurować w panelu administracyjnym w Konfiguracji systemu po wybraniu zakładki Waluta. Dostępne są tu dwie opcje. Pierwsza z nich po wprowadzeniu klucza API pozwala Jomres na pobranie raz dziennie kursów walut. Druga z dostępnych tu opcji pozwala na geolokalizację użytkowników po ich IP i na dostosowanie wyświetlania waluty dostosowanej do lokalizacji potencjalnego klienta. Darmowe klucze API należy uzyskać od dwóch systemów z jakimi został zintegrowany Jomres i które są tu wymienione. Jeśli nie skorzystasz z dostępnych tu funkcji wyświetlana będzie globalna waluta systemu lub waluta zdefiniowana przez Menadżera dla jego oferty.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Jak zapisać opisy w wielu językach?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', 'Jeśli chcesz dodać opisy w wielu językach przejdź do Ustawienia > Szczegóły oferty. Dodaj opis i zapisz wprowadzone zmiany. Następnie wybierz inny z dostępnych języków i po przeładowaniu strony dodaj opis w tym wybranym języku. Funkcjonalność działa w taki sposób dla wszystkich dostępnych języków. Dodawany opis jest zawsze do aktualnie wybranej oferty dla wybranego języka w jakim przeglądasz stronę.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_PROPERTIES_NUMBER', 'Ile ofert może zostać wyświetlonych na liście?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_PROPERTIES_NUMBER', 'Nie ma zdefiniowanego limitu wyświetlanych ofert. Jedynym ograniczeniem są fizyczne możliwości serwera. Im lepszy serwer tym sprawniejsze działanie funkcji.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Czy można zmodyfikować inne oferty w systemie?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nie, nie możesz. Można administrować wyłącznie utworzonymi przez siebie ofertami i ofertami dla których zostały nadane uprawnienia Menadżera danej oferty.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Czy można zmodyfikować inne oferty w systemie?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', 'Tak, możesz. Jesteś Super Menadżerem dla ofert i możesz zmieniać ich dostępne ustawienia.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Jakie są typy klientów i jak zdefiniować płatność za osobę za noc?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', 'W konfiguracji systemu można zdefiniować sposób naliczania płatności czy ma to być za nocleg/dzień czy za osobę. Wybierając opcję Za osobę będzie trzeba zdefiniować rodzaje klientów w Ustawienia > Rodzaje klientów. Możesz określić rodzaje klientów bardzo ogólnie np. Klient lub opisowo np. Osoby dorosłe, Dzieci do lat 13 etc. Następnie będzie istniała możliwość definiowania cen w oparciu o rodzaje klientów. Funkcjonalność ta umożliwia np. oferowanie 50% rabatu dla dzieci etc.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Co to są cechy przedmiotów rezerwacji?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', 'Cechy przedmiotów rezerwacji są to rzeczy, które pozwalają Ci na wyróżnienie się. Mogą to być rzeczy takie jak dostępny w apartamencie ekspres do kawy czy widok na zatokę etc. Zastanów się co wyróżnia, dodaje wartości Twojej ofercie. Następnie po stworzeniu (dodaniu) cechy przedmiotu rezerwacji możesz dodać do niej zdjęcie w Centrum Mediów. Cechy przedmiotów rezerwacji wyświetlane są na stronie dostępności przedmiotu rezerwacji czy na podglądzie danego przedmiotu rezerwacji na etapie rezerwacji. Można również po cechach przedmiotów rezerwacji wyszukiwać do rezerwacji oferty najbardziej odpowiednie.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_PROFILES', 'Czy można zrobić użytkownika Menadżerem oferty?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_PROFILES', 'Tak można, na stronie administracyjnej w sekcji użytkowników Jomres. Jeśli użytkownik jest już zarejestrowany, w dostępnym tu polu edycyjnym wprowadź pierwsze litery nazwy użytkownika. Wyświetleni poniżej zostaną wyszukani w systemie użytkownicy. Kliknij nazwę na wybranego użytkownika a otwarta zostanie strona, która umożliwia nadanie uprawnień użytkownikowi w ramach systemu Jomres i przypisanie go do wybranych ofert. Jeśli dany użytkownik nie istnieje w systemie należy go dodać z wykorzystaniem odpowiednich funkcji systemu CMS. Zalecany jest wariant rejestracji użytkowników i dodawania przez nich ofert w systemie po stronie frontowej systemu.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PLUGINS', 'Dodatki');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS', 'Co to jest Plugin Manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS', 'Plugin Manager jest kluczowym narzędziem w Jomres. Pozwala nam na dystrybucję do Was najnowszych wersji dodatków Jomres oraz na ich instalacje i aktualizację.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_IONCUBE', 'Dlaczego widzę ostrzeżenie Ioncube Loaders na stronie Plugin Manager?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_IONCUBE', "Zapisany jest klucz licencji Trial w konfiguracji systemu, ale Twój serwer nie posiada zainstalowanej najnowszej wersji Ioncube Loaders. Należy skontaktować się z dostawcą usługi hostingowej i poprosić o instalację / aktualizację komponentu serwera <a href='http://www.ioncube.com/loaders.php' target='_blank'>z tej strony</a>. Jeśli posiadasz klucz licencji bez subskrypcji, to problemem może być jego brak lub błędne jego wprowadzenie na stronie konfiguracji Jomres.");
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_GENERAL_PLUGINS_INSTALLATION', 'Jak zainstalować dodatek?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_GENERAL_PLUGINS_INSTALLATION', 'Zakładając, że masz aktualny klucz licencji wprowadzony w konfiguracji systemu Jomres wszystko co musisz zrobić to kliknąć przycisk Instaluj obok nazwy dodatku w sekcji Plugin Manager. Instalator Jomres auto-magicznie przeprowadzi proces instalacji dodatku i wróci na stronę główną Plugin Managera. W przypadku niektórych z dodatków może nastąpić przekierowanie do instalatora Joomla. W takim przypadku będzie trzeba zainstalować go z poziomu tego właśnie instalatora.<br/><br/>Uwaga: Nie należy instalować wszystkich dodatków, niektóre z nich wykluczają się wzajemnie i może to prowadzić do wystąpienia błędów.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_SITESTRUCTURE', 'Struktura serwisu');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_INTRO', 'Co to jest struktura serwisu?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_INTRO', 'Struktura serwisu w Jomres odnosi się do różnych elementów witryny, które czynią ją wyjątkową. Definiuje typy ofert (np. wille czy hotele) i rodzaje przedmiotów rezerwacji (np. cała willa lub pokój w hotelu) dla tych ofert. Dla ułatwienia zrozumienia idei funkcjonalności struktury serwisu po instalacji Jomres dostępne są przykładowe dane. Struktura serwisu określa również czy typem oferty jest możliwość jej rezerwacji w całości (np. rezerwacja całej willi) czy pod składników oferty (przedmiotów rezerwacji np. w hotelu: pokój dla dwóch osób, pokój dla trzech osób etc). W przypadku ofert typu wycieczki, sprzedaż biletów etc nie ma konieczności tworzenia przedmiotów rezerwacji.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYTYPES', 'Co to są typy ofert?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYTYPES', 'W tym systemie typ oferty odnosi się do, dosłownie, typów ofert. Może to być hotel, willa, apartament, mieszkanie etc. Menadżerzy ofert nie mają możliwości tworzenia typów ofert. Dla zachowania schludnej struktury serwisu, typy ofert mogą zostać stworzone wyłącznie przez głównego administratora serwisu.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURES', 'Co to są cechy ofert?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURES', 'Cechy ofert to elementy, które sprawiają, że oferta jest unikatowa. Dla przykładu jedna z ofert np. hotel może być usytuowany blisko plaży inny natomiast może posiadać widok z okien na góry. Menadżerowie ofert nie mogą dodawać nowych cech ofert, taką możliwość mają wyłącznie administratorzy serwisu. Aby dodać cechę oferty należy wybrać jedną z dostępnych opcji na stronie cech ofert. W celu dodania zdjęcia (ikony) do cechy oferty należy w pierwszej kolejności przesłać ją na serwer z wykorzystaniem Centrum Mediów > Ikony cech ofert.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'Co to są kategorie cech ofert?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_PROPERTYFEATURECATEGORIES', 'Cechy oferty wyświetlane są między innymi na stronie szczegółów oferty. Dla lepszej przejrzystości poszczególne cechy oferty można pogrupować w odpowiednie kategorie.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_ROOMFEATURES', 'Co to są cechy przedmiotów rezerwacji?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_ROOMFEATURES', 'Cechy przedmiotów rezerwacji są to rzeczy, które pozwalają Menadżerowi oferty na wyróżnienie się. Mogą to być rzeczy takie jak dostępny w apartamencie ekspres do kawy czy widok na zatokę etc. Po stworzeniu (dodaniu) cechy przedmiotu rezerwacji można dodać do niej zdjęcie w Centrum Mediów. Cechy przedmiotów rezerwacji wyświetlane są na stronie dostępności przedmiotu rezerwacji czy na podglądzie danego przedmiotu rezerwacji na etapie rezerwacji. Można również po cechach przedmiotów rezerwacji wyszukiwać do rezerwacji oferty najbardziej odpowiednie.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_SITESTRUCTURE_COUNTRIES', 'Dlaczego dostępna jest strona do edycji krajów/regionów?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_SITESTRUCTURE_COUNTRIES', 'Można by pomyśleć, że lista krajów czy regionów jest niezmienna. Z doświadczenia jednak wiemy, że tak nie jest. Ta funkcjonalność pozwala na dostosowanie wyświetlania krajów i ich regionów do aktualnych stanów i potrzeb administratora systemu Jomres.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_LOCALISATION', 'Tłumaczenia');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_LOCALISATION_INTRO', 'Jak tłumaczyć różne rzeczy?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_LOCALISATION_INTRO', 'Tłumaczenia etykiet (ciągów językowych) możliwe jest dzięki funkcjonalności dostępnej w menu Tłumaczenia. Ponieważ pliki językowe są dosyć duże proces wczytywania pliku może chwilkę potrwać.<br/><br/>Jak tłumaczyć opiszemy na przykładzie. Jeśli chcesz zmienić jakiś ciąg językowy na inny klikasz w dany ciąg i podmieniasz go na nowy. Podmieniony ciąg językowy zostanie podmieniony dla wersji językowej Jomres jaką masz wybraną w górnej części strony. Jeśli chcesz zmienić ciąg językowy dla innej wersji językowej musisz wybrać z listy rozwijanej inną wersję językową i zmienić ciąg językowy dla tej kolejnej wersji językowej.<br/><br/>Jeśli w konfiguracji serwisu włączona jest możliwość edycji ciągów językowych na stronie frontowej to również i Menadżerowie ofert mogą edytować / zmieniać ciągi językowe im wyświetlane. Zmieniane są one jednak tylko w obrębie oferty danego menadżera oferty.');
jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_TOURS', 'Wycieczki/Bilety');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_INTRO', 'Co to są wycieczki?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_INTRO', 'To może brzmieć jak głupie pytanie, ale w rzeczywistości tak nie jest. Przez lata nauczyliśmy się, że różne kultury mają różne wyobrażenia tego, co to są wycieczki. W rezultacie w odniesieniu do systemu rezerwacyjnego konieczne staje się rozwikłanie tej zagadki.<br/><br/>Wycieczki to może być podróż (bardziej rozbudowany, dłuższy wyjazd) lub tylko krótka wycieczka (wyjazd na kilka godzin by zwiedzić jakiś obiekt).');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_HOWTOSELL', 'Jak używać Jomres do sprzedaży wycieczek?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_HOWTOSELL', 'Na początek należy zainstalować dodatek Jintour. Ten dodatek pozwala na dodanie wycieczki jako składnika oferty np. hotelu lub jako zupełnie autonomiczną ofertę będącą wyłącznie tego typu typem oferty. Po instalacji dodatku z poziomu strony frontowej systemu będzie można dodawać wycieczki i tworzyć oferty tego typu.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_WHATISJINTOUR', 'Co to jest za dodatek Jintour?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_WHATISJINTOUR', 'Jintour jest skrótem od Jomres zintegrowane wycieczki. Dodatek ten umożliwia na sprzedaż wycieczek na etapie rezerwacji np. miejsca w hotelu lub zupełnie autonomicznych wycieczek. Możliwości dodatku są szersze. Dzięki temu dodatkowi na etapie rezerwacji np. miejsca w hotelu można sprzedać/wypożyczyć narty czy rower lub inny produkt jaki mamy potrzebę oferować w powiązaniu z naszą ofertą.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_SAMEBOOKING', 'Jak sprzedać wycieczkę i wynająć pokój w ramach tej samej rezerwacji?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_SAMEBOOKING', 'W tym scenariuszu masz hotel, i chcesz sprzedać wycieczki do lokalnych atrakcji. Zaloguj się na froncie serwisu i przejdź do utworzonego przez siebie hotelu. Następnie kliknij na Ustawienia > Wycieczki. Na tej stronie postępuj zgodnie z instrukcjami wyświetlanymi na ekranie, aby najpierw utworzyć profil wycieczki, a następnie wygenerować wycieczki. Gdy to zrobisz, będziesz w stanie sprzedawać zarówno wycieczki i rezerwacje pokoju oraz opcjonalne dodatki obok siebie w jednym formularzu rezerwacji.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_STANDALONETOURS', 'Co zrobić jeśli chcę sprzedawać wyłącznie wycieczki?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_STANDALONETOURS', 'Najpierw należy utworzyć nową ofertę na stronie frontowej serwisu definiując jej rodzaj jako Wycieczki. Po dodaniu tej nowej oferty będzie można z poziomu Ustawienia > Wycieczki dodać nowe profile wycieczek i nowe wycieczki. Będzie istniała również możliwość oferowania opcji dodatkowych. Rzeczy, które nie będą dostępne to przedmioty rezerwacji czy systemy konfiguracji taryf, które nie są dostępne w tym typie oferty bo nie ma takiej potrzeby.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TOURS_GLOBALTOURS', 'Jak można utworzyć wycieczki/rezerwacje zasobów, które będą widoczne we wszystkich formularzach rezerwacji?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TOURS_GLOBALTOURS', 'W tym celu należy skorzystać z możliwości wygenerowania profili wycieczek po stronie administracyjnej serwisu. W takiej sytuacji wygenerowane na zapleczu profile wycieczek będą dostępne na stronie frontowej we wszystkich przypadkach. Sytuacja taka może być przydatna jeśli hotel chce sprzedawać wycieczki w różnych miejscach etc.');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_INTRODUCTION_FIRSTTHINGSFIRST', 'OK, zainstalowałem Jomres, co dalej?');
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_INTRODUCTION_FIRSTTHINGSFIRST', 'Bardzo zalecaną rzeczą na początek pracy z Jomres jest zapoznanie się z dokumentacją. Skorzystaj z dostępnych opcji pomocy i dostępnej tu dokumentacji a przekonasz się, że początek będzie sprawny i prosty.');
jr_define('_JOMRES_MANAGE_PROPERTIES', 'Zarządzanie ofertami');
jr_define('_JOMRES_CONFIG_IPINFODB_KEY_WARNING', "Nie masz ustawionego klucza API wykrywania IP użytkownika. Jest to wymagane, aby system mógł automatycznie wykryć lokalizację użytkownika i automatycznie ustawić jego kraj i walutę. Prosimy <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>zobacz naszą stronę pomocy odnośnie tworzenia klucza API dla wykrywania IP użytkownika</a> i zapisz klucz API w Jomres > Konfiguracja systemu > Waluta.");
jr_define('_JOMRES_CONFIG_OPENEXCHANGERATES_KEY_WARNING', "Nie masz ustawionego klucza API dla systemu konwersji walut. Jest to wymagane, aby system mógł automatycznie pobierać do systemu aktualne kursy walut i prawidłowo wyświetlać ceny w serwisie. Prosimy <a href='http://www.jomres.net/manual/site-managers-guide/35-control-panel/main/site-configuration/128-site-configuration-currency-conversion-currency-codes-tab' target='_blank'>zobacz naszą stronę pomocy odnośnie tworzenia klucza API dla pobierania kursów walut</a> i zapisz klucz API w Jomres > Konfiguracja systemu > Waluta.");
jr_define('_JOMRES_PERMIT_NUMBER_TITLE', 'Numer pozwolenia');
jr_define('_JOMRES_PERMIT_NUMBER_DESCRIPTION', 'W niektórych krajach przepisy prawa wymagają na podanie numeru pozwolenia dla oferty.');
jr_define('_JOMRES_SHORTCODES', 'Shortcodes');
jr_define('_JOMRES_SHORTCODES_INFO_JOOMLA', 'Dodatek <strong>plg_content_jomres_asamodule_mambot</strong> musi być zainstalowany i włączony dla tej funkcjonalności. Jeśli serwis został zbudowany w oparciu o pakiet startowy Jomres to prawdopodobnie wszystko jest w porządku.');
jr_define('_JOMRES_SHORTCODES_INFO_WORDPRESS', "Dodatek <strong>'Jomres Shortcodes'</strong> musi być zainstalowany i włączony dla tej funkcjonalności. Jeśli serwis został zbudowany w oparciu o pakiet startowy Jomres to prawdopodobnie wszystko jest w porządku.");
jr_define('SHORTCODE_TASK', 'Zadania');
jr_define('SHORTCODE_DESCRIPTION', 'Opis');
jr_define('SHORTCODE_ARGUMENTS', 'Argumenty');
jr_define('SHORTCODE_EXAMPLE', 'Przykład');
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
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'If this guest is black listed then they will no longer be able to make bookings in this property.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
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
