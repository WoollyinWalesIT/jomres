<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.0
 *
 * @copyright	2005-2019 Vince Wooll
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
$query = "TRUNCATE TABLE `#__jomres_hotel_features`;";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to truncate #__jomres_hotel_features table', 'danger');
	
	return;
}

$query = "
INSERT INTO `#__jomres_hotel_features` (`hotel_features_uid`, `hotel_feature_abbv`, `hotel_feature_full_desc`, `image`, `property_uid`, `ptype_xref`, `cat_id`, `include_in_filters`) VALUES
(3, 'Airport', 'Close to the airport', 'airport_nearby.png', '0', '0', 0, 1),
(4, 'Minibar', 'Minibar in room', 'air_conditioning.png', '0', '1', 0, 1),
(5, 'All Inclusive', 'All inclusive rates available', 'allinc.png', '0', 'a:0:{}', 9, 1),
(6, 'Family Friendly', 'Children Welcome', 'baby_friendly.png', '0', '1', 0, 1),
(7, 'Balcony', 'Some rooms have balconies', 'balcony.png', '0', 'a:1:{i:0;s:1:\"1\";}', 2, 1),
(8, 'Waiter', 'Waiter Service', 'bar.png', '0', '1', 0, 1),
(9, 'Bar', 'Licensed bar on premises', 'bar2.png', '0', 'a:1:{i:0;s:1:\"1\";}', 2, 1),
(10, 'Bath', 'Bath in every room', 'bath_tub.png', '0', 'a:1:{i:0;s:1:\"1\";}', 2, 1),
(11, 'Fireplace', 'Enjoy the ambiance of a natural fire', 'bbq_facilities.png', '0', '1', 0, 1),
(12, 'Beach', 'Close to the beach', 'beach.png', '0', 'a:0:{}', 4, 1),
(13, 'Birdwatching', 'Bird hide onsite or nearby', 'bird_hide.png', '0', 'a:0:{}', 1, 1),
(14, 'Boardwalk', 'Boardwalk on site', 'board_walk.png', '0', 'a:1:{i:0;s:1:\"4\";}', 2, 1),
(15, 'Campfires', 'Campfires allowed', 'campfire.png', '0', '4', 0, 1),
(16, 'Tents', 'Tents for hire', 'camping_fees.png', '0', '4', 0, 1),
(17, 'Canoeing', 'Canoeing/Kayaking', 'canoeing.png', '0', '0', 0, 1),
(18, 'Caravans', 'Caravanning facilities', 'caravan.png', '0', '4', 0, 1),
(19, 'Car rental', 'Car rental can be arranged', 'car_rental.png', '0', '1', 0, 1),
(20, 'Casino', 'Casino on premesis', 'casino.png', '0', '1', 0, 1),
(21, 'Clubbing', 'Nightclub onsite or nearby', 'CDplayer.png', '0', '1', 0, 1),
(22, 'Safe', 'Safe available', 'hotel_safe.png', '0', '1', 0, 1),
(23, 'Conference', 'Conference facilities', 'conference_facilities.png', '0', '1', 0, 1),
(24, 'Cycle path', 'Cycle paths nearby', 'cycle_paths.png', '0', '0', 0, 1),
(25, 'Disabled access', 'Disabled facilites available', 'disabled_access.png', '0', '1', 0, 1),
(26, 'Disabled toilet faci', 'Disabled WC available', 'disabled_facilities.png', '0', 'a:0:{}', 3, 1),
(27, 'No dogs', 'Dogs not welcome', 'dogs_not_permitted.png', '0', '0', 0, 1),
(28, 'Dogs welcome', 'Dog friendly ', 'dogs_permitted.png', '0', '0', 0, 1),
(29, 'DVD', 'Rooms have DVD players', 'DVDVideo.png', '0', '1', 0, 1),
(30, 'Elevator', 'Elevator', 'elevator.png', '0', '1', 0, 1),
(31, 'English Heritage', 'English Heritage sites nearby', 'englishheritage.png', '0', '0', 0, 1),
(32, '24hr service', '24hr Room service', '24hour.png', '0', 'a:2:{i:0;s:1:\"5\";i:1;s:1:\"1\";}', 9, 1),
(33, 'Bureau de change', 'Bureau de change available onsite', 'fees.png', '0', '1', 0, 1),
(34, 'Bureau de change', 'Bureau de change available onsite', 'fees_euro.png', '0', 'a:1:{i:0;s:1:\"1\";}', 9, 1),
(35, 'Bureau de change', 'Bureau de change available onsite', 'fees_pound.png', '0', 'a:1:{i:0;s:1:\"1\";}', 9, 1),
(36, 'Fishing', 'Fishing available onsite or nearby', 'fishing.png', '0', '0', 0, 1),
(37, 'Gourmet Restaurant', 'Gourmet Restraunt onsite', 'gastronomicrestaurant.png', '0', '1', 0, 1),
(38, 'Golf', 'Golf course on site or nearby', 'golf.png', '0', '0', 0, 1),
(39, 'Tours', 'Tours depart from this location', 'guided_tours.png', '0', '0', 0, 1),
(40, 'Gym', 'Gymnasium onsite', 'gym2.png', '0', '1', 0, 1),
(41, 'Hairdresser', 'Hairdresser onsite', 'hairdresser.png', '0', '1', 0, 1),
(42, 'Hairdryer', 'Hair dryer in every room', 'hairdryer.png', '0', '1', 0, 1),
(43, 'Haunted', 'Ghoulies and Ghosties in the rafters', 'haunted.png', '0', '0', 0, 1),
(44, 'Helipad', 'Helicopter pad', 'helicopterpad.png', '0', '1', 0, 1),
(45, 'Hiking', 'Popular hiking area', 'hiking.png', '0', '0', 0, 1),
(46, 'Information', 'Information services available onsite', 'info2.png', '0', '0', 0, 1),
(47, 'WWW', 'Internet access available', 'internet.png', '0', 'a:1:{i:0;s:1:\"1\";}', 2, 1),
(48, 'Beverages', 'Beverages in all rooms', 'in_room_teacoffee.png', '0', 'a:1:{i:0;s:1:\"1\";}', 7, 1),
(49, 'Iron', 'Iron in every room', 'iron.png', '0', '1', 0, 1),
(50, 'Jacuzzi', 'Jacuzzi onsite', 'jacuzzi.png', '0', '1', 0, 1),
(51, 'National Trust', 'National Trust', 'nationaltrust.png', '0', '0', 0, 1),
(52, 'No smoking', 'Smoke free establishment', 'no_smoking.png', '0', '0', 0, 1),
(53, 'Owner managed', 'Owner managed property', 'Ownermanaged.png', '0', '0', 0, 1),
(54, 'Parking', 'Parking available', 'parking.png', '0', 'a:1:{i:0;s:1:\"1\";}', 8, 1),
(55, 'Pets welcome', 'Pet friendly', 'pets_welcome.png', '0', '0', 0, 1),
(56, 'Picnic area', 'Picnicers welcome', 'picnic_area.png', '0', '0', 0, 1),
(57, 'Play area', 'Children\'s play area onsite', 'play_area.png', '0', '0', 0, 1),
(58, 'Pool', 'Swiming', 'pool.png', '0', '0', 0, 1),
(59, 'Quiet/Rural ', 'Property is in a quiet and/or rural location', 'quietlocation.png', '0', '0', 0, 1),
(60, 'Ranger', 'Ranger station here', 'ranger.png', '0', '0', 0, 1),
(61, 'Restaurant', 'Restraunt onsite', 'restraunt2.png', '0', '1', 0, 1),
(62, 'Pony Trekking', 'Pony trekking onsite or nearby', 'riding.png', '0', '0', 0, 1),
(63, 'Telephone', 'Telephone in every room', 'room_telephone.png', '0', '1', 0, 1),
(64, 'Water sports', 'Water sport facilities onsite or nearby', 'sailing.png', '0', '0', 0, 1),
(65, 'Scuba', 'Scuba diving arranged', 'scuba.png', '0', '0', 0, 1),
(66, 'Scenic views', 'Scenic views ', 'scenicviews.png', '0', '0', 0, 1),
(67, 'Showers', 'showers in every room', 'shower_only.png', '0', '1', 0, 1),
(68, 'Shuttle', 'Shuttle service to airport and nightclub district available', 'shuttle_service.png', '0', '1', 0, 1),
(69, 'Winter Sports', 'Winter Sports facilities available', 'Skionsite.png', '0', '1', 0, 1),
(70, 'Smoking', 'Smokers welcome', 'smokers_welcome.png', '0', '0', 0, 1),
(71, 'Snorkelling', 'Snorkelling suitable here', 'snorkelling.png', '0', '0', 0, 1),
(72, 'Sunbed', 'Sunbed onsite', 'sunbed.png', '0', '1', 0, 1),
(73, 'Tennis courts', 'Tennis court onsite or nearby', 'tennis.png', '0', '0', 0, 1),
(74, 'Television', 'Television in every room', 'tv_in_room.png', '0', '1', 0, 1),
(75, 'Weddings', 'Weddings catered for', 'weddings.png', '0', '1', 0, 1),
(76, 'Whales', 'Whale watching', 'whalewatching.png', '0', '0', 0, 1),
(77, 'Wifi', 'Wifi available', 'wifi.png', '0', 'a:1:{i:0;s:1:\"1\";}', 5, 1),
(78, 'Christmas', 'Christmas parties catered for', 'xmas_partys.png', '0', '1', 0, 1),
(79, 'Zodiac Excursions', 'Zodiac excursions can be arranged from these premesis', 'zodiacexcursions.png', '0', '0', 0, 1),
(80, 'Private Garden', 'Private garden for your enjoyment', 'garden.png', '0', '0', 0, 1),
(81, 'Microwave', 'Property has a microwave that can be used by the residents', 'microwaves.png', '0', '1', 0, 1);
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to insert sample data in the #__jomres_hotel_features table', 'danger');
}
