<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j00006sanity_checks
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		if (!defined('JOMRES_NOHTML') || JOMRES_NOHTML == 0) {
			$thisJRUser = jomres_singleton_abstract::getInstance('jr_user');

			
			//if ($thisJRUser->accesslevel > 50) { //higher than receptionist
				$output = array();
				jr_import('jomres_sanity_check');
				$sanity_checks = new jomres_sanity_check();
				$output[ 'WARNINGS' ] = $sanity_checks->do_sanity_checks();
				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				$tmpl->readTemplatesFromInput('sanity_checks.html');
				set_showtime('sanity_check_warnings', $tmpl->getParsedTemplate());
			//}

			if ($thisJRUser->is_partner == true) {
				$output = array();
				jr_import('jomres_partner_sanity_check');
				$jomres_partner_sanity_check = new jomres_partner_sanity_check();
				$output[ 'WARNINGS' ] = $jomres_partner_sanity_check->do_sanity_checks();

				$pageoutput[ ] = $output;
				$tmpl = new patTemplate();
				$tmpl->addRows('pageoutput', $pageoutput);
				$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
				$tmpl->readTemplatesFromInput('sanity_checks.html');
				set_showtime('sanity_check_warnings', $tmpl->getParsedTemplate());
			}
		}
	}

/**
 * Must be included in every mini-component.
 #
 * Returns any settings the the mini-component wants to send back to the calling script. In addition to being returned to the calling script they are put into an array in the mcHandler object as eg. $mcHandler->miniComponentData[$ePoint][$eName]
 */
	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
