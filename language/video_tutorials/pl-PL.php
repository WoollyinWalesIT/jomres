<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('VIDEO_TUTORALS_TITLE', 'Samouczki wideo');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Panel sterowania');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Ten samouczek pokazuje, jak korzystać z panelu sterowania Zarządzanie właściwościami.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Oś czasu');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Jak korzystać z kalendarza osi czasu. W tym filmie tworzymy nowego gościa, wpisując jego dane w wyskakującym okienku, istniejących gości można ponownie wykorzystać, wybierając ich imię i nazwisko z menu w wyskakującym okienku.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Właściwości listy');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Jak używać strony Właściwości listy do przeglądania dodatkowych informacji, zmiany kolumn i wyszukiwania określonych właściwości.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Edytuj szczegóły swojej nieruchomości');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Edycja szczegółów nieruchomości, w tym przeciąganie na mapie w celu ustawienia lokalizacji.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Zmień tryb edycji taryfy');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Twój tryb edycji taryfy określa metodę, której możesz użyć do ustalenia cen dla swojej nieruchomości. Możesz to zrobić na stronie Konfiguracja nieruchomości.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normalny tryb edycji taryf dla hoteli, pensjonatów, pensjonatów');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normalny tryb edycji taryf to prosta funkcja edycji taryfy, która pozwala wybrać liczbę pokoi w obiekcie, cenę pokoju, liczbę gości w każdym pokoju i maksymalną liczbę gości na imprezie. Po zapisaniu ceny te obowiązują przez następne 10 lat.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Zwykła edycja taryf dla willi i apartamentów');


jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Tryb edycji taryfy Micromanage (zalecany)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Tryb edycji taryfy Micromanage pozwala skonfigurować zarówno cenę, jak i minimalną liczbę dni, przez które pobyt może być ważny, dla każdego dnia w roku. Jest to potężne narzędzie, które daje pełną kontrolę zawyżone ceny. W tym przykładzie pokażemy, jak utworzyć wiele zestawów cenowych dla tego samego typu pokoju, ustawić różne ceny dla różnych okresów i różne ceny dla określonych dni tygodnia w danym okresie. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Tryb edycji taryfy Micromanage dla willi/apartamentów (zalecany)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Tryb edycji taryfy Micromanage pozwala skonfigurować zarówno cenę, jak i minimalną liczbę dni, przez które pobyt może być ważny dla każdego dnia w roku. Jest to potężne narzędzie, które daje pełną kontrolę powyżej cen. W tym przykładzie pokażemy, jak utworzyć wiele zestawów cen. Ustawimy różne ceny dla różnych okresów i różne ceny dla określonych dni tygodnia w danym okresie. Gdy to zrobimy, utworzymy wiele taryf dla tego samego nieruchomości, ale z różnymi numerami gości, co pozwala nam precyzyjnie kontrolować ceny dla każdego scenariusza.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Różne taryfy dla różnych numerów gości');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Możesz utworzyć wiele taryf dla tego samego typu pokoju, więc jeśli chcesz mieć różne ceny dla różnej liczby gości, możesz to zrobić.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Za osobę za noc - typy gości');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Aby pobierać opłaty za osobę za noc, musisz określić typy gości. Różne typy gości mogą różnić się od ceny podstawowej pokoju, więc dzieci w różnym wieku mogą mieć różne zniżki w zależności od ich wieku. Ty nie musisz pobierać opłaty za osobę za noc, aby korzystać z typów gości, możesz ich również użyć, jeśli pobierasz stałą stawkę, ale nadal chcesz uzyskać liczbę gości lub chcesz ograniczyć liczbę gości w rezerwacji. ');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Centrum multimedialne — przesyłanie obrazu');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Centrum multimedialne — przesyłanie obrazu');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Wszystkie obrazy są przesyłane za pośrednictwem centrum multimedialnego. W tym filmie prześlemy obraz głównej usługi, mały wybór obrazów do wyświetlenia na stronie wyników wyszukiwania oraz kilka obrazów pokazu slajdów.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Panel sterowania administratora');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'To jest Twoja domyślna strona docelowa w obszarze administratora. Możesz zobaczyć podsumowanie różnych statystyk witryny i zobaczyć, które właściwości istnieją w systemie, które są kompletne, a które zostały zakończone i oczekują na sprawdzenie przed zatwierdzeniem Po zatwierdzeniu nieruchomości, zarządca nieruchomości może ją opublikować.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Menedżer wtyczek, instalacja i używanie');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Ten film pokazuje, jak korzystać z menedżera wtyczek, w tym instalację menedżera wtyczek, a następnie instalację i dezinstalację wtyczki. Jeśli nie masz klucza licencyjnego, zostaniesz poproszony o zapisanie w witrynie Konfiguracja przed zainstalowaniem menedżera Jeśli nie używałeś wcześniej menedżera wtyczek, ta lista będzie początkowo pusta, w tym przykładzie mam już zainstalowane różne wtyczki.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Zarządcy nieruchomości');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Menedżerowie usług są dodawani na jeden z dwóch sposobów. Albo sami tworzą właściwości (można je wyłączyć w konfiguracji witryny) albo administrator witryny może przypisać istniejącego menedżera do niektórych właściwości. Menedżerowie mają dostęp tylko do tych właściwości, które posiadają utworzone lub zostały przypisane.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Kontrola dostępu');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Możesz użyć funkcji kontroli dostępu, aby wyłączyć opcje menu, czyniąc je widocznymi tylko dla określonych klas użytkowników, a nawet całkowicie znikając. Jeśli pasek menu nie ma żadnych opcji menu do wyświetlenia, to zniknie całkowicie, więc jeśli nie chcesz, aby odwiedzający witrynę widzieli jakiekolwiek opcje, możesz po prostu ustawić wszystkie opcje tak, aby były widoczne dla zalogowanych użytkowników, na przykład.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Typy nieruchomości i pokoi');

jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Przesyłanie znaczników mapy');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Używasz Media Center do przesyłania znaczników map. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Doskonałe źródło znaczników można znaleźć tutaj.< /a> Procedura przesyłania cech nieruchomości, cech pokojów, typów pokojów i innych jest taka sama.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Funkcje właściwości');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'W tym filmie pokażemy, jak tworzyć obiekty i przesyłać dla nich obrazy.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Skróty');

jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Pliki dziennika');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'W tym filmie dowiesz się, jak przeglądać pliki dziennika. Po uruchomieniu systemu następuje obszerne rejestrowanie. W trybie produkcyjnym (Konfiguracja witryny > Debugowanie) generowanych jest mniej dzienników, więc jeśli testujesz nową funkcję, wówczas powinieneś ustawić swoją witrynę na Development.Jeśli chcesz dodać własne logowanie do swoich skryptów Jomres, spójrz na <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">nasza strona podręcznika, jak to zrobić.</a> Tutaj zgłosimy fałszywy błąd, a następnie wyświetlimy plik dziennika. Ponieważ witryna jest tam ustawiona na Programowanie to dużo informacji, normalnie zobaczysz tylko komunikat informujący, że wystąpił błąd i został on zgłoszony.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Tłumaczenie etykiet i innych ciągów');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Istnieje wiele sposobów tłumaczenia ciągów językowych w Jomres, możesz edytować pliki językowe, ale mogą one zostać nadpisane podczas aktualizacji. Jeśli ciąg jest czymś, co zostało wprowadzone do formularza, na przykład nazwa typu pokoju, możesz użyć strony Edycja Etykiet.Jeśli ciąg pochodzi z pliku językowego, możesz użyć narzędzia do edycji plików językowych. Po prostu użyj narzędzia wyszukiwania przeglądarki, aby znaleźć ciąg, który chcesz zmienić, a następnie kliknij link, aby go zmienić. Zmiany te są zapisywane w bazie danych i dlatego są bezpieczne dla aktualizacji. Możesz mieć różne etykiety dla różnych typów właściwości, dzięki czemu możesz zmień New Property na New Campsite, na przykład zmieniając menu rozwijane Language Context na górze strony przed zmianą etykiety.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Dodawanie właściwości');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>Na tym etapie Jomres został zainstalowany w CMS i został dodany do menu frontendu (lub w Wordpress utworzyłeś stronę i dodałeś do niej podstawowy krótki kod Jomresa).</ p>
<p>Tutaj zobaczysz, jak zarejestrowany użytkownik, który nie jest jeszcze zarządcą nieruchomości w Jomres, może utworzyć nową usługę, skonfigurować podstawowe ustawienia i opublikować ją.</p>
<p>Na koniec zobaczysz, że zarządca został automatycznie ustawiony jako zarządca nieruchomości, jednak mogą oni konfigurować tylko własne usługi.</p>
<p>Chociaż interfejs w Wordpress wygląda inaczej, proces jest dokładnie taki sam dla Joomla czy Wordpress.</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Kategorie właściwości');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Kategorie właściwości to prosta funkcja, która pozwala zarządcom nieruchomości przypisywać swoje właściwości do określonej kategorii. Administratorzy witryn mogą tworzyć skróty, które będą wyświetlać wszystkie właściwości w kategorii, jak pokazano w tym filmie.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Administrator witryny wyświetla właściwości');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>Nie zarządzasz właściwościami z tego miejsca, możesz zarządzać tylko właściwościami z interfejsu użytkownika, jednak na tej liście możesz zobaczyć właściwości, które oczekują na zatwierdzenie (jeśli funkcja jest włączona) i wszystkie, które są niekompletne (np. nadal trzeba przesłać obrazy, ustawić ceny itp.). Kliknij nazwę obiektu, aby przejść do pulpitu nawigacyjnego dla tej usługi. Będziesz wtedy mógł skorzystać z sekcji przewodnika u góry strony, aby zobaczyć kroki, które musisz wziąć, aby ukończyć i opublikować właściwość.</p> ');


