<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.1
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_room_type
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
            $property_uid = (int)$componentArgs[ 'property_uid' ];
        } else {
			$property_uid = (int)jomresGetParam($_REQUEST, 'property_uid', 0);
        }
		
        if (isset($componentArgs[ 'room_classes_uid' ])) {
            $room_classes_uid = (int)$componentArgs[ 'room_classes_uid' ];
        } else {
			$room_classes_uid = (int)jomresGetParam($_REQUEST, 'room_classes_uid', 0);
        }
		
		if ($property_uid == 0) {
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

        if (!empty($basic_property_details->room_types) && isset($basic_property_details->room_types[$room_classes_uid]) ) {
            
            $output[ '_JOMRES_SEARCH_RTYPES' ] = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', '_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES', false);

			//var_dump($basic_property_details->room_types[$room_classes_uid]);exit;
			
			$output['ROOM_TYPE_TITLE'] = $basic_property_details->room_types[$room_classes_uid]['abbv'];
			$output['ROOM_TYPE_DESCRIPTION'] = $basic_property_details->room_types[$room_classes_uid]['desc'];
			
			$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
			$jomres_media_centre_images->get_images($property_uid);
			
			if (!empty($jomres_media_centre_images->images['room_types'][$room_classes_uid])) {
					$result = $MiniComponents->specificEvent('01060', 'slideshow', array('images' => $jomres_media_centre_images->images['room_types'][$room_classes_uid]));
					$output[ 'SLIDESHOW' ] = $result ['slideshow'];
				} else {
					$output['SLIDESHOW'] = '';
				}
			
			// var_dump($jomres_media_centre_images->images['room_types'][$room_classes_uid]);exit;
			// if (isset($jomres_media_centre_images->images [$resource_type] [$resource_id])) {
			
			
            $pageoutput[] = $output;
            $tmpl = new patTemplate();
            $tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
            $tmpl->addRows('pageoutput', $pageoutput);
            $tmpl->readTemplatesFromInput('show_property_room_type.html');

            $rendered = $tmpl->getParsedTemplate();
            if ($output_now) {
                echo $rendered;
            } else {
                $this->retVals = $rendered;
            }
        }
    }

    public function getRetVals()
    {
        return $this->retVals;
    }
}
