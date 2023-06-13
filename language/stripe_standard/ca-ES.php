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

	jr_define('STRIPE_STANDARD_TITLE',"Stripe Standard");
	jr_define('STRIPE_STANDARD_MARKETING',"Milions d'empreses de totes les mides, des de startups fins a grans empreses, utilitzen el programari i les API de Stripe per acceptar pagaments, enviar pagaments i gestionar els seus negocis en línia. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Si encara no teniu claus API, primer haureu de visitar Stripe i obtenir un testimoni d'API <a href='https://dashboard.stripe.com/developers' target='_blank'> Parell de claus de l'API</a>. Si no teniu cap compte de Stripe, podeu crear-ne un de nou gratuïtament. Primer hauríeu de provar la vostra integració activant el mode de prova i després utilitzant les claus de prova als camps proporcionats. Esteu contents que tot funcioni, podeu passar a utilitzar les tecles en directe i establir aquí el mode de prova a No.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Mode de prova");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Quan s'estableix a Sí, s'utilitzaran les claus de l'API de prova.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Clau publicable en directe");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Clau secreta en directe");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Clau publicable de prova");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Clau secreta de prova");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL del webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Configureu el vostre <a href='https://dashboard.stripe.com/webhooks' target='_blank'> webhook url</a> en aquest URL perquè Stripe pugui tornar a trucar i confirmar el pagament . Haureu de fer clic a Afegeix un punt final i enganxar aquest URL al camp 'URL del punt final'. Establiu la versió del punt final a 2022-08-01. Permeteu que enviï tots els esdeveniments. Quan canvieu del mode de prova al mode en directe a Stripe, pot utilitzar el mateix punt final.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Secret de signatura de Live Webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Prova el secret de signatura del webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Quan Stripe torna a trucar al servidor per confirmar el pagament correcte, envia un secret de signatura. Hem de conèixer aquest secret de signatura per poder tornar a trucar a Stripe i confirmar la validesa del missatge. Podeu veure el secret de signatura si creant el webhook, després a la pàgina Webhooks fent clic a l'URL del webhook. Un cop allà, podeu Revelar el secret de signatura, que haureu d'enganxar en aquest camp.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"El pagament ha fallat!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Lamentablement, no podem confirmar el pagament correcte. Torneu al formulari de reserva i torneu-ho a provar.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Torna al formulari de reserva");
