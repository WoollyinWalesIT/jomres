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


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Toto je úvodní stránka cpanel vlastnosti.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Toto je páskový graf vlastností, který na první pohled poskytuje přehled rezervací v reálném čase, dostupnosti a obsazenosti.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Tento skript umožňuje uživateli porovnat několik vlastností proti sobě, maximálně 3 vlastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Seznam vlastností uids oddělený čárkami, např. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Builds the contact owner form.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Pass the property uid of the property to be contacted. Pass 0 (zero) to instead contact site admin.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Zobrazuje stránku s informacemi o společnosti, která vytáhne podrobnosti z pole s podrobnostmi správce vaší společnosti v konfiguraci nemovitosti. Podrobnosti na této kartě by byly obvykle použity pro korespondenci, což manažerům umožní mít adresu hotelu/bytu a samostatná adresa pro obchodní účely. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Zobrazuje kalendář majetku");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Měsíce k zobrazení, výchozí hodnota je 24, pokud není nastaveno jinak. Není kompatibilní s proměnnou Zobrazit jen měsíc.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH' , "ve stejnou dobu.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Zobrazuje pouze text popisu vlastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Zobrazuje pouze text popisu vlastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Zobrazuje pouze vlastnosti vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Zobrazuje pouze šablonu záhlaví vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Ukazuje pouze typy místností nemovitosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Zobrazuje pouze hlavní obrázek Vlastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Zobrazuje pouze mapu vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Zobrazuje vlastnost Více informací text.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR kód, který odkazuje na mezery. To lze naskenovat do telefonu pomocí aplikace pro čtení qr kódu, která poskytuje pokyny k nemovitosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Zobrazuje recenze nemovitosti.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Zobrazuje shrnutí recenze vlastnosti.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Zobrazuje jednotlivou místnost.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID místnosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Zobrazuje pokoje nemovitosti.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Zobrazuje obrázky místností nemovitosti jako slideshow.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Zobrazuje prezentaci vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Zobrazuje majetkové tarify.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Zobrazuje obchodní adresu webu zadanou v části Konfigurace webu> Podrobnosti o vaší společnosti.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Zobrazuje podmínky vlastnictví.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID nemovitosti.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Zobrazuje kalendář uživatelského rozhraní vlastnosti, který je jiný než hlavní velký kalendář a je založen na funkci kalendáře uživatelského rozhraní Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Pass the property uid of the property to be shown.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Nastavením na 1 nezobrazíte legendu.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Zobrazuje výsledky vyhledávání, které lze vylepšit přidáním parametrů vyhledávání. Nedoporučujeme používat všechny parametry současně, protože skončíte s příliš omezenými kritérii vyhledávání. Místo toho byste se měli omezit pouze na jeden nebo dva parametry, např. Vyhledávání podle země a počtu hvězdiček. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Hledat podle země pomocí kódu ISO Alpha-2, např. GB nebo DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Hledat podle regionů. Protože jsou regiony ukládány do databáze, musíte použít ID regionu. Navštivte administrátora> Jomres> Struktura webu> Seznam regionů a umístěte kurzor na odkaz Upravit, uvidíte ID regionu. . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Úplný název města, které chcete vyhledat.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Hledat vlastnosti s konkrétními funkcemi. ID funkcí najdete v části Správce> Jomres> Struktura webu> Vlastnosti vlastnosti. ');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Hledat nemovitosti s určitými typy místností. ID typů místností najdete v části Správce> Jomres> Struktura webu> Typy místností. ');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Hledat vlastnosti konkrétního typu vlastnosti. ID typů nemovitostí najdete v části Správce> Jomres> Struktura webu> Typy vlastností. ');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Hledat nemovitosti v určitém cenovém rozpětí.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Hledání nemovitostí, jejichž tarify umožňují počet hostů určitých hodnot, například stran 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Hledat vlastnosti N hvězd.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Hledat podle data příjezdu. Měl by být kombinován s parametrem date_data');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Hledat podle data odjezdu. Měl by být kombinován s parametrem data příjezdu');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Hledat podle kategorie majetku.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Zobrazit stránku agenta. Můžete předat EITHER vlastnost uid nebo samotné ID agenta, pokud jej znáte.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Vlastnost uid, toto ukáže agenta vlastnosti.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID databáze manažera, je -li známo.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Zobrazuje oblíbené vlastnosti, obvykle používané v pozicích modulů nebo widgetů.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Maximální počet vlastností, které lze zobrazit.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Zobrazit pouze vlastnosti těchto konkrétních typů vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Nastaveno na 1 pro zobrazení modulů optimalizovaných pro vertikální pozici widgetu/modulu.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Zobrazuje náhodný výběr vlastností, obvykle používaných v pozicích modulů nebo widgetů.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Maximální počet vlastností, které lze zobrazit.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Zobrazit pouze vlastnosti těchto konkrétních typů vlastností.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Nastaveno na 1 pro zobrazení modulů optimalizovaných pro svislou pozici widgetu/modulu.');
    
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Zobrazuje naposledy zobrazené vlastnosti hosta, obvykle používané v pozicích modulů nebo widgetů.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Maximální počet vlastností, které lze zobrazit.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Nastavením na 1 zobrazíte moduly optimalizované pro vertikální pozici widgetu/modulu.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Zobrazuje řadu vlastností, obvykle používaných v pozicích modulů nebo widgetů.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'ID vlastností vlastností, které chcete zobrazit.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Nastaveno na 1 pro zobrazení modulů optimalizovaných pro vertikální pozici widgetu/modulu.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Zobrazí rozevírací seznam pro výběr měny.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Povolit/zakázat alternativní výstup šablony. Tento výstup je určen k použití na panelech nástrojů Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Zobrazí stránku nákupního košíku.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Zobrazí modul/widget nákupního košíku.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Zobrazuje hlavní nabídku. Poznámka, pokud používáte přizpůsobenou verzi mainmenu_wrapper_alternate.html například v/templates/jr_leohtian/html/com_jomres, pak můžete nahradit < /i> s MENU_LOCATION zabaleným do složených závorek. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Tato stránka vám umožňuje nahrávat obrázky pro vaši nemovitost a věci, které nabízíte. Má jedno hlavní tlačítko a druhé tlačítko, které vám umožňuje vybrat konkrétní zdroje, pro které chcete obrázky nahrávat. Takže hlavní vlastnost obrázek a Prezentace zobrazí pouze jedno tlačítko, ale pokud jste vytvořili nějaké např. Volitelné doplňky nebo Místnosti, zobrazí se vám druhé tlačítko, kam můžete nahrávat obrázky pro tyto konkrétní zdroje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Tato stránka vám umožňuje nahrávat obrázky pro vaši nemovitost a věci, které nabízíte. Má jedno hlavní tlačítko a druhé tlačítko, které vám umožňuje vybrat konkrétní zdroje, pro které chcete obrázky nahrávat. Takže hlavní vlastnost obrázek a Prezentace zobrazí pouze jedno tlačítko, ale pokud jste vytvořili jakékoli volitelné doplňky, zobrazí se vám druhé tlačítko, kam můžete nahrávat obrázky pro tyto konkrétní zdroje. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Nejprve vyberte obrázky, které chcete nahrát, kliknutím na Přidat obrázek nebo pomocí přetažení. Zobrazí se ve sloupci na pravé straně. </li>
  <li> Nad touto oblastí vyberte pomocí tlačítka \"Vybrat zdroj \" zdroj, pro který chcete nahrávat obrázky. Může vám být nabídnuta možnost vybrat si konkrétní zdroj pod ním. </li>
  <li> Jakmile vyberete zdroj, můžete jej kliknutím na tlačítko Odeslat obrázek pod obrázkem spojit s tímto zdrojem. Jakmile bude obrázek nahrán, zmizí ze sloupce na pravé straně webu a zobrazí se vlevo. </li>
  <li> Pomocí tlačítka Koš vedle stávajících obrázků odeberete obrázky, které již nechcete zobrazovat. </li>
  <li> Pořadí souborů zobrazovaných v prezentaci můžete změnit tak, že je před odesláním přejmenujete, protože se na stránkách zobrazují v abecedním pořadí. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Vedle tlačítka Prostředek se může zobrazit tlačítko Náhled. Pokud na něj kliknete, zobrazí se vyskakovací okno, které vám ukáže, jak budou aktuálně nahrané obrázky vypadat na stránce. To vám pomůže získat představu o tom, jak budou obrázky vypadat vašim zákazníkům. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Počet obrázků, které lze nahrát, není omezen. U obrázků se automaticky změní velikost, jakmile se nahrají. Můžete nahrávat pouze soubory JPG a PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "V ideálním případě by všechny obrázky, které nahrajete, byly alespoň");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pixely široké, jinak mohou po nahrání vypadat fuzzy.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Všechny obrázky, které nahrajete, nesmí být větší než");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "ve velikosti.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Vyberte zdroj, pro který chcete nahrát obrázky");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Specifický zdroj");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Obrázky již nahrané pro tento zdroj");
    
jr_define ('_JOMRES_MARKDOWN_TITLE', 'formátování textu');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Zde můžete zadat text pomocí jednoduchého formátování Markdown. Nepotřebujete znát žádný HTML, stačí použít tlačítka, aby informace vypadaly, jak chcete, nebo formátovat text podle těchto příkladů.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'důraz');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'tučné');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kurzíva');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'přeškrtnout');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Headers");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'velká hlavička');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Střední záhlaví");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Small header');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Drobná hlavička');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Seznamy");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Obecná položka seznamu');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'očíslovaná položka seznamu');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Odkazy');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Text k zobrazení');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citáty');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Toto je citát.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Může zahrnovat více řádků!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Obrázky');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabulky');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Sloupec');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Zobrazit vlastnosti jako slideshow v seznamu vlastností?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Pokud je nastaveno na ano, zobrazí se prezentace hlavních obrázků vlastností. Pokud je nastaveno na ne, zobrazí se první hlavní obrázek vlastnosti.');

jr_define ('EDIT_CMS_USER', 'Upravit uživatele CMS');

jr_define ('BOOKING_MADE_BY', 'rezervace provedená');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Vybavení');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Typy pokojů');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL externího rezervačního formuláře');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Zde můžete nastavit externí adresu URL, pokud chcete k rezervaci použít web třetí strany. Všechna tlačítka pro rezervaci jomres budou ukazovat na tuto adresu URL. Pokud chcete použít rezervační formulář Jomres, ponechte toto pole prázdné . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'slogan (krátký popis místnosti/podtitul)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Popis místnosti');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'host na černé listině');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Pokud je tento host na černé listině, pak již nebudou moci provádět rezervace v této vlastnosti.');
jr_define ('_JOMRES_SESSION_HANDLER', 'obsluha relace');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Uložit soubory relací jomres na disk nebo do databáze. Doporučeno: databáze');
jr_define ('_JOMRES_MAP_HEIGHT', "Výška mapy (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Úroveň přiblížení mapy");
jr_define ('_JOMRES_MAP_MAPTYPE', "Typ mapy");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Správce přepsání šablony");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Balíčky šablon jsou doplňky, které mohou poskytovat přepsání šablon pro různé základní soubory šablon Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Tato stránka uvádí všechny soubory šablon, které lze přepsat soubory šablon balíčku šablon. Pokud chcete přepsat určitý soubor šablony, klikněte na tlačítko Upravit pro daný soubor, na další stránce budete můžete si vybrat, kterou verzí chcete přepsat. Tyto přepisy mají přednost před Jomres Core i před jakýmkoli přepisem motivu/šablony Wordpressu nebo Joomly. Přepsání můžete deaktivovat jeho odstraněním na stránce Přepsání šablony šablony. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "název šablony");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuální cesta");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Není přepsáno");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Můžete si vybrat, který soubor šablony přepíše soubory základní šablony změnou rozevíracího seznamu");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Procentní rezervace místností");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Zobrazí formulář pro vytvoření nové vlastnosti.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Map zoom, 1: World 5: Landmass/continent 10: City 15: Streets 20: Buildings');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Počet recenzí k zobrazení');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Zobrazí vlastnosti z užšího výběru uživatelů. Pokud je uživatel zaregistrován, jedná se o jeho oblíbené položky, pokud není přihlášen, pak pouze položky přidané prostřednictvím ikony Oblíbené během návštěvy.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimální hodnota vkladu');
    
jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Pokud je vypočítaný vklad menší než tento údaj, pak místo něj nastavte vklad. Tento údaj může být sám přehnaný, pokud nevyhovuje minimálnímu nastavení vkladu na webu. Ponechte jej nastavený na 0 až nepoužívat nastavení. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Zobrazuje formulář souhlasu v souladu s GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'seznam typů nemovitostí');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Show a property room type');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Zobrazit přihlašovací formulář');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Zobrazit seznam místností určitého typu pokoje');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID typu pokoje');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Zobrazuje seznam syndikovaných vlastností');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'počet syndikovaných vlastností k zobrazení');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Zda zobrazit MRP (hotely/penziony a snídaně) nebo SRP (chaty/apartmány/vily). Výchozí hodnota je určena z aktuálního majetku, pak je zobrazeno. Chcete -li vybrat konkrétní typ, nastavte tuto hodnotu na 0 pro srps nebo 1 pro mrps. ');

