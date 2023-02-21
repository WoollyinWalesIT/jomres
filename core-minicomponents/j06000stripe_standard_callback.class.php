<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
 *
 * @copyright	2005-2023 Vince Wooll
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

class j06000stripe_standard_callback
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
		$ePointFilepath = get_showtime('ePointFilepath');

		$payload = @file_get_contents("php://input");
		$event_json = json_decode($payload);

		if (!isset($event_json->data->object->client_reference_id) || trim($event_json->data->object->client_reference_id) != '' ) {
			$session_id = $event_json->data->object->client_reference_id;
			$tmpBookingHandler =jomres_getSingleton('jomres_temp_booking_handler');
			$tmpBookingHandler->is_crawler = false; // The crawler library identifies Stripe as a crawler. If left as True, the temp booking handler will not attempt to pull the data from the database (for performance reasons), so we need to set this manually to false to ensure that the booking data is pulled from the database/session file
			$tmpBookingHandler->initBookingSession( $session_id );

			$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
			$jrConfig = $siteConfig->get();
			$mrConfig = getPropertySpecificSettings((int)$tmpBookingHandler->tmpbooking['property_uid']);

			if ($jrConfig['useGlobalCurrency'] == '1') {
				$currency_code = $jrConfig['globalCurrencyCode'];
			} else {
				$currency_code = $mrConfig['property_currencycode'];
			}

			$settingArray = [];
			$query		= "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = ".(int)$tmpBookingHandler->tmpbooking['property_uid']." AND plugin = 'stripe_standard' ";
			$settingsList = doSelectSql( $query );
			if ( count ($settingsList) > 0) {
				foreach ( $settingsList as $set ) {
					$settingArray[ $set->setting ] = trim($set->value);
				}
			}

			\Stripe\Stripe::setAppInfo("Jomres Stripe Standard", "1.0", "https://www.jomres.net");

			if ( !isset($settingArray[ 'test_mode' ]) || $settingArray[ 'test_mode' ] == '1' ) {
				$secret_key = trim($settingArray[ 'test_secret_key' ]);
				$endpoint_secret = trim($settingArray[ 'test_signing_secret' ]);
			} else {
				$secret_key = trim($settingArray[ 'live_secret_key' ]);
				$endpoint_secret = trim($settingArray[ 'live_signing_secret' ]);
			}


			$stripe = new \Stripe\StripeClient([
				"api_key" => $secret_key,
				"stripe_version" => STRIPE_API_VERSION
			]);

			$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
			$event = null;

			try {
				$event = \Stripe\Webhook::constructEvent(
					$payload, $sig_header, $endpoint_secret
					);

				} catch(\UnexpectedValueException $e) {
					// Invalid payload
					http_response_code(400);
					exit();
				} catch(\Stripe\Exception\SignatureVerificationException $e) {
					// Invalid signature
					http_response_code(400);
					exit();
				}

				// Handle the event
			switch ($event->type) {
				case 'checkout.session.completed':
					$payment_intent = $event->data->object; // contains a \Stripe\PaymentIntent

					$message = "Deposit payment of " . floor($payment_intent->amount_received) . " " . $currency_code . " paid";
					logging::log_message($message, "Stripe Standard", "INFO");
					logging::log_message($message, "Core", "INFO");

					$tmpBookingHandler->updateBookingField('depositpaidsuccessfully', true);

					$transaction_id = $payment_intent->id;
					$management_url = 'https://dashboard.stripe.com/';
					if ($settingArray[ 'test_mode' ] == '1')
						$management_url .= 'test/';
					$management_url .= 'payments/' . $payment_intent->id;
					$payment_method = 'stripe';

					set_showtime("gateway_payment_method", $payment_method);
					set_showtime("gateway_management_url", $management_url);
					set_showtime("gateway_transaction_id", $transaction_id);
					echo "Confirmed payment, transaction id ". $transaction_id;
					insertInternetBooking( $session_id, true, false);
					break;
				case 'payment_method.attached':
					//$paymentMethod = $event->data->object; // contains a \Stripe\PaymentMethod
					http_response_code(400);
					break;

				default:
					echo 'Received unknown event type ' . $event->type;
					http_response_code(400);
				}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
