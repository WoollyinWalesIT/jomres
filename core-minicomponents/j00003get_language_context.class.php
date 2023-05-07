<?php
	/**
	 * Core file.
	 *
	 * @author Vince Wooll <sales@jomres.net>
	 *
	  *  @version Jomres 10.7.0
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
	 * The script makes sure that the jomres_bootstrap_version is set before any other scripts are called, due to changes how J4 calls web assets we need to prioritise that variable
	 *
	 */

class j00003get_language_context
{
	/**
	 *
	 * Constructor
	 *
	 * Main functionality of the Minicomponent
	 *
	 * Language context is about the property type, and is used to determine which language strings to use. This script allows urls and/or shortcodes to set which language context to use over the course of the script's run.
	 *
     * It is designed to be used by shortcodes which will set their own language context by adding &language_context=XXX (eg &language_context=campsite) to the arguments. For that shortcode only, Jomres will use language strings set in the Translate Lang Files page for the appropriate property type.
     *
     * This may cause some confusion because subsequent ajax calls will not append language_context to subsequent urls, so the language context will revert to the default property type. This is inevitable and cannot be avoided.
     *
     * Different property types, however, when called (e.g. when basic module output function is used) will still pull language strings that are appropriate to its property type (language context). This means that even with language_context set in the url, views of individual properties will still show strings that are relevant for that particular property type. So, you can't use this script to set the language context for a property type and then expect to see the same language strings for all properties.
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

        $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
        $jrConfig = $siteConfig->get();

        $jomres_property_types = jomres_singleton_abstract::getInstance('jomres_property_types');
        $jomres_property_types->get_all_property_types();

        foreach ($jomres_property_types->property_types as $p) {
            if ( isset($p['ptype_desc']) && trim($p['ptype_desc']) != '') {
                $valid_property_types[] = $p['ptype_desc'];
            }
        }

        $language_context = jomresGetParam($_REQUEST, 'language_context', $jrConfig['language_context']);
        if (in_array($language_context , $valid_property_types)) {
            set_showtime('property_type', $language_context);
        }
	}


	public function getRetVals()
	{
		return null;
	}
}
