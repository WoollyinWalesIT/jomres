<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2014 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

/**
#
 * Creates the Jomres currency format object
#
 *
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
	function jomres_custom_template_handler( $specific_path = false )
		{
		if ( !$specific_path )
			{
			$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig   = $siteConfig->get();
			if (!isset($jrConfig[ 'bootstrap_version' ]))
				$jrConfig[ 'bootstrap_version' ] = "";
			
			if ( _JOMRES_DETECTED_CMS == "joomla30" || _JOMRES_DETECTED_CMS == "joomla31" || _JOMRES_DETECTED_CMS == "joomla32"  || _JOMRES_DETECTED_CMS == "joomla33") $this->using_bootstrap = true;
			else
				{
				if ( $jrConfig[ 'use_bootstrap_in_frontend' ] == "1" ) $this->using_bootstrap = true;
				else
				$this->using_bootstrap = false;
				}

			if ( $this->using_bootstrap ) $this->default_template_files_folder = JOMRESPATH_BASE . JRDS . 'templates' . JRDS . 'bootstrap'.$jrConfig[ 'bootstrap_version' ] . JRDS . 'frontend';
			else
			$this->default_template_files_folder = JOMRESPATH_BASE . JRDS . 'templates' . JRDS . 'jquery_ui' . JRDS . 'frontend';
			}
		else
			{
			$this->default_template_files_folder = $specific_path;
			}
		$this->temp_ptype_id = null; // After checking to see if a template's been customised, we'll need to store the ptype found in case it's 0 (zero) which means the template's for all properties
		$this->getAllCustomTemplates();
		}

	function getAllCustomTemplates()
		{
		if ( !isset( $this->custom_templates ) )
			{
			$this->custom_templates = array ();
			$query                  = "SELECT uid,template_name,value,ptype_id FROM #__jomres_custom_templates";
			$templates              = doSelectSql( $query );
			if ( count( $templates ) > 0 )
				{
				foreach ( $templates as $t )
					{
					$this->custom_templates[ $t->template_name ][ $t->uid ] = array ( 'template_name' => $t->template_name, 'ptype_id' => $t->ptype_id, "id" => $t->uid );
					}
				}
			}
		}

	function hasThisTemplateBeenCustomised( $templatename, $ptype_id = 0 )
		{
		// Cycle the custom templates. Here we're working on the assumption that the property type has a customised template
		foreach ( $this->custom_templates as $record_template_name => $val )
			{
			foreach ( $val as $record_id => $record )
				{
				if ( $record_template_name == $templatename && $record[ 'ptype_id' ] == $ptype_id )
					{
					$this->temp_ptype_id = $record[ 'ptype_id' ];

					return true;
					}
				}
			}
		// What if it doesn't? Here we'll look for a customised template for that template name, but property type id of 0. If it exists, we'll return true. It's a fallback to allow us to find the templates that should work on all property types.
		foreach ( $this->custom_templates as $record_template_name => $val )
			{
			foreach ( $val as $record_id => $record )
				{
				if ( $record_template_name == $templatename && $record[ 'ptype_id' ] == 0 )
					{
					$this->temp_ptype_id = $record[ 'ptype_id' ];

					return true;
					}
				}
			}

		return false;
		}

	function getTemplateData( $templatename, $ptype_id = 0 )
		{
		$cssFile = "jomrescss.css";
		if ( $this->using_bootstrap ) $cssFile = "jomrescss_bootstrap.css";
		$customised = $this->hasThisTemplateBeenCustomised( $templatename, $ptype_id );
		if ( $customised )
			{
			$query     = "SELECT value,ptype_id FROM #__jomres_custom_templates WHERE `template_name` = '" . $templatename . "' AND `ptype_id`='" . (int) $this->temp_ptype_id . "' ";
			$templates = doSelectSql( $query );
			if ( count( $templates ) > 0 )
				{
				foreach ( $templates as $t )
					{
					return stripslashes( htmlspecialchars_decode( $t->value ) );
					}
				}
			}
		else // We need to read in from the file itself
			{
			if ( $templatename == $cssFile ) return file_get_contents( JOMRESPATH_BASE . JRDS . "css" . JRDS . $cssFile );
			else
			return file_get_contents( $this->default_template_files_folder . JRDS . $templatename );
			}
		}

	}

?>