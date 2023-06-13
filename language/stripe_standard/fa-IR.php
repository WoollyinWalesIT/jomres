<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################



	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
jr_define('STRIPE_STANDARD_MARKETING',"میلیون‌ها کسب‌وکار در هر اندازه‌ای – از استارت‌آپ‌ها تا شرکت‌های بزرگ – از نرم‌افزار و APIهای Stripe برای پذیرش پرداخت‌ها، ارسال پرداخت‌ها و مدیریت کسب‌وکارهای خود به‌صورت آنلاین استفاده می‌کنند. ").

jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"اگر هنوز کلیدهای API ندارید، ابتدا باید از Stripe دیدن کنید و یک نشانه API دریافت کنید <a href='https://dashboard.stripe.com/developers' target='_blank'> جفت کلید API</a>. اگر حساب Stripe ندارید، می توانید یک حساب جدید به صورت رایگان ایجاد کنید. ابتدا باید با فعال کردن حالت تست و سپس استفاده از کلیدهای تست در فیلدهای ارائه شده، ادغام خود را آزمایش کنید. خوشحالیم که همه چیز کار می کند و سپس می توانید از کلیدهای زنده استفاده کنید و حالت تست را در اینجا روی No تنظیم کنید.");

jr_define('STRIPE_STANDARD_API_TEST_MODE',"حالت تست");
jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"وقتی روی Yes تنظیم شد، کلیدهای API آزمایشی شما استفاده خواهند شد.");

jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"کلید قابل انتشار زنده");
jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"کلید مخفی زنده");

jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"تست کلید قابل انتشار");
jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"تست کلید محرمانه");

jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL وب هوک");
jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"<a href='https://dashboard.stripe.com/webhooks' target='_blank'> url webhook</a> خود را روی این نشانی اینترنتی تنظیم کنید تا Stripe بتواند دوباره تماس بگیرد و پرداخت را تأیید کند . باید روی Add Endpoint کلیک کنید و این URL را در قسمت \"Endpoint URL\" قرار دهید. نسخه پایانی را روی 2022-08-01 تنظیم کنید. به آن اجازه دهید همه رویدادها را ارسال کند. هنگامی که از حالت تست به حالت زنده در Stripe می روید. می تواند از همان نقطه پایانی استفاده کند.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"راز امضای Live Webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"تست راز امضای وب هوک");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"وقتی Stripe با سرور تماس می گیرد تا پرداخت موفقیت آمیز را تأیید کند، یک رمز امضا ارسال می کند. ما باید این راز امضا را بدانیم تا بتوانیم Stripe را دوباره فراخوانی کنیم و اعتبار پیام را تأیید کنیم. می توانید راز امضا را توسط ایجاد webhook، سپس در صفحه Webhooks روی نشانی اینترنتی webhook کلیک کنید. پس از آن، می‌توانید راز امضا را فاش کنید، که باید آن را در این قسمت قرار دهید.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"پرداخت انجام نشد!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"متاسفانه ما نمی توانیم پرداخت موفقیت آمیز را تایید کنیم. لطفاً به فرم رزرو برگردید و دوباره امتحان کنید.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"بازگشت به فرم رزرو");