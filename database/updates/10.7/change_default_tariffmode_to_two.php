<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
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
UPDATE `#__jomres_settings` SET `value` = '2' WHERE `#__jomres_settings`.`property_uid` = 0 AND `#__jomres_settings`.`akey` = 'tariffmode' ; 
";

if (!doInsertSql($query)) {
	$this->setMessage('Error, unable to change the default tariff editing mode from 5 to 3', 'danger');
}
