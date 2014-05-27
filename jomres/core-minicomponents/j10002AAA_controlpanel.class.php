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

class j10002AAA_controlpanel
	{
	function j10002AAA_controlpanel()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		global $htmlFuncs; // We'll leave this one instance of this variable as global here because some older plugins will need it, and as this plugin's the first to be run in administrator, this should fix it
		$htmlFuncs = jomres_singleton_abstract::getInstance( 'html_functions' );

		$this->cpanelButton = $htmlFuncs->cpanelButton( JOMRES_SITEPAGE_URL_ADMIN, 'Desktop.png', jr_gettext( "_JOMRES_CONTROLPANEL", _JOMRES_CONTROLPANEL, false, false ), "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/", jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", _JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN, false, false ) );
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", _JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}