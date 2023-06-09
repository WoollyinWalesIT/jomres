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

	jr_define('STRIPE_STANDARD_TITLE',"Стандарт на лента");
	jr_define('STRIPE_STANDARD_MARKETING',"Милиони фирми от всякакъв размер – от стартиращи до големи предприятия – използват софтуера и API на Stripe, за да приемат плащания, да изпращат изплащания и да управляват своя бизнес онлайн. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Ако все още нямате API ключове, първо трябва да посетите Stripe и да получите API токен <a href='https://dashboard.stripe.com/developers' target='_blank'> Двойка ключове за API</a>. Ако нямате акаунт в Stripe, можете да създадете нов безплатно. Първо трябва да тествате вашата интеграция, като активирате тестовия режим и след това използвате тестови ключове в предоставените полета. След като щастливи сте, че всичко работи, след това можете да преминете към използване на клавиши на живо и да зададете тестовия режим тук на Не.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Тестов режим");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Когато е зададено на Да, ще се използват ключовете ви за тестов API.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Ключ за публикуване на живо");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Таен ключ на живо");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Тест ключ за публикуване");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Тествайте таен ключ");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL адрес на уебкукичка");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Задайте вашия <a href='https://dashboard.stripe.com/webhooks' target='_blank'> URL адрес на уеб кукичка</a> на този адрес, така че Stripe да може да се обади и да потвърди плащането . Ще трябва да щракнете върху Добавяне на крайна точка и да поставите този url в полето „URL на крайна точка“. Задайте версията на крайната точка на 2022-08-01. Позволете й да изпраща всички събития. Когато превключите от тестов режим към режим на живо в Stripe, вие може да използва същата крайна точка.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Тайна за подписване на Webhook на живо");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Тестване на тайна за подписване на Webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Когато Stripe извика обратно сървъра, за да потвърди успешното плащане, той изпраща тайна за подписване. Трябва да знаем тази тайна за подписване, за да можем да се обадим на Stripe и да потвърдим валидността на съобщението. Можете да видите тайната за подписване от създаване на webhook, след което в страницата Webhooks щракнете върху URL адреса на webhook. След като сте там, можете да разкриете тайната за подписване, която ще трябва да поставите в това поле.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Плащането е неуспешно!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"За съжаление не можем да потвърдим успешно плащане. Моля, върнете се към формуляра за резервация и опитайте отново.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Връщане към формуляра за резервация");
