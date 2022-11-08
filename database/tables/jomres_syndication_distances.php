<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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
CREATE TABLE IF NOT EXISTS `#__jomres_syndication_distances` 
( 
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `property_id` INT UNSIGNED NOT NULL DEFAULT 0, 
    `syndication_id` INT UNSIGNED NOT NULL DEFAULT 0, 
    `distance` INT UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY(`id`),
	INDEX(`property_id`)
) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_unicode_ci; 
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_syndication_properties table', 'danger');
}
