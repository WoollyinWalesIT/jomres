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


jr_define ('VIDEO_TUTORALS_TITLE', 'Video Tutorials');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Ovládací panel');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Tento tutoriál vám ukáže, jak používat ovládací panel správy majetku.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Timeline');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Jak používat kalendář časové osy. V tomto videu vytvoříme nového hosta zadáním jeho údajů do vyskakovacího okna, stávající hosty lze znovu použít výběrem jejich jména z rozevíracího seznamu ve vyskakovacím okně.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Jak pomocí stránky Vlastnosti seznamu zobrazit další informace, měnit sloupce a vyhledávat konkrétní vlastnosti.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Edit your property details');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Úprava podrobností vašeho majetku, včetně přetažení na mapě pro nastavení vaší polohy.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Změnit režim úpravy tarifu');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Váš režim úprav tarifů určuje způsob, jakým můžete nastavit ceny pro svou nemovitost. To provedete na stránce Konfigurace vlastnosti.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normální režim úprav tarifů pro hotely, penziony, B & B');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', "Normální režim úpravy tarifů je jednoduchá funkce úpravy tarifů, která vám umožňuje vybrat počet pokojů v nemovitosti, cenu pokoje, počet hostů, které může každý pokoj pojmout, a maximální počet hostů na večírku. Když jsou uloženy, tyto ceny pak platí dalších 10 let. ");

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Úpravy běžného tarifu pro vily a byty');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normální režim úpravy tarifů je jednoduchá funkce úprav tarifů, která vám umožňuje vybrat podtyp nemovitosti, cenu nemovitosti za noc a maximální počet hostů ve skupině. Při uložení jsou tyto ceny poté platí dalších 10 let. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'režim úpravy tarifu mikromanáže (doporučeno)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'režim úprav tarifu Micromanage vám umožňuje konfigurovat jak cenu, tak minimální počet dní, po které může být pobyt platný, pro každý den v roce. Je to účinný nástroj, který vám poskytuje úplnou kontrolu nadměrné ceny. V tomto příkladu vám ukážeme, jak vytvořit více cenových sad pro stejný typ místnosti, nastavit různé ceny pro různá období a různé ceny pro konkrétní dny v týdnu v rámci období. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'režim úpravy tarifu mikromanažéru pro vily/byty (doporučeno)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'režim úprav tarifu Micromanage vám umožňuje konfigurovat jak cenu, tak minimální počet dní, po které může být pobyt platný, pro každý den v roce. Je to účinný nástroj, který vám poskytuje úplnou kontrolu nadhodnocení. V tomto příkladu vám ukážeme, jak vytvořit více sad cen. Nastavíme různé ceny pro různá období a různé ceny pro konkrétní dny v týdnu v rámci období. Jakmile to bude hotové, vytvoříme více tarifů pro stejné vlastnictví, ale s různým počtem hostů, který nám umožňuje přesně kontrolovat ceny pro každý scénář. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Různé tarify pro různá čísla hostů');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Můžete vytvořit více tarifů pro stejný typ místnosti, takže pokud chcete různé ceny pro různé počty hostů, můžete to udělat.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Na osobu za noc - typy hostů');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Chcete -li účtovat za osobu za noc, budete muset vytvořit typy hostů. Různé typy hostů mohou mít odchylky od základní ceny pokoje, takže děti různého věku mohou mít různé slevy na základě jejich věku. Vy nemusíte používat typy hostů na osobu a noc, můžete je také použít, pokud účtujete paušál, ale přesto chcete zachytit počet hostů nebo protože chcete omezit počet hostů v rezervaci. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media center - Image uploading');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Všechny obrázky jsou nahrány prostřednictvím mediálního centra. V tomto videu nahrajeme obrázek hlavní vlastnosti, některé obrázky z prezentace, malý výběr obrázků, které se mají zobrazit na stránce s výsledky vyhledávání, a obrázky pro jeden z nich pokoje.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media center - Image uploading');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Všechny obrázky jsou nahrány prostřednictvím mediálního centra. V tomto videu nahrajeme obrázek hlavní vlastnosti, malý výběr obrázků, které se mají zobrazit na stránce s výsledky vyhledávání, a některé obrázky z prezentace.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'ovládací panel administrátora');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Toto je vaše výchozí cílová stránka v oblasti správce. Můžete zobrazit souhrn různých statistik stránek a zjistit, jaké vlastnosti systému existují, které jsou úplné a které byly dokončeny a čekají na kontrolu před schválením. . Jakmile je nemovitost schválena, může být zveřejněna správcem nemovitosti. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, instalace a používání');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Toto video ukazuje, jak používat Plugin Manager, včetně instalace správce pluginů a poté instalace a odinstalování pluginu. Pokud nemáte licenční klíč, budete vyzváni k uložení na Web Konfigurace, než budete moci nainstalovat správce. Pokud jste správce zásuvných modulů dosud nepoužívali, bude tento seznam zpočátku prázdný, v tomto případě již mám nainstalované různé doplňky. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Správci nemovitostí');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Správci nemovitostí se přidávají jedním ze dvou způsobů. Buď vytvářejí vlastnosti sami (lze je deaktivovat v Konfiguraci webu), nebo může správce stránek určitému majetku přiřadit existujícího správce. Správci mají přístup pouze k vlastnostem, které mají vytvořeny nebo k nimž byly přiřazeny. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'řízení přístupu');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Pomocí funkce Řízení přístupu můžete deaktivovat možnosti nabídky, takže jsou viditelné pouze pro určité třídy uživatelů nebo dokonce zcela zmizí. Pokud lišta nabídek nemá žádné možnosti nabídky, které by se zobrazily, pak úplně zmizí, takže pokud nechcete, aby se návštěvníkům stránek zobrazovaly nějaké možnosti, stačí například nastavit, aby byly všechny možnosti viditelné například pro přihlášené uživatele. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Property and Room Types');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'V tomto videu uvidíte dva důležité koncepty. Prvním je vytváření typů nemovitostí a přidružených typů pokojů. Uvidíte také registrovaného uživatele, který ještě není správcem, vytvořit si vlastní nemovitost a stát se správce (ale je schopen konfigurovat pouze vlastnost, kterou vytvořili). Typy nemovitostí a místností jsou propojeny, jakmile vytvoříte typ vlastnosti, musíte přidat typ místnosti, jinak se správcům nemovitostí při pokusu o konfiguraci jejich vlastností zobrazí červené chybové zprávy. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Uploading Map Markers');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Media Center používáte k nahrávání mapových značek. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Skvělý zdroj značek najdete zde. < /a> Postup pro nahrávání vlastností nemovitosti, funkcí pokojů, typů pokojů a dalších je stejný. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Vlastnosti vlastnosti');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'V tomto videu vám ukážeme, jak vytvářet vlastnosti vlastností a nahrávat pro ně obrázky.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Shortcodes');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Shortcodes jsou mimořádně výkonnou funkcí Jomres. Princip je stejný pro Joomla i Wordpress. V tomto videu vám ukážeme, kde zobrazit krátké kódy (tento seznam se bude měnit podle toho, jaké doplňky jsou nainstalované) a jak je používat. Kódy můžete použít ve článcích nebo modulech. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Protokoly');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Toto video vám ukáže, jak zobrazit soubory protokolu. Rozsáhlé protokolování probíhá při spuštění systému. V produkčním režimu (Konfigurace webu> Ladění) se generuje méně protokolů, takže pokud testujete novou funkci, měli byste nastavit svůj web na Development. Pokud chcete do skriptů Jomres přidat vlastní protokolování, podívejte se na <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> naše manuální stránka s návodem, jak na to. </a> Zde vyhodíme falešnou chybu a poté si prohlédneme soubor protokolu. Protože je web nastaven na Vývoj tam je mnoho informací, normálně byste jen viděli zprávu, že došlo k chybě a byla nahlášena. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Překládání popisků a dalších řetězců');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Existuje několik způsobů, jak v Jomres překládat jazykové řetězce, můžete upravovat jazykové soubory, ale mohou být přepsány při upgradu. Místo toho doporučujeme použít vestavěné překladatelské nástroje, které jsou jedinečné pro naše Pokud je řetězec něco, co bylo zadáno do formuláře, například název typu místnosti, můžete použít stránku Úpravy štítků. Pokud řetězec pochází z jazykového souboru, můžete použít nástroj pro úpravy jazykových souborů. Jednoduše použijte vyhledávací nástroj v prohlížeči k vyhledání řetězce, který chcete změnit, a poté klikněte na odkaz, který chcete změnit. Tyto změny jsou uloženy do databáze, a proto jsou bezpečné pro aktualizaci. Můžete mít různé popisky pro různé typy vlastností, takže můžete změňte novou vlastnost na nový kemp, například změnou rozevíracího seznamu Jazykový kontext v horní části stránky před změnou štítku. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Přidávání vlastností');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> V této fázi byl do CMS nainstalován Jomres a byl přidán do frontendové nabídky (nebo ve Wordpressu jste vytvořili stránku a přidali do ní základní Jomresův krátký kód). </ p>
<p> Zde uvidíte, jak registrovaný uživatel, který ještě není správcem vlastností v Jomres, může vytvořit novou službu, nakonfigurovat některá základní nastavení a publikovat ji. </p>
<p> Na konci uvidíte, že správce byl automaticky nastaven jako správce vlastností, ale mohou konfigurovat pouze své vlastní vlastnosti. </p>
<p> Přestože rozhraní v aplikaci Wordpress vypadá jinak, proces je přesně stejný pro Joomla nebo Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'kategorie nemovitostí');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Kategorie nemovitostí je jednoduchá funkce, která umožňuje správcům nemovitostí přiřadit jejich vlastnosti k určité kategorii. Správci stránek mohou vytvářet krátké kódy, které budou zobrazovat všechny vlastnosti v kategorii, jak je ukázáno v tomto videu.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Vlastnosti prohlížení správce webu');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Nemůžete zde spravovat vlastnosti, ale můžete spravovat pouze vlastnosti z frontendu, nicméně v tomto seznamu vidíte vlastnosti, které čekají na schválení (pokud je funkce povolena) a všechny, které jsou neúplné (např. stále je třeba nahrát obrázky, nastavit ceny atd.). Kliknutím na název vlastnosti přejdete na hlavní panel pro danou službu. Poté budete moci pomocí sekcí průvodce v horní části stránky zobrazit kroky, které musíte dokončit a publikovat službu. </p> ');

