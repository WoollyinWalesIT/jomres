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


	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Milioane de afaceri de toate dimensiunile – de la startup-uri la companii mari – folosesc software-ul și API-urile Stripe pentru a accepta plăți, a trimite plăți și a-și gestiona afacerile online. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Dacă nu aveți încă chei API, va trebui mai întâi să vizitați Stripe și să obțineți un token API <a href='https://dashboard.stripe.com/developers' target='_blank'> Pereche de chei API</a>. Dacă nu aveți un cont Stripe, puteți crea unul nou gratuit. Mai întâi ar trebui să vă testați integrarea activând modul de testare și apoi folosind cheile de testare în câmpurile furnizate. sunteți mulțumit că totul funcționează, apoi puteți trece la utilizarea tastelor Live și setați aici Modul de testare la Nu.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Modul de testare");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Când este setat la Da, atunci cheile API de testare vor fi utilizate.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Cheie de publicare live");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Cheie secretă live");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Testează cheia publicabilă");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test cheie secretă");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Setați <a href='https://dashboard.stripe.com/webhooks' target='_blank'> URL webhook</a> la această adresă URL, astfel încât Stripe să poată apela înapoi și să confirme plata . Va trebui să faceți clic pe Adăugare punct final și să inserați această adresă URL în câmpul „Adresa URL a punctului final”. Setați versiunea punctului final la 2022-08-01. Permiteți-i să trimită toate evenimentele. Când treceți din modul Test în modul Live în Stripe, poate folosi același punct final.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Secret de semnare Live Webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Testează secretul semnării webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Când Stripe sună înapoi serverul pentru a confirma plata reușită, trimite un secret de semnare. Trebuie să cunoaștem acest secret de semnare, astfel încât să îl putem suna pe Stripe și să confirmăm validitatea mesajului. Puteți vedea secretul de semnare prin crearea webhook-ului, apoi în pagina Webhooks făcând clic pe URL-ul webhook. Odată acolo, puteți Dezvălui secretul de semnare, pe care va trebui să-l inserați în acest câmp.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Plata eșuată!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Din păcate, nu putem confirma plata reușită. Vă rugăm să reveniți la formularul de rezervare și să încercați din nou.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Reveniți la formularul de rezervare");