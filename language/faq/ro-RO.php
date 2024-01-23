<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Întrebări frecvente');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Properties');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Cum creez o proprietate?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Faceți clic pe Proprietăți> Proprietate nouă pentru a adăuga o proprietate nouă.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Cum pot vedea cum arată proprietatea mea pentru oaspeți?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Faceți clic pe Proprietăți> Previzualizare pentru a vedea cum arată proprietatea dvs. pentru oaspeți.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Cum adaug camere?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Modul în care adăugați camere depinde de modul de editare a tarifelor. În modul normal de editare a tarifelor, nu este nevoie să adăugați camere, deoarece acestea sunt adăugate automat atunci când vă configurați prețurile. Dacă utilizați Micromanage sau Mod avansat de editare a tarifelor, apoi în Setări> Camere puteți adăuga, edita și șterge camere. De asemenea, veți putea crea funcții de cameră și atribui aceste funcții acelor camere. În plus, veți putea încărca imagini pentru fiecare persoană. camere folosind Media Center. Când creați camere, ar trebui să încercați să vă asigurați că acestea reflectă camerele din lumea reală din proprietatea dvs., deoarece acestea le vor face mai ușor de gestionat. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Cum stabilesc prețurile camerelor?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Acest lucru depinde de modul de editare a tarifului dvs. persoanele pe care fiecare cameră le poate găzdui și numărul total de persoane pe care le doriți în fiecare rezervare. Acest mod vă permite să setați prețurile camerelor pentru următorii 10 ani. <br/> Dacă utilizați modurile de editare a tarifelor Advanced sau Micromanage, atunci sunteți puteți stabili prețurile camerelor pentru fiecare zi pentru anii următori. Puteți avea, de asemenea, mai multe tarife pentru același tip de cameră, de exemplu, puteți avea un tarif pentru Cazare & Mic dejun și altul pentru Cazare, Mic dejun și Masă de seară. Cu excepția cazului în care aveți o nevoie specifică , vă recomandăm să utilizați Micromanage tot timpul, Advanced va funcționa în același mod, dar trebuie să aveți grijă să vă asigurați că datele de începere și de încheiere ale diferitelor tarife sunt consecutive. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Cum creez extras opțional?');
jr_define("_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS", "Extras pot fi adăugate la rezervări și sunt configurate în Setări> Extras. Acestea pot fi opționale sau\" forțate \", cu alte cuvinte oaspetele nu le poate deselecta în rezervare. Puteți oferi diferite metode de taxare pentru extra opțional și dacă acestea sunt afișate sau nu în pagina Detalii despre proprietate. Deoarece suplimentele pot fi afișate numai dacă rezervarea este în anumite date (de exemplu, pentru fructele de sezon), ar trebui să vă asigurați că ați setat datele valabile de la și până la. Odată ce ați creat extensii opționale, puteți încărca imagini pentru acestea prin Media Manager. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Cum pot efectua plăți online?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Pentru a efectua plăți online, trebuie să aveți un cont la un furnizor de plăți online, numit Gateway. Pentru a vedea gateway-urile disponibile, accesați Configurarea proprietății> fila Gateways. Faceți clic pe numele unui gateway care urmează să fie preluat la pagina de configurare. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Pot oferi reduceri?');
jr_define("_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS", "Se pot acorda reduceri, există o serie de moduri diferite în care se poate face acest lucru. Dacă efectuați o rezervare în numele unui client, atunci puteți seta propriile depozite și totaluri de rezervare în formularul de rezervare , folosind câmpurile Înlocuire depozit total și Înlocuire depozit (oaspeții nu pot utiliza această funcție). O altă modalitate de a oferi o reducere oaspeților este de a crea cupoane de reducere, care pot fi configurate astfel încât să poată fi utilizate numai între anumite date (valabil de la / la) sau aplicat numai atunci când rezervarea se încadrează între anumite date (rezervare valabilă de la / la). Aceste cupoane de reducere pot fi atribuite unui singur oaspete sau, dacă doriți, puteți imprima cupoanele. Imprimarea include un cod QR pe care oaspeții le pot scana pe telefoanele lor, care îi duc la formularul dvs. de rezervare cu codul de reducere care se aplică deja. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervări');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Când dau clic pe Rezervare nouă, sunt condus la formularul de contact, de ce?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Înainte de a putea face rezervări online, trebuie mai întâi să configurați câteva prețuri (tarife) pentru fiecare tip de cameră pe care îl aveți în proprietatea dvs. din lumea reală. Odată ce ați creat câteva tarife, veți putea face rezervări . ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Ce sunt rezervările negre?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Rezervările negre sunt rezervări create pentru a scoate din funcțiune o cameră sau camere. Nu sunt asociate cu niciun invitat și sunt utile, de exemplu, dacă o cameră trebuie renovată.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Imagini');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Cum pot încărca imagini?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Pentru a încărca imagini, trebuie să accesați pagina Setări> Media Center. Pe această pagină veți vedea mai multe panouri. În partea de sus este posibil să vedeți câteva note, iar sub ele veți vedea o listă derulantă. Această listă derulantă vă permite să selectați pentru ce resursă încărcați imagini. <br/> În dreapta este o coloană cu Adăugați imagini, Ștergeți lista și Încărcați toate. Faceți clic pe Adăugați imagini și selectați câteva imagini de pe desktop sau de pe dispozitivul mobil. Când ați făcut acest lucru, coloana se va transforma într-o listă de miniaturi. De aici puteți încărca una sau mai multe imagini pentru resursele dvs. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Ce este imaginea\" Main \"?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Imaginea principală este cea care apare în rezultatele căutării și în antetul proprietății dvs. (zona din partea de sus a paginilor care arată ceva despre proprietatea dvs.). Ar trebui să alegeți o imagine care să vă afișeze proprietatea în cea mai bună lumină posibilă. Pentru a încărca o imagine principală, asigurați-vă că Imaginea principală a proprietății este selectată în lista verticală din partea stângă sus, apoi încărcați una sau mai multe imagini. Dacă încărcați mai multe imagini, toate imaginile vor fi utilizate în căutare pagina rezultatelor se afișează ca o mică prezentare de diapozitive. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Ce sunt pictogramele caracteristicilor camerei?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Caracteristicile camerei pot fi create de utilizatorii modurilor de editare tarifară Micromanage sau Advanced. Acestea pot fi conectate la una sau mai multe camere și sunt afișate în formularul de rezervare. După ce ați creat o caracteristică a camerei, puteți încărcați o imagine pentru acea funcție selectând mai întâi pictogramele funcțiilor camerei în meniul derulant din Media Center, apoi selectând numele funcției camerei din meniul derulant care va apărea dedesubt. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Cum pot încărca imagini de cameră?');
jr_define("_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS", "Camerele pot fi create de utilizatorii modurilor de editare tarifară Micromanage sau Advanced. Odată ce una sau mai multe camere au fost create, puteți încărca mai multe imagini pentru fiecare cameră prin Media Center (selectați numele / numărul camerei după selectând Imagini de cameră în meniul derulant). Aceste imagini pot fi văzute într-un slideshow vizualizând pagina Previzualizare și selectând fila Camerele noastre, apoi făcând clic pe linkul Disponibilitate. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Cum încarc imagini de prezentare?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Imaginile prezentării sunt văzute în pagina Detalii proprietate (Previzualizare), lângă butonul Rezervați acum.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Cum pot încărca imagini suplimentare?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Similar camerelor și caracteristicilor camerei, trebuie mai întâi să creați un Extra. Odată ce ați terminat, puteți selecta Extra în meniul derulant superior. Când ați făcut acest lucru, trebuie să selectați numele Extra din lista derulantă de mai jos. Când este selectat numele, puteți încărca una sau mai multe imagini pentru acel Extra. ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Ceva legat de oaspeți');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Cum blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Tu blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Cum pot salva descrierile în mai multe limbi?');
	
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Pentru a salva descrierile în mai multe limbi, accesați mai întâi pagina Setări> Detalii proprietate. Salvați descrierea proprietății dvs. Acolo, schimbați limba în care vizualizați site-ul. Acum accesați Setări Pagina Detalii proprietate din nou și salvați din nou detaliile. Deci, dacă site-ul este capabil să afișeze atât limbile engleză, cât și spaniola (sau orice altă limbă), veți selecta limba engleză, introduceți descrierea în engleză, apoi faceți clic pe Salvare. Apoi, schimbați actualul limba în spaniolă, apoi salvați noua descriere în spaniolă. Aceasta funcționează pentru toate intrările de pe pagina respectivă. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Pot modifica alte proprietăți de pe acest site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nu, nu poți. Poți administra doar proprietățile pe care le-ai creat sau cărora le-ai fost atribuit ca administrator de proprietăți.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Pot modifica alte proprietăți de pe acest site?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Da poți, ești Super Manager de proprietate și poți modifica orice proprietăți afișate în pagina Proprietăți listă.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Ce sunt tipurile de oaspeți / Cum schimb pe persoană pe noapte?');
jr_define("_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES", 'În Setări> Configurare proprietate> fila Tarife și valute, puteți decide dacă doriți să percepeți per persoană pe noapte. Dacă percepeți per persoană pe noapte, va trebui să creați unul sau mai multe tipuri de oaspeți. Puteți crea un tip simplu de invitat, în care doar le oferiți o descriere (de exemplu, Persoane) sau puteți crea mai multe tipuri diferite de oaspeți, de exemplu "Adulți" și "Copii sub 10 ani". Pentru copii, dacă doriți să oferiți o reducere de 50%, apoi ați seta "Este procentual" la Da, iar valoarea Varianței la 50. Camerele au tarife de bază, această setare vă permite să ajustați prețul camerei în funcție de tipul de oaspete. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Ce sunt caracteristicile camerei?');
jr_define("_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES", 'Caracteristicile camerei sunt lucruri care fac camera să iasă în evidență. Ele pot fi ceva simplu, cum ar fi facilități pentru prepararea de ceai și cafea, sau pot fi lucruri care fac într-adevăr camera să se ridice deasupra celorlalte, cum ar fi" Vedere spre bay ". Odată ce ați creat o funcție de cameră, puteți încărca imagini pentru această funcție în Media Center. Aceste caracteristici de cameră pot fi vizualizate pe pagina de disponibilitate a camerei și dacă ați configurat proprietatea dvs. pentru a afișa stilul listei Camere clasice (în cazul în care oaspeții pot selecta exact ce cameră doresc să rezerve), atunci pot folosi funcțiile camerei pentru a filtra saloanele afișate în formularul de rezervare. ');

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Plăți');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Nu puteți vedea gateway-ul de plată după efectuarea unei rezervări.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Dacă sunteți conectat ca administrator de proprietăți, nu veți vedea gateway-ul de plată, deoarece nu vă plătiți singur. Numai utilizatorii non-manager vor vedea gateway-ul atunci când fac rezervări.");
