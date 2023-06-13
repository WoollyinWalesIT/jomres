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
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################


	jr_define('STRIPE_STANDARD_TITLE',"Standard a strisce");
	jr_define('STRIPE_STANDARD_MARKETING',"Milioni di aziende di tutte le dimensioni, dalle startup alle grandi imprese, utilizzano il software e le API di Stripe per accettare pagamenti, inviare pagamenti e gestire le proprie attività online. ");

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Se non disponi ancora delle chiavi API, dovrai prima visitare Stripe e ottenere un token API <a href='https://dashboard.stripe.com/developers' target='_blank'> Coppia di chiavi API</a>. Se non disponi di un account Stripe, puoi crearne uno nuovo gratuitamente. Dovresti prima testare la tua integrazione abilitando la modalità di test e quindi utilizzando le chiavi di test nei campi forniti. Una volta sono felice che tutto funzioni, quindi puoi passare all'utilizzo dei tasti Live e impostare la modalità test qui su No.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Modalità test");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Se impostato su Sì, verranno utilizzate le tue chiavi API di test.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Chiave pubblicabile dal vivo");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Chiave Segreta Live");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Test chiave pubblicabile");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Test chiave segreta");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Imposta il tuo <a href='https://dashboard.stripe.com/webhooks' target='_blank'> URL webhook</a> su questo URL in modo che Stripe possa richiamare e confermare il pagamento . Dovrai fare clic su Aggiungi endpoint e incollare questo URL nel campo \"URL endpoint\". Imposta la versione dell'endpoint su 2022-08-01. Consenti l'invio di tutti gli eventi. Quando passi dalla modalità Test alla modalità Live in Stripe, può utilizzare lo stesso endpoint.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Segreto firma webhook live");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Prova il segreto di firma del webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Quando Stripe richiama il server per confermare il pagamento, invia un segreto di firma. Dobbiamo conoscere questo segreto di firma in modo da poter richiamare Stripe e confermare la validità del messaggio. Puoi visualizzare il segreto di firma tramite creando il webhook, quindi nella pagina Webhook facendo clic sull'URL del webhook. Una volta lì, puoi rivelare il segreto di firma, che dovrai incollare in questo campo.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Pagamento fallito!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Purtroppo non siamo in grado di confermare il pagamento andato a buon fine. Torna al modulo di prenotazione e riprova.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Torna al modulo di prenotazione");