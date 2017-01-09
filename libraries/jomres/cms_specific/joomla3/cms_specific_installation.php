<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

$folderChecksPassed = true;
if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS)) {
        echo '<h1>Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS." automatically therefore cannot copy the Joomla component files. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
        $folderChecksPassed = false;
    }
}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS)) {
    if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS)) {
        echo '<h1>Error, unable to make folder '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS." automatically therefore cannot copy the Joomla component files. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
        $folderChecksPassed = false;
    }
}

if ($folderChecksPassed) {
    if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS)) {
        mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS);
        mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS);
        mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS);
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.xml')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres.xml to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.xml automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'admin.jomres.php', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.php')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'admin.jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.php automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres.php', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.php')) {
        echo '<h1>Error, unable to copy '.JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'jomres.php
			automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'router.php', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'router.php')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'router.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'router.php
			automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres_view.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'default.xml')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'jomres_view.xml to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'jomres.xml
			automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'countries.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'countries.xml')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'countries.xml to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'countries.xml
			automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'regions.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'regions.xml')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'regions.xml to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'regions.xml
			automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'towns.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'towns.xml')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'towns.xml to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'towns.xml
			automatically, please do this manually through FTP</h1><br/>';
    }

    if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'propertytypes.xml', JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'propertytypes.xml')) {
        echo '<h1>Error, unable to copy '._JOMRES_DETECTED_CMS_SPECIFIC_FILES.'installfiles'.JRDS.'propertytypes.xml to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_jomres'.JRDS.'views'.JRDS.'default'.JRDS.'tmpl'.JRDS.'propertytypes.xml
			automatically, please do this manually through FTP</h1><br/>';
    }
}

// Don't need to run this again if the table's already populated
$query = 'SELECT userid FROM #__jomres_managers LIMIT 2';
$existing_users = doSelectSql($query);
if (count($existing_users) > 0) {
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
	`params`,`custom_data`,`system_data`,
	`checked_out`,`checked_out_time`,`ordering`,`state`
	)
	VALUES
	(
	'Jomres','component','com_jomres','',
	'1','1','1','0',
	'{\"name\":\"Jomres\",\"type\":\"component\",\"creationDate\":\"2005-03-18\",\"author\":\"Vince Wooll\",\"copyright\":\"(C) 2005 - 2011 Vince Wooll. All rights reserved.\t\",\"authorEmail\":\"sales@jomres.net\",\"authorUrl\":\"www.jomres.net\",\"version\":\"7\",\"description\":\"Jomres\",\"group\":\"\"}',
	'{}','','',
	'0','1970-01-01 00:00:01','0','0'
	)
	";

$component_id = doInsertSql($query, '');

if ($component_id) {
    $query = "SELECT title FROM #__menu WHERE `link` = 'index.php?option=com_jomres' LIMIT 1";
    $result = doSelectSql($query);
    if (count($result) < 1) {
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
