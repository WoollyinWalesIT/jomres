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
CREATE TABLE IF NOT EXISTS `#__jomcomp_notes` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`contract_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`note` TEXT,
	`timestamp` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`),
	INDEX `contract_uid` (`contract_uid`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomcomp_notes table', 'danger');
}
