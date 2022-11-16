<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
//#################################################################
defined('_JOMRES_INITCHECK') or die('');
//#################################################################

	jr_define('STRIPE_STANDARD_TITLE',"Standardowy pasek");
	jr_define('STRIPE_STANDARD_MARKETING',"Miliony firm różnej wielkości – od startupów po duże przedsiębiorstwa – używają oprogramowania i interfejsów API Stripe do przyjmowania płatności, wysyłania wypłat i zarządzania swoimi firmami online." );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Jeśli nie masz jeszcze kluczy API, musisz najpierw odwiedzić Stripe i uzyskać token API <a href='https://dashboard.stripe.com/developers' target='_blank'> Para kluczy API</a>. Jeśli nie masz konta Stripe, możesz utworzyć nowe za darmo. Najpierw przetestuj swoją integrację, włączając tryb testowy, a następnie używając kluczy testowych w podanych polach. są zadowoleni, że wszystko działa, możesz następnie przełączyć się na używanie klawiszy na żywo i ustawić tutaj tryb testowy na Nie.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Tryb testowy");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Gdy ustawione na Tak, używane będą klucze Test API.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Klucz do publikacji na żywo");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Aktywny klucz tajny");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Testuj klucz do publikacji");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Testowy klucz tajny");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL webhooka");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Ustaw swój <a href='https://dashboard.stripe.com/webhooks' target='_blank'>url webhooka</a> na ten adres URL, aby Stripe mógł oddzwonić i potwierdzić płatność . Musisz kliknąć Dodaj punkt końcowy i wkleić ten adres URL w polu „Adres URL punktu końcowego”. Ustaw wersję punktu końcowego na 2022-08-01. Zezwól na wysyłanie wszystkich zdarzeń. Po przełączeniu z trybu testowego do trybu na żywo w Stripe może używać tego samego punktu końcowego.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Sekret podpisywania na żywo webhooka");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Testowy klucz tajny podpisywania webhooka");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Kiedy Stripe oddzwania do serwera w celu potwierdzenia udanej płatności, wysyła sekret podpisywania. Musimy znać ten sekret podpisywania, abyśmy mogli oddzwonić do Stripe i potwierdzić ważność wiadomości. Możesz zobaczyć sekret podpisywania przez utworzenie webhooka, a następnie na stronie Webhooki kliknięcie adresu URL webhooka. Tam możesz ujawnić klucz tajny podpisywania, który należy wkleić w tym polu.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Płatność nie powiodła się!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Niestety nie możemy potwierdzić pomyślnej płatności. Wróć do formularza rezerwacji i spróbuj ponownie.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Powrót do formularza rezerwacji");
