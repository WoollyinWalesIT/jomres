<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_guest_profile` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`cms_user_id` INT UNSIGNED NOT NULL DEFAULT 0,
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
	`email` VARCHAR(100),
	`vat_number` CHAR(25),
	`vat_number_validated` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`vat_number_validation_response` TEXT,
	`params` TEXT, 
	PRIMARY KEY(`id`),
	INDEX `cms_user_id` (`cms_user_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_guest_profile table', 'danger');
}
