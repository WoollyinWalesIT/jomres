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
 * Database creation during installation
 *
 **/
$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_extras` (
	`uid` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`name` VARCHAR(255),
	`desc` TEXT,
	`price` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`auto_select` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`tax_rate` INT UNSIGNED NOT NULL DEFAULT 0,
	`maxquantity` DOUBLE(11,2) NOT NULL DEFAULT 1,
	`chargabledaily` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`validfrom` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`validto` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`include_in_property_lists` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`limited_to_room_type` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`uid`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_extras table', 'danger');
}
