<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define ('VIDEO_TUTORALS_TITLE', 'Video Dərsləri');

jr_define ('_JOMRES_TUTORIAL_CPANEL', 'İdarəetmə Paneli');
jr_define ('_JOMRES_TUTORIAL_CPANEL_DESC', 'Bu dərslik Mülkiyyət İdarəetmə panelindən necə istifadə edəcəyinizi göstərir.');

jr_define ('_JOMRES_TUTORIAL_TIMELINE', 'Zaman Çizelgesi');
jr_define ('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Zaman cədvəli təqvimindən necə istifadə olunur. Bu videoda detallarını açılan pəncərəyə daxil edərək yeni bir qonaq yaradırıq, açılan açılan menyudan mövcud qonaqlar adlarını seçərək yenidən istifadə edilə bilər.') ;

jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Siyahı Xüsusiyyətləri');
jr_define ('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Əlavə məlumatları görmək, sütunları dəyişdirmək və xüsusi xassələri axtarmaq üçün Siyahı Xüsusiyyətləri səhifəsindən necə istifadə olunur?');

jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Mülkiyyət məlumatlarınızı redaktə edin');
jr_define ('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Məkanınızı təyin etmək üçün xəritədə sürükləmək də daxil olmaqla mülkiyyət məlumatlarınızı redaktə etmək');

jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Tarif tənzimləmə rejimini dəyişdir');
jr_define ('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Tarif tənzimləmə rejiminiz əmlakınızın qiymətlərini təyin etmək üçün istifadə edə biləcəyiniz üsulu müəyyən edir. Bunu Əmlak Konfiqurasiyası səhifəsi vasitəsi ilə edirsiniz.');


jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Otellər, pensiyalar, pansiyonlar üçün normal tarif tənzimləmə rejimi');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normal tarif tənzimləmə rejimi, bir mülkdəki otaq sayını, otağın qiymətini, hər otağın yerləşdirə biləcəyi qonaq sayını və maksimum qonaq sayını seçməyə imkan verən sadə tarif tənzimləmə xüsusiyyətidir. Bir partiyada. Qənaət edildikdə bu qiymətlər sonrakı 10 il ərzində etibarlıdır. ');

jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Villalar və mənzillər üçün Normal Tarif Redaktəsi');
jr_define ('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normal tarif tənzimləmə rejimi, mülkün alt növünü, əmlakın bir gecəlik qiymətini və bir qonaqlıqdakı maksimum qonaq sayını seçməyə imkan verən sadə bir tarif tənzimləmə xüsusiyyətidir. Bu qiymətlər saxlandıqda sonrakı 10 il ərzində etibarlıdır. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tarif tənzimləmə rejimi (tövsiyə olunur)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage tarif tənzimləmə rejimi həm ilin qiymətləri, həm də ilin hər günü üçün keçərli olacağınız minimum gün sayını konfiqurasiya etməyə imkan verir. Sizə tam nəzarəti təmin edən güclü bir vasitədir. bu nümunədə eyni otaq tipinə görə birdən çox qiymət dəsti yaratmağı, fərqli dövrlər üçün fərqli qiymətləri və bir müddət ərzində həftənin müəyyən günləri üçün fərqli qiymətləri necə quracağınızı göstərəcəyik. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Villalar/mənzillər üçün Micromanage tarif tənzimləmə rejimi (tövsiyə olunur)');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage tarif tənzimləmə rejimi, ilin hər günü üçün həm qalmağı, həm də bir gün qala biləcəyiniz minimum gün sayını konfiqurasiya etməyə imkan verir. Sizə tam nəzarət edən güclü bir vasitədir. bu nümunədə sizə birdən çox qiymət dəsti necə yaradılacağını göstərəcəyik. Müxtəlif dövrlər üçün fərqli qiymətlər və həftənin müəyyən günləri üçün fərqli qiymətlər təyin edəcəyik. Bunu etdikdən sonra eyni qiymətə birdən çox tarif yaradacağıq. əmlak, lakin hər ssenari üzrə qiymətləri dəqiq idarə etməyə imkan verən fərqli qonaq nömrələri ilə. ');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Fərqli qonaq nömrələri üçün fərqli tariflər');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Eyni otaq növü üçün birdən çox tarif yarada bilərsiniz, buna görə də fərqli sayda qonaq üçün fərqli qiymətlər istəyirsinizsə bunu edə bilərsiniz.');

jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Gecə adam başına - Qonaq növləri');
jr_define ('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Gecə başına adambaşına ödəniş etmək üçün qonaq növləri yaratmalısınız. Fərqli qonaq növləri bir otağın baza qiymətindən fərqli ola bilər, buna görə də fərqli yaşdakı uşaqların yaşlarına görə fərqli endirimlər ola bilər. Siz Qonaq növlərindən istifadə etmək üçün adambaşına bir gecə pul ödəməyinizə ehtiyac yoxdur, ancaq sabit bir nisbət alsanız da, yenə də qonaq sayını tutmaq istəsəniz və ya rezervasyonda qonaq sayını məhdudlaşdırmaq istəsəniz də istifadə edə bilərsiniz. ' );

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Media mərkəzi - Şəkil yükləmə');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Bütün şəkillər media mərkəzi vasitəsi ilə yüklənir. Bu videoda Əsas xüsusiyyət görüntüsünü, bəzi slayd şou şəkillərini, axtarış nəticələri səhifəsində göstəriləcək kiçik bir şəkil seçimini və biri üçün şəkilləri yükləyəcəyik. otaqlar. ');

jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Media mərkəzi - Şəkil yükləmə');
jr_define ('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Bütün şəkillər media mərkəzi vasitəsi ilə yüklənir. Bu videoda Əsas xüsusiyyət görüntüsünü, axtarış nəticələri səhifəsində göstəriləcək kiçik bir şəkil seçimini və bəzi slayd şou şəkillərini yükləyəcəyik.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Administrator Control Panel');
jr_define ('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Bu idarəçi sahəsindəki standart açılış səhifənizdir. Müxtəlif sayt statistikalarının xülasəsini görə bilərsiniz və sistemdə hansı xüsusiyyətlərin tamamlandığını, tamamlandığını və təsdiqlənmədən əvvəl nəzərdən keçirilməsini gözlədiyini görə bilərsiniz. Mülkiyyət təsdiq edildikdən sonra mülkiyyət meneceri tərəfindən nəşr edilə bilər. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Plugin Manager, quraşdırma və istifadə');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Bu video plagin menecerinin quraşdırılması, sonra bir plaginin quraşdırılması və silinməsi də daxil olmaqla Plugin Manager -dən necə istifadə edəcəyinizi göstərir. Lisenziya açarınız yoxdursa Saytda saxlamaq istənir. Meneceri quraşdırmadan əvvəl konfiqurasiya. Əgər əvvəllər plagin menecerindən istifadə etməmisinizsə, bu siyahı əvvəlcə boş olacaq, bu nümunədə artıq müxtəlif plaginlər quraşdırılmışam. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Əmlak menecerləri');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Əmlak menecerləri iki yoldan biri ilə əlavə olunur. Ya özləri mülk yaradırlar (Sayt Konfiqurasiyasında deaktiv edilə bilər) və ya sayt administratoru müəyyən mülklərə mövcud menecer təyin edə bilər. Menecerlər yalnız malik olduqları mülklərə daxil ola bilərlər. yaradıldı və ya təyin edildi. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Giriş Nəzarəti');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Menyu seçimlərini deaktiv etmək, onları yalnız müəyyən istifadəçilər siniflərinə göstərmək və ya tamamilə yox etmək üçün Access Control xüsusiyyətindən istifadə edə bilərsiniz. Menyu çubuğunda bunu göstərmək üçün heç bir menyu seçimi yoxdursa. tamamilə yox olacaq, buna görə də sayt ziyarətçilərinin hər hansı bir seçim görməsini istəmirsinizsə, məsələn, daxil olan istifadəçilər üçün bütün variantları görünən kimi təyin edə bilərsiniz. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Mülkiyyət və Otaq Növləri');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Bu videoda iki önəmli anlayışı görəcəksiniz. Birincisi, mülkiyyət növlərinin və əlaqəli otaq növlərinin yaradılmasıdır. Hələ də idarəçisi olmayan qeydiyyatdan keçmiş bir istifadəçinin öz mülkünü yaratdığını və menecer (ancaq yaratdıqları mülkü konfiqurasiya edə bilir). Mülkiyyət və otaq növləri əlaqəlidir, bir mülkiyyət növü yaratdıqdan sonra bir otaq növü əlavə etməlisiniz, əks halda mülkiyyət menecerləri öz xüsusiyyətlərini konfiqurasiya etməyə çalışarkən qırmızı səhv mesajları görəcəklər. ');



jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Xəritə Markers Yüklənir');
jr_define ('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Xəritə işarələrini yükləmək üçün Media Mərkəzindən istifadə edirsiniz. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Burada böyük bir marker mənbəyi tapa bilərsiniz. < /a> Mülkiyyət xüsusiyyətlərini, otaq xüsusiyyətlərini, otaq növlərini və digərlərini yükləmə qaydası eynidir. ');

jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Mülkiyyət Xüsusiyyətləri');
jr_define ('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Bu videoda sizə mülkiyyət xüsusiyyətlərinin necə yaradılacağını və onlar üçün şəkillər yükləməyin yollarını göstərəcəyik.');

jr_define ('_JOMRES_TUTORIAL_SHORTCODES', 'Qısa kodlar');
jr_define ('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Qısa kodlar Jomresin olduqca güclü bir xüsusiyyətidir. Prinsip həm Joomla, həm də Wordpress üçün eynidir. Bu videoda qısa kodları harada görəcəyinizi göstərəcəyik (bu siyahı hansı plaginlərin olduğuna görə dəyişəcək) yüklü) və onlardan necə istifadə etmək olar. Kodları məqalələrdə və ya modullarda istifadə edə bilərsiniz. ');

jr_define ('_JOMRES_TUTORIAL_LOGFILES', 'Günlük faylları');
jr_define ('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Bu video sizə log fayllarına necə baxacağınızı göstərəcək. Sistem işə salındıqda geniş qeydlər olur. İstehsal rejimində olduqda (Sayt Konfiqurasiyası> Hata Ayıklama) daha az qeyd yaranır, buna görə yeni bir funksiyanı sınaqdan keçirirsinizsə saytınızı İnkişafa qoymalısınız. Jomres skriptlərinizə öz qeydlərinizi əlavə etmək istəyirsinizsə, <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank"> bunu necə edəcəyimizə dair təlimat səhifəmiz. </a> Burada saxta bir səhv atacağıq, sonra qeyd sənədinə baxacağıq. Sayt orada İnkişaf etdirmə olaraq qurulduğundan. çox məlumatdır, normalda bir səhv olduğunu və bildirildiyini bildirən bir mesaj görürsünüz. ');

jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS', 'Etiketləri və digər sətirləri tərcümə etmək');
jr_define ('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Jomres-də dil sətirlərini tərcümə etməyin bir çox yolu var, dil sənədlərini redaktə edə bilərsiniz, ancaq təkmilləşdirdiyiniz zaman onların üzərinə yazıla bilər. Bunun əvəzinə bizim üçün unikal olan daxili tərcümə vasitələrindən istifadə etməyi məsləhət görürük. Sətir, bir otaq tipinin adı kimi bir forma daxil edilmiş bir şeydirsə, Etiket Düzenleme səhifəsindən istifadə edə bilərsiniz, əgər simli dil sənədindəndirsə, Dil faylları redaktə alətindən istifadə edə bilərsiniz. Dəyişdirmək istədiyiniz sətri tapmaq üçün brauzer axtarış vasitəsindən istifadə edin və sonra dəyişdirmək üçün linki vurun. Bu dəyişikliklər verilənlər bazasında saxlanılır və buna görə də təhlükəsiz olaraq yenilənir. Fərqli mülkiyyət növləri üçün fərqli etiketlərə sahib ola bilərsiniz. Yeni Mülkiyyəti Yeni Kamp Alanına dəyişdirin, məsələn, etiketi dəyişməzdən əvvəl səhifənin yuxarısındakı Dil Konteksti açılır menyusunu dəyişdirərək. ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Xüsusiyyətlər əlavə etmək');
jr_define ('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p> Bu mərhələdə Jomres CMS -ə quraşdırıldı və ön menyusuna əlavə edildi (və ya Wordpress -də bir səhifə yaratdınız və ona əsas Jomres qısa kodunu əlavə etdiniz). </ p>
<p> Burada hələ Jomres -də mülkiyyət meneceri olmayan qeydiyyatdan keçmiş bir istifadəçinin yeni bir mülk necə yarada biləcəyini, bəzi əsas parametrləri konfiqurasiya edib nəşr edə biləcəyini görəcəksiniz. </p>
<p> Sonda menecerin avtomatik olaraq əmlak meneceri olaraq təyin olunduğunu görəcəksiniz, ancaq onlar yalnız öz xüsusiyyətlərini konfiqurasiya edə bilirlər. </p>
<p> Wordpressdəki interfeys fərqli görünsə də, proses Joomla və ya Wordpress üçün tam eynidır. </p> ');

jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Əmlak kateqoriyalar');
jr_define ('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Mülkiyyət kateqoriyası, mülkiyyət menecerlərinə öz xüsusiyyətlərini müəyyən bir kateqoriyaya təyin etməyə imkan verən sadə bir xüsusiyyətdir. Sayt idarəçiləri bu videoda göstərildiyi kimi bir kateqoriyadakı bütün xüsusiyyətlərin siyahısını verən qısa kodlar yarada bilərlər.');

jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Sayt idarəçisi xüsusiyyətlərə baxır');
jr_define ('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p> Mülkiyyətləri buradan idarə etmirsiniz, yalnız cəbhədən xassələri idarə edə bilərsiniz, ancaq bu siyahıda təsdiqini gözləyən mülkləri görə bilərsiniz (xüsusiyyət aktivdirsə) və natamamdır (məsələn, hələ də şəkillər yükləməli, qiymətləri təyin etməlisiniz və s.) bir mülkü tamamlamaq və dərc etmək üçün götürməlisiniz. </p> ');

