<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.3.0
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

class j04950translation_definitions_property_details
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
		$basic_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$basic_property_details->gather_data($property_uid);

		$definitions = array();
		$section_name = jr_gettext('_JOMRES_PATHWAY_PROPERTYDETAILS', '_JOMRES_PATHWAY_PROPERTYDETAILS', false);
		$subtitle = jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME_'.$property_uid,'_JOMRES_CUSTOMTEXT_PROPERTY_NAME_'.$property_uid,false);

		$definitions[$section_name][$subtitle][] = [
			'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_PROPERTY_NAME_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_name"] )  ,
			'label' => '_JRPORTAL_PROPERTIES_PROPERTYNAME',
			'translate_label' => true
		];

		$definitions[$section_name][$subtitle][] = [
			'definition' =>
			jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DESCRIPTION_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_description"] ),
			'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION',
			'translate_label' => true
		];

		$definitions[$section_name][$subtitle][] = [
			'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_CHECKINTIMES_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_checkin_times"] ),
			'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES',
			'translate_label' => true
			];

		$definitions[$section_name][$subtitle][] =
			[
				'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AREAACTIVITIES_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_area_activities"] ),
				'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES',
				'translate_label' => true
			];

		$definitions[$section_name][$subtitle][] =
			[
				'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DIRECTIONS_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_driving_directions"] ),
				'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS',
				'translate_label' => true
			];

		$definitions[$section_name][$subtitle][] = [
			'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_AIRPORTS_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_airports"] ),
			'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS',
			'translate_label' => true
			];

		$definitions[$section_name][$subtitle][] = [
			'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_OTHERTRANSPORT_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_othertransport"] ),
			'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT',
			'translate_label' => true
			];
		;
		$definitions[$section_name][$subtitle][] = [
			'definition' =>  jr_gettext('_JOMRES_CUSTOMTEXT_ROOMTYPE_DISCLAIMERS_'.$property_uid, $basic_property_details->multi_query_result[$property_uid]["property_policies_disclaimers"] ),
			'label' => '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS',
			'translate_label' => true
			];


		$this->retVals = $definitions;

	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
