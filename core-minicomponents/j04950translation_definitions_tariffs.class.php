<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.1
 *
 * @copyright	2005-2022 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/
// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * Sends the new property welcome email
     *
	 */

class j04950translation_definitions_tariffs
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
		$property_uid = getDefaultProperty();

		$basic_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$basic_property_details->gather_data($property_uid);

		$basic_rate_details = jomres_singleton_abstract::getInstance( 'basic_rate_details' );
		$basic_rate_details->get_rates($property_uid);

		//

		$definitions = array();
		$section_name = jr_gettext('_JOMRES_COM_MR_LISTTARIFF_TITLE', '_JOMRES_COM_MR_LISTTARIFF_TITLE', false);

		if (!empty($basic_rate_details->multi_query_rates[$property_uid])) {
			foreach ($basic_rate_details->multi_query_rates[$property_uid] as $tarifftype_id=>$tariff_type) {
					$first_key = array_key_first($tariff_type);
					$second_key = array_key_first($tariff_type[$first_key]);

					$room_type_id = $tariff_type[$first_key][$second_key]["roomclass_uid"];
					$room_type_abbv = $basic_property_details->room_types[$room_type_id] ["abbv"];
					$room_type = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPES_ABBV'.$room_type_id, $room_type_abbv , false );

					$subtitle = jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID'.$tarifftype_id, $tariff_type[$first_key][$second_key]['rate_title'], false ).' - '.$room_type;

					$definitions[$section_name][$subtitle][] = [
						'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_TARIFF_TITLE_TARIFFTYPE_ID'.$tarifftype_id, $tariff_type[$first_key][$second_key]['rate_title'] ),
						'label' => '_JOMRES_COM_MR_LISTTARIFF_RATETITLE',
						'translate_label' => true
					];

					$definitions[$section_name][$subtitle][] = [
						'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_TARIFFDESC'.$tarifftype_id, $tariff_type[$first_key][$second_key]['rate_description'] ),
						'label' => '_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION',
						'translate_label' => true
					];
				}
			}


		$this->retVals = $definitions;
		
	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
