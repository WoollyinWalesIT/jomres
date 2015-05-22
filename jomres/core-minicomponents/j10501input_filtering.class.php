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

class j10501input_filtering
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
		$filtering_level_dropdown		= $componentArgs[ 'filtering_level_dropdown' ];

		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			if ( !isset( $jrConfig[ 'html_purifier_allowed_tags' ] ) ) 
				$jrConfig[ 'html_purifier_allowed_tags' ] = "p,b,strong,a[href],i,img[src]";
			
			if ( !isset( $jrConfig[ 'inputs_allowing_html' ] ) ) 
				$jrConfig[ 'inputs_allowing_html' ] = "property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers email_text description";
				
			$configurationPanel->startPanel( jr_gettext( "_JOMRES_INPUTFILTERING", _JOMRES_INPUTFILTERING, false ) );
	
			$configurationPanel->setleft( jr_gettext( '_JOMRES_INPUTFILTERING_LEVEL_TITLE', _JOMRES_INPUTFILTERING_LEVEL_TITLE, false ) );
			$configurationPanel->setmiddle( $filtering_level_dropdown );
			$configurationPanel->setright( jr_gettext( _JOMRES_INPUTFILTERING_LEVEL_DESC, '_JOMRES_INPUTFILTERING_LEVEL_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE', _JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_TITLE, false ) );
			$configurationPanel->setmiddle( '<textarea type="text" class="input-large" name="cfg_html_purifier_allowed_tags" >' . $jrConfig[ 'html_purifier_allowed_tags' ] . ' </textarea>' );
			$configurationPanel->setright( jr_gettext( _JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC, '_JOMRES_INPUTFILTERING_PURIFIER_ALLOWED_DESC', false ) );
			$configurationPanel->insertSetting();
			
			$configurationPanel->setleft( jr_gettext( '_JOMRES_INPUTFILTERING_INPUTS_TITLE', _JOMRES_INPUTFILTERING_INPUTS_TITLE, false ) );
			$configurationPanel->setmiddle( '<textarea class="input-large" name="cfg_inputs_allowing_html" >' . $jrConfig[ 'inputs_allowing_html' ] . '</textarea>' );
			$configurationPanel->setright( jr_gettext( _JOMRES_INPUTFILTERING_INPUTS_DESC, '_JOMRES_INPUTFILTERING_INPUTS_DESC', false ) );
			$configurationPanel->insertSetting();
		
			$configurationPanel->endPanel();
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}
