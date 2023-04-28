<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
jr_define('STRIPE_STANDARD_MARKETING',"Բոլոր չափերի միլիոնավոր ձեռնարկություններ՝ սկսած սկսնակներից մինչև խոշոր ձեռնարկություններ, օգտագործում են Stripe-ի ծրագրակազմը և API-ները՝ վճարումներ ընդունելու, վճարումներ ուղարկելու և իրենց բիզնեսները առցանց կառավարելու համար:");

jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Եթե դեռ չունեք API բանալիներ, նախ պետք է այցելեք Stripe և ստանաք API նշան <a href='https://dashboard.stripe.com/developers' target='_blank'> API ստեղների զույգ</a>: Եթե չունեք Stripe հաշիվ, կարող եք անվճար ստեղծել նորը: Նախ պետք է փորձարկեք ձեր ինտեգրումը` միացնելով Test Mode-ը, այնուհետև օգտագործելով Test ստեղները տրամադրված դաշտերում: ուրախ եք, որ ամեն ինչ աշխատում է, այնուհետև կարող եք անցնել «Live» ստեղների օգտագործմանը և այստեղ «Թեստային ռեժիմը» դնել «Ոչ");

jr_define('STRIPE_STANDARD_API_TEST_MODE',"Փորձարկման ռեժիմ");
jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Երբ սահմանվի Այո, ապա կօգտագործվեն ձեր փորձնական API ստեղները");

jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live Publishable key");
jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Կենդանի գաղտնի բանալի");

jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test Publishable key");
jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Փորձարկման գաղտնի բանալի");

jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Սահմանեք ձեր <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url-ը</a> այս url-ին, որպեսզի Stripe-ը կարողանա հետ կանչել և հաստատել վճարումը Դուք պետք է սեղմեք «Ավելացնել վերջնակետ» և տեղադրեք այս url-ը «Վերջնակետի URL» դաշտում: Սահմանեք վերջնակետի տարբերակը 2022-08-01: Թույլ տվեք, որ այն ուղարկի բոլոր իրադարձությունները: Stripe-ում փորձարկման ռեժիմից Live ռեժիմի անցնելու դեպքում դուք կարող է օգտագործել նույն վերջնակետը");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing գաղտնիք");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook Signing գաղտնիքը");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Երբ Stripe-ը հետ է կանչում սերվերին հաջող վճարումը հաստատելու համար, այն ուղարկում է ստորագրման գաղտնիք: Մենք պետք է իմանանք ստորագրման այս գաղտնիքը, որպեսզի կարողանանք հետ կանչել Stripe-ին և հաստատել հաղորդագրության վավերականությունը: Դուք կարող եք դիտել ստորագրման գաղտնիքը՝ ստեղծելով webhook-ը, այնուհետև Webhooks էջում կտտացնելով webhook-ի url-ին: Այնտեղից հետո կարող եք բացահայտել ստորագրման գաղտնիքը, որը պետք է տեղադրեք այս դաշտում:");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Վճարումը ձախողվեց!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Ցավոք, մենք չենք կարող հաստատել հաջողված վճարումը: Խնդրում ենք վերադառնալ ամրագրման ձևին և կրկին փորձել:");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Վերադառնալ ամրագրման ձևին");