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

	jr_define('STRIPE_STANDARD_TITLE',"Standard Stripe");
	jr_define('STRIPE_STANDARD_MARKETING',"Milióny firiem všetkých veľkostí – od začínajúcich až po veľké podniky – používajú softvér Stripe a rozhrania API na prijímanie platieb, odosielanie platieb a správu svojich podnikov online." );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Ak ešte nemáte kľúče API, budete musieť najskôr navštíviť Stripe a získať token API <a href='https://dashboard.stripe.com/developers' target='_blank'> Pár kľúčov API</a>. Ak nemáte účet Stripe, môžete si bezplatne vytvoriť nový. Najprv by ste mali otestovať svoju integráciu povolením testovacieho režimu a potom pomocou testovacích kľúčov v poskytnutých poliach. ste radi, že všetko funguje, potom môžete prejsť na používanie kláves Live a nastaviť Testovací režim tu na Nie.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testovací režim");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Ak je nastavené na Áno, použijú sa vaše testovacie API kľúče.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live Publishable Key");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Tajný kľúč Live");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test Publishable Key");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test tajný kľúč");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Nastavte svoju <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webovú adresu webhooku</a> na túto adresu URL, aby Stripe mohol zavolať späť a potvrdiť platbu . Budete musieť kliknúť na Pridať koncový bod a prilepiť túto webovú adresu do poľa „Adresa URL koncového bodu“. Verziu koncového bodu nastavte na 2022-08-01. Povoľte jej odosielať všetky udalosti. Keď v Stripe prepnete z testovacieho režimu do živého režimu, môže použiť rovnaký koncový bod.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing Secret");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Otestovať tajomstvo podpisovania webhooku");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Keď Stripe zavolá na server, aby potvrdil úspešnú platbu, odošle podpisové tajomstvo. Potrebujeme poznať toto podpisové tajomstvo, aby sme mohli Stripeovi zavolať späť a potvrdiť platnosť správy. Podpisové tajomstvo si môžete pozrieť na vytvorte webhook a potom na stránke Webhooky kliknite na webovú adresu webhooku. Keď tam budete, môžete Odhaliť podpisové tajomstvo, ktoré budete musieť vložiť do tohto poľa.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Platba zlyhala!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Bohužiaľ nemôžeme potvrdiť úspešnú platbu. Vráťte sa prosím do rezervačného formulára a skúste to znova.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Späť na rezervačný formulár");
