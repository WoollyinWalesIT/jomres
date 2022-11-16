<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################
	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Millioner av virksomheter i alle størrelser – fra startups til store bedrifter – bruker Stripes programvare og API-er for å akseptere betalinger, sende utbetalinger og administrere virksomhetene deres online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Hvis du ennå ikke har API-nøkler, må du først besøke Stripe og få et API-token <a href='https://dashboard.stripe.com/developers' target='_blank'> API-nøkkelpar</a>. Hvis du ikke har en Stripe-konto, kan du opprette en ny gratis. Du bør først teste integrasjonen din ved å aktivere testmodus og deretter bruke testnøkler i feltene som er oppgitt. Når du er glade for at alt fungerer, kan du deretter bytte til å bruke Live-taster og sette testmodus her til Nei.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testmodus");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Når satt til Ja, vil test-API-nøklene dine bli brukt.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live Publiserbar nøkkel");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live Secret nøkkel");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test publiserbar nøkkel");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test hemmelig nøkkel");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Angi <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook-url</a> til denne url-en slik at Stripe kan ringe tilbake og bekrefte betaling . Du må klikke på Legg til endepunkt og lime inn denne nettadressen i 'Endpoint URL'-feltet. Sett endepunktversjonen til 2022-08-01. La den sende alle hendelser. Når du bytter fra testmodus til Live-modus i Stripe kan bruke samme endepunkt.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing-hemmelighet");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook Signing-hemmelighet");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Når Stripe ringer serveren tilbake for å bekrefte vellykket betaling, sender den en signeringshemmelighet. Vi må kjenne til denne signeringshemmeligheten slik at vi kan ringe Stripe tilbake og bekrefte meldingens gyldighet. Du kan se signeringshemmeligheten ved å opprette webhook, og klikk deretter webhook-url på Webhooks-siden. Når du er der, kan du avsløre signeringshemmeligheten, som du må lime inn i dette feltet.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Betalingen mislyktes!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Vi kan dessverre ikke bekrefte vellykket betaling. Gå tilbake til bestillingsskjemaet og prøv igjen.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Gå tilbake til bestillingsskjemaet");