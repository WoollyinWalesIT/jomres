<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
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
 * Seed data for various tables
 *
 **/
$query = "TRUNCATE TABLE `#__jomres_hotel_features_categories`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_hotel_features_categories table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_hotel_features_categories` (`id`, `title`) VALUES
(1, 'Activities'),
(2, 'Amenities'),
(3, 'Accessibility'),
(4, 'Views'),
(5, 'Living Area'),
(6, 'Media & Technology'),
(7, 'Food & Drink'),
(8, 'Parking'),
(9, 'Services'),
(10, 'Bathroom')
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_hotel_features_categories table', 'danger');
}
