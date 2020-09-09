<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.5
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
	 * 
	 */

class j06000cron_syndication_check_syndicate_properties
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$query = "SELECT `id` FROM #__jomres_syndication_domains WHERE  approved = 0 ";
		$result = doSelectSql($query);
		$disabled_domains = array();
		if (!empty($result)) {
			foreach ( $result as $r ) {
				$disabled_domains[]=$r->id;
			}
			$query = 'SELECT id , `name` FROM #__jomres_syndication_properties WHERE syndication_domain_id IN ('.jomres_implode($disabled_domains).') AND approved = 1 ORDER BY `name` ';
			$trash_properties = doSelectSql($query);
			$properties_to_disable = array();
			if (!empty($trash_properties)) {
				foreach ($trash_properties as $t ) {
					$properties_to_disable[]=$t->id;
				}
				$query = "UPDATE #__jomres_syndication_properties SET
					`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."' , 
					`approved` = 0 , 
					`unapproval_reason` = 'domain' 
					WHERE id IN (".jomres_implode($properties_to_disable).")";
				doInsertSql($query);
			}
		}

		$query = "SELECT `id` , `domain` , `api_url` ,  `last_checked` , `approved` FROM #__jomres_syndication_domains WHERE  approved = 1 ORDER BY last_checked ASC";
		$result = doSelectSql($query);

		$now = date("Y-m-d H:i:s");

		$no_more = false;

		$quickstart_property_names = array (
		"Fawlty Towers" ,
		"Hotel Valle" ,
		"Best West Hotel" ,
		"Jaguar S Type" ,
		"Aston Martin DB7" ,
		"Some Yacht" ,
		"Some Other Yacht" ,
		"Some Camping Area" ,
		"Some Other Campsite" ,
		"Star Apartment" ,
		"Star2 Apartment" ,
		"Some Villa" ,
		"Some Other Villa" ,
		"Jaguar XJ" ,
		"Rolls Royce Phantom" ,
		"Mercedes S Class" ,
		"Audi A8" ,
		"Ferretti 212" ,
		"Expedition Vessel" ,
		"Grand Banks" ,
		"Commercial Boat",
		"London Bus Tour",
		"Derby Sightseen"
		);


		if (!empty($result)) {

			foreach ($result as $r) {

				if (!$no_more ) {
					$datetime1 = new DateTime($now);
					$datetime2 = new DateTime($r->last_checked);
					$interval = $datetime1->diff($datetime2);

					//$timeInterval      = //the DateInterval you have;
					$intervalInSeconds = (new DateTime())->setTimeStamp(0)->add($interval)->getTimeStamp();
					$intervalInMinutes = abs($intervalInSeconds/60);

					if ($intervalInMinutes > 60  ) {
						$query = "SELECT id , syndication_domain_id , propertys_uid , thumbnail_location , view_property_url , `name` FROM #__jomres_syndication_properties WHERE last_checked  < (NOW() - INTERVAL 1 HOUR) AND approved = 1 AND syndication_domain_id = ".$r->id." ORDER BY last_checked LIMIT 10 ";
						$local_properties = doSelectSql($query);

						if (!empty($local_properties)) { // The get syndicate properties script will handle adding any new properties, so the only thing we need to do here is remove those that aren't in the remote properties array
							//var_dump($local_properties);
							try {
								foreach ($local_properties as $local_property ) {
									if ( in_array( trim($local_property->name) , $quickstart_property_names ) ) {
										$query = "UPDATE #__jomres_syndication_properties SET
											`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."' , 
											`approved` = 0 , 
											`unapproval_reason` = 'quickstart' 
										WHERE id = ".(int)$local_property->id;
										doInsertSql($query);
									} else {
										$client = new GuzzleHttp\Client();

										$response = $client->request('GET', $local_property->view_property_url , ['connect_timeout' => 1 , 'verify' => false , 'http_errors' => false] );

										if ((string)$response->getStatusCode() == "404" || (string)$response->getStatusCode() == "0" ) {
											$query = "UPDATE  #__jomres_syndication_properties SET 
										`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."' ,
										`approved` = 0 ,
										`unapproval_reason` = '404'
										WHERE id = ".(int)$local_property->id;
											doInsertSql($query);
										} else {
											$thumbnail_exists = $this->check_thumbnail_exists($local_property->thumbnail_location);
											if (!$thumbnail_exists) {
												$query = "UPDATE #__jomres_syndication_properties SET
											`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 week") )."' , 
											`approved` = 0 , 
											`unapproval_reason` = 'thumbnail' 
										WHERE id = ".(int)$local_property->id;
												doInsertSql($query);
											} else {
												$query = "UPDATE #__jomres_syndication_properties SET `last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 week") )."' WHERE id = ".(int)$local_property->id;
												doInsertSql($query);
											}
										}
									}
									//echo "
									//".$query."
									//";
								}

								$no_more = true;
								break;
							}
							catch (GuzzleHttp\Exception\RequestException $e) {
								if ((int)$r->approved == 1 ) { // Oops, it's stopped responding. We'll take it offline and check it again in an hour
									$query = "UPDATE  #__jomres_syndication_domains SET 
									`last_checked` = '".date("Y-m-d H:i:s")."',
									`approved` = 0 ,
									`unapproval_reason` = 'system'
									WHERE id = ".(int)$r->id;
									doInsertSql($query);
								} else { // It's still not responding
									$query = "UPDATE  #__jomres_syndication_domains SET 
									`last_checked` = '".date("Y-m-d H:i:s")."'
									WHERE id = ".(int)$r->id;
									doInsertSql($query);
								}
							}
						}
					}
				}
			}
		}
	}

	private function check_thumbnail_exists( $url = '' )
	{
		if ($url == '' ) {
			return false;
		}

		$handle = curl_init($url);
		curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handle, CURLOPT_NOBODY, true);
		curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($handle,CURLOPT_TIMEOUT,1);

		/* Get the thumbnail */
		$response = curl_exec($handle);

		/* Check for 404 (file not found). */
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

		if($httpCode == 404) {
			return false;
		}

		if($httpCode == 403) {
			return false;
		}

		if($httpCode == 301) {
			return false;
		}

		if($httpCode == 0) {
			return false;
		}

		if(curl_errno($handle) == 28 ) // Timed out
		{
			return false;
		}

		curl_close($handle);

		return true;
	}

	public function getRetVals()
	{
		return null;
	}
}
