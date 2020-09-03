<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.2
 *
 * @copyright	2005-2020 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j06000mrp_calendar
{	
	/**
	 *
	 * Constructor
	 * 
	 * Main functionality of the Minicomponent 
	 *
	 * 
	 * 
	 */
	 
	public function __construct($componentArgs = null)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		$this->retVals = '';

		$property_uid = (int) jomresGetParam($_REQUEST, 'property_uid', '');
		if (isset($componentArgs ['property_uid'])) {
			$property_uid = (int) $componentArgs ['property_uid'];
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		$output_now = (bool) jomresGetParam($_REQUEST, 'op', true);
		if (isset($componentArgs ['output_now'])) {
			$output_now = (bool) $componentArgs ['output_now'];
		}

		$months_to_show = (int) jomresGetParam($_REQUEST, 'months_to_show', 24);
		if (isset($componentArgs ['months_to_show'])) {
			$months_to_show = (int) $componentArgs ['months_to_show'];
		}

		$start_month = (int) jomresGetParam($_REQUEST, 'start_month', date('m'));
		if (isset($componentArgs ['start_month'])) {
			$start_month = (int) $componentArgs ['start_month'];
		}
		$start_year = (int) jomresGetParam($_REQUEST, 'start_year', date('Y'));
		if (isset($componentArgs ['start_year'])) {
			$start_year = (int) $componentArgs ['start_year'];
		}

		$show_just_month = (bool) jomresGetParam($_REQUEST, 'show_just_month', false);
		if (isset($componentArgs ['show_just_month'])) {
			$show_just_month = (bool) $componentArgs ['show_just_month'];
		}

		$query = 'SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '.$property_uid.' ';
		$roomUids = doSelectSql($query);

		if (empty($roomUids)) {
			// Nothing we can do here to legitimately show availability, we'll return out as it's pointless to continue
			return;
		}

		$room_uids = array();
		foreach ($roomUids as $r) {
			$room_uids[] = $r->room_uid;
		}

		$this->number_of_rooms_in_property = count($room_uids);

		$contracts = array();
		$booked_dates = array();

		$query = 'SELECT `date`,`contract_uid` FROM #__jomres_room_bookings WHERE room_uid IN ('.jomres_implode($room_uids).')';
		$room_bookings = doSelectSql($query);
		foreach ($room_bookings as $b) {
			if (!isset($this->booked_dates[$b->date])) {
				$this->booked_dates[$b->date] = 1;
			} else {
				$this->booked_dates[$b->date]++;
			}
		}

		$counter = 1;

		if (!$show_just_month) {
			$this->retVals = '
				<div class="row">
					<div class="col-md-2 jomres-calendar-day-num jomres-calendar-available"> ' .jr_gettext('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY').'</div>
					<div class="col-md-2 jomres-calendar-day-num jomres-calendar-booking-occupied-quarter ">' .jr_gettext('_JOMRES_AVLCAL_QUARTER', '_JOMRES_AVLCAL_QUARTER').'</div>
					<div class="col-md-2 jomres-calendar-day-num jomres-calendar-booking-occupied-half ">' .jr_gettext('_JOMRES_AVLCAL_HALF', '_JOMRES_AVLCAL_HALF').'</div>
					<div class="col-md-2 jomres-calendar-day-num jomres-calendar-booking-occupied-threequarter ">' .jr_gettext('_JOMRES_AVLCAL_THREEQUARTER', '_JOMRES_AVLCAL_THREEQUARTER').'</div>
					<div class="col-md-2 jomres-calendar-day-num jomres-calendar-booking-occupied-completely ">' .jr_gettext('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY').'</div>
				</div>
				<div class="container-fluid">
					<div class="row">
				';

			for ($start_month; $counter <= $months_to_show; ++$start_month) {
				$this->retVals .= '<div class="col-md-4 col-sm-6">';
				$this->retVals .= $this->makecal($start_month, $start_year, $property_uid);
				if ($start_month == 12) {
					$start_year = $start_year + 1;
					$start_month = 0;
				}
				$this->retVals .= "</div>\n";
				if ($counter % 3 == 0 and $counter < 72) {
					$this->retVals .= '<div class="clearfix"></div>';
				}
				++$counter;
			}

			$this->retVals .= '
					</div>
				</div>
				';
		} else {
			$this->retVals .= $this->makecal($start_month, $start_year, $property_uid);
		}

		if ($output_now) {
			echo $this->retVals;
		} else {
			return $this->retVals;
		}
	}

	public function makecal($stmonth, $styear, $property_uid)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$mrConfig = getPropertySpecificSettings($property_uid);
		
		$stdate = mktime(0, 0, 0, $stmonth, 1, $styear);
	   
		if ($jrConfig[ 'calendarstartofweekday' ] == '1') {
			$startdate = mktime(0, 0, 0, $stmonth, 1 - date('w', mktime(0, 0, 0, $stmonth, 1, $styear)), $styear);
		} else {
			$startdate = mktime(0, 0, 0, $stmonth, 1 - date('w', mktime(0, 0, 0, $stmonth, 0, $styear)), $styear);
		}
		
		$enddate = mktime(0, 0, 0, date('m', $stdate) + 1, 7 - date('w', mktime(0, 0, 0, $stmonth + 1, 0, $styear)), $styear);

		$thisMonthName = getThisMonthName(date('n', $stdate), false);
		if ($thisMonthName == '') {
			$thisMonthName = jr_gettext('_JOMRES_CUSTOMTEXT_'.date('M', $stdate), strftime('%B', $stdate), false, false);
		}

		$this->retVals .= '<div class="calendar-month-name">'.$thisMonthName.' '.strftime('%Y', $stdate).'</div>';

		$this->retVals .= '<table class="calendar"  cellspacing="0" cellpadding="0">';
		$this->retVals .= '<tr>';
		
		if ($jrConfig[ 'calendarstartofweekday' ] == '1') {
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', false, false), 0, 1).'</td>';
		} else {
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', false, false), 0, 1).'</td>';
			$this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', false, false), 0, 1).'</td>';
		}

		$this->retVals .= '</tr>';

		$i = 0;
		$currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate), date('Y', $startdate));

		$fontweight = ''; // Often when inheriting this clickable dates don't stand out too well, so we'll give it a little extra ooomph when it's a fixed arrival date. Non-fixed arrival dates all days are clickable ( unless booked out ).
		if ((int)$mrConfig[ 'fixedArrivalDateYesNo' ] != 0) {
			$fontweight = 'font-weight: bold;';
		}
		
		$now = time();
		
		while ($currdate < $enddate) {
			$this->retVals .= '<tr>';
			for ($c = 0; $c < 7; ++$c) {
				$class = 'normal-day';
				$link = get_booking_url($property_uid, '', '&pdetails_cal=1&arrivalDate='.date('Y/m/d', $currdate));
				$fmt = date('Y', $currdate).'/'.date('m', $currdate).'/'.date('d', $currdate);

				$dow = date( "w", $currdate);
				if ($mrConfig[ 'fixedArrivalDay' ] != '' && (int)$mrConfig[ 'fixedArrivalDateYesNo' ] != 0  ) {
					if ($dow != (int)$mrConfig[ 'fixedArrivalDay' ]) {
						$link = '';
					}
				}
				
				if (!isset($this->booked_dates[$fmt])) {
					$this->booked_dates[$fmt] = 0;
				}

				$percentage_booked = ceil(($this->booked_dates[$fmt] / $this->number_of_rooms_in_property) * 100);

				if ($percentage_booked > 0 && $percentage_booked <= 25) {
					$class = 'jomres-calendar-booking-occupied-quarter';
				}
				if ($percentage_booked > 25 && $percentage_booked <= 50) {
					$class = 'jomres-calendar-booking-occupied-half';
				}
				if ($percentage_booked > 50 && $percentage_booked < 100) {
					$class = 'jomres-calendar-booking-occupied-threequarter';
				}
				if ($percentage_booked == 100) {
					$link = '';
					$class = 'jomres-calendar-booking-occupied-completely ';
				}

				if($currdate < $now) {
					$link = '';
				}

				
				$this->retVals .= '<td>';
				$this->retVals .= '<div class="jomres-calendar-day-num '.$class.'">';

				if (date('m', $currdate) == $stmonth) {
					if ($link != '') {
						$this->retVals .= '<a style="color: black  !important; '.$fontweight.'" href="'.$link.'" rel="nofollow">'.date('j', $currdate).'</a>';
					} else {
						$this->retVals .= date('j', $currdate);
					}
				} else {
					$this->retVals .= '&nbsp;';
				}
				$this->retVals .= '</div></td>';
				++$i;
				$currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate) + $i, date('Y', $startdate));
			}
			$this->retVals .= "</tr>\n";
		}
		$this->retVals .= "</table>\n";
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
