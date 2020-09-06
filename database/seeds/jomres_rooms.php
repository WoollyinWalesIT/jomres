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
$query = "TRUNCATE TABLE `#__jomres_rooms`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_rooms table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_rooms` (`room_uid`, `room_classes_uid`, `propertys_uid`, `room_features_uid`, `room_name`, `room_number`, `room_floor`, `max_people`, `singleperson_suppliment`, `tagline`, `description`) VALUES
(1, 1, 1, NULL, 'The Pitt', '1', '1', 2, 0, NULL, NULL),
(2, 1, 1, NULL, 'The Hole', '2', '1', 2, 0, NULL, NULL);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_rooms table', 'danger');
}
