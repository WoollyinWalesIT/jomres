<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Bieži uzdotie jautājumi');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Rekvizīti');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Kā izveidot īpašumu?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Noklikšķiniet uz Properties> New Property, lai pievienotu jaunu īpašumu.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Kā es varu redzēt, kā mans īpašums izskatās viesiem?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Noklikšķiniet uz Rekvizīti> Priekšskatīt, lai redzētu, kā jūsu īpašums izskatās viesiem.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Kā pievienot telpas?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Telpu pievienošanas veids ir atkarīgs no tarifu rediģēšanas režīma. Parastā tarifu rediģēšanas režīmā jums nav jāpievieno telpas, jo tās tiek automātiski pievienotas, konfigurējot cenas. Ja izmantojat Mikrovaldības vai papildu tarifu rediģēšanas režīms, pēc tam sadaļā Iestatījumi> Istabas varat pievienot, rediģēt un dzēst telpas. Jūs varēsiet arī izveidot telpas funkcijas un piešķirt šīs funkcijas šīm telpām. Turklāt jūs varēsit augšupielādēt attēlus atsevišķām personām telpas, izmantojot multivides centru. Veidojot telpas, jums jācenšas nodrošināt, lai tās atspoguļotu jūsu reālās pasaules telpas jūsu īpašumā, jo tas atvieglos to pārvaldību. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Kā iestatīt istabu cenas?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Tas ir atkarīgs no jūsu tarifu rediģēšanas režīma. Ja izmantojat parastā tarifu rediģēšanas režīmu (cilne Īpašuma konfigurācija> Tarifu rediģēšanas režīmi), varat konfigurēt savu istabu skaitu, cenu, numuru cilvēku katrā istabā un iespējamo cilvēku skaitu katrā rezervācijā. Šis režīms ļauj iestatīt istabu cenas nākamajiem 10 gadiem. <br/> Ja izmantojat uzlaboto vai mikrovaldības tarifu rediģēšanas režīmu, tad var noteikt numuru cenas katrai dienai turpmākajos gados. Vienam un tam pašam istabas veidam var būt arī vairāki tarifi, piemēram, viens tarifs par pansiju un cits par gultas, brokastu un vakara maltīti. Ja vien jums nav īpašas vajadzības. , mēs iesakām visu laiku izmantot Micromanage, Advanced darbosies tādā pašā veidā, taču jums jābūt uzmanīgiem, lai nodrošinātu, ka jūsu dažādo tarifu sākuma un beigu datumi ir secīgi. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Kā izveidot papildu papildierīces?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Papildinājumus var pievienot rezervācijām, un tos var konfigurēt sadaļā Iestatījumi> Papildinājumi. Tie var būt neobligāti vai piespiedu kārtā, citiem vārdiem sakot, viesis nevar atcelt to atlasi rezervācijā. Varat piedāvāt dažādas metodes par papildu piederumu iekasēšanu un to, vai tie tiek parādīti lapā Īpašuma informācija. Tā kā papildiespējas var parādīt tikai tad, ja rezervācija ir veikta noteiktos datumos (piemēram, sezonas augļiem), jums jāpārliecinās, ka ir iestatījuši datumus Derīgs no un uz. Kad esat izveidojis papildu papildierīces, varat augšupielādēt tiem attēlus, izmantojot multivides pārvaldnieku. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Kā es varu veikt maksājumus tiešsaistē?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Lai veiktu maksājumus tiešsaistē, jums ir jābūt tiešsaistes maksājumu pakalpojumu sniedzēja kontam, ko sauc par vārteju. Lai skatītu pieejamās vārtejas, dodieties uz cilni Īpašuma konfigurācija> Vārtejas. Noklikšķiniet uz vārtejas nosaukuma uz tās konfigurācijas lapu. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Vai varu piešķirt atlaides?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Atlaides var tikt piešķirtas, to var izdarīt vairākos veidos. Ja veicat rezervāciju klienta vārdā, rezervācijas veidlapā varat iestatīt savus depozīta un rezervācijas kopsummas. , izmantojot laukus Override Accommodation Total un Override Deposit (viesi nevar izmantot šo funkciju). Vēl viens veids, kā piešķirt viesim atlaidi, ir izveidot atlaižu kuponus, kurus var konfigurēt tā, lai tos varētu izmantot tikai noteiktos datumos (Derīgs no/uz) vai tiek piemērots tikai tad, ja rezervācija notiek noteiktos datumos (rezervācija ir spēkā no/līdz). Šos atlaižu kuponus var piešķirt tikai vienam viesim vai, ja vēlaties, varat izdrukāt kuponus. Izdrukā ir iekļauts QR kods kurus viesi var ieskenēt savos tālruņos, kas novirza jūs uz jūsu rezervācijas veidlapu, un jau ir piemērots atlaižu kods. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervācijas');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Kad noklikšķinu uz Jauna rezervācija, tieku novirzīta uz saziņas formu, kāpēc?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Lai varētu veikt rezervācijas tiešsaistē, vispirms ir jākonfigurē dažas cenas (tarifi) katram istabas veidam, kas atrodas jūsu reālajā pasaulē. Kad būsit izveidojis dažus tarifus, varēsit veikt rezervācijas. . ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Kas ir melnās rezervācijas?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Melnās rezervācijas ir rezervācijas, kas izveidotas, lai izņemtu kādu telpu vai telpas. Tās nav saistītas ar nevienu viesi un ir noderīgas, piemēram, ja ir nepieciešama telpas atjaunošana.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Attēli');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Kā augšupielādēt attēlus?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Lai augšupielādētu attēlus, jums jāapmeklē lapa Iestatījumi> Multivides centrs. Šajā lapā redzēsit vairākas rūts. Augšpusē, iespējams, būs redzamas dažas piezīmes, bet zem tām - nolaižamā izvēlne. Šajā nolaižamajā izvēlnē varat izvēlēties resursu, kuram augšupielādējat attēlus. <br/> Labajā pusē ir sleja ar Pievienot attēlus, Notīrīt sarakstu un Augšupielādēt visu. Noklikšķiniet uz Pievienot attēlus un atlasiet dažus attēlus no darbvirsmas vai mobilās ierīces. ja esat to izdarījis, kolonna tiks mainīta uz sīktēlu sarakstu. No šejienes varat augšupielādēt vienu vai vairākus attēlus saviem resursiem. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "Kāds ir galvenais attēls?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Galvenais attēls ir tas, kas tiek parādīts meklēšanas rezultātos un jūsu īpašuma galvenē (apgabals lapu augšdaļā, kas parāda kaut ko par jūsu īpašumu). Jums jāizvēlas attēls, kurā parādīts jūsu īpašums vislabākais iespējamais apgaismojums. Lai augšupielādētu galveno attēlu, augšējā kreisajā stūrī esošajā nolaižamajā sarakstā atlasiet Īpašuma galvenais attēls, pēc tam augšupielādējiet vienu vai vairākus attēlus. Ja augšupielādēsit vairākus attēlus, visi attēli tiks izmantoti meklēšanā rezultātu lapa tiek parādīta kā neliela slaidrāde. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Kas ir telpu funkciju ikonas?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Telpu funkcijas var izveidot Micromenage vai uzlaboto tarifu rediģēšanas režīmu lietotāji. Tos var saistīt ar vienu vai vairākām telpām un parādīt rezervācijas veidlapā. Kad esat izveidojis telpas funkciju, varat augšupielādējiet šīs funkcijas attēlu, vispirms Media Center nolaižamajā izvēlnē atlasot Istabas funkciju ikonas, pēc tam nolaižamajā izvēlnē, kas parādīsies zemāk, atlasot telpas funkcijas nosaukumu. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Kā augšupielādēt istabas attēlus?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Istabas var izveidot Micromenage vai Advanced tarifu rediģēšanas režīmu lietotāji. Kad ir izveidota viena vai vairākas telpas, varat augšupielādēt vairākus attēlus katrai telpai, izmantojot Media Center (pēc nolaižamajā izvēlnē atlasot telpas attēlus). Šos attēlus var redzēt slaidrādē, apskatot priekšskatījuma lapu un atlasot cilni Mūsu telpas, pēc tam noklikšķinot uz saites Pieejamība. ');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Kā augšupielādēt slaidrādes attēlus?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slaidrādes attēli ir redzami lapā Īpašuma informācija (priekšskatījums) blakus pogai Rezervēt tūlīt.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Kā augšupielādēt papildu attēlus?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Līdzīgi kā istabās un istabas funkcijās, vispirms jāizveido papildu. Kad tas ir izdarīts, augšējā nolaižamajā izvēlnē varat atlasīt Papildu. Kad esat to izdarījis, jums jāizvēlas nosaukums papildu no zemāk esošā nolaižamā saraksta. Kad ir izvēlēts nosaukums, varat augšupielādēt vienu vai vairākus attēlus šim papildam. ");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Kaut kas saistīts ar viesiem');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Kā es varu blahblahblah?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Tu blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Kā saglabāt aprakstus vairākās valodās?');


jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Lai saglabātu aprakstus vairākās valodās, vispirms apmeklējiet lapu Iestatījumi> Īpašuma informācija. Saglabājiet sava īpašuma aprakstu tur. Pēc tam mainiet valodu, kurā skatāt vietni. Tagad dodieties uz Iestatījumi Atkal lapa par rekvizītu informāciju un vēlreiz saglabājiet informāciju. Tātad, ja vietne var parādīt gan angļu, gan spāņu (vai citas) valodas, atlasiet angļu valodu, ievadiet aprakstu angļu valodā un pēc tam noklikšķiniet uz Saglabāt. Tālāk mainiet pašreizējo valodu uz spāņu valodu, pēc tam saglabājiet jauno aprakstu spāņu valodā. Tas darbojas visām ievadēm šajā lapā. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Vai es varu modificēt citus rekvizītus šajā vietnē?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Nē, jūs nevarat. Jūs varat administrēt tikai tos īpašumus, kurus esat izveidojis vai esat piešķīris kā īpašuma pārvaldnieks.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Vai es varu modificēt citus rekvizītus šajā vietnē?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Jā, jūs varat, jūs esat īpašumu pārvaldnieks un varat mainīt visus rekvizītus, kas parādīti saraksta rekvizītu lapā.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Kādi ir viesu veidi/kā es varu mainīt katru personu uz nakti?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "cilnē Iestatījumi> Īpašuma konfigurācija> Tarifi un valūtas varat izlemt, vai vēlaties iekasēt maksu par personu par nakti. Ja iekasēsit maksu par personu par nakti, jums būs jāizveido viens vai vairāki viesu veidi. Jūs varat izveidot vienkāršu viesa veidu, kur jūs vienkārši sniedzat viņiem aprakstu (piemēram, personas), vai arī varat izveidot vairākus dažādus viesu veidus, piemēram, \"Pieaugušie\" un \"Bērni līdz 10 gadiem\". Bērniem, ja vēlaties piedāvāt atlaide 50%, tad iestatītu vērtību \"Ir procenti\" uz Jā, bet dispersijas vērtību uz 50. Numuros ir bāzes cenas, šis iestatījums ļauj pielāgot istabas cenu, pamatojoties uz viesa veidu. ");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Kādas ir istabas iespējas?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Istabas iespējas ir lietas, kas izceļ telpu. Tās var būt kaut kas vienkāršs, piemēram, tējas un kafijas pagatavošanas iespēja, vai arī lietas, kas patiešām padara telpu augstāku par citām, piemēram,\" Skati uz bay \". Kad esat izveidojis telpas funkciju, varat augšupielādēt šīs funkcijas attēlus Media Center. Šīs telpas funkcijas var apskatīt istabas pieejamības lapā un, ja esat konfigurējis savu īpašumu, lai tiktu parādīts klasisko istabu saraksta stils (kur viesi var izvēlēties tieši to numuru, kuru viņi vēlas rezervēt), tad viņi var izmantot numura funkcijas, lai filtrētu rezervācijas veidlapā redzamos numurus. ");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Maksājumi');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Jūs nevarat redzēt maksājumu vārteju pēc rezervācijas veikšanas.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Ja esat pieteicies kā īpašuma pārvaldnieks, jūs neredzēsit maksājumu vārteju, jo jūs nemaksājat pats. Veicot rezervāciju, vārti būs redzami tikai lietotājiem, kuri nav pārvaldnieki.");
