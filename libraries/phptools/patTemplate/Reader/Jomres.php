<?PHP
// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.9.7
 * @package Jomres
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

/**
 * patTemplate Reader that reads from a database using Jomres
 */

class patTemplate_Reader_Jomres extends patTemplate_Reader
	{
	var $_name = 'Jomres';

	function readTemplates( $templatename = '', $options = array() )
		{
        $template_packages = get_showtime('template_packages');

        if (!empty($template_packages)) { // There are some override packages installed, we can go ahead and check for overrides, which requires an extra query.
			// An alternative method of providing template overrides through plugins
			$overrides_class = jomres_singleton_abstract::getInstance('template_overrides');
			$ptype_id = (int)get_showtime('ptype_id');
		}
		
		if (isset($overrides_class->template_overrides[$templatename])) {
			$content = file_get_contents( JOMRESPATH_BASE.JRDS.$overrides_class->template_overrides[$templatename]['path'] . $templatename );
		} else {
			$override_template = false;
			if ( !isset( $_REQUEST[ 'nocustomtemplate' ] ) )
				$override_template = $this->get_cms_template_override( $templatename);
			
			if ( !$override_template )
				{
				$custom_paths = get_showtime( 'custom_paths' );
				
				if ( is_array($custom_paths) && array_key_exists( $templatename, $custom_paths ) )
					{
					$default_root = $custom_paths[ $templatename ];
					}
				else
					{
					$default_root = $this->_options[ 'root' ][ '__default' ];
					}
				
				$content = file_get_contents( $default_root . JRDS . $templatename );
				}
			else
				{
				$content = $override_template;
				}
		}

		$templates = $this->parseString( $content );

		return $templates;
		}
		
	function get_cms_template_override($jomres_template_name)
		{
		$override_path = false;
		
		$ptype_id = (int)get_showtime('ptype_id');
		
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
			
			//ptype specific override_path
			if ( $ptype_id > 0 )
				{
				if ( file_exists($override_path . JRDS . $ptype_id . JRDS . $jomres_template_name) )
					$override_path = $override_path . JRDS . $ptype_id;
				}

			//jomsearch modules overrides
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

			//ptype specific override_path
			if ( $ptype_id > 0 )
				{
				if ( file_exists($override_path . JRDS . $ptype_id . JRDS . $jomres_template_name) )
					$override_path = $override_path . JRDS . $ptype_id;
				}

			/* if (strpos($jomres_template_name,'mod_jomsearch_m') !== false)
				{
				$arr = explode(".", $jomres_template_name); 
				$name = $arr[0];
				
				if ( file_exists(get_template_directory() . JRDS . 'html' . JRDS . $name . JRDS . $jomres_template_name) )
					$override_path = get_template_directory() . JRDS . 'html' . JRDS . $name;
				} */
			}
			
		if ($override_path != '' && is_dir($override_path))
			{
			if (is_file( $override_path . JRDS . $jomres_template_name ) )
				{
				set_showtime('override_path_'.$jomres_template_name, $override_path);
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
