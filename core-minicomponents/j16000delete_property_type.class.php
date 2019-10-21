<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000delete_property_type
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$idarray = jomresGetParam($_POST, 'idarray', array());

		if (empty($idarray)) {
			return;
		}

		$jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
		$success = $jomres_property_types->delete_property_type($idarray);

		if ($success) {
			$save_message = jr_gettext('_JOMRES_COM_PTYPES_DELETED', '_JOMRES_COM_PTYPES_DELETED', false);
			$message_class = '';
		} else {
				$halting_properties = jr_gettext('_JOMRES_COM_PTYPES_NOT_DELETED', '_JOMRES_COM_PTYPES_NOT_DELETED', false);
				foreach ($jomres_property_types->properties_that_prevent_property_type_from_being_deleted as $property_uid ) {
					$halting_properties .= $property_uid." ";
				}
			$save_message = $halting_properties;
			$message_class = 'alert-danger';
		}

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_types'), $save_message , $message_class );
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
