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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Creates the Jomres currency format object
 #
* @package Jomres
* @since 2.6
#
*/
class jomres_custom_template_handler
	{
	/**
	#
	* Constructor. Sets the required curency format
	#
	*/
	function jomres_custom_template_handler($specific_path=false)
		{
		if (!$specific_path)
			$this->default_template_files_folder = JOMRES_TEMPLATEPATH_FRONTEND;
		
		$this->custom_template = array();
		$this->getAllCustomTemplates();
		}

	function getAllCustomTemplates()
		{
		if (!isset($this->custom_templates))
			{
			$this->custom_templates=array();
			$query = "SELECT template_name,value FROM #__jomres_custom_templates";
			$templates = doSelectSql($query);
			if (count($templates)>0)
				{
				foreach ($templates as $t)
					{
					$this->custom_templates[$t->template_name]=array('template_name'=>$t->template_name);
					}
				}
			}
		else
			$this->custom_templates=$jomres_custom_templates;
		}

	function hasThisTemplateBeenCustomised($templatename)
		{
		if (array_key_exists($templatename,$this->custom_templates) )
			return true;
		return false;
		}
	
	function getTemplateData($templatename)
		{
		if ($this->hasThisTemplateBeenCustomised($templatename))
			{
			$query = "SELECT value FROM #__jomres_custom_templates WHERE `template_name` = '".$templatename."'";
			$templates = doSelectSql($query);
			if (count($templates)>0)
				{
				foreach ($templates as $t)
					{
					return stripslashes(htmlspecialchars_decode($t->value));
					}
				}
			}
		else  // We need to read in from the file itself
			{
			if ($templatename == "jomrescss.css")
				return file_get_contents(JOMRESPATH_BASE.JRDS."css".JRDS."jomrescss.css" );
			else
				return file_get_contents($this->default_template_files_folder.JRDS.$templatename );
			}
		}
	
	}
	
?>