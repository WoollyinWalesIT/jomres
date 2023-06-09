<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Prugasti standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Milijuni poduzeća svih veličina – od startupa do velikih poduzeća – koriste Stripeov softver i API-je za prihvaćanje plaćanja, slanje isplata i upravljanje svojim poslovanjem na mreži. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Ako još nemate API ključeve, prvo ćete morati posjetiti Stripe i dobiti API token <a href='https://dashboard.stripe.com/developers' target='_blank'> Par API ključeva</a>. Ako nemate Stripe račun, možete napraviti novi besplatno. Prvo biste trebali testirati svoju integraciju tako da omogućite testni način rada, a zatim koristite testne ključeve u ponuđenim poljima. Nakon što ako ste sretni da sve radi, tada možete prijeći na korištenje tipki uživo i ovdje postaviti testni način na Ne.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testni način");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Kada je postavljeno na Da tada će se koristiti vaši testni API ključevi.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Ključ koji se može objaviti uživo");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Tajni ključ uživo");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Testirajte ključ za objavljivanje");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Testiraj tajni ključ");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL web-dojavnika");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Postavite svoj <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url</a> na ovaj url tako da Stripe može uzvratiti poziv i potvrditi plaćanje . Morat ćete kliknuti Dodaj krajnju točku i zalijepiti ovaj url u polje 'URL krajnje točke'. Postavite verziju krajnje točke na 2022-08-01. Dopustite joj da šalje sve događaje. Kada se prebacite s testnog načina na način uživo u Stripeu može koristiti istu krajnju točku.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Tajna potpisivanja Live Webhooka");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Testirajte tajnu potpisivanja webhooka");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Kada Stripe pozove poslužitelj da potvrdi uspješno plaćanje, šalje tajnu potpisivanja. Moramo znati ovu tajnu potpisivanja kako bismo mogli nazvati Stripe natrag i potvrditi valjanost poruke. Tajnu potpisivanja možete vidjeti tako da kreiranje web-dojavnika, a zatim na stranici Web-dojavljivač kliknite url web-dojavnika. Kad tamo, možete otkriti tajnu potpisivanja koju ćete morati zalijepiti u ovo polje.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Plaćanje nije uspjelo!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Nažalost ne možemo potvrditi uspješnu uplatu. Vratite se na obrazac za rezervaciju i pokušajte ponovno.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Povratak na obrazac za rezervaciju");
