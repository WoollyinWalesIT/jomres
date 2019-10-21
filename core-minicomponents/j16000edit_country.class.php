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

class j16000edit_country
{
	public function __construct()
	{
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}

		$output = array();
		$pageoutput = array();

		$id = intval(jomresGetParam($_REQUEST, 'id', 0));
		$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
		$country = $jomres_countries->get_country_by_id($id);

		$output[ '_JOMRES_EDIT_COUNTRY_TITLE' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_TITLE', '_JOMRES_EDIT_COUNTRY_TITLE', false);
		$output[ '_JOMRES_EDIT_COUNTRY_ID' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_ID', '_JOMRES_EDIT_COUNTRY_ID', false);
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYCODE' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', '_JOMRES_EDIT_COUNTRY_COUNTRYCODE', false);
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', '_JOMRES_EDIT_COUNTRY_COUNTRYNAME', false);

		$output[ 'ID' ] = $country[ 'id' ];
		$output[ 'COUNTRYCODE' ] = $country[ 'countrycode' ];
		$output[ 'COUNTRYNAME' ] = $country[ 'countryname' ];

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=list_countries', '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_country');
		if ($id > 0) {
			$jrtb .= $jrtbar->toolbarItem('delete', JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_country&no_html=1&id='.$id, '');
		}
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_country.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}

	// This must be included in every Event/Mini-component
	public function getRetVals()
	{
		return null;
	}
}
