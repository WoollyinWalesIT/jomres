<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'To je naslovna stran cpanela lastnosti.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'To je trak lastnosti nepremičnine, ki na prvi pogled ponuja rezervacije v realnem času, razpoložljivost in zasedenost.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Ta skript uporabniku omogoča primerjavo več lastnosti med seboj, do največ 3 lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Seznam uidov lastnosti, ločen z vejicami, npr. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Ustvari obrazec lastnika stika.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Prenesite uid lastnosti nepremičnine, s katero se želite obrniti. Posredite 0 (nič) namesto tega, da se obrnete na skrbnika spletnega mesta.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Prikaže stran z informacijami o podjetju, ki potegne podrobnosti iz polja s podatki o vašem podjetju v konfiguraciji nepremičnine. Podrobnosti na tem zavihku se običajno uporabljajo za dopisovanje, kar upraviteljem omogoča, da imajo naslov hotela/apartmaja in ločen naslov za poslovne namene. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Prikazuje koledar nepremičnine");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Prenesite uid lastnosti lastnosti, ki bo prikazana.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Meseci za prikaz, privzeto je 24, če ni drugače nastavljeno. Ni združljivo s spremenljivko Prikaži samo mesec.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "To nastavite na 1, če želite samo prikazati trenutni mesec. Nastavitev months_to_show bo zanemarjena, če za oba uporabite show_just_month ob istem času.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Prikaže samo besedilo opisa lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Prikaže samo besedilo opisa nepremičnine.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Prikaže samo lastnosti lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Prikaže samo predlogo glave lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Prikazuje samo vrste sob lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Prikaže samo glavno sliko lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Prikaže samo zemljevid lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Prikaže besedo Več informacij.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Koda QR, ki povezuje z zemljevidi. To lahko skenirate v telefon s pomočjo aplikacije za branje kode qr, ki podaja navodila do nepremičnine.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Prikaže ocene nepremičnine.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Prikaže povzetek pregleda nepremičnine.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Prikaže posamezno sobo.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID sobe.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Prikaže sobe nepremičnine.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Prikazuje slike sob nepremičnine kot diaprojekcijo.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Prikaže diaprojekcijo lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Prikazuje tarife za nepremičnine.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Prikaže poslovni naslov spletnega mesta, vnešen v Konfiguracija spletnega mesta> Podatki o vašem podjetju.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Prikazuje določila in pogoje lastnine.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Prikazuje koledar uporabniškega vmesnika, ki je drugačen od glavnega velikega koledarja in temelji na funkcionalnosti koledarja uporabniškega vmesnika Jquery.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Prenesite uid lastnosti lastnosti, ki bo prikazana.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Nastavi na 1, da legenda ne bo prikazana.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Prikazuje rezultate iskanja, ki jih je mogoče izboljšati z dodajanjem iskalnih parametrov. Ne priporočamo, da hkrati uporabite vse parametre, ker boste na koncu dobili preveč omejene iskalne kriterije. Namesto tega se omejite le na enega ali dva parametra, npr. Iskanje po državi in ​​številu zvezdic. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Iščite po državah z uporabo kode ISO Alpha-2, npr. GB ali DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Iskanje po regijah. Ker so regije shranjene v zbirki podatkov, morate uporabiti ID regije. Obiščite Administrator> Jomres> Struktura spletnega mesta> Seznam regij in miško premaknite na povezavo Uredi, tam boste videli ID številko regije . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Polno ime mesta, ki ga želite poiskati.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Poiščite lastnosti s posebnimi funkcijami. ID -je funkcij najdete v Administrator> Jomres> Struktura spletnega mesta> Lastnosti lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Poiščite nepremičnine z določenimi vrstami sob. ID -je vrste sob najdete v Administrator> Jomres> Struktura spletnega mesta> Vrste sob.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Iskanje lastnosti določene vrste lastnosti. ID -je vrste lastnosti najdete v Administrator> Jomres> Struktura spletnega mesta> Vrste lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Iskanje nepremičnin v določenem cenovnem razredu.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Iskanje nepremičnin, katerih tarife dovoljujejo številke gostov določenih vrednosti, na primer stranke 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Iskanje lastnosti N zvezd.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Iskanje po datumu prihoda. To je treba združiti s parametrom datuma odhoda.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Iskanje po datumu odhoda. To je treba kombinirati s parametrom arrivalDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Iskanje po kategoriji nepremičnine.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Oglejte si stran zastopnika. Lahko posredujete ALI uid lastnosti ali sam ID agenta, če ga poznate.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Uid lastnosti, to bo pokazalo zastopnika nepremičnine.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID baze podatkov upravitelja, če je znan.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Prikaže priljubljene lastnosti, ki se običajno uporabljajo v položajih modulov ali gradnikov.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Največje število lastnosti, ki jih je mogoče prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Prikaži samo lastnosti teh posebnih vrst lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Nastavite na 1 za prikaz modulov, optimiziranih za navpični gradnik/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Prikaže naključen izbor lastnosti, ki se običajno uporabljajo v položajih modulov ali gradnikov.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Največje število lastnosti, ki jih je mogoče prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Prikaži samo lastnosti teh posebnih vrst lastnosti.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Nastavite na 1 za prikaz modulov, optimiziranih za navpični gradnik/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Prikaže zadnje ogledane lastnosti gosta, ki se običajno uporabljajo v položajih modulov ali gradnikov.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Največje število lastnosti, ki jih je mogoče prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Nastavite na 1 za prikaz modulov, optimiziranih za navpični gradnik/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Prikaže številne lastnosti, ki se običajno uporabljajo v položajih modulov ali gradnikov.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'ID lastnosti za lastnosti, ki jih želite prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Nastavite na 1 za prikaz modulov, optimiziranih za navpični gradnik/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Prikaže spustni meni za izbiro valute.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Omogoči/onemogoči nadomestni izhod predloge. Ta izhod je namenjen uporabi v orodnih vrsticah Bootstrap.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Prikaže stran nakupovalnega vozička.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Prikaže modul/pripomoček za nakupovalno košarico.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Prikaže glavni meni. Upoštevajte, če uporabljate prilagojeno različico mainmenu_wrapper_alternate.html v na primer/templates/jr_leohtian/html/com_jomres, če jo želite spremeniti, jo lahko spremenite < /i> z MENU_LOCATION, ovito v zavite oklepaje. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ta stran vam omogoča nalaganje slik za vašo lastnino in stvari, ki jih ponujate. Ima en glavni gumb in drugi gumb, ki omogoča izbiro določenih virov za nalaganje slik. Torej, glavna lastnost slika in diaprojekcija bosta prikazala samo en gumb, če pa ste ustvarili kakšen npr. izbirni dodatek ali sobe, boste videli drugi gumb, kamor lahko naložite slike za te posebne vire. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ta stran vam omogoča nalaganje slik za vašo lastnino in stvari, ki jih ponujate. Ima en glavni gumb in drugi gumb, ki omogoča izbiro določenih virov za nalaganje slik. Torej, glavna lastnost slika in diaprojekcija bosta prikazala samo en gumb, če pa ste ustvarili izbirne dodatke, boste videli drugi gumb, kamor lahko naložite slike za te posebne vire. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Najprej izberite slike, ki jih želite naložiti, tako da kliknete Dodaj sliko ali uporabite funkcijo povleci in spusti. Te bodo prikazane v stolpcu na desni strani. </li>
  <li> Nad tem področjem uporabite gumb \"Izberite vir \", da izberete, za kateri vir želite naložiti slike. Morda vam bo ponujena možnost, da spodaj izberete določen vir. </li>
  <li> Ko izberete vir, lahko kliknete gumb Naloži sliko pod sliko, da ga povežete s tem virom. Ko je slika naložena, bo izginila iz stolpca na desni strani in se prikazala na levi. </li>
  <li> Z gumbom Smetnjak poleg obstoječih slik odstranite slike, ki jih ne želite več prikazovati. </li>
  <li> Vrstni red prikaza datotek v diaprojekciji lahko spremenite tako, da jih pred nalaganjem preimenujete, saj so prikazane na straneh po abecednem vrstnem redu. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Poleg gumba Viri boste morda videli gumb Predogled. Če kliknete na to, se prikaže pojavno okno, ki prikazuje, kako bodo naložene slike videti na strani. To vam bo pomagalo zamisel, kako bodo slike videti vašim strankam. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Število slik, ki jih lahko naložite, ni omejeno. Slike se ob nalaganju samodejno spremenijo. Naložite lahko samo datoteke JPG in PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "V idealnem primeru bi bile vse slike, ki jih naložite, vsaj");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "slikovne pike široke, sicer bodo lahko po nalaganju videti nejasne.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Vse slike, ki jih naložite, ne smejo biti več kot");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "v velikosti.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Izberite vir, za katerega želite naložiti slike");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Poseben vir");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Slike, ki so že naložene za ta vir");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'Oblikovanje besedila');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Tukaj lahko vnesete besedilo s preprostim oblikovanjem Markdown. Ni vam treba poznati nobenega HTML -ja, samo uporabite gumbe, da bodo podatki videti, kot želite, ali pa besedilo oblikujte v skladu s temi primeri.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Poudarek');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'krepko');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'poševno');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'prečrtano');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Glave");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Velika glava');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Srednja glava");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Majhna glava');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Majhna glava');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Seznami");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Splošna postavka seznama');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Oštevilčena postavka seznama');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Povezave');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Besedilo za prikaz');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citati');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'To je narekovaj.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Lahko obsega več vrstic!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Slike');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tabele');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Stolpec');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Prikaži slike lastnosti kot diaprojekcijo na seznamu lastnosti?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Če je nastavljeno na da, se prikaže diaprojekcija glavnih slik lastnosti. Če nastavite na ne, se prikaže prva glavna slika lastnosti.');

jr_define ('EDIT_CMS_USER', 'Urejanje uporabnika CMS');

jr_define ('BOOKING_MADE_BY', 'Rezervacija opravljena');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Storitve');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Vrste sob');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL zunanjega obrazca za rezervacijo');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Tukaj lahko nastavite zunanji URL, če želite za rezervacije uporabiti spletno mesto tretje osebe. Vsi gumbi za rezervacijo jomres bodo kazali na ta URL. To polje pustite prazno, če želite uporabiti obrazec za rezervacijo Jomresa . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (kratek opis sobe/podnapisi)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Opis sobe');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gost na črnem seznamu');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Če je ta gost na črnem seznamu, potem ne bo mogel več rezervirati v tej nepremičnini.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Vodnik seje');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Shrani datoteke sej jomres na disk ali v bazo podatkov. Priporočeno: zbirka podatkov');
jr_define ('_JOMRES_MAP_HEIGHT', "Višina zemljevida (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Raven povečave zemljevida");
jr_define ('_JOMRES_MAP_MAPTYPE', "Vrsta zemljevida");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Upravitelj preglasitve predloge");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Paketi predlog so vtičniki, ki lahko zagotovijo preglasitev predlog za različne jedrne datoteke predlog Jomres.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Na tej strani so navedene vse datoteke predlog, ki jih lahko razveljavijo datoteke s predlogami paketa predlog. Če želite preglasiti določeno datoteko predloge, kliknite gumb za urejanje te datoteke, na naslednji strani boste lahko izberete, s katero različico želite preglasiti. Upoštevajte, da imajo te preglasitve prednost pred Jomres Core in vsemi preglasitvami teme/predloge Wordpress ali Joomla. Razveljavitev lahko onemogočite tako, da jo izbrišete na strani Preglasitve predloge seznama. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Ime predloge");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Trenutna pot");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Ni razveljavljeno");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Izberete lahko datoteko predloge za preglasitev datotek predloge Core tako, da spremenite spustni meni");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Odstotek rezerviranih sob");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Prikaže obliko za ustvarjanje nove lastnosti.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Povečava zemljevida, 1: Svet 5: Kopno/celina 10: Mesto 15: Ulice 20: Zgradbe');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Število pregledov za prikaz');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Prikaže lastnosti uporabnikov, ki so uvrščeni v ožji izbor. Če je uporabnik registriran, so to njegove priljubljene, če niso prijavljene, pa so med obiskom dodane samo tiste ikone Priljubljenih.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Najmanjša vrednost depozita');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Če je izračunani depozit manjši od tega zneska, namesto tega nastavite depozit na to vrednost. Ta številka je lahko sama prekoračena, če ne ustreza nastavitvi minimalnega depozita spletnega mesta. Pustite nastavljeno na 0 do nastavitve ne uporabljajte. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Prikaže obrazec za soglasje, skladno z GDPR.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Seznam vrst sob za nepremičnine');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Pokaži vrsto sobe lastnosti');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Pokaži obrazec za prijavo');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Prikaži seznam sob določene vrste sobe');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID vrste sobe');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Nadzorna plošča');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Prikaže seznam sindiciranih nepremičnin');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Število združenih lastnosti za prikaz');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Ali naj se prikažejo MRP (hoteli/nočitve z zajtrkom) ali SRP (počitniške hiše/apartmaji/vile). Privzeto je odvisno od trenutne nepremičnine, potem je to lastništvo prikazano. Če želite izbrati določeno vrsto, nastavite to vrednost na 0 za srpsko ali 1 za mrps. ');

