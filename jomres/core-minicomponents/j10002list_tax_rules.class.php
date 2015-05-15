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

class j10002list_tax_rules
	{
	function __construct()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		return; // This functionality is currently disabled, whilst it's possible to create tax rules, there are currently very few exceptions and it's likely that this will confuse people un-necessarily.
		$htmlFuncs          = jomres_singleton_abstract::getInstance( 'html_functions' );
		$this->cpanelButton = $htmlFuncs->cpanelButton( JOMRES_SITEPAGE_URL_ADMIN . '&task=list_tax_rules', 'Taxes.png', jr_gettext( "_JOMRES_TAX_RULES_LIST", _JOMRES_TAX_RULES_LIST, false, false ), "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/", jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", _JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES, false, false ) );
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES", _JOMRES_CUSTOMCODE_MENUCATEGORIES_TAXES );

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

?>