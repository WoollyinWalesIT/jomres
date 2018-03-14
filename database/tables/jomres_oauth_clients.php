<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS  #__jomres_oauth_clients (
	`client_id` VARCHAR(80) NOT NULL, 
	`client_secret` VARCHAR(80), 
	`redirect_uri` VARCHAR(2000), 
	`grant_types` VARCHAR(80), 
	`scope` VARCHAR(2000), 
	`user_id` INT UNSIGNED NOT NULL DEFAULT 0, 
	`identifier` VARCHAR(255),
	CONSTRAINT clients_client_id_pk 
	PRIMARY KEY (client_id),
	INDEX `user_id` (`user_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_oauth_clients table', 'danger');
}
