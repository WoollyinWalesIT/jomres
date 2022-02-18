<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('VIDEO_TUTORALS_TITLE', 'Video vodiči');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Upravljačka ploča');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Ovaj vodič prikazuje vam kako se koristi upravljačka ploča za upravljanje nekretninama.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Vremenska traka');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Kako koristiti kalendar vremenske trake. U ovom videozapisu stvaramo novog gosta unošenjem njegovih podataka u skočni prozor, postojeći se gosti mogu ponovno koristiti odabirom njihovog imena s padajućeg izbornika u skočnom prozoru.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Svojstva popisa');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Kako koristiti stranicu Svojstva popisa za pregled dodatnih informacija, promjenu stupaca i traženje određenih svojstava.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Uredite detalje svoje nekretnine');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Uređivanje podataka o vašoj nekretnini, uključujući povlačenje po karti za postavljanje vaše lokacije.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Promijeni način uređivanja tarife');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Vaš način uređivanja tarifa određuje način na koji možete postaviti cijene za svoju nekretninu. To činite putem stranice Konfiguracija nekretnine.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Normalni način uređivanja tarifa za hotele, pansione, pansione');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normalni način uređivanja tarifa jednostavna je značajka uređivanja tarifa koja vam omogućuje odabir broja soba u objektu, cijene sobe, broja gostiju u svakoj sobi i maksimalnog broja gostiju) u stranci. Kada se spreme, te cijene vrijede sljedećih 10 godina. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Uređivanje uobičajenih tarifa za vile i stanove');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normalni način uređivanja tarifa jednostavna je značajka za uređivanje tarifa koja vam omogućuje da odaberete podvrstu nekretnine, cijenu nekretnine po noći i maksimalni broj gostiju na zabavi. Kad se te cijene spreme, tada vrijedi sljedećih 10 godina. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Način uređivanja tarifa za mikro upravljanje (preporučeno)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Način uređivanja tarifa Micromanage omogućuje vam da konfigurirate cijenu i minimalni broj dana za koje boravak može biti važeći za svaki dan u godini. To je moćan alat koji vam daje potpunu kontrolu u ovom primjeru pokazat ćemo vam kako stvoriti više skupova cijena za istu vrstu sobe, postaviti različite cijene za različita razdoblja i različite cijene za određene dane u tjednu unutar razdoblja. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Način uređivanja tarifa za mikro upravljanje za vile/stanove (preporučeno)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Način uređivanja tarifa Micromanage omogućuje vam da konfigurirate cijenu i minimalni broj dana za koje boravak može biti važeći za svaki dan u godini. To je moćan alat koji vam daje potpunu kontrolu previsoke cijene. U ovom primjeru pokazat ćemo vam kako stvoriti više skupova cijena. Postavit ćemo različite cijene za različita razdoblja i različite cijene za određene dane u tjednu unutar razdoblja. Nakon što to učinimo, izradit ćemo više tarifa za iste imovine, ali s različitim brojevima gostiju koji nam omogućuju preciznu kontrolu cijena za svaki scenarij. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Različite tarife za različite brojeve gostiju');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Možete stvoriti više tarifa za istu vrstu sobe, pa ako želite različite cijene za različit broj gostiju, to možete učiniti.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Po osobi po noći - vrste gostiju');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Za naplatu po osobi po noći morat ćete stvoriti tipove gostiju. Različite vrste gostiju mogu varirati u odnosu na osnovnu cijenu sobe, pa djeca različite dobi mogu imati različite popuste ovisno o njihovoj dobi. Vi ne morate naplaćivati ​​po osobi po noći za korištenje Vrste gostiju, možete ih koristiti i ako naplaćujete paušalni iznos, ali ipak želite zabilježiti broj gostiju ili zato što želite ograničiti broj gostiju u rezervaciji. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Medijski centar - prijenos slika');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Sve se slike prenose putem medijskog centra. U ovom ćemo videozapisu prenijeti sliku glavnog svojstva, neke slike dijaprojekcije, mali izbor slika koje će se prikazati na stranici rezultata pretraživanja i slike za jednu od sobe.');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Medijski centar - prijenos slika');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Sve se slike prenose putem medijskog centra. U ovom ćemo videozapisu prenijeti sliku glavnog svojstva, mali izbor slika koje će se prikazati na stranici s rezultatima pretraživanja i neke slike dijaprojekcije.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administratorska upravljačka ploča');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Ovo je vaša zadana odredišna stranica u administratorskom području. Možete vidjeti sažetak različitih statistika web mjesta i vidjeti koja svojstva postoje u sustavu, koja su potpuna, a koja su dovršena i čekaju pregled prije odobrenja . Nakon što je nekretnina odobrena, tada je može objaviti upravitelj imovine. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Upravitelj dodataka, instalacija i upotreba');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Ovaj video prikazuje kako se koristi Upravitelj dodataka, uključujući instalaciju upravitelja dodataka, a zatim instalaciju i deinstalaciju dodatka. Ako nemate licencni ključ, od vas će se tražiti da spremite na web mjestu Konfiguracija prije nego što možete instalirati upravitelja. Ako prije niste koristili upravitelja dodataka, tada će ovaj popis u početku biti prazan, u ovom primjeru već imam instalirane razne dodatke. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Upravitelji nekretnina');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Upravitelji nekretnina dodaju se na jedan od dva načina. Ili sami stvaraju svojstva (mogu se onemogućiti u konfiguraciji web mjesta) ili administrator web mjesta može dodijeliti postojećeg upravitelja određenim svojstvima. Menadžeri mogu pristupiti samo svojstvima koja imaju stvoreni ili su im dodijeljeni. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Kontrola pristupa');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Značajku Kontrole pristupa možete upotrijebiti za onemogućavanje opcija izbornika, čineći ih vidljivim samo određenim klasama korisnika ili čak potpuno nestajući. Ako traka izbornika nema nijednu opciju izbornika za prikaz će potpuno nestati, pa ako ne želite da posjetitelji web stranice vide bilo koje opcije, tada možete jednostavno postaviti sve opcije tako da budu vidljive prijavljenim korisnicima, na primjer. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Tipovi nekretnina i soba');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'U ovom videu vidjet ćete dva važna koncepta. Prvi je stvaranje tipova nekretnina i pridruženih vrsta soba. Također ćete vidjeti kako registrirani korisnik koji još nije upravitelj stvara vlastitu nekretninu i postaje upravitelja (ali samo u mogućnosti konfigurirati svojstvo koje su stvorili). Vrste nekretnina i soba povezane su, nakon što ste stvorili vrstu svojstva, morate dodati vrstu sobe, u protivnom će upravitelji nekretnina vidjeti crvene poruke o pogrešci kada pokušaju konfigurirati svoja svojstva. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Prijenos oznaka karata');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Koristite Media Center za prijenos oznaka karte. <a href="https://mapicons.mapsmarker.com/  " target="_blank" Ovdje možete pronaći veliki izvor oznaka. < /a> Postupak za prijenos značajki nekretnina, značajki soba, tipova soba i drugih je isti. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Značajke imovine');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'U ovom videu pokazat ćemo vam kako stvoriti značajke svojstava i prenijeti slike za njih.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Kratki kodovi');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Kratki kodovi iznimno su moćna značajka Jomresa. Princip je isti i za Joomlu i za Wordpress. U ovom videu pokazat ćemo vam gdje možete pogledati kratke kodove (ovaj popis će se promijeniti ovisno o tome koji su dodaci instaliran) i kako ih koristiti. Kodove možete koristiti u člancima ili modulima. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Datoteke dnevnika');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Ovaj će vam videozapis pokazati kako pregledavati datoteke zapisnika. Opsežno bilježenje događa se pri pokretanju sustava. U načinu rada za proizvodnju (Konfiguracija web lokacije> Otklanjanje pogrešaka) generira se manje zapisnika pa ako testirate novu značajku, tada trebali biste postaviti svoju web lokaciju na razvojnu. Ako želite dodati svoje bilježenje u svoje Jomres skripte, pogledajte <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> našu stranicu s priručnikom o tome kako to učiniti. </a> Ovdje ćemo baciti lažnu pogrešku, a zatim pregledati datoteku dnevnika. Budući da je web mjesto tamo postavljeno na Razvoj ima puno informacija, obično biste samo vidjeli poruku da je došlo do pogreške i da je prijavljena. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Prevođenje oznaka i drugih nizova');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Postoji nekoliko načina za prevođenje jezičnih nizova u Jomresu, mogli biste uređivati ​​jezične datoteke, ali se one mogu prebrisati prilikom nadogradnje. Umjesto toga, preporučujemo vam da koristite ugrađene alate za prevođenje koji su jedinstveni za naše softver. Ako je niz nešto što je uneseno u obrazac, kao što je naziv vrste sobe, možete upotrijebiti stranicu Uređivanje oznaka. Ako je niz iz jezične datoteke, tada možete koristiti alat za uređivanje jezičnih datoteka. Samo upotrijebite alat za pretraživanje preglednika da pronađete niz koji želite promijeniti, a zatim kliknite vezu da biste ga promijenili. Ove se promjene spremaju u bazu podataka i stoga su sigurne za ažuriranje. Možete imati različite oznake za različite vrste svojstava, tako da možete promijenite Novo svojstvo u Novo kamp, ​​na primjer, promjenom padajućeg izbornika Jezični kontekst pri vrhu stranice prije promjene oznake. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Dodavanje svojstava');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> U ovoj fazi Jomres je instaliran u CMS i dodan je u sučelje (ili ste u Wordpressu stvorili stranicu i dodali joj osnovni Jomres kratki kod). </ p>
<p> Ovdje ćete vidjeti kako registrirani korisnik koji još nije upravitelj nekretnina u Jomresu može stvoriti novo svojstvo, konfigurirati neke osnovne postavke i objaviti ga. </p>
<p> Na kraju ćete vidjeti da je upravitelj automatski postavljen kao upravitelj imovine, no oni mogu konfigurirati samo svoja svojstva. </p>
<p> Iako sučelje u Wordpressu izgleda drugačije, postupak je potpuno isti za Joomlu ili Wordpress. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Kategorije nekretnina');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Kategorije svojstava jednostavna su značajka koja upraviteljima nekretnina omogućuje dodjeljivanje njihovih svojstava određenoj kategoriji. Administratori web mjesta mogu stvoriti kratke kodove koji će navesti sva svojstva u kategoriji, kako je prikazano u ovom videu.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Svojstva administratora web lokacije za pregled');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Odavde ne upravljate svojstvima, možete upravljati samo svojstvima s sučelja, međutim na ovom popisu možete vidjeti svojstva koja čekaju odobrenje (ako je značajka omogućena) i sva ona koja jesu nepotpuna (npr. još je potrebno prenijeti slike, postaviti cijene itd.) Kliknite na naziv svojstva da biste bili preusmjereni na nadzornu ploču za tu nekretninu. Tada ćete moći koristiti odjeljke vodiča pri vrhu stranice kako biste vidjeli korake koje trebate uzeti kako biste dovršili i objavili svojstvo. </p> ');

