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
	jr_define('STRIPE_STANDARD_MARKETING',"Des millions d'entreprises de toutes tailles - des startups aux grandes entreprises - utilisent le logiciel et les API de Stripe pour accepter des paiements, envoyer des paiements et gérer leurs activités en ligne. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Si vous n'avez pas encore de clés API, vous devrez d'abord visiter Stripe et obtenir un jeton API <a href='https://dashboard.stripe.com/developers' target='_blank'> Paire de clés API</a>. Si vous n'avez pas de compte Stripe, vous pouvez en créer un nouveau gratuitement. Vous devez d'abord tester votre intégration en activant le mode test, puis en utilisant les clés de test dans les champs fournis. Une fois que vous sont heureux que tout fonctionne, vous pouvez ensuite passer à l'utilisation des touches Live et définir le mode test ici sur Non.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Mode test");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Si défini sur Oui, vos clés d'API de test seront utilisées.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Clé publiable en direct");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Clé secrète en direct");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Tester la clé publiable");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Tester la clé secrète");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL Webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Définissez votre <a href='https://dashboard.stripe.com/webhooks' target='_blank'>URL de webhook</a> sur cette URL afin que Stripe puisse vous rappeler et confirmer le paiement . Vous devrez cliquer sur Ajouter un point de terminaison et coller cette URL dans le champ \"URL du point de terminaison\". Définissez la version du point de terminaison sur 2022-08-01. Autorisez-le à envoyer tous les événements. Lorsque vous passez du mode Test au mode Live dans Stripe, vous peut utiliser le même point de terminaison.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Secret de signature Webhook en direct");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Tester le secret de signature du Webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Lorsque Stripe rappelle le serveur pour confirmer la réussite du paiement, il envoie un secret de signature. Nous devons connaître ce secret de signature afin de pouvoir rappeler Stripe et confirmer la validité du message. Vous pouvez afficher le secret de signature en en créant le webhook, puis dans la page Webhooks en cliquant sur l'url du webhook. Une fois là-bas, vous pouvez révéler le secret de signature, que vous devrez coller dans ce champ.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Le paiement a échoué !");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Malheureusement, nous ne sommes pas en mesure de confirmer le paiement. Veuillez retourner au formulaire de réservation et réessayer.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Retour au formulaire de réservation");
