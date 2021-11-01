<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.1
 *
 * @copyright	2005-2021 Vince Wooll
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

$query = 'SELECT user_id FROM #__user_usergroup_map WHERE group_id = 8 LIMIT 1';
$admin_user_id = (int) doSelectSql($query, 1);

$admin_user = jomres_cmsspecific_getCMS_users_admin_userdetails_by_id($admin_user_id);
$admin_user = $admin_user[ $admin_user_id ];

//echo "Making <i>" . $admin_user[ 'username' ] . "</i> a super property manager<br>";
$query = "INSERT INTO #__jomres_managers
(`userid`,`access_level`,`currentproperty`)
VALUES
(".$admin_user[ 'id' ].",90,1)";
$result = doInsertSql($query, '');

/* if ( $result )
	echo "Inserted " . $admin_user[ 'username' ] . " as manager<br>";
else
	echo "Could not create " . $admin_user[ 'username' ] . " as manager<br>"; */

// Looking to see if Jomres is already installed in Joomla. If it is, we'll simply return true as there's nothing else to do
$query = "SELECT `element` FROM #__extensions WHERE `element` = 'com_jomres' ";
$result = doSelectSql($query);
if (count($result) == 1) {
	return true;
}

$query = "INSERT INTO #__extensions	(
	`name`,`type`,`element`,`folder`,
	`client_id`,`enabled`,`access`,`protected`,
	`manifest_cache`,
	`params`,`namespace`,
	`checked_out`,`checked_out_time`,`ordering`,`state`
	)
	VALUES
	(
	'Jomres','component','com_jomres','',
	'1','1','1','0',
	'{\"name\":\"Jomres\",\"type\":\"component\",\"creationDate\":\"2005-03-18\",\"author\":\"Vince Wooll\",\"copyright\":\"(C) 2005 - 2011 Vince Wooll. All rights reserved.\t\",\"authorEmail\":\"sales@jomres.net\",\"authorUrl\":\"www.jomres.net\",\"version\":\"7\",\"description\":\"Jomres\",\"group\":\"\"}',
	'{}','Joomla\Component\Jomres',
	'0','1970-01-01 00:00:01','0','0'
	)
	";

$component_id = doInsertSql($query, '');

if ($component_id) {
	$query = "SELECT title FROM #__menu WHERE `link` = 'index.php?option=com_jomres' LIMIT 1";
	$result = doSelectSql($query);
	if (empty($result)) {
		$query = 'SELECT max(rgt) FROM #__menu';
		$highest = (int) doSelectSql($query, 1);
		$lft = $highest + 1;
		$rgt = $highest + 2;

		$query = "INSERT INTO #__menu (
				`menutype`,`title`,`alias`,`note`,
				`path`,`link`,`type`,`published`,
				`parent_id`,`level`,`component_id`,
				`checked_out`,`checked_out_time`,`browserNav`,`access`,
				`img`,`template_style_id`,`params`,`lft`,
				`rgt`,`home`,`language`,`client_id`
				) VALUES (
				'main','Jomres','Jomres','Jomres',
				'','index.php?option=com_jomres','component',1,
				1,1," .$component_id.",
				0,'1970-01-01 00:00:01',0,1,
				'class:component',0,'',
				" .$lft.','.$rgt.",0,'*',1
				)";

		$result = doInsertSql($query, '');
	}
} else {
	echo 'Unable to create main Jomres admin menu option<br>';
}
