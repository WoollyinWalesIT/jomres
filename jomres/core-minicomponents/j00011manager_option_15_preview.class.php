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

class j00011manager_option_15_preview
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
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if ( $jrConfig[ 'is_single_property_installation' ] == "0" ) 
			{
			$url = jomresURL( JOMRES_SITEPAGE_URL . "&task=viewproperty&property_uid=" . get_showtime('property_uid') );
			$this->cpanelButton = jomres_mainmenu_option( $url, 'Preview.png', jr_gettext( '_JOMRES_FRONT_PREVIEW', '_JOMRES_FRONT_PREVIEW', false, false ), null, jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES", '_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_PROPERTIES', false, false ) );
			}
		else
			{
			$this->cpanelButton = "";
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}

?>