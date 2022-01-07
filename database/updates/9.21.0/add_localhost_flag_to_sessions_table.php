<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* * @version Jomres 10.1.1
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
$query = "SHOW COLUMNS FROM #__jomres_sessions LIKE 'is_localhost'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
	{
	$query = "ALTER TABLE `#__jomres_sessions` ADD `is_localhost` TINYINT(1) NOT NULL DEFAULT 0 ";
	doInsertSql($query,"");
	}
	

$query = "DELETE FROM #__jomcomp_cron WHERE `job` = 'session_files_cleanup' ";
doInsertSql($query, '');

$query = "INSERT INTO #__jomcomp_cron (`job`,`schedule`,`parameters`,`last_ran`) VALUES ('session_files_cleanup','H','', '' ) ";
doInsertSql($query, '');
				