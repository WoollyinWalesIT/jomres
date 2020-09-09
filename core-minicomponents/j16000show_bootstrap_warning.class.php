<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.5
 *
 * @copyright	2005-2020 Vince Wooll
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

class j16000show_bootstrap_warning
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
		jr_import('minicomponent_registry');
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} else {
			$output_now = true;
		}

		$output = array();
		$pageouput = array();

		$output['_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE'] = jr_gettext('_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', '_JOMRES_BOOTSTRAP_OFF_WARNING_TITLE', false, false);
		$output['_JOMRES_BOOTSTRAP_OFF_WARNING'] = jr_gettext('_JOMRES_BOOTSTRAP_OFF_WARNING', '_JOMRES_BOOTSTRAP_OFF_WARNING', false, false);

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->readTemplatesFromInput('bootstrap_warning.html');
		$rendered_template = $tmpl->getParsedTemplate();

		if ($output_now) {
			echo $rendered_template;
		} else {
			$this->retVals = $rendered_template;
		}
	}


	public function getRetVals()
	{
		return $this->retVals;
	}
}
