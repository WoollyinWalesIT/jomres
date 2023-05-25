<?php
/**
* Jomres CMS Agnostic Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

// ################################################################
defined('_JOMRES_INITCHECK') or die('Direct Access to this file is not allowed.');
// ################################################################
	#[AllowDynamicProperties]
class j16000data_sources
{
	function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents =jomres_getSingleton('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable=false;
			return;
		}


		$jomres_data_source_maintainer = new jomres_data_source_maintainer();
		$jomres_data_source_maintainer->build_all_libraries();

		echo  jr_gettext("DATA_SOURCES_TITLE_INFO", 'DATA_SOURCES_TITLE_INFO', false);
	}

	// This must be included in every Event/Mini-component
	function getRetVals()
	{
		return null;
	}
}
