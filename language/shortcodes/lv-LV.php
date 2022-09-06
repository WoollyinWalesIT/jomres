<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Šī ir īpašuma cpanel sākumlapa.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Šī ir īpašuma lentu diagramma, kas īsumā sniedz pārskatu par reāllaika rezervācijām, pieejamību un noslogojumu.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Šis skripts ļauj lietotājam salīdzināt vairākus rekvizītus, ne vairāk kā 3 rekvizītus.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Ar komatiem atdalīts rekvizītu saraksts, piemēram, 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Veido kontaktpersonas īpašnieka veidlapu.');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Nododiet īpašuma rekvizītus, ar kuriem sazināties. Nosūtiet 0 (nulle), lai sazinātos ar vietnes administratoru.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "rāda lapu Uzņēmuma informācija, iegūstot informāciju no īpašuma pārvaldnieka laukā Jūsu informācija rekvizītu konfigurācijā. Šajā cilnē esošā informācija parasti tiek izmantota korespondencei, ļaujot vadītājiem norādīt gan viesnīcas/dzīvokļa adresi, gan uzņēmējdarbības vajadzībām atsevišķa adrese. ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Parāda īpašuma kalendāru");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Norādiet parādāmā īpašuma rekvizītu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Parādāmie mēneši, noklusējums ir 24, ja nav noteikts citādi. Nav saderīgs ar mainīgo Rādīt tikai mēnesi.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Iestatiet to uz 1, ja vēlaties tikai parādīt pašreizējo mēnesi. Iestatījums months_to_show tiks ignorēts, ja šovs_just_mēnesis tiks izmantots, bet neizmantosit to pašu, tajā pašā laikā.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Parāda tikai īpašuma apraksta tekstu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Parāda tikai īpašuma apraksta tekstu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Parāda tikai īpašuma īpašības.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Parāda tikai īpašuma galvenes veidni.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Parāda tikai īpašuma telpu tipus.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Parāda tikai īpašuma galveno attēlu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Parāda tikai īpašuma karti.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Parāda rekvizītu Vairāk informācijas teksts.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'QR kods, kas novirza uz gmaps. To var ieskenēt tālrunī, izmantojot qr koda lasīšanas lietotni, kas nodrošina norādes uz īpašumu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Parāda īpašuma atsauksmes.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Parāda īpašuma pārskata kopsavilkumu.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Parāda atsevišķu istabu.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'Istabas ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Parāda īpašuma telpas.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Parāda īpašuma telpas attēlus kā slaidrādi.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Parāda īpašuma slaidrādi.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Parāda īpašuma tarifus.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Parāda vietnes uzņēmuma adresi, kas norādīta sadaļā Vietnes konfigurācija> Jūsu uzņēmuma informācija.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Parāda īpašuma noteikumus un nosacījumus.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'īpašuma ID.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Parāda īpašuma lietotāja saskarnes kalendāru, kas atšķiras no galvenā lielā kalendāra un ir balstīts uz Jquery lietotāja saskarnes kalendāra funkcionalitāti.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Iesniedziet parādāmā īpašuma rekvizītu.');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Iestatiet to uz 1, lai nerādītu leģendu.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Rāda meklēšanas rezultātus, kurus var uzlabot, pievienojot meklēšanas parametrus. Mēs neiesakām vienlaikus izmantot visus parametrus, jo galu galā meklēšanas kritēriji būs pārāk ierobežoti. Tā vietā jums vajadzētu aprobežoties tikai ar vienu vai diviem parametriem, piemēram, meklēt pēc valsts un zvaigžņu skaita. ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'Meklēt pēc valsts, izmantojot ISO 2 burtu kodu, piemēram, GB vai DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Meklēt pēc reģiona. Tā kā reģioni ir saglabāti datu bāzē, jums jāizmanto reģiona ID. Apmeklējiet Administrators> Jomres> Vietnes struktūra> Saraksta reģioni un virziet kursoru uz Rediģēt, tur jūs redzēsiet reģiona ID numuru . ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Pilns tās pilsētas nosaukums, kuru vēlaties meklēt.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Meklēt īpašumus ar īpašām iezīmēm. Funkciju ID var atrast sadaļā Administrators> Jomres> Vietnes struktūra> Īpašuma iezīmes.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Meklēt īpašumus ar noteiktiem telpu veidiem. Telpu tipu ID var atrast sadaļā Administrators> Jomres> Vietnes struktūra> Telpu tipi.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Konkrēta īpašuma veida rekvizītu meklēšana. Īpašuma veidu ID var atrast sadaļā Administrators> Jomres> Vietnes struktūra> Īpašuma veidi.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Meklēt īpašumus noteiktā cenu diapazonā.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Meklēt īpašumus, kuru tarifi atļauj noteiktas vērtības viesu skaitu, piemēram, 6 ballītes.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'N zvaigžņu rekvizītu meklēšana.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Meklēt pēc ierašanās datuma. Jāapvieno ar parametru "izbraukšanas datums"');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Meklēt pēc izlidošanas datuma. Jāapvieno ar parametru ierašanās datums');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Meklēt pēc īpašuma kategorijas.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Skatīt aģenta lapu. Jūs varat nodot VISIEM īpašuma uid vai aģenta ID, ja jūs to zināt.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Īpašuma ID, tas parādīs īpašuma aģentu.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Pārziņa datu bāzes ID, ja tas ir zināms.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Parāda populāros rekvizītus, kurus parasti izmanto moduļu vai logrīku pozīcijās.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Maksimālais parādāmo rekvizītu skaits.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Rādīt tikai šī konkrētā īpašuma veida rekvizītus.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Iestatiet uz 1, lai parādītu moduļus, kas optimizēti vertikālajam logrīkam/moduļa pozīcijai.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Parāda nejaušu rekvizītu atlasi, ko parasti izmanto moduļu vai logrīku pozīcijās.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Maksimālais parādāmo rekvizītu skaits.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Rādīt tikai šī konkrētā īpašuma veida rekvizītus.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Iestatiet uz 1, lai parādītu moduļus, kas optimizēti vertikālajam logrīkam/moduļa pozīcijai.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Parāda viesa nesen apskatītos rekvizītus, kas parasti tiek izmantoti moduļu vai logrīku pozīcijās.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Maksimālais parādāmo rekvizītu skaits.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Iestatiet uz 1, lai parādītu moduļus, kas optimizēti vertikālajam logrīkam/moduļa pozīcijai.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Parāda vairākus rekvizītus, kurus parasti izmanto moduļu vai logrīku pozīcijās.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'To īpašumu ID, kurus vēlaties parādīt.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Iestatiet uz 1, lai parādītu moduļus, kas optimizēti vertikālajam logrīkam/moduļa pozīcijai.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Parāda nolaižamo valūtas izvēlni.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Iespējot/atspējot alternatīvās veidnes izvadi. Šī izvade ir paredzēta izmantošanai Bootstrap rīkjoslās.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Parāda Iepirkumu groza lapu.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Parāda iepirkumu groza moduli/logrīku.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Parāda galveno izvēlni. Ņemiet vērā, ka, ja jūs izmantojat pielāgotu mainmenu_wrapper_alternate.html versiju, piemēram,/templates/jr_leohtian/html/com_jomres_, varat to mainīt < /i> ar MENU_LOCATION, kas ietīta cirtainās skavās. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Šī lapa ļauj augšupielādēt attēlus savam īpašumam un jūsu piedāvātajām lietām. Tajā ir viena galvenā poga un otra poga, kas ļauj atlasīt konkrētus resursus attēlu augšupielādei. Tātad, galvenais īpašums attēlā un slaidrādē būs redzama tikai viena poga, bet, ja esat izveidojis, piemēram, papildu piederumus vai telpas, jūs redzēsit otru pogu, kurā varēsit augšupielādēt attēlus par šiem konkrētajiem resursiem. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Šī lapa ļauj augšupielādēt attēlus savam īpašumam un jūsu piedāvātajām lietām. Tajā ir viena galvenā poga un otra poga, kas ļauj atlasīt konkrētus resursus attēlu augšupielādei. Tātad, galvenais īpašums attēls un slaidrāde parādīs tikai vienu pogu, bet, ja esat izveidojis papildu piederumus, jūs redzēsit otru pogu, kurā varēsit augšupielādēt attēlus šiem konkrētajiem resursiem. ');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Vispirms izvēlieties augšupielādējamo attēlu, noklikšķinot uz Pievienot attēlu vai izmantojot vilkšanas un nomešanas funkciju. Tie tiks parādīti kolonnā labajā pusē. </li>
  <li> Virs šī apgabala izmantojiet pogu \"Izvēlēties resursu \", lai izvēlētos resursu, kuram vēlaties augšupielādēt attēlus. Jums var tikt piedāvāta iespēja izvēlēties konkrētu resursu zemāk. </li>
  <li> Kad esat izvēlējies resursu, zem attēla noklikšķiniet uz pogas Augšupielādēt attēlu, lai to saistītu ar šo resursu. Kad attēls ir augšupielādēts, tas pazudīs no slejas labajā pusē un parādīsies kreisajā pusē. </li>
  <li> Izmantojiet pogu Atkritne blakus esošajiem attēliem, lai noņemtu attēlus, kurus vairs nevēlaties rādīt. </li>
  <li> Varat mainīt secību, kādā faili tiek parādīti slaidrādē, pirms augšupielādes tos pārdēvējot, jo tie tiek parādīti lapās alfabētiskā secībā. </li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Blakus pogai Resurss, iespējams, redzēsit pogu Priekšskatījums. Ja noklikšķināsit uz tā, tiks parādīts uznirstošais logs, kas parādīs, kā pašlaik augšupielādētie attēli izskatīsies lapā. Tas palīdzēs jums ideja par to, kā attēli izskatīsies jūsu klientiem. ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Augšupielādējamo attēlu skaits nav ierobežots. Attēli tiek automātiski mainīti, kad tie tiek augšupielādēti. Jūs varat augšupielādēt tikai JPG un PNG failus.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "Ideālā gadījumā visi augšupielādētie attēli būtu vismaz");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "pikseļu platumā, pretējā gadījumā pēc augšupielādes tie var izskatīties izplūduši.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Visi augšupielādētie attēli nedrīkst pārsniegt");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "pēc izmēra");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Izvēlieties resursu, kuram vēlaties augšupielādēt attēlus");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Īpašs resurss");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Šim resursam jau augšupielādētie attēli");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Teksta formatēšana');
jr_define('_JOMRES_MARKDOWN_DESC', 'Šeit varat ievadīt tekstu, izmantojot vienkāršu Markdown formatējumu. Jums nav jāzina neviens HTML, vienkārši izmantojiet pogas, lai informācija izskatītos tāda, kādu vēlaties, vai formatējiet tekstu atbilstoši šiem piemēriem.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Uzsvars');
jr_define('_JOMRES_MARKDOWN_BOLD', 'treknraksts');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'slīpraksts');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'pārsvītrots');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Galvenes");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Liela galvene');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Vidēja galvene");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Maza galvene');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Tiny header');
jr_define('_JOMRES_MARKDOWN_LISTS', "Saraksti");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Vispārīgs saraksta vienums');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numurēts saraksta vienums');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Saites');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Parādāmais teksts');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Citāti');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Šis ir citāts.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Tas var aptvert vairākas rindas!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Attēli');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tabulas');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Kolonna');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Rādīt īpašuma attēlus kā slaidrādi īpašumu sarakstā?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Ja iestatīts uz jā, tiks parādīts rekvizītu galveno attēlu slaidrāde. Ja iestatīts uz nē, tiks parādīts pirmais rekvizīta galvenais attēls.');

jr_define('EDIT_CMS_USER', 'Rediģēt CMS lietotāju');

jr_define('BOOKING_MADE_BY', 'Rezervāciju veicis');

jr_define('_JOMRES_ROUTER_FEATURES', 'Ērtības');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Telpu tipi');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Ārējās rezervācijas veidlapas URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Šeit jūs varat iestatīt ārēju URL, ja vēlaties rezervēšanai izmantot trešās puses vietni. Visas jomres rezervēšanas pogas norāda uz šo URL. Ja vēlaties izmantot Jomres rezervācijas veidlapu, atstājiet šo lauku tukšu. . ');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (īss telpas apraksts/apakšvirsraksts)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Istabas apraksts');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Viesu melnais saraksts');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Ja šis viesis ir iekļauts melnajā sarakstā, viņš vairs nevarēs veikt rezervāciju šajā īpašumā.');
jr_define('_JOMRES_SESSION_HANDLER', 'Sesijas apstrādātājs');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'Saglabāt jomres sesijas failus diskā vai datu bāzē. Ieteicams: datu bāze');
jr_define('_JOMRES_MAP_HEIGHT', "Kartes augstums (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Kartes tālummaiņas līmenis");
jr_define('_JOMRES_MAP_MAPTYPE', "Kartes tips");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Veidņu ignorēšanas pārvaldnieks");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Veidņu pakotnes ir spraudņi, kas var nodrošināt ignorēt veidnes dažādiem galvenajiem Jomres veidņu failiem.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Šajā lapā ir uzskaitīti visi veidņu faili, kurus var ignorēt veidņu pakotnes veidņu faili. Ja vēlaties ignorēt noteiktu veidnes failu, noklikšķiniet uz šī faila rediģēšanas pogas, nākamajā lapā var izvēlēties, kuru versiju vēlaties ignorēt. Ņemiet vērā, ka šie ignorējumi ir prioritāri gan pret Jomres Core, gan jebkuru Wordpress vai Joomla motīvu/veidņu ignorēšanu. Jūs varat atspējot ignorēšanu, izdzēšot to lapā Saraksta veidņu ignorēšana. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Veidnes nosaukums");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Pašreizējais ceļš");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Nav ignorēts");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Jūs varat izvēlēties, kuru veidnes failu ignorēt Core veidnes failus, mainot nolaižamo izvēlni");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Rezervēto numuru procentuālā daļa");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Parāda jauna īpašuma veidlapas izveidi.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Kartes tālummaiņa, 1: Pasaule 5: Zeme/kontinents 10: Pilsēta 15: Ielas 20: Ēkas');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Parādāmo atsauksmju skaits');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Parāda lietotāju atlasītos rekvizītus. Ja lietotājs ir reģistrēts, šie ir viņu izlase, ja nav pieteicies, tad tikai tie vienumi, kas apmeklējuma laikā tika pievienoti, izmantojot izlases ikonu.');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimālā depozīta vērtība');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Ja aprēķinātais depozīts ir mazāks par šo skaitli, tad iestatiet depozītu uz šo vērtību. Ja šis skaitlis neatbilst vietnes minimālajam depozīta iestatījumam, šis skaitlis var tikt pārsniegts. Atstājiet to kā 0 līdz neizmantojiet iestatījumu. ");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'Parāda GDPR atbilstošu piekrišanas veidlapu.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Īpašuma istabu veidu saraksts');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Parādīt īpašuma telpas tipu');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Parādīt pieteikšanās veidlapu');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Rādīt noteiktas istabas tipa istabu sarakstu');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Istabas tipa ID');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Informācijas panelis');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Parāda sindicēto īpašumu sarakstu');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Parādāmo sindicēto īpašumu skaits');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'Parādīt MRP (viesnīcas/gultasvietas un brokastis) vai SRP (kotedžas/dzīvokļi/villas). Noklusējuma vērtība tiek noteikta pēc pašreizējā īpašuma, ja šis īpašums nav. Lai izvēlētos konkrētu veidu, iestatiet šo vērtību 0 uz srps vai 1 uz mrps. ');


	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Rāda īpašuma zvaigznes. Tās ir iestatītas Īpašuma konfigurācijā, ja īpašums ir MRP.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'Īpašuma ID');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'Neobligāti. Ja īpašuma ID nav iestatīts, tā vietā varat nodot numuru.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Neobligāti. Alternatīvas veidnes ceļš. Nevar nodot caur url. Jābūt absolūtam.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'Neobligāti. Alternatīvas veidnes nosaukums.');
