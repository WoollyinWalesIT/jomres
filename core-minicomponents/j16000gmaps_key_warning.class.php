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

class j16000gmaps_key_warning
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

		if (!isset($jrConfig['google_maps_api_key']) || $jrConfig['google_maps_api_key'] == '')
			{
			$output['JOMRES_COM_A_MAPSKEY'] = jr_gettext("JOMRES_COM_A_MAPSKEY","JOMRES_COM_A_MAPSKEY",false);
			$output['_JOMRES_CONFIG_GMAP_KEY_WARNING'] = jr_gettext("_JOMRES_CONFIG_GMAP_KEY_WARNING","_JOMRES_CONFIG_GMAP_KEY_WARNING",false);

			$pageoutput[ ] = $output;
			$tmpl          = new patTemplate();
			$tmpl->setRoot( JOMRES_TEMPLATEPATH_ADMINISTRATOR );
			$tmpl->readTemplatesFromInput( 'gmaps_key_warning.html' );
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