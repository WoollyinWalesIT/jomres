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


class j16000editinplace 
	{
	function j16000editinplace()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		global $jrConfig,$jomresConfig_lang;
		$customText = jomresGetParam( $_POST, 'newtext', '','string' );
		$theConstant = jomresGetParam( $_POST, 'theConstant', '' );

		$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '".$theConstant."' and property_uid = 0 AND language = '$jomresConfig_lang'";
		$textList=doSelectSql($query);
		if (strlen($customText)==0)
			{
			$query="DELETE FROM	#__jomres_custom_text WHERE constant = '".$theConstant."' AND property_uid = 0 AND language = '$jomresConfig_lang'";
			}
		else
			{
			if (count($textList)<1)
				$query="INSERT INTO #__jomres_custom_text (`constant`,`customtext`,`property_uid`,`language`) VALUES ('".$theConstant."','".$customText."',0,'$jomresConfig_lang')";
			else
				$query="UPDATE #__jomres_custom_text SET `customtext`='".$customText."' WHERE constant = '".$theConstant."' AND property_uid = 0 AND language = '$jomresConfig_lang'";
			}
		if (doInsertSql($query))
			echo $customText;
		else
			echo "Something burped";
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>