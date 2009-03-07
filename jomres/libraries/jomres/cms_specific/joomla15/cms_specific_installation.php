<?php 

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS."installfiles".JRDS."admin.jomres.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."admin.jomres.php");
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS."installfiles".JRDS."jomres.xml",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."jomres.xml");
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS."installfiles".JRDS."uninstall.jomres.php",	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."administrator".JRDS."components".JRDS."com_jomres".JRDS."uninstall.jomres.php");
	$result=copy(JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS."installfiles".JRDS."jomres.php",			JOMRESCONFIG_ABSOLUTE_PATH.JRDS."components".JRDS."com_jomres".JRDS."jomres.php");
	}
	
	$query="SELECT name FROM #__components WHERE `name` = 'Jomres' AND `link` = 'option=com_jomres'";
	$result=doSelectSql($query);
	if (count($result)==1)
		return true;
	
	$query="DELETE FROM #__components WHERE `option` = 'com_jomres'";
	$result=doInsertSql($query,"");
	$extraClause="";
	$extraClausePara="";
	if (_JOMRES_NEWJOOMLA == 1)
		{
		$extraClause=",`enabled`";
		$extraClausePara=",'1'";
		}
	$query="INSERT INTO #__components
	(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`,`params`".$extraClause.")
	VALUES
	('Jomres','option=com_jomres','0','0','option=com_jomres','Jomres','com_jomres','0','/jomres/images/jricon.png','0',' '".$extraClausePara.")
	";
	$result=doInsertSql($query,"");
	if ($result)
		{
		$parent=$result;
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Global Room types','','0','$parent','option=com_jomres&task=listGlobalroomTypes','Show Global Room types','com_jomres','4','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Global Property Features','','0','$parent','option=com_jomres&task=listPfeatures','Show Global Property Features','com_jomres','3','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Property types','','0','$parent','option=com_jomres&task=listPropertyTypes','Show Property types','com_jomres','2','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Show Profiles','','0','$parent','option=com_jomres&task=listMosUsers','Show Profiles','com_jomres','1','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Edit Site Configuration','','0','$parent','option=com_jomres&task=showSiteConfig','Edit Site Configuration','com_jomres','0','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Logs','','0','$parent','option=com_jomres&task=listLogs','Logs','com_jomres','0','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		
		$query="INSERT INTO #__components
		(`name`,`link`,`menuid`,`parent`,`admin_menu_link`,`admin_menu_alt`,`option`,`ordering`,`admin_menu_img`,`iscore`)
		VALUES
		('Plugins','','0','$parent','option=com_jomres&task=showplugins','Plugins','com_jomres','0','/jomres/images/jricon.png','0')
		";
		$result=doInsertSql($query,"");
		}
	else
		echo "Unable to create main Jomres admin menu option<br>";
		
?>











































































