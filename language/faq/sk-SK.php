<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Často kladené otázky');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Vlastnosti');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Ako vytvorím nehnuteľnosť?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknutím na položku Vlastnosti> Nové vlastníctvo pridáte nové vlastníctvo.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Ako môžem vidieť, ako vyzerá môj majetok pre hostí?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknutím na položku Vlastnosti> Ukážka zobrazíte, ako váš majetok vyzerá pre hostí.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Ako pridám miestnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Spôsob pridávania miestností závisí od režimu úprav taríf. V režime úprav bežných taríf nemusíte pridávať miestnosti, pretože sa automaticky pridávajú pri konfigurácii cien. Ak používate Mikromanažér alebo režim úprav rozšírených taríf, potom v Nastaveniach> Miestnosti môžete pridávať, upravovať a odstraňovať miestnosti. Budete tiež môcť vytvárať funkcie miestností a priraďovať ich k týmto miestnostiam. Okrem toho budete môcť nahrávať obrázky pre jednotlivé miestnosti pomocou aplikácie Media Center. Pri vytváraní miestností by ste sa mali snažiť zaistiť, aby vo vašom majetku odrážali miestnosti v skutočnom svete, čo im uľahčí správu. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Ako nastavím ceny izieb?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "To závisí od vášho režimu úprav taríf. Ak používate režim úprav Bežný tarif (karta Konfigurácia majetku> Režimy úprav taríf), potom môžete nakonfigurovať počet miestností, ktoré máte, cenu, počet osôb, ktoré môže každá izba ubytovať, a celkový počet osôb, ktoré chcete v každej rezervácii. Tento režim vám umožňuje nastaviť ceny izieb na nasledujúcich 10 rokov. <br/> Ak používate režimy úprav taríf Rozšírené alebo Micromanage, ste schopný nastaviť ceny izieb na každý deň v nasledujúcich rokoch. Môžete mať aj viacero taríf pre ten istý typ miestnosti, napríklad môžete mať jednu tarifu pre nocľah s raňajkami a druhú pre nocľah s raňajkami a večerou. Pokiaľ nemáte konkrétnu potrebu \"Odporúčame, aby ste Micromanage používali stále, Advanced bude fungovať rovnako, ale musíte si dávať pozor na to, aby dátumy začatia a ukončenia tarify po sebe nasledovali.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Ako vytvorím voliteľné doplnky?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Doplnky je možné pridať do rezervácií a konfigurovať ich v časti Nastavenia> Doplnky. Môžu byť buď nepovinné, alebo 'vynútené', inými slovami, hosť ich nemôže zrušiť pri rezervácii. Môžete ponúknuť rôzne spôsoby poplatkov za voliteľné príplatky a či sú uvedené na stránke Podrobnosti o nehnuteľnosti alebo nie. Pretože dodatočné poplatky je možné zobraziť iba vtedy, ak je rezervácia uskutočnená v rámci určitých dátumov (napríklad pre sezónne ovocie), mali by ste sa uistiť, že nastavili dátumy Platné od a Do. Keď vytvoríte voliteľné doplnky, môžete k nim nahrávať obrázky prostredníctvom Správcu médií. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Ako môžem prijímať platby online?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Ak chcete prijímať platby online, musíte mať účet u poskytovateľa online platieb, ktorý sa nazýva Gateway. Ak chcete zobraziť dostupné brány, prejdite na Konfigurácia vlastníctva> karta Brány. Kliknite na názov brány, ktorú chcete použiť. na jeho konfiguračnú stránku. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Môžem poskytnúť zľavy?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Je možné poskytovať zľavy, existuje niekoľko spôsobov, ako to urobiť. Ak robíte rezerváciu v mene zákazníka, môžete si v rezervačnom formulári nastaviť vlastné súčty vkladov a rezervácií.\" , pomocou polí Override Accommodation Total a Override Deposit (hostia túto funkciu nemôžu použiť). Ďalším spôsobom, ako poskytnúť hosťovi zľavu, je vytvorenie zľavových kupónov, ktoré je možné nakonfigurovať tak, aby ich bolo možné použiť iba medzi určitými dátumami (platné od/do) alebo sa uplatňuje iba vtedy, ak rezervácia spadá medzi určité dátumy (rezervácia platí od/do). Tieto zľavové kupóny je možné priradiť iba jednému hosťovi, alebo ak chcete, kupóny si môžete vytlačiť. Výtlačok obsahuje QR kód ktoré môžu hostia naskenovať do svojich telefónov a tak sa dostať k vášmu rezervačnému formuláru so zľavovým kódom, ktorý už platí. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Bookings');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Keď kliknem na položku Nová rezervácia, prejdem na kontaktný formulár, prečo?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Predtým, ako budete môcť vykonávať rezervácie online, musíte najskôr nakonfigurovať niektoré ceny (tarify) pre každý typ miestnosti, ktorú máte vo svojom skutočnom svete. Keď vytvoríte niektoré tarify, budete môcť prijímať rezervácie. . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Čo sú čierne rezervácie?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Čierne rezervácie sú rezervácie, ktoré boli vytvorené s cieľom vyradiť izbu alebo miestnosti z prevádzky. Nie sú priradené žiadnym hosťom a sú užitočné napríklad vtedy, ak je potrebné izbu zrekonštruovať.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Obrázky');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Ako môžem nahrať obrázky?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Ak chcete nahrať obrázky, musíte navštíviť stránku Nastavenia> Media Center. Na tejto stránke uvidíte niekoľko panelov. V hornej časti sa môžu zobrazovať niektoré poznámky a pod nimi rozbaľovacia ponuka. Táto rozbaľovacia ponuka vám umožňuje vybrať, pre ktorý zdroj obrázky odovzdávate. <br/> Vpravo je stĺpec s možnosťami Pridať obrázky, Vymazať zoznam a Odovzdať všetko. Kliknite na položku Pridať obrázky a vyberte obrázky z počítača alebo mobilného zariadenia. Keď urobili ste to, stĺpec sa zmení na zoznam miniatúr. Odtiaľto môžete odovzdať jeden alebo viac obrázkov pre svoje zdroje. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Aký je 'hlavný' obrázok?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Hlavný obrázok je ten, ktorý sa zobrazuje vo výsledkoch vyhľadávania a v hlavičke vášho majetku (oblasť v hornej časti stránok, ktorá ukazuje niečo o vašom vlastníctve). Mali by ste zvoliť obrázok, ktorý zobrazuje vašu vlastnosť v najlepšie možné svetlo. Ak chcete nahrať hlavný obrázok, uistite sa, že je v rozbaľovacom zozname vľavo hore vybratá možnosť Hlavný obrázok vlastnosti, a potom nahrajte jeden alebo viac obrázkov. Ak nahráte viac ako jeden obrázok, pri vyhľadávaní sa použijú všetky obrázky stránka s výsledkami sa zobrazuje ako malá prezentácia. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Čo sú ikony funkcií miestnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Funkcie miestnosti môžu vytvárať používatelia režimov Micromanage alebo Rozšírené úpravy taríf. Tieto je možné prepojiť s jednou alebo viacerými miestnosťami a zobraziť ich v rezervačnom formulári. Po vytvorení funkcie miestnosti môžete nahrajte obrázok pre túto funkciu tak, že najskôr v rozbaľovacom zozname v Centre médií vyberiete Ikony funkcií miestnosti a potom z rozbaľovacieho zoznamu, ktorý sa zobrazí pod ním, vyberiete názov funkcie miestnosti. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Ako môžem nahrať obrázky z miestnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Miestnosti môžu vytvárať používatelia režimov Micromanage alebo Rozšírené úpravy taríf. Po vytvorení jednej alebo viacerých miestností môžete prostredníctvom Media Center nahrať viac obrázkov pre každú izbu (vyberte názov miestnosti/číslo po v rozbaľovacom zozname vyberte položku Obrázky izieb). Tieto obrázky je možné zobraziť v prezentácii tak, že sa pozriete na stránku Náhľad a vyberiete kartu Naše izby a potom kliknete na odkaz Dostupnosť. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Ako nahrám obrázky z prezentácie?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Obrázky prezentácií sú zobrazené na stránke Podrobnosti o nehnuteľnosti (Náhľad), vedľa tlačidla Rezervovať.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Ako môžem nahrať obrázky navyše?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Podobne ako pri izbách a funkciách miestností, musíte najskôr vytvoriť Extra. Keď to bude hotové, v hornom rozbaľovacom zozname vyberte Extras. Keď to urobíte, musíte vybrať názov Extra z rozbaľovacieho zoznamu nižšie. Keď je vybratý názov, môžete pre tento Extra nahrať jeden alebo viac obrázkov. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'niečo súvisiace s hosťom');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'How do I blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'You blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Ako uložím popisy vo viacerých jazykoch?');
    
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Ak chcete uložiť popisy vo viacerých jazykoch, najskôr navštívte stránku Nastavenia> Podrobnosti o majetku. Uložte tam popis svojho vlastníctva. Ďalej zmeňte jazyk, v ktorom si web prezeráte. Teraz prejdite na položku Nastavenia Znova zadajte stránku Podrobnosti o nehnuteľnosti a znova uložte podrobnosti. Ak teda web dokáže zobrazovať angličtinu aj španielčinu (alebo akékoľvek iné) jazyky, vybrali by ste angličtinu, zadajte popis v angličtine a kliknite na tlačidlo Uložiť. Ďalej zmeňte aktuálny stav jazyk do španielčiny, potom uložte nový popis španielčiny. Funguje to pre všetky vstupy na tejto stránke. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Môžem na tomto webe upravovať ďalšie vlastnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nie, nemôžete. Spravovať môžete iba vlastnosti, ktoré ste vytvorili alebo ku ktorým ste boli priradení ako správca nehnuteľností.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Môžem na tomto webe upravovať ďalšie vlastnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Áno, môžete, ste Super Property Manager a môžete upravovať akékoľvek vlastnosti zobrazené na stránke Vlastnosti zoznamu.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Aké sú typy hostí/Ako sa môžem zmeniť na osobu za noc?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "V Nastaveniach> Konfigurácia majetku> Karta Tarify a meny sa môžete rozhodnúť, či chcete účtovať poplatky za osobu za noc. Ak účtujete za osobu za noc, budete musieť vytvoriť jeden alebo viac typov hostí. Môžete vytvoriť jednoduchý typ hosťa, v ktorom ho iba popíšete (napr. Osoby), alebo môžete vytvoriť niekoľko rôznych typov hostí, napríklad \"Dospelí\" a \"Deti do 10 rokov\". Pre deti, ak chcete ponúknuť zľavu 50%, potom by ste nastavili \"Je percento\" na Áno a hodnotu rozptylu na 50. Izby majú základné sadzby, toto nastavenie vám umožní upraviť cenu izby podľa typu hosťa. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Aké sú funkcie miestnosti?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Vlastnosti miestnosti sú veci, vďaka ktorým miestnosť vynikne. Môžu to byť niečo jednoduché, ako napríklad zariadenie na prípravu čaju a kávy, alebo to môžu byť veci, vďaka ktorým sa miestnosť skutočne zvýši nad ostatné, napríklad 'Pohľad na bay '. Keď vytvoríte funkciu miestnosti, môžete pre túto funkciu nahrať obrázky do multimediálneho centra. Tieto funkcie miestností si môžete pozrieť na stránke dostupnosti izieb a ak ste svoje zariadenie nakonfigurovali tak, aby zobrazovalo štýl zoznamu klasických izieb (kde si hostia môžu presne vybrať, ktorú izbu si chcú rezervovať) potom môžu pomocou funkcií izieb filtrovať údaje uvedené v rezervačnom formulári. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Platby');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Platobnú bránu nemôžete vidieť po vykonaní rezervácie.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Ak ste prihlásení ako správca nehnuteľností, platobnú bránu neuvidíte, pretože neplatíte sami. Bránu pri rezervácii uvidia iba používatelia, ktorí nie sú správcami.");

