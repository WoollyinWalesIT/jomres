<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.3
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

jr_define('_JOMRES_FAQ', 'Sık sorulan sorular');
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_PROPERTY', 'Özellikler');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_CREATPROPERTY', 'Nasıl mülk oluştururum?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_CREATPROPERTY', 'Yeni bir mülk eklemek için Özellikler > Yeni Mülk\'e tıklayın.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PREVIEW', 'Tesisimin misafirlere nasıl göründüğünü nasıl görebilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PREVIEW', 'Tesisinizin misafirlere nasıl göründüğünü görmek için Özellikler > Önizleme\'ye tıklayın.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDROOMS_MRP', 'Odaları nasıl eklerim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDROOMS_MRP', "Odaları nasıl ekleyeceğiniz Tarife Düzenleme modunuza bağlıdır. Normal tarife düzenleme modunda, fiyatlarınızı yapılandırırken otomatik olarak eklendiği için oda eklemenize gerek yoktur. Micromanage veya Gelişmiş tarife düzenleme modunda Ayarlar > Odalar'dan oda ekleyebilir, düzenleyebilir ve silebilirsiniz.Ayrıca oda özellikleri oluşturabilir ve bu özellikleri o odalara atayabilirsiniz.Ayrıca kişiye özel resim yükleyebilirsiniz. Medya Merkezi'ni kullanan odalar. Odalar oluşturduğunuzda, mülkünüzdeki gerçek dünyadaki odalarınızı yansıtmalarını sağlamaya çalışmalısınız, bu onları yönetmeyi kolaylaştıracaktır.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ADDPRICES', 'Oda fiyatlarını nasıl belirlerim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ADDPRICES', "Tarife düzenleme modunuza göre değişir. Normal Tarife modunu kullanıyorsanız ( Emlak Konfigürasyonu > Tarife Düzenleme Modları sekmesi) sahip olduğunuz oda sayısını, fiyatı, oda sayısını yapılandırabilirsiniz. her odada konaklayabileceği kişi ve her rezervasyonda istediğiniz toplam kişi sayısı.Bu mod, sonraki 10 yıl için oda fiyatlarını belirlemenizi sağlar.<br/>Gelişmiş veya Micromanage tarife düzenleme modlarını kullanıyorsanız, yıllarca her gün için oda fiyatları belirleyebilir.Aynı oda tipi için birden fazla tarifeniz olabilir, örneğin Oda Kahvaltı için ayrı, Oda Kahvaltı ve Akşam yemeği için ayrı ayrı tarifeniz olabilir.Özel bir ihtiyacınız yoksa , Micromanage'i her zaman kullanmanızı öneririz, Advanced aynı şekilde çalışır ancak farklı tarifelerinizin başlangıç ​​ve bitiş tarihlerinin ardışık olmasına dikkat etmeniz gerekir.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_EXTRAS', 'Opsiyonel ekstraları nasıl oluşturabilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_EXTRAS', "Ekstralar rezervasyonlara eklenebilir ve Ayarlar > Ekstralar'dan yapılandırılır. Bunlar isteğe bağlı veya 'zorunlu' olabilir yani misafir rezervasyonda seçimini kaldıramaz. Farklı yöntemler sunabilirsiniz. İsteğe bağlı ekstralar için ücretlendirme ve bunların Tesis Detayları sayfanızda gösterilip gösterilmemesi.Ekstralar yalnızca belirli tarihlerde (örneğin, mevsim meyveleri için) rezervasyon yapıldığında göstermek için yapılabileceğinden, Geçerlilik başlangıç ​​ve Bitiş tarihlerini ayarladınız. İsteğe bağlı exta'ları oluşturduktan sonra, Medya Yöneticisi aracılığıyla onlar için görüntü yükleyebilirsiniz.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_PAYMENTS', 'Çevrimiçi ödemeleri nasıl alabilirim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_PAYMENTS', "Çevrimiçi ödeme almak için, Ağ Geçidi adı verilen bir çevrimiçi ödeme sağlayıcısında hesabınızın olması gerekir. Mevcut ağ geçitlerini görmek için Mülk Yapılandırması > Ağ Geçitleri sekmesine gidin. Alınacak ağ geçidinin adına tıklayın. yapılandırma sayfasına.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_DISCOUNTS', 'İndirim verebilir miyim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_DISCOUNTS', "İndirimler verilebilir, bunun birkaç farklı yolu vardır. Bir müşteri adına rezervasyon yapıyorsanız, rezervasyon formunda kendi Depozito ve Rezervasyon toplamlarınızı belirleyebilirsiniz. , Konaklama Toplamını Geçersiz Kıl ve Depozitoyu Geçersiz Kıl alanlarını kullanarak (misafirler bu özelliği kullanamazlar) Misafirlere indirim vermenin bir başka yolu da indirim kuponları oluşturmaktır. ) veya sadece rezervasyon belirli tarihler arasında olduğunda geçerlidir ( Rezervasyon şu tarihe kadar geçerlidir.) Bu indirim kuponları sadece bir misafire atanabilir veya isterseniz kuponların çıktısını alabilirsiniz. Çıktıda bir QR kodu bulunur. indirim kodunun zaten geçerli olduğu rezervasyon formunuza yönlendiren konukların telefonlarına tarayabilecekleri. ");
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_BOOKINGS', 'Rezervasyonlar');

jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_CONTACTPAGE', 'Yeni rezervasyon\'a tıkladığımda İletişim formuna yönlendiriliyorum, neden?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_CONTACTPAGE', 'Online rezervasyon almadan önce, gerçek dünyadaki mülkünüzdeki her oda tipi için bazı fiyatları (tarifeleri) yapılandırmanız gerekir. Bazı tarifeler oluşturduktan sonra, rezervasyon alabileceksiniz. .');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_BOOKINGS_BLACK', 'Black Bookings nedir?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_BOOKINGS_BLACK', "Siyah rezervasyonlar, bir odayı veya odaları hizmet dışı bırakmak için oluşturulmuş rezervasyonlardır. Herhangi bir misafirle ilişkilendirilmezler ve örneğin bir odanın yenilenmesi gerektiğinde kullanışlıdır.") ;
jr_define('_JOMRES_FAQ_MANAGER_CATEGORY_IMAGES', 'Görüntüler');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_INTRO', 'Görüntüleri nasıl yüklerim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_INTRO', "Görüntüleri yüklemek için Ayarlar > Medya Merkezi sayfasını ziyaret etmeniz gerekiyor. Bu sayfada birkaç bölme göreceksiniz. En üstte bazı notlar görebilirsiniz ve bunların altında bir açılır menü göreceksiniz. Bu açılır menü, hangi kaynak için resim yüklediğinizi seçmenize olanak tanır. <br/> Sağda Resim Ekle, Listeyi Temizle ve Tümünü Yükle içeren bir sütun bulunur. Resim Ekle'yi tıklayın ve masaüstünüzden veya mobil cihazınızdan bazı resimler seçin. Bunu yaptığınızda, sütun bir küçük resim listesine dönüşecektir. Buradan kaynaklarınız için bir veya daha fazla resim yükleyebilirsiniz.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_MAIN', "'Ana' görüntü nedir?");
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_MAIN', 'Ana resim, arama sonuçlarında ve mülk başlığınızda görünen resimdir (sayfaların üst kısmında mülkünüz hakkında bir şeyler gösteren alan). mümkün olan en iyi ışık. Bir ana resim yüklemek için, sol üstteki açılır listede Mülk Ana Resminin seçili olduğundan emin olun, ardından bir veya daha fazla resim yükleyin. Birden fazla resim yüklerseniz, aramada tüm resimler kullanılacaktır. küçük bir slayt gösterisi olarak görüntülenen sonuçlar sayfası.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_RESOURCEFEATURES', 'Oda özelliği simgeleri nelerdir?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_RESOURCEFEATURES', "Micromanage veya Gelişmiş tarife düzenleme modları kullanıcıları tarafından oda özellikleri oluşturulabilir. Bunlar bir veya daha fazla odaya bağlanabilir ve rezervasyon formunda görüntülenebilir. Oda özelliği oluşturduktan sonra, Önce Medya Merkezi'ndeki açılır menüden Oda Özellikleri Simgeleri'ni seçerek, ardından altta görünecek olan açılır menüden oda özelliğinin adını seçerek bu özellik için bir resim yükleyin.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_ROOMS', 'Oda resimlerini nasıl yüklerim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_ROOMS', 'Micromanage veya Gelişmiş tarife düzenleme modları kullanıcıları tarafından odalar oluşturulabilir. Bir veya daha fazla oda oluşturulduktan sonra, Medya Merkezi aracılığıyla her oda için birden fazla görüntü yükleyebilirsiniz (oda adını/numarasını seçin). açılır menüden Oda Resimleri\'ni seçerek) Bu resimler, Önizleme sayfasını görüntüleyerek ve Odalarımız sekmesini seçip ardından Müsaitlik bağlantısına tıklayarak bir slayt gösterisinde görülebilir.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_SLIDESHOW', 'Slayt gösterisi resimlerini nasıl yüklerim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_SLIDESHOW', 'Slayt gösterisi resimleri Mülk Ayrıntıları (Önizleme) sayfasında, Şimdi Ayırt düğmesinin yanında görülür.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_MEDIACENTRE_EXTRAS', 'Ek Görüntüleri nasıl yüklerim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_MEDIACENTRE_EXTRAS', "Odalar ve oda özelliklerine benzer şekilde, önce bir Ekstra oluşturmanız gerekir. Bu yapıldıktan sonra, üst açılır menüden Ekstralar'ı seçebilirsiniz. Bunu yaptığınızda, adını seçmeniz gerekir. Aşağıdaki açılır listeden Ekstra. İsim seçildiğinde, o Ekstra için bir veya daha fazla resim yükleyebilirsiniz.");
jr_define('_JOMRES_FAQ_GUEST_CATEGORY_SOMETHING', 'Misafirle ilgili bir şey');
jr_define('_JOMRES_FAQ_GUEST_QUESTION_SOMEQUESTION', 'Nasıl yapabilirim?');
jr_define('_JOMRES_FAQ_GUEST_ANSWER_SOMEANSWER', 'Blahblahblah');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_LANGUAGES', 'Açıklamaları birden çok dilde nasıl kaydedebilirim?');

jr_define('_JOMRES_FAQ_MANAGER_ANSWER_LANGUAGES', "Açıklamaları birden çok dilde kaydetmek için, önce Ayarlar > Mülk Ayrıntıları sayfasını ziyaret edin. Mülkünüzün açıklamasını buraya kaydedin. Ardından, siteyi görüntülediğiniz dili değiştirin. Şimdi Ayarlar'a gidin. Mülk Ayrıntıları sayfasını tekrar açın ve ayrıntıları tekrar kaydedin.Bu nedenle, site hem İngilizce hem de İspanyolca (veya başka herhangi bir) dil gösterebiliyorsa, İngilizce'yi seçersiniz, açıklamayı İngilizce girin ve ardından Kaydet'e tıklayın.Sonra, mevcut durumunuzu değiştirin dili İspanyolca'ya çevirin, ardından yeni İspanyolca açıklamayı kaydedin. Bu, o sayfadaki tüm girişler için geçerlidir.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHER ÖZELLİKLER', 'Bu sitedeki diğer özellikleri değiştirebilir miyim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES', 'Hayır, yapamazsınız. Yalnızca oluşturduğunuz veya mülk yöneticisi olarak atandığınız mülkleri yönetebilirsiniz.');
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_OTHERPROPERTIES_SUPER', 'Bu sitedeki diğer mülkleri değiştirebilir miyim?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_OTHERPROPERTIES_SUPER', "Evet yapabilirsiniz, Süper Mülk Yöneticisisiniz ve Özellikleri Listele sayfasında gösterilen herhangi bir mülkü değiştirebilirsiniz.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_GUESTTYPES', 'Misafir Tipleri Nelerdir/Kişi başı gecelik nasıl değiştiririm?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_GUESTTYPES', "Ayarlar > Tesis Konfigürasyonu > Tarifeler ve Para Birimleri sekmesinde kişi başı gecelik ücret isteyip istemediğinize karar verebilirsiniz. Kişi başı gecelik ücretlendirme yapacaksanız bir veya birden fazla misafir tipi oluşturmanız gerekecektir. Basit bir misafir tipi oluşturabilirsiniz, burada onlara sadece bir açıklama verebilirsiniz ( örneğin Kişiler ) veya birkaç farklı misafir tipi oluşturabilirsiniz, örneğin 'Yetişkinler' ve '10 yaşından küçük çocuklar'. %50'lik bir indirim varsa, 'Yüzdedir' seçeneğini Evet ve Varyans değerini 50 olarak ayarlarsınız. Odaların taban fiyatları vardır, bu ayar oda fiyatını konuk tipine göre ayarlamanıza olanak tanır.");
jr_define('_JOMRES_FAQ_MANAGER_QUESTION_ROOMFEATURES', 'Oda Özellikleri Nelerdir?');
jr_define('_JOMRES_FAQ_MANAGER_ANSWER_ROOMFEATURES', "Oda özellikleri, odayı öne çıkaran şeylerdir. Çay ve Kahve yapma olanakları gibi basit bir şey olabilir veya odayı gerçekten diğerlerinden daha fazla yükselten şeyler olabilir, örneğin 'Manzaralar' gibi. Bir Oda Özelliği oluşturduktan sonra, Medya Merkezi'nde bu özellik için resimler yükleyebilirsiniz. Bu oda özellikleri, oda müsaitliği sayfasında ve tesisinizi Klasik Odalar liste stilini gösterecek şekilde yapılandırdıysanız görüntülenebilir. (misafirler tam olarak hangi odayı rezerve etmek istediklerini seçebilirler) daha sonra rezervasyon formunda gösterilen oda özelliklerini filtrelemek için oda özelliklerini kullanabilirler.");

jr_define('_JOMRES_FAQ_ADMIN_CATEGORY_PAYMENTS', 'Ödemeler');
jr_define('_JOMRES_FAQ_ADMIN_QUESTION_TROUBLESHOOTING_NOGATEWAY', "Rezervasyon yaptıktan sonra ödeme geçidini göremezsiniz.");
jr_define('_JOMRES_FAQ_ADMIN_ANSWER_TROUBLESHOOTING_NOGATEWAY', "Eğer Mülk Yöneticisi olarak oturum açtıysanız, ödemeyi kendiniz yapmadığınız için ödeme geçidini görmezsiniz. Yalnızca yönetici olmayan kullanıcılar, rezervasyon yaparken ağ geçidini görebilir.");



