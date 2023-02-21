<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('VIDEO_TUTORALS_TITLE', 'Videó oktatóanyagok');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Vezérlőpult');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Ez az oktatóanyag bemutatja a Tulajdonkezelés vezérlőpult használatát.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Idővonal');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Az idővonal naptárának használata. Ebben a videóban új vendéget hozunk létre azáltal, hogy megadjuk adataikat az előugró ablakban, a meglévő vendégek pedig újra felhasználhatók, ha a felugró ablak legördülő menüjében kiválasztják a nevüket.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'List Properties');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Hogyan használhatom a Lista tulajdonságai oldalt további információk megtekintéséhez, oszlopok megváltoztatásához és konkrét tulajdonságok kereséséhez?');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'A tulajdon adatainak szerkesztése');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Az ingatlan adatainak szerkesztése, beleértve a térkép húzását a tartózkodási hely beállításához.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Változtatási mód módosítása');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'A tarifaszerkesztési mód határozza meg azt a módszert, amellyel az ingatlanárakat beállíthatja. Ezt a Tulajdon beállítása oldalon teheti meg.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normál tarifaszerkesztési mód szállodákra, panziókra, panziókra');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'A normál tarifaszerkesztési mód egy egyszerű tarifaszerkesztési funkció, amely lehetővé teszi, hogy kiválassza az ingatlan szobáinak számát, a szoba árát, az egyes szobákban elszállásolható vendégek számát és a vendégek maximális számát) félben. Mentéskor ezek az árak a következő 10 évre érvényesek. ');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Normál tarifaszerkesztés villákhoz és apartmanokhoz');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'A normál tarifaszerkesztési mód egy egyszerű tarifaszerkesztési funkció, amely lehetővé teszi az ingatlan altípusának, az ingatlan éjszakánkénti árának és a partiban tartózkodó vendégek maximális számának kiválasztását. Mentéskor ezek az árak majd a következő 10 évre érvényes. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tarifaszerkesztési mód (ajánlott)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'A Micromanage tarifaszerkesztési mód lehetővé teszi, hogy beállítsa az árat és azt a minimális napszámot, amelyre a tartózkodás érvényes lehet, az év minden napjára. Ez egy hatékony eszköz, amely teljes ellenőrzést biztosít Ebben a példában megmutatjuk, hogyan hozhat létre többféle árkészletet ugyanahhoz a szobatípushoz, hogyan állíthat be különböző árakat a különböző időszakokra és más árakat a hét bizonyos napjain belül egy időszakon belül. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Micromanage tarifaszerkesztési mód villákhoz/lakásokhoz (ajánlott)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'A Micromanage tarifaszerkesztési mód lehetővé teszi, hogy beállítsa az árat és a tartózkodási idő minimális számát az év minden napjára. Ez egy hatékony eszköz, amely teljes ellenőrzést biztosít Ebben a példában megmutatjuk, hogyan hozhat létre többféle árkészletet. Különböző árakat állítunk be a különböző időszakokra, és eltérő árakat a hét bizonyos napjain egy adott időszakon belül. Ha ez megtörtént, több tarifát hozunk létre ugyanazon ingatlan, de különböző vendégszámokkal, amelyek lehetővé teszik számunkra, hogy pontosan ellenőrizzék az árakat minden forgatókönyv esetén. ');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Különböző tarifák a különböző vendégszámokhoz');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Több tarifát is létrehozhat ugyanahhoz a szobatípushoz, tehát ha különböző árakat szeretne különböző vendégek számára, akkor megteheti.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Személyenként és éjszakánként - Vendégtípusok');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Személyenként és éjszakánként díjat kell létrehoznia vendégtípusoknak. A különböző vendégtípusok eltérhetnek a szoba alapárától, így a különböző korú gyermekek életkoruktól függően eltérő kedvezményekben részesülhetnek. nem kell személyenként és éjszakánként díjat fizetnie a vendégtípusok használatáért, akkor is használhatja őket, ha átalánydíjat számít fel, de továbbra is meg szeretné ragadni a vendégek számát, vagy mert korlátozni szeretné a foglalásban szereplő vendégek számát. ');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Médiaközpont - Képfeltöltés');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Minden kép a médiaközponton keresztül kerül feltöltésre. Ebben a videóban feltöltjük a fő tulajdonságképet, néhány diavetítéses képet, a keresési eredményoldalon megjelenítendő képek kis válogatását és az egyik képét. a szobák.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Médiaközpont - Képfeltöltés');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Minden kép a médiaközponton keresztül kerül feltöltésre. Ebben a videóban feltöltjük a fő tulajdonságképet, a keresési eredményoldalon megjelenítendő képek kis válogatását és néhány diavetítéses képet.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Rendszergazda vezérlőpult');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Ez az alapértelmezett céloldal a rendszergazdai területen. Megtekintheti a különböző webhelystatisztikák összefoglalóját, és megtekintheti, hogy mely tulajdonságok léteznek a rendszerben, melyek teljesek, melyek befejeződtek, és a jóváhagyás előtt felülvizsgálatra várnak. . Miután egy ingatlant jóváhagytak, azt az ingatlankezelő közzéteheti. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, telepítés és használat');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Ez a videó bemutatja a Bővítménykezelő használatát, beleértve a bővítménykezelő telepítését, majd a beépülő modul telepítését és eltávolítását. Ha nincs licenckulcsa, akkor meg kell adnia a mentést a Webhelyen Konfiguráció a kezelő telepítése előtt. Ha még nem használta a bővítménykezelőt, akkor ez a lista kezdetben üres lesz, ebben a példában már telepítettem több bővítményt. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Ingatlankezelők');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Tulajdonkezelők kétféleképpen adhatók hozzá. Vagy saját maguk hoznak létre tulajdonságokat (letilthatók a webhelykonfigurációban), vagy a webhely adminisztrátora hozzárendelhet egy meglévő kezelőt bizonyos tulajdonságokhoz. A menedzserek csak a hozzájuk tartozó tulajdonokhoz férhetnek hozzá. létrehoztak, vagy hozzá vannak rendelve. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Beléptetés');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'A Hozzáférés -vezérlés funkcióval letilthatja a menüpontokat, csak bizonyos felhasználói csoportok számára láthatja őket, vagy akár teljesen eltüntetheti őket. Ha a menüsornak nincs megjeleníthető menüopciója, akkor teljesen eltűnik, így ha nem szeretné, hogy a webhely látogatói bármilyen lehetőséget láthassanak, akkor egyszerűen beállíthatja, hogy az összes lehetőség látható legyen például a bejelentkezett felhasználók számára. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Ingatlan- és szobatípusok');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Ebben a videóban két fontos fogalmat fog látni. Az első a tulajdon típusok és a hozzájuk tartozó szobatípusok létrehozása. Azt is látni fogja, hogy egy regisztrált felhasználó, aki még nem menedzser, létrehozza saját tulajdonát, és menedzser (de csak az általuk létrehozott tulajdont tudja konfigurálni). ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Térképjelzők feltöltése');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Térképjelölők feltöltésére használja a Médiaközpontot. <a href="https://mapicons.mapsmarker.com/" target="_blank"> A jelölők nagyszerű forrása itt található. < /a> Az ingatlan jellemzőinek, szobai jellemzőinek, szobatípusainak és másoknak a feltöltése ugyanaz. ');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Tulajdonságok');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Ebben a videóban megmutatjuk, hogyan hozhat létre tulajdonságokat, és képeket tölthet fel hozzájuk.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Rövid kódok');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'A rövid kódok a Jomres kivételesen erőteljes tulajdonságai. Az elv ugyanaz a Joomla és a Wordpress esetében is. Ebben a videóban megmutatjuk, hol tekinthetők meg a rövid kódok (ez a lista attól függően változik, hogy mely bővítményekről van szó) telepítve) és hogyan kell használni őket. A kódokat felhasználhatja cikkekben vagy modulokban. ');
	
jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Naplófájlok');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Ez a videó megmutatja, hogyan tekintheti meg a naplófájlokat. Széles körű naplózás történik a rendszer futtatásakor. Gyártási módban (Site Config> Hibakeresés) kevesebb napló jön létre, így ha új szolgáltatást tesztel, akkor webhelyét fejlesztésre kell állítania. Ha saját naplózását szeretné hozzáadni a Jomres-szkriptekhez, tekintse meg a <a href="https://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> kézikönyv oldalunk, hogyan kell csinálni. </a> Itt hamis hibát dobunk, majd megtekintjük a naplófájlt. Mivel a webhely fejlesztési beállításra van állítva sok információ van, általában csak egy üzenetet lát, amely azt mondja, hogy hiba történt, és azt jelentették. ');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Címkék és egyéb karakterláncok fordítása');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Számos módja van a nyelvi karakterláncok lefordítására a Jomres-ban, szerkesztheti a nyelvi fájlokat, de frissítéskor felülírhatók. Ehelyett azt javasoljuk, hogy használja a beépített fordítóeszközöket, amelyek egyedülállóak a Ha a karakterlánc egy űrlapba beírt valami, például egy szobatípus neve, akkor használja a Címke szerkesztés oldalt. Ha a karakterlánc a nyelvi fájlból származik, akkor használhatja a Nyelvfájlok szerkesztő eszközt. Csak használja a böngésző keresőeszközét a módosítani kívánt karakterlánc megtalálásához, majd kattintson a linkre a módosításához. Ezek a módosítások az adatbázisba kerülnek, és ezért frissítésbiztosak. A különböző tulajdonságtípusokhoz különböző címkék tartozhatnak, így módosítsa az Új tulajdonságot új kempingre, például úgy, hogy a címke megváltoztatása előtt megváltoztatja a Nyelv kontextus legördülő menüt az oldal tetején. ');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Tulajdonságok hozzáadása');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> Ebben a szakaszban a Jomres -t telepítették a CMS -be, és hozzáadták a kezelőfelület menüjéhez (vagy a Wordpress -ben létrehozott egy oldalt, és hozzáadta az alapvető Jomres -rövidkódot). </ p>
<p> Itt láthatja, hogy egy regisztrált felhasználó, aki még nem vagyonkezelő a Jomres -ban, hogyan hozhat létre új tulajdont, konfigurálhat néhány alapvető beállítást és közzéteheti azt. </p>
<p> A végén látni fogja, hogy a kezelőt automatikusan ingatlankezelővé állították be, de ők csak saját tulajdonukat konfigurálhatják. </p>
<p> Bár a Wordpress kezelőfelülete másképp néz ki, a folyamat pontosan ugyanaz a Joomla vagy a Wordpress esetében. </p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Ingatlan kategóriák');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'A Tulajdonkategóriák egy egyszerű szolgáltatás, amely lehetővé teszi, hogy az ingatlankezelők hozzárendeljék tulajdonságaikat egy bizonyos kategóriához. A webhely rendszergazdái rövid kódokat hozhatnak létre, amelyek felsorolják a kategória összes tulajdonságát, amint ez a videóban látható.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'A webhely rendszergazdája a tulajdonságok megtekintése');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Nem innen kezelheti az ingatlanokat, csak a kezelőfelületről kezelheti a tulajdonokat, azonban ebben a listában láthatja azokat a tulajdonságokat, amelyek jóváhagyásra várnak (ha a szolgáltatás engedélyezve van), és bármelyik hiányos (pl. még mindig fel kell töltenie képeket, meg kell határoznia az árakat stb.). Kattintson a tulajdonság nevére, amely az adott ingatlan irányítópultjára kerül. Ezután használhatja az oldal tetején található útmutató szakaszokat a lépések megtekintéséhez egy ingatlan kitöltéséhez és közzétételéhez szükséges. </p> ');
