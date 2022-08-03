<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.5.3
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

class j16000save_gateway
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

			return;
		}

		$plugin = (string) jomresGetParam($_REQUEST, 'plugin', '');
		$gateway = (string) jomresGetParam($_REQUEST, 'gateway', '');

		foreach ($_POST as $k => $v) {
			$dirty = (string) $k;
			$k = filter_var($dirty, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
			if ($k != 'task' && $k != 'plugin' && $k != 'nohtml') {
				$values[ $k ] = jomresGetParam($_POST, $k, '');
			}
		}

		foreach ($values as $k => $v) {
			$query = "SELECT id FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = '$plugin' AND setting = '$k'";
			$settingList = doSelectSql($query);
			if (!empty($settingList)) {
				$query = "UPDATE #__jomres_pluginsettings SET `value`='$v' WHERE prid = 0 AND plugin = '$plugin' AND setting = '$k'";
				doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_UPDATE', '_JOMRES_MR_AUDIT_PLUGINS_UPDATE', false));
			} else {
				$query = "INSERT INTO #__jomres_pluginsettings
					(`prid`,`plugin`,`setting`,`value`) VALUES
					(0,'$plugin','$k','$v')";
				doInsertSql($query, jr_gettext('_JOMRES_MR_AUDIT_PLUGINS_INSERT', '_JOMRES_MR_AUDIT_PLUGINS_INSERT', false));
			}
		}
		jomresRedirect(jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=list_gateways'), '');
	}


	public function getRetVals()
	{
		return null;
	}
}
