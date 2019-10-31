<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_settings` (
	`uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`akey` VARCHAR(100),
	`value`	VARCHAR(255),
	PRIMARY KEY	(`uid`),
	UNIQUE INDEX `jomres_settings` (`property_uid`, `akey`),
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_settings table', 'danger');
}
