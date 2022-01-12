<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Tutoriale video');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Panou de control');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Acest tutorial vă arată cum să utilizați panoul de control Property Management.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Cronologie');
jr_define ("_JOMRES_TUTORIAL_TIMELINE_DESC", "Cum se folosește calendarul cronologiei. În acest videoclip creăm un invitat nou prin introducerea detaliilor în fereastra pop-up, invitații existenți pot fi reutilizați selectându-și numele din meniul derulant din fereastra pop-up.") ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Cum se folosește pagina Proprietăți listă pentru a vizualiza informații suplimentare, pentru a modifica coloanele și pentru a căuta proprietăți specifice.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Editați detaliile proprietății');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Editarea detaliilor proprietății, inclusiv tragerea pe hartă pentru a vă stabili locația.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Schimbați modul de editare a tarifelor');
jr_define ("_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC", "Modul dvs. de modificare a tarifelor determină metoda pe care o puteți utiliza pentru a stabili prețurile pentru proprietatea dvs. Faceți acest lucru prin pagina Configurare proprietate.");


jr_define ("_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP", "Mod de editare a tarifelor normale pentru hoteluri, pensiuni, pensiuni");
jr_define ("_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC", "Modul normal de editare a tarifelor este o funcție simplă de editare a tarifelor care vă permite să selectați numărul de camere dintr-o proprietate, prețul camerei, numărul de oaspeți pe care fiecare cameră le poate găzdui și numărul maxim de oaspeți într-o petrecere. Când sunt salvate, aceste prețuri sunt apoi valabile pentru următorii 10 ani. ");

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Editarea tarifelor normale pentru vile și apartamente');
jr_define ("_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC", "Modul normal de editare a tarifelor este o funcție simplă de editare a tarifelor care vă permite să selectați subtipul proprietății, prețul proprietății pe noapte și numărul maxim de oaspeți într-o petrecere. Când sunt salvate aceste prețuri sunt apoi valabil pentru următorii 10 ani. ");

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tariff editing mode (recommended)');
jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC", "Modul de editare tarif Micromanage vă permite să configurați atât prețul, cât și numărul minim de zile pentru care poate fi valabil un sejur, pentru fiecare zi a anului. Este un instrument puternic care vă oferă un control complet peste preț. În acest exemplu vă vom arăta cum să creați mai multe seturi de prețuri pentru același tip de cameră, să stabiliți prețuri diferite pentru perioade diferite și prețuri diferite pentru anumite zile ale săptămânii într-o perioadă. ");

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Mod de editare tarif micromanage pentru vile / apartamente (recomandat)');
jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC", "Modul de editare tarif Micromanage vă permite să configurați atât prețul, cât și numărul minim de zile pentru care poate fi valabil un sejur, pentru fiecare zi a anului. Este un instrument puternic care vă oferă un control complet peste preț. În acest exemplu, vă vom arăta cum să creați mai multe seturi de prețuri. Vom stabili prețuri diferite pentru perioade diferite și prețuri diferite pentru anumite zile ale săptămânii într-o perioadă. Odată ce ați terminat, vom crea tarife multiple pentru același proprietate, dar cu numere de oaspeți diferite, permițându-ne să controlăm cu precizie prețurile pentru fiecare scenariu. ");

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Tarife diferite pentru diferite numere de oaspeți');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Puteți crea tarife multiple pentru același tip de cameră, deci dacă doriți prețuri diferite pentru un număr diferit de oaspeți, puteți face acest lucru.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'De persoană pe noapte - Tipuri de oaspeți');
jr_define ("_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC", "Pentru a percepe pe persoană pe noapte va trebui să creați tipuri de oaspeți. Diferitele tipuri de oaspeți pot avea variații în raport cu prețul de bază al unei camere, astfel încât copiii de diferite vârste pot avea reduceri variabile în funcție de vârsta lor. Tu nu trebuie să taxați pe persoană pe noapte pentru a utiliza tipurile de oaspeți, le puteți utiliza și dacă percepeți o tarifă forfetară, dar doriți totuși să capturați numărul de oaspeți sau pentru că doriți să limitați numărul de oaspeți într-o rezervare. ");

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - Încărcare imagini');
jr_define ("_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC", "Toate imaginile sunt încărcate prin centrul media. În acest videoclip vom încărca imaginea proprietății principale, câteva imagini de prezentare, o mică selecție de imagini care vor fi afișate în pagina cu rezultatele căutării și imagini pentru una dintre camerele.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media center - Încărcare imagini');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Toate imaginile sunt încărcate prin centrul media. În acest videoclip vom încărca imaginea proprietății principale, o mică selecție de imagini care vor fi afișate în pagina cu rezultatele căutării și câteva imagini de prezentare.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Panoul de control al administratorului');
jr_define ("_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC", "Aceasta este pagina dvs. de destinație implicită din zona administratorului. Puteți vedea un rezumat al diverselor statistici ale site-ului și puteți vedea ce proprietăți există în sistem, care sunt complete și care au fost finalizate și care așteaptă revizuirea înainte de aprobare Odată ce o proprietate a fost aprobată, aceasta poate fi publicată de administratorul proprietății.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Manager plugin, instalare și utilizare');
jr_define ("_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC", "Acest videoclip vă arată cum să utilizați Managerul de pluginuri, inclusiv instalarea managerului de pluginuri și apoi instalarea și dezinstalarea unui plugin. Dacă nu aveți o cheie de licență, vi se va solicita să salvați pe Site Configurare înainte de a putea instala managerul. Dacă nu ați folosit managerul de pluginuri înainte, atunci această listă va fi inițial goală, în acest exemplu am deja o varietate de pluginuri instalate.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Administratori de proprietăți');
jr_define ("_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC", "Administratorii de proprietăți sunt adăugați în unul din cele două moduri. Fie își creează propriile proprietăți (pot fi dezactivate în Configurarea site-ului), fie administratorul site-ului poate atribui un manager existent anumitor proprietăți. Managerii pot accesa doar proprietățile pe care le au create sau au fost atribuite.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Control acces');
jr_define ("_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC", "Puteți utiliza funcția Control acces pentru a dezactiva opțiunile din meniu, făcându-le vizibile doar pentru anumite clase de utilizatori sau chiar făcându-le să dispară complet. Dacă bara de meniu nu are nicio opțiune de meniu pentru a o afișa va dispărea complet, deci dacă nu doriți ca vizitatorii site-ului să vadă opțiuni, puteți seta doar toate opțiunile pentru a fi vizibile pentru utilizatorii conectați, de exemplu. ");

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Tipuri de proprietăți și camere');
jr_define ("_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC", "În acest videoclip veți vedea două concepte importante. Primul este crearea tipurilor de proprietăți și a tipurilor de camere asociate. Veți vedea, de asemenea, un utilizator înregistrat care nu este încă manager să își creeze propria proprietate și să devină un manager (dar poate configura numai proprietatea pe care au creat-o). Tipurile de proprietăți și camere sunt legate, după ce ați creat un tip de proprietate, trebuie să adăugați un tip de cameră, altfel administratorii de proprietăți vor vedea mesaje de eroare roșii atunci când încearcă să le configureze proprietățile. ");



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Încărcarea marcatorilor de hărți');
jr_define ("_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC", 'Folosiți Media Center pentru a încărca markeri de hartă. <a href="https://mapicons.mapsmarker.com/" target="_blank"> O sursă excelentă de markeri poate fi găsită aici. < / a> Procedura pentru încărcarea caracteristicilor proprietății, caracteristicilor camerei, tipurilor de camere și altele este aceeași. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Caracteristici ale proprietății');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'În acest videoclip vă vom arăta cum să creați caracteristici de proprietate și cum să încărcați imagini pentru acestea.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ("_JOMRES_TUTORIAL_SHORTCODES_DESC", "Shortcodes sunt o caracteristică extrem de puternică a Jomres. Principiul este același pentru Joomla și Wordpress. În acest videoclip vă vom arăta unde să vizualizați codurile scurte (această listă se va schimba în funcție de pluginurile care sunt instalat) și cum să le utilizați. Puteți utiliza codurile din articole sau module. ");

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Fișiere jurnal');
jr_define ("_JOMRES_TUTORIAL_LOGFILES_DESC", 'Acest videoclip vă va arăta cum să vizualizați fișierele jurnal. Jurnalizarea extensivă are loc atunci când sistemul este rulat. Când în modul Producție (Configurare site> Depanare) sunt generate mai puține jurnale, deci dacă testați o caracteristică nouă, atunci ar trebui să setați site-ul dvs. la Dezvoltare. Dacă doriți să adăugați propriul jurnal la scripturile Jomres, aruncați o privire la <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> pagina noastră de manual despre cum să o facem. </a> Aici vom arunca o eroare falsă, apoi vom vizualiza fișierul jurnal. Deoarece site-ul este setat la Dezvoltare acolo este o mulțime de informații, în mod normal, ați vedea doar un mesaj care spune că a existat o eroare și a fost raportată. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Traducerea etichetelor și a altor șiruri');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Există mai multe moduri de a traduce șiruri de limbă în Jomres, puteți edita fișiere de limbă, dar acestea ar putea fi suprascrise la actualizare. În schimb, vă recomandăm să utilizați instrumentele de traducere încorporate, care sunt unice pentru software. Dacă șirul este ceva care a fost introdus într-un formular, cum ar fi numele unui tip de cameră, puteți utiliza pagina Editare etichete. Dacă șirul este din fișierul de limbă, puteți utiliza instrumentul de editare a fișierelor de limbă. Folosiți instrumentul de căutare a browserului pentru a găsi șirul pe care doriți să îl modificați, apoi faceți clic pe link pentru a-l modifica. Aceste modificări sunt salvate în baza de date și, prin urmare, sunt actualizate în siguranță. Puteți avea etichete diferite pentru diferite tipuri de proprietăți, astfel încât să puteți schimbați Proprietatea nouă în Camping nou, de exemplu, schimbând meniul derulant Context limbă din partea de sus a paginii înainte de a schimba eticheta. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Adăugarea proprietăților');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> În această etapă, Jomres a fost instalat în CMS și a fost adăugat la meniul frontend (sau în Wordpress ați creat o pagină și ați adăugat codul scurt Jomres de bază). </ p>
<p> Aici veți vedea cum un utilizator înregistrat care nu este încă administrator de proprietăți în Jomres poate crea o nouă proprietate, configura unele setări de bază și o poate publica. </p>
<p> La sfârșit, veți vedea că managerul a fost setat automat ca administrator de proprietăți, totuși aceștia își pot configura propriile proprietăți. </p>
<p> Deși interfața din Wordpress arată diferit, procesul este exact același pentru Joomla sau Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Categorii de proprietăți');
jr_define ("_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC", "Categoriile de proprietăți sunt o caracteristică simplă care permite administratorilor de proprietăți să își atribuie proprietățile unei anumite categorii. Administratorii de site-uri pot crea coduri scurte care vor lista toate proprietățile dintr-o categorie, așa cum se arată în acest videoclip.");

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Proprietăți de vizualizare a administratorului site-ului');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Nu gestionați proprietăți de aici, puteți gestiona doar proprietăți din frontend, cu toate acestea, în această listă puteți vedea proprietăți care sunt în așteptarea aprobării (dacă caracteristica este activată) și oricare dintre acestea sunt incomplet (de exemplu, trebuie încă să încărcați imagini, să stabiliți prețuri etc.). Faceți clic pe numele proprietății pentru a fi dus la tabloul de bord al proprietății respective. Veți putea utiliza secțiunile de ghidare din partea de sus a paginii pentru a vedea pașii care trebuie să luați pentru a finaliza și publica o proprietate. </p> ');

