<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.24.0
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
 * Database creation during installation
 *
 **/
$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_room_bookings` (
	`room_bookings_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`room_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`date` CHAR(10),
	`contract_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`black_booking` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`reception_booking` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`internet_booking` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`room_bookings_uid`),
	INDEX `room_uid` (`room_uid`),
	INDEX `date` (`date`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_room_bookings table', 'danger');
}
