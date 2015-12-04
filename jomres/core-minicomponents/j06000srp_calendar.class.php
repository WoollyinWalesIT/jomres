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

class j06000srp_calendar
	{
	function __construct( $componentArgs = null )
		{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ){$this->template_touchable = false;return;}

		$siteConfig	   = jomres_singleton_abstract::getInstance( 'jomres_config_site_singleton' );
		$jrConfig		 = $siteConfig->get();
		$this->retVals	= "";

		jomres_cmsspecific_addheaddata( "css",JOMRES_ROOT_DIRECTORY."/css/" , "calendar.css" );

		$property_uid = (int) jomresGetParam( $_REQUEST, 'property_uid', '' );
		$mrConfig	 = getPropertySpecificSettings( $property_uid );
		$query		= "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = " . $property_uid . " LIMIT 1 ";
		$roomUid	  = doSelectSql( $query, 1 );

		$contracts = array();
		$booked_dates = array();
		
		$query	= "SELECT `date`,`contract_uid` FROM #__jomres_room_bookings WHERE room_uid = '" . (int) $roomUid . "' ";
		$room_bookings = doSelectSql( $query );
		foreach ( $room_bookings as $b)
			{
			$this->booked_dates[]=$b->date;
			$contracts[]=$b->contract_uid;
			}

		if ( count($contracts) > 0)
			{
			$query		= "SELECT `arrival`,`departure` FROM #__jomres_contracts WHERE `contract_uid` IN ('" . implode('\',\'',$contracts) ."')";
			$contractList = doSelectSql( $query );

			foreach ( $contractList as $contract )
				{
				$this->booking_start_dates[] = $contract->arrival;
				$this->booking_end_dates[] = $contract->departure;
				}
			}

		$currentYear = date( "Y" );
		$currentMonth = date( "m" );
			
		$counter		 = 1;

		$this->retVals = '
			<div class="row">
				<div class="col-md-3 jomres-calendar-day-num jomres-calendar-available"> ' . jr_gettext( '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', _JOMRES_COM_AVLCAL_INMONTHFACE_KEY ) . '</div>
				<div class="col-md-3 jomres-calendar-day-num jomres-calendar-booking-occupied">' . jr_gettext( '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', _JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY ) . '</div>
			</div>
			<table width="60%">
				<tr>';

				for ( $currentMonth; $counter <= 24; $currentMonth++ )
					{
					$this->retVals .= '<td><div class="calendar-month-container">';
					$this->retVals .= $this->makecal( $currentMonth, $currentYear, $roomUid, $property_uid );
					if ( $currentMonth == 12 )
						{
						$currentYear  = $currentYear + 1;
						$currentMonth = 0;
						}
					$this->retVals .= "</div></td>\n";
					if ( $counter % 3 == 0 and $counter < 72 ) $this->retVals .= "</tr>\n<tr>";
						$counter++;
					}

			$this->retVals .= '
				</tr>
			</table>
			';
		
		echo $this->retVals;
		unset( $this->retVals );
		}


	function makecal( $stmonth, $styear, $roomUid, $property_uid )
		{
		//$todaysDate = date( "Y/m/d" );
		$stdate     = mktime( 0, 0, 0, $stmonth, 1, $styear );
		$startdate = mktime( 0, 0, 0, $stmonth, 1 - date( "w", mktime( 0, 0, 0, $stmonth, 1, $styear ) ), $styear );
		$enddate        = mktime( 0, 0, 0, date( "m", $stdate ) + 1, 7 - date( "w", mktime( 0, 0, 0, $stmonth + 1, 0, $styear ) ), $styear );
		//$dateElements   = explode( "/", $todaysDate );
		//$unixTodaysDate = mktime( 0, 0, 0, $dateElements[ 1 ], $dateElements[ 2 ], $dateElements[ 0 ] );

		$thisMonthName = getThisMonthName( date( "n", $stdate ) , false);
		if ( $thisMonthName == "" ) 
			$thisMonthName = jr_gettext( '_JOMRES_CUSTOMTEXT_' . date( "M", $stdate ), strftime( "%B", $stdate ), false , false );

		
		$this->retVals .= '<div class="calendar-month-name">' . $thisMonthName . ' ' . strftime( "%Y", $stdate ) . '</div>';

		$this->retVals .= '<table class="calendar"  cellspacing="0" cellpadding="0">';
		$this->retVals .= "<tr>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR , false ,false ) , 0 , 1 ) . "</td>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR , false ,false ) , 0 , 1 ) . "</td>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR , false ,false ) , 0 , 1 ). "</td>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR , false ,false ) , 0 , 1 ). "</td>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR , false ,false ) , 0 , 1 ). "</td>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR , false ,false ) , 0 , 1 ). "</td>";
		$this->retVals .= "<td class='calendar-day'>" .substr ( jr_gettext( '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', _JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR , false ,false ) , 0 , 1 ). "</td>";
		$this->retVals .= "</tr>";

		$i             = 0;
		$currdate      = mktime( 0, 0, 0, date( "m", $startdate ), date( "d", $startdate ), date( "Y", $startdate ) );

		while ( $currdate < $enddate )
			{
			$this->retVals .= "<tr>";
			for ( $c = 0; $c < 7; $c++ )
				{
				
				$class = "normal-day";
				$link = JOMRES_SITEPAGE_URL . '&task=dobooking&amp;selectedProperty=' . $property_uid . '&arrivalDate=' .JSCalmakeInputDates(date("Y/m/d",$currdate));
				$fmt = date( "Y", $currdate )."/". date( "m", $currdate )."/". date( "d", $currdate );
				if ( in_array ( $fmt , $this->booked_dates) )
					{
					$link = '';
					$class = "jomres-calendar-booking-occupied";
					}
				if ( in_array ( $fmt , $this->booking_start_dates) )
					{
					$link = '';
					$class = "jomres-calendar-booking-start";
					}
				if ( in_array ( $fmt , $this->booking_end_dates) )
					{
					$class = "jomres-calendar-booking-end";
					}
				if ( in_array ( $fmt , $this->booking_start_dates) &&  in_array ( $fmt , $this->booking_end_dates) )
					{
					$link = '';
					$class = "jomres-calendar-booking-crossover";
					}

				$this->retVals .= "<td>";
				$this->retVals .= '<div class="jomres-calendar-day-num '.$class.'">';
				
				if ( date( "m" , $currdate ) == $stmonth  )
					{
					if ($link != "")
						$this->retVals .= '<a style="color: black  !important;" href="'.$link.'">'.date( "j", $currdate ).'</a>';
					else
						$this->retVals .= date( "j", $currdate );
					}
				else
					$this->retVals .= '&nbsp;';
				$this->retVals .= "</div></td>";
				$i++;
				$currdate = mktime( 0, 0, 0, date( "m", $startdate ), date( "d", $startdate ) + $i, date( "Y", $startdate ) );
				}
			$this->retVals .= "</tr>\n";
			}
		$this->retVals .= "</table>\n";
		}

	function getRetVals()
		{
		return $this->retVals;
		}
		
	}

?>