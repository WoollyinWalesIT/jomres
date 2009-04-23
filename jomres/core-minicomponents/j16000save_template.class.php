<?php
/**
#
 * Mini-component core file: 
#
 * @author Vince Wooll <sales@jomres.net>
#
 * @version Jomres 3
#
* @package Jomres
* @subpackage mini-components
#
* @copyright	2005-2008 Vince Wooll
#
* This is not free software, please do not distribute it. For licencing information, please visit http://www.jomres.net/
* All rights reserved.
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

		$custom_templates = new jomres_custom_template_handler();
		if ($custom_templates->hasThisTemplateBeenCustomised($templatename))
			$query = "UPDATE #__jomres_custom_templates SET `value`='".$templateData."' WHERE template_name = '".$templatename."'";
		else
			$query = "INSERT INTO #__jomres_custom_templates (`template_name`,`value`) VALUES ( '".$templatename."','".$templateData."')";
		$result = doInsertSql($query,'');
		
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