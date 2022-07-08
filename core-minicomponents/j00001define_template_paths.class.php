<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.2
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
	 * Obsolete, as template overrides are better understood by users, but left in situ for historic users.
	 * 
	 */

class j00001define_template_paths
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

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();
		if (!isset($jrConfig[ 'bootstrap_version' ]) || $jrConfig[ 'bootstrap_version' ] == 0) {
			$jrConfig[ 'bootstrap_version' ] = '3';
		}

		if (!defined('JOMRES_TEMPLATEPATH_FRONTEND')) {
			if (!using_bootstrap()) {
				define('JOMRES_TEMPLATEPATH_FRONTEND', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'frontend');
			} else {
				define('JOMRES_TEMPLATEPATH_FRONTEND', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.$jrConfig[ 'bootstrap_version' ].JRDS.'frontend');
			}
		}

		if (!defined('JOMRES_TEMPLATEPATH_BACKEND')) {
			if (!using_bootstrap()) {
				define('JOMRES_TEMPLATEPATH_BACKEND', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'backend');
			} else {
				define('JOMRES_TEMPLATEPATH_BACKEND', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.$jrConfig[ 'bootstrap_version' ].JRDS.'backend');
			}
		}

		if (!defined('JOMRES_TEMPLATEPATH_ADMINISTRATOR')) {
			if (!using_bootstrap()) {
				define('JOMRES_TEMPLATEPATH_ADMINISTRATOR', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'jquery_ui'.JRDS.'administrator');
			} elseif (_JOMRES_DETECTED_CMS == 'joomla3' || this_cms_is_wordpress() ) {
				define('JOMRES_TEMPLATEPATH_ADMINISTRATOR', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.JRDS.'administrator');
			} else {
				define('JOMRES_TEMPLATEPATH_ADMINISTRATOR', JOMRESPATH_BASE.JRDS.'assets'.JRDS.'templates'.JRDS.'bootstrap'.$jrConfig[ 'bootstrap_version' ].JRDS.'administrator');
			}
		}
	}


	public function getRetVals()
	{
		return null;
	}
}
