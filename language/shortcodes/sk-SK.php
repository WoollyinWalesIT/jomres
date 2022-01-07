<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.1.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Toto je titulná stránka vlastnosti cpanel.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Toto je páskový graf vlastností, ktorý na prvý pohľad poskytuje prehľad rezervácií v reálnom čase, dostupnosti a obsadenosti.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Tento skript umožňuje užívateľovi navzájom porovnať niekoľko vlastností, maximálne 3 vlastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Zoznam vlastností uida oddelených čiarkami, napr. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Zostaví formulár vlastníka kontaktu.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Odošlite identifikátor vlastníctva nehnuteľnosti, ktorú chcete kontaktovať. Prejdite 0 (nula), aby ste namiesto toho kontaktovali správcu stránky.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Zobrazuje stránku s informáciami o spoločnosti, ktorá sťahuje podrobnosti z poľa s podrobnosťami o vašej spoločnosti správcom nehnuteľnosti v konfigurácii nehnuteľnosti. Podrobnosti na tejto karte sa zvyčajne používajú na korešpondenciu, ktorá umožňuje manažérom mať adresu hotela/bytu a samostatná adresa na obchodné účely. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Zobrazuje kalendár majetku");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Mesiace na zobrazenie, predvolené nastavenie je 24, ak nie je nastavené inak. Nie je kompatibilné s premennou Zobraziť len mesiac.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Nastavte to na 1, ak chcete iba ukázať aktuálny mesiac. Nastavenie months_to_show sa bude ignorovať, ak sa použije rovnaký parameter show_just_month, v rovnakom čase.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Zobrazuje iba text popisu nehnuteľnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Zobrazuje iba text popisu vlastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Zobrazuje iba vlastnosti vlastníctva.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Zobrazuje iba šablónu hlavičky Property.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Zobrazuje iba typy miestností Property.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Zobrazuje iba hlavný obrázok nehnuteľnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Zobrazuje iba mapu vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO',' Zobrazuje nehnuteľnosť Viac informácií text. ');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR kód, ktorý odkazuje na medzery. Toto je možné naskenovať do telefónu pomocou aplikácie na čítanie qr kódu, ktorá poskytuje pokyny k nehnuteľnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Zobrazuje recenzie objektu.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Zobrazí súhrn preskúmania vlastníctva.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Zobrazuje jednotlivú miestnosť.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID miestnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Zobrazuje miestnosti nehnuteľnosti.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Zobrazí obrázky z miestnosti nehnuteľnosti ako prezentáciu.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Zobrazuje prezentáciu vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Zobrazuje majetkové tarify.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Zobrazuje adresu firmy, zadanú v časti Konfigurácia webu> Podrobnosti o vašej spoločnosti.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'zobrazuje podmienky vlastníctva.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID nehnuteľnosti.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Zobrazuje kalendár používateľského rozhrania vlastníctva, ktorý je odlišný od hlavného veľkého kalendára a je založený na funkcii kalendára používateľského rozhrania Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Nastaviť na 1, aby sa legenda nezobrazovala.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "zobrazuje výsledky vyhľadávania, ktoré je možné vylepšiť pridaním parametrov vyhľadávania. Neodporúčame vám používať všetky parametre súčasne, pretože skončíte s príliš obmedzenými kritériami vyhľadávania. Namiesto toho by ste sa mali obmedziť iba na jeden alebo dva parametre, napr. Vyhľadávanie podľa krajiny a počtu hviezdičiek. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Hľadať podľa krajiny pomocou kódu ISO Alpha-2, napr. GB alebo DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Hľadajte podľa regiónov. Keďže regióny sú uložené v databáze, musíte použiť ID regiónu. Navštívte administrátora> Jomres> Štruktúra stránok> Zoznam oblastí a umiestnite kurzor na odkaz Upraviť, uvidíte identifikačné číslo regiónu. . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Úplný názov mesta, ktoré chcete hľadať.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Hľadať vlastnosti s konkrétnymi funkciami. ID funkcií nájdete v časti Správca> Jomres> Štruktúra stránok> Vlastnosti vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Hľadať nehnuteľnosti s určitými typmi miestností. ID typov miestností nájdete v časti Správca> Jomres> Štruktúra stránok> Typy miestností.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Hľadať vlastnosti konkrétneho typu vlastnosti. ID typov vlastníctiev nájdete v časti Správca> Jomres> Štruktúra stránok> Typy vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Hľadať nehnuteľnosti v konkrétnom cenovom rozpätí.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Hľadanie nehnuteľností, ktorých tarify umožňujú počet hostí určitých hodnôt, napríklad účastníkov 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Hľadať vlastnosti N hviezd.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Hľadať podľa dátumu príchodu. Malo by byť kombinované s parametrom data odchodu');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Hľadať podľa dátumu odchodu. Malo by byť kombinované s parametrom dátumu príchodu');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Hľadať podľa kategórie majetku.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Zobraziť stránku agenta. Môžete zadať EITHER vlastnosť uid alebo samotné ID agenta, ak ho poznáte.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Vlastnosť uid, zobrazí sa zástupca nehnuteľnosti.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID databázy manažéra, ak je známe.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Zobrazí obľúbené vlastnosti, zvyčajne používané v pozíciách modulov alebo miniaplikácií.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Maximálny počet vlastností, ktoré je možné zobraziť.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Zobraziť iba vlastnosti týchto konkrétnych typov vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Nastavte na 1, aby sa zobrazili moduly optimalizované pre vertikálnu pozíciu widgetu/modulu.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Zobrazí náhodný výber vlastností, ktoré sa zvyčajne používajú v pozíciách modulov alebo miniaplikácií.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Maximálny počet vlastností, ktoré je možné zobraziť.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Zobraziť iba vlastnosti týchto konkrétnych typov vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Nastavením na 1 zobrazíte moduly optimalizované pre zvislú polohu widgetu/modulu.');
    
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Zobrazí naposledy zobrazené vlastnosti hosťa, zvyčajne používané v pozíciách modulov alebo miniaplikácií.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Maximálny počet vlastností, ktoré je možné zobraziť.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Nastavením na 1 zobrazíte moduly optimalizované pre vertikálnu pozíciu widgetu/modulu.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Zobrazuje množstvo vlastností, ktoré sa zvyčajne používajú v pozíciách modulov alebo miniaplikácií.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'ID vlastností vlastností, ktoré chcete zobraziť.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Nastavením na 1 zobrazíte moduly optimalizované pre vertikálnu pozíciu widgetu/modulu.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Zobrazí rozbaľovaciu ponuku výberu meny.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Povolenie/zakázanie výstupu alternatívnej šablóny. Tento výstup je určený na použitie v paneloch nástrojov Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Zobrazí stránku nákupného košíka.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Zobrazí modul/miniaplikáciu nákupného košíka.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Zobrazí hlavnú ponuku. Poznámka, ak používate prispôsobenú verziu mainmenu_wrapper_alternate.html napríklad v/templates/jr_leohtian/html/com_jomres, potom môžete < /i> s MENU_LOCATION zabaleným do zložených zátvoriek. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Táto stránka vám umožňuje nahrávať obrázky pre váš majetok a veci, ktoré ponúkate. Má jedno hlavné tlačidlo a druhé tlačidlo, ktoré vám umožňuje vybrať konkrétne zdroje, pre ktoré sa majú obrázky nahrávať. Takže hlavné vlastníctvo obrázok a prezentácia zobrazí iba jedno tlačidlo, ale ak ste vytvorili nejaké napr. voliteľné doplnky alebo miestnosti, zobrazí sa vám druhé tlačidlo, do ktorého môžete odosielať obrázky pre tieto konkrétne zdroje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Táto stránka vám umožňuje nahrávať obrázky pre váš majetok a veci, ktoré ponúkate. Má jedno hlavné tlačidlo a druhé tlačidlo, ktoré vám umožňuje vybrať konkrétne zdroje, pre ktoré chcete obrázky nahrávať. Takže hlavná vlastnosť obrázok a prezentácia zobrazí iba jedno tlačidlo, ale ak ste vytvorili akékoľvek voliteľné doplnky, zobrazí sa vám druhé tlačidlo, do ktorého môžete odosielať obrázky pre tieto konkrétne zdroje. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Najprv vyberte obrázky, ktoré chcete nahrať, kliknutím na položku Pridať obrázok alebo pomocou myši. Zobrazia sa v stĺpci na pravej strane. </li>
  <li> Nad touto oblasťou vyberte pomocou tlačidla \"Vybrať zdroj \" zdroj, pre ktorý chcete odovzdať obrázky. Možno vám bude ponúknutá možnosť vybrať si konkrétny zdroj pod ním. </li>
  <li> Keď vyberiete zdroj, môžete ho potom kliknutím na tlačidlo Odovzdať obrázok pod obrázkom priradiť k danému zdroju. Po nahraní obrázok zmizne zo stĺpca na pravej strane stránky a zobrazí sa vľavo. </li>
  <li> Pomocou tlačidla Kôš vedľa existujúcich obrázkov odstráňte obrázky, ktoré už nechcete, aby sa zobrazovali. </li>
  <li> Poradie, v ktorom sa súbory v prezentácii zobrazujú, môžete zmeniť tak, že ich pred odoslaním premenujete, pretože sa na stránkach zobrazujú v abecednom poradí. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Vedľa tlačidla Zdroj sa môže zobraziť tlačidlo Náhľad. Ak na toto kliknete, zobrazí sa vyskakovacie okno, ktoré vám ukáže, ako budú aktuálne nahrané obrázky vyzerať na stránke. Pomôže vám to predstavu o tom, ako budú obrázky vyzerať pre vašich zákazníkov. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Počet obrázkov, ktoré je možné nahrať, nie je nijako obmedzený. Pri odosielaní obrázkov sa automaticky zmení veľkosť. Môžete nahrávať iba súbory JPG a PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "V ideálnom prípade by všetky obrázky, ktoré odovzdáte, boli najmenej");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixely široké, inak môžu po nahraní vyzerať rozmazane.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Všetky obrázky, ktoré odovzdáte, nemôžu mať viac ako");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "vo veľkosti.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Vyberte zdroj, pre ktorý chcete nahrať obrázky");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Špecifický zdroj");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Obrázky už boli nahrané pre tento zdroj");
    
jr_define ('_JOMRES_MARKDOWN_TITLE', 'formátovanie textu');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Tu môžete zadávať text pomocou jednoduchého formátovania Markdown. Nepotrebujete poznať žiadny HTML, stačí použiť tlačidlá, aby informácie vyzerali tak, ako chcete, alebo formátovať text podľa týchto príkladov.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'dôraz');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'tučné');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kurzíva');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'prečiarknuté');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Hlavičky");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'veľká hlavička');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Stredná hlavička");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Malá hlavička');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Drobná hlavička');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Zoznamy");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'všeobecná položka zoznamu');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'číslovaná položka zoznamu');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Odkazy');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Text na zobrazenie');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citáty');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Toto je citát.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'To can span multiple lines!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Obrázky');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabuľky');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Stĺpec');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Zobraziť vlastnosti ako prezentáciu v zozname vlastností?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ak je nastavené na áno, bude sa zobrazovať prezentácia hlavných obrázkov vlastností. Ak je nastavená na nie, zobrazí sa prvý hlavný obrázok vlastnosti.');

jr_define ('EDIT_CMS_USER', 'Upraviť používateľa CMS');

jr_define ('BOOKING_MADE_BY', 'Rezervácia vykonaná');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Vybavenie');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Typy izieb');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Adresa URL externého rezervačného formulára');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Tu môžete nastaviť externú adresu URL, ak chcete na vytváranie rezervácií používať webovú stránku tretej strany. Všetky tlačidlá rezervácie jomres budú smerovať na túto adresu URL. Ak chcete použiť rezervačný formulár Jomres, nechajte toto pole prázdne. . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'slogan (krátky popis miestnosti/podtitul)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Popis miestnosti');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'hostia na čiernej listine');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ak je tento hosť na čiernej listine, potom už nebudú môcť vykonávať rezervácie v tomto majetku.');
jr_define ('_JOMRES_SESSION_HANDLER', 'obsluha relácie');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Uložiť súbory relácie jomres na disk alebo do databázy. Odporúčané: databáza');
jr_define ('_JOMRES_MAP_HEIGHT', "Výška mapy (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Úroveň priblíženia mapy");
jr_define ('_JOMRES_MAP_MAPTYPE', "Typ mapy");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Správca prepísania šablóny");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Balíky šablón sú doplnky, ktoré môžu poskytovať prepísateľné šablóny pre rôzne základné súbory šablón Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Táto stránka obsahuje všetky súbory šablón, ktoré je možné prepísať súbormi šablón balíka šablón. Ak chcete prepísať určitý súbor šablóny, kliknite na tlačidlo Upraviť pre príslušný súbor, na ďalšej stránke budete môžete si vybrať, ktorou verziou chcete prepísať. Upozorňujeme, že tieto prepísania majú prednosť pred jadrom Jomres Core a akýmkoľvek prepísaním témy/šablóny Wordpress alebo Joomla. Prepísanie môžete deaktivovať jeho odstránením na stránke Prepísania šablón zoznamu. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "názov šablóny");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuálna cesta");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nie je prepísané");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Zmenou rozbaľovacieho zoznamu si môžete vybrať, ktorý súbor šablóny prepíše súbory základnej šablóny");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "percentuálne rezervované izby");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Zobrazí formulár na vytvorenie novej vlastnosti.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Map zoom, 1: World 5: Landmass/continent 10: City 15: Streets 20: Buildings');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Počet recenzií na zobrazenie');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Zobrazí vlastnosti užšieho výberu. Ak je užívateľ zaregistrovaný, sú to ich obľúbené položky, ak nie sú prihlásené, potom len položky pridané prostredníctvom ikony Obľúbené počas návštevy.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimálna hodnota vkladu');
    
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ak je vypočítaný vklad menší ako tento údaj, nastavte namiesto neho vklad na túto hodnotu. Tento údaj môže byť sám prehnaný, ak nespĺňa nastavenie minimálneho vkladu na webe. Nechajte ho nastavený na 0 až nepoužívajte nastavenie. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Zobrazuje formulár súhlasu v súlade s GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'zoznam typov miestností nehnuteľností');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Show property room type');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Zobraziť prihlasovací formulár');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Zobraziť zoznam miestností určitého typu miestnosti');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID typu miestnosti');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Zobrazí zoznam syndikovaných vlastností');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'počet publikovaných vlastností na zobrazenie');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Či sa majú zobrazovať MRP (hotely/nocľah s raňajkami) alebo SRP (chaty/apartmány/vily). Predvolená hodnota je určená zo súčasného majetku, ak je k dispozícii Ak chcete vybrať konkrétny typ, nastavte túto hodnotu na 0 pre srps alebo 1 pre mrps. ');

