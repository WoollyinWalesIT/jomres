<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// This allows Jomres to call it's own API. As more functionality is added to the API then there are times that that will be the choice of connection.
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */
	#[AllowDynamicProperties]
class jomres_syndicate_properties
{

	/**
	 *
	 *
	 *
	 */

	public function __construct()
	{
		$this->all_properties = array();
		$this->all_approved_properties = array();
		$this->fallback_approved_properties = array();
		$this->existing_domains = array();
		
		$this->base_lat_long = array();
		$this->base_property_id = 0;
		
		$this->min_distance_allowed = 1;
		$this->max_distance_allowed = 20;
	}
	
	/**
	 *
	 *
	 *
	 */

	public function get_all_properties()
	{
		$query = "SELECT id , domain FROM #__jomres_syndication_domains ";
		$result = doSelectSql($query);
		
		$existing_domains = array();
		if (!empty($result)) {
			foreach ($result as $r) {
				$existing_domains[$r->id] = $r->domain;
			}
		}
		
		$query = "SELECT id , `syndication_domain_id` , `view_property_url` , `booking_form_url` , `propertys_uid` , `name` , `multi_room_property` , `lat` , `long` , `metadescription` , `thumbnail_location` , `date_added` , `last_checked` , `approved` , `unapproval_reason` FROM #__jomres_syndication_properties";
		$result = doSelectSql($query);
		if (!empty($result)) {
			foreach ($result as $r) {
				$r->domain = $existing_domains[$r->syndication_domain_id];
				$this->all_properties[$r->id] = $r;
			}
		}
	}
		
	/**
	 *
	 *
	 *
	 */

	public function get_approved_properties()
	{
		if (empty($this->all_properties)) {
			$this->get_all_properties();
		}

		foreach ($this->all_properties as $property) {
			if ($property->approved == "1" && strstr($property->thumbnail_location, "https://")) {
				if ($property->multi_room_property == "1") {
					$this->all_approved_properties['mrps'][$property->id] = $property;
				} else {
					$this->all_approved_properties['srps'][$property->id] = $property;
				}
			}
		}
		return $this->all_approved_properties;
	}
		
	/**
	 *
	 *
	 *
	 */

	public function get_random_properties($limit = 5, $multi_room_property = 1)
	{
		if ($multi_room_property == 1) {
			$type = "mrps";
		} else {
			$type = "srps";
		}
		
		if (empty($this->all_properties)) {
			$this->get_approved_properties();
		}

		/*if ( !empty($this->base_lat_long ) && $this->base_property_id > 0 )  {

			$distances = array();
			if ( $this->base_property_id > 0 ) {
				$query = "SELECT distance , syndication_id FROM #__jomres_syndication_distances WHERE property_id = ".(int)$this->base_property_id. " ORDER BY distance ASC LIMIT 200" ;
				$distances_arr = doSelectSql($query);
				foreach ( $distances_arr as $d) {
					$distances[$d->syndication_id] = $d->distance;
				}
			}

			$row_str = '';
			if (isset($this->all_approved_properties[$type])) {
				foreach ($this->all_approved_properties[$type] as $key=>$val) {
					if ( isset($distances[$key]	) ) {
						$distance = $distances[$key];
					} else {
						$latitudeFrom = $this->base_lat_long["lat"];
						$longitudeFrom = $this->base_lat_long["long"];
						$latitudeTo = $val->lat;
						$longitudeTo = $val->long;
						$distance = $this->codexworldGetDistanceOpt($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo);

						$row_str .= "( ".(int)$this->base_property_id." , ".(int)$key. " , ".(int)$distance." ),";
					}


					if ( $distance > $this->max_distance_allowed || $distance < $this->min_distance_allowed ) {
						$this->fallback_approved_properties[] = $this->all_approved_properties[$type][$key];
						unset($this->all_approved_properties[$type][$key]);
					} else {
						$val->distance = $distance;
						$this->all_approved_properties[$type][$key] = $val;
					}
				}
			}


			if ($row_str != '' ) {
				$row_str = substr($row_str, 0, -1);

			$query = "INSERT INTO #__jomres_syndication_distances  ( `property_id` , `syndication_id` , `distance` ) VALUES ".$row_str;
			doInsertSql($query);
			}
		}*/
		
		$result = array();
		if (isset($this->all_approved_properties[$type])) {
			$count = count($this->all_approved_properties[$type]);
			
			if ($count == 0 && !empty($this->fallback_approved_properties)) {
				$this->all_approved_properties[$type] = $this->fallback_approved_properties;
				$count = count($this->all_approved_properties[$type]);
			} elseif ($count == 0) {
				return array();
			}
			
			if ($count <= $limit) {
				$limit = $count;
			}
			
			$ids = array_rand($this->all_approved_properties[$type], $limit);
			
			
			foreach ($ids as $id) {
				$result[$id] = $this->all_approved_properties[$type][$id];
			}
		}
		return $result;
	}
		
	/**
	 *
	 *
	 *
	 */

	public function report_properties_display($properties)
	{
		$report = new stdClass();
		$report->properties = array();
		foreach ($properties as $property) {
			$report->properties[] = array (
				"domain" => $property->domain,
				"view_property_url" => $property->view_property_url,
				"propertys_uid" => $property->propertys_uid,
				"name" => $property->name,
				"current_url" => getCurrentUrl()
				);
		}

		$client = new GuzzleHttp\Client();
		$response = $client->request('POST', "https://app.jomres.net/jomres/api/syndication/report/", [
			'form_params' => [
				'api_url' => urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/'),
				'report' => json_encode($report)
				]
			]);
	}
	
	/**
	 *
	 *
	 *
	 */

	private function codexworldGetDistanceOpt($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
	{
		
		$rad = M_PI / 180;
		//Calculate distance from latitude and longitude
		$theta = (float)$longitudeFrom - (float)$longitudeTo;
		$dist = sin($latitudeFrom * $rad)
			* sin($latitudeTo * $rad) +  cos($latitudeFrom * $rad)
			* cos($latitudeTo * $rad) * cos($theta * $rad);

		return acos($dist) / $rad * 60 *  1.853;
	}
}
