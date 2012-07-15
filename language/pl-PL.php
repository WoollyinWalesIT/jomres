<?php

/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
* @Polska adaptacja Patryk Doering - http://www.rekinet.pl - kontakt@rekinet.pl
**/

##################################################################

defined( '_JOMRES_INITCHECK' ) or die( '' );

##################################################################

define('_JOMRES_COM_MR_QUICKRESDESC','Bezpośrednia rezerwacja');
define('_JOMRES_COM_MR_SHOWPROFILES','Użytkownicy');
define('_JOMRES_COM_MR_QUICK______DESC','Zostawić puste');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Ustawienia systemowe');
define('_JOMRES_COM_MR_BACK','Wróć');
define('_JOMRES_COM_MR_YES','Tak');
define('_JOMRES_COM_MR_NO','Nie');
define('_JOMRES_COM_MR_NEWTARIFF','Nowa taryfa');
define('_JOMRES_COM_MR_NEWPROPERTY','Nowy obiekt');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nowe cechy obiektu');
define('_JOMRES_COM_MR_NEWGUEST','Nowy gość');
define('_JOMRES_COM_MR_SAVE','Zapisz');
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nazwisko');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Data przyjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Data wyjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Puste');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Prawa dostępu dla użytkownika');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nazwa użytkownika');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Imię i nazwisko');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','Aktualnie autoryzowany');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Obiekt domyślny');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','Zmień');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Prawa dostępu');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Użytkownik zmieniony');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','Nie wymagane');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcja');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Administrator obiektu');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Administracja rezerwacji');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nowe rezerwacje (nie zapłacone)');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Zmień rezerwację dla');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','Przyjazd/Wyjazd');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gość');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Pokój');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Płatności');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Imię');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nazwisko');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Specjalne wymagania');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Uwaga! Prosimy zauważyć, że niektóre specjalne wymagania związane są z dodatkowymi kosztami.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Anulowanie rezerwacji');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miasto');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-mail');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Rezerwacja nie może zostać anulowana, gość już przyjechał.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Anuluj rezerwację');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potwierdź anulowanie');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezerwacja anulowana.');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dni do przyjazdu');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Rodzaj rezerwacji');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Wyłączenie');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcja');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Nazwa pokoju');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Nr pokoju');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Piętro');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Pokój dla niepełnosprawnych?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maks gości');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Kategoria pokoju');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis kategorii pokoju');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista cech pokoi');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Wpłacona przedpłata');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Wpisz przedpłatę');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Wartość rezerwacji');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','Uwagi dot. przedpłaty');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Nr rezerwacji');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Przedpłata');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Przedpłata zapisana');
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Wolne pokoje');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Obiekt');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Rodzaj pokoju');
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edytuj dane');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Imię');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nazwisko');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr domu');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Miejscowość');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Kod pocztowy');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon komórkowy');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Nr karty kredytowej');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','Ważna od');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','Ważna do');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','Wydana');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Właściciel karty');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Wybór cennika');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Ilość dni');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Ilość gości');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Razem');
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Cechy obiektu i pokoju');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Pokój');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Cechy pokoju');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','Kategoria pokoju');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Obiekt');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Cechy obiektu');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Pokój');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Rodzaj');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nazwa');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Nr');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Piętro');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Dla niepełnosprawnych?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maks gości');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Charakterystyka');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Pokój dodany');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edytuj');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Cechy pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Cechy');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Zapisz cechy pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Zapisz zmiany cech pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Kategorie pokoi');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Wersja skrócona kategorii pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Opis kategorii');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Zapisz kategorię');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Aktualizuj kategorie');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edytuj');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nazwa');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Miejscowość');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Województwo');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Kraj');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Kod pocztowy');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-mail');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Strona WWW');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Opis');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Zapisz dane obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Aktualizuj dane obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Cechy obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Wersja skrócona cech obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Opis cech obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Zapisz cechę obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Aktualizuj cechę obiektu');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Cenniki');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Cennik');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Ważny od dnia');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Ważny do dnia');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Cena za dobę');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimum dni');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maks dni');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimum ilość gości');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maks gości');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Kategoria pokoju');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','Ignorować warunek za osobę za dobę');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Weekendy dozwolone');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Dodaj cennik');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Aktualizuj cennik');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edytuj tekst');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Dodaj jako kopię');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Cennik usunięty');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edytuj cennik');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Dni świąteczne');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezerwacja zapisana');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezerwacja');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Zamelduj gościa');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Wymelduj gościa');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Lista rezerwacji');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Nowe rezerwacje');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Zarządzanie');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Zestawienia gości');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Edycja obiektów');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Sprawdź dostępność');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Zatwierdź dane');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Imię');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nazwisko');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr domu');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miejscowość');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Niestety żaden pokój nie spełnia wymaganych kryteriów.');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<h4>Dziękujemy. Rezerwacja została pomyślnie przyjęta.</h4><br />Wkrótce skontaktujemy się w celu ustalenia sposobu płatności.<br /><br /><small>Prosimy wziąść pod uwagę, że ta rezerwacja jest tymczasowa i dopiero po otrzymaniu pisemnego potwierdzenia transakcji lub dokonania wpłaty w systemie płatności elektronicznych będzie wiążąca dla obu stron. Wszystkie informacje zostały automatycznie w formie e-mail przesłane na podany przez użytkownika w formularzu adres e-mail.</small>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezerwacja internetowa:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezerwacja pokoju:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Data przyjazdu:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Data wyjazdu:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nazwisko:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon komórkowy:');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Łączna cena:');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Zameldowanie gości');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Wybór gościa');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Melduj gości');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','W dniu dzisiejszym nie ma żadnych przyjazdów gości.');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Wymeldowanie gości');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','W dniu dzisiejszym nie ma żadnych wyjazdów gości.');
define('_JOMRES_COM_A_SUPPLIMENTS','Dopłaty');
define('_JOMRES_COM_A_TARIFFS','Cenniki');
define('_JOMRES_COM_A_DISCOUNTS','Rabaty');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Transfer plików');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktualne ustawienia');
define('_JOMRES_COM_A_EXPLANATION','Objaśnienie');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Dopłata do pokoju jednoosobowego');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Zaznacz Tak, jeżeli ma być pobierana dopłata.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Wysokość dopłaty');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Przedpłata obliczana procentowo?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Czy przedpłata jest ustawiona jako procent od wartości rezerwacji? Jeżeli Nie, to będzie naliczana w sposób ryczałtowy.');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Wysokość przedpłaty');
define('_JOMRES_COM_A_TARIFFS_PER','Za osobę/Za dobę');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Ustaw Tak, jeżeli cena ma być obliczana za osobę/za dobę. Jeżeli Nie, cena będzie obliczana za pokój za dobę.');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Wielkość pliku');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maksymalna wielkość pliku w KB.');
define('_JOMRES_FRONT_MR_BOOKED','Zajęty');
define('_JOMRES_COM_CONFIRMATION_TITLE','E-mail potwierdzający');
define('_JOMRES_COM_CONFIRMATION_DEAR','Szanowna Pani/Szanowny Panie');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za dobę/za pokój');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Termin rezerwacji:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Dziękujemy za dokonaną rezerwację');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Poniżej znajduje się podsumowanie Pani/Pana rezerwacji. Prosimy o dokładne jej sprawdzenie. Jeżeli wystąpił jakiś błąd, prosimy o kontakt.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Nasza doba hotelowa trwa od 14:00 do 10:00 dnia następnego. Meldowanie w godzinach od 14:00 do 19:00. W razie spodziewanego późniejszego przyjazdu prosimy o kontakt.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Cieszymy się i oczekujemy Pani/Pana przyjazdu.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Już teraz życzymy udanego wypoczynku.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Proszę uważnie przeczytać:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Zwracamy uwagę na fakt, że ta rezerwacja jest wiążącą umową. Oznacza to, że w przypadku rezygnacji, może Pani/Pan zostać obciążona/ny kosztami w pełnej wysokości ceny pobytu.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Za niewykorzystane posiłki albo tylko częściowo wykorzystane pokoje nie może zostać wypłacony zwrot. Z tego powodu sugerujemy zawarcie specjalnego ubezpieczenia. Oferuje je większość biur podróży, agentów ubezpieczeniowych, są również dostępne w ofertach banków.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','Warunki zmiany lub anulowania rezerwacji. W wypadku anulowania rezerwacji, musi być ona dokonana w formie pisemnej. Poniżej znajduje się zestawienie związanych z tym kosztów:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Wcześniej niż 30 dni przed terminem przyjazdu.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY','Tylko już dokonane przedpłaty.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dni przed terminem przyjazdu.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT','50% łącznej wartości rezerwacji.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Od 14 dnia przed terminem przyjazdu.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT','100% łącznej wartości rezerwacji.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Wszystkie ceny zawierają podatek VAT.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Drukuj e-mail z potwierdzeniem rezerwacji');
define('_JOMRES_COM_INVOICE_TITLE','Wydruk rachunku');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Ilość dób:');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Warunki umowy:');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za dobę:');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Suma');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Dziękujemy serdecznie.');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Mamy nadzieję, że pobyt był udany.');
define('_JOMRES_COM_INVOICE_PRINT','Drukuj rachunek');
define('_JOMRES_COM_ADDSERVICE_TITLE','Dodaj do rachunku usługi dodatkowe.');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis usługi');
define('_JOMRES_COM_ADDSERVICE_VALUE','Cena usługi');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Dalsze doliczone pozycje');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Suma doliczonych pozycji:');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Dodaj pozycje do rachunku');
define('_JOMRES_UPLOAD_IMAGE','Zapisać zdjęcie');
define('_JOMRES_FILE_UPLOAD','Transfer wybranych plików na serwer');
define('_JOMRES_FILE_ERROR_TYPE','Plik może mieć format:');
define('_JOMRES_FILE_ERROR_EMPTY','Proszę wybrać plik.');
define('_JOMRES_FILE_ERROR_NAME','Nazwa pliku może zawierać tylko znaki alfabetyczne, proszę nie używać spacji w nazwach.');
define('_JOMRES_FILE_ERROR_SIZE','Ten plik jest niestety większy niż dopuszczalny rozmiar pliku.');
define('_JOMRES_FILE_NOT_UPLOADED','Plik nie został zapisany.');
define('_JOMRES_FILE_UPDATED','Plik pomyślnie zaktualizowany.');
define('_JOMRES_COM_A_JSCALENDAR','Kalendarz JS');
define('_JOMRES_COM_A_CALENDARLANGUAGE','Plik językowy dla kalendarza JS');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Tutaj można ustawić wersję językową dla kalendarza JS.');
define('_JOMRES_COM_A_CALENDARCSS','Plik CSS dla kalendarza JS');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Tutaj można ustawić plik CSS dla kalendarza JS.');
define('_JOMRES_COM_A_ODDS','Pozostałe ustawienia');
define('_JOMRES_COM_A_ERRORCHECKING','Lista przekierowań minicomponent');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Przełącz na Tak, aby zobaczyć dziennik minicomponents wyświetlany na dole strony po zakończeniu uruchomionej funkcji Jomres. Zostanie również wyłączone wewnętrzne przekierowanie funkcji. Jest to przydatne jeśli próbujesz określić, który minicomponents wykonuje jakie funkcje.');
define('_JOMRES_FILE_DELETE','Usuń zdjęcie');
define('_JOMRES_FILE_DELETED','Zdjęcie usunięte.');
define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY','Wszystkie obiekty');
define('_JOMRES_COM_MR_ROOM_DELETE','Usuń pokój');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nie można usunąć tego pokoju, ponieważ został już zarezerwowany. Proszę anulować rezerwacje i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOM_DELETED','Pokój usunięty.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Usuń ustawienia pokoju');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wykorzystójące te ustawienia i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Ustawienia pokoju usunięte.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Usuń ustawienia obiektu');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje wyKorzystójące te ustawienia i spróbować ponownie.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Ustawienia obiektu usunięte.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Usuń kategorie pokoi');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Ta kategoria nie może zostać usunięta, ponieważ istnieją pokoje które są do niej przypisane. Proszę przypisać te pokoje do innych kategorii i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Ta kategoria nie może zostać usunięta, ponieważ istnieje cennik do którego jest przypisana. Proszę przypisać ten cennik do innej kategorii i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Kategoria pokoju usunięta.');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Usuń obiekt');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Obiekt usunięty.');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Niestety obiekt nie może być usunięty. Nie posiadasz wystarczających uprawnień.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Szerokość dużego zdjęcia');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Link do mapy');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Meldowanie w godzinach');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Atrakcje w okolicy');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Opis dojazdu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Lotniska');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','Inne możliwości połączeń komunikacyjnych');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Warunki użytkowania');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adres');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Użytkownicy mogą rezerwować on-line');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Dla pewności ustaw na Tak, wówczas odwiedzający mogą rezerwować on-line. W przeciwnym przypadku ustaw na Nie.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Stała długość pobytu?');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Ustaw na Tak, jeżeli pokoje mają być dostępne tylko na z góry ustawiony okres.');
define('_JOMRES_COM_A_FIXEDPERIOD','Stała długość pobytu:');
define('_JOMRES_COM_A_BOOKING','Rezerwacje');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maks ilość cyklicznych rezerwacji, np: 3 x 7 cykli = 21 dni.');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Czy obiekt jest jednopokojowy?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Ustawienie na Tak daje możliwość rezerwowania całego objektu. Wybranie Nie umożliwia rezerwacje pojedynczych pokoi w danym obiekcie.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Sprawdź rezerwację');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potwierdź rezerwację');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Poniedziałek');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Wtorek');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Środa');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Czwartek');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Piątek');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sobota');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Niedziela');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pn');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Wt');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Śr');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Cz');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pt');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','So');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Nd');
define('_JOMRES_COM_A_AVLCAL','Kalendarz rezerwacji');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Kolor czcionki dla aktualnego dnia');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Kolor czcionki dla aktualnego miesiąca');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Kolor czcionki dla wcześniejszego i następnego miesiąca');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Kolor pola dla dni aktualnego miesiąca');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Kolor pól dla dni z wcześniejszego i następnego miesiąca');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Kolor pól dla zarezerwowanych dni');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Kolor pól dla wolnych rezerwacji (Rezerwacje, dla których nie dokonano jeszcze żadnej wpłaty)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Kolor pól dla już minionych dni');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','Zajęty');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','Wolny');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','Rezerwacja niepotwierdzona');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Założony dzień przyjazdu');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Tylko dla obiektów ze stałą długością pobytu. Wybierz dzień tygodnia, w którm będzie możliwy przyjazd.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Założonym dniem przyjazdu jest');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Okres rezerwacji');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Pokaż kalendarz rezerwacji?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ustaw na Tak, jeżeli kalendarz rezerwacji ma być widoczny.');
define('_JOMRES_FRONT_AVAILABILITY','Kalendarz rezerwacji');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Aby przejść do formularza rezerwacyjnego, proszę kliknąć na wybraną datę.');
define('_JOMRES_FRONT_BLACKBOOKING','Wyłączenia');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nowe wyłączenie');
define('_JOMRES_FRONT_DELETEGUEST','Usuń gościa');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gość usunięty.');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Niestety ten gość nie może być usunięty. Istnieją jeszcze dane, które są do niego przypisane i to najpierw one muszą zostać usunięte.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktualny koszt pokoju:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Witamy!');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Dziękujemy bardzo za rezerwację na');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Zestawienie danych rezerwacji:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Jeżeli ma Pan/Pani jeszcze jakieś pytanie co do tej rezerwacji, prosimy o kontakt telefoniczny.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nasz numer telefonu');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Może Pan/Pani skontaktować się także przez e-mail.');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Dla palaczy');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Obojętne');
define('_JOMRES_COM_CALENDAROUTPUT','Format daty kalendarza');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Tutaj można zmienić format daty w kalendarzu.');
define('_JOMRES_COM_CALENDARINPUT','Format dodawania daty z kalendarza');
define('_JOMRES_COM_CALENDARINPUT_DESC','Tutaj można zmienić format dodawania daty z kalendarza.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Przy stałych terminach rezerwacji, zezwolić na krótkie przerwy.');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Ilość dni przerwy');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Opublikować');
define('_JOMRES_COM_A_PAYPAL','PayPal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Protokół rezerwacji');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Data');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Godzina');
define('_JOMRES_MR_AUDIT_LISTING_USER','Użytkownik');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacja');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Pokaż szczegóły');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtruj wg daty');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtruj wg użytkownika');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtruj wg operacji');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Brak przyjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Odjazd dzisiaj');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktualny gość');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Odjeżdża dzisiaj');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Przekroczony termin odjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nie przyjechał');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nieznany użytkownik');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Utworzony pokój');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Zaktualizowany pokój');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Usunięty pokój');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Cecha pokoju utworzona.');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Cecha pokoju zaktualizowana.');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Cecha pokoju usunięta.');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Kategoria pokoju utworzona.');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Kategoria pokoju zaktualizowana.');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Kategoria pokoju usunięta.');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Obiekt utworzony.');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Obiekt zaktualizowany.');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Obiekt usunięty.');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Ustawienia obiektu utworzone.');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Ustawienia obiektu zaktualizowane.');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Ustawienia obiektu usunięte.');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Ustawienia obiektu zmienione.');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Obiekt opublikowany.');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Cennik utworzony.');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Cennik zaktualizowany.');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Cennik usunięty.');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Cena usługi dodatkowej dodana.');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Gość zameldowany.');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Gość wymeldowany.');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Dodaj przedpłatę');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Gość dodany.');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Gość zaktualizowany.');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Gość usunięty.');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Pokój zarezerwowany.');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Usługa dodatkowa utworzona.');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Usługa dodatkowa zaktualizowana.');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Usługa dodatkowa usunięta.');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Usługa dodatkowa opublikowana.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Wyłączenie wykonane.');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Wyłączenie usunięte.');
define('_JOMRES_COM_MR_EXTRA_TITLE','Usługi dodatkowe');
define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
define('_JOMRES_COM_MR_EXTRA_NAME','Nazwa');
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Usługi dodatkowe zaktualizowane.');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edytuj usługi dodatkowe');
define('_JOMRES_COM_MR_EXTRA_DELETED','Usługa usunięta.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Edycja usług dodatkowych');
define('_JOMRES_COM_A_EXTRAS','Pokaż usługi dodatkowe w czasie rezerwacji?');
define('_JOMRES_COM_A_EXTRAS_DESC','Ustaw na Tak, aby oferować ewentualne usługi dodatkowe.');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Usługi dodatkowe');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Data początkowa wyłączenia');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Data końcowa wyłączenia');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Edycja wyłączenia');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Przy próbie wyłączenia pokoju/i doszło do błędu. Jeden lub więcej z nich nie jest wolny.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Pokoje wybrane do wyłączenia');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Pokaż wyłączenie');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nie ma żadnych wyłączeń.');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Ilość gwiazdek');
define('_JOMRES_COM_A_SMOKING','Pokaż palący/niepalący?');
define('_JOMRES_COM_A_SMOKING_DESC','Ustaw na Tak, jeżeli opcja wyboru palący/niepalący ma być dostępna.');
define('_JOMRES_COM_A_RESET','Cofnij zmiany');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezerwacja anulowana');
define('_JOMRES_FRONT_MR_SEARCH_PROPERTYNAME','Szukaj wg nazw obiektów:');
define('_JOMRES_COM_A_SMOKING_OPTION','Palący/Niepalący - Ustawienia');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Kod waluty');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Np. &amp;Euro&#59; proszę zauważyć, że najlepsze jest dodanie w tym miejscu czystego kodu HTML. Lista wszystkich tagów znajduje się tutaj <a href="http://www.w3schools.com/tags/ref_entities.asp" target="_blank">w3schools</a>.');
define('_JOMRES_COM_A_CURRENCYCODE','Waluta');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Np. PLN - Jest to potrzebne zwłaszcza przy użytkowaniu płatności PayPal. Lista wszystkich walut znajduje się tutaj <a href="http://www.xe.com/iso4217.htm" target="_blank">XE.com</a>.');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Zobacz więcej');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ograniczenie okresu rezerwacji?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ustaw na Tak, aby ograniczyć okres rezerwacji do X dni do przodu. To oznacza, że jeżeli goście będą próbować wybrać datę, która leży dalej w przyszłości, system przestawi datę przyjazdu automatycznie na datę dzisiejszą.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Możliwy okres rezerwacji ograniczyć na następującą ilość dni:');
define('_JOMRES_COM_A_TAX_WARNING','<span style="color:red;">Wskazówka: nie zaleca się ustawienia obu dalszych opcji na Tak. Poprawnie jest wybrać tylko jedną z opcji kalkulacji podatków.</span>');
define('_JOMRES_COM_FRONT_ROOMTAX','Podatek');
define('_JOMRES_COM_A_ROOMTAX','Podatek');
define('_JOMRES_COM_A_ROOMTAX_DESC','Stworzono na rynek amerykański. Cena pokoju będzie podniesiona o tą wartość. Możliwy jest wybór pomiędzy cenami ryczałtowymi, opodatkowanie procentowe albo kombinacja obu możliwości. Proszę jednak zauważyć, że ta wartość ma wpływ tylko na cenę pokoi.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Wysokość podatku ryczałtowego');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Stopa procentowa podatku');
define('_JOMRES_COM_A_EUROTAX','Podatek ryczałtowy');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Procent podatku');
define('_JOMRES_MR_AUDIT_ARCHIVE','Archiwuj wszystkie wpisy');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE','Wpisy dodane do archiwum.');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Administrator zarchiwizował dane');
define('_JOMRES_FRONT_TARIFFS','Cenniki');
define('_JOMRES_FRONT_TARIFFS_TITLE','Nazwa cennika');
define('_JOMRES_FRONT_TARIFFS_DESC','Opis cennika');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Typ pokoju');
define('_JOMRES_FRONT_TARIFFS_STARTS','Ważny od');
define('_JOMRES_FRONT_TARIFFS_ENDS','Ważny do');
define('_JOMRES_FRONT_TARIFFS_PPPN','Za osobę za noc');
define('_JOMRES_FRONT_TARIFFS_PN','Za noc');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Bez weekendów');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dni');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maks dni');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Minimum osób');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maks osób');
define('_JOMRES_FRONT_PREVIEW','Podgląd');
define('_JOMRES_COM_A_EDITINGMODEON','Edycja włączona?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktualny tekst');
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nowy tekst');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst zaktualizowany.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Wybierz język');
define('_JOMRES_COM_A_AUDITING_SHOWING','Ilość niezarchiwowanych rekordów:');
define('_JOMRES_FRONT_PTYPE','Typ obiektu');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Lista typów obiektów');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edytuj typy obiektów');
define('_JOMRES_COM_PTYPES_PTYPE','Typ obiektu');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis typu obiektu');
define('_JOMRES_COM_PTYPES_SAVED','Typ obiektu zapisany.');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Anulowanie typu obiektu niemożliwa. Typ obiektu jest przypisany do jednego lub więcej obiektów. Usuń to przypisanie i spróbuj ponownie.');
define('_JOMRES_COM_PTYPES_DELETED','Typ obiektu anulowany.');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Przypomnienie o płatności');
define('_JOMRES_EXTRAS_NOEXTRAS','Brak dodatkowych usług do włączenia do rachunku');
define('_JOMRES_COM_CHARGING_DEPOSIT','Przedpłata');
define('_JOMRES_COM_CHARGING_FULLAMT','Pełna suma');
define('_JOMRES_COM_CHARGING_CONFIG','Suma pobrana w czasie rezerwacji');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Użyj tej opcji aby określić sposób pobierania opłaty w czasie rezerwacji. Wybierz przedpłatę, jeżeli ma być ona pobrana w czasie rezerwacji lub pełną sumę, jeżeli ma ona być pobrana w czasie rezerwacji.');
define('_JOMRES_COM_MONTHSTOSHOW','Ile miesięcy  ma być pokazanych');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Ile miesięcy kalendarza ma być pokazanych w ramach prezentacji dostępności pokoi?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Podpisane w imieniu');
define('_JOMRES_COM_A_GATEWAYLIST','Płatności elektroniczne');
define('_JOMRES_COM_A_CANCEL','Anuluj');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Wybierz pokój/e, które chcesz wyłączyć ze sprzedaży i odpowiednie daty.
					<br />
					Jeżeli przy pokoju nie ma pola wyboru, oznacza to że nie może on być zablokowany, aż istniejąca rezerwacja/e nie zostanie zrealizowana lub anulowana.
					<br />
					Po wybraniu odpowiednich dat kliknij klawisz "Dodaj" aby sprawdzić ponownie dostępność pokoi.');

define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Prawdopodobnie serwer wylogował Cię z powodu zbyt długiego okresu braku aktywności</b>
					<br />
					Zaloguj się i spróbuj ponownie.</center>');

define('_JOMRES_JR_BLACKBOOKING_REASON','Powód');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Używanie płatności elektronicznych?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ustaw na Tak, jeżeli chcesz korzystać z płatności elektronicznych. <b>Uwaga!</b> To nie zdezaktywuje kalkulacji przedpłaty, pokazywanej w czasie procesu rezerwacji. Aby zdezaktywować funkcję kalkulowania przedpłaty należy dokonać zmian w szablonie odpowiedzialnym za prezentację wolnych pokoi w części dot. przedpłaty.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Wybierz metodę płatności.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Płatności elektroniczne włączone?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Ustawienia wtyczek zmienione.');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Ustawienie wtyczek dodane.');
define('_JOMRES_FRONT_GALLERYLINK','Zobacz ten obiekt');
define('_JOMRES_COM_A_GALLERYLINK','Link zewnętrzny');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Umieść link na swojej stronie tutaj.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Karta kredytowa zweryfikowana.');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Karta kredytowa zaktualizowana.');
define('_JOMRES_MR_CREDITCARD_EDIT','Edytuj dane karty kredytowej');
define('_JOMRES_COM_A_EDITICON','Edytuj rozmiar ikony');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Transfer zdjęcia obiektu na serwer');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Istniejące zdjęcia');
define('_JOMRES_COM_A_SLIDESHOWS','Pokaz slajdów');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Pokazać odsyłacz do pokazu slajdów?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Pokaż slajdy w ramach strony?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Wysokość miniaturek slajdów');
define('_JOMRES_FRONT_SLIDESHOW','Pokaz slajdów');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Brak zdjęć tego obiektu.');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Pokaż odsyłacz do cenników?');
define('_JOMRES_COM_A_POPUPSALLOWED','Wyskakujące okna dozwolone?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Jeżeli ustawione na Nie, to odsyłacz który normalnie otwiera nowe okno będzie otwierany w ramach strony.');
define('_JOMRES_FRONT_IMAGEUPLOADS','Zbiorczy transfer zdjęć na serwer');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Użyj tego formularza, aby przetransferować wiele zdjęć tego obiektu na serwer.
					<br />
					<b>Zwróć uwagę</b>, że każde zdjęcie z tą samą nazwą zostanie zastąpione nowym. Zwróć także uwagę, że ten formularz nie umożliwia transferu na serwer zdjęć konkretnego pokoju lub loga obiektu. Można tego dokonać z sekcji administracyjnej obiektu.');

define('_JOMRES_A_TABS_MISC','Różne');
define('_JOMRES_A','Konfiguracja strony');
define('_JOMRES_A_GLOBALPFEATURES','Używaj globalnych cech obiektów');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Ustaw na Tak, jeżeli chcesz wymusić używanie przez wszystkie obiekty tylko cech zdefiniowanych przez administratora strony.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Aby powiązać cechę z ikoną, należy najpierw przetransferować na serwer pliki ikon do katalogu /images/stories/jomres/pfeatures/ .');
define('_JOMRES_A_ICON','Ikona');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Wybierz wtyczkę wyszukiwania, której chcesz używać.');
define('_JOMRES_FRONT_NORESULTS','<b>Twoje wyszukiwanie nie dało żadnych rezultatów. Zmodyfikuj kryteria i spróbuj ponownie.</b>');
define('_JOMRES_AREYOUSURE','Czy jesteś pewny/a?');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Zarezerwuj ten obiekt');
define('_JOMRES_COM_MR_DISPGUEST_CCV','Kod CCV (kod bezpieczeństwa karty)');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Pokazuj cenniki w ramach strony?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adres');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Informacja szczegółowa');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknij aby sprawdzić dostępność');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Pokaż cennik');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Pokaż informację adresową pod tym odsyłaczem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Pokaż informację o obiekcie pod tym odsyłaczem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Pokaż pokoje i ich dostępność pod tym odsyłaczem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Pokaż cennik pod tym odsyłaczem');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Stałe ceny');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Średnie ceny');
define('_JOMRES_COM_A_TARIFFS_MODEL','Wybierz model cennika, jaki chcesz używać');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Masz do wyboru dwie metody kalkulacji cen. Pierwsza - stałe ceny - pozwala na oferowanie wielu różnych cenników, a cena za nocleg jest stała przez cały okres pobytu. Jest to użyteczne, jeżeli chcesz oferować w tym samym okresie różne ceny, np za nocleg ze śniadaniem, nocleg z półwyżywieniem, nocleg z pełnym wyżywieniem. Wybierz - ceny średnie - jeżeli chcesz ustalić ceny zależnie od daty. Aplikacja znajdzie cenę dla każdego dnia w ramach razerwacji, doda je do siebie i wskaże uśrednioną cenę dla całego okresu rezerwacji.");
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Dać możliwość wprowadzenia daty odjazdu?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Ustaw na Nie, jeżeli nie chcesz dać możliwości wpisywania daty odjazdu. Zrób tak tylko wtedy, gdy akceptujesz fakt, że data odjazdu będzie zawsze automatycznie ustawiana na dzień następny po przyjeździe.");
define('_JOMRES_COM_PROPERTYLISTDESC','Ograniczenie opisu');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Jest to ograniczenie ilości znaków pokazywanych jako wyciąg z opisu każdego obiektu w ramach listy obiektów.");
define('_JOMRES_COM_A_DATEFORMATSTYLE','Używaj formatowania daty');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Ustaw na Tak, jeżeli chcesz ustalić format daty zgodnie z funkcją date() (Zobacz <a href="http://www.php.net/manual/en/function.date.php">Tutaj</a>). Ustaw na Nie, jeżeli chcesz użyć formatu funkcji strftime() (zobacz <a href="http://www.php.net/manual/en/function.strftime.php">Tutaj</a> np. %b %d %Y .');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Kliknij aby opublikować');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Kliknij aby cofnąć publikację');
define('_JOMRES_A_GLOBALROOMTYPES','Używaj globalnych typów pokoi');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Ustaw na Tak, jeżeli chcesz aby wszystkie obiekty używały tylko typów pokoi zdefiniowanych przez administratora.  Należy ustawić na Tak, jeżeli ma być możliwe wyszukiwanie wg typów pokoi.');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Aby przypisać ikonę do typu pokoju, należy uprzednio zapisać ikony typów pokoi do katalogu /images/stories/jomres/rmtypes/ na serwerze.');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Błąd w kolorze tła.');
define('_JOMRES_COM_CONFIGCOUNTRIES','Domyślny kraj w formularzu rezerwacyjnym');
define('_JOMRES_JAVASCRIPT_','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
define('_JOMRES_COM_SELFREGISTRATION','Właściciele mogą rejestrować swoje obiekty?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Ustaw na Tak, jeżeli chcesz aby właściciele mogli rejestrować swoje obiekty bez interwencji administratora strony.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Proszę podać kraj i region swojego obiektu.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Proszę wprowadzić dane obiektu.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Obiekt dodany.');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Przykro nam, ale nie możesz dodać obiektu do systemu. Musisz być zarejestrowanym i zalogowanym użytkownikiem i nie możesz mieć już wcześniej dodanego obiektu.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Dodany obiekt:');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Właściciel:');
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Pokaż kalendarz od początku roku?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Pokazywany kalendarz dostępności rozpoczyna się od początku bieżącego roku.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Ilość dostępnych pokoi');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Powrót do informacji o obiekcie');
define('_JOMRES_FRONT_ROOMTYPES','Typy pokoi');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit przypadkowego wyszukiwania');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Pokaż odsyłacz do przelicznika walut Google w liście cenników?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Przelicz cene na:');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Pozwól użytkownikom edytować używając  edytora HTML?');
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak daty przyjazdu i odjazdu, ilość osób, następnie wybierz pokój/je z listy dostępnych. Kliknij dowolny dostępny pokój, aby dodać go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak daty przyjazdu i odjazdu, ilość osób, następnie wybierz pokój/je z listy dostępnych. Kliknij dowolny dostępny pokój, aby dodac go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, wyświetli się przycisk, umożliwiający potwierdzenie rezerwacji.');
define('_JOMRES_AJAXFORM_PARTICULARS','Szczegóły rezerwacji');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Określ szczegóły rezerwacji');
define('_JOMRES_AJAXFORM_AVAILABLE','Dostępność');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Wybierz pokój');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Sprawdź tutaj, czy obiekt jest w tym okresie dostępny.');
define('_JOMRES_AJAXFORM_EXTRAS','Opcjonalne usługi dodatkowe');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Wybierz dowolne usługi dodatkowe, które chcesz dodać do rezerwacji.');
define('_JOMRES_COM_PERDAY','Za noc');
define('_JOMRES_AJAXFORM_ADDRESS','Twój adres');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Podaj swoje dane. Wszystkie pola, za wyjątkiem numeru telefonu komórkowego, są wymagane.');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostępne pokoje');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Wybrane pokoje');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br />Najwcześniejsza możliwa data przyjazdu:');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Razem:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Usługi dodatkowe:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Podatek:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Zniżka:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Suma ogólna:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gości');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknij, aby dodać ten pokój do listy wyboru');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknij, aby usunąć ten pokój z listy wyboru');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Typ gościa');
define('_JOMRES_VARIANCES_TYPE','Typ');
define('_JOMRES_VARIANCES_TYPE_TT','Typ gości, np. dzieci w wieku 5 - 10 lat, student.');
define('_JOMRES_VARIANCES_NOTES','Uwagi');
define('_JOMRES_VARIANCES_NOTES_TT','Uwagi dotyczące danego typu gości.');
define('_JOMRES_VARIANCES_MAXIMUM','Maks');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksymalna ilość gości jaka może być wybrana w formularzu rezerwacyjnym.');
define('_JOMRES_VARIANCES_ISPERCENTAGE','Procent');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Suma jest procentem z sumy podstawowej skalkulowanej dla pokoju. Jeżeli ustawione na Nie, podana kwota będzie dodana lub odjęta od ceny rezerwacji pokoju.');
define('_JOMRES_VARIANCES_POSNEG','Dodać wariant?');
define('_JOMRES_VARIANCES_POSNEG_TT','Kalkulowana kwota jest dodawana lub odejmowana od ceny rezerwacji pokoju. Ustaw na Nie, jeżeli chcesz, aby była to zniżka od ceny podstawowej.');
define('_JOMRES_VARIANCES_VARIANCE','Wariant');
define('_JOMRES_VARIANCES_VARIANCE_TT','Wartość wariantu');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Lista typów gości zmodyfikowana.');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Opublikowany typ gości.');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Usunięty typ gości.');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Utworzony typ gości.');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Zmieniony typ gości.');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Zmieniony typ gości.');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Pokazać odsyłacz do listy pokoi na stronie informacyjnej obiektu?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Pokazać  <b>tylko</b> kalendarz dostępności/listę pokoi?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Ustaw na Tak, jeżeli chcesz nie wyświetlać informacji o obiekcie, tak że lista pokoi/dostepność będą widoczne w części informacyjnej obiektu. Przeznaczone w zasadzie dla użytkowników wynajmujących obiekt typu apartament, domek itp.');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimum długość pobytu');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalna długość pobytu oferowana w formularzu rezerwacyjnym (tym samym w obiekcie).');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Formularz rezerwacyjny pokazuje numery pokoi');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Formularz rezerwacyjny pokazuje nazwy pokoi');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Formularz rezerwacyjny pokazuje nazwę cennika');
define('_JOMRES_ORDER','Kolejność');
define('_JOMRES_REQUIREDFIELDS','Wymagane');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dni do przyjazdu');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimalna ilość dni, jaka musi pozostać między datą dokonywania razerwacji a datą przyjazdu.');
define('_JOMRES_DTV','Warianty typu daty');
define('_JOMRES_DTV_DOW','Dzień tygodnia');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Domyślny typ gości');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Domyślny typ gości (o ile używasz rozróżnienia typów gości), nadawany pierwszemu gościowi w formularzu rezerwacyjnym.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Rezerwacji on-line może dokonać tylko zarejestrowany użytkownik?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Przykro nam, musisz być zarejestrowanym użytkownikiem, aby móc rezerwować on-line. Kliknij tutaj, aby się zarejestrować.');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Kolor odsyłaczy do aktualnych rezerwacji');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Ramki tygodni');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Pokój zarezerwowany');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Wyłączenie');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrąglać przedpłatę do pełnej kwoty?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Przedpłata wymagana?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Zapisać cennik jako opłaty tygodniowe?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Masz możliwość zapisać cennik jako opłaty dzienne lub tygodniowe. Jeżeli chcesz zapisu tygodniowego ustaw na Tak.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena za tydzień');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Stałe daty przyjazdu powtarzają się:');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Jeżeli wybrano stałe daty przyjazdu, daty te będą pokazywane na liście wyboru w trakcie procesu rezerwacji.');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcja dla palących niedostępna');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Błędna data przyjazdu.');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Błędna data wyjazdu.');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Okres rezerwacji zbyt krótki. Między datą przyjazdu i wyjazdu musi być minimum dni:');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Twój okres rezerwacji wynosi:');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Błędny typ gościa');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Wybierz odpowiednią ilość/typ gościa');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Rezerwacja dotyczy zbyt dużej ilości osób dla dostępnego cennika.');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Wybrano więcej pokoi, niż ilość osób.');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Zbyt dużo osób w stosunku do dostępnych miejsc noclegowych.');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musisz wybrać więcej pokoi.');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Wybierz pokój');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Wymagane jest imię.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Wymagane jest nazwisko.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Wymagany jest nr domu.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Wymagana jest nazwa ulicy.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Wymagana jest nazwa miejscowości.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Wymagane jest województwo/region.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Wymagany jest kod pocztowy.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Wymagany jest kraj.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Wymagany jest numer telefonu stacjonarnego.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Wymagany jest numer telefonu komórkowego.');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Wymagany jest adres e-mail.');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Adres e-mail jest błędny.');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Nie udało się sprawdzić adresu e-mail.');
define('_JOMRES_SRP_WEHAVEVACANCIES','Mamy wolne miejsca.');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Jeszcze nie wybrano pokoi.');
define('_JOMRES_BOOKING_NUMBER','Rezerwacja nr');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok dla rezerwacji, tło pola tekstowego');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Zmienne szablonu?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Uaktywnij, aby umożliwić wpisywanie zmiennych DHTML do szablonu strony. Pomocne, jeżeli chcesz widzieć, czy ten konkretny element jest dostępny w danym szablonie.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Kwota jest procentem');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ustaw na Tak, jeżeli cena za pojedyncze wykorzystanie jest procentem pełnej ceny. Jeżeli nie, to cena zostanie ustalona kwotowo.');
define('_JOMRES_COM_LIMITROOMSLIST','Ograniczenie dostępności pokoi/cenników');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Wprowadź tą daną aby ograniczyć ilość dostępnych pokoi i cenników, pokazywanych w formularzu rezerwacyjnym. Jeżeli nie chcesz ograniczenia, ustaw na zero.');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Aktualnie brak wolnych miejsc.');
define('_JOMRES_BOOKITNOW','Zarezerwuj teraz:');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Globalny tryb edycji?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Jeśli jest ustawiona na Tak, wtedy tryb edycji wpłynie na indywidualny tekst dla wszystkich obiektów w systemie. Będą zastosowane teksty globalne.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Globalny symbol waluty');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Komponent owinięty');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Ustaw na Tak, jeśli element jest owinięty tak, że moduł i nagłówek nie powinny być widoczne.');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Główny zarządca obiektu');
define('_JOMRES_COM_WEEKENDONLY','Tylko w weekendy');
define('_JOMRES_COM_WEEKENDDAYS','Dni weekendowe');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Ustaw taryfy dni weekendowych.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Wybierz swój kraj przed dodaniem jakichkolwiek informacji.');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Zapisz zmiany przed wysłaniem zdjęcia.');
define('_JOMRES_TARIFFSFROM','Ceny od - ');
define('_JOMRES_SEARCH_ALL','Wszystko');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Szukaj według kraju');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Szukaj według regionu');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Szukaj wg miejscowości');
define('_JOMRES_SEARCH_FEATURE_INFO','Wyszukiwanie funkcji.');
define('_JOMRES_SEARCH_BUTTON','Szukaj');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Wpisz szukane słowo w polu i naciśnij przycisk.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Wyszukaj słowo/a:');
define('_JOMRES_SEARCH_AVL_INFO','Podaj datę przyjazdu i wyjazdu a następnie naciśnij przycisk, aby znaleźć obiekty, które mają jeszcze wolne miejsca w wybranym zakresie dat.');
define('_JOMRES_SEARCH_PTYPES','Lista wszystkich właściwości ze względu na rodzaj obiektu.');
define('_JOMRES_SEARCH_RTYPES','Lista wszystkich właściwości dla tego rodzaju pokoju.');
define('_JOMRES_SORTORDER_DEFAULT','Domyślnie');
define('_JOMRES_SORTORDER_PROPERTYNAME','Nazwa obiektu');
define('_JOMRES_SORTORDER_PROPERTYREGION','Region obiektu');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Miejscowość obiektu');
define('_JOMRES_SORTORDER_STARS','Ilość gwiazdek');
define('_JOMRES_PATHWAY_PROPERTYLIST','Lista obiektów');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Szczegóły obiektu - ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Formularz rezerwacji');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Zaktualizuj swoje dane adresowe');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Ponowne sprawdzanie dostępności pokoju
					<br />
					(wybór pokoju będzie zresetowany).');

define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Ponowne sprawdzanie dostępności');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modyfikacja dodatkowego wyposażenia w');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Zmiana wybranego pokoju');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Aktualizacja danych adresowych w');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Przepraszamy, jedno lub więcej pól adresowych jest wypełnionych nieprawidłowo.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Zdjęcie pokoju');
define('_JOMRES_CURRENCYFORMAT','Kalkulator');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Zarządzanie opcjami zdjęć');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Opcje wyszukiwania');
define('JOMRES_COM_A_AVAILABLELOGS','Typy operacji');
define('JOMRES_COM_A_LOGS_NOENTRIES','Nie wpisy. Jest to normalne, trzeba ręcznie modyfikować jomres.php by wywołać logowania.');
define('JOMRES_COM_A_MESSAGE','Wiadomość');
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normalny');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Zaawansowany');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
define('JOMRES_COM_A_TARIFFMODE','Tryb konfiguracyjny taryf');
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Ostrzeżenie! Przełączanie pomiędzy różnymi rodzajami taryf może spowodować utratę danych, przeczytaj poniższe uwagi.</b>
					<br /><br />
					Dostępne są trzy opcje możliwości konfiguracji taryf.
					<ul>
					  <li>Tryb normalny - Będziesz miał jedną taryfę dla każdego rodzaju pokoju, która jest ważna przez najbliższych 10 lat.</li>
					  <li>Micromanage - Można modyfikować cenę za każdy dzień i za każdy pokój w danym typie obiektu.</li>
					  <li>Zaawansowany - Dowolna możliwość kształtowania taryf.</li>
					</ul>
					<br />
					Różne możliwości konfiguracji taryf pozwalają wybrać metodę która Ci najbardziej odpowiada.
					<br />
					Tryb normalny jest najprostszym, ale zarazem najłatwiejszym do zrozumienia, ponieważ wyświetla pokoje referencyjne i taryfy na pokój, lokale mieszkalne i umożliwia skonfigurowanie pokoi i cen na tej samej stronie.
					 <br />
					Micromanage pozwala różnicować stawki za dzień na dzień podstawie bez konieczności zarządzania ryz taryf, to odbywa się poprzez poprzecznych dużo referencji różnych taryf ze sobą. Powoduje to szereg taryf stworzony dla Ciebie obejmujących okres czasu, ale nie można taryfy warstwa ponad sobą.
					 <br />
					Tryb zaawansowany umożliwia utworzenie pokoju i skojarzyć ją z rodzaju pokoju. Następnie należy utworzyć taryfę i skojarzyć, że z rodzaju pokoju. Używając tej metody możliwe jest warstwy taryfy na siebie, na przykład typ pokoju podwujne łóżko może mieć jedną taryfę za łóżko i śniadanie, a inny do posiłku łóżko, śniadanie i kolację. Zaawansowana metoda wymaga trochę większej uwagi na szczegóły, ponieważ możliwe jest do DIS-współpracownik pokoju lub taryfy z pokoju obiektu typu lub na nieprawidłowo ustawiony ważnych od i do dat, ale to nie daje opcji konfiguracyjnych, że inne tryby nie oferują.
					<br /><br />
					Ponieważ tryb Normalny i Micromanage wymagają specyficznych skonfigurować pokoi i taryf dla trybu taryfowego do pracy systemu może być konieczne zresetowanie pewne dane, aby obecne konfiguracje taryfowe zgodny z bieżącym trybie edycji taryfowego.
					<br /><br />
					Normalny -> Zaawansowane. Bez zmian. Istniejące taryfy zostaną zachowane.
					<br />
					Normalny -> Micromanage>. Wszystkie istniejące taryfy zostaną usunięte.
					<br />
					Zaawansowane -> Normalne. Wszystkie istniejące taryfy zostaną usunięte.
					<br />
					Zaawansowane -> Micromanage>. Wszystkie istniejące taryfy zostaną usunięte.
					<br />
					Micromanage -> Zaawansowane. Wszystkie istniejące odniesienia skrzyżowanie taryf są usuwane, ale taryfy będą się nadal.
					<br />
					Micromanage -> Normalne. Wszystkie istniejące odniesienia krzyżowe i taryfy są usuwane.
					<br />
					");
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','lista pokoi na stronie szczegółów obiektu?');
define('JOMRES_PROPERTYTYPE','Typ obiektu');
define('JOMRES_COM_A_SRPONLY','Tylko SRP');
define('JOMRES_MAXPEOPLEINROOM','Maks gości w pokoju');
define('JOMRES_MAXPEOPLEINBOOKING','Maks gości w rezerwacji');
define('_JOMCOMP_BOOKINGNOTES_ADD','Dodaj notatkę');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edytuj notatkę');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Usuń notatkę');
define('_JOMCOMP_BOOKINGNOTES_VIEW','Zobacz notatki');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Dodano nową notatkę.');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Zedytowano notatkę.');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Usunięto notatkę.');
define('_JOMCOMP_MYUSER_MENUTITLE','Moje opcje');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','Lista rezerwacji');
define('_JOMCOMP_MYUSER_MYBOOKINGS','Moje rezerwacje');
define('_JOMCOMP_MYUSER_VIEWBOOKING','Zobacz rezerwacje');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','Moje ulubione');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','Nie dodano jeszcze żadnych ulubionych.');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Dodaj do ulubionych');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Typ obiektu');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Obiekt na stronie');
define('_JOMCOMP_WISEPRICE_TITLE','Atrakcyjna cena');
define('_JOMCOMP_WISEPRICE_ACTIVE','Aktywny');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','Ta wtyczka pozwala włączyć i skonfigurować swoje ceny za pokoje dynamicznie.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Większość firm będzie cenę pokoju przeliczać na podstawie liczby pokoi wymaganego typu, które są dostępne w danym dniu. Pozwala to oferować zniżki na dany rodzaj pokoju jeśli nie został on zajęty w danym okresie. Funkcja umożliwia przyciągnięcie gości do pokoi, które mogłyby być pominięte i niezarezerwowane w danym czasie.
					<br />
					Włączenie i konfiguracja dodatku pozwala zaoferować regulację cen na podstawie liczby pokoi wybranego typu które są dostępne w obiekcie w danym dniu.
					<br />
					Ilość określa liczbę dni, w jakim musi mieścić się data przyjazdu zanim ceny pokoi zostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu pokoi, które mogą być dostępne przed zastosowaniem danego rabatu.');

define('_JOMCOMP_WISEPRICE_THREASHOLD','Ilość dni (liczba dni pomiędzy datą przyjazdu i dniem dzisiejszym)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Pokoje zajęte w < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Pokoje zajęte w < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Pokoje zajęte w < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Pokoje zajęte w < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Rabat %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' została odrzucona z ');
define('_JOMCOMP_WISEPRICE_TO',' do ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Cena pokoju nie zdyskontowanych ');
define('JOMRES_COM_A_MAPSKEY','Klucz API map Google');
define('JOMRES_COM_A_MAPSKEY_DESC','Klucz API map Google można wygenerować tu: <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Mapy Google</a>. Po wprowadzeniu klucza API map Google, mapy będą wyświetlane na stronie szczegółów danego obiektu.');
define('JOMRES_COM_A_USE_SSL','Używać SSL w formularzu rezerwacji?');
define('JOMRES_COM_A_USE_SSL_DESC','Musisz się upewnić, że masz ważny certyfikat SSL dla');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Aktywny?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Ustaw na Tak, jeśli chcesz zaoferować oferty Last minute.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Ilość dni');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','Jeśli rezerwacja zostanie wykonana i data przyjazdu jest tylko X dni od daty dokonania rezerwacji zostanie udzielony rabat.');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Rabat');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','W procentach');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','Rabat został zastosowany do tej rezerwacji.');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','Koszty pobytu zostały zmniejszone o');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','Ten obiekt oferuje oferty Last minute ze zniżkami w');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' procent, jeśli rezerwacja przed ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' procent lub więcej, jeśli rezerwacja przed ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Rezerwuj teraz, aby skorzystać z tej oferty.');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Więcej info o taryfie');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Ustaw na Tak, aby pokazać bardziej szczegółowe informacje taryfowe w szczegółach obiektu/taryfy w oknie popup.');
define('JOMRES_COM_A_MINIMALCONFIG','Minimum opcji konfiguracyjnych');
define('_JOMCOMP_AMEND','Zmień rezerwacje - Wybór obiektu');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Wybór nowego obiektu');
define('_JOMCOMP_AMEND_HEADER','Pierwotne zamówienie:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Kaucja wpłacona');
define('_JOMCOMP_AMEND_DEPOSITDUE','Kaucja nie wpłacona');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Zastąp całkowicie');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Całkowity depozyt');
define('_JRPORTAL_CANCEL','Anuluj');
define('_JRPORTAL_CPANEL','Panel sterowania');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Domyślna stawka prowizji');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Wybierz domyślną stawkę prowizji, która będzie stosowana dla obiektu w przypadku, gdy inna stawka prowizji nie jest inaczej ustawiona.');
define('_JRPORTAL_CPANEL_LISTCRATES','Lista prowizji');
define('_JRPORTAL_CPANEL_PATETITLE','Prowizje');
define('_JRPORTAL_CRATE_TITLE','Tytuł');
define('_JRPORTAL_CRATE_TYPE','Typ');
define('_JRPORTAL_CRATE_VALUE','Stawka prowizji');
define('_JRPORTAL_CRATE_CURRENCYCODE','Kod waluty');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','Lista obiektów');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Nazwa obiektu');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Adres obiektu');
define('_JRPORTAL_PROPERTIES_LEGEND','Obiekty które mają kolor tła czerwony jeszcze nie zostały zatwierdzone.');
define('_JRPORTAL_STATS_PATETITLE','Statystyki');
define('_JRPORTAL_STATS_STATTYPE','Statystyka dla:');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Obiekt - Kliknięcia');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Widok obiektu');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Liczba rezerwacji');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Wartość rezerwacji');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Szacunkowa prowizja');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Stawka prowizji');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','Lista rezerwacji');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Id obiektu');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Id gościa');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Id partnera');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Id faktury');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Rezerwacja całkowita');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Id umowy');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Nr umowy');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Kod waluty');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Utworzona');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archiwizacja');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Data archiwizacji');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Dodaj element do warunków umowy');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Zarządzanie fakturami');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Powiązane obiekty (jeśli dotyczy)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Wartość');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Opis');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Pomyślnie wstawiony element rozliczeniowy w");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"Zobacz zlecenia");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Nie udało się wprowadzić elementu rozliczeniowego w");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Błąd! Nie ustawiono wartości projektu ustawy.");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','Możesz mieć specyficzne pliki językowe dla specyficznych typów obiektów. Ustawiając opis z nazwą podkatalogu, np. "yachtbrokerage" i kopiując plik językowy do tego podfolderu. Następnie można zmodyfikować ten plik językowy dla danego typu obiektu np. usługi fryzjerskie i tp.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','Nie możesz usunąć tego obiektu ponieważ jest to podstawowy obiekt do którego masz dostęp. Jeśli chcesz go wyłączyć, proszę skorzystać z funkcji nie-publikowania w pasku narzędzi.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','Jeśli jest to instalacja demo i zamierzasz uaktualnić system do Jomres Solo (tylko obsługa jednego obiektu) należy utworzyć nowy obiekt a następnie usunąć go przed zmianą klucza licencyjnego do wersji Solo.');
define('_JOMRES_COM_EMAILERRORS',"Wiadomości e-mail dziennika błędów?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Ustaw na Tak, jeśli chcesz automatycznie przesyłać dziennik błędów do jomres.net . Pozwala to błyskawicznie reagować na raportowane błędy i usuwać je zanim wykryjesz ich istnienie. Uwaga! Ta funkcja jest wyłączona na 'localhost'.");
define('_JOMRES_COM_ISTHISANMRP',"Czy to obiekt typu hotel/pensjonat/dom wczasowy?");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Opcje konfiguracji różnią się w zależności czy są to wynajmowane pokoje w obiekcie (np. hotel) lub cały obiekt (np. domek letniskowy). Wybierz MRP jeśli oferujesz wynajem pokoii w obiekcie, wybierz SRP, jeśli oferujesz do wynajęcia cały obiekt.");
define('_JOMRES_COM_JOMRESEMAILCHECK',"Użyj sprawdzania adresu e-mail?");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Wymusza ściślejszą kontrolę wysyłki wiadomości e-mail. Niektóre bezpieczne serwery WWW zgłoszą błąd 500 (wewnętrzny błąd serwera) przy próbie wysłania wiadomości na nieistniejący adres e-mail. Ustawienie to pozwala na wykorzystanie funkcji checkdnsrr w php przed przystąpieniem do wysyłki wiadomości, zapobiegając wyświetlaniu błędu 500.");
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Pełne zakwaterowanie");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"noc/y w");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"za pokój");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Popraw swój cały pobyt.");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Podsumowanie cena");
define('_JOMRES_CONFIRMATION_ALERT',"Proszę przeczytać i zaakceptować");
define('_JOMRES_CONFIRMATION_HEADER',"Podsumowanie rezerwacji jest pokazane poniżej.
					<br />
					Aby dokonać zmian, kliknij przycisk 'Zmień rezerwację'.");

define('_JOMRES_CONFIRMATION_AMENDTEXT',"Jeśli musisz zmienić jakiekolwiek z powyższych informacji kliknij tutaj");
define('_JOMRES_CONFIRMATION_AMEND',"Zmień rezerwację");
define('_JOMRES_CONFIRMATION_SPECIALS',"Proszę podać specjalne życzenia w polu poniżej.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"Potwierdzam, że powyższe informacje są poprawne.");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"za osobę za noc");
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Domyślny plik językowy");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Wybierz domyślny plik językowy Jomres jeśli język ten nie został ustawiony przez JoomFish.");

if (!defined('_PN_OF'))
	define('_PN_OF','z');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Wstecz');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Dalej');
if (!defined('_PN_END'))
	define('_PN_END','Koniec');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Wyniki');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Zauważ, że nie jest to formularz rezerwacji.
					<br />
					Proszę wpisać wiadomość, którą chcesz wysłać do');

define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Dane kontaktowe');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Badanie obiektu od');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Dziękujemy za pytanie. Twoja wiadomość została wysłana do właściciela tego obiektu i na Twój adres e-mail. Spodziewaj się szybkiej odpowiedzi.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' w sprawie ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Wpisz znaki widoczne na obrazku');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','Nie mogę odczytać znaków. Generuj nowe.');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Wyślij');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','nowy obrazek');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Zapytanie');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Proszę wybrać odpowiednie zakwaterowanie z listy po prawej');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Pokoje min już wybrane');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimalna liczba pokoi już wybranych w rezerwacji przed taryfa/pokój combo typu może być oferowane. Pozwala mieć zniżki taryf, gdy więcej niż pomieszczeń X są');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Pokoje max już wybrany');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maksymalna liczba pokoi już wybranych w rezerwacji przed taryfa/pokój combo nie jest już oferowana. Umożliwia zaprzestanie oferowania tego typu pokoju/taryfa.');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Należy pamiętać, że pojedyncze osobowej ustalonej tutaj nie będzie używany, jeśli pojedyncze Suppliments Person są ustawione na Tak w ogólnej konfiguracji. Ustawienia tutaj są alternatywą dla zryczałtowanych pojedynczych Suppliements osobą, nie dodatek do mieszkania Stopa SPS.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Dostępny");
define('_JOMRES_AVLCAL_QUARTER',"Niektóre rezerwacje");
define('_JOMRES_AVLCAL_HALF',"Połowa zarezerwowana");
define('_JOMRES_AVLCAL_THREEQUARTER',"Głównie zarezerwowana");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Zajęte");
define('_JOMRES_COM_SEF_URL_PREFIX','Prefix URL');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','To jest pierwszy element wyświetlany po nazwie domeny - zmień go jeśli potrzebujesz.');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','Alias obiektu');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','Alias do strony obiektu.');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','Alias rezerwacji');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','Alias do strony rezerwacji.');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Alias strony wyszukiwania');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','Alias do strony wyszukiwania.');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Dodaj kraj do URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','Dodaje kraj do adresu URL.');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Dodaj region do URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','Dodaje region do adresu URL.');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Dodaj miejscowość do URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','Dodaje miejscowość do adresu URL.');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Dodaj typ obiektu do URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','Dodaje typ obiektu do adresu URL.');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Dodaj nazwę obiektu do URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','Dodaje nazwę obiektu do adresu URL.');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Dołącz ID do nazwy obiektu w URL');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','Jeśli nazwa obiektu jest ustawiona na Nie, to ID nie będzie używany. Jeśli jest włączony to URL będzie taki ...fawlty_towers-1 .');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Struktura URL Szukaj - Dodaj kraj do URL');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','Dodaje kraj do URL wyniku szukania.');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Struktura URL Szukaj - Kraj domyślny');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','Jeśli wszystkie obiekty są w jednym kraju, to nie będzie on wyświetlany w URL wyniku szukania. Wprowadź tu kraj domyślny jeśli chcesz wyświetlić go w URL.');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Struktura URL Szukaj - Dodaj region do URL');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','Dodaje kraj do URL wyniku szukania.');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Struktura URL Szukaj - Region domyślny');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','Jeśli wszystkie obiekty są w jednym regionie to nie będzie on wyświetlany w URL wyniku szukania. Wprowadź tu region domyślny jeśli chcesz wyświetlić go w URL.');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Struktura URL Szukaj - Dodaj miejscowość do URL');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','Dodaje miejscowość do URL wyniku szukania.');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Struktura URL Szukaj - Miejscowość domyślna');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','Jeśli wszystkie obiekty są w jednej miejscowości to nie będzie ona wyświetlana w URL wyniku szukania. Wprowadź tu miejscowość domyślną jeśli chcesz wyświetlić ją w URL.');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Struktura URL Szukaj - Typ obiektu');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','Dodaje typ obiektu do URL wyniku szukania.');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Struktura URL Szukaj - Domyślny typ obiektu');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Używany w URL, jeśli poszukiwanie jest dla wszystkich typów obiektów.');
define('_JOMRES_COM_SEF_NOTINSTALLED','Komponent she404sef nie jest zainstalowany. Czy masz kopiowane '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php do '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Po zainstalowaniu sh404sef i/lub skopiowaniu pliku, będzie można skonfigurować adresy URL SEF tutaj.');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetekcja języka kalendarza Javascript');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Włącz automatyczne wykrywanie języka dla kalendarzy Javascript. Jeśli nie możemy rozpoznać go automatycznie wtedy powróci do języka skonfigurowanego poniżej.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per tydzień');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per dni');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per rezerwacja');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per osoba per rezerwacja');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per osoba per dzień');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per osoba per tydzień');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per dni (min dni)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per dni X wybrany pokój');
define('_JOMRES_REGISTRYREBUILD','Odbuduj rejestr minicomponent');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normalnie rejestr wtyczek Jomres jest przebudowywany automatycznie przy wyświetlaniu Plugin Manager i dodawaniu lub usuwaniu wtyczki, jednak możliwe jest, że nie można wykorzystać tych funkcji z jakiegoś powodu, więc można użyć tej funkcji, aby odbudować rejestr ręcznie. Jeśli masz dostęp do Plugin Manager i Uaktualnień wtedy jest mało prawdopodobne, że będziesz musiał użyć tej funkcji. Możesz odbudować rejestr wtyczki w dowolnym momencie, dodać nowy mini-komponent i nie używać Plugin Manager.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Rejestr przebudowany poprawnie.');
define('_JOMRES_REGISTRYREBUILD_FAILURE','Wystąpił błąd przy odbudowie rejestru minicomponents. Powinieneś sprawdzić błąd w dzienniku Jomres, aby sprawdzić, czy istnieje zapis mówiący o tym, co spowodowało błąd.');
define('_JOMRES_SEARCH_PRICERANGES','Szukaj w przedziale cenowym.');
define('JOMRES_WORD_SAVING','Zapisywanie...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Użyj kompozytowych szczegółów obiektu?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3,3 wprowadził kompozytowe szczegóły obiektów, gdzie wszystkie szczegóły wyjścia są przesyłane do jednego szablonu pliku (composite_property_details.html). Jeśli nie chcesz używać tej funkcji ustaw ją na Nie (tylko istniejący użytkownicy powinni ustawić na Nie, nowi użytkownicy będą prawdopodobnie chcieli pozostawić ustawiony na Tak).');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','To jest lista wszystkich użytkowników w systemie. Użytkownicy bez własnych obiektów oznaczeni są ikoną Gość. Zarządcy nieruchomości oznaczeni są ikoną Satelity/Manager obiektu.
					<br />
					W czasie pierwszej instalacji Jomres "admin" jest dodawany automatycznie jako zarządca obiektu i jest autoryzowanym użytkownikiem.
					<br />
					Super zarządcy muszą być przypisani do przynajmniej jednego obiektu inaczej zobaczą błąd podczas próby zalogowania się i korzystania z Jomres.
					<br />
					Użytkownik zalogowany może edytować swoje profile, przypisać je do obiektu lub dać im rangę Super zarządcy.
					<br />
					Aby autoryzować użytkownika, kliknij na czerwony krzyżyk obok jego nazwy. Aby zdeautoryzować użytkownika, kliknij zielone kleszcze.
					<br />
					Możesz przypisywać użytkowników do specyficznych właściwości, dawać im uprawnienia Super zarządcy obiektu etc. Użytkownicy, którzy sami zarejestrowali swój obiekt będą automatycznie przypisani do tych obiektów jako Super zarządcy. Otrzymają automatycznie pełne prawa i będą mieli do dyspozycji wszystkie opcje konfiguracji, nawet jeśli s one zminimalizowane w ustawieniach konfiguracji witryny.');

define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Tutaj możesz przypisać managera do wybranych obiektów. Mają oni prawo do co najmniej jednego obiektu w przeciwnym razie będą widzieli błąd, przy logowaniu. Aby dać rangę Recepcjonistka/manager w obiekcie, upewnij się, że Super Obiektu Manager nie jest ustawiona na Tak.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','Nie ma jeszcze żadnych rezerwacji.');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Typ obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edytuj typ obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Wybierz typ obiektu');
define('_JOMRES_COM_LOGGING','Logi systemu');
define('_JOMRES_COM_LOGGING_WARNING','Opcje te pozwalają włączyć/wyłączyć rejestrowanie błędów w Jomres. Rejestrowanie błędów jest zawsze włączone, ale pozostałe dzienniki mogą być włączane i wyłączane. <b>Włączenie dzienników błędów dla większej ilości funkcji jest wyłącznie sposobem na łatwiejsze debugowanie, niesie jednak ze sobą duże zagrożenie bezpieczeństwa.</b> Osoby trzecie mogą bez upoważnienia uzyskać dostęp do logów. Dlatego zaleca się pozostawienie dodatkowych dzienników błędów przez większość czasu jako wyłączone. Jeśli masz włączone rejestrowanie, po wyłączeniu ich należy również upewnić, się że folder <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> nie zawiera żadnych starych plików dziennika. Rejestrowanie dodatkowych dzienników znacząco może spowolnić system, gdyż gromadzi wiele informacji.');
define('_JOMRES_COM_LOGGING_BOOKING','Logi silnika rezerwacji');
define('_JOMRES_COM_LOGGING_GATEWAY','Logi bramek płatności');
define('_JOMRES_COM_LOGGING_REQUEST','Logi zapytań przychodzących');
define('_JOMRES_COM_LOGGING_SYSTEM','System');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Twoje zapytanie...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Obraz typu pokoju w formularzu rezerwacji');
define('_JOMRES_COM_A_LISTLIMIT','Limit obiektów na liście');
define('_JOMRES_COM_A_LISTLIMIT_DESC','Liczba obiektów pokazywanych na stronie wyszukiwania.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Wyszukiwarka');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','Zintegrowana funkcja wyszukiwania pozwala użytkownikom przeszukiwać obiekty zgodnie z zestawem funkcji. Jeśli już korzystałeś z funkcji wyszukiwania w Jomres w Joomla zapoznaj się z tymi ustawieniami.
					<br />
					Funkcja ta umożliwia obsługę wyszukiwania w Jomres dla tych użytkowników, którzy nie chcą używać dodatkowych modułów wyszukiwania Joomla.
					<br />
					Pamiętaj, że jeśli zdecydujesz się szukać czegoś za pośrednictwem linku (nie listy rozwijanej), inne opcje wyszukiwania nie będą realizowane, tylko kliknięty link.
					<br />
					Zauważ, że domyślnie układ tej zintegrowanej wyszukiwarki nie jest ładny. Jest tak ponieważ plik szablonu musi zawierać wszystkie możliwe opcje, a niektóre z nich są sprzeczne. Aby poprawić wygląd i dostosować go do własnych preferencji, trzeba zmienić <b>srch.html</b> w katalogu <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b>.');

define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Uaktywnić integracje wyszukiwarki?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','Jeśli Tak, to każde zapytanie do Jomres pokazuje listę obiektów i wszystkie opcje wyszukiwania.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Korzystać z kolumn');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Każda opcja wyszukiwania pokazywana jako link pojawi się w kolumnach.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Ilość kolumn");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"Liczba ikon funkcji, które mają być wyświetlane przed dodaniem br i przejściem do nowego wiersza.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Wyszukiwanie według regionu (wybór z listy rozwijanej)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Wyszukiwanie z listy rozwijanej, filtrowanie według krajów/regionów/miejscowości. Jeśli zamierzasz korzystać z tej funkcji to nie używaj opcji wyszukiwania region/miejscowość poniżej.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Szukaj według nazwy obiektu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Szukanie przez wpisanie nazwy obiektu.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Pokaż jako listę rozwijaną?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Szukaj wg miejscowości lub regionu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Szukanie przez wpisanie nazwy miejscowości lub regionu.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Pokaż jako listę rozwijaną?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Ustaw na nie, aby wyświetlić listę jako linki.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Wyszukiwanie według typu obiektu");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Szukanie przez wpisanie typu obiektu.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Pokaż jako listę rozwijaną?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Szukaj według rodzaju pokoju");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Szukanie przez wpisanie rodzaju pokoju.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Pokaż jako listę rozwijaną?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako linki.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Szukanie według funkcji");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Szukanie przez wpisanie funkcji.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Pokaż jako listę rozwijaną?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Ustaw na Nie, aby wyświetlić listę jako ikonki i pola wyboru.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Szukaj w opisie");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Szukanie przez wpisanie frazy kluczowej.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Szukaj według dostępności");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Szukanie przez wpisanie dostępności.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Szukaj w przedziałach cenowych");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Szukanie przez wpisanie przedziałów cenowych.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Taryfy w przedziale cenowym");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Sprawdzone zostaną wszystkie taryfy i wyświetlone wyłącznie te mieszczące się w zdefiniowanych przedziałach cenowych.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','Domyślnie, jeśli obiekt nie został wybrany zostanie przeprowadzone wyszukiwanie. Jeżeli wyniki wyszukiwania nie zostały wywołane przez moduł wyszukiwania, wyszukiwanie będzie produkować losowe wyniki (celowo).');
define('_JOMRES_COM_A_CRON_TITLE','Cron i dzienniki');
define('_JOMRES_COM_A_CRON_DESC','Funkcjonalność ta jest wymagana dla fakturowania i prawidłowej obsługi prowizji.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Ręczne uruchamianie zadań crona korzystając z linków widocznych poniżej. Zauważ, że kliknięcie w link uruchamia zadanie, wyświetlona pusta strona nie jest błędem.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Metoda');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"Jeśli nie masz dostępu do crona, ustaw funkcję uruchamiania cyklicznych zadań wbudowanych w Jomres. W przeciwnym razie ustaw uruchamianie zadań przez Twojego crona na serwerze.
					<br />
					<i>curl -s ".JOMRES_SITEPAGE_URL_AJAX."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i>");

define('_JOMRES_COM_A_CRON_LOGGING','Wyświetlanie logowania w przeglądarce');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Działa tylko jeśli metoda jest ustawiona na Minicomponent.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logowanie włączone');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Ustaw na Tak by włączyć logowanie. Wyniki dzienników będą dostępne poniżej.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Pełne rejestrowanie');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Dużo logując wyjście');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Edycja szablonów');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','Ta funkcja pozwala edytować szablony frontu Jomres na serwerze i zapisywanie wyników do bazy danych.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Nazwa szablonu');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Szablon został dostosowany?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Własne pola');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Tutaj można określić niestandardowe pola, które będą widoczne w formularzu rezerwacji.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Nazwa pola (bez spacji)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Wartość domyślna');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Opis');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Wymagane');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maksymalna ilość');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','Jeśli maksymalna ilość jest ustawiona na większy niż 1 to goście otrzymają możliwość wyboru z listy rozwijanej dodatków.');
define('_JRPORTAL_INVOICES_ISSUE',"Faktury");
define('_JRPORTAL_TAXRATES_TITLE',"Podatki");
define('_JRPORTAL_TAXRATES_CODE',"Ustawienia podatku");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Opis podatków");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"Nie można usunąć tej stawki podatkowej.");
define('_JRPORTAL_TAXRATES_RATE',"Cena");
define('_JRPORTAL_INVOICES_TITLE',"Faktury");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Niezapłacone");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Zapłacone");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Anulowane");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Oczekujące");
define('_JRPORTAL_INVOICES_USER',"Użytkownik");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Zwiększona");
define('_JRPORTAL_INVOICES_DUE',"Ze względu");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subskrypcja");
define('_JRPORTAL_INVOICES_INITTOTAL',"Znakomita całkowite");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Powtarzające się całkowite");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Częstotliwość powtarzania");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Cyklicznie dzień miesiąca");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Kod waluty");
define('_JRPORTAL_INVOICES_LINEITEMS',"Pozycje");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Nazwa");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Opis");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Początkowa cena");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Początkowa ilość");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Początkowy rabat");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Początkowa całkowita");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Powtarzająca się cena");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Powtarzająca się ilość");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Powtarzający się rabat");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Powtarzająca się całkowita");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Kod podatku");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Opis podatku");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Stawka podatku");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Ustawienia PayPal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Kod waluty (np. PLN)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Użyj piaskownicy?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Twój adres e-mail PayPal");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Uwaga! Aby korzystać z PayPal musisz zalogować się do swojego konta PayPal i wyłączyć Autoreturn. (Profil/WWW Preferencje płatności), a zestaw IPN (Profil / Instant Preferencje powiadomienia o płatności), aby w adresie URL:
					<br />
					<b>&nbsp;".JOMRES_SITEPAGE_URL_AJAX."&task=completebk");

define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"Ta faktura jest już wymagalna. Proszę kliknąć przycisk i opłacić ją przez system PayPal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Zastępują standardowe ustawienia bramki Jomres?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"Jeśli opcja ustawień nadpisywania PayPal jest ustawiona na Tak konfiguracja ogólna nie pokazuje żadnych ustawień bramki.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Moje faktury");
define('_JRPORTAL_COUPONS_TITLE',"Kupony rabatowe");
define('_JRPORTAL_COUPONS_DESC',"Kody rabatowe mogą być generowane i przekazywane gościom jako zachęta do dokonywania rezerwacji. Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.");
define('_JRPORTAL_COUPONS_CODE',"Kod kuponu");
define('_JRPORTAL_COUPONS_VALIDFROM',"Ważny od");
define('_JRPORTAL_COUPONS_VALIDTO',"Ważny do");
define('_JRPORTAL_COUPONS_AMOUNT',"Wysokość rabatu");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Rabat procentowy");
define('_JRPORTAL_COUPONS_ROOMONLY',"Tylko pokój");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Rabat ma zastosowanie tylko do kosztów pokoju. Jeśli nie, to rabat ma zastosowanie do całego kosztu rezerwacji.");
define('_JRPORTAL_COUPONS_SQLERROR',"Błąd SQL podczas próby usunięcia/dodania kuponu.");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','Jeśli masz kod promocyjny, wprowadź go w polu i kliknij przycisk "Zapisz kupon".');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Zapisz kupon');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Kupon zapisany na rezerwacje.');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Nie znaleziono takiego kuponu.');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Wartość rabatu kuponu');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Rezerwacja promocyjna. Kod kuponu/Wartość rabatu/Ustawienia kuponu:');
define('_JOMRES_COM_CACHING','Użyj funkcji buforowania Jomres?');
define('_JOMRES_COM_CACHING_DESC','Ustaw na Nie, aby wyłączyć funkcje buforowania Jomres.');
define('_JOMRES_COM_CHOOSELANGUAGES','Wybierz język');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Opcje językowe muszą być wybrane z listy wyboru języka.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Pokaż wybór języka z menu rozwijanego?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Zarezerwowane i anulowane rezerwacje');
define('_JRPORTAL_NEWUSER_DEAR',"Drogi");
define('_JRPORTAL_NEWUSER_THANKYOU',"Dziękujemy za rejestrację.");
define('_JRPORTAL_NEWUSER_USERNAME',"Nazwa użytkownika:");
define('_JRPORTAL_NEWUSER_PASSWORD',"Twoje hasło:");
define('_JRPORTAL_NEWUSER_LOG_IN',"Zaloguj się aby zobaczyć swoje rezerwacje");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Kupon zapisany.');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Kupon usunięty.');
define('_JOMRES_COM_GROWL','Użyj wiadomości Jomres');
define('_JOMRES_COM_GROWL_DESC','Aktualizacje informacji zwrotnej w formie wiadomości Javascript, gdy strona jest przeładowana, użyj tej opcji, aby włączyć/wyłączyć tę funkcję.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Bramka SMS Clickatell");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Login");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Hasło");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Numer telefonu komórkowego dla powiadomień");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Proszę używać formatu 'kod kraju, numer telefonu'. Na przykład polski numer telefonu komórkowego '48500600700'. Zostaw puste jeśli nie chcesz żadnych powiadomień SMS.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"<b>Oczywiście, nie można używać/testować tej bramki na localhost, trzeba to zrobić na produkcyjnym serwerze.</b>
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
					Użyj nazwy użytkownika, hasła i api_id i wypełnij pola powyżej. 
					<br /><br />");

define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Lista rezerwacji pokoju');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Lista rezerwacji pokoju dla maks ludzi');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Należy pamiętać, że ceny podane za pokój są szacunkowe i pełna cena rezerwacji nie będzie obliczana, dopóki nie jest dodane pomieszczenie lub pomieszczenia do wyboru.");
define('_JOMRES_LASTEDITED_DB','Ostatnio edytowany szablon w bazie danych');
define('_JOMRES_LASTEDITED_DISK','Ostatnio edytowany szablon na dysku serwera');
define('_JOMRES_LASTEDITED_WARNINGICON','Ostrzeżenie! Szablon bazy danych');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Szablon bazy danych może być nieaktualny.');
define('_JOMRES_LASTEDITED_WARNING','Wykryto, że szablon przechowywany w bazie danych <strong><i>może</i></strong> być starszy niż przechowywany na dysku. W takim przypadku możliwe jest, że szablon został zaktualizowany w nowszej wersji Jomres. Jeśli tak jest, to możliwe, że korzystanie z nowych, dodanych funkcji może być niemożliwe, a istniejące funkcje mogą nie działać zgodnie z oczekiwaniami. Należy porównać szablon z bazy z tym na dysku i upewnić, się że nie brakuje nowej funkcji.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Abonamenty");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Nazwa");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Opis");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Opublikowany");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Częstotliwość");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Okres próbny");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Ilość próbna");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Pełna kwota");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Ograniczyć pokoje");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Limit obiektu");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Częstotliwość: M/Q/B/A - Monthly/Quarterly/Bianually/Anually");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Okres próbny: 0 (zero) nie ustawiać, 1 (jeden miesiąc), 2 (dwa miesiące) itd.");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subskrybcja");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Proszę wpisać/zaktualizować dane abonenta. Należy pamiętać, że wszystkie pola są wymagane.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"Imię");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Nazwisko");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Adres");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Kraj");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Kod pocztowy");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"Abonament musi być ważny aby tworzyć nowe właściwości. Został zakupiony na");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2',"opublikowane.");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"Można zwiększyć liczbę właściwości można tworzyć przez <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>Kupując więcej pakietów abonamentowych tutaj</a>.");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4',"Użyłeś");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5',"sloty obiektu.");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"Aby zobaczyć listę bieżących właściwości kliknij <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>tutaj</a>.");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"Aby zobaczyć listę dostępnych pakietów abonamentowych kliknij <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>tutaj</a>.");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Niestety, nie można opublikować tej właściwości, osiągnięto maksymalną liczbę dostępnych slotów obiektu.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Dziękujemy za zamówienie abonamentu. Gdy faktura zostanie oznaczona jako opłacona (może być małe opóźnienie w zależności od działania PayPal) proszę <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>Kliknij tutaj, aby kontynuować</a>.");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"Z przykrością informujemy, że nie zdecydowali się Państwo zapisać w naszym serwisie. Daj nam znać, jeśli istnieje jakikolwiek sposób, w który możemy Ci pomóc.");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"Przykro nam, ale nie spotkałem limitu liczby właściwości, które zostały opublikowane w tym systemie w dowolnym czasie. Można zwiększyć liczbę właściwości, które można publikować przez <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>Kupując więcej pakietów abonamentowych tutaj</a>.");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Użyj funkcji obsługi subskrypcji");
define('_JOMRES_COM_NEWUSER','Utwórz nowego użytkownika');
define('_JOMRES_COM_NEWUSER_DESC','Utwórz nowe konto użytkownika.');
define('_JOMRES_CLICKTOREGISTER','Kliknij tutaj, aby zarejestrować swój obiekt');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Aktywne subskrypcje");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Id abonamentu");
define('_JRPORTAL_NEWUSER_SUBJECT',"Dziękujemy za rezerwacje - nowe dane użytkownika po");
define('_JOMRES_LATLONG_DESC',"Użyj myszki do poruszania się po mapie, a następnie przeciągnij wskaźnik do lokalizacji obiektu, aby ustawić długość i szerokość geograficzną.");
define('_JOMRES_CONTROLPANEL','Panel sterowania');
define('_JOMRES_COM_FAUXHEADERS','Nagłówki Jomres Javascript w BODY HTML?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Ustaw na Tak, jeśli masz problemy z konfliktem Mootools i Jomres jQuery w IE. To zmusi Jomres do wyprowadzania JavaScript w BODY zamiast w HEAD. Powinno to rozwiązać problem z jQuery i Mootools sprzeczne ze sobą.');
define('_JOMRES_MANAGER_SHOWINVOICE','Pokaż fakturę');
define('_JOMRES_MANAGER_SHOWINVOICES','Pokaż faktury');
define('_JOMRES_USER_LISTMYPROPERTY','Dodaj nowy obiekt');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Ostrzeżenie:');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"Możesz mieć jeden darmowy pakiet w systemie. Jeśli chcesz, możesz ustawić pakiet by zarówno ilość próbna i pełna kwota na 0,00.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Przykro nam, ale ID pakietu nie został rozpoznany.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Przykro nam, jesteś już zapisany do darmowego pakietu, nie można zapisać się do tego pakietu ponownie.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL',"Status <b>0:</b> Do czasu zapłaty <b>1:</b> Stworzony <b>2:</b> Anulowane <b>3:</b> Koniec.");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"Moje subskrypcje");
define('_JOMRES_COM_YOURBUSINESS','Dane biznesowe');
define('_JOMRES_COM_YOURBUSINESS_NAME','Nazwa firmy');
define('_JOMRES_COM_YOURBUSINESS_VATNO','NIP');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Numer budynku');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>UWAGA: Poniższe stawki podatkowe są przeznaczone do wykorzystania przez rynek amerykański. Jeśli chcesz skorzystać z podatku liniowego w miejscu zakwaterowania, należy wybrać stawkę podatku w opcji powyżej.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Faktura nr');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Wybierz daty, które chcesz zablokować w kalendarzu rezerwacji. Po wybraniu odpowiednich dat, kliknij przycisk "Zastosuj", aby ponownie sprawdzić dostępność.
					<br /><br />
					Jeżeli w obiekcie istnieje jedna lub więcej rezerwacji w wybranym okresie, to nie będzie można zablokować możliwości rezerwacji w wybranym okresie.');

define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Przepraszamy, nie możesz zablokować rezerwacji tej właściwości w wybranym terminie.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','Możesz zablokować tę właściwość w wybranym terminie.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Twój obiekt jest skonfigurowany do pobierania płatności za osobę za noc, ale nie masz utworzonych żadnych typów gości lub opublikowanych. Należy stworzyć i opublikować jeden lub więcej typów gości.');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','Jeśli nie masz jeszcze skonfigurowanych taryf, nie będzie można składać żadnych rezerwacji w obiekcie.');
define('_JOMRES_EDITINGMODE_ON','Tryb edycji na');
define('_JOMRES_EDITINGMODE_OFF','Tryb edycji od');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Używaj zmiennych kwot depozytów?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Zmienne depozyty pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data przyjazdu jest X dni od "dziś". Ustaw na Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień przyjazdu jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','Liczba dni, za które cała kwota zostanie obciążona jako depozyt.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Wyślij wiadomość e-mail na alternatywny adres?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Ustaw na Tak, jeśli chcesz wysyłać wiadomości e-mail na alternatywny adres podany poniżej. Zostaw ustawione na Nie, aby wysyłać maile na adres określony w obszarze konfiguracji obiektu.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternatywny adres e-mail.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Mail z potwierdzeniem został wysłany. Możesz zamknąć to okno.');
define('_JOMRES_REALESTATE_TITLE','Prawdziwy wykaz obiektu');
define('_JOMRES_REALESTATE_YESNO','Czy ten obiekt prezentuje oferty?');
define('_JOMRES_REALESTATE_YESNO_DESC','Wybierz Tak, jeśli wynajmujesz obiekt, wybierz Nie, jeśli wynajmujesz hotel/pensjonat/dom wczasowy gdzie wynajmowany będzie cały obiekt lub pomieszczenia w obiekcie.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Kontakt agenta');
define('_JOMRES_INVOICE_MARKASPAID','Oznacz faktury jako zapłacone');
define('_JOMRES_INVOICE_MARKEDASPAID','Faktura oznaczona jako płatna');
define('_JOMRES_APIKEY_REMAKE','Dodaj nowy klucz API');
define('_JOMRES_AUTOTRANSLATE_TITLE','Użyj Google dla pierwszych tłumaczeń?');
define('_JOMRES_AUTOTRANSLATE_DESC','Funkcja ta jest nowa i eksperymentalna, więc używaj jej na własne ryzyko. Celem funkcji jest zapytanie narzędzia do tłumaczenia Google, by automatycznie skonfigurować tłumaczenia dla danego obiektu.<br />');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Czy to pojedyncza instalacja dla jednego obiektu?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','Jeśli opcja ta jest ustawiona na Tak, wtedy widok nakładki z Jomres dla użytkowników nieautoryzowanych jest znacznie uproszczona. Idealne jeśli chcesz mieć tylko jedną właściwość i przyjmować rezerwacje tylko dla niego.<br />');
define('_JOMRES_HTMP_PURIFIER','Użyj funkcji HTML oczyszczacz?');
define('_JOMRES_HTMP_PURIFIER_DESC','Włącz jeśli chcesz używać bibliotek oczyszczania HTML (http://htmlpurifier.org/). Biblioteka jest używana jako dodatkowa warstwa zabezpieczeń w kontaktach z danymi wejściowymi i wyjściowymi i zaleca się, aby pozostawić włączoną, jednak będzie to wymagało większej ilości pamięci.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Płatność końcowa');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Wartość');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Uwaga! Używasz globalnego trybu edycji. Jest to dobre rozwiązanie jeśli dobrze rozumiesz co oznacza ta funkcja. Jeśli nie jesteś pewien, czy należy używać Jomres w ten sposób, patrz <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">tryb edycji ręcznej</a> więcej informacji na ten temat.');
define('_JOMRES_SUPPORTKEY','Kod wsparcia');
define('_JOMRES_SUPPORTKEY_DESC','Kod wsparcia (znany również jako numer licencji). Umożliwia pobieranie dodatków dla Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Osobiste zniżki');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Ograniczenie rejestracji obiektów do jednego kraju?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','Można ograniczyć rejestracje obiektów do jednego kraju, poprzez ustawienie tej opcji na Tak i ustawienie kraju w następnej opcji.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Obiekty znajdują się w tym kraju:');
define('_JOMRES_JQUERYTHEME','Temat jQuery');
define('_JOMRES_JQUERYTHEME_DESC','Wybierz temat jQuery wykorzystywany na kartach szczegółów obiektu.');
define('_JOMRES_PROPERTYNOTOUBLISHED','Przykro nam, ale obiekt nie jest obecnie dostępny.');
define('_JOMRES_REVIEWS','Recenzje');
define('_JOMRES_REVIEWS_TITLE','Tytuł recenzji');
define('_JOMRES_REVIEWS_DATE','Recenzja dodana');
define('_JOMRES_REVIEWS_NOREVIEWS','Brak opinii dla tego obiektu.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Chcesz być pierwszą osobą, która wyrazi swoją opinię na temat tego obiektu?');
define('_JOMRES_REVIEWS_IAGREE','Zgadzam się z tą recenzją');
define('_JOMRES_REVIEWS_IDISAGREE','Nie zgadzam się z tą recenzją');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Średnia ocena:');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Suma głosów:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Dodaj nową recenzję');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','Musisz być zalogowany aby dodać opinię.');
define('_JOMRES_REVIEWS_REVIEWBODY','Powiedz nam co myślisz o tym obiekcie:');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','Ten recenzent powiedział nam:');
define('_JOMRES_REVIEWS_PROS','Plusy:');
define('_JOMRES_REVIEWS_CONS','Minusy:');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Dodał:');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','Napisz kolejną recenzję.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Przykro nam, ale nie możesz pisać recenzji na tej stronie.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Zobacz recenzje');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW','Goście zgadzają się z tą recenzją.');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW','Goście nie zgadzają się z tą recenzją.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR','Gość zgadza się z tą recenzją.');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','Gość nie zgadza się z tą recenzją.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Dziękujemy za podzielenie się opinią o tym obiekcie.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Dziękujemy, ale już wyraziłeś swoją opinię o tym obiekcie.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Prosimy się upewnić, że wszystkie pola zostały wypełnione.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Prosimy podsumować swoją recenzję wpisując tytuł.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Prosimy wprowadzić bardziej szczegółowy komentarz w polu opisu.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Prosimy wprowadzić plusy tego obiektu.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Prosimy wprowadzić minusy tego obiektu.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Prosimy ocenić gościnność.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Prosimy ocenić lokalizację.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Prosimy ocenić czystość.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Prosimy ocenić zakwaterowanie.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Prosimy ocenić stosunek ceny do jakości.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Prosimy ocenić usługi.');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Podsumowanie opinii');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Wasze doświadczenie bardziej szczegółowo');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Dziękujemy za wyrażenie swojej opinii.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Dziękujemy za wyrażenie swojej opinii. Zostanie ona wkrótce opublikowana przez jednego z naszych moderatorów.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Użyj funkcji przeglądu Jomres?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatycznie publikować recenzje?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','Jeśli ustawisz na Nie będziesz musiał ręcznie publikować recenzje.');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Ustaw recenzje w trybie testowym?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normalnie zarządcy nie mogą przeglądać obiektów. W włączonym trybie testowym mogą. Oczywiście nie jest to idealne rozwiązanie w środowisku produkcyjnym.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','Jest to lista wszystkich właściwości. Aby zobaczyć recenzje właściwości, kliknij na tym obiekcie. Stamtąd będziesz mógł opublikować lub usunąć recenzję.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Liczba nieopublikowanych recenzji');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Całkowita liczba recenzji');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publikowanie/Cofnięcie recenzji');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Usuń recenzję');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Raport recenzji');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Raporty recenzji');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Podaj swój raport');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','Zobaczyłeś coś niewłaściwego? Zgłoś to nam, sprawdzimy to.');
define('_JOMRES_REVIEWS_SUBMIT','Prześlij');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Raport stworzony przez');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Raporty są publikowane przez użytkowników, którzy mogą nie zgadzać się z treścią przeglądu. Jedynym sposobem na usunięcie raportu jest usunięcie recenzję.');
define('_JOMRES_REVIEWS_RATING','Oceny (1 = słaba, 10 = doskonała)');
define('_JOMRES_REVIEWS_RATING_1','Gościnność');
define('_JOMRES_REVIEWS_RATING_2','Lokalizacja');
define('_JOMRES_REVIEWS_RATING_3','Czystość');
define('_JOMRES_REVIEWS_RATING_4','Zakwaterowanie');
define('_JOMRES_REVIEWS_RATING_5','Stosunek jakości do ceny');
define('_JOMRES_REVIEWS_RATING_6','Usługi');
define('_JOMRES_REVIEWS_REVIEWED_BY','Korekta dokonana przez:');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Ukryj recenzje');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Pokaż formularz rezerwacji na stronie szczegółów obiektu?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Ustaw na Tak, aby pokazać formularz rezerwacji na stronie szczegółów obiektu. Jeśli ustawisz na Nie, wówczas pojawi się link do formularza zamiast formularza rezerwacji.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Ceny są ustawione łącznie z podatkiem?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Ceny ustalone są inclusive? Jeśli ceny zawierają podatek, a następnie wybierz Tak. Jeśli nie, wybierz Nie.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Podatek dodatki:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','Dzień pól tygodnia? Można ustawić szybkość dla danego dnia tygodnia, po kliknięciu przycisku dzień tygodnia wszystkie dni tygodnia zostaną ustawione na tym kursie.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','Zbieracze dat i stawek wejść pozwala ustawić jedną cenę dla danego zakresu dat. Wybierz datę rozpoczęcia i zakończenia, podaj cenę, a następnie kliknij przycisk "Ustaw ceny".');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Rozpocznij zakres');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','Zakończ zakres');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Stawka');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Ustaw stawki');
define('_JOMRES_PARTNERS_TITLE','Partnerzy');
define('_JOMRES_CALENDAR_TODAY','Dzisiaj');
define('_JOMRES_CALENDAR_PREV','Poprzedni');
define('_JOMRES_CALENDAR_NEXT','Następny');
define('_JOMRES_CALENDAR_RTL','Fałszywy');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Pokój');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','Gość/e');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','To jak mamy przypisane numery gości do swoich pokoi. Jeśli chcesz zmienić ten przydział, będziesz musiał skontaktować się z hotelem po dokonaniu rezerwacji. Dodatkowe opłaty mogą być zastosowane w przypadku zmiany rezerwacji.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Należy pamiętać, że obiekt nie został jeszcze opublikowany. Odwiedzający nie będą mogli go zobaczyć.");
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Domyślna kolejność sortowania wyników');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Zmień tę opcję, aby zmienić domyślną kolejność prezentowania wyników wyszukiwania.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Pokaż wynik wyszukiwania na liście rozwijanej');
define('_JOMRES_ROOMMSLIST_STYLE','Styl listy pokoi');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','W formularzu rezerwacji, przy użyciu "Klasyczny" wyświetl styl, który oferuje pojedyncze pokoje dla gości. Z uwagi na typ pokoju, goście wybrać mogą liczbę typów pokoi X (np. 2 x podwójna).');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Klasyczny');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Typy pokoi');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)sprawdzanie dostępności');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Przebudowa listy dostępnych pokoi');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Obliczanie sumy');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Zakończona aktualizacja');
define('_JOMRES_COM_CALENDAR_STARTDAY','Dzień rozpoczęcia tygodnia (niedziela lub poniedziałek)');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Tylko goście obiektu mogą recenzować?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Ustaw na Tak, jeśli chcesz ograniczyć opinie tylko do tych użytkowników, którzy byli już gośćmi obiektu.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Za pokój');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Za gości w pokoju:');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Za gości w rezerwacji:');
define('_JOMRES_NUMBER_OF_ROOMS','Liczba pokoi');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Taryfa domyślna');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"Dotyczy to tylko nowych taryf");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Pokazać lat");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Określa liczbę lat pokazywanych podczas edycji taryf micromanage.");
define('_JRPORTAL_MONTHS_LONG_0','Styczeń');
define('_JRPORTAL_MONTHS_LONG_1','Luty');
define('_JRPORTAL_MONTHS_LONG_2','Marzec');
define('_JRPORTAL_MONTHS_LONG_3','Kwiecień');
define('_JRPORTAL_MONTHS_LONG_4','Maj');
define('_JRPORTAL_MONTHS_LONG_5','Czerwiec');
define('_JRPORTAL_MONTHS_LONG_6','Lipiec');
define('_JRPORTAL_MONTHS_LONG_7','Sierpień');
define('_JRPORTAL_MONTHS_LONG_8','Wrzesień');
define('_JRPORTAL_MONTHS_LONG_9','Październik');
define('_JRPORTAL_MONTHS_LONG_10','Listopad');
define('_JRPORTAL_MONTHS_LONG_11','Grudzień');
define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Proces zarządzania obiektami");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"Istnieją różne procesy zarządzania w zależności od sposobu, który chcesz stosować w swoim obiekcie/biznesie.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Wynajem");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Wybierz wynajem jeśli chcesz zarezerwować obiekt (np. domek letniskowy/apartament)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Aukcja");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Wybierz tą opcje jeśli nie oferujesz żadnych funkcji rezerwacji (np. rzecz/przedmiot na sprzedaż).");
define('JOMRES_COM_A_MINIMALCONFIG_DESC','Ustaw na Tak, aby zmniejszyć liczbę opcji dostępnych dla zarządców obiektu w sekcji General Configuration.');
define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Proszę wybrać opcję rezerwacji');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Włącza edytor HTML w szczegółach obiektu. Dodatkowo, jeśli to jest ustawione na Nie, wówczas wszystkie HTML z wyjątkiem p oraz br zostaną usunięte z wszystkich wprowadzanych i wyświetlanych tekstów.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Widok pełnoekranowy");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Widok normalny");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Pokaż timezone switcher zarządcy obiektu na pasku narzędzi?");
define('_JOMRES_PARTNER_DISCOUNT',"Zniżka partnera");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Szukaj użytkownika");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Wpisz kilka znaków by wyszukać użytkownika.
					<br />
					Po wybraniu użytkownika będziesz automatycznie mógł dodać go jako partnera i zostaniesz przeniesiony do następnej strony, gdzie można przypisywać właściwości i rabaty dla użytkownika.");

define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Dotychczasowymi partnerami");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Wybierz partnera, który ma być edytowani na stronie administracji partnerami.");
define('_JOMRES_PARTNER_SHOW_TITLE',"Partner:");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Szukaj obiektu");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Wpisz kilka znaków z nazwy właściwości i wybierz właściwość.
					<br />
					Po wybraniu właściwości należy dodać ją do partnera, jednak nie będą jeszcze korzystać oni z żadnych zniżek, trzeba będzie ustawić te opcje.");

define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Aktualny obiekt");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Kliknij na obiekcie by edytować rabaty partnera dla tego obiektu.");
define('_JOMRES_SUSPENSIONS_TITLE',"Zawieszone?
					<br />
					Kliknij, aby zawiesić managera, to będzie auto- cofnięcie wszystkich właściwości.");

define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Kliknij wstrzymaj (ikona z człowiekiem i zielonymi kleszczami) by zawiesić managera. Oznacza to, że manager nie będzie w stanie wykonywać funkcji zarządzania obiektami, a wszystkie ich właściwości będą publikowane. Super zarządca nie może zostać zawieszony.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"To konto zostało zawieszone, nie jest obecnie możliwe administrowanie obiektami używając tego konta.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Zawieszone konto manager");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Odwieszone konto manager");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Pamiętaj, że Twoje konto zarządcy obiektu zostało zawieszone. Nie będziesz w stanie wykonywać żadnych funkcji zarządzania obiektami aż konto zostanie przywrócone.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Pamiętaj, że Twoje konto zarządcy obiektu jest już aktywne. Możesz nadal wykonywać wszelkie funkcje zarządzania obiektami.");
define('_JOMCOMP_MYUSER_REMOVE','Usuń z ulubionych');
define('_JOMRES_DATA_ARCHIVE_TITLE','Archiwum danych rezerwacji');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','Archiwum danych rezerwacji jest surowy zrzut informacji rezerwacji zrobiony po naciśnięciu przycisku rezerwacja. Najedź na datę aby zobaczyć surowy zrzut danych. Informacje te są przechowywane w tabeli XXX__jomres_booking_data_archive .');
define('_JOMRES_MY_ACCOUNT_EDIT','Edytuj konto');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Szukaj użytkowników");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Wpisz kilka znaków z nazwy użytkownika, aby wyszukać go.
					<br />
					Po wybraniu użytkownika będziesz automatycznie mógł dodać go jako manager i zostaniesz przeniesiony do następnej strony, gdzie można przypisać właściwości i prawa dostępu dla użytkowników.");

define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Istniejący managerowie");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Wybierz managera aby zostać przeniesiony na stronę administracji.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Szukaj według liczby gości");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Pokaż wyszukiwanie według liczby gości wybieranej z listy rozwijanej.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Szukaj według ilości gwiazdek");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Pokaż wyszukiwanie według liczby gwiazdek wybieranej z listy rozwijanej.");
define('_JOMRES_SEARCH_GUESTNUMBER','Liczba osób');
define('_JOMRES_SEARCH_STARS','Liczba gwiazdek');
define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Faktury");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Liczba obiektów");
define('_JOMRES_CONFIG_JQUERY',"Obciążenie Jomres biblioteki jQuery?");
define('_JOMRES_CONFIG_JQUERY_DESC',"Można to ustawić na Nie jeśli masz szablon, który używa jQuery. To może rozwiązać problemy z jQuery i konflikty na niektórych szablonach, ale nie wszystkie.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','Jeśli używasz JoomFish, należy ustawić na Nie, i używać JoomFish Language Switcher. Przełącznik jest zawsze włączony w obszarze administratora, ponieważ jest on potrzebny w przypadku korzystania z funkcji Tłumaczenia Label.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Miniatury są tworzone automatycznie dla przesyłanych zdjęć.');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Małe miniaturki (szerokość maks px)');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Małe miniaturki są używane w wykazie obiektu, podczas gdy średnie miniatury są używane w nagłówku obiektu.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Małe miniaturki (wysokość maks px)');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Średnie miniaturki (szerokość maks px)');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Średnie miniaturki (wysokość maks px)');
define('_JOMRES_TOUCHTEMPLATES','Tłumaczenia etykiet');
define('_JRPORTAL_ROI_TAB',"Subskrypcje");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Użyj funkcji prowizji?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Ustaw na Tak, aby pokazać faktury prowizyjne managera, które zostały podniesione.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Rezerwacje manager tworzenie faktur prowizyjnych?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"Jeśli manager ma rezerwacje, utworzyć faktury z prowizjami pozycji towarowej?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"Nowa faktura prowizja została podniesiona.");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"Nowa faktura prowizja została podniesiona. Proszę kliknąć na poniższy link, aby zobaczyć fakturę (być może trzeba się najpierw zalogować).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Automatycznie zawiesić managerów z przekroczonymi terminami płatności faktur?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Automatycznie zawiesić gdy przekroczono");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"Jest to liczba dni w czasie jakim manager musi zapłacić fakturę, zanim zostanie on zawieszony, a ich właściwości niepublikowane.");
define('_JOMRES_COM_LANGUAGE_CONTEXT','Kontekst języka');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Użyj tej opcji do zmiany kontekstu języka. Funkcja ta pozwala używać etykiet, które są odpowiednie dla aktualnej działalności.');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Konfiguracja zaawansowana');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Ustawić tę opcję na Tak, jeśli chcesz korzystać z zaawansowanych opcji konfiguracyjnych witryny. Jeśli dopiero zaczynasz z Jomres, to radzimy zostawić to na Nie.');
define('_JOMRES_CONFIG_JQUERY_UI',"Obciążenie Jomres biblioteki jQuery UI?");
define('_JOMRES_SORTORDER_PRICE_DESC','Cena (najpierw najwyższa)');
define('_JOMRES_SORTORDER_PRICE_ASC','Cena (najpierw najniższa)');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Podsumowanie ceny i szacunki powinny być wycenione jako za dobę/za tydzień/miesiąc, za?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Za noc');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Za tydzień');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Za miesiąc');
define('_JOMRES_BOOKINGFORM_PERPERSON','Za osobę');
define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','Tydzień na');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','Miesiąc na');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','Jak opcja szukaj ludzi?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Dotyczy wszystkich modułów wyszukiwania. Podczas korzystania z funkcji wyszukiwania gościa numer, powinien wyglądać funkcja szukaj obiektu, które taryfy będą obsługiwać gości numerów i równa wybrany numer, dokładnie równy numer wybrany lub numer wybrany i większe?');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Proszę czekać, zamówienie jest przetwarzane. Zostaniesz przekierowany do witryny PayPal.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','Jeśli automatycznie nie zostałeś przekierowany do systemu PayPal w ciągu 5 sekund...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Kliknij tutaj');
define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Rezerwacja obowiązuje od");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Rezerwacja ważna do");
define('_JRPORTAL_COUPONS_GUESTNAME',"Nazwa gościa");
define('_JRPORTAL_COUPONS_DESC_478',"Kody rabatowe mogą być generowane i przekazywane gościom jako zachęta do dokonywania rezerwacji. 
					<br />
					Prawidłowe daty odnoszą się do terminów które można faktycznie rezerwować.
					<br />
					Jeśli chcesz by rezerwacja była dostępna dla jednego konkretnego gościa, wybierz nazwę tego gościa i ogranicz kupon do tego tylko gościa.");

define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"Rezerwacja została odrzucona z");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO',"Do");
define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Ustaw na Nie, aby wyłączyć ładowanie zarówno jQuery UI Javascript i pliki CSS.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Biblioteka jQuery UI CSS?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Ustaw na Nie, aby wyłączyć tylko plik jQuery UI CSS.");
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Całkowity brutto");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Niepublikowana własność');
define('_JOMRES_CONVERSION_TITLE',"Użyj funkcji konwersji");
define('_JOMRES_CONVERSION_TITLE_DESC',"Użyj funkcje konwersji on-line Jomres. Pozwoli to oferować wybór waluty z listy rozwijanej dla użytkowników i wyświetlanie cen w ich walucie.");
define('_JOMRES_CONVERSION_DISCLAIMER',"Użyliśmy wszelkich starań, aby otrzymać najbardziej dokładne i aktualne kursy walut, internetowa funkcja konwersji walut to usługa świadczona wyłącznie w celach informacyjnych i nie ma na celu dostarczenie dokładnych danych liczbowych. W związku z tym nie możemy zagwarantować dokładności kursów walut.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Użyj buforowania Javascript?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Wybierz, czy korzystać z funkcji Jomres buforowania JavaScript. Działa na większości serwerów, ale nie na wszystkich. Jeśli masz problemy z błędami Javascript, które są zgłaszane jako 'niezakończona stała łańcuchowa' w (na przykład) Firebug, należy ustawić to na Nie.");
define('_JOMRES_HISTORIC_GUESTS_SHOW',"Lista historycznych i obecnych gości");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Tylko aktualni goście");
define('_JOMRES_CURRENCYCONVERSION_TAB','Waluta');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Wykrywanie API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','Aby automatycznie ustawić kod waluty na liście rozwijanej Jomres jest w stanie wykorzystać bezpłatną usługę o nazwie IPinfoDB, która pozwala wykryć kraj gośća. Musisz jednak zarejestrować się na i zdobyć klucz API w <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> .');
define('_JOMRES_DEBUGGING_TAB','Debugowanie');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Pokaż formularz rezerwacji w oknie popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','Jeśli opcja pokazywania formularza rezerwacji w szczegółach obiektu jest ustawiona na Nie, wówczas, gdy strona otwiera się formularz rezerwacji Jomres może pokazać formularz rezerwacji w oknie popup.');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Wynosi lokalizację panelu');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','W formularzu rezerwacji panel sumy potrzebuje różnych ustawień w zależności od szablonu. Na przykład w szablonie Joomla Jomres ustawienie 712 działa dobrze, jednak na Drogi Mlecznej ustawienie ok. 1500 jest bardziej właściwe, zwłaszcza jeśli nie masz okna popup funkcja jest włączona. Prawdopodobnie, że będziesz musiał eksperymentować z różnymi ustawieniami, aby znaleźć coś, co działa dobrze w wybranym szablonie.');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Podatek zakwaterowanie');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Zakwaterowanie cena za osobę dorosłą');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Pokoje VAT:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Otwórz formularz rezerwacji');
define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Wróć do szczegółów obiektu');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatycznie wybrany?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Wagi (po wpłaconej kaucji)');
define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filtrowanie zasobów na podstawie ich cech.');
define('_JOMRES_DATEPERIOD_LATESTBOOKING','Ostatnia rezerwacja');
define('_JOMRES_DATEPERIOD_SECOND','sekunda');
define('_JOMRES_DATEPERIOD_MINUTE','minuta');
define('_JOMRES_DATEPERIOD_HOUR','godzina');
define('_JOMRES_DATEPERIOD_DAY','dzień');
define('_JOMRES_DATEPERIOD_WEEK','tydzień');
define('_JOMRES_DATEPERIOD_MONTH','miesiąc');
define('_JOMRES_DATEPERIOD_YEAR','rok');
define('_JOMRES_DATEPERIOD_DECADE','dekada');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','temu');
define('_JOMRES_DATEPERIOD_FROMNOW','od teraz');
define('_JOMRES_WHOLEDAY_TITLE','Rezerwacje są całymi dniami?');
define('_JOMRES_WHOLEDAY_DESC','Domyślnie system rezerwacji zasoby są przez noc, więc rezerwacja od pierwszego stycznia '.date("Y",strtotime("przyszły rok")).' do 2 stycznia '.date("Y",strtotime("przyszły rok")).' obejmuje tylko jedną noc. Jeśli ustawisz tę opcję na Tak, jednak wtedy rezerwacja obejmie całe dni zamiast, więc rezerwacja w tych dniach obejmie oba dni, a klient będzie rozliczane przez dwa dni.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Za dzień');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Za osobę za dzień');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Przyjazd');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Powrót');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"dzień/ni przy");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Powrót data nieprawidłowa');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','Czas rezerwacji jest zbyt krótki. Musi być co najmniej, pomiędzy przyjazdem i wyjazdem:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Przyjazd/Powrót minimum interwał');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','Przedział mimimum dni w formularzu rezerwacji pomiędzy przyjazdem i wyjazdem. Przedział 1 oznacza, że przyjazd i wyjazd mogą być ustawione na ten sam dzień, jednak nadal jest to zależne od minimalnego odstępu i obliczane automatycznie przez silnik rezerwacji, ponieważ sprawdza taryf, które są ważne przez okres rezerwacji.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Podsumowanie ceny i szacunki powinny być wycenione jako na dzień/za tydzień/miesiąc, za?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Za dzień');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Dni przed terminem odbioru');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','Minimalna liczba dni, które muszą upłynąć od "dziś", przed datą odbioru.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Ustaw na Tak, jeśli chcesz ograniczyć rezerwacje (użyj następne pole do ustawienia limitu z punktu widzenia dni). Jeśli nie ustawisz na Tak wtedy, gdy użytkownik próbuje zarezerwować więcej niż X dni wcześniej to ich data odbioru zostaną przywrócone do dzisiejszej daty.');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Pokaż pole daty powrotu?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Ustaw na Nie, jeśli nie chcesz pokazać pola daty powrotu.");
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','Jeśli ustawisz na Tak, wtedy rezerwacja zostanie podjęta na czas określony. Jeśli jest ustawiona na Nie, wówczas zapewnienie, że "zdefiniowane dni przyjazdu ustawione na Tak (chyba, że specjalnie chcesz zmusić ludzi do odbioru w określonym dniu tygodnia) inaczej nie dostaniesz wiele linków w dostępności kalendarza.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Predefiniowane dni przyjazdu');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Tylko dla stron oferujących stałe rezerwacje. Wybierz dzień tygodnia przetworniki muszą być dokonane.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Stałe dni przyjazdu');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Stała przyjazdu:');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','Kiedy stałe daty odebrania są zaznaczone, liczba terminów, które mogą w terminach listy rozwijanej. Zauważ, że lista dat nie zawiera żadnych dat, jeśli rezerwacja nie jest możliwa ze względu na wcześniejsze rezerwacje, a lista będzie rzeczywiście dwa razy tak długo, jak wybranym numerem bo będzie miał podobną liczbę historycznych dat (jeśli jest dostępny).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Od osoby, za dzień');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Wybierz Tak, jeśli chcesz pobierać za osobę za dzień. Jeśli nie, wówczas koszty będą obliczane na podstawie za stawkę za dzień.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Zmienne depozyty pozwalają określić czy płatność ma być pobierana w pełnej wysokości, jeśli data przyjazdu jest X dni od "dziś". Ustaw na Tak, aby włączyć tę funkcję, a następnie wprowadź liczbę dni, na dole. Przykład - jeśli dzień przyjazdu jest w przedziale 60 dni, wówczas kwota pobieranej kaucji będzie pełną kwotą, w przeciwnym razie kwota zostanie obliczona w oparciu o zdefiniowane opcje konfiguracji powyżej.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Większość firm będzie cenę pokoju przeliczać na podstawie liczby pokoi wymaganego typu, które są dostępne w danym dniu. Pozwala to oferować zniżki na dany rodzaj pokoju jeśli nie został on zajęty w danym okresie. Funkcja umożliwia przyciągnięcie gości do pokoi, które mogłyby być pominięte i niezarezerwowane w danym czasie.
					<br />
					Włączenie i konfiguracja dodatku pozwala zaoferować regulację cen na podstawie liczby pokoi wybranego typu które są dostępne w obiekcie w danym dniu.
					<br />
					Ilość określa liczbę dni, w jakim musi mieścić się data przyjazdu zanim ceny pokoi zostaną regulowane przez tę funkcję. Opcje umożliwiają skonfigurowanie procentu pokoi, które mogą być dostępne przed zastosowaniem danego rabatu.');

define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Próg (liczba dni pomiędzy dniem odbioru i dziś)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Czas przyjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Przyjazd dzisiaj');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Przyjazd');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Wraca dzisiaj');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Powrót zaległy');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Nie podniósł');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Dni');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Oznacz rezerwacje podniosłem.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Oznacz rezerwacje zwrócone.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Oznacz rezerwacje podniósł');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Oznacz rezerwacje zwrócone');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Koszt za dzień:');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Liczba dni:');
define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Zastąp całkowite zakwaterowanie');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Zapisz i zastąp');
define('_JOMRES_BOOKINGFORMWIDTH','Szerokość formularz rezerwacji w px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Pozwól panel sumy zjechać w dół do formularza rezerwacji?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','Panel sumy będzie zjechać w dół do formularza rezerwacji gdy użytkownik przewija stronę w dół. Możesz włączyć/wyłączyć tę funkcję w tym miejscu.');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Powiadom nowych użytkowników o ich danych logowania?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','Jeśli tak ustaw na Tak. Możesz ustawić tę opcję na Nie, aby mie pewność, że nie są wysyłane dane logowania do użytkowników. Może to być przydatne, jeśli nie chcesz, aby użytkownicy rzeczywiście mogli się zalogować.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Pokaż wynik podatkowy w sumie rezerwacji w skróconej formie?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Zapobiec w formularzu rezerwacji pokazując pola cena netto w podsumowaniu ustawienie tej opcji na Nie.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Odwołanie ilość dni');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Zalogowani, zarejestrowani goście mogą anulować własne rezerwacje. Tutaj można ustawić ilość dni w których rezerwacja nie mogą być anulowane po upływie określonej liczby dni przed datą przyjazdu.');
define('_JOMRES_EDIT_PROFILE','Edytuj profil');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Związek typ obiektu');
define('_JOMRES_IMAGE','Zdjęcie');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Rodzaje działalności, które mogą pokazać tę funkcję');
define('_JOMRES_CRATES_CLICKINITIAL','Kliknij literę, aby wyświetlić wszystkie firmy z tego pierwszego znaku. Gdy masz listę właściwości można przypisać stawki prowizji do tych właściwości, lub kliknij na ich "edycji" ikonę, aby wyświetlić biznes statystyki.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edytuj stawki podatku");
define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edycja pola niestandardowego");
define('_JOMRES_LICENSESERVER_PASSWORD',"Serwer licencji - Hasło");
define('_JOMRES_LICENSESERVER_USERNAME',"Serwer licencji - Login");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"Jeśli masz login i hasło na serwerze licencji, wpisz je tutaj. To pomoże Ci uzyskać dostęp do dodatkowych wtyczek Jomres. Jeśli podałeś prawidłowy klucz wsparcia w polu powyżej, to nie ma potrzeby podawania nazwy użytkownika i hasła tutaj.");
define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"Twoja wersja Jomres to:");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Najnowsza wersja Jomres to:");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Uwaga! Jest dostępna nowa wersja Jomres, zaleca się uaktualnienie do najnowszej wersji.");
define('_JOMRES_PRODUCT_INFORMATION','Witamy w Jomres - Ulubionym systemie rezerwacji. Jeśli chcesz kupić Srebrną lub Złotą Licencję Jomres <a href="http://www.jomres.net/prices" target="_blank">odwiedź naszą stronę</a>.');
define('_JOMRES_PRODUCT_INFORMATION2','System ten jest idealnym rozwiązaniem dla każdego scenariusza, czy to prosty formularz rezerwacji dla jednego obiektu, czy ogromny portal z wieloma użytkownikami, w kilku językach i mnustwem obiektów.');
define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Aktywny obiekt");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Zmiana aktywnego obiektu");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Kliknij znak, aby odkryć wszystkie właściwości, które zaczynają się od tej litery. Gdy ujawnił, kliknij na tej obiektu na nazwę, aby zmienić go do aktywnego obiektu.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternatywne ustawienia SMTP");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Ustawić tę opcję na Tak, aby wykorzystać te alternatywne ustawienia SMTP.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Zmień na serwer poczty SMTP.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Zmień port SMTP.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Protokół");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"W zależności od ustawień serwera SMTP, musisz pozostawić puste lub wpisać 'SSL' lub 'TLS'. Poproś dostawcę o pomoc.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Użyj uwierzytelniania");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"Jeżeli serwer SMTP wymaga uwierzytelniania ustaw na Tak. Podaj następnie login i hasło użytkownika.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Login");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"Podaj login do konta SMTP.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Hasło");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"Podaj hasło do konta SMTP.");
define('_JOMRES_WARNING_SYSTEM_CACHE',"Ostrzeżenie! Wykryto, że twoja Joomla ma uruchomioną funkcję buforowania systemu. Radzimy wyłączyć tę funkcję gdyż może powodować niestabilne zachowanie systemu.");
define('_JOMRES_QUICK_INFO',"Szybki podgląd");
define('_JOMRES_MENU_SHOW',"Pokaż");
define('_JOMRES_MENU_HIDE',"Schowaj");
define('_JOMRES_MENU_SHOW_TITLE',"Użyj alternatywny układ menu?");
define('_JOMRES_MENU_SHOW_DESC',"Ustaw na Tak, aby skorzystać z alternatywnego układu menu na froncie serwisu.");
define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Domyślnie");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Każdy");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Zarejestrowany");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nikt");
define('_JOMRES_ACCESS_CONTROL_TITLE',"Kontrola dostępu do menu");
define('_JOMRES_ACCESS_CONTROL_DESC',"Funkcja ta pozwala kontrolować, kto będzie w stanie zobaczyć wtyczkę w menu głównym. Zazwyczaj opcje użytkowników 00009 są widoczne przez jedną lub niezarejestrowanych odwiedzających witrynę, 00010 opcje zasadniczo odnoszą się do kategorii działalności typu recepcji, które są używane na codzień, natomiast 00011 opcje służą do instalowania i konfigurowania właściwości, ale są dostępne rzadziej.");
define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Recepcjonistka");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Pełna kontrola dostępu");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Ustawić tę opcję na Tak, aby umożliwić pełne funkcję kontroli dostępu, a następnie odwiedzić ustawienia kontroli dostępu w ramach konserwacji systemu w konfiguracji kontroli dostępu.");
define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Należy jednak pamiętać, to te ustawienia nie kontroluje podstawowe skrypty, które łączą się, więc na przykład jeśli ustawisz <i>00009user_option_03_search</i> do 'Kierownik' użytkownik, który zna Jomres może jeszcze zadzwonić j06000search.class.php wprowadzając http://www.domain.com/index.php?option=com_jomres&task=search w swoim pasku adresu przeglądarki. Jest to celowe, ponieważ kontrola dostępu do menu po prostu kontroluje, co można zobaczyć w głównym Jomres menu.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Pełna kontrola dostępu");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>Funkcja ta jest tylko dla zaawansowanych użytkowników. Jeśli nie wiesz, co to jest, i nie ma konkretnego powodu, aby jej użyć, należy powrócić do konfiguracji strony i ustawić pełną opcję kontroli dostępu na Nie.</strong>
					<br />
					Funkcja ta pozwala kontrolować, kto ma dostęp które minicomponents (z pewnymi wyjątkami, które są zapisane w systemie). Jeśli poziom dostępu do skryptu obok nazwy jest domyślne, a następnie z opcją Pełna kontrola dostępu ustawiona na Tak <strong>Każdy</strong> mogą uzyskać dostęp do skryptów, które nie powinny mieć dostępu więc jeśli zamierzasz korzystać z tej funkcji należy ustawić poziom kontroli dostępu do <strong>Każdy</strong> Jomres minicomponent tutaj wymienione. Jeśli nie wiesz co te minicomponents zrobić, to radzimy nie korzystać z tej funkcji w ogóle.
					<br />
					W poziomy Jomres dostępu śledzić piramidę, więc Super zarządcy są większe niż managerów. W skrócie: Super managera > manager > Recepcjonistka > Rejestracji > Niezarejestrowana. Tak więc, jeśli Zarejestrowany użytkownik ma dostęp do minicomponent, więc zrobić recepcjonistów, managerów i Super managerów.
					<br />
					Pamiętaj, że nie można kontrolować minicomponents obszaru administratora. Ktoś w obszarze administratora jest uważany za zaufanego użytkownika na tym, że nie powinny być blokowane przy próbie dostępu skrypt (szczególnie ten jeden).");

define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Uwaga! Masz włączoną pełną kontrolę dostępu. Jednak możemy liczyć ustawienia kontroli dostępu i porównał je do liczby minicomponents, które powinny być kontrolowane, a dwa nie pasują, więc może masz jakieś skrypty, które nie są kontrolowane. To może być kwestia bezpieczeństwa i jesteś wezwał do rozwiązania tego problemu jednocześnie odwiedzając funkcji kontroli dostępu i kontroli, że odpowiednie poziomy zostały zastosowane.");
define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Użytkownicy z uprawnieniami administratora na tym obiekcie");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"Wymień wszystkie ogłoszenia faktury");
define('_JOMRES_DEBUGGING_SUBJECT','Temat');
define('_JOMRES_DEBUGGING_FULLNAME','Twoje imię i nazwisko');
define('_JOMRES_DEBUGGING_YOUREMAIL','Twój adres e-mail');
define('_JOMRES_DEBUGGING_ISSUE','Proszę opisać swój problem');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parametry');
define('_JOMRES_EXTRAS_MODELS_FORCE','Wymuszenie');
define('_JOMRES_METATITLE','Tytuł META');
define('_JOMRES_METADESCRIPTION','Opis META');
define('_JOMRES_FOUNDPROPERTIES',"Znajdź obiekt");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Dodaj swój obiekt: Krok 1 z 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Dodaj swój obiekt: Krok 2 z 2");
define('_JOMRES_MYPROPERTIES','Moje obiekty');
define('_JOMRES_CART_TITLE','Moje propozycje rezerwacji');
define('_JOMRES_CART_INFO','Uwaga, te rezerwacje nie zostały jeszcze zapisane. Jeśli się wylogujesz lub Twoja sesja wygaśnie zostaną one utracone. Pamiętaj, aby potwierdzić rezerwację.');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Potwierdź rezerwację');
define('_JOMRES_CART_OR','lub');
define('_JOMRES_CART_SAVEFORLATER','Zapisz na później');
define('_JOMRES_CART_NOBOOKINGS_SAVED','Nie masz jeszcze zapisanych rezerwacji.');
define('_JOMRES_CART_VIEWCART','Zobacz koszyk');
define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Plik językowy podkatalogu');
define('_JOMRES_DEFAULT_LAT_STARTPOINT','Startowy punkt domyślnej szerokości geograficznej');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Startowy punkt domyślnej długości geograficznej');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','Na mapie Google na stronie obiektu jaka powinna być domyślna, startowa szerokość i długość geograficzna?');
define('_JOMRES_CLEARDATES','Nie masz jeszcze daty swojego pobytu');
define('_JOMRES_MOBILE_REDIRECT','Dla urządzeń przenośnych automatycznie przekieruj do stron im dedykowanych?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres zawiera funkcję, która przekierowuje użytkownika do strony która nie zawiera modułów i nagłówków, gdy wykryje, że przeglądarka należy do urządzenia mobilnego. Jeśli masz Joomla szablon, który jest już zoptymalizowany dla urządzeń mobilnych, można wyłączyć tę funkcję przez ustawienie tej opcji na Nie.');
define('_JOMRES_SYSTEM_EMAILS','E-maile wysyłane z którego adresu?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Pozostaw pole puste aby wyłączyć funkcję. Jomres będzie korzystać z adresów e-mail. przy wysyłaniu e-maili do gości podanych przez dostępnych w obiektach, jednak usługa e-mail nie może zezwolić na e-maile z dowolnych adresów (tzn. tylko może zezwolić na e-maile z jednego autoryzowanego adresu). Jeśli tak jest, to można użyć tego wejścia, aby wprowadzić adres, który będzie postrzegana jako adresie OD dla wszystkich e-maili systemowych.");
define('_JOMRES_CSS_CACHING_TITLE',"Użyj buforowania CSS?");
define('_JOMRES_CSS_CACHING_DESC',"Buforuje pliki CSS, przyśpiesza wczytywanie stron.");
define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Kalendarze wyszukiwania pokazują wyraźne zaznaczenie pola wyboru daty?");
define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"Widok listy");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Widok zdjęć");
define('_JOMRES_COMPARE',"Porównywarka");
define('_JOMRES_REMOVE',"Usunąć");
define('_JOMRES_RETURN_TO_RESULTS',"Wróć do wyników wyszukiwania");
define('_JOMRES_ADDTOSHORTLIST',"Dodaj do ulubionych");
define('_JOMRES_REMOVEFROMSHORTLIST',"Usuń z ulubionych");
define('_JOMRES_VIEWSHORTLIST',"Moje ulubione");
define('_JOMRES_COOKIEPOLICY_TITLE',"Pliki cookie");
define('_JOMRES_COOKIEPOLICY_DESC',"Prawodawstwo UE wymaga, aby wszystkie strony internetowe, które używają plików cookie uzyskały zgodę od odwiedzających witrynę użytkowników do przechowywania plików cookies na ich komputerach/urządzeniach. 
					<br />
					Jomres wykorzystuje cookies CMS do skonstruowania swój własny plik sesji, gdzie informacje na temat użytkownika jego wynikach wyszukiwania i inne działania mogą być zapisane, aby użytkownika wizyta była bardziej przyjemna. Choć uważamy, że normalne funkcjonowanie Jomres jest prawdopodobnie objęta postanowieniami w prawodawstwie określonym jako <i>'takie przechowywanie lub dostęp jest ściśle konieczne do świadczenia usługi społeczeństwa informacyjnego żądanej przez abonenta lub użytkownika'</i> (zobaczyć http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx ) mamy włączone tej funkcji daje możliwość, aby uniemożliwić użytkownikom dostęp do stron innych niż strona wyszukiwania w przypadku, gdy użytkownik nie zezwala na ciasteczko do wykorzystania w ten sposób.
					<br />
					Jeśli opcja jest włączona Jomres pokaże stronę gdzie użytkownicy mogą zdecydować się na ciasteczko, które zostanie zapisane na ich komputerze/urządzeniu. 
					<br />
					Ustaw tę opcję na Tak, aby uchwalić tę politykę.");

define('_JOMRES_COOKIEPOLICY_1',"Ważne! Pliki cookie");
define('_JOMRES_COOKIEPOLICY_2',"Używamy cookies, aby pomóc utrzymać naszą stronę istotne i łatwe w użyciu.");
define('_JOMRES_COOKIEPOLICY_3',"Przeczytaj więcej...");
define('_JOMRES_COOKIEPOLICY_4',"Prawodawstwo UE wymaga, aby wszystkie strony wyraźnie określić, czy pliki cookie są używane a ich celem.");
define('_JOMRES_COOKIEPOLICY_5',"Wyszukiwanie i rezerwacja silnik o tej stronie musi być w stanie przypomnieć sobie odpowiednie opcje wybrały pracę w najlepiej. Aby to zrobić musi przechowywać informacje, które są związane z niewielkim pliku o nazwie \"cookies\", który jednoznacznie identyfikuje przeglądarkę, a dla nas, aby to zrobić, musisz zgodzić się, że możemy. Jeśli nie akceptujesz tej polityki cookie, wtedy będzie poważnie ograniczony, co można zrobić na tej stronie.");
define('_JOMRES_COOKIEPOLICY_6',"Tak, zgadzam się z polityką cookies.");
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Depozyt wymagany jest koszt pierwszej nocy?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Ceny są obliczane na podstawie za noc. Chcesz kaucja za jedną noc opłata? Jeśli tak, to możesz zignorować poniższe opcje.');
define('_JOMRES_NOTHINGINSHORTLIST',"Nie dodano jeszcze nic do ulubionych.");
define('_JOMRES_MOBILE_SETTINGS',"Urządzenia mobilne");
define('_JOMRES_SIMULATE_MOBILE',"Symulacja trybu mobilnego");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Ustaw na Tak, aby wymusić na zawsze przechodzenie do widoku mobilnego. Przydatne, jeśli tworzysz szablony, które są dla urządzeń mobilnych.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"IP dla symulacji");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"Można skonfigurować ustawienia symulacji tylko dla wybranego IP = XXX.XXX.XXX.XXX, więc na przykład, jeśli tworzysz na localhost, należy ustawić numer IP na 127.0.0.1.");
define('_JOMRES_SAFEMODE',"Włącz tryb awaryjny?");
define('_JOMRES_SAFEMODE_DESC',"Ustaw na Tak, aby uruchomić tryb awaryjny. Spowoduje to wyłączenie wszystkich wtyczek. Dostępne będą jedynie podstawowe funkcje.");

define('_JOMRES_PRICE_ON_APPLICATION',"POA");

define('_JOMRES_USE_JOMRESEDITOR',"Use Jomres' WYSIWYG editor? (recommended)");
define('_JOMRES_USE_JOMRESEDITOR_DESC',"If you've enabled the WYSIWYG editor, you can choose to use the html editor(s) available for your CMS, or the one supplied with Jomres. This one is optimised for use by Property Managers and it is recommended that you choose to use it.");

define('COMMON_NEXT',"Next");
define('COMMON_CANCEL',"Cancel");
define('COMMON_SUBMIT',"Submit");
define('COMMON_SAVE',"Save");
define('COMMON_DELETE',"Delete");
define('COMMON_RETURN',"Return");
define('COMMON_CLOSE',"Close");
define('COMMON_BACK',"Back");

define('COMMON_HOME',"Home");

define('COMMON_NEW',"New");

define('COMMON_SEND',"Send");

define('RECAPTCHA_TITLE',"reCaptcha");
define('RECAPTCHA_INFO',"Captcha is used to ensure that the client using web forms is a human being, and is used to prevent Property Managers from being \"spammed\" by robots on the internet. To use the Contact Us form in Jomres you will need to register at <a href=\"http://www.google.com/recaptcha\" target=\"_blank\">the Google reCaptcha</a> home page and set your domain to receive your public and private keys. When you have received those keys, please enter them below. The reCapcha service is a free service provided by Google.");
define('RECAPTCHA_PUBLIC_KEY',"Public key");
define('RECAPTCHA_PRIVATE_KEY',"Private key");


define('_JOMRES_BOOKINGFORM_LOCK_TITLE',"Lockfile timeout");
define('_JOMRES_BOOKINGFORM_LOCK_DESC',"To prevent the danger of guests double booking rooms Jomres uses a lockfile to prevent a room from being added to the available rooms list in the booking form if somebody else has already added the room to theirs for the same dates. By default this lock will time out in 3600 seconds, or one hour. You can change the time it takes to expire this lock by changing this figure.");


define('_JOMRES_BOOTSTRAPSWITCH',"Enable Twitter Bootstrap templates");
define('_JOMRES_BOOTSTRAPSWITCH_DESC',"Joomla 2.5 only option. Setting this to Yes will tell Jomres to use it's bootstrap templates (frontend only). In Joomla 3 this option will be hidden and the switch is done automatically.");
