<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 9.25.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('VIDEO_TUTORALS_TITLE', 'Video návody');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'ovládací panel');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Tento tutoriál vám ukáže, ako používať ovládací panel Správa majetku.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Časová os');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Ako používať kalendár časovej osi. V tomto videu vytvoríme nového hosťa zadaním jeho podrobností do vyskakovacieho okna, existujúcich hostí je možné znova použiť výberom ich mena z rozbaľovacej ponuky vo vyskakovacom okne.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Zoznam vlastností');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Ako používať stránku Vlastnosti zoznamu na zobrazenie ďalších informácií, zmenu stĺpcov a vyhľadávanie konkrétnych vlastností.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Upraviť podrobnosti o svojom majetku');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Úprava podrobností o vašom majetku vrátane ťahania na mape, aby ste určili svoju polohu.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Zmeniť režim úpravy tarify');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Váš režim úprav taríf určuje metódu, ktorú môžete použiť na stanovenie cien pre svoju nehnuteľnosť. Vykonáte to na stránke Konfigurácia nehnuteľnosti.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normálny režim úprav taríf pre hotely, penzióny, B&B');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normálny režim úpravy taríf je jednoduchá funkcia úpravy taríf, ktorá vám umožňuje vybrať počet izieb v nehnuteľnosti, cenu izby, počet hostí, ktorých môže každá izba ubytovať, a maximálny počet hostí. na večierku. Keď sú uložené, tieto ceny potom platia ďalších 10 rokov.');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normálna úprava taríf pre vily a byty');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normálny režim úprav taríf je jednoduchá funkcia úpravy taríf, ktorá vám umožňuje vybrať podtyp nehnuteľnosti, cenu nehnuteľnosti za noc a maximálny počet hostí na večierku. Keď sú tieto ceny uložené, potom platí nasledujúcich 10 rokov. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'režim úpravy tarify mikromanažéra (odporúčané)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Režim úpravy tarifu Micromanage vám umožňuje nastaviť cenu a minimálny počet dní, počas ktorých môže byť pobyt platný, pre každý deň v roku. Je to účinný nástroj, ktorý vám dáva úplnú kontrolu. predražovanie cien. V tomto príklade vám ukážeme, ako vytvoriť viacero množín cien pre rovnaký typ miestnosti, nastaviť rôzne ceny pre rôzne obdobia a rôzne ceny pre konkrétne dni v týždni v rámci obdobia. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Režim úpravy sadzieb mikromanažéra pre vily/byty (odporúčané)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Režim úpravy tarifu Micromanage vám umožňuje nakonfigurovať cenu a minimálny počet dní, počas ktorých môže byť pobyt platný, pre každý deň v roku. Je to účinný nástroj, ktorý vám dáva úplnú kontrolu. predraženie. V tomto prípade vám ukážeme, ako vytvoriť viacero množín cien. V rámci obdobia nastavíme rôzne ceny pre rôzne obdobia a rôzne ceny pre konkrétne dni v týždni. Keď to bude hotové, vytvoríme viacero taríf pre rovnaké nehnuteľnosť, ale s rôznym počtom hostí, čo nám umožňuje presne kontrolovať ceny pre každý scenár. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Rôzne tarify pre rôzne čísla hostí');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Môžete vytvoriť viac taríf pre rovnaký typ miestnosti, takže ak chcete rôzne ceny pre rôzny počet hostí, môžete to urobiť.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Na osobu a noc - typy hostí');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Na účtovanie za osobu za noc budete musieť vytvoriť typy hostí. Rôzne typy hostí môžu mať odchýlky od základnej ceny izby, takže deti rôzneho veku môžu mať rôzne zľavy na základe ich veku. Vy Ak chcete používať typy hostí, nemusíte účtovať poplatky za osobu a noc, môžete ich použiť aj vtedy, ak účtujete paušál, ale napriek tomu chcete zachytiť počet hostí alebo pretože chcete obmedziť počet hostí v rezervácii. ');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - Image uploading');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Všetky obrázky sú nahrané prostredníctvom mediálneho centra. V tomto videu odovzdáme obrázok hlavnej vlastnosti, niektoré obrázky z prezentácie, malý výber obrázkov, ktoré sa majú zobraziť na stránke s výsledkami vyhľadávania, a obrázky jedného z nich miestnosti. ');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media center - upload image');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Všetky obrázky sa načítajú prostredníctvom mediálneho centra. V tomto videu odovzdáme obrázok hlavnej vlastnosti, malý výber obrázkov, ktoré sa majú zobraziť na stránke s výsledkami vyhľadávania, a niektoré obrázky z prezentácie.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'ovládací panel správcu');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'toto je vaša predvolená vstupná stránka v oblasti správcu. Môžete vidieť súhrn rôznych štatistík stránok a zistiť, ktoré vlastnosti systému existujú, ktoré sú úplné a ktoré boli dokončené a čakajú na kontrolu pred schválením. . Hneď ako je nehnuteľnosť schválená, môže ju zverejniť správca nehnuteľnosti. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Správca doplnkov, inštalácia a používanie');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Toto video ukazuje, ako používať Správcu doplnkov, vrátane inštalácie správcu doplnkov a následnej inštalácie a odinštalovania doplnku. Ak nemáte licenčný kľúč, budete vyzvaní na uloženie na server. Konfigurácia, než budete môcť nainštalovať správcu. Ak ste správcu doplnkov predtým nepoužívali, tento zoznam bude spočiatku prázdny, v tomto prípade už mám nainštalované rôzne doplnky. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Správcovia nehnuteľností');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC',' Správcovia nehnuteľností sa pridávajú jedným z dvoch spôsobov. Buď vytvoria vlastnosti sami (dajú sa zakázať v konfigurácii stránky), alebo môže správca lokality priradiť existujúceho správcu k určitým vlastníctvam. Správcovia majú prístup iba k vlastníctvam, ktoré majú vytvorené alebo k ktorým boli priradené. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'riadenie prístupu');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Funkciu Access Control môžete použiť na deaktiváciu možností ponuky, ich zobrazenie iba pre určité triedy používateľov alebo dokonca ich úplné zmiznutie. Ak panel s ponukami nemá žiadne možnosti ponuky, ktoré by sa mohli zobraziť, potom úplne zmizne, takže ak nechcete, aby sa návštevníkom stránok zobrazovali akékoľvek možnosti, stačí napríklad nastaviť, aby boli všetky možnosti viditeľné napríklad pre prihlásených používateľov. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'typy nehnuteľností a izieb');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'V tomto videu uvidíte dva dôležité koncepty. Prvým je vytváranie typov nehnuteľností a súvisiacich typov miestností. Uvidíte tiež registrovaného používateľa, ktorý ešte nie je správcom, ako si vytvorí vlastný majetok a stane sa správca (ale je schopný konfigurovať iba vlastníctvo, ktoré vytvorili). Typy vlastníctva a miestnosti sú prepojené. Keď vytvoríte typ vlastníctva, musíte pridať typ miestnosti. V opačnom prípade sa správcom nehnuteľností pri pokuse o konfiguráciu ich vlastností zobrazia červené chybové hlásenia. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Uploading Map Markers');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Media Center používate na nahrávanie značiek máp. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Veľký zdroj značiek nájdete tu. < /a> Postup pri odosielaní vlastností majetku, funkcií miestností, typov miestností a ďalších je rovnaký. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Vlastnosti nehnuteľnosti');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'V tomto videu vám ukážeme, ako vytvárať funkcie vlastníctva a ako pre ne nahrávať obrázky.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes sú mimoriadne silnou vlastnosťou Jomres. Princíp je rovnaký pre Joomla aj Wordpress. V tomto videu vám ukážeme, kde si môžete pozrieť krátke kódy (tento zoznam sa bude líšiť v závislosti od toho, ktoré doplnky sú nainštalované) a ako ich používať. Kódy môžete použiť v článkoch alebo moduloch. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Protokolové súbory');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Toto video vám ukáže, ako si prezerať súbory denníka. Rozsiahle zapisovanie do denníka prebieha pri spustení systému. V produkčnom režime (Konfigurácia webu> Ladenie) sa vygeneruje menej protokolov, takže ak testujete novú funkciu, mali by ste nastaviť svoj web na Rozvoj. Ak by ste chceli pridať svoje vlastné protokolovanie do svojich skriptov Jomres, pozrite sa na <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> naša stránka s manuálmi, ako na to. </a> Tu vyhodíme falošnú chybu a potom si pozrieme súbor denníka. Pretože stránka je tam nastavená na vývoj je veľa informácií, za normálnych okolností by ste videli iba správu, že došlo k chybe a bola nahlásená. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Preklad štítkov a iných reťazcov');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Existuje niekoľko spôsobov, ako preložiť jazykové reťazce v Jomres, môžete upravovať jazykové súbory, ale pri inovácii sa môžu prepísať. Namiesto toho odporúčame použiť vstavané prekladateľské nástroje, ktoré sú jedinečné pre naše softvér. Ak je reťazcom niečo, čo bolo zadané do formulára, napríklad názov typu miestnosti, môžete použiť stránku Úpravy štítkov. Ak reťazec pochádza z jazykového súboru, môžete použiť nástroj na úpravu jazykových súborov. Stačí použiť nástroj na vyhľadávanie v prehliadači, aby ste našli reťazec, ktorý chcete zmeniť, a potom ho kliknutím na odkaz zmeníte. Tieto zmeny sa uložia do databázy, a preto sú bezpečné pre aktualizáciu. Môžete mať rôzne štítky pre rôzne typy vlastností, takže môžete zmeňte Nové vlastníctvo na Nový kemp, napríklad zmenou rozbaľovacej ponuky Kontext jazyka v hornej časti stránky pred zmenou štítka. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Pridávanie vlastností');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> V tejto fáze bol Jomres nainštalovaný do CMS a bol pridaný do ponuky frontendu (alebo vo Wordpresse ste vytvorili stránku a pridali ste do nej základný Jomresov kód). </ p>
<p> Tu uvidíte, ako registrovaný používateľ, ktorý ešte nie je správcom vlastníctva v Jomres, môže vytvoriť nové vlastníctvo, nakonfigurovať niektoré základné nastavenia a zverejniť ho. </p>
<p> Na konci uvidíte, že správca bol automaticky nastavený ako správca vlastníctva, môže však konfigurovať iba svoje vlastné vlastnosti. </p>
<p> Aj keď rozhranie vo Wordpresse vyzerá inak, proces je úplne rovnaký pre Joomla alebo Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Kategórie majetku');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Kategórie nehnuteľností je jednoduchá funkcia, ktorá umožňuje správcom nehnuteľností priradiť ich vlastnosti k určitej kategórii. Správcovia stránok môžu vytvárať krátke kódy, ktoré zobrazia zoznam všetkých vlastností v kategórii, ako je znázornené na tomto videu.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Vlastnosti zobrazovania správcom stránky');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Odtiaľto nemôžete spravovať vlastnosti, môžete spravovať iba vlastnosti z frontendu, avšak v tomto zozname môžete vidieť vlastnosti, ktoré čakajú na schválenie (ak je funkcia povolená) a všetky, ktoré sú neúplné (napr. stále je potrebné nahrať obrázky, nastaviť ceny atď.). Kliknutím na názov vlastníctva sa dostanete na hlavný panel daného vlastníctva. Potom budete môcť pomocou sekcií sprievodcu v hornej časti stránky zobraziť kroky, ktoré musíte dokončiť a zverejniť vlastníctvo. </p> ');


