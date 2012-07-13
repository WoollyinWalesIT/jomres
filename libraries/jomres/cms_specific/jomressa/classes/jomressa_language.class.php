<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( "_JOMRES_INITCHECK" ) or die( "" );
// ################################################################
class jomressa_language
	{
	function jomressa_language($lang)
		{
		if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.$lang.'.php'))
			{
			require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.$lang.'.php');
			}
		else
			{
			if (file_exists(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.'en-GB.php'))
				{
				require(_JOMRES_DETECTED_CMS_SPECIFIC_FILES.JRDS.'language'.JRDS.'en-GB.php');
				}
			}
		}
	}
?>