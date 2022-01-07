<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * * @version Jomres 10.1.0
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
CREATE TABLE IF NOT EXISTS `#__jomres_ptypes` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`ptype` VARCHAR(255),
	`ptype_desc` VARCHAR(255),
	`published` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	`order` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0,
	`mrp_srp_flag` TINYINT(1) UNSIGNED NOT NULL DEFAULT 2,
	`marker` VARCHAR(255) NOT NULL DEFAULT 'free-map-marker-icon-red.png',
	`has_stars` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1,
	PRIMARY KEY (`id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_ptypes table', 'danger');
}
