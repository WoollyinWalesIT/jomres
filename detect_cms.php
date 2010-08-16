<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4 
* @package Jomres
* @copyright	2005-2010 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'defines.php') )
	{
	define("_JOMRES_DETECTED_CMS","joomla15");
	define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
	}


if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'wp-config.php') )
	{
	define("_JOMRES_DETECTED_CMS","wordpress3");
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
