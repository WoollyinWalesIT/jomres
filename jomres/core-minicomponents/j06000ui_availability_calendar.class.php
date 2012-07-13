<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 7
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly, however all images, css and javascript which are copyright Vince Wooll are not GPL licensed and are not freely distributable. 
**/

// ################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06000ui_availability_calendar
	{
	function j06000ui_availability_calendar($componentArgs)
		{
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch)
			{
			$this->template_touchable=false; return;
			}
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig=$siteConfig->get();
		
		$show_legend = true;
		if ( $componentArgs['noshowlegend'] == "1" || $_REQUEST['noshowlegend'] =="1" )
			$show_legend = false;
		
		$property_uid = get_showtime('property_uid');
		if (isset($_REQUEST['property_uid']) && $_REQUEST['property_uid'] !="0")
			$property_uid =(int)$_REQUEST['property_uid'];

		$query="SELECT room_uid FROM #__jomres_rooms WHERE propertys_uid = '".(int)$property_uid."'";
		$this->numberOfRoomsInProperty=count(doSelectSql($query));

		$mrConfig=getPropertySpecificSettings($property_uid);
		
		$firstDayOfTheCurrentMonth=date("Y/m/d", strtotime(date('m').'/01/'.date('Y').' 00:00:00'));
		$query="SELECT date FROM #__jomres_room_bookings WHERE property_uid = '".(int)$property_uid."' AND DATE_FORMAT(`date`, '%Y/%m/%d') >= DATE_FORMAT('".$firstDayOfTheCurrentMonth."', '%Y/%m/%d') ";
		$bookings = doSelectSql($query);

		$this->rooms_empty=0;
		$this->rooms_quarter=(($this->numberOfRoomsInProperty/100)*.25)*100;
		$this->rooms_half=(($this->numberOfRoomsInProperty/100)*.5)*100;
		$this->rooms_threequarter=(($this->numberOfRoomsInProperty/100)*.75)*100;
		$this->rooms_full=$this->numberOfRoomsInProperty;
		
		$empty_dates = array();
		$quarter_dates = array();
		$half_dates = array();
		$threequarter_dates = array();
		$full_dates = array();
		
		$booking_dates = array();
		
		if (count($bookings) > 0)
			{
			foreach ($bookings as $booking)
				{
				if (isset($booking_dates[$booking->date]))
					$booking_dates[$booking->date]++;
				else
					$booking_dates[$booking->date]=1;
				}
			
			foreach ($booking_dates as $date=>$count)
				{
				// This might need to be checked later, let's get the infrastructure in place first.
				if ($count == $this->rooms_full)
					$full_dates[] = $date;
				if ($count <= $this->rooms_full-1  && $count >= $this->rooms_threequarter )
					$threequarter_dates[] = $date;
				if ($count < $this->rooms_threequarter && $count >= $this->rooms_half)
					$half_dates[] = $date;
				if ($count < $this->rooms_half && $count >= $this->rooms_empty+1)
					$quarter_dates[] = $date;
				if ($count == $this->rooms_empty)
					$empty_dates[] = $date;
				}
			}
		
		$quarter_output ='';
		if (count($quarter_dates)>0)
			{
			$quarter_output = "var quarter_dates = [";
			foreach ($quarter_dates as $date)
				{
				$quarter_output .= "'".$date."',";
				}
			$quarter_output = substr($quarter_output, 0, strlen($quarter_output)-1 ); 
			$quarter_output .= "];";
			}
		
		$half_output = '';
		if (count($half_dates)>0)
			{
			$half_output = "var half_dates = [";
			foreach ($half_dates as $date)
				{
				$half_output .= '"'.$date.'",';
				}
			$half_output = substr($half_output, 0, strlen($half_output)-1 ); 
			$half_output .= "];";
			}
			
		$threequarter_output ='';
		if (count($threequarter_dates)>0)
			{
			$threequarter_output = "var threequarter_dates = [";
			foreach ($threequarter_dates as $date)
				{
				$threequarter_output .= "'".$date."',";
				}
			$threequarter_output = substr($threequarter_output, 0, strlen($threequarter_output)-1 ); 
			$threequarter_output .= "];";
			}
		
		$full_output = "";
		if (count($full_dates)>0)
			{
			$full_output = "var full_dates = [";
			foreach ($full_dates as $date)
				{
				$full_output .= "'".$date."',";
				}
			$full_output = substr($full_output, 0, strlen($full_output)-1 ); 
			$full_output .= "];";
			}
		
		$random_identifier = generateJomresRandomString(10);
		
		$inline_calendar = '
			<script>
			'.$quarter_output.'
			'.$half_output.'
			'.$threequarter_output.'
			'.$full_output.'
			var booking_form_url = "'.JOMRES_SITEPAGE_URL_NOSEF.'&task=dobooking&pdetails_cal=1&selectedProperty='.$property_uid.'&arrivalDate=";
			
			function highlightDays(date)
				{
				var year, month, day, currDate;
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
				// is date in the specialDays?
				if (\'undefined\'!=typeof(quarter_dates)){
					if (jomresJquery.inArray(currDate, quarter_dates) >= 0) {
						return [true, \'calendar_background_quarter\'];
						}
					}
				if (\'undefined\'!=typeof(half_dates)){
				
					if (jomresJquery.inArray(currDate, half_dates) >= 0) {
						return [true, \'calendar_background_half\'];
						}
					}
				if (\'undefined\'!=typeof(threequarter_dates)){
					if (jomresJquery.inArray(currDate, threequarter_dates) >= 0) {
						return [true, \'calendar_background_threequarter\'];
						}
					}
				if (\'undefined\'!=typeof(full_dates)){
					if (jomresJquery.inArray(currDate, full_dates) >= 0) {
						return [true, \'calendar_background_full\'];
						}
					}
				return [true, \'\'];
				}

			jomresJquery(function() {
				jomresJquery( "#'.$random_identifier.'" ).datepicker({
					"dateFormat" : "yy/mm/dd",
					"minDate": 0,
					beforeShowDay: highlightDays,
					onSelect: function(){
						var selected = jomresJquery( this ).val() ;
						window.location = booking_form_url+selected;
						}
					});
				});
			</script>
		<div id="'.$random_identifier.'"></div>';
		
		
		
		if ($show_legend)
			{
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
			if ($mrConfig['singleRoomProperty'])
				{
				$inline_calendar .= '
				<a href="#" id="legend_dialog_opener" title="Legend"><img src="'.get_showtime('live_site').'/jomres/images/information.png" /></a>
				<div id="legend_dialog" title="Legend">
				<table width="100%" border="0">
					<tr>
						<td class="calendar_background_full" width="20">&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_FULLYBOOKED',_JOMRES_AVLCAL_FULLYBOOKED).'</td>
					</tr>
				</table>
				</div>
				';

				}
			else
				{
				$inline_calendar .= '
				<a href="#" id="legend_dialog_opener" title="Legend"><img src="'.get_showtime('live_site').'/jomres/images/information.png" /></a>
				<div id="legend_dialog" title="Legend">
				<table width="100%" border="0">
					<tr>
						<td class="calendar_background_quarter" width="20">&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_QUARTER',_JOMRES_AVLCAL_QUARTER).'</td>
					</tr>
					<tr>
						<td class="calendar_background_half" width="20">&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_HALF',_JOMRES_AVLCAL_HALF).'</td>
					</tr>
					<tr>
						<td class="calendar_background_threequarter" width="20">&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_THREEQUARTER',_JOMRES_AVLCAL_THREEQUARTER).'</td>
					</tr>
					<tr>
						<td class="calendar_background_full" width="20">&nbsp;</td><td>'.jr_gettext('_JOMRES_AVLCAL_FULLYBOOKED',_JOMRES_AVLCAL_FULLYBOOKED).'</td>
					</tr>
				</table>
				</div>
				';
				}
			}
		if ($componentArgs['return_calendar'] == "1" || $_REQUEST['return_calendar'] == "1")
			$this->retVals = $inline_calendar;
		else
			echo $inline_calendar;
		}

	/**
	#
	 * Must be included in every mini-component
	#
	 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
	#
	 */
	function getRetVals()
		{
		return $this->retVals;
		}
	}
