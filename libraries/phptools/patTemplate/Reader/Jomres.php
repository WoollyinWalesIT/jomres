<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
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
			$default_root = $this->_options['root']['__default'];
			$custom_templates =jomres_singleton_abstract::getInstance('jomres_custom_template_handler');
			if ($templatename != "srch.html" && $templatename != "index.html")
				{
				$property_uid = (int)get_showtime('property_uid');
				if ($property_uid > 0)
					{
					$current_property_details =jomres_singleton_abstract::getInstance('basic_property_details');
					$current_property_details->gather_data($property_uid);
					$property_type = $current_property_details->ptype_id;
					}
				else
					$property_type = 0;
				if (file_exists($custom_templates->default_template_files_folder.JRDS.$templatename) && !isset($_REQUEST['nocustomtemplate']) ) // One security flag to ensure that the template's valid, and one to allow us to disable customised templates via the url if desired.
					{
					$content= $custom_templates->getTemplateData($templatename,$property_type);
					}
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