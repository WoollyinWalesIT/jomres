<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.1
 *
 * @copyright	2005-2023 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################
	#[AllowDynamicProperties]
	/**
	 * @package Jomres\Core\Minicomponents
	 *
	 *
	 */

class j06002unpublish_property
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

		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

		$defaultProperty = jomresGetParam($_REQUEST, 'property_uid', 0);

		if ($defaultProperty == 0) {
			$defaultProperty = getDefaultProperty();
		}

		if ($defaultProperty == 0) {
			return false;
		}

		$current_property_details = jomres_singleton_abstract::getInstance('basic_property_details');
		$current_property_details->gather_data($defaultProperty);

		$jomres_properties = jomres_singleton_abstract::getInstance('jomres_properties');
		$jomres_properties->propertys_uid = $defaultProperty;

		if (!$current_property_details->approved) {
			jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=cannot_redirect'), '');
		} else {
			$jomres_messaging = jomres_singleton_abstract::getInstance('jomres_messages');

			if (in_array($defaultProperty, $thisJRUser->authorisedProperties)) {
				if ($current_property_details->published) {
					if ($jomres_properties->setPublished(0)) {
						$MiniComponents->triggerEvent('02274'); // Optional trigger after property unpublished

						$jomres_messaging->set_message(jr_gettext('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', '_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY', false));
					} else {
						$jomres_messaging->set_message('There was a problem unpublishing the property.');
					}
				}
			} else {
				echo "You naughty little tinker, that's not your property";
				return false;
			}

		}
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL.'&task=listyourproperties'), '');


	}


	public function getRetVals()
	{
		return null;
	}
}
