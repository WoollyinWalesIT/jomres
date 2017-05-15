<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.8.29
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000edit_tax_rule
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
        $id = intval(jomresGetParam($_REQUEST, 'id', 0));

        $jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
		$jomres_countries->get_all_countries();

        $jrportal_taxrate = jomres_singleton_abstract::getInstance('jrportal_taxrate');

        $output[ 'PAGETITLE' ] = jr_gettext('_JRPORTAL_TAX_RULE_EDIT', '_JRPORTAL_TAX_RULE_EDIT', false);
        $output[ '_JRPORTAL_TAXRATES_CODE' ] = jr_gettext('_JRPORTAL_TAXRATES_CODE', '_JRPORTAL_TAXRATES_CODE', false);
        $output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY', false);
        $output[ '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION' ] = jr_gettext('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', '_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION', false);
        $output[ '_JRPORTAL_TAXRATES_RATE' ] = jr_gettext('_JRPORTAL_TAXRATES_RATE', '_JRPORTAL_TAXRATES_RATE', false);

        if ($id > 0) {
            $query = 'SELECT `tax_rate_id`,`country_id`,`region_id` FROM #__jomres_tax_rules WHERE id='.$id.' LIMIT 1';
            $tax_rule = doSelectSql($query, 2);
            $output[ 'ID' ] = $id;
            foreach ($jomres_countries->countries as $c) {
                if ($c['id'] == $tax_rule[ 'country_id' ]) {
                    $output[ 'COUNTRY' ] = createSimpleCountriesDropdown($c[ 'countrycode' ]);
                    break;
                }
            }
            $output[ 'REGION' ] = setupRegions($c[ 'countrycode' ], find_region_name($tax_rule[ 'region_id' ]));

            $output[ 'TAX_RATE' ] = $jrportal_taxrate->makeTaxratesDropdown($tax_rule[ 'tax_rate_id' ], 'tax_rate');
        } else {
            $siteConfig = jomres_singleton_abstract::getInstance('jomres_config_site_singleton');
            $jrConfig = $siteConfig->get();
            $output[ 'COUNTRY' ] = createSimpleCountriesDropdown($jrConfig[ 'limit_property_country_country' ], 'country', false);
            $output[ 'REGION' ] = setupRegions($jrConfig[ 'limit_property_country_country' ]);
            $output[ 'TAX_RATE' ] = $jrportal_taxrate->makeTaxratesDropdown(1, 'tax_rate');
        }

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('cancel', JOMRES_SITEPAGE_URL_ADMIN.'&task=list_tax_rules', '');
        $jrtb .= $jrtbar->toolbarItem('save', '', '', true, 'save_tax_rule');
        $jrtb .= $jrtbar->toolbarItem('delete', JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_tax_rule'.'&no_html=1&id='.$id, '');
        $jrtb .= $jrtbar->endTable();
        $output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('edit_tax_rule.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
