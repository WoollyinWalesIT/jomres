<?php
/**
 * Core file.
 *
 * @author Vince Wooll <sales@jomres.net>
 *
 * @version Jomres 9.9.16
 *
 * @copyright	2005-2017 Vince Wooll
 * Jomres (tm) PHP, CSS & Javascript files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly
 **/

// ################################################################
defined('_JOMRES_INITCHECK') or die('');
// ################################################################

class j16000list_countries
{
    public function __construct()
    {
        // Must be in all minicomponents. Minicomponents with templates that can contain editable text should run $this->template_touch() else just return
        $MiniComponents = jomres_singleton_abstract::getInstance('mcHandler');
        if ($MiniComponents->template_touch) {
            $this->template_touchable = false;

            return;
        }
		
        $rows = array();
        $output = array();
        $pageoutput = array();

        $output[ '_JOMRES_EDIT_COUNTRY_TITLE' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_TITLE', '_JOMRES_EDIT_COUNTRY_TITLE', false);
        $output[ '_JOMRES_EDIT_COUNTRY_ID' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_ID', '_JOMRES_EDIT_COUNTRY_ID', false);
        $output[ '_JOMRES_EDIT_COUNTRY_COUNTRYCODE' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_COUNTRYCODE', '_JOMRES_EDIT_COUNTRY_COUNTRYCODE', false);
        $output[ '_JOMRES_EDIT_COUNTRY_COUNTRYNAME' ] = jr_gettext('_JOMRES_EDIT_COUNTRY_COUNTRYNAME', '_JOMRES_EDIT_COUNTRY_COUNTRYNAME', false);

        $jomres_countries = jomres_singleton_abstract::getInstance('jomres_countries');
		$jomres_countries->get_all_countries();

        if (empty($jomres_countries->countries)) {
            import_countries();
        }
		
		jomres_cmsspecific_addheaddata("css",JOMRES_ROOT_DIRECTORY.'/css/flag-icon-css/css/','flag-icon.min.css');

        foreach ($jomres_countries->countries as $country) {
            $r = array();
            $r[ 'COUNTRYNAME' ] = $country[ 'countryname' ];
            $r[ 'COUNTRYCODE' ] = $country[ 'countrycode' ];
			$r[ 'FLAG' ] = '<span class="flag-icon flag-icon-'.strtolower($country[ 'countrycode' ]).'"></span>';

            $toolbar = jomres_singleton_abstract::getInstance('jomresItemToolbar');
			$toolbar->newToolbar();
			$toolbar->addItem('fa fa-pencil-square-o', 'btn btn-info', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_country&id='.$country[ 'id' ]), jr_gettext('COMMON_EDIT', 'COMMON_EDIT', false));
			$toolbar->addSecondaryItem('fa fa-trash-o', '', '', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=delete_country&id='.$country[ 'id' ]), jr_gettext('COMMON_DELETE', 'COMMON_DELETE', false));

			$r['EDITLINK'] = $toolbar->getToolbar();

            $rows[ ] = $r;
        }

        $jrtbar = jomres_singleton_abstract::getInstance('jomres_toolbar');
        $jrtb = $jrtbar->startTable();
        $jrtb .= $jrtbar->toolbarItem('cancel', jomresURL(JOMRES_SITEPAGE_URL_ADMIN), '');
        $jrtb .= $jrtbar->toolbarItem('new', jomresURL(JOMRES_SITEPAGE_URL_ADMIN.'&task=edit_country'), '');
        $jrtb .= $jrtbar->endTable();
        
		$output[ 'JOMRESTOOLBAR' ] = $jrtb;

        $pageoutput[ ] = $output;
        $tmpl = new patTemplate();
        $tmpl->setRoot(JOMRES_TEMPLATEPATH_ADMINISTRATOR);
        $tmpl->readTemplatesFromInput('list_countries.html');
        $tmpl->addRows('pageoutput', $pageoutput);
        $tmpl->addRows('rows', $rows);
        $tmpl->displayParsedTemplate();
    }

    // This must be included in every Event/Mini-component
    public function getRetVals()
    {
        return null;
    }
}
