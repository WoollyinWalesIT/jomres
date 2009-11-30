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
defined( "_JOMRES_INITCHECK" ) or die( "Direct Access is not allowed." );
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