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

class j16000save_template 
	{
	function j16000save_template()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return 
		global $MiniComponents;
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		if (!jomresCheckToken()) {trigger_error ("Invalid token", E_USER_ERROR);}
		
		$templatename		= jomresGetParam( $_REQUEST, 'templatename', '' );
		$templateData		= $_REQUEST['templatedata'];
		$templateData		= str_replace("text<x>area","textarea",$templateData);
		$last_edited		= date( 'Y-m-d H:i:s' );
		
		$templateData		= addslashes(htmlspecialchars($templateData));
		
		$custom_templates = new jomres_custom_template_handler();
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