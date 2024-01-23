<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
 *
 * @copyright	2005-2024 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Registers the list layout for property search results/lists. These are the options that a user can choose to alter the layout they want to see properties displayed in.
	 */

class j01004property_list_list
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
	 
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = true;

			return;
		}
		$this_plugin = 'list';
		$layout = '';

		$tmpBookingHandler = jomres_singleton_abstract::getInstance('jomres_temp_booking_handler');

		if (isset($tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ])) {
			$layout = $tmpBookingHandler->tmpsearch_data[ 'current_property_list_layout' ];
		}

		if ($layout == $this_plugin) {
			set_showtime('number_of_ajax_results_required', 6);
		} // This is for the list scrolling feature, we need to know the number of properties that should be returned

		$property_list_layouts = get_showtime('property_list_layouts');

		if (is_null($property_list_layouts)) {
			$property_list_layouts = array();
		}

		$property_list_layouts[ $this_plugin ] = array('layout' => 'list_properties.html', 'title' => jr_gettext('_JOMRES_PROPERTYLIST_LAYOUT_LIST', '_JOMRES_PROPERTYLIST_LAYOUT_LIST', false, false), 'path' => null);

		set_showtime('property_list_layouts', $property_list_layouts);
	}

	public function touch_template_language()
	{
		$output = array();
		$output[ ] = jr_gettext('_JOMRES_PROPERTYLIST_LAYOUT_LIST', '_JOMRES_PROPERTYLIST_LAYOUT_LIST');

		foreach ($output as $o) {
			echo $o;
			echo '<br/>';
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
