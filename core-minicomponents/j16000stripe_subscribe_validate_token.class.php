<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.1
 *
 * @copyright	2005-2019 Vince Wooll
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

class j16000stripe_subscribe_validate_token
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
	 
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$invoice_id		= jomresGetParam($_REQUEST, 'invoice_id', '');
		$stripeToken	= jomresGetParam($_REQUEST, 'stripeToken', '');

		try {
			$base_uri = 'https://license-server.jomres.net/';
			$query_string = 'remote.php?remote=gateways&cmd=callback&gateway=stripe&plan=sub_developer&invoice_id='.$invoice_id.'&stripeToken='.$stripeToken;
				
			$client = new GuzzleHttp\Client([
				'base_uri' => $base_uri,
				'verify' => false
			]);

			logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');

			$response = $client->request('GET', $query_string)->getBody()->getContents();
			
			echo $response;
		}
		catch (ClientErrorResponseException $exception) {
			$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
			$jomres_user_feedback->construct_message(array('message'=>'Could not validate Stripe token', 'css_class'=>'alert-danger alert-error'));
			$jomres_user_feedback->construct_message(array('message'=>$exception->getResponse()->getBody(true), 'css_class'=>'alert-danger alert-error'));
		}
	}

	public function getRetVals()
	{
		return null;
	}
}
