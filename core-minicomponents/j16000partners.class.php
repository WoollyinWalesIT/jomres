<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000partners
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$output = array();

		$output['TITLE'] = 'Our Partners';
		$output['INTRO'] = 'Here you can find a list of our partners. These are businesses who also offer plugins for Jomres, extra to those already available in the Jomres Plugin Manager.';

		$partners ['jomres_plugins'] = array(
			'name' => 'Jomres Plugins',
			'intro' => 'Rodrigo is very active in the Jomres.net forums, many users have benefited from his helpfulness and skills over the years. He produces his own plugins for Jomres, but his main focus is custom coding for individual projects.',
			'plugin_list_url' => 'http://www.jomres-plugins.com/jomrespluginsmanifest/jomres-plugins.com.php',
			'image' => 'jomres-plugins.com.png',
			'link' => 'http://www.jomres-plugins.com',
			);

		$partners ['osdcs'] = array(
			'name' => 'OSDCS',
			'intro' => 'Robert and Vince go back almost to the beginning of Joomla, and OSDCS now have 46 gateways plugins for Jomres.',
			'plugin_list_url' => 'http://www.joomla-payment-gateways.osdcs.com/osdcs.com.php',
			'image' => 'osdcs.com.png',
			'link' => 'http://www.joomla-payment-gateways.osdcs.com/index.php?option=com_digistore&controller=digistoreProducts&task=list&cid=2&Itemid=5',
			);

		$partner_data = array();
		
		$client = new GuzzleHttp\Client();

		foreach ($partners as $key => $p) {
			$url = $p['plugin_list_url'];

			logging::log_message('Starting guzzle call to '.$url, 'Guzzle', 'DEBUG');
			
			try {
				$response = $client->request('GET', $url)->getBody()->getContents();
			}
			catch (Exception $e){
				//do nothing, move on
			}

			$partner_plugins = json_decode($response, true);

			if (!empty($partner_plugins)) {
				$partner_data[$key] = $p;
				$partner_data[$key]['id'] = $key;
				foreach ($partner_plugins as $plugin) {
					$partner_data[$key]['plugins'][] = array(
						'name' => jomres_sanitise_string($plugin['name']),
						'image' => jomres_sanitise_string($plugin['image']),
						'description' => nl2br(jomres_sanitise_string($plugin['description'])),
						'purchase_url' => jomres_sanitise_string($plugin['purchase_url']),
						'demo' => jomres_sanitise_string($plugin['demo']),
						);
				}

				$tmpl = new patTemplate();
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
				$tmpl->readTemplatesFromInput('jomres_partners_plugins.html');
				$tmpl->addRows('sub_pageoutput', $partner_data[$key]['plugins']);
				$partner_data[$key]['plugins'] = $tmpl->getParsedTemplate();
			}
		}

		$pageoutput = array();
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('jomres_partners.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $partner_data);
		$tmpl->displayParsedTemplate();
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
