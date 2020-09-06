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
 *
 * @package Jomres\Core\Database
 *
 * Database modification during updates
 *
 **/
$manager_uid = 0;
$url = 'App Server'; // We don't need to set a url, the endpoint will be coded into the webhook script.
		
jr_import("webhooks");
$webhooks = new webhooks( $manager_uid );
$all_webhooks = $webhooks->get_all_webhooks();
if (!empty($all_webhooks)) {
    foreach ( $all_webhooks as $key=>$val ) {
		if ($val['settings']['url'] == $url ) {
			return true; // A webhook for this site already exists, we will not create a new one
			}
		}
    }

$integration_id = 0;

$webhooks->set_setting( $integration_id , 'url' , $url );
$webhooks->set_setting( $integration_id , 'authmethod' , 'app_server' );
$webhooks->webhooks[$integration_id ]['enabled'] = 1;

$webhooks->commit_integration($integration_id);

