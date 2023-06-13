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
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standaard");
	jr_define('STRIPE_STANDARD_MARKETING',"Miljoenen bedrijven van elke omvang - van startups tot grote ondernemingen - gebruiken Stripe's software en API's om betalingen te accepteren, uitbetalingen te verzenden en hun bedrijven online te beheren. ");

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Als je nog geen API-sleutels hebt, moet je eerst Stripe bezoeken en een API-token krijgen <a href='https://dashboard.stripe.com/developers' target='_blank'> API-sleutelpaar</a>. Als je geen Stripe-account hebt, kun je gratis een nieuwe maken. Je moet eerst je integratie testen door de testmodus in te schakelen en vervolgens de testsleutels in de daarvoor bestemde velden te gebruiken. tevreden bent dat alles werkt, kunt u overschakelen naar het gebruik van Live-toetsen en de Testmodus hier instellen op Nee.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testmodus");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Wanneer ingesteld op Ja, worden uw Test API-sleutels gebruikt.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live publiceerbare sleutel");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live geheime sleutel");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Publiceerbare sleutel testen");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Geheime sleutel testen");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook-URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Stel uw <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook-url</a> in op deze url zodat Stripe kan terugbellen en de betaling kan bevestigen U moet op Eindpunt toevoegen klikken en deze url in het veld 'Eindpunt-URL' plakken. Stel de eindpuntversie in op 2022-08-01. Sta toe dat alle gebeurtenissen worden verzonden. Wanneer u in Stripe overschakelt van de testmodus naar de livemodus, kan hetzelfde eindpunt gebruiken.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Geheim voor ondertekening van live webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook-ondertekeningsgeheim");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Wanneer Stripe de server terugbelt om een ​​succesvolle betaling te bevestigen, stuurt het een ondertekeningsgeheim. We hebben dit ondertekeningsgeheim nodig zodat we Stripe terug kunnen bellen en de geldigheid van het bericht kunnen bevestigen. U kunt het ondertekeningsgeheim bekijken door door de webhook aan te maken en vervolgens op de pagina Webhooks op de webhook-url te klikken. Eenmaal daar kunt u het ondertekeningsgeheim onthullen, dat u in dit veld moet plakken.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Betaling mislukt!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Helaas kunnen we de succesvolle betaling niet bevestigen. Ga terug naar het boekingsformulier en probeer het opnieuw.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Terug naar het boekingsformulier");
