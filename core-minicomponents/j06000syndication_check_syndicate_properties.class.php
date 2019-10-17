<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.18.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000syndication_check_syndicate_properties
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$query = "SELECT id , domain , api_url , approved FROM #__jomres_syndication_domains WHERE last_checked  < (NOW() - INTERVAL 1 HOUR) AND approved = 1 ";
		$result = doSelectSql($query);
		
		$existing_domains = array();
		if (!empty($result)) {
			foreach ($result as $r) {
				$checked_properties = array();
				$query = "SELECT id , propertys_uid  FROM #__jomres_syndication_properties WHERE approved = 1 ";
				$local_properties = doSelectSql($query);
				
				if (!empty($local_properties)) { // The get syndicate properties script will handle adding any new properties, so the only thing we need to do here is remove those that aren't in the remote properties array
					try {
						$domain = parse_url($r->api_url);
						
						$client = new GuzzleHttp\Client();
						$response = $client->request('GET', $r->api_url.'core/get_properties/' , ['connect_timeout' => 1 ] );

						$body				= json_decode((string)$response->getBody());
						
						if (empty($body->data->properties[0]->properties)) { // All remote properties have been removed/unpublished, we will remove all local properties
							$query = "DELETE FROM #__jomres_syndication_properties WHERE id = ".(int)$r->id;
							doInsertSql($query);
							logging::log_message("Deleted local propertis for ".$domain['host']." as all properties appear unpublished ", 'Syndication', 'INFO');
						} else {
							$remote_properties = array();
							foreach ($body->data->properties[0]->properties as $remote_property) {
								if (isset($remote_property->propertys_uid)) {
									$remote_properties[] = $remote_property->propertys_uid;
								}
							}

							foreach ($local_properties as $local_property) {
								if (!in_array(  $local_property->propertys_uid , $remote_properties)) {
										$query = "DELETE FROM #__jomres_syndication_properties WHERE id = ".(int)$r->id;
									doInsertSql($query);
									logging::log_message("Deleted local property id ".(int)$r->id." for ".$domain['host']." as it no longer appears in the remote server's properties list ", 'Syndication', 'INFO');
								} else {
									$checked_properties[] = $local_property->id;
								}
							}
							
						}
						
						$query = "UPDATE #__jomres_syndication_properties SET `last_checked` = '".date("Y-m-d H:i:s")."' WHERE id IN (".jomres_implode($checked_properties).") ";
						doInsertSql($query);
					}
					catch (GuzzleHttp\Exception\ClientException $e) {
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

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
