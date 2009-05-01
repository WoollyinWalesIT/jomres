<?php
/**
 * Core file
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 4
* @package Jomres
* @copyright	2005-2009 Vince Wooll

Jomres is distributed as a mix of two licenses (excepting other files in the libraries folder, which are independantly licensed). 

The first, proprietary license, refers to Jomres as a package. You cannot share it, period. You can see the full license here http://www.jomres.net/license.html. There are some exceptions, and these files are independantly licensed (see the /jomres/libraries/phptools folder for example)
The files in the /jomres/core-minicomponents,  /jomres/libraries/jomres/cms_specific and the /jomres/templates folders, whilst copyright Vince Wooll, are licensed differently to allow those users who wish, to develop and distribute their own third party plugins for Jomres. Those files are licensed under the MIT license, which allows third party vendors to modify them to suit their own requirements and if so desired, distribute them for free or cost. 

################################################################
This file is subject to the Jomres proprietary license, please do not distribute it. For licencing information, please visit 
http://www.jomres.net/index.php?option=com_content&task=view&id=214&Itemid=86 and http://www.jomres.net/license.html
################################################################
*/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( 'Direct Access to '.__FILE__.' is not allowed.' );
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
			$this->default_template_files_folder = JOMRESPATH_BASE.JRDS."templates".JRDS."jomres".JRDS."frontend";
		$this->custom_templates=array();
		$this->custom_template = array();
		$this->getAllCustomTemplates();
		
		}

	function getAllCustomTemplates()
		{
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
					return $t->value;
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