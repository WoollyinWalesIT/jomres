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


	jr_define('STRIPE_STANDARD_TITLE',"Svītru standarts");
	jr_define('STRIPE_STANDARD_MARKETING',"Miljoniem dažāda lieluma uzņēmumu — no jaunizveidotiem uzņēmumiem līdz lieliem uzņēmumiem — izmanto Stripe programmatūru un API, lai pieņemtu maksājumus, nosūtītu izmaksas un pārvaldītu savus uzņēmumus tiešsaistē. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Ja jums vēl nav API atslēgu, vispirms ir jāapmeklē Stripe un jāsaņem API pilnvara <a href='https://dashboard.stripe.com/developers' target='_blank'> API atslēgu pāris</a>. Ja jums nav Stripe konta, varat izveidot jaunu bez maksas. Vispirms pārbaudiet savu integrāciju, iespējojot testa režīmu un pēc tam izmantojot pārbaudes atslēgas norādītajos laukos. esam priecīgi, ka viss darbojas, pēc tam varat pārslēgties uz tiešraides taustiņu izmantošanu un šeit iestatīt testa režīmu uz Nē.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Pārbaudes režīms");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Ja iestatīts uz Jā, tiks izmantotas jūsu testa API atslēgas.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Reāllaikā publicējama atslēga");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Live Secret atslēga");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Pārbaudes publicējamā atslēga");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Pārbaudīt slepeno atslēgu");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"Webhook URL");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Iestatiet savu <a href='https://dashboard.stripe.com/webhooks' target='_blank'> tīmekļa aizķeres URL</a> uz šo URL, lai Stripe varētu atzvanīt un apstiprināt maksājumu . Jums būs jānoklikšķina uz Pievienot galapunktu un jāielīmē šis URL laukā Galapunkta URL. Iestatiet galapunkta versiju uz 2022-08-01. Ļaujiet tai sūtīt visus notikumus. Pārslēdzoties no pārbaudes režīma uz tiešraides režīmu programmā Stripe, jūs var izmantot to pašu galapunktu.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Tiešraides Web aizķeres parakstīšanas noslēpums");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Pārbaudīt tīmekļa aizķeres parakstīšanas noslēpumu");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Kad Stripe atzvana serveri, lai apstiprinātu veiksmīgu maksājumu, tas nosūta parakstīšanas noslēpumu. Mums ir jāzina šis parakstīšanas noslēpums, lai mēs varētu atzvanīt Stripe un apstiprināt ziņojuma derīgumu. Parakstīšanas noslēpumu varat apskatīt izveidojot tīmekļa aizķeri, pēc tam tīmekļa aizķeres lapā noklikšķinot uz tīmekļa aizķeres URL. Kad esat tur, varat atklāt parakstīšanas noslēpumu, kas jums būs jāielīmē šajā laukā.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Maksājums neizdevās!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Diemžēl mēs nevaram apstiprināt veiksmīgu maksājumu. Lūdzu, atgriezieties rezervācijas veidlapā un mēģiniet vēlreiz.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Atgriezties uz rezervācijas veidlapu");
