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
CREATE TABLE IF NOT EXISTS `#__jomcomp_cron` (
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
	`job` VARCHAR(100) NOT NULL,
	`schedule` CHAR(2) NOT NULL DEFAULT 'D',
	`last_ran` INT(12) UNSIGNED,
	`parameters` TEXT,
	`locked` TINYINT(1) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY ( `id` )
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomcomp_cron table', 'danger');
}
