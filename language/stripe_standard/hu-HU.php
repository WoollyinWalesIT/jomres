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

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Vállalkozások milliói, bármilyen méretű – induló vállalkozásoktól a nagyvállalatokig – használják a Stripe szoftverét és API-jait fizetések fogadására, kifizetések küldésére és vállalkozásuk online kezelésére. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Ha még nem rendelkezik API-kulccsal, először fel kell keresnie a Stripe webhelyet, és be kell szereznie egy API-token <a href='https://dashboard.stripe.com/developers' target='_blank'> API-kulcspár</a>. Ha még nincs Stripe-fiókja, ingyenesen létrehozhat egy újat. Először tesztelje az integrációt a Teszt mód engedélyezésével, majd a megadott mezőkben található tesztkulcsok használatával. örülünk, hogy minden működik, akkor átválthat az Élő gombok használatára, és itt állíthatja a Teszt módot Nem értékre.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Teszt mód");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Ha Igen értékre van állítva, akkor a teszt API kulcsai lesznek használatban.");

jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Élőben publikálható kulcs");
jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Élő titkos kulcs");

jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Tesztben publikálható kulcs");
jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Titkos tesztelési kulcs");

jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Állítsa be <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook URL-jét</a> erre az URL-re, hogy a Stripe visszahívhassa és megerősíthesse a fizetést . Kattintson a Végpont hozzáadása lehetőségre, és illessze be ezt az URL-t a \"Végpont URL-címe\" mezőbe. Állítsa be a végpont verzióját 2022-08-01-re. Engedélyezze az összes esemény elküldését. Ha tesztmódról Élő módra vált át a Stripe alkalmazásban ugyanazt a végpontot használhatja.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Élő Webhook aláírási titok");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Teszt Webhook aláírási titkát");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Amikor a Stripe visszahívja a szervert a sikeres fizetés megerősítése érdekében, aláírási titkot küld. Ismernünk kell ezt az aláírási titkot, hogy visszahívhassuk a Stripe-ot és ellenőrizhessük az üzenet érvényességét. Az aláírási titkot megtekintheti a webhook létrehozása, majd a Webhooks oldalon kattintson a webhook URL-re. Ha ott van, felfedheti az aláírási titkot, amelyet be kell illesztenie ebbe a mezőbe.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"A fizetés sikertelen!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Sajnos nem tudjuk megerősíteni a sikeres fizetést. Kérjük, lépjen vissza a foglalási űrlaphoz, és próbálja újra.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Vissza a foglalási űrlaphoz");
