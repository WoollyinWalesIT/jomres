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

class j01020showtariffs
	{
	function __construct( $componentArgs )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch )
			{
			$this->template_touchable = true;

			return;
			}
		$mrConfig = getPropertySpecificSettings();
		if ( $mrConfig[ 'verbosetariffinfo' ] == "0" ) $this->retVals = $MiniComponents->triggerEvent( '01025' ); //
		else
			{
			//$showheader=$componentArgs['showheader'];
			$property_uid             = get_showtime( 'property_uid' );
			$siteConfig               = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
			$jrConfig                 = $siteConfig->get();
			$mrConfig                 = getPropertySpecificSettings( $property_uid );
			$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
			$pop                      = jomresGetParam( $_REQUEST, 'popup', '0' );
			$ccodes                   = currencyCodesArray();
			if ( $showheader ) property_header( $property_uid );

			if ( $pop != "1" )
				{
				$link[ 'THELINK' ]    = '<a href="javascript:toggleLayer(\'JomresTariffs\');" title="' . jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE', false ) . '">' . jr_gettext( '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS', '_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS' ) . '</a>';
				$link[ 'divinfoon' ]  = '<div id="JomresTariffs">';
				$link[ 'divinfooff' ] = '</div>';
				}
			else
				{
				$link[ 'link' ]       = "";
				$link[ 'divinfoon' ]  = "";
				$link[ 'divinfooff' ] = "";
				}
			$hiddenlayerlink[ ] = $link;

			$query        = "SELECT `rates_uid`,`rate_title`,`rate_description`,`validfrom`,`validto`,
				`roomrateperday`,`mindays`,`maxdays`,`minpeople`,`maxpeople`,`roomclass_uid`,
				`ignore_pppn`,`allow_ph`,`allow_we`
				FROM #__jomres_rates WHERE property_uid = " . (int) $property_uid . " ORDER BY validfrom";
			$tariffsList  = doSelectSql( $query );
			$google_deets = array ();
			$tariff_deets = array ();

			$query                   = "SELECT tarifftype_id,tariff_id  FROM #__jomcomp_tarifftype_rate_xref  WHERE property_uid = " . (int) $property_uid;
			$result                  = doSelectSql( $query );
			$tariff_tarifftypes_xref = array ();
			if ( count( $result ) > 0 )
				{
				foreach ( $result as $r )
					{
					$tariff_tarifftypes_xref[ $r->tariff_id ] = $r->tarifftype_id;
					}
				}

			if ( count( $tariffsList ) > 0 )
				{
				$today          = date( "Y/m/d" );
				$date_elements  = explode( "/", $today );
				$unixTodaysDate = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
				foreach ( $tariffsList as $tariff )
					{
					$tariffRoomClass = $tariff->roomclass_uid;
					if ( $tariffRoomClass != "" )
						{
					if ( count( $current_property_details->room_types ) > 0 )
						{
						foreach ( $current_property_details->room_types as $type )
							{
							$roomClassAbbv     = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV' . (int) $tariffRoomClass, stripslashes( $type['abbv'] ), false, false );
							$roomClassFullDesc = jr_gettext( '_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC' . (int) $tariffRoomClass, stripslashes( $type['desc'] ), false, false );
							}
						}
					}
					else
						$roomClassAbbv = "";
					$validfrom     = $tariff->validfrom;
					$validto       = $tariff->validto;
					$date_elements = explode( "/", $validfrom );
					$unixValidfrom = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );
					$date_elements = explode( "/", $validto );
					$unixValidto   = mktime( 0, 0, 0, $date_elements[ 1 ], $date_elements[ 2 ], $date_elements[ 0 ] );

					if ( $unixTodaysDate < $unixValidto )
						{
						$output                = array ();
						$output[ 'HTITLE' ]    = jr_gettext( '_JOMRES_FRONT_TARIFFS_TITLE', '_JOMRES_FRONT_TARIFFS_TITLE' );
						$output[ 'HDESC' ]     = jr_gettext( '_JOMRES_FRONT_TARIFFS_DESC', '_JOMRES_FRONT_TARIFFS_DESC' );
						$output[ 'HROOMTYPE' ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', '_JOMRES_FRONT_TARIFFS_ROOMTYPE' );
						$output[ 'HSTARTS' ]   = jr_gettext( '_JOMRES_FRONT_TARIFFS_STARTS', '_JOMRES_FRONT_TARIFFS_STARTS' );
						$output[ 'HENDS' ]     = jr_gettext( '_JOMRES_FRONT_TARIFFS_ENDS', '_JOMRES_FRONT_TARIFFS_ENDS' );
						$output[ 'HMINDAYS' ]  = jr_gettext( '_JOMRES_FRONT_TARIFFS_MINDAYS', '_JOMRES_FRONT_TARIFFS_MINDAYS' );
						$output[ 'HMAXDAYS' ]  = jr_gettext( '_JOMRES_FRONT_TARIFFS_MAXDAYS', '_JOMRES_FRONT_TARIFFS_MAXDAYS' );
						$output[ 'HMINPEEPS' ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_MINPEEPS', '_JOMRES_FRONT_TARIFFS_MINPEEPS' );
						$output[ 'HMAXPEEPS' ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', '_JOMRES_FRONT_TARIFFS_MAXPEEPS' );

						if ( $mrConfig[ 'tariffmode' ] == "2" ) $output[ 'TITLE' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID' . $tariff_tarifftypes_xref[ $tariff->rates_uid ], stripslashes( $tariff->rate_title ) );
						else
						$output[ 'TITLE' ] = jr_gettext( '_JOMRES_CUSTOMTEXT_TARIFF_TITLE' . $tariff->rates_uid, stripslashes( $tariff->rate_title ) );


						$output[ 'VALIDFROM' ] = outputDate( $tariff->validfrom );
						$output[ 'VALIDTO' ]   = outputDate( $tariff->validto );

						$output[ 'MINDAYS' ]           = $tariff->mindays;
						$output[ 'MAXDAYS' ]           = $tariff->maxdays;
						$output[ 'MINPEOPLE' ]         = $tariff->minpeople;
						$output[ 'MAXPEOPLE' ]         = $tariff->maxpeople;
						$output[ 'ROOMCLASSABBV' ]     = $roomClassAbbv;
						$output[ 'ROOMCLASSFULLDESC' ] = $roomClassFullDesc;
						if ( empty( $mrConfig[ 'ratemultiplier' ] ) ) $mrConfig[ 'ratemultiplier' ] = 1;
						else
						$mrConfig[ 'ratemultiplier' ] += 0;

						if ( $mrConfig[ 'prices_inclusive' ] == 1 ) $price_inc_vat = $tariff->roomrateperday;
						else
						$price_inc_vat = $current_property_details->get_gross_accommodation_price( $tariff->roomrateperday, $property_uid );

						$multiplier = 1;
						if ( !isset( $mrConfig[ 'booking_form_daily_weekly_monthly' ] ) ) // This shouldn't be needed, as the setting is automatically pulled from jomres_config.php, but there's always one weird server...
						$mrConfig[ 'booking_form_daily_weekly_monthly' ] = "D";
						switch ( $mrConfig[ 'booking_form_daily_weekly_monthly' ] )
						{
							case "D":
								$multiplier = 1;
								break;
							case "W":
								if ( $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] != "1" ) $multiplier = 7;
								break;
							case "M":
								$multiplier = 30;
								break;
						}
						switch ( $mrConfig[ 'booking_form_daily_weekly_monthly' ] )
						{
							case "D":
								if ( $mrConfig[ 'wholeday_booking' ] == "1" ) $post_text = jr_gettext( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY' );
								else
									{
									if ( $mrConfig[ 'perPersonPerNight' ] == "0" ) $post_text = "&nbsp;" . jr_gettext( '_JOMRES_FRONT_TARIFFS_PN', '_JOMRES_FRONT_TARIFFS_PN' );
									else
									$post_text = "&nbsp;" . jr_gettext( '_JOMRES_FRONT_TARIFFS_PPPN', '_JOMRES_FRONT_TARIFFS_PPPN' );
									}
								break;
							case "W":
								$post_text = jr_gettext( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY' );
								break;
							case "M":
								$post_text = jr_gettext( '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY', '_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY' );
								break;
						}

						if ( $mrConfig[ 'wholeday_booking' ] == "1" )
							{
							if ( $tariff->ignore_pppn || $mrConfig[ 'perPersonPerNight' ] == "0" ) $output[ 'ROOMRATEPERDAY' ] = output_price( $price_inc_vat * $multiplier ) . " " . jr_gettext( '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY' );
							else
							$output[ 'ROOMRATEPERDAY' ] = output_price( $price_inc_vat * $multiplier ) . " " . jr_gettext( '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY', '_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY' );
							}
						else
							{
							$output[ 'ROOMRATEPERDAY' ] = output_price( $price_inc_vat * $multiplier ) . " " . $post_text;
							}

						if ( $mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == "1" && $mrConfig[ 'tariffmode' ] == "1" )
							{
							if ( $mrConfig[ 'tariffmode' ] == 2 ) $price_inc_vat = $price_inc_vat * 7;
							$output[ 'ROOMRATEPERDAY' ] = output_price( $price_inc_vat ) . " " . jr_gettext( '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK' );
							}

						if ( $tariff->allow_we == "0" ) $output[ 'NOTWEEKENDS' ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', '_JOMRES_FRONT_TARIFFS_NOTWEEKEND' );

						$theRate = number_format( ( $price_inc_vat ), 2, '.', '' );
						if ( $tariff->roomrateperday > 0 ) $tariff_deets[ ] = $output;
						}
					}
				}

			$tmpl = new patTemplate();
			$tmpl->addRows( 'pageoutput', $tariff_deets );
			$tmpl->addRows( 'hiddenlayerlink', $hiddenlayerlink );
			$tmpl->addRows( 'show_tariffs', $tariff_deets );
			$mcOutput = $MiniComponents->getAllEventPointsData( '01020' );
			if ( count( $mcOutput ) > 0 )
				{
				foreach ( $mcOutput as $key => $val )
					{
					$tmpl->addRows( 'customOutput_' . $key, array ( $val ) );
					}
				}
			$componentArgs = array ( 'tmpl' => $tmpl );
			if ( $mrConfig[ 'singleRoomProperty' ] == "0" && $MiniComponents->eventFileExistsCheck( '00234' ) )
				{
				$MiniComponents->triggerEvent( '00234', $componentArgs ); //
				}
			elseif ( $MiniComponents->eventFileExistsCheck( '00236' ) )
				{
				$MiniComponents->triggerEvent( '00236', $componentArgs ); //
				}
			else
				{
				$tmpl->setRoot( JOMRES_TEMPLATEPATH_FRONTEND );
				$tmpl->readTemplatesFromInput( 'show_tariffs.html' );

				$output_now = (bool) jomresGetParam( $_REQUEST, 'op', false );
				if ( $output_now ) $tmpl->displayParsedTemplate();
				else
				$this->retVals = $tmpl->getParsedTemplate();
				}
			}
		}


	function touch_template_language()
		{
		$output = array ();

		$output[ ] = jr_gettext( '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN', '_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_TITLE', '_JOMRES_FRONT_TARIFFS_TITLE' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_DESC', '_JOMRES_FRONT_TARIFFS_DESC' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_ROOMTYPE', '_JOMRES_FRONT_TARIFFS_ROOMTYPE' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_STARTS', '_JOMRES_FRONT_TARIFFS_STARTS' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_ENDS', '_JOMRES_FRONT_TARIFFS_ENDS' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_MINDAYS', '_JOMRES_FRONT_TARIFFS_MINDAYS' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_MAXDAYS', '_JOMRES_FRONT_TARIFFS_MAXDAYS' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_MINPEEPS', '_JOMRES_FRONT_TARIFFS_MINPEEPS' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_MAXPEEPS', '_JOMRES_FRONT_TARIFFS_MAXPEEPS' );
		$output[ ] = jr_gettext( '_JOMRES_CURRENCYCONVERSIONTEXT', '_JOMRES_CURRENCYCONVERSIONTEXT' );
		$output[ ] = jr_gettext( '_JOMRES_FRONT_TARIFFS_NOTWEEKEND', '_JOMRES_FRONT_TARIFFS_NOTWEEKEND' );

		foreach ( $output as $o )
			{
			echo $o;
			echo "<br/>";
			}
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
		return $this->retVals;
		}
	}

?>