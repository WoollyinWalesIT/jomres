<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

/**
 * patTemplate Reader that reads from a database using Jomres
 */
 
class patTemplate_Reader_Jomres extends patTemplate_Reader
	{
	var	$_name = 'Jomres';

	function readTemplates($templatename)
		{
		$custom_paths = get_showtime('custom_paths');
		if (array_key_exists($templatename,$custom_paths))
			{
			$default_root = $custom_paths[$templatename];
			$content=file_get_contents($default_root.JRDS.$templatename );
			}
		else
			{
			$default_root = $this->_options[root]['__default'];
			$custom_templates =jomres_singleton_abstract::getInstance('jomres_custom_template_handler');
			if ($templatename != "srch.html" && $templatename != "index.html")
				{
				if (file_exists($custom_templates->default_template_files_folder.JRDS.$templatename) && !isset($_REQUEST['nocustomtemplate']) )
					$content= $custom_templates->getTemplateData($templatename);
				else
					$content=file_get_contents($default_root.JRDS.$templatename );
				}
			else
				{
				$content=file_get_contents($default_root.JRDS.$templatename );
				}
			}
		$templates = $this->parseString($content);
		return $templates;
		}
	}
?>