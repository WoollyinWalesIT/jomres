<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('VIDEO_TUTORALS_TITLE', 'Video pamācības');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'Vadības panelis');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Šī apmācība parāda, kā izmantot īpašuma pārvaldības vadības paneli.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Laika skala');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Kā izmantot laika skalas kalendāru. Šajā videoklipā mēs izveidojam jaunu viesi, ievadot viņu informāciju uznirstošajā logā, esošos viesus var izmantot atkārtoti, uznirstošā izvēlnē atlasot viņu vārdu.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Saraksta rekvizīti');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Kā izmantot lapu Saraksta rekvizīti, lai skatītu papildu informāciju, mainītu slejas un meklētu konkrētus rekvizītus.');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Rediģēt sava īpašuma informāciju');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Īpašuma informācijas rediģēšana, tostarp vilkšana pa karti, lai iestatītu savu atrašanās vietu.');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Mainīt tarifu rediģēšanas režīmu');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Jūsu tarifu rediģēšanas režīms nosaka metodi, ko varat izmantot, lai iestatītu cenas savam īpašumam. To varat izdarīt lapā Īpašuma konfigurācija.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Parasts tarifu rediģēšanas režīms viesnīcām, pensijām, pansijām');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Parastais tarifu rediģēšanas režīms ir vienkārša tarifu rediģēšanas funkcija, kas ļauj izvēlēties īpašumā esošo istabu skaitu, istabas cenu, viesu skaitu katrā numurā un maksimālo viesu skaitu. partijā. Saglabājot šīs cenas ir spēkā nākamos 10 gadus. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Parastā tarifu rediģēšana villām un dzīvokļiem');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Parastais tarifu rediģēšanas režīms ir vienkārša tarifu rediģēšanas funkcija, kas ļauj izvēlēties īpašuma apakštipu, īpašuma cenu par nakti un maksimālo viesu skaitu ballītē. Saglabājot šīs cenas tad derīga nākamos 10 gadus. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Mikrovaldības tarifu rediģēšanas režīms (ieteicams)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Mikrovaldības tarifu rediģēšanas režīms ļauj konfigurēt gan cenu, gan minimālo dienu skaitu, par kādu uzturēšanās var būt derīga, katrai gada dienai. Tas ir spēcīgs rīks, kas nodrošina pilnīgu kontroli par cenu noteikšanu. Šajā piemērā mēs parādīsim, kā vienam un tam pašam istabas veidam izveidot vairākas cenu kopas, noteikt atšķirīgas cenas dažādiem periodiem un atšķirīgas cenas noteiktām nedēļas dienām noteiktā laika periodā. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Mikrovaldības tarifu rediģēšanas režīms villām/dzīvokļiem (ieteicams)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Mikrovaldības tarifu rediģēšanas režīms ļauj konfigurēt gan cenu, gan minimālo dienu skaitu, par kādu uzturēšanās var būt derīga, katrai gada dienai. Tas ir spēcīgs rīks, kas nodrošina pilnīgu kontroli par cenu noteikšanu. Šajā piemērā mēs parādīsim, kā izveidot vairākas cenu kopas. Mēs noteiksim dažādas cenas dažādiem periodiem un atšķirīgas cenas noteiktām nedēļas dienām noteiktā laika periodā. Kad tas būs izdarīts, mēs izveidosim vairākus tarifus vienai un tai pašai īpašums, bet ar atšķirīgu viesu skaitu, kas ļauj precīzi kontrolēt cenas katram scenārijam. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Dažādi tarifi dažādiem viesu numuriem');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Jūs varat izveidot vairākus tarifus vienam un tam pašam istabas veidam, tādēļ, ja vēlaties dažādas cenas dažādiem viesu numuriem, varat to izdarīt.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Personai par nakti - viesu veidi');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Lai iekasētu maksu par personu par nakti, jums būs jāizveido viesu veidi. Dažādiem viesu veidiem var būt atšķirības no istabas bāzes cenas, tāpēc dažāda vecuma bērniem var būt dažādas atlaides atkarībā no viņu vecuma. nav jāmaksā maksa par personu par nakti, lai izmantotu viesu veidus, varat tos izmantot arī tad, ja iekasējat vienotu likmi, bet tomēr vēlaties uzņemt viesu skaitu vai ja vēlaties ierobežot viesu skaitu rezervācijā. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Multivides centrs - attēlu augšupielāde');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Visi attēli tiek augšupielādēti, izmantojot multivides centru. Šajā videoklipā mēs augšupielādēsim galvenā īpašuma attēlu, dažus slaidrādes attēlus, nelielu attēlu atlasi, kas tiks parādīti meklēšanas rezultātu lapā, un attēlus vienam no istabas. ');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Multivides centrs - attēlu augšupielāde');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Visi attēli tiek augšupielādēti, izmantojot multivides centru. Šajā videoklipā mēs augšupielādēsim galvenā īpašuma attēlu, nelielu attēlu klāstu, kas tiks parādīts meklēšanas rezultātu lapā, un dažus slaidrādes attēlus.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administratora vadības panelis');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Šī ir jūsu noklusējuma galvenā lapa administratora apgabalā. Jūs varat redzēt dažādu vietņu statistikas kopsavilkumu un redzēt, kādi rekvizīti ir sistēmā, kas ir pabeigti un kuri ir pabeigti un gaida pārskatīšanu pirms apstiprināšanas . Kad īpašums ir apstiprināts, to var publicēt īpašuma pārvaldnieks. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Spraudņu pārvaldnieks, instalēšana un lietošana');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Šis video parāda, kā izmantot spraudņu pārvaldnieku, ieskaitot spraudņu pārvaldnieka instalēšanu un pēc tam spraudņa instalēšanu un atinstalēšanu. Ja jums nav licences atslēgas, jums tiks piedāvāts saglabāt vietnē Konfigurācija pirms pārvaldnieka instalēšanas. Ja iepriekš neesat izmantojis spraudņu pārvaldnieku, šis saraksts sākotnēji būs tukšs, šajā piemērā man jau ir instalēti dažādi spraudņi. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Īpašuma pārvaldnieki');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Īpašumu pārvaldnieki tiek pievienoti vienā no diviem veidiem. Vai nu viņi paši izveido rekvizītus (var atspējot vietnes konfigurācijā), vai arī vietnes administrators var piešķirt esošu pārvaldnieku noteiktiem īpašumiem. Pārvaldnieki var piekļūt tikai tiem īpašumiem, kas viņiem ir izveidots vai ir piešķirts. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Piekļuves kontrole');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Varat izmantot piekļuves kontroles funkciju, lai atspējotu izvēlņu opcijas, padarot tās redzamas tikai noteiktām lietotāju grupām vai pat tās vispār izzustu. Ja izvēlņu joslā nav nevienas izvēlnes opcijas, ko parādīt, tad pazudīs pilnībā, tādēļ, ja nevēlaties, lai vietnes apmeklētāji redzētu kādas opcijas, varat vienkārši iestatīt, lai visas opcijas būtu redzamas, piemēram, reģistrētiem lietotājiem. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Īpašuma un istabas veidi');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Šajā videoklipā redzēsit divus svarīgus jēdzienus. Pirmais ir īpašumu veidu un saistīto telpu veidu izveide. Jūs redzēsit arī reģistrētu lietotāju, kurš vēl nav pārvaldnieks, izveidojot savu īpašumu un kļūstot par pārvaldnieks (bet tikai var konfigurēt to izveidoto īpašumu). Īpašuma un istabas veidi ir saistīti, kad esat izveidojis īpašuma tipu, jums jāpievieno telpas tips, pretējā gadījumā īpašumu pārvaldnieki, mēģinot konfigurēt to rekvizītus, redzēs sarkanus kļūdu ziņojumus. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Kartes marķieru augšupielāde');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Jūs izmantojat Media Center, lai augšupielādētu karšu marķierus. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Lielisku marķieru avotu var atrast šeit. < /a> Īpašuma iezīmju, istabas iezīmju, telpu tipu un citu augšupielādes procedūra ir vienāda. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Īpašuma iezīmes');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Šajā video mēs parādīsim, kā izveidot īpašuma funkcijas un augšupielādēt tām attēlus.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Īsie kodi');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Īsie kodi ir ārkārtīgi spēcīga Jomres iezīme. Princips ir vienāds gan Joomla, gan Wordpress. Šajā videoklipā mēs parādīsim, kur apskatīt īsos kodus (šis saraksts mainīsies atkarībā no tā, kuri spraudņi ir instalēts) un kā tos izmantot. Kodus varat izmantot rakstos vai moduļos. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Žurnālfaili');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Šis video parādīs, kā apskatīt žurnālfailus. Sistēmas palaišanas laikā notiek plaša reģistrēšana. Ražošanas režīmā (vietnes konfigurācija> atkļūdošana) tiek ģenerēts mazāk žurnālu, tāpēc, ja testējat jaunu līdzekli, jums vajadzētu iestatīt vietni uz izstrādi. Ja vēlaties pievienot savu reģistrēšanu saviem Jomres skriptiem, apskatiet <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> mūsu rokasgrāmatas lapa par to, kā to izdarīt. </a> Šeit mēs iemetīsim viltus kļūdu, pēc tam apskatīsim žurnāla failu. Tā kā vietne ir iestatīta uz Izstrāde ir daudz informācijas, parasti jūs vienkārši redzētu ziņojumu, kurā teikts, ka radusies kļūda un par to ir ziņots. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Etiķešu un citu virkņu tulkošana');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Ir vairāki veidi, kā tulkot valodu virknes Jomres, jūs varētu rediģēt valodas failus, bet tie var tikt pārrakstīti, kad jaunināt. Tā vietā iesakām izmantot iebūvētos tulkošanas rīkus, kas ir unikāli mūsu Ja virkne ir veidlapā ievadīts, piemēram, telpas tipa nosaukums, varat izmantot lapu Iezīmju rediģēšana. Ja virkne ir no valodas faila, varat izmantot valodas failu rediģēšanas rīku. Vienkārši izmantojiet pārlūkprogrammas meklēšanas rīku, lai atrastu virkni, kuru vēlaties mainīt, un pēc tam noklikšķiniet uz saites, lai to mainītu. Šīs izmaiņas tiek saglabātas datu bāzē un tāpēc ir drošas atjaunināšanai. Dažādiem īpašumu veidiem var būt dažādas etiķetes, lai jūs varētu mainīt jaunu īpašumu uz jaunu kempingu, piemēram, pirms etiķetes maiņas, lapas augšdaļā mainot nolaižamo izvēlni Valodas konteksts. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Rekvizītu pievienošana');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> Šajā posmā Jomres ir instalēts CMS un ir pievienots priekšgala izvēlnei (vai programmā Wordpress jūs esat izveidojis lapu un pievienojis tai pamata Jomres īskodu). </ p>
<p> Šeit jūs redzēsit, kā reģistrēts lietotājs, kurš vēl nav īpašuma pārvaldnieks Jomresā, var izveidot jaunu īpašumu, konfigurēt dažus pamata iestatījumus un to publicēt. </p>
<p> Beigās redzēsit, ka pārvaldnieks ir automātiski iestatīts kā īpašuma pārvaldnieks, taču viņš var konfigurēt tikai savus īpašumus. </p>
<p> Lai gan WordPress saskarne izskatās savādāk, Joomla vai Wordpress process ir tieši tāds pats. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Īpašuma kategorijas');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Īpašumu kategorijas ir vienkārša funkcija, kas ļauj īpašumu pārvaldniekiem piešķirt savus īpašumus noteiktai kategorijai. Vietņu administratori var izveidot īsos kodus, kuros tiks uzskaitīti visi kategorijas īpašumi, kā parādīts šajā video.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Vietnes administrators, skatot rekvizītus');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Jūs nepārvaldāt rekvizītus no šejienes, jūs varat pārvaldīt īpašumus tikai no priekšpuses, tomēr šajā sarakstā varat redzēt rekvizītus, kas gaida apstiprinājumu (ja funkcija ir iespējota), un visus tos, kas ir nepilnīga (piemēram, joprojām ir jāaugšupielādē attēli, jānosaka cenas utt.). Noklikšķiniet uz rekvizīta nosaukuma, kas tiks novirzīts uz šī īpašuma informācijas paneli. Pēc tam varēsit izmantot ceļvežu sadaļas lapas augšdaļā, lai redzētu darbības nepieciešams aizpildīt un publicēt īpašumu. </p> ');


