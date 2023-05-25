<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.0
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
/**
 *
 * @package Jomres\Core\Database
 *
 * Database creation during installation
 *
 **/
$query = "
CREATE TABLE IF NOT EXISTS  #__jomres_oauth_authorization_codes (
	`authorization_code` VARCHAR(40) NOT NULL, 
	`client_id` VARCHAR(80) NOT NULL, 
	`user_id` INT UNSIGNED NOT NULL DEFAULT 0, 
	`redirect_uri` VARCHAR(2000), 
	`expires` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01', 
	`scope` VARCHAR(2000), 
	CONSTRAINT auth_code_pk 
	PRIMARY KEY (`authorization_code`),
	INDEX `client_id` (`client_id`),
	INDEX `user_id` (`user_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_oauth_authorization_codes table', 'danger');
}
