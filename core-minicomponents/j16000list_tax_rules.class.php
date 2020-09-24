<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.23.6
 *
 * @copyright	2005-2020 Vince Wooll
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

class j16000list_tax_rules
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
		$editIcon = '<img src="'.JOMRES_IMAGES_RELPATH.'jomresimages/small/EditItem.png" border="0" alt="editicon" />';

		$jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

		$output = array();
		$pageoutput = array();
		$rows = array();

		$query = 'SELECT `id`,`tax_rate_id`,`country_id`,`region_id` FROM #__jomres_tax_rules';
		$all_tax_rules = doSelectSql($query);

		$output[ 'PAGETITLE' ] = jr_gettext('_JOMRES_TAX_RULES_LIST', '_JOMRES_TAX_RULES_LIST', false);
		$output[ '_JRPORTAL_TAXRATES_CODE' ] = jr_gettext('_JRPORTAL_TAXRATES_CODE', '_JRPORTAL_TAXRATES_CODE', false);
		$output[ '_JRPORTAL_TAXRATES_DESCRIPTION' ] = jr_gettext('_JRPORTAL_TAXRATES_DESCRIPTION', '_JRPORTAL_TAXRATES_DESCRIPTION', false);
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
		$output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
		$output[ '_JRPORTAL_TAXRATES_RATE' ] = jr_gettext('_JRPORTAL_TAXRATES_RATE', '_JRPORTAL_TAXRATES_RATE', false);
		$output[ '_JOMRES_TAX_RULE_INFO' ] = jr_gettext('_JOMRES_TAX_RULE_INFO', '_JOMRES_TAX_RULE_INFO', false);

		$jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
		$jomres_countries->get_all_countries();

		foreach ($all_tax_rules as $rule) {
			$r = array();
			$r[ 'ID' ] = $rule->id;
			$rate_id = $rule->tax_rate_id;

			foreach ($jomres_countries->countries as $c) {
				if ($c['id'] == $rule->country_id) {
					$r[ 'COUNTRY' ] = $c['countryname'];
					break;
				}
			}

			$r[ 'REGION' ] = find_region_name($rule->region_id);
			$r[ 'CODE' ] = $jrportal_taxrate->taxrates[$rate_id]['code'];
			$r[ 'RATE' ] = $jrportal_taxrate->taxrates[$rate_id]['rate'];
			$r[ 'DESCRIPTION' ] = $jrportal_taxrate->taxrates[$rate_id]['description'];

			$r[ 'EDITLINK' ] = '<a href="'.JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_tax_rule&id='.$rule->id.'">'.$editIcon.'</a>';
			$rows[ ] = $r;
		}

		$jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
		$jrtb = $jrtbar->startTable();
		$jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
		$jrtb .= $jrtbar->toolbarItem('new', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_tax_rule'), '');

		$jrtb .= $jrtbar->endTable();
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

		$pageoutput[ ] = $output;
		$tmpl = new patTemplate();
		$tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
		$tmpl->readTemplatesFromInput('list_tax_rules.html');
		$tmpl->addRows('pageoutput', $pageoutput);
		$tmpl->addRows('rows', $rows);
		$tmpl->displayParsedTemplate();
	}


	public function getRetVals()
	{
		return null;
	}
}
