<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Ajax script. Set the guest budget found in the list properties page
	 *
	 */

class j06000ajax_locations
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 *
	 *
	 */
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		jr_import('jomSearch');
		$locales = prepGeographicSearch();
		// We have a list of locales, now we can build an array of ways to search for those locales
		$result = array();

		if (!empty($locales["propertyLocations"])) {
			foreach ($locales["propertyLocations"] as $locale) {
				$country_code = $locale['country'];
				$countryname = $locale['countryname'];
				$region = $locale['region'];
				$property_town = $locale['property_town'];

				$result[$countryname] = array (
					"form_element" => "country" ,
					"element_name" => $countryname,
				);
				$result[$region] = array (
					"form_element" => "region" ,
					"element_name" => $region,
				);
				if (trim($property_town) != '') {
					$result[$property_town] = array (
						"form_element" => "town" ,
						"element_name" => $property_town,
					);
				}
			}
			ksort($result, SORT_NATURAL | SORT_FLAG_CASE);
		}
		echo json_encode($result);
	}


	public function getRetVals()
	{
		return null;
	}
}
