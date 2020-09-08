<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
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
		
		$query = "SELECT `id` , `domain` , `api_url` ,  `last_checked` , `approved` FROM #__jomres_syndication_domains WHERE last_checked  < (NOW() - INTERVAL 1 HOUR) AND approved = 1 ";
		$result = doSelectSql($query);

		$local_domain = parse_url(get_showtime('live_site'));
		$local_hostname = $local_domain['host'];
		
		$now = date("Y-m-d H:i:s");
		
		$existing_domains = array();
		if (!empty($result)) {
			foreach ($result as $r) {
				
				$datetime1 = new DateTime($now);
				$datetime2 = new DateTime($r->last_checked);
				$interval = $datetime1->diff($datetime2);

				if ($interval->h || $interval->d > 1 || $interval->m > 1 || $interval->y > 1 ) {
					$checked_properties = array();
					$query = "SELECT id , propertys_uid , thumbnail_location FROM #__jomres_syndication_properties WHERE approved = 1 AND syndication_domain_id = ".$r->id;
					$local_properties = doSelectSql($query);
					
					if (!empty($local_properties)) { // The get syndicate properties script will handle adding any new properties, so the only thing we need to do here is remove those that aren't in the remote properties array
						try {
							$domain = parse_url($r->api_url);
							if ( $local_hostname != $domain['host'] ) {
								$client = new GuzzleHttp\Client();

								$response = $client->request('GET', $r->api_url.'core/get_properties/' , ['connect_timeout' => 4 , 'verify' => false , 'http_errors' => false] );
								
								if ((string)$response->getStatusCode() == "404" || (string)$response->getStatusCode() == "403"  || (string)$response->getStatusCode() == "0" ) {
										$query = "UPDATE  #__jomres_syndication_domains SET 
										`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."' ,
										`approved` = 0 ,
										`unapproval_reason` = 'system'
										WHERE id = ".(int)$r->id;
									doInsertSql($query);
								} else {
									$body				= json_decode((string)$response->getBody());

									if (empty($body->data->properties[0]->properties)) { // All remote properties have been removed/unpublished, we will remove all local properties
										$query = "DELETE FROM #__jomres_syndication_properties WHERE syndication_domain_id = ".(int)$r->id;
										doInsertSql($query);
										logging::log_message("Deleted local properties for ".$domain['host']." as all properties appear unpublished ", 'Syndication', 'INFO');
									} else {
										$remote_properties = array();
										foreach ($body->data->properties[0]->properties as $remote_property) {
											if (isset($remote_property->propertys_uid)) {
												$remote_properties[] = $remote_property->propertys_uid;
												$remote_thumbs[] = array( "remote_property_uid" => $remote_property->propertys_uid , "remote_thumbnail" =>  $remote_property->thumbnail_location );
											}
										}

										foreach ($local_properties as $local_property) {
											if (!in_array(  $local_property->propertys_uid , $remote_properties)) {
												$query = "DELETE FROM #__jomres_syndication_properties WHERE id = ".(int)$local_property->propertys_uid;
												doInsertSql($query);
												logging::log_message("Deleted local property id ".(int)$r->id." for ".$domain['host']." as it no longer appears in the remote server's properties list ", 'Syndication', 'INFO');
											} else {
												$thumbnail_exists = $this->check_thumbnail_exists($local_property->thumbnail_location);
												if ($thumbnail_exists) {
													$checked_properties[] = $local_property->id;
												} else {
													$query = "UPDATE #__jomres_syndication_properties SET `approved` = 0 , `unapproval_reason` = 'system' WHERE id = ".(int)$local_property->id;
													doInsertSql($query);
												}
											}
										}
									}
								}
								
								$query = "UPDATE #__jomres_syndication_properties SET `last_checked` = '".date("Y-m-d H:i:s")."' WHERE id IN (".jomres_implode($checked_properties).") ";
								doInsertSql($query);
							}
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

	private function check_thumbnail_exists( $url = '' )
	{
		if ($url == '' ) {
			return false;
		}

		$handle = curl_init($url);
		curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($handle, CURLOPT_NOBODY, true);
		curl_setopt($handle, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($handle,CURLOPT_TIMEOUT,5);

		/* Get the thumbnail */
		$response = curl_exec($handle);

		/* Check for 404 (file not found). */
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);

		echo ($httpCode." ".$url."</br>");

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
