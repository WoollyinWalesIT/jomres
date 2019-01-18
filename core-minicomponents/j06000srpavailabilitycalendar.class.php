<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000srpavailabilitycalendar
{
	public function __construct($componentArgs = null)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;

			return;
		}
		$mrConfig = getPropertySpecificSettings();
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$this->retVals = '';
		$this->showlinks = true;
		$queryString = $_SERVER[ 'QUERY_STRING' ];
		$queryStringArray = explode('&', $queryString);
		foreach ($queryStringArray as $qs) {
			$queryelements[ ] = substr($qs, strpos($qs, '=') + 1);
		}

		if (in_array('dobooking', $queryelements)) {
			$this->showlinks = false;
		}

		$task = get_showtime('task');
		if ($task == 'remoteavailability') {
			$property_uid = (int) jomresGetParam($_REQUEST, 'id', '');
			$mrConfig = getPropertySpecificSettings($property_uid);
			$query = 'SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '.$property_uid;
			$roomUid = doSelectSql($query, 1);
		} else {
			$property_uid = (int) $componentArgs[ 'property_uid' ];
			if (!isset($componentArgs[ 'roomUid' ])) {
				$query = 'SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '.$property_uid;
				$roomUid = doSelectSql($query, 1);
			} else {
				$roomUid = $componentArgs[ 'roomUid' ];
			}
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}
		
		$this->pop = jomresGetParam($_REQUEST, 'popup', 0);
		if ($this->pop == 1) {
			property_header($property_uid);
		}

		$requestedDate = $componentArgs[ 'requestedDate' ];
		$room_avl_enquiry = $componentArgs[ 'room_avl_enquiry' ]; // This is passed so that an MRP can use the SRPs calendar if we're requesting information about just one room. If so, well echo the output now.

		$showFullYear = $componentArgs[ 'showFullYear' ];
		if (isset($mrConfig[ 'CalendarMonthsToShow' ])) {
			$showFullYear = $mrConfig[ 'CalendarMonthsToShow' ];
		}
		if ($mrConfig[ 'showAvailabilityCalendar' ] == '1') {
			$currentYear = date('Y');
			if ($mrConfig[ 'calstartfrombeginningofyear' ] == '1') {
				$currentMonth = 1;
			} else {
				$currentMonth = date('m');
			}
			$counter = 1;
			$monthsToYearEnd = 12 - $currentMonth;
			$this->retVals .= '
			<center>
			';
			if (using_bootstrap()) {
				$this->retVals .= '<div class="well" style="margin-bottom: 10px;">';
			} else {
				$this->retVals .= '<div class="ui-widget-content ui-corner-all" style="margin-bottom: 10px;">';
			}
			$this->retVals .= "
<script>

jomresJquery(function(){
	var arrJCrossOut = jomresJquery('.crossOut');
	arrJCrossOut.each(function(i){
		var jTemp	  = jomresJquery(this),
			nWidth   = jTemp.innerWidth(),
			nHeight  = jTemp.innerHeight(),
			nHyp	  = Math.sqrt(nWidth*nWidth + nHeight*nHeight),
			nAnglRad = Math.atan2(nHeight,nWidth),
			nAnglSex = nAnglRad*360/(2*Math.PI), nCatOp, nCatAd, nHyp2
			sDomTemp = '<b class=\"child\" ';
			sDomTemp += 'style=\"width:'+nHyp+'px;';
			sDomTemp += '-webkit-transform: rotate(-'+nAnglSex+'deg);';
			sDomTemp += '-moz-transform: rotate(-'+nAnglSex+'deg);';
			sDomTemp += '-ms-transform: rotate(-'+nAnglSex+'deg);';
			sDomTemp += '-o-transform: rotate(-'+nAnglSex+'deg);';
			sDomTemp += 'transform: rotate(-'+nAnglSex+'deg);';
			sDomTemp += '-sand-transform: rotate(-'+nAnglSex+'deg);';
			nHyp2	 = (nHyp/2);
			nCatOp	  = Math.sin(nAnglRad)*nHyp2;
			nCatAd	  = Math.sqrt((nHyp2*nHyp2) - (nCatOp*nCatOp));
			sDomTemp += 'margin-top: -'+nCatOp+'px;';
			sDomTemp += 'margin-left: -'+(nHyp2-nCatAd)+'px;';
			sDomTemp += '\"></b>';
		
		jTemp.append(sDomTemp);
	});
});

</script>

<style>

.crossOut .child{
	position:absolute; 
	display:block;
	height:1px; 
	background:black;
}

</style>
			<table width=\"100%\">
							<tr >";
			if (using_bootstrap()) {
				$this->retVals .= '<td class="alert alert-info">';
			} else {
				$this->retVals .= '<td class="ui-widget-header ui-corner-all">';
			}
			$this->retVals .= '<table>
										';
			if ($mrConfig[ 'visitorscanbookonline' ] == '1' && $this->showlinks && $jrConfig[ 'show_booking_form_in_property_details' ] != '1') {
				$this->retVals .= '<tr>';
				$this->retVals .= '<td colspan="6">'.jr_gettext('_JOMRES_FRONT_CALENDAR_CLICKDATES', '_JOMRES_FRONT_CALENDAR_CLICKDATES').'</td>';
				$this->retVals .= '</tr>';
			}
			$this->retVals .= '
										<tr>
											<td bgcolor="' .$mrConfig[ 'avlcal_inbgcolour' ].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY').'</td>
											<td bgcolor="' .$mrConfig[ 'avlcal_occupiedcolour' ].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY').'</td>
											<td bgcolor="' .$mrConfig[ 'avlcal_provisionalcolour' ].'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY', '_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY').'</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr class="availability_calendar_calendars">
								<td><center>
									<table>
										<tr>';
			if ($showFullYear) {
				//echo $currentMonth;
				for ($currentMonth; $counter <= $showFullYear; ++$currentMonth) {
					$this->retVals .= "\n<td style=\"vertical-align: top\">";
					$this->retVals .= $this->makecal($currentMonth, $currentYear, $roomUid, $property_uid);
					if ($currentMonth == 12) {
						$currentYear = $currentYear + 1;
						$currentMonth = 0;
					}
					$this->retVals .= "</td>\n";
					if ($counter % 3 == 0 and $counter < 72) {
						$this->retVals .= "</tr>\n<tr>";
					}
					++$counter;
				}
			} else {
				$this->retVals .= "<td>\n";
				$this->retVals .= $this->makecal($currentMonth, $currentYear, $roomUid);
				$this->retVals .= "</td>\n";
			}
			$this->retVals .= '
										</tr>
									</table>
								</center></td>
							</tr>
						</table>
			</div>
			</center>
			';
		}

		if ($room_avl_enquiry || $jrConfig[ 'composite_property_details' ] != '1' || (jomresGetParam($_REQUEST, 'task', '') == 'dobooking') || $jrConfig[ 'is_single_property_installation' ] == '1' || $mrConfig[ 'showOnlyAvailabilityCalendar' ] == '1') {
			echo $this->retVals;
			unset($this->retVals);
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY');
		$output[ ] = jr_gettext('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

	public function makecal($stmonth, $styear, $roomUid, $property_uid)
	{
		// Adapted from source
		// http://www.weberdev.com/get_example-1430.html
		// Submitted by: Whiddon James on Dec 01st 1999
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');
		
		$mrConfig = getPropertySpecificSettings();
		$tar = jomresGetParam($_REQUEST, 'tar', 0);
		$show_links = jomresGetParam($_REQUEST, 'sl', 1);

		$showOutMonthDates = false;

		if ($this->pop == 1 || jomresGetParam($_REQUEST, 'task', '') == 'remoteavailability') { // If we are in a popup then it is not suitable to link directly to the booking form, so we'll set a target = "_BLANK" to go to the booking form.
		$target = ' TARGET="_blank" ';
		} else {
			$target = '';
		}
		if ($tar == 0) {
			$target = '';
		}

		if ($show_links == 0) {
			$this->showlinks = false;
		}

		//##################################
		//# define variables-little cleaner
		//# than mucking over the code to
		//# change stuff

		$face = 'verdana'; //# font face for all text
		$size = '1'; //# font size for all text
		$height = '12'; //# cell height
		$width = '12'; //# cell width
		$todaycolor = $mrConfig[ 'avlcal_todaycolor' ]; //# font color for the current date
		$inmonthface = $mrConfig[ 'avlcal_inmonthface' ]; //# font color for days in the display month
		$outmonthface = $mrConfig[ 'avlcal_outmonface' ]; //# font color for days not in the display month
		$inbgcolor = $mrConfig[ 'avlcal_inbgcolour' ]; //# cell bgcolor for days in the display month
		$outbgcolor = $mrConfig[ 'avlcal_outbgcolour' ]; //# cell bgcolor for days not in display month
		$occupiedcolour = $mrConfig[ 'avlcal_occupiedcolour' ]; //# cell bgcolour for occupied days
		$provisionalcolour = $mrConfig[ 'avlcal_provisionalcolour' ]; //# cell bgcolour for occupied days
		$pastcolour = $mrConfig[ 'avlcal_pastcolour' ]; //# cell bgcolour for occupied days

		//##################################
		//# make workie code stuph
		//#

		$todaysDate = date('Y/m/d');
		$stdate = mktime(0, 0, 0, $stmonth, 1, $styear);
		if ($jrConfig[ 'calendarstartofweekday' ] == '1') {
			$startdate = $currdate = mktime(0, 0, 0, $stmonth, 1 - date('w', mktime(0, 0, 0, $stmonth, 1, $styear)), $styear);
		} else {
			$startdate = $currdate = mktime(0, 0, 0, $stmonth, 1 - date('w', mktime(0, 0, 0, $stmonth, 0, $styear)), $styear);
		}
		$enddate = mktime(0, 0, 0, date('m', $stdate) + 1, 7 - date('w', mktime(0, 0, 0, $stmonth + 1, 0, $styear)), $styear);
		$dateElements = explode('/', $todaysDate);
		$unixTodaysDate = mktime(0, 0, 0, $dateElements[ 1 ], $dateElements[ 2 ], $dateElements[ 0 ]);

		$thisMonthName = getThisMonthName(date('n', $stdate), false);
		if ($thisMonthName == '') {
			$thisMonthName = jr_gettext('_JOMRES_CUSTOMTEXT_'.date('M', $stdate), strftime('%B', $stdate), false, false);
		}

		$this->retVals .= "\n<table class=\"rescal\" cellspacing=\"0\">\n";
		if (using_bootstrap()) {
			$this->retVals .= "<tr>\n<th class=\"alert-info\" colspan=\"7\" height=\"$height\"><font face=\"$face\" size=\"$size\">".$thisMonthName.' '.strftime('%Y', $stdate)."</font></th>\n</tr>\n";
		} else {
			$this->retVals .= "<tr>\n<th class=\"ui-widget-header ui-corner-all\" colspan=\"7\" height=\"$height\"><font face=\"$face\" size=\"$size\">".$thisMonthName.' '.strftime('%Y', $stdate)."</font></th>\n</tr>\n";
		}
		if ($jrConfig[ 'calendarstartofweekday' ] == '1') {
			$this->retVals .= "<tr class=\"availability_calendar_days\">\n<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR')."</font></th>
				\n</tr>\n";
		} else {
			$this->retVals .= "<tr class=\"availability_calendar_days\">\n<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR')."</font></th>\n";
			$this->retVals .= "<th width=\"$width\" height=\"$height\" valign=\"middle\" align=\"center\"><font face=\"$face\"
				size=\"$size\">".jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR')."</font></th>
				\n</tr>\n";
		}

		if ($mrConfig[ 'limitAdvanceBookingsYesNo' ] == '1') {
			$dateElements = explode('/', $todaysDate);
			$unixLatestDate = mktime(0, 0, 0, $dateElements[ 1 ], $dateElements[ 2 ] + $mrConfig[ 'advanceBookingsLimit' ], $dateElements[ 0 ]);
		}

		$i = 0;
		$sqlDates = array();
		$datesArray = array();

		while ($currdate < $enddate) {
			$sqlDates[ ] = date('Y/m/d', $currdate);
			++$i;
			$currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate) + $i, date('Y', $startdate));
		}

		$query = "SELECT contract_uid,black_booking,`date` FROM #__jomres_room_bookings WHERE room_uid = '".(int) $roomUid."' AND `date` IN ( ".jomres_implode($sqlDates, false).' ) ';
		$roomList = doSelectSql($query);
		$booking_start_dates = array();
		$booking_end_dates = array();
		foreach ($roomList as $cont) {
			$date = $cont->date;
			$contract_uid = $cont->contract_uid;
			$black_booking = $cont->black_booking;
			$deposit_paid = '';
			$bgcolor = $inbgcolor;
			if ($black_booking != '1') {
				$bgcolor = $occupiedcolour;
				$query = "SELECT arrival,departure,deposit_paid FROM #__jomres_contracts WHERE contract_uid = '".(int) $contract_uid."'";
				$contractList = doSelectSql($query);

				foreach ($contractList as $contract) {
					$deposit_paid = $contract->deposit_paid;
					$booking_start_dates[] = $contract->arrival;
					$booking_end_dates[] = $contract->departure;
					if (!$deposit_paid) {
						$bgcolor = $provisionalcolour;
					}
				}
			} else {
				$bgcolor = $occupiedcolour;
			}
			$datesArray[ $date ] = array('contract_uid' => $contract_uid, 'bgcolor' => $bgcolor);
		}

		$i = 0;
		$currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate), date('Y', $startdate));
		$startingmonth = date('m', mktime(0, 0, 0, date('m', $startdate), date('d', $startdate), date('Y', $startdate)));
		$endingmonth = date('m', mktime(0, 0, 0, date('m', $stdate) + 1, 7 - date('w', mktime(0, 0, 0, $stmonth + 1, 0, $styear)), $styear));
		while ($currdate < $enddate) {
			$this->retVals .= "<tr>\n";
			for ($c = 0; $c < 7; ++$c) {
				$contract_uid = '';
				$link = '';
				$deposit_paid = true;
				$bgcolor = $inbgcolor;
				$sqlDate2 = date('Y/m/d', $currdate);
				$sqlDate2 = JSCalmakeInputDates($sqlDate2);
				$sqlDate = date('Y/m/d', $currdate);
				//$currdow=date("w",$sqlDate);
				$currentMonth = date('m', $currdate);
				if (array_key_exists(date('Y/m/d', $currdate), $datesArray)) {
					$bgcolor = $datesArray[ date('Y/m/d', $currdate) ][ 'bgcolor' ];
					$contract_uid = $datesArray[ date('Y/m/d', $currdate) ][ 'contract_uid' ];
				}
				$jomresCurrDate = date('Y/m/d', $currdate);
				$dateElements = explode('/', $jomresCurrDate);
				$unixCurrDate = mktime(0, 0, 0, $dateElements[ 1 ], $dateElements[ 2 ], $dateElements[ 0 ]);

				if ($currdate < $stdate) {
					$bgcolor = $outbgcolor;
				}

				if ($mrConfig[ 'limitAdvanceBookingsYesNo' ] == '1' && ($unixCurrDate >= $unixLatestDate)) {
					$bgcolor = $pastcolour;
				}
				if ($unixCurrDate < $unixTodaysDate) {
					$bgcolor = $pastcolour;
				}

				if ((date('m', $stdate) == date('m', $currdate)) && ($bgcolor != $occupiedcolour) && ($bgcolor != $provisionalcolour) && ($bgcolor != $pastcolour)) {
					$bgcolor = $inbgcolor;
				} else {
					if (($bgcolor != $occupiedcolour) && ($bgcolor != $provisionalcolour) && ($bgcolor != $pastcolour)) {
						$bgcolor = $outbgcolor;
					}
				}
				if (date('d', $currdate) == date('d') && date('m', $currdate) == date('m') && date('Y', $currdate) == date('Y')) {
					$fcolor = $todaycolor;
				} elseif (date('m', $currdate) == date('m', $stdate) && date('Y', $currdate) == date('Y', $stdate)) {
					$fcolor = $inmonthface;
				} else {
					$fcolor = $outmonthface;
				}

				//echo $startingmonth.' '.$currentMonth.' '.$endingmonth.'<br>';
				if ($currentMonth == $startingmonth && date('m', $stdate) > date('m', $startdate)) {
					$bgcolor = $outbgcolor;
				}
				if (date('m', $currdate) == date('m', $enddate)) {
					$bgcolor = $outbgcolor;
				}

				$class = '';
				if (in_array(date('Y/m/d', $currdate), $booking_start_dates)) {
					$class = 'class="crossOut';
				}

				if (!$showOutMonthDates && $bgcolor == $outbgcolor) {
					$this->retVals .= "<td height=\"$height\" width=\"$width\" valign=\"middle\" ><font face=\"$face\" size=\"$size\" color=\"$fcolor\">";
				} else {
					$this->retVals .= '<td '.$class." height=\"$height\" width=\"$width\" valign=\"middle\" bgcolor=\"$bgcolor\"><font face=\"$face\" size=\"$size\" color=\"$fcolor\">";
				}

				$task = get_showtime('task');
				if ($task != 'remoteavailability' && $jrConfig[ 'show_booking_form_in_property_details' ] == '1') {
					$this->showlinks = false;
				}

				if ($mrConfig[ 'showOnlyAvailabilityCalendar' ] == '1') {
					$this->showlinks = true;
				}

				if (!$showOutMonthDates && $bgcolor == $outbgcolor) {
					$this->retVals .= '&nbsp;';
				} else {
					if ($bgcolor != $occupiedcolour && $bgcolor != $outmonthface && $bgcolor != $provisionalcolour && ($bgcolor != $pastcolour)) {
						if ($mrConfig[ 'fixedArrivalDateYesNo' ]) {
							$currdow = date('w', $currdate);
							if ($bgcolor != $outbgcolor) {
								if ($mrConfig[ 'fixedArrivalDay' ] == date('w', $currdate)) {
									if ($mrConfig[ 'visitorscanbookonline' ] && $this->showlinks) {
										$link = get_booking_url($property_uid, '', '&arrivalDate='.$sqlDate2);
										if (!$mrConfig[ 'singleRoomProperty' ]) {
											$link .= '&remus='.$roomUid;
										}
										
										$link = jomresURL($link);
										
										$link = jomresValidateUrl($link);
										$thelink = '<a '.$target.' href="'.$link.'" class=rescal rel="nofollow">'.date('j', $currdate).'</a>';

										$this->retVals .= $thelink;
									} else {
										$this->retVals .= date('j', $currdate);
									}
								} else {
									$this->retVals .= date('j', $currdate);
								}
							} else {
								$this->retVals .= date('j', $currdate);
							}
						} else {
							if ($bgcolor != $outbgcolor && $mrConfig[ 'visitorscanbookonline' ] && $this->showlinks) {
								$link = get_booking_url($property_uid, '', '&arrivalDate='.$sqlDate2);
								if (!$mrConfig[ 'singleRoomProperty' ]) {
									$link .= '&remus='.$roomUid;
								}
								if ($jrConfig[ 'useSSLinBookingform' ] == '1') {
									$link = jomresURL($link, 1);
								} else {
									$link = jomresURL($link);
								}
								$thelink = '<a '.$target.' href="'.$link.'" class=rescal rel="nofollow">'.date('j', $currdate).'</a>';

								$this->retVals .= $thelink;
							} else {
								$this->retVals .= date('j', $currdate);
							}
						}
					} else {
						if ($thisJRUser->userIsManager) {
							if ($contract_uid != '') {
								$link = "<a $target href=\"".jomresURL(JOMRES_SITEPAGE_URL."&task=edit_booking&amp;contract_uid=$contract_uid").'" class=rescal >'.(date('j', $currdate)).'</a>';
								$this->retVals .= $link;
							} else {
								$this->retVals .= date('j', $currdate);
							}
						} else {
							$this->retVals .= date('j', $currdate);
						}
					}
				}
				$this->retVals .= "</font></td>\n";
				++$i;
				$currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate) + $i, date('Y', $startdate));
			}
			$this->retVals .= "</tr>\n";
		}
		$this->retVals .= "</table>\n";
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->retVals;
	}
}
