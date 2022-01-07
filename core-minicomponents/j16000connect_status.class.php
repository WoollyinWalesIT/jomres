<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.1.0
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


class j16000connect_status
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		if ( $jrConfig['connection_account_id'] != '' && $jrConfig['platform_connected'] == '1'  ) {
			try {
				$base_uri = 'https://license-server.jomres.net/shop/connect/status.php';
				$client = new GuzzleHttp\Client([
					'base_uri' => $base_uri
				]);

				$query_string = '?account_id=' . $jrConfig['connection_account_id'];

				$buffer = $client->request('GET', $query_string)->getBody()->getContents();
			}
			catch (Exception $e) {
				die();
			}

			$result = json_decode($buffer);

			if (isset($result->success) && $result->success == true ) {
				echo "Thank you, you have connected to the Jomres Platform";
			}

		}



	}


	public function getRetVals()
	{
		return null;
	}
}
