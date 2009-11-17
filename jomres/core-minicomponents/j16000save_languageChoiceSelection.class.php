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