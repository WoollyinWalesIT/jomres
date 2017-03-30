<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_rooms
{
    public function __construct($componentArgs)
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;
            $this->shortcode_data = array(
                'task' => 'show_property_rooms',
                'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS',
                'arguments' => array(0 => array(
                        'argument' => 'property_uid',
                        'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_ARG_PROPERTY_UID',
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

        //if ($output_now)
        //	property_header( $property_uid );

        $current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
        $current_property_details->gather_data($property_uid);

        $jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');

        //get all room details
        $basic_room_details = jomres_singleton_abstract::getInstance('basic_room_details');
        $basic_room_details->get_all_rooms($property_uid);

        $output = array();

        if (count($basic_room_details->rooms) > 0) {
            //get room and room feature images
            $jomres_media_centre_images->get_images($property_uid, array('rooms', 'room_features'));

            $rows = array();

            foreach ($basic_room_details->rooms as $room) {
                $r = array();

                $r[ 'HEADER_ROOMFLOOR' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', false);
                $r[ 'HEADER_MAXPEOPLE' ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', false);
                $r[ 'AVLCALTITLE' ] = jr_gettext('_JOMRES_FRONT_AVAILABILITY', '_JOMRES_FRONT_AVAILABILITY', false, false);

                $r[ 'ROOMNAME' ] = $room['room_name'];
                $r[ 'ROOMNUMBER' ] = stripslashes($room['room_number']);
                $r[ 'ROOMFLOOR' ] = stripslashes($room['room_floor']);
                $r[ 'MAXPEOPLE' ] = $room['max_people'];

                $r[ 'ROOMTYPE' ] = $current_property_details->all_room_types[ $room['room_classes_uid'] ]['room_class_abbv'];

                $roomFeatureDescriptionsArray = array();
                $roomFeatureUidsArray = explode(',', $room['room_features_uid']);

                //room features
                $r[ 'ROOM_FEATURES' ] = '';
                if (count($basic_room_details->all_room_features) > 0) {
                    foreach ($roomFeatureUidsArray as $f) {
                        if (isset($basic_room_details->all_room_features[ $f ]['tooltip'])) {
                            $r[ 'ROOM_FEATURES' ] .= $basic_room_details->all_room_features[ $f ]['tooltip'];
                        }
                    }
                }
                $r[ 'RANDOM_IDENTIFIER' ] = generateJomresRandomString(10);

                $r[ 'IMAGELARGE' ] = get_showtime('live_site').'/jomres/images/noimage.gif';
                $r[ 'IMAGEMEDIUM' ] = get_showtime('live_site').'/jomres/images/noimage.gif';
                $r[ 'IMAGETHUMB' ] = get_showtime('live_site').'/jomres/images/noimage.gif';

                if (isset($jomres_media_centre_images->images['rooms']) && $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['large'] != '') {
                    $r[ 'IMAGELARGE' ] = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['large'];
                    $r[ 'IMAGEMEDIUM' ] = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['medium'];
                    $r[ 'IMAGETHUMB' ] = $jomres_media_centre_images->images['rooms'][$room['room_uid']][0]['small'];
                }

                $r[ 'AVLCALLINK' ] = jomresURL(JOMRES_SITEPAGE_URL.'&task=show_property_room&id='.$room['room_uid']);

                $rows[ ] = $r;
            }

            $pageoutput = array();
            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->addRows('rows', $rows);
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->readTemplatesFromInput('show_rooms.html');
            $result = $tmpl->getParsedTemplate();

            if ($output_now) {
                echo $result;
            } else {
                $this->retVals = $result;
            }
        }
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return $this->retVals;
    }
}
