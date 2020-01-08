<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.3
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
$query = "TRUNCATE TABLE `#__jomres_room_classes`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_room_classes table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_room_classes` (`room_classes_uid`, `room_class_abbv`, `room_class_full_desc`, `image`, `property_uid`) VALUES
(1, 'Room Double beds', '', 'double.png', '0'),
(2, 'Room Twin beds', '', 'twin.png', '0'),
(3, 'Room Single', '', 'single.png', '0'),
(4, 'Room 4 Poster bed', '', 'fourposter.png', '0'),
(5, '1 Bedroom', '', '1bedroom.png', '0'),
(6, '2 Bedrooms', '', '2bedrooms.png', '0'),
(7, '3 Bedrooms', '', '3bedrooms.png', '0'),
(8, '4 Bedrooms', '', '4bedrooms.png', '0'),
(9, '5 Bedrooms', '', '5bedrooms.png', '0'),
(10, '6+ Bedrooms', '', '6plusbedrooms.png', '0'),
(11, 'Tent pitch 1 person ', '', 'camping_1bivi_pitch.png', '0'),
(12, 'Tent pitch 2 person ', '', 'camping_2_man_tent_pitch.png', '0'),
(13, 'Tent pitch 3 person ', '', 'camping_3_man_tent_pitch.png', '0'),
(14, 'Tent pitch 4 person ', '', 'camping_4_man_tent_pitch.png', '0'),
(15, 'Tent pitch 6+ person', '', 'camping_6_man_tent_pitch.png', '0'),
(16, 'Car rental Hatchback', '', 'car_rental_hatchback.png', '0'),
(17, 'Car rental Luxury', '', 'car_rental_luxury.png', '0'),
(18, 'Car rental Minivan', '', 'car_rental_peoplecarrier.png', '0'),
(19, 'Car rental Saloon', '', 'car_rental_saloon.png', '0'),
(20, 'Car rental Sportscar', '', 'car_rental_sportscar.png', '0'),
(21, 'Tent pitch Caravan', '', 'camping_caravan_pitch.png', '0'),
(22, 'Yacht 2 berth', '', 'yacht_2_berth.png', '0'),
(23, 'Yacht 4 berth', '', 'yacht_4_berth.png', '0'),
(24, 'Yacht 6 berth', '', 'yacht_6_berth.png', '0'),
(25, 'Yacht 8+ berth', '', 'yacht_8_berth.png', '0');
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_room_classes table', 'danger');
}
