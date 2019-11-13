<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.20.0
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000refresh_library_packages
{
	public function __construct($componentArgs)
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;
			return;
		}

		if (isset($_REQUEST['go'])){
			if (isset($_REQUEST['package_manager_install'])) {
				jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=dashboard'), '');
			} else {
				$core_package_management = new core_package_management();
				$core_package_management->show_installer_html();
			}
		} else {
			$output = array();
			$pageoutput = array();
			
			$output['_JOMRES_LIBRARY_PACKAGES'] = jr_gettext('_JOMRES_LIBRARY_PACKAGES', '_JOMRES_LIBRARY_PACKAGES', false);
			$output['_JOMRES_LIBRARY_PACKAGES_DESC'] = jr_gettext('_JOMRES_LIBRARY_PACKAGES_DESC', '_JOMRES_LIBRARY_PACKAGES_DESC', false);
			$output['_JOMRES_LIBRARY_PACKAGES_REFRESH'] = jr_gettext('_JOMRES_LIBRARY_PACKAGES_REFRESH', '_JOMRES_LIBRARY_PACKAGES_REFRESH', false);
			
			$output['URL'] = JOMRES_SITEPAGE_URL_ADMIN_AJAX.'&task=refresh_library_packages&go=1'; 
			

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->readTemplatesFromInput('package_reinstallation.html');

			$tmpl->displayParsedTemplate();
		}
		
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
