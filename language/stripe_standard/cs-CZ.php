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


	jr_define('STRIPE_STANDARD_TITLE',"Standard Stripe");
	jr_define('STRIPE_STANDARD_MARKETING',"Miliony podniků všech velikostí – od začínajících až po velké podniky – používají software a rozhraní API společnosti Stripe k přijímání plateb, odesílání plateb a správě svých podniků online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Pokud ještě nemáte klíče API, budete muset nejprve navštívit Stripe a získat token API <a href='https://dashboard.stripe.com/developers' target='_blank'> Pár klíčů API</a>. Pokud nemáte účet Stripe, můžete si zdarma vytvořit nový. Nejprve byste měli otestovat svou integraci povolením testovacího režimu a poté pomocí testovacích klíčů v poskytnutých polích. jste rádi, že vše funguje, můžete pak přepnout na používání kláves Live a zde nastavit Test Mode na Ne.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testovací režim");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Pokud je nastaveno na Ano, použijí se klíče Test API.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live Publishable Key");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Tajný klíč Live");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test Publishable Key");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test tajný klíč");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Nastavte svou <a href='https://dashboard.stripe.com/webhooks' target='_blank'>url webhooku</a> na tuto adresu URL, aby Stripe mohl zavolat zpět a potvrdit platbu . Budete muset kliknout na Přidat koncový bod a vložit tuto adresu URL do pole 'Adresa URL koncového bodu. může použít stejný koncový bod.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live Webhook Signing Secret");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Otestovat tajemství podpisu webhooku");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Když Stripe zavolá na server, aby potvrdil úspěšnou platbu, odešle podpisové tajemství. Toto podpisové tajemství potřebujeme znát, abychom mohli Stripeovi zavolat zpět a potvrdit platnost zprávy. Podpisové tajemství si můžete prohlédnout na vytvoření webhooku a poté na stránce Webhooky kliknutím na adresu URL webhooku. Jakmile tam budete, můžete Odhalit podpisové tajemství, které budete muset vložit do tohoto pole.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Platba se nezdařila!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Bohužel nejsme schopni potvrdit úspěšnou platbu. Vraťte se prosím do rezervačního formuláře a zkuste to znovu.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Zpět na rezervační formulář");