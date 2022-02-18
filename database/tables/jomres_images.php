<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
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
CREATE TABLE IF NOT EXISTS  #__jomres_images (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`resource_type` VARCHAR(100),
	`resource_id` VARCHAR(255),
	`filename` VARCHAR(255),
	`version` VARCHAR(25),
	PRIMARY KEY (`id`),
	INDEX `property_uid` (`property_uid`),
	INDEX `resource_type` (`resource_type`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_images table', 'danger');
}
