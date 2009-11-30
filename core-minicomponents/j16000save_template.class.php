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
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to this file is not allowed.' );
// ################################################################

class j16000save_template 
	{
	function j16000save_template()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		//if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		$templatename		= jomresGetParam( $_REQUEST, 'templatename', '' );
		$templateData		= $_REQUEST['templatedata'];
		$templateData		= str_replace("text<x>area","textarea",$templateData);
		$last_edited		= date( 'Y-m-d H:i:s' );
		
		$templateData		= addslashes(htmlspecialchars($templateData));
		
		$custom_templates =jomres_getSingleton('jomres_custom_template_handler');
		if ($custom_templates->hasThisTemplateBeenCustomised($templatename))
			$query = "UPDATE #__jomres_custom_templates SET `value`='".$templateData."',`last_edited`='".$last_edited."' WHERE template_name = '".$templatename."'";
		else
			$query = "INSERT INTO #__jomres_custom_templates (`template_name`,`value`,`last_edited`) VALUES ( '".$templatename."','".$templateData."','".$last_edited."')";
		$result = doInsertSql($query,'');
		//var_dump($result);
		if ($templatename == "jomrescss.css")
			{
			$fp=fopen(JOMRESPATH_BASE.JRDS."temp".JRDS."jomrescss.css",'w');
			fwrite($fp, $templateData);
			fclose($fp);
			}
		
		emptyDir(JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'cache'.JRDS);
		jomresRedirect( jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_template&jomresTemplateFile='.$templatename), "" );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
?>