<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000cron_syndication_get_syndicate_properties
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		
		$query = "SELECT `id` , `domain` , `api_url` , `last_checked` , `approved` FROM #__jomres_syndication_domains WHERE approved = 1";
		$result = doSelectSql($query);
		
		$existing_domains = array();

		if (!empty($result)) {
			foreach ($result as $r) {
				$existing_domains[$r->id] = $r->domain;
			}
		}

		$now = date("Y-m-d H:i:s");
		
		if (!empty($result)) {
			foreach ($result as $r) {
				
				$syndication_domain_id = $r->id;
				$domain = parse_url($r->api_url);
						
				$query = "SELECT propertys_uid FROM #__jomres_syndication_properties WHERE syndication_domain_id = ".(int)$syndication_domain_id;
				$domain_properties = doSelectSql($query);
				
				$local_domain_properties = array();
				if (!empty($domain_properties)) {
					foreach ($domain_properties as $p) {
						$local_domain_properties[] = $p->propertys_uid;
					}
				}
				var_dump($domain);
				try {
					$client = new GuzzleHttp\Client();
					$response = $client->request('GET', $r->api_url.'core/get_properties'.'/' , ['connect_timeout' => 4 , 'verify' => false , 'http_errors' => false] );

					if ((string)$response->getStatusCode() == "404") {
						$query = "UPDATE  #__jomres_syndication_domains SET 
						`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."' ,
						`approved` = 0 ,
						`unapproval_reason` = 'system'
						WHERE id = ".(int)$syndication_domain_id;
					doInsertSql($query);
					} else {
						
						logging::log_message("Checking for new properties for ".$domain['host'], 'Syndication', 'DEBUG');
						
						$body				= json_decode((string)$response->getBody());

						if (!empty($body->data->properties[0]->properties)){
							$row_str = '';
							foreach ($body->data->properties[0]->properties as $property) {
								if (!in_array( $property->propertys_uid, $local_domain_properties)) {
									$image_exists = $this->check_image_exists($property->thumbnail_location);

									$bang = explode("/",$property->thumbnail_location);
									if ( 
										isset($property->propertys_uid) && 
										isset($property->view_property_url) &&
										isset($property->booking_form_url) &&
										isset($property->thumbnail_location) &&
										parse_url($property->view_property_url) && 
										parse_url($property->booking_form_url) && 
										end($bang) != 'noimage_small.gif' && 
										$image_exists
										)  {
											$row_str .= "
												('".$syndication_domain_id."',
												'".$property->view_property_url."',
												'".$property->booking_form_url."',
												".(int)$property->propertys_uid.",
												'".filter_var($property->name, FILTER_SANITIZE_STRING)."',
												".(int)$property->multi_room_property.",
												'".filter_var($property->lat, FILTER_SANITIZE_STRING)."',
												'".filter_var($property->long, FILTER_SANITIZE_STRING)."',
												'".filter_var($property->metadescription, FILTER_SANITIZE_STRING)."',
												'".filter_var($property->thumbnail_location, FILTER_SANITIZE_STRING)."',
												'".$now."',
												'".$now."',
												'1'),";
									}
								}
							}
							if ($row_str != '' ) {
								$row_str = substr($row_str, 0, -1);
								
								$query = "INSERT INTO #__jomres_syndication_properties (
									`syndication_domain_id`,
									`view_property_url`,
									`booking_form_url`,
									`propertys_uid`,
									`name`,
									`multi_room_property`,
									`lat`,
									`long`,
									`metadescription`,
									`thumbnail_location`,
									`date_added`,
									`last_checked`,
									`approved`
								)
								VALUES ".$row_str;

								doInsertSql($query);
							} else {
								logging::log_message("No new properties found for domain ".$domain['host'], 'Syndication', 'INFO');
							}
						}
					}
				}
				catch (GuzzleHttp\Exception\ClientException $e) {
					$response = $e->getResponse();
					$responseCode = $response->getStatusCode();

					if ( (int)$responseCode == 404 ) {
						if (!in_array( $domain['host'] , $existing_domains )) {
							$query = "
								INSERT INTO #__jomres_syndication_domains SET
									`domain` = '".$domain['host']."',
									`last_checked` =  '".$now."'
									`approved` = 0,
									`unapproval_reason` = 'system'
									";
						} else {
							$query = "
								UPDATE #__jomres_syndication_domains SET
									`last_checked` =  '".$now."',
									`approved` = 0,
									`unapproval_reason` = 'system'
									WHERE id = ".(int)$r->id."
									";
						}
						doInsertSql($query);

						logging::log_message("Tried to get properties information for domain ".$domain['host']." but received 404 message so either the server is offline, or it cannot response to core api requests. Blocking from future requests until recheck time ", 'Syndication', 'INFO');
					}
				}
			}
		}
	}

	private function check_image_exists($image_url) 
	{
		$im = @imagecreatefromjpeg($image_url);
		if($im) {
			imagedestroy($im);
			return true;
		}
		else return false;
	}
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
