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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000save_languageChoiceSelection {
	function j16000save_languageChoiceSelection()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		// A slightly ugly way of doing things, but it saves us from having to make yet another database enquiry, this time to find out the available languages.
		$languageChoices = $_POST['idarray'];
		
		$jomreslang =jomres_getSingleton('jomres_language');
		$languagesArray = $jomreslang->define_langfile_to_languages_array();
		
		$temp_directory = JOMRESCONFIG_ABSOLUTE_PATH.JRDS."jomres".JRDS."temp".JRDS;
		$safety_string="<?php
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################
		";

		
		$formString = ' function getLangDropdownString()
					{
					return unserialize(\'';

		if (count($languageChoices)>0)
			{
			$formString .=serialize($languageChoices)."');
			}
			";
			$fp=fopen($temp_directory."langDropdown.php",'w');
			fwrite($fp, $safety_string.$formString);
			if (!fclose($fp))
				{
				$this->error_detected = true;
				error_logging("Could not save language dropdown file :: ".$temp_directory."langDropdown.php");
				}
			}
		else
			echo "No change";
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN."&task=chooseLanguages"), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>