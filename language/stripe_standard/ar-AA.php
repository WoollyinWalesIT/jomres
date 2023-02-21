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


	jr_define ('STRIPE_STANDARD_TITLE', "شريط قياسي") ;
jr_define ('STRIPE_STANDARD_MARKETING' , "الملايين من الشركات من جميع الأحجام - من الشركات الناشئة إلى المؤسسات الكبيرة - تستخدم برامج Stripe وواجهات برمجة التطبيقات لقبول المدفوعات وإرسال المدفوعات وإدارة أعمالها عبر الإنترنت.") ;

jr_define ('STRIPE_STANDARD_API_TOKEN_DESC' , "إذا لم يكن لديك حتى الآن مفاتيح API , فستحتاج أولاً إلى زيارة Stripe والحصول على رمز API مميز <a href='https://dashboard.stripe.com/developers' target='_blank'> زوج مفاتيح API </a>. إذا لم يكن لديك حساب Stripe , فيمكنك إنشاء حساب جديد مجانًا. يجب أولاً اختبار التكامل عن طريق تمكين وضع الاختبار ثم استخدام مفاتيح الاختبار في الحقول المتوفرة. بمجرد يسعدنا أن كل شيء يعمل , يمكنك بعد ذلك التبديل إلى استخدام مفاتيح Live وضبط وضع الاختبار هنا على لا") ;

jr_define ('STRIPE_STANDARD_API_TEST_MODE' , "وضع الاختبار") ;
jr_define ('STRIPE_STANDARD_API_TEST_MODE_DESC' , "عند التعيين على نعم , سيتم استخدام مفاتيح Test API الخاصة بك.") ;

jr_define ('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE' , "مفتاح قابل للنشر المباشر") ;
jr_define ('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE', "Live Secret key") ;

jr_define ('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE' , "اختبار المفتاح القابل للنشر") ;
jr_define ('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE' , "اختبار المفتاح السري") ;

jr_define ('STRIPE_STANDARD_WEBHOOK_URL', "عنوان URL للخطاف على الويب") ;
jr_define ('STRIPE_STANDARD_WEBHOOK_URL_DESC' , "عيِّن <a href='https://dashboard.stripe.com/webhooks' target='_blank'> عنوان url الخاص بخطاف الويب </a> إلى عنوان url هذا حتى يتمكن Stripe من معاودة الاتصال وتأكيد الدفع . ستحتاج إلى النقر فوق إضافة نقطة نهاية ولصق عنوان url هذا في حقل عنوان URL لنقطة النهاية. قم بتعيين إصدار نقطة النهاية على 2022-08-01. اسمح لها بإرسال كافة الأحداث. عند التبديل من وضع الاختبار إلى الوضع المباشر في الشريط , فإنك يمكن استخدام نفس نقطة النهاية. ") ;

jr_define ('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET', "سرية تسجيل الخطاف المباشر على الويب") ;
jr_define ('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET', "Test Webhook Signing secret") ;
jr_define ('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC' , "عندما يتصل Stripe بالخادم مرة أخرى لتأكيد الدفع الناجح , فإنه يرسل سر توقيع. نحتاج إلى معرفة سر التوقيع هذا حتى نتمكن من استدعاء Stripe مرة أخرى وتأكيد صلاحية الرسالة. يمكنك عرض سر التوقيع عن طريق إنشاء webhook , ثم في صفحة Webhooks , انقر على عنوان url لخطاف الويب. بمجرد الوصول إلى هناك , يمكنك الكشف عن سر التوقيع , والذي ستحتاج إلى لصقه في هذا الحقل. ") ;


jr_define ('STRIPE_STANDARD_PAYMENT_FAILED', "فشل الدفع!") ;
jr_define ('STRIPE_STANDARD_PAYMENT_FAILED_BLURB', "للأسف لا يمكننا تأكيد الدفع الناجح. يرجى الرجوع إلى نموذج الحجز والمحاولة مرة أخرى.") ;
jr_define ('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON' , "العودة إلى نموذج الحجز") ;