<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.6.0
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
	 * Builds the property comparison page from the list properties page
	 *
	 */

class j06000typography
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			$this->shortcode_data = array(
					'task' => 'compare',
					'arguments' => array(0 => array(
							'argument' => 'property_uids',
							'arg_info' => '_JOMRES_SHORTCODES_06000COMPARE_ARG_PROPERTY_UIDS',
							'arg_example' => '12,8,7',
							),
						),
					'info' => '_JOMRES_SHORTCODES_06000COMPARE',
				);

			return;
		}


		$output = array();

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_FRONTEND);
			$tmpl->readTemplatesFromInput('typography.html');
			$tmpl->displayParsedTemplate();
	}

	public function getRetVals()
	{
		return null;
	}
}
