<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Často kladené otázky');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Vlastnosti');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Jak vytvořím vlastnost?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknutím na Vlastnosti> Nová vlastnost přidáte novou vlastnost.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Jak mohu zjistit, jak můj majetek vypadá pro hosty?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknutím na Vlastnosti> Náhled zobrazíte, jak vaše nemovitost vypadá pro hosty.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Jak přidám pokoje?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Jak přidáte místnosti, závisí na vašem režimu úprav tarifů. V režimu úprav běžného tarifu nemusíte přidávat pokoje, protože se automaticky přidávají při konfiguraci cen. Pokud používáte Mikromanage nebo Pokročilý režim úprav tarifů, poté v Nastavení> Místnosti můžete přidávat, upravovat a mazat místnosti. Budete také moci vytvářet funkce místností a přiřadit jim tyto funkce. Kromě toho budete moci nahrávat obrázky pro jednotlivé místnosti pomocí Media Center. Když vytváříte místnosti, měli byste se pokusit zajistit, aby odrážely vaše pokoje ve vašem majetku, protože to usnadní jejich správu. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Jak nastavím ceny pokojů?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "To závisí na vašem režimu úprav tarifů. Pokud používáte režim úprav běžného tarifu (záložka Konfigurace vlastností> Režimy úpravy tarifů), pak můžete konfigurovat počet pokojů, které máte, cenu, počet lidí, které může každý pokoj ubytovat, a celkový počet osob, které chcete v každé rezervaci. Tento režim vám umožňuje nastavit ceny pokojů na příštích 10 let. <br/> Pokud používáte režimy úprav tarifů Pokročilý nebo Micromanage, pak jste můžete nastavit ceny pokojů pro každý den pro nadcházející roky. Můžete mít také více tarifů pro stejný typ pokoje, například můžete mít jeden tarif pro Bed & Breakfast a druhý pro postel, snídani a večeři. Pokud nemáte konkrétní potřebu \"Doporučujeme používat Micromanage po celou dobu, Advanced bude fungovat stejným způsobem, ale musíte být opatrní, abyste zajistili, že data zahájení a ukončení vašeho tarifu budou po sobě jdoucí.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Jak vytvořím volitelné doplňky?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Doplňky lze přidat do rezervací a konfigurovat je v Nastavení> Doplňky. Ty mohou být buď volitelné, nebo 'vynucené', jinými slovy, host je nemůže při rezervaci zrušit. Můžete nabídnout různé metody poplatků za volitelné doplňky a zda jsou zobrazeny na stránce s podrobnostmi o nemovitosti. Protože doplňky lze zobrazit pouze v případě, že rezervace probíhá v určitých termínech (například u sezónního ovoce), měli byste se ujistit, že nastavili data Platné od a Do. Jakmile vytvoříte volitelné doplňky, můžete k nim nahrávat obrázky prostřednictvím Správce médií. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Jak mohu přijímat platby online?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Chcete -li přijímat platby online, musíte mít účet u online poskytovatele plateb, který se nazývá Gateway. Chcete -li zobrazit dostupné brány, přejděte na Konfigurace vlastnosti> karta Brány. Kliknutím na název brány se odeberete na konfigurační stránku. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Mohu poskytnout slevy?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Lze poskytovat slevy, existuje několik různých způsobů, jak to provést. Pokud provádíte rezervaci jménem zákazníka, můžete v rezervačním formuláři nastavit vlastní součty vkladů a rezervací.\" , pomocí polí Přepsat ubytování celkem a Přepsat vklad (hosté tuto funkci nemohou použít). Dalším způsobem, jak dát hostovi slevu, je vytvoření slevových kupónů, které lze nakonfigurovat tak, aby je bylo možné použít pouze mezi určitými daty (Platné od/do) nebo platí pouze v případě, že rezervace spadá mezi určitá data (rezervace platná od/do). Tyto slevové kupóny lze přiřadit pouze jednomu hostu, nebo pokud chcete, můžete si kupóny vytisknout. Výtisk obsahuje QR kód které mohou hosté naskenovat do svých telefonů a přesunout je do rezervačního formuláře se slevovým kódem, který již platí. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'rezervace');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Když kliknu na novou rezervaci, přejdu na kontaktní formulář, proč?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Než budete moci přijímat rezervace online, musíte nejprve nakonfigurovat některé ceny (tarify) pro každý typ pokoje, který máte ve svém reálném světě. Jakmile vytvoříte nějaké tarify, budete moci přijímat rezervace. . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Co jsou černé rezervace?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Černé rezervace jsou rezervace, které byly vytvořeny za účelem vyřazení pokoje nebo místností z provozu. Nejsou spojeny s žádnými hosty a jsou užitečné například v případě, že je potřeba místnost renovovat.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Obrázky');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Jak nahraji obrázky?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Chcete -li nahrávat obrázky, musíte navštívit stránku Nastavení> Centrum médií. Na této stránce uvidíte několik podoken. V horní části se mohou zobrazit některé poznámky a pod nimi rozbalovací nabídka. Tato rozbalovací nabídka vám umožňuje vybrat, pro který zdroj obrázky odesíláte. <br/> Vpravo je sloupec s možnostmi Přidat obrázky, Vymazat seznam a Nahrát vše. Klikněte na Přidat obrázky a vyberte některé obrázky z počítače nebo mobilního zařízení. udělali jste to, sloupec se změní na seznam miniatur. Odtud můžete nahrát jeden nebo více obrázků pro své zdroje. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Jaký je 'hlavní' obrázek?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Hlavní obrázek je ten, který se zobrazuje ve výsledcích vyhledávání a v záhlaví vaší nemovitosti (oblast v horní části stránek, které ukazují něco o vaší nemovitosti). Měli byste zvolit obrázek, který zobrazí vaši vlastnost v nejlepší možné světlo. Chcete -li nahrát hlavní obrázek, zkontrolujte, zda je v rozevíracím seznamu vlevo nahoře vybrána vlastnost Hlavní obrázek, poté nahrajte jeden nebo více obrázků. Pokud nahrajete více než jeden obrázek, budou při vyhledávání použity všechny obrázky stránka s výsledky se zobrazuje jako malá prezentace. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Co jsou ikony funkcí místnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Funkce místností mohou vytvářet uživatelé režimů úprav Micromanage nebo Advanced. Tyto funkce lze propojit s jednou nebo více místnostmi a zobrazí se v rezervačním formuláři. Jakmile vytvoříte funkci místnosti, můžete nahrajte obrázek pro tuto funkci tak, že nejprve v rozevíracím seznamu v Media Center vyberete Ikony funkcí místnosti a poté z rozevíracího seznamu, který se zobrazí pod ním, vyberete název funkce místnosti. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Jak nahraji obrázky z místnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Místnosti mohou vytvářet uživatelé režimů Micromanage nebo Advanced pro úpravy tarifů. Jakmile byla vytvořena jedna nebo více místností, můžete přes Media Center nahrát více obrázků pro každou místnost (vyberte název/číslo místnosti po v rozevíracím seznamu vyberte Obrázky pokojů). Tyto obrázky lze zobrazit v prezentaci prohlížením stránky Náhled, výběrem karty Naše pokoje a kliknutím na odkaz Dostupnost. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'How do I upload slideshow images?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Obrázky prezentace jsou vidět na stránce Podrobnosti o nemovitosti (Náhled) vedle tlačítka Rezervovat.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'How do I upload Extras Images?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Podobně jako u pokojů a jejich funkcí je třeba nejprve vytvořit Extra. Až to budete mít hotové, můžete v horním rozevíracím seznamu vybrat Doplňky. Až to uděláte, musíte vybrat název z rozevíracího seznamu níže. Když je vybrán název, můžete pro tento Extra nahrát jeden nebo více obrázků. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Něco související s hostem');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Jak uložím popisy ve více jazycích?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Chcete -li uložit popisy ve více jazycích, navštivte nejprve stránku Nastavení> Podrobnosti o nemovitosti. Uložte tam popis své nemovitosti. Dále změňte jazyk, ve kterém si web prohlížíte. Nyní přejděte do Nastavení Znovu stránku s podrobnostmi o vlastnostech a znovu uložte podrobnosti. Pokud je tedy web schopen zobrazovat angličtinu i španělštinu (nebo jakýkoli jiný) jazyk, vybrali byste angličtinu, zadejte popis v angličtině a poté klikněte na Uložit. Dále změňte aktuální jazyk do španělštiny, poté uložte nový popis španělštiny. Funguje to pro všechny vstupy na této stránce. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Mohu na tomto webu upravit další vlastnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Ne, nemůžete. Spravovat můžete pouze vlastnosti, které jste vytvořili nebo ke kterým jste byli přiřazeni jako správce nemovitostí.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Mohu na tomto webu upravit další vlastnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Ano, můžete, jste Super Property Manager a můžete upravovat jakékoli vlastnosti zobrazené na stránce Vlastnosti seznamu.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Jaké jsou typy hostů/Jak se změním na osobu za noc?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "V Nastavení> Konfigurace nemovitosti> Tarify a měny se můžete rozhodnout, zda chcete účtovat za osobu za noc. Pokud účtujete za osobu za noc, budete muset vytvořit jeden nebo více typů hostů. Můžete vytvořit jednoduchý typ hosta, kde mu pouze poskytnete popis (např. Osoby), nebo můžete vytvořit několik různých typů hostů, například \"Dospělí\" a \"Děti do 10 let\". Pokud chcete dětem nabídnout slevu 50%, pak byste nastavili \"Je procento\" na Ano a hodnotu Variance na 50. Pokoje mají základní sazby, toto nastavení vám umožňuje upravit cenu pokoje podle typu hosta. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'What are Room features?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Funkce pokoje jsou věci, díky nimž místnost vynikne. Mohou to být něco jednoduchého, jako je zařízení na přípravu čaje a kávy, nebo to mohou být věci, díky nimž se místnost povznese nad ostatní, například 'Pohledy na bay '. Jakmile vytvoříte funkci místnosti, můžete pro tuto funkci nahrát obrázky do Media Center. Tyto funkce pokojů lze zobrazit na stránce dostupnosti pokojů a pokud jste svou nemovitost nakonfigurovali tak, aby zobrazovala styl seznamu klasických pokojů (kde si hosté mohou vybrat přesně, který pokoj si chtějí rezervovat) pak mohou pomocí funkcí pokoje filtrovat údaje uvedené v rezervačním formuláři. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Platby');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Platební bránu po provedení rezervace nevidíte.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Pokud jste přihlášeni jako správce nemovitostí, platební bránu neuvidíte, protože neplatíte sami. Při rezervaci bránu uvidí pouze uživatelé, kteří nejsou správci.");
