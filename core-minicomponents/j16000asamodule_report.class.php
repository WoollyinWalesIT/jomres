<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.13.0
 *
 * @copyright	2005-2018 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000asamodule_report
{
	public function __construct()
	{
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');

		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$jomres_shortcode_parser = jomres_singleton_abstract::getInstance('jomres_shortcode_parser');
		$jomres_shortcode_parser->get_shortcodes();

		$jomres_language = jomres_singleton_abstract::getInstance('jomres_language');
		$jomres_language->get_language('shortcodes');

		$output = array();
		$rows = array();
		$pageoutput = array();

		if (is_array($jomres_shortcode_parser->shortcodes)) {
			$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_SHORTCODES', '_JOMRES_SHORTCODES', false);
			$output[ 'SHORTCODE_TRIGGER' ] = jr_gettext('SHORTCODE_TRIGGER', 'SHORTCODE_TRIGGER', false);
			$output[ 'SHORTCODE_TASK' ] = jr_gettext('SHORTCODE_TASK', 'SHORTCODE_TASK', false);
			$output[ 'SHORTCODE_DESCRIPTION' ] = jr_gettext('SHORTCODE_DESCRIPTION', 'SHORTCODE_DESCRIPTION', false);
			$output[ 'SHORTCODE_ARGUMENTS' ] = jr_gettext('SHORTCODE_ARGUMENTS', 'SHORTCODE_ARGUMENTS', false);
			$output[ 'SHORTCODE_EXAMPLE' ] = jr_gettext('SHORTCODE_EXAMPLE', 'SHORTCODE_EXAMPLE', false);

			if (this_cms_is_wordpress()) {
				$output[ 'INFO' ] = jr_gettext('_JOMRES_SHORTCODES_INFO_WORDPRESS', '_JOMRES_SHORTCODES_INFO_WORDPRESS', false);
			} else {
				$output[ 'INFO' ] = jr_gettext('_JOMRES_SHORTCODES_INFO_JOOMLA', '_JOMRES_SHORTCODES_INFO_JOOMLA', false);
			}

			$rows = array();
			foreach ($jomres_shortcode_parser->shortcodes as $key => $trigger) {
				if (!empty($trigger)) {
					foreach ($trigger as $task) {
						$r = array();

						$r['TRIGGER'] = $key;
						$r['TASK'] = $task['task'];
						$r['DESCRIPTION'] = jr_gettext($task['info'], $task['info'], false);

						$r['ARGUMENTS'] = '';
						$arguments = array();

						if (!empty($task['arguments'])) {
							foreach ($task['arguments'] as $arg) {
								$o = array();
								$po = array();

								$o['ARGUMENT'] = $arg['argument'];
								$o['ARG_INFO'] = jr_gettext($arg['arg_info'], $arg['arg_info'], false);
								$o['ARG_EXAMPLE'] = '';
								if (isset($arg['arg_example'])) {
									$arguments[ $arg['argument'] ] = $arg['arg_example'];
								}

								$po[ ] = $o;
								$tmpl = new patTemplate();
								$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
								$tmpl->readTemplatesFromInput('shortcode_snippet.html');
								$tmpl->addRows('pageoutput', $po);
								$r['ARGUMENTS'] .= $tmpl->getParsedTemplate();
							}
						}

						$arg_str = '';
						if (!empty($arguments)) {
							foreach ($arguments as $parameter => $example) {
								$arg_str .= '&'.$parameter.'='.$example;
							}

							if (this_cms_is_wordpress()) {
								$arg_str = 'params="'.$arg_str.'"';
							}
						}

						if (this_cms_is_wordpress()) {
							$r['EXAMPLE'] = '[jomres task="'.$r['TASK'].'" '.$arg_str.']';
						} else {
							$r['EXAMPLE'] = '{jomres '.$r['TASK'].' '.$arg_str.'}';
						}
						$r['EXAMPLE'] = str_replace('&', '&amp;', $r['EXAMPLE']);

						$rows[] = $r;
					}
				}
			}

			$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
			$jrtb = $jrtbar->startTable();
			$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');

			$jrtb .= $jrtbar->endTable();
			$output[ 'JOMRESTOOLBAR' ] = $jrtb;

			$pageoutput[ ] = $output;

			$tmpl = new patTemplate();
			$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
			$tmpl->readTemplatesFromInput('list_shortcodes.html');
			$tmpl->addRows('pageoutput', $pageoutput);
			$tmpl->addRows('rows', $rows);
			$tmpl->displayParsedTemplate();
		} else {
			echo 'Error, shortcodes cannot be displayed. Try rebuilding the registry then come back to this page.';
		}
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
