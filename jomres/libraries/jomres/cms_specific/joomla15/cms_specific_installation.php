<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
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

	}
	
	$query="SELECT name FROM #__components WHERE `name` = 'Jomres' AND `link` = 'option=com_jomres'";
	$result=doSelectSql($query);
	if (count($result)==1)
		return true;
	
	$query="DELETE FROM #__components WHERE `option` = 'com_jomres'";
	$result=doInsertSql($query,"");
	$extraClause="";
	$extraClausePara="";
	$extraClause=",`enabled`";
	$extraClausePara=",'1'";

	$query="INSERT INTO #__components
	(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`".$extraClause.")
	VALUES
	('Jomres','option=com_jomres','0','0','option=com_jomres','Jomres','com_jomres','0','jomres/images/jricon.png','0',' '".$extraClausePara.")
	";
	$result=doInsertSql($query,"");
	if ($result)
		{
		$parent=$result;
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Show Global Room types','','0','$parent','option=com_jomres&task=listGlobalroomTypes','Show Global Room types','com_jomres','4','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Show Global Property Features','','0','$parent','option=com_jomres&task=listPfeatures','Show Global Property Features','com_jomres','3','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Show Property types','','0','$parent','option=com_jomres&task=listPropertyTypes','Show Property types','com_jomres','2','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Show Profiles','','0','$parent','option=com_jomres&task=listMosUsers','Show Profiles','com_jomres','1','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Edit Site Configuration','','0','$parent','option=com_jomres&task=showSiteConfig','Edit Site Configuration','com_jomres','0','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Logs','','0','$parent','option=com_jomres&task=listLogs','Logs','com_jomres','0','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`)
		VALUES
		('Plugins','','0','$parent','option=com_jomres&task=showplugins','Plugins','com_jomres','0','jomres/images/jricon.png','0','')
		";
		$result=doInsertSql($query,"");
		}
	else
		echo "Unable to create main Jomres admin menu option<br>";
		
echo "Making <i>admin</i> a super property manager<br>";
$query="INSERT INTO #__jomres_managers
(`userid`,`username`,`property_uid`,`access_level`,`currentproperty`,`pu`)
VALUES
('62','admin','0','2','1','1')";
$result=doInsertSql($query,"");
//echo $query;

if ($result)
	echo "Inserted admin as manager<br>";
else
	echo "Could not create admin as manager<br>";
