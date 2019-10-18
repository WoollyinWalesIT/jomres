<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// This allows Jomres to call it's own API. As more functionality is added to the API then there are times that that will be the choice of connection.

class jomres_syndicate_properties
{
	public function __construct()
	{
		$this->all_properties = array();
		$this->all_approved_properties = array();
		$this->existing_domains = array();
	}

	public function get_all_properties() {
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
	
	public function get_approved_properties ()
	{
		if (empty($this->all_properties)) {
			$this->get_all_properties();
		}
		foreach ($this->all_properties as $property) {
			if ($property->approved == "1" ) {
				if ($property->multi_room_property == "1") {
					$this->all_approved_properties['mrps'][$property->id] = $property;
				}
				else {
					$this->all_approved_properties['srps'][$property->id] = $property;
				} 
			}
		}
		return $this->all_approved_properties;
	}
	
	public function get_random_properties( $limit = 5 , $multi_room_property = 1)
	{
		if ($multi_room_property == 1 ) {
			$type = "mrps";
		} else {
			$type = "srps";
		}
		
		if (empty($this->all_properties)) {
			$this->get_approved_properties();
		}

		$count = count($this->all_approved_properties[$type]);
		
		if ($count == 0 ) {
			return array();
		}
		
		if ( $count <= $limit ) {
			$limit = $count;
		}
		
		$ids = array_rand( $this->all_approved_properties[$type] , $limit );
		
		$result = array();
		foreach ($ids as $id) {
			$result[$id] = $this->all_approved_properties[$type][$id];
		}
		
		return $result;
	}
	
	public function report_properties_display( $properties )
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
		$response = $client->request('POST', "http://app.jomres.net/jomres/api/syndication/report/", [
			'form_params' => [
				'api_url' => urlencode(get_showtime('live_site').'/'.JOMRES_ROOT_DIRECTORY.'/api/'),
				'report' => json_encode($report)
				]
			]);
	}

}
