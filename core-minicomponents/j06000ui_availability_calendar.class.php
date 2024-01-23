<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.8.0
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06000ui_availability_calendar
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
	 
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
				'task' => 'ui_availability_calendar',
				'info' => '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR',
				'arguments' => array(
					array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
					array(
						'argument' => 'noshowlegend',
						'arg_info' => '_JOMRES_SHORTCODES_06000UI_AVAILABILITY_CALENDAR_ARG_NOSHOWLEGEND',
						'arg_example' => '1',
						),
					),
				);

			return;
		}
		$this->retVals = '';
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$show_legend = true;
		if ((isset($componentArgs[ 'noshowlegend' ]) && $componentArgs[ 'noshowlegend' ] == '1') ||
			(isset($_REQUEST[ 'noshowlegend' ]) && $_REQUEST[ 'noshowlegend' ] == '1')
			) {
			$show_legend = false;
		}

		if (isset($componentArgs[ 'property_uid' ])) {
			$property_uid = (int)$componentArgs[ 'property_uid' ];
		} else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
		}
		
		if ($property_uid == 0) {
			$property_uid = (int)get_showtime('property_uid');
		}

		if ($property_uid == 0) {
			return;
		}

		if (!user_can_view_this_property($property_uid)) {
			return;
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$mrConfig = getPropertySpecificSettings($property_uid);

		if (get_showtime('is_jintour_property')) {
			$this->numberOfRoomsInProperty = 0; //TODO: count number of tours in property instead
			$booked_dates = $MiniComponents->specificEvent('05060', 'jintour', array('property_uid' => $property_uid, 'start' => true, 'end' => true));
			$booking_array_elements = $booked_dates[ 'fully_booked_dates' ];
			// We need to convert these to object, as this is an adaptation of the following condition where the db is queried
			$bookings = array();
			foreach ($booking_array_elements as $elem) {
				$o = new stdClass();
				$o->date = $elem;
				$bookings[ ] = $o;
			}
		} else {
			$query = 'SELECT COUNT(room_uid) FROM #__jomres_rooms WHERE propertys_uid = '.(int) $property_uid.' ';
			$this->numberOfRoomsInProperty = (int) doSelectSql($query, 1);

			$firstDayOfTheCurrentMonth = date('Y/m/d', strtotime(date('m').'/01/'.date('Y').' 00:00:00'));
			$query = 'SELECT date FROM #__jomres_room_bookings WHERE property_uid = '.(int) $property_uid." AND DATE_FORMAT(`date`, '%Y/%m/%d') >= DATE_FORMAT('".$firstDayOfTheCurrentMonth."', '%Y/%m/%d') ";
			$bookings = doSelectSql($query);
		}

		$this->rooms_empty = 0;
		$this->rooms_quarter = (($this->numberOfRoomsInProperty / 100) * .25) * 100;
		$this->rooms_half = (($this->numberOfRoomsInProperty / 100) * .5) * 100;
		$this->rooms_threequarter = (($this->numberOfRoomsInProperty / 100) * .75) * 100;
		$this->rooms_full = $this->numberOfRoomsInProperty;

		$empty_dates = array();
		$quarter_dates = array();
		$half_dates = array();
		$threequarter_dates = array();
		$full_dates = array();

		$booking_dates = array();

		if (!empty($bookings)) {
			foreach ($bookings as $booking) {
				if (isset($booking_dates[ $booking->date ])) {
					++$booking_dates[ $booking->date ];
				} else {
					$booking_dates[ $booking->date ] = 1;
				}
			}

			foreach ($booking_dates as $date => $count) {
				if ($count >= $this->rooms_full) {
					$full_dates[ ] = $date;
				}
				if ($count <= $this->rooms_full - 1 && $count >= $this->rooms_threequarter) {
					$threequarter_dates[ ] = $date;
				}
				if ($count < $this->rooms_threequarter && $count >= $this->rooms_half) {
					$half_dates[ ] = $date;
				}
				if ($count < $this->rooms_half && $count >= $this->rooms_empty + 1) {
					$quarter_dates[ ] = $date;
				}
				if ($count == $this->rooms_empty) {
					$empty_dates[ ] = $date;
				}
			}
		}

		$random_identifier = generateJomresRandomString(10);

		$quarter_output = '';
		if (!empty($quarter_dates)) {
			$quarter_output = 'var quarter_dates_'.$random_identifier.' = [';
			foreach ($quarter_dates as $date) {
				$quarter_output .= "'".$date."',";
			}
			$quarter_output = substr($quarter_output, 0, strlen($quarter_output) - 1);
			$quarter_output .= '];';
		}

		$half_output = '';
		if (!empty($half_dates)) {
			$half_output = 'var half_dates_'.$random_identifier.' = [';
			foreach ($half_dates as $date) {
				$half_output .= '"'.$date.'",';
			}
			$half_output = substr($half_output, 0, strlen($half_output) - 1);
			$half_output .= '];';
		}

		$threequarter_output = '';
		if (!empty($threequarter_dates)) {
			$threequarter_output = 'var threequarter_dates_'.$random_identifier.' = [';
			foreach ($threequarter_dates as $date) {
				$threequarter_output .= "'".$date."',";
			}
			$threequarter_output = substr($threequarter_output, 0, strlen($threequarter_output) - 1);
			$threequarter_output .= '];';
		}

		$full_output = '';
		if (!empty($full_dates)) {
			$full_output = 'var full_dates_'.$random_identifier.' = [';
			foreach ($full_dates as $date) {
				$full_output .= "'".$date."',";
			}
			$full_output = substr($full_output, 0, strlen($full_output) - 1);
			$full_output .= '];';
		}
		
		$fixed_arrival_day_js = '';
		if ((int)$mrConfig[ 'fixedArrivalDateYesNo' ] == 1 && $mrConfig[ 'fixedArrivalDay' ] != '') {
			$fixed_arrival_day_js = '
				if ( day_of_week != '.(int)$mrConfig[ 'fixedArrivalDay' ].' ) {
					day_is_clickable = false;
				}
			';
		}
		
		$defaultDate = date("Y/m/d");
		
		if (isset($componentArgs['start_year']) &&
			isset($componentArgs['start_month']) &&
			isset($componentArgs['start_day']) &&
			$componentArgs['start_year'] != '' &&
			$componentArgs['start_month'] != '' &&
			$componentArgs['start_day'] != ''
			) {
			$cal_default_year = (int)$componentArgs['start_year'];
			$cal_default_month = (int)$componentArgs['start_month'];
			$cal_default_day = (int)$componentArgs['start_day'];
			$defaultDate = $cal_default_year."/".$cal_default_month."/".$cal_default_day;
		}

		$url = get_booking_url($property_uid, '', '&pdetails_cal=1');
		$inline_calendar = '
<style>
.ui-datepicker table {
    font-size: 0.8em;
}
.ui-datepicker td {
    padding:0;
    border: 0px !important;
}
</style>
			<script>
			' .$quarter_output.'
			' .$half_output.'
			' .$threequarter_output.'
			' .$full_output.'
			var booking_form_url_' .$random_identifier.' = "'.$url.'";
			
			function highlightDays_' .$random_identifier.'(date)
				{
				var year, month, day, currDate, day_is_clickable, day_of_week;
				// compile current date
				year = String(date.getFullYear());
				month = String(date.getMonth() + 1);
				if (month.length === 1) {
					month = "0" + month;
					}
				day = String(date.getDate());
				if (day.length === 1) {
					day = "0" + day;
					}
				currDate = String(year+\'/\'+month+\'/\'+day);
				
				//is day disabled when fixed arrival days are enabled?
				day_is_clickable = true;
				day_of_week = date.getDay();
				
				'.$fixed_arrival_day_js.'
				
				// is date in the specialDays?
				if (\'undefined\'!=typeof(quarter_dates_' .$random_identifier.')){
					if (jomresJquery.inArray(currDate, quarter_dates_' .$random_identifier.') >= 0) {
						return [day_is_clickable, \'calendar_background_quarter\'];
						}
					}
				if (\'undefined\'!=typeof(half_dates_' .$random_identifier.')){
				
					if (jomresJquery.inArray(currDate, half_dates_' .$random_identifier.') >= 0) {
						return [day_is_clickable, \'calendar_background_half\'];
						}
					}
				if (\'undefined\'!=typeof(threequarter_dates_' .$random_identifier.')){
					if (jomresJquery.inArray(currDate, threequarter_dates_' .$random_identifier.') >= 0) {
						return [day_is_clickable, \'calendar_background_threequarter\'];
						}
					}
				if (\'undefined\'!=typeof(full_dates_' .$random_identifier.')){
					if (jomresJquery.inArray(currDate, full_dates_' .$random_identifier.') >= 0) {
						return [false, \'calendar_background_full\'];
						}
					}
				return [day_is_clickable, \'\'];
				}

			jomresJquery(document).ready(function(){
				jomresJquery( "#' .$random_identifier.'" ).datepicker({
					"dateFormat" : "yy/mm/dd",
					"minDate": 0,
					"defaultDate" : "'.$defaultDate.'",
					firstDay: '.($jrConfig[ 'calendarstartofweekday' ] - 1).',
					beforeShowDay: highlightDays_' .$random_identifier.',
					onSelect: function (date, el) {
						window.location = booking_form_url_' .$random_identifier.'+\'&arrivalDate=\'+date;
						}
					});
				});
			</script>
		<div id="' .$random_identifier.'"></div>';

		if ($show_legend) {
			$inline_calendar .= '
			<script type="text/javascript">
			jomresJquery(document).ready(function(){
			  jomresJquery("#legend_dialog").dialog({
				autoOpen: false
			});
			jomresJquery( "#legend_dialog_opener" ).click(function() {
				jomresJquery( "#legend_dialog" ).dialog( "open" );
				return false;
			});
			});
			</script>';
			if ($mrConfig[ 'singleRoomProperty' ]) {
				$inline_calendar .= '
				<a href="#" id="legend_dialog_opener" title="Legend"><img src="' .JOMRES_IMAGES_RELPATH.'information.png" /></a>
				<div id="legend_dialog" title="Legend">
				<table width="100%" border="0">
					<tr>
						<td class="calendar_background_full" width="20">&nbsp;</td><td>' .jr_gettext('_JOMRES_AVLCAL_FULLYBOOKED', '_JOMRES_AVLCAL_FULLYBOOKED').'</td>
					</tr>
				</table>
				</div>
				';
			} else {
				$inline_calendar .= '
				<a href="#" id="legend_dialog_opener" title="Legend"><img src="' .JOMRES_IMAGES_RELPATH.'information.png" /></a>
				<div id="legend_dialog" title="Legend">
				<table width="100%" border="0">
					<tr>
						<td class="calendar_background_quarter" width="20">&nbsp;</td><td>' .jr_gettext('_JOMRES_AVLCAL_QUARTER', '_JOMRES_AVLCAL_QUARTER').'</td>
					</tr>
					<tr>
						<td class="calendar_background_half" width="20">&nbsp;</td><td>' .jr_gettext('_JOMRES_AVLCAL_HALF', '_JOMRES_AVLCAL_HALF').'</td>
					</tr>
					<tr>
						<td class="calendar_background_threequarter" width="20">&nbsp;</td><td>' .jr_gettext('_JOMRES_AVLCAL_THREEQUARTER', '_JOMRES_AVLCAL_THREEQUARTER').'</td>
					</tr>
					<tr>
						<td class="calendar_background_full" width="20">&nbsp;</td><td>' .jr_gettext('_JOMRES_AVLCAL_FULLYBOOKED', '_JOMRES_AVLCAL_FULLYBOOKED').'</td>
					</tr>
				</table>
				</div>
				';
			}
		}

		if ($output_now) {
			echo $inline_calendar;
		} else {
			$this->retVals = $inline_calendar;
		}
	}

	/**
	 * Must be included in every mini-component.
	 #
	 * Returns any settings that the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	 */
	public function getRetVals()
	{
		return $this->retVals;
	}
}
