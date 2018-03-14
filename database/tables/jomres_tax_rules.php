<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_tax_rules` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`tax_rate_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`country_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`region_id` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY	(`id`),
	INDEX `country_id` (`country_id`),
	INDEX `region_id` (`region_id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_tax_rules table', 'danger');
}
