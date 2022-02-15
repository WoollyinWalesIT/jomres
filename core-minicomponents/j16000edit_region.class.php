<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
* @version Jomres 10.2.0
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

class j16000edit_region
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
		// Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
		$MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
		if ($MiniComponents->template_touch) {
			$this->template_touchable = false;

			return;
		}
		$id = intval(jomresGetParam($_REQUEST, 'id', 0));

		$siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
		$jrConfig = $siteConfig->get();

		$jomres_regions = jomres_singleton_abstract::getInstance('jomres_regions');
		if ($id > 0) {
			$region = $jomres_regions->get_region($id);
			$output[ 'ID' ] = $id;
			$output[ 'COUNTRYDROPDOWN' ] = createCountriesDropdown($region[ 'countrycode' ], 'countrycode', false);
			$output[ 'REGIONNAME' ] = $region[ 'regionname' ];
		} else {
			$region = array();
			$output[ 'ID' ] = 0;
			$output[ 'COUNTRYDROPDOWN' ] = createCountriesDropdown($jrConfig['limit_property_country_country'], 'countrycode', false);
			$output[ 'REGIONNAME' ] = '';
		}
		$output[ '_JOMRES_EDIT_REGION_TITLE' ] = jr_gettext('_JOMRES_EDIT_REGION_TITLE', '_JOMRES_EDIT_REGION_TITLE', false);
		$output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', '_JOMRES_EDIT_COUNTRY_COUNTRYNAME', false);
		$output[ '_JOMRES_EDIT_REGION_REGIONNAME' ] = jr_gettext('_JOMRES_EDIT_REGION_REGIONNAME', '_JOMRES_EDIT_REGION_REGIONNAME', false);

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();

		$jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=list_regions', '');
		$jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_region');
		if ($id > 0) {
			$jrtb .= $jrtbar->toolbarItem('delete', JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_region'.'&no_html=1&id='.$id, '');
		}
		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('edit_region.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
