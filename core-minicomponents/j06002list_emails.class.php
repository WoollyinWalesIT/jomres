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

class j06002list_emails
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

		$ePointFilepath = get_showtime('ePointFilepath');
		$defaultProperty = getDefaultProperty();

		$toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');

		$output = array();
		$rows = array();

		$output['PAGETITLE'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_TITLE', '_JOMRES_EMAIL_TEMPLATES_TITLE', false);
		$output['HEMAIL_TYPE'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_TYPE', '_JOMRES_EMAIL_TEMPLATES_TYPE', false);
		$output['HEMAIL_NAME'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_NAME', '_JOMRES_EMAIL_TEMPLATES_NAME', false);
		$output['HEMAIL_DESC'] = jr_gettext('_JOMRES_EMAIL_TEMPLATES_DESC', '_JOMRES_EMAIL_TEMPLATES_DESC', false);

		$MiniComponents->triggerEvent('03150');

		foreach ($MiniComponents->miniComponentData[ '03150' ] as $t) {
			$r = array();
			$r['EMAIL_TYPE'] = $t['type'];
			$r['EMAIL_NAME'] = $t['name'];
			$r['EMAIL_DESC'] = $t['desc'];

			if (!using_bootstrap()) {
				$jrtbar = jomres_getSingleton('jomres_toolbar');
				$jrtb = $jrtbar->startTable();
				$jrtb .= $jrtbar->toolbarItem('edit', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_email&email_type='.$t['type']), '');
				$jrtb .= $jrtbar->endTable();
				$r['EDITLINK'] = $jrtb;
			} else {
				$toolbar->newToolbar();
				$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL.'&task=edit_email&email_type='.$t['type']), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
				$r['EDITLINK'] = $toolbar->getToolbar();
			}

			$rows[] = $r;
		}

		$pageoutput[] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_BACKEND);
		$tmpl->readTemplatesFromInput('list_emails.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
