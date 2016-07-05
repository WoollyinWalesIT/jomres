<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j16000log_location_setting_warning
	{
	function __construct()
		{
			// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{$this->template_touchable = false;return;}
		
		$this->retVals = '';
		
		$siteConfig          = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig            = $siteConfig->get();
		if (!isset($jrConfig['log_path']) || $jrConfig['log_path'] == '')
			{
			$output['_JOMRES_CONFIG_LOG_LOCATION_WARNING'] = jr_gettext("_JOMRES_CONFIG_LOG_LOCATION_WARNING","_JOMRES_CONFIG_LOG_LOCATION_WARNING",false);
			$output['_JOMRES_CONFIG_LOG_LOCATION'] = jr_gettext("_JOMRES_CONFIG_LOG_LOCATION","_JOMRES_CONFIG_LOG_LOCATION",false);

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'log_location_setting_warning.html' );
			$tmpl->addRows( 'pageoutput', $pageoutput );
			$this->retVals = $tmpl->getParsedTemplate(); 
			}
		}
	
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->retVals;
		}
	}

?>