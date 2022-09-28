<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	 *  @version Jomres 10.5.4
	 *
	 * @copyright	2005-2022 Vince Wooll
	 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
	 **/


// ################################################################
	defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Millions of businesses of all sizes – from startups to large enterprises – use Stripe's software and APIs to accept payments, send payouts, and manage their businesses online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"If you do not yet have API Keys you will first need to visit Stripe and get an API token  <a href='https://dashboard.stripe.com/developers' target='_blank'>API key pair</a>. If you haven't got a Stripe account, you can create a new one for free. You should first test your integration by enabling the Test Mode and then using Test keys in the fields provided. Once you are happy that everything is working you can then switch over to using Live keys and setting Test Mode here to No.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Test mode");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"When set to Yes then your Test API keys will be used.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live Publishable key");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live Secret key");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test Publishable key");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test Secret key");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Set your <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url</a> to this url so that Stripe can call back and confirm payment. You will need to click Add Endpoint and paste this url into the 'Endpoint URL' field. Set the endpoint version to 2022-08-01. Allow it to send all events. When you switch from Test mode to Live mode in Stripe you can use the same endpoint.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing secret");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Test Webhook Signing secret");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"When Stripe calls the server back to confirm successful payment it sends a signing secret. We need to know this signing secret so that we can call Stripe back and confirm the message's validity. You can view the signing secret by creating the webhook, then in the Webhooks page clicking the webhook url. Once there, you can Reveal the Signing secret, which you will need to paste into this field.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Payment failed!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Unfortunately we are unable to confirm successful payment. Please go back to the booking form and try again.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Return to the Booking Form");




