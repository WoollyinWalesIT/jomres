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

/**
#
 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
#
 *
 * @package Jomres
#
 */
class j00010reception_option_03_dobooking
	{

	/**
	#
	 * xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	#
	 */
	function j00010reception_option_03_dobooking( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$property_uid = getDefaultProperty();
		$mrConfig     = getPropertySpecificSettings( $property_uid );
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) return;

		$siteConfig                = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig                  = $siteConfig->get();
		$output[ 'BOOKAROOMLINK' ] = JOMRES_SITEPAGE_URL . "&task=dobooking";
		if ( $jrConfig[ 'useSSLinBookingform' ] == "1" ) $link = jomresURL( $output[ 'BOOKAROOMLINK' ], 1 );
		else
		$link = jomresURL( $output[ 'BOOKAROOMLINK' ] );

		$this->cpanelButton = jomres_mainmenu_option( $link, 'NewBooking.png', jr_gettext( '_JOMRES_FRONT_MR_MENU_BOOKAROOM', _JOMRES_FRONT_MR_MENU_BOOKAROOM, false, false ), null, jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS, false, false ) );
		}

	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( "_JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS", _JOMRES_CUSTOMCODE_JOMRESMAINMENU_RECEPTION_BOOKINGS );

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