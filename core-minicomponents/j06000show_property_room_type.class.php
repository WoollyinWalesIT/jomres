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
		
		echo $MiniComponents->specificEvent('06000', 'show_property_rooms', array('output_now' => false, 'property_uid' => $property_uid, 'room_classes_uid' => $room_classes_uid ));
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
