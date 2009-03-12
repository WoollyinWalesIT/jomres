<?PHP
/**
 * patTemplate Reader that reads from a database using Jomres
 */
 
class patTemplate_Reader_Jomres extends patTemplate_Reader
{
   /**
    * reader name
	* @access	private
	* @var		string
	*/
	var	$_name = 'Jomres';

   /**
    * read templates from the database
    *
    * Input may either be an SQL query or a string defining the location
    * of the template using the format:
    * <code>
    * table[@key=value]/@templateField
    * </code>
	*
	* @final
	* @access	public
	* @param	string	file to parse
	* @return	array	templates
	*/
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