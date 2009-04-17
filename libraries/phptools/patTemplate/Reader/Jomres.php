<?PHP
/**
 * patTemplate Reader that reads from a database using Jomres
 */
 
class patTemplate_Reader_Jomres extends patTemplate_Reader
	{
	var	$_name = 'Jomres';


	function readTemplates($templatename)
		{
		
		$default_root = $this->_options[root]['__default'];
		$custom_templates = new jomres_custom_template_handler();
		if (file_exists($custom_templates->default_template_files_folder.JRDS.$templatename))
			$content= $custom_templates->getTemplateData($templatename);
		else
			$content=file_get_contents($default_root.JRDS.$templatename );
		$templates = $this->parseString($content);
		return $templates;
		}
	}
?>