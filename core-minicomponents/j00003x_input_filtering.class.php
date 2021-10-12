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
	 * @package Jomres\Core\Minicomponents
	 *
	 * The system sets up default inputs where html input is allowed
	 * 
	 */

class j00003x_input_filtering
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
			$this->template_touchable = false;

			return;
		}
		
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		
		if (!isset($jrConfig[ 'inputs_allowing_html' ])) {
			$jrConfig[ 'inputs_allowing_html' ] = 'property_description property_checkin_times property_area_activities property_driving_directions property_airports property_othertransport property_policies_disclaimers email_text description room_description';
		}

		$showtime_inputs = get_showtime('inputs_allowing_html');
		
		$site_config_inputs = explode(' ', $jrConfig[ 'inputs_allowing_html' ]);
		
		if (!empty($showtime_inputs) && !empty($site_config_inputs)) {
			$inputs_allowing_html = array_merge($showtime_inputs, $site_config_inputs);
		} else {
			if (!empty($site_config_inputs)) {
				$inputs_allowing_html = $site_config_inputs;
			} elseif (!empty($showtime_inputs)) {
				$inputs_allowing_html = $showtime_inputs;
			} else {
				$inputs_allowing_html = array();
			}
		}

		set_showtime('inputs_allowing_html', $inputs_allowing_html);
	}


	public function getRetVals()
	{
		return null;
	}
}
