<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.15.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_rooms` (
	`room_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`room_classes_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`propertys_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`room_features_uid` VARCHAR(255),
	`room_name` VARCHAR(255),
	`room_number` VARCHAR(255),
	`room_floor` VARCHAR(255),
	`max_people` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
	`singleperson_suppliment` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`tagline` VARCHAR(255),
	`description` TEXT,
	PRIMARY KEY(`room_uid`),
	INDEX `room_classes_uid` (`room_classes_uid`),
	INDEX `propertys_uid` (`propertys_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_rooms table', 'danger');
}
