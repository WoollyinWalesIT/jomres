<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.6.0
	 *
	 * @copyright	2005-2023 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Standart Zolaq");
	jr_define('STRIPE_STANDARD_MARKETING',"Startaplardan tutmuş iri müəssisələrə qədər bütün ölçülü milyonlarla müəssisə ödənişləri qəbul etmək, ödənişlər göndərmək və bizneslərini onlayn idarə etmək üçün Stripe proqram təminatı və API-lərindən istifadə edir. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Hələ API Açarlarınız yoxdursa, əvvəlcə Stripe-a baş çəkməli və API işarəsi əldə etməlisiniz <a href='https://dashboard.stripe.com/developers' target='_blank'> API açar cütü</a>. Əgər Stripe hesabınız yoxdursa, siz pulsuz olaraq yenisini yarada bilərsiniz. Əvvəlcə Test Rejimini aktiv etməklə, sonra isə təqdim olunan sahələrdə Test düymələrindən istifadə etməklə inteqrasiyanızı sınamalısınız. Hər şeyin işlədiyinə görə xoşbəxtsiniz, sonra Canlı düymələrdən istifadə etməyə və burada Test rejimini Xeyr olaraq təyin edə bilərsiniz.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Test rejimi");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Bəli ayarlandıqda Test API açarlarınız istifadə olunacaq.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Canlı Yayımlana bilən açar");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Canlı Gizli açar");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Yayımlana bilən açarı test edin");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test Gizli açarı");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"<a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url</a>-ni bu url-ə təyin edin ki, Stripe geri zəng edib ödənişi təsdiq edə bilsin. . Son nöqtəni əlavə et üzərinə klikləməli və bu url-ni 'Son nöqtə URL' sahəsinə yerləşdirməlisiniz. Son nöqtə versiyasını 2022-08-01-ə təyin edin. Ona bütün hadisələri göndərməyə icazə verin. Stripe-də Test rejimindən Canlı rejimə keçəndə siz eyni son nöqtədən istifadə edə bilər.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Canlı Webhook İmzalama sirri");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook İmzalanma sirri");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Stripe müvəffəqiyyətli ödənişi təsdiqləmək üçün serverə zəng vurduqda, o, imza sirri göndərir. Biz bu imza sirrini bilməliyik ki, Stripe-a geri zəng edə və mesajın etibarlılığını təsdiqləyə bilək. İmza sirri ilə tanış ola bilərsiniz. webhook yaratmaq, sonra Webhooks səhifəsində webhook url-ni klikləməklə. Orada olan kimi siz İmzalama sirrini aça bilərsiniz, onu bu sahəyə yapışdırmalısınız.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Ödəniş alınmadı!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Təəssüf ki, uğurlu ödənişi təsdiq edə bilmirik. Lütfən, rezervasiya formasına qayıdın və yenidən cəhd edin.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Sifariş Formasına Qayıdın");
