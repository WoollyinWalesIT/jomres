<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 *
 * @package Jomres\Core\Database
 *
 * Seed data for various tables
 *
 **/
$query = "TRUNCATE TABLE `#__jomres_oauth_clients`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_oauth_clients table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_oauth_clients` (`client_id`, `client_secret`, `redirect_uri`, `grant_types`, `scope`, `user_id`) VALUES 
('system', '".createNewAPIKey()."', '', NULL, '*', 4294967295);
";
	
if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert default system user to #__jomres_oauth_clients table', 'danger');
}

