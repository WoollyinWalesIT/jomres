<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2009 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

$folderChecksPassed=true;
if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS) )
	{
	if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS." automatically therefore cannot copy the Joomla component files. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		
		}
	}

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS."components".JRDS."com_jomres".JRDS) )
	{
	if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'administrator'.JRDS."components".JRDS."com_jomres".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS." automatically therefore cannot copy the Joomla component files. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}

if ($folderChecksPassed)
	{
	if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."views") )
		{
		mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."views".JRDS);
		mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."views".JRDS."default".JRDS);
		mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."views".JRDS."default".JRDS."tmpl".JRDS);
		}
	
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.html", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."index.html"))
		echo "<h1>Error, unable to copy ".
			_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.html to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."index.html 
			automatically, please do this manually through FTP</h1><br/>";
	
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.html",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."index.html"))
		echo "<h1>Error, unable to copy ".
			JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.html to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."index.html 
			automatically, please do this manually through FTP</h1><br/>";
	
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."admin.jomres.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."admin.jomres.php"))
		echo "<h1>Error, unable to copy ".
			_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."admin.jomres.php to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."admin.jomres.php 
			automatically, please do this manually through FTP</h1><br/>";
	
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.xml",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."jomres.xml"))
		echo "<h1>Error, unable to copy ".
			_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.xml to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."jomres.xml 
			automatically, please do this manually through FTP</h1><br/>";
			
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."uninstall.jomres.php",	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."uninstall.jomres.php"))
		echo "<h1>Error, unable to copy ".
			_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."uninstall.jomres.php to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."uninstall.jomres.php 
			automatically, please do this manually through FTP</h1><br/>";
			
	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."jomres.php"))
		echo "<h1>Error, unable to copy ".
			JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.php to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."jomres.php 
			automatically, please do this manually through FTP</h1><br/>";

	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."router.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."router.php"))
		echo "<h1>Error, unable to copy ".
			_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."router.php to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."router.php 
			automatically, please do this manually through FTP</h1><br/>";

	if (!copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres_view.xml", JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."views".JRDS."default".JRDS."tmpl".JRDS."default.xml"))
		echo "<h1>Error, unable to copy ".
			_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres_view.xml to ".
			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."views".JRDS."default".JRDS."tmpl".JRDS."jomres.xml 
			automatically, please do this manually through FTP</h1><br/>";
			
			
	}
	
/*
	// Looking to see if Jomres is already installed in Joomla. If it is, we'll simply return true as there's nothing else to do
	$query="SELECT name FROM #__extensions WHERE `name` = 'com_jomres'";
	$result=doSelectSql($query);
	if (count($result)==1)
		{
		return true;
		}

	$query="INSERT INTO #__extensions	(
	`name`,`type`,`element`,`folder`,
	`client_id`,`enabled`,`access`,`protected`,
	`manifest_cache`,`params`,`custom_data`,`system_data`,
	`checked_out`,`checked_out_time`,`ordering`,`state`
	)
	VALUES
	(
	'com_jomres','component','com_jomres','',
	'1','1','1','0',
	'','','','',
	'0','0000-00-00 00:00:00','0','0'
	)
	";

	$component_id=doInsertSql($query,"");
	if ($result)
		{
		$query = "INSERT INTO jos_menus (
			`menutype`,`title`,`alias`,`note`,
			`path`,`link`,`type`,`published`,
			`parent_id`,`level`,`component_id`,`ordering`,
			`checked_out`,`checked_out_time`,`browserNav`,`access`,
			`img`,`template_style_id`,`params`,`lft`,
			`rgt`,`home`,`language`
			) VALUES (
			'_adminmenu','com_jomres','Jomres','Jomres',
			'','index.php?option=com_jomres','component',0,
			1,1,".$component_id.",0,
			0,'0000-00-00 00:00:00',0,0,
			'',0,'',1,
			10,0,'*'
			)";
		$result=doInsertSql($query,"");
		}
	else
		echo "Unable to create main Jomres admin menu option<br>";
		 */
$admin_user = jomres_cmsspecific_getCMS_users_admin_userdetails_by_id(42);
$admin_user = $admin_user[42];

echo "Making <i>".$admin_user['username']."</i> a super property manager<br>";
$query="INSERT INTO #__jomres_managers
(`userid`,`username`,`property_uid`,`access_level`,`currentproperty`,`pu`)
VALUES
('42','".$admin_user['username']."','0','2','1','1')";
$result=doInsertSql($query,"");
//echo $query;

if ($result)
	echo "Inserted ".$admin_user['username']." as manager<br>";
else
	echo "Could not create ".$admin_user['username']." as manager<br>";


?>











































































