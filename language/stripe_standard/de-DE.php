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
	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Millionen von Unternehmen jeder Größe – von Startups bis hin zu großen Unternehmen – nutzen die Software und APIs von Stripe, um Zahlungen zu akzeptieren, Auszahlungen zu senden und ihre Geschäfte online zu verwalten. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Wenn Sie noch keine API-Schlüssel haben, müssen Sie zuerst Stripe besuchen und ein API-Token erhalten <a href='https://dashboard.stripe.com/developers' target='_blank'> API-Schlüsselpaar</a>. Wenn Sie noch kein Stripe-Konto haben, können Sie kostenlos ein neues Konto erstellen. Sie sollten zuerst Ihre Integration testen, indem Sie den Testmodus aktivieren und dann Testschlüssel in den bereitgestellten Feldern verwenden. Sobald Sie glücklich sind, dass alles funktioniert, können Sie dann auf die Verwendung von Live-Tasten umschalten und den Testmodus hier auf Nein setzen.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testmodus");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Wenn auf Ja gesetzt, werden Ihre Test-API-Schlüssel verwendet.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Live-veröffentlichbarer Schlüssel");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live-Geheimschlüssel");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Veröffentlichbarer Schlüssel testen");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Geheimschlüssel testen");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook-URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Setzen Sie Ihre <a href='https://dashboard.stripe.com/webhooks' target='_blank'>Webhook-URL</a> auf diese URL, damit Stripe zurückrufen und die Zahlung bestätigen kann . Sie müssen auf Endpunkt hinzufügen klicken und diese URL in das Feld \"Endpunkt-URL\" einfügen. Stellen Sie die Endpunktversion auf 2022-08-01 ein. Lassen Sie zu, dass alle Ereignisse gesendet werden. Wenn Sie in Stripe vom Testmodus in den Live-Modus wechseln, werden Sie kann denselben Endpunkt verwenden.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Live-Webhook-Signaturgeheimnis");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Webhook-Signaturgeheimnis testen");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Wenn Stripe den Server zurückruft, um die erfolgreiche Zahlung zu bestätigen, sendet er ein Signaturgeheimnis. Wir müssen dieses Signaturgeheimnis kennen, damit wir Stripe zurückrufen und die Gültigkeit der Nachricht bestätigen können. Sie können das Signaturgeheimnis von einsehen Erstellen Sie den Webhook und klicken Sie dann auf der Webhooks-Seite auf die Webhook-URL. Dort können Sie das Signaturgeheimnis aufdecken, das Sie in dieses Feld einfügen müssen.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Zahlung fehlgeschlagen!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Leider können wir die erfolgreiche Zahlung nicht bestätigen. Bitte gehen Sie zurück zum Buchungsformular und versuchen Sie es erneut.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Zurück zum Buchungsformular");

