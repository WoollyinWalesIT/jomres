<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 9.8.17
 * @package Jomres
 * @copyright	2005-2016 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10002partners
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
		$htmlFuncs          = jomres_singleton_abstract::getInstance( 'html_functions' );
		$this->cpanelButton = $htmlFuncs->cpanelButton( JOMRES_SITEPAGE_URL_ADMIN . "&task=partners", 'Help.png', "Our Partners", "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/", jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN", '_JOMRES_CUSTOMCODE_MENUCATEGORIES_MAIN', false, false ), $external = false );
		}

	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}

?>