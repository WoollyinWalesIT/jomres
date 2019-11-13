<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * Core Minicomponent.
	 *
	 * 
	 */

class j16000deletePfeature
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$jomres_property_features = jomres_singleton_abstract::getInstance('jomres_property_features');
		$jomres_property_features->get_all_property_features();
		
		$ids = jomresGetParam($_POST, 'idarray', array());
		
		if (is_array($ids) && !empty($ids)) {
			$success = $jomres_property_features->delete_property_features($ids);
			
			if ($success) {
				$save_message = jr_gettext('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', '_JOMRES_COM_MR_PROPERTYFEATURE_DELETED', false);
				$message_class = '';
			} else {
				
					$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
					
					
					$using_properties = array();
					foreach ($jomres_property_features->properties_that_prevent_feature_from_being_deleted as $property_uids_array ) {
						foreach ($property_uids_array as $property_uid ) {
							$using_properties[] = $property_uid;
						}
					}
					
					$using_properties = array_unique($using_properties);
					
					$current_property_details->gather_data_multi($using_properties);

					$halting_properties = '';

					foreach ($jomres_property_features->properties_that_prevent_feature_from_being_deleted as $feature_id=>$property_uids_array ) {
						$halting_properties .= jr_gettext('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', '_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_1', false)." ".$jomres_property_features->property_features[$feature_id]['abbv']." ".jr_gettext('_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', '_JOMRES_CANNOT_DELETE_PROPERTY_FEATURE_2', false);
						foreach ($property_uids_array as $property_uid ) {
							$halting_properties .= $current_property_details->multi_query_result[ $property_uid ][ 'property_name' ].", ";
						}
					
					$halting_properties = rtrim($halting_properties, ", ")." ";
					}
				$save_message = $halting_properties;
				$message_class = 'alert-danger';
			}

		}
		
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=listPfeatures'), $save_message, $message_class );
	}


	public function getRetVals()
	{
		return null;
	}
}
