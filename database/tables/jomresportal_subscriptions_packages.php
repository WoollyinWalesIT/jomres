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
CREATE TABLE IF NOT EXISTS `#__jomresportal_subscriptions_packages` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255),
	`description` VARCHAR(255),
	`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`frequency` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 365,
	`full_amount` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`tax_code_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`currencycode` CHAR(3) NOT NULL DEFAULT 'GBP',
	`renewal_price` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`params` TEXT,
	PRIMARY KEY(`id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_subscriptions_packages table', 'danger');
}
