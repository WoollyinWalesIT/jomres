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

jr_define ('_JOMRES_FAQ', 'Pogosto zastavljena vprašanja');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Lastnosti');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Kako ustvarim znamko?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Kliknite Lastnosti> Nova lastnost, da dodate novo lastnost.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Kako lahko vidim, kako izgleda moja nepremičnina gostom?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Kliknite Lastnosti> Predogled, če si želite ogledati, kako vaša nepremičnina izgleda gostom.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Kako dodam sobe?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Kako dodate sobe, je odvisno od načina urejanja tarif. V običajnem načinu urejanja tarif vam ni treba dodati sob, saj se samodejno dodajo, ko konfigurirate cene. Če uporabljate Način mikromanage ali naprednega urejanja tarif, nato pa v Nastavitve> Sobe lahko dodajate, urejate in brišete sobe. Prav tako boste lahko ustvarili funkcije sobe in te funkcije dodelili tem sobam. Poleg tega boste lahko naložili slike za posamezne sobe, ki uporabljajo Media Center. Ko ustvarite sobe, poskusite zagotoviti, da odražajo vaše sobe v resničnem svetu v vaši nepremičnini, saj jih bo tako lažje upravljati. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Kako nastavim cene sob?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "To je odvisno od načina urejanja tarif. Če uporabljate način urejanja običajnih tarif (Konfiguracija nepremičnine> Načini urejanja tarif)), lahko konfigurirate število sob, ki jih imate, ceno, število ljudi, ki jih lahko sprejme vsaka soba, in skupno število ljudi, ki jih želite pri vsaki rezervaciji. Ta način vam omogoča, da določite cene sob za naslednjih 10 let. <br/> Če uporabljate napredne načine urejanja ali urejanje tarif Micromanage, ste lahko določi cene sob za vsak dan v prihodnjih letih. Lahko imate tudi več tarif za isto vrsto sobe, na primer eno tarifo za nočitev z zajtrkom in drugo za nočitev z zajtrkom, večerjo za večerjo. Razen če imate posebne potrebe , priporočamo, da ves čas uporabljate Micromanage, Advanced bo deloval na enak način, vendar morate biti previdni, da zagotovite, da sta začetni in končni datum različnih tarif zaporedni. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Kako ustvarim dodatne dodatke?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Dodatke lahko dodate rezervacijam in jih konfigurirate v Nastavitve> Dodatki. Te so lahko neobvezne ali\" prisilne \", z drugimi besedami, gost jih pri rezervaciji ne more izločiti. Ponujate lahko različne načine zaračunavanje neobveznih dodatkov in ne glede na to, ali so prikazani na strani s podrobnostmi o nepremičnini. Ker so dodatni stroški prikazani le, če je rezervacija v določenih datumih (na primer za sezonsko sadje), se prepričajte, da ste nastavili datume Veljavno od in Do. Ko ustvarite neobvezne dodatke, jim lahko naložite slike prek programa Media Manager. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Kako lahko plačujem na spletu?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Če želite plačevati prek spleta, morate imeti račun pri ponudniku spletnih plačil, imenovanem Gateway. Če si želite ogledati razpoložljiva prehoda, pojdite na Configuration Property> Gateways. Kliknite ime prehoda na konfiguracijsko stran. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Ali lahko dam popuste?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Popusti se lahko dodelijo na različne načine. Če rezervirate v imenu stranke, lahko v obrazcu za rezervacijo nastavite svoj znesek depozita in rezervacije. , z uporabo polj Override Accommodation Total in Override Deposit (gostje ne morejo uporabljati te funkcije). Drug način, kako gostu dati popust, je ustvariti kupone za popust, ki jih je mogoče konfigurirati tako, da jih je mogoče uporabiti le med določenimi datumi (veljavno) od/do) ali veljajo le, če rezervacija pade med določenimi datumi (rezervacija velja od/do). Ti kuponi za popust se lahko dodelijo samo enemu gostu ali če želite, lahko natisnete kupone. Izpis vključuje kodo QR katere gostje lahko skenirajo v svoje telefone, ki jih odpeljejo v obrazec za rezervacijo z že veljavno kodo za popust. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervacije');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Ko kliknem Nova rezervacija, me odpre obrazec za stik, zakaj?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Preden lahko opravite rezervacijo na spletu, morate najprej konfigurirati nekatere cene (tarife) za vsako vrsto sobe, ki jo imate v svojem nepremičninskem objektu. Ko boste ustvarili nekaj tarif, boste lahko sprejemali rezervacije . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Kaj so črne rezervacije?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Črne rezervacije so rezervacije, ustvarjene za odvzem sobe ali sob. Niso povezane z nobenim gostom in so na primer uporabne, če je treba sobo prenoviti.") ;
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Slike');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Kako naložim slike?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Če želite naložiti slike, morate obiskati stran Nastavitve> Predstavnostno središče. Na tej strani boste videli več podoknov. Na vrhu boste morda videli nekaj zapiskov, pod njimi pa spustni meni. Ta spustni meni vam omogoča, da izberete, za kateri vir naložite slike. <br/> Na desni je stolpec z Dodaj slike, Počisti seznam in Naloži vse. Kliknite Dodaj slike in izberite nekaj slik iz namizja ali mobilne naprave. Ko ko ste to storili, se bo stolpec spremenil v seznam sličic. Od tu lahko naložite eno ali več slik za svoje vire. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Kaj je\" glavna \"slika?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Glavna slika je tista, ki se prikaže v rezultatih iskanja in v glavi vaše nepremičnine (območje na vrhu strani, ki prikazuje nekaj o vaši nepremičnini). Izberite sliko, ki prikazuje vašo nepremičnino v najboljša možna svetloba. Če želite naložiti glavno sliko, se prepričajte, da je na spustnem seznamu v zgornjem levem kotu izbrana Lastnost glavne slike, nato naložite eno ali več slik. Če naložite več slik, bodo pri iskanju uporabljene vse slike stran z rezultati je prikazana kot majhna diaprojekcija. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Kaj so ikone funkcij sobe?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Funkcije sobe lahko ustvarijo uporabniki načinov urejanja tarif Micromanage ali Advanced. Te so lahko povezane z eno ali več sobami in so prikazane v obrazcu za rezervacijo. Ko ustvarite funkcijo sobe, lahko naložite sliko za to funkcijo tako, da v spustnem meniju v predstavnostnem centru najprej izberete ikone funkcij sobe, nato pa v spustnem meniju, ki se prikaže spodaj, izberete ime funkcije sobe. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Kako naložim slike sob?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Sobe lahko ustvarijo uporabniki načinov urejanja tarif Micromanage ali Advanced. Ko ustvarite eno ali več sob, lahko v medijsko središče naložite več slik za vsako sobo (izberite ime sobe/številko za v spustnem meniju izberite Slike sobe). Te slike si lahko ogledate v diaprojekciji tako, da si ogledate stran Predogled in izberete zavihek Naše sobe ter nato kliknete povezavo Dostopnost. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Kako naložim slike diaprojekcije?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slike diaprojekcije so prikazane na strani Podrobnosti o lastnostih (Predogled), poleg gumba Rezerviraj zdaj.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Kako naložim dodatne slike?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Podobno kot sobe in funkcije sobe morate najprej ustvariti dodatno. Ko to storite, lahko v zgornjem spustnem meniju izberete Dodatki. Ko to storite, morate izbrati ime Extra s spodnjega spustnega seznama. Ko je izbrano ime, lahko naložite eno ali več slik za to Extra. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Nekaj ​​v zvezi z gosti');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Kako naj blahblahblah?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Ti blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Kako shranim opise v več jezikih?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Če želite opise shraniti v več jezikih, najprej obiščite stran Nastavitve> Podrobnosti o lastnosti. Tam shranite opis svoje nepremičnine. Nato spremenite jezik, v katerem si ogledujete spletno mesto. Zdaj pojdite na Nastavitve Ponovno stran s podrobnostmi o nepremičnini in znova shranite podrobnosti. Če torej spletno mesto prikazuje angleški in španski (ali kateri koli drug) jezik, bi izbrali angleščino, vnesli opis v angleščini in kliknite Shrani. Naprej, spremenite trenutni jezik v španščino, nato shranite nov španski opis. To deluje za vse vnose na tej strani. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Ali lahko spremenim druge lastnosti na tem spletnem mestu?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Ne, ne morete. Lahko upravljate samo lastnosti, ki ste jih ustvarili ali ste jim bili dodeljeni kot upravitelj nepremičnin.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Ali lahko spremenim druge lastnosti na tem spletnem mestu?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Da, lahko, ste upravitelj super nepremičnin in lahko spremenite vse lastnosti, prikazane na strani Lastnosti seznama.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Kakšne so vrste gostov/Kako spremenim na osebo na noč?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "V zavihku Nastavitve> Konfiguracija nepremičnine> Tarife in valute se lahko odločite, ali želite zaračunati na osebo na noč. Če zaračunavate na osebo na noč, boste morali ustvariti eno ali več vrst gostov. Ustvarite lahko preprosto vrsto gosta, pri kateri jim samo opišete (npr. Osebe), ali pa ustvarite več različnih vrst gostov, na primer 'Odrasli' in 'Otroci, mlajši od 10 let'. Za otroke, če želite ponuditi 50 -odstotni popust, potem nastavite 'Je odstotek' na Da, vrednost Variance pa na 50. Sobe imajo osnovne cene, ta nastavitev vam omogoča, da prilagodite ceno sobe glede na vrsto gosta. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Kakšne so funkcije sobe?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Lastnosti sobe so stvari, zaradi katerih soba izstopa. Lahko so nekaj preprostega, na primer naprave za pripravo čaja in kave, ali pa so stvari, zaradi katerih se soba resnično dvigne nad drugimi, na primer\" Pogledi nad bay \". Ko ustvarite funkcijo sobe, lahko naložite slike za to funkcijo v predstavnostni center. Te funkcije sobe si lahko ogledate na strani razpoložljivosti sobe in če ste svojo lastnino nastavili za prikaz sloga seznama klasičnih sob (kjer lahko gostje natančno izberejo, katero sobo želijo rezervirati), nato lahko uporabijo funkcije sobe za filtriranje oomov, prikazanih v obrazcu za rezervacijo. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Plačila');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Plačilnega prehoda po rezervaciji ne vidite.");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Če ste prijavljeni kot upravitelj nepremičnin, ne boste videli plačilnega prehoda, ker ne plačate sami. Pri rezervacijah bodo prehod videli samo uporabniki, ki niso upravitelji.");


