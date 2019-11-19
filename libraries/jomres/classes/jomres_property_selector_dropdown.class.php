<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.21.2
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 *
	 * @package Jomres\Core\Classes
	 *
	 */

class jomres_property_selector_dropdown
{	
	/**
	 * 
	 *
	 *
	 */

	public function get_dropdown()
	{
		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->get_property_name_multi($thisJRUser->authorisedProperties);

		$currentProperty = getDefaultProperty();
		$output = array();
		$pageoutput = array();

		$curPageUrl = $this->curPageUrl();

		$properties = array();
		foreach ($thisJRUser->authorisedProperties as $p) {
			$properties[$p] = $basic_property_details->property_names[$p];
		}

		natcasesort($properties);

		$options = array();
		foreach ($properties as $key => $val) {
			$options[] = jomresHTML::makeOption($key, $val);
		}

		//$javascript = 'onchange="window.location=\'' . $curPageUrl . '&thisProperty=' . '\' + this.value;"';
		$javascript = 'onchange="window.location=\''.JOMRES_SITEPAGE_URL_NOSEF.'&thisProperty='.'\' + this.value;"';

		return jomresHTML::selectList($options, 'switch_property', ' autocomplete="off" class="inputbox" size="1" '.$javascript.'', 'value', 'text', $currentProperty, false);
	}
	
	/**
	 * 
	 *
	 *
	 */

	public function curPageURL()
	{
		$pageURL = 'http';
		if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
			$pageURL .= 's';
		}
		$pageURL .= '://';
		if ($_SERVER['SERVER_PORT'] != '80') {
			$pageURL .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
		} else {
			$pageURL .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		}

		return $pageURL;
	}
}
