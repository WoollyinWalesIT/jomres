<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('_JOMRES_SHORTCODES_06001CPANEL', 'Ovo je naslovna stranica cpanela svojstva.');

jr_define ('_JOMRES_SHORTCODES_06001TAPECHART', 'Ovo je grafikon trake svojstava koji pruža pregled pregleda rezervacija u stvarnom vremenu, dostupnosti i popunjenosti na prvi pogled.');

jr_define ('_JOMRES_SHORTCODES_06000COMPARE', 'Ova skripta omogućuje korisniku da usporedi nekoliko svojstava jedno s drugim, do najviše 3 svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Popis uida svojstava odvojenih zarezima, npr. 12,8,7');

jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Izrađuje obrazac vlasnika kontakta.');
jr_define ('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Prenesite uid svojstva svojstva koje želite kontaktirati. Proslijedite 0 (nula) umjesto toga kontaktirajte administratora web lokacije.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Prikazuje stranicu s podacima o tvrtki koja povlači pojedinosti iz polja s podacima o vašoj tvrtki upravitelja nekretnine u konfiguraciji nekretnine. Pojedinosti na ovoj kartici obično bi se koristile za dopisivanje, što upraviteljima omogućuje da imaju adresu hotela/apartmana i zasebna adresa za poslovne svrhe. ");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Prikazuje kalendar nekretnine");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Proslijedi uid svojstva svojstva za prikaz.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Mjeseci za prikaz, zadana vrijednost je 24 ako nije drugačije postavljeno. Nije kompatibilno s varijablom Prikaži samo mjesec.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Postavite ovo na 1 ako želite samo prikazati tekući mjesec. Postavka months_to_show će se zanemariti ako se za show_just_month koristi drugi, tako da se drugi koristi u istom u isto vrijeme.");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Prikazuje samo tekst opisa svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Prikazuje samo tekst opisa svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Prikazuje samo značajke svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Prikazuje samo predložak zaglavlja svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Prikazuje samo vrste soba s nekretninama.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Prikazuje samo glavnu sliku Svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Prikazuje samo kartu svojstava.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Prikazuje svojstvo Više informacija.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR kôd koji povezuje na gmape. To se može skenirati u telefon pomoću aplikacije za čitanje qr koda koja daje upute do objekta.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Prikazuje recenzije nekretnine.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Prikazuje sažetak pregleda nekretnine.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Prikazuje pojedinačnu sobu.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'ID sobe.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Prikazuje sobe nekretnine.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Prikazuje slike soba nekretnine kao dijaprojekciju.");
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Prikazuje dijaprojekciju svojstava.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Prikazuje tarife za nekretnine.');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Prikazuje poslovnu adresu web lokacije unesenu u Konfiguracija web stranice> Podaci o vašoj tvrtki.");

jr_define ('_JOMRES_SHORTCODES_06000TERMS', 'Prikazuje odredbe i uvjete svojstva.');
jr_define ('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'ID nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Prikazuje kalendar korisničkog sučelja vlasništva, koji je kalendar različit od glavnog velikog kalendara i temelji se na funkciji kalendara JQuery UI.");
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Proslijedi uid svojstva svojstva za prikaz.');
jr_define ('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Postavite ovo na 1 da ne prikazuje legendu.');

jr_define ('_JOMRES_SHORTCODES_06000SEARCH', "Prikazuje rezultate pretraživanja koji se mogu poboljšati dodavanjem parametara pretraživanja. Ne preporučujemo da koristite sve parametre istovremeno jer ćete na kraju imati previše ograničene kriterije pretraživanja. Umjesto toga, trebali biste se ograničiti na samo jedan ili dva parametra, npr. Pretraživanje prema zemlji i broju zvjezdica. ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Pretražujte po zemlji, koristeći ISO Alpha-2 kôd, npr. GB ili DE.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Pretražujte po regijama. Kako su regije spremljene u bazi podataka, morate koristiti ID regije. Posjetite Administrator> Jomres> Struktura web stranice> Popis regija i zadržite pokazivač miša Uredi, tamo ćete vidjeti ID broj regije . ");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Puni naziv grada koji želite tražiti.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Traži svojstva s određenim značajkama. ID -ove značajki možete pronaći u Administrator> Jomres> Struktura web -mjesta> Značajke svojstava.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Pretražujte nekretnine s određenim vrstama soba. ID -ove vrsta sobe možete pronaći u Administrator> Jomres> Struktura web stranice> Vrste soba.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Traži svojstva određene vrste svojstva. ID -ove vrsta svojstva možete pronaći u Administrator> Jomres> Struktura web stranice> Vrste svojstava.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Traži nekretnine u određenom rasponu cijena.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Traženje nekretnina čije tarife dopuštaju broj gostiju određene vrijednosti, na primjer stranke od 6.");
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'Traži svojstva N zvijezda.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Traži prema datumu dolaska. Treba kombinirati s parametrom datuma polaska.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Traži prema datumu polaska. Treba kombinirati s parametrom arrivalDate.');
jr_define ('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Traži prema kategoriji nekretnine.');

jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Pregledajte stranicu agenta. Možete proslijediti ILI uid svojstva ili sam ID agenta, ako ga znate.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Uid svojstva, ovo će pokazati agenta svojstva.");
jr_define ('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "ID baze podataka upravitelja, ako je poznat.");

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Prikazuje popularna svojstva, obično korištena na pozicijama modula ili widgeta.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Najveći broj svojstava koja se mogu prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Prikaži samo svojstva ovih specifičnih vrsta svojstava.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Postavljeno na 1 za prikaz modula optimiziranih za okomiti widget/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Prikazuje nasumičan odabir svojstava, obično korištenih u pozicijama modula ili widgeta.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Najveći broj svojstava koja se mogu prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Prikaži samo svojstva ovih specifičnih vrsta svojstava.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Postavljeno na 1 za prikaz modula optimiziranih za okomiti widget/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Prikazuje gostujuća najnovije posjećena svojstva, obično korištena na pozicijama modula ili widgeta.");
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Najveći broj svojstava koja se mogu prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Postavljeno na 1 za prikaz modula optimiziranih za vertikalni widget/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Prikazuje niz svojstava, obično korištenih u pozicijama modula ili widgeta.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'ID -ovi svojstava svojstava koja želite prikazati.');
jr_define ('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Postavljeno na 1 za prikaz modula optimiziranih za okomiti widget/položaj modula.');

jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Prikazuje padajući izbor za odabir valute.');
jr_define ('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Omogući/onemogući zamjenski izlaz predloška. Ovaj izlaz je namijenjen za upotrebu u alatnim trakama Bootstrapa.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART', 'Prikazuje stranicu košarice.');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Prikazuje modul/widget košarice');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Prikazuje glavni izbornik. Napomena, ako pokrećete prilagođenu verziju mainmenu_wrapper_alternate.html u, na primjer/templates/jr_leohtian/html/com_jomres, možda ćete je morati zamijeniti <izmjenom_da biste je izmijenili <promijenite_/i> s MENU_LOCATION umotan u kovrčave zagrade. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Ova stranica vam omogućuje prijenos slika za vašu nekretninu i stvari koje nudite. Ima jedan glavni gumb i drugi gumb koji vam omogućuje odabir određenih resursa za prijenos slika. Dakle, glavno svojstvo slika i prezentacija prikazat će samo jedan gumb, ali ako ste stvorili bilo koji, na primjer, dodatni izbor ili sobe, vidjet ćete drugi gumb na koji možete učitati slike za te određene resurse. ');
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Ova vam stranica omogućuje prijenos slika za vašu nekretninu i stvari koje nudite. Ima jedan glavni gumb, a drugi gumb koji vam omogućuje odabir određenih resursa za prijenos slika. Dakle, glavno svojstvo slika i prezentacija prikazat će samo jedan gumb, no ako ste stvorili dodatne dodatke, vidjet ćete drugi gumb na koji možete prenijeti slike za te određene resurse. ');


jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Najprije odaberite slike koje želite prenijeti klikom na Dodaj sliku ili pomoću opcije Povuci i ispusti. Oni će se pojaviti u stupcu s desne strane. </li>
  <li> Iznad ovog područja upotrijebite gumb \"Odaberi resurs \" da biste odabrali za koji izvor želite prenijeti slike. Možda će vam se ponuditi mogućnost da odaberete određeni resurs ispod. </li>
  <li> Nakon što odaberete resurs, možete kliknuti gumb Upload Image ispod slike da biste ga povezali s tim resursom. Kad se slika prenese, nestat će iz stupca na desnoj web stranici, a pojavit će se s lijeve strane. </li>
  <li> Pomoću gumba Otpad pored postojećih slika uklonite slike koje više ne želite prikazivati. </li>
  <li> Možete promijeniti redoslijed prikazivanja datoteka u slideshowu tako da ih preimenujete prije učitavanja jer se prikazuju na stranicama abecednim redom. </li>
</ol>
 ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Uz gumb Resurs, možda ćete vidjeti gumb za pregled. Ako kliknete na ovo, vidjet ćete skočni prozor koji će vam pokazati kako će trenutno prenesene slike izgledati na stranici. To vam pomaže da dobijete ideja o tome kako će slike izgledati vašim klijentima. ");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Ne postoji ograničenje broja slika koje možete prenijeti. Slike se automatski mijenjaju kada se prenose. Možete prenijeti samo datoteke JPG i PNG.");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Idealno bi bilo koje slike koje prenesete bile najmanje");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "širina piksela, u protivnom mogu izgledati nejasnoće nakon prijenosa.");

jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Sve slike koje prenesete ne mogu biti veće od");
jr_define ('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "u veličini.");

jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE', "Odaberite resurs za koji želite prenijeti slike");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Određeni resurs");
jr_define ('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Slike već učitane za ovaj resurs");

jr_define ('_JOMRES_MARKDOWN_TITLE', 'Formatiranje teksta');
jr_define ('_JOMRES_MARKDOWN_DESC', 'Ovdje možete unijeti tekst jednostavnim Markdown oblikovanjem. Ne morate znati nikakav HTML, samo upotrijebite gumbe da bi informacije izgledale onako kako želite ili oblikovati tekst prema ovim primjerima.' );
jr_define ('_JOMRES_MARKDOWN_EMPHASIS', 'Naglasak');
jr_define ('_JOMRES_MARKDOWN_BOLD', 'podebljano');
jr_define ('_JOMRES_MARKDOWN_ITALICS', 'kurziv');
jr_define ('_JOMRES_MARKDOWN_STRIKETHROUGH', 'precrtavanje');
jr_define ('_JOMRES_MARKDOWN_HEADERS', "Zaglavlja");
jr_define ('_JOMRES_MARKDOWN_BIGHEADER', 'Veliko zaglavlje');
jr_define ('_JOMRES_MARKDOWN_MEDIUMHEADER', "Srednje zaglavlje");
jr_define ('_JOMRES_MARKDOWN_SMALLHEADER', 'Malo zaglavlje');
jr_define ('_JOMRES_MARKDOWN_TINYHEADER', 'Sitno zaglavlje');
jr_define ('_JOMRES_MARKDOWN_LISTS', "Popisi");
jr_define ('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Opća stavka popisa');
jr_define ('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numerirana stavka popisa');
jr_define ('_JOMRES_MARKDOWN_LINKS', 'Veze');
jr_define ('_JOMRES_MARKDOWN_LINKSTEXT', 'Tekst za prikaz');
jr_define ('_JOMRES_MARKDOWN_QUOTES', 'Citati');
jr_define ('_JOMRES_MARKDOWN_THISISAQUOTE', 'Ovo je citat.');
jr_define ('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Može obuhvatiti više redaka!');
jr_define ('_JOMRES_MARKDOWN_IMAGES', 'Slike');
jr_define ('_JOMRES_MARKDOWN_TABLE', 'Tablice');
jr_define ('_JOMRES_MARKDOWN_COLUMN', 'Stupac');


jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Prikaži slike svojstava kao dijaprojekciju na popisu svojstava?');
jr_define ('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ako je postavljeno na da, prikazat će se dijaprojekcija glavnih slika svojstava. Ako je postavljeno na ne, tada će se prikazati prva glavna slika svojstva.');

jr_define ('EDIT_CMS_USER', 'Uredi korisnika CMS -a');

jr_define ('BOOKING_MADE_BY', 'Rezervaciju je napravio');

jr_define ('_JOMRES_ROUTER_FEATURES', 'Pogodnosti');
jr_define ('_JOMRES_ROUTER_ROOMTYPES', 'Tipovi soba');

jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'URL vanjskog obrasca za rezervacije');
jr_define ('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Ovdje možete postaviti vanjski URL ako želite koristiti web stranice treće strane za rezervacije. Svi gumbi za rezervaciju Jomres upućivat će na ovaj URL. Ostavite ovo polje prazno ako želite koristiti obrazac za rezervaciju Jomresa . ');

jr_define ('_JOMRES_ROOM_TAGLINE', 'Tagline (kratak opis sobe/podnaslov)');
jr_define ('_JOMRES_ROOM_DESCRIPTION', 'Opis sobe');

jr_define ('_JOMRES_GUEST_BLACKLISTED', 'Gost na crnoj listi');
jr_define ('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ako je ovaj gost na crnoj listi, više neće moći rezervirati smještaj u ovom objektu.');
jr_define ('_JOMRES_SESSION_HANDLER', 'Rukovatelj sesije');
jr_define ('_JOMRES_SESSION_HANDLER_DESC', 'Spremi datoteke jomres sesije na disk ili u bazu podataka. Preporučeno: baza podataka');
jr_define ('_JOMRES_MAP_HEIGHT', "Visina karte (px)");
jr_define ('_JOMRES_MAP_ZOOMLEVEL', "Razina zumiranja karte");
jr_define ('_JOMRES_MAP_MAPTYPE', "Vrsta karte");

jr_define ('_JOMRES_TEMPLATE_PACKAGES', "Upravitelj nadjačavanja predloška");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Paketi predložaka su dodaci koji mogu pružiti nadjačavanje predložaka za različite datoteke osnovnih predložaka Jomresa.");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_INFO', "Ova stranica prikazuje sve datoteke predložaka koje mogu nadjačati datoteke predložaka paketa predložaka. Ako želite nadjačati određenu datoteku predloška, ​​kliknite gumb za uređivanje te datoteke, na sljedećoj stranici bit ćete u mogućnosti odabrati s kojom verzijom želite nadjačati. Imajte na umu da ova nadjačavanja imaju prioritet nad Jomres Core -om i bilo kojim nadjačavanjem tema/predložaka Wordpress -a ili Joomle. Poništavanje možete onemogućiti brisanjem na stranici Poništavanje predložaka popisa. ");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NAME', "Naziv predloška");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_PATH', "Trenutni put");
jr_define ('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nije nadjačano");
jr_define ('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Možete odabrati koju datoteku predloška nadjačati datoteke predložaka jezgre promjenom padajućeg izbornika");


jr_define ('_JOMRES_OVERALL_ROOMS_BOOKED', "Postotak rezerviranih soba");

jr_define ('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Prikazuje obrazac za stvaranje novog svojstva.');

jr_define ('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Zumiranje karte, 1: Svijet 5: Kopno/kontinent 10: Grad 15: Ulice 20: Zgrade');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Broj recenzija za prikaz');

jr_define ('_JOMRES_SHORTCODES_06000SHORTLIST', 'Prikazuje svojstva korisnika koji su ušli u uži izbor. Ako je korisnik registriran, to su njihovi favoriti, ako nije prijavljen, samo one stavke dodane putem ikone Omiljeno tijekom posjeta.');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimalna vrijednost depozita');

jr_define ('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ako je izračunati depozit manji od ove brojke, umjesto toga postavite polog na ovu vrijednost. Ova brojka bi sama mogla biti prekomjerna ako ne zadovoljava postavku minimalnog depozita web-lokacije. Ostavite postavljenu na 0 do ne koristite postavku. ");

jr_define ('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Prikazuje obrazac pristanka usklađen s GDPR -om.');

jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Popis vrsta sobe nekretnine');
jr_define ('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Prikaži vrstu sobe svojstva');

jr_define ('_JOMRES_SHORTCODE_LOGIN_FORM', 'Prikaži obrazac za prijavu');

jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Prikaži popis soba određene vrste sobe');
jr_define ('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'ID vrste sobe');

jr_define ('_JOMRES_SHORTCODES_06001DASHBOARD', 'Nadzorna ploča');

jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Prikazuje popis sindiciranih nekretnina');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Broj sindiciranih svojstava za prikaz');
jr_define ('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Hoće li se prikazati MRP -ovi (hoteli/noćenja s doručkom) ili SRP -ovi (vikendice/apartmani/vile). Zadano je određeno ako je to vlasništvo, to je vlasništvo, prikazano. Za odabir određene vrste postavite ovu vrijednost na 0 za srpsku ili 1 za mrps. ');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Pokazuje zvjezdice svojstva. One su postavljene u Konfiguraciji svojstva, ako je svojstvo MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'ID svojstva.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Neobavezno. Ako ID svojstva nije postavljen, umjesto toga možete proslijediti broj.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Izborno. Alternativni put predloška. Ne može se proslijediti putem url-a. Mora biti apsolutan.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Neobavezno. Alternativni naziv predloška.');
