<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.4
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
$query = "
CREATE TABLE IF NOT EXISTS  #__jomres_gdpr_optins (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`date_time` datetime default NULL ,
	`user_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`ip` varchar( 255 ) default NULL ,
	`optin_content` TEXT,
	`optedin` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_gdpr_optins table', 'danger');
}
