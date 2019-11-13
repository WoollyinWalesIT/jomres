<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

$query = "SHOW COLUMNS FROM #__jomres_reviews_ratings LIKE 'user_name'";
$colExists = doSelectSql( $query );
if (count($colExists) < 1)
	{
	$query = "ALTER TABLE `#__jomres_reviews_ratings` ADD `user_name` VARCHAR(255) ";
	doInsertSql($query,"");
	}
	
