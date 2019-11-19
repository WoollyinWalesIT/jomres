<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
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
 * Database modification during updates
 *
 **/
$query = "
	ALTER TABLE `#__jomres_room_classes` CHANGE `room_class_full_desc` `room_class_full_desc` TEXT NULL DEFAULT NULL;
	";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to modify the #__jomres_room_classes room_class_full_desc column', 'danger');
}
