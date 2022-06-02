<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.4.0 (Platty Joobs edition)
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
$query = "SHOW COLUMNS FROM #__jomres_rates LIKE 'extra_guests_price'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
	{
	$query = "ALTER TABLE `#__jomres_rates` ADD `extra_guests_price` DOUBLE(11,2) NOT NULL DEFAULT 0 ";
	doInsertSql($query,"");
	}

$query = "SHOW COLUMNS FROM #__jomres_rates LIKE 'modifiers'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
{
	$query = "ALTER TABLE `#__jomres_rates` ADD `modifiers` TEXT ";
	doInsertSql($query,"");
}