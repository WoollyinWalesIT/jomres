<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Bu xüsusiyyət cpanel ön səhifəsidir.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Bu, bir anda real vaxt rezervasiyalarına, mövcudluğuna və doluluğuna ümumi baxış verən əmlak lent cədvəlidir.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Bu skript istifadəçiyə birdən çox mülkü bir -biri ilə müqayisə etməyə imkan verir, maksimum 3 xüsusiyyətə qədər.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Mülkiyyət vasitələrinin vergüllə ayrılmış siyahısı, məsələn. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'Əlaqə sahibi formasını qurur.');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'Əlaqələndiriləcək əmlakın mülkiyyət qovluğunu ötürün. Bunun əvəzinə sayt admininə müraciət etmək üçün 0 (sıfır) keçin.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Əmlak menecerinin Əmlak Konfiqurasiyasındakı Sizin şirkət məlumatları sahəsindəki detalları çəkən Şirkət Məlumatı səhifəsini göstərir. Bu sekmədəki detallar, adətən, idarəçilərə həm otelin/mənzilin ünvanına, həm də iş məqsədləri üçün ayrı bir ünvan. ");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Mülkiyyətin təqvimini göstərir");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Göstəriləcək əmlakın mülkiyyət qovluğunu keçirin.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Göstərilməli olan aylar, başqa cür təyin edilmədiyi təqdirdə, 24 -dür. Yalnız Ayı Göstər dəyişəninə uyğun gəlmir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Cari ayı öz başına göstərmək istəyirsinizsə bunu 1 olaraq təyin edin. show_just_month eyni ayda istifadə edilməsə və ya eyni zamanda istifadə edilməsə, ay_to_show ayarı nəzərə alınmayacaq. eyni vaxtda.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Yalnız Mülkiyyət təsviri mətnini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'Mülkiyyətin kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Yalnız Mülkiyyət təsviri mətnini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Yalnız Mülkiyyət xüsusiyyətlərini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'Mülkiyyət sənədi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Yalnız Əmlak başlığı şablonunu göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'Mülkiyyətin kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Yalnız Mülkiyyət otaq növlərini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Yalnız Mülkiyyətin əsas görüntüsünü göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'Mülkiyyət sənədi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Yalnız Əmlak xəritəsini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Əmlak haqqında daha çox məlumat mətnini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'Mülkiyyət sənədi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Gmaps -a bağlantı verən QR kodu. Bu, mülkiyyətə istiqamət verən qr kodu oxu tətbiqindən istifadə edərək bir telefona skan edilə bilər.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'Mülkiyyətin kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Bir əmlakın rəylərini göstərir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'Mülkiyyətin kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Mülkiyyətin baxış xülasəsini göstərir");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Fərdi otaq göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'otağın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Bir əmlakın otaqlarını göstərir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Mülkiyyətin otaq şəkillərini slayd şou olaraq göstərir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'Əmlakın kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Mülkiyyət slayd şousunu göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'Mülkiyyət sənədi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Mülkiyyət tariflərini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'Mülkiyyətin kimliyi');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Saytın iş ünvanını Sayt Konfiqurasiyasına daxil edildiyini göstərir> Şirkətinizin təfərrüatları");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Mülkiyyət şərtlərini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'Əmlakın kimliyi.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Əsas böyük təqvimdən fərqli bir təqvim olan və Jquery UI təqvim funksiyasına əsaslanan əmlakın UI təqvimini göstərir.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Göstəriləcək əmlakın mülkiyyət qovluğunu keçirin.');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Əfsanəni göstərməmək üçün bunu 1 olaraq təyin edin.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Axtarış parametrləri əlavə etməklə artırıla bilən axtarış nəticələrini göstərir. Bütün parametrləri eyni vaxtda istifadə etməyinizi məsləhət görmürük, çünki çox məhdud olan axtarış meyarları ilə qarşılaşacaqsınız. Bunun əvəzinə özünüzü yalnız bir və ya iki parametrlə məhdudlaşdırmalısınız, məsələn, ölkəyə və ulduzların sayına görə axtarın. ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'ISO Alpha-2 kodundan istifadə edərək ölkəyə görə axtarın, məsələn GB və ya DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Bölgələrə görə axtarın. Bölgələr verilənlər bazasında saxlandığı üçün bölgə identifikatorundan istifadə etməlisiniz. Administrator> Jomres> Sayt Strukturu> Siyahı bölgələrini ziyarət edin və Düzenle bağlantısına gedin, orada bölgənin ID nömrəsini görəcəksiniz. . ");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Axtarmaq istədiyiniz şəhərin tam adı.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Xüsusi xüsusiyyətlərə malik mülkləri axtarın. Xüsusiyyət identifikatorlarını Administrator> Jomres> Sayt Strukturu> Mülkiyyət Xüsusiyyətlərində tapa bilərsiniz.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Müəyyən otaq tipləri ilə mülkləri axtarın. Otaq tipli idləri Administrator> Jomres> Sayt Strukturu> Otaq növləri bölməsində tapa bilərsiniz.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Xüsusi bir mülkiyyət növünün xüsusiyyətlərini axtarın. Mülkiyyət növü kimliklərini Administrator> Jomres> Sayt Strukturu> Mülkiyyət növlərində tapa bilərsiniz');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Xüsusi bir qiymət aralığında mülk axtarın.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Tarifləri müəyyən dəyərlərin qonaq nömrələrinə icazə verən mülklərin axtarışı, məsələn, 6 -nın tərəfləri");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'N ulduzların xüsusiyyətlərini axtarın.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Gəliş tarixinə görə axtarış. departureDate parametri ilə birləşdirilməlidir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Gediş tarixinə görə axtarın. Gələn tarix parametri ilə birləşdirilməlidir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Mülkiyyət kateqoriyasına görə axtarış.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Bir agentin səhifəsinə baxın. Hər halda bir mülkiyyət uidindən və ya agentin idindən keçə bilərsiniz.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Mülkiyyət uid, bu əmlakın agentini göstərəcək.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Menecerin verilənlər bazası id, əgər məlumdur.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Adətən modul və ya vidjet mövqelərində istifadə edilən məşhur xüsusiyyətləri göstərir.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Göstərilə bilən xüsusiyyətlərin maksimum sayı.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Yalnız bu xüsusi mülkiyyət növlərinin xüsusiyyətlərini göstər');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Şaquli widget/modul mövqeyi üçün optimallaşdırılmış modulları göstərmək üçün 1 olaraq təyin edin.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Tipik olaraq modul və ya widget mövqelərində istifadə olunan xüsusiyyətlərin təsadüfi seçimini göstərir.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Göstərilə biləcək maksimum xüsusiyyət sayı');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Yalnız bu xüsusi xüsusiyyət növlərinin xüsusiyyətlərini göstər');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Şaquli bir widget/modul mövqeyi üçün optimallaşdırılmış modulları göstərmək üçün 1 olaraq təyin edin.');
	
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Adətən modul və ya widget mövqelərində istifadə edilən qonağın ən son baxılan xüsusiyyətlərini göstərir.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Göstərilə bilən maksimum xüsusiyyət sayı.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Şaquli widget/modul mövqeyi üçün optimallaşdırılmış modulları göstərmək üçün 1 olaraq təyin edin.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Adətən modul və ya vidjet mövqelərində istifadə olunan bir sıra xüsusiyyətləri göstərir.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Göstərmək istədiyiniz xüsusiyyətlərin mülkiyyət idləri.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Şaquli widget/modul mövqeyi üçün optimallaşdırılmış modulları göstərmək üçün 1 olaraq təyin edin.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Valyuta seçimi açılır menyusunu göstərir.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Alternativ şablon çıxışını aktiv edin/söndürün. Bu çıxış Bootstrap alət çubuqlarında istifadə üçün nəzərdə tutulmuşdur.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Səbət səhifəsini göstərir.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Alış -veriş Səbəti modulunu/widgetını göstərir.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Əsas menyunu görüntülər. Qeyd edək ki, məsələn/templates/jr_leohtian/html/com_jomres -də xüsusi bir versiya çalıştırırsanız <dəyişdirməyiniz lazım ola bilər. /i> buruq mötərizədə MENU_LOCATION ilə. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Bu səhifə, mülkünüz və təklif etdiyiniz şeylər üçün şəkillər yükləməyinizə imkan verir. Bir əsas düyməyə və şəkilləri yükləmək üçün xüsusi qaynaqları seçməyə imkan verən ikinci düyməyə malikdir. Beləliklə, Əsas mülkiyyət şəkil və Slayd şousu yalnız bir düyməni göstərəcək, ancaq hər hansı bir əlavə Könüllü Əlavələr və ya Otaqlar yaratmısınızsa, o xüsusi mənbələr üçün şəkillər yükləyə biləcəyiniz ikinci bir düyməni görəcəksiniz. ');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Bu səhifə, mülkünüz və təklif etdiyiniz şeylər üçün şəkillər yükləməyinizə imkan verir. Bir əsas düyməyə və şəkilləri yükləmək üçün xüsusi qaynaqları seçməyə imkan verən ikinci düyməyə malikdir. Beləliklə, Əsas mülkiyyət şəkil və Slayd şousu yalnız bir düyməni göstərəcək, ancaq İstənilən Əlavə Əlavələr yaratmısınızsa, o xüsusi mənbələr üçün şəkillər yükləyə biləcəyiniz ikinci bir düyməni görəcəksiniz. ');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li> Əvvəlcə Şəkil Əlavə et düyməsini vuraraq və ya Sürüklə və Drop istifadə edərək yükləmək istədiyiniz şəkilləri seçin. Bunlar sağ tərəfdəki sütunda görünəcək. </li>
  <li> Bu sahənin yuxarı hissəsində, şəkilləri yükləmək istədiyiniz mənbəni seçmək üçün \"Resurs seçin \" düyməsini istifadə edin. Aşağıda müəyyən bir qaynaq seçmək seçimi təklif oluna bilər. </li>
  <li> Bir qaynaq seçdikdən sonra onu həmin qaynaqla əlaqələndirmək üçün şəklin altındakı Şəkli Yüklə düyməsini sıxa bilərsiniz. Şəkil yükləndikdən sonra sağdakı saytdakı sütundan yox olacaq və solda görünəcək. </li>
  <li> Artıq göstərmək istəmədiyiniz şəkilləri silmək üçün mövcud şəkillərin yanındakı Zibil qutusu düyməsini istifadə edin. </li>
  <li> Səhifələrdə əlifba sırası ilə göstərildiyi üçün yükləməzdən əvvəl faylların adını dəyişərək slayd şouda göstərilmə qaydasını dəyişə bilərsiniz. </li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Resurs düyməsinin yanında, Önizləmə düyməsini görə bilərsiniz. Bunun üzərinə tıklasanız, hazırda yüklənmiş şəkillərin bir səhifədə necə görünəcəyini göstərən bir popup görəcəksiniz. şəkillərin müştərilərinizə necə görünəcəyi haqqında fikir. ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Yükləyə biləcəyiniz şəkil sayında heç bir məhdudiyyət yoxdur. Şəkillər yükləndikdə avtomatik olaraq ölçüsü dəyişdirilir. Yalnız JPG və PNG faylları yükləyə bilərsiniz.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "İdeal olaraq yüklədiyiniz hər hansı bir şəkil ən azı olardı");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', "piksel genişliyi, əks halda yükləndikdən sonra qeyri -səlis görünə bilər.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Yüklədiyiniz şəkillər çox ola bilməz");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', "ölçüdə.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Şəkillər yükləmək istədiyiniz mənbəni seçin");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Xüsusi qaynaq");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Şəkillər artıq bu qaynaq üçün yüklənmişdir");
	
jr_define('_JOMRES_MARKDOWN_TITLE', 'Mətn formatlanması');
jr_define('_JOMRES_MARKDOWN_DESC', 'Buraya sadə Markdown formatından istifadə edərək mətn daxil edə bilərsiniz. Heç bir HTML bilməyinizə ehtiyac yoxdur, məlumatı istədiyiniz kimi göstərmək üçün düymələrdən istifadə edin və ya bu nümunələrə uyğun olaraq mətni formatlaşdırın.');
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Vurgu');
jr_define('_JOMRES_MARKDOWN_BOLD', 'qalın');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'kursiv');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'üstündən xətt çəkmək');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Başlıqlar");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Böyük başlıq');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Orta başlıq");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Kiçik başlıq');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Kiçik başlıq');
jr_define('_JOMRES_MARKDOWN_LISTS', "Siyahılar");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Ümumi siyahı elementi');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Nömrəli siyahı elementi');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Bağlantılar');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Göstəriləcək mətn');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Sitatlar');
jr_define('_JOMRES_MARKDOWN_THISISAQUOTE', 'Bu bir təklifdir');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Birdən çox sətri əhatə edə bilər!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Şəkillər');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Cədvəllər');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Sütun');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Mülkiyyət şəkillərini əmlak siyahısında slayd şou olaraq göstərilsin?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Bəli olaraq təyin olunarsa, mülkiyyətin əsas şəkillərinin slayd şousu göstəriləcək. Xeyr olaraq təyin olunarsa, ilk mülkiyyət əsas görüntüsü göstəriləcək.');

jr_define('EDIT_CMS_USER', 'CMS istifadəçisini redaktə et');

jr_define('BOOKING_MADE_BY', 'Rezervasyon hazırladı');

jr_define('_JOMRES_ROUTER_FEATURES', 'İmkanlar');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Otaq Növləri');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Xarici sifariş formu URL');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Sifariş vermək üçün üçüncü tərəf veb saytından istifadə etmək istəyirsinizsə, burada xarici bir URL təyin edə bilərsiniz. Bütün jomres sifariş düymələri bu URL -yə işarə edəcək. Jomres sifariş formasını istifadə etmək istəyirsinizsə bu sahəni boş buraxın. . ');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (qısa otaq təsviri/altyazı)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Otaq Təsviri');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Qonaq qara siyahıda');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Bu qonaq qara siyahıdadırsa, artıq bu mülkdə rezervasyon edə bilməyəcəklər');
jr_define('_JOMRES_SESSION_HANDLER', 'Sessiya işçisi');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'jomres sessiya fayllarını diskə və ya verilənlər bazasına qeyd edin. Tövsiyə olunur: verilənlər bazası');
jr_define('_JOMRES_MAP_HEIGHT', "Xəritə hündürlüyü (px)");
jr_define('_JOMRES_MAP_ZOOMLEVEL', "Xəritə böyütmə səviyyəsi");
jr_define('_JOMRES_MAP_MAPTYPE', "Xəritə növü");

jr_define('_JOMRES_TEMPLATE_PACKAGES', "Şablon Yoxlama Müdiri");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD', "Şablon paketləri müxtəlif əsas Jomres şablon faylları üçün şablonları təmin edə biləcək plaginlərdir.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO', "Bu səhifədə şablon paketinin şablon faylları tərəfindən ləğv edilə bilən hər hansı bir şablon faylları var. Müəyyən bir şablon faylını ləğv etmək istəyirsinizsə, həmin faylın redaktə düyməsini basın, növbəti səhifədə olacaqsınız Hansı versiyanı ləğv etmək istədiyinizi seçə bilərsiniz. Diqqət edin, bu ləğvlər həm Jomres Core, həm də hər hansı bir Wordpress və ya Joomla mövzusu/şablonu üzərində üstünlük təşkil edir. Təkrar Şablonu Silmə səhifəsində silərək ləğv edə bilərsiniz. ");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME', "Şablon adı");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH', "Cari yol");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN', "Yenidən yazılmadı");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO', "Açılır menyunu dəyişdirərək Hansı şablon faylının Əsas şablon fayllarını ləğv edəcəyini seçə bilərsiniz");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED', "Rezerv edilmiş otaqların faizi");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Yeni mülkiyyət forması yaradır.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Xəritə zoom, 1: World 5: Landmass/continent 10: City 15: Streets 20: Binalar');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Göstəriləcək rəylərin sayı');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'İstifadəçilərin qısa siyahıya alınmış xüsusiyyətlərini göstərir. İstifadəçi qeydiyyatdan keçibsə, bunlar favoritləridir, əgər daxil deyilsə, ziyarət zamanı Sevimli simvolu ilə əlavə olunan əşyalar.');

jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum əmanət dəyəri');
	
jr_define('_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Əgər hesablanmış depozit bu rəqəmdən azdırsa, əmanəti bu dəyərə qoyun. Saytın minimum depozit ayarını yerinə yetirməsə bu rəqəmin özü həddindən artıq ola bilər. 0 olaraq təyin edin ayarı istifadə etməyin. ");

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'GDPR uyğun razılıq formasını göstərir.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Mülkiyyət otağı növü siyahısı');
jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Mülkiyyət otaq tipini göstər');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Giriş formasını göstər');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Müəyyən bir otaq tipli otaqların siyahısını göstər');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Otaq növü id');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Tablosuna');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Sindikasiya edilmiş xüsusiyyətlərin siyahısını göstərir');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Göstəriləcək sindikat xüsusiyyətlərinin sayı');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'MRP -lərin (otellər/yataq otaqları) və ya SRP -lərin (kotteclər/mənzillər/villalar) göstərilib göstərilməməsi. Varsayılan mövcud MR -nin mülkiyyətidirsə, MR -ə aid deyilsə Xüsusi bir növ seçmək üçün bu dəyəri srps üçün 0 və ya mrps üçün 1 olaraq təyin edin. ');

	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS', "Əmlakın ulduzlarını göstərir. Əgər əmlak MRP-dirsə, bunlar Mülk Konfiqurasiyasında təyin olunub.");
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_PROPERTY_UID', 'Əmlakın İD-si.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_STARS_NUMBER', 'İstəyə bağlıdır. Əgər mülkiyyət id-si təyin edilməyibsə, onun yerinə nömrə ötürə bilərsiniz.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_PATH', 'Könüllüdür. Alternativ şablon yolu. Url vasitəsilə ötürülə bilməz. Mütləq olmalıdır.');
	jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_STARS_SUMMARY_ARG_ALT_TEMPLATE_NAME', 'İstəyə görə. Alternativ şablon adı.');

	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET', "Qısa kodlarla yerləşdirmə üçün mülkiyyət modulu tipli çıxışı göstərir. Mülkiyyət modulunun çıxışı səhifənin müxtəlif yerlərində göstərilmək üçün nəzərdə tutulmuş əmlak təfərrüatlarının kiçik bir parçasıdır.");
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_PROPERTY_UID', 'Könüllüdür. Əmlakın ID-si. Əgər mülkiyyət uid-i təyin olunmayıbsa, təsadüfi nəşr edilmiş xüsusiyyət göstəriləcək.');
	jr_define('_JOMRES_SHORTCODES_06000PROPERTY_WIDGET_ARG_ALT_TEMPLATE_NAME', 'İstəyə bağlıdır. Alternativ şablon adı, ".html" olmadan. Şablon şablonun ləğvi kataloqunda olmalıdır. Bu, "bas.moout in" səhifənizdə müxtəlif yerlərə daxil edilmiş_bas.html səhifənizin fərdiləşdirilmiş versiyalarından istifadə etməyə imkan verir. ');