<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.24
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

        $output = array();
        $pageoutput = array();
        $room_classes_array = array();
        $roomTypesArray = array();
        $allTariffsForRoomType = array();
        $propertyRowInfo = '';

        //check if this property type has room types assigned
        if (count($basic_property_details->this_property_room_classes) == 0) {
            throw new Exception('Error, there are no room types for this property type. You can assign room types to this property type by visiting Administrator -> Jomres -> Site Structure -> and editing the room/resource types.');

            return;
        }

        //get tariffs TODO: build a class for tariffs
        $query = 'SELECT `roomrateperday`,`roomclass_uid`,`maxpeople` FROM #__jomres_rates WHERE property_uid = '.(int) $defaultProperty;
        $tariffList = doSelectSql($query);

        //check for SRPs to make sure they don`t have more than one rooms created. TODO: may not be needed anymore
        if ($mrConfig[ 'singleRoomProperty' ] == '1' && count($basic_room_details->rooms) > 1) { // Looks like property manager has changed from MRP to SRP. Let's clean things up and start anew
            $jomres_properties->delete_rooms_tariffs_settings(true, true, false);
            $tariffList = array();
        }

        //we need to gather some information about tariffs & rooms
        foreach ($basic_property_details->this_property_room_classes as $key => $roomType) {
            $roomType_id = (int) $key;

            if (count($basic_room_details->rooms) > 0) {
                foreach ($basic_room_details->rooms as $room) {
                    if ($room['room_classes_uid'] == $roomType_id) {
                        if (!isset($roomTypesArray[ $roomType_id ][ 'counter' ])) {
                            $roomTypesArray[ $roomType_id ][ 'counter' ] = 0;
                        }

                        $count = $roomTypesArray[ $roomType_id ][ 'counter' ];

                        $roomTypesArray[ $roomType_id ][ 'counter' ] = $count + 1;
                        $roomTypesArray[ $roomType_id ][ 'existingrooms' ][] = $room['room_uid'];
                        $roomTypesArray[ $roomType_id ][ 'max_people' ] = $room['max_people'];
                    }
                }
            }

            if (count($tariffList) > 0) {
                foreach ($tariffList as $tariff) {
                    if ($tariff->roomclass_uid == $roomType_id) {
                        if (!isset($allTariffsForRoomType[ $roomType_id ][ 'counter' ])) {
                            $allTariffsForRoomType[ $roomType_id ][ 'counter' ] = 0;
                        }

                        $count = $allTariffsForRoomType[ $roomType_id ][ 'counter' ];

                        $allTariffsForRoomType[ $roomType_id ][ 'counter' ] = $count + 1;
                        $allTariffsForRoomType[ $roomType_id ][ 'roomrateperday' ] = $tariff->roomrateperday;
                        $allTariffsForRoomType[ $roomType_id ][ 'maxpeople' ] = $tariff->maxpeople;
                    }
                }
            }
        }

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_normalmode_tariffs');
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false).' &amp; '.jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOM', '_JOMRES_COM_MR_VRCT_TAB_ROOM', false);
        $output[ 'HROOMCLASS' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', false);
        $output[ 'HNUMBEROFROOMS' ] = jr_gettext('_JOMRES_NUMBEROFROOMSAVAILABLE', '_JOMRES_NUMBEROFROOMSAVAILABLE', false);
        $output[ 'HROOMRATEPERDAY' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false);
        $output[ 'HPROPERTYTYPE' ] = jr_gettext('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', '_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV', false);
        $output[ 'HROOMTYPE' ] = jr_gettext('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', '_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE', false);
        $output[ 'HMAXPEOPLE_ROOM' ] = jr_gettext('JOMRES_MAXPEOPLEINROOM', 'JOMRES_MAXPEOPLEINROOM', false);
        $output[ 'HMAXPEOPLE_TARIFF' ] = jr_gettext('JOMRES_MAXPEOPLEINBOOKING', 'JOMRES_MAXPEOPLEINBOOKING', false);

        if ($mrConfig[ 'singleRoomProperty' ] == '0') { // MRPs
            // Now we can start to create our rows
            $rows = array();
            foreach ($basic_property_details->this_property_room_classes as $key => $roomType) { // First we need to gather some information about tariffs & rooms
                $r = array();

                $roomtype_id = (int) $key;

                $roomtype_abbr = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$roomtype_id, stripslashes($roomType['abbv']), false, false);

                // if $roomTypesArray[ $roomtype_id ][ 'counter' ] isn't (because prices weren't previously set for this room type then this needs to be zero
                if (!isset($roomTypesArray[ $roomtype_id ][ 'counter' ])) {
                    $roomTypesArray[ $roomtype_id ][ 'counter' ] = 0;
                    $roomTypesArray[ $roomtype_id ][ 'max_people' ] = 0;
                    $allTariffsForRoomType[ $roomtype_id ][ 'roomrateperday' ] = 0;
                    $allTariffsForRoomType[ $roomtype_id ][ 'maxpeople' ] = 0;
                    $roomTypesArray[ $roomtype_id ][ 'existingrooms' ] = array();
                }

                if (!isset($allTariffsForRoomType[ $roomtype_id ][ 'roomrateperday' ])) {
                    $allTariffsForRoomType[ $roomtype_id ][ 'roomrateperday' ] = 0;
                    $roomTypesArray[ $roomtype_id ][ 'max_people' ] = 2;
                    $allTariffsForRoomType[ $roomtype_id ][ 'maxpeople' ] = 4;
                }

                $r[ 'ROOM_CLASS_ABBV' ] = $roomtype_abbr;
                $r[ 'ROOMNUMBERDROPDOWN' ] = jomresHTML::integerSelectList(00, 300, 1, "numberofRooms[$roomtype_id]", 'class="input-mini"', $roomTypesArray[ $roomtype_id ][ 'counter' ], '%02d');
                $r[ 'ROOMRATEPERDAY' ] = '<input class="input-mini" type="number" name="roomrateperday['.$roomtype_id.']" value="'.$allTariffsForRoomType[ $roomtype_id ][ 'roomrateperday' ].'" />';
                $r[ 'MAX_PEOPLE_ROOM' ] = jomresHTML::integerSelectList(00, 100, 1, "max_people[$roomtype_id]", 'class="input-mini"', $roomTypesArray[ $roomtype_id ][ 'max_people' ], '%02d');
                $r[ 'MAX_PEOPLE_TARIFF' ] = jomresHTML::integerSelectList(01, 100, 1, "maxpeople_tariff[$roomtype_id]", 'class="input-mini"', $allTariffsForRoomType[ $roomtype_id ][ 'maxpeople' ], '%02d');

                $r[ 'existingrooms' ] = '';
                if (count($roomTypesArray[ $roomtype_id ][ 'existingrooms' ]) > 0) {
                    $r[ 'existingrooms' ] = '<input type="hidden" name="existingrooms['.$roomtype_id.']" value="'.implode(',', $roomTypesArray[ $roomtype_id ][ 'existingrooms' ]).'" />';
                }

                $rows[] = $r;
            }

            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
            $tmpl->readTemplatesFromInput('list_normalmode_roomtariffs.html');
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $tmpl->displayParsedTemplate();
        } else { // SRPs
            $selected_roomtype_id = 0;
            $roomrateperday = 0;
            $max_people = 10;

            if (count($basic_room_details->rooms) > 0) {
                foreach ($basic_room_details->rooms as $r) {
                    $selected_roomtype_id = $room['room_classes_uid'];
                }
            }

            if (isset($allTariffsForRoomType[ $selected_roomtype_id ][ 'roomrateperday' ])) {
                $roomrateperday = $allTariffsForRoomType[ $selected_roomtype_id ][ 'roomrateperday' ];
            }

            if (isset($roomTypesArray[ $selected_roomtype_id ][ 'max_people' ])) {
                $max_people = $roomTypesArray[ $selected_roomtype_id ][ 'max_people' ];
            }

            if ($mrConfig[ 'tariffChargesStoredWeeklyYesNo' ] == '1') {
                $output[ 'RATETEXT' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK', false);
            } else {
                $output[ 'RATETEXT' ] = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', '_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY', false);
            }

            $output[ 'ROOMRATEPERDAY' ] = '<input class="input-mini" type="number" name="roomrateperday" value="'.$roomrateperday.'" />';
            $output[ 'MAX_PEOPLE' ] = '<input class="input-mini" type="text" name="max_people" value="'.$max_people.'" />';

            $rows = array();
            foreach ($basic_property_details->this_property_room_classes as $key => $roomType) {
                $r = array();
                $selected = '';

                $roomtype_id = (int) $key;

                if ($selected_roomtype_id == (int) $roomtype_id) {
                    $selected = 'checked="checked"';
                }

                $r[ 'ROOM_CLASS_ABBV' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$roomtype_id, stripslashes($roomType['abbv']), false);
                $r[ 'ROOM_CLASS_RADIO' ] = '<input type="radio" name="roomtype" id="'.$roomtype_id.'" value="'.$roomtype_id.'" '.$selected.'>'.$r[ 'ROOM_CLASS_ABBV' ].'</label>';

                $rows[] = $r;
            }

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
