<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_managers` (
	`manager_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`userid` INT UNSIGNED NOT NULL DEFAULT 0,
	`access_level` SMALLINT(2) UNSIGNED NOT NULL DEFAULT 0,
	`currentproperty` INT UNSIGNED NOT NULL DEFAULT 0,
	`apikey` VARCHAR(255),
	`suspended` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`simple_configuration` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`users_timezone` VARCHAR(100) NOT NULL DEFAULT 'Europe/Berlin',
	`last_active` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	PRIMARY KEY	(`manager_uid`),
	INDEX `userid` (`userid`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_managers table', 'danger');
}
