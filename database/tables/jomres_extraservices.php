<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.8
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_extraservices` (
	`extraservice_uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`service_description` VARCHAR(255),
	`service_value` VARCHAR(255),
	`contract_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`property_uid` INT UNSIGNED NOT NULL DEFAULT 0,
	`tax_rate_val` DOUBLE(11,2) NOT NULL DEFAULT 0,
	`tax_code` INT UNSIGNED NOT NULL DEFAULT 1,
	`service_qty` DOUBLE(11,2) NOT NULL DEFAULT 1,
	PRIMARY KEY	(`extraservice_uid`),
	INDEX `contract_uid` (`contract_uid`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_extraservices table', 'danger');
}
