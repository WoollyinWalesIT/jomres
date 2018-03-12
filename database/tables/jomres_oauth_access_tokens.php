<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2.0
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS  #__jomres_oauth_access_tokens (
	`access_token` VARCHAR(40) NOT NULL, 
	`client_id` VARCHAR(80) NOT NULL, 
	`user_id` INT UNSIGNED NOT NULL DEFAULT 0, 
	`expires` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01', 
	`scope` VARCHAR(2000), 
	CONSTRAINT access_token_pk 
	PRIMARY KEY (`access_token`),
	INDEX `client_id` (`client_id`),
	INDEX `user_id` (`user_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_oauth_access_tokens table', 'danger');
}
