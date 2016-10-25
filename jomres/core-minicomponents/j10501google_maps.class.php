<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.16
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10501google_maps
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}

		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();

		$configurationPanel 			= $componentArgs[ 'configurationPanel' ];
		$lists 							= $componentArgs[ 'lists' ];
		$map_styles_dropdown 			= $componentArgs[ 'map_styles_dropdown' ];

		

		$configurationPanel->startPanel( jr_gettext( "JOMRES_GOOGLE_MAPS", 'JOMRES_GOOGLE_MAPS', false ) );
		
		$configurationPanel->insertDescription(jr_gettext( 'JOMRES_GOOGLE_MAPS_INFO', 'JOMRES_GOOGLE_MAPS_INFO', false ));

		$configurationPanel->setleft( jr_gettext( 'JOMRES_COM_A_MAPSKEY', 'JOMRES_COM_A_MAPSKEY', false ) );
		$configurationPanel->setmiddle( '<input type="text" class="input-large" name="cfg_google_maps_api_key" value="' . $jrConfig[ 'google_maps_api_key' ] . '" />' );
		$configurationPanel->setright( jr_gettext( 'JOMRES_COM_A_MAPSKEY_DESC', 'JOMRES_COM_A_MAPSKEY_DESC', false ) );
		$configurationPanel->insertSetting();
			
		$configurationPanel->setleft( jr_gettext( 'JOMRES_GOOGLE_MAP_STYLE', 'JOMRES_GOOGLE_MAP_STYLE', false ) );
		$configurationPanel->setmiddle( $map_styles_dropdown );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( 'JOMRES_GOOGLE_MAPS_POIS', 'JOMRES_GOOGLE_MAPS_POIS', false ) );
		$configurationPanel->setmiddle( $lists[ 'gmap_pois' ] );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();
		
		$configurationPanel->setleft( jr_gettext( 'JOMRES_GOOGLE_MAP_OPTION_TRANSIT', 'JOMRES_GOOGLE_MAP_OPTION_TRANSIT', false ) );
		$configurationPanel->setmiddle( $lists[ 'gmap_layer_transit' ] );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->endPanel();
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
