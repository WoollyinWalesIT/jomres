<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
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
CREATE TABLE IF NOT EXISTS `#__jomres_customertypes` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`type` VARCHAR(255),
	`notes` VARCHAR(255),
	`maximum` INT UNSIGNED NOT NULL DEFAULT 1,
	`is_percentage` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`posneg` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`variance` DOUBLE(11,2),
	`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`order` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
	`is_child` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`id`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_customertypes table', 'danger');
}
