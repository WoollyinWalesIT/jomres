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

class j06000stripe_standard_response
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

		$checkout_session = $stripe->checkout->sessions->retrieve(
			$tmpBookingHandler->user_settings['stripe_standard_checkout_session_id'],
			[]
		);

		if ($checkout_session->status == 'complete') {
			$MiniComponents->specificEvent('03030', 'bookingcompleted', [] );
		} else {
			/*property_header($tmpBookingHandler->tmpbooking['property_uid']);*/

			$booking_form_url = get_booking_url($tmpBookingHandler->tmpbooking['property_uid']);

			$pageoutput	= [];
			$output 	= [];

			$output['STRIPE_STANDARD_PAYMENT_FAILED']=jr_gettext('STRIPE_STANDARD_PAYMENT_FAILED', 'STRIPE_STANDARD_PAYMENT_FAILED', false);
			$output['STRIPE_STANDARD_PAYMENT_FAILED_BLURB']=jr_gettext('STRIPE_STANDARD_PAYMENT_FAILED_BLURB', 'STRIPE_STANDARD_PAYMENT_FAILED_BLURB', false);
			$output['STRIPE_STANDARD_PAYMENT_FAILED_BUTTON']=jr_gettext('STRIPE_STANDARD_PAYMENT_FAILED_BUTTON', 'STRIPE_STANDARD_PAYMENT_FAILED_BUTTON', false);

			$output['BOOKING_FORM_URL'] =  $booking_form_url ;

			$pageoutput[]=$output;
			$tmpl = new patTemplate();

			$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
			$tmpl->readTemplatesFromInput( 'stripe_standard_payment_failed.html');
			$tmpl->addRows( 'pageoutput',$pageoutput);
			$tmpl->displayParsedTemplate();

		}
	}


	public function getRetVals()
	{
		return null;
	}
}
