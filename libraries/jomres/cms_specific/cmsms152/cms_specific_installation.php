<?php
/**
 * Mini-component core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @subpackage mini-components
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to The MIT License. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
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











































































