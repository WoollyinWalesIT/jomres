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
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 * 
	 */

class j16000publish_property_type
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

		$id = jomresGetParam($_GET, 'id', 0);

		if ($id == 0) {
			return;
		}

		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		$success = $jomres_property_types->publish_property_type($id);
		


		if ($success) {
			$save_message = jr_gettext('_JOMRES_COM_PTYPES_SAVED', '_JOMRES_COM_PTYPES_SAVED', false);
			$message_class = '';
		} else {
				$halting_properties = jr_gettext('_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', '_JOMRES_COM_PTYPES_NOT_UNPUBLISHED', false);
				foreach ($jomres_property_types->properties_that_prevent_property_type_from_being_unpublished as $property_uid ) {
					$halting_properties .= $property_uid." ";
				}
			$save_message = $halting_properties;
			$message_class = 'alert-danger';
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_types'), $save_message , $message_class );
	}


	public function getRetVals()
	{
		return null;
	}
}
