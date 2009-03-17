<?php 
/*
This file licensed DILLYGAF. I care so much that I haven't even bothered to write a license.

The Jomres package is proprietary licensed, which means you can't be naughty and give it away, otherwise I'd never be able to make any money to keep developing it.

That said, the files in the /jomres/libraries/jomres/cms_specific/*** directories are licensed under a dillygaf license (just google "dillygaf"), which means I don't care what you do with them, if you want to copy my files and adapt them to make your own and license them solely for your use you can. Even better, you could re-write them to work with X CMS and release them for other people to use.  The only thing you can't do is claim copyright of the original files otherwise you could stop me from using and distributing my own files, and that would be silly. 

I'm hard working, I'm not a genius there are lots of CMSs out there I'm not familiar with and if you can modify this code to make Jomres work on the CMS of your choice then more power to your elbow.

*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
// ################################################################

if (!is_dir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS."jomres".JRDS) )
	{
	if (!@mkdir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS."jomres".JRDS)) 
		{
		echo "<h1>Error, unable to make folder ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'modules'.JRDS."jomres".JRDS." automatically therefore cannot copy the Joomla component files. Please create the folder manually and ensure that it's writable by the web server.</h1><br/>";
		$folderChecksPassed=false;
		}
	}

if ($folderChecksPassed)
	{
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."action.default.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."action.default.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."action.defaultadmin.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."action.defaultadmin.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."index.html", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."index.html");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."jomres.module.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."jomres.module.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."method.install.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."method.install.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."method.uninstall.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."method.uninstall.php");
	$result=copy(_JOMRES_DETECTED_CMS_SPECIFIC_FILES."installfiles".JRDS."method.upgrade.php", 	JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules".JRDS."jomres".JRDS."method.upgrade.php");

	echo "Please remember, to use Jomres on CMS Made Simple you need to ensure that you have installed the frontend users plugin for CMSMS and configured that to work. <br/> To install Jomres into CMSMS you first need to create a user defined tag in Extensions -> User Defined Tags, call it Jomres and enter: 'define('_JOMRES_INITCHECK', 1 );<br/>require_once(dirname(__FILE__).'/../jomres/jomres.php');'<br/> Once you've done that, you can create a new page in Content -> Pages and enter just '{Jomres}' in the content page. That will give you a link to the Jomres pages in the front end.<br/> This installer has installed the required files into your ".JOMRESCONFIG_ABSOLUTE_PATH.JRDS."modules folder, you now need to go to Extensions -> Modules and follow the hints onscreen to install Jomres so that CMSMS can run Jomres in the administrator area.";

	}
	
?>











































































