<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06000stripe_standard_redirect
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$mrConfig = getPropertySpecificSettings((int)$tmpBookingHandler->tmpbooking['property_uid']);

		if ($jrConfig['useGlobalCurrency'] == '1') {
			$currency_code = $jrConfig['globalCurrencyCode'];
		} else {
			$currency_code = $mrConfig['property_currencycode'];
		}

		$settingArray = [];
		$query		= "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = ".$tmpBookingHandler->tmpbooking['property_uid']." AND plugin = 'stripe_standard' ";
		$settingsList = doSelectSql( $query );
		if ( count ($settingsList) > 0)
		{
			foreach ( $settingsList as $set )
			{
				$settingArray[ $set->setting ] = trim($set->value);
			}
		}

		\Stripe\Stripe::setAppInfo("Jomres Stripe Standard", "1.0", "https://www.jomres.net");

		if ( !isset($settingArray[ 'test_mode' ]) || $settingArray[ 'test_mode' ] == '1' ) {
			$secret_key = trim($settingArray[ 'test_secret_key' ]);
		} else {
			$secret_key = trim($settingArray[ 'live_secret_key' ]);
		}

		$stripe = new \Stripe\StripeClient([
			"api_key" => $secret_key,
			"stripe_version" => STRIPE_API_VERSION
		]);

		$checkout_session = $stripe->checkout->sessions->create([
			'success_url' =>  JOMRES_SITEPAGE_URL_NOSEF.'&task=stripe_standard_response&booking_id='.$tmpBookingHandler->tmpbooking['booking_number'].'&jsid='.$tmpBookingHandler->jomressession,
			'cancel_url' =>  JOMRES_SITEPAGE_URL_NOSEF.'&task=stripe_standard_response&booking_id='.$tmpBookingHandler->tmpbooking['booking_number'].'&jsid='.$tmpBookingHandler->jomressession,
			'line_items' => [[
				'price_data' => [
					'currency' => $currency_code,
					'product_data' => [
						'name' => jr_gettext('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED', '_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED'),
					],
					'unit_amount' => floor ( $tmpBookingHandler->tmpbooking['deposit_required']*100),
				],
				'quantity' => 1,
			]],
			'mode' => 'payment',
			'customer_email' => $tmpBookingHandler->tmpguest['email'],
			'client_reference_id' => get_showtime('jomressession'),
		]);

		$tmpBookingHandler->user_settings['stripe_standard_checkout_session_id'] = $checkout_session->id;
		$tmpBookingHandler->close_jomres_session();  // Make sure that the checkout session id is saved

		header("HTTP/1.1 303 See Other");
		header("Location: " . $checkout_session->url);
		exit;
	}


	public function getRetVals()
	{
		return null;
	}
}
