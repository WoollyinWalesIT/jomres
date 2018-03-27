<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000mrpavailabilitycalendar
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
        $this->pop = jomresGetParam($_REQUEST, 'popup', 0);
        if ($this->pop == 1) {
            property_header($property_uid);
        }
        if (isset($componentArgs[ 'showlinks' ])) {
            $this->showlinks = $componentArgs[ 'showlinks' ];
        } else {
            $this->showlinks = true;
        }
        $roomUid = $componentArgs[ 'roomUid' ];
        $requestedDate = $componentArgs[ 'requestedDate' ];
        $property_uid = (int) $componentArgs[ 'property_uid' ];
        
        if (!user_can_view_this_property($property_uid)) {
            return;
        }
        
        $showFullYear = $componentArgs[ 'showFullYear' ];
        if (isset($mrConfig[ 'CalendarMonthsToShow' ])) {
            $showFullYear = $mrConfig[ 'CalendarMonthsToShow' ];
        }
        $query = "SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int) $property_uid."'";
        $this->numberOfRoomsInProperty = count(doSelectSql($query));

        $this->colour_empty = '#6AFB92';
        $this->colour_quarter = '#B1FB17';
        $this->colour_half = '#FFFC17';
        $this->colour_threequarter = '#F88017';
        $this->colour_full = '#FF0000';

        $this->rooms_empty = 0;
        $this->rooms_quarter = (($this->numberOfRoomsInProperty / 100) * .25) * 100;
        $this->rooms_half = (($this->numberOfRoomsInProperty / 100) * .5) * 100;
        $this->rooms_threequarter = (($this->numberOfRoomsInProperty / 100) * .75) * 100;
        $this->rooms_full = $this->numberOfRoomsInProperty;

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
            $this->retVals .= '<table width="100%">
							<tr >';
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
											<td bgcolor="' .$this->colour_empty.'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_NOBOOKINGS', '_JOMRES_AVLCAL_NOBOOKINGS').'</td>
											<td bgcolor="' .$this->colour_quarter.'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_QUARTER', '_JOMRES_AVLCAL_QUARTER').'</td>
											<td bgcolor="' .$this->colour_half.'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_HALF', '_JOMRES_AVLCAL_HALF').'</td>
											<td bgcolor="' .$this->colour_threequarter.'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_THREEQUARTER', '_JOMRES_AVLCAL_THREEQUARTER').'</td>
											<td bgcolor="' .$this->colour_full.'" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_FULLYBOOKED', '_JOMRES_AVLCAL_FULLYBOOKED').'</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr class="availability_calendar_calendars">
								<td><center>
									<table>
										<tr>
										';
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

        if ($jrConfig[ 'composite_property_details' ] != '1' || (jomresGetParam($_REQUEST, 'task', '') == 'dobooking') || $jrConfig[ 'is_single_property_installation' ] == '1' || $mrConfig[ 'showOnlyAvailabilityCalendar' ] == '1') {
            echo $this->retVals;
            unset($this->retVals);
        }
    }

    public function touch_template_language()
    {
        $output = array();
        $output[ ] = jr_gettext('_JOMRES_AVLCAL_NOBOOKINGS', '_JOMRES_AVLCAL_NOBOOKINGS');
        $output[ ] = jr_gettext('_JOMRES_AVLCAL_QUARTER', '_JOMRES_AVLCAL_QUARTER');
        $output[ ] = jr_gettext('_JOMRES_AVLCAL_HALF', '_JOMRES_AVLCAL_HALF');
        $output[ ] = jr_gettext('_JOMRES_AVLCAL_THREEQUARTER', '_JOMRES_AVLCAL_THREEQUARTER');
        $output[ ] = jr_gettext('_JOMRES_AVLCAL_FULLYBOOKED', '_JOMRES_AVLCAL_FULLYBOOKED');
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

        $mrConfig = getPropertySpecificSettings();
        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $showOutMonthDates = false;
        $task = get_showtime('task');
        $tar = jomresGetParam($_REQUEST, 'tar', 0);
        $show_links = jomresGetParam($_REQUEST, 'sl', 1);
        if ($task == 'remoteavailability') {
            $target = 'target="_blank"';
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
        //$inbgcolor	 	= $mrConfig['avlcal_inbgcolour'];  ## cell bgcolor for days in the display month
        $outbgcolor = $mrConfig[ 'avlcal_outbgcolour' ]; //# cell bgcolor for days not in display month
        //$occupiedcolour 	= $mrConfig['avlcal_occupiedcolour'];  ## cell bgcolour for occupied days
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
            $thisMonthName = jr_gettext('_JOMRES_CUSTOMTEXT_'.date('M', $stdate), strftime('%B', $stdate), false);
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
        $tmpdatesArray = array();
        $datesArray = array();

        while ($currdate < $enddate) {
            $sqlDates[ ] = date('Y/m/d', $currdate);
            ++$i;
            $currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate) + $i, date('Y', $startdate));
        }

        $query = "SELECT contract_uid,black_booking,`date` FROM #__jomres_room_bookings WHERE property_uid = '".(int) $property_uid."' AND `date` IN ( ".jomres_implode($sqlDates, false).' ) ';
        $roomList = doSelectSql($query);

        foreach ($roomList as $cont) {
            $date = $cont->date;

            $contract_uid = $cont->contract_uid;
            if (!array_key_exists($date, $tmpdatesArray)) {
                $tmpdatesArray[ $date ] = 1;
            } else {
                $count = $tmpdatesArray[ $date ];
                $tmpdatesArray[ $date ] = $count + 1;
            }
        }
        foreach ($tmpdatesArray as $key => $d) {
            $bgcolor = $this->colour_full;
            // These two lines added so that the property isn't marked as full until it's completely full (previously it was marked full after 3/4 spaces taken to give properties room to maneouver)
            if ($d == $this->rooms_full) {
                $bgcolor = $this->colour_full;
            }
            if ($d <= $this->rooms_full - 1 && $d >= $this->rooms_threequarter) {
                $bgcolor = $this->colour_threequarter;
            }
            if ($d < $this->rooms_threequarter && $d >= $this->rooms_half) {
                $bgcolor = $this->colour_half;
            }
            if ($d < $this->rooms_half && $d >= $this->rooms_empty + 1) {
                $bgcolor = $this->colour_quarter;
            }
            if ($d == $this->rooms_empty) {
                $bgcolor = $this->colour_empty;
            }
            $datesArray[ $key ] = array('bgcolor' => $bgcolor);
        }

        $i = 0;
        $currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate), date('Y', $startdate));
        $startingmonth = date('m', mktime(0, 0, 0, date('m', $startdate), date('d', $startdate), date('Y', $startdate)));
        $endingmonth = date('m', mktime(0, 0, 0, date('m', $stdate) + 1, 7 - date('w', mktime(0, 0, 0, $stmonth + 1, 0, $styear)), $styear));
        while ($currdate < $enddate) {
            $this->retVals .= "<tr>\n";
            for ($c = 0; $c < 7; ++$c) {
                $bgcolor = $this->colour_empty;
                $contract_uid = '';
                $link = '';
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

                if (date('d', $currdate) == date('d') && date('m', $currdate) == date('m') && date('Y', $currdate) == date('Y')) {
                    $fcolor = $todaycolor;
                } elseif (date('m', $currdate) == date('m', $stdate) && date('Y', $currdate) == date('Y', $stdate)) {
                    $fcolor = $inmonthface;
                } else {
                    $fcolor = $outmonthface;
                }

                if ($currentMonth == $startingmonth && date('m', $stdate) > date('m', $startdate)) {
                    $bgcolor = $outbgcolor;
                }
                if (date('m', $currdate) == date('m', $enddate)) {
                    $bgcolor = $outbgcolor;
                }
                if (!$showOutMonthDates && $bgcolor == $outbgcolor) {
                    $this->retVals .= "<td height=\"$height\" width=\"$width\" valign=\"middle\" ><font face=\"$face\" size=\"$size\" color=\"$fcolor\">";
                } else {
                    $this->retVals .= "<td height=\"$height\" width=\"$width\" valign=\"middle\" bgcolor=\"$bgcolor\"><font face=\"$face\" size=\"$size\" color=\"$fcolor\">";
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
                    if ($bgcolor != $outmonthface && ($bgcolor != $pastcolour)) {
                        if ($bgcolor != $outbgcolor && $mrConfig[ 'visitorscanbookonline' ] && $bgcolor != $this->colour_full && $this->showlinks) {
                            $validDayOfWeek = true;
                            if ($mrConfig[ 'fixedArrivalDateYesNo' ]) {
                                $currdow = date('w', $currdate);
                                if ($mrConfig[ 'fixedArrivalDay' ] != date('w', $currdate)) {
                                    $validDayOfWeek = false;
                                }
                            }

                            if ($validDayOfWeek) {
                                $link = get_booking_url($property_uid, '', '&arrivalDate='.$sqlDate2);
                                if (!$mrConfig[ 'singleRoomProperty' ]) {
                                    $link .= '&remus='.$roomUid;
                                }
								
                                $link = jomresValidateUrl($link);
                                $thelink = '<a '.$target.' href="'.$link.'" class="rescal" rel="nofollow">'.date('j', $currdate).'</a>';
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
                }
                $this->retVals .= "</font></td>\n";
                ++$i;
                $currdate = mktime(0, 0, 0, date('m', $startdate), date('d', $startdate) + $i, date('Y', $startdate));
            }
            $this->retVals .= "</tr>\n";
        }
        $this->retVals .= "</table>\n";
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
