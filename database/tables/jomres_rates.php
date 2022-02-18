<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 10.2.1
 *
 * @copyright	2005-2022 Vince Wooll
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
CREATE TABLE IF NOT EXISTS `#__jomres_rates` (
	`rates_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`rate_title` VARCHAR(255),
	`rate_description` TEXT,
	`validfrom` CHAR(10),
	`validto` CHAR(10),
	`roomrateperday` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`extra_guests_price` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`modifiers` TEXT,
	`mindays` SMALLINT(5),
	`maxdays` SMALLINT(5),
	`minpeople` SMALLINT(5),
	`maxpeople` SMALLINT(5),
	`roomclass_uid`	INT UNSIGNED NOT NULL DEFAULT 0,
	`ignore_pppn` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`allow_ph` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`allow_we` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`weekendonly` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`validfrom_ts` DATE NOT NULL DEFAULT '1970-01-01',
	`validto_ts` DATE NOT NULL DEFAULT '1970-01-01',
	`dayofweek` TINYINT(1) UNSIGNED NOT NULL DEFAULT 7,
	`minrooms_alreadyselected` TINYINT(3) NOT NULL DEFAULT 0,
	`maxrooms_alreadyselected` TINYINT(3) NOT NULL DEFAULT 100,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`rates_uid`),
	INDEX `roomclass_uid` (`roomclass_uid`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_rates table', 'danger');
}
