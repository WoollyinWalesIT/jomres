<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.9
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000prices
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		$loaders_available = false;
		if (function_exists('ioncube_loader_version')) {
			$loaders_available = true;
		}
		
		$output = array();
		
		$output['IONCUBE_WARNING'] = '';
		if (!$loaders_available) { // show the subscriptions available
			$output['IONCUBE_WARNING'] = '<p class="center alert alert-info">Ioncube loaders are not installed on this server, &#9785; you will need to install the Ioncube Loaders first</p>';
		}
		
		$base_uri = 'http://updates.jomres4.net/';
		$query_string = 'remote_templates/plugin_manager_licenses_subscriptions.html';
		
		try {
			$client = new GuzzleHttp\Client([
				'base_uri' => $base_uri
			]);

			logging::log_message('Starting guzzle call to '.$base_uri.$query_string, 'Guzzle', 'DEBUG');
			
			$output['SUBSCRIPTION_LICENSES'] = $client->request('GET', $query_string)->getBody()->getContents();
		}
		catch (Exception $e) {
			$jomres_user_feedback = jomres_singleton_abstract::getInstance('jomres_user_feedback');
			$jomres_user_feedback->construct_message(array('message'=>'Could not get Jomres prices, please see https://www.jomres.net/prices', 'css_class'=>'alert-danger alert-error'));
		}

/* 		$pageoutput = array();
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('plugin_manager_licenses_subscriptions.html');
		$output['SUBSCRIPTION_LICENSES'] = $tmpl->getParsedTemplate(); */
		
		
		$pageoutput = array();
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('prices.html');
		$tmpl->displayParsedTemplate();
		return;
    }


    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
