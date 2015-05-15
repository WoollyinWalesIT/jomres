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

class j10002manage_properties
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false; return;
			}
		global $htmlFuncs; // We'll leave this one instance of this variable as global here because some older plugins will need it, and as this plugin's the first to be run in administrator, this should fix it
		$htmlFuncs = jomres_singleton_abstract::getInstance( 'html_functions' );

		$this->cpanelButton = $htmlFuncs->cpanelButton( JOMRES_SITEPAGE_URL_NOSEF ."&task=dashboard", 'listProperties.png', jr_gettext( "TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE", TOUR_ID_TOUR_TARGET_FRONTEND_LIST_PROPERTIES_TITLE, false, false ), "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/", jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", _JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN, false, false ) , true  );
		}



	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}