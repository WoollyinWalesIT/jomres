<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.1
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06002edit_tariffs_normal
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }

        $defaultProperty = getDefaultProperty();

        $mrConfig = getPropertySpecificSettings();

        if ($mrConfig['tariffmode'] != '0' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property')) {
            return;
        }

        $jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');

        $basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $basic_property_details->gather_data($defaultProperty);

        $basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
        $basic_room_details->get_all_rooms($defaultProperty);
		
		$basic_rate_details = jomres_singleton_abstract::getInstance( 'basic_rate_details' );
		$basic_rate_details->get_rates($defaultProperty);

		//we need the jrrportal_rates object to create a tarifftype id if none exists for the existing rate uids
		jr_import('jrportal_rates');
		$jrportal_rates = new jrportal_rates();
		$jrportal_rates->property_uid = $defaultProperty;

        $output = array();
		$rows = array();
        $pageoutput = array();
        $existing_rooms = array();
        $existing_tariffs = array();

        //check if this property type has room types assigned
        if (empty($basic_property_details->this_property_room_classes)) {
            throw new Exception('Error, there are no room types for this property type. You can assign room types to this property type by visiting Administrator -> Jomres -> Site Structure -> and editing the room/resource types.');
            return;
        }

        //check for SRPs to make sure they don`t have more than one rooms created. TODO: may not be needed anymore
        if ($mrConfig[ 'singleRoomProperty' ] == '1' && count($basic_room_details->rooms) > 1) { // Looks like property manager has changed from MRP to SRP. Let's clean things up and start anew
			$jomres_properties->propertys_uid = $defaultProperty;
            $jomres_properties->delete_rooms_tariffs_settings(true, true, false);
            $basic_rate_details->rates = array();
        }

		//get existing rooms and tariffs data we need
		//normal mode created just one rates_uid and one tarifftype_id for each room type, there can`t be more for the same room type.
		foreach ($basic_property_details->this_property_room_classes as $k => $v) {
			$existing_rooms[ $k ][ 'room_uids' ] = array();
			$existing_rooms[ $k ][ 'max_people' ] = 1;
			$existing_tariffs[ $k ][ 'rates_uid' ] = 0;
			$existing_tariffs[ $k ][ 'roomrateperday' ] = 0.00;
			$existing_tariffs[ $k ][ 'maxpeople_tariff' ] = 1;
			$existing_tariffs[ $k ][ 'tarifftype_id' ] = 0;
			
			if (!empty($basic_room_details->rooms)) {
                foreach ($basic_room_details->rooms as $room) {
                    if ($room['room_classes_uid'] == $k) {
                        $existing_rooms[ $k ][ 'room_uids' ][] = $room['room_uid'];
						
						if ($existing_rooms[ $k ][ 'max_people' ] < $room['max_people']) {
							$existing_rooms[ $k ][ 'max_people' ] = $room['max_people'];
						}
                    }
                }
            }
			
			if (isset($basic_rate_details->rates[$k]) && !empty($basic_rate_details->rates[$k])) {
				foreach ($basic_rate_details->rates[$k] as $tarifftype_id) {
					foreach ($tarifftype_id as $rate) {
						if ($rate['roomclass_uid'] == $k) {
							$existing_tariffs[ $k ][ 'rates_uid' ] = $rate['rates_uid'];
							
							//check if this rate has a tarifftype created, if not, automatically create one
							if ($rate['tarifftype_id'] == 0 && $rate['rates_uid'] > 0) {
								$existing_tariffs[ $k ][ 'tarifftype_id' ] = $jrportal_rates->get_tarifftype_id($rate['rates_uid']);
							} else {
								$existing_tariffs[ $k ][ 'tarifftype_id' ] = $rate['tarifftype_id'];
							}
							
							if ($existing_tariffs[ $k ][ 'roomrateperday' ] < $rate['roomrateperday']) {
								$existing_tariffs[ $k ][ 'roomrateperday' ] = $rate['roomrateperday'];
							}
							
							if ($existing_tariffs[ $k ][ 'maxpeople_tariff' ] < $rate['maxpeople']) {
								$existing_tariffs[ $k ][ 'maxpeople_tariff' ] = $rate['maxpeople'];
							}
						}
					}
                }
			}
		}
		
		//toolbar
		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_normalmode_tariffs');
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

		//labels
        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false).' &amp; '.jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false);
        $output[ 'HROOMCLASS' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', false);
        $output[ 'HNUMBEROFROOMS' ] = jr_gettext('_JOMRES_NUMBEROFROOMSAVAILABLE', '_JOMRES_NUMBEROFROOMSAVAILABLE', false);
        $output[ 'HROOMRATEPERDAY' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false);
        $output[ 'HPROPERTYTYPE' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', false);
        $output[ 'HROOMTYPE' ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', false);
        $output[ 'HMAXPEOPLE_ROOM' ] = jr_gettext('JOMRES_MAXPEOPLEINROOM', 'JOMRES_MAXPEOPLEINROOM', false);
        $output[ 'HMAXPEOPLE_TARIFF' ] = jr_gettext('JOMRES_MAXPEOPLEINBOOKING', 'JOMRES_MAXPEOPLEINBOOKING', false);
		
		//MRPs
		if ($mrConfig[ 'singleRoomProperty' ] == '0') {
			foreach ($basic_property_details->this_property_room_classes as $roomtype_id  => $r) {
				$rw = array();
				
				$this_roomtype_count = count($existing_rooms[ $roomtype_id ][ 'room_uids' ]);
				
				$rw[ 'ROOM_CLASS_ABBV' ] = $r['abbv'];
				
				$rw[ 'ROOMNUMBERDROPDOWN' ] = jomresHTML::integerSelectList(00, 300, 1, "numberofRooms[$roomtype_id]", 'class="input-mini"', $this_roomtype_count, '%02d');
                $rw[ 'ROOMRATEPERDAY' ] = '<input class="input-mini" type="number" name="roomrateperday['.$roomtype_id.']" value="'.$existing_tariffs[ $roomtype_id ][ 'roomrateperday' ].'" />';
                $rw[ 'MAX_PEOPLE_ROOM' ] = jomresHTML::integerSelectList(01, 100, 1, "max_people[$roomtype_id]", 'class="input-mini"', $existing_rooms[ $roomtype_id ][ 'max_people' ], '%02d');
                $rw[ 'MAX_PEOPLE_TARIFF' ] = jomresHTML::integerSelectList(01, 100, 1, "maxpeople_tariff[$roomtype_id]", 'class="input-mini"', $existing_tariffs[ $roomtype_id ][ 'maxpeople_tariff' ], '%02d');

                $rw[ 'EXISTINGROOMS' ] = '<input type="hidden" name="existingrooms['.$roomtype_id.']" value="'.implode(',', $existing_rooms[ $roomtype_id ][ 'room_uids' ]).'" />';
				$rw[ 'TARIFFTYPEID' ] = '<input type="hidden" name="tarifftypeid['.$roomtype_id.']" value="'.$existing_tariffs[ $roomtype_id ][ 'tarifftype_id' ].'" />';
				$rw[ 'RATESUID' ] = '<input type="hidden" name="rates_uid['.$roomtype_id.']" value="'.$existing_tariffs[ $roomtype_id ][ 'rates_uid' ].'" />';

                $rows[] = $rw;
			}
			
			$pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('list_normalmode_roomtariffs.html');
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $tmpl->displayParsedTemplate();
		} else { //SRPs
			$room_uid = 0;
			$selected_roomtype_id = 0;
            $roomrateperday = 0;
            $max_people = 100;
			$rates_uid = 0;
			$tarifftype_id = 0;

            if (!empty($basic_room_details->rooms)) {
                foreach ($basic_room_details->rooms as $r) {
                    $selected_roomtype_id = $room['room_classes_uid'];
                }
            }
			
			if (isset($existing_rooms[ $selected_roomtype_id ][ 'max_people' ])) {
                $max_people = $existing_rooms[ $selected_roomtype_id ][ 'max_people' ];
            }
			
			if (isset($existing_tariffs[ $selected_roomtype_id ][ 'rates_uid' ])) {
                $rates_uid = $existing_tariffs[ $selected_roomtype_id ][ 'rates_uid' ];
            }
			
			if (isset($existing_tariffs[ $selected_roomtype_id ][ 'tarifftype_id' ])) {
                $tarifftype_id = $existing_tariffs[ $selected_roomtype_id ][ 'tarifftype_id' ];
            }
			
			if (isset($existing_tariffs[ $selected_roomtype_id ][ 'roomrateperday' ])) {
                $roomrateperday = $existing_tariffs[ $selected_roomtype_id ][ 'roomrateperday' ];
            }
			
			if (isset($existing_rooms[ $selected_roomtype_id ][ 'room_uids' ]) && !empty($existing_rooms[ $selected_roomtype_id ][ 'room_uids' ])) {
				$room_uid = $existing_rooms[ $selected_roomtype_id ][ 'room_uids' ][0];
			}

            if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == '1') {
                $output[ 'RATETEXT' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', false);
            } else {
                $output[ 'RATETEXT' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false);
            }

            $output[ 'ROOMRATEPERDAY' ] = '<input class="input-mini" type="number" name="roomrateperday" value="'.$roomrateperday.'" />';
            $output[ 'MAX_PEOPLE' ] = '<input class="input-mini" type="text" name="max_people" value="'.$max_people.'" />';

            foreach ($basic_property_details->this_property_room_classes as $roomtype_id  => $r) {
                $rw = array();
                $selected = '';

                if ($selected_roomtype_id == (int)$roomtype_id) {
                    $selected = 'checked="checked"';
                }

                $rw[ 'ROOM_CLASS_ABBV' ] = $r['abbv'];
                $rw[ 'ROOM_CLASS_RADIO' ] = '<input type="radio" name="roomtype" id="'.$roomtype_id.'" value="'.$roomtype_id.'" '.$selected.'> '.$rw[ 'ROOM_CLASS_ABBV' ].'</label>';

                $rows[] = $rw;
            }
			
			$output['ROOMUID'] = $room_uid;
			$output['RATESUID'] = $rates_uid;
			$output['TARIFFTYPEID'] = $tarifftype_id;

            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('list_normalmode_roomtariffs_srp.html');
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $tmpl->displayParsedTemplate();
		}
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
