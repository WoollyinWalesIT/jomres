<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_reviews_reports` (
	`report_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`rating_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`user_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`report` TEXT,
	`report_date` DATETIME NOT NULL DEFAULT '1970-01-01 00:00:01',
	PRIMARY KEY (`report_id`),
	INDEX `rating_id` (`rating_id`)
	)
	ENGINE = MyISAM 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_reviews_reports table', 'danger');
}
