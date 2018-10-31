<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.14.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_contracts` (
	`contract_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`arrival` CHAR(10),
	`departure` CHAR(10),
	`rates_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`guest_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`rate_rules` TEXT,
	`rooms_tariffs` VARCHAR(255),
	`deposit_paid` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`contract_total` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`deposit_ref` VARCHAR(255),
	`payment_ref` VARCHAR(255),
	`special_reqs` TEXT,
	`deposit_required` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`newsletters` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`currency` CHAR(3) NOT NULL DEFAULT 'GBP',
	`adults` INT UNSIGNED NOT NULL DEFAULT 0,
	`children` INT UNSIGNED NOT NULL DEFAULT 0,
	`date_range_string` TEXT,
	`booked_in` TINYINT(1) NOT NULL DEFAULT 0,
	`booked_out` TINYINT(1) NOT NULL DEFAULT 0,
	`true_arrival` CHAR(10),
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`cot_required` TINYINT(1) NOT NULL DEFAULT 0,
	`single_person_suppliment` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`multi_room_booking` TINYINT(1) NOT NULL DEFAULT 0,
	`extras` VARCHAR(255),
	`extrasquantities` VARCHAR(255),
	`extrasvalue` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`tax` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`tag` VARCHAR(255),
	`timestamp` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`room_total` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`discount` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`currency_code` CHAR(3) NOT NULL DEFAULT 'GBP',
	`cancelled` TINYINT(1) NOT NULL DEFAULT 0,
	`cancelled_timestamp` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`cancelled_reason` VARCHAR(255),
	`discount_details` TEXT,
	`username` VARCHAR(255),
	`coupon_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`bookedout` TINYINT(1) NOT NULL DEFAULT 0,
	`bookedout_timestamp` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`invoice_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`channel_manager_booking` TINYINT(1) NOT NULL DEFAULT 0,
	`approved` TINYINT(1) NOT NULL DEFAULT 1,
	`booking_data_archive_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`secret_key` VARCHAR(255),
	`secret_key_used` TINYINT(1) NOT NULL DEFAULT 1,
	`booking_language` CHAR(5) NOT NULL DEFAULT 'en-GB',
	`last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`referrer` VARCHAR(255) NOT NULL DEFAULT 'Jomres',
	PRIMARY KEY(`contract_uid`),
	INDEX `guest_uid` (`guest_uid`),
	INDEX `property_uid` (`property_uid`),
	INDEX `cancelled` (`cancelled`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_contracts table', 'danger');
}
