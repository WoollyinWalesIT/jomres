<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.25
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_room_types
{
    public function __construct($componentArgs)
    {
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_property_room_types',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES',
                'arguments' => array(0 => array(
                        'argument' => 'property_uid',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID',
                        'arg_example' => '1',
                        ),
                    ),
                );

            return;
        }
        $this->retVals = '';

        if (isset($componentArgs[ 'property_uid' ])) {
            $property_uid = (int) $componentArgs[ 'property_uid' ];
        } elseif (isset($_REQUEST['property_uid'])) {
            $property_uid = (int) $_REQUEST['property_uid'];
        } else {
            return;
        }

        if (!user_can_view_this_property($property_uid)) {
            return;
        }

        $output_now = true;
        if (isset($componentArgs[ 'output_now' ])) {
            $output_now = (bool) $componentArgs[ 'output_now' ];
        }

        $mrConfig = getPropertySpecificSettings($property_uid);
        $basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $basic_property_details->gather_data($property_uid);

        $output = array();

        if (count($basic_property_details->room_types) > 0) {
            $room_types = array();
            $output[ '_JOMRES_SEARCH_RTYPES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', false);

            foreach ($basic_property_details->room_types as $key => $val) {
                $room_type[ 'ROOM_TYPE' ] = '';
                $room_type[ 'ROOM_TYPE_TEXT' ] = '';
                $room_type[ 'ROOM_TYPE_COUNTER' ] = 0;
                if (isset($basic_property_details->this_property_room_classes[$key])) {
                    $room_type[ 'ROOM_TYPE' ] =
                        jomres_makeTooltip(
                            $basic_property_details->this_property_room_classes,
                            $basic_property_details->this_property_room_classes[$key]['abbv'],
                            $basic_property_details->this_property_room_classes[$key]['desc'],
                            JOMRES_ROOT_DIRECTORY.'/uploadedimages/rmtypes/'.$basic_property_details->this_property_room_classes[$key]['image'],
                            '',
                            'room_type',
                            array()
                            );
                    $room_type[ 'ROOM_TYPE_TEXT' ] = $basic_property_details->this_property_room_classes[$key]['abbv'];
                    $room_type[ 'ROOM_TYPE_COUNTER' ] = count($basic_property_details->rooms_by_type[$key]);
                }

                $room_types[] = $room_type;
            }

            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('room_types', $room_types);
            if ($mrConfig['singleRoomProperty'] == '1') {
                $tmpl->readTemplatesFromInput('show_property_room_types_srp.html');
            } else {
                $tmpl->readTemplatesFromInput('show_property_room_types.html');
            }
            $features_template = $tmpl->getParsedTemplate();
            if ($output_now) {
                echo $features_template;
            } else {
                $this->retVals = $features_template;
            }
        } else {
            $output[ '_JOMRES_SEARCH_RTYPES' ] = '';
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
