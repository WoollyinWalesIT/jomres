<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_guests` (
	`guests_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`contracts_contract_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`mos_userid` INT UNSIGNED NOT NULL DEFAULT 0,
	`firstname` VARCHAR(255),
	`surname` VARCHAR(255),
	`house` VARCHAR(255),
	`street` VARCHAR(255),
	`town` VARCHAR(255),
	`county` VARCHAR(255),
	`country` CHAR(2) NOT NULL DEFAULT 'GB',
	`postcode` VARCHAR(255),
	`tel_landline` VARCHAR(255),
	`tel_mobile` VARCHAR(255),
	`tel_fax` VARCHAR(255),
	`preferences` TEXT,
	`car_regno` VARCHAR(20),
	`ccard_no` BLOB,
	`ccard_issued` BLOB,
	`ccard_expiry` BLOB,
	`ccard_iss_no` BLOB,
	`ccard_name` BLOB,
	`ccv` BLOB,
	`type` BLOB,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`email` VARCHAR(100),
	`discount` DOUBLE(3,2) NOT NULL DEFAULT 0,
	`vat_number` VARCHAR(25),
	`vat_number_validated` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`vat_number_validation_response` TEXT,
	`partner_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`blacklisted` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`guests_uid`),
	INDEX `mos_userid` (`mos_userid`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_guests table', 'danger');
}
