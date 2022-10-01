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
	jr_define('STRIPE_STANDARD_MARKETING',"Millioner af virksomheder i alle størrelser – fra startups til store virksomheder – bruger Stripes software og API'er til at acceptere betalinger, sende udbetalinger og administrere deres virksomheder online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Hvis du endnu ikke har API-nøgler, skal du først besøge Stripe og få et API-token <a href='https://dashboard.stripe.com/developers' target='_blank'> API-nøglepar</a>. Hvis du ikke har en Stripe-konto, kan du oprette en ny gratis. Du bør først teste din integration ved at aktivere testtilstand og derefter bruge testnøgler i de angivne felter. Når du er glade for, at alt fungerer, kan du derefter skifte til at bruge Live-taster og indstille Testtilstand her til Nej.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testtilstand");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Når den er sat til Ja, vil dine Test API-nøgler blive brugt.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live publicerbar nøgle");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live Secret nøgle");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test publicerbar nøgle");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test hemmelig nøgle");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Indstil din <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook-url</a> til denne url, så Stripe kan ringe tilbage og bekræfte betalingen . Du skal klikke på Tilføj slutpunkt og indsætte denne url i feltet 'Endpoint URL'. Indstil slutpunktsversionen til 2022-08-01. Tillad den at sende alle hændelser. Når du skifter fra testtilstand til livetilstand i Stripe, kan bruge det samme endepunkt.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing hemmelighed");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook Signing hemmelighed");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Når Stripe ringer tilbage til serveren for at bekræfte vellykket betaling, sender den en signeringshemmelighed. Vi skal kende denne signeringshemmelighed, så vi kan ringe tilbage til Stripe og bekræfte meddelelsens gyldighed. Du kan se signeringshemmeligheden ved at oprettelse af webhook og derefter klikke på webhook-url på Webhooks-siden. Når du er der, kan du afsløre signeringshemmeligheden, som du skal indsætte i dette felt.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Betaling mislykkedes!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Vi er desværre ikke i stand til at bekræfte vellykket betaling. Gå venligst tilbage til reservationsformularen og prøv igen.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Vend tilbage til reservationsformularen");
