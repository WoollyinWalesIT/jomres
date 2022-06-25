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

jr_define ('_JOMRES_FAQ', 'Tez -tez verilən suallar');
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Xüsusiyyətlər');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Mülkiyyəti necə yarada bilərəm?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Yeni xüsusiyyət əlavə etmək üçün Xüsusiyyətlər> Yeni Mülkiyyətə vurun');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Əmlakımın qonaqlara necə göründüyünü necə görə bilərəm?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Əmlakınızın qonaqlara necə göründüyünü görmək üçün Xüsusiyyətlər> Önizləməyə klikləyin.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Necə otaq əlavə edim?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Otaqları necə əlavə etməyiniz Tarif Redaktə etmə rejiminizdən asılıdır. Normal tarif tənzimləmə rejimində, qiymətlərinizi konfiqurasiya edərkən avtomatik olaraq əlavə olunduqları üçün otaqlar əlavə etməyinizə ehtiyac yoxdur. İstifadə edirsinizsə Micromanage və ya Qabaqcıl tarif tənzimləmə rejimi, sonra Ayarlar> Otaqlar bölməsində otaqlar əlavə edə, redaktə edə və silə bilərsiniz. Ayrıca otaq xüsusiyyətləri yarada və bu xüsusiyyətləri o otaqlara təyin edə bilərsiniz. Əlavə olaraq, fərdi olaraq şəkillər yükləyə bilərsiniz. Media Mərkəzindən istifadə edən otaqlar. Otaqlar yaratdığınız zaman, onların idarə olunmasını asanlaşdıracağı üçün real dünyadakı otaqlarınızı mülkünüzdə əks etdirməsini təmin etməyə çalışmalısınız. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Otaq qiymətlərini necə təyin edə bilərəm?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Bu, tarif tənzimləmə rejiminizdən asılıdır. Normal Tarif tənzimləmə rejimindən istifadə edirsinizsə (Əmlak Konfiqurasiyası> Tarif Düzəliş Modları sekmesi), o zaman malik olduğunuz otaqların sayını, qiymətini və sayını konfiqurasiya edə bilərsiniz. hər otaqda yerləşdirə biləcəyiniz adamlar və hər sifarişdə istədiyiniz ümumi adam sayı. Bu rejim, önümüzdəki 10 il üçün otaq qiymətlərini təyin etməyə imkan verir. <br/> Ətraflı və ya Micromanage tarif tənzimləmə rejimlərindən istifadə edirsinizsə, deməli İllər boyu hər gün üçün otaq qiymətləri təyin edə bilərsiniz. Eyni otaq tipinə görə birdən çox tarifiniz ola bilər, məsələn, Bed & Breakfast üçün bir tarif, Yataq, Səhər yeməyi və Axşam yeməyi üçün başqa tariflər ola bilər. Xüsusi ehtiyacınız olmadığı təqdirdə , hər zaman Micromanage istifadə etməyinizi tövsiyə edirik, Ətraflı eyni şəkildə işləyəcək, ancaq fərqli tarifinizin başlama və bitmə tarixlərinin ardıcıl olmasını təmin etmək üçün diqqətli olmalısınız. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'İsteğe bağlı əlavələr necə yaradılır?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Əlavələr rezervasiyalara əlavə edilə bilər və Ayarlar> Əlavələr bölməsində konfiqurasiya edilə bilər. Bunlar ya isteğe bağlı ola bilər, ya da 'məcburi' ola bilər, başqa sözlə qonaq rezervasiyada seçimlərini ləğv edə bilməz. Fərqli üsullar təklif edə bilərsiniz. isteğe bağlı əlavələr üçün ödənişlərin və onların Əmlak Detalları səhifənizdə görünüb -göstərilməməsi. Əlavələr yalnız sifarişin müəyyən tarixlərdə (məsələn, mövsümi meyvələr üçün) olub olmadığını göstərmək üçün edilə biləcəyinə əmin olmalısınız. Tarixi və Tarixi tarixləri təyin etdiniz. İsteğe bağlı uzantılar yaratdıqdan sonra Media Meneceri vasitəsi ilə onlar üçün şəkillər yükləyə bilərsiniz. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'İnternetdə ödənişləri necə götürə bilərəm?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "İnternetdə ödənişlər aparmaq üçün bir onlayn ödəniş təminatçısında Gateway adlı hesabınız olmalıdır. Mövcud şlüzləri görmək üçün Əmlak Konfiqurasiyası> Şlüzlər sekmesine keçin. Alınacaq bir şlüzün adını vurun. konfiqurasiya səhifəsinə. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'Endirimlər verə bilərəmmi?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "Endirimlər edilə bilər, bunun bir çox fərqli yolu var. Bir müştəri adından sifariş edirsinizsə, o zaman sifariş formasında öz Əmanət və Rezervasiya cəmi təyin edə bilərsiniz. , Yerləşdirmə Cədvəlini Yadda saxla və Depoziti Yalandan istifadə edin (qonaqlar bu xüsusiyyətdən istifadə edə bilməz). Qonağa endirim verməyin başqa bir yolu, yalnız müəyyən tarixlər arasında istifadə oluna biləcək şəkildə konfiqurasiya edilə bilən endirim kuponları yaratmaqdır. /dan) və ya yalnız rezervasyon müəyyən tarixlər arasında olduqda tətbiq olunur (Rezervasyon/tarix etibarlıdır). Bu endirim kuponları yalnız bir qonağa təyin edilə bilər və ya istəsəniz kuponları çap edə bilərsiniz. Çıxışda QR kodu var endirim kodu tətbiq edildikdən sonra qonaqlar onları telefonunuza daxil edə bilər və bu da onları sifariş formunuza aparır. ");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervasyonlar');

jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Yeni rezervasiyanı tıkladığımda, əlaqə formasına girdim, niyə?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'İnternetdə sifariş qəbul etməzdən əvvəl, real mülkiyyətinizdə olan hər bir otaq növü üçün bəzi qiymətləri (tarifləri) konfiqurasiya etməlisiniz. Bəzi tariflər yaratdıqdan sonra sifarişləri qəbul edə biləcəksiniz. . ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Qara Rezervasyonlar Nələrdir?');
    jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Qara rezervasyonlar bir otaq və ya otaqları xidmətdən çıxarmaq üçün yaradılmış rezervasyonlardır. Heç bir qonaqla əlaqəli deyillər və məsələn, bir otağın təmirə ehtiyacı varsa faydalıdır");
jr_define ('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Şəkillər');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Şəkilləri necə yükləyim?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Şəkilləri yükləmək üçün Ayarlar> Media Mərkəzi səhifəsinə daxil olmalısınız. Bu səhifədə bir neçə bölmə görəcəksiniz. Yuxarıda bəzi qeydləri görə bilərsiniz və altında bir açılır menyu görəcəksiniz. Bu açılan menyu, şəkilləri hansı mənbəyə yüklədiyinizi seçməyə imkan verir. <br/> Sağda Şəkillər Əlavə et, Siyahını Sil və Hamısını Yüklə yazısı olan bir sütun var. Şəkillər əlavə et düyməsini basın və masaüstünüzdən və ya mobil cihazınızdan bəzi şəkilləri seçin. bunu etdiniz, sütun kiçik şəkillər siyahısına çevriləcək. Buradan mənbələriniz üçün bir və ya daha çox şəkil yükləyə bilərsiniz. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "'Əsas' görüntü nədir?");
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Əsas görüntü, axtarış nəticələrində və mülkiyyət başlığınızda görünən şəkildir (səhifənizin üst hissəsində mülkünüz haqqında bir şey göstərən sahə). Mülkiyyətinizi göstərən bir şəkil seçməlisiniz. mümkün olan ən yaxşı işıq. Əsas şəkil yükləmək üçün sol üstdəki açılan siyahıda Əsas Əsas Şəklin seçildiyindən əmin olun, sonra bir və ya daha çox şəkil yükləyin. Birdən çox şəkil yükləsəniz, bütün şəkillər axtarışda istifadə ediləcək. nəticələr səhifəsi kiçik bir slayd şou olaraq göstərilir. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Otaq xüsusiyyət ikonları nələrdir?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Otaq xüsusiyyətləri Micromanage və ya Ətraflı tarif tənzimləmə rejimi istifadəçiləri tərəfindən yaradıla bilər. Bunlar bir və ya daha çox otağa bağlana bilər və sifariş formasında göstərilə bilər. Bir otaq xüsusiyyətini yaratdıqdan sonra edə bilərsiniz əvvəlcə Media Mərkəzindəki açılan menyuda Otaq Xüsusiyyətləri Nişanlarını seçərək, sonra açılan siyahıdan otaq xüsusiyyətinin adını seçərək bu xüsusiyyət üçün bir şəkil yükləyin. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Otaq şəkillərini necə yükləyim?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Otaqlar Micromanage və ya Ətraflı tarif tənzimləmə rejimləri istifadəçiləri tərəfindən yaradıla bilər. Bir və ya daha çox otaq yaradıldıqdan sonra Media Mərkəzi vasitəsilə hər otaq üçün birdən çox şəkil yükləyə bilərsiniz (sonra otaq adını/nömrəsini seçin) Açılan menyudan Otaq Şəkillərini seçin) .Bu şəkilləri Önizləmə səhifəsinə baxaraq və Otaqlarımız sekmesini seçərək Əlçatımlılıq bağlantısını tıklayaraq slaydda görmək olar. ');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Slayd şou şəkillərini necə yükləyim?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slayd şou şəkilləri Mülkiyyət Təfərrüatları (Önizləmə) səhifəsində, İndi Kitab Et düyməsinin yanında görünür.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Əlavə Şəkilləri Necə Yükləyim?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Otaqlara və otaq xüsusiyyətlərinə bənzər olaraq əvvəlcə Əlavə yaratmalısınız. Bunu etdikdən sonra yuxarı açılan menyuda Əlavələr seçə bilərsiniz. Bunu etdikdən sonra adını seçməlisiniz. Aşağıdakı açılan siyahıdan Əlavə. Ad seçildikdə həmin Əlavə üçün bir və ya daha çox şəkil yükləyə bilərsiniz. ");
jr_define ('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Qonaqla əlaqəli bir şey');
jr_define ('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Necə blahblahblah edim?');
jr_define ('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Sən blahblahblah');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Bir neçə dildə təsvirləri necə saxlaya bilərəm?');

jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Təsvirləri birdən çox dildə saxlamaq üçün əvvəlcə Ayarlar> Mülkiyyət Təfərrüatları səhifəsinə daxil olun. Mülkiyyətinizin təsvirini orada saxlayın. Sonra, sayta baxdığınız dili dəyişdirin. İndi Ayarlara gedin. Əmlak Detalları səhifəsinə yenidən daxil olun və təfərrüatları yenidən qeyd edin. Beləliklə, sayt həm İngilis, həm də İspan (və ya başqa) dilləri göstərə bilirsə, İngilis dilini seçərsiniz, İngilis dilində təsviri daxil edin, sonra Saxla düyməsini basın. dili ispan dilinə çevirin, sonra yeni İspan təsvirini qeyd edin. Bu, həmin səhifədəki bütün girişlər üçün işləyir. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES', 'Bu saytdakı digər mülkləri dəyişdirə bilərəmmi?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Xeyr, edə bilməzsiniz. Yalnız yaratdığınız və ya mülkiyyət meneceri olaraq təyin etdiyiniz mülkləri idarə edə bilərsiniz.');
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Bu saytda digər xassələri dəyişdirə bilərəmmi?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Bəli, siz Super Əmlak menecerisiniz və Siyahı Xüsusiyyətləri səhifəsində göstərilən hər hansı bir mülkü dəyişdirə bilərsiniz.");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Qonaq Tipləri Nələrdir/Gecə adam başına necə dəyişə bilərəm?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Ayarlar> Mülkiyyət Konfiqurasiyası> Tariflər və Valyutalar sekmesinde, adambaşına bir gecəlik ödəniş etmək istəməyinizə qərar verə bilərsiniz. Gecə adam başına ödəyirsinizsə, bir və ya daha çox qonaq növü yaratmalı olacaqsınız. Sadə bir qonaq növü yarada bilərsiniz, burada onlara yalnız bir şərh verin (məsələn, Şəxslər) və ya bir neçə fərqli qonaq növü yarada bilərsiniz, məsələn 'Yetkinlər' və '10 yaşdan kiçik uşaqlar'. Uşaqlar üçün təklif etmək istəyirsinizsə 50% endirim sonra 'İs faizini' Bəli, Varians dəyərini 50 olaraq təyin edərdiniz. Otaqların baza qiymətləri var, bu parametr qonaq növünə görə otağın qiymətini tənzimləməyə imkan verir. ");
jr_define ('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Otaq Xüsusiyyətləri Nələrdir?');
jr_define ('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Otaq xüsusiyyətləri, otağı fərqləndirən şeylərdir. Çay və Qəhvə hazırlama qurğuları kimi sadə bir şey ola bilər və ya otağı həqiqətən digərlərindən üstün tutan şeylər ola bilər. bay '. Otaq Xüsusiyyətini yaratdıqdan sonra, Media Mərkəzində bu xüsusiyyət üçün şəkillər yükləyə bilərsiniz. Bu otaq xüsusiyyətlərinə otaqların mövcudluğu səhifəsində baxıla bilər və mülkünüzü Klassik Otaqlar siyahısının üslubunu göstərmək üçün konfiqurasiya etmisinizsə. (qonaqların tam olaraq hansı otağı sifariş etmək istədiklərini seçə biləcəyi yerdə), sonra sifariş formasında göstərilən oomları süzmək üçün otaq xüsusiyyətlərindən istifadə edə bilərlər. ");

jr_define ('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Ödəmələr');
jr_define ('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Sifariş verdikdən sonra ödəniş qapısını görə bilməzsiniz");
jr_define ('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Əmlak meneceri olaraq daxil olsanız, ödəniş şluzunu görməyəcəksiniz, çünki özünüz ödəmirsiniz. Sifariş verərkən yalnız idarəçi olmayan istifadəçilər ağ geçidi görəcəklər.");