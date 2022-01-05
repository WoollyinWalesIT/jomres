<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.0.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Często zadawane pytania');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Właściwości');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Jak utworzyć właściwość?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknij Właściwości > Nowa właściwość, aby dodać nową właściwość.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Jak mogę zobaczyć, jak mój obiekt wygląda dla gości?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknij Właściwości > Podgląd, aby zobaczyć, jak Twój obiekt wygląda dla gości.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Jak dodać pokoje?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Sposób dodawania pokoi zależy od trybu Edycji Taryfy. W trybie Normalnej edycji taryf nie musisz dodawać pokoi, ponieważ są one automatycznie dodawane podczas konfigurowania cen. Jeśli używasz Mikrozarządzanie lub Zaawansowana edycja taryf, następnie w Ustawienia > Pokoje możesz dodawać, edytować i usuwać pokoje. Będziesz także mógł tworzyć cechy pokoi i przypisywać te funkcje do tych pokoi. Dodatkowo będziesz mógł wgrać zdjęcia dla poszczególnych pokoje korzystające z Media Center. Tworząc pokoje, należy zadbać o to, aby odzwierciedlały one rzeczywiste pokoje w Twojej nieruchomości, ponieważ ułatwi to zarządzanie nimi.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Jak ustawić ceny pokoi?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "To zależy od trybu edycji taryfy. Jeśli korzystasz z normalnego trybu edycji taryfy (Konfiguracja właściwości > zakładka Tryby edycji taryfy), możesz skonfigurować liczbę pokoi, cenę, liczbę osoby, które może pomieścić każdy pokój oraz łączną liczbę osób, które chcesz uwzględnić w każdej rezerwacji. Ten tryb umożliwia ustalenie cen pokoi na następne 10 lat. <br/>Jeśli korzystasz z trybów edycji taryf Advanced lub Micromanage, może ustalać ceny pokoi na każdy dzień w nadchodzących latach.Możesz również mieć wiele taryf dla tego samego typu pokoju, na przykład możesz mieć jedną taryfę dla Bed&Breakfast, a drugą dla Bed, Breakfast & Wieczorny posiłek, chyba że masz konkretną potrzebę , zalecamy korzystanie z Micromanage przez cały czas. Zaawansowane będzie działać w ten sam sposób, ale należy uważać, aby daty rozpoczęcia i zakończenia różnych taryf następowały po sobie.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Jak tworzyć opcjonalne dodatki?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Dodatki mogą być dodawane do rezerwacji i są konfigurowane w Ustawienia > Dodatki. Mogą być opcjonalne lub 'wymuszone', innymi słowy gość nie może odznaczyć ich w rezerwacji. Możesz zaoferować różne metody opłat za opcjonalne dodatki i czy są one wyświetlane na stronie Szczegóły obiektu. Ponieważ dodatki mogą być wyświetlane tylko wtedy, gdy rezerwacja odbywa się w określonych terminach (na przykład w przypadku owoców sezonowych), należy upewnić się, że ustawiłeś daty Ważne od i Do. Po utworzeniu opcjonalnych dodatków możesz przesłać dla nich obrazy za pomocą Menedżera mediów.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Jak mogę przyjmować płatności online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Aby pobierać płatności online, musisz mieć konto u dostawcy płatności online, zwanego Bramą. Aby zobaczyć dostępne bramki, przejdź do zakładki Konfiguracja właściwości > Bramy. Kliknij nazwę bramki, która ma zostać pobrana do swojej strony konfiguracyjnej.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Czy mogę udzielać rabatów?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Można przyznawać rabaty, można to zrobić na wiele różnych sposobów. Jeśli dokonujesz rezerwacji w imieniu klienta, możesz ustawić własne sumy depozytów i rezerwacji w formularzu rezerwacji , korzystając z pól Zastąp sumę zakwaterowania i Zastąp depozyt ( goście nie mogą korzystać z tej funkcji ). Innym sposobem przyznania gościowi rabatu jest utworzenie kuponów rabatowych, które można skonfigurować tak, aby można z nich było korzystać tylko w określonych terminach ( Ważne od/do ) lub stosowane tylko wtedy, gdy rezerwacja wypada między określonymi datami ( Rezerwacja ważna od/do ). Kupony rabatowe można przypisać tylko do jednego gościa lub jeśli chcesz, możesz je wydrukować. Wydruk zawiera kod QR które goście mogą zeskanować do swoich telefonów, co spowoduje przeniesienie ich do formularza rezerwacji z już obowiązującym kodem rabatowym.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezerwacje');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Kiedy klikam Nowa rezerwacja, pojawia się formularz kontaktowy, dlaczego?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Zanim będziesz mógł przyjmować rezerwacje online, musisz najpierw skonfigurować niektóre ceny (taryfy) dla każdego rodzaju pokoju, który masz w swoim rzeczywistym obiekcie. Po utworzeniu niektórych taryf będziesz mógł przyjmować rezerwacje .');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Co to są czarne rezerwacje?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Czarne rezerwacje to rezerwacje, które zostały utworzone w celu wyłączenia pokoju lub pokoi. Nie są one powiązane z żadnymi gośćmi i są przydatne, na przykład, gdy pokój wymaga remontu.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Obrazy');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Jak przesyłać obrazy?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Aby przesłać obrazy, musisz odwiedzić stronę Ustawienia > Media Center. Na tej stronie zobaczysz kilka okienek. U góry możesz zobaczyć notatki, a pod nimi zobaczysz menu rozwijane. To menu rozwijane umożliwia wybór zasobu, dla którego przesyłasz obrazy. <br/> Po prawej stronie znajduje się kolumna z opcjami Dodaj obrazy, Wyczyść listę i Prześlij wszystko. Kliknij Dodaj obrazy i wybierz obrazy z komputera lub urządzenia mobilnego. Kiedy to zrobiłeś, kolumna zmieni się w listę miniatur. Stąd możesz przesłać jeden lub więcej obrazów do swoich zasobów.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Co to jest obraz 'Główny'?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Główny obraz to ten, który pojawia się w wynikach wyszukiwania i w nagłówku Twojej usługi (obszar u góry stron, które pokazują coś na temat Twojej usługi). najlepsze możliwe oświetlenie. Aby przesłać główny obraz, upewnij się, że na liście rozwijanej w lewym górnym rogu jest wybrana właściwość Główny obraz, a następnie prześlij jeden lub więcej obrazów. Jeśli prześlesz więcej niż jeden obraz, wszystkie obrazy zostaną użyte w wyszukiwaniu strona wyników wyświetlana jako mały pokaz slajdów.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Co to są ikony funkcji pokoju?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Cechy pokoju mogą być tworzone przez użytkowników trybów edycji taryf Micromanage lub Advanced. Mogą one być połączone z jednym lub kilkoma pokojami i są wyświetlane w formularzu rezerwacji. Po utworzeniu funkcji pokoju można prześlij obraz dla tej funkcji, wybierając najpierw Ikony funkcji pokoju w menu rozwijanym w Media Center, a następnie wybierając nazwę funkcji pokoju z menu rozwijanego, które pojawi się pod spodem.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Jak załadować obrazy pokoi?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Pokoje mogą tworzyć użytkownicy korzystający z trybów edycji taryf Micromanage lub Advanced. Po utworzeniu jednego lub więcej pokoi można przesłać wiele obrazów dla każdego pokoju za pośrednictwem Centrum multimedialnego (wybierz nazwę/numer pokoju po wybierając obrazy pokoi z listy rozwijanej). Obrazy te można zobaczyć w pokazie slajdów, przeglądając stronę podglądu i wybierając kartę Nasze pokoje, a następnie klikając łącze Dostępność.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Jak przesłać obrazy pokazu slajdów?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Obrazy pokazu slajdów są widoczne na stronie Szczegóły właściwości (Podgląd), obok przycisku Zarezerwuj teraz.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Jak przesłać obrazy dodatków?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Podobnie do pokojów i funkcji pokoju, musisz najpierw utworzyć dodatek. Gdy to zrobisz, możesz wybrać Dodatki w górnym menu rozwijanym. Gdy to zrobisz, musisz wybrać nazwę dodatek z listy rozwijanej poniżej. Po wybraniu nazwy możesz przesłać jeden lub więcej obrazów dla tego dodatku.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Coś związanego z gościem');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Jak blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Ty blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Jak zapisywać opisy w wielu językach?');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Aby zapisać opisy w wielu językach, najpierw odwiedź stronę Ustawienia > Szczegóły usługi. Zapisz tam opis swojej usługi. Następnie zmień język, w którym przeglądasz witrynę. Teraz przejdź do Ustawień Ponownie stronę Szczegóły właściwości i ponownie zapisz szczegóły. Jeśli więc witryna jest w stanie wyświetlać zarówno język angielski, jak i hiszpański (lub dowolny inny), wybierz angielski, wprowadź opis w języku angielskim, a następnie kliknij przycisk Zapisz. Następnie zmień bieżący język na hiszpański, a następnie zapisz nowy opis w języku hiszpańskim. Działa to dla wszystkich danych wejściowych na tej stronie.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Czy mogę modyfikować inne właściwości tej witryny?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nie, nie możesz. Możesz administrować tylko tymi właściwościami, które sam utworzyłeś lub do których jesteś przypisany jako menedżer nieruchomości.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Czy mogę modyfikować inne właściwości tej witryny?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Tak, możesz, jesteś Super Property Managerem i możesz modyfikować dowolne właściwości wyświetlane na stronie Właściwości listy.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Jakie są typy gości/Jak zmienić na osobę na noc?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Na karcie Ustawienia > Konfiguracja właściwości > Taryfy i waluty możesz zdecydować, czy chcesz pobierać opłatę za osobę za noc. Jeśli naliczasz opłatę za osobę za noc, musisz utworzyć jeden lub więcej typów gości. Możesz utworzyć prosty typ gościa, w którym po prostu nadasz mu opis (np. Osoby) lub możesz stworzyć kilka różnych typów gości, na przykład \"Dorośli\" i \"Dzieci poniżej 10 roku życia\". rabat w wysokości 50%, wtedy ustawiłeś \"Jest procentem\" na Tak, a wartość Odchylenie na 50. Pokoje mają stawki podstawowe, to ustawienie pozwala dostosować cenę pokoju w zależności od typu gościa.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Co to są funkcje pokoju?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Funkcje pokoju to rzeczy, które sprawiają, że pokój się wyróżnia. Może to być coś prostego, jak zestaw do parzenia kawy i herbaty, lub rzeczy, które naprawdę sprawiają, że pokój wznosi się ponad inne, takie jak 'Widoki na zatoki'. Po utworzeniu funkcji pokoju możesz przesłać obrazy dla tej funkcji w Media Center. Te funkcje pokoju można wyświetlić na stronie dostępności pokoi, a po skonfigurowaniu usługi wyświetla się styl listy Pokoje klasyczne (gdzie goście mogą dokładnie wybrać pokój, który chcą zarezerwować), a następnie mogą skorzystać z funkcji pokoju, aby filtrować pokoje pokazane w formularzu rezerwacji.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Płatności');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Po dokonaniu rezerwacji nie widzisz bramki płatności.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Jeśli jesteś zalogowany jako Zarządca Nieruchomości, nie zobaczysz bramki płatności, ponieważ nie płacisz sam. Tylko użytkownicy niebędący menedżerami zobaczą bramkę podczas dokonywania rezerwacji.");