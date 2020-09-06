<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.4
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
$query = "TRUNCATE TABLE `#__jomres_ptypes`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_ptypes table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_ptypes` (`id`, `ptype`, `ptype_desc`, `published`, `order`, `mrp_srp_flag`, `marker`, `has_stars`) VALUES
(1, 'Hotel', 'propertyrental', 1, 0, 0, 'building.png', 1),
(2, 'Yacht', 'yacht', 1, 0, 1, 'free-map-marker-icon-blue.png', 1),
(3, 'Car', 'car', 1, 0, 1, 'free-map-marker-icon-red.png', 0),
(4, 'Camp Site', 'campsite', 1, 0, 0, 'free-map-marker-icon-red.png', 1),
(5, 'Bed and Breakfast', 'propertyrental', 1, 0, 0, 'free-map-marker-icon-red.png', 1),
(6, 'Villa', 'propertyrental', 1, 0, 1, 'free-map-marker-icon-red.png', 1),
(7, 'Apartment', 'propertyrental', 1, 0, 1, 'free-map-marker-icon-red.png', 0),
(8, 'Cottage', 'propertyrental', 1, 0, 1, 'free-map-marker-icon-red.png', 1),
(9, 'Tour', 'tour', 1, 0, 3, 'free-map-marker-icon-red.png', 0),
(10, 'For Sale', 'realestate', 1, 0, 4, 'free-map-marker-icon-red.png', 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_ptypes table', 'danger');
}
