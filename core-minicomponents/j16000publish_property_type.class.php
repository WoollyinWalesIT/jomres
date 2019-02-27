<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.17.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000publish_property_type
{
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
		$jomres_property_types->publish_property_type($id);

		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_property_types'), jr_gettext('_JOMRES_COM_PTYPES_SAVED', '_JOMRES_COM_PTYPES_SAVED', false));
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
