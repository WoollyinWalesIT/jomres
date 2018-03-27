<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_partners_discounts` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`partner_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`property_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`valid_from` DATE NOT NULL DEFAULT '1970-01-01 00:00:01',
	`valid_to` DATE NOT NULL DEFAULT '1970-01-01 00:00:01',
	`discount` DOUBLE(11,2) NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`),
	INDEX `partner_id` (`partner_id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_partners_discounts table', 'danger');
}
