<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j06000show_property_rooms_slideshow
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;
			$this->shortcode_data = array(
				'task' => 'show_property_rooms_slideshow',
				'info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW',
				'arguments' => array(0 => array(
						'argument' => 'property_uid',
						'arg_info' => '_JOMRES_SHORTCODES_06000SHOW_PROPERTY_ROOMS_SLIDESHOW_ARG_PROPERTY_UID',
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

		$jomres_media_centre_images = jomres_singleton_abstract::getInstance('jomres_media_centre_images');

		$output = array();

		$query = 'SELECT room_uid,room_classes_uid,propertys_uid,room_features_uid,room_name,room_number,room_floor,max_people FROM #__jomres_rooms WHERE propertys_uid = '.(int) $property_uid.' ORDER BY room_number,room_name';
		$roomList = doSelectSql($query);

		if (!empty($roomList)) {
			$jomres_media_centre_images->get_images($property_uid, array('rooms'));

			$room_images = array();
			$image_hashes = array();
			foreach ($roomList as $room) {
				$room_uid = $room->room_uid;
				foreach ($jomres_media_centre_images->images['rooms'][$room_uid] as $image) {
					if ($image['large'] != $jomres_media_centre_images->multi_query_images['noimage-large']) {
						$hash = md5_file($image['large']);
						if (!in_array($hash, $image_hashes)) {
							$room_images[] = $image;
							$image_hashes[] = $hash;
						}
					}
				}
			}

			$result = $MiniComponents->specificEvent('01060', 'slideshow', array('images' => $room_images));
			$output[ 'SLIDESHOW' ] = $result ['slideshow'];

			$pageoutput = array();
			$pageoutput[] = $output;

			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('show_property_rooms_slideshow.html');
			$result = $tmpl->getParsedTemplate();

			if ($output_now) {
				echo $result;
			} else {
				$this->retVals = $result;
			}
		}
	}

	public function touch_template_language()
	{
		$output = array();

		$output[ ] = jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS', '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS');
		$output[ ] = jr_gettext('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE', '_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME');
		$output[ ] = jr_gettext('_JOMRES_FRONT_AVAILABILITY', '_JOMRES_FRONT_AVAILABILITY');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR');
		$output[ ] = jr_gettext('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE', '_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return $this->retVals;
	}
}
