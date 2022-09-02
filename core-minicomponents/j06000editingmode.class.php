<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.4
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

class j06000editingmode
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
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		$this->retVals = '';

		if (isset($componentArgs[ 'output_now' ])) {
			$output_now = $componentArgs[ 'output_now' ];
		} elseif (isset($_REQUEST['output_now']) ) {
			$output_now = (bool)$_REQUEST['output_now'];
		} else {
			$output_now = true;
		}

		$pageoutput = array();
		$output = array();

		$output['JOMRES_EDITING_MODE_HELP_TITLE'] = jr_gettext('JOMRES_EDITING_MODE_HELP_TITLE' , 'JOMRES_EDITING_MODE_HELP_TITLE' , false );
		$output['JOMRES_EDITING_MODE_HELP_LEAD'] = jr_gettext('JOMRES_EDITING_MODE_HELP_LEAD' , 'JOMRES_EDITING_MODE_HELP_LEAD' , false );
		$output['JOMRES_EDITING_MODE_HELP_INFO_1'] = jr_gettext('JOMRES_EDITING_MODE_HELP_INFO_1' , 'JOMRES_EDITING_MODE_HELP_INFO_1' , false );
		$output['JOMRES_EDITING_MODE_HELP_INFO_2'] = jr_gettext('JOMRES_EDITING_MODE_HELP_INFO_2' , 'JOMRES_EDITING_MODE_HELP_INFO_2' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE' , 'JOMRES_EDITING_MODE_HELP_STEPS_1_TITLE' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT' , 'JOMRES_EDITING_MODE_HELP_STEPS_1_TEXT' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE' , 'JOMRES_EDITING_MODE_HELP_STEPS_2_TITLE' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT' , 'JOMRES_EDITING_MODE_HELP_STEPS_2_TEXT' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE' , 'JOMRES_EDITING_MODE_HELP_STEPS_3_TITLE' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT' , 'JOMRES_EDITING_MODE_HELP_STEPS_3_TEXT' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE' , 'JOMRES_EDITING_MODE_HELP_STEPS_4_TITLE' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT' , 'JOMRES_EDITING_MODE_HELP_STEPS_4_TEXT' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE' , 'JOMRES_EDITING_MODE_HELP_STEPS_5_TITLE' , false );
		$output['JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT'] = jr_gettext('JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT' , 'JOMRES_EDITING_MODE_HELP_STEPS_5_TEXT' , false );


		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('editing_mode_help.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$editing_mode_help_output = $tmpl->getParsedTemplate();


			if ($output_now) {
				echo $editing_mode_help_output;
			} else {
				$this->retVals = $editing_mode_help_output;
			}

	}

	public function getRetVals()
	{
		return $this->retVals;
	}
}
