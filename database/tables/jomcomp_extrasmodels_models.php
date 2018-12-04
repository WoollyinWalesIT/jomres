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
CREATE TABLE IF NOT EXISTS `#__jomcomp_extrasmodels_models` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`extra_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`model` INT UNSIGNED NOT NULL DEFAULT 0,
	`params` TEXT,
	`force` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`),  
	INDEX `extra_id` (`extra_id`), 
	INDEX `property_uid` (`property_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomcomp_extrasmodels_models table', 'danger');
}
