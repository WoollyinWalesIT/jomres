<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.5
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
 * Database modification during updates
 *
 **/
$query = "
	ALTER TABLE `#__jomres_reviews_ratings` CHANGE `rating` `rating` FLOAT(2) NULL DEFAULT NULL;
	";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to modify the #__jomres_reviews_ratings_replies table', 'danger');
}
