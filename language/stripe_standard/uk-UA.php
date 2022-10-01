<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.5
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Смугастий стандарт");
	jr_define('STRIPE_STANDARD_MARKETING',"Мільйони підприємств будь-якого розміру – від стартапів до великих підприємств – використовують програмне забезпечення та API Stripe, щоб приймати платежі, надсилати виплати та керувати своїм бізнесом онлайн. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Якщо у вас ще немає ключів API, вам спочатку потрібно відвідати Stripe і отримати маркер API <a href='https://dashboard.stripe.com/developers' target='_blank'> Пара ключів API</a>. Якщо у вас немає облікового запису Stripe, ви можете безкоштовно створити новий. Спершу перевірте свою інтеграцію, увімкнувши тестовий режим, а потім використавши тестові ключі у відповідних полях. задоволені тим, що все працює, ви можете перейти до використання живих клавіш і встановити тут тестовий режим на Ні.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Тестовий режим");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Якщо встановлено значення Так, використовуватимуться ключі тестового API.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Ключ для публікації в реальному часі");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Живий секретний ключ");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Тестовий ключ для публікації");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Тестувати секретний ключ");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL веб-хук");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Налаштуйте свою <a href='https://dashboard.stripe.com/webhooks' target='_blank'> URL-адресу веб-хуку</a> на цю URL-адресу, щоб Stripe міг передзвонити та підтвердити платіж . Вам потрібно буде натиснути «Додати кінцеву точку» та вставити цю URL-адресу в поле «URL-адреса кінцевої точки». Встановіть версію кінцевої точки на 2022-08-01. Дозвольте їй надсилати всі події. Коли ви перемикаєтеся з тестового режиму в живий режим у Stripe, ви може використовувати ту саму кінцеву точку.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Секрет підпису Live Webhook");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Тестовий секрет підпису вебхука");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Коли Stripe передзвонює серверу, щоб підтвердити успішний платіж, він надсилає секрет підпису. Нам потрібно знати цей секрет підпису, щоб ми могли передзвонити Stripe і підтвердити дійсність повідомлення. Ви можете переглянути секрет підпису, створивши вебхук, а потім на сторінці вебхук клацніть URL-адресу вебхуку. Там ви можете розкрити секрет підпису, який вам потрібно буде вставити в це поле.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Не вдалося здійснити платіж!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"На жаль, ми не можемо підтвердити успішний платіж. Будь ласка, поверніться до форми бронювання та повторіть спробу.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Повернутися до форми бронювання");
