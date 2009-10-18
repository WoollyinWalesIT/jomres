<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'defines.php') )
	{
	define("_JOMRES_DETECTED_CMS","joomla15");
	define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
	}

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'moduleinterface.php') )
	{
	define("_JOMRES_DETECTED_CMS","cmsms152");
	define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
	}
	
if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'version.php') )
	{
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'version.php');
	$cmsVer = new version();
	if ($cmsVer->PRODUCT == 'MiaCMS' && $cmsVer->RELEASE =='4.8' )
		{
		define("_JOMRES_DETECTED_CMS","miacms48");
		define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
		}
	}
	
if (!defined('_JOMRES_DETECTED_CMS') )
	{
	$jrePath=JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'remote_plugins'.JRDS;
	$d = @dir($jrePath);
	$docs = array();
	if($d)
		{
		while (FALSE !== ($entry = $d->read()))
			{
			$filename = $entry;
			if( substr($entry,0,1) != '.' )
				{
				$docs[] =$entry;
				}
			}
		$d->close();
		if (count($docs)>0)
			{
			sort($docs);
			foreach ($docs as $doc)
				{
				$listdir=$jrePath.$doc.JRDS;
				$dr = @dir($listdir);
				if($dr)
					{
					while (FALSE !== ($entry = $dr->read()))
						{
						$filename = $entry;
						if ($filename == "detect_cms.php")
							require_once($jrePath."detect_cms.php");
						}
					$dr->close();
					}
				}
			}
		}
	}


if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'jomres_standalone_config.php') )
	{
	define("_JOMRES_DETECTED_CMS","jomressa");
	define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
	}

if (!defined('_JOMRES_DETECTED_CMS') )
	{
	if (!file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'index.php') )
		{
		define("_JOMRES_DETECTED_CMS","jomressa");
		define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
		}
	}


if (!defined('_JOMRES_DETECTED_CMS') )
	define("_JOMRES_DETECTED_CMS","unknown");
	
if (_JOMRES_DETECTED_CMS == "unknown")
	{
	echo "Error, cannot detect the current CMS. Exiting.";
	exit;
	}
