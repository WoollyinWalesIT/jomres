<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
 *
 * @copyright	2005-2022 Vince Wooll
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

class j06000cron_syndication_check_syndicate_domains
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
		
		$query = "SELECT id , domain , api_url , approved , last_checked FROM #__jomres_syndication_domains WHERE last_checked  < (NOW() - INTERVAL 1 HOUR) LIMIT 20  ";
		$result = doSelectSql($query);
//var_dump($result);
		$existing_domains = array();
		if (!empty($result)) {
			foreach ($result as $r) {
				try {
					$client = new GuzzleHttp\Client();

					$response = $client->request('GET', $r->api_url.'core/get_properties/' ,  ['connect_timeout' => 3 , 'verify' => false , 'http_errors' => false] );

					if ( (string)$response->getStatusCode() == "404" || (string)$response->getStatusCode() == "0" ) {

						$query = "UPDATE  #__jomres_syndication_domains SET 
							`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 day") )."' ,
							`approved` = 0 ,
							`unapproval_reason` = 'api 404'
							WHERE id = ".(int)$r->id;

						doInsertSql($query);

						$query = "UPDATE #__jomres_syndication_properties SET `approved` = 0 , `unapproval_reason` = 'system' WHERE syndication_domain_id = ".(int)$r->id;
						doInsertSql($query);

					} else {
						if ( $r->approved == 0 ) { // It wasn't responding before, but now it is, let's approve it again
							$query = "UPDATE  #__jomres_syndication_domains SET 
								`approved` = 1 ,
								`unapproval_reason` = '',
								`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 day") )."'
								WHERE id = ".(int)$r->id;
							doInsertSql($query);

							$query = "UPDATE #__jomres_syndication_properties SET 
								`approved` = 1 , 
								`unapproval_reason` = '',
								`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 day") )."'
								WHERE syndication_domain_id = ".(int)$r->id;
							doInsertSql($query);
						} else {
							$query = "UPDATE  #__jomres_syndication_domains SET 
								`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 day") )."'
								WHERE id = ".(int)$r->id;
							doInsertSql($query);
						}
					}
					//echo $query;
				}
				catch (GuzzleHttp\Exception\RequestException $e) {

					if ((int)$r->approved == 1 ) { // Oops, it's stopped responding. We'll take it offline and check it again in an hour
						$query = "UPDATE  #__jomres_syndication_domains SET 
							`approved` = 0 ,
							`unapproval_reason` = 'system',
							`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 day") )."'
							WHERE id = ".(int)$r->id;
						doInsertSql($query);

						$query = "UPDATE #__jomres_syndication_properties SET `approved` = 0 , `unapproval_reason` = 'system' WHERE syndication_domain_id = ".(int)$r->id;
						doInsertSql($query);

					} else { // It's still not responding
						$query = "UPDATE  #__jomres_syndication_domains SET 
							`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."'
							WHERE id = ".(int)$r->id;
						doInsertSql($query);
					}
				} catch (\Exception $e) {
					if ((int)$r->approved == 1 ) { // Oops, it's stopped responding. We'll take it offline and check it again in an hour
						$query = "UPDATE  #__jomres_syndication_domains SET 
							`approved` = 0 ,
							`unapproval_reason` = 'system',
							`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 hour") )."'
							WHERE id = ".(int)$r->id;
						doInsertSql($query);

						$query = "UPDATE #__jomres_syndication_properties SET `approved` = 0 , `unapproval_reason` = 'system' WHERE syndication_domain_id = ".(int)$r->id;
						doInsertSql($query);

					} else { // It's still not responding
						$query = "UPDATE  #__jomres_syndication_domains SET 
							`last_checked` = '".date("Y-m-d H:i:s" , strtotime("+1 year") )."'
							WHERE id = ".(int)$r->id;
						doInsertSql($query);
					}
				}
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
