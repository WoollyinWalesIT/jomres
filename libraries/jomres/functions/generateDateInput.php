<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.19
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 * Makes a javascript date input field. Creates a random name for the form element each time so that multiple javascript forms can be used on the same page without collision.
 */
function generateDateInput($fieldName, $dateValue = '', $myID = false, $siteConfig = false, $historic = false)
{
    // We need to give the javascript date function a random name because it will be called by both the component and modules
    $uniqueID = '';
    $output = '';

    // If this date picker is "arrivalDate" then we need to create a departure date input name too, then set it in showtime. With that we'll be able to tell this set of functionality what the id of the
    // departureDate is so that it can set it's date when this one changes

    $uniqueID = generateJomresRandomString(15);

    $tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');
    $placeholder = '';

    if ($fieldName == 'arrivalDate' || $fieldName == 'asc_arrivalDate') {
        set_showtime('departure_date_unique_id', $uniqueID.'_XXX');

        //var_dump( $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'], $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'], $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ], $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ]);exit;
        if (!isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ])) {
            $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] = '';
        }
        if (!isset($tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ])) {
            $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ] = '';
        }

        if (
            (!isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate']) || $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] == '') &&
            (!isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate']) || $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] == '') &&
            $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] == '' &&
            $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ] == ''
            ) {
            $placeholder = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', '_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL', false);
            $dateValue = '';
        }
    } elseif ($fieldName == 'departureDate' || $fieldName == 'asc_departureDate') {
        $uniqueID = get_showtime('departure_date_unique_id');

        if (
            (!isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate']) || $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['arrivalDate'] == '') &&
            (!isset($tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate']) || $tmpBookingHandler->tmpsearch_data['ajax_search_composite_selections']['departureDate'] == '') &&
            $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability' ] == '' &&
            $tmpBookingHandler->tmpsearch_data[ 'jomsearch_availability_departure' ] == ''
            ) {
            $placeholder = jr_gettext('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', '_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE', false);
            $dateValue = '';
        }
    } else { //all other date input fields
        if ($dateValue == '') {
            $dateValue = date('Y/m/d');
        }
    }

    if ($dateValue != '') {
        $dateValue = JSCalmakeInputDates($dateValue, $siteConfig);
    }

    $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
    $jrConfig = $siteConfig->get();
	
	$predefined_arrival_day_return_string ='';
	if ( $jrConfig['is_single_property_installation'] == "1") {
		$all_property_uids = get_showtime('all_properties_in_system');

		set_showtime('property_uid', $all_property_uids[ 0 ]);
		$property_uid = get_showtime('property_uid');

		$mrConfig = getPropertySpecificSettings($property_uid);

		if ($mrConfig[ 'fixedArrivalDay' ] != '' && (int)$mrConfig[ 'fixedArrivalDateYesNo' ] != 0  ) {
			for ($i=0;$i<=6;$i++) {
				if ($i != $mrConfig[ 'fixedArrivalDay' ] ) {
					$predefined_arrival_day_return_string .= 'day != '.$i .' && ';
				}
				
				//return [(day != 1 && day != 2)];
			}
			if ($predefined_arrival_day_return_string != '' ) {
				$predefined_arrival_day_return_string = 'beforeShowDay: function(date) {
				var day = date.getDay();
				return [('.substr($predefined_arrival_day_return_string, 0, -4).')];
			},';
			}
		}
	}
    $dateFormat = $jrConfig[ 'cal_input' ];
    $dateFormat = strtolower(str_replace('%', '', $dateFormat)); // For the new jquery calendar, we'll strip out the % symbols. This should mean that we don't need to force upgraders to reset their settings.
    $dateFormat = str_replace('y', 'yy', $dateFormat);
    $dateFormat = str_replace('m', 'mm', $dateFormat);
    $dateFormat = str_replace('d', 'dd', $dateFormat);

    if (!defined('_JOMRES_CALENDAR_RTL')) {
        define('_JOMRES_CALENDAR_RTL', 'false');
    }

    $size = ' size="10" ';
    $input_class = '';
    if (using_bootstrap()) {
        $size = '';
        $input_class = ' input-small ';
    }

    $output .= '<script type="text/javascript">
	jomresJquery(function() {
		jomresJquery("#' .$uniqueID.'").datepicker( {
			dateFormat: "' .$dateFormat.'", ';

    if ($historic) { // Can we show older dates? By default no
        $output .= 'minDate: "-5Y", ';
    } else {
        $output .= 'minDate: 0, ';
    }

    $output .= 'maxDate: "+5Y",
		';

    if ((using_bootstrap() && jomres_bootstrap_version() == '2') || !using_bootstrap()) {
        $output .= 'buttonImage: \''.JOMRES_IMAGES_RELPATH.'calendar.png\',';
        $bs3_icon = '';
    } else {
        $output .= 'buttonText: "",';
        $bs3_icon = '<span class="input-group-addon" id="dp_trigger_'.$uniqueID.'"><i class="fa fa-calendar"></i></span>';
    }

    $output .= '
			buttonImageOnly: true,
			showOn: "both",
			changeMonth: true,
			changeYear: true,
			numberOfMonths: 1,
			showOtherMonths: true,
			selectOtherMonths: true,';
    if ($jrConfig[ 'calendarstartofweekday' ] == '1') {
        $output .= 'firstDay: 0,';
    } else {
        $output .= 'firstDay: 1,';
    }
	$output .= $predefined_arrival_day_return_string;
    $output .= '	showButtonPanel: true';
    if ($fieldName == 'arrivalDate' || $fieldName == 'asc_arrivalDate') {
        $output .= ',onSelect: function(selectedDate) {
				var nextDayDate = jomresJquery("#' .$uniqueID.'").datepicker(\'getDate\', \'+1d\');
				nextDayDate.setDate(nextDayDate.getDate() + 1);
				jomresJquery("#' .get_showtime('departure_date_unique_id').'").datepicker(\'setDate\', nextDayDate);
				jomresJquery("#' .get_showtime('departure_date_unique_id').'").datepicker(\'option\', {minDate: jomresJquery(this).datepicker(\'getDate\')});
				}';
        $output .= ', onClose: function() {
				jomresJquery("#' .get_showtime('departure_date_unique_id').'").datepicker(\'show\');
				}';
    }

    $output .= '} );

	});';

    if (using_bootstrap() && jomres_bootstrap_version() == '3') {
        $output .= '
		jomresJquery(function() {jomresJquery("#dp_trigger_'.$uniqueID.'").on("click", function() {jomresJquery("#'.$uniqueID.'").datepicker("show");})});
		';
    }

    $output .= '
	</script>
	<div class="input-group">
		<input type="text" readonly="readonly" style="cursor:pointer; background-color: #FFFFFF;" ' .$size.' name="'.$fieldName.'" id="'.$uniqueID.'" value="'.$dateValue.'" placeholder="'.$placeholder.'" class="'.$input_class.' form-control" />'.$bs3_icon.'
	</div>';

    $pageoutput[ ] = array('INPUT' => $output);
    $tmpl = new patTemplate();
    $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
    $tmpl->readTemplatesFromInput('js_calendar_input.html');
    $tmpl->addRows('pageoutput', $pageoutput);

    return $tmpl->getParsedTemplate();
}
