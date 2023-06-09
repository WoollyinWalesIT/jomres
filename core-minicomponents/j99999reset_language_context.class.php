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

class j99999reset_language_context
{

	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 * Originally set in framework.php, old_language_context is used to store the original language context/property_type setting, so that we can reset it after the language context has been changed by a shortcode typically, although it can also be changed in list properties when a specific property's language strings are loaded (for example).
	 *
	 */
	 
	public function __construct($componentArgs)
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$original_language_context = get_showtime('old_language_context');
		if (!is_null($original_language_context)) {
			set_showtime('property_type', $original_language_context);
			set_showtime('old_language_context', null );
		}
	}

	public function getRetVals()
	{
		return null;
	}
}
