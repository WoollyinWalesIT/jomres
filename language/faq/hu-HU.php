<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Gyakran ismételt kérdések');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Tulajdonságok');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Hogyan hozhatok létre egy tulajdont?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kattintson a Tulajdonságok> Új tulajdonság elemre egy új tulajdonság hozzáadásához.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Hogyan láthatom, hogyan néz ki az ingatlanom a vendégek számára?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kattintson a Tulajdonságok> Előnézet lehetőségre, hogy megnézze, hogyan néz ki az ingatlan a vendégek számára.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Hogyan adhatok hozzá szobákat?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "A szobák hozzáadásának módja a tarifaszerkesztési módtól függ. Normál tarifaszerkesztési módban nem kell szobákat hozzáadnia, mivel azok automatikusan hozzáadódnak az árak konfigurálásakor. Ha Mikromenedzsment vagy Speciális tarifaszerkesztési mód, majd a Beállítások> Szobák menüpontban hozzáadhat, szerkeszthet és törölhet szobákat. Létrehozhat szobai funkciókat, és hozzárendelheti ezeket a funkciókat ezekhez a helyiségekhez. Ezenkívül képeket tölthet fel egyénileg szobák a Médiaközpont használatával. Szobák létrehozásakor ügyeljen arra, hogy azok tükrözzék a tulajdonában lévő valós szobákat, mert így könnyebben kezelhetők. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Hogyan állíthatom be a szobaárakat?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Ez a tarifaszerkesztési módtól függ. Ha a Normál tarifa szerkesztési módot használja (Tulajdonság beállítása> Díjszerkesztési módok lap), akkor beállíthatja a szobák számát, az árat és a az egyes szobákban elszállásolható személyek száma és a foglalások összesített száma. Ez az üzemmód lehetővé teszi a szobaárak beállítását a következő 10 évre. <br/> Ha a Speciális vagy a Mikromenedzsment tarifaszerkesztési módot használja, akkor képes lesz szobaárakat beállítani minden napra az elkövetkező években. Ugyanazon szobatípusra több tarifa is vonatkozhat, például az egyik díj a Bed & Breakfast, a másik pedig a Bed, Breakfast & Evening étkezésre vonatkozik. , azt javasoljuk, hogy mindig használja a Micromanage szolgáltatást, a Speciális ugyanúgy fog működni, de vigyáznia kell arra, hogy a különböző tarifák kezdő és befejező dátuma egymás után legyen. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Hogyan hozhatok létre opcionális extrákat?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Extrák hozzáadhatók a foglalásokhoz, és a Beállítások> Extrák menüpontban konfigurálhatók. Ezek lehetnek opcionálisak vagy\" kényszerítettek \", más szóval a vendég nem törölheti őket a foglalásban. Különböző módszereket kínálhat az opcionális extrák díjától, valamint attól, hogy megjelennek -e a tulajdon részletei oldalon. Mivel az extrák csak akkor jeleníthetők meg, ha a foglalás bizonyos dátumokon belül van (például szezonális gyümölcsök esetében), győződjön meg arról, hogy állítsa be az Érvényes kezdő és a dátumot. Miután létrehozta az opcionális extákat, feltöltheti azokat a képekhez a Médiakezelőn keresztül. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Hogyan fogadhatok fizetéseket online?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Ha online szeretne fizetni, rendelkeznie kell egy online fizetési szolgáltatónál vezetett fiókkal, amelyet átjárónak neveznek. Az elérhető átjárók megtekintéséhez lépjen a Tulajdonság -konfiguráció> Átjárók fülre. Kattintson az átjáró nevére annak konfigurációs oldalára. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Adhatok kedvezményeket?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Kedvezmények adhatók, ezt többféleképpen lehet megtenni. Ha az ügyfél nevében foglal, akkor a foglalási űrlapon beállíthatja saját befizetési és foglalási összegeit. , a Szállás teljes összegének felülbírálása és a Befizetés felülbírálása mezők használatával (a vendégek nem használhatják ezt a funkciót). Egy másik módja annak, hogy kedvezményt adjon a vendégnek, kedvezményes kuponok létrehozása, amelyek úgy konfigurálhatók, hogy csak bizonyos dátumok között használhatók fel (Érvényes tól/ig), vagy csak akkor alkalmazható, ha a foglalás bizonyos dátumok közé esik (A foglalás ettől/ig érvényes). Ez a kedvezményes kupon csak egy vendéghez rendelhető, vagy ha szeretné, kinyomtathatja a kuponokat. A nyomtatás QR -kódot tartalmaz amelyet a vendégek be tudnak szkennelni a telefonjukba, és a foglalási űrlapra irányítják, és a kedvezménykód már érvényes. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Foglalások');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Amikor az Új foglalás gombra kattintok, a Kapcsolatfelvételi űrlapra kerülök, miért?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Mielőtt online foglalhat, először be kell állítania bizonyos árakat (tarifákat) a valós ingatlanban lévő minden szobatípusra. Miután létrehozott néhány tarifát, foglalásokat fogadhat el. . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Mik azok a fekete foglalások?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "A fekete foglalások olyan foglalások, amelyeket azért hoztak létre, hogy megszüntessenek egy szobát vagy szobákat. Nem kapcsolódnak vendéghez, és hasznosak például, ha egy szobát kell felújítani.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Képek');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Hogyan tölthetek fel képeket?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "A képek feltöltéséhez látogasson el a Beállítások> Médiaközpont oldalra. Ezen az oldalon több ablaktáblát fog látni. Az oldal tetején néhány jegyzet látható, alattuk pedig egy legördülő menü. Ez a legördülő menü lehetővé teszi, hogy kiválassza, melyik erőforráshoz tölt fel képeket. <br/> A jobb oldalon egy oszlop található a Képek hozzáadása, a Lista törlése és az összes feltöltése lehetőséggel. Kattintson a Képek hozzáadása elemre, és válasszon ki néhány képet az asztali számítógépről vagy mobileszközéről. ezt megtette, az oszlop miniatűrök listájára változik. Innen feltölthet egy vagy több képet az erőforrásaihoz. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Mi a\" fő \"kép?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'A fő kép az, amely megjelenik a keresési eredményekben és a tulajdon fejlécében (az oldalak tetején lévő terület, amely valamit mutat a tulajdonáról). Válasszon egy olyan képet, amely megjeleníti a tulajdonát a a lehető legjobb megvilágítás. Egy főkép feltöltéséhez győződjön meg arról, hogy a Tulajdon fő képe van kiválasztva a bal felső sarokban található legördülő listában, majd töltsön fel egy vagy több képet. Ha több képet tölt fel, akkor az összes kép felhasználásra kerül a keresésben az eredményoldal kis diavetítésként jelenik meg. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Mik azok a szobai funkcióikonok?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "A szobafunkciókat a Micromanage vagy a Speciális tarifaszerkesztési módok felhasználói hozhatják létre. Ezek egy vagy több szobához kapcsolhatók, és megjelennek a foglalási űrlapon. Miután létrehozott egy szobafunkciót, töltsön fel egy képet az adott funkcióhoz úgy, hogy először a Médiaközpont legördülő menüjében kiválasztja a Szobafunkciók ikonjai lehetőséget, majd az alatta megjelenő legördülő menüből kiválasztja a szobafunkció nevét. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Hogyan tölthetek fel szobaképeket?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'A szobákat a Micromanage vagy a Speciális tarifaszerkesztési módok felhasználói hozhatják létre. Miután egy vagy több szobát létrehozott, több képet is feltölthet minden szobára a Médiaközponton keresztül (válassza ki a szoba nevét/számát a Ezek a képek diavetítésben megtekinthetők, ha megnézik az Előnézet oldalt, és kiválasztják a Szobáink lapot, majd rákattintanak az Elérhetőség linkre. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Hogyan tölthetek fel diavetítéses képeket?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'A diavetítés képei a Tulajdon részletei (Előnézet) oldalon, a Foglalás most gomb mellett láthatók.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Hogyan tölthetek fel extra képeket?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "A szobákhoz és a szoba jellemzőihez hasonlóan először egy Extra -t kell létrehoznia. Ha ez megtörtént, válassza ki az Extrákat a felső legördülő menüből. Ha ezt megtette, ki kell választania a az Extra a lenti legördülő listából. A név kiválasztásakor feltölthet egy vagy több képet az extrahoz. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Valami vendéggel kapcsolatos');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Hogyan blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Te blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Hogyan menthetem le a leírásokat több nyelven?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Ha több nyelven szeretné menteni a leírásokat, először keresse fel a Beállítások> Tulajdon részletei oldalt. Mentse el a tulajdon leírását ott. Ezután módosítsa a webhely nyelvét. Most lépjen a Beállítások oldalra Ismét mentse el a Tulajdonságok oldalt, és mentse el a részleteket. Ha tehát a webhely angol és spanyol (vagy bármely más) nyelvet is képes megjeleníteni, válassza az angol nyelvet, írja be a leírást angolul, majd kattintson a Mentés gombra. nyelvet spanyolra, majd mentse az új spanyol leírást. Ez az oldal összes bemenetére vonatkozik. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Módosíthatok más tulajdonságokat ezen az oldalon?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nem, nem teheti. Csak olyan ingatlanokat kezelhet, amelyeket létrehozott vagy tulajdonkezelőként rendelt hozzá.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Módosíthatok más tulajdonságokat ezen az oldalon?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Igen, megteheti, Ön egy Super Property Manager, és módosíthatja a Lista tulajdonságai oldalon látható tulajdonságokat.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Melyek a vendégtípusok/Hogyan változtathatok személyenként és éjszakánként?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "A Beállítások> Tulajdon -konfiguráció> Tarifák és valuták lapon eldöntheti, hogy személyenként és éjszakánként kell -e fizetnie. Ha személyenként és éjszakánként fizet, akkor egy vagy több vendégtípust kell létrehoznia. Létrehozhat egy egyszerű vendégtípust, ahol csak leírást ad neki (pl. Személyek), vagy létrehozhat több különböző vendégtípust, például \"Felnőttek\" és \"10 év alatti gyermekek. A gyermekek számára, ha felajánlja 50% kedvezmény, akkor az \"Is percent\" értéket Igenre, a Variance értéket pedig 50 -re állítja. A szobák alapdíjakkal rendelkeznek, ez a beállítás lehetővé teszi, hogy a szoba árát a vendég típusától függően módosítsa. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Mik a szoba jellemzői?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "A szoba funkciói olyanok, amelyek kiemelik a szobát. Lehet valami egyszerű, például tea- és kávéfőző, vagy olyan dolgok, amelyek valóban felemelik a szobát a többiek fölött, például\" Nézetek a bay \". Miután létrehozott egy szobafunkciót, feltölthet képeket ehhez a funkcióhoz a Médiaközpontban. Ezek a szobafunkciók megtekinthetők a szoba elérhetőségi oldalán, és ha úgy konfigurálta a tulajdonát, hogy megjelenítse a klasszikus szobák listastílusát (ahol a vendégek pontosan kiválaszthatják, hogy melyik szobát akarják lefoglalni), akkor a szobafunkciók segítségével szűrhetik a foglalási űrlapon látható szobákat. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Fizetések');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "A foglalás után nem látja a fizetési átjárót.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Ha vagyonkezelőként van bejelentkezve, akkor nem fogja látni a fizetési átjárót, mert Ön nem fizet. Csak a nem menedzser felhasználók láthatják az átjárót a foglalások során.");
    
