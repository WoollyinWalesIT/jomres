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
 * Configuration panel for Single room propertys
#
 *
 * @package Jomres
#
 */
class j00501srps
	{
	/**
	#
	 * Constructor: Outputs inputs for configuring single room propertys
	#
	 */
	function j00501srps( $componentArgs )
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
		$lists              = $componentArgs[ 'lists' ];
		$mrConfig           = getPropertySpecificSettings();
		if ( $mrConfig[ 'is_real_estate_listing' ] == 1 ) return;
		$weekdayDropdown            = $componentArgs[ 'weekdayDropdown' ];
		$fixedArrivalDatesRecurring = $componentArgs[ 'fixedArrivalDatesRecurring' ];

		$configurationPanel->startPanel( jr_gettext( "_JOMRES_PROPERTYCONFIG_SRPS", _JOMRES_PROPERTYCONFIG_SRPS, false ) );

		//if (JOMRES_SINGLEPROPERTY) // Allows Solo users to change the type from SRP to MRP and vice versa. Nobody else can do this.
		//	{
		$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_SINGLEROOMPROPERTY", _JOMRES_COM_A_SINGLEROOMPROPERTY, false ) );
		$configurationPanel->setmiddle( $lists[ 'singleRoomProperty' ] );
		$configurationPanel->setright( jr_gettext( "_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC", _JOMRES_COM_A_SINGLEROOMPROPERTY_DESC, false ) );
		$configurationPanel->insertSetting();
		//	}

		if ( $mrConfig[ 'tariffmode' ] == "1" )
			{
			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_TARIFFPRICESAREWEEKLY", _JOMRES_COM_A_TARIFFPRICESAREWEEKLY, false ) );
			$configurationPanel->setmiddle( $lists[ 'tariffChargesStoredWeeklyYesNo' ] );
			$configurationPanel->setright( jr_gettext( "_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC", _JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC, false ) );
			$configurationPanel->insertSetting();
			}

		if ( $mrConfig[ 'wholeday_booking' ] == "1" )
			{
			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS", _JOMRES_COM_A_FIXEDPERIODBOOKINGS, false ) );
			$configurationPanel->setmiddle( $lists[ 'fixedPeriodBookings' ] );
			$configurationPanel->setright( jr_gettext( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY", _JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY, false ) );
			$configurationPanel->insertSetting();
			}
		else
			{
			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS", _JOMRES_COM_A_FIXEDPERIODBOOKINGS, false ) );
			$configurationPanel->setmiddle( $lists[ 'fixedPeriodBookings' ] );
			$configurationPanel->setright( jr_gettext( "_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC", _JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC, false ) );
			$configurationPanel->insertSetting();
			}

		$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_FIXEDPERIOD", _JOMRES_COM_A_FIXEDPERIOD, false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox"  size="5" name="cfg_fixedPeriodBookingsNumberOfDays" value="' . $mrConfig[ 'fixedPeriodBookingsNumberOfDays' ] . '" />' );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS", _JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS, false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox"  size="5" name="cfg_numberofFixedPeriods" value="' . $mrConfig[ 'numberofFixedPeriods' ] . '" />' );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT", _JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT, false ) );
		$configurationPanel->setmiddle( $lists[ 'fixedPeriodBookingsShortYesNo' ] );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS", _JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS, false ) );
		$configurationPanel->setmiddle( '<input type="text" class="inputbox"  size="5" name="cfg_fixedPeriodBookingsShortNumberOfDays" value="' . $mrConfig[ 'fixedPeriodBookingsShortNumberOfDays' ] . '" />' );
		$configurationPanel->setright();
		$configurationPanel->insertSetting();

		if ( $mrConfig[ 'wholeday_booking' ] == "1" )
			{
			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY", _JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY, false ) );
			$configurationPanel->setmiddle( $lists[ 'fixedArrivalDateYesNo' ] );
			$configurationPanel->setright( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY", _JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY, false ) );
			$configurationPanel->insertSetting();

			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY", _JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY, false ) );
			$configurationPanel->setmiddle( $weekdayDropdown );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}
		else
			{
			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO", _JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO, false ) );
			$configurationPanel->setmiddle( $lists[ 'fixedArrivalDateYesNo' ] );
			$configurationPanel->setright( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC", _JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC, false ) );
			$configurationPanel->insertSetting();

			$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY", _JOMRES_COM_MR_FIXEDARRIVALDATE_DAY, false ) );
			$configurationPanel->setmiddle( $weekdayDropdown );
			$configurationPanel->setright();
			$configurationPanel->insertSetting();
			}

		if ( $jrConfig[ 'minimalconfiguration' ] != "1" || $thisJRUser->superPropertyManager )
			{
			if ( $mrConfig[ 'wholeday_booking' ] == "1" )
				{
				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY", _JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY, false ) );
				$configurationPanel->setmiddle( $fixedArrivalDatesRecurring );
				$configurationPanel->setright( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY", _JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY, false ) );
				$configurationPanel->insertSetting();
				}
			else
				{
				$configurationPanel->setleft( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING", _JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING, false ) );
				$configurationPanel->setmiddle( $fixedArrivalDatesRecurring );
				$configurationPanel->setright( jr_gettext( "_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC", _JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC, false ) );
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