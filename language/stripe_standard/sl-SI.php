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
	jr_define('STRIPE_STANDARD_MARKETING',"Milijoni podjetij vseh velikosti – od startupov do velikih podjetij – uporabljajo programsko opremo Stripe in API-je za sprejemanje plačil, pošiljanje izplačil in upravljanje svojih podjetij prek spleta. " );

	jr_define('STRIPE_STANDARD_API_TOKEN_DESC',"Če še nimate ključev API, boste morali najprej obiskati Stripe in pridobiti žeton API <a href='https://dashboard.stripe.com/developers' target='_blank'> Par ključev API</a>. Če še nimate računa Stripe, lahko brezplačno ustvarite novega. Najprej preizkusite svojo integracijo tako, da omogočite testni način in nato uporabite testne ključe v predvidenih poljih. Ko ste zadovoljni, da vse deluje, lahko nato preklopite na uporabo tipk v živo in tukaj nastavite testni način na Ne.");

	jr_define('STRIPE_STANDARD_API_TEST_MODE',"Testni način");
	jr_define('STRIPE_STANDARD_API_TEST_MODE_DESC',"Če je nastavljeno na Da, bodo uporabljeni vaši testni API ključi.");

	jr_define('STRIPE_STANDARD_API_LIVE_PUBLISHABLE_KEY_TITLE',"Ključ za objavo v živo");
	jr_define('STRIPE_STANDARD_API_LIVE_SECRET_KEY_TITLE',"Skrivni ključ v živo");

	jr_define('STRIPE_STANDARD_API_TEST_PUBLISHABLE_KEY_TITLE',"Preizkusni objavljivi ključ");
	jr_define('STRIPE_STANDARD_API_TEST_SECRET_KEY_TITLE',"Preizkus tajnega ključa");

	jr_define('STRIPE_STANDARD_WEBHOOK_URL',"URL spletnega trnka");
	jr_define('STRIPE_STANDARD_WEBHOOK_URL_DESC',"Nastavite svoj <a href='https://dashboard.stripe.com/webhooks' target='_blank'> url webhooka</a> na ta url, da lahko Stripe pokliče nazaj in potrdi plačilo . Morali boste klikniti Dodaj končno točko in ta url prilepiti v polje 'URL končne točke'. Različico končne točke nastavite na 2022-08-01. Dovolite ji pošiljanje vseh dogodkov. Ko preklopite iz testnega načina v način v živo v Stripe, lahko uporablja isto končno točko.");

	jr_define('STRIPE_STANDARD_WEBHOOK_LIVE_SIGNING_SECRET',"Skrivnost podpisovanja spletnega trnka v živo");
	jr_define('STRIPE_STANDARD_WEBHOOK_TEST_SIGNING_SECRET',"Preizkusi skrivno podpisovanje Webhooka");
	jr_define('STRIPE_STANDARD_WEBHOOK_SIGNING_SECRET_DESC',"Ko Stripe pokliče strežnik nazaj, da potrdi uspešno plačilo, pošlje skrivnost podpisovanja. To skrivnost podpisovanja moramo poznati, da lahko Stripe pokličemo nazaj in potrdimo veljavnost sporočila. Skrivnost podpisovanja si lahko ogledate tako, da ustvarite webhook, nato pa na strani Webhooks kliknite url webhooka. Ko ste tam, lahko razkrijete skrivnost podpisovanja, ki jo boste morali prilepiti v to polje.");


	jr_define('STRIPE_STANDARD_PAYMENT_FAILED',"Plačilo ni uspelo!");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BLURB',"Na žalost ne moremo potrditi uspešnega plačila. Vrnite se na obrazec za rezervacijo in poskusite znova.");
	jr_define('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON',"Nazaj na obrazec za rezervacijo");
