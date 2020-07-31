<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.1
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Attempts to update the App Server (<a href="https://www.jomres.net/manual/developers-guide-2/387-jomres-syndication-network">Jomres Syndicate Network</a>) with this installation's existence. 
	 *
	 */

class j00005register_site
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
	
	if ( 
		get_showtime("task") == "view_log_file" ||
		get_showtime("task") == "list_error_logs" ||
		AJAXCALL
		) {
			return;
		}
	
	// reports the server's existence to the Jomres app server
	
	$app_server = "https://app.jomres.net/jomres/api/register_site/";
	
	$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
	$jrConfig = $siteConfig->get();

	if (!isset($jrConfig['useSyndication'])) {
		$jrConfig['useSyndication'] = 0;
	}

	if ( $jrConfig['useSyndication'] == 0) {
		return;
	}

	if (!isset($jrConfig['appServerRegister'])) {
		$tries = 0;
	} else {
		$tries = $jrConfig['appServerRegister'];
		}
	
	if ($tries >= 6 ) { //It aint happening, let's give up
		return;
		}
	
	
	try {
		$client = new GuzzleHttp\Client();

		$response = $client->request('POST', $app_server, [
			//'debug' => true,
			'form_params' => [
				'api_url' => urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/')
				]
			]);

		$code				= $response->getStatusCode();
		$body				= (string)$response->getBody();

		
		
		if ($code == 200) {
			logging::log_message('Updated app.jomres.net ', 'API', 'DEBUG');
			$tries = 10;
			} 
		else {
			logging::log_message('Failed to update app.jomres.net Received response code '.$code, 'API', 'WARNING');
			$tries++;
			}
	} catch (\Exception $e) {
		logging::log_message('Failed to update app.jomres.net Received response '.$e->getMessage()." with message ".$body, 'API', 'WARNING' , $body)  ;
		$tries++;
		}
		
	$siteConfig->update_setting('appServerRegister',$tries);
	}
	
	

	public function getRetVals()
	{
		return null;
	}
}
