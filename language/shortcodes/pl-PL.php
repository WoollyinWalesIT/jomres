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


jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'To jest strona główna panelu cpanela.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'To jest wykres na taśmie właściwości, który zapewnia przegląd rezerwacji w czasie rzeczywistym, dostępności i obłożenia.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Ten skrypt pozwala użytkownikowi porównać ze sobą kilka właściwości, maksymalnie do 3 właściwości.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Lista rozdzielonych przecinkami UID właściwości, np. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Tworzy formularz kontaktu właściciela. ');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Przekaż identyfikator właściwości właściwości, z którą chcesz się skontaktować. Podaj 0 (zero), aby skontaktować się z administratorem witryny ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Pokazuje stronę Informacje o firmie pobierającą szczegóły z pola Dane Twojej firmy zarządzającego nieruchomością w Konfiguracji obiektu. Szczegóły na tej karcie są zwykle używane do korespondencji, umożliwiając menedżerom posiadanie zarówno adresu hotelu/apartamentu, jak i odrębny adres do celów służbowych.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID obiektu.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Pokazuje kalendarz obiektu");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Przekaż identyfikator właściwości wyświetlanej. ');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Miesiące do wyświetlenia, domyślnie 24, jeśli nie ustawiono inaczej. Brak zgodności ze zmienną Pokaż tylko miesiąc.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Ustaw to na 1, jeśli chcesz po prostu pokazać bieżący miesiąc osobno. Ustawienie months_to_show zostanie zignorowane, jeśli show_just_month jest używane w tym samym krótkim kodzie, więc nie należy używać jednego lub drugiego w tym samym czasie.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Pokazuje tylko tekst opisu właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Pokazuje tylko tekst opisu właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Pokazuje tylko cechy właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Pokazuje tylko szablon nagłówka właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Pokazuje tylko typy pokoi właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Pokazuje tylko główny obraz właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Pokazuje tylko mapę właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Pokazuje tekst Więcej informacji o właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Kod QR prowadzący do map. Można go zeskanować do telefonu za pomocą aplikacji do odczytu kodów QR, która zapewnia wskazówki dojazdu do obiektu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Pokazuje recenzje obiektu.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Pokazuje podsumowanie recenzji usługi.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID obiektu.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Pokazuje pojedynczy pokój.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID pokoju.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Pokazuje pokoje w obiekcie.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Pokazuje obrazy pokoi w obiekcie jako pokaz slajdów.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID obiektu.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Pokazuje pokaz slajdów właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Pokazuje taryfy nieruchomości.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Pokazuje adres firmowy witryny wprowadzony w Konfiguracja witryny > Dane Twojej firmy.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Pokazuje warunki nieruchomości.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID właściwości.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Pokazuje kalendarz interfejsu użytkownika usługi, który jest innym kalendarzem niż główny duży kalendarz i jest oparty na funkcjonalności kalendarza interfejsu użytkownika Jquery.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Przekaż identyfikator właściwości wyświetlanej. ');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Ustaw to na 1, aby nie wyświetlać legendy.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Pokazuje wyniki wyszukiwania, które można ulepszyć poprzez dodanie parametrów wyszukiwania. Nie zalecamy używania wszystkich parametrów jednocześnie, ponieważ kryteria wyszukiwania będą zbyt ograniczone. Zamiast tego należy ograniczyć się do jednego lub dwóch parametrów, np. wyszukiwania według kraju i liczby gwiazdek.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Wyszukaj według kraju, używając kodu ISO Alpha-2, np. GB lub DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Wyszukaj według regionu. Ponieważ regiony są zapisywane w bazie danych, musisz użyć identyfikatora regionu. Odwiedź Administrator > Jomres > Struktura witryny > Lista regionów i najedź na link Edytuj, zobaczysz numer identyfikacyjny regionu .");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Pełna nazwa miasta, które chcesz wyszukać.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Wyszukaj właściwości z określonymi funkcjami. Identyfikatory funkcji można znaleźć w Administrator > Jomres > Struktura witryny > Funkcje właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Wyszukaj właściwości z określonymi typami pokojów. Identyfikatory typów pokojów można znaleźć w Administrator > Jomres > Struktura witryny > Typy pokojów.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Wyszukaj właściwości określonego typu właściwości. Identyfikatory typu właściwości można znaleźć w Administrator > Jomres > Struktura witryny > Typy właściwości.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Wyszukaj nieruchomości w określonym przedziale cenowym.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Wyszukaj nieruchomości, których taryfy dopuszczają liczbę gości o określonych wartościach, na przykład imprezy liczące 6 osób");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Wyszukaj właściwości N gwiazd.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Wyszukaj według daty przyjazdu. Należy połączyć z parametrem exitDate.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Wyszukaj według daty wyjazdu. Należy połączyć z parametrem arrivalDate.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Wyszukaj według kategorii właściwości.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Wyświetl stronę agenta. Możesz przekazać ALBO identyfikator właściwości lub sam identyfikator agenta, jeśli go znasz.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Uid właściwości, pokaże agenta usługi.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Identyfikator bazy danych menedżera, jeśli jest znany.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Wyświetla popularne właściwości, zwykle używane w pozycjach modułów lub widżetów.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Maksymalna liczba właściwości, które można wyświetlić.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Pokaż tylko właściwości tego konkretnego typu właściwości.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Ustaw na 1, aby wyświetlić moduły zoptymalizowane pod kątem pionowej pozycji widżetu/modułu.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Wyświetla losowy wybór właściwości, zwykle używanych w pozycjach modułów lub widżetów.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Maksymalna liczba właściwości, które można wyświetlić.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Pokaż tylko właściwości tego konkretnego typu właściwości.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Ustaw na 1, aby wyświetlić moduły zoptymalizowane pod kątem pionowej pozycji widżetu/modułu.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Wyświetla ostatnio oglądane właściwości gościa, zwykle używane w pozycjach modułów lub widżetów.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Maksymalna liczba właściwości, które można wyświetlić.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Ustaw na 1, aby wyświetlić moduły zoptymalizowane pod kątem pionowej pozycji widżetu/modułu.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Wyświetla szereg właściwości, zwykle używanych w pozycjach modułów lub widżetów.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Identyfikatory właściwości, które chcesz wyświetlić.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Ustaw na 1, aby wyświetlić moduły zoptymalizowane pod kątem pionowej pozycji widżetu/modułu.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Wyświetla menu wyboru waluty.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Włącz/wyłącz alternatywne wyjście szablonu. To wyjście jest przeznaczone do użycia w paskach narzędzi Bootstrap.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Wyświetla stronę koszyka.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Wyświetla moduł/widget koszyka.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Wyświetla menu główne. Uwaga, jeśli używasz dostosowanej wersji mainmenu_wrapper_alternate.html, na przykład /templates/jr_leohtian/html/com_jomres, może być konieczne zmodyfikowanie go w celu zastąpienia go omres_menu_<i> /i> z MENU_LOCATION owiniętym w nawiasy klamrowe.');

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ta strona umożliwia przesyłanie obrazów dla Twojej usługi i oferowanych przez Ciebie rzeczy. Ma jeden główny przycisk i drugi przycisk, który pozwala wybrać określone zasoby do przesłania zdjęć. Tak więc, główna usługa obraz i pokaz slajdów pokażą tylko jeden przycisk, ale jeśli utworzyłeś jakieś opcjonalne dodatki, zobaczysz drugi przycisk, do którego możesz przesłać obrazy dla tych konkretnych zasobów.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', '<ol>
  <li>Najpierw wybierz obrazy, które chcesz przesłać, klikając Dodaj obraz lub przeciągając i upuszczając. Pojawią się one w kolumnie po prawej stronie.</li>
  <li>Powyżej tego obszaru użyj przycisku "Wybierz zasób", aby wybrać zasób, do którego chcesz przesłać obrazy. Możesz otrzymać opcję wyboru określonego zasobu poniżej. </li>
  <li> Po wybraniu zasobu możesz kliknąć przycisk Prześlij obraz pod obrazem, aby powiązać go z tym zasobem. Po przesłaniu obraz zniknie z kolumny po prawej stronie i pojawi się po lewej.</li>
  <li>Użyj przycisku Kosz obok istniejących obrazów, aby usunąć obrazy, których nie chcesz już pokazywać.</li>
  <li>Możesz zmienić kolejność wyświetlania plików w pokazie slajdów, zmieniając ich nazwy przed ich przesłaniem, ponieważ są one wyświetlane na stronach w kolejności alfabetycznej.</li>
</ol>
 ');

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
jr_define('_JOMRES_MARKDOWN_DESC', 'Tu możesz wpisać tekst używając prostego formatowania Markdown. Nie musisz znać żadnego kodu HTML, po prostu użyj przycisków, aby informacje wyglądały tak, jak chcesz, lub sformatuj tekst zgodnie z tymi przykładami.' );
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
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Typy pokoi');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Adres URL zewnętrznego formularza rezerwacji');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Tutaj możesz ustawić zewnętrzny adres URL, jeśli chcesz korzystać z witryny innej firmy do dokonywania rezerwacji. Wszystkie przyciski rezerwacji jomres będą wskazywać na ten adres URL. Pozostaw to pole puste, jeśli chcesz użyć formularza rezerwacji Jomres .');

jr_define('_JOMRES_ROOM_TAGLINE', 'Slogan (krótki opis pokoju/podtytuł)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Opis pokoju');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Goście na czarnej liście');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Jeśli ten gość znajduje się na czarnej liście, nie będzie już mógł dokonywać rezerwacji w tym obiekcie.');
jr_define('_JOMRES_SESSION_HANDLER', 'Obsługa sesji');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Zapisz pliki sesji jomres na dysku lub w bazie danych. Zalecane: baza danych');
jr_define('_JOMRES_MAP_HEIGHT',"Wysokość mapy (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Poziom powiększenia mapy ");
jr_define('_JOMRES_MAP_MAPTYPE',"Typ mapy ");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Menedżer zastępowania szablonów");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Pakiety szablonów to wtyczki, które mogą zapewnić zastępowanie szablonów dla różnych podstawowych plików szablonów Jomres.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Ta strona zawiera listę wszystkich plików szablonów, które mogą być nadpisane przez pliki szablonów pakietu szablonów. Jeśli chcesz nadpisać określony plik szablonu, kliknij przycisk edycji dla tego pliku, na następnej stronie będziesz w stanie wybrać wersję, którą chcesz zastąpić. Uwaga, te zastąpienia mają pierwszeństwo przed zarówno Jomres Core, jak i dowolnymi zastąpieniami motywu/szablonu Wordpress lub Joomla. Możesz wyłączyć zastąpienie, usuwając je na stronie Zastąpienia szablonu listy.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Nazwa szablonu");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Aktualna ścieżka");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Nie zastąpiony");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Możesz wybrać, który plik szablonu ma zastąpić podstawowe pliki szablonów, zmieniając listę rozwijaną");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Odsetek zarezerwowanych pokoi");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Wyświetla formularz tworzenia nowej właściwości.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Powiększenie mapy, 1: Świat 5: Teren/kontynent 10: Miasto 15: Ulice 20: Budynki ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Liczba recenzji do pokazania');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Wyświetla krótką listę użytkowników. Jeśli użytkownik jest zarejestrowany, są to jego ulubione, jeśli nie jest zalogowany, to tylko te elementy, które zostały dodane przez ikonę Ulubione podczas wizyty.');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimalna wartość depozytu' );
    
jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Jeżeli obliczona wpłata jest mniejsza niż ta kwota, zamiast tego ustaw wpłatę na tę wartość. Ta kwota może sama zostać zastąpiona, jeśli nie spełnia minimalnych ustawień wpłat w witrynie. Pozostaw ją na 0, aby nie używaj tego ustawienia." );

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Pokazuje formularz zgody zgodny z RODO');

jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Lista typów pokoi w obiekcie' );
jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Pokaż typ pokoju własności' );

jr_define( '_JOMRES_SHORTCODE_LOGIN_FORM', 'Pokaż formularz logowania' );

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Pokaż listę pokoi określonego typu');
jr_define( '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Identyfikator typu pokoju' );

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Pulpit');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Pokazuje listę syndykowanych właściwości');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Liczba syndykowanych właściwości do wyświetlenia');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Czy pokazywać MRP (hotele/bed & breakfast) lub SRP (domki/apartamenty/wille). Wartość domyślna jest określana na podstawie identyfikatora właściwości bieżącej nieruchomości, a jeśli tak nie jest, MRP Aby wybrać określony typ, ustaw tę wartość na 0 dla srps lub 1 dla srps.');
    
