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
defined( '_JOMRES_INITCHECK' ) or die( '' );
// ################################################################

class j06002ajax_webhooks_build_auth_form {
	function __construct($componentArgs) { 
		$MiniComponents = jomres_singleton_abstract::getInstance( 'mcHandler' );
		if ( $MiniComponents->template_touch ) {
			$this->template_touchable = false;
			return;
			}

		$found_webhook_minicomponents = array();
		foreach ($MiniComponents->registeredClasses['07300'] as $eventName => $eventDetails) {
		   $found_webhook_minicomponents[]=$eventName;
		}
		
		if (empty($found_webhook_minicomponents)) {
			throw new Exception("Error: Oops, you can't create a new Webhook integration until you've installed at least one webhook integration method/plugin");
		}
		
		$this->retVals = null;
		
		if (isset($componentArgs[ 'auth_method' ])) {
			$auth_method		= (string) $componentArgs[ 'auth_method' ];
			$integration_id	 = (int) $componentArgs[ 'integration_id' ];
		} elseif (isset($_REQUEST['auth_method'])) {
			$auth_method		= (string) jomresGetParam($_REQUEST, 'auth_method', '');
			$integration_id	 = (int) jomresGetParam($_REQUEST, 'integration_id', '');
		} else {
			return;
		}
		
		if (isset($componentArgs['output_now'])) {
			$output_now = $componentArgs['output_now'];
		} else {
			$output_now = true;
		}
		
		$this->ePointFilepath=get_showtime('ePointFilepath');
		$thisJRUser = jomres_singleton_abstract::getInstance( 'jr_user' );
		
		jr_import("webhooks");
		$webhooks = new webhooks($thisJRUser->id);
		$all_webhooks = $webhooks->get_all_webhooks();
		if (isset($all_webhooks[$integration_id]))
			$webhook_setting = $all_webhooks[$integration_id];

		$MiniComponents->triggerEvent('07300');  // As the authentication methods aren't relevent to front or backend they are numbered in the 07000s
		$authentication_methods = get_showtime('authentication_methods');

		if (!isset( $authentication_methods[$auth_method]))
			throw new Exception('Error: Authentication method not recognised.');

		$snippets = array ();
		
		$results = array();
		foreach ($authentication_methods[$auth_method]['fields'] as $key => $setting) {

			 if (!isset($webhook_setting['settings'][$key])) {
				 $webhook_setting['settings'][$key] = $setting['default'];
			} 

			switch ($setting['format']) {
				case 'boolean':
						$results[] = $this->get_snippet_bool($key, $setting , $webhook_setting['settings'][$key] );
					break;
				case 'input':
						$results[] = $this->get_snippet_input($key, $setting , $webhook_setting['settings'][$key] );
					break;
				case 'password':
						$results[] = $this->get_snippet_password($key, $setting , $webhook_setting['settings'][$key] );
					break;
				case 'area':
						$results[] = $this->get_snippet_area($key, $setting , $webhook_setting['settings'][$key] );
					break;
				case 'html':
						$results[] = $this->get_snippet_html($key, $setting , $webhook_setting['settings'][$key] );
					break;
				case 'select':
						$results[] = $this->get_snippet_select($key, $setting , $webhook_setting['settings'][$key] );
					break;
				default:
				}
		}
		foreach ($results as $r) {
			$snippets[]['SNIPPET'] = $r;
		}

		$output['NOTES'] = '';
		if (isset($authentication_methods[$auth_method]['notes']))
			$output['NOTES'] = $authentication_methods[$auth_method]['notes'];
		
		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_integration_auth_method.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('snippets', $snippets);
		$form = $tmpl->getParsedTemplate();
		
		if ($output_now) {
			echo $form;
		} else {
			$this->retVals = $form;
		}
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
		$output['HTML'] = $webhook_setting;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_integration_snippet_html.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_area($key, $setting , $webhook_setting )
	{
		$index = $key;

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $webhook_setting;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_integration_snippet_area.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_input($key, $setting , $webhook_setting )
	{
		$index = $key;

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $webhook_setting;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_integration_snippet_input.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_password($key, $setting , $webhook_setting )
	{
		$index = $key;

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['VALUE'] = $webhook_setting;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_integration_snippet_password.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}
 
	public function get_snippet_bool($key, $setting , $webhook_setting )
	{
		$index = $key;

		$yesno = array();
		$yesno[] = jomresHTML::makeOption('0', jr_gettext('_JOMRES_COM_MR_NO', '_JOMRES_COM_MR_NO', false));
		$yesno[] = jomresHTML::makeOption('1', jr_gettext('_JOMRES_COM_MR_YES', '_JOMRES_COM_MR_YES', false));

		$input = jomresHTML::selectList($yesno, $index, 'class="inputbox" size="1"', 'value', 'text', $webhook_setting);

		$output = array();
		$pageoutput = array();

		$output['INPUT_NAME'] = $index;
		$output['SWITCH'] = $input;
		$output['TITLE'] = $setting['setting_title'];
		$output['DESCRIPTION'] = $setting['setting_description'];

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('edit_integration_snippet_bool.html');
		$tmpl->addRows('pageoutput', $pageoutput);

		return $tmpl->getParsedTemplate();
	}

	public function get_snippet_select($key, $setting , $webhook_setting )
	{
		if (isset($setting['options']) && is_array($setting['options'])) {
			$index = $key;

			$options = array();
			foreach ($setting['options'] as $selection => $text) {
				$options[] = jomresHTML::makeOption($selection, $text);
			}

			$input = jomresHTML::selectList($options, $index, 'class="inputbox" size="1"', 'value', 'text', $webhook_setting);

			$output = array();
			$pageoutput = array();

			$output['INPUT_NAME'] = $index;
			$output['SWITCH'] = $input;
			$output['TITLE'] = $setting['setting_title'];
			$output['DESCRIPTION'] = $setting['setting_description'];

			$pageoutput[ ] = $output;
			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
			$tmpl->readTemplatesFromInput('edit_integration_snippet_select.html');
			$tmpl->addRows('pageoutput', $pageoutput);

			return $tmpl->getParsedTemplate();
		}
	}


	// This must be included in every Event/Mini-component
	function getRetVals() {
		return $this->retVals;
	}
}