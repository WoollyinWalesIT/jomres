<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

/**
 * patTemplate Reader that reads from a database using Jomres
 */

class patTemplate_Reader_Jomres extends patTemplate_Reader
	{
	var $_name = 'Jomres';

	function readTemplates( $templatename )
		{
		$override_template = false;
		if ( !isset( $_REQUEST[ 'nocustomtemplate' ] ) )
			$override_template = $this->get_cms_template_override( $templatename);
		
		if ( !$override_template )
			{
			$custom_paths = get_showtime( 'custom_paths' );
			if ( array_key_exists( $templatename, $custom_paths ) )
				{
				$default_root = $custom_paths[ $templatename ];
				$content      = file_get_contents( $default_root . JRDS . $templatename );
				}
			else
				{
				$default_root     = $this->_options[ 'root' ][ '__default' ];
				$custom_templates = jomres_singleton_abstract::getInstance( 'jomres_custom_template_handler' );
				if ( $templatename != "srch.html" && $templatename != "index.html" )
					{
					$property_uid = (int) get_showtime( 'property_uid' );
					//echo $templatename." - ".$property_uid."<br/>";
					if ( $property_uid > 0 )
						{
						$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
						//$current_property_details->property_uid = $property_uid;
						$current_property_details->gather_data( $property_uid );
						$property_type = $current_property_details->ptype_id;
						}
					else
						{
						$property_type = 0;
						}
					if ( file_exists( $custom_templates->default_template_files_folder . JRDS . $templatename ) && !isset( $_REQUEST[ 'nocustomtemplate' ] ) ) // One security flag to ensure that the template's valid, and one to allow us to disable customised templates via the url if desired.
						{
						$content = $custom_templates->getTemplateData( $templatename, $property_type );
						}
					else
						{
						$content = file_get_contents( $default_root . JRDS . $templatename );
						}
					}
				else
					{
					$content = file_get_contents( $default_root . JRDS . $templatename );
					}
				}
			}
		else
			{
			$content = $override_template;
			}
		$templates = $this->parseString( $content );

		return $templates;
		}
		
	function get_cms_template_override($jomres_template_name)
		{
		$override_path = false;
		
		if (this_cms_is_joomla())
			{
			$app = JFactory::getApplication();
			$joomla_templateName = $app->getTemplate('template')->template;
			if (jomres_cmsspecific_areweinadminarea())
				{
				$override_path = JOMRESCONFIG_ABSOLUTE_PATH . JOMRES_ADMINISTRATORDIRECTORY . JRDS . "templates" .JRDS. $joomla_templateName .JRDS . 'html' . JRDS . 'com_jomres';
				}
			else
				{
				$override_path = JOMRESCONFIG_ABSOLUTE_PATH . "templates" .JRDS. $joomla_templateName .JRDS . 'html' . JRDS . 'com_jomres';
				}

			if (strpos($jomres_template_name,'mod_jomsearch_m') !== false)
				{
				$arr = explode(".", $jomres_template_name); 
				$name = $arr[0];
				
				if ( file_exists(JOMRESCONFIG_ABSOLUTE_PATH . "templates" .JRDS. $joomla_templateName .JRDS . 'html' . JRDS . $name . JRDS . $jomres_template_name) )
					$override_path = JOMRESCONFIG_ABSOLUTE_PATH . "templates" .JRDS. $joomla_templateName .JRDS . 'html' . JRDS . $name;
				}
			}
		elseif (this_cms_is_wordpress())
			{
			$override_path = get_template_directory() . JRDS . 'html' . JRDS . 'com_jomres';

			if (strpos($jomres_template_name,'mod_jomsearch_m') !== false)
				{
				$arr = explode(".", $jomres_template_name); 
				$name = $arr[0];
				
				if ( file_exists(get_template_directory() . JRDS . 'html' . JRDS . $name . JRDS . $jomres_template_name) )
					$override_path = get_template_directory() . JRDS . 'html' . JRDS . $name;
				}
			}
			
		if ($override_path != '' && is_dir($override_path))
			{
			if (is_file( $override_path . JRDS . $jomres_template_name ) )
				{
				return file_get_contents( $override_path . JRDS . $jomres_template_name );
				}
			else
				{
				return false;
				}
			}
		else
			{
			return false;
			}
		
		return false;
		}
	
	}

?>