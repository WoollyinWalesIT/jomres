<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.2
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\ClientException;
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000firewall_check
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

		$output = array();
		$rows = array();
		$pageoutput = array();
		
		$remote_services = array (
			'https://license-server.jomres.net/remote.php',
			'http://plugins.jomres4.net/',
			'http://updates.jomres4.net/',
			'https://maps-api-ssl.google.com/',
			'http://tinyurl.com',
			'http://api.clickatell.com/',
			'https://api.openweathermap.org',
			'https://openexchangerates.org/api/latest.json'
		);

		foreach ( $remote_services as $service ) {
			$r=array();
			
			$response_code = "XXX";
			$r['COLOUR'] = "danger";
			
			try {
				$client = new GuzzleHttp\Client([
					'base_uri' => $service,
					'http_errors' => false,
					'timeout' => 3, // Response timeout
					'connect_timeout' => 3 // Connection timeout
				]);
				$response = $client->request('GET');
				$response_code = $response->getStatusCode();
			}
			catch (Exception $e) {
				//var_dump($e);exit;
			}

			if ($response_code == "200" || $response_code == "403" || $response_code == "404" ) {
				$r['COLOUR'] = "success";
			}
			
			$r['SERVICE'] = $service;
			$r['RESPONSE_CODE'] = $response_code;
			
			$r['IP_NUMBER'] = $this->get_ip_number($service);
			
			$rows[] = $r;
		}
		
		$output[ 'FIREWALL_CHECK' ]					= jr_gettext('FIREWALL_CHECK', 'FIREWALL_CHECK', false);
		$output[ 'FIREWALL_CHECK_DESC' ]			= jr_gettext('FIREWALL_CHECK_DESC', 'FIREWALL_CHECK_DESC', false);
		$output[ 'FIREWALL_CHECK_REMOTE_SERVICE' ]	= jr_gettext('FIREWALL_CHECK_REMOTE_SERVICE', 'FIREWALL_CHECK_REMOTE_SERVICE', false);
		$output[ 'FIREWALL_CHECK_STATUSCODE' ]		= jr_gettext('FIREWALL_CHECK_STATUSCODE', 'FIREWALL_CHECK_STATUSCODE', false);
		$output[ 'FIREWALL_CHECK_IP_NUMBER' ]		= jr_gettext('FIREWALL_CHECK_IP_NUMBER', 'FIREWALL_CHECK_IP_NUMBER', false);

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput('firewall_check.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}

	function get_ip_number($service) 
	{
		$wrapper = fopen('php://temp', 'r+');
		$ch = curl_init($service);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_STDERR, $wrapper);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($ch);
		curl_close($ch);
		$ips = $this->get_curl_remote_ips($wrapper);
		fclose($wrapper);

		if (!empty($ips)) {
			return end($ips);
		} else {
			return 'XXX';
		}
		
	}
	
	function get_curl_remote_ips($fp) 
	{
		rewind($fp);
		$str = fread($fp, 8192);
		$regex = '/\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b/';
		if (preg_match_all($regex, $str, $matches)) {
			return array_unique($matches[0]);  // Array([0] => 74.125.45.100 [2] => 208.69.36.231)
		} else {
			return false;
		}
	}	
	

	public function getRetVals()
	{
		return null;
	}
}
