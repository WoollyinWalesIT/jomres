<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
jr_define('_JOMRES_SHORTCODES_06001CPANEL', 'Bu özellik cpanel ön sayfasıdır.');

jr_define('_JOMRES_SHORTCODES_06001TAPECHART', 'Bu, bir bakışta gerçek zamanlı rezervasyonlar, müsaitlik ve doluluk hakkında genel bir bakış sağlayan özellik teyp çizelgesidir.');

jr_define('_JOMRES_SHORTCODES_06000COMPARE', 'Bu komut dosyası, kullanıcının en fazla 3 mülke kadar birkaç özelliği birbiriyle karşılaştırmasını sağlar.');
jr_define('_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS', 'Özellik kullanıcı kimliklerinin virgülle ayrılmış listesi, örn. 12,8,7');

jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER', 'İletişim sahibi formunu oluşturur.');
jr_define('_JOMRES_SHORTCODES_06000CONTACTOWNER_ARG_PROPERTY_UID', 'İletişim kurulacak mülkün özellik kullanıcı kimliğini iletin. Bunun yerine site yöneticisi ile iletişime geçmek için 0 (sıfır) iletin.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS', "Mülk Konfigürasyonunda mülk yöneticisinin Şirket ayrıntılarınız alanından ayrıntıları çeken Şirket Bilgileri sayfasını gösterir. Bu sekmedeki ayrıntılar genellikle yazışmalar için kullanılır ve yöneticilerin hem otel/apartman adresini hem de iş amaçlı ayrı bir adres.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_HOTEL_DETAILS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR', "Tesis takvimini gösterir");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_PROPERTY_UID', 'Gösterilecek özelliğin özellik kullanıcı kimliğini iletin.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_MONTHS_TO_SHOW', 'Gösterilecek aylar, aksi ayarlanmadıysa varsayılan değer 24\'tür. Sadece Ayı Göster değişkeni ile uyumlu değildir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_CALENDAR_ARG_SHOW_JUST_MONTH', "Yalnızca içinde bulunulan ayı kendi başına göstermek istiyorsanız bunu 1'e ayarlayın. Aynı kısa kodda show_just_month kullanılıyorsa, aylar_to_show ayarı yok sayılır, bu nedenle ikisini veya diğerini kullanmamalısınız. aynı zamanda.");

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION', 'Yalnızca Mülk açıklama metnini gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_DESCRIPTION_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS', 'Yalnızca Mülk açıklama metnini gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_EXTRAS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES', 'Yalnızca Mülk özelliklerini gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_FEATURES_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER', 'Yalnızca Özellik başlık şablonunu gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_HEADER_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES', 'Sadece Tesis oda tiplerini gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE', 'Sadece Mülkün ana görüntüsünü gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAIN_IMAGE_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP', 'Yalnızca Mülk haritasını gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MAP_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO', 'Özelliği gösterir Daha Fazla Bilgi metni.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_MOREINFO_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS', 'Gmaps\'e bağlanan QR kodu. Bu, mülkün yol tarifini sağlayan bir qr kodu okuma uygulaması kullanılarak bir telefona taranabilir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_QR_CODE_DIRECTIONS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS', "Bir tesisin incelemelerini gösterir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY', "Bir mülkün inceleme özetini gösterir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_SUMMARY_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM', 'Tek bir odayı gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_ARG_PROPERTY_UID', 'oda kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS', "Bir tesisin odalarını gösterir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW', "Bir tesisin oda resimlerini slayt gösterisi olarak gösterir.");
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW', 'Özellik slayt gösterisini gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_SLIDESHOW_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS', 'Emlak tarifelerini gösterir.');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_TARIFFS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_SITE_BUSINESS', "Site Konfigürasyonu > Şirket Bilgileriniz'e girilen sitenin iş adresini gösterir.");

jr_define('_JOMRES_SHORTCODES_06000TERMS', 'Mülkiyet hüküm ve koşullarını gösterir.');
jr_define('_JOMRES_SHORTCODES_06000TERMS_ARG_PROPERTY_UID', 'Mülkün kimliği.');

jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR', "Tesisin, ana büyük takvimden farklı bir takvim olan ve Jquery UI takvim işlevselliğini temel alan UI takvimini gösterir.");
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID', 'Gösterilecek özelliğin özellik kullanıcı kimliğini iletin.');
jr_define('_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND', 'Efsaneyi göstermemek için bunu 1 olarak ayarlayın.');

jr_define('_JOMRES_SHORTCODES_06000SEARCH', "Arama parametreleri eklenerek geliştirilebilecek arama sonuçlarını gösterir. Tüm parametreleri aynı anda kullanmanızı önermiyoruz, çünkü çok sınırlı arama kriterleri ile karşılaşacaksınız. Bunun yerine kendinizi yalnızca bir veya iki parametreyle sınırlandırmalısınız, örneğin ülke ve yıldız sayısına göre arama yapın.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_COUNTRY', 'ISO Alpha-2 kodunu kullanarak ülkeye göre arama yapın, örn. GB veya DE.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_REGION', "Bölgeye göre ara. Bölgeler veritabanına kaydedildiği için bölge kimliğini kullanmanız gerekir. Yönetici > Jomres > Site Yapısı > Bölgeleri Listele'yi ziyaret edin ve Düzenle bağlantısına gelin, orada bölgenin kimlik numarasını göreceksiniz. .");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_TOWN', 'Aramak istediğiniz şehrin tam adı.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_FEATURE_UIDS', 'Belirli özelliklere sahip mülkleri arayın. Özellik kimlikleri Yönetici > Jomres > Site Yapısı > Özellik Özellikleri\'nde bulunabilir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ROOM_TYPE', 'Belirli oda tiplerine sahip mülkleri arayın. Oda tipi kimlikleri Yönetici > Jomres > Site Yapısı > Oda tipleri\'nde bulunabilir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PTYPE', 'Belirli bir mülk türünün özelliklerini arayın. Özellik türü kimlikleri Yönetici > Jomres > Site Yapısı > Özellik türleri\'nde bulunabilir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_PRICERANGES', 'Belirli bir fiyat aralığındaki mülkleri arayın.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_GUESTNUMBER', "Tarifeleri belirli değerlerde misafir sayısına izin veren mülkleri arayın, örneğin 6 kişilik partiler.");
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_STARS', 'N yıldızın özelliklerini arayın.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_ARRIVALDATE', 'Varış tarihine göre ara. Kalkış Tarihi parametresi ile birleştirilmelidir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_DEPARTUREDATE', 'Kalkış tarihine göre ara. ArrivalDate parametresi ile birleştirilmelidir.');
jr_define('_JOMRES_SHORTCODES_06000SEARCH_ARG_CATEGORY', 'Mülk kategorisine göre arayın.');

jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT', "Bir aracının sayfasını görüntüleyin. Bir özellik kullanıcı kimliğini veya biliyorsanız, aracının kimliğini ya iletebilirsiniz.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_PROPERTY_UID', "Bir mülk kullanıcı kimliği, bu mülkün temsilcisini gösterecek.");
jr_define('_JOMRES_SHORTCODES_06000VIEW_AGENT_ARG_ID', "Biliniyorsa yöneticinin veritabanı kimliği.");

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR', 'Genellikle modül veya widget konumlarında kullanılan popüler özellikleri görüntüler.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_LISTLIMIT', 'Gösterilebilecek maksimum özellik sayısı.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_PTYPE_IDS', 'Yalnızca bu belirli özellik türlerinin özelliklerini göster.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_POPULAR_ARG_ASAMODULE_POPULAR_VERTICAL', 'Dikey bir pencere öğesi/modül konumu için optimize edilmiş modülleri göstermek için 1\'e ayarlayın.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM', 'Genellikle modül veya widget konumlarında kullanılan rastgele bir özellik seçimini görüntüler.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_LISTLIMIT', 'Gösterilebilecek maksimum özellik sayısı.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_PTYPE_IDS', 'Yalnızca bu belirli özellik türlerinin özelliklerini göster.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RANDOM_ARG_ASAMODULE_RANDOM_VERTICAL', 'Dikey parçacık/modül konumu için optimize edilmiş modülleri göstermek için 1\'e ayarlayın.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED', "Misafirin, genellikle modül veya widget konumlarında kullanılan en son görüntülenen özelliklerini görüntüler.");
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_LISTLIMIT', 'Gösterilebilecek maksimum mülk sayısı.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_RECENTLY_VIEWED_ARG_ASAMODULE_RECENTLY_VIEWED_VERTICAL', 'Dikey bir pencere öğesi/modül konumu için optimize edilmiş modülleri göstermek için 1\'e ayarlayın.');

jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES', 'Genellikle modül veya widget konumlarında kullanılan bir dizi özelliği görüntüler.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_UIDS', 'Göstermek istediğiniz özelliklerin özellik kimlikleri.');
jr_define('_JOMRES_SHORTCODES_06000ASAMODULE_SPECIFIC_PROPERTIES_ARG_ASAMODULE_SP_VERTICAL', 'Dikey pencere öğesi/modül konumu için optimize edilmiş modülleri göstermek için 1 olarak ayarlayın.');

jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR', 'Para birimi seçimi açılır menüsünü görüntüler.');
jr_define('_JOMRES_SHORTCODES_06000EXCHANGE_RATE_CONVERSION_SELECTOR_ARG_ALTERNATE_TEMPLATE', 'Alternatif şablon çıktısını etkinleştirin/devre dışı bırakın. Bu çıktının Bootstrap araç çubuklarında kullanılması amaçlanmıştır.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART', 'Alışveriş Sepeti sayfasını görüntüler.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_CART_MODULE', 'Alışveriş Sepeti modülünü/widget\'ını görüntüler.');

jr_define('_JOMRES_SHORTCODES_06000SHOW_MAIN_MENU', 'Ana menüyü görüntüler. Not, örneğin /templates/jr_leohtian/html/com_jomres\'de mainmenu_wrapper_alternate.html\'nin özelleştirilmiş bir sürümünü çalıştırıyorsanız, o zaman onu_<alposition_menres_değiştirmek için değiştirmeniz gerekebilir. /i> küme parantezleri içinde MENU_LOCATION ile.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_MRP', 'Bu sayfa mülkünüz ve sunduğunuz şeyler için resim yüklemenizi sağlar. Bir ana düğmesi ve resimleri yüklemek için belirli kaynakları seçmenizi sağlayan ikinci bir düğmesi vardır. Dolayısıyla, Ana özellik resim ve Slayt Gösterisi yalnızca bir düğme gösterecektir, ancak örneğin İsteğe Bağlı Ekstralar veya Odalar oluşturduysanız, o zaman bu belirli kaynaklar için resim yükleyebileceğiniz ikinci bir düğme göreceksiniz.');
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_SRP', 'Bu sayfa mülkünüz ve sunduğunuz şeyler için resim yüklemenizi sağlar. Bir ana düğmesi ve resim yüklemek için belirli kaynakları seçmenizi sağlayan ikinci bir düğmesi vardır. Dolayısıyla, Ana özellik resim ve Slayt Gösterisi yalnızca bir düğme gösterecek, ancak herhangi bir İsteğe Bağlı Ekstra oluşturduysanız, o zaman bu belirli kaynaklar için resim yükleyebileceğiniz ikinci bir düğme göreceksiniz.');


jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_GENERIC', "<ol>
  <li>Önce Görsel Ekle'yi tıklayarak veya Sürükle ve Bırak'ı kullanarak yüklemek istediğiniz görselleri seçin. Bunlar sağ taraftaki sütunda görünür.</li>
  <li>Bu alanın üzerinde, hangi kaynağa resim yüklemek istediğinizi seçmek için \"Kaynağı seçin\" düğmesini kullanın. Altında belirli bir kaynak seçme seçeneği sunulabilir. </li>
  <li> Bir kaynak seçtikten sonra, o kaynakla ilişkilendirmek için resmin altındaki Resim Yükle düğmesini tıklayabilirsiniz. Bir resim yüklendikten sonra, sitenin sağ tarafındaki sütundan kaybolur ve sol tarafta görünür.</li>
  <li>Artık gösterilmesini istemediğiniz resimleri kaldırmak için mevcut resimlerin yanındaki Çöp Kutusu düğmesini kullanın.</li>
  <li>Sayfalarda alfabetik sırayla görüntülendiğinden, dosyaları yüklemeden önce yeniden adlandırarak slayt gösterisinde gösterilme sırasını değiştirebilirsiniz.</li>
</ol>
 ");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_PREVIEW', "Kaynak düğmesinin yanında bir Önizleme düğmesi görebilirsiniz. Buna tıklarsanız, o anda yüklenen resimlerin bir sayfada nasıl görüneceğini gösteren bir açılır pencere göreceksiniz. Bu size bir görüntülerin müşterilerinize nasıl görüneceğine dair fikir.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_LIMITATIONS', "Yükleyebileceğiniz resim sayısında bir sınırlama yoktur. Resimler yüklendiklerinde otomatik olarak yeniden boyutlandırılır. Yalnızca JPG ve PNG dosyalarını yükleyebilirsiniz.");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_PRE', "İdeal olarak yüklediğiniz tüm resimler en az ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_IMAGE_RESOLUTION_POST', " piksel genişliğinde, aksi takdirde yüklendikten sonra bulanık görünebilirler.");

jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_PRE', "Yüklediğiniz resimlerden fazla olamaz ");
jr_define('_JOMRES_MEDIA_CENTRE_INSTRUCTIONS_FILESIZE_POST', " boyutunda.");

jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE', "Görüntüleri yüklemek istediğiniz kaynağı seçin");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_SPECIFIC', "Belirli kaynak");
jr_define('_JOMRES_MEDIA_CENTRE_RESOURCE_ALREADY_UPLOADED', "Bu kaynak için resimler zaten yüklendi");

jr_define('_JOMRES_MARKDOWN_TITLE', 'Metin biçimlendirme');
jr_define('_JOMRES_MARKDOWN_DESC', 'Buraya basit Markdown biçimlendirmesini kullanarak metin girebilirsiniz. Herhangi bir HTML bilmenize gerek yok, bilgileri istediğiniz gibi göstermek için düğmeleri kullanın veya metni bu örneklere göre biçimlendirin.' );
jr_define('_JOMRES_MARKDOWN_EMPHASIS', 'Vurgu');
jr_define('_JOMRES_MARKDOWN_BOLD', 'kalın');
jr_define('_JOMRES_MARKDOWN_ITALICS', 'italik');
jr_define('_JOMRES_MARKDOWN_STRIKETHROUGH', 'üstü çizili');
jr_define('_JOMRES_MARKDOWN_HEADERS', "Başlıklar");
jr_define('_JOMRES_MARKDOWN_BIGHEADER', 'Büyük başlık');
jr_define('_JOMRES_MARKDOWN_MEDIUMHEADER', "Orta başlık");
jr_define('_JOMRES_MARKDOWN_SMALLHEADER', 'Küçük başlık');
jr_define('_JOMRES_MARKDOWN_TINYHEADER', 'Küçük başlık');
jr_define('_JOMRES_MARKDOWN_LISTS', "Listeler");
jr_define('_JOMRES_MARKDOWN_GENERICLISTITEM', 'Genel liste öğesi');
jr_define('_JOMRES_MARKDOWN_NUMBEREDLISTITEM', 'Numaralandırılmış liste öğesi');
jr_define('_JOMRES_MARKDOWN_LINKS', 'Bağlantılar');
jr_define('_JOMRES_MARKDOWN_LINKSTEXT', 'Görüntülenecek metin');
jr_define('_JOMRES_MARKDOWN_QUOTES', 'Alıntılar');
jr_define('_JOMRES_MARKDOWN_THISIAQUOTE', 'Bu bir alıntıdır.');
jr_define('_JOMRES_MARKDOWN_QUOTEMULTIPLE', 'Birden çok satıra yayılabilir!');
jr_define('_JOMRES_MARKDOWN_IMAGES', 'Görüntüler');
jr_define('_JOMRES_MARKDOWN_TABLE', 'Tablolar');
jr_define('_JOMRES_MARKDOWN_COLUMN', 'Sütun');


jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW', 'Mülk resimlerini mülk listesinde slayt gösterisi olarak göster?');
jr_define('PROPERTYLIST_IMAGES_AS_SLIDESHOW_DESC', 'Evet olarak ayarlanırsa, özellik ana resimlerinin bir slayt gösterisi görüntülenecektir. Hayır olarak ayarlanırsa, ilk özellik ana resmi görüntülenecektir.');

jr_define('EDIT_CMS_USER', 'CMS kullanıcısını düzenle');

jr_define('BOOKING_MADE_BY', 'Rezervasyonu yapan');

jr_define('_JOMRES_ROUTER_FEATURES', 'Olanaklar');
jr_define('_JOMRES_ROUTER_ROOMTYPES', 'Oda Tipleri');

jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL', 'Harici rezervasyon formu URL\'si');
jr_define('_JOMRES_BOOKING_FORM_EXTERNAL_URL_DESC', 'Rezervasyon yapmak için 3. taraf bir web sitesi kullanmak istiyorsanız buradan harici bir URL ayarlayabilirsiniz. Tüm jomres rezervasyon düğmeleri bu URL\'yi gösterecektir. Jomres rezervasyon formunu kullanmak istiyorsanız bu alanı boş bırakın .');

jr_define('_JOMRES_ROOM_TAGLINE', 'Tagline (kısa oda açıklaması/altyazı)');
jr_define('_JOMRES_ROOM_DESCRIPTION', 'Oda Açıklaması');

jr_define('_JOMRES_GUEST_BLACKLISTED', 'Misafir kara listeye alındı');
jr_define('_JOMRES_GUEST_BLACKLISTED_DESC', 'Bu misafir kara listedeyse, artık bu tesiste rezervasyon yapamayacak.');
jr_define('_JOMRES_SESSION_HANDLER', 'Oturum işleyici');
jr_define('_JOMRES_SESSION_HANDLER_DESC', 'jomres oturum dosyalarını diske veya veritabanına kaydedin. Önerilen: veritabanı');
jr_define('_JOMRES_MAP_HEIGHT',"Harita yüksekliği (px) ");
jr_define('_JOMRES_MAP_ZOOMLEVEL',"Harita yakınlaştırma düzeyi ");
jr_define('_JOMRES_MAP_MAPTYPE',"Harita türü");

jr_define('_JOMRES_TEMPLATE_PACKAGES',"Şablon Geçersiz Kılma Yöneticisi");
jr_define('_JOMRES_TEMPLATE_PACKAGES_LEAD',"Şablon paketleri, çeşitli temel Jomres şablon dosyaları için geçersiz kılma şablonları sağlayabilen eklentilerdir.");
jr_define('_JOMRES_TEMPLATE_PACKAGES_INFO',"Bu sayfa, bir şablon paketinin şablon dosyaları tarafından geçersiz kılınabilecek tüm şablon dosyalarını listeler. Belirli bir şablon dosyasını geçersiz kılmak istiyorsanız, o dosyanın düzenle düğmesine tıklayın, sonraki sayfada hangi sürümle geçersiz kılmak istediğinizi seçebilirsiniz.Not, bu geçersiz kılmalar hem Jomres Core hem de herhangi bir Wordpress veya Joomla tema/şablon geçersiz kılmalarına göre önceliklidir. Bir geçersiz kılmayı Liste Şablonu Geçersiz Kılmaları sayfasından silerek devre dışı bırakabilirsiniz.");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NAME',"Şablon adı");
jr_define('_JOMRES_TEMPLATE_PACKAGE_PATH',"Geçerli yol");
jr_define('_JOMRES_TEMPLATE_PACKAGE_NOT_OVERRIDDEN',"Geçersiz kılınmadı");
jr_define('_JOMRES_TEMPLATE_PACKAGES_EDIT_INFO',"Açılır menüyü değiştirerek Çekirdek şablon dosyalarını geçersiz kılmak için hangi şablon dosyasını seçebilirsiniz");


jr_define('_JOMRES_OVERALL_ROOMS_BOOKED',"Rezerve Edilen Oda Yüzdesi");

jr_define('_JOMRES_SHORTCODES_06005NEW_PROPERTY', 'Yeni mülk oluşturma formunu görüntüler.');

jr_define('_JOMRES_SHORTCODES_06005PROPERTY_MAP_ZOOM', 'Harita yakınlaştırma, 1: Dünya 5: Kara kütlesi/kıta 10: Şehir 15: Sokaklar 20: Binalar ');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_REVIEWS_LIMIT', 'Gösterilecek inceleme sayısı');

jr_define('_JOMRES_SHORTCODES_06000SHORTLIST', 'Kullanıcıların kısa listedeki özelliklerini görüntüler. Kullanıcı kayıtlıysa, bunlar favorileridir, oturum açmadıysa, ziyaret sırasında Favori simgesi aracılığıyla eklenen öğeler.');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE', 'Minimum para yatırma değeri');

jr_define( '_JOMRES_COM_A_MINIMUM_DEPOSIT_VALUE_DESC', "Hesaplanan depozito bu rakamın altındaysa, bunun yerine depozitoyu bu değere ayarlayın. Sitenin minimum depozito ayarını karşılamıyorsa bu rakamın kendisi geçersiz olabilir. ayarı kullanmayın." );

jr_define('_JOMRES_SHORTCODES_06000SHOW_CONSENT_FORM', 'GDPR uyumlu izin formunu gösterir.');

jr_define('_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE_LIST', 'Tesis oda tipi listesi');
jr_define( '_JOMRES_SHORTCODE_PROPERTY_ROOM_TYPE', 'Tesis oda tipini göster');

jr_define('_JOMRES_SHORTCODE_LOGIN_FORM', 'Giriş formunu göster');

jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE', 'Belirli bir oda tipindeki odaların listesini göster');
jr_define('_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID', 'Oda tipi kimliği');

jr_define('_JOMRES_SHORTCODES_06001DASHBOARD', 'Dashboard');

jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES', 'Sendikasyon mülklerinin bir listesini gösterir');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_LIMIT', 'Gösterilecek ortak mülk sayısı');
jr_define('_JOMRES_SHORTCODES_06001SHOW_SYNDICATED_PROPERTIES_ARG_MRPSRP', 'MRP\'lerin (oteller/oda & kahvaltılar) veya SRP\'lerin (yazlıklar/apartmanlar/villalar) gösterilip gösterilmeyeceği. Varsayılan, mevcut mülkün mülkünün uid\'inden belirlenir, o zaman MRP\'ler mevcut değilse belirli bir tür seçmek için, bu değeri srp için 0 veya mrp için 1 olarak ayarlayın.');


