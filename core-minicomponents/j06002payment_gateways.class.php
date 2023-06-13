<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 *  @version Jomres 10.7.2
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

class j06002payment_gateways
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
		$pageoutput = array();
		$output = array();
		$rows = array();

		$output['_JOMRES_COM_A_GATEWAYLIST'] = jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false);
		$output['_JOMRES_COM_A_GATEWAYLIST_INFO'] = jr_gettext('_JOMRES_COM_A_GATEWAYLIST_INFO', '_JOMRES_COM_A_GATEWAYLIST_INFO', false);

		jomres_set_page_title( 0 ,  jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false) );

		jr_import("gateway_plugin_settings");
		$plugin_settings = new gateway_plugin_settings();
		$gateway_settings = $plugin_settings->get_settings_for_property_uid(get_showtime('property_uid'));

		if (empty($gateway_settings)) { // No gateways installed

			return;
		}

		foreach ($gateway_settings as $gateway_name => $gw) {
			if (!isset($plugin_settings->gateway_settings[$gateway_name]['override'])) {
				$plugin_settings->gateway_settings[$gateway_name]['override'] = 0;
			}

			if ($plugin_settings->gateway_settings[$gateway_name]['override'] != '1') {
				$r=array();

				$r['TEST_MODE'] = jomres_badge( jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false) , 'success');
				if (isset($plugin_settings->gateway_settings[$gateway_name]['test_mode']) && $plugin_settings->gateway_settings[$gateway_name]['test_mode'] == "1" ) {
					$r['TEST_MODE'] = jomres_badge( jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false) , 'warning');
				}

				$r['_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR'] = jr_gettext('_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', '_JOMRES_COM_A_GATEWAYLIST_TEST_MODE_STR', false);

				$r['URL'] =jomresURL(JOMRES_SITEPAGE_URL.'&task=editGateway&plugin='.$gateway_name);
				$r['GATEWAY_NAME'] = ucfirst( str_replace("_" , " " , $gateway_name));
				$r['IMAGE'] = str_replace( [ '<IMG SRC="' , '" border="0">' ] , '' ,$gw['config_links'][ 'button' ]);
				$r['LINK'] = $gw['config_links'][ 'link' ];
				$r['_ADMIN_MENU_SECTIONS_SETTINGS'] = jr_gettext('_ADMIN_MENU_SECTIONS_SETTINGS', '_ADMIN_MENU_SECTIONS_SETTINGS', false);
				if ($gw[ 'active' ] == "1") {
					$r['ACTIVE'] = jomres_badge( jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false) , 'success');
				} else {
					$r['ACTIVE'] = jomres_badge(jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false) , 'danger');
				}
				$r['_JOMRES_COM_A_GATEWAY_ENABLED'] = jr_gettext('_JOMRES_COM_A_GATEWAY_ENABLED', '_JOMRES_COM_A_GATEWAY_ENABLED', false);


				$rows[] = $r;
			}
		}

		$output['_JOMRES_COM_A_GATEWAYLIST'] = jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false);
		$output['_JOMRES_COM_A_GATEWAYLIST_INFO'] = jr_gettext('_JOMRES_COM_A_GATEWAYLIST_INFO', '_JOMRES_COM_A_GATEWAYLIST_INFO', false);

		jomres_set_page_title( 0 ,  jr_gettext('_JOMRES_COM_A_GATEWAYLIST', '_JOMRES_COM_A_GATEWAYLIST', false) );

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('payment_gateways.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();

	}


	public function getRetVals()
	{
		return null;
	}
}
