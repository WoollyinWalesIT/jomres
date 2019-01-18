<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.16.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000list_gateways
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$gateway_plugins = array();

		$MiniComponents->triggerEvent('10509', array('show_anyway' => true));
		$mcOutput = $MiniComponents->getAllEventPointsData('10509');
		if (!empty($mcOutput)) {
			foreach ($mcOutput as $key => $val) {
				$gateway_plugins[] = $val;
			}
		}

		if (!empty($gateway_plugins)) {
			$output[ '_JOMRES_COM_A_GATEWAY_ENABLED' ] = jr_gettext('_JOMRES_COM_A_GATEWAY_ENABLED', '_JOMRES_COM_A_GATEWAY_ENABLED', false);
			$output[ 'TOUR_ID_TAB_GATEWAYS_TITLE' ] = jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false);
			$output[ 'GATEWAYS_INSTRUCTIONS' ] = jr_gettext('GATEWAYS_INSTRUCTIONS', 'GATEWAYS_INSTRUCTIONS', false);

			$rows = array();
			
			$gateway_names = array();
			foreach ($gateway_plugins as $gw ) {
				$gateway_names[] = $gw['name'];
				}
			$global_gateway_settings = array();
				
			$query = "SELECT `plugin`,`setting`,`value` FROM #__jomres_pluginsettings WHERE `plugin` IN ( ".jomres_implode($gateway_names, false).' ) AND prid = 0';
			$plugin_settings = doSelectSql($query);

			if (!empty($plugin_settings)) {
				foreach ($plugin_settings as $setting ) {
					$global_gateway_settings[$setting->plugin][$setting->setting] = $setting->value;
					}
				}
 
			foreach ($gateway_plugins as $gateway) {
				$r = array();
				$gateway_name = $gateway['name'];
				if (isset($global_gateway_settings[$gateway_name]['active']) && $global_gateway_settings[$gateway_name]['active'] == '1') {
					$r['ACTIVE'] = jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false);
				} else {
					$r['ACTIVE'] = jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false);
				}

				$r['GATEWAY_NAME'] = $gateway['friendlyname'];

				if (!using_bootstrap()) {
					$editIcon = '<img src="'.JOMRES_IMAGES_RELPATH.'jomresimages/small/EditItem.png" border="0" alt="editicon" />';

					$r['EDITLINK'] = '<a href="'.jomresUrl(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_gateway&plugin='.$gateway['name']).'">'.$editIcon.'</a>';
				} else {
					$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
					$toolbar->newToolbar();
					$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_gateway&plugin='.$gateway['name']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));

					$r['EDITLINK'] = $toolbar->getToolbar();
				}

				$rows[ ] = $r;
			}

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->readTemplatesFromInput('list_gateways.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->displayParsedTemplate();
		} else {
			echo 'No gateways installed';
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
