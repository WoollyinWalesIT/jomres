<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.10.2
 *
 * @copyright	2005-2019 Vince Wooll
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
				'task' => 'show_property_room_type',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPES_ARG_PROPERTY_UID',
						'arg_example' => '1',
						),
						1 => array(
						'argument' => 'room_classes_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOM_TYPE_ARG_ROOM_TYPE_ID',
						'arg_example' => '3',
						)
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
		
		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else if (isset($_REQUEST[ 'output_now' ])) {
			$output_now = (bool) jomresGetParam($_REQUEST, 'output_now', 1);
		} else {
			$output_now = true;
		}
		
		$jomres_room_types = jomres_singleton_abstract::getInstance('jomres_room_types');
		$jomres_room_types->get_all_room_types();
		
		$jomres_room_types->get_room_type($room_classes_uid);
		
		$output = array();
		$pageoutput = array();
		
		if (isset($jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['room_class_abbv'])) {
			$output[ 'ROOM_CLASS_ABBV' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int) $room_classes_uid , $jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['room_class_abbv']);
			$output[ 'ROOM_CLASS_FULL_DESC' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int) $room_classes_uid , $jomres_room_types->property_specific_room_type[$property_uid][$room_classes_uid]['room_class_full_desc']);
		} else {
			
			$output[ 'ROOM_CLASS_ABBV' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.(int) $room_classes_uid , $jomres_room_types->room_types[$room_classes_uid]['room_class_abbv'] );
			$output[ 'ROOM_CLASS_FULL_DESC' ] = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_DESC'.(int) $room_classes_uid , $jomres_room_types->room_types[$room_classes_uid]['room_class_full_desc']);
		}

		$output['ROOMS'] = $MiniComponents->specificEvent('06000', 'show_property_rooms', array('output_now' => false, 'property_uid' => $property_uid, 'room_classes_uid' => $room_classes_uid ));
		
		$resource_type = 'room_types';
		$resource_id = $room_classes_uid;
		
		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');
		$jomres_media_centre_images->get_images($defaultProperty);
		if (isset($jomres_media_centre_images->images [$resource_type] [$resource_id])) {
			$images = $jomres_media_centre_images->images [$resource_type] [$resource_id];
			$slideshow = $MiniComponents->specificEvent('01060', 'slideshow', array('images' => $images ));
			$output['SLIDESHOW'] = $slideshow['slideshow'];
		} else {
			$output['SLIDESHOW'] = '';
		}
		
		

		
		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
		$tmpl->addRows('pageoutput', $pageoutput);

		$tmpl->readTemplatesFromInput('show_property_room_type.html');
		$template = $tmpl->getParsedTemplate();
		
		if ($output_now) {
			echo $template;
		} else {
			$this->retVals = $template;
		}
		
		
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
