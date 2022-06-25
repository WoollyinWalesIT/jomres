<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
/**
 *
 * Google translate absolutely destroys all of the definitions for this language, it would need every line to be individually translated.
 *
 *
 **/

jr_define('_JOMRES_FAQ', 'Često postavljana pitanja');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Objekti');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Kako mogu da dodam objekat?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknite na Objekti > Novi objekat ako želite da vašu nekretninu objavite na portalu.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Kako mogu da vidim kako moj objekat izgleda gostima?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknite na Objekti > Pregled da biste videli kako vaš objekat izgleda gostima kada pretražuju portal.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Kako da dodam sobe?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Način na koji dodajete sobe zavisi od vašeg režima za uređivanje tarifa. U režimu za uređivanje uobičajenih tarifa, ne morate da dodajete sobe, jer se one automatski dodaju kada konfigurišete svoje cene. Ako koristite Micro ili Naprednu tarifu, onda u Podešavanja > Sobe možete dodavati, menjati i brisati sobe. Takođe ćete moći da kreirate karakteristike sobe i dodelite ove funkcije tim sobama. Pored toga, moći ćete da dodate slike za pojedinačne sobe koristeći Medija centar. Kada kreirate sobe, trebalo bi da pokušate da budete sigurni da odražavaju vaše prostorije u stvarnom svetu na vašem imanju jer će to olakšati upravljanje njima.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Kako da podesim cene soba?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Ovo zavisi od vašeg režima za uređivanje tarifa. Ako koristite režim za uređivanje normalne tarife (Podešavanja > Opšta podešavanja > Konfigurisanje tipova tarifa), tada možete da konfigurišete broj soba koje imate, cenu, broj ljudi koje svaka soba može da primi i ukupan broj ljudi koje želite u svakoj rezervaciji. Ovaj režim vam omogućava da postavite cene soba za narednih 10 godina. <br/>Ako koristite Napredne ili Micro režime za uređivanje tarifa, onda ste u mogućnosti da podesite cene soba za svaki dan u godinama koje dolaze. Takođe možete imati više tarifa za isti tip sobe, na primer možete imati jednu tarifu za noćenje s doručkom i drugu za noćenje, doručak i večernji obrok. Osim ako nemate posebne potrebe, preporučujemo da koristite Micro tarifu sve vreme, Napredna tarifa će raditi na isti način, ali morate biti pažljivi da biste bili sigurni da su početni i krajnji datumi vaše različite tarife uzastopni. U svakom slučaju, možete nas kontaktirati ukoliko imate problema prilikom dodavanja objekta na portal kao i podešavanje tarifa");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Kako da napravim opcione dodatke?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Dodaci se mogu dodati rezervacijama i konfigurišu se u Podešavanja > Extra. Oni mogu biti opcioni ili 'prinudni', drugim rečima, gost ih ne može poništiti u rezervaciji. Možete da ponudite različite metode naplate za opcione dodatke, kao i da li su prikazani na vašoj stranici sa detaljima o objektu. Pošto se dodaci mogu podesiti da prikazuju samo da li je rezervacija unutar određenih datuma (na primer, za sezonsko voće, korišćenje bazena...), trebalo bi da se uverite da ste podesili datume Važi od i Do. Kada napravite opcione dodatke, možete da otpremite slike za njih preko Media Manager-a.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Kako mogu da primam uplate online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Da biste vršili plaćanja na mreži, potrebno je da imate nalog kod provajdera plaćanja na mreži, koji se zove Gateway. Da biste videli dostupne mrežne prolaze, idite na Opšta podešavanja > Payment gateways. Kliknite na ime mrežnog prolaza da biste bili prebačeni na njegovu stranicu sa konfiguracijom.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Da li gostima mogu dati popust?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Popusti se mogu dati, postoji nekoliko različitih načina da se to uradi. Ako pravite rezervaciju u ime gosta, onda možete podesiti sopstvene ukupne iznose depozita i rezervacije u obrascu za rezervaciju, koristeći polja \"Zameni ukupni smeštaj\" i \"Zameni depozit\" ( gosti ne mogu da koriste ove funkcija ). Drugi način da se gostu da popust je kreiranje kupona za popust, koji se mogu konfigurisati tako da se mogu koristiti samo između određenih datuma ( Važi od/do ) ili da se primenjuju samo kada rezervacija pada između određenih datuma ( Rezervacija važi od/do ). Ovi kuponi za popust se mogu dodeliti samo jednom gostu, ili ako želite možete da odštampate kupone. Ispis uključuje KR kod koji gosti mogu da skeniraju u svoje telefone koji ih vodi do vašeg formulara za rezervaciju sa kodom za popust koji se već primenjujeKupone možete napraviti na stranici Podešavanja > Kuponi za popust. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervacije');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Kada kliknem na  Nova rezervacija, budem odveden na Kontakt obrazac, zašto?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Pre nego što primite rezervacije, morate da konfigurišete neke cene (tarife) za svaki tip sobe koji imate u svom stvarnom svetu. Kada kreirate neke tarife, moći ćete da primate rezervacije.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Šta su Crne Rezervacije?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Crne rezervacije su rezervacije koje su napravljene da bi se apartman, soba ili sobe povukli iz upotrebe. Nisu povezani ni sa jednim gostima i korisni su, na primer, ako je potrebno renovirati objekat.");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Slike');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Kako mogu da dodam slike?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Da biste dodali slike, potrebno je da posetite stranicu Podešavanja > Medija Centar. Na ovoj stranici videćete nekoliko polja. Na vrhu ćete možda videti neke beleške, a ispod njih videćete padajući meni. Ovaj padajući meni vam omogućava da izaberete za koji resurs otpremate slike. <br/> Na desnoj strani je kolona sa Dodaj slike, Očisti listu i Dodaj sve slike. Kliknite na Dodaj slike i izaberite neke slike sa svog desktopa ili mobilnog uređaja. Kada to uradite, kolona će se promeniti u listu sličica. Odavde možete da dodate jednu ili više slika za svoje resurse.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Šta je glavna slika?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Glavna slika je ona koja se pojavljuje u rezultatima pretrage i u zaglavlju vašeg svojstva (područje na vrhu stranica koje pokazuju nešto o vašoj imovini). Trebalo bi da izaberete sliku koja prikazuje vaš objekat u najboljem mogućem svetlu. Da biste dodali glavnu sliku, uverite se da je izabrana Glavna slika na padajućoj listi u gornjem levom uglu (dugački plavi pravugaonik), a zatim dodajte jednu ili više slika. Ako dodate više od jedne slike, onda će sve slike biti korišćene na stranici sa rezultatima pretrage koja se prikazuje kao mala projekcija slajdova.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Šta su ikone karakteristika sobe?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Funkcije sobe mogu kreirati korisnici Micro ili Naprednog režima za uređivanje tarifa. One se mogu povezati sa jednom ili više soba i prikazane su u obrascu za rezervaciju. Kada kreirate funkciju sobe, možete da dodate sliku za tu funkciju tako što ćete prvo izabrati ikone funkcija sobe u padajućem meniju u Medija centru, a zatim izabrati naziv funkcije sobe iz padajućeg menija koji će se pojaviti ispod.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Kako da dodam slike sobe?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Sobe mogu kreirati korisnici Micro ili Naprednog režima za uređivanje tarifa. Kada se napravi jedna ili više soba, možete da dodate više slika za svaku prostoriju preko Medija centra (izaberite naziv/broj sobe nakon što izaberete Slike sobe u padajućem meniju). Ove slike se mogu videti u projekciji slajdova tako što ćete pogledati stranicu za pregled i izabrati karticu Naše sobe, a zatim kliknuti na link Dostupnost.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Kako da dodam Slideshow slike?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slideshow slike  se vide na stranici Detalji o objektu (Pregled), pored dugmeta Rezerviši sada.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Kako da dodam Extra slike?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Slično sobama i karakteristikama soba, prvo morate da kreirate Extra. Kada to učinite, možete da izaberete Dodaci u gornjem padajućem meniju. Kada to uradite, potrebno je da izaberete naziv Extra sa padajuće liste ispod. Kada je ime izabrano, možete da otpremite jednu ili više slika za tu Extra opciju koju ste kreirali.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Pomoć pri dodavanju objekata na portal');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Kako da dodam moj objekat na sajt?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Da biste dodali vaš objekat na sajt, neophodno je da se prvo registrujete. Pratite korake na našem portalu i proverite inboks vaše elektronske pošte gde će vam stići svi detalji o registraciji. Neophodno je da prilikom toga unesete  sve neophodne podatke kao što su broj telefona, email adresa, itd. Kada ste se uspešno registrovali pojaviće se vaša KONTROLNA TABLA. Nakon toga kliknite na OBJEKTI > DODAJ OBJEKAT, a zatim pratite uputstva sa portala. <br/> Ukoliko i tada imate problema prilikom dodavanja vašeg objekta, molimo vas da nas kontaktire i mi ćemo ubaciti vaš objekat umesto vas.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Kako da sačuvam opise mog objekta na više jezika?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Da biste sačuvali opise na više jezika, prvo posetite stranicu Podešavanja > Detalji o objektu. Sačuvajte opis svoje imovine tamo. Zatim promenite jezik na kojem gledate veb lokaciju. Sada ponovo idite na stranicu „Detalji objekta podešavanja“ i ponovo sačuvajte detalje. Dakle, ako sajt može da prikazuje i engleski i španski (ili bilo koji drugi) jezik, izaberite engleski, unesite opis na engleskom, a zatim kliknite na Sačuvaj. Zatim promenite svoj trenutni jezik u španski, a zatim sačuvajte novi španski opis. Ovo radi za sve unose na toj stranici.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Da li mogu menjati podešavanja za druge objekte na ovom portalu?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Ne, ne možete. Možete da upravljate samo objektima koje ste kreirali ili kojima ste dodeljeni kao menadžer (vlasnik) objekta.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Can I modify other properties on this site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Yes you can, you're a Super Property Manager and can modify any properties shown in the List Properties page.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Šta su tipovi gostiju/Kako mogu da promenim po osobi po noći?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Na stranici Podešavanja > Opšte konfiguracije > Tarife i valuta možete da odlučite da li želite da naplaćujete po osobi po noći. Ako naplaćujete po osobi po noći, moraćete da kreirate jednu ili više vrsta gostiju. Možete da kreirate jednostavan tip gostiju, gde im samo date opis (npr. „Osobe“), ili možete da kreirate nekoliko različitih tipova gostiju, na primer „Odrasli“ i „Deca ispod 10 godina“. Za decu, ako želite da ponudite popust od 50% onda biste podesili 'Procenat' na Da, a vrednost varijanse na 50. Sobe imaju osnovne cene, ovo podešavanje vam omogućava da prilagodite cenu sobe na osnovu na tipu gosta.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Šta su karakteristike sobe?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Karakteristike sobe su stvari koje čine da se soba ističe. Oni mogu biti nešto jednostavno, poput uređaja za pripremu čaja i kafe, đakuzi ili mogu biti stvari koje zaista čine da se soba izdiže iznad ostalih, kao što je „Pogled na reku“. Kada kreirate funkciju sobe, možete da otpremite slike za tu funkciju u Medija Centru. Ove karakteristike sobe se mogu videti na stranici dostupnosti soba, a ako ste konfigurisali svoj objekat da prikazuje stil liste klasičnih soba (gde gosti mogu da izaberu tačno koju sobu žele da rezervišu), onda mogu da koriste funkcije sobe za filtriranje soba prikazano u obrascu za rezervaciju.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Plaćanja');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Ne možete da vidite gateway (prolaz) za plaćanje nakon rezervacije.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Ako ste ulogovani kao Menadžer (vlasnik objekta), nećete videti gateway za plaćanje, jer ne plaćate sami sebi. Samo korisnici koji nisu menadžeri će videti gateway kada prave rezervacije.");
