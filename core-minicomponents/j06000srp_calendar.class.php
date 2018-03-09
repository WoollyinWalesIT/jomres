<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.0-beta1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000srp_calendar
{
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

        $room_uid = (int) jomresGetParam($_REQUEST, 'room_uid', 0);
        if (isset($componentArgs ['room_uid'])) {
            $room_uid = (int) $componentArgs ['room_uid'];
        }

        if ($room_uid == 0) {
            $query = 'SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '.$property_uid.' LIMIT 1 ';
            $room_uid = (int) doSelectSql($query, 1);
        }

        if ($room_uid == 0) {
            // Nothing we can do here to legitimately show availability, we'll return out as it's pointless to continue
            return;
        }


        $contracts = array();
        $this->booked_dates = array();
        $this->booking_start_dates = array();
        $this->booking_end_dates = array();

        $query = "SELECT `date`,`contract_uid` FROM #__jomres_room_bookings WHERE room_uid = '".(int) $room_uid."' ";
        $room_bookings = doSelectSql($query);
        foreach ($room_bookings as $b) {
            $this->booked_dates[] = $b->date;
            $contracts[] = $b->contract_uid;
        }

        if (!empty($contracts)) {
            $query = 'SELECT `arrival`,`departure` FROM #__jomres_contracts WHERE `contract_uid` IN ('.jomres_implode($contracts).')';
            $contractList = doSelectSql($query);

            foreach ($contractList as $contract) {
                $this->booking_start_dates[] = $contract->arrival;
                $this->booking_end_dates[] = $contract->departure;
            }
        }

        $counter = 1;

        if (!$show_just_month) {
            $this->retVals = '
				<div class="row">
					<div class="col-md-3 jomres-calendar-day-num jomres-calendar-available"> ' .jr_gettext('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY', '_JOMRES_COM_AVLCAL_INMONTHFACE_KEY').'</div>
					<div class="col-md-3 jomres-calendar-day-num jomres-calendar-booking-occupied-completely">' .jr_gettext('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY', '_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY').'</div>
				</div>
				<table width="100%">
					<tr>';

            for ($start_month; $counter <= $months_to_show; ++$start_month) {
                $this->retVals .= '<td><div class="calendar-month-container">';
                $this->retVals .= $this->makecal($start_month, $start_year, $property_uid);
                if ($start_month == 12) {
                    $start_year = $start_year + 1;
                    $start_month = 0;
                }
                $this->retVals .= "</div></td>\n";
                if ($counter % 3 == 0 and $counter < 72) {
                    $this->retVals .= "</tr>\n<tr>";
                }
                ++$counter;
            }

            $this->retVals .= '
					</tr>
				</table>
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
		$mrConfig = getPropertySpecificSettings($property_uid);
		
        $stdate = mktime(0, 0, 0, $stmonth, 1, $styear);
        $startdate = mktime(0, 0, 0, $stmonth, 1 - date('w', mktime(0, 0, 0, $stmonth, 1, $styear)), $styear);
        $enddate = mktime(0, 0, 0, date('m', $stdate) + 1, 7 - date('w', mktime(0, 0, 0, $stmonth + 1, 0, $styear)), $styear);

        $thisMonthName = getThisMonthName(date('n', $stdate), false);
        if ($thisMonthName == '') {
            $thisMonthName = jr_gettext('_JOMRES_CUSTOMTEXT_'.date('M', $stdate), strftime('%B', $stdate), false, false);
        }

        $this->retVals .= '<div class="calendar-month-name">'.$thisMonthName.' '.strftime('%Y', $stdate).'</div>';

        $this->retVals .= '<table class="calendar"  cellspacing="0" cellpadding="0">';
        $this->retVals .= '<tr>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= "<td class='calendar-day'>".mb_substr(jr_gettext('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', '_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR', false, false), 0, 1).'</td>';
        $this->retVals .= '</tr>';

        $i = 0;
        $currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate), date('Y', $startdate));
		
		$fontweight = ''; // Often when inheriting this clickable dates don't stand out too well, so we'll give it a little extra ooomph when it's a fixed arrival date. Non-fixed arrival dates all days are clickable ( unless booked out ).
		if ((int)$mrConfig[ 'fixedArrivalDateYesNo' ] != 0) {
			$fontweight = 'font-weight: bold;';
		}
		
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
				
                if (in_array($fmt, $this->booked_dates)) {
                    $link = '';
                    $class = 'jomres-calendar-booking-occupied-completely';
                }
                if (in_array($fmt, $this->booking_start_dates)) {
                    $link = '';
                    $class = 'jomres-calendar-booking-start';
                }
                if (in_array($fmt, $this->booking_end_dates)) {
                    $class = 'jomres-calendar-booking-end';
                }
                if (in_array($fmt, $this->booking_start_dates) && in_array($fmt, $this->booking_end_dates)) {
                    $link = '';
                    $class = 'jomres-calendar-booking-crossover';
                }

                $this->retVals .= '<td>';
                $this->retVals .= '<div class="jomres-calendar-day-num '.$class.'">';

                if (date('m', $currdate) == $stmonth) {
                    if ($link != '') {
                        $this->retVals .= '<a style="color: black  !important; '.$fontweight.' " href="'.$link.'" rel="nofollow">'.date('j', $currdate).'</a>';
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
