<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// This class is from the ipinfodb.com website. No license information was in the file, ergo it isn't replicated here. Assuming that it is freeware unless informed otherwise.

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

final class jomres_ip2location_lite
{
	protected $errors = array();
	protected $service = 'api.ipinfodb.com';
	protected $version = 'v3';
	protected $apiKey = '';
	
	/**
	 * 
	 *
	 *
	 */

	public function __construct()
	{
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function __destruct()
	{
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function setKey($key)
	{
		if (!empty($key)) {
			$this->apiKey = $key;
		}
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function getError()
	{
		return implode("\n", $this->errors);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function getCountry($host)
	{
		return $this->getResult($host, 'ip-country');
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function getCity($host)
	{
		return $this->getResult($host, 'ip-city');
	}
	
	/**
	 * 
	 *
	 *
	 */

	private function getResult($host, $name)
	{
		$ip = @gethostbyname($host);

		if (preg_match('/^(?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)(?:[.](?:25[0-5]|2[0-4]\d|1\d\d|[1-9]\d|\d)){3}$/', $ip)) {
			$xml = @file_get_contents('http://'.$this->service.'/'.$this->version.'/'.$name.'/?key='.$this->apiKey.'&ip='.$ip.'&format=xml');

			try {
				$response = @new SimpleXMLElement($xml);

				foreach ($response as $field => $value) {
					$result[ (string) $field ] = (string) $value;
				}

				return $result;
			} catch (Exception $e) {
				$this->errors[ ] = $e->getMessage();

				return;
			}
		}

		$this->errors[ ] = '"'.$host.'" is not a valid IP address or hostname.';

		return;
	}
}
