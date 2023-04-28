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
	 *
	 */

class j06000search_results_wrapper_top
{

	/**
	 *
	 * Constructor
	 *
	 * This minicomponent + wrapper_bottom and it's corresponding templates are holding scripts which don't do anything in jomres Core. They're intended to provide a mechanism for plugins to provide their own functionality to the search results page (e.g. sidebar widgets, columns, things like that)
	 *
	 *
	 *
	 */
	 
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

        if (AJAXCALL){
            return;
        }

        echo simple_template_output(JOMRES_TEMPLATEPATH_FRONTEND, 'search_results_wrapper_top.html', '' );
	}


	public function getRetVals()
	{
		return null;
	}
}
