<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.1
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

class j04950translation_definitions_room_features
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

		$current_property_details = jomres_singleton_abstract::getInstance( 'basic_property_details' );
		$current_property_details->gather_data($property_uid );
		$current_property_details->get_all_resource_features($property_uid);

		$definitions = array();
		$section_name = jr_gettext('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', '_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES', false);

		if (!empty($current_property_details->all_room_features)) {
			foreach ( $current_property_details->all_room_features as $f ) {
					$subtitle = jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $f['room_features_uid'], $f['feature_description'] , false );
					$definitions[$section_name][$subtitle][] = [
						'definition' => jr_gettext('_JOMRES_CUSTOMTEXT_ROOMFEATURE_DESCRIPTION'.(int) $f['room_features_uid'], $f['feature_description']),
						'label' => '_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT',
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
