<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.17
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000stripe_subscribe_ajax
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

		$firstname		= jomresGetParam($_REQUEST, 'firstname', '');
		$surname		= jomresGetParam($_REQUEST, 'surname', '');
		$country		= jomresGetParam($_REQUEST, 'country', '');
		$email			= jomresGetParam($_REQUEST, 'email', '');
		$tax_number		= jomresGetParam($_REQUEST, 'tax_number', '');

		try {
			$base_uri = 'https://license-server.jomres.net/';
			$query_string = '/shop/stripe_subscribe.php?firstname='.$firstname.'&surname='.$surname.'&country='.$country.'&email='.$email.'&tax_number='.$tax_number;
				
			// Many users will be installing on localhost etc, where selfsigned certificates may not be set up correctly, therefore we will disable verification of certs
			$client = new GuzzleHttp\Client([
				'base_uri' => $base_uri,
				'verify' => false
			]);

			logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');
				
			$result = $client->request('GET', $query_string)->getBody()->getContents();
			}
		catch (ClientErrorResponseException $exception) {
			$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
			$jomres_user_feedback->construct_message(array('message'=>'Could not get countries list', 'css_class'=>'alert-danger alert-error'));
			$jomres_user_feedback->construct_message(array('message'=>$exception->getResponse()->getBody(true), 'css_class'=>'alert-danger alert-error'));
		}

		echo $result;
    }

    public function getRetVals()
    {
        return null;
    }
}
