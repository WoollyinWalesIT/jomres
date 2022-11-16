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
	jr_define('STRIPE_STANDARD_MARKETING',"Miljontals företag av alla storlekar – från nystartade företag till stora företag – använder Stripes programvara och API:er för att acceptera betalningar, skicka utbetalningar och hantera sina företag online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Om du ännu inte har API-nycklar måste du först besöka Stripe och få en API-token <a href='https://dashboard.stripe.com/developers' target='_blank'> API-nyckelpar</a>. Om du inte har ett Stripe-konto kan du skapa ett nytt gratis. Du bör först testa din integration genom att aktivera testläget och sedan använda testnycklarna i de angivna fälten. är glada över att allt fungerar kan du sedan växla över till att använda Live-tangenter och ställa in Testläge här till Nej.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testläge");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"När den är inställd på Ja kommer dina test-API-nycklar att användas.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live Publicerbar nyckel");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live Secret nyckel");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Testa publicerbar nyckel");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Testhemlig nyckel");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Ställ in din <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook-url</a> till denna url så att Stripe kan ringa tillbaka och bekräfta betalningen . Du måste klicka på Lägg till slutpunkt och klistra in den här webbadressen i fältet \"Endpoint URL\". Ställ in slutpunktsversionen till 2022-08-01. Tillåt den att skicka alla händelser. När du byter från testläge till liveläge i Stripe kan använda samma slutpunkt.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing hemlighet");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Testa Webhook Signing-hemlighet");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"När Stripe ringer tillbaka servern för att bekräfta lyckad betalning skickar den en signeringshemlighet. Vi behöver känna till denna signeringshemlighet så att vi kan ringa tillbaka Stripe och bekräfta meddelandets giltighet. Du kan se signeringshemligheten av skapa webhook, klicka sedan på webhook-webbadressen på sidan Webhooks. Väl där kan du avslöja signeringshemligheten, som du måste klistra in i det här fältet.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Betalningen misslyckades!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Tyvärr kan vi inte bekräfta lyckad betalning. Gå tillbaka till bokningsformuläret och försök igen.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Återgå till bokningsformuläret");