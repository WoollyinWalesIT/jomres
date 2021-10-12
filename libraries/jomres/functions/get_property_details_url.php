<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.25.0
 *
 * @copyright	2005-2021 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

/**
 *
 * @package Jomres\Core\Functions
 *
* The purpose of this function is to allow us to override the property details page link programatically.
 *
* Types:
* sef: sef url
* nosef: no sef url
* sefsafe: sef url not passed through jomresURL function
* ajax: ajax safe url
 *
 */


function get_property_details_url($property_uid = 0, $type = 'sef', $params = '') {
	$jomres_access_control = jomres_singleton_abstract::getInstance('jomres_access_control');
	
	if (!$jomres_access_control->this_user_can('viewproperty')) {
		return false;
	}

	switch($type) {
		case 'sef':
			$url = jomresURL(JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$property_uid.$params);
			break;
		case 'nosef':
			$url = jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=viewproperty&property_uid='.$property_uid.$params);
			break;
		case 'sefsafe':
			$url = JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$property_uid.$params;
			break;
		case 'ajax':
			$url = JOMRES_SITEPAGE_URL_AJAX.'&task=viewproperty&property_uid='.$property_uid.$params;
			break;
		default:
			$url = jomresURL(JOMRES_SITEPAGE_URL.'&task=viewproperty&property_uid='.$property_uid.$params);
			break;
	}
	
	//if we have a joomla menu of type propertydetails created for this specific property, then we`ll use that url insetad, t avoid duplicates. This allows alows us having modules assigned only to this property details page.
	if (this_cms_is_joomla()) {
		$app = JFactory::getApplication(); 
		$menu = $app->getMenu();
		$menuItem = $menu->getItems( 'link', 'index.php?option=com_jomres&view=default&layout=propertydetails&selected_property='.$property_uid, $firstonly = true );
		if ($menuItem) {
			if ($type == 'sef' || $type == 'sefsafe') {
				$url = JRoute::_($menuItem->link.'&Itemid='.$menuItem->id);
			} else {
				$url = jomresURL(get_showtime('live_site').'/'.$menuItem->link.'&Itemid='.$menuItem->id);
			}
		}
	}
	
	return $url;
}
