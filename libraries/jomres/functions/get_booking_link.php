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

// The purpose of this function is to allow us to override the dobooking link programatically. In this case it will simply return the dobooking link, but making it a simple function allows us to override it if needed
function get_booking_link($sefd_url) {
    return $sefd_url;
}