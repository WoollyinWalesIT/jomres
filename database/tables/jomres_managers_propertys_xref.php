<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
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
CREATE TABLE IF NOT EXISTS `#__jomres_managers_propertys_xref` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`manager_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`id`),
	INDEX `manager_id` (`manager_id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_managers_propertys_xref table', 'danger');
}
