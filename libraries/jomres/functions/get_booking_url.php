<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.27
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

// The purpose of this function is to allow us to override the dobooking link programatically. In this case it will simply return the dobooking link, but making it a simple function allows us to override it if needed
// Types:
// sef: sef url
// nosef: no sef url
// sefsafe: sef url not passed through jomresURL function
// ajax: ajax safe url

function get_booking_url($property_uid = 0, $type = 'sef') {
    switch($type) {
		case 'sef':
			$url = jomresURL(JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$property_uid);
			break;
		case 'nosef':
			$url = jomresURL(JOMRES_SITEPAGE_URL_NOSEF.'&task=dobooking&selectedProperty='.$property_uid);
			break;
		case 'sefsafe':
			$url = JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$property_uid;
			break;
		case 'ajax':
			$url = JOMRES_SITEPAGE_URL_AJAX.'&task=dobooking&selectedProperty='.$property_uid;
			break;
		default:
			$url = jomresURL(JOMRES_SITEPAGE_URL.'&task=dobooking&selectedProperty='.$property_uid);
			break;
	}
    return $url;
}