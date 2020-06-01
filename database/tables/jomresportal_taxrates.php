<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.22.0
 *
 * @copyright	2005-2020 Vince Wooll
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
CREATE TABLE IF NOT EXISTS `#__jomresportal_taxrates` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`code` VARCHAR(255),
	`description` VARCHAR(255),
	`rate` DOUBLE(11, 2) NOT NULL DEFAULT 0,
	`is_eu_country` TINYINT(1) NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomresportal_taxrates table', 'danger');
}
