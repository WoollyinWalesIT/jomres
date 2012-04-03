<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################


class j16000editinplace 
	{
	function j16000editinplace()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$customText = jomresGetParam( $_POST, 'newtext', '','string' );
		$theConstant =filter_var($_POST['theConstant'],FILTER_SANITIZE_SPECIAL_CHARS);

		$query="SELECT customtext FROM #__jomres_custom_text WHERE constant = '".$theConstant."' and property_uid = 0 AND language = '".get_showtime('lang')."'";
		$textList=doSelectSql($query);
		if (strlen($customText)==0)
			{
			$query="DELETE FROM	#__jomres_custom_text WHERE constant = '".$theConstant."' AND property_uid = 0 AND language = '".get_showtime('lang')."'";
			}
		else
			{
			if (count($textList)<1)
				$query="INSERT INTO #__jomres_custom_text (`constant`,`customtext`,`property_uid`,`language`) VALUES ('".$theConstant."','".$customText."',0,'".get_showtime('lang')."')";
			else
				$query="UPDATE #__jomres_custom_text SET `customtext`='".$customText."' WHERE constant = '".$theConstant."' AND property_uid = 0 AND language = '".get_showtime('lang')."'";
			}
		if (doInsertSql($query))
			echo jomres_decode($customText);
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