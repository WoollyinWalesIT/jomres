<?php
/**
#
 * Attempts to detect the current CMS
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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

if (!defined('_JOMRES_DETECTED_CMS') )
	define("_JOMRES_DETECTED_CMS","unknown");
