<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 5 
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'cms'.JRDS.'version'.JRDS.'version.php') )
	{
	require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'cms'.JRDS.'version'.JRDS.'version.php');
	$jversion = new JVersion();
	if ($jversion->RELEASE == '2.5')
		{
		define("_JOMRES_DETECTED_CMS","joomla25");
		define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
		}
	}
else
	{
	if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'version.php') )
		{
		require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'includes'.JRDS.'version.php');
		$jversion = new JVersion();
		if ($jversion->RELEASE == '1.7')
			{
			define("_JOMRES_DETECTED_CMS","joomla17");
			define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
			}
		}
	else
		{
		if (file_exists(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'version.php') )
			{
			if (!defined('JPATH_BASE'))
				{
				define('JPATH_BASE',JOMRESCONFIG_ABSOLUTE_PATH);
				}

			require_once(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'libraries'.JRDS.'joomla'.JRDS.'version.php');
			$jversion = new JVersion();
			if ($jversion->RELEASE == '1.6')
				{
				define("_JOMRES_DETECTED_CMS","joomla16");
				define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
				}
			if ($jversion->RELEASE == '1.5')
				{
				define("_JOMRES_DETECTED_CMS","joomla15");
				define("_JOMRES_DETECTED_CMS_SPECIFIC_FILES",JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."libraries".JRDS."jomres".JRDS."cms_specific".JRDS._JOMRES_DETECTED_CMS.JRDS);
				}
			}
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
