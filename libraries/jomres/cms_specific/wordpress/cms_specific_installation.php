<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.0
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	
	/**
	 *
	 * Installation script run by the installer when it detects that we are installing on this CMS.
	 *
	 * @package Jomres\Core\CMS_Specific
	 *
	 */

// Don't need to run this again if the table's already populated
$query = 'SELECT userid FROM #__jomres_managers LIMIT 2';
$existing_users = doSelectSql($query);
if (!empty($existing_users)) {
	return;
}

$query = 'SELECT id,user_login FROM #__users';
$user_ids = doSelectSql($query);

if (!empty($user_ids)) {
	$super_admin_ids = array();
	foreach ($user_ids as $user) {
		//echo $user->id."<br />";
		if (is_super_admin($user->id)) {
			$super_admin_ids[] = array('username' => $user->user_login, 'id' => $user->id);
		}
	}

	if (!empty($super_admin_ids)) {
		foreach ($super_admin_ids as $admin_user) {
			$query = "INSERT INTO #__jomres_managers
				(`userid`,`access_level`,`currentproperty`)
			VALUES
				(".$admin_user[ 'id' ].",90,1)";
			$result = doInsertSql($query, '');
		}
	}
}
