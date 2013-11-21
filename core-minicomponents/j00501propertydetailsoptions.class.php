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
 * Configuration panel for miscelleneous options
#
 *
 * @package Jomres
#
 */
class j00501propertydetailsoptions
	{
	/**
	#
	 * Constructor: Constructs and outputs miscelleneous options
	#
	 */
	function j00501propertydetailsoptions( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = false;

			return;
			}
		$configurationPanel = $componentArgs[ 'configurationPanel' ];
		$thisJRUser         = jomres_singleton_abstract::getInstance( 'jr_user' );
		$siteConfig         = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig           = $siteConfig->get();
		$mrConfig           = getPropertySpecificSettings();
		$lists              = $componentArgs[ 'lists' ];
		$configurationPanel->startPanel( jr_gettext( "_JOMRES_PATHWAY_PROPERTYDETAILS", _JOMRES_PATHWAY_PROPERTYDETAILS, false ) );

		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			if ( $jrConfig[ 'minimalconfiguration' ] != "1" || $thisJRUser->superPropertyManager )
				{
				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_SHOWONLYAVLCAL", _JOMRES_COM_A_SHOWONLYAVLCAL, false ) );
				$configurationPanel->setmiddle( $lists[ 'showOnlyAvailabilityCalendar' ] );
				$configurationPanel->setright( jr_gettext( "_JOMRES_COM_A_SHOWONLYAVLCAL_DESC", _JOMRES_COM_A_SHOWONLYAVLCAL_DESC, false ) );
				$configurationPanel->insertSetting();
				}
			if ( $mrConfig[ 'showOnlyAvailabilityCalendar' ] == "1" )
				{
				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MONTHSTOSHOW", _JOMRES_COM_MONTHSTOSHOW, false ) );
				$configurationPanel->setmiddle( '<input type="text" class="inputbox" size="5" name="cfg_CalendarMonthsToShow" value="' . $mrConfig[ 'CalendarMonthsToShow' ] . '"/>' );
				$configurationPanel->setright( jr_gettext( "_JOMRES_COM_MONTHSTOSHOW_DESC", _JOMRES_COM_MONTHSTOSHOW_DESC, false ) );
				$configurationPanel->insertSetting();

				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MONTHS_STARTOFYEAR", _JOMRES_COM_MONTHS_STARTOFYEAR, false ) );
				$configurationPanel->setmiddle( $lists[ 'calstartfrombeginningofyear' ] );
				$configurationPanel->setright( jr_gettext( "_JOMRES_COM_MONTHS_STARTOFYEAR_DESC", _JOMRES_COM_MONTHS_STARTOFYEAR_DESC, false ) );
				$configurationPanel->insertSetting();
				}
			}

		if ( $jrConfig[ 'minimalconfiguration' ] != "1" || $thisJRUser->superPropertyManager )
			{
			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE", _JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE, false ) );
			$configurationPanel->setmiddle( $lists[ 'showSlideshowInline' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();

			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK", _JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK, false ) );
			$configurationPanel->setmiddle( $lists[ 'showSlideshowLink' ] );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}

		if ( $mrConfig[ 'is_real_estate_listing' ] == 0 )
			{
			if ( ( $jrConfig[ 'minimalconfiguration' ] != "1" || $thisJRUser->superPropertyManager ) && $mrConfig[ 'singleRoomProperty' ] != "1" )
				{
				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS", _JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS, false ) );
				$configurationPanel->setmiddle( $lists[ 'roomslistinpropertydetails' ] );
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_SHOWROOMSLISTLINK", _JOMRES_COM_A_SHOWROOMSLISTLINK, false ) );
				$configurationPanel->setmiddle( $lists[ 'showRoomsListingLink' ] );
				$configurationPanel->setright();
				$configurationPanel->insertSetting();
				}

			if ( $jrConfig[ 'minimalconfiguration' ] != "1" || $thisJRUser->superPropertyManager )
				{
				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR", _JOMRES_COM_A_SHOWAVILABILITY_CALENDAR, false ) );
				$configurationPanel->setmiddle( $lists[ 'showAvailabilityCalendar' ] );
				$configurationPanel->setright( jr_gettext( "_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC", _JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC, false ) );
				$configurationPanel->insertSetting();

				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE", _JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE, false ) );
				$configurationPanel->setmiddle( $lists[ 'showTariffsInline' ] );
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK", _JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK, false ) );
				$configurationPanel->setmiddle( $lists[ 'showTariffsLink' ] );
				$configurationPanel->setright();
				$configurationPanel->insertSetting();

				$configurationPanel->setleft( jr_gettext( "JOMRES_COM_A_VERBOSETARIFFINTO", JOMRES_COM_A_VERBOSETARIFFINTO, false ) );
				$configurationPanel->setmiddle( $lists[ 'verbosetariffinfo' ] );
				$configurationPanel->setright( jr_gettext( "JOMRES_COM_A_VERBOSETARIFFINTO_DESC", JOMRES_COM_A_VERBOSETARIFFINTO_DESC, false ) );
				$configurationPanel->insertSetting();

				}
			}
		$configurationPanel->endPanel();
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	// This must be included in every Event/Mini-component
	function getRetVals()
		{
		return null;
		}
	}


?>