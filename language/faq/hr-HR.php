<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define ('_JOMRES_FAQ', 'Često postavljana pitanja');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Svojstva');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Kako mogu stvoriti svojstvo?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknite Svojstva> Novo svojstvo za dodavanje novog svojstva.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Kako mogu vidjeti kako moja nekretnina izgleda gostima?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknite na Svojstva> Pregled da vidite kako vaša nekretnina izgleda gostima.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Kako mogu dodati sobe?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Način dodavanja soba ovisi o načinu uređivanja tarifa. U normalnom načinu uređivanja tarifa ne morate dodavati sobe jer se one automatski dodaju prilikom konfiguriranja cijena. Ako koristite Micromanage ili Napredni način uređivanja tarifa, zatim u Postavke> Sobe možete dodavati, uređivati ​​i brisati sobe. Također ćete moći stvarati značajke soba i dodjeljivati ​​te značajke tim sobama. Osim toga, moći ćete prenositi slike za pojedine sobe koje koriste Media Center. Kada stvarate prostorije, pokušajte osigurati da odražavaju vaše prostorije u stvarnom svijetu u vašem posjedu jer će im to olakšati upravljanje. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Kako mogu postaviti cijene soba?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "To ovisi o vašem načinu uređivanja tarifa. Ako koristite način uređivanja normalne tarife (konfiguracija nekretnine> kartica Načini uređivanja tarifa), tada možete konfigurirati broj soba koje imate, cijenu, broj soba ljudi koje svaka soba može primiti i ukupan broj ljudi koje želite pri svakoj rezervaciji. Ovaj način rada omogućuje vam postavljanje cijena soba za sljedećih 10 godina. <br/> Ako koristite napredne ili mikronapravne načine uređivanja tarifa, tada mogu postaviti cijene soba za svaki dan u godinama koje dolaze. Također možete imati više tarifa za istu vrstu sobe, na primjer možete imati jednu tarifu za noćenje s doručkom, a drugu za noćenje, doručak i večernji obrok. Osim ako nemate posebne potrebe , preporučujemo vam da stalno koristite Micromanage, Advanced će raditi na isti način, ali morate biti oprezni kako biste bili sigurni da su početni i završni datumi različitih tarifa uzastopni. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Kako mogu stvoriti dodatne dodatke?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Dodaci se mogu dodati rezervacijama i konfigurirani su u Postavke> Dodaci. To mogu biti izborni ili\" prisilni \"), drugim riječima gost ih ne može poništiti u rezervaciji. Možete ponuditi različite metode naplaćivanja neobaveznih dodataka i jesu li prikazani na stranici Pojedinosti o nekretnini ili ne. Budući da se dodaci mogu prikazati samo ako je rezervacija unutar određenih datuma (na primjer, za sezonsko voće), morate se pobrinuti da postavili su valjane datume od i do. ​​Nakon što ste stvorili opcionalne dodatke, možete im prenijeti slike putem Media Managera. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Kako mogu platiti putem interneta?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Da biste primali plaćanja na mreži, morate imati račun kod davatelja usluga mrežnog plaćanja, koji se zove Gateway. Da biste vidjeli dostupne pristupnike, idite na Configuration Property> Gateways. Kliknite na naziv pristupnika na stranicu s konfiguracijom. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Mogu li dati popuste?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Mogu se ostvariti popusti, postoji nekoliko različitih načina na koje se to može učiniti. Ako rezervirate u ime klijenta, tada možete postaviti vlastiti depozit i ukupne iznose rezervacija u obrascu za rezervaciju , koristeći polja Override Accommodation Total i Override Deposit (gosti ne mogu koristiti ovu značajku). Drugi način da gostu date popust je stvaranje kupona za popuste koji se mogu konfigurirati tako da se mogu koristiti samo između određenih datuma (vrijedi od/do) ili se primjenjuje samo kada rezervacija pada između određenih datuma (rezervacija vrijedi od/do). Ovi kuponi za popust mogu se dodijeliti samo jednom gostu ili ako želite možete isprintati kupone. Ispis uključuje QR kôd koje gosti mogu skenirati u svoje telefone koji ih vode do vašeg obrasca za rezervaciju s već primijenjenim kodom za popust. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervacije');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Kad kliknem Nova rezervacija, bit ću preusmjeren na obrazac za kontakt, zašto?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Prije nego što možete izvršiti rezervacije putem interneta, prvo morate konfigurirati neke cijene (tarife) za svaku vrstu sobe koju imate u svom stvarnom svijetu. Nakon što ste izradili neke tarife, moći ćete prihvatiti rezervacije . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Što su crne rezervacije?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Crne rezervacije su rezervacije koje su stvorene za oduzimanje sobe ili soba. Ne povezuju se s gostima i korisne su, na primjer, ako je potrebno obnoviti sobu.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Slike');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Kako prenijeti slike?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Da biste prenijeli slike, morate posjetiti stranicu Postavke> Media Center. Na ovoj stranici vidjet ćete nekoliko prozora. Pri vrhu ćete možda vidjeti neke bilješke, a ispod njih ćete vidjeti padajući izbornik. Ovaj padajući izbornik omogućuje vam odabir izvora za koji prenosite slike. <br/> S desne strane nalazi se stupac s Dodaj slike, Obriši popis i Prenesi sve. Kliknite Dodaj slike i odaberite neke slike sa svoje radne površine ili mobilnog uređaja. Kada to ste učinili, stupac će se promijeniti u popis sličica. Odavde možete prenijeti jednu ili više slika za svoje resurse. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Koja je\" glavna \"slika?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Glavna slika je ona koja se pojavljuje u rezultatima pretraživanja i u zaglavlju vašeg svojstva (područje pri vrhu stranica koje pokazuju nešto o vašem nekretnini). Morate odabrati sliku koja prikazuje vašu nekretninu u najbolje moguće svjetlo. Da biste prenijeli glavnu sliku, provjerite je li na padajućem popisu u gornjem lijevom kutu odabrana Glavna slika nekretnine, a zatim prenesite jednu ili više slika. Ako prenesete više slika, sve će se slike koristiti u pretraživanju stranica s rezultatima koja se prikazuje kao mali slideshow. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Što su ikone značajki sobe?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Značajke sobe mogu stvoriti korisnici načina Micromanage ili Napredni načini uređivanja tarifa. Oni se mogu povezati s jednom ili više soba i prikazani su u obrascu za rezervaciju. Nakon što ste stvorili značajku sobe, možete prenesite sliku za tu značajku tako da prvo odaberete Ikone značajki sobe na padajućem izborniku u Media Centeru, a zatim odaberete naziv značajke sobe s padajućeg izbornika koji će se pojaviti ispod. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Kako mogu prenijeti slike soba?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Sobe mogu stvoriti korisnici programa Micromanage ili Napredni načini uređivanja tarifa. Nakon što stvorite jednu ili više soba, možete prenijeti više slika za svaku sobu putem Media Centera (odaberite naziv sobe/broj nakon odabirom slika sobe na padajućem izborniku). Ove se slike mogu vidjeti u dijaprojekciji tako da pregledate stranicu za pregled i odaberete karticu Naše sobe, a zatim kliknete vezu Dostupnost. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Kako mogu prenijeti slike dijaprojekcije?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slike dijaprojekcije vide se na stranici Pojedinosti o nekretnini (Pregled), pokraj gumba Rezerviraj sada.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Kako mogu prenijeti dodatne slike?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Slično prostorijama i značajkama soba, najprije morate izraditi Extra. Nakon što to učinite, možete odabrati Dodaci u gornjem padajućem izborniku. Kad ste to učinili, morate odabrati naziv Extra s donjeg padajućeg popisa. Kad je naziv odabran, možete prenijeti jednu ili više slika za taj Extra. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Nešto u vezi s gostima');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Kako mogu blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Ti blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Kako mogu spremiti opise na više jezika?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Da biste spremili opise na više jezika, prvo posjetite stranicu Postavke> Podaci o nekretnini. Tamo spremite opis svoje nekretnine. Zatim promijenite jezik na kojem pregledavate web lokaciju. Sada idite na Postavke Ponovno stranicu Pojedinosti o nekretnini i ponovno spremite pojedinosti. Dakle, ako web lokacija može prikazati i engleski i španjolski (ili bilo koji drugi) jezik, odabrali biste engleski, unijeli opis na engleskom pa kliknite Spremi. Zatim promijenite trenutni jezika na španjolski, a zatim spremite novi španjolski opis. Ovo funkcionira za sve unose na toj stranici. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Mogu li izmijeniti druga svojstva na ovoj web stranici?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Ne, ne možete. Možete upravljati samo svojstvima koja ste stvorili ili kojima ste dodijeljeni kao upravitelj svojstva.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Mogu li izmijeniti druga svojstva na ovoj web stranici?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Da, možete, vi ste upravitelj super nekretnina i možete izmijeniti bilo koja svojstva prikazana na stranici Svojstva popisa.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Koje su vrste gostiju/Kako se mijenjam po osobi po noći?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Na kartici Postavke> Konfiguracija imovine> Tarife i valute možete odlučiti želite li naplaćivati ​​po osobi po noći. Ako naplaćujete po osobi po noći, morat ćete stvoriti jednu ili više vrsta gostiju. Možete stvoriti jednostavnu vrstu gosta gdje im samo dajete opis (npr. Osobe) ili možete stvoriti nekoliko različitih vrsta gostiju, na primjer 'Odrasli' i 'Djeca mlađa od 10 godina'. Za djecu, ako želite ponuditi popust od 50% tada biste postavili \"Je postotak\" na Da, a vrijednost varijacije na 50. Sobe imaju osnovne cijene, ova postavka vam omogućuje da prilagodite cijenu sobe ovisno o vrsti gosta. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Koje su značajke sobe?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Značajke sobe su stvari koje izdvajaju sobu. Mogu biti nešto jednostavno poput aparata za pripremu čaja i kave, ili mogu biti stvari zbog kojih se soba izdiže iznad ostalih, poput\" Pogleda iznad bay \". Nakon što ste stvorili značajku sobe, možete prenijeti slike za tu značajku u Media Center. Ove značajke sobe mogu se vidjeti na stranici dostupnosti sobe, a ako ste svoj objekt konfigurirali za prikaz popisa klasičnih soba (gdje gosti mogu točno odabrati koju sobu žele rezervirati), tada mogu koristiti značajke sobe za filtriranje ooma prikazanih u obrascu za rezervaciju. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Plaćanja');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Ne možete vidjeti pristupnik za plaćanje nakon rezervacije.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Ako ste prijavljeni kao Upravitelj nekretnina, nećete vidjeti pristupnik za plaćanje, jer ne plaćate sami. Samo će korisnici koji nisu upravitelji vidjeti pristupnik prilikom obavljanja rezervacija.");