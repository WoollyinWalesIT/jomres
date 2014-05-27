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

class j10002subscriptions_packages
	{
	function j10002subscriptions_packages()
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
		$htmlFuncs  = jomres_singleton_abstract::getInstance( 'html_functions' );
		if ( $jrConfig[ 'useSubscriptions' ] == "0" ) return;

		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			$this->cpanelButton = $htmlFuncs->cpanelButton( JOMRES_SITEPAGE_URL_ADMIN . '&task=list_subscription_packages', 'ViewDatabase.png', jr_gettext( "_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE", _JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE, false, false ), "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/", jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION", _JOMRES_CUSTOMCODE_MENUCATEGORIES_INCOME_GENERATION, false, false ) );
			}
		}


	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return $this->cpanelButton;
		}
	}

?>