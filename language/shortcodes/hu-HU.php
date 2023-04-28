<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Ez a tulajdonság cpanel címlapja.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Ez a tulajdonságszalagdiagram, amely áttekintést nyújt a valós idejű foglalásokról, a rendelkezésre állásról és a foglaltságról.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Ez a szkript lehetővé teszi a felhasználó számára, hogy több tulajdonságot hasonlítson össze egymással, legfeljebb 3 tulajdonsággal.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Tulajdonságok vesszővel elválasztott listája, pl. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Létrehozza a kapcsolattartó űrlapját.');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Adja át a felvenni kívánt tulajdonság tulajdonság -azonosítóját. Ehelyett adja meg a 0 (nulla) értéket a webhely adminisztrátorának.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Megjeleníti a Cégadatok oldalt, amely letölti a részleteket az ingatlankezelő Cégadatok mezőjéből a Tulajdonság -konfigurációban. Az ezen a lapon szereplő adatok általában levelezésre szolgálnak, lehetővé téve a vezetők számára, hogy mind a szálloda/apartman címét, mind külön cím üzleti célokra. ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Megjeleníti az ingatlan naptárát");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Adja át a megjelenítendő tulajdonság tulajdonság -azonosítóját.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Hónapok megjelenítése, az alapértelmezett érték 24, ha nincs másként beállítva. Nem kompatibilis a Csak hónap megjelenítése változóval.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Állítsa ezt 1 -re, ha csak az aktuális hónapot akarja megjeleníteni. A hónap_megjelenítés beállítás figyelmen kívül marad, ha a show_just_monthode -t használja, vagy nem használja ugyanazt, ugyanabban az időben.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Csak a tulajdonságleíró szöveget mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Csak a tulajdonságleíró szöveget mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Csak a tulajdonságokat mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Csak a Tulajdonság fejléc sablont mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Csak az ingatlan szobatípusait mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Csak a tulajdonság főképét mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Csak az ingatlan térképét mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Megjeleníti a tulajdonság További információ szövegét.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'gmaps -re mutató QR -kód. Ezt be lehet szkennelni egy telefonba egy qr -kód olvasó alkalmazással, amely útmutatást ad az ingatlanhoz.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Megjeleníti egy ingatlan véleményét.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Megjeleníti egy ingatlan áttekintő összefoglalóját.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Egyedi szobát mutat.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'A szoba azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Megjeleníti az ingatlan szobáit.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Diavetítésként megjeleníti az ingatlan szobaképét.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Megjeleníti a tulajdonság diavetítését.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Az ingatlan tarifáit mutatja.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'az ingatlan azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Megjeleníti a webhely üzleti címét a Webhely -konfiguráció> Az Ön vállalati adatai részben megadva.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Megjeleníti a tulajdon feltételeit.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'a tulajdon azonosítója.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Megjeleníti a tulajdon felhasználói felületét, amely eltér a fő naptártól, és a Jquery felhasználói felület naptárfunkcióján alapul.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Adja át a megjelenítendő ingatlan tulajdonság -azonosítóját.');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Állítsa ezt 1 -re, hogy ne jelenjen meg a jelmagyarázat.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Megjeleníti a keresési eredményeket, amelyeket keresési paraméterek hozzáadásával lehet javítani. Nem javasoljuk, hogy egyszerre használja az összes paramétert, mert túlságosan korlátozott keresési feltételeket kap. Ehelyett csak egy vagy két paraméterre kell korlátoznia magát, pl. Keresés ország és csillagszám alapján. ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Keresés ország szerint, az ISO Alpha-2 kód használatával, pl. GB vagy DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Régió szerinti keresés. Mivel a régiók az adatbázisban vannak mentve, a régióazonosítót kell használnia. Látogassa meg a Rendszergazda> Jomres> Webhelyszerkezet> Lista régiók elemet, és vigye a Szerkesztés linket, ott láthatja a régió azonosító számát . ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'A keresni kívánt város teljes neve.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Konkrét tulajdonságokkal rendelkező ingatlanok keresése. A funkcióazonosítók megtalálhatók a Rendszergazda> Jomres> Webhelyszerkezet> Tulajdonságok menüpontban.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Bizonyos szobatípusú ingatlanok keresése. A szobatípus azonosítók megtalálhatók a Rendszergazda> Jomres> Webhelyszerkezet> Szobatípusok menüpontban.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Egy adott tulajdonságtípus tulajdonságainak keresése. A tulajdonságtípus -azonosítók megtalálhatók a Rendszergazda> Jomres> Webhelyszerkezet> Tulajdonságtípusok részben.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Ingatlan keresése egy adott árkategóriában.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Olyan ingatlanok keresése, akiknek a tarifái megengedik bizonyos értékű vendégek számát, például 6 fős partikat.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'N csillag tulajdonságainak keresése.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Keresés érkezési dátum szerint. Kombinálni kell az indulási dátum paraméterével');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Keresés indulási dátum szerint. Kombinálni kell az érkezésiDátum paraméterrel');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Keresés ingatlankategória szerint.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Tekintse meg az ügynök oldalát. Bármelyik tulajdonság -azonosítót megadhatja, vagy magát az ügynök azonosítóját, ha tudja.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "A property uid, this will show the property agent.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "A menedzser adatbázis -azonosítója, ha ismert.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Megjeleníti a népszerű tulajdonságokat, amelyeket általában modul- vagy widget -pozíciókban használnak.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'A megjeleníthető tulajdonságok maximális száma.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Csak ezen tulajdonságtípusok tulajdonságainak megjelenítése.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Állítsa 1 -re a függőleges widget/modul pozícióra optimalizált modulok megjelenítéséhez.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Megjeleníti a tulajdonságok véletlenszerű kiválasztását, jellemzően modul- vagy widget -pozíciókban.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'A megjeleníthető tulajdonságok maximális száma.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Csak ezen tulajdonságtípusok tulajdonságainak megjelenítése.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Állítsa 1 -re a függőleges widget/modul pozícióra optimalizált modulok megjelenítéséhez.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Megjeleníti a vendég legutóbb megtekintett tulajdonságait, amelyeket általában modul- vagy widget -pozíciókban használnak.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'A megjeleníthető tulajdonságok maximális száma.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Állítsa 1 -re a függőleges widget/modul pozícióra optimalizált modulok megjelenítéséhez.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Számos tulajdonságot jelenít meg, amelyeket általában modul- vagy widget -pozíciókban használnak.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'A megjeleníteni kívánt ingatlanok azonosítói.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Állítsa 1 -re a függőleges widget/modul pozícióra optimalizált modulok megjelenítéséhez.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Megjeleníti a pénznemválasztó legördülő menüt.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Az alternatív sablonkimenet engedélyezése/letiltása. Ezt a kimenetet a Bootstrap eszköztáraiban kell használni.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Megjeleníti a kosár oldalt.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Megjeleníti a kosár modult/widgetet.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Megjeleníti a Főmenüt. Megjegyzés: ha a mainmenu_wrapper_alternate.html testreszabott verzióját futtatja például a/templates/jr_leohtian/html/com_jomres_<módosítani < /i> a MENU_LOCATION göndör zárójelekbe csomagolva. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ezen az oldalon képeket tölthetsz fel az ingatlanodhoz és az általad kínált dolgokhoz. Egy főgombja van, és egy második gomb, amely lehetővé teszi a képek feltöltéséhez szükséges erőforrások kiválasztását. Tehát a Fő tulajdonság a kép és a diavetítés csak egy gombot jelenít meg, de ha létrehozott pl. opcionális extrákat vagy szobákat, akkor megjelenik egy második gomb, amelyre képeket tölthet fel az adott erőforrásokhoz. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ezen az oldalon képeket tölthetsz fel az ingatlanodról és az általad kínált dolgokról. Egy főgombja van, és egy második gomb, amely lehetővé teszi a képek feltöltéséhez szükséges erőforrások kiválasztását. Tehát a Fő tulajdonság a kép és a diavetítés csak egy gombot jelenít meg, de ha létrehozott opcionális extrákat, akkor megjelenik egy második gomb, amelyre képeket tölthet fel az adott erőforrásokhoz. ');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Először válassza ki a feltölteni kívánt kép (eke) t a Kép hozzáadása gombra kattintva, vagy húzza át. Ezek a jobb oldali oszlopban jelennek meg. </li>
  <li> E terület felett a \"Válassza ki az erőforrást \" gombbal válassza ki, hogy melyik erőforráshoz kíván képeket feltölteni. Lehet, hogy felajánlja a lehetőséget, hogy egy adott erőforrást válasszon alatta. </li>
  <li> Miután kiválasztotta az erőforrást, kattintson a Kép feltöltése gombra a kép alatt, és társítsa azt az adott erőforrással. A kép feltöltése után eltűnik a jobb oldali oszlopból, és megjelenik a bal oldalon. </li>
  <li> A meglévő képek melletti Kuka gomb segítségével távolítsa el azokat a képeket, amelyeket már nem szeretne megjeleníteni. </li>
  <li> A fájlok diavetítésben való megjelenítésének sorrendjét megváltoztathatja, ha a feltöltés előtt átnevezi őket, mivel az oldalak betűrendben jelennek meg. </li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Az Erőforrás gomb mellett egy Előnézet gomb látható. Ha erre kattint, megjelenik egy előugró ablak, amely megmutatja, hogy a jelenleg feltöltött képek hogyan fognak megjelenni egy oldalon. Ez segít Önnek elképzelés arról, hogy a képek hogyan fognak kinézni ügyfelei számára. ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Nincs korlátozva a feltölthető képek száma. A képek automatikusan átméreteződnek feltöltéskor. Csak JPG és PNG fájlokat tölthet fel.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideális esetben minden feltöltött kép legalább");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "képpont széles, különben homályosnak tűnhetnek a feltöltés után.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "A feltöltött képek nem lehetnek többek");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "méretben.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Válassza ki azt az erőforrást, amelyhez képeket szeretne feltölteni");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Speciális erőforrás");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Az ehhez az erőforráshoz már feltöltött képek");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Szövegformázás');
jr_define('_JOMRES_MARKDOWN_DESC', 'Itt írhat be szöveget egyszerű Markdown formázással. Nem kell ismernie semmilyen HTML -t, csak használja a gombokat, hogy az információk a kívántnak tűnjenek, vagy formázza a szöveget a példák szerint.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Kiemelés');
jr_define('_JOMRES_MARKDOWN_BOLD', 'félkövér');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'dőlt');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'áthúzás');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Fejlécek");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Nagy fejléc');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Közepes fejléc");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Kis fejléc');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Apró fejléc');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listák");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Általános listaelem');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Számozott listaelem');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Linkek');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Megjelenítendő szöveg');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Idézetek');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Ez egy idézet.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Több sorra is kiterjedhet!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Képek');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Táblázatok');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Oszlop');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Tulajdonképek megjelenítése diavetítésként a tulajdonságlistában?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ha igen, akkor a tulajdonság fő képeinek diavetítése jelenik meg. Ha nem, akkor az első tulajdonság fő képe jelenik meg.');

jr_define('EDIT_CMS_USER', 'CMS felhasználó szerkesztése');

jr_define('BOOKING_MADE_BY', 'A foglalást készítette');

jr_define('_JOMRES_ROUTER_FEATURES', 'Szolgáltatások');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Szobatípusok');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Külső foglalási űrlap URL -je');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Itt beállíthat egy külső URL -t, ha harmadik fél webhelyét szeretné használni a foglalásokhoz. Minden jomres foglalási gomb erre az URL -re mutat. Hagyja üresen ezt a mezőt, ha a Jomres foglalási űrlapot szeretné használni . ');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (rövid szobaleírás/felirat)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Szoba leírása');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Vendég feketelistája');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ha ez a vendég feketelistán szerepel, akkor többé nem foglalt helyet foglalni ezen a szálláshelyen.');
jr_define('_JOMRES_SESSION_HANDLER', 'Session handler');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'A jomres munkamenet -fájlok mentése lemezre vagy adatbázisba. Ajánlott: adatbázis');
jr_define('_JOMRES_MAP_HEIGHT', "Térképmagasság (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Térkép nagyítási szint");
jr_define('_JOMRES_MAP_MAPTYPE', "Térkép típusa");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Sablon felülbírálás kezelő");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "A sabloncsomagok olyan beépülő modulok, amelyek felülbíráló sablonokat biztosíthatnak a különböző alapvető Jomres sablonfájlokhoz.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ez az oldal felsorolja azokat a sablonfájlokat, amelyeket felülírhat egy sabloncsomag sablonfájlja. Ha felül szeretne írni egy bizonyos sablonfájlt, kattintson az adott fájl szerkesztés gombjára, a következő oldalon kiválaszthatja, hogy melyik verzióval kívánja felülbírálni. Megjegyzés: ezek a felülbírálások elsőbbséget élveznek mind a Jomres Core, mind a Wordpress vagy Joomla téma/sablon felülbírálásokkal szemben. A felülbírálást letilthatja, ha törli a Lista sablon felülbírálás oldalán. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Sablon neve");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Aktuális útvonal");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nincs felülírva");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Kiválaszthatja, hogy melyik sablonfájl felülírja a Core sablonfájlokat a legördülő menü megváltoztatásával");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Foglalt szobák százalékos aránya");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Megjeleníti az új tulajdonság űrlap létrehozását.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Térkép nagyítás, 1: Világ 5: Föld/kontinens 10: Város 15: Utcák 20: Épületek');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Megjelenítendő értékelések száma');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Megjeleníti a felhasználók kiválasztott tulajdonságait. Ha a felhasználó regisztrálva van, akkor ezek a kedvencek, ha nincs bejelentkezve, akkor csak a Kedvenc ikonon keresztül hozzáadott elemek a látogatás során.');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimális letéti érték');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ha a számított befizetés kisebb, mint ez az érték, akkor állítsa be a letétet erre az értékre. Ez a szám önmagában felülírható, ha nem felel meg a webhely minimális letétbeállításának. Hagyja 0-ra állítva ne használja a beállítást. ");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Megmutatja a GDPR -kompatibilis űrlapot.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Szobatípusok listája');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Ingatlan szobatípus megjelenítése');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'A bejelentkezési űrlap megjelenítése');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Bizonyos szobatípusok listájának megjelenítése');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Szoba típusazonosító');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Műszerfal');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'A szindikált ingatlanok listáját mutatja');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'A megjelenítendő szindikált tulajdonságok száma');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Az MRP -k (szállodák/panziók) vagy az SRP -k (nyaralók/apartmanok/villák) megjelenítése. Az alapértelmezett érték az aktuális ingatlanból származik, ha az MR -tulajdonság nem. Egy adott típus kiválasztásához állítsa ezt az értéket 0 értékre srps vagy 1 értékre mrps esetén. ');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Egy tulajdonság csillagait mutatja. Ezek a Tulajdonság konfigurációjában vannak beállítva, ha a tulajdonság MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'tulajdon azonosítója');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Opcionális. Ha a tulajdonságazonosító nincs beállítva, átadhat helyette egy számot.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Opcionális. Alternatív sablon elérési út. Nem adható át url-en keresztül. Abszolútnak kell lennie.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Opcionális. Alternatív sablonnév.');

	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET', "Tulajdonságmodul típusú kimenetet jelenít meg rövid kódokkal történő elhelyezéshez. A tulajdonságmodul kimenete a tulajdonságok részleteinek egy kis részlete, amelyet úgy terveztek, hogy az oldal különböző helyein megjelenjen.");
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID', 'Opcionális. A tulajdonság azonosítója. Ha a tulajdonságazonosító nincs beállítva, akkor egy véletlenszerűen közzétett tulajdonság jelenik meg.');
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME', 'Opcionális. Alternatív sablonnév, ".html" nélkül. A sablonnak léteznie kell a sablonfelülírási könyvtárban. Ez lehetővé teszi a "basic_module_output.html" testreszabott verzióinak használatát a különböző helyeken. ');