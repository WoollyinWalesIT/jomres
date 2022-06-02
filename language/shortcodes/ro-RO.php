<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Aceasta este prima pagină a proprietății cpanel.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Aceasta este o diagramă a benzilor de proprietăți care oferă o privire de ansamblu asupra rezervărilor în timp real, disponibilității și ocupării dintr-o privire.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Acest script permite utilizatorului să compare mai multe proprietăți între ele, până la maximum 3 proprietăți.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'O listă separată prin virgule a uidurilor de proprietate, de exemplu, 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Construiește formularul proprietarului de contact.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Treceți uidul proprietății proprietății de contactat. Treceți 0 (zero) pentru a contacta în schimb administratorul site-ului.');

jr_define ("_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS", "Afișează pagina Informații despre companie extragând detalii din câmpul Detaliile companiei managerului proprietății din Configurarea proprietății. Detaliile din această filă ar fi utilizate în mod obișnuit pentru corespondență, permițând managerilor să aibă atât adresa hotelului / apartamentului, cât și o adresă separată în scopuri comerciale. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Afișează calendarul proprietății");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Treceți uidul de proprietate al proprietății care trebuie afișată.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Luni de afișat, implicit este 24 dacă nu este setat altfel. Nu este compatibil cu variabila Show Just Month.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Setați acest lucru la 1 dacă doriți doar să afișați singură luna curentă. Setarea months_to_show va fi ignorată dacă show_just_month este folosit în același cod în același timp.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Afișează doar textul descrierii proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Afișează doar textul descrierii proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Afișează doar caracteristicile proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Afișează doar șablonul antetului Proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Afișează doar tipurile de cameră Proprietate.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Afișează doar imaginea principală a proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Afișează doar harta proprietăților.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Afișează proprietatea Mai multe informații.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ("_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS", "cod QR care se leagă de gmaps. Acesta poate fi scanat într-un telefon folosind o aplicație de citire a codului qr care oferă indicații către proprietate.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Afișează recenziile unei proprietăți.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Afișează rezumatul recenziei unei proprietăți.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Afișează o cameră individuală.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID-ul camerei.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Afișează camerele unei proprietăți.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Afișează imaginile camerei unei proprietăți ca prezentare.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID-ul proprietății.');
    
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Afișează prezentarea de diapozitive.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Afișează tarifele de proprietate.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Afișează adresa companiei site-ului așa cum a fost introdusă în Configurarea site-ului> Detaliile companiei dvs.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Afișează termenii și condițiile proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID-ul proprietății.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Afișează calendarul UI al proprietății, care este un calendar diferit de calendarul mare principal și se bazează pe funcționalitatea calendarului UI Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Treceți uidul de proprietate al proprietății care trebuie afișată.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Setați acest lucru la 1 pentru a nu afișa legenda.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Afișează rezultatele căutării, care pot fi îmbunătățite prin adăugarea parametrilor de căutare. Nu vă recomandăm să utilizați toți parametrii în același timp, deoarece veți ajunge la criterii de căutare prea limitate. În schimb, ar trebui să vă restrângeți doar la unul sau doi parametri, de exemplu căutarea după țară și numărul de stele. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Căutare după țară, utilizând codul ISO Alpha-2, de ex. GB sau DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Căutați după regiune. Deoarece regiunile sunt salvate în baza de date, trebuie să utilizați ID-ul regiunii. Accesați Administrator> Jomres> Structura site-ului> Listează regiunile și plasați legătura Editați, acolo veți vedea numărul de identificare al regiunii . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Numele complet al orașului pe care doriți să îl căutați.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Căutați proprietăți cu anumite caracteristici. ID-urile de funcții pot fi găsite în Administrator> Jomres> Structura site-ului> Caracteristici ale proprietății.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Căutați proprietăți cu anumite tipuri de cameră. ID-urile tipului de cameră se găsesc în Administrator> Jomres> Structura site-ului> Tipuri de cameră.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Căutați proprietăți pentru un anumit tip de proprietate. ID-urile tipului de proprietate pot fi găsite în Administrator> Jomres> Structura site-ului> Tipuri de proprietăți.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Căutați proprietăți într-un anumit interval de prețuri.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Căutați proprietăți care au tarife care permit numărului de oaspeți de anumite valori, de exemplu părți de 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Căutați proprietăți de N stele.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Căutare după data sosirii. Ar trebui să fie combinată cu parametrul de plecareDată');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Căutare după data plecării. Ar trebui să fie combinată cu parametrul de sosireDată');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Căutare după categoria de proprietăți.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Vizualizați pagina unui agent. Puteți trece FIE un uid de proprietate, fie ID-ul agentului în sine, dacă îl cunoașteți.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Un uid de proprietate, acesta va afișa agentul proprietății.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID-ul bazei de date a managerului, dacă este cunoscut.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Afișează proprietățile populare, utilizate în mod obișnuit în pozițiile de modul sau widget.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Numărul maxim de proprietăți care pot fi afișate.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Afișați numai proprietățile acestor tipuri de proprietăți specifice.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Setați la 1 pentru a afișa modulele optimizate pentru un widget vertical / poziția modulului.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Afișează o selecție aleatorie de proprietăți, utilizate în mod obișnuit în pozițiile modulului sau widgetului.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Numărul maxim de proprietăți care pot fi afișate.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Afișați numai proprietățile acestor tipuri de proprietăți specifice.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Setați la 1 pentru a afișa modulele optimizate pentru o poziție verticală de widget / modul.');
    
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Afișează cele mai recente proprietăți vizualizate ale oaspeților, utilizate în mod obișnuit în pozițiile modulului sau widgetului.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Numărul maxim de proprietăți care pot fi afișate.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Setați la 1 pentru a afișa modulele optimizate pentru o poziție verticală a widgetului / modulului.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Afișează o serie de proprietăți, utilizate în mod obișnuit în pozițiile modulului sau widgetului.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'ID-urile de proprietate ale proprietăților pe care doriți să le afișați.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Setați la 1 pentru a afișa modulele optimizate pentru un widget vertical / poziția modulului.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Afișează lista derulantă pentru selectarea monedei.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Activați / dezactivați ieșirea șablonului alternativ. Această ieșire este destinată utilizării în barele de instrumente Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Afișează pagina Coșului de cumpărături.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Afișează modulul / widgetul Coșului de cumpărături');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Afișează meniul principal. Notă, dacă rulați o versiune personalizată a mainmenu_wrapper_alternate.html în, de exemplu, / templates / jr_leohtian / html / com_jomres, atunci trebuie să o modificați <pentru a modifica> / i> cu MENU_LOCATION înfășurat în acolade. ');
jr_define ("_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP", "Această pagină vă permite să încărcați imagini pentru proprietatea dvs. și lucrurile pe care le oferiți. Are un buton principal și un al doilea buton care vă permite să selectați resurse specifice pentru care să încărcați imagini. Deci, proprietatea principală imagine și prezentarea de diapozitive vor afișa un singur buton, dar dacă ați creat orice, de ex. Opțiuni suplimentare sau camere, atunci veți vedea un al doilea buton unde puteți încărca imagini pentru resursele respective. ");
jr_define ("_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP", "Această pagină vă permite să încărcați imagini pentru proprietatea dvs. și lucrurile pe care le oferiți. Are un buton principal și un al doilea buton care vă permite să selectați resurse specifice pentru care să încărcați imagini. Deci, proprietatea principală imagine și prezentarea de diapozitive vor afișa un singur buton, dar dacă ați creat opțiuni suplimentare opționale, veți vedea un al doilea buton în care puteți încărca imagini pentru resursele respective. ");


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Mai întâi alegeți imaginile pe care doriți să le încărcați făcând clic pe Adăugare imagine sau folosind Drag and Drop. Acestea vor apărea în coloana din partea dreaptă. </li>
  <li> Deasupra acestei zone, utilizați butonul \"Alegeți resursa \" pentru a alege pentru ce resursă doriți să încărcați imagini. Vi se poate oferi opțiunea de a alege o anumită resursă dedesubt. </li>
  <li> După ce ați ales o resursă, puteți face clic pe butonul Încărcare imagine de sub o imagine pentru a o asocia cu resursa respectivă. Odată ce o imagine a fost încărcată, aceasta va dispărea din coloana din site-ul din dreapta și va apărea în stânga. </li>
  <li> Utilizați butonul Coș de gunoi de lângă imaginile existente pentru a elimina imaginile pe care nu mai doriți să le afișeze. </li>
  <li> Puteți modifica ordinea afișării fișierelor în prezentarea de diapozitive redenumindu-le înainte de a le încărca, deoarece acestea sunt afișate în pagini în ordine alfabetică. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "În dreptul butonului Resurse, puteți vedea un buton Previzualizare. Dacă faceți clic pe acesta, veți vedea un pop-up care vă arată cum vor arăta imaginile încărcate în prezent într-o pagină. Acest lucru vă ajută să vă idee despre cum vor arăta imaginile clienților dvs. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Nu există nicio limită la numărul de imagini pe care le puteți încărca. Imaginile sunt redimensionate automat atunci când sunt încărcate. Puteți încărca numai fișiere JPG și PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "În mod ideal, orice imagine pe care o încărcați ar fi cel puțin");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixeli lățime, altfel pot părea neclare după ce au fost încărcate.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Orice imagine pe care o încărcați nu poate depăși");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "în mărime.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Alegeți resursa pentru care doriți să încărcați imagini");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Resursă specifică");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Imagini încărcate deja pentru această resursă");

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Dacă depozitul calculat este mai mic decât această cifră, atunci setați în schimb depozitul la această valoare. Această cifră ar putea fi însuși depășită dacă nu satisface setarea minimă a depozitului site-ului. Lăsați-o setată la 0 la nu utilizați setarea. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Afișează formularul de consimțământ conform GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Lista tipurilor de camere ale proprietății');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Afișează un tip de cameră de proprietate');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Afișați formularul de conectare');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Afișează o listă de camere cu un anumit tip de cameră');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID tip cameră');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Afișează o listă de proprietăți sindicate');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Numărul de proprietăți sindicate de afișat');
jr_define ("_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP", "Dacă se afișează MRP-uri (hoteluri / pensiuni) sau SRPs (cabane / apartamente / vile). afișat. Pentru a alege un anumit tip, setați această valoare la 0 pentru srps sau 1 pentru mrps. ");

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Afișează stelele unei proprietăți. Acestea sunt setate în Configurarea proprietății, dacă proprietatea este un MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID-ul proprietăţii.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Opțional. Dacă id-ul proprietății nu este setat, puteți transmite un număr.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Opțional. Cale alternativă a șablonului. Nu poate fi transmisă prin adresa URL. Trebuie să fie absolută.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Opțional. Nume șablon alternativ.');
