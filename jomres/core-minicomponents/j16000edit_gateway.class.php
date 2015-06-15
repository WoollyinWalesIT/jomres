<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 8
 * @package Jomres
 * @copyright	2005-2015 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000edit_gateway
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$this->plugin = jomresGetParam( $_REQUEST, 'plugin', '' ) ;
		$this->prefix = 'gateway_setting_'.$this->plugin;
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$output['GATEWAY'] = $this->plugin;


		if (!isset($jrConfig[ $this->prefix.'_active' ]))
			$jrConfig[$this->prefix.'_active'] = "0";
		
		$settings = $MiniComponents->specificEvent( '10510', $this->plugin );
		$active['active'] = array (
			"default" => "0",
			"setting_title" => jr_gettext('_JOMRES_STATUS_ACTIVE',_JOMRES_STATUS_ACTIVE),
			"setting_description" => "",
			"format" => "boolean"
			) ;
		$all_settings = array_merge ( $active, $settings['settings'] );

		$results = array();
		foreach ($all_settings as $key=>$setting)
			{
			switch ( $setting['format'] )
				{
				case 'boolean':
						$results[] = $this->get_snippet_bool($key , $setting );
					break;
				case 'currencycode':
						$results[] = $this->get_snippet_currencycode($key , $setting );
					break;
				case 'input':
						$results[] = $this->get_snippet_input($key , $setting );
					break;
				case 'area':
						$results[] = $this->get_snippet_area($key , $setting );
					break;
				case 'html':
						$results[] = $this->get_snippet_html($key , $setting );
					break;
				default:
				}
			}
		foreach ($results as $r )
			{
			$snippets[]['SNIPPET'] = $r;
			}

		$output['NOTES'] = $settings['notes'];
		
		$jrtbar = jomres_singleton_abstract::getInstance( 'jomres_toolbar' );
		$jrtb   = $jrtbar->startTable();
		
		$jrtb .= $jrtbar->toolbarItem( 'cancel', JOMRES_SITEPAGE_URL_ADMIN . "&task=list_gateways", '' );
		$jrtb .= $jrtbar->toolbarItem( 'save', '', '', true, 'save_gateway' );
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_gateway.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		$tmpl->addRows( 'notes', $notes );
		$tmpl->addRows( 'snippets', $snippets );
		$tmpl->displayParsedTemplate(); 
		}
	
		
		// Allows gateway developers to supply their own html if 
	function get_snippet_html($key , $setting)
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$index = $this->prefix.'_'.$key;

		$value = $setting['html'];
		
		$output = array();
		$pageoutput = array();
		
		$output['INPUT_NAME'] = $index;
		$output['HTML'] = $value;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];
		
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_gateway_snippet_html.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		return $tmpl->getParsedTemplate();
		}
	
	function get_snippet_area($key , $setting)
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$index =$this->prefix.'_'.$key;

		if (isset($jrConfig[$index]))
			$value = $jrConfig[$index];
		else
			$value = $setting['default'];
		
		$output = array();
		$pageoutput = array();
		
		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $value;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];
		
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_gateway_snippet_area.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		return $tmpl->getParsedTemplate();
		}

	function get_snippet_input($key , $setting)
		{

		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$index =$this->prefix.'_'.$key;

		if (isset($jrConfig[$index]))
			$value = $jrConfig[$index];
		else
			$value = $setting['default'];
		
		$output = array();
		$pageoutput = array();
		
		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $value;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];
		
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_gateway_snippet_input.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		return $tmpl->getParsedTemplate();
		}
	
	function get_snippet_currencycode($key , $setting)
		{
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$index =$this->prefix.'_'.$key;

		if (isset($jrConfig[$index]))
			$value = $jrConfig[$index];
		else
			$value = $setting['default'];
		
		$c_codes = new currency_codes( $value );
		$c_codes->input_name = $index;
		$dropdown = $c_codes->makeCodesDropdown();
		
		$output = array();
		$pageoutput = array();
		
		$output['INPUT_NAME'] = $index;
		$output['SWITCH'] = $dropdown;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];
		
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_gateway_snippet_currencycode.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		return $tmpl->getParsedTemplate();
		}

	function get_snippet_bool($key , $setting)
		{
		
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		
		$index =$this->prefix.'_'.$key;

		if (isset($jrConfig[$index]))
			$value = $jrConfig[$index];
		else
			$value = $setting['default'];
	
		$yesno = array();
		$yesno[] = jomresHTML::makeOption( '0', jr_gettext('_JOMRES_COM_MR_NO',_JOMRES_COM_MR_NO,FALSE) );
		$yesno[] = jomresHTML::makeOption( '1', jr_gettext('_JOMRES_COM_MR_YES',_JOMRES_COM_MR_YES,FALSE) );
		
		$input = jomresHTML::selectList( $yesno, $index, 'class="inputbox" size="1"', 'value', 'text', $value );
		
		$output = array();
		$pageoutput = array();
		
		$output['INPUT_NAME'] = $index;
		$output['SWITCH'] = $input;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];
		
		$pageoutput[ ] = $output;
		$tmpl          = new patTemplate();
		$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
		$tmpl->readTemplatesFromInput( 'edit_gateway_snippet_bool.html' );
		$tmpl->addRows( 'pageoutput', $pageoutput );
		return $tmpl->getParsedTemplate();
		}
		
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}

?>