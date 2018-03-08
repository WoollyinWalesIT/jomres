<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-alpha1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_propertys` (
	`propertys_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`property_name` VARCHAR(255),
	`property_street` VARCHAR(255),
	`property_town` VARCHAR(255),
	`property_region` VARCHAR(255),
	`property_country` CHAR(2) NOT NULL DEFAULT 'GB',
	`property_postcode` VARCHAR(255),
	`property_tel` VARCHAR(255),
	`property_fax` VARCHAR(255),
	`property_email` VARCHAR(255),
	`property_features` VARCHAR(255),
	`property_mappinglink` VARCHAR(2000),
	`property_description` TEXT,
	`property_checkin_times` TEXT,
	`property_area_activities`TEXT,
	`property_driving_directions` TEXT,
	`property_airports` TEXT,
	`property_othertransport` TEXT,
	`property_policies_disclaimers`TEXT,
	`property_key` VARCHAR(255),
	`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`stars` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`superior` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`ptype_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`apikey` VARCHAR(255),
	`lat` VARCHAR(12),
	`long` VARCHAR(12),
	`metatitle` VARCHAR(150),
	`metadescription` VARCHAR(150),
	`metakeywords` VARCHAR(255),
	`timestamp` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`approved` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`property_site_id` VARCHAR(255),
	`last_changed` TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	`permit_number` VARCHAR(255),
	`completed` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`cat_id` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`propertys_uid`),
	INDEX `property_town` (`property_town`),
	INDEX `property_region` (`property_region`),
	INDEX `property_country` (`property_country`),
	INDEX `published` (`published`),
	INDEX `ptype_id` (`ptype_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_propertys table', 'danger');
}
