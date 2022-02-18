<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.2.2
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
 * Database modification during updates
 *
 **/

	$query = "ALTER TABLE `#__jomres_rooms` ADD `max_adults` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 2 ";
	doInsertSql($query,"");

	$query = "ALTER TABLE `#__jomres_rooms` ADD `max_children` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 0 ";
	doInsertSql($query,"");

	$query = "ALTER TABLE `#__jomres_rooms` ADD `max_occupancy` SMALLINT(5) UNSIGNED NOT NULL DEFAULT 2 ";
	doInsertSql($query,"");

	$query = "SELECT room_uid , max_people FROM #__jomres_rooms ";
	$all_rooms = doSelectSql($query);
	if (!empty($all_rooms)) {
		foreach ($all_rooms as $room ) {
			$query = "UPDATE `#__jomres_rooms` SET
				`max_adults` = ".$room->max_people." , 
				`max_occupancy` = ".$room->max_people." 
				WHERE room_uid = ".$room->room_uid;
			doInsertSql($query);
		}
	}
