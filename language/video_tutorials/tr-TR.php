<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


jr_define('VIDEO_TUTORALS_TITLE', 'Video Eğitimleri');

jr_define('_JOMRES_TUTORIAL_CPANEL', 'Kontrol Paneli');
jr_define('_JOMRES_TUTORIAL_CPANEL_DESC', 'Bu eğitim size Mülk Yönetimi kontrol panelini nasıl kullanacağınızı gösterir.');

jr_define('_JOMRES_TUTORIAL_TIMELINE', 'Zaman Çizelgesi');
jr_define('_JOMRES_TUTORIAL_TIMELINE_DESC', 'Zaman çizelgesi takvimi nasıl kullanılır. Bu videoda açılır pencereye ayrıntılarını girerek yeni bir konuk oluşturuyoruz, mevcut konuklar açılır penceredeki açılır menüden adları seçilerek yeniden kullanılabilir.') ;

jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES', 'Liste Özellikleri');
jr_define('_JOMRES_TUTORIAL_LISTPROPERTIES_DESC', 'Ekstra bilgileri görüntülemek, sütunları değiştirmek ve belirli özellikleri aramak için Liste Özellikleri sayfası nasıl kullanılır.');

jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP', 'Mülk ayrıntılarınızı düzenleyin');
jr_define('_JOMRES_TUTORIAL_EDIT_PROPERTY_MRP_DESC', 'Konumunuzu ayarlamak için harita üzerinde sürükleme dahil mülk ayrıntılarınızı düzenleme.');

jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE', 'Tarife düzenleme modunu değiştir');
jr_define('_JOMRES_TUTORIAL_CHANGE_TARIFF_EDITING_MODE_DESC', 'Tarife düzenleme modunuz, mülkünüzün fiyatlarını belirlemek için kullanabileceğiniz yöntemi belirler. Bunu Mülk Yapılandırma sayfasından yaparsınız.');


jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP', 'Oteller, pansiyonlar, pansiyonlar için normal tarife düzenleme modu');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_MRP_DESC', 'Normal tarife düzenleme modu, bir tesisteki oda sayısını, oda fiyatını, her odanın konaklayabileceği misafir sayısını ve maksimum misafir sayısını seçmenizi sağlayan basit bir tarife düzenleme özelliğidir. bir partide. Kaydedildiğinde bu fiyatlar sonraki 10 yıl için geçerlidir.');

jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP', 'Villa ve apartmanlar için Normal Tarife Düzenlemesi');
jr_define('_JOMRES_TUTORIAL_NORMAL_TARIFF_EDITING_MODE_SRP_DESC', 'Normal tarife düzenleme modu, tesis alt türünü, tesisin gecelik fiyatını ve bir partideki maksimum misafir sayısını seçmenizi sağlayan basit bir tarife düzenleme özelliğidir. Kaydedildiğinde bu fiyatlar sonraki 10 yıl için geçerlidir.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP', 'Micromanage tarife düzenleme modu (önerilir)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MRP_DESC', 'Micromanage tarife düzenleme modu, yılın her günü için hem fiyatı hem de konaklamanın geçerli olabileceği minimum gün sayısını yapılandırmanıza olanak tanır. Size tam kontrol sağlayan güçlü bir araçtır Bu örnekte, aynı oda tipi için birden fazla fiyat setinin nasıl oluşturulacağını, farklı dönemler için farklı fiyatların ve bir dönem içinde haftanın belirli günleri için farklı fiyatların nasıl belirleneceğini göstereceğiz.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP', 'Villalar/apartmanlar için mikro yönetim tarife düzenleme modu (önerilir)');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_SRP_DESC', 'Micromanage tarife düzenleme modu, yılın her günü için hem fiyatı hem de konaklamanın geçerli olabileceği minimum gün sayısını yapılandırmanıza olanak tanır. Size tam kontrol sağlayan güçlü bir araçtır Bu örnekte size çoklu fiyat setlerinin nasıl oluşturulacağını göstereceğiz.Bir süre içinde farklı periyotlar için farklı fiyatlar ve haftanın belirli günleri için farklı fiyatlar belirleyeceğiz.Bu yapıldıktan sonra aynı fiyat için birden fazla tarife oluşturacağız. mülk, ancak her senaryo için fiyatları hassas bir şekilde kontrol etmemize izin veren farklı konuk sayılarıyla.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP', 'Farklı misafir numaraları için farklı tarifeler');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_TARIFF_EDITING_MODE_MORE_GUESTS_MRP_DESC', 'Aynı oda tipi için birden fazla tarife oluşturabilirsiniz, yani farklı misafir sayıları için farklı fiyatlar isterseniz bunu yapabilirsiniz.');

jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES', 'Kişi başı gecelik - Misafir tipleri');
jr_define('_JOMRES_TUTORIAL_MICROMANAGE_GUEST_TYPES_DESC', 'Kişi başı gecelik ücretlendirme yapmak için misafir tipleri oluşturmanız gerekecektir. Farklı misafir tiplerinin bir odanın taban fiyatından farklı farklılıkları olabilir, bu nedenle farklı yaşlardaki çocukların yaşlarına göre değişen indirimleri olabilir. Misafir Türlerini kullanmak için kişi başı gecelik ücret almanıza gerek yoktur, sabit bir ücret alıyorsanız ancak yine de konuk sayısını yakalamak istiyorsanız veya bir rezervasyondaki konuk sayısını sınırlamak istiyorsanız bunları da kullanabilirsiniz.' );

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP', 'Medya merkezi - Resim yükleme');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_MRP_DESC', 'Tüm resimler medya merkezi aracılığıyla yüklenir. Bu videoda Ana özellik resmini, bazı slayt gösterisi resimlerini, arama sonuçları sayfasında gösterilecek küçük bir resim seçimini ve bunlardan biri için resimleri yükleyeceğiz. Odalar.');

jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP', 'Medya merkezi - Resim yükleme');
jr_define('_JOMRES_TUTORIAL_MEDIA_CENTRE_SRP_DESC', 'Tüm resimler medya merkezi aracılığıyla yüklenir. Bu videoda Ana özellik resmini, arama sonuçları sayfasında gösterilecek küçük bir resim seçimini ve bazı slayt gösterisi resimlerini yükleyeceğiz.');

jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL', 'Yönetici Kontrol Paneli');
jr_define('_JOMRES_TUTORIAL_ADMIN_CPANEL_DESC', 'Bu, yönetici alanındaki varsayılan açılış sayfanızdır. Çeşitli site istatistiklerinin bir özetini görebilir ve sistemde hangi özelliklerin bulunduğunu, hangilerinin tamamlanmış, hangilerinin tamamlanmış ve onaydan önce incelenmeyi beklediğini görebilirsiniz. . Bir mülk onaylandıktan sonra mülk yöneticisi tarafından yayınlanabilir.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER', 'Eklenti Yöneticisi, kurulum ve kullanım');
jr_define('_JOMRES_TUTORIAL_ADMIN_PLUGIN_MANAGER_DESC', 'Bu video, eklenti yöneticisinin kurulumu ve ardından bir eklentinin kurulumu ve kaldırılması dahil olmak üzere Eklenti Yöneticisi\'nin nasıl kullanılacağını gösterir. Bir lisans anahtarınız yoksa, Sitede kaydetmeniz istenecektir. Yöneticiyi kurmadan önce yapılandırma.Eklenti yöneticisini daha önce kullanmadıysanız, bu liste başlangıçta boş olacaktır, bu örnekte zaten yüklü çeşitli eklentilerim var.');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS', 'Mülk yöneticileri');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_MANAGERS_DESC', 'Mülk yöneticileri iki yoldan biriyle eklenir. Ya mülkleri kendileri oluştururlar (Site Yapılandırmasında devre dışı bırakılabilir) ya da site yöneticisi belirli mülklere mevcut bir yönetici atayabilir. Yöneticiler sadece sahip oldukları mülklere erişebilir oluşturulmuş veya atanmış.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL', 'Erişim Kontrolü');
jr_define('_JOMRES_TUTORIAL_ADMIN_ACCESS_CONTROL_DESC', 'Menü seçeneklerini devre dışı bırakmak, onları yalnızca belirli kullanıcı sınıfları için görünür kılmak veya hatta tamamen ortadan kaldırmak için Erişim Kontrolü özelliğini kullanabilirsiniz. Menü çubuğunda gösterilecek herhangi bir menü seçeneği yoksa, o zaman tamamen kaybolacaktır, bu nedenle site ziyaretçilerinin herhangi bir seçeneği görmesini istemiyorsanız, örneğin tüm seçenekleri oturum açmış kullanıcılara görünür olacak şekilde ayarlayabilirsiniz.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES', 'Tesis ve Oda Tipleri');
jr_define('_JOMRES_TUTORIAL_PROPERTY_TYPES_DESC', 'Bu videoda iki önemli kavram göreceksiniz. Birincisi, mülk türlerinin ve ilgili oda tiplerinin oluşturulmasıdır. Ayrıca henüz yönetici olmayan kayıtlı bir kullanıcının kendi mülkünü oluşturduğunu ve bir mülk sahibi olduğunu göreceksiniz. (ancak sadece kendi oluşturdukları mülkü konfigüre edebilirler) Tesis ve oda tipleri bağlantılıdır, bir tesis tipi oluşturduğunuzda, bir oda tipi eklemelisiniz, aksi takdirde tesis yöneticileri, özelliklerini yapılandırmaya çalışırken kırmızı hata mesajları göreceklerdir. ');



jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS', 'Harita İşaretçileri Yükleme');
jr_define('_JOMRES_TUTORIAL_UPLOADING_MAP_MARKERS_DESC', 'Harita işaretçilerini yüklemek için Media Center\'ı kullanıyorsunuz. <a href="https://mapicons.mapsmarker.com/" target="_blank"> Burada harika bir işaretçi kaynağı bulunabilir.< /a> Mülk özelliklerini, oda özelliklerini, oda tiplerini ve diğerlerini yükleme prosedürü aynıdır.');

jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES', 'Mülkiyet Özellikleri');
jr_define('_JOMRES_TUTORIAL_PROPERTY_FEATURES_DESC', 'Bu videoda size özellik özelliklerini nasıl oluşturacağınızı ve onlar için nasıl resim yükleyeceğinizi göstereceğiz.');

jr_define('_JOMRES_TUTORIAL_SHORTCODES', 'Kısa kodlar');
jr_define('_JOMRES_TUTORIAL_SHORTCODES_DESC', 'Kısa kodlar Jomres\'in olağanüstü güçlü bir özelliğidir. Prensip hem Joomla hem de Wordpress için aynıdır. Bu videoda size kısa kodları nerede görüntüleyeceğinizi göstereceğiz (bu liste hangi eklentilerin bulunduğuna bağlı olarak değişecektir). yüklü) ve bunların nasıl kullanılacağı.Kodları makalelerde veya modüllerde kullanabilirsiniz.');
    
jr_define('_JOMRES_TUTORIAL_LOGFILES', 'Günlük dosyaları');
jr_define('_JOMRES_TUTORIAL_LOGFILES_DESC', 'Bu video size günlük dosyalarını nasıl görüntüleyeceğinizi gösterecek. Sistem çalıştırıldığında kapsamlı günlük kaydı gerçekleşir. Üretim modundayken (Site Yapılandırması > Hata Ayıklama) daha az günlük oluşturulur, bu nedenle yeni bir özelliği test ediyorsanız o zaman sitenizi Geliştirme olarak ayarlamalısınız. Jomres komut dosyalarınıza kendi günlük kaydınızı eklemek istiyorsanız, <a href="http://www.jomres.net/manual/developers-guide/56-other-discussions/339-logging-in-jomres" target ="_blank">nasıl yapılacağına ilişkin kılavuz sayfamız.</a> Burada sahte bir hata atacağız, ardından günlük dosyasını görüntüleyeceğiz. Site Geliştirme olarak ayarlandığından çok fazla bilgi var, normalde sadece bir hata olduğunu ve bunun rapor edildiğini söyleyen bir mesaj görürsünüz.');

jr_define('_JOMRES_TUTORIAL_TRANSLATIONS', 'Etiketleri ve diğer dizeleri çevirme');
jr_define('_JOMRES_TUTORIAL_TRANSLATIONS_DESC', 'Jomres\'te dil dizelerini çevirmenin birkaç yolu vardır, dil dosyalarını düzenleyebilirsiniz ancak yükseltme yaptığınızda bunların üzerine yazılabilir. Bunun yerine bizim için benzersiz olan yerleşik çeviri araçlarını kullanmanızı öneririz. Dize, bir oda tipinin adı gibi bir forma girilmiş bir şeyse, Etiket Düzenleme sayfasını kullanabilirsiniz.Dize dil dosyasından ise, Dil dosyaları düzenleme aracını kullanabilirsiniz. Değiştirmek istediğiniz dizeyi bulmak için tarayıcı arama aracını kullanın ve ardından değiştirmek için bağlantıya tıklayın. Bu değişiklikler veritabanına kaydedilir ve bu nedenle güncelleme güvenlidir. Farklı özellik türleri için farklı etiketlere sahip olabilirsiniz, böylece şunları yapabilirsiniz: Örneğin, etiketi değiştirmeden önce sayfanın üst kısmındaki Dil Bağlamı açılır menüsünü değiştirerek Yeni Mülkü Yeni Kamp Alanı olarak değiştirin.');

jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY', 'Özellikler ekleme');
jr_define('_JOMRES_TUTORIAL_ADMIN_ADD_PROPERTY_DESC', '<p>Bu aşamada Jomres CMS\'ye yüklendi ve ön uç menüsüne eklendi (veya Wordpress\'te bir sayfa oluşturdunuz ve temel Jomres kısa kodunu eklediniz).</ p>
<p>Burada, henüz Jomres\'te mülk yöneticisi olmayan kayıtlı bir kullanıcının nasıl yeni bir mülk oluşturabileceğini, bazı temel ayarları yapılandırabileceğini ve yayınlayabileceğini göreceksiniz.</p>
<p>Sonunda yöneticinin otomatik olarak mülk yöneticisi olarak ayarlandığını göreceksiniz, ancak yönetici yalnızca kendi mülklerini yapılandırabiliyor.</p>
<p>Wordpress\'teki arayüz farklı görünse de, süreç Joomla veya Wordpress için tamamen aynıdır.</p> ');

jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES', 'Mülk kategorileri');
jr_define('_JOMRES_TUTORIAL_ADMIN_PROPERTY_CATEGORIES_DESC', 'Emlak kategorileri, mülk yöneticilerinin mülklerini belirli bir kategoriye atamasına izin veren basit bir özelliktir. Site yöneticileri, bu videoda gösterildiği gibi bir kategorideki tüm mülkleri listeleyecek kısa kodlar oluşturabilir.');

jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY', 'Site yöneticisi özellikleri görüntüleme');
jr_define('_JOMRES_TUTORIAL_ADMIN_COMPLETING_PROPERTY_DESC', '<p>Özellikleri buradan yönetemezsiniz, mülkleri yalnızca ön uçtan yönetebilirsiniz, ancak bu listede onay bekleyen mülkleri (özellik etkinse) ve onay bekleyen mülkleri görebilirsiniz. eksik (örn. hala resim yüklemeniz gerekiyor, fiyatları ayarlamanız vb.) O mülkün gösterge tablosuna götürülmek için mülk adına tıklayın. Ardından, sayfanın üst kısmındaki kılavuz bölümlerini kullanarak hangi adımları görebileceğinizi görebilirsiniz. bir mülkü tamamlamak ve yayınlamak için almanız gerekir.</p> ');

