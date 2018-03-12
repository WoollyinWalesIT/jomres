<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################


class j16000stripe_subscribe
{
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		jomres_cmsspecific_addheaddata('javascript', JOMRES_NODE_MODULES_RELPATH.'blockui-npm/', 'jquery.blockUI.js');

		jr_import('jomres_check_support_key');
		$key_validation = new jomres_check_support_key(JOMRES_SITEPAGE_URL_ADMIN.'&task=stripe_subscribe');

		if (!$key_validation->key_valid) {
			try {
				$cachefile = JOMRES_TEMP_ABSPATH.'jomres_shop_countries.json';
				if (!file_exists($cachefile)) {
					$base_uri = 'https://license-server.jomres.net/';
					$query_string = 'shop/countries.php';
					
					// Many users will be installing on localhost etc, where selfsigned certificates may not be set up correctly, therefore we will disable verification of certs
					$client = new GuzzleHttp\Client([
						'base_uri' => $base_uri,
						'verify' => false
					]);

					logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');
					
					$countries_response = $client->request('GET', $query_string)->getBody()->getContents();
					$countries = json_decode($countries_response);

					if (!is_array($countries)) {
						throw new Exception('Could not get list of countries');
					}
					file_put_contents($cachefile , $countries_response );
				
				
				}
				$countries_response = file_get_contents($cachefile);
			}
			catch (ClientErrorResponseException $exception) {
				$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
				$jomres_user_feedback->construct_message(array('message'=>'Could not get countries list', 'css_class'=>'alert-danger alert-error'));
				$jomres_user_feedback->construct_message(array('message'=>$exception->getResponse()->getBody(true), 'css_class'=>'alert-danger alert-error'));
			}

		$output = array();
		
		$output['COUNTRIES'] = $countries_response;
		$output['ADMIN_EMAIL'] = get_showtime('mailfrom');
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('stripe_subscribe.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$subscription_form = $tmpl->getParsedTemplate();
		
		$output = array();
		$pageoutput = array();
		
		$output['SUBSCRIPTION_FORM_USER_DETAILS'] = $subscription_form;

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('stripe_subscribe_wrapper.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		echo $tmpl->getParsedTemplate();
		}
	else {
		$output = array();
		$pageoutput = array();
		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('stripe_subscribed.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		echo $tmpl->getParsedTemplate();
		}

	}

	public function getRetVals()
	{
		return null;
	}
}
