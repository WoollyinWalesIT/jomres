<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.7
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
CREATE TABLE IF NOT EXISTS `#__jomres_guests` (
	`guests_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`contracts_contract_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`mos_userid` INT UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`discount` DOUBLE(3,2) NOT NULL DEFAULT 0,
	`vat_number_validated` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`vat_number_validation_response` TEXT,
	`partner_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`blacklisted` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`enc_firstname` BLOB,
	`enc_surname` BLOB,
	`enc_house` BLOB,
	`enc_street` BLOB,
	`enc_town` BLOB,
	`enc_county` BLOB,
	`enc_country` BLOB,
	`enc_postcode` BLOB,
	`enc_tel_landline` BLOB,
	`enc_tel_mobile` BLOB,
	`enc_preferences` BLOB,
	`enc_email` BLOB,
	`enc_vat_number` BLOB,
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
