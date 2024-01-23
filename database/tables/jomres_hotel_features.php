<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
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
CREATE TABLE IF NOT EXISTS `#__jomres_hotel_features` (
	`hotel_features_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`hotel_feature_abbv` VARCHAR(255),
	`hotel_feature_full_desc` VARCHAR(255),
	`image` VARCHAR(255),
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`ptype_xref` TEXT,
	`cat_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`include_in_filters` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	PRIMARY KEY(`hotel_features_uid`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_hotel_features table', 'danger');
}
