<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 9
* @package Jomres
* @copyright	2005-2013 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
* @Polska adaptacja Patryk Doering - http://www.rekinet.pl - kontakt@rekinet.pl
* @Aktualizacja wersji językowej z 27-05-2016r.
**/

##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

jr_define('_JOMRES_COM_MR_QUICKRESDESC','Bezpośrednia rezerwacja');
jr_define('_JOMRES_COM_MR_SHOWPROFILES','Użytkownicy');
jr_define('_JOMRES_COM_MR_QUICK______DESC','Zostawić puste');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC','Konfiguracja systemu');
jr_define('_JOMRES_COM_MR_BACK','Wróć');
jr_define('_JOMRES_COM_MR_YES','Tak');
jr_define('_JOMRES_COM_MR_NO','Nie');
jr_define('_JOMRES_COM_MR_NEWTARIFF','Dodaj');
jr_define('_JOMRES_COM_MR_NEWPROPERTY','Nowa oferta');
jr_define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nowa cecha oferty');
jr_define('_JOMRES_COM_MR_NEWGUEST','Nowy klient');
jr_define('_JOMRES_COM_MR_SAVE','Zapisz');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nazwisko');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Rezerwacja od');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Rezerwacja do');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Puste');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Prawa dostępu dla użytkownika');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nazwa użytkownika');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Imię i nazwisko');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Obecnie autoryzowany');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Oferta domyślna');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Zmień');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Prawa dostępu');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Użytkownik został zmieniony.');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','Nie wymagane');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcja');
jr_define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Manager ofert');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Lista rezerwacji');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nowe rezerwacje');
jr_define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Edycja');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Terminy rezerwacji');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Klient');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Zasób');
jr_define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Płatności');
jr_define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Imię');
jr_define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nazwisko');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Informacje dla personelu');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Uwaga! Proszę zauważyć, że dodatkowe usługi dla tej rezerwacji wiązać mogą się z naliczeniem dodatkowych kosztów.');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Anulowanie rezerwacji');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miejscowość');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
jr_define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-mail');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Rezerwacja nie może zostać anulowana, klient już dotarł.');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Anuluj rezerwację');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potwierdź anulowanie rezerwacji');
jr_define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezerwacja została anulowana.');
jr_define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dni do początku rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Rodzaj rezerwacji');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Wyłączenie');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcja');
jr_define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
jr_define('_JOMRES_COM_MR_EB_ROOM_NAME','Nazwa zasobu');
jr_define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Nr zasobu');
jr_define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Piętro');
jr_define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Dla niepełnosprawnych');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maks klientów');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Zasób');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis zasobu');
jr_define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista cech ofert');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Wpłacony zadatek');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Wysokość zadatku');
jr_define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Koszt rezerwacji');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Uwagi do zadatku');
jr_define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Nr rezerwacji');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Wysokość zadatku');
jr_define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Zadatek został zapisany.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Zasoby');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Oferta');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Zasób');
jr_define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edycja');
jr_define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Imię');
jr_define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nazwisko');
jr_define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr domu');
jr_define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
jr_define('_JOMRES_COM_MR_DISPGUEST_TOWN','Miejscowość');
jr_define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Kod pocztowy');
jr_define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon komórkowy');
jr_define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Nr karty kredytowej');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Ważna od');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Ważna do');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Wydana');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Właściciel karty');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Wybór cennika');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Ilość dni');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Ilość klientów');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Razem');
jr_define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Ceny i zasoby');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Zasób');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Zasób');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Oferta');
jr_define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Rodzaj');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nazwa');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nr');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Piętro');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Dla niepełnosprawnych');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maks klientów');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Cechy zasobu');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Zasób został dodany.');
jr_define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edycja');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Cechy');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Zapisz cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Zapisz zmiany cech oferty');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Nazwa zasobu');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Opis zasobu');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Zapisz zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Aktualizuj zasób');
jr_define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edycja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nazwa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Miejscowość');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Województwo');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Kraj');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Kod pocztowy');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon stacjonarny');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-mail');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Strona WWW');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Zapisz dane oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Dane oferty zostały pomyślnie zaktualizowane.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Nazwa zasobu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Opis cechy ofert');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Zapisz cechę oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Aktualizuj cechę oferty');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Konfigurator cen');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Ważny od dnia');
jr_define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Ważny do dnia');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Cena za dobę');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimum dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maks dni');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimum klientów');
jr_define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maks klientów');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Zasób');
jr_define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignoruj warunek za osobę za dobę');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Weekendy dozwolone');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Dodaj cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Aktualizuj cennik');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edycja');
jr_define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Dodaj jako kopię');
jr_define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Cennik został usunięty.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edycja cennika');
jr_define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Dni świąteczne');
jr_define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezerwacja została zapisana.');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezerwacja');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Zameldowanie klienta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Wymeldowanie klienta');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Lista rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Nowe rezerwacje');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Pulpit rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Zestawienia klientów');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Edycja ofert');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Przejdź do kolejnego kroku');
jr_define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Zatwierdź dane');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Imię');
jr_define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nazwisko');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr domu');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miejscowość');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon stacjonarny');
jr_define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
jr_define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Niestety obecnie nie są dostępne oferty spełniające określone kryteria. Proszę zmienić wybrane parametry oferty.');
jr_define('_JOMRES_FRONT_MR_BOOKINGMADE','<h3>Dziękujemy. Rezerwacja została przyjęta.</h3><br />Wszystkie informacje zostały przesłane na podany w formularzu adres e-mail.<br /><br /><small>Prosimy wziąć pod uwagę, że ta rezerwacja jest tymczasowa i dopiero po otrzymaniu zadatku w określonej kwocie przelewem bankowym lub dokonaniu wpłaty w systemie płatności elektronicznych będzie wiążąca dla obu stron.</small><br />');
jr_define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezerwacja internetowa:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezerwacja dla:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Rezerwacja od:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Rezerwacja do:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nazwisko:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon stacjonarny:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon komórkowy:');
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Łączna cena:');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Zameldowanie klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Wybór klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Zamelduj klienta');
jr_define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','W dniu dzisiejszym nie ma żadnych rozpoczynających się rezerwacji klientów.');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Wymeldowanie klienta');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','W dniu dzisiejszym nie ma żadnych kończących się rezerwacji klientów.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS','Dopłaty');
jr_define('_JOMRES_COM_A_TARIFFS','Ceny');
jr_define('_JOMRES_COM_A_DISCOUNTS','Rabaty');
jr_define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Transfer plików');
jr_define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktualne ustawienia');
jr_define('_JOMRES_COM_A_EXPLANATION','Objaśnienie');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Dopłata do zasobu dla jednej osoby');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Zaznacz Tak, jeżeli ma być pobierana dopłata.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Wysokość dopłaty:');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Zadatek obliczany procentowo');
jr_define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Jeżeli Nie, to będzie obliczany w sposób ryczałtowy.');
jr_define('_JOMRES_COM_A_DEPOSIT_VALUE','Wysokość zadatku');
jr_define('_JOMRES_COM_A_TARIFFS_PER','Za osobę za dobę');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC','Jeżeli Nie, cena będzie obliczana za zasób za dobę.');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE','Wielkość pliku');
jr_define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maksymalna wielkość pliku w KB.');
jr_define('_JOMRES_FRONT_MR_BOOKED','Zajęty');
jr_define('_JOMRES_COM_CONFIRMATION_TITLE','E-mail potwierdzający');
jr_define('_JOMRES_COM_CONFIRMATION_DEAR','Sz.P.');
jr_define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za dobę za zasób');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Termin rezerwacji:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Dziękujemy za wybór naszej oferty i rezerwację w ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Poniżej znajduje się podsumowanie złożonej rezerwacji. Prosimy o dokładne jej sprawdzenie. Jeżeli wystąpił jakiś błąd, prosimy o kontakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Nasza doba hotelowa trwa od 14:00 do 10:00 dnia następnego. Zamldowanie w godzinach od 14:00 do 20:00. W razie spodziewanego późniejszego przyjazdu prosimy o kontakt.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Cieszymy się i oczekujemy przyjazdu ');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Już teraz życzymy zadowolenia z wyboru naszej oferty.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Proszę uważnie przeczytać:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Zwracamy uwagę na fakt, że ta rezerwacja jest wiążącą umową. Oznacza to, że w przypadku rezygnacji Klient może zostać obciążony kosztami w pełnej wysokości ceny rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Za nieskorzystanie z oferty nie może zostać wypłacony zwrot. Z tego powodu sugerujemy zawarcie specjalnego ubezpieczenia. Oferuje je większość biur podróży, agentów ubezpieczeniowych, są również dostępne w ofertach banków.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','Warunki zmiany lub anulowania rezerwacji. W wypadku anulowania rezerwacji, musi być ona dokonana w formie pisemnej. Poniżej znajduje się zestawienie związanych z tym kosztów:');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Wcześniej niż 30 dni przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','Tylko wpłacone zadatki.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dni przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% łącznej wartości rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Od 14 dnia przed zarezerwowanym terminem');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','100% łącznej wartości rezerwacji.');
jr_define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Wszystkie ceny zawierają podatek VAT.');
jr_define('_JOMRES_COM_CONFIRMATION_PRINT','Drukuj potwierdzenie rezerwacji');
jr_define('_JOMRES_COM_INVOICE_TITLE','Wydruk faktury');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS','Ilość dób:');
jr_define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Zakontraktowana kwota wyjściowa:');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za dobę:');
jr_define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Suma:');
jr_define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Dziękujemy serdecznie.');
jr_define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Mamy nadzieję, że nasza oferta spełniła wszystkie Pani/Pana oczekiwania.');
jr_define('_JOMRES_COM_INVOICE_PRINT','Drukuj fakturę');
jr_define('_JOMRES_COM_ADDSERVICE_TITLE','Nowa pozycja rachunku');
jr_define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis');
jr_define('_JOMRES_COM_ADDSERVICE_VALUE','Cena');
jr_define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Dodatkowe pozycje');
jr_define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Suma dodatkowych pozycji:');
jr_define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Dodaj pozycje do rachunku');
jr_define('_JOMRES_UPLOAD_IMAGE','Zapisz zdjęcie');
jr_define('_JOMRES_FILE_UPLOAD','Transfer wybranych plików na serwer');
jr_define('_JOMRES_FILE_ERROR_TYPE','Plik może mieć format:');
jr_define('_JOMRES_FILE_ERROR_EMPTY','Proszę wybrać plik.');
jr_define('_JOMRES_FILE_ERROR_NAME','Nazwa pliku może zawierać tylko znaki a-z, A-Z, 0-9, proszę nie używać spacji w nazwach plików.');
jr_define('_JOMRES_FILE_ERROR_SIZE','Ten plik jest niestety większy niż dopuszczalny rozmiar pliku.');
jr_define('_JOMRES_FILE_NOT_UPLOADED','Plik nie został zapisany na serwerze.');
jr_define('_JOMRES_FILE_UPDATED','Plik został pomyślnie zaktualizowany na serwerze.');
jr_define('_JOMRES_COM_A_JSCALENDAR','Kalendarz');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE','Język kalendarza');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Ustaw używaną wersję językową kalendarza.');
jr_define('_JOMRES_COM_A_CALENDARCSS','Plik CSS kalendarza');
jr_define('_JOMRES_COM_A_CALENDARCSS_DESC','Ustaw plik CSS kalendarza.');
jr_define('_JOMRES_COM_A_ODDS','Pozostałe');
jr_define('_JOMRES_COM_A_ERRORCHECKING','Lista przekierowań');
jr_define('_JOMRES_COM_A_ERRORCHECKING_DESC','Ustaw na Tak, aby zobaczyć dziennik wyświetlany na dole strony po zakończeniu uruchomionej funkcji Jomres. Zostanie również wyłączone wewnętrzne przekierowanie funkcji. Jest to przydatne jeśli próbujesz określić, który plugin wykonuje jakie funkcje.');
jr_define('_JOMRES_FILE_DELETE','Usuń zdjęcie');
jr_define('_JOMRES_FILE_DELETED','Zdjęcie zostało usunięte.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY','Wszystkie oferty');
jr_define('_JOMRES_COM_MR_ROOM_DELETE','Usuń');
jr_define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nie można usunąć tego zasobu, ponieważ został już zarezerwowany. Proszę anulować rezerwacje i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOM_DELETED','Zasób został usunięty.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Usuń ustawienia zasobu');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wykorzystójące te ustawienia i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Ustawienia zasobu zostały usunięte.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Usuń ustawienia oferty');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wyKorzystójące te ustawienia i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Ustawienia oferty zostały usunięte.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Usuń zasób');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Ten zasób nie może zostać usunięty, ponieważ istnieją zasoby, które są do niego przypisane. Proszę przypisać zasoby do innego zasobu i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Ten zasób nie może zostać usunięty, ponieważ istnieje cennik do którego jest przypisany. Proszę przypisać ten cennik do innego zasobu i spróbować ponownie.');
jr_define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Zasób został usunięty.');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE','Usuń ofertę');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETED','Oferta została usunięta.');
jr_define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Ta oferta nie może zostać usunięta. Nie posiadasz wystarczających uprawnień.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Szerokość dużego zdjęcia');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Mapa');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Zameldowanie w godzinach');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Atrakcje w okolicy');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Opis dojazdu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Lotniska w pobliżu');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Dodatkowa komunikacja');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Warunki regulaminu');
jr_define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adres');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Możliwa rezerwacja online');
jr_define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Ustaw na Tak, jeśli chcesz umożliwić rezerwację online.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Stała długość pobytu');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Ustaw na Tak, jeżeli rezerwacja ma być możliwa tylko na z góry ustawiony czas.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD','Stała długość rezerwacji');
jr_define('_JOMRES_COM_A_BOOKING','Rezerwacje');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maks cyklicznych rezerwacji, np: 3 x 7 cykli = 21 dni.');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Rezerwacja jednego zasobu?');
jr_define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Tak dla wynajmowanego całego np. apartamentu, domku letniskowego. Nie dla zasobóww hotelu, pensjonacie.');
jr_define('_JOMRES_FRONT_MR_REVIEWBOOKING','Sprawdź rezerwację');
jr_define('_JOMRES_COM_MR_CONFIRMBOOKING','Potwierdź rezerwację');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Poniedziałek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Wtorek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Środa');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Czwartek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Piątek');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sobota');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Niedziela');
jr_define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pn');
jr_define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Wt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Śr');
jr_define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Cz');
jr_define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pt');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','So');
jr_define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Nd');
jr_define('_JOMRES_COM_A_AVLCAL','Kalendarz');
jr_define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Kolor czcionki aktualnego dnia');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE','Kolor czcionki aktualnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Kolor czcionki wcześniejszego i następnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Kolor pól dni aktualnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Kolor pól dni wcześniejszego i następnego miesiąca');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Kolor pól zarezerwowanych dni');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Kolor pól wolnych dni');
jr_define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Kolor pól minionych dni');
jr_define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zajęty');
jr_define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Wolny');
jr_define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Rezerwacja niepotwierdzona');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Startowy dzień rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Dla stałych okresów rezerwacji wybierz dzień tygodnia, będący pierwszym dniem rezerwacji.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Rezerwacje od dnia');
jr_define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Okres rezerwacji');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Pokaż kalendarz rezerwacji');
jr_define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ustaw Tak, jeżeli kalendarz rezerwacji ma być widoczny.');
jr_define('_JOMRES_FRONT_AVAILABILITY','Dostępność');
jr_define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Aby przejść do formularza rezerwacji proszę kliknąć na wybraną datę.');
jr_define('_JOMRES_FRONT_BLACKBOOKING','Wyłączenie rezerwacji');
jr_define('_JOMRES_FRONT_BLACKBOOKING_NEW','Dodaj');
jr_define('_JOMRES_FRONT_DELETEGUEST','Usuń gościa');
jr_define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Klient został usunięty.');
jr_define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Ten klient nie może zostać usunięty. Istnieją dane, które są do niego przypisane i to najpierw one muszą zostać usunięte.');
jr_define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktualny koszt zasobu:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Witamy!');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Dziękujemy bardzo za rezerwację na');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Zestawienie danych rezerwacji:');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Jeżeli ma Pan/Pani jakieś pytanie odnośnie tej rezerwacji, prosimy o kontakt telefoniczny.');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nasz numer telefonu');
jr_define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Może Pan/Pani skontaktować się także przez e-mail.');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Dla palaczy');
jr_define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Obojętne');
jr_define('_JOMRES_COM_CALENDAROUTPUT','Format daty');
jr_define('_JOMRES_COM_CALENDAROUTPUT_DESC','Tutaj można zmienić format daty w kalendarzu.');
jr_define('_JOMRES_COM_CALENDARINPUT','Format dodawania daty z kalendarza');
jr_define('_JOMRES_COM_CALENDARINPUT_DESC','Tutaj można zmienić format dodawania daty z kalendarza.');
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Stosowanie przerw w kalendarzu dla stałych okresów rezerwacji.');
jr_define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Ilość dni przerwy');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISHED','Opublikuj');
jr_define('_JOMRES_COM_A_PAYPAL','PayPal');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Podsumowanie');
jr_define('_JOMRES_MR_AUDIT_LISTING_DATE','Data');
jr_define('_JOMRES_MR_AUDIT_LISTING_TIME','Godzina');
jr_define('_JOMRES_MR_AUDIT_LISTING_USER','Użytkownik');
jr_define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacja');
jr_define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Pokaż szczegóły');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtruj wg daty');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtruj wg użytkownika');
jr_define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtruj wg operacji');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Oczekiwanie na przyjazd');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Dzisiaj przyjeżdża');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Klient obecny');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Dzisiaj wyjeżdża');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Przeterminowany wyjazd');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Klient nie dotarł');
jr_define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nieznany użytkownik');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM','Zasób został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Zasób został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM','Zasób został usunięty.');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Cecha oferty została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Cecha oferty została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Cecha oferty została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Kategoria zasobu została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Kategoria zasobu została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Kategoria zasobu została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Oferta została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Oferta została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Oferta została usunięta.');
jr_define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Ustawienia oferty zostały utworzone.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Ustawienia oferty zostały zaktualizowane.');
jr_define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Ustawienia oferty zostały usunięte.');
jr_define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Ustawienia oferty zostały zmienione.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Oferta została opublikowana.');
jr_define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Cennik został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Cennik został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Cennik został usunięty.');
jr_define('_JOMRES_MR_AUDIT_ADDSERVICE','Cena opcji dodatkowej została dodana.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Klient został zameldowany.');
jr_define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Klientzostał wymeldowany.');
jr_define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Dodaj zadatek');
jr_define('_JOMRES_MR_AUDIT_INSERT_GUEST','Klient został dodany.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Klient został zaktualizowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_GUEST','Klient został usunięty.');
jr_define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Zasób został zarezerwowany.');
jr_define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Usługa dodatkowa została utworzona.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Usługa dodatkowa została zaktualizowana.');
jr_define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Usługa dodatkowa została usunięta.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Usługa dodatkowa została opublikowana.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING','Wyłączenie rezerwacji zostało wprowadzone.');
jr_define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Wyłączenie rezerwacji zostało usunięte.');
jr_define('_JOMRES_COM_MR_EXTRA_TITLE','Opcje dodatkowe');
jr_define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
jr_define('_JOMRES_COM_MR_EXTRA_NAME','Nazwa');
jr_define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
jr_define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Opcje dodatkowe zostały zaktualizowane.');
jr_define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edycja');
jr_define('_JOMRES_COM_MR_EXTRA_DELETED','Opcja dodatkowa została usunięta.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Opcje dodatkowe');
jr_define('_JOMRES_COM_A_EXTRAS','Opcje dodatkowe dla rezerwacji');
jr_define('_JOMRES_COM_A_EXTRAS_DESC','Ustaw Tak, aby oferować opcje dodatkowe na etapie rezerwacji.');
jr_define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Opcje dodatkowe');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Wyłączenie od');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Wyłączenie do');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Edycja wyłączenia rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Przy próbie wyłączenia zasobu doszło do błędu. Jeden lub więcej z nich nie jest wolny.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Zasoby wybrane do wyłączenia');
jr_define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Pokaż wyłączenie rezerwacji');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nie ma żadnych wyłączeń.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Ilość gwiazdek');
jr_define('_JOMRES_COM_A_SMOKING','Pokaż palący/niepalący');
jr_define('_JOMRES_COM_A_SMOKING_DESC','Ustaw Tak, jeżeli opcja wyboru palący/niepalący ma być dostępna.');
jr_define('_JOMRES_COM_A_RESET','Cofnij zmiany');
jr_define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezerwacja anulowana');
jr_define('_JOMRES_FRONT_MR_SEARCH_PROPERTYNAME','Szukaj wg nazw ofert:');
jr_define('_JOMRES_COM_A_SMOKING_OPTION','Palący/Niepalący - Ustawienia');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL','Kod waluty');
jr_define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Np. &amp;Euro&#59; proszę zauważyć, że najlepsze jest dodanie w tym miejscu czystego kodu HTML.');
jr_define('_JOMRES_COM_A_CURRENCYCODE','Waluta');
jr_define('_JOMRES_COM_A_CURRENCYCODE_DESC','Np. PLN, USD, EUR. Ustawienie wymagane dla prawidłowej obsługi płatności w systemie.');
jr_define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Informacje');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ograniczenie czasu rezerwacji');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ustaw Tak, aby ograniczyć czas rezerwacji do X dni do przodu. To oznacza, że jeżeli klienci będą próbować wybrać datę, która leży dalej w przyszłości, system przestawi datę początku rezerwacji automatycznie na datę dzisiejszą.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Możliwy czas rezerwacji ograniczyć do ilości dni');
jr_define('_JOMRES_COM_A_TAX_WARNING','<span style="color:red;">Wskazówka: nie zaleca się ustawienia obu dalszych opcji na Tak. Poprawnie jest wybrać tylko jedną z opcji kalkulacji podatków.</span>');
jr_define('_JOMRES_COM_FRONT_ROOMTAX','Podatek');
jr_define('_JOMRES_COM_A_ROOMTAX','Podatek');
jr_define('_JOMRES_COM_A_ROOMTAX_DESC','Cena zasobu będzie zwiększona o tą wartość. Możliwy jest wybór pomiędzy cenami ryczałtowymi, opodatkowanie procentowe albo kombinacja obu możliwości. Proszę jednak zauważyć, że ta wartość ma wpływ tylko na cenę zasobów.');
jr_define('_JOMRES_COM_A_ROOMTAX_FIXED','Wysokość ryczałtowa podatku');
jr_define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Wysokość procentowa podatku');
jr_define('_JOMRES_COM_A_EUROTAX','Podatek ryczałtowy');
jr_define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Podatek procentowy');
jr_define('_JOMRES_MR_AUDIT_ARCHIVE','Archiwuj wszystkie wpisy');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','Wpisy dodane do archiwum.');
jr_define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Administrator zarchiwizował dane.');
jr_define('_JOMRES_FRONT_TARIFFS','Ceny');
jr_define('_JOMRES_FRONT_TARIFFS_TITLE','Nazwa cennika');
jr_define('_JOMRES_FRONT_TARIFFS_DESC','Opis cennika');
jr_define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Zasób');
jr_define('_JOMRES_FRONT_TARIFFS_STARTS','Ważny od');
jr_define('_JOMRES_FRONT_TARIFFS_ENDS','Ważny do');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN','Za osobę za noc');
jr_define('_JOMRES_FRONT_TARIFFS_PN','Za noc');
jr_define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Bez weekendów');
jr_define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dni');
jr_define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maks dni');
jr_define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Minimum osób');
jr_define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maks osób');
jr_define('_JOMRES_FRONT_PREVIEW','Podgląd oferty');
jr_define('_JOMRES_COM_A_EDITINGMODEON','Edycja włączona');
jr_define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktualny tekst');
jr_define('_JOMRES_COM_A_EDITING_NEWTEXT','Nowy tekst');
jr_define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst został zaktualizowany.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Wybierz język');
jr_define('_JOMRES_COM_A_AUDITING_SHOWING','Ilość niezarchiwowanych rekordów');
jr_define('_JOMRES_FRONT_PTYPE','Rodzaj oferty');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE','Rodzaje ofert');
jr_define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edycja rodzajów ofert');
jr_define('_JOMRES_COM_PTYPES_PTYPE','Rodzaj oferty');
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis rodzaju oferty');
jr_define('_JOMRES_COM_PTYPES_SAVED','Rodzaj oferty został zapisany.');
jr_define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Anulowanie rodzaju ofert jest niemożliwe. Rodzaj oferty jest przypisany do jednej lub więcej ofert. Usuń to przypisanie i spróbuj ponownie.');
jr_define('_JOMRES_COM_PTYPES_DELETED','Rodzaj oferty został anulowany.');
jr_define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Pozostaje do zapłaty');
jr_define('_JOMRES_EXTRAS_NOEXTRAS','Brak dodatkowych płatnych usług.');
jr_define('_JOMRES_COM_CHARGING_DEPOSIT','Zadatek');
jr_define('_JOMRES_COM_CHARGING_FULLAMT','Pełna kwota');
jr_define('_JOMRES_COM_CHARGING_CONFIG','Kwota pobrana w trakcie rezerwacji');
jr_define('_JOMRES_COM_CHARGING_CONFIG_DESC','Określ sposób pobierania płatności w czasie rezerwacji.');
jr_define('_JOMRES_COM_MONTHSTOSHOW','Ilość miesięcy');
jr_define('_JOMRES_COM_MONTHSTOSHOW_DESC','Ilość miesięcy pokazywanych w kalendarzu.');
jr_define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Podpisane w imieniu');
jr_define('_JOMRES_COM_A_GATEWAYLIST','Płatności');
jr_define('_JOMRES_COM_A_CANCEL','Anuluj');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC','Wybierz zasoby, które chcesz wyłączyć ze sprzedaży i odpowiednie daty.
	<br />
	Jeżeli przy zasobie nie ma pola wyboru, oznacza to że nie może on być zablokowany do czasu, aż istniejąca rezerwacja/e nie zostanie zrealizowana lub anulowana.
	<br />
	Po wybraniu odpowiednich dat kliknij "Dodaj" aby sprawdzić ponownie dostępność zasobów.');

jr_define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Prawdopodobnie serwer wylogował Cię z powodu zbyt długiego okresu braku aktywności.</b>
	<br />
	Zaloguj się i spróbuj ponownie.</center>');

jr_define('_JOMRES_JR_BLACKBOOKING_REASON','Powód');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Płatności online');
jr_define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ustaw Tak, jeżeli chcesz korzystać z płatności elektronicznych.');
jr_define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Wybierz metodę płatności.');
jr_define('_JOMRES_COM_A_GATEWAY_ENABLED','Płatności online');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Ustawienia wtyczek zostały zmienione.');
jr_define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Ustawienia wtyczek zostały dodane.');
jr_define('_JOMRES_FRONT_GALLERYLINK','Zobacz tą ofertę');
jr_define('_JOMRES_COM_A_GALLERYLINK','Adres URL');
jr_define('_JOMRES_COM_A_GALLERYLINK_DESC','Możesz umieścić tu adres swojej strony WWW.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Karta kredytowa została zweryfikowana.');
jr_define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Karta kredytowa została zaktualizowana.');
jr_define('_JOMRES_MR_CREDITCARD_EDIT','Edycja danych karty kredytowej');
jr_define('_JOMRES_COM_A_EDITICON','Edycja rozmiaru ikony');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Transfer zdjęć na serwer');
jr_define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Dodane zdjęcia');
jr_define('_JOMRES_COM_A_SLIDESHOWS','Slajdy');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Pokaż odsyłacz do pokazu slajdów');
jr_define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Pokaż slajdy w ramach strony');
jr_define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Wysokość miniaturek slajdów');
jr_define('_JOMRES_FRONT_SLIDESHOW','Slajdy');
jr_define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Brak zdjęć tej oferty.');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Pokaż odsyłacz do cennika');
jr_define('_JOMRES_COM_A_POPUPSALLOWED','Zezwól na wyskakujące okna');
jr_define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Jeżeli Nie, to odsyłacz który otwiera nowe okno będzie otwierany w ramach strony.');
jr_define('_JOMRES_FRONT_IMAGEUPLOADS','Transfer zdjęć');
jr_define('_JOMRES_A_TABS_MISC','Różne');
jr_define('_JOMRES_A','Konfiguracja systemu');
jr_define('_JOMRES_A_GLOBALPFEATURES','Używaj globalnych cech ofert');
jr_define('_JOMRES_A_GLOBALPFEATURES_DESC','Ustaw Tak, jeżeli chcesz wymusić używanie we wszystkich ofertach tylko cech zdefiniowanych przez administratora serwisu.');
jr_define( '_JOMRES_A_GLOBALPFEATURES_INFO', 'To assign an image to this feature you first need to upload your business feature images to the /'.JOMRES_ROOT_DIRECTORY.'/uploadedimages/pfeatures/ folder. ' );
jr_define('_JOMRES_A_ICON','Ikona');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION','Wybierz wtyczkę wyszukiwania, której chcesz używać.');
jr_define('_JOMRES_FRONT_NORESULTS','<b>Twoje wyszukiwanie nie dało żadnych rezultatów. Zmień kryteria i spróbuj ponownie.</b>');
jr_define('_JOMRES_AREYOUSURE','Czy jesteś pewny/a?');
jr_define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Rezerwacja');
jr_define('_JOMRES_COM_MR_DISPGUEST_CCV','Kod CCV (kod bezpieczeństwa karty)');
jr_define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Pokaż cennik w ramach strony');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adres');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Informacja szczegółowa');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknij aby sprawdzić dostępność');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Pokaż cennik');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Pokaż informację adresową pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Pokaż informację o ofercie pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Pokaż zasoby i ich dostępność pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Pokaż cennik pod tym odsyłaczem');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Stałe ceny');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Średnie ceny');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL','Wybierz model cennika, jaki chcesz używać.');
jr_define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Masz do wyboru dwie metody kalkulacji cen. Pierwsza - stałe ceny - pozwala na oferowanie wielu różnych cenników, a cena za rezerwację jest stała przez cały okres rezerwacji. Jest to użyteczne, jeżeli chcesz oferować w tym samym okresie różne ceny, np za nocleg ze śniadaniem, nocleg z półwyżywieniem, nocleg z pełnym wyżywieniem. Wybierz - ceny średnie - jeżeli chcesz ustalić ceny zależnie od daty. Aplikacja znajdzie cenę dla każdego dnia w ramach razerwacji, doda je do siebie i wskaże uśrednioną cenę dla całego okresu rezerwacji.");
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Pozwól na wprowadzenie ostatniego dnia rezerwacji');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Ustaw Nie, jeśli akceptujesz fakt, że ostatnim dniem rezerwacji będzie dzień następny.");
jr_define('_JOMRES_COM_PROPERTYLISTDESC','Długość skruconego opisu');
jr_define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Podaj ilość znaków dla skróconego opisu na listach ofert.");
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE','Własny format daty');
jr_define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Ustaw Tak, jeżeli chcesz ustalić format daty zgodnie z funkcją date() (Zobacz <a href="http://www.php.net/manual/en/function.date.php">Tutaj</a>). Ustaw na Nie, jeżeli chcesz użyć formatu funkcji strftime() (zobacz <a href="http://www.php.net/manual/en/function.strftime.php">Tutaj</a> np. %b %d %Y .');
jr_define('_JOMRES_COM_MR_VRCT_PUBLISH','Opublikuj ofertę');
jr_define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Deaktywuj ofertę');
jr_define('_JOMRES_A_GLOBALROOMTYPES','Używaj globalnych zasobów');
jr_define('_JOMRES_A_GLOBALROOMTYPES_DESC','Ustaw Tak, jeżeli chcesz aby wszystkie oferty używały tylko zasobówzdefiniowanych przez administratora.  Należy ustawić na Tak, jeżeli ma być możliwe wyszukiwanie wg zasobów.');
jr_define('_JOMRES_A_GLOBALROOMTYPES_INFO','Aby powiązać zasób z ikoną, należy najpierw przetransferować na serwer pliki ikon do katalogu /images/stories/jomres/rmtypes/ .');
jr_define('_JOMRES_COM_INPUTERROR_BACKGROUND','Błąd w kolorze tła.');
jr_define('_JOMRES_COM_CONFIGCOUNTRIES','Domyślny kraj w formularzu rezerwacji');
jr_define('_JOMRES_JAVASCRIPT_','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
jr_define('_JOMRES_COM_SELFREGISTRATION','Użytkownicy mogą dodawać swoje oferty');
jr_define('_JOMRES_COM_SELFREGISTRATION_DESC','Ustaw Tak, jeżeli chcesz aby użytkownicy mogli dodawać swoje oferty bez interwencji administratora serwisu.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Proszę wybrać kraj i województwo swojej oferty.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Proszę wprowadzić dane oferty.');
jr_define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
jr_define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Oferta została dodana.');
jr_define('_JOMRES_REGISTRATION_NOTALLOWED',"Przykro nam, ale nie możesz dodać nowej oferty. Musisz być zarejestrowanym i zalogowanym użytkownikiem.");
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Dodana oferta:');
jr_define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Właściciel:');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR','Kalendarz od początku roku');
jr_define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Pokazywany kalendarz rozpoczyna się od początku bieżącego roku.');
jr_define('_JOMRES_NUMBEROFROOMSAVAILABLE','Ilość dostępnych zasobów');
jr_define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Powrót do informacji o ofercie');
jr_define('_JOMRES_FRONT_ROOMTYPES','Zasoby');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit przypadkowego wyszukiwania');
jr_define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Pokaż odsyłacz do przelicznika walut Google w liście cenników');
jr_define('_JOMRES_CURRENCYCONVERSIONTEXT','Przelicz cene na:');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR','Pozwól użytkownikom używać edytora HTML');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak termin rezerwacji, ilość osób, następnie wybierz zasób z listy dostępnych. Kliknij dowolny dostępny zasób aby dodać go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
jr_define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak termin rezerwacji, ilość osób, następnie wybierz zasób z listy dostępnych. Kliknij dowolny dostępny zasób aby dodac go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
jr_define('_JOMRES_AJAXFORM_PARTICULARS','Szczegóły rezerwacji');
jr_define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Określ szczegóły Twojej rezerwacji.');
jr_define('_JOMRES_AJAXFORM_AVAILABLE','Dostępność');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Wybierz zasób');
jr_define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Sprawdź tutaj, czy oferta jest dostępna w wybranym terminie.');
jr_define('_JOMRES_AJAXFORM_EXTRAS','Opcje dodatkowe');
jr_define('_JOMRES_AJAXFORM_EXTRAS_DESC','Wybierz dowolne opcje dodatkowe, które chcesz dodać do rezerwacji.');
jr_define('_JOMRES_COM_PERDAY','Za noc');
jr_define('_JOMRES_AJAXFORM_ADDRESS','Dane bilingowe');
jr_define('_JOMRES_AJAXFORM_ADDRESS_DESC','Podaj swoje dane.');
jr_define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostępne zasoby');
jr_define('_JOMRES_AJAXFORM_SELECTEDROOMS','Wybrane zasoby');
jr_define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br />Najwcześniejsza możliwa data początku rezerwacji:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
jr_define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Razem:');
jr_define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Opcje dodatkowe:');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX','Podatek:');
jr_define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Rabat:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTAL','Razem:');
jr_define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Klientów');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Dodaj do rezerwacji');
jr_define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Usuń z rezerwacji');
jr_define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Rodzaje klientów');
jr_define('_JOMRES_VARIANCES_TYPE','Rodzaj');
jr_define('_JOMRES_VARIANCES_TYPE_TT','Rodzaje klientów np. dzieci w wieku 5 - 10 lat, student.');
jr_define('_JOMRES_VARIANCES_NOTES','Uwagi');
jr_define('_JOMRES_VARIANCES_NOTES_TT','Uwagi dotyczące danego rodzaju klientów.');
jr_define('_JOMRES_VARIANCES_MAXIMUM','Maks');
jr_define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksymalna ilość klientów jaka może być wybrana w formularzu rezerwacji.');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE','Procent');
jr_define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Suma jest procentem z sumy podstawowej skalkulowanej dla zasobu. Jeżeli ustawione na Nie, podana kwota będzie dodana lub odjęta od ceny rezerwacji zasobu.');
jr_define('_JOMRES_VARIANCES_POSNEG','Dodać wariant');
jr_define('_JOMRES_VARIANCES_POSNEG_TT','Kalkulowana kwota jest dodawana lub odejmowana od ceny rezerwacji zasobu. Ustaw na Nie, jeżeli chcesz, aby była to zniżka od ceny podstawowej.');
jr_define('_JOMRES_VARIANCES_VARIANCE','Wariant');
jr_define('_JOMRES_VARIANCES_VARIANCE_TT','Wartość wariantu');
jr_define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Rodzaj klientów został zmodyfikowany.');
jr_define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Rodzaj klientów został opublikowany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Rodzaj klientów został usunięty.');
jr_define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Rodzaj klientów został utworzony.');
jr_define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Rodzaj klientów został zmieniony.');
jr_define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Rodzaj klientów został zmieniony.');
jr_define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Pokaż odsyłacz do listy zasobówna stronie informacyjnej oferty');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL','Pokaż tylko kalendarz dostępności/listę zasobów');
jr_define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Ustaw Tak, jeżeli nie chcesz wyświetlać informacji o ofercie (listy zasobówi ich dostępności) w części informacyjnej oferty. Przeznaczone dla użytkowników mających oferty typu apartament, domek letniskowy itp.');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimalna długość rezerwacji');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalna długość rezerwacji oferowana w formularzu rezerwacji (tym samym w ofercie).');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Numery zasobóww formularzu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Nazwy zasobóww formularzu rezerwacji');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Nazwa cennika w formularzu rezerwacji');
jr_define('_JOMRES_ORDER','Kolejność');
jr_define('_JOMRES_REQUIREDFIELDS','Wymagane');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dni do początku rezerwacji');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimalna ilość dni, jaka musi pozostać między datą dokonywania razerwacji a datą realizacji przedmiotowej rezerwacji.');
jr_define('_JOMRES_DTV','Warianty typu daty');
jr_define('_JOMRES_DTV_DOW','Dzień tygodnia');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Domyślna ilość klientów');
jr_define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Domyślna ilość klientów (o ile używasz rozróżnienia ich rodzajów), widoczna w formularzu rezerwacji.');
jr_define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Rezerwacje online tylko dla zarejestrowanych użytkowników');
jr_define('_JOMRES_REGISTEREDUSERSONLYBOOK','Musisz być zarejestrowanym i zalogowanym użytkownikiem, aby móc rezerwować online. Kliknij tutaj, aby się zarejestrować lub zalogować.');
jr_define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Kolor odsyłaczy do aktualnych rezerwacji');
jr_define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Ramki tygodni');
jr_define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Zasób zarezerwowany');
jr_define('_JOMRES_COM_AVLCAL_BLACK_KEY','Wyłączone');
jr_define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrąglaj zadatki do pełnych kwot');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Zadatek jest wymagany');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Zapisz cennik jako opłaty tygodniowe');
jr_define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Masz możliwość zapisania cennika jako opłaty dzienne lub tygodniowe. Jeżeli chcesz zapisać cennik tygodniowy ustaw na Tak.');
jr_define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena za tydzień');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Powtarzanie stałych dat rezerwacji co');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Jeżeli wybrano stałe daty rezerwacji daty te będą pokazywane na liście wyboru w trakcie procesu rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcja dla palących niedostępna.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Błędna data początku rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Błędna data końca rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Okres rezerwacji jest zbyt krótki. Między datą początku rezerwacji i jej końca musi być minimum dni:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Twój okres rezerwacji wynosi:');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Błędny rodzaj klienta.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Wybierz odpowiednią ilość/rodzaj klienta.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Rezerwacja dotyczy zbyt dużej ilości osób dla dostępnego cennika.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Wybrano więcej zasobówniż ilość osób.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Zbyt dużo osób w stosunku do dostępnych miejsc w tej ofercie.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musisz wybrać więcej zasobów.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Wybierz zasób.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Wymagane jest imię.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Wymagane jest nazwisko.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Wymagany jest nr domu.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Wymagana jest nazwa ulicy.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Wymagana jest nazwa miejscowości.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Wymagane jest województwo.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Wymagany jest kod pocztowy.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Wymagany jest kraj.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Wymagany jest numer telefonu stacjonarnego.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Wymagany jest numer telefonu komórkowego.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Wymagany jest adres e-mail.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Adres e-mail jest błędny.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Nie udało się sprawdzić adresu e-mail.');
jr_define('_JOMRES_SRP_WEHAVEVACANCIES','Mamy jeszcze wolne miejsca.');
jr_define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Nie został jeszcze dodany żaden z zasobów.');
jr_define('_JOMRES_BOOKING_NUMBER','Rezerwacja nr');
jr_define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok dla rezerwacji, tło pola tekstowego');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA','Zmienne szablonu');
jr_define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Uaktywnij, aby umożliwić wpisywanie zmiennych DHTML w szablonie strony. Pomocne, jeżeli chcesz widzieć, czy ten konkretny element jest dostępny w danym szablonie.');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Kwota jest procentem');
jr_define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ustaw Tak, jeżeli cena za pojedyncze wykorzystanie jest procentem pełnej ceny. Jeżeli Nie, to cena zostanie ustalona kwotowo.');
jr_define('_JOMRES_COM_LIMITROOMSLIST','Ograniczenie dostępności zasobów/cenników');
jr_define('_JOMRES_COM_LIMITROOMSLIST_DESC','Wprowadź tą daną aby ograniczyć ilość dostępnych zasobówi cenników, pokazywanych w formularzu rezerwacji. Jeżeli nie chcesz ograniczenia, ustaw na zero.');
jr_define('_JOMRES_SRP_WEHAVENOVACANCIES','Aktualnie brak wolnych miejsc.');
jr_define('_JOMRES_BOOKITNOW','Zarezerwuj teraz');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Globalny tryb edycji');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Jeśli Tak, w ofertach zastosowane zostaną teksty globalne.');
jr_define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Globalny symbol waluty');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponent owinięty');
jr_define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Ustaw Tak, jeśli moduł i nagłówek nie mają być widoczne.');
jr_define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Manager');
jr_define('_JOMRES_COM_WEEKENDONLY','Tylko w weekendy');
jr_define('_JOMRES_COM_WEEKENDDAYS','Dni weekendowe');
jr_define('_JOMRES_COM_WEEKENDDAYS_DESC','Ustaw ceny w dni weekendowe.');
jr_define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Wybierz swój kraj przed dodaniem jakichkolwiek informacji.');
jr_define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Zapisz zmiany przed wysłaniem zdjęcia.');
jr_define('_JOMRES_TARIFFSFROM','Ceny już od');
jr_define('_JOMRES_SEARCH_ALL','Wszystkie');
jr_define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Kraj');
jr_define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Województwo');
jr_define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Miejscowość');
jr_define('_JOMRES_SEARCH_FEATURE_INFO','Cechy');
jr_define('_JOMRES_SEARCH_BUTTON','Szukaj');
jr_define('_JOMRES_SEARCH_DESCRIPTION_INFO','Wpisz szukane słowo i naciśnij przycisk.');
jr_define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Wyszukaj');
jr_define('_JOMRES_SEARCH_AVL_INFO','Podaj datę początku i końca rezerwacji a następnie naciśnij przycisk, aby znaleźć oferty dostępne w wybranym zakresie dat.');
jr_define('_JOMRES_SEARCH_PTYPES','Typ oferty');
jr_define('_JOMRES_SEARCH_RTYPES','Typ zasobu');
jr_define('_JOMRES_SORTORDER_DEFAULT','Domyślnie');
jr_define('_JOMRES_SORTORDER_PROPERTYNAME','Nazwa oferty');
jr_define('_JOMRES_SORTORDER_PROPERTYREGION','Województwo oferty');
jr_define('_JOMRES_SORTORDER_PROPERTYTOWN','Miejscowość oferty');
jr_define('_JOMRES_SORTORDER_STARS','Ilość gwiazdek');
jr_define('_JOMRES_PATHWAY_PROPERTYLIST','Lista ofert');
jr_define('_JOMRES_PATHWAY_PROPERTYDETAILS','Szczegóły');
jr_define('_JOMRES_PATHWAY_BOOKINGFORM','Formularz rezerwacji');
jr_define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Zaktualizuj swoje dane adresowe');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Ponowne sprawdzanie dostępności zasobu (wybór zasobu zostanie zresetowany).');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Ponowne sprawdzanie dostępności');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modyfikacja dodatkowego wyposażenia w');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Zmiana wybranego zasobu');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Aktualizacja danych adresowych w');
jr_define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Jedno lub więcej pól adresowych jest wypełnionych nieprawidłowo.');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Zdjęcie zasobu');
jr_define('_JOMRES_CURRENCYFORMAT','Kalkulator');
jr_define('_JOMRES_MANAGEROPTIONSASIMAGES','Zarządzanie opcjami zdjęć');
jr_define('JOMRES_COM_A_SEARCHOPTIONSTAB','Opcje wyszukiwania');
jr_define('JOMRES_COM_A_AVAILABLELOGS','Rodzaje operacji');
jr_define('JOMRES_COM_A_LOGS_NOENTRIES','Brak wpisów. Jest to normalne, trzeba ręcznie modyfikować jomres.php by wywołać logowania.');
jr_define('JOMRES_COM_A_MESSAGE','Wiadomość');
jr_define('JOMRES_COM_A_TARIFFMODE_NORMAL','Podstawowy');
jr_define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Rozszerzony');
jr_define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Zaawansowany');
jr_define('JOMRES_COM_A_TARIFFMODE','Tryb konfiguracji cen');
jr_define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Ostrzeżenie! Przełączanie pomiędzy różnymi trybami konfiguracji cen może spowodować utratę danych, przeczytaj poniższe uwagi.</b>
	<br /><br />
	Dostępne są trzy opcje możliwości konfiguracji cen.
	<ul>
		<li>Tryb podstawowy - Będziesz miał jedną cenę dla każdego zasobu.</li>
		<li>Rozszerzony - Można modyfikować cenę za każdy dzień i za każdy zasób w danym rodzaju oferty.</li>
		<li>Zaawansowany - Dowolna możliwość kształtowania cen.</li>
	</ul>");

jr_define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','lista zasobówna stronie szczegółów oferty');
jr_define('JOMRES_PROPERTYTYPE','Rodzaj oferty');
jr_define('JOMRES_COM_A_SRPONLY','Pojedyńcza rezerwacja');
jr_define('JOMRES_MAXPEOPLEINROOM','Maks klientów dla zasobu');
jr_define('JOMRES_MAXPEOPLEINBOOKING','Maks klientów dla rezerwacji');
jr_define('_JOMCOMP_BOOKINGNOTES_ADD','Dodaj notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_EDIT','Edycja notatki');
jr_define('_JOMCOMP_BOOKINGNOTES_DELETE','Usuń notatkę');
jr_define('_JOMCOMP_BOOKINGNOTES_VIEW','Notatki');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Notatka została dodana.');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Notatka została zmieniona.');
jr_define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Notatka została usunięta.');
jr_define('_JOMCOMP_MYUSER_MENUTITLE','Moje opcje');
jr_define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lista rezerwacji');
jr_define('_JOMCOMP_MYUSER_MYBOOKINGS','Moje rezerwacje');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKING','Zobacz rezerwacje');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Moje ulubione');
jr_define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Nie dodano jeszcze żadnych ulubionych.');
jr_define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Dodaj do ulubionych');
jr_define('_JOMCOMP_MYUSER_PROPERTYTYPE','Rodzaj oferty');
jr_define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Oferta na stronie');
jr_define('_JOMCOMP_WISEPRICE_TITLE','Last minute');
jr_define('_JOMCOMP_WISEPRICE_ACTIVE','Aktywny');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC','Ta opcja pozwala włączyć i dynamicznie skonfigurować ceny za zasoby.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Funkcja umożliwia przyciągnięcie klientów do zasobówktóre mogłyby być pominięte i niezarezerwowane w danym czasie. Włączenie i konfiguracja opcji pozwala zaoferować regulację cen na podstawie liczby zasobów, które są dostępne w danym dniu. Ilość określa liczbę dni, w jakim musi mieścić się data początku rezerwacji zanim ceny zasobówzostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu zasobówktóre mogą być dostępne przed zastosowaniem danego rabatu.');
jr_define('_JOMCOMP_WISEPRICE_THREASHOLD','Ilość dni (liczba dni pomiędzy datą początku rezerwacji i dniem dzisiejszym)');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Zasoby zajęte w < 10%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Zasoby zajęte w < 25%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Zasoby zajęte w < 50%');
jr_define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Zasoby zajęte w < 75%');
jr_define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabat %');
jr_define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' została odrzucona z ');
jr_define('_JOMCOMP_WISEPRICE_TO',' do ');
jr_define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED','Podsumowanie Twojej płatności.');
jr_define('JOMRES_COM_A_MAPSKEY','Klucz API map Google');
jr_define('JOMRES_COM_A_MAPSKEY_DESC','Klucz API map Google można wygenerować tu: <a href="https://code.google.com/apis/consol" target="_blank">Mapy Google</a>. Po jego wprowadzeniu mapy będą wyświetlane na stronie szczegółów danej oferty.');
jr_define('JOMRES_COM_A_USE_SSL','SSL w formularzu rezerwacji');
jr_define('JOMRES_COM_A_USE_SSL_DESC','Musisz się upewnić, że masz ważny certyfikat SSL dla');
jr_define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktywny?');
jr_define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Ustaw Tak, jeśli chcesz zaoferować oferty Last minute.');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD','Ilość dni');
jr_define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Jeśli rezerwacja zostanie wykonana i data początku rezerwacji jest tylko X dni od daty dokonania rezerwacji zostanie udzielony rabat.');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT','Rabat');
jr_define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','W procentach');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Rabat został zastosowany do tej rezerwacji.');
jr_define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Cena rezerwacji została zmniejszona o: ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Oferta Last Minute ze zniżkami od : ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID','%, dla rezerwacji dokonanej przed : ');
jr_define('_JOMCOMP_LASTMINUTE_ORMORE','% lub więcej dla rezerwacji dokonanej przed : ');
jr_define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Rezerwuj teraz, aby skorzystać z tej oferty.');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO','Więcej info o cenach');
jr_define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Ustaw Tak, aby pokazać bardziej szczegółowe informacje cen w szczegółach ofert w oknie popup.');
jr_define('JOMRES_COM_A_MINIMALCONFIG','Minimum opcji konfiguracyjnych');
jr_define('_JOMCOMP_AMEND','Zmień rezerwacje - Wybór oferty');
jr_define('_JOMCOMP_AMEND_SELECTPROPERTY','Wybór nowej oferty');
jr_define('_JOMCOMP_AMEND_HEADER','Pierwotne zamówienie:');
jr_define('_JOMCOMP_AMEND_DEPOSITPAID','Wpłacony zadatek');
jr_define('_JOMCOMP_AMEND_DEPOSITDUE','Nie wpłacony zadatek');
jr_define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Zastąp całkowicie');
jr_define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Kwota zadatku');
jr_define('_JRPORTAL_CANCEL','Anuluj');
jr_define('_JRPORTAL_CPANEL','Mój kokpit');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Domyślna wysokość prowizji');
jr_define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Wybierz domyślną wysokość prowizji stosowanej dla podstawowych ofert.');
jr_define('_JRPORTAL_CPANEL_LISTCRATES','Lista prowizji');
jr_define('_JRPORTAL_CPANEL_PATETITLE','Prowizje');
jr_define('_JRPORTAL_CRATE_TITLE','Tytuł');
jr_define('_JRPORTAL_CRATE_TYPE','Typ');
jr_define('_JRPORTAL_CRATE_VALUE','Wysokość prowizji');
jr_define('_JRPORTAL_CRATE_CURRENCYCODE','Kod waluty');
jr_define('_JRPORTAL_CPANEL_LISTPROPERTIES','Lista ofert');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nazwa oferty');
jr_define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adres oferty');
jr_define('_JRPORTAL_PROPERTIES_LEGEND','Oferty które mają kolor tła czerwony jeszcze nie zostały zatwierdzone.');
jr_define('_JRPORTAL_STATS_PATETITLE','Statystyki');
jr_define('_JRPORTAL_STATS_STATTYPE','Statystyka dla:');
jr_define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Oferta - Kliknięcia');
jr_define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Podgląd oferty');
jr_define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Liczba rezerwacji');
jr_define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Wartość rezerwacji');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Szacunkowa prowizja');
jr_define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Wysokość prowizji');
jr_define('_JRPORTAL_CPANEL_LISTBOOKINGS','Lista rezerwacji');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Id oferty');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Id klienta');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Id partnera');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id faktury');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Rezerwacja całkowita');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Id umowy');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Nr umowy');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Kod waluty');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Utworzona');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archiwizacja');
jr_define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Data archiwizacji');
jr_define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Dodaj element do warunków umowy');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Zarządzanie fakturami');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Powiązane oferty (jeśli dotyczy)');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Wartość');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Opis');
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Pomyślnie wstawiony element rozliczeniowy w");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Zobacz zlecenia");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Nie udało się wprowadzić elementu rozliczeniowego w");
jr_define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Nie ustawiono wartości projektu ustawy.");
jr_define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Możesz mieć specyficzne pliki językowe dla różnych rodzajów ofert. Ustawiając opis z nazwą podkatalogu, np. "yachtbrokerage" i kopiując plik językowy do tego podfolderu. Następnie można zmodyfikować ten plik językowy dla danego typu ofert np. domki letniskowe i tp.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Nie możesz usunąć tej oferty ponieważ jest to podstawowa oferta do której masz dostęp. Jeśli chcesz ją wyłączyć, skorzystaj z funkcji nie-publikowania w pasku narzędzi.');
jr_define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Jeśli jest to instalacja demo i zamierzasz uaktualnić system do Jomres Solo (tylko obsługa jednej oferty) należy utworzyć nową ofertę a następnie usunąć ją przed zmianą klucza licencyjnego do wersji Solo.');
jr_define('_JOMRES_COM_EMAILERRORS',"Wiadomości e-mail dziennika błędów");
jr_define('_JOMRES_COM_EMAILERRORS_DESC',"Ustaw Tak, jeśli chcesz automatycznie przesyłać dziennik błędów do jomres.net . Pozwala to błyskawicznie reagować na raportowane błędy i usuwać je zanim wykryjesz ich istnienie. Uwaga! Ta funkcja jest wyłączona na 'localhost'.");
jr_define('_JOMRES_COM_ISTHISANMRP',"Czy to oferta typu hotel/pensjonat");
jr_define('_JOMRES_COM_ISTHISANMRP_DESC',"Opcje konfiguracji różnią się w zależności czy są to wynajmowane pokoje w ofercie (np. hotel) lub cała oferta (np. domek letniskowy). Wybierz MRP jeśli oferujesz wynajem pokoii w ofercie, wybierz SRP, jeśli oferujesz do wynajęcia całą ofertę.");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK',"Użyj sprawdzania adresu e-mail?");
jr_define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Wymusza ściślejszą kontrolę wysyłki wiadomości e-mail. Niektóre bezpieczne serwery WWW zgłoszą błąd 500 (wewnętrzny błąd serwera) przy próbie wysłania wiadomości na nieistniejący adres e-mail. Ustawienie to pozwala na wykorzystanie funkcji checkdnsrr w php przed przystąpieniem do wysyłki wiadomości, zapobiegając wyświetlaniu błędu 500.");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Kwota noclegu");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"Noc/y");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"Za zasób");
jr_define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Opcje dodatkowe");
jr_define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Podsumowanie płatności");
jr_define('_JOMRES_CONFIRMATION_ALERT',"Proszę przeczytać i zaakceptować");
jr_define('_JOMRES_CONFIRMATION_HEADER',"Podsumowanie rezerwacji jest pokazane poniżej.
	<br />
	Aby dokonać zmian, kliknij przycisk 'Edycja rezerwacji'.");

jr_define('_JOMRES_CONFIRMATION_AMENDTEXT',"Jeśli musisz zmienić jakiekolwiek z powyższych informacji kliknij w przycisk.");
jr_define('_JOMRES_CONFIRMATION_AMEND',"Edycja rezerwacji");
jr_define('_JOMRES_CONFIRMATION_SPECIALS',"W miejscu tym można wpisać dodatkowe informacje dla personelu.");
jr_define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potwierdzam, że powyższe informacje są poprawne i akceptuję");
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"za osobę za noc");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Domyślny plik językowy");
jr_define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Wybierz domyślny plik językowy jeśli język ten nie został ustawiony przez JoomFish.");

if (!defined('_PN_OF'))
	jr_define('_PN_OF','z');
if (!defined('_PN_START'))
	jr_define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	jr_define('_PN_PREVIOUS','Wstecz');
if (!defined('_PN_NEXT'))
	jr_define('_PN_NEXT','Dalej');
if (!defined('_PN_END'))
	jr_define('_PN_END','Koniec');
if (!defined('_PN_RESULTS'))
	jr_define('_PN_RESULTS','Wyniki');

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Zauważ, że nie jest to formularz rezerwacji.
	<br />
	Proszę wpisać wiadomość, którą chcesz wysłać do ');

jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Kontakt');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Badanie ofert od');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Dziękujemy za kontakt z nami. Twoja wiadomość została wysłana do właściciela tej oferty i na Twój adres e-mail. Spodziewaj się szybkiej odpowiedzi.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' w sprawie ');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Wpisz znaki widoczne na obrazku');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Nie mogę odczytać znaków. Generuj nowe.');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Wyślij');
jr_define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nowy obrazek');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Zapytanie');
jr_define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Dodaj do zamówienia wybrane zasoby.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Minimalna ilość wybranych zasobów');
jr_define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimalna liczba zasobówjuż wybranych w rezerwacji, dla których kombinacje cenowe zasobówsą dostępne w ofercie. Pozwala to stosować zniżki, gdy więcej niż X zasobówzostało już wybranych.');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Maksymalna ilość wybranych zasobów');
jr_define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maksymalna liczba zasobówjuż wybranych w rezerwacji, dla których kombinacje cenowe zasobównie są już dostępne w ofercie. Pozwala to na zatrzymanie dostępności zasobóww określonej taryfie cenowej, gdy X zasobówzostała już wybrana.');
jr_define('_JOMRES_COM_SPS_EDITROOM_DESC','Należy pamiętać, że dopłata do zasobu dla jednej osoby nie zostanie zastosowana jeśli konfiguracja systemu została skonfigurowana dla obsługi jednego zasobu.');
jr_define('_JOMRES_AVLCAL_NOBOOKINGS',"Dostępny");
jr_define('_JOMRES_AVLCAL_QUARTER',"Ruszyła rezerwacja");
jr_define('_JOMRES_AVLCAL_HALF',"Połowa już zarezerwowana");
jr_define('_JOMRES_AVLCAL_THREEQUARTER',"Większość już zarezerwowana");
jr_define('_JOMRES_AVLCAL_FULLYBOOKED',"Komplet rezerwacji");
jr_define('_JOMRES_COM_SEF_URL_PREFIX','Prefix URL');
jr_define('_JOMRES_COM_SEF_URL_PREFIX_DESC','To jest pierwszy element wyświetlany po nazwie domeny - zmień go jeśli potrzebujesz.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Alias oferty');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','Alias do strony oferty.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Alias rezerwacji');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','Alias do strony rezerwacji.');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Alias strony wyszukiwania');
jr_define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','Alias do strony wyszukiwania.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Dodaj kraj do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','Dodaje kraj do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Dodaj województwo do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','Dodaje województwo do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Dodaj miejscowość do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','Dodaje miejscowość do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Dodaj rodzaj oferty do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','Dodaje rodzaj oferty do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Dodaj nazwę oferty do URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','Dodaje nazwę oferty do adresu URL.');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Dołącz ID do nazwy oferty w URL');
jr_define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Jeśli nazwa oferty jest ustawiona na Nie, to ID nie będzie używany. Jeśli jest włączony to URL będzie taki ...moja-oferta-1 .');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Struktura URL Szukaj - Dodaj kraj do URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','Dodaje kraj do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Struktura URL Szukaj - Kraj domyślny');
jr_define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Jeśli wszystkie oferty są w jednym kraju, to nie będzie on wyświetlany w URL wyniku szukania. Wprowadź tu kraj domyślny jeśli chcesz wyświetlić go w URL.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Struktura URL Szukaj - Dodaj województwo do URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','Dodaje województwo do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION','Struktura URL Szukaj - Województwo domyślne');
jr_define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Jeśli wszystkie oferty są w jednym województwie to nie będzie on wyświetlany w URL wyniku szukania. Wprowadź tu województwo domyślne jeśli chcesz wyświetlić je w URL.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Struktura URL Szukaj - Dodaj miejscowość do URL');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','Dodaje miejscowość do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN','Struktura URL Szukaj - Miejscowość domyślna');
jr_define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','Jeśli wszystkie oferty są w jednej miejscowości to nie będzie ona wyświetlana w URL wyniku szukania. Wprowadź tu miejscowość domyślną jeśli chcesz wyświetlić ją w URL.');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Struktura URL Szukaj - Rodzaj oferty');
jr_define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','Dodaje rodzaj oferty do URL wyniku szukania.');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Struktura URL Szukaj - Domyślny rodzaj oferty');
jr_define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Używany w URL, jeśli poszukiwanie jest dla wszystkich rodzajów ofert.');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetekcja języka kalendarzy');
jr_define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Włącz automatyczne wykrywanie języka dla kalendarzy. Jeśli nie zostanie rozpoznany automatycznie wtedy powróci do języka skonfigurowanego poniżej.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per tydzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per dni');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per rezerwacja');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per osoba per rezerwacja');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per osoba per dzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per osoba per tydzień');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dni (min dni)');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dni X wybrany zasób');
jr_define('_JOMRES_REGISTRYREBUILD','Odbuduj rejestr wtyczek');
jr_define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalnie rejestr wtyczek Jomres jest przebudowywany automatycznie przy wyświetlaniu Plugin Manager i dodawaniu lub usuwaniu wtyczki, jednak możliwe jest, że nie można wykorzystać tych funkcji z jakiegoś powodu, więc można użyć tej funkcji, aby odbudować rejestr ręcznie. Jeśli masz dostęp do Plugin Manager i Uaktualnień wtedy jest mało prawdopodobne, że będziesz musiał użyć tej funkcji. Możesz odbudować rejestr wtyczki w dowolnym momencie, dodać nowy dodatek i nie używać Plugin Manager.");
jr_define('_JOMRES_REGISTRYREBUILD_SUCCESS','Rejestr wtyczek został przebudowany poprawnie.');
jr_define('_JOMRES_REGISTRYREBUILD_FAILURE','Wystąpił błąd przy odbudowie rejestru wtyczek. Powinieneś sprawdzić błąd w dzienniku Jomres, aby sprawdzić, czy istnieje zapis mówiący o tym, co spowodowało błąd.');
jr_define('_JOMRES_SEARCH_PRICERANGES','Szukaj w przedziale cenowym.');
jr_define('JOMRES_WORD_SAVING','Zapisywanie...');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Użyj kompozytowych szczegółów ofert');
jr_define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Wszystkie szczegóły wyjścia są przesyłane do jednego szablonu pliku (composite_property_details.html). Jeśli nie chcesz używać tej funkcji ustaw ją na Nie (tylko istniejący użytkownicy powinni ustawić na Nie, nowi użytkownicy będą prawdopodobnie chcieli pozostawić ustawiony na Tak).');
jr_define('_JOMRES_PROFILELIST_INSTRUCTIONS','To jest lista wszystkich użytkowników w systemie. Użytkownicy bez własnych ofert oznaczeni są ikoną Gość. Manager ofert oznaczeni są ikoną Satelity/Manager.
	<br />
	W czasie pierwszej instalacji Jomres "admin" jest dodawany automatycznie jako manager ofert i jest autoryzowanym użytkownikiem.
	<br />
	Super manager musi być przypisany do przynajmniej jednej oferty inaczej zobaczy błąd podczas próby zalogowania się i korzystania z systemu.
	<br />
	Użytkownik zalogowany może edytować swoje profile, przypisać je do oferty lub dać im rangę Super Manager.
	<br />
	Aby autoryzować użytkownika, kliknij na czerwony krzyżyk obok jego nazwy. Aby zdeautoryzować użytkownika, kliknij zielone kleszcze.
	<br />
	Możesz przypisywać użytkowników do specyficznych właściwości, dawać im uprawnienia Super Manager etc. Użytkownicy, którzy sami dodali swoje oferty będą automatycznie przypisani do tych ofert jako Super Manager. Otrzymają automatycznie pełne prawa i będą mieli do dyspozycji wszystkie opcje konfiguracji, nawet jeśli są one zminimalizowane w ustawieniach konfiguracji systemu.');

jr_define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Tutaj możesz przypisać managera do wybranych ofert. Mają oni prawo do co najmniej jednej oferty w przeciwnym razie będą widzieli błąd, przy logowaniu. Aby dać rangę Recepcjonistka/Manager w ofercie, upewnij się, że Super Manager nie jest ustawiony na Tak.');
jr_define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Nie ma jeszcze żadnych rezerwacji.');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Rodzaj oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edycja rodzaju oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Wybierz rodzaj oferty');
jr_define('_JOMRES_COM_LOGGING','Logi systemu');
jr_define('_JOMRES_COM_LOGGING_WARNING','Opcje te pozwalają włączyć/wyłączyć rejestrowanie błędów w systemie Jomres. Rejestrowanie błędów jest zawsze włączone, ale pozostałe dzienniki mogą być włączane i wyłączane. <b>Włączenie dzienników błędów dla większej ilości funkcji jest wyłącznie sposobem na łatwiejsze debugowanie, niesie jednak ze sobą duże zagrożenie bezpieczeństwa.</b> Osoby trzecie mogą bez upoważnienia uzyskać dostęp do logów. Dlatego zaleca się pozostawienie dodatkowych dzienników błędów przez większość czasu jako wyłączone. Jeśli masz włączone rejestrowanie, po wyłączeniu ich należy również upewnić, się że folder <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> nie zawiera żadnych starych plików dziennika. Rejestrowanie dodatkowych dzienników znacząco może spowolnić system, gdyż gromadzi wiele informacji.');
jr_define('_JOMRES_COM_LOGGING_BOOKING','Logi silnika rezerwacji');
jr_define('_JOMRES_COM_LOGGING_GATEWAY','Logi bramek płatności');
jr_define('_JOMRES_COM_LOGGING_REQUEST','Logi zapytań przychodzących');
jr_define('_JOMRES_COM_LOGGING_SYSTEM','Logi dodatkowe systemu');
jr_define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Twoje zapytanie...');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Obraz zasobu w formularzu rezerwacji');
jr_define('_JOMRES_COM_A_LISTLIMIT','Limit ofert na liście');
jr_define('_JOMRES_COM_A_LISTLIMIT_DESC','Liczba ofert pokazywanych na stronie wyszukiwania.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Wyszukiwarka');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Zintegrowana funkcja wyszukiwania pozwala użytkownikom przeszukiwać oferty zgodnie z zestawem funkcji. Jeśli już korzystałeś z funkcji wyszukiwania w Jomres w Joomla zapoznaj się z tymi ustawieniami.
	<br />
	Funkcja ta umożliwia obsługę wyszukiwania w Jomres dla tych użytkowników, którzy nie chcą używać dodatkowych modułów wyszukiwania Joomla.
	<br />
	Pamiętaj, że jeśli zdecydujesz się szukać czegoś za pośrednictwem linku (nie listy rozwijanej), inne opcje wyszukiwania nie będą realizowane, tylko kliknięty link.
	<br />
	Zauważ, że domyślnie układ tej zintegrowanej wyszukiwarki nie jest ładny. Jest tak ponieważ plik szablonu musi zawierać wszystkie możliwe opcje, a niektóre z nich są sprzeczne. Aby poprawić wygląd i dostosować go do własnych preferencji, trzeba zmienić <b>srch.html</b> w katalogu <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b>.');

jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Włącz integracje wyszukiwarki');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Jeśli Tak, to każde zapytanie do Jomres pokazuje listę ofert i wszystkie opcje wyszukiwania.');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Korzystaj z kolumn');
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Każda opcja wyszukiwania pokazywana jako link pojawi się w kolumnach.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Ilość kolumn");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Liczba ikon funkcji, które mają być wyświetlane przed dodaniem br i przejściem do nowego wiersza.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Wyszukiwanie według województwa (wybór z listy rozwijanej)");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Wyszukiwanie z listy rozwijanej, filtrowanie według krajów/województw/miejscowości. Jeśli zamierzasz korzystać z tej funkcji to nie używaj opcji wyszukiwania województw/miejscowości poniżej.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Szukaj według nazwy oferty");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Szukanie przez wpisanie nazwy oferty.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Szukaj wg miejscowości lub województwa");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Szukanie przez wpisanie nazwy miejscowości lub województwa.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Wyszukiwanie według rodzaju ofert");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Szukanie przez wpisanie rodzaju oferty.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Szukaj według zasobu");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Szukanie przez wpisanie zasobu.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Cechy");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Szukanie przez wpisanie cechy.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Pokaż jako listę rozwijaną");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako ikonki i pola wyboru.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Szukaj w opisie");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Szukanie przez wpisanie frazy kluczowej.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Szukaj według dostępności");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Szukanie przez wpisanie dostępności.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Szukaj w przedziałach cenowych");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Szukanie przez wpisanie przedziałów cenowych.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Taryfy w przedziale cenowym");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Sprawdzone zostaną wszystkie ceny i wyświetlone wyłącznie te mieszczące się w zdefiniowanych przedziałach.");
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Domyślnie, jeśli oferta nie została wybrana zostanie przeprowadzone wyszukiwanie. Jeżeli wyniki wyszukiwania nie zostały wywołane przez moduł wyszukiwania, wyszukiwanie będzie produkować losowe wyniki (celowo).');
jr_define('_JOMRES_COM_A_CRON_TITLE','Cron i dzienniki');
jr_define('_JOMRES_COM_A_CRON_DESC','Funkcjonalność ta jest wymagana dla fakturowania i prawidłowej obsługi prowizji.');
jr_define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Ręczne uruchamianie zadań crona korzystając z linków widocznych poniżej. Zauważ, że kliknięcie w link uruchamia zadanie, wyświetlona pusta strona nie jest błędem.');

	global $jomresConfig_secret;

jr_define('_JOMRES_COM_A_CRON_METHOD','Metoda');
jr_define('_JOMRES_COM_A_CRON_METHOD_DESC',"Jeśli nie masz dostępu do crona, ustaw funkcję uruchamiania cyklicznych zadań wbudowanych w Jomres. W przeciwnym razie ustaw uruchamianie zadań przez Twojego crona na serwerze.
	<br />
	<i>curl -s " . JOMRES_SITEPAGE_URL_AJAX . "&task=cronjobs&tmpl=".get_showtime("tmplcomponent")."&no_html=1&secret=" . base64_encode(get_showtime("secret")) . "> /dev/null</i>");


jr_define('_JOMRES_COM_A_CRON_LOGGING','Wyświetlanie logowania w przeglądarce');
jr_define('_JOMRES_COM_A_CRON_LOGGING_DESC','Działa tylko jeśli metoda jest ustawiona na System Jomres.');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logowanie włączone');
jr_define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Ustaw Tak by włączyć logowanie. Wyniki dzienników będą dostępne poniżej.');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS','Pełne rejestrowanie');
jr_define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Dużo logując wyjście');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Edycja szablonów');
jr_define('_JOMRES_COM_TEMPLATEEDITING_DESC','Ta funkcja pozwala edytować szablony frontu Jomres na serwerze i zapisywanie wyników do bazy danych.');
jr_define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nazwa szablonu');
jr_define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Szablon został dostosowany');
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Własne pola');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESC','Tutaj można określić niestandardowe pola, które będą widoczne w formularzu rezerwacji.');
jr_define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Nazwa pola (bez spacji)');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Wartość domyślna');
jr_define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Opis');
jr_define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Wymagane');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maksymalna ilość');
jr_define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Jeśli maksymalna ilość jest ustawiona na większy niż 1 to goście otrzymają możliwość wyboru z listy rozwijanej.');
jr_define('_JRPORTAL_INVOICES_ISSUE',"Faktury");
jr_define('_JRPORTAL_TAXRATES_TITLE',"Podatki");
jr_define('_JRPORTAL_TAXRATES_CODE',"Ustawienia podatku");
jr_define('_JRPORTAL_TAXRATES_DESCRIPTION',"Opis podatku");
jr_define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Nie można usunąć tej stawki podatkowej.");
jr_define('_JRPORTAL_TAXRATES_RATE',"Cena");
jr_define('_JRPORTAL_INVOICES_TITLE',"Faktury rezerwacji");
jr_define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Niezapłacona");
jr_define('_JRPORTAL_INVOICES_STATUS_PAID',"Zapłacona");
jr_define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Anulowana");
jr_define('_JRPORTAL_INVOICES_STATUS_PENDING',"Oczekująca");
jr_define('_JRPORTAL_INVOICES_USER',"Użytkownik");
jr_define('_JRPORTAL_INVOICES_STATUS',"Status");
jr_define('_JRPORTAL_INVOICES_RAISED',"Wystawiona");
jr_define('_JRPORTAL_INVOICES_DUE',"Wymagalna");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subskrypcja");
jr_define('_JRPORTAL_INVOICES_INITTOTAL',"Wyjściowa brutto");
jr_define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Odnowienie brutto");
jr_define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Odnawianie");
jr_define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Cyklicznie dzień miesiąca");
jr_define('_JRPORTAL_INVOICES_CURRENCYCODE',"Waluta");
jr_define('_JRPORTAL_INVOICES_LINEITEMS',"Pozycje");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nazwa");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Opis");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Wyjściowa");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Ilość");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Rabat");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Netto");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Odnawianie");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Ilość");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Rabat");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Brutto");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Kod podatku");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Opis podatku");
jr_define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"VAT");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Ustawienia PayPal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Kod waluty (np. PLN)");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Użyj piaskownicy");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Twój adres e-mail PayPal");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Uwaga! Aby korzystać z PayPal musisz zalogować się do swojego konta PayPal i wyłączyć Autoreturn. (Profil/WWW Preferencje płatności), a zestaw IPN (Profil / Instant Preferencje powiadomienia o płatności), aby w adresie URL:
	<br />
	<b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");

jr_define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Ta faktura jest już wymagalna. Proszę kliknąć przycisk i opłacić ją przez system PayPal.");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Zastąpić standardowe ustawienia");
jr_define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Jeśli opcja ustawień nadpisywania PayPal jest ustawiona na Tak konfiguracja ogólna nie pokazuje żadnych ustawień bramki.");
jr_define('_JRPORTAL_INVOICES_SHOWINVOICES',"Moje faktury");
jr_define('_JRPORTAL_COUPONS_TITLE',"Kody rabatowe");
jr_define('_JRPORTAL_COUPONS_DESC',"Kody rabatowe mogą być generowane i przekazywane klientom jako zachęta do dokonywania rezerwacji. Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.");
jr_define('_JRPORTAL_COUPONS_CODE',"Kod kuponu");
jr_define('_JRPORTAL_COUPONS_VALIDFROM',"Ważny od");
jr_define('_JRPORTAL_COUPONS_VALIDTO',"Ważny do");
jr_define('_JRPORTAL_COUPONS_AMOUNT',"Wysokość rabatu");
jr_define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Rabat procentowy");
jr_define('_JRPORTAL_COUPONS_ROOMONLY',"Tylko zasób");
jr_define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Rabat ma zastosowanie tylko do kosztów zasobu. Jeśli Nie, to rabat ma zastosowanie do całego kosztu rezerwacji.");
jr_define('_JRPORTAL_COUPONS_SQLERROR',"Błąd SQL podczas próby usunięcia/dodania kuponu.");
jr_define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Jeśli masz kod promocyjny, wprowadź go w polu i kliknij przycisk "Zapisz kod".');
jr_define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Zapisz kod');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Kod został zapisany dla rezerwacji.');
jr_define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Nie znaleziono takiego kodu rabatowego.');
jr_define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Wartość kodu rabatowego');
jr_define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Rezerwacja promocyjna. Kod kuponu/Wartość rabatu/Ustawienia kuponu:');
jr_define('_JOMRES_COM_CACHING','Użyj funkcji buforowania Jomres');
jr_define('_JOMRES_COM_CACHING_DESC','Ustaw na Nie, aby wyłączyć funkcje buforowania Jomres.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES','Wybierz język');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Opcje językowe muszą być wybrane z listy wyboru języka.');
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Pokaż wybór języka z menu rozwijanego');
jr_define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Anulowane rezerwacje');
jr_define('_JRPORTAL_NEWUSER_DEAR',"Drogi");
jr_define('_JRPORTAL_NEWUSER_THANKYOU',"Dziękujemy za rejestrację.");
jr_define('_JRPORTAL_NEWUSER_USERNAME',"Nazwa użytkownika:");
jr_define('_JRPORTAL_NEWUSER_PASSWORD',"Twoje hasło:");
jr_define('_JRPORTAL_NEWUSER_LOG_IN',"Zaloguj się aby zobaczyć swoje rezerwacje");
jr_define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kod rabatowy został zapisany.');
jr_define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kod rabatowy został usunięty.');
jr_define('_JOMRES_COM_GROWL','Użyj wiadomości Jomres');
jr_define('_JOMRES_COM_GROWL_DESC','Aktualizacje informacji zwrotnej w formie wiadomości Javascript, gdy strona jest przeładowana, użyj tej opcji, aby włączyć/wyłączyć tę funkcję.');
jr_define('_JRPORTAL_SMS_CLICKATELL_TITLE',"SMS Clickatell");
jr_define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Login");
jr_define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Hasło");
jr_define('_JRPORTAL_SMS_CLICKATELL_APIID',"API ID");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Numer telefonu komórkowego dla powiadomień SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Proszę używać formatu 'kod kraju, numer telefonu'. Na przykład polski numer telefonu komórkowego '48500600700'. Zostaw puste jeśli nie chcesz otrzymywać żadnych powiadomień SMS.");
jr_define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
jr_define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"<b>Oczywiście, nie można używać/testować tej bramki na localhost, trzeba to zrobić na produkcyjnym serwerze.</b>
	<br /><br />
	Aby korzystać z bramki Clickatell potrzebne jest konto Clickatell i co najmniej jedno zarejestrowane połączenie API między serwisem i bramką. Oto jak uruchomić Clickatel:
	<br /><br />
	<b>Krok 1 - Rejestracja na Clickatell.com</b>
	<br />
	Jeśli nie masz jeszcze konta w Clickatell, musisz się zarejestrować. W przeciwnym razie przejdź do kroku 2.
	<br />
	* Przejdź do http://www.clickatell.com/products/sms_gateway.php i wybierz odpowiedni subproduct API, metoda połączenia), którą chcesz użyć (Clickatell Centralny API).
	<br />
	* Kliknij na link rejestracji.
	<br />
	* Wypełnij formularz rejestracyjny.
	<br />
	Po pomyślnym przesłaniu formularza zostaniesz automatycznie zalogowany na nowe konto i przeniesiony na stronę, gdzie można dodawać wybrane połączenia API.
	<br />
	<b>Krok 2 - Dodaj połączenia API (sub-produkt)</b>
	<br />
	Jeżeli nie jesteś jeszcze zalogowany na swoim koncie, należy to zrobić na http://www.clickatell.com/login.php .
	<br />
	* Wybierz \"Manage my Products\" z górnego menu.
	<br />
	* Wybierz typ połączenia API, który chcesz użyć (HTTP API) z rozwijanego menu ('Dodaj połączenie').
	<br />
	* Wypełnij formularz. Upewnij się, że możesz wejść do zablokowanego IP (IP tego serwera), ustaw oddzwanianie do HTTP POST. Musisz ustawić IP oddzwonienia ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback i identyfikator użytkownika oraz hasło.
	<br />
	Jeśli zarejestrujesz więcej niż jedno połączenie API nazwę i opis należy wprowadzić dla każdego z nich i muszą być one unikalne - nie można mieć kilku interfejsów API o tej samej nazwie.
	<br />
	Po pomyślnym wysłaniu formularza wyświetlone zostaną dane uwierzytelniające. Każde połączenie ma unikalne API ID (api_id). Te dane uwierzytelniania są wymagane podczas podłączania do bramki Clickatell, aby możliwe było wysłanie wiadomości SMS.
	<br /><br />
	Użyj nazwy użytkownika, hasła i api_id i wypełnij pola poniżej.
	<br /><br />");

jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Lista rezerwacji zasobu');
jr_define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Lista rezerwacji zasobu dla maks klientów');
jr_define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Pamiętaj, że ceny widoczne za dostępne zasoby są szacunkowe i nieostateczne. Cena Twojej rezerwacji zostanie automatycznie obliczona z chwilą dodania do zamówienia wybranych pozycji.");
jr_define('_JOMRES_LASTEDITED_DB','Ostatnio edytowany szablon w bazie danych');
jr_define('_JOMRES_LASTEDITED_DISK','Ostatnio edytowany szablon na dysku serwera');
jr_define('_JOMRES_LASTEDITED_WARNINGICON','Ostrzeżenie! Szablon bazy danych');
jr_define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Szablon w bazie danych może być nieaktualny.');
jr_define('_JOMRES_LASTEDITED_WARNING','Wykryto, że szablon przechowywany w bazie danych <strong><i>może</i></strong> być starszy niż przechowywany na dysku. W takim przypadku możliwe jest, że szablon został zaktualizowany w nowszej wersji Jomres. Jeśli tak jest, to możliwe, że korzystanie z nowych, dodanych funkcji może być niemożliwe, a istniejące funkcje mogą nie działać zgodnie z oczekiwaniami. Należy porównać szablon z bazy z tym na dysku i upewnić, się że nie brakuje nowej funkcjonalności.');
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Pakiety abonamentowe");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nazwa");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Opis");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Opublikowany");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Częstotliwość");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Okres próbny");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Cena wersji próbnej");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Całkowity koszt");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Ograniczyć zasoby");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limit ofert");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Częstotliwość: M/Q/B/A - Monthly/Quarterly/Bianually/Anually");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Okres próbny: 0 (zero) nie ustawiać, 1 (jeden miesiąc), 2 (dwa miesiące) itd.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subskrybcja");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Proszę wpisać/zaktualizować dane abonenta. Należy pamiętać, że wszystkie pola są wymagane.");
jr_define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Imię");
jr_define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Nazwisko");
jr_define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Adres");
jr_define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Kraj");
jr_define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Kod pocztowy");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Abonament musi być ważny aby dodawać nowe oferty. Został zakupiony na");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2',"opublikowane.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Można zwiększyć liczbę ofert, które można tworzyć przez <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>zakup pakietu abonamentowego tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4',"Użyłeś");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5',"sloty ofert.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Aby zobaczyć listę bieżących ofert kliknij <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Aby zobaczyć listę dostępnych pakietów abonamentowych kliknij <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>tutaj</a>.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Niestety, nie można opublikować tej oferty, osiągnięto maksymalną liczbę dostępnych ilości ofert w Twoim abonamencie.");
jr_define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Dziękujemy za zamówienie abonamentu. <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>Kliknij tutaj, aby kontynuować.</a>");
jr_define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Z przykrością informujemy, że nie zdecydowałeś się zapisać w naszym serwisie. Daj nam znać, jeśli istnieje jakikolwiek sposób, w który możemy Ci pomóc.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_USE',"Obsługa abonamentów");
jr_define('_JOMRES_COM_NEWUSER','Utwórz nowego użytkownika');
jr_define('_JOMRES_COM_NEWUSER_DESC','Utwórz nowe konto użytkownika.');
jr_define('_JOMRES_CLICKTOREGISTER','Dodaj nową ofertę');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Aktywne abonamenty");
jr_define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Id abonamentu");
jr_define('_JRPORTAL_NEWUSER_SUBJECT',"Dziękujemy za rezerwacje - nowe dane użytkownika po");
jr_define('_JOMRES_LATLONG_DESC',"Użyj myszki do poruszania się po mapie, a następnie przeciągnij wskaźnik do lokalizacji oferty, aby ustawić długość i szerokość geograficzną.");
jr_define('_JOMRES_CONTROLPANEL','Mój kokpit');
jr_define('_JOMRES_COM_FAUXHEADERS','Nagłówki Jomres Javascript w BODY HTML?');
jr_define('_JOMRES_COM_FAUXHEADERS_DESC','Ustaw na Tak, jeśli masz problemy z konfliktem Mootools i Jomres jQuery w IE. To zmusi Jomres do wyprowadzania JavaScript w BODY zamiast w HEAD. Powinno to rozwiązać problem z jQuery i Mootools sprzecznymi ze sobą.');
jr_define('_JOMRES_MANAGER_SHOWINVOICE','Pokaż fakturę');
jr_define('_JOMRES_MANAGER_SHOWINVOICES','Faktury rezerwacji');
jr_define('_JOMRES_USER_LISTMYPROPERTY','Dodaj nową ofertę');
jr_define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Ostrzeżenie:');
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Możesz mieć jeden darmowy pakiet abonamentowy w systemie. Jeśli chcesz, możesz ustawić pakiet by zarówno ilość próbna i koszt całkowity na 0,00.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Przykro nam, ale ID pakietu abonamentowego nie został rozpoznany.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Przykro nam, jesteś już zapisany do darmowego pakietu abonamentowego, nie można zapisać się do tego pakietu ponownie.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL',"Status <b>0:</b> Do czasu zapłaty <b>1:</b> Stworzony <b>2:</b> Anulowane <b>3:</b> Koniec.");
jr_define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Moje abonamenty");
jr_define('_JOMRES_COM_YOURBUSINESS','Firma');
jr_define('_JOMRES_COM_YOURBUSINESS_NAME','Nazwa firmy');
jr_define('_JOMRES_COM_YOURBUSINESS_VATNO','NIP');
jr_define('_JOMRES_COM_YOURBUSINESSADDRESS','Numer budynku');
jr_define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>UWAGA: Poniższe stawki podatkowe są przeznaczone do wykorzystania przez rynek amerykański. Jeśli chcesz skorzystać z podatku liniowego w miejscu zakwaterowania, należy wybrać stawkę podatku w opcji powyżej.</FONT>');
jr_define('_JOMRES_INVOICE_NUMBER','Faktura nr');
jr_define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Wybierz daty, które chcesz zablokować w kalendarzu rezerwacji. Po wybraniu odpowiednich dat, kliknij przycisk "Zastosuj", aby ponownie sprawdzić dostępność.
	<br /><br />
	Jeżeli w ofercie istnieje jedna lub więcej rezerwacji w wybranym okresie, to nie będzie można zablokować możliwości rezerwacji w wybranym terminie.');

jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Przepraszamy, nie możesz zablokować rezerwacji tej oferty w wybranym terminie.');
jr_define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Możesz zablokować rezerwację tej oferty w wybranym terminie.');
jr_define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Twoja oferta jest skonfigurowana do pobierania płatności za osobę za noc, ale nie masz utworzonych lub opublikowanych żadnych rodzajów klientów. Należy stworzyć i opublikować jeden lub więcej rodzaj klientów.');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Jeśli nie masz jeszcze skonfigurowanych cen, nie będzie można składać żadnych rezerwacji w Twojej ofercie.');
jr_define('_JOMRES_EDITINGMODE_ON','Tryb edycji włączony');
jr_define('_JOMRES_EDITINGMODE_OFF','Tryb edycji wyłączony');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Zmienne kwoty depozytów');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Zmienne kwoty depozytów pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data początku rezerwacji jest X dni od "dziś". Ustaw Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień początku rezerwacji jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Liczba dni, za które cała kwota zostanie pobrana jako depozyt.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN','Wyślij wiadomość e-mail na alternatywny adres');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Ustaw Tak, jeśli chcesz wysyłać wiadomości e-mail na alternatywny adres podany poniżej. Zostaw ustawione na Nie, aby wysyłać maile na adres określony w obszarze konfiguracji ofert.');
jr_define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternatywny adres e-mail.');
jr_define('_JOMRES_CONFIRMATION_EMAIL_SENT','Wiadomość e-mail z potwierdzeniem została wysłana. Możesz zamknąć to okno.');
jr_define('_JOMRES_REALESTATE_TITLE','Prawdziwy wykaz ofert');
jr_define('_JOMRES_REALESTATE_YESNO','Obsługa pojedyńczej oferty');
jr_define('_JOMRES_REALESTATE_YESNO_DESC','Ustaw Tak, jeśli oferójesz możliwość rezerwacji całej oferty (domek letniskowy), wybierz Nie, jeśli twoja oferta to hotel/pensjonat gdzie wynajmowane będą pomieszczenia.');
jr_define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Kontakt');
jr_define('_JOMRES_INVOICE_MARKASPAID','Oznacz jako Zapłacona');
jr_define('_JOMRES_INVOICE_MARKEDASPAID','Faktura oznaczona jako zapłacona');
jr_define('_JOMRES_APIKEY_REMAKE','Dodaj nowy klucz API');
jr_define('_JOMRES_AUTOTRANSLATE_TITLE','Użyj Google dla pierwszych tłumaczeń');
jr_define('_JOMRES_AUTOTRANSLATE_DESC','Funkcja ta jest nowa i eksperymentalna, więc używaj jej na własne ryzyko. Celem funkcji jest zapytanie narzędzia do tłumaczenia Google, by automatycznie skonfigurować tłumaczenia dla danej oferty.<br />');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Obsługa dla jednej oferty');
jr_define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Jeśli opcja ta jest ustawiona na Tak, wtedy widok nakładki z Jomres dla użytkowników nieautoryzowanych jest znacznie uproszczony. Idealne jeśli chcesz mieć tylko jedną ofertę i przyjmować rezerwacje tylko dla niej.<br />');
jr_define('_JOMRES_HTMP_PURIFIER','Funkcja HTML oczyszczacz');
jr_define('_JOMRES_HTMP_PURIFIER_DESC','Włącz jeśli chcesz używać bibliotek oczyszczania HTML (http://htmlpurifier.org/). Biblioteka jest używana jako dodatkowa warstwa zabezpieczeń w kontaktach z danymi wejściowymi i wyjściowymi i zaleca się, aby pozostawić włączoną, jednak będzie to wymagało większej ilości pamięci.');
jr_define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Płatność końcowa');
jr_define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Wartość');
jr_define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Uwaga! Używasz globalnego trybu edycji. Jest to dobre rozwiązanie jeśli dobrze rozumiesz co oznacza ta funkcja. Jeśli nie jesteś pewien, czy należy używać Jomres w ten sposób, patrz <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">tryb edycji ręcznej</a> więcej informacji na ten temat.');
jr_define('_JOMRES_SUPPORTKEY','Kod wsparcia');
jr_define('_JOMRES_SUPPORTKEY_DESC','Kod wsparcia (znany również jako numer licencji). Umożliwia pobieranie dodatków dla Jomres.');
jr_define('_JOMRES_PERSONAL_DISCOUNT','Rabat');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Ogranicz dodawanie ofert dla jednego kraju');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Można ograniczyć możliwość dodawania ofert dla jednego kraju, poprzez ustawienie tej opcji na Tak i ustawienie kraju w następnej opcji.');
jr_define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Oferty znajdują się w tym kraju');
jr_define('_JOMRES_JQUERYTHEME','Szablon graficzny');
jr_define('_JOMRES_JQUERYTHEME_DESC','Wybierz szablon graficzny wykorzystywany w ramach systemu Jomres.');
jr_define('_JOMRES_PROPERTYNOTOUBLISHED','Przykro nam, ale ta oferta nie jest obecnie dostępna.');
jr_define('_JOMRES_REVIEWS','Recenzje');
jr_define('_JOMRES_REVIEWS_TITLE','Tytuł recenzji');
jr_define('_JOMRES_REVIEWS_DATE','Recenzja dodana');
jr_define('_JOMRES_REVIEWS_NOREVIEWS','Brakuje jeszcze recenzji dla tej oferty.');
jr_define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Chcesz być pierwszą osobą, która wyrazi swoją opinię na temat tej oferty?');
jr_define('_JOMRES_REVIEWS_IAGREE','Zgadzam się z tą recenzją');
jr_define('_JOMRES_REVIEWS_IDISAGREE','Nie zgadzam się z tą recenzją');
jr_define('_JOMRES_REVIEWS_AVERAGE_RATING','Średnia ocena:');
jr_define('_JOMRES_REVIEWS_TOTAL_VOTES','Suma głosów:');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW','Dodaj nową recenzję');
jr_define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Musisz być zalogowana/y aby dodać recenzję.');
jr_define('_JOMRES_REVIEWS_REVIEWBODY','Powiedz nam co myślisz o tej ofercie:');
jr_define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Ten recenzent powiedział nam:');
jr_define('_JOMRES_REVIEWS_PROS','Plusy oferty:');
jr_define('_JOMRES_REVIEWS_CONS','Minusy oferty:');
jr_define('_JOMRES_REVIEWS_SUBMITTEDDATE','Dodał:');
jr_define('_JOMRES_REVIEWS_ALREADYREVIEWED','Napisz recenzję tej oferty');
jr_define('_JOMRES_REVIEWS_CANNOTREVIEW','Przykro nam, ale nie możesz pisać recenzji na tej stronie.');
jr_define('_JOMRES_REVIEWS_CLICKTOSHOW','Zobacz recenzje');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW','Klienci zgadzają się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW','Klienci nie zgadzają się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR','Klient zgadza się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','Klient nie zgadza się z tą recenzją.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Dziękujemy za podzielenie się opinią o tej ofercie.');
jr_define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Dziękujemy, ale już wyraziłaś/eś swoją opinię o tej ofercie.');
jr_define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Prosimy się upewnić, że wszystkie pola zostały wypełnione.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Prosimy podsumować swoją recenzję wpisując jej tytuł.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Prosimy wprowadzić bardziej szczegółowy komentarz w polu opisu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Prosimy wprowadzić plusy tej oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Prosimy wprowadzić minusy tej oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Prosimy ocenić jakość oferty.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Prosimy ocenić stosunek ceny do jakości.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Prosimy ocenić uprzejmość personelu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Prosimy ocenić profesjonalizm personelu.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Prosimy ocenić jakość dodatkowych usług.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Prosimy ocenić jakość dodatkowych usług w stosunku do ceny.');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Podsumowanie recenzji');
jr_define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Recenzja bardziej szczegółowo');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Dziękujemy za wyrażenie swojej opinii.');
jr_define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Dziękujemy za wyrażenie swojej opinii. Zostanie ona wkrótce opublikowana przez jednego z naszych moderatorów.');
jr_define('_JOMRES_REVIEWS_ADMIN_CONTROL','Użyj funkcji przeglądu Jomres');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatycznie publikuj recenzje');
jr_define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Jeśli ustawisz na Nie będziesz musiał ręcznie publikować recenzje.');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Recenzje w trybie testowym');
jr_define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Oczywiście nie jest to idealne rozwiązanie w środowisku produkcyjnym.');
jr_define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Jest to lista wszystkich ofert. Aby zobaczyć recenzje oferty kliknij na tej ofercie. Następnie będziesz mógł opublikować lub usunąć recenzję.');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Liczba nieopublikowanych recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Całkowita liczba recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publikowanie/Cofnięcie recenzji');
jr_define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Usuń recenzję');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW','Raport recenzji');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Raporty recenzji');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Podaj swój raport');
jr_define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Zobaczyłaś/eś coś niewłaściwego? Zgłoś to nam, sprawdzimy to.');
jr_define('_JOMRES_REVIEWS_SUBMIT','Wyślij');
jr_define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Raport stworzony przez');
jr_define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Raporty są publikowane przez użytkowników, którzy mogą nie zgadzać się z treścią przeglądu. Jedynym sposobem na usunięcie raportu jest usunięcie recenzję.');
jr_define('_JOMRES_REVIEWS_RATING','Oceny (1 = słaba, 10 = doskonała)');
jr_define('_JOMRES_REVIEWS_RATING_1','Jakość oferty');
jr_define('_JOMRES_REVIEWS_RATING_2','Stosunek ceny do jakości');
jr_define('_JOMRES_REVIEWS_RATING_3','Uprzejmość personelu');
jr_define('_JOMRES_REVIEWS_RATING_4','Profesjonalizm personelu');
jr_define('_JOMRES_REVIEWS_RATING_5','Jakość dodatkowych usług');
jr_define('_JOMRES_REVIEWS_RATING_6','Stosunek ceny do jakości dodatkowych usług');
jr_define('_JOMRES_REVIEWS_REVIEWED_BY','Korekta dokonana przez:');
jr_define('_JOMRES_REVIEWS_CLICKTOHIDE','Ukryj recenzje');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Formularz rezerwacji na stronie szczegółów oferty');
jr_define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Ustaw Tak, aby pokazać formularz rezerwacji na stronie szczegółów oferty. Jeśli ustawisz Nie, wówczas pojawi się link do formularza zamiast formularza rezerwacji.');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE','Ceny ustawione łącznie z podatkiem');
jr_define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Jeśli ceny ustalasz łącznie z podatkiem wybierz Tak.');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','VAT - Opcje dodatkowe');
jr_define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Dzień pól tygodnia? Można ustawić szybkość dla danego dnia tygodnia, po kliknięciu przycisku dzień tygodnia wszystkie dni tygodnia zostaną ustawione na tym kursie.');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Zbieracze dat i stawek wejść pozwala ustawić jedną cenę dla danego zakresu dat. Wybierz datę rozpoczęcia i zakończenia, podaj cenę, a następnie kliknij przycisk "Ustaw ceny".');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Rozpocznij zakres');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Zakończ zakres');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Stawka');
jr_define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Ustaw stawki');
jr_define('_JOMRES_PARTNERS_TITLE','Partnerzy');
jr_define('_JOMRES_CALENDAR_TODAY','Dzisiaj');
jr_define('_JOMRES_CALENDAR_PREV','Poprzedni');
jr_define('_JOMRES_CALENDAR_NEXT','Następny');
jr_define('_JOMRES_CALENDAR_RTL','Fałszywy');
jr_define('_JOMRES_ROOMALLOCATIONS_ROOM','Zasób');
jr_define('_JOMRES_ROOMALLOCATIONS_GUESTS','Klient');
jr_define('_JOMRES_ROOMALLOCATIONS_INFORMATION','To jak mamy przypisane numery klientów do swoich zasobów. Jeśli chcesz zmienić ten przydział, będziesz musiał skontaktować się z personelem po dokonaniu rezerwacji. Dodatkowe opłaty mogą być zastosowane w przypadku zmiany rezerwacji.');
jr_define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Należy pamiętać, że oferta nie została jeszcze opublikowana. Odwiedzający nie będą mogli jej zobaczyć.");
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Domyślna kolejność sortowania wyników');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Zmień tę opcję, aby zmienić domyślną kolejność prezentowania wyników wyszukiwania.');
jr_define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Pokaż wynik wyszukiwania na liście rozwijanej');
jr_define('_JOMRES_ROOMMSLIST_STYLE','Styl listy zasobów');
jr_define('_JOMRES_ROOMMSLIST_STYLE_DESC','W formularzu rezerwacji, przy użyciu "Klasyczny" wyświetl styl, który oferuje pojedyncze zasoby dla klientów. Z uwagi na zasób, klienci mogą wybrać liczbę zasobówX (np. 2 x podwójna).');
jr_define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Klasyczny');
jr_define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Zasoby');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','Sprawdzanie dostępności');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Przebudowa listy dostępnych zasobów');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Obliczanie sumy');
jr_define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Aktualizacja została zakończona.');
jr_define('_JOMRES_COM_CALENDAR_STARTDAY','Dzień rozpoczęcia tygodnia');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Tylko klienci danej oferty mogą dodawać recenzję');
jr_define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Ustaw Tak, jeśli chcesz ograniczyć możliwość dodawania recenzji tylko do tych użytkowników, którzy byli już klientami danej oferty.');
jr_define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Za zasób');
jr_define('_JOMRES_MAX_GUESTS_PER_ROOM','Za klientów w zasobie');
jr_define('_JOMRES_MAX_GUESTS_PER_BOOKING','Za klientów w rezerwacji');
jr_define('_JOMRES_NUMBER_OF_ROOMS','Liczba zasobów');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Taryfa domyślna');
jr_define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Dotyczy to tylko nowych taryf.");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Pokaż lata");
jr_define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Określa liczbę lat pokazywanych podczas edycji taryf.");
jr_define('_JRPORTAL_MONTHS_LONG_0','Styczeń');
jr_define('_JRPORTAL_MONTHS_LONG_1','Luty');
jr_define('_JRPORTAL_MONTHS_LONG_2','Marzec');
jr_define('_JRPORTAL_MONTHS_LONG_3','Kwiecień');
jr_define('_JRPORTAL_MONTHS_LONG_4','Maj');
jr_define('_JRPORTAL_MONTHS_LONG_5','Czerwiec');
jr_define('_JRPORTAL_MONTHS_LONG_6','Lipiec');
jr_define('_JRPORTAL_MONTHS_LONG_7','Sierpień');
jr_define('_JRPORTAL_MONTHS_LONG_8','Wrzesień');
jr_define('_JRPORTAL_MONTHS_LONG_9','Październik');
jr_define('_JRPORTAL_MONTHS_LONG_10','Listopad');
jr_define('_JRPORTAL_MONTHS_LONG_11','Grudzień');
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Sposób zarządzania");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Istnieją różne tryby zarządzania ofertami w zależności od sposobu, który chcesz stosować w swoim biznesie.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Wynajem");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Wybierz wynajem jeśli chcesz oferować możliwość rezerwacji swojej oferty.");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Ogłoszenie");
jr_define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Wybierz aukcję jeśli chcesz sprzedać jakiś przedmiot.");
jr_define('JOMRES_COM_A_MINIMALCONFIG_DESC','Ustaw Tak, aby zmniejszyć liczbę opcji dostępnych dla managera oferty w sekcji Konfiguracja Systemu.');
jr_define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Proszę wybrać opcję rezerwacji.');
jr_define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Włącza edytor HTML w szczegółach ofert. Dodatkowo, jeśli jest ustawione na Nie, wówczas wszystkie znaczniki HTML z wyjątkiem p oraz br zostaną usunięte z wszystkich wprowadzanych i wyświetlanych tekstów.');
jr_define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Widok pełnoekranowy");
jr_define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Widok klasyczny");
jr_define('_JOMRES_COM_TIMEZONE_SWITCHER',"Przełącznik języków na pasku narzędzi managera");
jr_define('_JOMRES_PARTNER_DISCOUNT',"Rabat partnera");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Szukaj użytkownika");
jr_define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Wpisz kilka znaków by wyszukać użytkownika.
	<br />
	Po wybraniu użytkownika będziesz mógł dodać go jako partnera i przypisać mu wybrane oferty i rabaty.");

jr_define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Twoi obecni partnerzy");
jr_define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Wybierz partnera, którego dane chcesz edytować.");
jr_define('_JOMRES_PARTNER_SHOW_TITLE',"Partner:");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Szukaj oferty");
jr_define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Wpisz kilka znaków z nazwy oferty i wybierz odpowiednią.
	<br />
	Po wybraniu oferty należy przypisać ją do partnera, jednak nie będzie on jeszcze korzystał z żadnych rabatów, trzeba będzie ustawić jeszcze te opcje.");

jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Aktualna oferta");
jr_define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Kliknij na ofercie by edytować rabaty partnera dla tej oferty.");
jr_define('_JOMRES_SUSPENSIONS_TITLE',"Zawieszone?
	<br />
	Kliknij, aby zawiesić managera, będzie to cofnięcie wszystkich jego ofert.");

jr_define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Kliknij wstrzymaj (ikona z człowiekiem i zielonymi kleszczami) by zawiesić managera. Oznacza to, że manager nie będzie w stanie wykonywać funkcji zarządzania ofertami, a wszystkie ich właściwości będą publikowane. Super Manager nie może zostać zawieszony.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"To konto zostało zawieszone, nie jest obecnie możliwe administrowanie ofertami używając tego konta.");
jr_define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Zawieszone konto managera");
jr_define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Odwieszone konto managera");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Pamiętaj, że Twoje konto managera ofert zostało zawieszone. Nie będziesz w stanie wykonywać żadnych funkcji zarządzania ofertami aż konto zostanie przywrócone.");
jr_define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Pamiętaj, że Twoje konto managera ofert jest już aktywne. Możesz nadal wykonywać wszelkie funkcje zarządzania ofertami.");
jr_define('_JOMCOMP_MYUSER_REMOVE','Usuń z ulubionych');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE','Archiwum danych');
jr_define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Archiwum danych rezerwacji jest to zrzut informacji rezerwacji zrobiony po naciśnięciu przycisku rezerwacja. Najedź na datę aby zobaczyć surowy zrzut danych. Informacje te są przechowywane w tabeli XXX__jomres_booking_data_archive .');
jr_define('_JOMRES_MY_ACCOUNT_EDIT','Moje dane');
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Szukaj użytkowników");
jr_define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Wpisz kilka znaków z nazwy użytkownika, aby wyszukać go.
	<br />
	Po wybraniu użytkownika będziesz mógł dodać go jako manager i zostaniesz przeniesiony do strony, gdzie można przypisać oferty i prawa dostępu dla użytkowników.");

jr_define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Obecni managerowie");
jr_define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Wybierz managera aby zostać przeniesionym na stronę administracji.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Liczba osób");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Pokaż wyszukiwanie według liczby osób wybieranej z listy rozwijanej.");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Szukaj według ilości gwiazdek");
jr_define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Pokaż wyszukiwanie według liczby gwiazdek wybieranej z listy rozwijanej.");
jr_define('_JOMRES_SEARCH_GUESTNUMBER','Liczba osób');
jr_define('_JOMRES_SEARCH_STARS','Liczba gwiazdek');
jr_define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Faktury prowizyjne");
jr_define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Liczba ofert");
jr_define('_JOMRES_CONFIG_JQUERY',"Obciążenie Jomres biblioteki jQuery");
jr_define('_JOMRES_CONFIG_JQUERY_DESC',"Można ustawić na Nie jeśli masz szablon, który używa jQuery. Może to rozwiązać problemy z jQuery i konflikty na niektórych szablonach, ale nie wszystkie.");
jr_define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Jeśli używasz JoomFish, należy ustawić na Nie, i używać JoomFish Language Switcher. Przełącznik jest zawsze włączony w obszarze administratora, ponieważ jest on potrzebny w przypadku korzystania z funkcji Tłumaczenia Label.');
jr_define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Miniatury są tworzone automatycznie dla przesyłanych zdjęć.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Małe miniaturki (szerokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Małe miniaturki są używane w wykazie ofert, podczas gdy średnie miniatury są używane w nagłówku ofert.');
jr_define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Małe miniaturki (wysokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Średnie miniaturki (szerokość maks px)');
jr_define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Średnie miniaturki (wysokość maks px)');
jr_define('_JOMRES_TOUCHTEMPLATES','Tłumaczenie');
jr_define('_JRPORTAL_ROI_TAB',"Abonamenty");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE',"Obsługa faktur prowizyjnych");
jr_define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Ustaw Tak, aby uruchomić obsługę faktur prowizyjnych.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Obsługa faktur rezerwacji");
jr_define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Ustaw Tak, aby uruchomić obsługę faktur rezerwacji.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"Nowa faktura prowizja została podniesiona.");
jr_define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"Nowa faktura prowizja została podniesiona. Proszę kliknąć na poniższy link, aby zobaczyć fakturę (być może trzeba się najpierw zalogować).");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Automatycznie zawieś oferty z przekroczonym terminem płatności");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Automatycznie zawiesić gdy przekroczono");
jr_define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"Jest to liczba dni w czasie jakim manager musi zapłacić fakturę, zanim zostanie on zawieszony, a jego oferty wyłączone z publikacji w portalu.");
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT','Kontekst języka');
jr_define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Użyj tej opcji do zmiany kontekstu języka. Funkcja ta pozwala używać etykiet, które są odpowiednie dla aktualnej działalności.');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Konfiguracja zaawansowana');
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Ustaw Tak, jeśli chcesz korzystać z zaawansowanych opcji konfiguracyjnych. Jeśli dopiero zaczynasz z Jomres, to radzimy zostawić ustawione na Nie.');
jr_define('_JOMRES_CONFIG_JQUERY_UI',"Obciążenie Jomres biblioteki jQuery UI");
jr_define('_JOMRES_SORTORDER_PRICE_DESC','Cena (najpierw najwyższa)');
jr_define('_JOMRES_SORTORDER_PRICE_ASC','Cena (najpierw najniższa)');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Podsumowanie płatności i szacunki powinny być wycenione jako za dobę/za tydzień/miesiąc, za?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Za noc');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Za tydzień');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Za miesiąc');
jr_define('_JOMRES_BOOKINGFORM_PERPERSON','Za osobę');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','Tydzień na');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','Miesiąc na');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Opcja szukaj klienta');
jr_define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Dotyczy wszystkich modułów wyszukiwania. Podczas korzystania z funkcji wyszukiwania klienta numer, powinien wyglądać funkcja szukaj ofert, które taryfy będą obsługiwać klientów numerów i równa wybrany numer, dokładnie równy numer wybrany lub numer wybrany i większe?');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Proszę czekać, zamówienie jest przetwarzane.
	<br />
	W celu dokonania płatności zostaniesz przekierowany do serwisu transakcyjnego PayPal.');

jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Jeśli automatycznie nie zostałeś przekierowany do systemu PayPal w przeciągu 5 sekund...');
jr_define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Kliknij Tutaj');
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Rezerwacja od");
jr_define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Rezerwacja do");
jr_define('_JRPORTAL_COUPONS_GUESTNAME',"Nazwa klienta");
jr_define('_JRPORTAL_COUPONS_DESC_478',"Kody rabatowe mogą być generowane i przekazywane klientom jako zachęta do dokonywania rezerwacji.
	<br />
	Jeśli chcesz by rezerwacja była dostępna dla jednego konkretnego gościa, wybierz nazwę tego gościa i ogranicz kupon do tego tylko gościa.
	<br />
	Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.");

jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Rezerwacja została odrzucona z");
jr_define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO',"Do");
jr_define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Ustaw Nie, aby wyłączyć ładowanie zarówno jQuery UI Javascript i pliki CSS.");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Biblioteka jQuery UI CSS");
jr_define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Ustaw Nie, aby wyłączyć tylko plik jQuery UI CSS.");
jr_define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Brutto");
jr_define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Oferta nie opublikowana');
jr_define('_JOMRES_CONVERSION_TITLE',"Użyj funkcji konwersji");
jr_define('_JOMRES_CONVERSION_TITLE_DESC',"Użyj funkcji konwersji online Jomres. Pozwoli to oferować wybór waluty z listy rozwijanej dla użytkowników i wyświetlanie cen w ich walucie.");
jr_define('_JOMRES_CONVERSION_DISCLAIMER',"Użyliśmy wszelkich starań, aby otrzymać najbardziej dokładne i aktualne kursy walut. Internetowa funkcja konwersji walut to usługa świadczona wyłącznie w celach informacyjnych i nie ma na celu dostarczenie dokładnych danych liczbowych. W związku z tym nie możemy zagwarantować dokładności kursów walut.");
jr_define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Użyj buforowania Javascript");
jr_define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Wybierz, czy korzystać z funkcji Jomres buforowania JavaScript. Działa na większości serwerów, ale nie na wszystkich. Jeśli masz problemy z błędami Javascript, które są zgłaszane jako 'niezakończona stała łańcuchowa' w (na przykład) Firebug, należy ustawić to na Nie.");
jr_define('_JOMRES_HISTORIC_GUESTS_SHOW',"Lista historycznych i obecnych klientów");
jr_define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Tylko aktualni klienci");
jr_define('_JOMRES_CURRENCYCONVERSION_TAB','Waluta');
jr_define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Wykrywanie API Key');
jr_define('_JOMRES_IP_DETECTION_API_KEY_DESC','Aby automatycznie ustawić kod waluty na liście rozwijanej Jomres jest w stanie wykorzystać bezpłatną usługę o nazwie IPinfoDB, która pozwala wykryć kraj gośća. Musisz jednak zarejestrować się na stronie <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> i zdobyć klucz API.');
jr_define('_JOMRES_DEBUGGING_TAB','Debugowanie');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP','Pokaż formularz rezerwacji w oknie popup');
jr_define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','Jeśli opcja pokazywania formularza rezerwacji w szczegółach ofert jest ustawiona na Nie, wówczas, gdy strona otwiera się formularz rezerwacji może zostać pokazany w oknie popup.');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Wynosi lokalizację panelu');
jr_define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','W formularzu rezerwacji panel sumy potrzebuje różnych ustawień w zależności od szablonu. Na przykład w szablonie Joomla Jomres ustawienie 712 działa dobrze, jednak na Drogi Mlecznej ustawienie ok. 1500 jest bardziej właściwe, zwłaszcza jeśli nie masz okna popup funkcja jest włączona. Prawdopodobnie, że będziesz musiał eksperymentować z różnymi ustawieniami, aby znaleźć coś, co działa dobrze w wybranym szablonie.');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Kwota netto');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Kwota brutto');
jr_define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','VAT - Zasób');
jr_define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Otwórz formularz rezerwacji');
jr_define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Wróć do szczegółów oferty');
jr_define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatycznie wybrany?');
jr_define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Pozostała kwota');
jr_define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filtrowanie zasobów na podstawie ich cech.');
jr_define('_JOMRES_DATEPERIOD_LATESTBOOKING','Ostatnia rezerwacja');
jr_define('_JOMRES_DATEPERIOD_SECOND','sekunda');
jr_define('_JOMRES_DATEPERIOD_MINUTE','minuta');
jr_define('_JOMRES_DATEPERIOD_HOUR','godzina');
jr_define('_JOMRES_DATEPERIOD_DAY','dzień');
jr_define('_JOMRES_DATEPERIOD_WEEK','tydzień');
jr_define('_JOMRES_DATEPERIOD_MONTH','miesiąc');
jr_define('_JOMRES_DATEPERIOD_YEAR','rok');
jr_define('_JOMRES_DATEPERIOD_DECADE','dekada');
jr_define('_JOMRES_DATEPERIOD_S','s');
jr_define('_JOMRES_DATEPERIOD_AGO','temu');
jr_define('_JOMRES_DATEPERIOD_FROMNOW','od teraz');
jr_define('_JOMRES_WHOLEDAY_TITLE','Rezerwacje są całymi dniami');
jr_define('_JOMRES_WHOLEDAY_DESC','Domyślnie oferty rezerwowane są na noc, więc rezerwacja od pierwszego stycznia '.date("Y",strtotime("przyszły rok")).' do 2 stycznia '.date("Y",strtotime("przyszły rok")).' obejmuje tylko jedną noc. Jeśli ustawisz tę opcję na Tak, wtedy rezerwacja obejmie całe dni zamiast, więc rezerwacja w tych dniach obejmie oba dni, a klient będzie rozliczane przez dwa dni.');
jr_define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Za dzień');
jr_define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Za osobę za dzień');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Rezerwacja od');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Rezerwacja do');
jr_define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"dzień(ni) za");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Nieprawidłowa data końca rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','Czas rezerwacji jest zbyt krótki. Musi być co najmniej, pomiędzy początkową i końcową datą rezerwacji:');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Rezerwacja od/Rezerwacja do minimum interwał');
jr_define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','Przedział mimimum dni w formularzu rezerwacji pomiędzy początkiem i końcem rezerwacji. Przedział 1 oznacza, że początek i koniec terminu rezerwacji mogą być ustawione na ten sam dzień, jednak nadal jest to zależne od minimalnego odstępu i obliczane automatycznie przez silnik rezerwacji, ponieważ sprawdza taryfy, które są ważne przez okres rezerwacji.');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Podsumowanie płatności i szacunki powinny być wycenione jako na dzień/za tydzień/miesiąc, za?');
jr_define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Za dzień');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Dni przed terminem początku rezerwacji');
jr_define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','Minimalna liczba dni, które muszą upłynąć od "dziś", przed datą początku rezerwacji.');
jr_define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Ustaw Tak, jeśli chcesz ograniczyć rezerwacje (użyj następne pole do ustawienia limitu z punktu widzenia dni). Jeśli nie ustawisz na Tak wtedy, gdy użytkownik próbuje zarezerwować więcej niż X dni wcześniej to ich data początku rezerwacji zostanie przywrócona do dzisiejszej daty.');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Pokaż pole daty końca rezerwacji');
jr_define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Ustaw Nie, jeśli nie chcesz pokazać pola daty końca rezerwacji.");
jr_define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','Jeśli ustawisz na Tak, wtedy rezerwacja zostanie podjęta na czas określony. Jeśli jest ustawiona na Nie, wówczas zapewnienie, że "zdefiniowane dni początku rezerwacji ustawione na Tak (chyba, że specjalnie chcesz zmusić klientów do rozpoczynania rezerwacji w określonym dniu tygodnia) inaczej nie dostaniesz wiele linków w dostępności kalendarza.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Predefiniowane dni początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Tylko dla stron oferujących stałe rezerwacje. Wybierz dzień tygodnia będący początkiem rezerwacji.');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Stałe dni początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Stały dzień początku rezerwacji');
jr_define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','Kiedy stałe dni początku rezerwacji są zaznaczone, liczba terminów, które mogą w terminach listy rozwijanej. Zauważ, że lista dat nie zawiera żadnych dat, jeśli rezerwacja nie jest możliwa ze względu na wcześniejsze rezerwacje, a lista będzie rzeczywiście dwa razy tak długo, jak wybranym numerem bo będzie miał podobną liczbę historycznych dat (jeśli jest dostępny).');
jr_define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Od osoby, za dzień');
jr_define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Wybierz Tak, jeśli chcesz pobierać opłaty za osobę za dzień. Jeśli Nie, wówczas koszty będą obliczane na podstawie za stawkę za dzień.');
jr_define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Zmienne depozyty pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data początku rezerwacji jest X dni od "dziś". Ustaw Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień początku rezerwacji jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
jr_define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Funkcja umożliwia przyciągnięcie klientów do zasobów, które mogłyby być pominięte i niezarezerwowane w danym czasie.
	<br />
	Włączenie i konfiguracja funkcji pozwala zaoferować regulację cen na podstawie liczby zasobówwybranego typu które są dostępne w ofercie w danym dniu.
	<br />
	Ilość określa liczbę dni, w jakim musi mieścić się data początku rezerwacji zanim ceny zasobówzostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu zasobówktóre mogą być dostępne przed zastosowaniem danego rabatu.');

jr_define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Próg (liczba dni pomiędzy dniem początku rezerwacji a dniem składania rezerwacji)');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Oczekiwanie');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Dzisiaj rezerwacja');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Klient obecny');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Dzisiaj wyrejstrowanie');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Przeterminowane');
jr_define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Klient nie dotarł');
jr_define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Dni');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Oznacz rezerwacje podniosłem.');
jr_define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Oznacz rezerwacje zwrócone.');
jr_define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Oznacz rezerwacje podniósł');
jr_define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Oznacz rezerwacje zwrócone');
jr_define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Koszt za dzień:');
jr_define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Liczba dni:');
jr_define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Zastąp cenę rezerwacji');
jr_define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Zapisz i zastąp');
jr_define('_JOMRES_BOOKINGFORMWIDTH','Szerokość formularz rezerwacji w px');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED','Panel cen zawsze widoczny');
jr_define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','Panel wyświetlający podsumowanie płatności będzie zawsze widoczny w formularzu rezerwacji.');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Powiadom nowych użytkowników o ich danych logowania');
jr_define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','Jeśli tak ustaw na Tak. Możesz ustawić tę opcję na Nie, aby mieć pewność, że dane logowania nie są wysyłane do użytkowników. Może to być przydatne, jeśli nie chcesz, aby użytkownicy rzeczywiście mogli się zalogować.');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Kwota podatku w skróconej formie');
jr_define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Jeśli chcesz zapobiec w formularzu rezerwacji wyświetlaniu ceny netto w podsumowaniu płatności ustaw na Nie.');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Anulowanie rezerwacji ilość dni');
jr_define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Zalogowani, zarejestrowani klienci mogą anulować własne rezerwacje. Tutaj można ustawić ilość dni w których rezerwacja nie może być anulowana po upływie określonej liczby dni przed datą początku rezerwacji.');
jr_define('_JOMRES_EDIT_PROFILE','Edycja profilu');
jr_define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Dostępność dla następujących rodzajów ofert');
jr_define('_JOMRES_IMAGE','Zdjęcie');
jr_define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Cecha dostępna w następujących rodzajach ofert');
jr_define('_JOMRES_CRATES_CLICKINITIAL','Kliknij literę, aby wyświetlić wszystkie oferty których nazwa rozpoczyna się od tego znaku. Gdy masz listę ofert można przypisać stawki prowizji do tych ofert lub kliknij na ich "edycji" ikonę, aby wyświetlić statystyki.');
jr_define('_JRPORTAL_TAX_RATE_EDIT',"Edycja stawek podatku");
jr_define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edycja pola niestandardowego");
jr_define('_JOMRES_LICENSESERVER_PASSWORD',"Serwer licencji - Hasło");
jr_define('_JOMRES_LICENSESERVER_USERNAME',"Serwer licencji - Login");
jr_define('_JOMRES_LICENSESERVER_USERNAME_DESC',"Jeśli masz login i hasło na serwerze licencji, wpisz je tutaj. To pomoże Ci uzyskać dostęp do dodatkowych wtyczek Jomres. Jeśli podałeś prawidłowy klucz wsparcia w polu powyżej, to nie ma potrzeby podawania nazwy użytkownika i hasła tutaj.");
jr_define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"Twoja wersja Jomres to:");
jr_define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Najnowsza wersja Jomres to:");
jr_define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Uwaga! Dostępna jest już nowa wersja Jomres, zaleca się uaktualnienie systemu do najnowszej wersji.");
jr_define('_JOMRES_PRODUCT_INFORMATION','Witamy w Jomres - Ulubionym systemie rezerwacji. Jeśli chcesz kupić Srebrną lub Złotą Licencję Jomres <a href="http://www.jomres.net/prices" target="_blank">odwiedź naszą stronę</a>.');
jr_define('_JOMRES_PRODUCT_INFORMATION2','System ten jest idealnym rozwiązaniem dla każdego scenariusza, bez znaczenia jest to czy ma to być prosty formularz rezerwacji dla jednej oferty czy większej ich liczby.');
jr_define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Aktywna oferta");
jr_define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Przełączenie oferty");
jr_define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Kliknij w znak, aby wyświetlić wszystkie oferty których nazwa rozpoczyna się od wybranego znaku. Gdy zostaną wyświetlone kliknij na nazwę wybranej oferty, aby przełączyć ją na obecnie autoryzowaną, aktywną ofertę, którą będziesz mógł zarządzać zgodnie ze swoimi uprawnieniami.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"SMTP");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Ustaw Tak, aby korzystać z SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Host");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Zmień na serwer poczty SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Port");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Zmień port SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Protokół");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"W zależności od ustawień serwera SMTP, musisz pozostawić puste lub wpisać 'SSL' lub 'TLS'. Poproś dostawcę o pomoc.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Użyj uwierzytelniania");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"Jeżeli serwer SMTP wymaga uwierzytelniania ustaw na Tak. Podaj następnie login i hasło użytkownika.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Login");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"Podaj login do konta SMTP.");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Hasło");
jr_define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"Podaj hasło do konta SMTP.");
jr_define('_JOMRES_WARNING_SYSTEM_CACHE',"Ostrzeżenie! Wykryto, że twoja Joomla ma uruchomioną funkcję buforowania systemu. Radzimy wyłączyć tę funkcję gdyż może powodować niestabilne zachowanie systemu Jomres.");
jr_define('_JOMRES_QUICK_INFO',"Podgląd");
jr_define('_JOMRES_MENU_SHOW',"Pokaż");
jr_define('_JOMRES_MENU_HIDE',"Schowaj");
jr_define('_JOMRES_MENU_SHOW_TITLE',"Alternatywny układ menu");
jr_define('_JOMRES_MENU_SHOW_DESC',"Ustaw Tak, aby skorzystać z alternatywnego układu menu na froncie serwisu.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Domyślnie");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Każdy");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Zarejestrowany");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nikt");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE',"Kontrola dostępu do menu");
jr_define('_JOMRES_ACCESS_CONTROL_DESC',"Funkcja ta pozwala kontrolować, kto będzie w stanie zobaczyć daną opcję w menu głównym. Zazwyczaj opcje użytkowników 00009 są widoczne przez niezarejestrowanych odwiedzających witrynę, 00010 opcje zasadniczo odnoszą się do kategorii działalności typu recepcji, które są używane na codzień, natomiast 00011 opcje służą do instalowania i konfigurowania właściwości, ale są dostępne rzadziej.");
jr_define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Recepcjonistka");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Pełna kontrola dostępu");
jr_define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Ustaw Tak, aby umożliwić pełne funkcję kontroli dostępu, a następnie odwiedź ustawienia kontroli dostępu.");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Należy jednak pamiętać, że te ustawienia nie kontrolują podstawowych skryptów np. jeśli ustawisz <i>00009user_option_03_search</i> do 'Kierownik' użytkownik, który zna Jomres może jeszcze dostać się do np. j06000search.class.php wprowadzając http://www.domain.com/index.php?option=com_jomres&task=search w swoim pasku adresu przeglądarki. Jest to celowe, ponieważ kontrola dostępu do menu po prostu kontroluje, co można zobaczyć w głównym Jomres menu.");
jr_define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Pełna kontrola dostępu");
jr_define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>Funkcja ta jest tylko dla zaawansowanych użytkowników. Jeśli nie wiesz, co to jest, i nie ma konkretnego powodu, aby jej użyć, należy powrócić do konfiguracji strony i ustawić pełną opcję kontroli dostępu na Nie.</strong>
	<br />
	Funkcja ta pozwala kontrolować, kto ma dostęp do jakich opcji menu (z pewnymi wyjątkami, które są zapisane w systemie). Jeśli poziom dostępu do skryptu obok nazwy jest domyślny, a następnie z opcją Pełna kontrola dostępu ustawiona na Tak <strong>Każdy</strong> może uzyskać dostęp do skryptów, do których nie powinien mieć dostępu więc jeśli zamierzasz korzystać z tej funkcji należy ustawić poziom kontroli dostępu dla <strong>Każdego</strong> składnika Jomres. Jeśli nie wiesz co te składniki robią to radzimy nie korzystać z tej funkcji w ogóle.
	<br />
	Poziomy dostępu w Jomres przypominają piramidę, więc Super Manager są większe niż Manager. W skrócie: Super Manager > Manager > Recepcjonistka > Zarejestrowany > Niezarejestrowany. Tak więc, jeśli Zarejestrowany użytkownik ma dostęp do składnika Jomres może więc dodać Recepcjonistki, Managerów i Super Managerów.
	<br />
	Pamiętaj, że nie można kontrolować składników Jomres w obszarze administratora. Użytkownik w obszarze administratora jest uważany za zaufanego użytkownika.");

jr_define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Uwaga! Masz włączoną pełną kontrolę dostępu. System kontroli dostępu wykrył, że istnieją dodatki, do których dostęp nie został ograniczony. Jest to kwestia bezpieczeństwa Twojego serwisu. Musisz rozwiązać ten problem. Odwiedź strefę kontroli dostępu i ustal odpowiednie poziomy dostępu do poszczególnych obszarów systemu.");
jr_define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Użytkownicy z uprawnieniami administratora dla tej oferty");
jr_define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"Wyświetl wszystkie faktury");
jr_define('_JOMRES_DEBUGGING_SUBJECT','Temat');
jr_define('_JOMRES_DEBUGGING_FULLNAME','Twoje imię i nazwisko');
jr_define('_JOMRES_DEBUGGING_YOUREMAIL','Twój adres e-mail');
jr_define('_JOMRES_DEBUGGING_ISSUE','Proszę opisać swój problem');
jr_define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
jr_define('_JOMRES_EXTRAS_MODELS_PARAMS','Parametry');
jr_define('_JOMRES_EXTRAS_MODELS_FORCE','Wymuszenie');
jr_define('_JOMRES_METATITLE','Tytuł META');
jr_define('_JOMRES_METADESCRIPTION','Opis META');
jr_define('_JOMRES_FOUNDPROPERTIES',"Dostępne oferty");
jr_define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Dodaj swoją ofertę: Krok 1 z 2");
jr_define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Dodaj swoją ofertę: Krok 2 z 2");
jr_define('_JOMRES_MYPROPERTIES','Moje oferty');
jr_define('_JOMRES_CART_TITLE','Moje propozycje rezerwacji');
jr_define('_JOMRES_CART_INFO','Uwaga, te rezerwacje nie zostały jeszcze zapisane. Jeśli się wylogujesz lub Twoja sesja wygaśnie zostaną one utracone. Pamiętaj, aby potwierdzić rezerwację.');
jr_define('_JOMRES_CART_CONFIRM_BOOKINGS','Potwierdź rezerwację');
jr_define('_JOMRES_CART_OR','lub');
jr_define('_JOMRES_CART_SAVEFORLATER','Zapisz na później');
jr_define('_JOMRES_CART_NOBOOKINGS_SAVED','Nie masz jeszcze zapisanych rezerwacji.');
jr_define('_JOMRES_CART_VIEWCART','Zobacz koszyk');
jr_define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Katalog plików językowych');
jr_define('_JOMRES_DEFAULT_LAT_STARTPOINT','Domyślna szerokość geograficzna');
jr_define('_JOMRES_DEFAULT_LONG_STARTPOINT','Domyślna długość geograficzna');
jr_define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','Jest to startowy punkt wyświetlany na mapach Google na stronach serwisu.');
jr_define('_JOMRES_CLEARDATES','Nie wybrałeś jeszcze daty swojej rezerwacji.');
jr_define('_JOMRES_MOBILE_REDIRECT','Strony dla urządzeń mobilnych');
jr_define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres zawiera funkcję, która przekierowuje użytkownika do strony która nie zawiera modułów i nagłówków, gdy wykryje, że przeglądarka należy do urządzenia mobilnego. Jeśli masz Joomla szablon, który jest już zoptymalizowany dla urządzeń mobilnych, można wyłączyć tę funkcję przez ustawienie tej opcji na Nie.');
jr_define('_JOMRES_SYSTEM_EMAILS','Adres e-mail serwisu');
jr_define('_JOMRES_SYSTEM_EMAILS_DESC',"Pozostaw pole puste aby wyłączyć funkcję. Wiadomości do klientów będą wysyłane z adresów e-mail. podanych w ofertach. Jeśli wprowadzisz adres e-mail w tym miejscu wiadomości do klientów będą wysyłane z tego adresu.");
jr_define('_JOMRES_CSS_CACHING_TITLE',"Użyj buforowania CSS");
jr_define('_JOMRES_CSS_CACHING_DESC',"Buforuje pliki CSS, przyśpiesza wczytywanie stron.");
jr_define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Wyraźne zaznaczenie pola wyboru daty w kalendarzach");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"Lista");
jr_define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Siatka");
jr_define('_JOMRES_COMPARE',"Porównywarka");
jr_define('_JOMRES_REMOVE',"Usuń");
jr_define('_JOMRES_RETURN_TO_RESULTS',"Wróć do wyników wyszukiwania");
jr_define('_JOMRES_ADDTOSHORTLIST',"Dodaj do ulubionych");
jr_define('_JOMRES_REMOVEFROMSHORTLIST',"Usuń z ulubionych");
jr_define('_JOMRES_VIEWSHORTLIST',"Moje ulubione");
jr_define('_JOMRES_COOKIEPOLICY_TITLE',"Pliki cookie");
jr_define('_JOMRES_COOKIEPOLICY_DESC',"Prawodawstwo UE wymaga, aby wszystkie strony internetowe, które używają plików cookie uzyskały zgodę od odwiedzających witrynę użytkowników do przechowywania plików cookies na ich komputerach/urządzeniach.
	<br />
	Jeśli opcja jest włączona, użytkownicy zobaczą stronę gdzie mogą zdecydować się na ciasteczko, które zostanie zapisane na ich komputerze/urządzeniu.");

jr_define('_JOMRES_COOKIEPOLICY_1',"Ważne! Pliki Cookie");
jr_define('_JOMRES_COOKIEPOLICY_2',"Używamy plików cookies, aby nasza strona była łatwiejsza w użyciu.");
jr_define('_JOMRES_COOKIEPOLICY_3',"Przeczytaj więcej...");
jr_define('_JOMRES_COOKIEPOLICY_4',"Prawodawstwo UE wymaga, aby wszystkie strony wyraźnie informowały o stosowaniu i sposobie wykorzystywania plików cookies.");
jr_define('_JOMRES_COOKIEPOLICY_5',"Mechanizm wyszukiwarki i rezerwacji wymaga użycia małego pliku cookies, który jednoznacznie identyfikuje przeglądarkę i umożliwia korzystanie z funkcjonalności naszego serwisu. Musisz zgodzić się na zapisanie tego pliku na Twoim komputerze. Jeśli nie wyrazisz zgody, dostęp do możliwości serwisu zostanie poważnie ograniczony.");
jr_define('_JOMRES_COOKIEPOLICY_6',"Tak, zgadzam się z polityką cookies.");
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Depozytem wymaganym jest koszt pierwszej nocy');
jr_define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Ceny są obliczane na podstawie za noc. Chcesz kaucję za jedną noc? Jeśli tak, to możesz zignorować poniższe opcje.');
jr_define('_JOMRES_NOTHINGINSHORTLIST',"Nie dodano jeszcze nic do ulubionych.");
jr_define('_JOMRES_MOBILE_SETTINGS',"Mobile");
jr_define('_JOMRES_SIMULATE_MOBILE',"Symulacja trybu mobilnego");
jr_define('_JOMRES_SIMULATE_MOBILE_DESC',"Ustaw Tak, aby wymusić na zawsze przechodzenie do widoku mobilnego. Przydatne, jeśli tworzysz szablony, które są dla urządzeń mobilnych.");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"IP dla symulacji");
jr_define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"Można skonfigurować ustawienia symulacji tylko dla wybranego IP = XXX.XXX.XXX.XXX, więc na przykład, jeśli tworzysz na localhost, należy ustawić numer IP na 127.0.0.1.");
jr_define('_JOMRES_SAFEMODE',"Tryb awaryjny");
jr_define('_JOMRES_SAFEMODE_DESC',"Ustaw Tak, aby uruchomić tryb awaryjny. Spowoduje to wyłączenie wszystkich wtyczek. Dostępne będą jedynie podstawowe funkcje systemu.");
jr_define('_JOMRES_PRICE_ON_APPLICATION',"POA");
jr_define('_JOMRES_USE_JOMRESEDITOR',"Włącz edytor WYSIWYG (zalecane)");
jr_define('_JOMRES_USE_JOMRESEDITOR_DESC',"Jeśli masz włączony edytor WYSIWYG, możesz skorzystać z edytora HTML dla CMS lub dostarczonego wraz z Jomres. Jest on zoptymalizowany pod kątem wykorzystania przez Managerów ofert i zaleca się, korzystanie z tego rozwiązania.");
jr_define('COMMON_NEXT',"Dalej");
jr_define('COMMON_CANCEL',"Anuluj");
jr_define('COMMON_SUBMIT',"Wyślij");
jr_define('COMMON_SAVE',"Zapisz");
jr_define('COMMON_DELETE',"Usuń");
jr_define('COMMON_RETURN',"Powrót");
jr_define('COMMON_CLOSE',"Zamknij");
jr_define('COMMON_BACK',"Cofnij");
jr_define('COMMON_HOME',"Home");
jr_define('COMMON_NEW',"Nowy");
jr_define('COMMON_SEND',"Wyślij");
jr_define('RECAPTCHA_TITLE',"reCaptcha");
jr_define('RECAPTCHA_INFO',"Captcha jest używany do zabezpieczenia formularzy przed robotami spamującymi. Aby użyć tego mechanizmu musisz zarejestrować sie w <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">Google reCaptcha</a> i zdobyć klucz publiczny i prywatny dla zabezpieczenia swojej domeny. Po otrzymaniu tych kluczy, wpisz je poniżej. Usługa reCapcha to bezpłatna usługa udostępniana przez Google.");
jr_define('RECAPTCHA_PUBLIC_KEY',"Klucz publiczny (Public key)");
jr_define('RECAPTCHA_PRIVATE_KEY',"Klucz prywatny (Private key)");
jr_define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Czas blokady");
jr_define('_JOMRES_BOOKINGFORM_LOCK_DESC',"Aby zapobiec niebezpieczeństwu podwójnych rezerwacji dla jednej oferty używany jest plik blokujący. Dzięki temu nie jest możliwa rezerwacja w tym samym terminie oferty, która znalazła się już w koszyku innego klienta. Domyślnie blokada zostanie usunięta po upływie 3600 sekund (jednej godzinie). Można zmienić czas potrzebny do wygaśnięcia tej blokady zmieniając wartość domyślną.");
jr_define('_JOMRES_BOOTSTRAPSWITCH',"Szablony Bootstrap");
jr_define('_JOMRES_BOOTSTRAPSWITCH_DESC',"Jeśli używasz szablon Bootstrap na froncie strony, należy ustawić tę opcję na Tak.");
jr_define('COMMON_ACTION',"Akcja");
jr_define('COMMON_VIEW',"Widok");
jr_define('BACKTOTOP',"Powrót do góry");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_WEAK',"Słaby");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_STRONG',"Silny");
jr_define('_JOMRES_INPUTFILTERING',"Filtrowanie");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_TITLE',"Poziom filtrowania");
jr_define('_JOMRES_INPUTFILTERING_LEVEL_DESC',"Większość danych, które są wprowadzane do systemu są czyszczone ze zbędnych tagów HTML, a następnie za pomocą funkcji filtrowania zmiennej PHPs bezpieczne już dane zostają wprowadzone do bazy danych. Jeśli masz włączony edytor HTML to ustaw tą funkcjonalność. Dostępne są dwa poziomy filtrowania: słabe i silne. Użyj słabej mocy filtrowania jeśli masz pełne zaufanie do pozostałych administratorów (jeśli są to znajomi, koledzy, pracownicy). Użyj silnej mocy filtrowania jeśli masz ograniczone zaufanie do pozostałych administratorów. Po ustawieniu mocy filtrowania na silne (zalecane) można określić dozwolone tagi HTML (ustawienie 'Dozwolone tagi HTML').");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE',"Dozwolone tagi HTML");
jr_define('_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC',"Możesz edytować dozwolone tagi HTML. Domyślnie są to: 'p,b,strong,a[href],i' (czyli: Paragraph, Bold, Strong, Links oraz Italics). Więcej informacji na temat dozwolonych tagów znajdziesz w dokumentacji na stronie: <a href='http://htmlpurifier.org' target='_blank'>htmlpurifier.org</a>. Chociaż można zmienić to ustawienie, radzimy pozostawić wartości domyślne.");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_TITLE',"Filtrowane pola edycyjne");
jr_define('_JOMRES_INPUTFILTERING_INPUTS_DESC',"Można określić, które pola formularza mają być filtrowane i oczyszczane ze niedozwolonych znaczników. Pola dodane do tej listy będą poddawane analizie przez HTML Purifier. Domyślnie są to: 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers'. Dodaj więcej pól poprzez wprowadzenie ich nazwy. Pola muszą być oddzielone spacją.");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_TITLE',"Informacje na stronie oferty w zakładkach");
jr_define('_JOMRES_PROPERTYDETAILS_INTABS_DESC',"Ustaw tę opcję na Tak, aby wyświetlić szczegółowe informacje w zakładkach. Ustaw na Nie, aby wyświetlić je bez zakładek.");
jr_define('COMMON_PRINT',"Drukuj");
jr_define('COMMON_EDIT',"Edycja");
jr_define('COMMON_COPY',"Kopiuj");
jr_define('_JOMRES_BOOTSTRAPSWITCH_INFO',"Joomla 3 domyślnie korzysta z Twitter Bootstrap. Jomres również udostępnia szablony i funkcje, które korzystają z możliwości tej technologii. Domyślnie, jeśli używasz Jomres na Joomla 3 przełączniki te są ustawione na Tak, ale można je ustawić na Nie, jeśli jest taka potrzeba (nie zalecane). Jeśli używasz wersji niższej niż Joomla 3 możesz zdecydować się na stosowanie szablonów Jomres Bootstrap, jednak domyślnie opcje te są ustawione na Nie.");
jr_define('_JOMRES_BOOTSTRAPSWITCH_FRONTEND',"Szablon Bootstrap na froncie");
jr_define('_JOMRES_BOOTSTRAPSWITCH_ADMINISTRATOR',"Szablon Bootstrap na zapleczu");
jr_define('_JOMRES_ALTERNATIVE_SEARCH_RESULTS',"Oto kilka alternatywnych opcji, które warto rozważyć.");
jr_define('_JOMRES_BEEZ_WARNING',"Uwaga! Twój szablon na froncie jest aktualnie ustawiony na Beez3. Należy pamiętać, że nasze szablony nie są kompatybilne z Beez3 i radzimy przełączyć szablon witryny na szablon Bootstrapped np. Protostar.");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT',"Automatyczne wykrywanie kraju użytkownika");
jr_define('_JOMRES_COM_CONFIGCOUNTRIES_AUTODETECT_DESC',"System automatycznie wykryje kraj użytkownika w formularzu rezerwacji. Możesz ustawić tę opcję na Nie i określić domyślny kraj pojawiający się w formularzu rezerwacji wybierając go w następnej opcji.");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_ABOUTJOMRES","O Jomres");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP","Pomoc");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN","1 Główne");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_GETTINGSTARTED","Szybki start");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAINTENANCE","Konserwacja systemu");
jr_define("_JOMRES_CUSTOMCODE_ACCESSCONTROL","Kontrola dostępu");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_DEVELOPERS","Narzędzia programisty");
jr_define("_JOMRES_CUSTOMCODE_ASAMODULE","ASAModule");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_LANGUAGES","Wersje językowe");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION","Generowanie dochodu");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_ACCOUNTING","Księgowość");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS","Rezerwacje");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STRUCTURE","Struktura serwisu");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_USERMANAGEMENT","Zarządzanie użytkownikami");
jr_define("_JOMRES_CUSTOMCODE_MANUAL","Instrukcja (online)");
jr_define("_JOMRES_CUSTOMCODE_MYACCOUNTONLINE","Moje konto (online)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_CRONJOBS","Zaplanowane zadania");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_PORTAL","Funkcjonalność portalu");
jr_define("_JOMRES_CUSTOMCODE_PLUGINMANAGER","Plugin manager");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_INTEGRATION","Integracje");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_STATS","Raporty i statystyki");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES","Podatki");
jr_define("_JOMRES_CUSTOMCODE_SUPPORT_TICKETS","Wsparcie (online)");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_HELP","Pomoc");
jr_define("_JOMRES_CUSTOMCODE_UPGRADES","Aktualizację");
jr_define("_JOMRES_CUSTOMCODE_MENUCATEGORIES_GATEWAYS","Metody płatności");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT","Taryfa domyślna");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_DEFAULT_DESC","Dotyczy to tylko nowych taryf.");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW","Ilość lat");
jr_define("_JOMRES_TARIFFTYPES_MISCSETTINGS_YEARSTOSHOW_DESC","Określa ilość lat widocznych podczas edycji taryf.");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING","Faktury");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MYACCOUNT","Dane konta");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGIN',"Zaloguj");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_LOGOUT',"Wyloguj");
jr_define('_JOMRES_CUSTOMCODE_JOMRESMAINMENU_SEARCH',"Szukaj");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_HOME","Recepcja");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOK","Księga rezerwacji");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PMS","Manager");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_ACCOUNTING","Faktury");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_SETTINGS","Ustawienia");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_MISC","Raportowanie");
jr_define("_JOMRES_PROPERTYCONFIG_SRPS","Zamawianie");
jr_define("_JOMRES_EDIT_COUNTRY_TITLE","Edycja kraju");
jr_define("_JOMRES_EDIT_COUNTRY_ID","Id kraju");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYCODE","Kod kraju");
jr_define("_JOMRES_EDIT_COUNTRY_COUNTRYNAME","Nazwa kraju");
jr_define("_JOMRES_EDIT_REGION_TITLE","Edycja regionu");
jr_define("_JOMRES_EDIT_REGION_ID","Id regionu");
jr_define("_JOMRES_EDIT_REGION_COUNTRYCODE","Kod kraju");
jr_define("_JOMRES_EDIT_REGION_REGIONNAME","Nazwa regionu");
jr_define("_JOMRES_COM_LISTCOUNTRIES","Lista krajów");
jr_define("_JOMRES_COM_LISTREGIONS","Lista regionów");
jr_define("_JOMRES_EXPORT_DEFINITIONS","Eksport tłumaczeń");
jr_define("_JOMRES_EXPORT_DEFINITIONS_INFO","Funkcja ta pozwala na eksport tłumaczeń języka, które zostały zbudowane przy użyciu funkcji tłumaczeń. W polu edycyjnym wyświetlone zostaną wszystkie dane wymagane do stworzenia nowego pliku językowego, wszystko co musisz zrobić, to skopiować i wkleić zawartość pola do nowego pliku językowego, który następnie można umieścić na serwerze.");
jr_define("_JOMRES_COM_TRANSLATE_COUNTRIESREGIONS","Tłumaczenie lokalizacji");
jr_define("_JOMRES_COM_TRANSLATE_LANGUAGEFILES","Tłumaczenie ciągów plików");
jr_define("_JOMRES_COM_NOTAMANAGER","Błąd! Nie jesteś zalogowany jako Super Manager. Jest to funkcja bezpieczeństwa.");
jr_define("_JOMRES_COM_LAYOUTS_DEFAULT","Domyślny wygląd listy ofert");
jr_define("_JOMRES_COM_LAYOUTS_DEFAULT","Domyślny układ listy");
jr_define('_JOMRES_LASTEDITED_WARNING_72','Jomres korzysta z własnych szablonów. Jeśli jesteś projektantem to możesz zmienić w łatfy sposób wygląd systemu, wystarczy edytować wybrany temat graficzny. Ta funkcja edycji szablonów pozwala na tworzenie własnych wersji szablonów Jomres.
	<br /><br />
	Edytując szablon masz możliwość dokonania zmian specyficznych dla wszystkich typów ofert lub określonego typu oferty czy modułu. Np. szablon graficzny modułu wyświetlającego losowe oferty to basic_module_output.html . W rezultacie można tworzyć różne warianty układu graficznego.
	<br /><br />
	Jeśli szablon nie został jeszcze zmodyfikowany, to możesz na jego podstawie stworzyć nowy. W tym celu wybierz opcję "Nowy". Na kolejnej stronie będzie można edytować ten szablon. Bazowy układ szablonu graficznego jest pobierany z katalogu na Twoim serwerze /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend Po kliknięciu w przycisk "Zapisz", zostanie on zapisany w bazie danych i z niej pobierany. Dzięki temu możesz mieć gwarancję, że wprowadzone modyfikację nie zostaną nadpisane przy okazji aktualizacji systemu.
	<br /><br />
	Po dostosowaniu szablonu otrzymasz więcej opcji. Można utworzyć nową kopię oryginalnego szablonu, można skopiować zmiany do nowego szablonu, przypisać go do wybranego typu oferty etc. Usuwając swój szablon wykorzystywany na powrót będzie szablon domyślny zapisany w katalogu /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend .
	<br /><br />
	System Jomres stale ewoluuje i szablony podstawowe są często aktualizowane/modyfikowane. Jeśli korzystasz z funkcji edycji szablonów będziesz musiał po aktualizacji systemu zweryfikować swoje szablony porównując je z plikami bazowymi szablonów zapisanymi w /'.JOMRES_ROOT_DIRECTORY.'/templates/xxx/frontend . Jeśli plik szablonu w tym katalogu będzie nowszy niż ten zapisany w bazie danych otrzymasz odpowiedni komunikat. Chcąc mieć pewność, że korzystasz z wszystkich nowych funkcji i ulepszeń systemu po aktualizacji systemu przeprowadź porównanie plików szablonu pod względem zawartości w nich wszystkich funkcjonalności.');

jr_define("_JOMRES_STAYFORAMINIMUMOF","Minimum");
jr_define("_JOMRES_NIGHTSFOR"," nocy ");
jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS","Pokaż zdjęcie GIF oferty na liście ofert jeśli zdjęcia lub slajd jest dostępny.");
jr_define("_JOMRES_PROPERTYLIST_IMAGESASGIFS_FEATURED_ONLY","Pokaż jako GIF tylko wtedy, gdy oferta jest aktywna.");
jr_define("_JOMRES_AGENT","Agent");
jr_define("_JOMRES_AGENT_DETAILS","Dane agenta");
jr_define("_JOMRES_AGENT_LISTINGS","Lista agentów");
jr_define("_JOMRES_PROPERTY_LANG","Język oferty");
jr_define("_JOMRES_PROPERTY_LANG_DESC","Będzie to domyślny język tej oferty.");
jr_define("_JOMRES_APPROVALS_CONFIG_TITLE","Automatyczna aktywacja nowych ofert");
jr_define("_JOMRES_APPROVALS_CONFIG_DESC","Jeśli Nie, to trzeba będzie ręcznie aktywować nowe oferty. Dopóki oferty nie zostaną aktywowane nie będzie istniała możliwość publikacji oferty w serwisie.");
jr_define("_JOMRES_APPROVALS_MENU_NAME","Aktywacja ofert");
jr_define("_JOMRES_APPROVALS_PROPERTIES_AWAITING_APPROVAL","Oferty oczekujące na aktywację");
jr_define("_JOMRES_APPROVALS_PROPERTIES_NO_AWAITING_APPROVAL","Obecnie nie ma ofert oczekujących na aktywację.");
jr_define("_JOMRES_APPROVALS_APPROVE","Aktywuj oferty");
jr_define("_JOMRES_APPROVALS_REVIEW","Skomentuj ofertę");
jr_define("_JOMRES_APPROVALS_NOT_APPROVED_YET","Ta oferta nie została jeszcze aktywowana. Po aktywacji będzie można ją opublikować.");
jr_define("_JOMRES_APPROVALS_CANNOT_PUBLISH","Niestety, nie można opublikować tej oferty, gdyż nie została jeszcze aktywowana.");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_SUBJECT","Nowa oferta oczekuje na aktywację");
jr_define("_JOMRES_APPROVALS_ADMIN_EMAIL_CONTENT","Nowa oferta została dodana do systemu i oczekuje na aktywację. Kliknij link, aby wyświetlić więcej informacji: ");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_SUBJECT","Twoja oferta została aktywowana");
jr_define("_JOMRES_APPROVALS_MANAGER_EMAIL_CONTENT","Gratulacje, oferta została aktywowana. Prosimy kliknąć w poniższy link, aby przejść na stronę administracji: ");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_TITLE","Tłumaczenie nazwy regionu");
jr_define("_JOMRES_REGION_TRANSLATION_SWITCH_DESC","Jeśli używasz bardzo szybkiego serwera możesz wybrać wartość Nie. Ze względu na dużą liczbę nazw regionów, ich tłumaczenie zajmuje dużo pamięci, która może spowolnić uzyskiwanie wyników wyszukiwania.");
jr_define("_JOMRES_FRONT_MR_BOOKOUT_GUESTBOOKEDOUT","Klient został wymeldowany.");
jr_define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_ALREADY_IN_USE','Ten adres e-mail jest już używany przez innego użytkownika. Jeśli jest to Twój e-mail zaloguj się przed dokonaniem rezerwacji.');
jr_define("JOMRES_TAPTOCALL","Stuknij, aby zadzwonić.");
jr_define("JOMRES_NEWREVIEW_SUBJECT","Nowa recenzja");
jr_define("JOMRES_NEWREVIEW_MESSAGE","Nowa recenzja została dodana dla");
jr_define("JOMRES_NEWREPORT_SUBJECT","Nowy raport");
jr_define("JOMRES_NEWREPORT_MESSAGE","Nowy raport został dodany dla");
jr_define("JOMRES_NON_REGISTERED_USER","Użytkownik nie zarejestrowany");
jr_define("JOMRES_JQUERY18_2","Użyć jQuery 2.x?");
jr_define("JOMRES_JQUERY18_2_DESC","Jquery 2.x jest szybsze niż poprzednie implementacje, jednak brakuje tu pewnych rzeczy. Wsparcie dla IE6/7/8 i starszych przeglądarek Firefox i Safari nie jest oferowane. Jeśli widzisz błędy JavaScript na stronie, lub jeśli szablon/wtyczki (takie jak pokazy slajdów) używają starszych wersji jQuery należy ustawić tę opcję na Nie.");
jr_define("JOMRES_SUPERIOR","Lepszy");
jr_define("JOMRES_SUPERIOR_S","(S)");
jr_define("JOMRES_GRANDTOTAL_EX_TAX","Razem netto:");
jr_define("JOMRES_GRANDTOTAL_INC_TAX","Razem brutto:");
jr_define("JOMRES_GRANDTOTAL_TOTAL_TAX","Wartość VAT:");
jr_define("JOMRES_RECAPTCHA_INSTRUCTIONS_VISUAL","Wpisz dwa słowa:");
jr_define("JOMRES_RECAPTCHA_INSTRUCTIONS_AUDIO","Wpisz co słyszysz:");
jr_define("JOMRES_RECAPTCHA_PLAY_AGAIN","Odtwórz ponownie");
jr_define("JOMRES_RECAPTCHA_CANT_HEAR_THIS","Pobierz plik audio w formacie MP3");
jr_define("JOMRES_RECAPTCHA_VISUAL_CHALLENGE","Token graficzny");
jr_define("JOMRES_RECAPTCHA_AUDIO_CHALLENGE","Token audio");
jr_define("JOMRES_RECAPTCHA_REFRESH_BTN","Odśwież");
jr_define("JOMRES_RECAPTCHA_HELP_BTN","Pomoc");
jr_define("JOMRES_RECAPTCHA_INCORRECT_TRY_AGAIN","Niestety, kod tokena został wpisany błędnie. Prosimy spróbować ponownie.");
jr_define("JOMRES_GOOGLE_MAPS","Opcje map Google");
jr_define("JOMRES_GOOGLE_MAPS_INFO","Opcje te są dostępne głównie dla map na listach ofert i na stronach szczegółów ofert. Włączenie zbytniej ilości opcji może spowodować wolniejsze ładowanie dużych map. Włączenie tej opcji spowoduje wyświetlanie pogody na dodatkowych, rozszerzających możliwości systemu mapach.");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER","Włączyć warstwę Pogoda?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_GRAD","Farenheita czy Celsjusza?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_CELCIUS","Celsjusza");
jr_define("JOMRES_GOOGLE_MAP_OPTION_WEATHER_FARENHEIT","Farenheita");
jr_define("JOMRES_GOOGLE_MAP_OPTION_PANORAMIO","Włączyć warstwę Panoramio?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRANSIT","Włączyć warstwę Transit?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_TRAFFIC","Włączyć warstwę Traffic?");
jr_define("JOMRES_GOOGLE_MAP_OPTION_BICYCLING","Włączyć warstwę Bicycling?");
jr_define("JOMRES_GOOGLE_MAPS_POIS","Włącz punkty na mapach Google (może wyświetlać punkty konkurencji)?");
jr_define("_JOMRES_METAKEYWORDS","Słowa kluczowe");
jr_define("_JOMRES_PLEASE_PRINT","Proszę wydrukować potwierdzenie rezerwacji i przedstawić je w dniu przyjazdu.");
jr_define("_JOMRES_OFFICE_USE_ONLY","Używa tylko biuro");
jr_define("_JOMRES_SCAN_FOR_DIRECTIONS","Zeskanuj ten kod telefonem, aby uzyskać istotne wskazówki.");
jr_define("_JOMRES_VAT_FEATURE_ENABLE","Korzystaj z wbudowanej walidacji funkcji VIES dla VAT?");
jr_define("_JOMRES_VAT_FEATURE_ENABLE","Jest to funkcja, która pozwala właścicielom firm i klientom, na wprowadzenie numeru VAT, który w razie potrzeby wraz z innymi danymi znajdzie się na fakturze. Opcja przeznaczona dla firm i klientów z UE.");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_SYNTAX","Wprowadzony numer VAT jest niepoprawny. Prawidłowy format to: BE805670816B01.");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_COULDNOTVALIDATE","Nieprawidłowy numer VAT. Proszę sprawdzić prawidłowość swojego numeru VAT i jego zgodność z VAT UE. Usługa walidacji (VIES).");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_VALIDATED","Gratulacje. Udało się nam potwierdzić Twój numer VAT.");
jr_define("_JOMRES_VIES_VATCHECK_INCORRECT_NUMBERNOTENTERED","Numer VAT nie został wprowadzony.");
jr_define("_JOMRES_TAX_RULES_LIST","Lista stawek podatkowych");
jr_define("_JOMRES_TAX_RULE","Stawka podatkowa");
jr_define("_JOMRES_TAX_RULE_INFO","Stawki podatkowe są wykorzystywane do stosowania różnych przepisów podatkowych dla różnych regionów. Wpływają one na ceny końcowe i pozwalają na ich dostosowanie z uwzględnieniem stawek podatkowych stosowanych w danym regionie. Może się okazać, że stawki podatkowe nie będą musiały być stosowane.");
jr_define("_JOMRES_TAX_RATES_IMPORT","Importowanie stawek podatkowych");
jr_define("_JOMRES_TAX_RATES_IMPORT_INFO","Jeśli chcesz, stawki podatkowe stosowane w UE mogą zostać zaimportowane automatycznie. Uwaga, w przypadku korzystania z tej funkcji, usunięte zostaną wprowadzone ręcznie stawki podatków.");
jr_define("_JRPORTAL_TAX_RULE_EDIT","Edycja stawki podatku");
jr_define("_JOMRES_VAT_PROPERTY_NUMBER","Numer VAT dla tej oferty.");
jr_define("_JOMRES_VAT_PROPERTY_NUMBER_DESC","Proszę podać numer VAT dla tej oferty.");
jr_define("_JOMRES_VAT_PROPERTY_VAT_NUMBER_VALIDATED","Numer VAT został potwierdzony.");
jr_define("_JOMRES_VAT_PROPERTY_VAT_NUMBER_NOT_VALIDATED","Numer VAT nie został potwierdzony.");
jr_define("_JOMRES_COM_YOURBUSINESS_INSTRUCTIONS","Wprowadzone dane firmy będą używane w celach księgowych do wystawiania faktur.");
jr_define('_JRPORTAL_INVOICES_SUBSCRIPTION_PROFILE_ERROR_EXPL',"Dane konta nie zostały uzupełnione. Muszą zostać wprowadzone zanim przejdziemy dalej.");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT","Tryb Produkcyjny czy Rozwojowy?");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_DESC","Włączenie opcji trybu Rozwojowego uruchomi raportowanie błędów. Włącz jeśli prowadzisz pracę techniczne. W przeciwnym razie zalecamy pozostawienie włączonej opcji trybu Produkcyjnego.");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_PRODUCTION","Produkcyjny");
jr_define("_JOMRES_CONFIG_PRODUCTION_DEVELOPMENT_SETTING_DEVELOPMENT","Rozwojowy");
jr_define('_JOMRES_COM_MR_EB_HROOM_DETAILS','Szczegóły zasobów');
jr_define('_JOMRES_COM_MR_EB_HTARIFF_DETAILS','Informacje taryfowe');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_PRE','Mamy dostępne');
jr_define('_JOMRES_COM_MR_EB_HNUMBER_OF_ROOMS_POST','zasoby tego typu!');
jr_define('_JOMRES_COM_MR_EB_HRESOURCE_FEATURE','Cecha oferty');
jr_define('_JOMRES_COM_MR_RESOURCEFEATURE_UNABLETODELETE','Nie można usunąć tej cechy oferty jest przypisana do zasobu. Usuń cechę z tego zasobu i spróbuj ponownie.');

	$siteConfig=jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig=$siteConfig->get();

jr_define('_JOMRES_MEDIA_CENTRE_TITLE',"Centrum mediów");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_PROPERTY',"Przesyłanie zdjęć oferty");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_ADD',"Dodaj zdjęcia");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOM',"Zdjęcia zasobów");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY',"Zdjęcie główne oferty");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_SLIDESHOW',"Zdjęcia pokazu slajdów");
jr_define('_JOMRES_MEDIA_CENTRE_CLEAR',"Wyczyść listę");
jr_define('_JOMRES_MEDIA_CENTRE_DRAGNDROP',"Przeciągnij i Upuść tutaj pliki");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_INSTRUCTIONS',"Wybierz zasób, dla którego chcesz przesłać zdjęcia. Jeśli będziesz mógł przesłać zdjęcia dla poszczególnych zasobów (np. pokoi) zostanie wyświetlona lista rozwijana z możliwością wyboru odpowiedniego zasobu.");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',"Maksymalny rozmiar przesyłanego pliku to ". jomres_formatBytes($jrConfig[ 'fileSize' ]) . ". Akceptowane formaty plików to JPG i PNG.");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE',"Jeśli prześlesz kilka zdjęć jako \"Zdjęcie główne oferty\" tylko pierwsze z tych zdjęć będzie używane.");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_VIEW',"Zobacz zdjęcie");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_DELETE',"Usuń zdjęcie");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD',"Prześlij zdjęcie");
jr_define('_JOMRES_MEDIA_CENTRE_UPLOAD_CONTEXT_FEATURE_IMAGES',"Cechy ofert i zdjęcia zasobów");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_ROOMTYPE_IMAGES',"Zdjęcia zasobów");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_PROPERTY_FEATURES',"Zdjęcia cech ofert");
jr_define('_JOMRES_MEDIA_CENTRE_BUTTON_UPLOAD_ALL',"Prześlij wszystkie pliki");

	$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler');

jr_define('END_TOUR',"Zamknij");
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_TITLE',"Witamy w Państwa ofercie");
jr_define('TOUR_ID_TOUR_TARGET_MAIN_MENU_CONTENT',"Witamy na pulpicie nawigacyjnym. To jest główne menu. Aby zobaczyć swoją ofertę tak jak widzą ją klienci, kliknij na panelu, a następnie Podgląd.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_TITLE',"Jest to Twoja nazwa oferty");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_NAME_CONTENT',"Gdy jesteś zalogowany jako manager oferty, masz dostęp do swoich ofert. Nazwa obecnie autoryzowanej oferty jest zawsze widoczna. Jest to działająca oferta, którą można zarządzać. Należy pamiętać, że można pracować tylko na jednej ofercie jednocześnie, nie można mieć otwartych dwóch kart w przeglądarce i pracować na dwóch różnych ofertach w tym samym czasie.");
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_TITLE',"Jest to strefa czasowa rozwijanego selektora.");
jr_define('TOUR_ID_TOUR_TARGET_TIMEZONE_DROPDOWN_CONTENT',"Jest to przydatne, jeśli Twój serwer znajduje się w innej strefie czasowej. Pozwala na zachowanie synchronizacji czasu.");
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_TITLE',"Jest to wybór języka.");
jr_define('TOUR_ID_TOUR_TARGET_LANG_DROPDOWN_CONTENT',"Możesz zmienić bieżący język przy użyciu tego przełącznika. Jest to przydatne, jeśli chcesz, aby Twój opis oferty był dostępny w kilku językach. Możesz przejść do strony Szczegóły oferty i wprowadzić opis w języku A, a następnie użyć tego przełącznika, aby zmienić język na B i wprowadzić opis dostępny w tym właśnie języku.");
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_TITLE',"Jest to selektor trybu edycji.");
jr_define('TOUR_ID_TOUR_TARGET_EDITING_MODE_DROPDOWN_CONTENT',"Można dostosować etykiety na tej stronie poprzez włączenie trybu edycji. Aktywne etykiety, które można edytować zostaną podkreślone. Kliknij wybrany tekst, a zobaczysz okienko edycyjne, w którym można wpisać nowy tekst. To działa również dla różnych języków, można więc zmienić etykietę w języku A, a następnie przejść do języka B i zmienić tekst dostępny w tym języku.");
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_TITLE',"Jest to obszar zawartości.");
jr_define('TOUR_ID_TOUR_TARGET_CONTENT_CONTENT',"W tym obszarze można zobaczyć obecnie autoryzowaną ofertę, z którą pracujesz. Na stronie zostanie wyświetlony kalendarz. Najeżdżając kursorem na wybraną datę zobaczysz nazwisko klienta. Klikając wybraną datę zostaniesz przeniesiony do formularza rezerwacji a kliknięta data stanie się początkiem potencjalnej rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_TITLE',"Przełącznik obecnie autoryzowanej oferty");
jr_define('TOUR_ID_TOUR_TARGET_SWITCHER_ACTIVE_PROPERTY_INITIALS_CONTENT',"Kliknij w znak, aby wyświetlić wszystkie oferty których nazwa rozpoczyna się od wybranego znaku. Gdy zostaną wyświetlone kliknij na nazwę wybranej oferty, aby przełączyć ją na obecnie autoryzowaną, aktywną ofertę, którą będziesz mógł zarządzać zgodnie ze swoimi uprawnieniami.");
jr_define('TOUR_ID_FOUND_PROPERTIES_TITLE',"Jest to miejsce wyświetlania właściwości oferty.");
jr_define('TOUR_ID_FOUND_PROPERTIES_CONTENT',"Po kliknięciu w nazwę oferty, zostaną wyświetlone jej właściwości. Kliknij na nazwę wybranej oferty, aby przełączyć się na tą ofertę. Ta strona jest przydatna, jeśli trzeba zarządzać wieloma właściwościami.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_TITLE',"Jest to nagłówek oferty.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_HEADER_CONTENT',"Nagłówek jest widoczny na każdej stronie oferty dostępnej dla klientów. Wyświetla: nazwę oferty, liczbę gwiazdek (jeśli są dostępne), kod QR oraz opcjonalnie adres URL do strony internetowej oferty. Kod QR umożliwia klientom, przy pomocy ich np. telefonu komórkowego z aplikacją skanującą kody QR na wyświetlenie szczegółowych danych lokalizacyjnych oferty.");
jr_define('TOUR_ID_GALLERYWRAPPER_TITLE',"Twoja galeria zdjęć.");
jr_define('TOUR_ID_GALLERYWRAPPER_CONTENT',"Jest to miejsce pokazu slajdów, zdjęć Twojej oferty. Zdjęcia mające być wyświetlane w tym miejscu dodajemy z poziomu centrum mediów.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_TITLE',"Główne przyciski.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BUTTONS_CONTENT',"Jakie przyciski zostaną tutaj wyświetlone zależy od wybranych ustawień w obszarze konfiguracji systemu.");
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_TITLE',"Kalendarz dostępności oferty.");
jr_define('TOUR_ID_TOUR_TARGET_INLINE_CALENDAR_CONTENT',"Za pomocą tego kalendarza klienci już na pierwszy rzut oka mogą zobaczyć jak wygląda dostępność Twojej oferty w wybranym czasie i czy są jeszcze wolne terminy. Za pomocą dostępnych strzałek nad kalendarzem mogą przełączać się między wcześniejszymi i kolejnymi miesiącami.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_TITLE',"Zakładka listy zasobów.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMS_LIST_CONTENT',"Tutaj możesz zobaczyć wszystkie zasoby oraz ich dostępność po kliknięciu na widoczny przycisk.");
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_TITLE',"Lista recenzji.");
jr_define('TOUR_ID_TOUR_TARGET_REVIEWS_LIST_CONTENT',"To właśnie na tej karcie dostępne są wszystkie opinie na temat Twojej oferty jakie pozostawili Twoi klienci. Tylko klienci, którzy złożyli rezerwację przez nasz system mogą dodawać swoje opinie na temat oferty, z której skorzystali.");
jr_define('TOUR_ID_MAPTAB_TITLE',"Zakładka mapa.");
jr_define('TOUR_ID_MAPTAB_CONTENT',"W tej zakładce klienci mogą zobaczyć Twoją ofertę na mapie. Ważne jest poprawne uzupełnienie danych lokalizacyjnych oferty w konfiguracji jej szczegółów. Dzięki tej opcji klienci mają ułatwione zadanie zlokalizowania oferty i dotarcia pod właściwy adres.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_TITLE',"Zakładka więcej informacji.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MOREINFO_CONTENT',"W zakładce tej będą dostępne dodatkowe informację na temat Twojej oferty. Powinieneś dodać je w konfiguracji szczegółów swojej oferty. Uzupełnij informację odnośnie polityki prywatności, regulaminu i innych istotnych z punktu widzenia zarówno klienta jak i managera oferty kwestii.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_TITLE',"Formularz rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_BOOKING_FORM_CONTENT',"Twoi klienci mogą składać rezerwację w Twojej ofercie dzięki formularzowi rezerwacji wyświetlanemu w osobnej zakładce (bez przeładowania całej strony) lub po otwarciu w przeglądarce osobnej strony, na której znajduje się wyłącznie formularz rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_TITLE',"Główne opis oferty.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_MAIN_DETAILS_CONTENT',"W konfiguracji szczegółów oferty znajdziesz pole umożliwiające dodanie Ci opisu oferty. Zakładka z opisem oferty jest pierwszą jaką widzi klient, jest zawsze otwarta jako pierwsza i widoczna gdy klient odwiedza stronę Twojej oferty. Postaraj się więc by opis był w stanie przyciągnąć uwagę klienta do tego co masz mu do zaoferowania.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_TITLE',"Wszystkie dostępne cenniki.");
jr_define('TOUR_ID_TOUR_TARGET_PROPERTY_DETAILS_TARIFFS_CONTENT',"Jest to lista wszystkich cenników dostępnych w Twojej ofercie. Możesz skonfigurować wygląd listy i sposób definiowania cen z poziomu konfiguracji systemu. W obszarze cen i zasobówmożesz zdefiniować dostępne w Twojej ofercie cenniki. Masz do dyspozycji bardzo bogate możliwości konfiguracji cen.");
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_TITLE',"Lokalne wydarzenia.");
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_EVENTS_CONTENT',"Jeśli dostępne są jakieś wydarzenia, które mają miejsce w pobliżu danej oferty zostaną one wyświetlone na tej właśnie liście. Opcja jest używana do informowania o wydarzeniach takich jak: festiwale, targi, imprezy sportowe etc odbywające się w określonym czasie.");
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_TITLE',"Lokalne atrakcje.");
jr_define('TOUR_ID_TOUR_TARGET_LOCAL_ATTRACTIONS_CONTENT',"Jeśli dostępne są jakieś atrakcje, które mają miejsce w pobliżu danej oferty zostaną one wyświetlone na tej właśnie liście. Opcja jest używana do informowania o atrakcjach takich jak: kina, teatry, muzea i inne tego typu.");
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_TITLE',"Dostępne aukcje.");
jr_define('TOUR_ID_JOMRES_AUCTION_HOUSE_CONTENT_BODY_CONTENT',"Jeśli dodana została aukcja dla wybranej oferty, to dostępna będzie ona w tym właśnie miejscu. Aukcje są przydatnym sposobem docierania do klientów w spokojniejszych okresach lub jako element marketingowy maksymalizujący konwersję dla wybranej oferty.");
jr_define('TOUR_ID_TAB_BOOKINGROOMS_TITLE',"Konfiguracja rezerwacji.");
jr_define('TOUR_ID_TAB_BOOKINGROOMS_CONTENT',"W tym miejscu można skonfigurować sposób działania formularza rezerwacji z jakiego w Twojej ofercie korzystają klienci. Dostosuj ustawienia do rodzaju Twojej oferty i określ dostępne opcje dla uzyskania pożądanej funkcjonalności.");
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_TITLE',"Twoje dane biznesowe.");
jr_define('TOUR_ID_TAB_YOURBUSINESSDETAILS_CONTENT',"W miejscu tym uzupełnij dane swojej firmy, podaj jej nazwę, adres, NIP, informację umożliwiające szybki kontakt (telefon oraz e-mail). Dane te będą podawane na fakturach wystawianych dla klientów jak i generowanych przez nasz system dla Ciebie jako płatnika.");
jr_define('TOUR_ID_TAB_EXTERNALLINK_TITLE',"Adres URL.");
jr_define('TOUR_ID_TAB_EXTERNALLINK_CONTENT',"W miejscu tym możesz wprowadzić adres URL innej swojej strony internetowej. Adres ten będzie wyświetlany na stronach Twojej oferty dostępnych dla klientów. Możesz skorzystać z tej opcji by klienci mogli zapoznać się z Twoją działalnością na Twojej własnej stronie WWW.");
jr_define('TOUR_ID_TAB_GATEWAYS_TITLE',"Płatności.");
jr_define('TOUR_ID_TAB_GATEWAYS_CONTENT',"Jeśli posiadasz już konto w jednym z wymienionych tu systemów transakcyjnym możesz skonfigurować go do przyjmowania płatności online za rezerwację składane w Twojej ofercie. Jeśli nie masz jeszcze konta w żadnym systemie z jakim jesteśmy zintegrowani będziesz musiał się zarejestrować w wybranym serwisie jeśli chcesz zaoferować swoim klientom możliwość szybkich płatności online.");
jr_define('TOUR_ID_TAB_MISC_TITLE',"Różne.");
jr_define('TOUR_ID_TAB_MISC_CONTENT',"Na tej karcie dostępne są wszystkie opcje konfiguracyjne, które nie pasują do kategorii ustawień na żadnej z pozostałych kart w konfiguracji systemu rezerwacji. Ustaw je zgodnie z swoimi preferencjami.");
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_TITLE',"Ustawienia szczegółów oferty.");
jr_define('TOUR_ID_TAB_PROPERTYDETAILS_CONTENT',"W tym miejscu można zmodyfikować sposób wyświetlania różnego rodzaju elementów na stronie oferty. Po wprowadzeniu modyfikacji ustawień możesz przejść na stronę swojej oferty by zobaczyć jakie przełożenie na prezentację oferty mają wprowadzone tu zmiany ustawień.");
jr_define('TOUR_ID_TAB_REQUIRED_TITLE',"Wymagane elementy w formularzu rezerwacji.");
jr_define('TOUR_ID_TAB_REQUIRED_CONTENT',"W miejscu tym możesz zdecydować jakie z danych wprowadzanych w formularzu rezerwacji przez klientów mają być opcjonalne a jakie wymagane. Możesz np. wymagać obowiązkowo podania: imienia, nazwiska, adresu e-mail oraz numerów telefonów a jako elementy opcjonalne pozostawić pola danych adresowych.");
jr_define('TOUR_ID_TAB_SRPS_TITLE',"Dom/Apartament ustawienia.");
jr_define('TOUR_ID_TAB_SRPS_CONTENT',"W tym miejscu dostępne są ustawienia specyficzne dla typów działalności typu dom czy apartament gdzie rezerwacja przyjmowana jest na całość oferty (np. wynajmowany jest cały dom a nie poszczególne pokoje w nim się znajdujące). Najprościej ustawienia istotne dla jednej niepodzielnej oferty, zupełnie przeciwnie niż ma to miejsce w hotelu czy pensjonacie gdzie rezerwacje przyjmowane są na poszczególne np. pokoje, które znajdują się w ich ofercie.");
jr_define('TOUR_ID_TAB_SUPPLEMENTS_TITLE',"Dopłata do rezerwacji dla jednej osoby.");
jr_define('TOUR_ID_TAB_SUPPLEMENTS_CONTENT',"W miejscu tym możesz zdefiniować dopłatę doliczaną do rezerwacji składanej przez jednego klienta gdy zasób przeznaczony jest dla np. dwóch osób a cena rezerwacji jest obliczana w oparciu o ilość klientów w danej rezerwacji.");
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_TITLE',"Cennik.");
jr_define('TOUR_ID_TAB_TARIFFSCURRENCY_CONTENT',"Na tej stronie możesz skonfigurować w jaki sposób tworzone są cenniki w Twojej ofercie oraz to w jaki sposób obliczane są ceny za poszczególne rezerwację czy zasoby. Do Twojej dyspozycji jest szereg bardzo przydatnych funkcji, kryjących w sobie ogromne możliwości kształtowania cenników.");
jr_define('TOUR_ID_TAB_TOURISTTAX_TITLE',"Podatek turystyczny.");
jr_define('TOUR_ID_TAB_TOURISTTAX_CONTENT',"Jeśli w Twoim kraju lub mieście w miejscu prowadzenia działalności gospodarczej wymagany jest podatek turystyczny w tym miejscu możesz zdefiniować odpowiednie jego parametry. Podatek turystyczny będzie doliczany do rachunku klienta.");
jr_define('TOUR_ID_TAB_MICROMANAGE_TITLE',"Ustawienia micromanage.");
jr_define('TOUR_ID_TAB_MICROMANAGE_CONTENT',"Micromanage Specyficzne ustawienia cenników w trybie edycji mikromanage.");
jr_define('TOUR_ID_TAB_WISEPRICE_TITLE',"Roztropne ustawienia cen.");
jr_define('TOUR_ID_TAB_WISEPRICE_CONTENT',"Ten obszar konfiguracji systemu pozwala włączyć i skonfigurować ceny zasobówdynamicznie, co daje możliwość zaoferowania zniżek cen dla zasobówjeśli w kalendarzu rezerwacji obłożenie danego zasobu jest niskie.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE',"Twoje oferty.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT',"Na stronie tej masz dostęp do wszystkich zarządzanych przez siebie ofert. Z lewej strony widoczna jest informacja czy oferta została opublikowana dla szerszej publiczności. Jeśli nie, możesz opublikować wybraną ofertę lub jeśli chcesz możesz zdjąć ją z publikacji. Klikając na nazwę wybranej oferty przełączysz jej stan na aktualnie aktywny i wszystkie operację będą tyczyły się tej właśnie oferty.");
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_TITLE',"Dostępne tabele.");
jr_define('TOUR_ID_TOUR_TARGET_TABLE_TOOLS_CONTENT',"Dane są prezentowane w układzie tabeli. Po lewej stronie jest dostępna lista rozwijana, która pozwala na zmianę liczby elementów wyświetlanych na stronie. W następnej kolejności dostępne są przyciski, które umożliwiają eksportowanie danych z tabeli i ich zapis na Twoim komputerze. Możesz: 1. Skopiować dane do schowka. 2. Eksportować dane jako CSV. 3. Eksportować dane w formacie odpowiednim do użycia w programie Excel. 4. Masz możliwość eksportu danych i ich zapis w formacie PDF. 5. Możesz również skorzystać z dostępnej opcji druku, która przełączy układ i pozwoli na wydrukowanie danych. W końcu, po prawej stronie, dostępne jest pole wyszukiwarki, która pozwala na szybkie odszukanie interesujących pozycji. Każda z dostępnych w tabeli kolumn ma swój tytuł. Po kliknięciu w wybrany tytuł kolumny możemy posortować według niej (rosnąco lub malejąco) dostępne rekordy tabeli.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE',"Twoje oferty.");
jr_define('TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_CONTENT',"Na stronie tej masz dostęp do wszystkich zarządzanych przez siebie ofert. Z lewej strony widoczna jest informacja czy oferta została opublikowana dla szerszej publiczności. Jeśli nie, możesz opublikować wybraną ofertę lub jeśli chcesz możesz zdjąć ją z publikacji. Klikając na nazwę wybranej oferty przełączysz jej stan na aktualnie aktywny i wszystkie operację będą tyczyły się tej właśnie oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_TITLE',"Tworzenie oferty, krok 1.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_CONTENT',"Tworzenie nowej oferty jest procesem dwuetapowym. W pierwszym kroku należy określić lokalizację oferty, wybrać najbardziej odpowiedni rodzaj dodawanej oferty oraz sposób w jaki chcemy mieć możliwość zarządzania ofertą. Po określeniu wszystkich z dostępnych tu opcji możemy kliknąć w przycisk i przejść do drugiego kroku.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_TITLE',"Kraj oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_COUNTRY_CONTENT',"Tutaj z listy rozwijanej należy wybrać kraj w jakim znajduje się Twoja oferta. Po jego zdefiniowaniu przeładowana zostanie automatycznie lista z dostępnymi regionami / województwami i zostaną wyświetlone tylko te znajdujące się w wybranym kraju. Wybierz odpowiedni.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_TITLE',"Rodzaj oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROPERTY_TYPE_CONTENT',"Z tej listy rozwijanej wybierz kategorię, która najlepiej pasuje do rodzaju dodawanej oferty. Wybierz np. Apartament jeśli chcesz wynajmować całą ofertę lub np. Hotel jeśli wynajmowane będą np. pokoje znajdujące się w Twoim hotelu.");

	if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
		jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE',"Sposób zarządzania.");
		jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT',"Sposób zarządzania ofertą określa to w jaki sposób będzie można zarządzać ofertą i w jaki sposób zostanie ona udostępniona klientom. Wynajem - Jeśli chcesz skorzystać z systemu rezerwacji dla np. hotelu i zaoferować klientom dostępne w nim np. pokoje oraz świadczyć dodatkowe usługi, które również mogą być opcjonalnie dodawane w trakcie składania rezerwacji do zamówienia etc ta opcja będzie najbardziej odpowiednią. Również jeśli oferujesz wycieczki z dodatkowymi opcjami możesz zdecydować się na wybór tej opcji. Tours - Jeśli oferujesz rezerwację wycieczek, kursów etc i nie są oferowane dodatkowe opcję wybierz ten wariant. Ogłoszenie - Jeśli nie oferujesz żadnego najmu, rezerwacji tylko dodajesz ofertę w celach informacyjnych ta opcja będzie najbardziej odpowiednia.");
	}
	else
	{
		jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_TITLE',"Sposób zarządzania.");
		jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_1_PROCESS_CONTENT',"Sposób zarządzania ofertą określa to w jaki sposób będzie można zarządzać dodaną ofertą i w jaki sposób zostanie ona udostępniona klientom. Wynajem - Jeśli chcesz skorzystać z systemu rezerwacji dla np. hotelu i zaoferować klientom dostępne w nim np. pokoje oraz świadczyć dodatkowe usługi, które również mogą być opcjonalnie dodawane w trakcie składania rezerwacji do zamówienia etc ta opcja będzie najbardziej odpowiednią. Również jeśli oferujesz wycieczki z dodatkowymi opcjami możesz zdecydować się na wybór tej opcji. Ogłoszenie - Jeśli nie oferujesz żadnego najmu, rezerwacji tylko dodajesz ofertę w celach informacyjnych ta opcja będzie najbardziej odpowiednia.");
	}

jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_TITLE',"Tworzenie oferty, krok 2.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_CONTENT',"Teraz można rozpocząć wprowadzanie informacji o ofercie. Postaraj się podać jak najwięcej informacji. Dodaj nazwę oferty, jej adres, dane umożliwiające szybki kontakt (numery telefonów, adres e-mail). Określ położenie oferty na mapie i jej charakterystyczne cechy oraz poświęć chwilkę na solidne przygotowanie opisów, regulaminu etc. Po zatwierdzeniu oferty będzie można z poziomu centrum mediów dodać zdjęcia tej oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_TITLE',"MRP lub SRP.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_MRPSRP_CONTENT',"Dostępne są dwie opcje definiujące to jakim rodzajem oferty chcesz zarządzać z poziomu systemu rezerwacji. Wybierz MRP jeśli dla Twojej oferty dostępne są inne opcje, na które przyjmowane będą rezerwację np. pokoje w hotelu. Wybierz SRP jeśli chcesz zaoferować możliwość rezerwacji dla całej oferty np. apartamentu, domu, mieszkania. W zależności od dokonanego tu wyboru inny jest dostępny sposób konfiguracji cennika zasobu w ofercie.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_TITLE',"Nazwa oferty i adres.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_NAME_ADDRESS_CONTENT',"Należy wprowadzić nazwę oferty i jej adres.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_TITLE',"Ilość gwiazdek.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_STARS_CONTENT',"Jeśli Twojej ofercie została przyznana jakaś ilość gwiazdek w oparciu o ogólnie przyjęte normy, wybierz ich ilość z rozwijanej listy. W niektórych krajach obowiązuje rating np. hoteli według jednego standardu (np. Belgia, Dania, Grecja, Włochy, Malta, Holandia, Portugalia, Hiszpania i Węgry), który określa ich ocenę. W Niemczech, Austrii i Szwajcarii, ocena jest przyznawana przez odpowiednie stowarzyszenie przemysłu hotelowego przy użyciu skali pięciu gwiazdek. Ich ilość odpowiada ich następującej klasyfikacji: Tourist (*), Standard (**), Comfort (***), First Class (****) i Luxury (*****). (*****) z oznaczeniem Superior mówi, że standard jest wyższy niż ten jaki wymagany jest do uzyskania w klasyfikacji pięciu gwiazdek.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_TITLE',"Lokalizacja oferty na mapie.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_LATLONG_CONTENT',"Lokalizacja oferty jest wyświetlana na mapie na stronie oferty widocznej dla klienta. Określ położenie oferty wpisując szerokość oraz długość geograficzną (w prawidłowym określeniu lokalizacji może pomóc urządzenie z GPS). Możesz również przeciągnąć znacznik oferty na mapie i upuścić go w odpowiednim miejscu.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_TITLE',"Cechy oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_FEATURES_CONTENT',"Wybierz wszystkie specyficzne cechy pasujące do Twojej oferty. Ich zdefiniowanie w tym miejscu jest bardzo istotne gdyż pozwala na wyszukiwanie oferty przez klienta po cechach oferty, które go interesują.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_TITLE',"Informacje na temat oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_DESCRIPTION_CONTENT',"Dostępnych masz kilka pól, które pozwalają na wprowadzenie szczegółowych informacji odnoszących się do Twojej oferty. Opis oferty wyświetlany jest od razu po wejściu na stronę oferty. Postaraj się więc by był on w stanie przyciągnąć uwagę klienta.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_TITLE',"Regulamin i polityka prywatności.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_POLICIES_CONTENT',"To jest miejsce w jakim należy umieścić regulamin oraz politykę prywatności jakiej używasz w swojej ofercie. Klienci w trakcie składania rezerwacji mają możliwość zapoznania się z nią po kliknięciu w odpowiedni link. Warunkiem złożenia rezerwacji przez klienta jest konieczność zatwierdzenia warunków obowiązującego w ofercie regulaminu i polityki prywatności.");
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_TITLE',"Lista wszystkich rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LISTALL_BOOKINGS_CONTENT',"Na tej stronie nasz dostęp do wszystkich rezerwacji jakie zostały złożone w Twojej ofercie i bez znaczenia czy zostały opłacone czy też nie. Kliknij na ikonkę edycji rezerwacji by uzyskać dostęp do jej wszystkich szczegółów. Otrzymasz również możliwość dodatkowych operacji na edytowanej rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_TITLE',"Lista nowych rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LISTNEW_BOOKINGS_CONTENT',"Na tej stronie nasz dostęp do wszystkich rezerwacji, które nie zostały jeszcze opłacone w całości lub nie został wpłacony zadatek. Kliknij na ikonkę edycji rezerwacji by uzyskać dostęp do jej wszystkich szczegółów. Otrzymasz również możliwość dodatkowych operacji na edytowanej rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_TITLE',"Lista starszych rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LISTOLD_BOOKINGS_CONTENT',"Na tej stronie nasz dostęp do wszystkich starszych, minionych już rezerwacji, bez znaczenia czy zostały one zrealizowane czy anulowane. Kliknij na ikonkę edycji rezerwacji by uzyskać dostęp do jej wszystkich szczegółów. Otrzymasz również możliwość dodatkowych operacji na edytowanej rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_TITLE',"Lista klientów.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_GUESTS_CONTENT',"Strona pozwala na zobaczenie zestawienia wszystkich klientów aktywnej obecnie oferty. Domyślnie widoczni są klienci korzystający lub mający skorzystać z oferty. Dostępne są jednak dodatkowe możliwości, które pozwalają np. na przeglądanie listy klientów, którzy w przeszłości korzystali z oferty.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_TITLE',"Zastąpienie cen.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_OVERRIDES_CONTENT',"Te opcje dostępne są tylko dla osób zarządzających ofertą i nie są one widoczne dla klientów. Pozwalają na zmianę ceny za zasób jaka ma zostać uiszczona przez klienta (dodatkowe usługi nie są uwzględniane) oraz na wprowadzenie wysokości wymaganego zadatku.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_TITLE',"Kody rabatowe.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_COUPONS_CONTENT',"Jeśli utworzone zostały kody rabatowe dla tej oferty to dostępne będzie pole edycyjne umożliwiające wprowadzenie kodu, który pozwoli klientowi na obniżenie ceny końcowej za zasób.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_TITLE',"Szczegóły rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_PARTICULARS_CONTENT',"Zmiana, którejkolwiek z dostępnych tu opcji spowoduje zmianę listy zasobówi wyświetlona zostanie lista pozycji spełniających wszystkie wymagane kryteria, które zostały zdefiniowane przez klienta.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_TITLE',"Cechy zasobu.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_ROOM_FEATURES_CONTENT',"Jeśli wyświetlanie listy zasobówzostało w konfiguracji systemu ustawione na widok w postaci klasycznej, klienci mogą wybrać konkretny, interesujący ich zasób, a nie tylko zasób pewnego typu. Jest to opcja często wybierana w ofertach typu hotel. Pozwala ona na zaprezentowanie dodatkowych informacji o wybranym  zasobie (np. pokoju w hotelu) oraz jego zdjęć. Dodatkowym plusem tego wariantu jest to, że po określeniu cech specyficznych dla oferty i oznaczeniu zasobu jako posiadającego cechy określonego rodzaju, klient otrzymuje możliwość filtrowania zasobóww ofercie po tych cechach. Uwaga, w konfiguracji dostępna jest opcja pozwalająca zmniejszyć ilość wyświetlanych zasobówna liście zasobówwidocznej dla klientów. Dla osób zarządzających ofertą dostępna będzie pełna lista.");

	if (isset( $MiniComponents->registeredClasses['00001jintour_start']))
	{
		jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE',"Opcje dodatkowe.");
		jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT',"Dla oferty można utworzyć dwa rodzaje opcjonalnych dodatków. Pierwszy to dodatkowy produkt, usługa z wykorzystaniem modeli obliczania ceny takich jak np. za noc, za osobę, za dobę, od osoby itp. Jest to przydatna opcja jeśli chcesz pozwolić klientom na dodawanie na etapie składania rezerwacji opcjonalnych dodatków, które nie są limitowane (np. bukiet kwiatów w dniu przyjazdu do hotelu lub transfer z lotniska etc). W menu opcja dostępna jest jako Opcje dodatkowe. Drugi z wariantów pozwala na oferowanie opcji dodatkowych, które są limitowane (np. wycieczki do muzeum, bilety do teatru). Krótko mówiąc, każdy rodzaj dodatkowej opcji, dla których dostępnych jest tylko określona ilość w danym dniu. W menu opcja dostępna jest jako Tours.");
	}
	else
	{
		jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_TITLE',"Opcje dodatkowe.");
		jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXTRAS_CONTENT',"Dla oferty można utworzyć opcje dodatkowe. Może to być dodatkowy produkt, usługa z wykorzystaniem modeli obliczania ceny takich jak np. za noc, za osobę, za dobę, od osoby itp. Jest to przydatna opcja jeśli chcesz pozwolić klientom na dodawanie na etapie składania rezerwacji opcjonalnych dodatków, które nie są limitowane (np. bukiet kwiatów w dniu przyjazdu do hotelu lub transfer z lotniska etc). W menu opcja dostępna jest jako Opcje dodatkowe.");
	}

jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_TITLE',"Dostępni klienci.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_EXISTING_GUESTS_CONTENT',"Dostępni są tu wszyscy klienci, którzy skorzystali już kiedyś z Twojej oferty. Jeśli wprowadzasz do systemu rezerwację w imieniu klienta, który korzystał już z Twojej oferty jego dane powinny znajdować się w bazie danych. Odszukaj i wybierz właściwego klienta. Opcja ta przyśpiesza wprowadzanie nowej rezerwacji do systemu. Nie ma bowiem potrzeby wprowadzania ręcznie wszystkich danych klienta. Jeśli często wprowadzasz do systemu rezerwację w imieniu klienta powinieneś notorycznie korzystać z tej opcji. Wybierając klienta z listy rozwijanej (jeśli istnieje on już w bazie) unikasz ryzyka duplikowania klientów co może mieć miejsce jeśli ręcznie wprowadzasz dane klienta z pominięciem tej funkcji.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_TITLE',"Szczegóły klientów.");
jr_define('TOUR_ID_TOUR_TARGET_BOOKING_REQUIRED_CONTENT',"Jeśli chcesz zmienić pola jakie na etapie składania rezerwacji mają wyć obowiązkowo wypełnione przez klienta, musisz przełączyć się do konfiguracji systemu i skonfigurować opcję dostępne w tym właśnie miejscu.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_TITLE',"Wyłączenie rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_LIST_BLACKBOOKINGS_CONTENT',"Wyłączenie rezerwacji jest funkcją systemu pozwalającą na zablokowanie rezerwacji w określonym czasie wybranych zasobów. Opcja przydatna jeśli przyjmujesz rezerwację tylko w określonym sezonie lub jeśli np. w hotelu kilka pokoi muszą zostać wyłączone z rezerwacji w związku na np. remont.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_TITLE',"Informacje na temat oferty.");
jr_define('TOUR_ID_TOUR_TARGET_REGISTRATION_2_REALESTATE_DESCRIPTION_CONTENT',"Dostępnych masz kilka pól, które pozwalają na wprowadzenie szczegółowych informacji odnoszących się do Twojej oferty. Opis oferty wyświetlany jest od razu po wejściu na stronę oferty. Postaraj się więc by był on w stanie przyciągnąć uwagę klienta.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_TITLE',"Prosta konfiguracja cen.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_MRP_CONTENT',"Jest to najprostsza z dostępnych możliwości konfiguracji cenników w ofercie. Zdefiniuj ilość zasobówdanego typu dostępnych w ofercie, cenę, ilość klientów mogących maksymalnie skorzystać z oferty i ilość klientów dostępnych dla rezerwacji a następnie kliknij w przycisk. Dane zostaną zapisane a dostępny cennik będzie miał ważność 10 lat. Jeśli potrzebujesz większej kontroli nad konfiguracją cen w ofercie zmień konfigurację systemu wybierając wariant konfiguracji cen rozszerzony lub zaawansowany.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_TITLE',"Prosta konfiguracja cen.");
jr_define('TOUR_ID_TOUR_TARGET_LISTTARIFFS_NORMAL_SRP_CONTENT',"Jest to najprostsza z dostępnych możliwości konfiguracji cenników w ofercie. Zdefiniuj rodzaj zasobu dostępnego w ofercie, cenę oraz ilość klientów mogących maksymalnie skorzystać z oferty a następnie kliknij w przycisk. Dane zostaną zapisane a dostępny cennik będzie miał ważność 10 lat. Jeśli potrzebujesz większej kontroli nad konfiguracją cen w ofercie zmień konfigurację systemu wybierając wariant konfiguracji cen rozszerzony lub zaawansowany.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_TITLE',"Ceny i zasoby.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_MRP_CONTENT',"Na tej stronie można edytować zasoby, ich charakterystyczne cechy oraz cenniki. Dostępne są trzy zakładki pozwalające na edycję określonych elementów. Należy pamiętać, że wszystkie te elementy są ściśle ze sobą powiązane. Pozwala to na bardzo szerokie możliwości konfiguracji kształtu oferty i cenników. Można np. stworzyć kilka wersji cenników dla jednego zasobu (inny cennik dla np. samego pokoju w hotelu a inny dla tego samego pokoju ze śniadaniem oraz kolacją). Zasób może mieć indywidualne, charakterystyczne dla siebie cechy. Dodatkowym plusem tej funkcjonalności jest to, że po określeniu cech specyficznych dla oferty i oznaczeniu zasobu jako posiadającego cechy określonego rodzaju, klient otrzymuje możliwość filtrowania zasobóww ofercie po tych cechach.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_TITLE',"Ceny i zasoby.");
jr_define('TOUR_ID_TOUR_TARGET_ROOMSANDTARIFFS_SRP_CONTENT',"Na tej stronie można zmienić rodzaj zasobu i cennik.");
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_TITLE',"Rodzaje klientów.");
jr_define('TOUR_ID_TOUR_TARGET_GUEST_TYPES_CONTENT',"Rodzaje klientów są ważną częścią ustawień, jeśli zamierzasz pobierać płatności np. za osobę za noc, lub jeśli chcesz wiedzieć jaki klient składa rezerwację w Twojej ofercie. Można skonfigurować dowolną ilość rodzajów klientów np. dorośli, młodzież, dzieci. W oparciu o rodzaj klienta możesz definiować również ceny i np. dla klienta rodzaju X koszt rezerwacji może być wyższy lub niższy o określoną kwotę lub procent, dodany lub odjęty od ceny bazowej. Jeśli nie zamierzasz pobierać płatności w oparciu o ilość osób, dodając określony rodzaj klienta możesz pozostawić domyślne ustawienia.");
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_TITLE',"Kupony.");
jr_define('TOUR_ID_TOUR_TARGET_COUPONS_CONTENT',"Kody rabatowe są dobrym sposobem na przyciągnięcie do Twojej oferty nowych klientów. Podczas tworzenia nowego kodu rabatowego, system automatycznie wygeneruje dla Ciebie losowy kod. Możesz go wykorzystać lub stworzyć własny kod. W trakcie tworzenia kodu rabatowego można przypisać go lub nie do wybranego klienta. Kody, które nie zostały przypisane do żadnego klienta mogą zostać wykorzystane przez dowolną osobę. Możesz ich więc używać w materiałach promocyjnych. Możesz również określić w jakim czasie kod powinien zostać zrealizowany. W tym przedziale czasu muszą być dostępne dla klientów zasoby. Po stworzeniu kodów rabatowych można wyświetlić ich listę w formie gotowej do wydruku i wykorzystać w kampaniach reklamowych. Dla kodu rabatowego dostępny jest kod QR, który po zeskanowaniu przenosi do formularza rezerwacji z ceną zasobówpomniejszoną o wartość rabatu.");
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_TITLE',"Opcje dodatkowe.");
jr_define('TOUR_ID_TOUR_TARGET_EXTRAS_CONTENT',"Dla oferty można utworzyć opcje dodatkowe. Może to być dodatkowy produkt, usługa z wykorzystaniem modeli obliczania ceny takich jak np. za noc, za osobę, za dobę, od osoby itp. Jest to przydatna opcja jeśli chcesz pozwolić klientom na dodawanie na etapie składania rezerwacji opcjonalnych dodatków, które nie są limitowane (np. bukiet kwiatów w dniu przyjazdu do hotelu lub transfer z lotniska etc). Opcje te nie są limitowane, nie ma więc możliwości zarządzania ich ilościami. W trakcie definiowania opcji dodatkowych możesz skonfigurować między innymi to jaka może być maksymalna ilość dodatkowych opcji X w rezerwacji klienta, czy opcja dodatkowa ma być automatycznie wybrana bez możliwości odznaczenia jej przez klienta (funkcja przydatna w przypadku obowiązkowych płatności np. ręczniki w hotelu lub sprzątanie etc). Następnie należy zdefiniować to w jaki sposób ma zostać obliczona cena i płatność pobrana od klienta. Możesz np. pobrać jednorazową opłatę za butelkę szam		pana czekającą na klienta w dniu przyjazdu do hotelu, lub pobierać płatności w oparciu o inne dostępne modele, których ilość pozwala w maksymalnie dowolny sposób dostosowywać ceny opcji dodatkowych.");

jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_TITLE',"Centrum mediów.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_INTRODUCTION_CONTENT',"Centrum mediów pozwala na dodanie do oferty zdjęć. Można przesłać zdjęcie główne oferty (można przesłać dowolną liczbę zdjęć jednak jako zdjęcie główne oferty zostanie wykorzystane zdjęcie przesłane jako pierwsze), dowolną liczbę zdjęć można dodać również do slajdu oraz zasobów(w tym przypadku dostępne dla klientów będą wszystkie dodane zdjęcia." . jr_gettext("_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS",'_JOMRES_MEDIA_CENTRE_RESOURCE_TYPES_LIMITS',false));
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_TITLE',"Przełączanie zasobów.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_RESOURCEPICKER_CONTENT',"Opcja ta pozwala określić w jakim miejscu użyte mają zostać przesłane zdjęcia (np. czy jest to pokaz slajdów na stronie oferty czy zasób). Jeśli wybierzesz, że miejscem docelowym zdjęć ma być zasób, na liście obok wyświetlone zostaną wszystkie zasoby jakie dostępne są w danej ofercie, wybierz ten, co do którego chcesz przetransferować zdjęcia na serwer. Możesz przesłać dowolną ilość zdjęć do każdego z zasobów. Możliwość przesyłania zdjęć dla poszczególnych zasobówdostępna jest dla ofert typu hotel. W przypadku ofert takich jak dom czy apartament funkcja nie będzie dostępna.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_TITLE',"Dodane zdjęcia.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_EXISTINGIMAGES_CONTENT',"Ta kolumna pokazuje zdjęcia, które zostały już przesłane na serwer dla obecnej oferty. Możesz obejrzeć zdjęcia w pełnym rozmiarze lub je usunąć. Kolumna ta jest przeładowywana automatycznie po każdorazowej zmianie rodzaju zdjęć oferty. Dzięki temu wyświetlane są zawsze zdjęcia najbardziej odpowiednie.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_TITLE',"Kontrola przesyłania.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_UPLOADCONTROLS_CONTENT',"Masz tutaj kilka dostępnych opcji. Możesz użyć przycisku a następnie wybrać zdjęcia, które chcesz przesłać na serwer. Możesz również przeciągać wybrane zdjęcia przy użyciu kursora myszki i upuszczać je w oznaczonym obszarze. Przy użyciu odpowiedniego przycisku możesz wyczyścić listę plików gotowych do przesłania lub przesłać dodane zdjęcia na serwer.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_TITLE',"Przesyłanie zdjęć oferty.");
jr_define('TOUR_ID_TOUR_TARGET_MEDIACENTRE_SELECTEDIMAGES_CONTENT',"Ta kolumna wyświetla zdjęcia, które zostały dodane i są gotowe do przesłania na serwer.");
jr_define('TOUR_ID_TOUR_TARGET_END_TITLE',"Koniec podręcznika pomocy.");
jr_define('TOUR_ID_TOUR_TARGET_END_CONTENT',"To koniec podręcznika pomocy. Jeśli masz jakieś pytania, nie wahaj się z nami skontaktować.");
jr_define('PRODUCT_TOUR_PAGE_INFORMATION',"Pomoc");
jr_define('COMMON_PREV',"Poprzednia");
jr_define('COMMON_MORE',"Więcej");
jr_define('_JOMRES_DASHBOARD_TODAY',"Dzisiaj");
jr_define('_JOMRES_DASHBOARD_YEAR',"Rok");
jr_define('_JOMRES_DASHBOARD_MONTH',"Miesiąc");
jr_define('_JOMRES_DASHBOARD_WEEK',"Tydzień");
jr_define('_JOMRES_DASHBOARD_DAY',"Dzień");
jr_define('_JOMRES_HLEGEND',"Legenda");
jr_define('_JOMRES_HFILTER',"Filtr");
jr_define('_JOMRES_HFROM',"Dla");
jr_define('_JOMRES_HTO',"Do");
jr_define('_JOMRES_HNEW_BOOKING',"Nowa rezerwacja");
jr_define('_JOMRES_HSTATUS_DEPOSIT',"Status depozytu");
jr_define('_JOMRES_HSTATUS_GUEST',"Status klienta");
jr_define('_JOMRES_HSTATUS_BOOKING',"Status rezerwacji");
jr_define('_JOMRES_HSTATUS_PUBLISHING',"Publikacja statusu");
jr_define('_JOMRES_HSTATUS_INVOICE',"Status faktury");
jr_define('_JOMRES_HSTATUS_INVOICE_TYPE',"Rodzaj faktury");
jr_define('_JOMRES_HSTATUS_APPROVED',"Zatwierdzona");
jr_define('_JOMRES_HSTATUS_CURRENT',"Aktywna oferta");
jr_define('_JOMRES_HSTATUS_SHOW_BOOKINGS_FOR',"Pokaż rezerwacje dla");
jr_define('_JOMRES_HSTATUS_SHOW_INVOICES_FOR',"Pokaż faktury dla");
jr_define('_JOMRES_STATUS_ANY',"Wszystkie");
jr_define('_JOMRES_STATUS_PAID',"Opłacone");
jr_define('_JOMRES_STATUS_NOTPAID',"Nie opłacone");
jr_define('_JOMRES_STATUS_CHECKEDOUT',"Wymeldowane");
jr_define('_JOMRES_STATUS_ACTIVE',"Aktywne");
jr_define('_JOMRES_STATUS_CANCELLED',"Anulowane");
jr_define('_JOMRES_STATUS_PUBLISHED',"Opublikowane");
jr_define('_JOMRES_STATUS_NOT_PUBLISHED',"Nie opublikowane");
jr_define('_JOMRES_STATUS_PROVISIONAL',"Wstępna rezerwacja");
jr_define('_JOMRES_STATUS_CONFIRMED',"Potwierdzona rezerwacja");
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_ACTIVE',"Klienci z aktywnymi rezerwacjami");
jr_define('_JOMRES_STATUS_GUEST_BOOKINGS_PAST',"Klienci z minionymi rezerwacjami");
jr_define('_JOMRES_STATUS_BOOKINGS',"Rezerwacje");
jr_define('_JOMRES_STATUS_SUBSCRIPTIONS',"Subskrypcje");
jr_define('_JOMRES_STATUS_COMMISSIONS',"Prowizje");
jr_define('_JOMRES_STATUS_ALL_PROPERTIES',"Wszystkie moje oferty");
jr_define('_JOMRES_ACTION_SET_CURRENT',"Ustaw jako aktualny");
jr_define('_JOMRES_ACTION_CHECKIN',"Zamelduj");
jr_define('_JOMRES_ACTION_CHECKOUT',"Wymelduj");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS","Rezerwacje");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES","Oferty");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_GUESTS","Klienci");
jr_define("_JOMRES_CUSTOMCODE_JOMRESMAINMENU_MANAGER_REPORTS","Raporty");
jr_define("_JOMRES_HLIST_GUESTS","Klienci");
jr_define("_JOMRES_HLIST_GUESTS_MENU","Lista klientów");
jr_define("_JOMRES_HLIST_INVOICES_MENU","Lista faktur");
jr_define("_JOMRES_HLIST_PROPERTIES","Lista ofert");
jr_define("_JOMRES_HQUICK_BOOKING","Szybka rezerwacja");
jr_define("_JOMRES_HDATE_OF_BOOKING","Data rezerwacji");
jr_define("_JOMRES_HTWO_WEEKS","Dwa tygodnie");
jr_define("_JOMRES_BOOKING_CANCELLATION_WARNING","Ta rezerwacja zostanie anulowana. Naciśnij przycisk OK, aby anulować rezerwację.");
jr_define("_JOMRES_HOVERVIEW_CHECKINS","Dzisiejsze meldowania");
jr_define("_JOMRES_HOVERVIEW_CHECKOUTS","Dzisiejsze wymeldowania");
jr_define("_JOMRES_HOVERVIEW_CURRENT_RESIDENTS","Aktualnie obecni");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_CONFIG_TAB","Ustawienia paska nawigacji");
jr_define("_JOMRES_BOOTSTRAP_LOCATION","Położenie paska nawigacji");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_DEFAULT","Domyślnie (obszar zawartości)");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_TOP","Przypięty do góry");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_BOTTOM","Przypięty do dołu");
jr_define("_JOMRES_BOOTSTRAP_LOCATION_INVERSE","Odwrócona belka (zmiana koloru)");
jr_define("_JOMRES_BOOKING_NUMBER","Numer rezerwacji");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR',"Pokaż klientów dla");
jr_define('_JOMRES_BOOTSTRAP_VERSION',"Wersja Bootstrap");
jr_define('_JOMRES_BOOTSTRAP_VERSION_DESC',"Obecnie ma zastosowanie wyłącznie do frontu. Ta opcja pozwala wybrać czy mają być używane szablony Jomres które są zgodne z Bootstrap 2 lub 3. Jeśli nie masz pewności, że szablon działa z Bootstrap 3 zalecamy zostawić Bootstrap 2.");
jr_define('_JOMRES_HSTATUS_SHOW_GUESTS_FOR',"Pokaż klientów dla");
jr_define('_JOMRES_HFIXED_PERIODS',"Stałe okresy");
jr_define('_JOMRES_HDEPOSITS',"Zadatek");
jr_define('_JOMRES_HBOOKING_FORM',"Formularz");
jr_define('_JOMRES_HREQUIRED_FIELDS',"Wymagane pola");
jr_define('COMMON_PLACEHOLDER_FIRSTNAME',"Jan");
jr_define('COMMON_PLACEHOLDER_SURNAME',"Nowak");
jr_define('COMMON_PLACEHOLDER_HOUSENUMBER',"110");
jr_define('COMMON_PLACEHOLDER_STREET',"Moja ulica");
jr_define('COMMON_PLACEHOLDER_TOWN',"Moja miejscowość");
jr_define('COMMON_PLACEHOLDER_LANDLINE',"XX XXX-XX-XX");
jr_define('COMMON_PLACEHOLDER_MOBILE',"XXX-XXX-XXX");
jr_define('COMMON_PLACEHOLDER_PROPERTYNAME',"Moja oferta");
jr_define('COMMON_PLACEHOLDER_POSTCODE',"12-123");
jr_define('COMMON_PLACEHOLDER_EMAIL',"nowak@domena.pl");
jr_define('EXTENDED_CONFIGURATION',"Rozszerzona konfiguracja");
jr_define('SIMPLE_CONFIGURATION',"Prosta konfiguracja");
jr_define('_JOMRES_HRESOURCE_FEATURES',"Cechy zasobów");
jr_define('_JOMRES_HRESOURCE_TYPE',"Zasób");
 jr_define('_JOMRES_HEDIT_GUEST_TYPE',"Edycja rodzaju klienta");
jr_define('_JOMRES_HEDIT_COUPON',"Edycja kuponu promocyjnego");
jr_define('_JOMRES_HEDIT_EXTRA',"Edycja opcji dodatkowej");
jr_define('_JOMRES_MULTIPLE_RESOURCES_TITLE',"Tworzenie wielu zasobów");
jr_define('_JOMRES_MULTIPLE_RESOURCES_GENERATE',"Generuj zasoby");
jr_define('_JOMRES_MULTIPLE_RESOURCES_HOWMANY',"Ile zasobów?");
jr_define('_JOMRES_MULTIPLE_RESOURCES_TYPE',"Rodzaj zasobu");
jr_define('_JOMRES_MULTIPLE_RESOURCES_MAXGUESTS',"Maksymalna liczba klientów dla zasobu");
jr_define('_JOMRES_MULTIPLE_RESOURCES_DELETE',"Usunąć wszystkie istniejące zasoby?");
jr_define('_JOMRES_COM_ADVANCED_SITE_CONFIG_WARNING','Uwaga, aktualnie przeglądasz obszar zaawansowany administratora. Jeśli chcesz zobaczyć więcej opcji ustaw opcję w konfiguracji witryny -> inne -> zaawansowane na Tak.');
jr_define('TOUR_ID_TAB_BOOKINGFORM_TITLE',"Konfiguracja rezerwacji.");
jr_define('TOUR_ID_TAB_BOOKINGFORM_CONTENT',"Na tej karcie można skonfigurować wygląd formularza rezerwacji.");
jr_define('TOUR_ID_TAB_BOOKINGS_TITLE',"Rezerwacje.");
jr_define('TOUR_ID_TAB_BOOKINGS_CONTENT',"Zakładka ta pozwala na ustawienia rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_TITLE',"Edycja klientów.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_TOP_CONTENT',"Tutaj możesz edytować dane klientów. Należy pamiętać, że zmiany dokonane tutaj będą widoczne tylko w tym rekordzie. Jeśli klient dokonał rezerwacji na inne dane, zmiany wprowadzone w tym miejscu nie zmodyfikują danych jakie klient podał na etapie składania rezerwacji.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_TITLE',"VAT.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_VAT_CONTENT',"Jeśli wprowadzisz tutaj numer VAT to pojawi się on na fakturze klienta.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_TITLE',"Rabat.");
jr_define('TOUR_ID_TOUR_TARGET_EDIT_GUEST_DISCOUNT_CONTENT',"Możesz zdefiniować automatyczny rabat dla przyszłych rezerwacji klienta.");
jr_define('DATATABLES_SINFO',"Pozycje od _START_ do _END_ z _TOTAL_ dostępnych");
jr_define('_JOMRES_BOOKING_INQUIRY_HAPPROVAL',"Zatwierdzenie");
jr_define('_JOMRES_BOOKING_REJECT_INQUIRY',"Odrzucenie zapytania o rezerwację");
jr_define('_JOMRES_BOOKING_APPROVE_INQUIRY',"Zatwierdzenie zapytania o rezerwację");
jr_define('_JOMRES_STATUS_APPROVED',"Zatwierdzone");
jr_define('_JOMRES_STATUS_REJECTED',"Odrzucone");
jr_define('_JOMRES_STATUS_INQUIRY',"Zapytanie");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_TITLE',"Rezerwacje wymagają potwierdzenia dostępności?");
jr_define('_JOMRES_BOOKING_INQUIRY_SETTING_DESC',"Ustawienie tej opcji na Tak spowoduje konieczność ręcznego potwierdzania dostępności i zatwierdzania rezerwacji. Po złożeniu rezerwacji przez klienta nie pojawi się ona w kalendarzu dostępności do czasu jej potwierdzenia. inne osoby cały czas mogą rezerwować ten termin. Po przyjęciu rezerwacji przez obsługę odpowiednia informacja pokarze się w kalendarzu dostępności i zablokowana zostanie możliwość rezerwacji tego terminu. Do klienta zostanie wysłany e-mail z odpowiednimi informacjami.");
jr_define('_JOMRES_ERROR',"Błąd");
jr_define('_JOMRES_ERROR_MESSAGE',"Przepraszamy! Wystąpił błąd podczas próby przetworzenia tej operacji. Informacje o błędzie zostały zapisane i przesłane do analizy przez obsługę techniczną.");
jr_define('_JOMRES_ERROR_DEBUGGING_MESSAGE',"Wiadomość");
jr_define('_JOMRES_ERROR_DEBUGGING_FILE',"Plik");
jr_define('_JOMRES_ERROR_DEBUGGING_LINE',"Linia");
jr_define('_JOMRES_ERROR_DEBUGGING_TRACE',"Ślad");
jr_define('_JOMRES_EMAIL_TEMPLATES_TITLE',"Szablony e-mail");
jr_define('_JOMRES_EMAIL_TEMPLATES_EDIT',"Edycja szablonu e-mail");
jr_define('_JOMRES_EMAIL_TEMPLATES_SUBJECT',"Temat e-mail");
jr_define('_JOMRES_EMAIL_TEMPLATES_TEXT',"Treść e-mail");
jr_define('_JOMRES_EMAIL_TEMPLATES_TYPE',"Rodzaj");
jr_define('_JOMRES_EMAIL_TEMPLATES_NAME',"Nazwa");
jr_define('_JOMRES_EMAIL_TEMPLATES_DESC',"Opis");
jr_define('_JOMRES_EMAIL_TEMPLATES_INSTRUCTIONS',"Na tej stronie możesz zmienić treść oraz szablon tej wiadomości e-mail.");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILNAME',"Administrator - Nowa rezerwacja");
jr_define('_JOMRES_ADMIN_NEWBOOKING_EMAILDESC',"Wiadomość e-mail wysyłana do administratora witryny po dokonaniu przez klienta nowej rezerwacji, jeśli włączona jest bramka PayPal.");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILNAME',"Sprzedawca - Nowa rezerwacja");
jr_define('_JOMRES_HOTEL_NEWBOOKING_EMAILDESC',"Wiadomość e-mail wysyłana do sprzedawcy po dokonaniu przez klienta nowej rezerwacji.");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILNAME',"Klient - Nowa rezerwacja");
jr_define('_JOMRES_GUEST_NEWBOOKING_EMAILDESC',"Wiadomość e-mail wysyłana do klienta z informacjami odnośnie rezerwacji po dokonaniu przez niego rezerwacji.");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILNAME',"Klient - Potwierdzenie rezerwacji");
jr_define('_JOMRES_GUEST_CONFIRMATIONLETTER_EMAILDESC',"Wiadomość e-mail wysyłana ręcznie przez sprzedawcę do klienta z potwierdzeniem złożonej przez niego rezerwacji.");
jr_define('_JOMRES_CAN_BE_APPROVED',"Ta rezerwacja może zostać zatwierdzona. Wszystkie wybrane zasoby są dostępne w wybranych terminach.");
jr_define('_JOMRES_CANT_BE_APPROVED',"Ta rezerwacja nie może zostać zatwierdzona, gdyż wybrane zasoby są już zarezerwowane. Konieczna jest edycja rezerwacji i wybranie dostępnych zasobów dla wybranych terminów.");
jr_define('_JOMRES_SHOW_POWEREDBY',"Pokaż link Powered by Jomres w stopce Jomres.");
jr_define('GUEST_BUDGET',"Budżet");
jr_define('GUEST_BUDGET_FEATURE_SWITCH',"Użyć funkcji Budżet?");
jr_define('GUEST_BUDGET_FEATURE_SWITCH_DESC',"Tylko dla Bootstrap na stronie! Opcja ta umożliwia klientom określenie ich budżetu jaki mogą przeznaczyć na daną rezerwację. Funkcja ma pewne ograniczenia i może się nie sprawdzić w serwisach z wieloma walutami. Dodatkowo jeśli używany jest plugin Featured Listings to jego klasa zostanie automatycznie podmieniona na 'panel-primary' z chwilą wyświetlania listy ofert.");
jr_define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nazwa: ');
jr_define('_JOMRES_FOR','Dla');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHT','noc');
jr_define('_JOMRES_PRICINGOUTPUT_NIGHTS','nocy');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY','Pokaż ceny łączne');
jr_define('_JOMRES_CONFIG_SHOW_OVERLAY_DESC','Na liście ofert możliwe jest pokazanie łącznej ceny dla oferty. Należy użyć tego ustawienia, aby włączyć tą funkcję. Cena łączna jest obliczana na podstawie zakresu wybranych przez klienta dat.');
jr_define('_JOMRES_LIVE_SCROLLING','Użyć systemu przewijania wyników wyszukiwania na listach zamiast paginacji?');
jr_define("_JOMRES_ONLINE_PARTNERS","Partnerzy");
jr_define('_JRPORTAL_MONTHS_SHORT_0','Sty');
jr_define('_JRPORTAL_MONTHS_SHORT_1','Lut');
jr_define('_JRPORTAL_MONTHS_SHORT_2','Mar');
jr_define('_JRPORTAL_MONTHS_SHORT_3','Kwi');
jr_define('_JRPORTAL_MONTHS_SHORT_4','Maj');
jr_define('_JRPORTAL_MONTHS_SHORT_5','Cze');
jr_define('_JRPORTAL_MONTHS_SHORT_6','Lip');
jr_define('_JRPORTAL_MONTHS_SHORT_7','Sie');
jr_define('_JRPORTAL_MONTHS_SHORT_8','Wrz');
jr_define('_JRPORTAL_MONTHS_SHORT_9','Paź');
jr_define('_JRPORTAL_MONTHS_SHORT_10','Lis');
jr_define('_JRPORTAL_MONTHS_SHORT_11','Gru');
jr_define('DATATABLES_SEMPTYTABLE',"Brak danych do wyświetlenia.");
jr_define('DATATABLES_SINFO',"Pozycje od _START_ do _END_ z _TOTAL_ dostępnych");
jr_define('DATATABLES_SINFOEMPTY',"Pozycji 0 z 0 dostępnych");
jr_define('DATATABLES_SINFOFILTERED',"(Filtrowanie spośród _MAX_ dostępnych pozycji)");
jr_define('DATATABLES_SINFOPOSTFIX'," ");
jr_define('DATATABLES_SINFOTHOUSANDS'," ");
jr_define('DATATABLES_SLENGTHMENU',"Pokaż _MENU_ pozycji");
jr_define('DATATABLES_SLOADINGRECORDS',"Wczytywanie danych. Proszę o chwilę cierpliwości...");
jr_define('DATATABLES_SPROCESSING',"Przetwarzanie danych. Proszę o chwilę cierpliwości...");
jr_define('DATATABLES_SSEARCH',"Szukaj:");
jr_define('DATATABLES_SZERORECORDS',"Pasujące pozycje nie zostały znalezione.");
jr_define('DATATABLES_SFIRST',"Pierwsza");
jr_define('DATATABLES_SLAST',"Ostatnia");
jr_define('DATATABLES_SNEXT',"Następna");
jr_define('DATATABLES_SPREVIOUS',"Poprzednia");
jr_define('DATATABLES_SSORTASCENDING',": aktywuj by posortować kolumnę rosnąco");
jr_define('DATATABLES_SSORTDESCENDING',": aktywuj by posortować kolumnę malejąco");
jr_define('DATATABLES_SHOWHIDE',"Zmiana kolumn");
jr_define('_BOOKING_ONREQUEST','Zapytanie o rezerwację');
jr_define('_BOOKING_INSTANT','Natychmiastowa rezerwacja');
jr_define('_JOMRES_COM_FONTAWESOME','Wczytać czcionki i zestaw ikon?');
jr_define('_JOMRES_COM_FONTAWESOME_DESC','Ustaw na Tak, jeśli szablon nie zawiera czcionek i ikon.');
jr_define('_BOOKING_CALCQUOTE','Zapytanie o rezerwację');
jr_define('_JOMRES_MULTISITES_SELECT_A_SITE','Wybierz stronę');
jr_define('_JOMRES_MULTISITES_MULTISITES_LABEL','Id strony');
jr_define('_JOMRES_IS_EU_COUNTRY','Kraje UE?');
jr_define('_JOMRES_WORD_CACHING','Buforowanie');
jr_define('_JOMRES_WORD_PATTEMPLATE_CACHING','Użyj buforowania patTemplates?');
jr_define('_JOMRES_HLASTCHANGED','Ostatnio zmieniony');
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILNAME',"Sprzedawca - Anulowanie rezerwacji");
jr_define('_JOMRES_HOTEL_CANCELBOOKING_EMAILDESC',"Wiadomość e-mail wysyłana do sprzedawcy, gdy nowa rezerwacja jest anulowana.");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILNAME',"Klient - Anulowanie rezerwacji");
jr_define('_JOMRES_GUEST_CANCELBOOKING_EMAILDESC',"Wiadomość e-mail wysyłana do klienta, gdy nowa rezerwacja jest anulowana.");
jr_define('_JOMRES_TEST_EMAIL_SEND',"Testowanie wysyłki e-mail");
jr_define('_JOMRES_TEST_EMAIL_SUBJECT',"Test e-mail");
jr_define('_JOMRES_TEST_EMAIL_CONTENT',"To jest test e-mail z systemu rezerwacji.");
jr_define('_JOMRES_TEST_EMAIL_RESULT_SUCCESS',"Testowa wiadomość e-mail wysłana pomyślnie");
jr_define('_JOMRES_TEST_EMAIL_RESULT_FAILURE',"Testowa wiadomość e-mail nie została wysłana");
jr_define('_INVOICE_TRANSACTIONS',"Transakcje");
jr_define('_OPENEXCHANGE_API',"Klucz API dla wymiany walut");
jr_define('_OPENEXCHANGE_API_DESC','Dla uruchomienia funkcjonalności przeliczania walut konieczny jest klucz API Open Exchange Rates. W celu skorzystania z tej funkcjonalności Jomres odwiedź stronę: https://openexchangerates.org/signup/free (aktualizacja walut co godzinę, 1000 żądań/miesiąc - brak wsparcia HTTPS, wsparcia e-mail lub zaawansowanych funkcji). System Jomres pobiera kursy raz dziennie więc tak długo, jak używasz klucza na tylko kilku stronach, nie przekroczysz tych limitów. Przed Jomres 8.3 wykorzystywany był system przeliczania walut oferowany przez Yahoo, jednak ograniczenia licencyjne usługi spowodowały iż koniecznym stało się przejście na inny system przeliczania walut.');
jr_define('_JOMRES_COMMISSION',"Rozliczenie");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"Jeśli prześlesz kilka zdjęć dla dowolnej opcji dodatkowej, to tylko pierwsze z tych zdjęć będzie używane.");
jr_define('_JOMRES_COMMISSION',"Rozliczenie");
jr_define('_JOMRES_MEDIA_CENTRE_NOTES_CORE_EXTRAS',"Jeśli prześlesz kilka zdjęć dla dowolnej opcji dodatkowej, to tylko pierwsze z tych zdjęć będzie używane.");
jr_define('_JRPORTAL_INVOICES_PAYNOW',"Zapłać teraz");
jr_define('_JRPORTAL_INVOICES_PAYNOW_DESC',"Ta faktura jest już wymagalna. Proszę kliknąć, aby wybrać sposób płatności.");
jr_define('_JOMRES_EXTRAS_TEMPLATE',"Oto lista niektórych rzeczy, które można zakupić podczas dokonywania rezerwacji w tej ofercie.");
jr_define('_ASSIGN_COMMISSION_RATES','Przypisanie stawek prowizji');
jr_define('GATEWAYS_INSTRUCTIONS','Na tej stronie można skonfigurować dostępne w systemie bramki płatności. Te opcje umożliwiają płatności za faktury za rezerwacje i subskrypcje. Zakładka Ustawienia może być zastąpiona tylko przez ustawienia PayPal, wszystkie inne bramki będą musiały być skonfigurowane za pomocą właściwości dostępnych na karcie konfiguracji bram, jednak jeśli brama pojawia się na tej liście to oznacza, że jest zdolna do przetwarzania płatności w formie depozytów rezerwacji i płatności za faktury.');
jr_define('EXTRAS_INCLUDE_IN_PROPERTYDETAILS','Pokazać na stronie szczegółów oferty?');
jr_define('PROPERTY_DETAILS_PAGE_OPTIONS','Strona ustawień szczegółów oferty');
jr_define('_JOMRES_HLIST_PROPERTIES_WARNING','Zarządzanie ofertami w Jomres dostępne jest z poziomu strony frontowej serwisu. W tym miejscu możesz zobaczyć wszystkie dostępne w systemie oferty i przypisać dla nich stawki prowizyjne i zatwierdzić je lub nie (jeśli ta funkcja została włączona). Jeśli chcesz utworzyć nową ofertę, edytować istniejące, zarządzać rezerwacjami lub innymi właściwościami systemu rezerwacji, musisz zalogować się na stronie frontowej i przejść na stronę domyślną Jomres.');
jr_define('PROPERTY_STATS_SALES','Sprzedaż');
jr_define('PROPERTY_STATS_SALES_DESC','Kiedy rezerwacje są przyjmowane');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS','Rezerwacje (dni)');
jr_define('PROPERTY_STATS_BOOKINGS_DAYS_DESC','Data początku rezerwacji i ilość dni.');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS','Rezerwacje (zasób x dni)');
jr_define('PROPERTY_STATS_ROOM_BOOKINGS_DAYS_DESC','Liczba zasobów wyprzedanych w miesiącu.');
jr_define('_MEDIA_CENTRE_RESOURCE_FEATURES_ICONS','Ikony cech zasobów');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES','Kategorie cech ofert');
jr_define('_JOMRES_PROPERTYFEATURES_HCATEGORIES_HEDIT','Edycja kategorii cechy oferty');
jr_define('_JOMRES_HCATEGORY','Kategoria');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES','Pokazać podział na kategorie cech ofert?');
jr_define('_JOMRES_PROPERTYFEATURES_HSHOW_CATEGORIES_DESC','Ustaw Tak, aby podzielić cechy ofert na kategorie. Ta opcja dotyczy tylko cech ofert wyświetlanych na stronie szczegółów ofert. Wszystkie inne strony wyświetlają je bez dzielenia ich na kategorie.');
jr_define('_JOMRES_ACTION_UNDO_CHECKIN','Cofnij zameldowanie');
jr_define('_JOMRES_ACTION_UNDO_CHECKOUT','Cofnij wymeldowanie');
jr_define('_JOMRES_STATUS_UNISSUED','Zapisano');

jr_define('DEFAULT_TERMS_AND_CONDITIONS','Niniejszy regulamin określa obowiązki w stosunku Oferenta do Klienta korzystającego z oferty i Klienta w stosunku do Oferenta. W przypadkach spornych niniejszy regulamin będzie stanowił podstawę do rozstrzygnięcia sporu. Proszę uważnie przeczytać regulamin przed potwierdzeniem rezerwacji.

Zameldowanie: określa czas rezerwacji liczony od daty początku rezerwacji (zameldowania) do daty końca rezerwacji (wymeldowania).

Akceptacja niniejszego Regulaminu zawiązuje kontrakt między dwoma następującymi stronami: Oferentem i Klientem.

1. Klienci korzystający z oferty

Wszystkie osoby wymienione w umowie, korzystające z oferty lub dodane później przez Klienta są związane z warunkami niniejszej umowy. Korzystanie z oferty przez Klienta jest ograniczone do osób określonych w warunkach niniejszej umowy, dodanych na etapie jej zawarcia lub dodanych w późniejszym terminie. Klient dokonujący rezerwacji, którego dane personalne zostaną podane w formularzu rezerwacji jest uważany za głównego Klienta (najemce) i przyjmuje on pełną odpowiedzialność za wszystkich członków grupy Klientów korzystających z niniejszej oferty przez cały okres korzystania z niej. Informacje dotyczące warunków korzystania z oferty powinny zostać przekazane każdej osobie z niej korzystającej i na Kliencie dokonującemu rezerwacji ciąży obowiązek poinformowania wszystkich osób korzystających z oferty o obowiązującym ich regulaminie.

2. Płatności

Rezerwacja zostanie potwierdzona przez Oferenta, gdy wniosek zostanie przyjęty, a pełna lub częściowa płatność uiszczona przez Klienta. W przypadku rezerwacji na tydzień lub dłużej, jeśli rezerwacja została dokonana 45 dni lub więcej przed początkowym dniem rezerwacji, pierwsza transza płatności za rezerwację w wysokości [X%] płatności za rezerwację będzie należna w momencie rezerwacji. W przypadku rezerwacji dokonanej mniej niż 45 dni przed początkowym dniem rezerwacji lub jeśli czas rezerwacji jest krótszy niż pełen tydzień, wymagana jest pełna płatność za rezerwację, którą należy w płacić w momencie rezerwacji. W przypadku gdy rezerwacja nie zostanie zaakceptowana przez Oferenta, cała wpłacona kwota zostanie zwrócona natychmiast. Każda rezerwacja w przeciągu 10 dni od rozpoczęcia okresu rezerwacji musi zostać opłacona w całości za pomocą karty kredytowej, za pośrednictwem systemu PayPal, czekiem, gotówką lub inną formą płatności akceptowalną przez Oferenta w momencie rezerwacji. Nie można rozpocząć rezerwacji bez jej opłacenia.

Po złożeniu rezerwacji i po jej zaakceptowaniu przez Oferenta, Klient jest zobowiązany do zapłaty pozostałej kwoty rezerwacji 45 dni przed początkową datą rezerwacji. Brak płatności w terminie będzie traktowane jako rezygnacja z rezerwacji i kaucja przepadnie.

3. Zasady anulowania & Zmiany rezerwacji

Gdy rezerwacja została przyjęta i potwierdzona, anulowanie może być dokonane wyłącznie zgodnie z warunkami określonymi poniżej:

- Jeżeli okres rezerwacji może być ponownie zarezerwowany, kwota zwrotu za ten okres lub jej część pomniejszona o opłatę umorzenia zostanie zwrócona.

- Jeśli jakakolwiek część okresu rezerwacji nie może być ponownie zarezerwowana, Klient straci wszystkie kwoty zapłacone za ten okres.

4. Obłożenie dla rezerwacji

Niezależnie od tego, jaka liczba osób może skorzystać z rezerwacji w danej ofercie, ich ilość zawsze zostaje określona w umowie na etapie składania rezerwacji lub może zostać zmieniona na piśmie w późniejszym czasie za zgodą Oferenta. Ilość osób w rezerwacji obejmuje wszystkie osoby bez względu na wiek.

Przekroczenie liczby osób określonych w umowie spowoduje natychmiastowe wypowiedzenie umowy przez Oferenta, a płatność nie zostanie zwrócona Klientowi lub może zostać doliczona dodatkowa kwota do kwoty rezerwacji.

5. Stan oferty

Oferta została sprawdzona przed jej rezerwacją i dlatego Klient zobowiązuje się do:

- Natychmiastowego powiadomienia właściciela oferty w odniesieniu do wszelkich kwestii szkód i/lub utrzymania, które wymagają uwagi.

- Utrzymania oferty i wszystkich jej składników takich jak: meble, urządzenia, wyposażenie etc w tym samym stanie technicznym, jak na początku rezerwacji.

- W przypadku, gdy usługa sprzątania jest świadczona Klient powinien postępować zgodnie z instrukcjami sprzątania przekazanymi przez Oferenta.

- W przypadku, gdy usługa sprzątania nie jest dostępna Klient powinien zakończyć czas korzystania z oferty pozostawiając ją w tym samym stanie czystości i ogólnego porządku, w którym ją zastał. Niezastosowanie się do tego w sposób zadowalający Oferenta będzie skutkowało koniecznością uiszczenia opłaty tytułem kosztów sprzątania.

6. Korzystanie z usług telefonicznych i internetowych

W przypadku, gdy usługi telefoniczne są dostępne w ramach oferty, Klient jest zobowiązany do uiszczenia stosownych opłat za korzystanie z usługi a w przypadku korzystania z internetu do dokonania płatności za transfer wykraczający ponad dostępny pakiet transmisji danych. Obowiązkiem Klienta jest zorientowanie się jakie są obowiązujące koszty za korzystanie z wymienionych usług i czy są one pobierane w ogóle.

7. Zwierzęta

Zwierzęta domowe (pies) jest dozwolony [bez żadnych ograniczeń]. Wszystkie dowody korzystania z oferty przez zwierzęta domowe muszą zostać usunięte z oferty pod koniec okresu rezerwacji. Zwierzęta domowe nie mogą korzystać z dostępnego w ofercie wyposażenia typu: łóżka, fotele czy inne meble nie przeznaczone dla zwierząt. Nie zastosowanie się do tego punktu może skutkować z koniecznością uiszczenia dodatkowej opłaty tytułem sprzątania np. usuwania sierści z mebli.

LUB

Zwierzęta domowe są zabronione w tej ofercie. Wszelkie dowody korzystania z oferty przez zwierzęta domowe spowoduje utratę prawa do zwrotu kaucji w całości.

Właściciel oferty nie ponosi odpowiedzialności za jakiekolwiek reakcje alergiczne lub inne wynikające z korzystania z oferty.

8. Palenie

Palenie nie jest dozwolone w okolicach bezpośredniego sąsiedztwa oferty.

9. Dostęp do oferty w czasie zimy

Oferta jest przeznaczona do korzystania z niej w okresie zimowym i ma dostęp drogowy i korzysta z usług odśnieżania przez [wskazać komunalne przedsiębiorstwo lub przedsiębiorstwo prywatne]. Jednak Klientów informuje się, że po wszelkich bardziej istotnych opadach śniegu, operatorzy pługów śnieżnych są zakontraktowani, aby oczyścić drogi lokalne w ustalonej kolejności. W mało prawdopodobnym przypadku, jeśli Klient nie będzie, ze względu na złe warunki atmosferyczne w stanie zakończyć korzystania z oferty Oferent nie ponosi odpowiedzialności za wszelkie dodatkowe koszty korzystania z oferty przez Klienta. W przypadku jeśli ze względu na problemy z dojazdem do Oferenta, Klient nie będzie w stanie skorzystać z oferty, Oferent zobowiązuje się do zwrotu pieniędzy za każdy dzień nie korzystania z oferty przez Klienta. Uprasza się również Klientów, aby upewnili się, że oni i ich pojazdy są odpowiednio przygotowane i wyposażone do jazdy w warunkach zimowych, jakie mogą wystąpić podczas ich podróży do Oferenta.

10. Sprzęt i urządzenia

Sprzęt i urządzenia są w gestii Oferenta i zapewnia on że taki sprzęt jest sprawny w czasie trwania okresu korzystania z oferty przez Klienta. Klient jest zobowiązany zgłosić natychmiast wszelkie urządzenia niesprawne lub uszkodzone właścicielowi oferty.

11. Zwroty

Jeśli zwrot powinien wystąpić do podstawowych elementów, takich jak systemy wodne, wodno-kanalizacyjnych i instalacji elektrycznych oraz podstawowych urządzeń takich jak kuchenka czy lodówka, każdy wysiłek będzie naprawić lub wymienić, lub odpowiedni zwrot nastąpi za niedogodności spowodowane. Powyższe nie ma zastosowania do awarii systemu spowodowane przez nadużycia, takie jak zatorów kanalizacyjnych wynikłe z niewłaściwego korzystania z urządzeń sanitarnych.

Właściciel oferty nie ponosi odpowiedzialności, ani nie zapewni zwrotu, na każdym postoju usług elektrycznych spowodowanych ekstremalnych warunków pogodowych lub innych okoliczności pozostających poza jego kontrolą. Podobnie, nie będzie refundacji dla niepogody, zmiany w poziomach wody, warunki w sąsiednich nieruchomości, uniknięcie szkód zapewnianej przez naturalnych elementów lokalizacji, takich jak owadów latających lub populacji zwierząt.

12. Pozostałe warunki regulaminu

Klient zobowiązuje się do przestrzegania niniejszego Regulaminu oraz wszelkich innych instrukcji zawartych w szczegółowych warunkach oferty i przyjmuje do wiadomości inne dodatkowe informacje i instrukcje, dostarczone przez Oferenta.');

jr_define('_JOMRES_NUMBER_OF_BEDROOMS','Zasoby');

jr_define('_JOMRES_SUPPORTKEY_DESC_VALID','Klucz licencyjny jest ważny, można pobierać dodatkowe rozszerzenia i korzystać ze wsparcia.');
jr_define('_JOMRES_SUPPORTKEY_DESC_INVALID','Klucz licencyjny nie jest ważny, nie można pobierać dodatkowych rozszerzeń ani korzystać ze wsparcia.');
jr_define('_JOMRES_SRP_RESOURCE_TYPE','Typ zasobu');
jr_define('_JOMRES_SRP_RESOURCE_TYPE_EXPLANATION','Musisz wybrać typ zasobu przed zdefiniowaniem cen dla tej oferty.');
jr_define("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK","Nie został jeszcze przypisany typ zasobu dla tej oferty.");
jr_define("_JOMRES_SRP_RESOURCE_TYPE_SANITY_CHECK_LINK","Ustal typ zasobu dla oferty");
jr_define("_JOMRES_EMAIL_TEMPLATES_TITLE","Szablony e-mail");
jr_define("_JOMRES_CONTACT_SETTINGS","Ustawienia kontaktu");
jr_define("_JOMRES_CONTACT_SETTINGS_DESC","W tym miejscu można nadpisać wszystkie dane kontaktowe ofert (e-mail, telefon, fax), co spowoduje przekierowanie całej komunikacji klientów do administracji serwisu a nie do właścicieli ofert.");
jr_define("_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS","Zastąpić dane kontaktowe ofert?");
jr_define("_JOMRES_OVERRIDE_PROPERTY_CONTACT_DETAILS_DESC","Jeśli opcja ta jest ustawiona na Tak, to adresy e-mail i telefony w ofertach zostaną zastąpione danymi kontaktowymi globalnymi dla serwisu skonfigurowanymi na tej stronie. Funkcjonalność ta wymusza przysyłanie wszystkich wiadomości e-mail do Administracji Serwisu, co jest zabezpieczeniem przed omijaniem dokonywania rezerwacji przez właścicieli ofert i ich Klientów w systemie, co powoduje nie naliczanie prowizji. Funkcjonalność spowoduje również konieczność przejrzenia zatwierdzonych wcześniej ofert pod kontem upewnienia się, że w polach edycyjnych np. opisu oferty nie zostały wprowadzone przez właściciela oferty dane adresowe typu e-mail lub numer telefonu.");
jr_define("_JOMRES_EDITPROPERTY_APPROVAL_WARNING","Zmiany wprowadzone w szczegółach oferty wymagają weryfikacji przez administratora serwisu. Po zapisaniu nowych szczegółów oferty Twoja oferta do czasu zatwierdzenia wprowadzonych zmian przez administratora serwisu nie będzie opublikowana w serwisie i nie będzie widoczna dla odwiedzających. Co oznacza również, że Klienci nie będą mogli w tym czasie dokonywać nowych rezerwacji.");
jr_define('_JOMRES_BOOKING_ENQUIRY_REVIEW','Wniosek o weryfikację Rezerwacji');
jr_define('_JOMRES_BOOKING_ENQUIRY_CONFIRM','Potwierdź wniosek o rezerwację');
jr_define('_JOMRES_BOOKING_ENQUIRY_AMEND','Zmień wniosek o rezerwację');
jr_define('_JOMRES_INVOICE_MARKASPENDING','Oznacz jako Oczekuje');
jr_define('_JOMRES_INVOICE_MARKEDASPENDING','Faktura oznaczona jako oczekująca');
jr_define('_JOMRES_TRACKING_ENABLE','Wysyłać anonimowe dane śledzenia?');
jr_define('_JOMRES_TRACKING_ENABLE_DESC','Ustaw tę opcję na Tak, aby uruchomić przesyłanie anonimowych danych na temat sposobu używania systemu Jomres do Jomres.net. Pomoże to nam lepiej zrozumieć Twoje oczekiwania odnośnie systemu.');
jr_define('_JOMRES_PARTNERS_PLEASE_COMPLETE','Prosimy upewnić się, że dane Klientów są kompletne przed rozpoczęciem dodawania rezerwacji w ich imieniu.');
jr_define('_JOMRES_PARTNERS_GUEST_ADDRESS',"Dane kontaktowe Klientów");
jr_define('_JOMRES_CLEAR_GUEST_DETAILS'," -- Nowy Klient -- ");
jr_define('_JOMRES_CHARTS','Wykresy');
jr_define('_JOMRES_CHARTS_SELECT','Wybierz wykres...');
jr_define('_JOMRES_CHART_BOOKINGS_DESC','Dochody za rok/miesiąc');
jr_define("_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK","OK, zaczynajmy. Najpierw należy utworzyć kilka zasobów do rezerwacji jakie będą dostępne w tej ofercie.");
jr_define("_JOMRES_MRP_ROOMS_EXIST_SANITY_CHECK_LINK","Tworzenie zasobów");
jr_define("_JOMRES_IMAGES_EXIST_SANITY_CHECK","Badania pokazują, że oferty z dużą ilością zdjęć wysokiej jakości generują więcej odsłon. Wgraj zdjęcie główne oferty i zdjęcia wyświetlane w pokazie slajdów etc, aby zwiększyć swoje szanse na uzyskanie rezerwacji.");
jr_define("_JOMRES_IMAGES_EXIST_SANITY_CHECK_LINK","Przesyłanie zdjęć");
jr_define("_JOMRES_TARIFFS_EXIST_SANITY_CHECK_LINK","Definiowanie cen");
jr_define("_JOMRES_PROPERTYTYPE_FLAG","Jaki jest to rodzaj oferty?");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_DESC","Czy jest to rodzaj oferty typu hotel gdzie można wynająć kilka pokoi, czy jest to oferta typu apartament gdzie można wynająć całość oferty? Jeśli oferta nie wiąże się się z rezerwacją zasobów w ofercie lub całej oferty, jeśli jest to np. rezerwacja/sprzedaż wycieczek, biletów to prosimy wybrać opcję Inny.");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_HOTEL","Hotel/Łóżko & Śniadanie/Pensjonat");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_VILLA","Apartament & Dom & Willa");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_NEITHER","Inny");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_BOTH","Zarówno"); // Wyboru tego nie będzie jeśli nie zostały zaktualizowane typy ofert
jr_define("_JOMRES_PROPERTYTYPE_FLAG_BOTH_COLHEAD","Hotel czy Willa?");
jr_define("_JOMRES_ADDRESS_SANITY_CHECK","Musisz uzupełnić swoje dane adresowe, dzięki czemu klienci będą mogli Cię znaleźć, jeśli będą poszukiwać Twojej oferty.");
jr_define("_JOMRES_ADDRESS_SANITY_CHECK_LINK","Aktualizacja adresu");
jr_define("_JOMRES_FIELDS_HIGHLIGHTED_ARE_REQUIRED","Ups, wygląda na to, że nie wszystkie pola zostały uzupełnione.");
jr_define("_JOMRES_MANAGER_HAS_NO_PROPERTIES","Błąd: Ten użytkownik jest skonfigurowany jako menadżer, ale nie został przypisany do żadnej z ofert.");
jr_define("_JOMRES_CONTANT_US","Skontaktuj się z nami");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_TITLE","Witamy na nowej aukcji online dla ");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_1","Witamy i zapraszamy do nowej oferty na ");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_2","Ostatnio dodano nowe oferty na naszej stronie internetowej, i chcielibyśmy serdecznie zaprosić do odwiedzin.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_3","Można zobaczyć nowy kokpit ");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_3_LINKTEXT"," tutaj ");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_4","Po skonfigurowaniu oferty można zobaczyć jak widzą ją odwiedzający witrynę przechodząc ");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_4_LINKTEXT"," na stronę frontową.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_5","(Oferta nie jest jeszcze opublikowana i nie jest dostępna dla klientów.)");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_6","W górnej części strony zobaczysz dostępne wiadomości. Przyciski widoczne obok tych wiadomości poprowadzą Cię do stron, które trzeba odwiedzić aby dodać i skonfigurować dane oferty. Podanie wszystkich danych ułatwi odnalezienie Twojej oferty w naszym serwisie i przyczyni się do zwiększenia ilości składanych rezerwacji online.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_7","Jeśli masz jakieś pytania, prosimy ");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_7_LINKTEXT","skontaktuj się z nami");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_8","z przyjemnością odpowiemy na wszystkie Twoje pytania.");
jr_define("_JOMRES_NEW_PROPERTY_WELCOME_BYEBYE","Pozdrowienia załącza cały nasz zespół");
jr_define("_JOMRES_JINTOUR_SANITY_CHECK","Wygląda, że nie zostały stworzone żadne profile sprzedaży ofert typu wycieczki czy biletów. Utwórz odpowiedni profil oferty a w kolejnym kroku wygeneruj przedmioty sprzedaży.");
jr_define("_JOMRES_JINTOUR_SANITY_CHECK_LINK","Stwórzmy jakiś profil oferty!");
jr_define('_JOMRES_COM_A_TARIFFS_SWAP','Położenie symbolu waluty');
jr_define('_JOMRES_COM_A_TARIFFS_SWAP_DESC','Użyj tej opcji, aby skonfigurować położenie symbolu waluty, ustaw go przed kwotą lub po niej.');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK','Facebook');
jr_define('_JOMRES_COM_MR_GENERALCONFIGDESC_FACEBOOK_DESC','Wprowadź swój identyfikator strony na Facebooku np. "moja-strona". Pole nie może być puste. Nie wprowadzaj https://www.facebook.com lub czegokolwiek innego.');
jr_define('COMMON_DOWNLOAD','Pobierz');
jr_define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS_SRP','Dalej będzie trzeba dodać kilka taryf. Są to ceny podstawowe.');
jr_define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV_SRP','Podtyp oferty');
jr_define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO_SRP','Podtyp oferty');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE','Bootstrap nie jest włączony!');
jr_define('_JOMRES_BOOTSTRAP_OFF_WARNING','Uwaga: Nie masz włączonego Bootstrap w konfiguracji Jomres w zakładce Różne, aby włączyć <i>niektóre</i> funkcje Jomres. Aktualnie używasz starych szablonów opartych na jQuery UI, jednak te nie są wspierane już od kilku lat. Wszystkie obecnie rozwijane i ulepszane szablony Jomres (pliki układu graficznego) wykonane są w oparciu o Bootstrap 3. Aby uzyskać najlepsze wrażenia z Jomres radzimy zainstalować motyw oparty o Bootstrap 3 w WordPress i Joomla. Gdy już to zrobisz możesz włączyć szablony Jomres w konfiguracji komponentu.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS','Klucz wsparcia jest ważny. Zauważ, że ta licencja nie zezwala na pobieranie dodatków.');
jr_define('_JOMRES_SUPPORTKEY_DESC_VALID_NO_PLUGINS_PLUGIN_MANAGER','Twoja licencja nie pozwala na pobieranie dodatków.');
jr_define('_JOMRES_DASHBOARD_DRAG_TRASH','Przeciągnij rezerwację by ją odwołać');
jr_define('_JOMRES_LAT','Szerokość (nn.nnnn)');
jr_define('_JOMRES_LONG','Długość (nn.nnnn)');
jr_define('_JOMRES_DEFAULT_SHORTCODE_ALERT','Prosimy upewnić się, że WordPress stworzył strony zawierające shortcode [jomres:xx-XX], (gdzie xx-XX jest kodem języka witryny, na przykład [jomres:en-GB]). Jeśli taki plik językowy nie istnieje nie będzie można uzyskać dostępu do funkcji Jomres na froncie serwisu takich jak zarządzanie ofertami i rezerwacjami.');
jr_define('_JOMRES_PROPERTY_MANAGEMENT_PROCESS_ROOM_TYPES','Większość nieruchomości w Jomres posiada możliwość wypożyczania jako proces zarządzania. Hotele/pensjonaty umożliwiają wynajęcie np. pokoju jako jednej z dostępnych wielu opcji. Domy/mieszkania to oferty gdzie wynajmuje się całość danej oferty (cały dom lub całe mieszkanie). Nie jest to rzecz widoczna na pierwszy rzut oka dla sprzedawcy. Jednak by sprzedawca miał możliwość stworzenia cenników dla swojej oferty należy stworzyć odpowiednie dla danego typu oferty przedmioty rezerwacji.<br />Np. w hotelu dostępne będą pokoje w kilku wariantach (pokoje dwuosobowe, pokoje jednoosobowe i trzyosobowe), natomiast dom będzie posiadał tylko jeden typ przedmiotu rezerwacji np. 2 sypialnie, 5 sypialni.<br />Możliwe jest tworzenie przedmiotów rezerwacji jako np. wycieczki. Dzięki temu klienci mogą zapoznać się z ich szczegółami. Jednak sprzedawca nie będzie musiał stworzyć cenników w sposób jaki robi się to w przypadku np. hoteli, nie będzie dostępny specyficzny sposób zarządzania ofertą.');
jr_define("_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES","Jaki proces zarządzania będzie dostępny dla tego typu przedmiotu rezerwacji?");
jr_define("_JOMRES_MANAGEMENT_PROCESS_ROOM_TYPES_DESC","Jest to przedmiot rezerwacji dla oferty typu hotel czy mieszkanie?");
jr_define('_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LINK_TEXT','Kliknij i dodaj nowy przedmiot rezerwacji');
jr_define("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES","Uwaga, masz jeden lub więcej typów ofert bez przypisanych przedmiotów rezerwacji. Konieczne jest powiązanie typów ofert z przedmiotami rezerwacji, aby sprzedawcy mogli utworzyć dla nich cenniki.");
jr_define("_JOMRES_PROPERTY_TYPES_WITHOUT_ROOM_TYPES_LIST_ROOM_TYPES","Użyj przycisku powyżej, aby stworzyć nowy rodzaj przedmiotu rezerwacji.");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_TOURS","Wycieczki");
jr_define("_JOMRES_PROPERTYTYPE_FLAG_REALESTATE","Nie rezerwacje/Oferty (proste aukcje)");
