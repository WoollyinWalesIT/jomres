<?php
/**
 * Core file
 *
 * @author Vince Wooll <sales@jomres.net>
 * @version Jomres 7
 * @package Jomres
 * @copyright    2005-2013 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly.
 **/


// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j10002listbookings
	{
	function j10002listbookings()
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig   = $siteConfig->get();
		if ( $jrConfig[ 'advanced_site_config' ] == 1 )
			{
			$htmlFuncs          = jomres_singleton_abstract::getInstance( 'html_functions' );
			$this->cpanelButton = $htmlFuncs->cpanelButton( JOMRES_SITEPAGE_URL_ADMIN . '&task=listbookings', 'ListBookings.png', jr_gettext( "_JRPORTAL_CPANEL_LISTBOOKINGS", _JRPORTAL_CPANEL_LISTBOOKINGS, false, false ), "/".JOMRES_ROOT_DIRECTORY."/images/jomresimages/small/", jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", _JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS, false, false ) );
			}
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( "_JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS", _JOMRES_CUSTOMCODE_MENUCATEGORIES_BOOKINGS );

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