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

	jr_define('STRIPE_STANDARD_TITLE',"Estándar de bandas");
	jr_define('STRIPE_STANDARD_MARKETING',"Millones de empresas de todos los tamaños, desde nuevas empresas hasta grandes empresas, usan el software y las API de Stripe para aceptar pagos, enviar pagos y administrar sus negocios en línea. ");

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Si aún no tiene claves de API, primero deberá visitar Stripe y obtener un token de API <a href='https://dashboard.stripe.com/developers' target='_blank'> Par de claves API</a>. Si no tiene una cuenta de Stripe, puede crear una nueva de forma gratuita. Primero debe probar su integración habilitando el modo de prueba y luego usando las claves de prueba en los campos proporcionados. está contento de que todo esté funcionando, luego puede cambiar a usar las teclas en vivo y configurar el Modo de prueba aquí en No");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Modo de prueba");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Cuando se establece en Sí, se utilizarán las claves de API de prueba.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Clave publicable en vivo");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Clave secreta en vivo");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Probar clave publicable");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Clave secreta de prueba");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL de webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Establezca su <a href='https://dashboard.stripe.com/webhooks' target='_blank'> URL de webhook</a> en esta URL para que Stripe pueda devolver la llamada y confirmar el pago . Deberá hacer clic en Agregar punto final y pegar esta URL en el campo 'URL del punto final'. Establezca la versión del punto final en 2022-08-01. Permita que envíe todos los eventos. Cuando cambie del modo de prueba al modo en vivo en Stripe, puede usar el mismo punto final.");

jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Secreto de firma de Webhook en vivo");
jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Probar secreto de firma de webhook");
jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Cuando Stripe devuelve la llamada al servidor para confirmar el pago exitoso, envía un secreto de firma. Necesitamos saber este secreto de firma para que podamos llamar a Stripe y confirmar la validez del mensaje. Puede ver el secreto de firma al creando el webhook, luego en la página Webhooks haciendo clic en la URL del webhook. Una vez allí, puede revelar el secreto de firma, que deberá pegar en este campo.");


jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"¡Error en el pago!");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Desafortunadamente no podemos confirmar el pago exitoso. Vuelva al formulario de reserva e intente nuevamente.");
jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Volver al formulario de reserva");
