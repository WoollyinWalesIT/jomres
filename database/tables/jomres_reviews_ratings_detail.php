<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "
CREATE TABLE IF NOT EXISTS `#__jomres_reviews_ratings_detail` (
	`detail_id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
	`item_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`rating_id` INT UNSIGNED NOT NULL DEFAULT 0,
	`detail_rating` TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`detail_id`),
	INDEX `item_id` (`item_id`)
	)
	ENGINE = InnoDB 
	DEFAULT CHARSET = utf8mb4 
	COLLATE = utf8mb4_unicode_ci;
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to create the #__jomres_reviews_ratings_detail table', 'danger');
}
