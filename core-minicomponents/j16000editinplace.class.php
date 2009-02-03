<?php
/**
#
 * Mini-component core file:
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 4
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2009 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
 */

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this location is not allowed.' );
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