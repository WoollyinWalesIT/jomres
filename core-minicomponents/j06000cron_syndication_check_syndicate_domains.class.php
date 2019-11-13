<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000cron_syndication_check_syndicate_domains
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		
		$query = "SELECT id , domain , api_url , approved FROM #__jomres_syndication_domains WHERE last_checked  < (NOW() - INTERVAL 1 HOUR)  ";
		$result = doSelectSql($query);
		
		$existing_domains = array();
		if (!empty($result)) {
			foreach ($result as $r) {
				try {
					$client = new GuzzleHttp\Client();
					
					$response = $client->request('GET', $r->api_url.'core/get_properties/' ,  ['connect_timeout' => 1 , 'verify' => false , 'http_errors' => false] );

					if ((string)$response->getStatusCode() == "404") {
							$query = "UPDATE  #__jomres_syndication_domains SET 
							`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."' ,
							`approved` = 0 ,
							`unapproval_reason` = 'system'
							WHERE id = ".(int)$r->id;
						doInsertSql($query);
					} else {
						if ( $r->approved == 0 ) { // It wasn't responding before, but now it is, let's approve it again
							$query = "UPDATE  #__jomres_syndication_domains SET 
								`approved` = 1 ,
								`unapproval_reason` = '',
								`last_checked` = '".date("Y-m-d H:i:s")."'
								WHERE id = ".(int)$r->id;
							doInsertSql($query);
						} else {
							$query = "UPDATE  #__jomres_syndication_domains SET 
								`last_checked` = '".date("Y-m-d H:i:s")."'
								WHERE id = ".(int)$r->id;
							doInsertSql($query);
						}
					}
						

				}
				catch (GuzzleHttp\Exception\ClientException $e) {
					if ((int)$r->approved == 1 ) { // Oops, it's stopped responding. We'll take it offline and check it again in an hour
						$query = "UPDATE  #__jomres_syndication_domains SET 
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

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
