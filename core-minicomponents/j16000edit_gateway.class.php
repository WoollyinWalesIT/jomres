<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.19.1
 *
 * @copyright	2005-2019 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000edit_gateway
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$this->plugin = jomresGetParam($_REQUEST, 'plugin', '');

		//$settings = get_plugin_settings($this->plugin); // Can't use get_plugin_settings here as you'll disappear down the recursion rabbithole.
		$current_settings = array();
		$query = "SELECT setting,value FROM #__jomres_pluginsettings WHERE prid = 0 AND plugin = '".$this->plugin."' ";
		$settingsList = doSelectSql($query);
		foreach ($settingsList as $set) {
			$current_settings[ $set->setting ] = $set->value;
		}

		$output['GATEWAY'] = $this->plugin;

		$settings = $MiniComponents->specificEvent('10510', $this->plugin);
		$active['active'] = array(
			'default' => '0',
			'setting_title' => jr_gettext('_JOMRES_STATUS_ACTIVE', '_JOMRES_STATUS_ACTIVE'),
			'setting_description' => '',
			'format' => 'boolean',
			);

		$this->all_settings = array_merge($active, $settings['settings']);

		$results = array();
		foreach ($this->all_settings as $key => $setting) {
			if (isset($current_settings[$key])) {
				$setting['default'] = $current_settings[$key];
			}

			switch ($setting['format']) {
				case 'boolean':
						$results[] = $this->get_snippet_bool($key, $setting);
					break;
				case 'currencycode':
						$results[] = $this->get_snippet_currencycode($key, $setting);
					break;
				case 'input':
						$results[] = $this->get_snippet_input($key, $setting);
					break;
				case 'area':
						$results[] = $this->get_snippet_area($key, $setting);
					break;
				case 'html':
						$results[] = $this->get_snippet_html($key, $setting);
					break;
				case 'select':
						$results[] = $this->get_snippet_select($key, $setting);
					break;
				default:
				}
		}
		foreach ($results as $r) {
			$snippets[]['SNIPPET'] = $r;
		}

		$output['NOTES'] = $settings['notes'];

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=list_gateways', '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_gateway');
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_gateway.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('snippets', $snippets);
		$tmpl->displayParsedTemplate();
	}

		// Allows gateway developers to supply their own html if
	public function get_snippet_html($key, $setting)
	{
		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$index = $key;

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['HTML'] = $setting['html'];
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_gateway_snippet_html.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_area($key, $setting)
	{
		$index = $key;

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $setting['default'];
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_gateway_snippet_area.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_input($key, $setting)
	{
		$index = $key;

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $setting['default'];
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_gateway_snippet_input.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_currencycode($key, $setting)
	{
		$index = $key;

		$currency_codes = jomres_singleton_abstract::getInstance('currency_codes');
		$currency_codes_dropdown = $currency_codes->makeCodesDropdown('', false, $index);

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['SWITCH'] = $currency_codes_dropdown;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_gateway_snippet_currencycode.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_bool($key, $setting)
	{
		$index = $key;

		$yesno = array();
		$yesno[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

		$input = jomresHTML::selectList($yesno, $index, 'class="inputbox" size="1"', 'value', 'text', $setting['default']);

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['SWITCH'] = $input;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_gateway_snippet_bool.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_select($key, $setting)
	{
		if (isset($setting['options']) && is_array($setting['options'])) {
			$index = $key;

			$options = array();
			foreach ($setting['options'] as $selection => $text) {
				$options[] = jomresHTML::makeOption($selection, $text);
			}

			$input = jomresHTML::selectList($options, $index, 'class="inputbox" size="1"', 'value', 'text', $setting['default']);

			$output = array();
			$pageoutput = array();

			$output['INPUT_NAME'] = $index;
			$output['SWITCH'] = $input;
			$output['TITLE'] = $setting['setting_title'];
			$output['DESCRIPTION'] = $setting['setting_description'];

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->readTemplatesFromInput('edit_gateway_snippet_select.html');
			$tmpl->addRows('pageoutput', $pageoutput);

			return $tmpl->getParsedTemplate();
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
