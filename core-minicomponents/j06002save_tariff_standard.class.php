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
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################

class j06002save_tariff_standard
{
	function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false;
			return;
		}
		
		date_default_timezone_set('UTC'); // Must be left in place, without it the date range selectors will not work properly on servers with different timezones.
		
		$defaultProperty = getDefaultProperty();
		
		$mrConfig = getPropertySpecificSettings();

		if ($mrConfig['tariffmode'] != '5' || $mrConfig[ 'is_real_estate_listing' ] == '1' || get_showtime('is_jintour_property')) {
			return;
		}
		
		jr_import('jrportal_rates');
		$jrportal_rates = new jrportal_rates();
		$jrportal_rates->property_uid = $defaultProperty;

		if (isset($_POST['tarifftypeid']) && $_POST['tarifftypeid'] > 0) {
			$jrportal_rates->roomclass_uid 				= (int)$_POST["room_type_id"]	;
		} else {
			$jrportal_rates->roomclass_uid 				= (int)jomresGetParam($_POST, 'roomClass', $jrportal_rates->rates_defaults['roomclass_uid']);
		}

		$modifiers = array();
		$modifiers["modifier_is_percentage"]		= $_POST["modifier_is_percentage"];
		$modifiers["modifier_7_days"]				= $_POST["modifier_7_days"];
		$modifiers["modifier_30_days"]				= $_POST["modifier_30_days"];

		$jrportal_rates->tarifftype_id  			= (int)jomresGetParam($_POST, 'tarifftypeid', 0);
		$jrportal_rates->rate_title 				= jomresGetParam($_POST, 'tarifftypename', $jrportal_rates->rates_defaults['rate_title']);
		$jrportal_rates->rate_description 			= jomresGetParam($_POST, 'tarifftypedesc', $jrportal_rates->rates_defaults['rate_description']);
		$jrportal_rates->maxdays 					= (int)jomresGetParam($_POST, 'maxdays', $jrportal_rates->rates_defaults['maxdays']);
		$jrportal_rates->extra_guests_price 		= convert_entered_price_into_safe_float($_POST['extra_guests_price']);
		$jrportal_rates->minpeople 					= 1;
		$jrportal_rates->maxpeople 					= (int) $mrConfig[ 'accommodates' ];

		$jrportal_rates->modifiers 					= $modifiers;
		$jrportal_rates->dayofweek 					= (int)jomresGetParam($_POST, 'fixed_dayofweek', $jrportal_rates->rates_defaults['dayofweek']);
		$jrportal_rates->ignore_pppn 				= 0;

		$jrportal_rates->allow_we 					= 1;
		$jrportal_rates->weekendonly 				= 0;

		//tariffs and min days, not sanitized yet. The rates class will do this
		$jrportal_rates->dates_rates				= $_POST['tariffinput'];
		$jrportal_rates->dates_mindays				= $_POST['mindaysinput'];

		//save tariff
		$jrportal_rates->save_rate();

		$saveMessage = jr_gettext('_JOMRES_MR_AUDIT_INSERT_TARIFF', '_JOMRES_MR_AUDIT_INSERT_TARIFF', false);
		
		$jomres_messaging =jomres_singleton_abstract::getInstance('jomres_messages');
		$jomres_messaging->set_message($saveMessage);
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL . "&task=list_tariffs_standard"), $saveMessage);
	}

	// This must be included in every Event/Mini-component
	function getRetVals()
	{
		return null;
	}
}
