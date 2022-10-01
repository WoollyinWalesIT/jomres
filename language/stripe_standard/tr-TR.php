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

	jr_define('STRIPE_STANDARD_TITLE',"Şerit Standardı");
	jr_define('STRIPE_STANDARD_MARKETING',"Yeni başlayanlardan büyük kuruluşlara kadar her ölçekten milyonlarca işletme, ödemeleri kabul etmek, ödemeleri göndermek ve işlerini çevrimiçi yönetmek için Stripe'ın yazılımını ve API'lerini kullanır. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Henüz API Anahtarlarınız yoksa, önce Stripe'i ziyaret etmeniz ve bir API jetonu almanız gerekir <a href='https://dashboard.stripe.com/developers' target='_blank'> API anahtar çifti</a>. Stripe hesabınız yoksa ücretsiz olarak yeni bir hesap oluşturabilirsiniz. Entegrasyonunuzu önce Test Modunu etkinleştirerek ve ardından sağlanan alanlarda Test anahtarlarını kullanarak test etmelisiniz. her şeyin çalıştığı için mutluyuz, ardından Canlı tuşları kullanmaya ve burada Test Modunu Hayır olarak ayarlamaya geçebilirsiniz.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Test modu");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Evet olarak ayarlandığında Test API anahtarlarınız kullanılacaktır.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Canlı Yayınlanabilir anahtar");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Canlı Gizli anahtar");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Yayınlanabilir anahtarı test edin");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test Gizli anahtarı");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Web kancası URL'si");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Stripe'in geri araması ve ödemeyi onaylaması için <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url'nizi</a> bu url'ye ayarlayın . Uç Nokta Ekle'yi tıklamanız ve bu url'yi 'Uç Nokta URL'si' alanına yapıştırmanız gerekir. Uç nokta sürümünü 2022-08-01 olarak ayarlayın. Tüm olayları göndermesine izin verin. Stripe'de Test modundan Canlı moda geçtiğinizde, aynı uç noktayı kullanabilir.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Canlı Web kancası İmzalama sırrı");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook İmzalama sırrı");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Stripe başarılı ödemeyi onaylamak için sunucuyu geri aradığında, bir imzalama sırrı gönderir. Stripe'ı geri arayabilelim ve mesajın geçerliliğini onaylayabilmemiz için bu imzalama sırrını bilmemiz gerekiyor. İmzalama sırrını şuradan görüntüleyebilirsiniz: webhook'u oluşturun, ardından Webhook sayfasında webhook url'sini tıklayın.Bir kez orada, bu alana yapıştırmanız gereken İmzalama sırrını Gösterebilirsiniz.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Ödeme başarısız!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Maalesef ödemenin başarılı olduğunu teyit edemiyoruz. Lütfen rezervasyon formuna geri dönün ve tekrar deneyin.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Rezervasyon Formuna Geri Dön");

